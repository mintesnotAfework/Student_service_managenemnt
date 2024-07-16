<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use App\Models\Field;
use Faker\Core\File;
use Illuminate\Http\Request;

class AdminFieldController extends Controller
{
    public function index(){
        $fields = Field::all();
        return view("admin.field.list")->with("fields",$fields);
    }

    public function create(){
        $departements = Departement::all();
        return view("admin.field.register")->with("depts",$departements);
    }

    public function store(Request $request){
        $form_validated = $request->validate([
            "dept" => "required|integer|exists:departements,id",
            "name" => "required|string"
        ]);
        $form_validated["dept_id"] = $form_validated["dept"];
        unset($form_validated["dept"]);

        $field = Field::create($form_validated);
        return redirect(route("admin.field.edit",$field->id));
    }

    public function edit($id){
        $field = Field::find($id);
        $depts = Departement::all();
        return view("admin.field.update")->with("field",$field)->with("depts",$depts);
    }

    public function update(Request $request){
        $form_validated = $request->validate([
            "id" => "required|integer|exists:fields,id",
            "dept" => "required|integer|exists:departements,id",
            "name" => "required|string"
        ]);
        $form_validated["dept_id"] = $form_validated["dept"];
        unset($form_validated["dept"]);
        $field = Field::find($form_validated['id']);

        unset($form_validated["id"]);
        $field->update($form_validated);
        return redirect(route("admin.field.edit",$field->id)); 
    }

    public function delete($id){
        $field = Field::find($id);
        return view("admin.field.delete") -> with("field",$field);
    }

    public function destory(Request $request){
        $form_validated = $request->validate([
            'id' => 'required|integer|exists:fields,id'
        ]);
        $field = Field::find($form_validated["id"]);
        $field->delete();
        return redirect(route("admin.field.create"));
    }

}
