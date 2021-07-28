<?php

namespace App\Http\Controllers;

use App\Http\Services\ProductsService;
use App\Models\Authors;
use App\Models\Categories;
use App\Models\products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    protected $productsService;
    public function __construct(ProductsService $productsService)
    {
        $this->productsService=$productsService;
    }

    public function index()
    {
        $products=$this->productsService->index();
        return view('admin.products.productList',compact('products'));
    }


    public function create()
    {
        $authors=Authors::all();
        $categories=Categories::all();
        return view('admin.products.create',compact('authors','categories'));
    }


    public function store(Request $request)
    {
        //
    }


    public function show(products $products)
    {
        //
    }


    public function edit(products $products)
    {
        //
    }


    public function update(Request $request, products $products)
    {
        //
    }


    public function destroy(products $products)
    {
        //
    }
}
