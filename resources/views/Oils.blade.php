@extends('layouts.main')
@push('title')
    <title>Oils</title>
@endpush
@section('content')
<body>

    <main>

        {{-- <!-- Oils  --}}
            <section class="section-a">
       <x-Navbar />
            <h2>OILS</h2>
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
