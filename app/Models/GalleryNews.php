<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class GalleryNews extends Model
{
    use HasFactory;

    protected $fillable = [
        'news_id','image'
    ];

    protected $hidden = [

    ];

    public function news_item(){

        return $this->belongsTo(News::class,'news_id','id');
    }
}

