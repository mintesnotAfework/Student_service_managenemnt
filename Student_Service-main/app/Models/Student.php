<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = "students";
    protected $id = "id";
    protected $fillable =[
        "parent_id",
        "field_id",
        "dorm_id",
        "user_id"
    ];

    public function dorm(){
        return $this->belongTo(Dorm::class,"dorm_id","id");
    }

    public function field(){
        return $this->belongsTo(Field::class,"field_id","id");
    }

    public function user(){
        return $this->belongsTo(User::class,"user_id","id");
    }
}
