@extends('layouts.main')
@push('title')
    <title>Highlighters</title>
@endpush
@section('content')

<body>

    <main>

        {{-- <!-- Highlighters  --}}
            <section class="section-a">
       <x-Navbar />
            <h2>HIGHLIGHTERS</h2>
            <div class="container-fluid">
                @foreach ($products as $product)
                    <x-Card :productID="$product['productID']" :picPath="$product['picPath']" :picPath2="$product['picPath2']"  :productTitle="$product['Title']" :productCategory="$product['SubCategory']" :productPrice="$product['price']" :discounted="$product['discountedPrice']" />
                    @endforeach
            </div>
        </section>


    </main>
        <x-Foot />
  @endsection
