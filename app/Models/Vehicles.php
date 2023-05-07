<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as EloquentModel;

class Vehicles extends EloquentModel
{
    protected $connection = 'mongodb';
    protected $collection = 'vehicles_collection';
}
