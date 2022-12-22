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
            <h2>Best Sellers</h2>
            <div class="container-fluid">

                <div class="row ">
                    <x-Card/>


                </div>
            </div>
        </section>
        <!-- Serums -->
        <section class="section-b">
            <h2>Serums</h2>
            <div class="container-fluid">

                <div class="row ">
                    <x-Card/>


                </div>
            </div>
        </section>
        {{-- <!-- Cleansers  --}}
            <section class="section-a">
       <x-Navbar />
            <h2>Cleansers</h2>
            <div class="container-fluid">

                <div class="row ">
                    <x-Card/>


                </div>
            </div>
        </section>
        <!-- Masks -->
        <section class="section-b">
            <h2>Masks</h2>
            <div class="container-fluid">

                <div class="row ">
                    <x-Card/>


                </div>
            </div>
        </section>


    </main>
    @endsection
