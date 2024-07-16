<?php

namespace App\Http\Controllers;

use App\Models\Dorm;
use App\Models\User;
use App\Models\Field;
use App\Models\Student;
use App\Models\User_Place;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use App\Models\Parent_Parent;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class AdminStudentController extends Controller
{
    public function index(){
        $students = Student::all();
        return view("admin.student.list")->with("students",$students);
    }

    public function show($id){
        $student = Student::find($id);
        $user_places = User_Place::where("user_id",$student->user->id)
                                    ->orderBy('created_at', 'desc') // Or 'asc' for ascending order
                                    ->get();
        $total = count($user_places);
        // $user_places_rate = User_Place::where("user_id",$student->user->id)
        //                                 ->orderBy("place_id","desc")
        //                                 ->get();
        $user_places_rate = User_Place::select('user_id',"place_id", DB::raw('place_id, count(*) as count_place'))
                                        ->where("user_id", $student->user->id)
                                        ->groupBy('place_id',"user_id")
                                        ->orderBy('place_id', 'desc') // Or any desired order
                                        ->get();
              
        return view("admin.student.info")->with("usp",$user_places_rate)->with("total",$total)->with("student",$student)->with("user_places",$user_places);
    }

    public function create(){
        $dorms = Dorm::all();
        $fields = Field::all();
        $parents = Parent_Parent::all();
        return view("admin.student.register")->with("parents",$parents)->with("dorms",$dorms)->with("fields",$fields);
    }

    public function store(Request $request){
        $student_validated = $request->validate([
            "dorm"=>"required|integer|exists:dorms,id",
            "parent"=>"nullable|integer|exists:parent__parents,id",
            "field"=>"required|integer|exists:fields,id"
        ]);

        $student_validated["dorm_id"] = $student_validated["dorm"];
        unset($student_validated["dorm"]);
        if(isset($student_validated["parent"])){
            $student_validated["parent_id"] = $student_validated["parent"];
            unset($student_validated["parent"]);
        }
        $student_validated["field_id"] = $student_validated["field"];
        unset($student_validated["field"]);

        $user_validated = $request->validate([
            "name"=>"required|string|max:64|min:3",
            "email"=>"required|email|max:250|unique:users,email",
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
        $student_validated["user_id"] = $user->id;

        $user_profile = UserProfile::create($user_profile_validated);
        if ($request->hasFile("profile")){
            $newNameImage = time() . "-" . $user_profile_validated["special_id"] . "mintesnot." . $user_profile_validated["profile"]->extension();
            $request->file("profile")->storeAs("public/user",$newNameImage);
            $picture = "user/". $newNameImage;
            $user_profile->update(["profile"=>$picture]);
        }

        $student = Student::create($student_validated);
        return redirect(route("admin.student.edit",$student->id));
    }

    public function edit($id){
        $student = Student::find($id);
        $dorms = Dorm::all();
        $fields = Field::all();
        $parents = Parent_Parent::all();
        return view("admin.student.update")->with("student",$student)->with("dorms",$dorms)->with("fields",$fields)->with("parents",$parents);
    }

    public function update(Request $request){
        $student_validated = $request->validate([
            "dorm"=>"required|integer|exists:dorms,id",
            "parent"=>"nullable|integer|exists:parent__parents,id",
            "field"=>"required|integer|exists:fields,id"
        ]);

        $student_validated["dorm_id"] = $student_validated["dorm"];
        unset($student_validated["dorm"]);
        if(isset($student_validated["parent"])){
            $student_validated["parent_id"] = $student_validated["parent"];
            unset($student_validated["parent"]);
        }
        $student_validated["field_id"] = $student_validated["field"];
        unset($student_validated["field"]);

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
            'id'=>"required|integer|exists:students,id"
        ]);

        $minAge = 18; // Adjust minimum age as needed

        if (Carbon::parse($request->birthday)->diffInYears(Carbon::now()) < $minAge) {
            return back()->withErrors(['birthday' => 'You must be at least 18 years old.']);
        }

        $student = Student::find($id["id"]);
        $user = $student->user;
        $userProfile = $user->userProfile;


        $user->update($user_validated);
        $userProfile->update($user_profile_validated);
        if ($request->hasFile("profile")){
            $newNameImage = time() . "-" . $userProfile->special_id . "mintesnot." . $user_profile_validated["profile"]->extension();
            $request->file("profile")->storeAs("public/user",$newNameImage);
            $picture = "user/". $newNameImage;
            $userProfile->update(["profile"=>$picture]);
        }
        $student->update($student_validated);
        return redirect(route("admin.student.edit",$student->id));
    }

    public function delete($id){
        $student = Student::find($id);
        return view("admin.student.delete")->with("student",$student);
    }

    public function destory(Request $request){
        $student = Student::find($request["id"]);
        return redirect(route("admin.student.create"));
    }
}
