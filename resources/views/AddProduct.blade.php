@extends('layouts.main')
@push('title')
    <title>Add Product</title>
@endpush
@section('content')
{{-- //Testing add products --}}
<body class="section-a">
    <header>
       <x-nav-bar-admin></x-nav-bar-admin>
    </header>
    <main>
        <img width="20%" src="../images/signin.png" class="logo-zash" alt="">
        <div class="container-fluid">

            <form action="{{url('/')}}/addProduct" method="POST">
                @csrf     <div class="mb-3">
                    <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId"
                        placeholder="Product Title">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="type" id="type" aria-describedby="helpId"
                        placeholder="Product Type">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="sub-cat" id="sub-cat" aria-describedby="helpId"
                        placeholder="Product Subcategory">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="price" id="price" aria-describedby="helpId"
                        placeholder="Product Price">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="quantity" id="quantity" aria-describedby="helpId"
                        placeholder="Product Quantity">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="img" id="img" aria-describedby="helpId"
                        placeholder="Product Image 1">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="img2" id="img2" aria-describedby="helpId"
                        placeholder="Product Image 2">
                </div> 
                <div class="mb-3">

                    <textarea class="form-control" name="desc" id="desc" rows="3"
                        placeholder="Product Description"></textarea>
                </div>
                <button type="submit" class="addCart btn product-add btn-primary">Add Product</button>
            </form>

        </div>


    </main>
        <x-Foot />

@endsection
