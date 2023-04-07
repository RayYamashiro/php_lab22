<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Category extends Model
{
    protected $table = 'categories';
    use HasFactory;

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    public function getCategoryByCategoryId($categoryId)
    {
        return DB::table($this->table)->where('id','=',$categoryId)->get();
    }

    public function getCategoryById($id)
    {
        return DB::table($this->table)->where('id','=',$id)->get();
    }
}
