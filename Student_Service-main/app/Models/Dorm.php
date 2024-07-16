<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dorm extends Model
{
    use HasFactory;
    protected $table = "dorms";
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
