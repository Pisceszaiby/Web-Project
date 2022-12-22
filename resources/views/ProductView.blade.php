@extends('layouts.main')
@push('title')
    <title>Product View</title>
@endpush
@section('content')

<body class="section-a">

    <main>

        <!-- Product View -->
        <section id="testimonials">
            <div class="container-fluid">
                <x-NavBar></x-NavBar>
                <div class="row">
                    <div id="testimnonials-carousel" class="col-lg-6 carousel slide" data-ride="false">
                        <div class="carousel-inner">
                            <div class="carousel-item active container-fluid">

                                <img class="test-img"
                                    src="https://cdn.shopify.com/s/files/1/1338/0845/products/Winter-Nites-Composite_800x1200.jpg?v=1670461160"
                                    alt="dog-profile">

                            </div>
                            <div class="carousel-item container-fluid">

                                <img class="test-img"
                                    src="https://cdn.shopify.com/s/files/1/1338/0845/products/14_Single_Stix_Winter_Nites_262_800x1200.jpg?v=1670461150"
                                    alt="lady-profile">

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
                        <h2>Product Title</h2>
                        <h4>Product Type</h4>
                        <br>
                        <h2>Rs Price PKR</h2>

                        <hr>
                        <a class="prod-quantity" href=""><span>-</span></a>

                        <span class="quantity">1</span>
                        <a class="prod-quantity" href=""><span>+</span></a>
                        <hr>
                        <a href=" " class="product-add btn">Add to Cart</a>
                        <br>
                        <h3 align="left">Product Description</h3>
                        <h6 align="left">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, doloremque officia. Iste
                            temporibus voluptas tempora quos beatae inventore modi nobis unde est ab asperiores,
                            suscipit minus ipsum quia eos dolorum quis! Quam debitis explicabo doloribus vitae
                            asperiores quaerat, eum quidem, soluta, placeat fugiat quibusdam ipsam at magnam eveniet
                            ullam odio.temporibus voluptas tempora quos beatae inventore modi nobis unde est ab
                            asperiores,
                            suscipit minus ipsum quia eos dolorum quis! Quam debitis explicabo doloribus vitae
                            asperiores quaerat, eum quidem, soluta, placeat fugiat quibusdam ipsam at magnam eveniet
                            ullam odio.
                        </h6>

                    </div>

                </div>
            </div>





        </section>




    </main>
    @endsection
