@extends('layouts.main')
@push('title')
    <title>Brushes</title>
@endpush
@section('content')
<body>

    <main>

        {{-- <!-- Brushes  --}}
            <section class="section-a">
       <x-Navbar />
            <h2>BRUSHES</h2>
            <div class="container-fluid">

                <div class="row ">
                    <x-Card/>
                    <x-Card/>
                    <x-Card/>
                    <x-Card/>


                </div>
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
