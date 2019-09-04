<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class YouthController extends Controller
{
    public function index(){

        $firstProduct = Product::where('publication_status',1)
            ->take(4)
            ->get();


        $secondProduct = Product::where('publication_status',1)
            ->skip(4)
            ->take(4)
            ->get();


        $newProduct = Product::where('publication_status',1)
            ->orderBy('created_at','DESC')
            ->take(4)
            ->get();

        $randomProduct = Product::where('publication_status',1)
            ->inRandomOrder()
            ->take(4)
            ->get();

        return view('front-end.home.home',[

            'firstProduct' =>$firstProduct,
            'secondProduct'=> $secondProduct,
            'newProduct' => $newProduct,
            'randomProduct' => $randomProduct
        ]);
    }


    public function category($id){

        $categoryProducts = Product::where('category_id',$id)
            ->where('publication_status',1)
            ->take(3)
            ->get();
        $secondCategoryProducts = Product::where('category_id',$id)
            ->where('publication_status',1)
            ->skip(3)
            ->take(3)
            ->get();

        $randomProduct = Product::where('publication_status',1)
            ->inRandomOrder()
            ->take(4)
            ->get();

        return view('front-end.category.category-products',[

            'categoryProducts'=>$categoryProducts,
            'secondCategoryProducts'=> $secondCategoryProducts,
            'randomProduct' => $randomProduct

        ]);
    }




    public function productDetails($id){


        $randomProduct = Product::where('publication_status',1)
            ->inRandomOrder()
            ->take(3)
            ->get();

        $productDetails = Product::find($id);
        return view('front-end.single.single',[
            'productDetails' => $productDetails,
            'randomProduct'=> $randomProduct

        ]);
    }

    public function contact(){
        return view('front-end.contact.contact');
    }










}
