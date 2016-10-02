@extends('app')

@section('content')
    <div id="wrapper">

        <!-- Navigation -->
        @include('dashboard.sidebar')

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Ubah Slider : {{$slider->slider_name}}</h1>
                        @if($errors->any())
                            <ul class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    <li> {{$error}}</li>
                                @endforeach
                            </ul>
                        @endif
                        <div class="col-xs-12">
                            <div style="width: 480px">
                                <img class="img-responsive" src="{{ url() }}/images/slider/{{$slider->slider_name}}" style="width: 500px;height: 260px">
                            </div>
                        </div>
                        {!! Form::open(['files'=>true,'url'=>'slider/update']) !!}
                        <input type="hidden" name="slider_id" value="{{$slider->slider_id}}">
                        <input type="hidden" name="old_slider" value="{{ $slider->slider_name }}">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <br>
                                {!! Form::file('slider_name', null, ['class'=>'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                {!! Form::submit('Ubah Slider', ['class'=>'btn btn-primary form-control']) !!}
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