<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
   /* function listMainCategories(){
        
        $mainCategories = Category::where ("parent",0)
        ->select(DB::raw("idCat"),"nomCat","Description","parent")
        ->get();

        return $mainCategories;
        //return view('produits');
    }
    */
    function list(){
        
       $data["mainCategories"] = Category::where(DB::raw('parent'),0)->get();

       //---------------------------------------CABLES----------------------------------------------

       $data["cableCategories"] = Category::where(DB::raw('parent'),100)->get();

       $data["cableConducteurCategories"] = Category::where(DB::raw('parent'),110)->get();
       $data["conducteurAerienProducts"] = Product::where(DB::raw('idCat'),111)->get();
       $data["conducteurCNProducts"] = Product::where(DB::raw('idCat'),112)->get();

       $data["cableBTCategories"] = Category::where(DB::raw('parent'),120)->get();
       $data["domestiquesProducts"] = Product::where(DB::raw('idCat'),121)->get();
       $data["indusrielsProducts"] = Product::where(DB::raw('idCat'),122)->get();

       $data["cableMTCategories"] = Category::where(DB::raw('parent'),130)->get();
       $data["sixProducts"] = Product::where(DB::raw('idCat'),131)->get();
       $data["huitsProducts"] = Product::where(DB::raw('idCat'),132)->get();
       $data["douzeProducts"] = Product::where(DB::raw('idCat'),133)->get();
       $data["dixHuiteProducts"] = Product::where(DB::raw('idCat'),134)->get();

       $data["cableHTCategories"] = Category::where(DB::raw('parent'),140)->get();
       $data["htProducts"] = Product::where(DB::raw('idCat'),140)->get();

       $data["cableOPGWCategories"] = Category::where(DB::raw('parent'),150)->get();
       $data["opgwProducts"] = Product::where(DB::raw('idCat'),150)->get();

       $data["cablePhotoCategories"] = Category::where(DB::raw('parent'),160)->get();
       $data["photProducts"] = Product::where(DB::raw('idCat'),160)->get();

      //-------------------------------------ACCESSOIRES-------------------------------------------






       //$data["cableCategories"] = Category::where(DB::raw('parent'),1)->get();
       //dd($data["cableCategories"]);
       //dd($data);
        return view ("produits",$data) ;

  }
}
