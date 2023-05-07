<?php

namespace App\Http\Controllers\Api\Motorcycles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostMotorcyclesController extends Controller
{
    public function post()
    {
        return response()->json(['messages' => "this is post motorcyclce"]);
    }

}
