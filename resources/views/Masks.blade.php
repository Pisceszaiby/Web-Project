@extends('layouts.main')
@push('title')
    <title>Masks</title>
@endpush
@section('content')

<body>

    <main>

        {{-- <!-- Masks  --}}
            <section class="section-a">
       <x-Navbar />
            <h2>MASKS</h2>
            <div class="container-fluid">

                <div class="row ">
                    <x-Card/>
                    <x-Card/>
                    <x-Card/>
                    <x-Card/>


                </div>
                <div class="row ">
                    <x-Card/>




                </div>
            </div>
        </section>


    </main>
        <x-Foot />
@endsection
