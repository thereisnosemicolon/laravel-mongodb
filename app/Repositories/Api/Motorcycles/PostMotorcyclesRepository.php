<?php

namespace App\Repositories\Api\Motorcycles;
use App\Models\Motorcycles;
use Exception;
use PhpParser\Node\Expr\Cast\Array_;

class PostMotorcyclesRepository{

    public function save($post){
        try{
            $motorcycles = new Motorcycles();
            $motorcycles->mesin = $post['mesin'];
            $motorcycles->tipe_suspensi = $post['tipe_suspensi'];
            $motorcycles->tipe_transmisi = $post['tipe_transmisi'];
            $motorcycles->save();
            $result = $motorcycles->fresh(); 
        } catch (Exception $e) {
            $result = $e->getMessage();
        }
        return $result;
    }
}

?>