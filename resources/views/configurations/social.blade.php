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
                        <h1 class="page-header">Kelola URL Media Sosial </h1>
                    </div>
                    <div class="col-lg-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Media Sosial</th>
                                    <th>Url</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($socialList as $social)
                                    <tr>
                                        <td></td>
                                        <td>{{$social->social_nicename}}</td>
                                        <td>{{$social->social_link}}</td>
                                        <td>
                                            <a href="edit/{{$social->social_id}}"><button class="btn">Ubah</button></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
@endsection