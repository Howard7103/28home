<?php

namespace App\Http\Controllers;

use App\Popular_product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class Popular_ProductsController extends Controller
{

    public function popular_product_homepage (){

        $popular_product = Popular_Product::all();
        $binding =[
            'Popular_Product' => $popular_product
        ];

        return view('', $binding);    /*注意位置*/

    }

    public function popular_product_create (){

        return view('');    /*注意位置*/

    }

    public function popular_product_create_save (Request $request){

        $validator = Validator::make($request->all(), [
            'popular_product_name' => 'required|max:20|unique:popular_product',
            'popular_product_productlists' =>'required',
        ]);

        if($validator->fails()) {

            return redirect('/admin/popular_products_create')    /*注意位置*/
                ->withErrors($validator)
                ->withInput();

        }

        $popular_product = new Popular_Product();
        $popular_product -> popular_product_id = $request['popular_product_id'];
        $popular_product -> popular_product_name = $request['popular_product_name'];
        $popular_product -> popular_product_productlists = $request['popular_product_productlists'];
        $popular_product->save();

        return redirect('');    /*注意位置*/

    }

    public function popular_product_updata ($popular_product_id){

        $popular_product = Popular_Product::where('popular_product_id','=',$popular_product_id)->first();
        $binding =[
            'Popular_Product' => $popular_product,
        ];

        return view('', $binding);    /*注意位置*/

    }

    public function popular_product_updata_save ($popular_product_id,Request $request){

        $validator = Validator::make($request->all(), [
            'popular_product_name' => 'required|max:20|unique:popular_product',
            'popular_product_productlists' =>'required',
        ]);

        if($validator->fails()) {

            return redirect('/admin/popular_products_create')     /*注意位置*/ /* 'xxxx/xxxx/' . $xxxxx_id  */
                ->withErrors($validator)
                ->withInput();

        }

        $popular_product= Popular_Product::where('popular_product_id','=',$popular_product_id)
        ->update([
            'popular_product_name' => $request['popular_product_name'],
            'popular_product_productlists' => $request['popular_product_productlists'],
        ]);

        return redirect('/admin/popular_products');    /*注意位置*/

    }
    public function popular_product_delete ($popular_product_id){

        $popular_product= Popular_Product::where('popular_product_id' ,'=',$popular_product_id)
            ->delete();

        return redirect('/admin/popular_products');    /*注意位置*/

    }
}
