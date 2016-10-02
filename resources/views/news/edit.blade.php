@extends('app')

@section('content')
    <div id="wrapper">
        @include('dashboard.sidebar')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Ubah {{$news->news_title}}</h1>
                </div>
                <div class="col-lg-12">
                    {!! Form::open(['files'=>true, 'url'=>'news/update'])!!}
                    <input type="hidden" value="{{$news->news_id}}" name="news_id">
                    <input type="hidden" value="{{$news->news_image}}" name="old_image">
                    <div class="form-group">
                        {!! Form::label('news_title', 'Judul Berita') !!}
                        {!! Form::text('news_title', $news->news_title, ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        <img class="img-responsive" style="width: 300px; height: 150px;" src="{{url().'/images/news/'.$news->news_image}}">
                        {!! Form::label('Gambar') !!}
                        {!! Form::file('news_image', ['class'=>'']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('posting_date', 'Tanggal') !!}
                        {!! Form::input('date' , 'posting_date', Carbon\Carbon::now()->format('Y-m-d'), ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Ubah Berita', ['class'=>'btn btn-primary form-control']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection