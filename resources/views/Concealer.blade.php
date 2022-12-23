@extends('layouts.main')
@push('title')
    <title>Concealer</title>
@endpush
@section('content')
<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>

        {{-- <!-- Concealer --}}
            <section class="section-a">
       <x-Navbar />
            <h2>CONCEALER</h2>
            <div class="container-fluid">

                <div class="row ">
                    <x-Card/>
                    <x-Card/>
                    <x-Card/>



                </div>

            </div>
        </section>


    </main>
        <x-Foot />
    @endsection
