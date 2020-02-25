<?php

namespace App\Http\Controllers;
use App\Customer;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class CustomersController extends Controller
{
    //
    public function customer_homepage (){

        $customer = Customer::all();
        $binding =[
            'Customer' => $customer
        ];

        return view('building/customer/customer_all', $binding);    /*注意位置*/

    }

    public function customer_create (){

        return view('building/customer/customer_create');    /*注意位置*/

    }

    public function customer_create_save (Request $request){

        $validator = Validator::make($request -> all(),[
            'customer_name' => 'required | min:1 | max:15' ,
            'customer_email' => 'required | max:100' ,
            'customer_address' => 'required | max:100',
            'customer_telephone' => 'required | max:15',
            'customer_grade' => 'required | max:2',
            'customer_bank_account' => 'required | max:19',
        ]);

        if ($validator->fails()){

            return redirect('admin/customer_create')    /*注意位置*/
                ->withErrors($validator)
                ->withInput();

        }

        $customer_photo =  $request -> file('customer_self_photo') -> store('image');
//        $photo_path = array();
//        if($request -> hasFile('customer_self_photo')){
//            $customer_photo =  $request -> file('customer_self_photo');
//            $photoNumber= 1;
//            foreach ($customer_photo as $file){
//                $photoName = $request['customer_name'] . '_' . $photoNumber . 'png' ;
//                array_push($photo_path, $photoName);
//                $file -> move('customer', $photoName);
//                $photoNumber++;
//            }
//        }


        $customer = new Customer();
        $customer -> user_id  = $request['user_id'];
        $customer -> customer_name = $request['customer_name'];
        $customer -> customer_email = $request['customer_email'];
        $customer -> customer_birthday = $request['customer_birthday'];
        $customer -> customer_address = $request['customer_address'];
        $customer -> customer_telephone = $request['customer_telephone'];
        $customer -> customer_grade = $request['customer_grade'];
        $customer -> customer_bank_account  = $request['customer_bank_account'];
        $customer -> customer_self_photo  = $customer_photo;
        $customer->save();

        return redirect('/admin/customer');    /*注意位置*/

    }

    public function customer_update ($customer_id){

        $customer = Customer::where('customer_id', '=', $customer_id)->first();
        ;
        $binding =[
            'Customer' => $customer
        ];

        return view('building/customer/customer_update', $binding);    /*注意位置*/

    }

    public function customer_update_save ($customer_id, Request $request){

        $validator = Validator::make($request -> all(),[
            'user_id' => 'required' |'exists:user,user_id',
            'customer_name' => 'required | min:1 | max:15' ,
            'customer_email' => 'required | max:100' ,
            'customer_address' => 'required | max:100',
            'customer_telephone' => 'required | max:15',
            'customer_grade' => 'required | max:2',
            'customer_bank_account' => 'required | max:19',
        ]);

        if ($validator->fails()){

        return redirect('/admin/customer/{customer}'.$customer_id)    /*注意位置*/
        ->withErrors($validator)
            ->withInput();

    }

        $customer_photo =  $request -> file('customer_self_photo') -> store('image');

        $customer = Customer::where('customer_id', '=', $customer_id)
            ->update([
                'customer_name' => $request['customer_name'],
                'customer_email' => $request['customer_email'],
                'customer_birthday' => $request['customer_birthday'],
                'customer_address' => $request['customer_address'],
                'customer_telephone' => $request['customer_telephone'],
                'customer_grade' => $request['customer_grade'],
                'customer_bank_account' => $request['customer_bank_account'],
                'customer_self_photo' => $customer_photo
            ]);

        return redirect('/admin/customer');    /*注意位置*/

    }
    public function customer_delete($customer_id){

        $customer= Customer::where('customer_id' ,'=',$customer_id)
            ->delete();

        return redirect('/admin/customer');    /*注意位置*/

    }
}
