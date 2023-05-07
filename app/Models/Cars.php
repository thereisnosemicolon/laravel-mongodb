<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as EloquentModel;

class Cars extends EloquentModel
{
    protected $connection = 'mongodb';
    protected $collection = 'cars';
}
