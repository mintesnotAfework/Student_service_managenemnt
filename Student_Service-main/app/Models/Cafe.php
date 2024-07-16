<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cafe extends Model
{
    use HasFactory;
    protected $table = "cafes";
    protected $id = "id";
    protected $fillable =[
        "name",
        "campus_id"
    ];

    public function campus(){
        return $this->belongsTo(Campus::class,"campus_id","id");
    }
}