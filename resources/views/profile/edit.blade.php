@extends('app')
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <div id="wrapper">
        @include('dashboard.sidebar')
        <div id="page-wrapper">
            <div class="row">
                <h1>Ubah Profil {{$profile->name}} </h1>

            <hr/>
            <div class="alert alert-danger">Kosongkan kolom password jika tidak ingin mengubah password.</div>
                @if($errors->any())
                    <ul class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <li> {{$error}}</li>
                        @endforeach
                    </ul>
                @endif
                {!! Form::open(['url'=>'profile/update']) !!}
                <input type="hidden" name="id" value="{{$profile->id}}">
                <div class="form-group">
                    {!! Form::label('name', 'Nama') !!}
                    {!! Form::text('name', $profile->name, ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::text('email', $profile->email, ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('new_password', 'Password Baru') !!}
                    {{--{!! Form::password('new_password', null, ['class'=>'form-control form-pas']) !!}--}}
                    <input type="password" class="form-control" name="new_password">
                </div>
                <div class="form-group">
                    {!! Form::label('c_password', 'Konfirmasi Password Baru') !!}
                    {{--{!! Form::password('confirmNewPassword', null, ['class'=>'form-control']) !!}--}}
                    <input type="password" name="confirmNewPassword" class="form-control">
                </div>
                <div class="form-group">
                    {!! Form::submit('Ubah Profil', ['class'=>'btn btn-primary form-control']) !!}
                </div>
                {!! Form::close() !!}
        </div>
    </div>
@endsection
