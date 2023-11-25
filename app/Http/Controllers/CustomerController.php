<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;


class CustomerController extends Controller
{
    // public function create()
    // {
    //     $customer = new Customer();
    //     $url = url('/customer');
    //     //todo Aik Tag Line bhi decide karain ge:
    //     $title = "Customer Registration";
    //     $data = compact('url', 'title');
    //     print_r($data);
    //     return view('customers')->with($data);
    // }
    public function index()
    {
        return view('customers');
    }
    public function store(Request $request)
    {
        // echo '<pre>';
        // print_r($request->all());
        //todo Insert Query
        $customer = new Customer;
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->state = $request['state'];
        $customer->country = $request['country'];
        $customer->dob = $request['dob'];
        $customer->password = md5($request['password']);
        $customer->save();
        //! To Show on View Page:
        return redirect('/customer/view');
    }

    public function view()
    {
        // todo Abb jo Customer wali table ma jitnma bhi data hai ,Wo model ki madad se le kar ao
        $customers = Customer::all();
        //! Dta name ka variable banya,jo alag alag data ko le kar jane wala hai
        //? Compact Function Array bannai ka kaam karta hai. or jis vriable ma rakha hota,de deta
        $data = compact('customers');
        return view('customer-view')->with($data);
        //todo:: Ye Keh rha k aus page pe jao: Aur Dta le jao

    }
    public function delete($id)
    {
        //! Find Method matches with Table Primary Key: Kyun k Model ma, customer table ma customer_id hai,aus se match karee ga
        Customer::find($id)->delete();
        return redirect()->back();
    }
    public function edit($id)
    {
        $customer = Customer::find($id);
        if (is_null($customer)) {
            return redirect('/customer');
        } else {
            $data = compact('customer');
            return view('edit')->with($data);
        }
    }
    public function update($id, Request $request)
    {
        $customer = Customer::find($id);
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->gender = $request['gender'];
        $customer->address = $request['address'];
        $customer->state = $request['state'];
        $customer->country = $request['country'];
        $customer->dob = $request['dob'];
        $customer->update();
        return redirect('/customer/view');
    }
}
