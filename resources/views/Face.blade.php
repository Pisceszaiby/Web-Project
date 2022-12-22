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
        <!-- Highlighters -->
        <section class="section-b">
            <h2>Highlighters</h2>
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
            <h2>Foundation</h2>
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
            <h2>Concealer</h2>
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
            <h2>Blush</h2>
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
            <h2>Brushes</h2>
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
    @endsection
