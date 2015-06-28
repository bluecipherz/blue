@extends('layouts.core')


@section('content')

<div class="container">
    <div class="jumbotron" style="margin-top:20px">
        <h1>{{ $blog->title }}</h1>

        <div>
            <p>{{ $blog->body }}</p>
        </div>
        <div>
            <h4><small>Posted By..</small>
            {{ $blog->author }}</h4>
        </div>
        <hr>
        <div>
            <h2>Comments</h2>
            @forelse($comments as $comment)
            <div class="row" style="border: 1px solid #ccc;margin-bottom: 10px;border-radius: 4px;">
                <div class="col-md-2">
                    <h3>{{ $comment->user }}</h3>
                </div>
                <div class="col-md-10" style="margin-top:20px;">
                    {{ $comment->comment }}
                </div>
            </div>
            @empty
                <div>
                    No Comments
                </div>
            @endforelse
        </div>
        <div class="row">
            <h2>Post Comment</h2>
            <div class="col-md-8 col-sm-12">
                {!! Form::open(['method' => 'POST','route' => ['comments.store'], 'class' => 'form-horizontal']) !!}
                {!! Form::hidden('blog_id',$blog->id) !!}
                <div class="form-group">
                {!! Form::text('user', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
                </div><div class="form-group">
                {!! Form::textarea('comment', null, ['class' => 'form-control', 'placeholder' => 'Comment']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Post', ['class' => 'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>


@endsection