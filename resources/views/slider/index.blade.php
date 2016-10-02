@extends('app')
@section('content')
    <div id="wrapper">
        @include('dashboard.sidebar')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Kelola Slider</h1>
                </div>
                <div class="col-lg-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Gambar Slider</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sliders as $slider)
                                <tr>
                                    <td></td>
                                    <td>
                                        <div style="width:300px; height: 150px">
                                            <img class="img-responsive" src="{{url().'/images/slider/'.$slider->slider_name}}" style="width:300px; height: 150px;">
                                        </div>
                                    </td>
                                    <td>
                                        <a href="edit/{{$slider->slider_id}}"><button class="btn">Ubah</button></a>
                                        <a onclick="return confirm('Are you sure want to delete this content')" href="delete/{{$slider->slider_id}}"><button class="btn">Hapus</button></a>
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