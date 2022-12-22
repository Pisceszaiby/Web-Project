@extends('layouts.main')
@push('title')
    <title>Body</title>
@endpush
@section('content')
<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        {{-- Best Sellers  --}}
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
        <!-- Oils -->
        <section class="section-b">
            <h2>Oils</h2>
            <div class="container-fluid">

                <div class="row ">
                    <x-Card/>
                    <x-Card/>
                    <x-Card/>
                    <x-Card/>

                </div>
            </div>
        </section>
        {{-- lotion --}}
    <section class="section-a">

            <h2>Lotion</h2>
            <div class="container-fluid">

                <div class="row ">
                    <x-Card/>
                    <x-Card/>
                    <x-Card/>
                    <x-Card/>

                </div>
            </div>
        </section>
        <!-- Scrubs -->
        <section class="section-b">
            <h2>Scrubs</h2>
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
