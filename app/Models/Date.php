<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    use HasFactory;
    protected $fillable = ['date'];

    //One to Many relationship
    public function schedules(){
        return $this->hasMany(Schedule::class);
    } 

    //Many to Many relationship
    public function users(){
        return $this->belongsToMany(User::class);
    }
}
