@extends('layouts.master')
@section('title')
    Blog Index

@endsection

@section('styles')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::to('src/css/menu.css') }}">
    <link rel="stylesheet" href="{{ URL::to('src/css/layout.css') }}">

@endsection


@section('content')
<div class="main_content">
    <h2 class="title-head">Home</h2>

        <div class="row">
            <div class="col-4"></div>

            <div class="col-4">

                    <div class="card">
                            <li class="list-item">
                                <div class="row">
                                    <div class="col-1"> icon</div>
                                    <div class="col-5">
                                        <p>
                                            Title
                                        </p>
                                    <p>body</p>
                                    </div>
                                    <div class="col-3"></div>
                                    <div class="col-3">
                                        <p>Status</p>
                                        <p>edit</p>
                                    </div>
                                </div>
                            </li>
                        </div>
                        <div class="card">
                            <li class="list-item">2</li>
                        </div>
                        <div class="card">
                            <li class="list-item">3</li>
                        </div>

            </div>


            <div class="col-4"></div>
        </div>
        </div>
</div>

@endsection
