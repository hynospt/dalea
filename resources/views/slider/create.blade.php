@extends('app')

@section('content')
    <div id="wrapper">
        @include('dashboard.sidebar')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tambah Slider</h1>
                </div>
                <div class="col-lg-12">
                    @if($errors->any())
                        <ul class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <li> {{$error}}</li>
                            @endforeach
                        </ul>
                    @endif
                    {!! Form::open(['files'=>true, 'url'=>'slider/store']) !!}
                        <div class="form-group">
                            <div class="col-xs-12">
                                {!! Form::label('Unggah Gambar') !!}
                                {!! Form::file('slider_name', ['class'=>'']) !!}<br/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-4">
                                {!! Form::submit('Add Slider', ['class' => 'btn btn-primary form-control']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection