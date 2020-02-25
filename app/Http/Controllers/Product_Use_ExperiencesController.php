<?php

namespace App\Http\Controllers;

use App\Product_use_experiences;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class Product_Use_ExperiencesController extends Controller
{
    //
    public function product_use_experiences_homepage (){

        $product_use_experiences = Product_use_experiences::all();
        $binding =[
            'Product_Use_Experiences' => $product_use_experiences
        ];

        return view('', $binding);    /*注意位置*/

    }

    public function read ($product_use_experiences_id){

        $product_use_experiences = Product_Use_Experiences::where('product_use_experiences_id','=',$product_use_experiences_id)->first();

        $binding =[
            'Product_Use_Experiences' => $product_use_experiences
        ];

        return view('', $binding);    /*注意位置*/

    }

    public function product_use_experiences_delete($product_use_experiences_id){

        $product_use_experiences= Product_Use_Experiences::where('product_use_experiences_id','=',$product_use_experiences_id)
        ->delete();

        return redirect('/admin/questions');    /*注意位置*/

    }
}
