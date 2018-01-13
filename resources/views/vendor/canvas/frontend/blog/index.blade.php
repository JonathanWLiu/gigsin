@extends('canvas::frontend.layout')

@if (isset($tag->title))
    @section('title', \Canvas\Models\Settings::blogTitle().' | '.$tag->title)
@else
    @section('title', \Canvas\Models\Settings::blogTitle().' | Blog')
@endif
@section('og-title', \Canvas\Models\Settings::blogTitle())
@section('twitter-title', \Canvas\Models\Settings::blogTitle())
@section('og-description', \Canvas\Models\Settings::blogDescription())
@section('twitter-description', \Canvas\Models\Settings::blogDescription())


@section('content')
    <div class="container" STYLE="width: 100%">
                @include('canvas::frontend.blog.partials.posts')
    </div>
@stop

@section('unique-js')
    <script src="{{ elixir('vendor/canvas/assets/js/frontend.js') }}" charset="utf-8"></script>
@endsection