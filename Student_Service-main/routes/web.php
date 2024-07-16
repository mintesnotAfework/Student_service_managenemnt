<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminCafeController;
use App\Http\Controllers\AdminDormController;
use App\Http\Controllers\UserPlaceController;
use App\Http\Controllers\AdminClassController;
use App\Http\Controllers\AdminFieldController;
use App\Http\Controllers\AdminPlaceController;
use App\Http\Controllers\AdminCampusController;
use App\Http\Controllers\AdminCourseController;
use App\Http\Controllers\AdminParentController;
use App\Http\Controllers\AdminStudentController;
use App\Http\Controllers\AdminBuildingController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\AdminDepartementController;


Route::get("/",function(){
    if(isset(auth()->user()->admin->id)){
        return redirect(route("admin.student.list"));
    }
    else if(isset(auth()->user()->parent->id)){
        return redirect(route("parent.list"));
    }
    else if(isset(auth()->user()->student->id)){
        return redirect(route("student.profile"));
    }
    else{
        Auth::logout();
    }
    return redirect(route("authentication.login"));
})->name("index");

Route::group(["prefix" => "general"],function(){
    Route::get("/services",function(){
        return view("general.service");
    });
    
    Route::get("/contact_us",function(){
        return view("general.contact_us");
    });
    
    Route::get("/policy-and-contract",function(){
        return view("general.contact_us");
    });
});

Route::group(["prefix" => "site-registration","as"=>"site_register."],function(){
    Route::get("/{id}",[UserPlaceController::class,"register"])->name("register_site")->whereNumber("id");

    Route::post("/",[UserPlaceController::class,"site_register"])->name("register_site");

});

Route::group(["as" => "authentication."],function(){
    Route::group(["middleware"=>"guest"],function(){
        Route::get("/login",[AuthenticationController::class,"login"])->name("login");
        
        Route::post("/login",[AuthenticationController::class,"authenticate"])->name("login");
    });

    Route::group(["middleware"=>"auth"],function(){
        Route::get("/logout",[AuthenticationController::class,"logout_confirmation"])->name("logout");

        Route::post("/logout",[AuthenticationController::class,"logout"])->name("logout");
    });
});

Route::group(["middleware"=>"auth"],function(){

    Route::group(["prefix"=>"parent","as"=>"parent."],function(){
        Route::get("/list",[ParentController::class,"list"])->name("list");

        Route::get("/info/{id}",[ParentController::class,"info"])->name("info")->whereNumber("id");
    });

    Route::group(["prefix"=>"student","as"=>"student."],function(){
        Route::get("/place-list",[StudentController::class,"place_list"])->name("place_list");

        Route::get("/place/info",[StudentController::class,"place_info"])->name("place_info");

        Route::get("/profile-info",[StudentController::class,"profile"])->name("profile");
    });

    Route::group(["prefix"=>'admin',"middleware"=>"auth"],function(){
        Route::group(['prefix' => 'place',"as" => "admin.place."], function () {
            Route::get("/",[AdminPlaceController::class,"index"])->name("list");

            Route::get('/create', [AdminPlaceController::class, 'create'])->name("create"); // List places (GET)
            Route::post('/store', [AdminPlaceController::class, 'store'])->name('store'); // Add place (POST)
        
            Route::get('/edit/{id}', [AdminPlaceController::class, 'edit'])->name('edit')->whereNumber('id'); // Edit place form (GET)
            Route::put('/update', [AdminPlaceController::class, 'update'])->name('update'); // Update place (PUT)
        
            Route::get('/delete/{id}', [AdminPlaceController::class, 'delete'])->name('delete')->whereNumber('id'); // Delete place confirmation (GET)
            Route::delete('/destroy', [AdminPlaceController::class, 'destroy'])->name('destory'); // Delete place (DELETE)
        });

        Route::group(['prefix' => 'campus',"as" => "admin.campus."], function () {
            Route::get("/",[AdminCampusController::class,"index"])->name("list");

            Route::get('/create', [AdminCampusController::class, 'create'])->name("create"); // List places (GET)
            Route::post('/store', [AdminCampusController::class, 'store'])->name('store'); // Add place (POST)
        
            Route::get('/edit/{id}', [AdminCampusController::class, 'edit'])->name('edit')->whereNumber('id'); // Edit place form (GET)
            Route::put('/update', [AdminCampusController::class, 'update'])->name('update'); // Update place (PUT)
        
            Route::get('/delete/{id}', [AdminCampusController::class, 'delete'])->name('delete')->whereNumber('id'); // Delete place confirmation (GET)
            Route::delete('/destroy', [AdminCampusController::class, 'destory'])->name('destory'); // Delete place (DELETE)
        });

        Route::group(['prefix' => 'departement',"as" => "admin.departement."], function () {
            Route::get("/",[AdminDepartementController::class,"index"])->name("list");

            Route::get('/create', [AdminDepartementController::class, 'create'])->name("create"); // List places (GET)
            Route::post('/store', [AdminDepartementController::class, 'store'])->name('store'); // Add place (POST)
        
            Route::get('/edit/{id}', [AdminDepartementController::class, 'edit'])->name('edit')->whereNumber('id'); // Edit place form (GET)
            Route::put('/update', [AdminDepartementController::class, 'update'])->name('update'); // Update place (PUT)
        
            Route::get('/delete/{id}', [AdminDepartementController::class, 'delete'])->name('delete')->whereNumber('id'); // Delete place confirmation (GET)
            Route::delete('/destroy', [AdminDepartementController::class, 'destory'])->name('destory'); // Delete place (DELETE)
        });

        Route::group(['prefix' => 'field',"as" => "admin.field."], function () {
            Route::get("/",[AdminFieldController::class,"index"])->name("list");

            Route::get('/create', [AdminFieldController::class, 'create'])->name("create"); // List places (GET)
            Route::post('/store', [AdminFieldController::class, 'store'])->name('store'); // Add place (POST)
        
            Route::get('/edit/{id}', [AdminFieldController::class, 'edit'])->name('edit')->whereNumber('id'); // Edit place form (GET)
            Route::put('/update', [AdminFieldController::class, 'update'])->name('update'); // Update place (PUT)
        
            Route::get('/delete/{id}', [AdminFieldController::class, 'delete'])->name('delete')->whereNumber('id'); // Delete place confirmation (GET)
            Route::delete('/destroy', [AdminFieldController::class, 'destory'])->name('destory'); // Delete place (DELETE)
        });

        Route::group(['prefix' => 'course',"as" => "admin.course."], function () {
            Route::get("/",[AdminCourseController::class,"index"])->name("list");

            Route::get('/create', [AdminCourseController::class, 'create'])->name("create"); // List places (GET)
            Route::post('/store', [AdminCourseController::class, 'store'])->name('store'); // Add place (POST)
        
            Route::get('/edit/{id}', [AdminCourseController::class, 'edit'])->name('edit')->whereNumber('id'); // Edit place form (GET)
            Route::put('/update', [AdminCourseController::class, 'update'])->name('update'); // Update place (PUT)
        
            Route::get('/delete/{id}', [AdminCourseController::class, 'delete'])->name('delete')->whereNumber('id'); // Delete place confirmation (GET)
            Route::delete('/destroy', [AdminCourseController::class, 'destory'])->name('destory'); // Delete place (DELETE)
        });

        Route::group(['prefix' => 'building',"as" => "admin.building."], function () {
            Route::get("/",[AdminBuildingController::class,"index"])->name("list");

            Route::get('/create', [AdminBuildingController::class, 'create'])->name("create"); // List places (GET)
            Route::post('/store', [AdminBuildingController::class, 'store'])->name('store'); // Add place (POST)
        
            Route::get('/edit/{id}', [AdminBuildingController::class, 'edit'])->name('edit')->whereNumber('id'); // Edit place form (GET)
            Route::put('/update', [AdminBuildingController::class, 'update'])->name('update'); // Update place (PUT)
        
            Route::get('/delete/{id}', [AdminBuildingController::class, 'delete'])->name('delete')->whereNumber('id'); // Delete place confirmation (GET)
            Route::delete('/destroy', [AdminBuildingController::class, 'destory'])->name('destory'); // Delete place (DELETE)
        });

        Route::group(['prefix' => 'dorm',"as" => "admin.dorm."], function () {
            Route::get("/",[AdminDormController::class,"index"])->name("list");

            Route::get('/create', [AdminDormController::class, 'create'])->name("create"); // List places (GET)
            Route::post('/store', [AdminDormController::class, 'store'])->name('store'); // Add place (POST)
        
            Route::get('/edit/{id}', [AdminDormController::class, 'edit'])->name('edit')->whereNumber('id'); // Edit place form (GET)
            Route::put('/update', [AdminDormController::class, 'update'])->name('update'); // Update place (PUT)
        
            Route::get('/delete/{id}', [AdminDormController::class, 'delete'])->name('delete')->whereNumber('id'); // Delete place confirmation (GET)
            Route::delete('/destroy', [AdminDormController::class, 'destory'])->name('destory'); // Delete place (DELETE)
        });

        Route::group(['prefix' => 'class',"as" => "admin.class."], function () {
            Route::get("/",[AdminClassController::class,"index"])->name("list");

            Route::get('/create', [AdminClassController::class, 'create'])->name("create"); // List places (GET)
            Route::post('/store', [AdminClassController::class, 'store'])->name('store'); // Add place (POST)
        
            Route::get('/edit/{id}', [AdminClassController::class, 'edit'])->name('edit')->whereNumber('id'); // Edit place form (GET)
            Route::put('/update', [AdminClassController::class, 'update'])->name('update'); // Update place (PUT)
        
            Route::get('/delete/{id}', [AdminClassController::class, 'delete'])->name('delete')->whereNumber('id'); // Delete place confirmation (GET)
            Route::delete('/destroy', [AdminClassController::class, 'destory'])->name('destory'); // Delete place (DELETE)
        });

        Route::group(['prefix' => 'cafe',"as" => "admin.cafe."], function () {
            Route::get("/",[AdminCafeController::class,"index"])->name("list");

            Route::get('/create', [AdminCafeController::class, 'create'])->name("create"); // List places (GET)
            Route::post('/store', [AdminCafeController::class, 'store'])->name('store'); // Add place (POST)
        
            Route::get('/edit/{id}', [AdminCafeController::class, 'edit'])->name('edit')->whereNumber('id'); // Edit place form (GET)
            Route::put('/update', [AdminCafeController::class, 'update'])->name('update'); // Update place (PUT)
        
            Route::get('/delete/{id}', [AdminCafeController::class, 'delete'])->name('delete')->whereNumber('id'); // Delete place confirmation (GET)
            Route::delete('/destroy', [AdminCafeController::class, 'destory'])->name('destory'); // Delete place (DELETE)
        });

        Route::group(['prefix' => 'student',"as" => "admin.student."], function () {
            Route::get("/",[AdminStudentController::class,"index"])->name("list");
            Route::get("/show/{id}",[AdminStudentController::class,"show"])->name("show")->whereNumber("id");

            Route::get('/create', [AdminStudentController::class, 'create'])->name("create"); // List places (GET)
            Route::post('/store', [AdminStudentController::class, 'store'])->name('store'); // Add place (POST)
        
            Route::get('/edit/{id}', [AdminStudentController::class, 'edit'])->name('edit')->whereNumber('id'); // Edit place form (GET)
            Route::put('/update', [AdminStudentController::class, 'update'])->name('update'); // Update place (PUT)
        
            Route::get('/delete/{id}', [AdminStudentController::class, 'delete'])->name('delete')->whereNumber('id'); // Delete place confirmation (GET)
            Route::delete('/destroy', [AdminStudentController::class, 'destory'])->name('destory'); // Delete place (DELETE)
        });

        Route::group(['prefix' => 'parent',"as" => "admin.parent."], function () {
            Route::get("/",[AdminParentController::class,"index"])->name("list");
            Route::get("/show/{id}",[AdminParentController::class,"show"])->name("show")->whereNumber("id");

            Route::get('/create', [AdminParentController::class, 'create'])->name("create"); // List places (GET)
            Route::post('/store', [AdminParentController::class, 'store'])->name('store'); // Add place (POST)
        
            Route::get('/edit/{id}', [AdminParentController::class, 'edit'])->name('edit')->whereNumber('id'); // Edit place form (GET)
            Route::put('/update', [AdminParentController::class, 'update'])->name('update'); // Update place (PUT)
        
            Route::get('/delete/{id}', [AdminParentController::class, 'delete'])->name('delete')->whereNumber('id'); // Delete place confirmation (GET)
            Route::delete('/destroy', [AdminParentController::class, 'destory'])->name('destory'); // Delete place (DELETE)
        });
        
        Route::group(['prefix' => 'admin',"as" => "admin.admin."], function () {
            Route::get("/",[AdminController::class,"index"])->name("list");

            Route::get('/create', [AdminController::class, 'create'])->name("create"); // List places (GET)
            Route::post('/store', [AdminController::class, 'store'])->name('store'); // Add place (POST)
        
            Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('edit')->whereNumber('id'); // Edit place form (GET)
            Route::put('/update', [AdminController::class, 'update'])->name('update'); // Update place (PUT)
        
            Route::get('/delete/{id}', [AdminController::class, 'delete'])->name('delete')->whereNumber('id'); // Delete place confirmation (GET)
            Route::delete('/destroy', [AdminController::class, 'destory'])->name('destory'); // Delete place (DELETE)
        });
    });

});