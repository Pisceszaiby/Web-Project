@extends('layouts.main')
@push('title')
    <title>Scrubs</title>
@endpush
@section('content')

<body>

    <main>

        {{-- <!-- Scrubs  --}}
            <section class="section-a">
       <x-Navbar />
            <h2>Scrubs</h2>
            <div class="container-fluid">

                <div class="row ">
                    <x-Card/>

                    <x-Card/>


                    <x-Card/>
                </div>

            </div>
        </section>


    </main>
@endsection
