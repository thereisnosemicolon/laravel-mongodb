<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VehiclesController extends Controller
{
    public function list(){
        return response()->json(['messages' => csrf_token()]);
    }
    public function post(Request $request){
        return response()->json(['messages' => $request, 'token' => csrf_token()]);
    }
}
