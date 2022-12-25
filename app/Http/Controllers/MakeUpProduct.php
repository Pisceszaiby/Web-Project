<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class MakeUpProduct extends Controller
{
    public function productTable()
    {
        $products = Product::all();
        $products = $products->toArray();
        $data = compact('products');
        return view("ProductTable")->with($data);
    }

    // // public function orders()
    // To be implemented
    // {
    //     $orders = Product::all();
    //     $orders = $orders->toArray();
    //     $data = compact('orders');
    //     return view("OrdersTable")->with($data);
    // }
    

    public function homepage()
    {
        $bestSelling = Product::where('Quantity','10')->orderBy("Quantity")->get();
        $bestSelling = $bestSelling->toArray();
        $lips = Product::where('Category', 'LIPS')->get();
        $lips = $lips->toArray();
        $eyes = Product::where('Category', 'EYES')->get();
        $eyes = $eyes->toArray();
        $face = Product::where('Category', 'FACE')->get();
        $face = $face->toArray();
        $skin = Product::where('Category', 'SKINCARE')->get();
        $skin = $skin->toArray();
        $body = Product::where('Category', 'BODY')->get();
        $body = $body->toArray();
       
        $data = compact('bestSelling', 'lips', 'eyes', 'face', 'body','skin');
        return view("homepage")->with($data);
    }
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
        return view("Mascara")->with($data);
    }



    public function eyeshadow()
    {
        $products = Product::where('subCategory', 'EYESHADOW')->get();
        $products = $products->toArray();
        $data = compact('products');
        return view("Eyeshadows")->with($data);
    }

    public function eyeliner()
    {
        $products = Product::where('subCategory', 'LINER')->get();
        $products = $products->toArray();
        $data = compact('products');
        return view("EyeLiners")->with($data);
    }

    public function eyes()
    {
        $bestSelling = Product::where('Category', 'EYES')->orderBy("Quantity")->get();
        $bestSelling = $bestSelling->toArray();
        $Mascaras = Product::where('subCategory', 'MASCARA')->get();
        $Mascaras = $Mascaras->toArray();
        $liners = Product::where('subCategory', 'LINER')->get();
        $liners = $liners->toArray();
        $Eyeshadows = Product::where('subCategory', 'EYESHADOW')->get();
        $Eyeshadows = $Eyeshadows->toArray();
        $data = compact('bestSelling', 'Eyeshadows', 'Mascaras', 'liners');
        return view("eyes")->with($data);
    }

    public function serum()
    {
        $products = Product::where('subCategory', 'SERUM')->get();
        $products = $products->toArray();
        $data = compact('products');
        return view("Serums")->with($data);
    }
    public function cleanser()
    {
        $products = Product::where('subCategory', 'CLEANSER')->get();
        $products = $products->toArray();
        $data = compact('products');
        return view("Cleansers")->with($data);
    }

    public function mask()
    {
        $products = Product::where('subCategory', 'MASK')->get();
        $products = $products->toArray();
        $data = compact('products');
        return view("Masks")->with($data);
    }

    
    public function skincare()
    {
        $bestSelling = Product::where('Category', 'SKINCARE')->orderBy("Quantity")->get();
        $bestSelling = $bestSelling->toArray();
        $Cleansers = Product::where('subCategory', 'CLEANSER')->get();
        $Cleansers = $Cleansers->toArray();
        $Serums = Product::where('subCategory', 'SERUM')->get();
        $Serums = $Serums->toArray();
        $Masks = Product::where('subCategory', 'MASK')->get();
        $Masks = $Masks->toArray();
        $data = compact('bestSelling', 'Cleansers', 'Serums', 'Masks');
        return view("Skincare")->with($data);
    }

    public function highlighter()
    {
        $products = Product::where('subCategory', 'HIGHLIGHTER')->get();
        $products = $products->toArray();
        $data = compact('products');
        return view("Highlighters")->with($data);
    }
    public function concealer()
    {
        $products = Product::where('subCategory', 'CONCEALER')->get();
        $products = $products->toArray();
        $data = compact('products');
        return view("Concealer")->with($data);
    }
    public function foundation()
    {
        $products = Product::where('subCategory', 'FOUNDATION')->get();
        $products = $products->toArray();
        $data = compact('products');
        return view("Foundation")->with($data);

    }
  public function brush()
    {
        $products = Product::where('subCategory', 'BRUSH')->get();
        $products = $products->toArray();
        $data = compact('products');
        return view("Brushes")->with($data);
    }

    public function blush()
    {
        $products = Product::where('subCategory', 'BLUSH')->get();
        $products = $products->toArray();
        $data = compact('products');
        return view("Blush")->with($data);
    }

    public function face()
    {
        $bestSelling = Product::where('Category', 'FACE')->orderBy("Quantity")->get();
        $bestSelling = $bestSelling->toArray();
        $Highlighters = Product::where('subCategory', 'HIGHLIGHTER')->get();
        $Highlighters = $Highlighters->toArray();
        $Blushs = Product::where('subCategory', 'BLUSH')->get();
        $Blushs = $Blushs->toArray();
        $Foundations = Product::where('subCategory', 'FOUNDATION')->get();
        $Foundations = $Foundations->toArray();
        $Brushs = Product::where('subCategory', 'BRUSH')->get();
        $Brushs = $Brushs->toArray();
        $Concealers = Product::where('subCategory', 'CONCEALER')->get();
        $Concealers = $Concealers->toArray();

        $data = compact('bestSelling', 'Highlighters','Foundations', 'Concealers', 'Blushs','Brushs');
        return view("Face")->with($data);
    }
    public function scrub()
    {
        $products = Product::where('subCategory', 'SCRUBS')->get();
        $products = $products->toArray();
        $data = compact('products');
        return view("Scrubs")->with($data);
    }

    public function oil()
    {
        $products = Product::where('subCategory', 'OILS')->get();
        $products = $products->toArray();
        $data = compact('products');
        return view("Oils")->with($data);
    }

    public function lotion()
    {
        $products = Product::where('subCategory', 'LOTION')->get();
        $products = $products->toArray();
        $data = compact('products');
        return view("Lotions")->with($data);
    }
    public function body()
    {
        $bestSelling = Product::where('Category', 'BODY')->orderBy("Quantity")->get();
        $bestSelling = $bestSelling->toArray();
        $Scrubs = Product::where('subCategory', 'SCRUBS')->get();
        $Scrubs = $Scrubs->toArray();
        $Lotions = Product::where('subCategory', 'LOTION')->get();
        $Lotions = $Lotions->toArray();
        $Oils = Product::where('subCategory', 'OILS')->get();
        $Oils = $Oils->toArray();

        $data = compact('bestSelling', 'Scrubs','Oils','Lotions');
        return view("Body")->with($data);
    }
    public function sale()
    {
        $sales = Product::where('sale', '1')->get();
        $sales = $sales->toArray();

        $data = compact('sales');
        return view("Sale")->with($data);


    }
}
