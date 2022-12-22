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
            <h2>Highlighters</h2>
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
  @endsection
