@extends('layouts.core')


@section('content')
    <div class="container" style="margin-top:20px">
        <ol class="breadcrumb" style="margin-top:20px">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li class="active">Blogs</li>
        </ol>
        @foreach($AllBlog as $blog)
        <div class="well clearfix">
            <div class="col-md-1">
                <span class="glyphicon  glyphicon-user"></span>
                {{ $blog->author }}
            </div>
            <div class="col-md-11">
                <h4>{{ $blog->title }}</h4>
                <p>@if(strlen($blog->body ) > 355){!! str_limit($blog->body, 355) . link_to_route('blogs.show', 'continue...', $blog->slug) !!}@else{{ $blog->body }}@endif</p>
            </div>
        </div>
        @endforeach
    </div>
@endsection
