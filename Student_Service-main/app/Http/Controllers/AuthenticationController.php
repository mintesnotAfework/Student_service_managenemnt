<?php

namespace App\Http\Controllers;

use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function login(){
        return view("authentication.login");
    }

    public function authenticate(Request $request){
        $form_validated = $request->validate([
            'id'=>'required|integer|exists:user_profiles,special_id',
            'password'=>'required|min:8'
        ]);

        $user_profile = UserProfile::where("special_id",$form_validated['id'])->get();
        $request['email'] = $user_profile[0]->user->email;

        // Attempt login using credentials from the request
        if (Auth::attempt($request->only("email","password"),$remember=true)) {
            // User was authenticated successfully
            
            if(isset(auth()->user()->student)){
                return redirect(route("student.profile"));
            }
            else if(isset(auth()->user()->parent)){
                return redirect()->route("parent.list");
            }
            else if(isset(auth()->user()->admin)){
                return redirect(route("admin.student.list"));
            }
        }
        return redirect()->back();

    }

    public function logout_confirmation(){
        return view("authentication.logout");
    }

    public function logout(){
        Auth::logout();
        return redirect(route("authentication.login"));
    }
}
