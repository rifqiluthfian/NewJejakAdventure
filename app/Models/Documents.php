<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Documents extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'documents';
    protected $fillable = [
        'users_id','identity','nomer_rekening','certificate','profile_instagram','status_identity'
        ,'status_nomer_rekening','status_certificate','status_profile_instagram','status_pengumpulan'
    ];

    protected $hidden = [

    ];

    public function user_documents(){

        return $this->belongsTo(User::class,'users_id','id');
    }
}
