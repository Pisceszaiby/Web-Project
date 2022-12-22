
    @extends('layouts.main2')
    @push('title')
    <title>Landing Page</title>
    @endpush
    @push('css')
    <link rel="stylesheet" href="css/confirmation.css">

    @endpush

    @section('main-section')

    <h1 >Thank you for your order! </h1>
    <img src="images/order.png" alt="orderimage" class="center">
    <h5 class="para">We have got your order and will start working on it soon! Would you like to make more orders?  </h5>
   <a href="/home" style="text-decoration: none;
   ">
   <button type="button" class="btn btn-outline-light btn-lg btn-center" style="margin: auto;">Order Again</button></a>



    @endsection
