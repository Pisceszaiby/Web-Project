@extends('layouts.main')
@push('title')
    <title>Product Infos</title>
@endpush
@section('content')
<body>

    <main>

<div class="container-fluid section-a ">
    <x-nav-bar-admin></x-nav-bar-admin>
        <div class="table-responsive{-sm|-md|-lg|-xl|-xxl}">

            <table  class="table">
                <thead>
                    <tr>
                        <th class="col1 d-none d-sm-table-cell" width="20%"scope="col">Product Image</th>
                        <th class="col2" scope="col">Title</th>
                        <th class="col3 d-none d-sm-table-cell" scope="col">Type</th>
                        <th class="col4" scope="col">Price</th>
                        
                        <th class="col5 d-none d-sm-table-cell" scope="col">Quantity</th>
                        <th class="col6" scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)

                    <tr class="table-row">
                        <td  class="col1 d-none d-sm-table-cell" width="15%"> <a href="/productInfo/{{$product['productID']}}"><img width="100%"
                                    src="{{$product['picPath']}}"
                                    alt="aaa"></a></td>
                        <td>{{$product['Title']}}</td>
                        <td class="col3 d-none d-sm-table-cell">{{$product['Category']}}</td>
                        
                        @if($product['sale']=='1')
                        <td>{{$product['discountedPrice']}}</td>
                        @else
                        <td>{{$product['price']}}</td>
                        @endif
                        <td  class="col5 d-none d-sm-table-cell">{{$product['Quantity']}}</td>
                        <td><a href="/editProduct/{{$product['productID']}}">Edit</a>|<a href="/deleteProduct/{{$product['productID']}}">Delete</a></td>




                    </tr>
                    @endforeach
                    <tr >

                    </tr>

                </tbody>
            </table>
        </div>


    </div>
    <x-Foot />
    </main>

    @endsection
