<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as EloquentModel;

class Motorcycles extends EloquentModel
{
    protected $connection = 'mongodb';
    protected $collection = 'motorcycles';
}
