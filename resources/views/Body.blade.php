@extends('layouts.main')
@push('title')
    <title>Body</title>
@endpush
@section('content')
<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        {{-- Best Sellers  --}}
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
        <!-- Oils -->
        <section class="section-b">
            <h2>OILS</h2>
            <div class="container-fluid">

                <div class="row ">
                    @foreach ($Oils as $oil)
                    <x-Card :productID="$oil['productID']" :picPath="$oil['picPath']" :picPath2="$oil['picPath2']"  :productTitle="$oil['Title']" :productCategory="$oil['SubCategory']" :productPrice="$oil['price']" :discounted="$oil['discountedPrice']" />
                    @endforeach

                </div>
            </div>
        </section>
        {{-- lotion --}}
    <section class="section-a">

            <h2>LOTION</h2>
            <div class="container-fluid">

                <div class="row ">
                    @foreach ($Lotions as $lotion)
                    <x-Card :productID="$lotion['productID']" :picPath="$lotion['picPath']" :picPath2="$lotion['picPath2']"  :productTitle="$lotion['Title']" :productCategory="$lotion['SubCategory']" :productPrice="$lotion['price']" :discounted="$lotion['discountedPrice']" />
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Scrubs -->
        <section class="section-b">
            <h2>SCRUBS</h2>
            <div class="container-fluid">

                <div class="row ">
                    @foreach ($Scrubs as $scrub)
                    <x-Card :productID="$scrub['productID']" :picPath="$scrub['picPath']" :picPath2="$scrub['picPath2']"  :productTitle="$scrub['Title']" :productCategory="$scrub['SubCategory']" :productPrice="$scrub['price']" :discounted="$scrub['discountedPrice']" />
                    @endforeach
                </div>
            </div>
        </section>


    </main>
        <x-Foot />

    @endsection
