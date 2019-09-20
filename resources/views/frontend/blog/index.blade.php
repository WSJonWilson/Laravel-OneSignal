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
    <div id="app">
        {{-- <Tableview></Tableview> --}}

    </div>

        <div class="row">
            <div class="col-4"></div>

            <div class="col-4">


{{--
                      <h3>{{ $post->title }}</h3>
                  <p>{{ $post->body }}</p>
            <span class="subtitle"> Author: Unknown | {{ $post->created_at }}</span>
             --}}
                                        {{-- <a href="{{ route('blog.single', ['post_id' => $post->id, 'end' => 'frontend']) }}">Read more</a> --}}
                                    {{-- </div>
                                </div>
                            </li>
                        </div>
                    </article>
                    @endforeach


                    @if ($posts->lastPage() > 1)
                    <section class="pagination">
                            @if($posts->currentPage() !== 1)
                    <a href="{{ $posts->previousPageUrl() }}"><i class="fa fa-caret-left"></i></a>
                        @endif
                        @if($posts->currentPage() !== $posts->lastPage())
                        <a href="{{ $posts->nextPageUrl() }}"><i class="fa fa-caret-right"></i></a>
                        @endif
                    </section>

                    @endif --}}

            </div>


            <div class="col-4">


            </div>
        </div>
        </div>
</div>

@endsection
