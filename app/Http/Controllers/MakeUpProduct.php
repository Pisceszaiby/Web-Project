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
}
