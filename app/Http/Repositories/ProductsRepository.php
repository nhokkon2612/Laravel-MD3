<?php


namespace App\Http\Repositories;


use App\Models\Products;

class ProductsRepository
{
    protected $productsModel;
    public function __construct(Products $products)
    {
        $this->productsModel=$products;
    }

    public function getAll()
    {
        return Products::with('author','categories')->paginate(5);
    }

}
