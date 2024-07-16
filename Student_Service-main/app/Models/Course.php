<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = "courses";
    protected $id = "id";
    protected $fillable =[
        "name",
        "dept_id"
    ];

    public function departement(){
        return $this->belongsTo(Departement::class,"dept_id","id");
    }
}
