<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Departement;
use Illuminate\Http\Request;

class AdminCourseController extends Controller
{
    public function index(){
        $courses = Course::all();
        return view("admin.course.list")->with("courses",$courses);
    }

    public function create(){
        $departements = Departement::all();
        return view("admin.course.register")->with("depts",$departements);
    }

    public function store(Request $request){
        $form_validated = $request->validate([
            "dept" => "required|integer|exists:departements,id",
            "name" => "required|string"
        ]);
        $form_validated["dept_id"] = $form_validated["dept"];
        unset($form_validated["dept"]);

        $course = Course::create($form_validated);
        return redirect(route("admin.course.edit",$course->id));
    }

    public function edit($id){
        $course = Course::find($id);
        $depts = Departement::all();
        return view("admin.course.update")->with("course",$course)->with("depts",$depts);
    }

    public function update(Request $request){
        $form_validated = $request->validate([
            "id" => "required|integer|exists:courses,id",
            "dept" => "required|integer|exists:departements,id",
            "name" => "required|string"
        ]);
        $form_validated["dept_id"] = $form_validated["dept"];
        unset($form_validated["dept"]);
        $course = Course::find($form_validated['id']);

        unset($form_validated["id"]);
        $course->update($form_validated);
        return redirect(route("admin.course.edit",$course->id)); 
    }

    public function delete($id){
        $course = Course::find($id);
        return view("admin.course.delete") -> with("course",$course);
    }

    public function destory(Request $request){
        $form_validated = $request->validate([
            'id' => 'required|integer|exists:courses,id'
        ]);
        $course = Course::find($form_validated["id"]);
        $course->delete();
        return redirect(route("admin.course.create"));
    }
}
