<?php

namespace App\Services\Api\Motorcycles;

use App\Repositories\Api\Motorcycles\PostMotorcyclesRepository;


class PostMotorcycleService{
    protected $postRepository;


    public function __construct(PostMotorcyclesRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }
}

?>