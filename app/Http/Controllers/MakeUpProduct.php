<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class MakeUpProduct extends Controller
{
    public function lipset()
    {
        $products = Product::where('subCategory', 'Lip Sets')->get();
        $products = $products->toArray();
        $data = compact('products');
        return view("LipSets")->with($data);
    }
    public function lipSticks()
    {
        $products = Product::where('subCategory', 'Lip Sticks')->get();
        $products = $products->toArray();
        $data = compact('products');
        return view("LipSticks")->with($data);
    }
    public function lipPencils()
    {
        $products = Product::where('subCategory', 'Lip Pencils')->get();
        $products = $products->toArray();
        $data = compact('products');
        return view("LipPencils")->with($data);
    }
    public function lipTints()
    {
        $products = Product::where('subCategory', 'Lip Tints')->get();
        $products = $products->toArray();
        $data = compact('products');
        return view("LipTints")->with($data);
    }
    public function lips()
    {
        $bestSelling = Product::where('Category', 'Lips')->orderBy("Quantity")->get();
        $bestSelling = $bestSelling->toArray();
        $lipSets = Product::where('subCategory', 'Lip Sets')->get();
        $lipSets = $lipSets->toArray();
        $lipPencils = Product::where('subCategory', 'Lip Pencils')->get();
        $lipPencils = $lipPencils->toArray();
        $lipTints = Product::where('subCategory', 'Lip Tints')->get();
        $lipTints = $lipTints->toArray();
        $lipSticks = Product::where('subCategory', 'Lip Tints')->get();
        $lipSticks = $lipSticks->toArray();
        $data = compact('bestSelling', 'lipSets', 'lipPencils', 'lipTints', 'lipSticks');
        return view("Lips")->with($data);
    }

public function mascara()
    {
        $products = Product::where('subCategory', 'MASCARA')->get();
        $products = $products->toArray();
        $data = compact('products');
        return view("MASCARA")->with($data);
    }

    public function liner()
    {
        $products = Product::where('subCategory', 'LINER')->get();
        $products = $products->toArray();
        $data = compact('products');
        return view("LINER")->with($data);
    }

    public function eyeshadow()
    {
        $products = Product::where('subCategory', 'EYESHADOW')->get();
        $products = $products->toArray();
        $data = compact('products');
        return view("EYESHADOW")->with($data);
    }

    


    public function eyes()
    {
        $bestSelling = Product::where('Category', 'EYES')->orderBy("Quantity")->get();
        $bestSelling = $bestSelling->toArray();
        $Mascara = Product::where('subCategory', 'MASCARA')->get();
        $Mascara = $Mascara->toArray();
        $liner = Product::where('subCategory', 'LINER')->get();
        $liner = $liner->toArray();
        $Eyeshadow = Product::where('subCategory', 'EYESHADOW')->get();
        $Eyeshadow = $Eyeshadow->toArray();
        $data = compact('bestSelling', 'EYES', 'MASCARA', 'LINER');
        return view("eyes")->with($data);
    }
}
