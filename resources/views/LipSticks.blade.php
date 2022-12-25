@extends('layouts.main')
@push('title')
    <title>Lip Sticks</title>
@endpush
@section('content')
<body>
    {{-- <!-- Lip Sticks --}}
        <section class="section-a">
   <x-Navbar />
        <H2>LIP STICKS</H2>
        <div class="container-fluid">
            <div class="row ">
                @foreach ($lipSticks as $lipStick)
                    <x-Card :productID="$lipStick['productID']" :picPath="$lipStick['picPath']" :picPath2="$lipStick['picPath2']"  :productTitle="$lipStick['Title']" :productCategory="$lipStick['SubCategory']" :productPrice="$lipStick['price']" :discounted="$lipStick['discountedPrice']" />
                    @endforeach
            </div>
        </div>
        <x-Foot />
@endsection
