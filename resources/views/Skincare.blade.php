@extends('layouts.main')
@push('title')
    <title>Skincare</title>
@endpush
@section('content')

<body>


    <main>
{{--
        <!-- Best Sellers  --}}
            <section class="section-a">
       <x-Navbar />
          <a href="/sale"> <h2>BEST SELLERS</h2></a>
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
        <!-- Serums -->
        <section class="section-b">
           <a href="/serums"><h2>SERUMS</h2></a>
            <div class="container-fluid">

                <div class="row ">
                    @foreach ($Serums as $serum)
                    <x-Card :productID="$serum['productID']" :picPath="$serum['picPath']" :picPath2="$serum['picPath2']"  :productTitle="$serum['Title']" :productCategory="$serum['SubCategory']" :productPrice="$serum['price']" :discounted="$serum['discountedPrice']" />
                    @endforeach
                </div>
            </div>
        </section>
        {{-- <!-- Cleansers  --}}
            <section class="section-a">

       <a href="/cleansers"><h2>CLEANSERS</h2></a>
            <div class="container-fluid">

                <div class="row ">
                    @foreach ($Cleansers as $cleanser)
                    <x-Card :productID="$cleanser['productID']" :picPath="$cleanser['picPath']" :picPath2="$cleanser['picPath2']"  :productTitle="$cleanser['Title']" :productCategory="$cleanser['SubCategory']" :productPrice="$cleanser['price']" :discounted="$cleanser['discountedPrice']" />
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Masks -->
        <section class="section-b">
            <a href="/masks"><h2>MASKS</h2></a>
            <div class="container-fluid">

                <div class="row ">
                    @foreach ($Masks as $mask)
                    <x-Card :productID="$mask['productID']" :picPath="$mask['picPath']" :picPath2="$mask['picPath2']"  :productTitle="$mask['Title']" :productCategory="$mask['SubCategory']" :productPrice="$mask['price']" :discounted="$mask['discountedPrice']" />
                    @endforeach
                </div>
            </div>
        </section>
    </main>
    <x-Foot />
    @endsection
