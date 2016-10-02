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
                        <h1 class="page-header">Ubah Jabatan : {{$career->role}}</h1>
                    </div>
                    <div class="col-lg-12">
                        @if($errors->any())
                            <ul class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    <li> {{$error}}</li>
                                @endforeach
                            </ul>
                        @endif
                        {!! Form::open(['url'=>'career/update']) !!}
                        <input type="hidden" name="career_id" value="{{$career->career_id}}">
                        <div class="form-group">
                            {!! Form::label('role', 'Jabatan') !!}
                            {!! Form::text('role', $career->role, ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('posting_date', 'Tanggal Posting') !!}
                            {!! Form::input('date' , 'posting_date', $career->posting_date, ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Ubah Jabatan', ['class'=>'btn btn-primary form-control']) !!}
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