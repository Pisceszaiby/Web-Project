@extends('layouts.main')
@push('title')
    <title>Masks</title>
@endpush
@section('content')
<body>
    {{-- <!-- Lip Sticks --}}
        <section class="section-a">
   <x-Navbar />
        <H2>LIP STICKS</H2>
        <div class="container-fluid">
            <div class="row ">
                @foreach ($products as $product)
                    <x-Card :productID="$product['productID']" :picPath="$product['picPath']" :picPath2="$product['picPath2']"  :productTitle="$product['Title']" :productCategory="$product['SubCategory']" :productPrice="$product['price']" :discounted="$product['discountedPrice']" />
                    @endforeach
            </div>
        </div>
        <x-Foot />
@endsection
