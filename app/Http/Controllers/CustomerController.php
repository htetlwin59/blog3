<?php

namespace App\Http\Controllers;

use App\customers;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function add() {
        return view("customers/customer-add");
    }
    public function create(Request $request){
    $customer=new customers(['name'=>$request->get('name'),
    'email'=>$request->get('email'),
    'password'=>$request->get('password')]);
    $customer->save();
    return redirect('/customers/customerlist');

    }

    public function list(){
        $customer=customers::all();
        return view('customers/customer-list',compact('customer'));
    }

    public function detail($id){
        $customer=customers::find($id);
        return view('/customers/customer-detail',compact('customer'));

    }

    public function edit($id){
        $customer=customers::find($id);
        return view('/customers/customer-update',compact('customer'));
    }

    public function update(Request $request){
        $customer=[
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'password'=>$request->get('password')
                ];
                customers::find($request->get('id'))->update($customer);
                return redirect('/customers/customerlist');
    }
    public function delete($id){
        customers::find($id)->delete($id);
        return redirect('/customers/customerlist');
    }

}

