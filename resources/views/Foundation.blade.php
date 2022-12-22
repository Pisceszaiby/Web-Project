@extends('layouts.main')
@push('title')
    <title>Foundations</title>
@endpush
@section('content')


<body>

    <main>
{{--
        <!-- Foundation--}}
            <section class="section-a">
       <x-Navbar />
            <h2>Foundation</h2>
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
  @endsection
