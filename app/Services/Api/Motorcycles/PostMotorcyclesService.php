<?php

namespace App\Services\Api\Motorcycles;

use App\Repositories\Api\Motorcycles\PostMotorcyclesRepository;
use Exception;

class PostMotorcyclesService{
    protected $postRepository;


    public function __construct(PostMotorcyclesRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function post($data){
        try {
            $repo = new PostMotorcyclesRepository();
            $result =  $repo->save($data);
        } catch (Exception $e) {
            $result = $e->getMessage();
        }
        return $result;
    }
}

?>