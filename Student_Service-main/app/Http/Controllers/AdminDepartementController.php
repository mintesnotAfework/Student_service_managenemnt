<?php

namespace App\Http\Controllers;

use App\Models\Campus;
use App\Models\Departement;
use Illuminate\Http\Request;

class AdminDepartementController extends Controller
{
    public function index(){
        $departements = Departement::all();
        return view("admin.departement.list")->with("departements",$departements);
    }

    public function create(){
        $campuses = Campus::all();
        return view("admin.departement.register")->with("campuses",$campuses);
    }

    public function store(Request $request){
        $form_validated = $request->validate([
            "campus" => "required|integer|exists:campuses,id",
            "name" => "required|string"
        ]);
        $form_validated["campus_id"] = $form_validated["campus"];
        unset($form_validated["campus"]);

        $dept = Departement::create($form_validated);
        return redirect(route("admin.departement.edit",$dept->id));
    }

    public function edit($id){
        $dept = Departement::find($id);
        $campus = Campus::all();
        return view("admin.departement.update")->with("campuses",$campus)->with("dept",$dept);
    }

    public function update(Request $request){
        $form_validated = $request->validate([
            "id" => "required|integer|exists:departements,id",
            "campus" => "required|integer|exists:campuses,id",
            "name" => "required|string"
        ]);
        $form_validated["campus_id"] = $form_validated["campus"];
        unset($form_validated["campus"]);
        $dept = Departement::find($form_validated['id']);

        unset($form_validated["id"]);
        $dept->update($form_validated);
        return redirect(route("admin.departement.edit",$dept->id)); 
    }

    public function delete($id){
        $dept = Departement::find($id);
        return view("admin.departement.delete") -> with("dept",$dept);
    }

    public function destory(Request $request){
        $form_validated = $request->validate([
            'id' => 'required|integer|exists:places,id'
        ]);
        $departements = Departement::find($form_validated["id"]);
        $departements->delete();
        return redirect(route("admin.dpeartement.create"));
    }


}
