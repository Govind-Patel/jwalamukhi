<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\GallaryCategory;
class GallaryImage extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = ['cat_id','title','image','desc'];
    public function category_details(){
        return $this->hasOne(GallaryCategory::class,'id','cat_id');
    }
}
