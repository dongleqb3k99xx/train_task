<?php 

namespace App\Repositories;

interface ProductRepository extends BaseRepository{
    function getProductByIdType($id);
} 