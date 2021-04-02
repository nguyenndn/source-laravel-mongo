<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Post extends Model
{
    protected $primaryKey = '_id';
    
    protected $fillable = [
        'title', 'content', 'user_id'
    ];
}
