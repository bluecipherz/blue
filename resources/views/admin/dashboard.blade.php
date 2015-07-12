@extends('layouts.core')


@section('content')
    <div class="container-full dashboard">
        <div class="dashboard-sidebar">
            <ul class="dashboard-nav">
                <li class="active dropdown-nav">
                    <a href="" class="dropdown-link"><span class="glyphicon glyphicon-dashboard">&nbsp;</span>Dashboard</a>
                    <ul class="dropdown-list">
                        <li><a href="#"><span class="glyphicon glyphicon-home">&nbsp;</span>Home</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-briefcase">&nbsp;</span>Current Projects</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-phone-alt">&nbsp;</span>My Orders</a></li>
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
        <div class="dashboard-content">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="h3">Dashboard</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-white">
                        <div class="panel-heading">
                            <h3 class="h3">Welcome to BCZ Admin console</h3>
                            <span class="text-muted">Lets get started</span>
                        </div>
                        <div class="panel-body">
                            <div class="col-3">
                                <h4>Get Started</h4>
                                <p><a href="#" class="btn btn-primary btn-lg">Customize your site</a></p>
                                or <a href="#">change your theme completely</a>.
                            </div>
                            <div class="col-3">
                                <h4>Next Step</h4>
                                <p><span class="glyphicon glyphicon-pencil">&nbsp;</span><a href="#">Write your first blog</a></p>
                                <p><span class="glyphicon glyphicon-plus">&nbsp;</span><a href="#">Add an about page</a></p>
                                <p><span class="glyphicon glyphicon-floppy-disk">&nbsp;</span><a href="#">View your site</a></p>
                                or <a href="#">change your theme completely</a>.
                            </div>
                            <div class="col-3">
                                <h4>More actions</h4>
                                <p><span class="glyphicon glyphicon-pencil">&nbsp;</span>Manage <a href="#">Widgets</a> and <a href="#">Menus</a></p>
                                <p><span class="glyphicon glyphicon-plus">&nbsp;</span><a href="#">Turn comments on or off</a></p>
                                <p><span class="glyphicon glyphicon-glass">&nbsp;</span><a href="#">Learn more about getting started</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-white">
                        <div class="panel-heading">
                            At a Glance
                        </div>
                        <div class="panel-body">
                            <div class="clearfix">
                                <div class="col-2">
                                    <p><span class="glyphicon glyphicon-tag">&nbsp;</span><a href="#">1 Post</a></p>
                                    <p><span class="glyphicon glyphicon-comment">&nbsp;</span><a href="#">1 Comment</a></p>
                                </div>
                                <div class="col-2">
                                    <p><span class="glyphicon glyphicon-tag">&nbsp;</span><a href="#">1 Page</a></p>
                                </div>
                            </div>
                            <p>BCZ Engine v0.1 running <a href="#">Achellis Foot</a> theme.</p>
                            <p><a href="#">Search Engines Discouraged</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="panel panel-white">
                        <div class="panel-heading">
                            Quick draft
                        </div>
                        <div class="panel-body-2">
                            <textarea class="form-control" placeholder="What's on your mind?"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="panel panel-white">
                        <div class="panel-heading">
                            Activity
                        </div>
                        <div class="panel-body">
                            Under construction
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="panel panel-white">
                        <div class="panel-heading">
                            BCZ News
                        </div>
                        <div class="panel-body">
                            Under construction
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection