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
            var latLng = new google.maps.LatLng({{$product->product_detail->product_detail_map}});
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
                        <h1 class="page-header">Ubah {{$product->product_name}}</h1>
                    </div>
                    <div class="col-lg-12">
                        {!! Form::open(['files'=>true,'url'=>'product/update']) !!}
                        <input type="hidden" name="product_id" value="{{$product->product_id}}">

                        <div class="row">
                            <div class="form-group">
                                {!! Form::label('product_name', 'Nama Produk') !!}
                                {!! Form::text('product_name', $product->product_name, ['class'=>'form-control']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="form-group">
                                    {!! Form::label('product_image', 'Gambar Produk') !!}
                                    <div style="width: 300px; height: 200px"><img style="height: 200px; width: 300px" class="img-responsive" src="{{url().'/images/products/'.$product->product_image}}"></div>
                                    <input name="product_image" value="" type="file">
                                    <input name="product_image_old" value="{{$product->product_image}}" type="hidden">
                                </div>
                            </div>

                            <div class="col-xs-4">
                                <div class="form-group">
                                    {!! Form::label('product_over_image', 'Sampul Produk ( On Hover )') !!}
                                    <div style="width: 300px; height: 200px"><img style="height: 200px;width: 300px;" class="img-responsive" src="{{url().'/images/products/'.$product->product_over_image}}"></div>
                                    <input name="product_over_image" value="" type="file">
                                    <input name="product_over_image_old" value="{{$product->product_over_image}}" type="hidden">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php
                            $de = json_decode($product->product_detail->product_detail_slider_image);
                            ?>
                            @foreach($de as $ind => $key)
                                <div class="col-xs-4">
                                    {{--//Tanya Ahmad--}}
                                    <div class="form-group">
                                        {!! Form::label('product_slider_1', 'Gambar Slider I') !!}
                                            <input name="product_slider_old_{{$ind}}" value="{{$key}}" type="hidden">
                                            <div style="width: 300px; height: 200px"><img style="height: 200px;width: 300px;" class="img-responsive" src="{{url().'/images/products/slider/'.$key }}"></div>
                                            <input name="product_slider_{{$ind}}" value="" type="file">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="col-xs-4">
                                {{--//Tanya Ahmad--}}
                                <div class="form-group">
                                    {!! Form::label('product_detail_header', 'Logo Produk') !!}
                                    <div style="width: 300px; height: 200px"><img style="height: 200px;width: 300px;" class="img-responsive" src="{{url().'/images/products/'.$product->product_detail->product_detail_header }}"></div>
                                    <input name="product_detail_header" value="" type="file">
                                    <input name="product_detail_header_old" value="{{$product->product_detail->product_detail_header}}" type="hidden">
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group">
                                    {!! Form::label('product_detail_image', 'Gambar Detail Produk') !!}
                                    <div style="width: 300px; height: 200px"><img style="height: 200px;width: 300px;" class="img-responsive" src="{{url().'/images/products/'.$product->product_detail->product_detail_image }}"></div>
                                    <input name="product_detail_image" value="" type="file">
                                    <input name="product_detail_image_old" value="{{$product->product_detail->product_detail_image}}" type="hidden">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <h2 class="page-header">Ubah Detail Produk</h2>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                {!! Form::label('product_tag', 'Tag Produk') !!}
                                {!! Form::text('product_tag', $product->product_detail->product_tag, ['class'=>'form-control']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                {!! Form::label('product_detail_description', 'Deskripsi Produk') !!}
                                {!! Form::textArea('product_detail_description', $product->product_detail->product_detail_description, ['class'=>'form-control']) !!}
                            </div>
                        </div>
                        <div class="row">
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
                        </div>
                        <div class="row">
                            <div class="form-group">
                                {!! Form::submit('Ubah Produk', ['class'=>'btn btn-primary form-control']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
@endsection