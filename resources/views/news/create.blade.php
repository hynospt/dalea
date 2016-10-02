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
                        <h1 class="page-header">Tambah Berita</h1>
                    </div>
                    <div class="col-lg-12">
                        @if($errors->any())
                            <ul class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    <li> {{$error}}</li>
                                @endforeach
                            </ul>
                        @endif
                        {!! Form::open(['files'=>true, 'url'=>'news/store']) !!}

                        <div class="form-group">
                            {!! Form::label('Judul Berita') !!}
                            {!! Form::text('news_title', null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('Unggah Gambar') !!}
                            {!! Form::file('news_image', ['class'=>'']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('posting_date', 'Tanggal') !!}
                            {!! Form::input('date' , 'posting_date', Carbon\Carbon::now()->format('Y-m-d'), ['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Tambah Berita', ['class' => 'btn btn-primary form-control']) !!}
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