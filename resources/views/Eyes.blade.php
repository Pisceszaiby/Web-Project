@extends('layouts.main')
@push('title')
    <title>Eyes</title>
@endpush
@section('content')


<body>

    <main>
{{--
      Best Sellers --}}
            <section class="section-a">
       <x-Navbar />
            <h2>BEST SELLERS</h2>
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
        <!-- Mascaras -->
        <section class="section-b">
            <h2>MASCARAS</h2>
            <div class="container-fluid">

                <div class="row ">
                    @foreach ($Eyeshadows as $Eyeshadow)
                    <x-Card :productID="$Eyeshadow['productID']" :picPath="$Eyeshadow['picPath']" :picPath2="$Eyeshadow['picPath2']"  :productTitle="$Eyeshadow['Title']" :productCategory="$Eyeshadow['SubCategory']" :productPrice="$Eyeshadow['price']" :discounted="$Eyeshadow['discountedPrice']" />
                    @endforeach

                </div>
            </div>
        </section>
        <!-- Eye Liners -->
        <section class="section-a">
            <h2>EYE LINERS</h2>
            <div class="container-fluid">

                <div class="row ">
                    @foreach ($liners as $liner)
                    <x-Card :productID="$liner['productID']" :picPath="$liner['picPath']" :picPath2="$liner['picPath2']"  :productTitle="$liner['Title']" :productCategory="$liner['SubCategory']" :productPrice="$liner['price']" :discounted="$liner['discountedPrice']" />
                    @endforeach

                </div>
            </div>
        </section>
        <!-- Eyeshadows -->
        <section class="section-b">
            <h2>EYESHADOWS</h2>
            <div class="container-fluid">

                <div class="row ">
                    @foreach ($Eyeshadows as $Eyeshadow)
                    <x-Card :productID="$Eyeshadow['productID']" :picPath="$Eyeshadow['picPath']" :picPath2="$Eyeshadow['picPath2']"  :productTitle="$Eyeshadow['Title']" :productCategory="$Eyeshadow['SubCategory']" :productPrice="$Eyeshadow['price']" :discounted="$Eyeshadow['discountedPrice']" />
                    @endforeach

                </div>
            </div>
        </section>

<x-Foot />
        @endsection
