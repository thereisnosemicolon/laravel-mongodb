<?php

namespace App\Http\Controllers\Api\Motorcycles;

use App\Http\Controllers\Controller;
use App\Http\Resources\ResponseResource;
use App\Services\Api\Motorcycles\PostMotorcyclesService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class PostMotorcyclesController extends Controller
{
    public function post(Request $request, PostMotorcyclesService $postService)
    {
        $data = $request->only([
            'mesin', 'tipe_suspensi', 'tipe_transmisi'
        ]);
        
        $result = ['status' => 200];

        try {

            $validate = Validator::make($data,[
                'mesin' => 'required|string',
                'tipe_suspensi' => 'required|string',
                'tipe_transmisi' => 'required|string',
            ]);
            
            if ($validate->fails()){
                $result['status'] = 400;
                $result['data'] = $validate->errors()->first();

            } else {
                $result['data'] = $postService->post($data);
            }

        } catch (Exception $e){
            $result = [
                'status'  => 500,
                'messages' => $e->getMessage()
            ];
        }

        return new ResponseResource($result);
    }

}
