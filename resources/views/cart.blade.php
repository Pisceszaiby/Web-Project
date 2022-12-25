    @php
    $subtotal=0;
   @endphp
    @extends('layouts.main2')
    @push('title')
    <title>Cart</title>
    @endpush
    @push('css')
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="css/navbar.css">

    @endpush

    @section('main-section')

    <div class="wrapper">
        <br>
        <x-Navbar />
		<h1>SHOPPING CART</h1>
		<div class="project">
			<div class="shop">
				@foreach($items as $item)
					<h1></h1>
					<x-cartItem img="{{$item->picPath}}" name="{{$item->Title}}" price="{{$item->price}}" quantity="{{$item->Quantity}}" productID="{{$item->productID}}"></x-cartItem>
                    {{$a=($item->price * $item->Quantity)}}
                {{$subtotal=$subtotal+$a}}
            	@endforeach
			</div>
            @php
            $tax=$subtotal * 0.05;
            $shipment=5;
            $total=$subtotal + $tax + $shipment;
            @endphp
			<div class="right-bar">
				<x-cart subt="{{$subtotal}}" price="{{$tax}}" ship="{{$shipment}}" total="{{$total}}"></x-cart>
			</div>
		</div>
	</div>
    <x-Foot/>
    @endsection
