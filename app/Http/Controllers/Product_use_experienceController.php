<?php

namespace App\Http\Controllers;

use App\Product_use_experiences;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Product_use_experienceController extends Controller
{
    //
    public function product_use_experience_all (){      //顯示所有使用者資料

        $product_use_experiences = Product_use_experiences::all();
        $binding =[
            'Product_use_experiences' => $product_use_experiences
        ];

        return view('/building/product_use_experience/product_use_experience_all', $binding);

    }


    public function product_use_experience_read ($Product_use_experienceID){

        $product_use_experiences = Product_use_experiences::where('product_use_experiences_id','=',$Product_use_experienceID)->first();

        $bind =[
            'Product_use_experiences' => $product_use_experiences
        ];

        return view('/building/product_use_experience/product_use_experience_read', $bind);

    }
    public function product_use_experience_delete($Product_use_experienceID){

        $user= Product_use_experiences::where('product_use_experiences_id','=',$Product_use_experienceID)
        ->delete();

        return redirect('/admin/product_use_experience');

    }
}
