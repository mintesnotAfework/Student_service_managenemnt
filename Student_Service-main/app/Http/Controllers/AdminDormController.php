<?php

namespace App\Http\Controllers;

use App\Models\Building;
use App\Models\Dorm;
use Illuminate\Http\Request;

class AdminDormController extends Controller
{
    public function index(){
        $dorms = Dorm::all();   
        return view("admin.dorm.list")->with("dorms",$dorms);  
    }

    public function create(){
        $buildings = Building::all();
        return view("admin.dorm.register")->with("buildings",$buildings);
    }

    public function store(Request $request){
        $form_validated = $request->validate([
            "floor_number"=>"required|integer",
            "building" => "required|integer|exists:buildings,id",
            "name" => "required|string",
        ]);

        $bn_check = Building::find($form_validated["building"])->floor_number;
        if($form_validated["floor_number"] > $bn_check || $form_validated["floor_number"] <= 0){
            return redirect()->back();
        }

        $form_validated["building_id"] = $form_validated["building"];
        unset($form_validated["building"]);

        $dorm = Dorm::create($form_validated);
        return redirect(route("admin.dorm.edit",$dorm->id));
    }

    public function edit($id){
        $dorm = Dorm::find($id);
        $buildings = Building::all();
        return view("admin.dorm.update")->with("dorm",$dorm)->with("buildings",$buildings);
    }

    public function update(Request $request){
        $form_validated = $request->validate([
            "id" => "required|integer|exists:dorms,id",
            "floor_number"=>"required|integer",
            "building" => "required|integer|exists:buildings,id",
            "name" => "required|string"
        ]);


        $bn_check = Building::find($form_validated["building"])->floor_number;
        if($form_validated["floor_number"] > $bn_check || $form_validated["floor_number"] <= 0){
            return redirect()->back();
        }

        $form_validated["building_id"] = $form_validated["building"];
        unset($form_validated["building"]);
        $dorm = Dorm::find($form_validated['id']);

        unset($form_validated["id"]);
        $dorm->update($form_validated);

        return redirect(route("admin.dorm.edit",$dorm->id)); 
    }

    public function delete($id){
        $dorm =Dorm::find($id);
        return view("admin.dorm.delete") -> with("dorm",$dorm);
    }

    public function destory(Request $request){
        $form_validated = $request->validate([
            'id' => 'required|integer|exists:dorms,id'
        ]);
        $dorm = Dorm::find($form_validated["id"]);
        $dorm->delete();
        return redirect(route("admin.dorm.create"));
    }
}
