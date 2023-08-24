<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

     // One to many inverse
     public function vendors(){
        return $this->belongsTo(Vendor::class);
    }

     // One to many inverse
     public function shops(){
        return $this->belongsTo(Shop::class);
    }

     // One to many inverse
     public function products_group(){
        return $this->belongsTo(ProductGroup::class);
    }
}
