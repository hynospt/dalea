<!DOCTYPE html><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><!-- HTML -->

<head><!-- Head-->
    <title>Product Detail Page</title>
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="{{url('assets')}}/dalea/original/img/ico.ico" type="image/x-icon" />
    <meta name="keywords" content="dalea, nusantara, mandiri, indonesia, jakarta, bandung, architect, engineer, enterpreuneur" />
    <meta name="description" content="Dalea Land is a real estate development company, located in Indonesia Capital City, consist of young and bright Indonesian architect, engineer and enterpreuneur." />

    <!-- CSS -->
    <link rel="stylesheet" href="{{url('assets')}}/dalea/original/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="{{url('assets')}}/dalea/original/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="{{url('assets')}}/dalea/original/fonts/fonts.css" type="text/css" />
    <link rel="stylesheet" href="{{url('assets')}}/dalea/original/fonts/ionicons.css" type="text/css" />
    <link rel="stylesheet" href="{{url('assets')}}/dalea/original/fonts/icomoon.css" type="text/css" />
    <link rel="stylesheet" href="{{url('assets')}}/dalea/original/css/style-new.css" type="text/css" />

    <!-- JavaScripts-->
    <script type="text/javascript" src="{{url('assets')}}/dalea/original/js/jquery-1.8.0.min.js"></script>
    <script type="text/javascript" src="{{url('assets')}}/dalea/original/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{url('assets')}}/dalea/original/js/waypoints.min.js"></script>
    <script type="text/javascript" src="{{url('assets')}}/dalea/original/js/jquery.nicescroll.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('html').niceScroll({'cursorwidth':'6','zindex':'10'});
        });
    </script>
</head><!-- End of head -->

<body>

<nav class="navbar navbar-default top" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
                <img src="{{url('assets')}}/dalea/original/img/logo.png"/>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#">
                        <img src="{{url('assets')}}/dalea/original/img/green-blue.png"/>
                    </a>
                </li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<section id="intro" class="container-fluid section" ><!-- Intro -->

    <!-- Carousel -->
    <div id="carousel-intro" class="carousel slide product-view" data-ride="carousel" data-interval="10000">

        <!-- Wrapper for slides -->

        <div class="carousel-inner">
        <?php
        $de = json_decode($product->product_detail->product_detail_slider_image);
        ?>
        @foreach($de as $key)
            <div class="item {{$key == $de[0] ? 'active':''}}">
                <img src="{{ url()}}/images/products/slider/{{ $key }}" class="cover"/>
            </div>
        @endforeach
        </div>

<!-- Indicators -->
<ol class="carousel-indicators">
    @for($i=0; $i<count($de);$i++)
        <li data-target="#carousel-intro" data-slide-to="{{$i}}" class="active"></li>
    @endfor
</ol>

<!-- Controls -->
<a class="left carousel-control" href="#carousel-intro" data-slide="prev">
<span class="icon-prev"></span>
</a>
<a class="right carousel-control" href="#carousel-intro" data-slide="next">
<span class="icon-next"></span>
</a>

</div>
<style>
.txt-prod { font-size: 50px; text-align: center; color: #2e3844; }
.navbar-right { display: none !important; }
.in-prod { font-size: 30px; margin-left: 30px; }
.bg-prod { background: #8a8a8a; padding: 100px 0; }

</style>
<div class="bg-prod clearfix">
<div class="col-sm-10 col-sm-offset-1 txt-prod">{!! $product->product_detail->product_tag !!}
</div>
</div>

</section><!-- End of Intro -->

<section id="product-desc" class="container-fluid" style="background: #ebe9e7;"><!-- Intro -->

<style>
.map-wrapper { margin-top: 60px; }
nav.top { background: #2e3844 !important; }
.img-produk { text-align: center; margin-bottom: 30px; }
.pad-produk { padding-right: 70px; font-size: 18px; }
.bg-grey { background: #ebe9e7; padding: 100px 0;  }
#intro .carousel .carousel-indicators li { width: 14px; height: 14px; border-radius: 50%; background: transparent; border: 2px solid white; margin: 0 3px; }
#intro .carousel .carousel-indicators li.active { background: white; }
#intro .carousel .carousel-indicators li:hover { background: white; }
@media (max-width: 1219px) {
.pad-produk { padding-right: 20px; }
}
@media (max-width: 992px) {
.map-wrapper { margin-top: 30px; }
.pad-produk { padding-right: 0px; }
.intro-produk { margin-top: 30px; text-align: center; }
#product-desc img { max-width: 100%; }
.bg-prod { padding: 50px 0; }
.txt-prod { font-size: 30px;  }
.in-prod { font-size: 20px; margin-left: 20px; }
}
</style>


<ul class="nav nav-tabs title-nav">
{{--<li class="active"><a href="#akasha" data-toggle="tab">AKASHA</a></li>--}}
{{--<li><a href="#residia" data-toggle="tab">RESIDIA</a></li>--}}
{{--<li><a href="#platara" data-toggle="tab">PLATARA</a></li>--}}
    <li><a href=""></a></li>
    @foreach($publishedProducts as $prod)
        <li><a href="{{$prod->product_id}}">{{$prod->product_name}}</a></li>
    @endforeach
</ul>
<div class="container">
<div id="product-content" class="tab-content">
<div class="tab-pane active content-height" id="akasha" style="height:100% !important;">
    <div class="bg-grey clearfix">
        <div class="col-md-6">
            <div class="pad-produk">
                <div class="img-produk"><img src="{{url().'/images/products/'.$product->product_detail->product_detail_header}}"/></div>
                <div>{!! $product->product_detail->product_detail_description !!}</div>
            </div>
        </div>
        <div class="col-md-6 intro-produk">
            <img src="{{url().'/images/products/'.$product->product_detail->product_detail_image}}" class="img-respinsive"/>
            <div class="map-wrapper">
                <div id="map_akasha" style=" width:100%; height:300px; "></div>
            </div>
        </div>
    </div>
</div>
<div class="tab-pane content-height" id="residia" style="height:100% !important;">
    <div class="bg-grey clearfix">
        <div class="col-md-6">
            <div class="pad-produk">
                <div class="img-produk"><img src="{{url('assets')}}/dalea/original/img/residia02.png"/></div>
                <div>Residia Cimanggis Townhouse terdiri dari 8 unit rumah didirikan di atas lahan lebih dari 900 m2 dengan design exclusive dan harga terjangkau. Terletak di perbatasan selatan kota Jakarta. Residia Cimanggis terhindar dari hiruk pikuk kota dan memiliki aura alam dan kesejukan. <br/><br/>Lokasi strategis di apit 2 pintu tol, dan 2 jalan utama menuju kota Jakarta dikelilingi pusat perbelanjaan dan hiburan (Cibubur Junction, Giant, Hypermart, Margonda City), rumah sakit internasional (Mitra Keluarga, Melia, Permata Cibubur) dan sekolah (Al-Azhar Syifa Budi, Al-Azhar 20, Tiara Bangsa, Nirmala), Universitas (Universitas Indonesia, Jayabaya, Gunadharma), <br/<br/>Menjadikan kelebihan RESIDIA CIMANGGIS sebagai aset investasi yang baik bagi anda, Residia Cimanggis your "Modern Village" for living.<br/><br/><span style="font-weight: bold;">Lokasi</span><br/>Jalan Tipar, Radar Auri<br/>Depok<br/>Jawa Barat</div>
            </div>
        </div>
        <div class="col-md-6 intro-produk">
            <img src="{{url('assets')}}/dalea/original/img/map02.jpg"  class="img-respinsive"/>
            <div class="map-wrapper">
                <div id="map_residia" style=" width:100%; height:300px; "></div>
            </div>

        </div>
    </div>
</div>
<div class="tab-pane content-height" id="platara" style="height:100% !important;">
    <div class="bg-grey clearfix">
        <div class="col-md-6">
            <div class="pad-produk">
                <div class="img-produk"><img src="{{url('assets')}}/dalea/original/img/platara02.png"/></div>
                <div>Setiap manusia melihat rumahnyalah yang terindah<br/><br/>Dalea berkomitmen untuk membangun pondasi impian anda, karena bagi setiap orang, tak peduli seberapa kecil atau besar, rumahnya akan selalu akan menjadi yang terindah.<br/><br/><span style="font-weight: bold;">Lokasi</span><br/>Jalan Tana Ara, Ciputat<br/>Pondok Pinang<br/>Jakarta Selatan</div>
            </div>
        </div>
        <div class="col-md-6 intro-produk">
            <img src="{{url('assets')}}/dalea/original/img/map03.jpg"  class="img-respinsive"/>
            <div class="map-wrapper">
                <div id="map_platara" style=" width:100%; height:300px; "></div>
            </div>
        </div>
    </div>
</div>
</div>

</section>

<section id="contact" class="container-fluid section" style="padding-top: 0;"><!-- Contact -->
<style>
#contact.container-fluid.section { padding-top: 320px; }
.form-control::-moz-placeholder { color: #aaa9a9; }
.form-control:-ms-input-placeholder { color: #aaa9a9; }
.form-control::-webkit-input-placeholder { color: #aaa9a9; }
#contact .contact-form input[type="text"], #contact .contact-form textarea {
border-bottom: 0;
background: white;
font-style: normal;
border-radius: 0;
color: #aaa9a9;
font-size: 15px;
height: 50px;
margin-bottom: 15px;
}
#contact .contact-form textarea {
resize: none;
height: 205px;
}
#contact .contact-form input:focus, #contact .contact-form textarea:focus {
border-bottom: 0;
}
#contact .contact-form .submit { text-align: left; }
#contact .contact-form .submit button { background: #2e3844; color: white; font-size: 20px; font-weight: bold; width: 170px; height: 55px; }
#contact .contact-form .submit button:hover { background: #2e3844; }
@media (max-width: 767px) {
#contact.container-fluid.section { padding-top: 150px; }
.title-top img { height: 24px; margin-bottom: 0; }
}
#contact #footer { margin-top: 0;background: #868686; padding: 35px 0 30px; position: relative; }
#contact #footer ul.soscmedia { margin: 8px 0 30px 0; }
#contact #footer ul.soscmedia li { display: inline-block; margin-right: 35px; }
#contact #footer ul.soscmedia li:last-child { margin-right: 0; }
.img-opacity { opacity: 0.5; }
.img-opacity:hover { opacity: 1; }
#contact #footer .copyright { color: #e6e9ed; font-size: 18px; font-weight: bold; }
#contact .backtotop { position: absolute; top: -13px; right: 90px; opacity: 0.8; }
#contact .backtotop:hover { opacity: 1; }
#contact .txt-contact { font-size: 18px; color: #e6e9ed; }
@media (max-width: 767px) {
#contact #footer ul.soscmedia li { margin-right: 25px; }
#contact .txt-contact { font-size: 14px; margin-top: 20px; }
#contact .backtotop { right: 20px; }
}

</style>
<div id="footer">
<div class="container">
<div class="">
    <a href="#" class="backtotop"><img src="{{url('assets')}}/dalea/original/img/backtop.png"/></a>
</div>
<div class="col-md-6 left">
    <ul class="soscmedia">
        <li><a href="{{ $socials[0]['social_link'] }}" class="img-opacity"><img src="{{url('assets')}}/dalea/original/img/fb.png"/></a></li>
        <li><a href="{{ $socials[1]['social_link'] }}" class="img-opacity"><img src="{{url('assets')}}/dalea/original/img/tw.png"/></a></li>
        <li><a href="{{ $socials[2]['social_link'] }}" class="img-opacity"><img src="{{url('assets')}}/dalea/original/img/in.png"/></a></li>
        <li><a href="{{ $socials[3]['social_link'] }}" class="img-opacity"><img src="{{url('assets')}}/dalea/original/img/gl.png"/></a></li>
        <li><a href="{{ $socials[4]['social_link'] }}" class="img-opacity"><img src="{{url('assets')}}/dalea/original/img/ig.png"/></a></li>
    </ul>

            <span class="copyright">
                &copy; ALL RIGHTS RESERVED
            </span>
</div>

<div class="col-md-6 right txt-contact">
    @foreach($footer as $content)
        {!! $content->content !!}
    @endforeach
</div>
</div>
</div>

</section><!-- End of Contact -->


<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
$(document).ready(function() {
$('.carousel').carousel({
pause: "false",
interval: 4000
});

$('.carousel .item').css({'position': 'absolute', 'width': '100%', 'height': '100%'});
$('.carousel-inner div.item img.cover').each(function() {
var imgSrc = $(this).attr('src');
$(this).parent().css({'background': 'url('+imgSrc+') center center no-repeat', '-webkit-background-size': '100% ', '-moz-background-size': '100%', '-o-background-size': '100%', 'background-size': '100%', '-webkit-background-size': 'cover', '-moz-background-size': 'cover', '-o-background-size': 'cover', 'background-size': 'cover'});
$(this).remove();
});

$(".backtotop").click(function() {
var dest = $(this).attr('href');
$('html, body').stop().animate({
    scrollTop: 0
}, 1500);

return false
});
});

$(window).on('load resize', function() {
var winH = $(window).height();

$('#intro').css('min-height', winH+'px');
$('.carousel').css({'margin': 0, 'width': $(window).outerWidth(), 'height': $(window).outerHeight()});
});
window.onload= initialize;

function initialize()
{
var latlng = new google.maps.LatLng({{$product->product_detail->product_detail_map}});
var latlng2 = new google.maps.LatLng(-6.3721084,106.8699383);
var latlng3 = new google.maps.LatLng(-6.2745617,106.770347);
var myOptions =
{
zoom: 15,
center: latlng,
mapTypeId: google.maps.MapTypeId.ROADMAP
};

var myOptions2 =
{
zoom: 15,
center: latlng2,
mapTypeId: google.maps.MapTypeId.ROADMAP
};

var myOptions3 =
{
zoom: 15,
center: latlng3,
mapTypeId: google.maps.MapTypeId.ROADMAP
};

var map = new google.maps.Map(document.getElementById("map_akasha"), myOptions);

var map2 = new google.maps.Map(document.getElementById("map_residia"), myOptions2);

var map3 = new google.maps.Map(document.getElementById("map_platara"), myOptions3);

var myMarker = new google.maps.Marker(
    {
        position: latlng,
        map: map,
        title:"Akasha"
    });

var myMarker2 = new google.maps.Marker(
    {
        position: latlng2,
        map: map2,
        title:"Residia"
    });

var myMarker3 = new google.maps.Marker(
    {
        position: latlng3,
        map: map3,
        title:"Platara"
    });
}

</script>
</body><!-- End of Body -->

</html><!-- End of HTML -->