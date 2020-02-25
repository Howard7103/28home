<?php

namespace App\Http\Controllers;

use App\Customer;
use App\User;
use App\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{
    public function home()
    {
        Session::put('user_id');
        return view('building.home.admin');
    }

    public function register()
    {
        if($_SERVER['REQUEST_URI'] == '/en') {
            App::setlocale('en');
        }else{
            App::setlocale(config('app.fallback_locale'));
        }
        Session::put('locale',App::getlocale());

        return view('building.28home.register');

    }

    //
    public function register_save(Request $request)
    {

        Session::get('locale',App::getlocale());

        $validator = Validator::make($request->all(), [

            'user_account' => 'required|min:8|max:30|unique:user',
            'user_password' => 'required|min:8|max:20|same:user_password_confirmation',
            'user_password_confirmation' => 'required|min:8|max:20',
            'roleselect' => 'required',

        ]);

        if ($validator->fails()) {
                 return back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = new User();
        $user->user_id = $request['user_id'];
        $user->user_account = $request['user_account'];
        $user->user_password = Hash::make($request['user_password']);
        $user->user_status = '1';

        if ($request['roleselect'] == "Buyer") {
            $user->user_type = "1";
        } else if ($request['roleselect'] == "Seller") {
            $user->user_type = "2";
        } else {
            $user->user_type = "3";
        }

        $user->save();
        $request->session()->put('user_id',$user->user_id);

        Session::put("user_type", $user->user_type);
        switch ($user->user_type) {
            case "1";
                return redirect('register_buyer');
            case "2";
            return redirect('register_vendor');
            case "3";
                return redirect('register_success');
        }
    }

    public function buyer_create()
    {

        Session::get('locale',App::getlocale());

        return view('building.28home.register_buyer');

    }

    public function buyer_save(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'customer_name' => 'required|min:1|max:15|unique:customer',
            'customer_email' => 'required|max:100|',
            'customer_birthday' => 'required|date|',
            'customer_address' => 'required|max:100|',
            'customer_telephone' => 'required|max:15|',
            'customer_bank_account' => 'required|max:19|',

        ]);
        if ($validator->fails()) {
            return redirect('register_buyer')
                ->withErrors($validator)
                ->withInput();
        }

        $customer = new Customer();
        $customer-> user_id = $request->session()->get('user_id');
        $customer->customer_name = $request['customer_name'];
        $customer->customer_email = $request['customer_email'];
        $customer->customer_birthday = $request['customer_birthday'];
        $customer->customer_address = $request['customer_address'];
        $customer->customer_grade = '1';
        $customer->customer_telephone = $request['customer_telephone'];
        $customer->customer_bank_account = $request['customer_bank_account'];
        $customer->customer_self_photo = $request['customer_self_photo'];
        $customer->save();

        return view('building.28home.success');

    }

    public function vendor_create()
    {

        Session::get('locale',App::getlocale());

        return view('building.28home.register_vendor');

    }


    public function vendor_save(Request $request)
    {

        $validator = Validator::make($request->all(), [

            'vendor_name' => 'required|min:1|max:15|unique:vendor',
            'vendor_email' => 'required|max:100|',
            'vendor_address' => 'required|max:100|',
            'vendor_telephone' => 'required|numeric|max:15|',
            'vendor_bank_account' => 'required|max:19|',
            'vendor_introduce_content' => 'required|min:1|max:500',
            'vendor_product_category' => 'required|max:10',

        ]);

        if ($validator->fails()) {
            return redirect('register_vendor')
                ->withErrors($validator)
                ->withInput();

        }

        $vendor = new Vendor();
        $vendor-> user_id = $request->session()->get('user_id');
        $vendor->vendor_name = $request['vendor_name'];
        $vendor->vendor_email = $request['vendor_email'];
        $vendor->vendor_address = $request['vendor_address'];
        $vendor->vendor_telephone = $request['vendor_telephone'];
        $vendor->vendor_grade = '1';
        $vendor->vendor_bank_account = $request['vendor_bank_account'];
        $vendor->vendor_self_photo = $request['vendor_self_photo'];
        $vendor->vendor_shop_photo = $request['vendor_shop_photo'];
        $vendor->vendor_introduce_content = $request['vendor_introduce_content'];
        $vendor->vendor_product_category = $request['vendor_product_category'];
        $vendor->save();

        return view('building.28home.success');

    }

    public function admin_create()
    {
        return view('building.28home.success');
    }

    public function login()
    {
        return view('building.28home.login');
    }

    public function login_save(Request $request)
    {

        $user = User::where('user_account','=',$request['user_account'])
        ->first();

        if (!$user) {

            return redirect('login')->withErrors("帳號或密碼錯誤")->withInput();

        }

        $is_user_password_correct = Hash::check($request['user_password'],$user->user_password);

        if (!$is_user_password_correct){

            return redirect('login')->withErrors("帳號或密碼錯誤")->withInput();

        }else {

            Session::put("user_id", $user->user_id);
            Session::put("user_type", $user->user_type);
            switch ($user->user_type) {
                case "1";
                    return view('/buyer');
                case "2";
                    return redirect('/seller');
                case "3";
                    return redirect('/admin');

            }
        }

    }

    public function logout()
    {

        Session::flush();
        return redirect("/");

    }

    //



}
