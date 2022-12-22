@extends('layouts.main')
@push('title')
    <title>Eye Liners</title>
@endpush
@section('content')


<body>

    <main>

        {{-- <!-- Mascaras  --}}
            <section class="section-a">
       <x-Navbar />
            <h2>EyeLiners</h2>
            <div class="container-fluid">

                <div class="row ">
                    <x-Card/>
                    <div class="col-md-4 col-lg-3 col-sm-6">

                        <div class="card ">
                            <img class="card-img-top"
                                src="https://cdn.shopify.com/s/files/1/1338/0845/products/smoke-n-roses-2_800x1200.jpg?v=1669375738"
                                alt="
            Title">
                            <div class="card-body">
                                <h4 class="card-title">Product Title</h4>
                                <p class="card-text">Product Category</p>
                                <p class="price card-text">$Price</p>
                                <p class="price card-text">$Discounted</p>

                                <a href=" " class="btn btn-primary codeBtn">Add to Cart</a>

                            </div>
                        </div>

                    </div>
                    <x-Card/>
                    <x-Card/>
                    <x-Card/>


                </div>

            </div>
        </section>


    </main>
@endsection
