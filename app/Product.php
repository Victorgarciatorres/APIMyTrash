<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['id','name','icon','description','contaminate','container_id', 'brand_id'];


    public function createProduct(Request $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->icon = $request->icon;
        $product->description = $request->description;
        $product->contaminate = $request->contaminate;
        $product->container_id = $request->container_id;
		$product->brand_id = $request->brand_id;
        $product->save();
    }

    public function getProducts(){
        $products = self::all();
        return $products;
    }
}
