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
            <h2>Best Sellers</h2>
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
            <h2>Mascaras</h2>
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
            <h2>Eye Liners</h2>
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
            <h2>Eyeshadows</h2>
            <div class="container-fluid">

                <div class="row ">
                    <x-Card/>
                    <x-Card/>
                    <x-Card/>
                    <x-Card/>

                </div>
            </div>
        </section>


        @endsection
