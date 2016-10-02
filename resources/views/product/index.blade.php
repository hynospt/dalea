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
                        <h1 class="page-header">Kelola Produk</h1>
                    </div>
                    <div class="col-lg-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Produk</th>
                                    <th>Gambar Produk</th>
                                    <th>Sampul Produk</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td></td>
                                        <td>{{$product->product_name}}</td>
                                        <td>
                                            <div style="width: 300px; height: 150px">
                                                <img style="width: 300px; height: 100%" src="{{url().'/images/products/'.$product->product_image}}" class="img-responsive">
                                            </div>
                                        </td>
                                        <td>
                                            <div style="width: 300px;height: 150px">
                                                <img style="width: 300px; height: 100%" src="{{url().'/images/products/'.$product->product_over_image}}" class="img-responsive">
                                            </div>
                                        </td>
                                        <td>
                                            <a href="edit/{{$product->product_id}}"><button class="btn">Ubah</button></a>
                                            <a onclick="return confirm('Are you sure want to delete this content')" href="delete/{{$product->product_id}}"><button class="btn">Hapus</button></a>
                                            @if($product->status == "Unpublished")
                                                <a onclick="return confirm('Publish this product to the homepage ?')" href="publish/{{$product->product_id}}"><button class="btn">Publish</button></a>
                                            @elseif($product->status == "Published")
                                                <a onclick="return confirm('Remove this product from the homepage ?')" href="remove/{{$product->product_id}}"><button class="btn">Unpublish</button></a>
                                            @endif
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