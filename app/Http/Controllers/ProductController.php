<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\UserRepository;
class ProductController extends Controller{

    function showHome() {
        
        return view('product/home');
    }
    
}