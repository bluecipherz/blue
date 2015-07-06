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
							<div class="head">
								BUILD
							</div>
							<div  class="cont" >
								<span>Cross browser websites </span><span> amazing mobile apps </span><span> awesome desktop app </span>
							</div>
						</div>
						
						<div class="linkBox linkBox2 fakeLink">
							<div class="head">
								BLOG
							</div>
							<div class="cont">
								be the first to know the latest developer tricks and tips 
							</div>
						</div>
						
						<div class="linkBox linkBox3 fakeLink">
							<div class="head">
								JOIN US
							</div>
							<div class="cont">
								we are offering you a lot of features without spending a single cent
							</div>
						</div>
						
						<div class="linkBox linkBox4 fakeLink">
							<div class="head">
								FOLIO
							</div>
							<div class="cont">
								take a look at our amazing and colourful works
							</div>
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
				<div class="col-md-12" style="margin-top:60px;">
					<div class="col-md-4 box" >
						<div class="boxInner">
							 
						</div>
					</div>
					<div class="col-md-4 box" >
						<div class="boxInner">
							 
						</div>
					</div>
					<div class="col-md-4 box" >
						<div class="boxInner">
							 
						</div>
					</div>
					
					<div class="col-md-4 box" >
						<div class="boxInner">
							 
						</div>
					</div>
					<div class="col-md-4 box" >
						<div class="boxInner">
							 
						</div>
					</div>
					<div class="col-md-4 box" >
						<div class="boxInner">
							 
						</div>
					</div>
					
					
				</div>
			</div>
		</div>
	</div>
	<div class="home-bottom ">
		<div class="boxx">
			<div class="row b-untouchable">
				<div class="col-md-12">
					<div class="col-md-8 col-md-offset-2 hbhead">
						WHAT WE DO?
					</div>
				</div>
				<div class="col-md-12">
					<div class="col-md-3 " style="height:255px;  margin-top:50px; ">
						<img src="img/home/bottom/think.png" style="width:90%; margin-left:5%;" draggable="false">
					</div>
					<div class="col-md-3" style="height:255px;  margin-top:50px; ">
						<img src="img/home/bottom/develop.png" style="width:90%; margin-left:5%;"   draggable="false">
					</div>
					<div class="col-md-3" style="height:255px;  margin-top:50px; ">
						<img src="img/home/bottom/deploy.png" style="width:90%; margin-left:5%;"   draggable="false">
					</div>
					<div class="col-md-3" style="height:255px;  margin-top:50px; ">
						<img src="img/home/bottom/promote.png" style="width:90%; margin-left:5%;"   draggable="false">
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	<div class="home-prefooter  ">
		<div style="height:120px; background:rgba(27,232,106,0.8);"></div>
		
		<div class="home-pfBG b-untouchable">
			<div class="fhead">
				<div class="boxx">
					<div class="row">
						<div class="col-md-10 col-md-offset-1 pf2nav" >
							<span class="fnavb fnavb1 ">
								<div class="imgBox">
									<img src="img/home/prefooter2/web.png" draggable="false">
								</div>
								WEB APPS
							</span>
							<span class="fnavb fnavb2  ">
								<div  class="imgBox">
									<img src="img/home/prefooter2/mob.png" draggable="false">
								</div>
								MOBILE APPS
							</span>
							<span class="fnavb fnavb3  ">
								<div class="imgBox" >
									<img src="img/home/prefooter2/desktop.png" draggable="false">
								</div>
								DESKTOP APPS
							</span>
							<span class="fnavb fnavb4  ">
								<div class="imgBox" >
									<img src="img/home/prefooter2/others.png" draggable="false">
								</div>
								OTHERS
							</span>
						</div>
					</div>
				</div>
			</div>	
			
			<div class="boxx">
				<div class="row b-untouchable">
					
					<div class="col-md-12" style="padding-top:50px; font-family:Dosis;">
						<div class="col-md-6 " style="height:325px; margin-bottom:20px">
							<div class="pfBoxOuter">
								<div class="pfbox" style="color:rgba(0,0,0,0.4); text-align:center; ">
									<span style="display:block; float:left; margin:30px 0px 0px 70px; font-size:120px; font-family:Code-H; ">FLAT</span>
									<span style="display:block; float:left; margin:40px 0px 0px 70px; font-size:60px;  font-family:Code-H; ">50% OFF </span>
									<div class="pfBoxFooter"><span style="display:block; float:left; margin:0px 0px 10px 10px; font-size:20px; ">Flat 50% off on Responsive HTML5 Websites</span>
									GET IT NOW...!!!</div>
								</div>
							</div>
						</div>
						
						<div class="col-md-6 " style="height:325px; margin-bottom:20px">
							<div class="pfBoxOuter">
								<div class="pfbox" style="color:rgba(0,0,0,0.4); text-align:center; background:#ffae42;">
									<span style="display:block; float:left; margin:30px 0px 0px 50px; font-size:110px;  font-family:Code-H; ">HTML5</span>
									<span style="display:block; float:left; margin:40px 0px 0px 70px; font-size:60px;  font-family:Code-H; ">UPTO 20%</span>
									<div class="pfBoxFooter"><span style="display:block; float:left; margin:0px 0px 10px 10px; font-size:20px; ">Upto 20% off on Responsive HTML5 Websites</span>
									GET IT NOW...!!!</div>
								</div>
							</div>
						</div>
						
						<div class="col-md-6 " style="height:325px; ">
							<div class=" pfBoxOuter">
								<div class="pfbox" style="color:rgba(0,0,0,0.4); text-align:center; background:#c92170;">
									<span style="display:block; float:left; margin:40px 0px 0px 15px; font-size:60px; font-family:Code-H;  ">E-COMMERCE</span>
									<span style="display:block; float:left; margin:10px 0px 0px 25px; font-size:30px;  font-family:Code-H; ">WITH CMS AND CONSOLE</span>
									<div class="pfBoxFooter"><span style="display:block; float:left; margin:0px 0px 10px 10px; font-size:20px; ">YOur E-Commerce Website is ready in our hands, No need to wait</span>
									GET IT NOW...!!!</div>
								</div>
							</div>
						</div>
						
						<div class="col-md-6 " style="height:325px; ">
							<div class="pfBoxOuter">
								<div class="pfbox" style="color:rgba(0,0,0,0.4); text-align:center;background:#3ce163; ">
									<span style="display:block; float:left; margin:30px 0px 0px 70px; font-size:120px;  font-family:Code-H; ">FLAT</span>
									<span style="display:block; float:left; margin:40px 0px 0px 70px; font-size:60px;  font-family:Code-H; ">50% OFF </span>
									<div class="pfBoxFooter"><span style="display:block; float:left; margin:0px 0px 10px 10px; font-size:20px; ">Flat 50% off on Responsive HTML5 Websites</span>
									GET IT NOW...!!!</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>	
	</div>
	
	{{--
	<div class="home-prefooter2" style="font-family:Dosis;">
		<div class="boxx">
			<div class="row b-untouchable">
				
					<div class="col-md-12" style="padding-top:50px;">
						<div class="col-md-12 " style="height:80px; padding:0px; color:rgba(255,255,255,0.7); text-align:center; font-size:30px;">
							Latest Blog Feeds
						</div>
						@for($i=1;$i<=8;$i++)
							<div class="col-md-3 " style="height:250px; padding:0px;">
								<div  style="height:94%; width:94%; margin:3%;  background:rgba(255,255,255,0.1);">
									<div style="text-align:center; font-size:16px; padding:7px; background:#2cb8e6; color:rgba(0,0,0,0.6);"> Heading of the Blog </div>
									<div style="text-align:left; font-size:14px; padding:7px 10px 10px 15px; color:rgba(255,255,255,0.6);"> Content of this blog is like.. AWwwee. cuz you know what..? thses peeps are like Awwee... still donno why i type Awwee... dammnn alll i know is the damn sound came from your Mouth AWEE.. </div>
								</div>
							</div>
						@endfor
					</div>	
			</div>
		</div>
	</div>
	--}}

@endsection
