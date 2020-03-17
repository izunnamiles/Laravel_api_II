<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name','email', 'password','phone','address','image','facebook','twitter','verify_passport'
    ];

    /**e
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function discussion(){
        return $this->hasOne(Discussion::class);
    }

    public function discussion_group(){
         return $this->hasMany(Discussion_Group::class);
    }

    public function wallet(){
        return $this->hasMany(Wallet::class);
    }

    public function transaction(){
        return $this->hasMany(Transaction::class);
    }

    public function report(){
        return $this->hasMany(Report::class);
    }
    public function result_option(){
        return $this->hasMany(ResultOption::class);
    }
    public function contact(){
        return $this->hasMany(Contact::class);
    }
}
