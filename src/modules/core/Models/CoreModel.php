<?php

namespace GSE\Core\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class CoreModel extends Model
{
    protected $primaryKey = '_id';
    protected $connection = 'mongodb';
}
