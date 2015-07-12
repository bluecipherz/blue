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
        <div class="row">
            <div class="col-lg-8">
                {!! Form::open(['route' => 'blogs.comments.store', 'class' => 'form-horizontal']) !!}
                    <div class="form-group">
                        {!! Form::text('name', '', ['class' => 'form-control input-sm', 'placeholder' => 'Name']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::textarea('comment', '', ['class' => 'form-control input-sm', 'placeholder' => 'Your comment', 'rows' => '5']) !!}
                    </div>
                    <div class="form-group text-right">
                        {!! Form::button('Submit', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
        <!-- LOADING ICON ============= -->
        <!-- show loading icon if the loading variable is set to true -->
        <p class="text-center"><span class="fa fa-meh-o fa-5x fa-spin"></span></p>

        <!-- THE COMMENTS ====================================== -->
        <!-- hide these comments if the loading variable is true -->
        <div class="comments">
        @forelse($comments as $comment)
            <div class="comment">
                <h3>Comment #{{ $comment->id }} <small>by {{ $comment->user }}</small></h3>
                <p>{{ $comment->comment }}</p>
                <p><a href="#" class="text-muted">Delete</a></p>
            </div>
        @empty
            <div>No comments</div>
        @endforelse
        </div>
    </div>
</div>


@endsection