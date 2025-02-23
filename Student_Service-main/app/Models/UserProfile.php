<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;
    protected $table = "user_profiles";
    protected $id = "id";
    protected $fillable =[
        "profile",
        "special_id",
        "birthday",
        "full_name",
        "user_id"
    ];

    public function user(){
        return $this->belongsTo(User::class,"user_id","id");
    }
}
