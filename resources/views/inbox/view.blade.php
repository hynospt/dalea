@extends('app')

@section('content')
    <div id="wrapper">
        @include('dashboard.sidebar')

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Message from {{$inboxes->fullname}}</h1>
                </div>
                <div class="col-lg-12">
                    <div>
                        <h4>{{$inboxes->email}}</h4>
                    </div>
                    <div>
                        {{$inboxes->message}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection