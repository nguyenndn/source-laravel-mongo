<?php

namespace GSE\Users\Models;

use Jenssegers\Mongodb\Auth\User as Authenticatable;
//use GSE\Core\Models\CoreModel as Model;

use Illuminate\Support\Facades\Schema;

class User extends Authenticatable
{
    protected $primaryKey = '_id';
    protected $connection = 'mongodb';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    /**
     * Get profiles of user
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
        return;
    }
    
}
