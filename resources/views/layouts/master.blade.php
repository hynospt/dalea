<html>
<head>
    <title>App Name - @yield('title')</title>

    <link href="../../../public/assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../public/assets/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="../../../public/assets/dist/css/timeline.css" rel="stylesheet">
    <link href="../../../public/assets/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../../../public/assets/bower_components/morrisjs/morris.css" rel="stylesheet">
    <link href="../../../public/assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
@section('sidebar')
    This is the master sidebar.
@show

<div class="container">
    @yield('content')
</div>
</body>
</html>