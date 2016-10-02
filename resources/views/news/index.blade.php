@extends('app')

@section('content')
    <div id="wrapper">
        @include('dashboard.sidebar')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Kelola Berita</h1>
                </div>
                <div class="col-lg-12">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Judul Berita</th>
                            <th>Gambar Berita</th>
                            <th>Tanggal Posting</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($news as $new)
                            <tr>
                                <td></td>
                                <td>{{$new->news_title}}</td>
                                <td>
                                    <img style="width: 300px; height: 150px" class="img-responsive" src="{{url().'/images/news/'.$new->news_image}}">
                                </td>
                                <td>{{$new->posting_date}}</td>
                                <td>
                                    <a href="edit/{{$new->news_id}}"><button class="btn">Ubah</button></a>
                                    <a onclick="return confirm('Are you sure want to delete this content')" href="delete/{{$new->news_id}}"><button class="btn">Hapus</button></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


