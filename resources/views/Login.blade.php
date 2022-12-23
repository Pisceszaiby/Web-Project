@extends('layouts.main')
@push('title')
    <title>Login</title>
@endpush
@section('content')


<body>



    <main>

        <!-- Login-->
        <section>
            <div class="container-fluid ">
                <div class="row">
                    <div class="section-a image-signin col-lg-6 col-md-6">
                        <img src="../images/signin.png" alt="" style="width:90%">
                    </div>
                    <div class="login-form col-lg-6 col-md-6">

                        <img class="logo-zash" src="{{ asset('images/zash-logo.png') }}" width="50%" alt="">
                        <H1>SIGN IN AS ADMIN</H1>
                        <br>
                        <form action="Homepage.html">

                            <div class="mb-3">

                                <input type="email" class="form-control" placeholder="Email: " name="email" id="email"
                                    aria-describedby="emailHelpId">
                                <!-- <small id="emailHelpId" class="form-text text-muted">Help text</small> -->
                            </div>
                            <div class="mb-3">

                                <input type="password" class="form-control" placeholder="Password: " name="email"
                                    id="email" placeholder="">
                            </div>
                            <button type="submit" class="product-add">Login</button>
                        </form>

                    </div>

                </div>
            </div>
        </section>




    </main>

    @endsection
