<?php

namespace App\Http\Controllers;

use App\Models\Building;
use App\Models\Class_Class;
use Illuminate\Http\Request;

class AdminClassController extends Controller
{
    public function index(){
        $classes = Class_Class::all();   
        return view("admin.class.list")->with("classes",$classes);  
    }

    public function create(){
        $buildings = Building::all();
        return view("admin.class.register")->with("buildings",$buildings);
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

        $class = Class_Class::create($form_validated);
        return redirect(route("admin.class.edit",$class->id));
    }

    public function edit($id){
        $class = Class_Class::find($id);
        $buildings = Building::all();
        return view("admin.class.update")->with("class",$class)->with("buildings",$buildings);
    }

    public function update(Request $request){
        $form_validated = $request->validate([
            "id" => "required|integer|exists:class__classes,id",
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
        $class = Class_Class::find($form_validated['id']);

        unset($form_validated["id"]);
        $class->update($form_validated);

        return redirect(route("admin.class.edit",$class->id)); 
    }

    public function delete($id){
        $class =Class_Class::find($id);
        return view("admin.class.delete") -> with("class",$class);
    }

    public function destory(Request $request){
        $form_validated = $request->validate([
            'id' => 'required|integer|exists:class__classes,id'
        ]);
        $class = Class_Class::find($form_validated["id"]);
        $class->delete();
        return redirect(route("admin.class.create"));
    }
}
