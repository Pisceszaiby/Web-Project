<?php

namespace App\Http\Controllers; 
 

use Illuminate\Http\Request;
use App\Models\Checkout;


class CheckoutController extends Controller
{
    function getData(Request $req)
    {
        $checkout=new Checkout;
        $checkout->firstname=$req->fname;
        $checkout->lastname=$req->lname;
        $checkout->email=$req->email;
        $checkout->address=$req->address;
        $checkout->city=$req->city;
        $checkout->save();

        return view("confirmation");




    }
}
