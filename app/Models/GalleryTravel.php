<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class GalleryTravel extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'galleries';

    protected $fillable = [
        'travel_packages_id','username','image'
    ];

    protected $hidden = [

    ];

    public function travel_package(){

        return $this->belongsTo(TravelPackage::class,'travel_packages_id','id');
    }
}

