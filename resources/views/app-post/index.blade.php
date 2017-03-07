@extends('master')

@section('master-content-title')

    Title

@stop

@section('master-content-body')

    @foreach($posts as $post)

        <div class="box">

            @include('app-post.box-header')

            @include('app-post.box-body')

            @include('app-post.box-comment')

            @include('app-post.box-footer')

        </div>

    @endforeach

@stop