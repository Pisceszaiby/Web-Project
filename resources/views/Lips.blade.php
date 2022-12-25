@extends('layouts.main')
@push('title')
    <title>Lips</title>
@endpush
@section('content')
<body>
    <main>
        {{-- <!-- Best Sellers > --}}
            <section class="section-a">
       <x-Navbar />
       <a href="/sale"><h2>SALE</h2></a>
            <div class="container-fluid">
                <div class="row ">
                   @for ($i = 0; $i < 4; $i++)
                   <x-Card :productID="$bestSelling[$i]['productID']" :picPath="$bestSelling[$i]['picPath']" :picPath2="$bestSelling[$i]['picPath2']" :productTitle="$bestSelling[$i]['Title']"
                    :productCategory="$bestSelling[$i]['SubCategory']"
                    :productPrice="$bestSelling[$i]['price']" :discounted="$bestSelling[$i]['discountedPrice']" />
                   @endfor
                </div>
            </div>
        </section>
        <!-- Sticks -->
        <section class="section-b">
            <a href="/lipSticks"><h2>LIP STICKS</h2></a>
            <div class="container-fluid">
                <div class="row ">
                    @foreach ($lipSticks as $lipStick)
                    <x-Card :productID="$lipStick['productID']" :picPath="$lipStick['picPath']" :picPath2="$lipStick['picPath2']"  :productTitle="$lipStick['Title']" :productCategory="$lipStick['SubCategory']" :productPrice="$lipStick['price']" :discounted="$lipStick['discountedPrice']" />
                    @endforeach
                </div>
            </div>
        </section>
        {{-- <!-- Tints  --}}
            <section class="section-a">
                <a href="/lipTints"><h2>LIP TINTS</h2></a>
            <div class="container-fluid">
                <div class="row ">
                    @foreach ($lipTints as $lipTint)
                    <x-Card :productID="$lipTint['productID']" :picPath="$lipTint['picPath']" :picPath2="$lipTint['picPath2']"  :productTitle="$lipTint['Title']" :productCategory="$lipTint['SubCategory']" :productPrice="$lipTint['price']" :discounted="$lipTint['discountedPrice']" />
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Lip Sets -->
        <section class="section-b">
            <a href="/lipSets"><h2>LIP SETS</h2></a>
            <div class="container-fluid">
                <div class="row ">
                    @foreach ($lipSets as $lipSet)
                    <x-Card :productID="$lipSet['productID']" :picPath="$lipSet['picPath']" :picPath2="$lipSet['picPath2']"  :productTitle="$lipSet['Title']" :productCategory="$lipSet['SubCategory']" :productPrice="$lipSet['price']" :discounted="$lipSet['discountedPrice']" />
                    @endforeach
                  </div>
            </div>
        </section>
        <!-- Lip Pencils -->
        <section class="section-a">
            <a href="/lipPencils"><h2>LIP PENCILS</h2></a>
            <div class="container-fluid">
                <div class="row ">
                    @foreach ($lipPencils as $lipPencil)
                    <x-Card :productID="$lipPencil['productID']" :picPath="$lipPencil['picPath']" :picPath2="$lipPencil['picPath2']"  :productTitle="$lipPencil['Title']" :productCategory="$lipPencil['SubCategory']" :productPrice="$lipPencil['price']" :discounted="$lipPencil['discountedPrice']" />
                    @endforeach
                  </div>
            </div>
        </section>
<x-Foot />
    @endsection
