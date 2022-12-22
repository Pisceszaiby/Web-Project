@extends('layouts.main')
@push('title')
    <title>Lip Sticks</title>
@endpush
@section('content')
<body>
    {{-- <!-- Lip Sticks --}}
        <section class="section-a">
   <x-Navbar />
        <h2>Lip Sticks</h2>
        <div class="container-fluid">
            <div class="row ">
                @foreach ($products as $product)
                <x-Card :picPath="$product['picPath']" :picPath2="$product['picPath2']" :productTitle="$product['Title']" :productCategory="$product['SubCategory']" :productPrice="$product['price']" :discounted="$product['discountedPrice']" />
                @endforeach
            </div>
        </div>
@endsection
