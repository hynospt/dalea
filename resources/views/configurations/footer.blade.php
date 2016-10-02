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
                        <h1 class="page-header">Kelola Konten Footer</h1>
                        @if($errors->any())
                            <ul class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    <li> {{$error}}</li>
                                @endforeach
                            </ul>
                        @endif
                        {!! Form::open(['url'=>'configurations/footer']) !!}
                        <input type="hidden" name="footer_id" value="{{$footer->footer_id}}">
                        <div class="form-group">
                            {!! Form::label('content', 'Konten') !!}
                            {!! Form::textarea('content', $footer->content, ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Ubah Konten Footer', ['class'=>'btn btn-primary form-control']) !!}
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