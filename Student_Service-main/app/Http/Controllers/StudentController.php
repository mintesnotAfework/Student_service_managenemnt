<?php

namespace App\Http\Controllers;

use App\Models\User_Place;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function place_list(){

    }

    public function place_info(){
        
    }

    public function profile(){
        $user = auth()->user();
        $user_places = User_Place::where("user_id",$user->id)
                                    ->orderBy('created_at', 'desc') // Or 'asc' for ascending order
                                    ->get();
        $total = count($user_places);
        // $user_places_rate = User_Place::where("user_id",$student->user->id)
        //                                 ->orderBy("place_id","desc")
        //                                 ->get();
        $user_places_rate = User_Place::select('user_id',"place_id", DB::raw('place_id, count(*) as count_place'))
                                        ->where("user_id", $user->id)
                                        ->groupBy('place_id',"user_id")
                                        ->orderBy('place_id', 'desc') // Or any desired order
                                        ->get();
              
        return view("student.info")->with("usp",$user_places_rate)->with("total",$total)->with("student",$user->student)->with("user_places",$user_places);
    }
}
