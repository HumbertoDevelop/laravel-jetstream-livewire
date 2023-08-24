<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    protected $table ='vendor_shops';
    
     // One to many 
     public function vendors(){
        return $this->hasMany(User::class);
    }

    // One to many
    public function products(){
        return $this->hasMany(Product::class);
    }
   
    // One to many
    public function prices(){
        return $this->hasMany(Price::class);
    }
}
