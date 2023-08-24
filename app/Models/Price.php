<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;
    protected $table = 'prices';

     // One to many inverse
     public function shops(){
        return $this->belongsTo(Shop::class);
    }
     
}
