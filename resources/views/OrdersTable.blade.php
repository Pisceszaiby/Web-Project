@extends('layouts.main')
@push('title')
    <title>Order Info</title>
@endpush
@section('content')
<body>

    <main>
{{-- TO BE IMPLEMENTED --}}

        <div class="section-a table-responsive-sm table-responsive-lg table-responsive-md table-responsive-xl">
            <x-nav-bar-admin></x-nav-bar-admin>
            <table class="table table-primary">
                <thead>

                    <tr>
                        <th scope="col" class=" d-none d-sm-table-cell">Product Image</th>
                        <th scope="col">Order ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Type</th>
                        <th scope="col" class="d-none d-sm-table-cell">Price</th>
                        <th scope="col" class="d-none d-sm-table-cell">Quantity</th>

                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 10; $i++)
                    <tr class="table-row">
                        <td class="d-none d-sm-table-cell" width="15%"><a href="#"><img width="100%"
                                    src="https://cdn.shopify.com/s/files/1/1338/0845/products/6_Indv._Mascaras_Flat_Sugar_Pie_002_6a384b73-8522-40dc-b418-58fbf1e4ac9b_800x1200.jpg?v=1668199754"
                                    alt="aaa"></a></td>
                        <td>783238239</td>
                        <td>romance novel</td>
                        <td>colour stix</td>
                        <td class="d-none d-sm-table-cell">Rs 1,652.00 PKR</td>
                        <td class="d-none d-sm-table-cell">9</td>

                    </tr>
                    @endfor

                </tbody>
            </table>
        </div>



    </main>
        <x-Foot />
    @endsection
