@extends('layouts.main')
@push('title')
    <title>Lip Pencils</title>
@endpush
@section('content')
<body>
        {{-- <!-- Lip Pencils --}}
            <section class="section-a">
       <x-Navbar />
            <h2>LIP PENCILS</h2>
            <div class="container-fluid">
                <div class="row ">
                    @foreach ($lipPencils as $lipPencil)
                    <x-Card :productID="$lipPencil['productID']" :picPath="$lipPencil['picPath']" :picPath2="$lipPencil['picPath2']"  :productTitle="$lipPencil['Title']" :productCategory="$lipPencil['SubCategory']" :productPrice="$lipPencil['price']" :discounted="$lipPencil['discountedPrice']" />
                    @endforeach
                </div>
            </div>
        <x-Foot />
@endsection

