@extends('layouts.main')
@push('title')
    <title>Face</title>
@endpush
@section('content')


<body>

    <main>

        {{-- <!-- Best Sellers --}}
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
        <!-- Highlighters -->
        <section class="section-b">
            <h2>HIGHLIGHTERS</h2>
            <div class="container-fluid">

                <div class="row ">
                    @foreach ($Highlighters as $highlighter)
                    <x-Card :productID="$highlighter['productID']" :picPath="$highlighter['picPath']" :picPath2="$highlighter['picPath2']"  :productTitle="$highlighter['Title']" :productCategory="$highlighter['SubCategory']" :productPrice="$highlighter['price']" :discounted="$highlighter['discountedPrice']" />
                    @endforeach
                </div>
            </div>
        </section>
        {{-- <!-- Foundation  --}}
            <section class="section-a">
       <x-Navbar />
            <h2>FOUNDATION</h2>
            <div class="container-fluid">

                <div class="row ">
                    @foreach ($Foundations as $foundation)
                    <x-Card :productID="$foundation['productID']" :picPath="$foundation['picPath']" :picPath2="$foundation['picPath2']"  :productTitle="$foundation['Title']" :productCategory="$foundation['SubCategory']" :productPrice="$foundation['price']" :discounted="$foundation['discountedPrice']" />
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Concealer -->
        <section class="section-b">
            <h2>CONCEALER</h2>
            <div class="container-fluid">

                <div class="row ">
                    @foreach ($Concealers as $concealer)
                    <x-Card :productID="$concealer['productID']" :picPath="$concealer['picPath']" :picPath2="$concealer['picPath2']"  :productTitle="$concealer['Title']" :productCategory="$concealer['SubCategory']" :productPrice="$concealer['price']" :discounted="$concealer['discountedPrice']" />
                    @endforeach
                </div>
            </div>
        </section>
        {{-- <!-- Blush --}}<section class="section-a">
       <x-Navbar />
            <h2>BLUSH</h2>
            <div class="container-fluid">

                <div class="row ">
                    @foreach ($Blushs as $blush)
                    <x-Card :productID="$blush['productID']" :picPath="$blush['picPath']" :picPath2="$blush['picPath2']"  :productTitle="$blush['Title']" :productCategory="$blush['SubCategory']" :productPrice="$blush['price']" :discounted="$blush['discountedPrice']" />
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Brushes -->
        <section class="section-b">
            <h2>BRUSHES</h2>
            <div class="container-fluid">

                <div class="row ">
                    @foreach ($Brushs as $brush)
                    <x-Card :productID="$brush['productID']" :picPath="$brush['picPath']" :picPath2="$brush['picPath2']"  :productTitle="$brush['Title']" :productCategory="$brush['SubCategory']" :productPrice="$brush['price']" :discounted="$brush['discountedPrice']" />
                    @endforeach   
                </div>
            </div>
        </section>


    </main>
        <x-Foot />
    @endsection
