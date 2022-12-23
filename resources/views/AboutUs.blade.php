
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
            <h1 >
                WHO ARE WE?
            </h1>
            <p >
                ZASH Beauty is launched with the intention of bringing a luxury shopping experience to Pakistan.
                Consumers now have easy access to purchase international standard makeup, fragrances, skincare, and
                haircare products with confidence. We guarantee that our products are 100% original as we try so source
                the products directly from either the principals, distributors, or resellers of the brands.Our wide
                range of products in each category make ZASH a one-stop destination for all beauty needs. We are trying
                to bring good back to our Land.
            </p>
        </div>
        <div class="div2">
            <h1>
                HOW TO PLACE ORDER?
            </h1>
            <p >
                Visit our website or visit our physical retail outlet in Centurus, Islamabad on the ground floor to find
                your desired products You can place your order online and receive it in 2-5 days or place an order
                online to pick it up from our retail outlet the same day if you require your desired products sooner
            </p>
        </div>
        <div class="div1">
            <h1>
                WHY CHOOSE US?
            </h1>
            <p >
                We guarantee 100% authenticity of our products We have something for everyone . We offer excellent
                customer support and our brand advisors are highly skilled in their relevant fields allowing the
                customers to gain amazing insights and product knowledge making their buying experience seamless. ZASH
                Beauty is here to serve YOU.
            </p>
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
