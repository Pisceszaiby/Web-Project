@extends('layouts.main')
@push('title')
    <title>Eyes</title>
@endpush
@section('content')


<body>

    <main>
{{--
      Best Sellers --}}
            <section class="section-a">
       <x-Navbar />
            <h2>BEST SELLERS</h2>
            <div class="container-fluid">

                <div class="row ">
                    <x-Card/>
                    <x-Card/>
                    <x-Card/>
                    <x-Card/>

                </div>
            </div>
        </section>
        <!-- Mascaras -->
        <section class="section-b">
            <h2>MASCARAS</h2>
            <div class="container-fluid">

                <div class="row ">
                    <x-Card/>
                    <x-Card/>
                    <x-Card/>
                    <x-Card/>

                </div>
            </div>
        </section>
        <!-- Eye Liners -->
        <section class="section-a">
            <h2>EYE LINERS</h2>
            <div class="container-fluid">

                <div class="row ">
                    <x-Card/>
                    <x-Card/>
                    <x-Card/>
                    <x-Card/>

                </div>
            </div>
        </section>
        <!-- Eyeshadows -->
        <section class="section-b">
            <h2>EYESHADOWS</h2>
            <div class="container-fluid">

                <div class="row ">
                    <x-Card/>
                    <x-Card/>
                    <x-Card/>
                    <x-Card/>

                </div>
            </div>
        </section>

<x-Foot />
        @endsection
