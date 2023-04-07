<?php

namespace App\Console\Commands;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Console\Command;
class CategoryCommand extends Command
{
    protected $signature = 'product:category {productId}';


    // возвращаем символьный код категории

    public function handle()
    {
        $category = new Category();
        $product = new Product();
        $categoryId = null;
        $code = null;

        $productId = (int)$this->argument('productId');
        $temp = $product->getProductByProductId($productId);

        foreach ($temp as $product)
        {
            $categoryId = $product->category_id;
        }

        $temp2 = $category->getCategoryByCategoryId($categoryId);

        foreach ($temp2 as $category)
        {
            $code = $category->code;
        }
        $this->info('Character code = '.$code);
    }

}
