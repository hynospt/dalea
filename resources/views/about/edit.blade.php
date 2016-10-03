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

                    <div class="col-lg-6">
                        <div class="form-group">
                            {!! Form::open(['files'=>true,'url'=>'about/update_image']) !!}
                                {!! Form::label('image_name', 'Gambar I') !!}
                                <div style="width: 300px; height: 200px"><img style="height: 200px; width: 300px" class="img-responsive" src="{{url().'/images/directors/'.$image1->image_name}}"></div>
                                <input name="image1" value="" type="file">
                                <input name="image1_old" value="{{$image1->image_name}}" type="hidden">
                            
                        </div>
                        {{-- {{$image1->image_name}} --}}
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            {!! Form::label('image_name', 'Gambar II') !!}
                            <div style="width: 300px; height: 200px"><img style="height: 200px; width: 300px" class="img-responsive" src="{{url().'/images/directors/'.$image2->image_name}}"></div>
                            <input name="image2" value="" type="file">
                            <input name="image2_old" value="{{$image2->image_name}}" type="hidden">
                            
                        </div>
                        {{-- {{$image2->image_name}} --}}
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            {!! Form::submit('Ubah Gambar', ['class'=>'btn btn-primary form-control']) !!}
                        </div>
                    </div>

                    {!! Form::close() !!}

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