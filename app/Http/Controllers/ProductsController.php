<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    //
    public function index(Request $request)
    {
        $product = Product::where('idProd', $request->id)->first();
        return view ("detail_produit", compact('product'));
    }
    /*
    public function getCategoryProducts(Request $request)
    {
        $categoryProducts = Product::where(DB::raw('idCat'),$request->id)
      ->get();
        return $categoryProducts;
    }
    */

}
