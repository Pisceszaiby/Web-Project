@extends('layouts.main')
@push('title')
    <title>Blush</title>
@endpush
@section('content')
<body>
    <main>
        {{-- <!-- Blush --}}
             <section class="section-a">
<x-Navbar />
            <h2>BLUSH</h2>
            <div class="container-fluid">
                <div class="row ">
<x-Card
picPath="https://cdn.shopify.com/s/files/1/1338/0845/products/smoke-n-roses-2_800x1200.jpg?v=1669375738"
productTitle="blah"
productCategory="Product Category"
productPrice="Product Price"
discounted="Product Discount"  />
                </div>
            </div>
        </section>
    </main>
        <x-Foot />

    @endsection
