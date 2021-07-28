<?php


namespace App\Http\Services;


use App\Http\Repositories\ProductsRepository;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsService
{
    protected $productsRepository;

    public function __construct(ProductsRepository $productsRepository)
    {
        $this->productsRepository = $productsRepository;
    }

    public function index()
    {
        return $this->productsRepository->getAll();
    }


    public function create()
    {
        //
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
