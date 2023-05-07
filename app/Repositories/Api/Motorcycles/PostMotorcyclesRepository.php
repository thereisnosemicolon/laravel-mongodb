<?php

namespace App\Repositories\Api\Motorcycles;
use App\Models\Motorcycles;

class PostMotorcyclesRepository{
    protected $post;

    public function __construct(Motorcycles $post)
    {   
        $this->post = $post;
    }
}

?>