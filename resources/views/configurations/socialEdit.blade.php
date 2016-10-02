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
                        <h1 class="page-header">Ubah URL {{$socialList->social_nicename}}</h1>
                            @if($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach($errors->all() as $error)
                                        <li> {{$error}}</li>
                                    @endforeach
                                </ul>
                            @endif
                            {!! Form::open(['url'=>'configurations/social']) !!}
                            <input type="hidden" name="social_id" value="{{$socialList->social_id}}">
                            <div class="form-group">
                                {!! Form::label('social_link', 'Url') !!}
                                {!! Form::text('social_link', $socialList->social_link, ['class'=>'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::submit('Ubah URL', ['class'=>'btn btn-primary form-control']) !!}
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