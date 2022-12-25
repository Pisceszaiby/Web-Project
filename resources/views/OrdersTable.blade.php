@extends('layouts.main')
@push('title')
    <title>Order Info</title>
@endpush
@section('content')
<body>

    <main>


        <div class="section-a table-responsive-sm table-responsive-lg table-responsive-md table-responsive-xl">
            <x-NavBar></x-NavBar>
            <table class="table table-primary">
                <thead>
                    <tr>
                       <!-- <th scope="col">Product Image</th> -->
                        <th scope="col">First Name</th>
                       <!-- <th scope="col">Title</th>-->
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Address</th>

                    </tr>
                </thead>
    
                <tbody>
                @foreach ($checkouts as $checkout)

                <tr class="table-row">

                    <td>{{$checkout['firstname']}}</td>
                    <td>{{$checkout['lastname']}}</td>
                    <td>{{$checkout['email']}}</td>
                    <td>{{$checkout['address']}}</td>
                </tr>
                @endforeach
            
                </tbody>
            </table>
        </div>



    </main>
        <x-Foot />
    @endsection
