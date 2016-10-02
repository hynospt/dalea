<!DOCTYPE html>

<html>

<head>

	<title>Dalea | Administrator</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{url('assets')}}/bower_components/metisMenu/dist/metisMenu.min.css">

    <link rel="stylesheet" href="{{url('assets')}}/dist/css/timeline.css">

    <link rel="stylesheet" href="{{url('assets')}}/dist/css/sb-admin-2.css">

    <link rel="stylesheet" href="{{url('assets')}}/bower_components/morrisjs/morris.css">

    <link rel="stylesheet" href="{{url('assets')}}/bower_components/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{url('assets')}}/dist/css/styles.css">

    <link rel="stylesheet" href="{{url('assets')}}/dist/js/summernote-master/dist/summernote.css">

    <link rel="shortcut icon" href="{{url('assets')}}/dalea/original/img/ico.ico" type="image/x-icon" />

</head>

<body>

	{{--<div class="container">--}}

		@yield('content')

	{{--</div>--}}



	@yield('footer')



    <script src="{{url('assets')}}/bower_components/jquery/dist/jquery.min.js"></script>

    <script src="{{url('assets')}}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <script src="{{url('assets')}}/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <script src="{{url('assets')}}/bower_components/raphael/raphael-min.js"></script>

    <script src="{{url('assets')}}/dist/js/sb-admin-2.js"></script>

    <script src="{{url('assets')}}/dist/js/summernote-master/dist/summernote.min.js"></script>

    <script>
        $(document).ready(function(){
            $("#summernote").summernote();
        })
    </script>

</body>

</html>