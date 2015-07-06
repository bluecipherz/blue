@extends('layouts.core')


@section('content')
    <div class="container-full dashboard">
        <div class="dashboard-sidebar">
            <ul class="dashboard-nav">
                <li class="active dropdown-nav">
                    <a href="" class="dropdown-link"><span class="glyphicon glyphicon-dashboard">&nbsp;</span>Dashboard</a>
                    <ul class="dropdown-list">
                        <li><a href="#"><span class="glyphicon glyphicon-home">&nbsp;</span>Home</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-inbox">&nbsp;</span>Inbox</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-pencil">&nbsp;</span>My Blogs</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-tasks">&nbsp;</span>Tasks</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-stats">&nbsp;</span>Work Status</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-info-sign">&nbsp;</span>Notifications</a></li>
                    </ul>
                </li>
                <li><a href="#"><span class="glyphicon glyphicon-music">&nbsp;</span>Media</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-paperclip">&nbsp;</span>Posts</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-link">&nbsp;</span>Links</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-file">&nbsp;</span>Pages</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-comment">&nbsp;</span>Comments</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-envelope">&nbsp;</span>Feedback</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-user">&nbsp;</span>Users</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-wrench">&nbsp;</span>Tools</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-cog">&nbsp;</span>Settings</a></li>
            </ul>
        </div>
        <div class="dashboard-content" ng-init="yourtext='Data binding is cool!'">
            Enter your text: <input type="text" ng-model="yourtext" />
            <strong>You entered :</strong> {{ yourtext }}
        </div>
    </div>
@endsection