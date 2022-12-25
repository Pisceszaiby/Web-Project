
    @extends('layouts.main2')
    @push('title')
    <title>About Us</title>
    @endpush
    @push('css')
    <link rel="stylesheet" href="css/AboutUs.css">
    <link rel="stylesheet" href="css/navbar.css">
    @endpush

    @section('main-section')

   <x-NavBar></x-NavBar>
    <div class="embed-responsive embed-responsive-16by9" style="padding:0%;">
        <video class="embed-responsive-item" width="100%" autoplay loop muted>
            <source src="images\AboutUs.mp4" type="video/mp4"  />
        </video>
    </div>

    <section class="section1">
        <div class="div1">
            @foreach($infos as $info)

            <h1 >
                {{$info["heading"]}}
            </h1>
            <p >
                {{$info["info"]}}
            </p>
            @endforeach
        </div>
        
    </section>


<section >

        <div class="pro_div" style="background-color: #1d4a85; " >
            <div style="float: left;">
            <img src="images\hafsa.PNG" alt="" class="pic img-responsive">
             </div>
             <div style="float: left;">
            <p><b>Name:</b>Hafsa Tariq</p>
            <p><b>Profession:</b>Software Engineer</p>
            <p><b>Instagram:</b> <a href="https://www.instagram.com/h_afsatariq/?hl=en"> h_afsatariq</a></p>
        </div>
        </div>
        <div class="pro_div" style="background-color:#082142;" >
            <div style="float: left;">
            <img src="images\zainab.jpeg" alt="" class="pic img-responsive">
             </div>
             <div style="float: left;">
            <p><b>Name:</b>Zainab Anwaar</p>
            <p><b>Profession:</b>Software Engineer</p>
            <p><b>Instagram:</b><a href="https://www.instagram.com/zainab_anwaar03/?hl=en" > zainab_anwaar03 </a></p>
        </div>
        </div>
        <div class="pro_div" style="background-color:#082142; " >
            <div style="float: left;">
            <img src="images\sadia.jpeg" alt=""  class="pic img-responsive">
             </div>
             <div style="float: left;">
            <p><b>Name:</b>Sadia Rehman</p>
            <p><b>Profession:</b>Software Engineer</p>
            <p><b>Instagram:</b> <a href="https://www.instagram.com/burningbluephlanets/"> burningbluephlanets</a></p>
        </div>
        </div>
        <div class="pro_div" style="background-color: #1d4a85; ">
            <div style="float: left;">
            <img src="images\Amna.PNG" alt=""class="pic img-responsive">
             </div>
             <div style="float: left;">
            <p><b>Name:</b>Amna Ahmed</p>
            <p><b>Profession:</b>Software Engineer</p>
            <p><b>Instagram:</b> <a href="https://www.instagram.com/whimsical_critter/"> whimsical_critter</a></p>
        </div>
        </div>

    </section>
    <x-Foot />
    @endsection
