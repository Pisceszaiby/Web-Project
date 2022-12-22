@extends('layouts.main')
@push('title')
    <title>Cleansers</title>
@endpush
@section('content')
<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>

        {{-- <!-- Cleansers --}}
            <section class="section-a">
       <x-Navbar />
            <h2>Cleansers</h2>
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

