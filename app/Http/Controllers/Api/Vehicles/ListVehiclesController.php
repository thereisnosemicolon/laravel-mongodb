<?php

namespace App\Http\Controllers\Api\Vehicles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListVehiclesController extends Controller
{
    public function list(){
        return response()->json(['messages' => "This is vehicle list"]);
    }
}
