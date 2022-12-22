
    @extends('layouts.main2')
    @push('title')
    <title>CheckOut</title>
    @endpush
    @push('css')
    <link rel="stylesheet" href="css/checkout.css">
    <link rel="stylesheet" href="css/navbar.css">
    @endpush

    @section('main-section')

    <div class="wrapper">
        <h2>Check Out</h2>
        <form action="" method="post">
            <h4>Account</h4>
            <div class="input_group">

                <div class="input_box">
                    <input type="text" placeholder="FirstName" required class="name">
                    <i class="fa fa-user icon"></i>
                </div>
                <div class="input_box">
                    <input type="text" placeholder="LastName" required class="name" >
                    <i class="fa fa-user icon"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="email" placeholder="Email Address" required class="name">
                    <i class="fa fa-envelope icon"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="text" placeholder="Address" required class="name">
                    <i class="fa fa-map-marker icon" aria-hidden="true"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="text" placeholder="City" required class="name">
                    <i class="fa fa-institution icon"></i>
                </div>
            </div>


            <div class="input_group">
                <div class="input_box">
                    <button type="submit">Confirm order</button>
                </div>
            </div>

        </form>
    </div>

    @endsection
