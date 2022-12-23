@extends('layouts.main')
@push('title')
    <title>Highlighters</title>
@endpush
@section('content')

<body>

    <main>

        {{-- <!-- Highlighters  --}}
            <section class="section-a">
       <x-Navbar />
            <h2>HIGHLIGHTERS</h2>
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
        </section>


    </main>
        <x-Foot />
  @endsection
