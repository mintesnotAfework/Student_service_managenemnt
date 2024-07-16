<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    use HasFactory;
    protected $table = "departements";
    protected $id = "id";
    protected $fillable =[
        "name",
        "campus_id"
    ];

    public function campus(){
        return $this->belongsTo(Campus::class,"campus_id","id");
    }
}
