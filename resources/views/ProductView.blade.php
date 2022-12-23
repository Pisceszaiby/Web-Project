@extends('layouts.main')
@push('title')
    <title>Product View</title>
@endpush
@section('content')

<body class="section-a">

    <main>
        <x-NavBar></x-NavBar>

        <!-- Product View -->
        <section id="testimonials">
            <div class="container-fluid">
                <div class="row">
                    <div id="testimnonials-carousel" class="col-lg-6 carousel slide" data-ride="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active container-fluid">

                                <img class="test-img"
                                    src="{{$product[0]["picPath"]}}"
                                    alt="pic1">

                            </div>
                            <div class="carousel-item container-fluid">

                                <img class="test-img"
                                src="{{$product[0]["picPath2"]}}"
                                alt="pic2">

                            </div>

                        </div>
                        <a class="carousel-control-prev" href="#testimnonials-carousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                        </a>
                        <a class="carousel-control-next" href="#testimnonials-carousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>

                        </a>
                    </div>
                    <div class="col-lg-6">
                        <br>
                        <br>
                        <h5>{{$product[0]["Title"]}}</h5>
                        <h6>{{$product[0]["Category"]}}</h6>
                        <br>
                        <h5>${{$product[0]["price"]}}</h5>

                        <hr>
                        <a class="prod-quantity" href=""><span>-</span></a>

                        <span class="quantity">1</span>
                        <a class="prod-quantity" href=""><span>+</span></a>
                        <hr>
                        <a href=" " class="product-add btn addCart ">Add to Cart</a>
                        <br>
                        <h5 class="desc" align="left">Product Description</h5>
                        <h6 align="left">
                            {{$product[0]["Description"]}}
                        </h6>

                    </div>

                </div>
            </div>





        </section>




    </main>
        <x-Foot />
    @endsection
