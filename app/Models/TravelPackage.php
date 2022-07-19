<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;


class TravelPackage extends Model
{
    
    use HasFactory;
    use SoftDeletes;


    protected $fillable = [
        'username','title','slug','location','about','departure_date','duration',
        'type','price'
    ];

    protected $hidden = [

    ];

    //Relation gallery travel package
    public function galleries(){
        return $this->hasMany(GalleryTravel::class,'travel_packages_id','id');
    }

    //filtering data destination
    public function scopeFilter($query, array $filters){
        $query->when(
            $filters['title'] ?? false,
            fn ($query, $title) => $query->where('title', 'LIKE', "%".$title."%")
        );
    }
    
}
