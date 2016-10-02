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
                        <h1 class="page-header">Buat Konten</h1>
                        @if($errors->any())
                            <ul class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    <li> {{$error}}</li>
                                @endforeach
                            </ul>
                        @endif
                        {!! Form::open(['url'=>'about']) !!}
                        <div class="form-group">
                            {!! Form::label('category_id', 'Category') !!}
                            <select class="form-control" name="category_id">
                                <option value="">Select</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->about_category_id}}">{{$category->about_category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            {!! Form::label('content', 'Content') !!}
                            {!! Form::textarea('content', null, ['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Add History', ['class'=>'btn btn-primary form-control']) !!}
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