<?php

namespace App\Http\Controllers;

use App\Models\Place;
use App\Models\User_Place;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserPlaceController extends Controller
{
    public function register($id){
        $place = Place::find($id);
        return view("site_register.site_register")->with("place_id",$place->id);
    }

    public function site_register(Request $request){
        $place = Place::find($request['place']);
        $userProfile = UserProfile::where("special_id",$request['id'])->get()[0];
        $password = Hash::make($request["password"]);
        if(!isset($userProfile->user->id) || !isset($place->id)){
            return redirect()->back();
        }
        else if(true){
        // else if($password == $userProfile->user->password){
            $user_place = User_Place::create(["user_id"=>$userProfile->user->id,"place_id"=>$place->id]);
        }
        return redirect()->back();
    }
}
