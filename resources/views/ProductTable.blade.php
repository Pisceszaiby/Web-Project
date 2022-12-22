@extends('layouts.main')
@push('title')
    <title>Product Infos</title>
@endpush
@section('content')
<body>

    <main>

        <div class="section-b table-responsive-sm table-responsive-lg table-responsive-md table-responsive-xl">
            <x-NavBar></x-NavBar>
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Product Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Type</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-row">
                        <td width="15%"><a href="#"><img width="100%"
                                    src="https://cdn.shopify.com/s/files/1/1338/0845/products/6_Indv._Mascaras_Flat_Sugar_Pie_002_6a384b73-8522-40dc-b418-58fbf1e4ac9b_800x1200.jpg?v=1668199754"
                                    alt="aaa"></a></td>
                        <td>romance novel</td>
                        <td>colour stix</td>
                        <td>Rs 1,652.00 PKR</td>
                        <td>9</td>
                        <td><a href="#">Edit</a>|<a href="#">Delete</a></td>
                    </tr>
                    <tr class="table-row">
                        <td width="15%"><a href="#"><img width="100%" src="../images/signin.png" alt="aaa"></a></td>
                        <td>romance novel</td>
                        <td>colour stix</td>
                        <td>Rs 1,652.00 PKR</td>
                        <td>9</td>
                        <td><a href="#">Edit</a>|<a href="#">Delete</a></td>
                    </tr>
                    <tr class="table-row">
                        <td width="15%"><a href="#"><img width="100%" src="../images/signin.png" alt="aaa"></a></td>
                        <td>romance novel</td>
                        <td>colour stix</td>
                        <td>Rs 1,652.00 PKR</td>
                        <td>9</td>
                        <td><a href="#">Edit</a>|<a href="#">Delete</a></td>
                    </tr>
                    <tr class="table-row">
                        <td width="15%"><a href="#"><img width="100%"
                                    src="https://cdn.shopify.com/s/files/1/1338/0845/products/6_Indv._Mascaras_Flat_Sugar_Pie_002_6a384b73-8522-40dc-b418-58fbf1e4ac9b_800x1200.jpg?v=1668199754"
                                    alt="aaa"></a></td>
                        <td>romance novel</td>
                        <td>colour stix</td>
                        <td>Rs 1,652.00 PKR</td>
                        <td>9</td>
                        <td><a href="#">Edit</a>|<a href="#">Delete</a></td>
                    </tr>
                    <tr class="table-row">
                        <td width="15%"><a href="#"><img width="100%"
                                    src="https://cdn.shopify.com/s/files/1/1338/0845/products/11_Singles_Stix_Romane_Novel_267_800x1200.jpg?v=1670962494"
                                    alt="aaa"></a></td>
                        <td>romance novel</td>
                        <td>colour stix</td>
                        <td>Rs 1,652.00 PKR</td>
                        <td>9</td>
                        <td><a href="#">Edit</a>|<a href="#">Delete</a></td>
                    </tr>
                </tbody>
            </table>
        </div>



    </main>
    @endsection
