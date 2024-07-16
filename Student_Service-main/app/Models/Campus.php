<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    use HasFactory;
    protected $table = "campuses";
    protected $id = "id";
    protected $fillable =[
        "name",
        "place_id"
    ];

    public function place(){
        return $this->belongsTo(Place::class,"place_id","id");
    }
}
