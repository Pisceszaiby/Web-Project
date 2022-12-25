@extends('layouts.main')
@push('title')
    <title>Sale</title>
@endpush
@section('content')

<body>

    <main>

        {{-- <!-- Sale  --}}
            <section class="section-a">
       <x-Navbar />
            <h2>SALE</h2>
            <div class="container-fluid">

                <div class="row ">
                    @foreach ($sales as $sale)
                    <x-Card :productID="$sale['productID']" :picPath="$sale['picPath']" :picPath2="$sale['picPath2']"  :productTitle="$sale['Title']" :productCategory="$sale['SubCategory']" :productPrice="$sale['price']" :discounted="$sale['discountedPrice']" />
                    @endforeach
                </div>

            </div>
        </section>


    </main>
        <x-Foot />
@endsection
