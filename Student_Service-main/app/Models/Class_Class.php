<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Class_Class extends Model
{
    use HasFactory;
    protected $table = "class__classes";
    protected $id = "id";
    protected $fillable =[
        "name",
        "floor_number",
        "building_id"
    ];

    public function building(){
        return $this->belongsTo(Building::class,"building_id","id");
    }
}
