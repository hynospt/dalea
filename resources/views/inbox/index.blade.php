@extends('app')

@section('content')
    <div id="wrapper">
        @include('dashboard.sidebar')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Kelola Pesan</h1>
                </div>
                <div class="col-lg-12">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Dari</th>
                            <th>Email</th>
                            <th>Pesan</th>
                            <th>Dikirim pada</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($inboxes as $inbox)
                            <tr>
                                <td></td>
                                <td>{{$inbox->fullname}}</td>
                                <td>{{$inbox->email}}</td>
                                <td>{{$inbox->message}}</td>
                                <td>{{date('d-M-Y', strtotime($inbox->created_at))}}</td>
                                <td>
                                    <a onclick="return confirm('Are you sure want to delete this content. You cannot undo this action.')" href="delete/{{$inbox->inbox_id}}"><button class="btn">Delete</button></a>
                                    <a href="/inbox/view/{{$inbox->inbox_id}}"><button class="btn">&nbsp;View&nbsp;&nbsp;</button></a>
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