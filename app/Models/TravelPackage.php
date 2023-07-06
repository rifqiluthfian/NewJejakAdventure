<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class TravelPackage extends Model
{

    use HasFactory;
    use SoftDeletes;

    protected $table = 'travel_packages';

   protected $fillable = [
        'travelagent_name',
        'title',
        'slug',
        'location',
        'about',
        'itinerary',
        'departure_date',
        'duration',
        'type',
        'price'
    ];
    protected $hidden = [

    ];

    //Relation gallery travel package
    public function galleries(){
        return $this->hasMany(GalleryTravel::class,'travel_packages_id','id');
    }

    //filtering data destination
    // public function scopeFilter($query, array $filters){
    //     $query->when(
    //         $filters['title'] ?? false,
    //         function ($query, $title) {
    //             return $query->where('title', 'LIKE', "%" . $title . "%");
    //         }
    //     );
    // }
        public function scopeFilter($query, array $filters){
        $query->when(
            $filters['title'] ?? false,
            fn ($query, $title) => $query->where('title', 'LIKE', "%".$title."%")
        );
    }

    public function notYetRated() {
        return $this->hasMany(Transaction::class, 'travel_packages_id', 'id')
            ->where('users_id', Auth::user()->id)
            ->where('transaction_status', 'SUCCESS');
    }

    public function lastTransaction() {
        return $this->hasOne(Transaction::class, 'travel_packages_id', 'id')
            ->where('users_id', Auth::user()->id)
            ->where('transaction_status', 'SUCCESS')
            ->latest('created_at');
    }

    public function ratings()
    {
        return $this->hasMany(Transaction::class, 'travel_packages_id', 'id')
            ->selectRaw('AVG(rating) as average_rating')
            ->where('rating', '>', 0)
            ->groupBy('travel_packages_id');
    }

    public function getAverageRatingAttribute()
    {
        if ($this->ratings()->exists()) {
            return round($this->ratings->first()->average_rating);
        }

        return 0;
    }

}
