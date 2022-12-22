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
            <h2>Best Sellers</h2>
            <div class="container-fluid">
                <div class="row ">
                   @for ($i = 0; $i < 4; $i++)
                   <x-Card :picPath="$bestSelling[$i]['picPath']" :picPath2="$bestSelling[$i]['picPath2']" :productTitle="$bestSelling[$i]['Title']"
                    :productCategory="$bestSelling[$i]['SubCategory']"
                    :productPrice="$bestSelling[$i]['price']" :discounted="$bestSelling[$i]['discountedPrice']" />
                   @endfor
                </div>
            </div>
        </section>
        <!-- Sticks -->
        <section class="section-b">
            <h2>Lip Sticks</h2>
            <div class="container-fluid">
                <div class="row ">
                    @foreach ($lipSticks as $lipStick)
                    <x-Card :picPath="$lipStick['picPath']" :picPath2="$lipStick['picPath2']"  :productTitle="$lipStick['Title']" :productCategory="$lipStick['SubCategory']" :productPrice="$lipStick['price']" :discounted="$lipStick['discountedPrice']" />
                    @endforeach
                </div>
            </div>
        </section>
        {{-- <!-- Tints  --}}
            <section class="section-a">
            <h2>Lip Tints</h2>
            <div class="container-fluid">
                <div class="row ">
                    @foreach ($lipTints as $lipTint)
                    <x-Card :picPath="$lipTint['picPath']" :picPath2="$lipStick['picPath2']"  :productTitle="$lipTint['Title']" :productCategory="$lipTint['SubCategory']" :productPrice="$lipTint['price']" :discounted="$lipTint['discountedPrice']" />
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Lip Sets -->
        <section class="section-b">
            <h2>Lip Sets</h2>
            <div class="container-fluid">
                <div class="row ">
                    @foreach ($lipSets as $lipSet)
                    <x-Card :picPath="$lipSet['picPath']" :picPath2="$lipStick['picPath2']"  :productTitle="$lipSet['Title']" :productCategory="$lipSet['SubCategory']" :productPrice="$lipSet['price']" :discounted="$lipSet['discountedPrice']" />
                    @endforeach
                  </div>
            </div>
        </section>
        <!-- Lip Pencils -->
        <section class="section-a">
            <h2>Lip Pencils</h2>
            <div class="container-fluid">
                <div class="row ">
                    @foreach ($lipPencils as $lipPencil)
                    <x-Card :picPath="$lipPencil['picPath']" :picPath2="$lipStick['picPath2']"  :productTitle="$lipPencil['Title']" :productCategory="$lipPencil['SubCategory']" :productPrice="$lipPencil['price']" :discounted="$lipPencil['discountedPrice']" />
                    @endforeach
                  </div>
            </div>
        </section>

    @endsection
