@extends('app')



@section('content')

    @include('dashboard.sidebar')



    <!-- Page Content -->

    <div id="page-wrapper">

        <div class="container-fluid">



            <div class="row">

                <div class="col-lg-12">

                    <h1 class="page-header">Ubah Konten {{$about->about_category_name}}</h1>

                    @if($errors->any())

                        <ul class="alert alert-danger">

                            @foreach($errors->all() as $error)

                                <li> {{$error}}</li>

                            @endforeach

                        </ul>

                    @endif

                    {!! Form::open(['url'=>'about/update']) !!}

                        <input type="hidden" value="{{$about->id}}" name="id">

                        <div class="form-group">

                            {!! Form::label('content', 'Konten') !!}

                            {!! Form::textarea('content', $about->content, ['class'=>'form-control', 'id'=>'summernote']) !!}

                        </div>



                        <div class="form-group">

                            {!! Form::submit('Ubah Konten', ['class'=>'btn btn-primary form-control']) !!}

                        </div>

                    {!! Form::close() !!}

                </div>

            </div>

        </div>

    </div>

@endsection