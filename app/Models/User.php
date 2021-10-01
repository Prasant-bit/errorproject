<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function post()
    {
        return $this->hasOne('App\Models\Post');
    }

    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }

    //many to many

    public function roles()
    {
        //to customize the tables and columns follow the below code
        // return $this->belongsToMany('App\Models\Role','users_role','user_id','role_id'); if there is unique table name, unique id name yo lekhnu parxa otherwise tala ko code will be ok 


        return $this->belongsToMany('App\Models\Role')->withPivot('created_at');
    }

    public function photos()
    {
        return $this->morphMany('App\Models\Photo', 'imageable');
    }

    public function videos()
    {
        return $this->morphMany('App\Models\video', 'videoable');
    }
}
