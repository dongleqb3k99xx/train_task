<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\ProductRepository;
use App\Repositories\ProductTypeRepository;

class ProductController extends Controller{

	private $productRepository;
        private $productTypeRepository;
        
	public function __construct(ProductRepository $productRepository, ProductTypeRepository $productTypeRepository) 
	{
		$this->productRepository = $productRepository;
                $this->productTypeRepository = $productTypeRepository;
	}

	function showHome() 
	{
		$dataProduct = $this->productRepository->getAll();
                $dataTypeProduct = $this->productTypeRepository->getAll();
		return view('product/home', ['dataProduct'=> $dataProduct], ['dataTypeProduct'=> $dataTypeProduct]);
	}
        function getProductWithIdType(Request $request) {
            $id = $request->input( 'id' );
            $dataProduct = $this->productRepository->getProductByIdType($id);
            $dataTypeProduct = $this->productTypeRepository->getAll();
            return view('product/home', ['dataProduct'=> $dataProduct], ['dataTypeProduct'=> $dataTypeProduct]);
        }
        function getProductId(Request $request) {
            $id = $request->input( 'id' );
            $dataProduct = $this->productRepository->getById($id);
            return view('product/product_detail', ['dataProduct'=> $dataProduct]);
        }
        function doAddCart(Request $request) {
            if ($request->session()->has('dataCart')) {
                
                $request->session()->push('dataCart', 'developers');
                echo 'push ok';
            }
            else {
                $request->session()->put('dataCart', 'value');
                echo 'put ok';
            }
        }
}