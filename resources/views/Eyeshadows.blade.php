@extends('layouts.main')
@push('title')
    <title>Eye Shadows</title>
@endpush
@section('content')


<body>

    <main>

        {{--  Mascaras  --}}
        <section class="section-a">
       <x-Navbar />
            <h2>Eyeshadows</h2>
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
@endsection
