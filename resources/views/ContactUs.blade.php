
    @extends('layouts.main2')
    @push('title')
    <title>Contact Us</title>
    @endpush
    @push('css')
    <link rel="stylesheet" href="css/AboutUs.css">
    <link rel="stylesheet" href="css/navbar.css">
    @endpush

    @section('main-section')
    <x-Navbar />
    <div class="embed-responsive embed-responsive-16by9" style="padding:0%;">
        <video class="embed-responsive-item" width="100%" autoplay loop muted>
            <source src="images\ContactUs.mp4" type="video/mp4" />
        </video>
    </div>
    <section class="section1">
        <div class="div1">
            @foreach($infos as $info)

            <h1 >
                {{$info["heading"]}}
            </h1>
            <p >
                {{$info["info"]}}
            </p>
            @endforeach
        </div>
        
    </section>
    <x-Foot />
    @endsection
