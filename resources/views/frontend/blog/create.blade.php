@extends('layouts.master')
@section('title')
    Create

@endsection

@section('styles')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::to('src/css/menu.css') }}">
    <link rel="stylesheet" href="{{ URL::to('src/css/form.css') }}">


@endsection


@section('content')
<div class="main_content">

    <h2 class="title-head">Create Notification</h2>
 @include('includes.info-box')
        <div>


                    <form action="{{ route('frontend.blog.post.create') }}" method="post">
                        <div class="input-group">
                            <label for="title"> Title </label>
                            <input type="text" name="title" id="title" {{ $errors->has('title') ? 'class=has-error': '' }} value="{{ Request::old('title') }}" />
                        </div>
                            <div class="input-group">
                                    {{-- <label for="route_select"> Route </label>
                                    <select name="route_select" id="route_select" >
                                    <option value="East A ID">East A</option>
                                    </select>
                                    --}}

                                        <select class="selectpicker" multiple data-live-search="true">

                                            @foreach($routes as $route)
                                            <option>{{ $route->route_name }}</option>
                                            @endforeach

                                              </select>
                      <div class="added-routes">
                            <ul></ul>
                        </div>
                                    <input type="hidden" name="routes" id="routes"/>
                                    <div class="input-group">
                                            <label for="body"> Body </label>
                                            <textarea name="body" id="body" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="btn-container">
                                                    <button type="submit"class="btn btn-primary">Push Notification</button>
                                            </div>
                                        </div>
                                    <input type="hidden" name="_token" value="{{ Session::token()}}" />
                    </form>
        </div>
</div>

@endsection
<script src="{{ mix('js/app.js') }}"></script>

