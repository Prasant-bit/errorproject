<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    use HasFactory;

    protected $fillable = ['path', 'videoable_id', 'videoable_type'];

    public function videoable()
    {
        return $this->morphTo();
    }
}
