<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';
    protected $fillable = [
        'title','subtitle','date','contents'
    ];

    protected $hidden = [

    ];

    public function galleriesnews(){
        return $this->hasMany(GalleryNews::class,'news_id','id');
    }

}
