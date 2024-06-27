<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductsController extends Controller
{
    public function showAddProducts(){
        return view('addProduct');
    }

    // public function AddNewProducts(Request $request){
    //     $title = $request->input('title');
    //     $price = $request->input('price');
    //     $size = $request->input('sizes');
    //     $qualities = implode(',', $request->input('qualities'));
    //     $description = $request->input('description');
        
    //     $imagesArray = [];
    //     foreach($request->file('product-images') as $image)
    //     {
    //         $destinationPath = 'uploads/';
    //         $filename = $image->getClientOriginalName();
    //         $image->move($destinationPath, $filename);
    //         array_push($imagesArray, $filename);
    //     }

    //     $allImages = implode(';', $imagesArray);

    //     DB::unprepared("INSERT INTO products (product_title, product_price, product_sizes, product_quality, product_description, product_images)
    //     VALUES ('$title', '$price', '$size', '$qualities', '$description', '$allImages')");

    //     return view('addProduct');
    // }

    public function AddNewProducts(Request $request){

        $product = new Product();
        $product->product_title = $request->input('title');
        $product->product_price = $request->input('price');
        $product->product_sizes = $request->input('sizes');
        $product->product_quality = implode(',', $request->input('qualities'));
        $product->product_description = $request->input('description');

        $imagesArray = [];
        foreach($request->file('product-images') as $image)
        {
            $destinationPath = 'uploads/';
            $filename = $image->getClientOriginalName();
            $image->move($destinationPath, $filename);
            array_push($imagesArray, $filename);
        }

        $product->product_images = implode(';', $imagesArray);
        $product->save();

        return redirect('/addProduct')->with('status', "Product Inserted Successfully");
    }

    public function showEditProducts(){
        return view('editProduct');
    }

    public function showProduct($id){
        $product=Product::findOrFail($id);
        $imgs = $product['product_images'];
        return view('viewItemsDetail',["product"=>$product,'imgs'=>$imgs]);
    }

    public function showItems(){
        $shoesData = DB::select('select * from products');

        $shoesDataArray = array();

        foreach ($shoesData as $shoes){
            
            $arrayItem = [$shoes->product_id, $shoes->product_title, $shoes->product_price, $shoes->product_sizes, $shoes->product_quality, $shoes->product_description, $shoes->product_images];
            
            array_push($shoesDataArray, $arrayItem);
        }

        return view('/viewItemsPage', ["shoesDataArray"=>$shoesDataArray]);
    }

    public function showViewProducts(){
        return view('/viewItemsDetail');
    }

    public function showCart(){
        return view('viewItemCart');
    }
}
