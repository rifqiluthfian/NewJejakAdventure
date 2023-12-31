<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'travelagent_name',
        'no_phone',
        'no_identity',
        'email',
        'username',
        'password',
        'roles'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

       //Relation document user
       public function documents(){
        return $this->hasMany(Documents::class,'users_id','id');
    }


    public function notYetRated() {
        return $this->hasMany(Transaction::class, 'users_id', 'id')
            ->where('transaction_status', 'SUCCESS')
            ->whereNull('rating');
    }
     public function updateRole($newRole)
    {
        $this->roles = $newRole;
        $this->save();
    }
}
