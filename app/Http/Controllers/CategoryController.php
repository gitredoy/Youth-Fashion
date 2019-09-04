<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.category.add-category');
    }

    public function saveCategory(Request $request){

        $category = new Category();

        $category -> category_name = $request -> category_name;
        $category -> category_description = $request -> category_description;
        $category -> publication_status = $request -> publication_status;
        $category -> save();

        return redirect('/category/add')->with('message','Category info saved successfully');

    }

    public function manageCategory(){

        $categories = Category::all();

        return view('admin.category.manage-category',[
            'categories' => $categories
        ]);
    }

    //Category C R U D start

    public function unpublishedCategory($id){
        $categoriesq = Category::find($id);
        $categoriesq -> publication_status = 0;
        $categoriesq -> save();

        return redirect('/category/manage');

    }
    public function publishedCategory($id){
        $categoriesq = Category::find($id);
        $categoriesq -> publication_status = 1;
        $categoriesq -> save();

        return redirect('/category/manage');

    }

    public function editCategory($id){
        $categories = Category::find($id);
        return view('admin.category.edit-category',[
            'categories' => $categories
        ]);
    }

    public function updateCategory(Request $request){
        $categories = Category::find($request->id);
        $categories -> category_name = $request->category_name;
        $categories->category_description = $request -> category_description;
        $categories->publication_status = $request -> publication_status;
        $categories -> save();
        return redirect('/category/manage')->with('message','Category Updated Successfully');
    }

    public function deleteCategory($id){
        $categories = Category::find($id);
        $categories -> delete();

        return redirect('/category/manage')->with('message','Category deleted Successfully');
    }



}
