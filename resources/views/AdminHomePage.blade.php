@extends('layouts.main')
@push('title')
    <title>Admin Home Page</title>
@endpush
@section('content')

<body class="section-a">
    <x-navbar></x-navbar>
    <main>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6">  <img class="logo-zash" width="60%" src="../images/signin.png" alt=""></div>
                <div class="col-lg-6 col-md-6">
            <a href="/addProduct" class="product-add btn homepage-btn">Add Product</a>
            <a href="/productTable" class="product-add btn homepage-btn">View Products</a>
            <a href="/orders" class="product-add btn homepage-btn">View Orders</a>
        </div>
        </div> </div>
    </main>
    <x-Foot />
    @endsection
