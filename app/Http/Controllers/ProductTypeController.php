<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\ProductTypeRepository;

class ProductTypeController extends Controller{

        private $productTypeRepository;
        
	public function __construct(ProductTypeRepository $productTypeRepository) 
	{
            $this->productTypeRepository = $productTypeRepository;
	}
}