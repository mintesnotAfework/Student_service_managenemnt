<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Place extends Model
{
    use HasFactory;
    protected $table = "user__places";
    protected $id = "id";
    protected $fillable =[
        "user_id",
        "place_id"
    ];

    public function user(){
        return $this->belongsTo(User::class,"user_id","id");
    }

    public function place(){
        return $this->belongsTo(Place::class,"place_id","id");
    }
}
