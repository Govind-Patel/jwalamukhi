<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = ['name','designation','image','twiter','facebook','linkedin','insta','youtube'];
}
