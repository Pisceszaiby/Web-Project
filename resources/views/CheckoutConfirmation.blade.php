
    @extends('layouts.main2')
    @push('title')
    <title>About Us</title>
    @endpush
    @push('css')
    <link rel="stylesheet" href="css/AboutUs.css">
    <link rel="stylesheet" href="css/navbar.css">
    @endpush

    @section('main-section')

   <x-NavBar></x-NavBar>
    <section class="section1">
        <h1>
            Your order has been recieved!
        </h1>

        <h1>
            Thank you!
        </h1>
        

    </section>
    <x-Foot />
    @endsection
