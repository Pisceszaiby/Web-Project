@extends('layouts.main')
@push('title')
    <title>Lip Sets</title>
@endpush
@section('content')
<body>
    {{-- <!-- Lip Sets --}}
        <section class="section-a">
   <x-Navbar />
        <H2>LIP SETS</H2>
        <div class="container-fluid">
            <div class="row ">
                @foreach ($lipSets as $lipSet)
                <x-Card :productID="$lipSet['productID']" :picPath="$lipSet['picPath']" :picPath2="$lipSet['picPath2']"  :productTitle="$lipSet['Title']" :productCategory="$lipSet['SubCategory']" :productPrice="$lipSet['price']" :discounted="$lipSet['discountedPrice']" />
                @endforeach
            </div>
        </div>
        <x-Foot />
@endsection



