<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $url = url('/product');
        $title = "Product Registration";
        $data = compact('url', 'title');
        return view('AddProduct')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required ',
                //is required
                'type' => 'required',
                'sub-cat' => 'required',
                'desc' => 'required',
                'price' => 'required',
                'quantity' => 'required',
                'img' => 'required',
                'img2' => 'required',

            ]
        );

        $product = new Product;
        $product->Title = $request['title'];
        $product->Category = $request['type'];
        $product->SubCategory = $request['sub-cat'];
        $product->Description = $request['desc'];
        $product->price = $request['price'];
        $product->Quantity = $request['quantity'];
        $product->picPath = $request['img'];
        $product->picPath2 = $request['img2'];
        $product->sale = $request['sale'];


        $product->save();
        return redirect('/productTable');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
        $product = Product::find($id);
        if (is_null($product)) {
            //product not found
            return redirect('/');
        } else {
            $title = "Update Product";
            $url = url('/product/update') . "/" . $id;
            $data = compact('product', 'url', 'title');
            return view('EditProduct')->with($data);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'title' => 'required ',
                //is required and must be a type of email
                'type' => 'required',
                'sub-cat' => 'required',
                'desc' => 'required',
                'price' => 'required',
                'quantity' => 'required',
                'img' => 'required',
                'img2' => 'required',
                //   'sale' => 'required',
            ]
        );

        $product = Product::find($id);

        $product->Title = $request['title'];
        $product->Category = $request['type'];
        $product->SubCategory = $request['sub-cat'];
        $product->Description = $request['desc'];
        $product->price = $request['price'];
        $product->Quantity = $request['quantity'];
        $product->picPath = $request['img'];
        $product->picPath2 = $request['img2'];
        $product->sale = $request['sale'];

        $product->save();


        return redirect('productTable');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $product = Product::find($id);
        if (!is_null($product)) {
            $product->delete();
            session()->flash('message', 'Product has been deleted successfully!');
        }
        return redirect()->back();
    }
}
