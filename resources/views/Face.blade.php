@extends('layouts.main')
@push('title')
    <title>Face</title>
@endpush
@section('content')


<body>

    <main>

        {{-- <!-- Best Sellers --}}
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
        <!-- Highlighters -->
        <section class="section-b">
            <h2>HIGHLIGHTERS</h2>
            <div class="container-fluid">

                <div class="row ">
                    <x-Card/>
                    <x-Card/>
                    <x-Card/>
                    <x-Card/>

                </div>
            </div>
        </section>
        {{-- <!-- Foundation  --}}
            <section class="section-a">
       <x-Navbar />
            <h2>FOUNDATION</h2>
            <div class="container-fluid">

                <div class="row ">
                    <x-Card/>
                    <x-Card/>
                    <x-Card/>
                    <x-Card/>

                </div>
            </div>
        </section>
        <!-- Concealer -->
        <section class="section-b">
            <h2>CONCEALER</h2>
            <div class="container-fluid">

                <div class="row ">
                    <x-Card/>
                    <x-Card/>
                    <x-Card/>
                    <x-Card/>

                </div>
            </div>
        </section>
        {{-- <!-- Blush --}}<section class="section-a">
       <x-Navbar />
            <h2>BLUSH</h2>
            <div class="container-fluid">

                <div class="row ">
                    <x-Card/>
                    <x-Card/>
                    <x-Card/>
                    <x-Card/>

                </div>
            </div>
        </section>
        <!-- Brushes -->
        <section class="section-b">
            <h2>BRUSHES</h2>
            <div class="container-fluid">

                <div class="row ">
                    <x-Card/>
                    <x-Card/>
                    <x-Card/>
                    <x-Card/>

                </div>
            </div>
        </section>


    </main>
        <x-Foot />
    @endsection
