@extends('layouts.main')
@push('title')
    <title>Skincare</title>
@endpush
@section('content')

<body>


    <main>
{{--
        <!-- Best Sellers  --}}
            <section class="section-a">
       <x-Navbar />
          <a href="/sale"> <h2>BEST SELLERS</h2></a>
            <div class="container-fluid">

                <div class="row ">
                    <x-Card/>


                </div>
            </div>
        </section>
        <!-- Serums -->
        <section class="section-b">
           <a href="/serums"><h2>SERUMS</h2></a>
            <div class="container-fluid">

                <div class="row ">
                    <x-Card/>


                </div>
            </div>
        </section>
        {{-- <!-- Cleansers  --}}
            <section class="section-a">

       <a href="/cleansers"><h2>CLEANSERS</h2></a>
            <div class="container-fluid">

                <div class="row ">
                    <x-Card/>


                </div>
            </div>
        </section>
        <!-- Masks -->
        <section class="section-b">
            <a href="/masks"><h2>MASKS</h2></a>
            <div class="container-fluid">

                <div class="row ">
                    <x-Card/>


                </div>
            </div>
        </section>


    </main>

    <x-Foot />
    @endsection
