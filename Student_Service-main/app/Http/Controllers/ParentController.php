<?php

namespace App\Http\Controllers;

use App\Models\User_Place;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class ParentController extends Controller
{
    public function list(){
        if(isset(auth()->user()->parent->id)){
            $parent = auth()->user()->parent->id;
            $students = Student::where("parent_id",$parent)->get();
            return view("parent.list")->with("students",$students);
        }
        else{
            return redirect(route("index"));
        }
    }

    public function info($id){
        if(isset(auth()->user()->parent->id)){

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
                
            return view("parent.info")->with("usp",$user_places_rate)->with("total",$total)->with("student",$student)->with("user_places",$user_places);
        }
        else{
            return redirect(route("index"));
        }
    }
}
