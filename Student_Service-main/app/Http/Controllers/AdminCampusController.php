<?php

namespace App\Http\Controllers;

use App\Models\Campus;
use App\Models\Place;
use Illuminate\Http\Request;

class AdminCampusController extends Controller
{
    public function index(){
        $campuses = Campus::all();   
        return view("admin.campus.list")->with("campuses",$campuses);  
    }

    public function create(){
        $places = Place::all();
        return view("admin.campus.register")->with("places",$places);
    }

    public function store(Request $request){
        $form_validated = $request->validate([
            "place" => "required|integer|exists:places,id",
            "name" => "required|string"
        ]);
        $form_validated["place_id"] = $form_validated["place"];
        unset($form_validated["place"]);

        $campus = Campus::create($form_validated);
        return redirect(route("admin.campus.edit",$campus->id));
    }

    public function edit($id){
        $campus = Campus::find($id);
        $places = Place::all();
        return view("admin.campus.update")->with("campus",$campus)->with("places",$places);
    }

    public function update(Request $request){
        $form_validated = $request->validate([
            "id" => "required|integer|exists:campuses,id",
            "place" => "required|integer|exists:places,id",
            "name" => "required|string"
        ]);

        $form_validated["place_id"] = $form_validated["place"];
        unset($form_validated["place"]);
        $campus = Campus::find($form_validated['id']);

        unset($form_validated["id"]);
        $campus->update($form_validated);

        return redirect(route("admin.campus.edit",$campus->id)); 
    }

    public function delete($id){
        $campus = Campus::find($id);
        return view("admin.campus.delete") -> with("campus",$campus);
    }

    public function destory(Request $request){
        $form_validated = $request->validate([
            'id' => 'required|integer|exists:places,id'
        ]);
        $campus = Campus::find($form_validated["id"]);
        $campus->delete();
        return redirect(route("admin.campus.create"));
    }
}
