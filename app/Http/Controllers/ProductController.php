<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function productListByCategory($slug)
    {
        try {
            $contentMain = Category::where('slug', $slug)->first();

            $products = DB::table('products')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->select('products.*', 'products.name as product_name','categories.name as category','categories.id as category_id')
            ->where('categories.slug', $slug)
            ->where('products.status', 1)
            ->distinct()
            ->orderBy('products.id', 'asc')
            ->get();

            
            $product_id = $contentMain->id;
            $productTypes = Category::where('status', 1)->get();
            $model = "Category";
            return view('products.index',compact('model','products','product_id','productTypes','contentMain'));

        } catch(\Illuminate\Database\QueryException $e){
            dd($e);
        }
    }

}
