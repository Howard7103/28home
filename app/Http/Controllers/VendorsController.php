<?php

namespace App\Http\Controllers;

use App\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class VendorsController extends Controller
{
    //
    public function vendor_homepage (){

        $vendor = Vendor::all();
        $binding =[
            'Vendor' => $vendor
        ];

        return view('building/vendor/vendor_all', $binding);    /*注意位置*/

    }
    public function vendor_create (){

        return view('/building/vendor/vendor_create');    /*注意位置*/

    }

    public function vendor_create_save (Request $request){

        $validator = Validator::make($request -> all(),[
            'vendor_name' => 'required | min:1 | max:15',
            'vendor_email' => 'required |  max:100',
            'vendor_address' => 'required | max:100',
            'vendor_telephone' => 'required | max:15',
            'vendor_bank_account' => 'required | max:19',
            'vendor_introduce_content' => 'required | max:500',
        ]);


        if ($validator->fails()){

            return redirect('/admin/vendor_create')    /*注意位置*/
                ->withErrors($validator)
                ->withInput();

        }

        $vendor = new Vendor();
        $vendor -> user_id  = $request['user_id'];
        $vendor -> vendor_name = $request['vendor_name'];
        $vendor -> vendor_email = $request['vendor_email'];
        $vendor -> vendor_address = $request['vendor_address'];
        $vendor -> vendor_telephone = $request['vendor_telephone'];
        $vendor -> vendor_grade = $request['vendor_grade'];
        $vendor -> vendor_bank_account  = $request['vendor_bank_account'];
        $vendor -> vendor_self_photo = $request -> file('vendor_self_photo') -> store('image/vendor_self');
        $vendor -> vendor_shop_photo = $request -> file('vendor_shop_photo') -> store('image/vendor_shop');
        $vendor -> vendor_introduce_content  = $request['vendor_introduce_content'];
        $vendor -> vendor_product_category  = $request['vendor_product_category_name'];
        $vendor->save();

        return redirect('/admin/vendor');    /*注意位置*/

    }

    public function vendor_update ($vendor_id){

        $vendor = Vendor::where('vendor_id', '=', $vendor_id)->first();
        $binding = [
            'Vendor' => $vendor
        ];

        return view('building/vendor/vendor_update', $binding);    /*注意位置*/

    }

    public function vendor_update_save ($vendor_id, Request $request){

        $validator = Validator::make($request -> all(),[
            'vendor_name' => 'required | min:1 | max:15',
            'vendor_email' => 'required |  max:100',
            'vendor_address' => 'required | max:100',
            'vendor_telephone' => 'required | max:15',
            'vendor_grade' => 'required | max:2',
            'vendor_bank_account' => 'required | max:19',
            'vendor_introduce_content' => 'required | max:500',
            'vendor_product_category' => 'required | max:45',
        ]);


        if ($validator->fails()){

            return redirect('/admin/vendor/{vendor_id}' . $vendor_id)    /*注意位置*/
                ->withErrors($validator)
                ->withInput();

        }

        $vendor = Vendor::where('vendor_id', '=', $vendor_id)
            ->update([
                'user_id' => $request['user_id'],
                'vendor_name' => $request['vendor_name'],
                'vendor_email' => $request['vendor_email'],
                'vendor_address' => $request['vendor_address'],
                'vendor_telephone' => $request['vendor_telephone'],
                'vendor_grade' => $request['vendor_grade'],
                'vendor_bank_account' => $request['vendor_bank_account'],
                'vendor_self_photo' => $request -> file('vendor_self_photo') -> store('image/vendor_self'),
                'vendor_shop_photo' => $request -> file('vendor_shop_photo') -> store('image/vendor_shop'),
                'vendor_introduce_content' => $request['vendor_introduce_content'],
                'vendor_product_category' => $request['vendor_product_category']
            ]);



        return redirect('/admin/vendor');    /*注意位置*/

    }
    public function vendor_delete($vendor_id){

        $Vendor= Vendor::where('vendor_id' ,'=',$vendor_id)
            ->delete();

        return redirect('/admin/vendor');    /*注意位置*/

    }
}
