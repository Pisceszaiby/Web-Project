@extends('layouts.main')
@push('title')
    <title>Home</title>
@endpush
@section('content')
<body>

    <main>

        <!-- Best Sellers -->
        <section class="section-a">
       <x-Navbar />
            <h2>BEST SELLERS</h2>
            <div class="container-fluid">

                <div class="row ">
                    @foreach ($bestSelling as $e)
                    <x-Card :productID="$e['productID']" :picPath="$e['picPath']" :picPath2="$e['picPath2']"  :productTitle="$e['Title']" :productCategory="$e['SubCategory']" :productPrice="$e['price']" :discounted="$e['discountedPrice']" />
                    @if ($loop->index == 3)
                    @break
                    @endif
                    @endforeach

                </div>
            </div>
        </section>
        <!-- Eye -->
        <section class="section-b">
            <h2>EYE</h2>
            <div class="container-fluid">

                <div class="row ">
                    @foreach ($eyes as $e)
                    <x-Card :productID="$e['productID']" :picPath="$e['picPath']" :picPath2="$e['picPath2']"  :productTitle="$e['Title']" :productCategory="$e['SubCategory']" :productPrice="$e['price']" :discounted="$e['discountedPrice']" />
                    @if ($loop->index == 3)
                    @break
                    @endif
                    @endforeach

                </div>
            </div>
        </section>
        <!-- Lips -->
        <section class="section-a">
            <h2>LIPS</h2>
            <div class="container-fluid">

                <div class="row ">
                    @foreach ($lips as $e)
                    <x-Card :productID="$e['productID']" :picPath="$e['picPath']" :picPath2="$e['picPath2']"  :productTitle="$e['Title']" :productCategory="$e['SubCategory']" :productPrice="$e['price']" :discounted="$e['discountedPrice']" />
                    @if ($loop->index == 3)
                    @break
                    @endif
                    @endforeach

                </div>
            </div>
        </section>

        <!-- Skincare -->
        <section class="section-b">
            <h2>SKINCARE</h2>
            <div class="container-fluid">

                <div class="row ">
                    @foreach ($skin as $e)
                    <x-Card :productID="$e['productID']" :picPath="$e['picPath']" :picPath2="$e['picPath2']"  :productTitle="$e['Title']" :productCategory="$e['SubCategory']" :productPrice="$e['price']" :discounted="$e['discountedPrice']" />
                    @if ($loop->index == 3)
                    @break
                    @endif
                    @endforeach

                </div>
            </div>
        </section>
        <!-- Body -->
        <section class="section-a">
            <h2>BODY</h2>
            <div class="container-fluid">

                <div class="row ">
                    
                    @foreach ($body as $b)
                    <x-Card :productID="$b['productID']" :picPath="$b['picPath']" :picPath2="$b['picPath2']"  :productTitle="$b['Title']" :productCategory="$b['SubCategory']" :productPrice="$b['price']" :discounted="$b['discountedPrice']" />
                    @if ($loop->index == 3)
                    @break
                @endif
                    @endforeach

                </div>
            </div>
        </section>
        <!-- Face -->
        <section class="section-b">
            <h2>FACE</h2>
            <div class="container-fluid">

                <div class="row ">
                    @foreach ($face as $e)
                    <x-Card :productID="$e['productID']" :picPath="$e['picPath']" :picPath2="$e['picPath2']"  :productTitle="$e['Title']" :productCategory="$e['SubCategory']" :productPrice="$e['price']" :discounted="$e['discountedPrice']" />
                    @if ($loop->index == 3)
                    @break
                    @endif
                    @endforeach

                </div>
            </div>
        </section>


    </main>
        <x-Foot />
@endsection
