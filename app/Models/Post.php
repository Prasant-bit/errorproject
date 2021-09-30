<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'posts';
    protected $fillable = [
        'user_id',
        'name',
        'address',
        'body',
        'email'
    ];
    use HasFactory;

    public function user(){
        return $this->belongsTo('App\Models\Post');
    }
}
