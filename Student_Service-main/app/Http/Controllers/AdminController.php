<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AdminController extends Controller
{
    public function index(){
        $parents = Admin::all();
        return view("admin.admin.list")->with("admins",$parents);
    }

    public function create(){
        $admin = Admin::all();
        if (isset($admin[0] -> id)){
            return redirect(route("admin.admin.edit",$admin[0]->id));
        }
        else{
            return view("admin.admin.register");
        }
    }

    public function store(Request $request){
        $admin = Admin::all();
        if (isset($admin[0] -> id)){
            return redirect(route("admin.admin.edit",$admin[0]->id));
        }
        else{
            $user_validated = $request->validate([
            "name"=>"required|string|max:64|min:3",
            "email"=>"required|email|max:250",
            'password' => 'required|confirmed|min:8|max:255', // Enforce minimum password length
        ]);

        $user_profile_validated = $request->validate([
            "profile"=>"required|image",
            "full_name"=>"required|string|max:50|min:5",
            "id"=>"required|integer|unique:user_profiles,special_id",
            "birthday"=>"required|date"
        ]);

        $minAge = 18; // Adjust minimum age as needed

        if (Carbon::parse($request->birthday)->diffInYears(Carbon::now()) < $minAge) {
            return back()->withErrors(['birthday' => 'You must be at least 18 years old.']);
        }

        $user_profile_validated["special_id"] = $user_profile_validated["id"];
        unset($user_profile_validated["id"]);

        $user = User::create($user_validated);
        $user_profile_validated["user_id"] = $user->id;
        $admin_validated["user_id"] = $user->id;

        $user_profile = UserProfile::create($user_profile_validated);
        if ($request->hasFile("profile")){
            $newNameImage = time() . "-" . $user_profile_validated["special_id"] . "mintesnot." . $user_profile_validated["profile"]->extension();
            $request->file("profile")->storeAs("public/parent",$newNameImage);
            $picture = "parent/". $newNameImage;
            $user_profile->update(["profile"=>$picture]);
        }

        $admin = Admin::create($admin_validated);
        return redirect(route("admin.admin.edit",$admin->id));
        }
        
    }

    public function edit($id){
        $admin = Admin::find($id);
        return view("admin.admin.update")->with("admin",$admin);
    }

    public function update(Request $request){
        $user_validated = $request->validate([
            "name"=>"required|string|max:64|min:3",
            "email"=>"required|email|max:250",
        ]);

        $user_profile_validated = $request->validate([
            "profile"=>"nullable|image",
            "full_name"=>"required|string|max:50|min:5",
            "birthday"=>"required|date"
        ]);

        $id = $request->validate([
            'id'=>"required|integer|exists:parent__parents,id"
        ]);

        $minAge = 18; // Adjust minimum age as needed

        if (Carbon::parse($request->birthday)->diffInYears(Carbon::now()) < $minAge) {
            return back()->withErrors(['birthday' => 'You must be at least 18 years old.']);
        }

        $admin = Admin::find($id["id"]);
        $user = $admin->user;
        $userProfile = $user->userProfile;

        $user->update($user_validated);
        $userProfile->update($user_profile_validated);
        if ($request->hasFile("profile")){
            $newNameImage = time() . "-" . $userProfile->special_id . "mintesnot." . $user_profile_validated["profile"]->extension();
            $request->file("profile")->storeAs("public/parent",$newNameImage);
            $picture = "parent/". $newNameImage;
            $userProfile->update(["profile"=>$picture]);
        }
        return redirect(route("admin.admin.edit",$admin->id));
    }

    public function delete($id){
        $admin = Admin::find($id);
        return view("admin.admin.delete")->with("admin",$admin);
    }

    public function destory(Request $request){
        $parent = Admin::find($request["id"]);
        return redirect(route("admin.admin.create"));
    }
}
