@extends('layouts.main')
@push('title')
    <title>Lip Sets</title>
@endpush
@section('content')

<body>

    <main>

        {{-- <!-- Sale  --}}
            <section class="section-a">
       <x-Navbar />
            <h2>SALE</h2>
            <div class="container-fluid">

                <div class="row ">
                    <x-Card/>
                    <x-Card/>
                    <x-Card/>
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
