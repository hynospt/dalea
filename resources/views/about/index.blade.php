@extends('app')

@section('content')
    @include('dashboard.sidebar')

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Kelola Konten Tentang Kami</h1>
                        <div class="">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Halaman</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($about as $name)
                                        <tr>
                                            <td></td>
                                            <td>
                                                <h4>{{$name->about_category_name}}</h4>
                                            </td>
                                            <td>
                                                <a href="edit/{{$name->id}}"><button class="btn">Ubah</button></a>
                                                {{--<a onclick="return confirm('Are you sure want to delete this content')" href="delete/{{$name->id}}"><button class="btn">Hapus</button></a>--}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
@endsection