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
                    <div class="login-form col-lg-6 col-md-6 admin">
<h1>ZASH</h1>
                         <H2>Sign in as Admin</H2>
                        <br>
                        @php
                        if (!isset($errorStatus))
                            $errorStatus=1;
                        @endphp
                        <form action="{{url('/login')}}" method='post' >
                            @csrf
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Email: " name="email" id="email"
                                    aria-describedby="emailHelpId">
                                <!-- <small id="emailHelpId" class="form-text text-muted">Help text</small> -->
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" placeholder="Password: " name="password"
                                    id="password" placeholder="">
                            </div>
                            <button type="submit" class="product-add">Login</button>
                            <a href="/homepage" class="product-add">Continue Buying!</a>
                            <!--@if (session('alert'))
                                <div class="alert alert-success">
                                    {{ session('alert') }}
                                </div>
                            @endif -->
                            @if ($errorStatus==0)
                                Incorrect Credentials, Log in Again!
                            @endif



                        </form>

                    </div>
                </div>
            </div>
        </section>
    </main>

    @endsection
