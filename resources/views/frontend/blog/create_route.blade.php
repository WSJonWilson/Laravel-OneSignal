@extends('layouts.master')

@section('styles')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{URL::secure('src/css/routes.css') }}" type="text/css">
<link rel="stylesheet" href="{{ URL::to('src/css/menu.css') }}">
<link rel="stylesheet" href="{{ URL::to('src/css/form.css') }}">
@endsection

@section('content')

<div class="main_content">

    <h2 class="title-head">Create New Category</h2>
 @include('includes.info-box')
        <div>


                    <form action="{{ route('frontend.blog.route.create') }}" method="post">
                        <div class="input-group">
                            <label for="route_name"> Route Name </label>
                            <input type="text" name="route_name" id="route_name" {{ $errors->has('route_name') ? 'class=has-error': '' }} value="{{ Request::old('route_name') }}" />
                        </div>
                            <div class="input-group">
                                    <div class="input-group">
                                            <label for="courier_name"> Courier Name </label>
                                            <textarea name="courier_name" id="courier_name" cols="1" rows="1"></textarea>
                                        </div>
                                        <div class="btn-container">
                                                    <button type="submit"class="btn btn-primary">Save Route </button>
                                        </div>
                                </div>
                                <input type="hidden" name="_token" value="{{ Session::token()}}" />

                    </form>
        </div>
</div>

@endsection

