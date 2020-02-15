<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class Brand extends Model
{
    
    protected $table = 'brands';
    protected $fillable = ['id','name','icon','description'];


    public function createBrand(Request $request)
    {
        $brand = new Brand;
        $brand->name = $request->name;
        $brand->icon = $request->icon;
        $brand->description = $request->description;
        $brand->save();
    }
}
