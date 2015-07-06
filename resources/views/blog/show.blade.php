@extends('layouts.core')


@section('content')

<div class="container">
    <div class="jumbotron" style="margin-top:20px">
        <input type="hidden" id="blog_id" value="<% $blog->slug %>">
        <h1><% $blog->title %></h1>
        <div>
            <p><% $blog->body %></p>
        </div>
        <div>
            <h4><small>Posted By..</small>
            <% $blog->author %></h4>
        </div>
        <hr>
        <form ng-submit="submitComment()">
            <div class="form-group">
                <input type="text" class="form-control input-sm" name="author" ng-model="commentData.user" placeholder="Name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control input-lg" name="comment" ng-model="commentData.comment" placeholder="Your comment">
            </div>
            <div class="form-group text-right">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
            </div>
        </form>
        <!-- LOADING ICON ============= -->
        <!-- show loading icon if the loading variable is set to true -->
        <p class="text-center" ng-show="loading"><span class="fa fa-meh-o fa-5x fa-spin"></span></p>

        <!-- THE COMMENTS ====================================== -->
        <!-- hide these comments if the loading variable is true -->
        <div class="comment" ng-hide="loading" ng-repeat="comment in comments">
            <h3>Comment #{{ comment.id }} <small>by {{ comment.author }}</small></h3>
            <p>{{ comment.text }}</p>
            <p><a href="#" ng-click="deleteComment(comment.id)" class="text-muted">Delete</a></p>
        </div>
    </div>
    <script src="/js/controllers/mainCtrl.js"></script>
    <script src="/js/services/commentService.js"></script>
    <script>
        var commentApp = angular.module('commentApp', ['mainCtrl', 'commentService']);
        commentApp.value('blog', document.getElementById('blog_id').value);
    </script>
</div>


@endsection