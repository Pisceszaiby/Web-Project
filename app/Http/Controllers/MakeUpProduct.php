<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class MakeUpProduct extends Controller
{
    public function lipSets()
    {
        $lipSets = Product::where('SubCategory', 'LIPSET')->get();
        $lipSets = $lipSets->toArray();
        $data = compact('lipSets');
        return view("LipSets")->with($data);
    }
    public function lipSticks()
    {
        $lipSticks = Product::where('SubCategory', 'LIPSTICK')->get();
        $lipSticks = $lipSticks->toArray();
        $data = compact('lipSticks');
        return view("LipSticks")->with($data);
    }
    public function lipPencils()
    {

        $lipPencils = Product::where('SubCategory', 'PENCIL')->get();
        $lipPencils = $lipPencils->toArray();
        $data = compact('lipPencils');
        return view("LipPencils")->with($data);
    }
    public function lipTints()
    {
        $lipTints = Product::where('SubCategory', 'LIPTINT')->get();
        $lipTints = $lipTints->toArray();
        $data = compact('lipTints');
        return view("LipTints")->with($data);
    }
    public function lips()
    {
        $bestSelling = Product::where('Category', 'LIPS')->orderBy("Quantity")->get();
        $bestSelling = $bestSelling->toArray();
        $lipSets = Product::where('SubCategory', 'LIPSET')->get();
        $lipSets = $lipSets->toArray();
        $lipPencils = Product::where('SubCategory', 'PENCIL')->get();
        $lipPencils = $lipPencils->toArray();
        $lipTints = Product::where('SubCategory', 'LIPTINT')->get();
        $lipTints = $lipTints->toArray();
        $lipSticks = Product::where('SubCategory', 'LIPSTICK')->get();
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
