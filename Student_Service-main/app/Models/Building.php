<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory;
    protected $table = "buildings";
    protected $id = "id";
    protected $fillable =[
        "name",
        "floor_number",
        "picture",
        "place_id"
    ];

    public function place(){
        return $this->belongsTo(Place::class,"place_id","id");
    }
}
