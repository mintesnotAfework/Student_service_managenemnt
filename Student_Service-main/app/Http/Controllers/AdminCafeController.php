<?php

namespace App\Http\Controllers;

use App\Models\Cafe;
use App\Models\Campus;
use Illuminate\Http\Request;

class AdminCafeController extends Controller
{
    public function index(){
        $cafes = Cafe::all();   
        return view("admin.cafe.list")->with("cafes",$cafes);  
    }

    public function create(){
        $campuses = Campus::all();
        return view("admin.cafe.register")->with("campuses",$campuses);
    }

    public function store(Request $request){
        $form_validated = $request->validate([
            "campus" => "required|integer|exists:campuses,id",
            "name" => "required|string"
        ]);
        $form_validated["campus_id"] = $form_validated["campus"];
        unset($form_validated["campus"]);

        $cafe = Cafe::create($form_validated);
        return redirect(route("admin.cafe.edit",$cafe->id));
    }

    public function edit($id){
        $cafe = Cafe::find($id);
        $campuses = Campus::all();
        return view("admin.cafe.update")->with("cafe",$cafe)->with("campuses",$campuses);
    }

    public function update(Request $request){
        $form_validated = $request->validate([
            "id" => "required|integer|exists:cafes,id",
            "campus" => "required|integer|exists:campuses,id",
            "name" => "required|string"
        ]);

        $form_validated["campus_id"] = $form_validated["campus"];
        unset($form_validated["campus"]);
        $cafe = Cafe::find($form_validated['id']);

        unset($form_validated["id"]);
        $cafe->update($form_validated);

        return redirect(route("admin.cafe.edit",$cafe->id)); 
    }

    public function delete($id){
        $cafe = Cafe::find($id);
        return view("admin.cafe.delete") -> with("cafe",$cafe);
    }

    public function destory(Request $request){
        $form_validated = $request->validate([
            'id' => 'required|integer|exists:places,id'
        ]);
        $cafe = Cafe::find($form_validated["id"]);
        $cafe->delete();
        return redirect(route("admin.cafe.create"));
    }
}
