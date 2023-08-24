<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;

    //One to many inverse
    public function products(){

        return $this->belongsTo(Product::class);
    }
}
