<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Product extends Model
{
    protected $table = 'products';
    use HasFactory;

    public function category(): HasOne
    {
        return $this->belongsTo(Category::class);
    }

    public function getProductByProductId($productId)
    {
        return DB::table($this->table)->where('id', '=', $productId)->get();
    }

    public function  getProductByCategoryIdAndPrice($categoryId, $filter)
    {

        $products = DB::table($this->table)->where('category_id','=',$categoryId);
        if(!empty($filter))
            $products = $products->where($filter);
        return $products->get();

    }

    public function getAll()
    {
        $products = DB::table($this->table);
        return $products->get();
    }
}
