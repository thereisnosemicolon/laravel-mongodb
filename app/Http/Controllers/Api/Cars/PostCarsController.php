<?php

namespace App\Http\Controllers\Api\Cars;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostCarsController extends Controller
{
    public function post()
    {
        return response()->json(['messages' => "this is post cars"]);
    }

    
    
}
