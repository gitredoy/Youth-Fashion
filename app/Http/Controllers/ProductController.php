<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use Image;
use DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct(){

        $categories = Category::where('publication_status',1)->get();
        $brands = Brand::where('publication_status',1)->get();

        return view('admin.product.add-product',[
            'categories'=> $categories,
            'brands'=>$brands
        ]);
    }

    protected function productInfoValidated($request){
        $this->validate($request,[
            'category_id'=>'required',
            'brand_id'=>'required',
            'product_name'=>'required',
            'product_price'=>'required',
            'product_quantity'=>'required',
            'sort_desc'=>'required',
            'long_desc'=>'required',
            'product_image'=>'required',
            'publication_status'=>'required',

        ]);
    }

    protected function productImageUpload($request){
        $productImage = $request ->file('product_image');
        $imageName = $productImage->getClientOriginalName();
        $directory = 'admin/product-images/';
        $imageUrl = $directory.$imageName;
        //$productImage->move($directory,$imageName);
        //Image::make($productImage)->resize(177,255)->save($imageUrl);
         Image::make($productImage)->save($imageUrl);



        return $imageUrl;
    }

    protected function productSaveInfo($request,$imageUrl){
        $product = new Product();
        $product -> category_id = $request ->category_id ;
        $product ->brand_id  = $request ->brand_id ;
        $product ->product_name  = $request ->product_name ;
        $product -> product_price = $request ->product_price ;
        $product -> product_quantity = $request ->product_quantity ;
        $product -> sort_desc = $request -> sort_desc;
        $product ->long_desc  = $request ->long_desc ;
        $product -> product_image = $imageUrl;
        $product -> publication_status = $request ->publication_status ;
        $product->save();
    }

    public function saveProduct(Request $request){
        $this->productInfoValidated($request);
        $imageUrl = $this->productImageUpload($request);
        $this->productSaveInfo($request,$imageUrl);
        return redirect('/product/add')->with('message','New Product added successfully');



    }

    public function manageProduct(){
        //$products = Product::all();
        $products = DB::table('products')
                        ->join('categories','products.category_id','=','categories.id')
                        ->join('brands','products.brand_id','=','brands.id')
                        ->select('products.*','categories.category_name','brands.brand_name')
                        ->get();

        return view('admin.product.manage-product',[
            'products'=>$products
        ]);

    }

    // Product C-R-U-D start

    public function editProduct($id){
        $product = Product::find($id);
        $categories = Category::where('publication_status',1)->get();
        $brands = Brand::where('publication_status',1)->get();
        return view ('admin.product.edit-product',[
            'product' => $product,
            'categories'=> $categories,
            'brands'=>$brands
        ]);
    }

    private function productInfoUpdate($product,$request,$imageUrl){
        $product -> category_id = $request ->category_id ;
        $product ->brand_id  = $request ->brand_id ;
        $product ->product_name  = $request ->product_name ;
        $product -> product_price = $request ->product_price ;
        $product -> product_quantity = $request ->product_quantity ;
        $product -> sort_desc = $request -> sort_desc;
        $product ->long_desc  = $request ->long_desc ;
        $product -> product_image = $imageUrl;
        $product -> publication_status = $request ->publication_status ;
        $product->save();
    }

    private function productUpdateWithoutImage($product,$request){
        $product -> category_id = $request ->category_id ;
        $product ->brand_id  = $request ->brand_id ;
        $product ->product_name  = $request ->product_name ;
        $product -> product_price = $request ->product_price ;
        $product -> product_quantity = $request ->product_quantity ;
        $product -> sort_desc = $request -> sort_desc;
        $product ->long_desc  = $request ->long_desc ;
        $product -> publication_status = $request ->publication_status ;
        $product->save();
    }

    public function updateProduct(Request $request){
        $product = Product::find($request->id);

        $productImage = $request ->file('product_image');

        if($productImage){
            unlink($product->product_image);
            $imageUrl = $this->productImageUpload($request);
            $this ->productInfoUpdate($product,$request,$imageUrl);
        }
        else{
            $this->productUpdateWithoutImage($product,$request);
        }

        return redirect('/product/manage')->with('message','Product Updated Successfully');
    }
}
