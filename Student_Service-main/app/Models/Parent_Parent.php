<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parent_Parent extends Model
{
    use HasFactory;
    protected $table = "parent__parents";
    protected $id = "id";
    protected $fillable =[
        "user_id",
    ];

    public function user(){
        return $this->belongsTo(User::class,"user_id","id");
    }
}
