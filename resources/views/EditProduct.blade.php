@extends('layouts.main')
@push('title')
    <title>Edit Products</title>
@endpush
@section('content')

<body class="section-a">
    <header>
        <x-nav-bar-admin></x-nav-bar-admin>
    </header>
    <main>
        <img width="20%" src="../images/signin.png" class="logo-zash" alt="">
        <div class="container-fluid">
            <form action="{{url('/')}}/editProduct/{{$product->productID}}" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="text" class="form-control"  name="title" value="{{$product->Title}}" id="title" aria-describedby="helpId"
                        placeholder="Product Title">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="type" value="{{$product->Category}}" id="type" aria-describedby="helpId"
                        placeholder="Product Type">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="sub-cat" value="{{$product->SubCategory}}" id="sub-cat" aria-describedby="helpId"
                        placeholder="Product Subcategory">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="price" value="{{$product->price}}" id="price" aria-describedby="helpId"
                        placeholder="Product Price">
                </div>
                @if($product->sale=='1')
                <div class="mb-3">
                    <input type="text" class="form-control" name="sale" value="{{$product->sale}}" id="sale" aria-describedby="helpId"
                        placeholder="On Sale">
                </div>
            
                    <div class="mb-3">
                    <input type="text" class="form-control" name="discount" value="{{$product->discountedPrice}}" id="discount" aria-describedby="helpId"
                        placeholder="Discounted Price">
                </div>
                @endif
                {{-- <div class="mb-3">
                    <input type="text" class="form-control" name="img2" id="img2" aria-describedby="helpId"
                        placeholder="Product Image 2">
                </div> --}}
                <div class="mb-3">
                    <input type="text" class="form-control" name="quantity" value="{{$product->Quantity}}" id="quantity" aria-describedby="helpId"
                        placeholder="Product Quantity">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="img" value="{{$product->picPath}}" id="img" aria-describedby="helpId"
                        placeholder="Product Image">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="img2" value="{{$product->picPath2}}" id="img2" aria-describedby="helpId"
                        placeholder="Product Image">
                </div>
                <div class="mb-3">

                    <textarea class="form-control" name="desc" value="{{$product->Description}}" id="desc" rows="3"
                        placeholder="Product Description"></textarea>
                </div>
                <button type="submit" class="btn product-add btn-primary">Update Product</button>
            </form>

        </div>

        </div>


    </main>
        <x-Foot />
    @endsection
