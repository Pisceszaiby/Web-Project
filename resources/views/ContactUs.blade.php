
    @extends('layouts.main2')
    @push('title')
    <title>Contact Us</title>
    @endpush
    @push('css')
    <link rel="stylesheet" href="css/AboutUs.css">
    <link rel="stylesheet" href="css/navbar.css">
    @endpush

    @section('main-section')
    <x-Navbar />
    <div class="embed-responsive embed-responsive-16by9" style="padding:0%;">
        <video class="embed-responsive-item" width="100%" autoplay loop muted>
            <source src="images\ContactUs.mp4" type="video/mp4" />
        </video>
    </div>
    <section class="section1">
        <div class="div1">
            <h1>
                OUR EMAIL?
            </h1>
            <p>
                If you have questions or comments regarding our Privacy Policy or our privacy practices, please contact
                us by sending an email to ZASH@gmail.com.
            </p>
        </div>
        <div class="div2">
            <h1>
                OUR FAX?
            </h1>
            <p >
                In regard of sending any fax we have a Data Controller of our brand, Dr.Sadia. You can contact the data
                controller by writing to the address P.O.BOX E-11/1 Islamabad.
            </p>
        </div>
        <div class="div1">
            <h1>
                SOCIAL MEDIA?
            </h1>
            <p class="psize">Instagram : ZASH-Beauty</p>
            <p class="psize">Facebook : ZASH-Beauty</p>
            <p class="psize">Twitter : ZASH-Beauty</p>

        </div>
    </section>
    <x-Foot />
    @endsection
