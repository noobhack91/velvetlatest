<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
//use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Cashier\Billable;
//use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    //use SoftDeletes;
    //protected $dates = ['deleted_at'];
    use HasApiTokens, HasFactory, Notifiable, Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
		'is_email_verified'
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

    public function usermeta()
    {
        return $this->hasOne(UserMeta::class);
        // note: we can also inlcude Mobile model like: 'App\Mobile'
    }
	
	public function modeles()
    {
        return $this->hasOne(Modeles::class,'user_id', 'id');
        // note: we can also inlcude Mobile model like: 'App\Mobile'
    }

    public function UserGallary(){
        return $this->hasMany(Gallery::class,'user_id', 'id');
    }
    public function UserFav(){
        return $this->hasOne(Favorite::class,'user_id', 'id');
    }

    public function UserAgency(){

        return $this->hasOne(Agency::class,'user_id', 'id');
    }
}
