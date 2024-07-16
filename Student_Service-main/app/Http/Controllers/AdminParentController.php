<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Student;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use App\Models\Parent_Parent;
use Illuminate\Support\Carbon;

class AdminParentController extends Controller
{
    public function index(){
        $parents = Parent_Parent::all();
        return view("admin.parent.list")->with("parents",$parents);
    }

    public function show($id){
        $parent = Parent_Parent::find($id);
        $students = Student::where("parent_id",$parent->id)->get();
        return view("admin.parent.info")->with("parent",$parent)->with("students",$students);
    }

    public function create(){
        return view("admin.parent.register");
    }

    public function store(Request $request){
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
        $parent_validated["user_id"] = $user->id;

        $user_profile = UserProfile::create($user_profile_validated);
        if ($request->hasFile("profile")){
            $newNameImage = time() . "-" . $user_profile_validated["special_id"] . "mintesnot." . $user_profile_validated["profile"]->extension();
            $request->file("profile")->storeAs("public/parent",$newNameImage);
            $picture = "parent/". $newNameImage;
            $user_profile->update(["profile"=>$picture]);
        }

        $parent = Parent_Parent::create($parent_validated);
        return redirect(route("admin.parent.edit",$parent->id));
    }

    public function edit($id){
        $parent = Parent_Parent::find($id);
        return view("admin.parent.update")->with("parent",$parent);
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

        $parent = Parent_Parent::find($id["id"]);
        $user = $parent->user;
        $userProfile = $user->userProfile;

        $user->update($user_validated);
        $userProfile->update($user_profile_validated);
        if ($request->hasFile("profile")){
            $newNameImage = time() . "-" . $userProfile->special_id . "mintesnot." . $user_profile_validated["profile"]->extension();
            $request->file("profile")->storeAs("public/parent",$newNameImage);
            $picture = "parent/". $newNameImage;
            $userProfile->update(["profile"=>$picture]);
        }
        return redirect(route("admin.parent.edit",$parent->id));
    }

    public function delete($id){
        $parent = Parent_Parent::find($id);
        return view("admin.parent.delete")->with("parent",$parent);
    }

    public function destory(Request $request){
        $parent = Parent_Parent::find($request["id"]);
        return redirect(route("admin.parent.create"));
    }
}
