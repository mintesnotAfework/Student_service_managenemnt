<?php

namespace App\Http\Controllers;

use App\Models\Place;
use App\Models\Building;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Contracts\Database\Eloquent\Builder;

class AdminBuildingController extends Controller
{
    public function index(){
        $buildings = Building::all();   
        return view("admin.building.list")->with("buildings",$buildings);  
    }

    public function create(){
        $places = Place::all();
        return view("admin.building.register")->with("places",$places);
    }

    public function store(Request $request){
        $form_validated = $request->validate([
            "place" => "required|integer|exists:places,id",
            "name" => "required|string",
            "floor_number" => "required|integer",
            "picture" => "required|image"
        ]);
        $form_validated["place_id"] = $form_validated["place"];
        unset($form_validated["place"]);

        $building = Building::create($form_validated);

        if ($request->hasFile("picture")){
            $newNameImage = time() . "-" . $form_validated["name"] . "mintesnot." . $form_validated["picture"]->extension();
            $request->file("picture")->storeAs("public/building",$newNameImage);
            $picture = "building/". $newNameImage;
            $building->update(["picture"=>$picture]);
        }

        return redirect(route("admin.building.edit",$building->id));
    }

    public function edit($id){
        $building = Building::find($id);
        $places = Place::all();
        return view("admin.building.update")->with("building",$building)->with("places",$places);
    }

    public function update(Request $request){
        $form_validated = $request->validate([
            "id" => "required|integer|exists:buildings,id",
            "place" => "required|integer|exists:places,id",
            "name" => "required|string",
            "floor_number" => "required|integer",
            "picture" => "nullable|image"
        ]);

        $form_validated["place_id"] = $form_validated["place"];
        unset($form_validated["place"]);
        // unset($form_validated["picture"]);
        $building = Building::find($form_validated['id']);

        unset($form_validated["id"]);
        $building->update($form_validated);

        if ($request->hasFile("picture")){
            $newNameImage = time() . "-" . $form_validated["name"] . "mintesnot." . $form_validated["picture"]->extension();
            $request->file("picture")->storeAs("public/building",$newNameImage);
            $picture = "building/". $newNameImage;
            $building->update(["picture"=>$picture]);
            if (File::exists($picture)){
                File::delete($picture);
            }
        }

        return redirect(route("admin.building.edit",$building->id)); 
    }

    public function delete($id){
        $building = Building::find($id);
        return view("admin.building.delete") -> with("building",$building);
    }

    public function destory(Request $request){
        $form_validated = $request->validate([
            'id' => 'required|integer|exists:buildings,id'
        ]);
        $building = Building::find($form_validated["id"]);
        $building->delete();
        return redirect(route("admin.building.create"));
    }
}
