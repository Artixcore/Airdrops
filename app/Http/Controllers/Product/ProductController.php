<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Product_Category;
use App\Models\Product_Sub_Category;
use App\Models\ProductBrand;
use App\Models\ProductDealer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function products(){
        return view('product.view');
    }

    public function newproducts(){
        return view('product.new');
    }

    public function addproducts(Request $request){

        $path = "Product";
        $images = time() . "." . $request->file("image")->extension();
        $file = $request->file('image');
        $file->storeAs($path, $images, 'local');

        $product = new Product();

        $product->image = $images;
        $product->user_id = Auth::user()->id;
        $product->p_number = 'P'. uniqid();
        $product->category = $request->category;
        $product->sub_category = $request->sub_category;
        $product->name = $request->name;
        $product->details = $request->details;
        $product->quantity = $request->quantity;
        $product->com_price = $request->com_price;
        $product->dealer_price = $request->dealer_price;
        $product->price = $request->price;
        $product->size = $request->size;
        $product->discount = $request->discount;
        $product->brand = $request->brand;
        $product->dealer = $request->dealer;
        $product->production_fate = $request->production_fate;
        $product->expire_date = $request->expire_date;
        $product->save();

        return redirect()->route('products')->with('success', 'Product Added');

    }

    public function product_category(Request $request){
        $path = "ProductCategory";
        $categoryimg = time() . "." . $request->file("image")->extension();
        $file = $request->file('image');
        $file->storeAs($path, $categoryimg, 'local');

        $cat = new Product_Category();
        $cat->image = $categoryimg;
        $cat->user_id = Auth::user()->id;
        $cat->category = $request->category;
        $cat->save();
        return redirect()->back()->with('success','added');
    }

    public function product_subcategory(Request $request){
        $path = "ProductsubCategory";
        $subcategoryimg = time() . "." . $request->file("image")->extension();
        $file = $request->file('image');
        $file->storeAs($path, $subcategoryimg, 'local');

        $cat = new Product_Sub_Category();
        $cat->image = $subcategoryimg;
        $cat->user_id = Auth::user()->id;
        $cat->cat_id = $request->cat_id;
        $cat->sub_category = $request->sub_category;
        $cat->save();
        return redirect()->back()->with('success','added');
    }

    public function product_Dealer(Request $request){
        $path = "productDealer";
        $dealer_image = time() . "." . $request->file("dealer_image")->extension();
        $file = $request->file('dealer_image');
        $file->storeAs($path, $dealer_image, 'local');

        $cat = new ProductDealer();
        $cat->dealer_image = $dealer_image;
        $cat->dealer_number = $request->dealer_number;
        $cat->dealer_name = $request->dealer_name;
        $cat->licence_number = $request->licence_number;
        $cat->dealer_details = $request->dealer_details;
        $cat->save();
        return redirect()->back()->with('success','added');
    }


    public function product_brands(Request $request){
        $path = "Brand";
        $brand_logo = time() . "." . $request->file("brand_logo")->extension();
        $file = $request->file('brand_logo');
        $file->storeAs($path, $brand_logo, 'local');

        $cat = new ProductBrand();
        $cat->brand_logo = $brand_logo;
        $cat->brand_name = $request->brand_name;
        $cat->brand_type = $request->brand_type;
        $cat->save();
        return redirect()->back()->with('success','added');
    }

}
