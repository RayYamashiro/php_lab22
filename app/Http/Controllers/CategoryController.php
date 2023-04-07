<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
class CategoryController extends Controller
{
    private $products;
    private $category;


    public function __construct()
    {
        $this->category = new Category();
        $this->products = new Product();
    }

    public function showById($id,Request $request){
        $view = $this->category->getCategoryById($id);
        $filters = [];

        if (!empty($request->txtPrice)){
            $price = $request->txtPrice;
            $filters[]=['products.price','=',$price];
        }

        $pro = $this->products->getProductByCategoryIdAndPrice($id,$filters);
        return view('category',compact('view','pro'));
    }

}
