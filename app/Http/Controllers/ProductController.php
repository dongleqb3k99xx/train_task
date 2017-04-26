<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\ProductRepository;
use App\Repositories\ProductTypeRepository;
use App\ModelViews\ProductViewModel;

class ProductController extends Controller{

	private $productRepository;
        private $productTypeRepository;
        private $productViewModel;
        
	public function __construct(ProductRepository $productRepository, ProductTypeRepository $productTypeRepository) 
	{
		$this->productRepository = $productRepository;
                $this->productTypeRepository = $productTypeRepository;
                $this->middleware('auth');
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
                $productViewModel = new ProductViewModel();
                $productViewModel->productId = $request->input( 'id' );
                $productViewModel->quantity = 1;
                //Add data for session
                $request->session()->push('dataCart', $productViewModel);
                echo count(session('dataCart'));
            }
            else {
                //remove all Session :
                $arrCart = array();
                $productViewModel = new ProductViewModel();
                $productViewModel->productId = $request->input( 'id' );
                $productViewModel->quantity = 1;
                array_push($arrCart, $productViewModel);
                //Create new session :
                $request->session()->put('dataCart', $arrCart);
            }
        }

        public function showRegister(){

		return view('product/demo');
	}
}