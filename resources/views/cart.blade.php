
    @extends('layouts.main2')
    @push('title')
    <title>Cart</title>
    @endpush
    @push('css')
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="css/navbar.css">

    @endpush

    @section('main-section')
    <x-Navbar />
    <div class="wrapper">
		<h1>Shopping Cart</h1>
		<div class="project">
			<div class="shop">
				<div class="box">
					<img src="1.jpg">
					<div class="content">
						<h3>Women Lipsticks</h3>
						<h4>Price: $40</h4>
						<p class="unit" style="color:  #082142;">Quantity: <input name="" value="2" disabled></p>

					</div>
				</div>

			</div>
			<div class="right-bar">
				<p><span>Subtotal</span> <span>$120</span></p>
				<hr>
				<p><span>Tax (5%)</span> <span>$6</span></p>
				<hr>
				<p><span>Shipping</span> <span>$15</span></p>
				<hr>
				<p><span>Total</span> <span>$141</span></p><a href="#"><i class="fa fa-shopping-cart"></i>Checkout</a>
			</div>
		</div>
	</div>
    @endsection
