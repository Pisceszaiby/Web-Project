@extends('layouts.main')
@push('title')
    <title>Serums</title>
@endpush
@section('content')

<body>

    <main>

        {{-- <!-- Serums  --}}
            <section class="section-a">
       <x-Navbar />
            <h2>SERUMS</h2>
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
