<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\information;

class InformationController extends Controller
{
    //
    public function aboutus()
    {

        $data= Information :: where('spec', 'ABOUT US')->get();
        return view("Aboutus",["infos"=>$data]);
    }

    public function contactus()
    {

        $data= Information :: where('spec', 'CONTACT US')->get();
        return view("contactUs",["infos"=>$data]);
    }
}
