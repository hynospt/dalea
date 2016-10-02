<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

    <div class="navbar-header">

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

            <span class="sr-only">Toggle navigation</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

        </button>

        <a class="navbar-brand" href="/about/index" >
            <img class="img-responsive" src="{{url('assets')}}/dalea/original/img/logo-login.png">
        </a>

    </div>

    <!-- /.navbar-header -->



    <ul class="nav navbar-top-links navbar-right">



        <li class="dropdown">

            <a class="dropdown-toggle" data-toggle="dropdown" href="#">

                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>

            </a>

            <ul class="dropdown-menu dropdown-user">

                <li><a href="/profile/edit/{{Auth::user()->id}}"><i class="fa fa-user fa-fw"></i> Profil Pengguna</a>

                </li>

                <li class="divider"></li>

                <li><a href="/auth/logout"><i class="fa fa-sign-out fa-fw"></i> Keluar</a>

                </li>

            </ul>

            <!-- /.dropdown-user -->

        </li>

        <!-- /.dropdown -->

    </ul>

    <!-- /.navbar-top-links -->



    <div class="navbar-default sidebar" role="navigation">

        <div class="sidebar-nav navbar-collapse">

            <ul class="nav" id="side-menu">

                <li>

                    <a href="#"><i class="fa fa-sliders fa-fw"></i> Slider<span class="fa arrow"></span></a>

                    <ul class="nav nav-second-level">

                        <li>

                            <a href="/slider/create">Tambah Slider</a>

                        </li>

                        <li>

                            <a href="/slider/index">Kelola Slider</a>

                        </li>

                    </ul>

                </li>

                <li>

                    <a href="#"><i class="fa fa-building fa-fw"></i>Produk<span class="fa arrow"></span></a>

                    <ul class="nav nav-second-level">

                        <li>

                            <a href="/product/create">Buat Produk</a>

                        </li>

                        <li>

                            <a href="/product/index">Kelola Produk</a>

                        </li>

                    </ul>

                </li>

                <li>

                    <a href="#"><i class="fa fa-edit fa-fw"></i>Tentang Kami<span class="fa arrow"></span></a>

                    <ul class="nav nav-second-level">

                        {{--<li>--}}

                        {{--<a href="/about/create">Buat Konten</a>--}}

                        {{--</li>--}}

                        <li>

                            <a href="/about/index">Kelola Konten</a>

                        </li>

                    </ul>

                </li>

                <li>

                    <a href="#"><i class="fa fa-files-o fa-fw"></i>Berita<span class="fa arrow"></span></a>

                    <ul class="nav nav-second-level">

                        <li>

                            <a href="/news/create">Buat Berita</a>

                        </li>

                        <li>

                            <a href="/news/index">Kelola Berita</a>

                        </li>

                    </ul>

                    <!-- /.nav-second-level -->

                </li>



                <li>

                    <a href="#"><i class="fa fa-sign-out fa-fw"></i>Peluang<span class="fa arrow"></span></a>

                    <ul class="nav nav-second-level">

                        <li>

                            <a href="/career/create">Buat Karir</a>

                        </li>

                        <li>

                            <a href="/career/index">Kelola Karir</a>

                        </li>

                    </ul>

                    <!-- /.nav-second-level -->

                </li>



                <li>

                    <a href="/inbox"><i class="fa fa-envelope fa-fw"></i>Pesan<span class="fa arrow"></span></a>

                </li>



                <li>

                    <a href="#"><i class="fa fa-wrench fa-fw"></i>Konfigurasi<span class="fa arrow"></span></a>

                    <ul class="nav nav-second-level">

                        {{--<li>--}}

                            {{--<a href="blank.html">Change Email</a>--}}

                        {{--</li>--}}

                        <li>

                            <a href="/configurations/social/index">Media Sosial</a>

                        </li>

                        <li>

                            <a href="/configurations/footer/index/1">Footer</a>

                        </li>

                    </ul>

                </li>



            </ul>

        </div>

        <!-- /.sidebar-collapse -->

    </div>

    <!-- /.navbar-static-side -->

</nav>