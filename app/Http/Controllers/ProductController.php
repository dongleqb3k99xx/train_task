<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\ProductRepository;

class ProductController extends Controller{

	private $productRepository;

	public function __construct(ProductRepository $productRepository) 
	{
		$this->productRepository = $productRepository;
		$this->middleware('auth');
	}
	

	function showHome() 
	{
		$data = $this->productRepository->getAll();
		return view('product/home', ['data'=> $data]);
	}
	public function showRegister(){

		return view('product/demo');
	}
}