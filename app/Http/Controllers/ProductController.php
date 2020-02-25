<?php

namespace App\Http\Controllers;

use App\News;
use App\Product;
use App\User;
use App\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    //
    public function product_homepage (){

        $product = Product::all();

        $binding =[
            'Product' => $product
        ];

        return view('/building/product/product_all', $binding);  /*注意位置*/

    }
    public function product_create (){

        return view('/building/product/product_create'); /*注意位置*/

    }

    public function product_create_save (Request $request){

        $validator = Validator::make($request -> all(),[
            'product_category_vendor_id' => 'required | between:1,5',
            'product_name' => 'required | min:1 | max:15',
            'product_introduce_content' => 'required | min:1 | max:500',
            'product_price' => 'required | max:7',
            'product_discount' => 'required | max:2',
            'product_sell_count' => 'required | max:4',
            'product_delivery_fee' => 'required | max:6',
        ]);

        $path = $request->file('product_photo')->store('img');


        if ($validator->fails()){

            return redirect('/admin/product_create') /*注意位置*/
                ->withErrors($validator)
                ->withInput();

        }

        $request = $request->all();

        $product = new Product();
        $product -> vendor_id = $request['vendor_id'];
        $product -> product_category_id = $request['product_category_id'];
        $product -> product_category_vendor_id = $request['product_category_vendor_id'];
        $product -> product_name = $request['product_name'];
        $product -> product_introduce_content = $request['product_introduce_content'];
        $product -> product_photo = $path;
        $product -> product_price = $request['product_price'];
        $product -> product_discount = $request['product_discount'];
        $product -> product_sell_star_date = $request['product_sell_star_date'];
        $product -> product_sell_end_date = $request['product_sell_end_date'];
        $product -> product_sell_count = $request['product_sell_count'];
        $product -> product_now_count = $request['product_now_count'];
        $product -> product_delivery_fee = $request['product_delivery_fee'];
        $product -> product_status = $request['product_status'];
        $product->save();

        return redirect('/admin/product'); /*注意位置*/

    }

    public function product_update ($product_id){

        $product = Product::where('product_id', '=', $product_id)
            ->first();

        $binding =[
            'Product' => $product
        ];
        return view('/building/product/product_update', $binding); /*注意位置*/

    }
    public function product_update_save ($product_id, Request $request)
    {

        $validator = Validator::make($request -> all(),[
            'product_category_vendor_id' => 'required | between:1,5' ,
            'product_name' => 'required | min:1 | max:15' ,
            'product_introduce_content' => 'required | min:1 | max:500' ,
            'product_price' => 'required | max:7',
            'product_discount' => 'required | max:2',
            'product_sell_count' => 'required | max:4',
            'product_now_count' => 'required | max:4',
            'product_delivery_fee' => 'required | max:6',
        ]);

        $path = $request->file('product_photo')->store('img');


        if ($validator->fails()){

            return redirect('/admin/product/{product_id}'.$product_id) /*注意位置*/
                ->withErrors($validator)
                ->withInput();

        }

        $product = Product::where('product_id', '=', $product_id)
            ->update([
                'product_category_id' => $request['product_category_id'],
                'product_category_vendor_id' => $request['product_category_vendor_id'],
                'product_name' => $request['product_name'],
                'product_introduce_content' => $request['product_introduce_content'],
                'product_photo' => $path,
                'product_price' => $request['product_price'],
                'product_discount' => $request['product_discount'],
                'product_sell_star_date' => $request['product_sell_star_date'],
                'product_sell_end_date' => $request['product_sell_end_date'],
                'product_sell_count' => $request['product_sell_count'],
                'product_now_count' => $request['product_now_count'],
                'product_delivery_fee' => $request['product_delivery_fee'],
                'product_status' => $request['product_status']
            ]);

        return redirect('/admin/product'); /*注意位置*/

    }

    public function product_delete($product_id){

        $product= Product::where('product_id' ,'=',$product_id)
            ->delete();

        return redirect('/admin/product'); /*注意位置*/

    }

}
