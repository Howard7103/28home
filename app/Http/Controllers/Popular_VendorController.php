<?php

namespace App\Http\Controllers;

use App\Popular_vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class Popular_VendorController extends Controller{

    public function popular_vendor_homepage (){

        $popular_vendor = Popular_Vendor::all();
        $binding =[
            'Popular_Vendor' => $popular_vendor
        ];

        return view('', $binding);

    }

    public function popular_vendor_create (){

        return view('');

    }
    //

    public function popular_vendor_create_save (Request $request){
        $validator = Validator::make($request->all(), [
            'popular_vendor_name' => 'required|max:20|unique:popular_vendor',
            'popular_vendor_vendorlists' => 'required',
        ]);

        if($validator->fails()) {

            return redirect('') /*注意位置*/
                ->withErrors($validator)
                ->withInput();

        }

        $popular_vendor = new Popular_Vendor();
        $popular_vendor -> popular_vendor_id = $request['popular_vendor_id'];
        $popular_vendor -> popular_vendor_name = $request['popular_vendor_name'];
        $popular_vendor -> popular_vendor_vendorlists = $request['popular_vendor_vendorlists'];
        $popular_vendor->save();

        return redirect('/admin/popular_seller');

    }

    public function popular_vendor_update ($Ps_id){
        $popular_vendor = Popular_Vendor::where('popular_vendor_id','=',$Ps_id)->first();

        $binding =[
            'PS' => $popular_vendor,
        ];
        return view('/building/popular_seller/popular_seller_update', $binding);
    }

    public function popular_vendor_update_save($Ps_id,Request $request)
    {
        $validator = Validator::make($request->all(), [
            'popular_vendor_name' => 'required|max:20|unique:popular_vendor',
            'popular_vendor_vendorlists' => 'required',
        ]);

        if($validator->fails()) {

            return redirect('/') /*注意位置*/ /* 'xxxx/xxxx/' . $xxxxx  */
                ->withErrors($validator)
                ->withInput();
        }

        $popular_vendor= Popular_Vendor::where('popular_vendor_id','=',$Ps_id)
            ->update([
                'popular_vendor_name' => $request['popular_vendor_name'],
                'popular_vendor_vendorlists' => $request['popular_vendor_vendorlists'],
            ]);

        return redirect('/admin/popular_seller');

    }

    public function popular_vendor_delete($Ps_id){

        $popular_vendor= Popular_Vendor::where('popular_vendor_id','=',$Ps_id)
            ->delete();

        return redirect('/admin/popular_seller');
    }


}
