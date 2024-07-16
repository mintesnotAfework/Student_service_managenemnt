<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminPlaceController extends Controller
{
    public function index(){
        $places = Place::all();
        return view("admin.place.list")->with("places",$places);
    }

    public function create(){
        return view("admin.place.register");
    }

    public function store(Request $request){
        $form_validated = $request->validate([
            "name" => "required|max:255|min:2|string",
            "map_url" => "required|max:1024|min:22|url",
            "picture" => "nullable|image"
        ]);
        $place = Place::create($form_validated);
        if ($request->hasFile("picture")){
            $newNameImage = time() . "-" . $form_validated["name"] . "mintesnot." . $form_validated["picture"]->extension();
            $request->file("picture")->storeAs("public/place",$newNameImage);
            $picture = "place/". $newNameImage;
            $place->update(["picture"=>$picture]);
        }
        return redirect(route("admin.place.edit",$place->id));
    }

    public function edit($id){
        $place = Place::find($id);
        return view("admin.place.update")->with("place",$place);
    }

    public function update(Request $request){
        $form_validated = $request->validate([
            'id' => 'required|integer|exists:places,id',
            "name" => "required|max:255|min:2|string",
            "map_url" => "required|max:1024|min:22|url",
            "picture" => "nullable|image"
        ]);
        $place = Place::find($form_validated["id"]);
        unset($form_validated["id"]);

        $place->update($form_validated);
        if ($request->hasFile("picture")){
            $picture = storage_path("app/public/".$place->picture);
            $newNameImage = time() . "-" . $form_validated["name"] . "mintesnot." . $form_validated["picture"]->extension();
            $request->file("picture")->storeAs("public/place",$newNameImage);
            $place->picture = "place/". $newNameImage;
            $place->save();
            if (File::exists($picture)){
                File::delete($picture);
            }
        }
        return redirect(route("admin.place.edit",$place->id));
    }

    public function delete($id){
        $place = Place::find($id);
        return view("admin.place.delete") -> with("place",$place);
    }

    public function destroy(Request $request){
        $form_validated = $request->validate([
            'id' => 'required|integer|exists:places,id'
        ]);
        $place = Place::find($form_validated["id"]);
        // $picture = storage_path("app/public/".$place->picture);
        // if (File::exists($picture)){
        //     File::delete($picture);
        // }
        $place->delete();
        return redirect(route("admin.place.create"));
    }
}
