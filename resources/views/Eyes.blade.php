@extends('layouts.main')
@push('title')
    <title>Eyes</title>
@endpush
@section('content')


<body>

    <main>
{{--
      Best Sellers --}}
           <!-- <section class="section-a">
       <x-Navbar />
            <h2>Best Sellers</h2>
            <div class="container-fluid">

                <div class="row ">
                    <x-Card/>
                    <x-Card/>
                    <x-Card/>
                    <x-Card/>

                </div>
            </div>
        </section> -->
        <!-- Mascaras -->
        <section class="section-b">
            <h2>Mascaras</h2>
            <div class="container-fluid">

                <div class="row ">
                @foreach ($mascaras as $mascara)
                    <x-Card :picPath="$Mascara['picPath']" :picPath2="$Mascara['picPath2']"  :productTitle="$Mascara['Title']" :productCategory="$Mascara['SubCategory']" :productPrice="$Mascara['price']" :discounted="$Mascara['discountedPrice']" />
                    @endforeach

                </div>
            </div>
        </section>
        <!-- Eye Liners -->
        <section class="section-a">
            <h2>Eye Liners</h2>
            <div class="container-fluid">

                <div class="row ">
                @foreach ($liners as $liner)
                    <x-Card :picPath="$liner['picPath']" :picPath2="$liner['picPath2']"  :productTitle="$liner['Title']" :productCategory="$liner['SubCategory']" :productPrice="$liner['price']" :discounted="$liner['discountedPrice']" />
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Eyeshadows -->
        <section class="section-b">
            <h2>Eyeshadows</h2>
            <div class="container-fluid">

                <div class="row ">
                @foreach ($eyeshadows as $eyeshadow)
                    <x-Card :picPath="$eyeshadow['picPath']" :picPath2="$eyeshadow['picPath2']"  :productTitle="$eyeshadow['Title']" :productCategory="$eyeshadow['SubCategory']" :productPrice="$eyeshadow['price']" :discounted="$eyeshadow['discountedPrice']" />
                    @endforeach

                </div>
            </div>
        </section>


        @endsection
