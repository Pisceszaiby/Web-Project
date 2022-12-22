@extends('layouts.main')
@push('title')
    <title>Home</title>
@endpush
@section('content')
<body>

    <main>

        <!-- Best Sellers -->
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
        <!-- Eye -->
        <section class="section-b">
            <h2>EYE</h2>
            <div class="container-fluid">

                <div class="row ">
                    <x-Card/>
                    <x-Card/>
                    <x-Card/>
                    <x-Card/>

                </div>
            </div>
        </section>
        <!-- Lips -->
        <section class="section-a">
            <h2>LIPS</h2>
            <div class="container-fluid">

                <div class="row ">
                    <x-Card/>
                    <x-Card/>
                    <x-Card/>
                    <x-Card/>

                </div>
            </div>
        </section>

        <!-- Skincare -->
        <section class="section-b">
            <h2>SKINCARE</h2>
            <div class="container-fluid">

                <div class="row ">
                    <x-Card/>
                    <x-Card/>
                    <x-Card/>
                    <x-Card/>

                </div>
            </div>
        </section>
        <!-- Body -->
        <section class="section-a">
            <h2>BODY</h2>
            <div class="container-fluid">

                <div class="row ">
                    <x-Card/>
                    <x-Card/>
                    <x-Card/>
                    <x-Card/>

                </div>
            </div>
        </section>
        <!-- Face -->
        <section class="section-b">
            <h2>FACE</h2>
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
