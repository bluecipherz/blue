{{-- /resources/views/home.blade.php --}}

@extends('layouts.core')

@section('title', 'Home')

@section('csslinks')
	<input type="hidden" value="home" id="smartHead">
@endsection

@section('content')

<div class="home-top b-gum">
	<div class="sideLinkSet" >
		<div class="sidelink b-fakeLink"><span class="b-dot-1"></span> <span class="sn-name">BLOG</span> </div>
		<div class="sidelink b-fakeLink"><span class="b-dot-1"></span> <span class="sn-name">FORUM</span> </div>
		<div class="sidelink b-fakeLink"><span class="b-dot-1"></span> <span class="sn-name">ARTICLES</span> </div>
		<div class="sidelink b-fakeLink"><span class="b-dot-1"></span> <span class="sn-name">PRICING</span> </div>
		<div class="sidelink b-fakeLink"><span class="b-dot-1"></span> <span class="sn-name">ABOUT US</span> </div>
		<div class="sidelink b-fakeLink"><span class="b-dot-1"></span> <span class="sn-name">HELP</span> </div>
	</div>
	<div class="boxx" style="height:100% ;">
		<div class="row" style="height:100% ;">
			<div class="h-t-content" style="height:100% ; ">
				
				<div class="page-1  b-untouchable">
					<div class=" col-md-10 col-md-offset-1  col-lg-8 col-lg-offset-2  " style="height:100% ;">
						<div class="slide-1" >
							@include('animations.page-1.slide-1')
						</div>
						<div class="slide-2">
							@include('animations.page-1.slide-2')
						</div>
						<div class="slide-3">
							@include('animations.page-1.slide-3')
						</div>
					</div>
				</div>
				
				<div class="page-2  b-untouchable">
					<div class="col-xs-12  col-sm-8 col-sm-offset-2  col-md-6 col-md-offset-3 linkSet" style="height:100% ;">
						<div class="linkBox linkBox1 fakeLink">
						</div>
						
						<div class="linkBox linkBox2 fakeLink">
						</div>
						
						<div class="linkBox linkBox3 fakeLink">
						</div>
						
						<div class="linkBox linkBox4 fakeLink">
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>
<div class="home-top-fake" ></div>

	<div class="home-mid">
		<div class="boxx">
			<div class="row">
				
				
			</div>
		</div>
	</div>
	
	

@endsection
