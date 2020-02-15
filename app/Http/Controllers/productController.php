<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Controllers\blacklistController;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new product();
        $product->createProduct($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $blacklist = new blacklistController();
        $blacklists = $blacklist->show($request);


        $product = new Product();
        $products = $product->getProducts();


        foreach ($products as $key => $product) {
            foreach ($blacklists as $key => $value) {
                if ($product->id == $value->product_id) {
                    $product->{"banned"} = true;
                    break;
                }else{
                    $product->{"banned"} = false;
                }
            }
        }
        return $products;
    }

    public function showProductBanned(Request $request)
    {
        $blacklist = new blacklistController();
        $blacklists = $blacklist->show($request);


        $product = new Product();
        $products = $product->getProducts();

        $productsBanned =array();

        foreach ($products as $key => $product) {
            foreach ($blacklists as $key => $value) {
                if ($product->id == $value->product_id) {
                    array_push($productsBanned, $product);
                }
            }
        }
        return $productsBanned;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
