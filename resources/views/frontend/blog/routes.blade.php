@extends('layouts.master')

@section('styles')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{URL::to('src/css/routes.css') }}" type="text/css">
<link rel="stylesheet" href="{{ URL::to('src/css/menu.css') }}">
<link rel="stylesheet" href="{{ URL::to('src/css/form.css') }}">
@endsection

@section('content')


<div class="routes_container">
        <div class="row">
                <div class="col-5">
    <section id="route-admin" >
                <button class="btn btn-default"><a href="{{route ('create.route') }}">Create Route</a></button>
        </form>
    </section>



    <section class="list">
            <ul>

        @foreach($routes as $route)
            {{-- <article> --}}
    <li class="wrapper">
        <!-- Card content -->
        <div class="card-body">
          <!-- Title -->
          <h4 class="card-title">{{ $route->route_name }} </h4>
          <!-- Text -->
          <p class="card-text">{{ $route->courier_name }}</p>
          <!-- Button -->
          <a href="#" class="btn btn-primary">Edit</a>
          <a href="#" class="btn btn-danger">Delete</a>
        </div>
    </li>
            {{-- </article> --}}
        @endforeach
            </ul>
    </section>
    @if ($routes->lastPage() > 1)
<section class="pagination">
        @if($routes->currentPage() !== 1)
<a href="{{ $routes->previousPageUrl() }}"><i class="fa fa-caret-left"></i></a>
    @endif
    @if($routes->currentPage() !== $routes->lastPage())
    <a href="{{ $routes->nextPageUrl() }}"><i class="fa fa-caret-right"></i></a>
    @endif
</section>


@endif
</div>
<div class="col-1">
</div>

<div class="col-5">
</div>
<div class="col-1">
    </div>
</div>
</div>
@endsection

@section('scripts')
    <script type="text/javascript">
    var token = "{{ Session::token() }}";
    </script>
@endsection
