@extends('layouts.main')
@push('title')
    <title>Lip Tints</title>
@endpush
@section('content')
<body>
    {{-- <!-- Lip Pencils --}}
        <section class="section-a">
   <x-Navbar />
        <H2>LIP TINTS</H2>
        <div class="container-fluid">
            <div class="row ">
                @foreach ($lipTints as $lipTint)
                <x-Card :productID="$lipTint['productID']" :picPath="$lipTint['picPath']" :picPath2="$lipTint['picPath2']"  :productTitle="$lipTint['Title']" :productCategory="$lipTint['SubCategory']" :productPrice="$lipTint['price']" :discounted="$lipTint['discountedPrice']" />
                @endforeach
            </div>
        </div>
    <x-Foot />
@endsection
