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
                        <h1 class="page-header">Kelola Karir</h1>
                    </div>
                    <div class="col-lg-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Jabatan</th>
                                    <th>Tanggal Posting</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($careers as $career)
                                    <tr>
                                        <td></td>
                                        <td>{{$career->role}}</td>
                                        <td>{{$career->posting_date}}</td>
                                        <td>
                                            <a href="edit/{{$career->career_id}}"><button class="btn">Ubah</button></a>
                                            <a onclick="return confirm('Are you sure want to delete this content')" href="delete/{{$career->career_id}}"><button class="btn">Hapus</button></a>
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