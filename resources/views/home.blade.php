{{-- /resources/views/home.blade.php --}}

@extends('layouts.core')

@section('title', 'Home')

@section('csslinks')
	<input type="hidden" value="home" id="smartHead">
@endsection

@section('content')
<div class="home-top b-gum">
	<div class="boxx">
		<div class="row">
			<div class="h-t-content layer-middle b-untouchable">
				<div class="col-md-10 col-md-offset-1 " style="background:">
					<div class="slide-1">
						<div class="title">
							<span>RESPONSIVE</span> <span>AND</span> <span>ADAPTIVE</span> <span>WEB</span> <span>PAGES</span>
						</div>
						<div class="graphics">
							
							<div id="tab"> 
								<div class="tab-screen">
									<div class="s1-tab-s1">
										@include('animations.page-1.slide-1.p-2')
									</div>
								</div>
								<div class="t-circle"></div>
							</div>
							<div class="tab-shadow-set">
								<div class="tab-shadow">
								</div>
							</div>
							
							<div id="pc"> 
								<div class="pc-screen">
									<div class="s1-pc-s1">
										@include('animations.page-1.slide-1.p-1')
									</div>
								</div>
								<div class="pc-keyb">
									<span class="p-circle-1"></span>
									<span class="p-circle-2"></span>
									<span class="p-circle-3"></span>
								</div>
							</div>
							<div class="pc-shadow-set">
								<div class="pc-shadow">
								</div>
							</div>
							
							<div id="phone"> 
								<div class="phone-screen">
									<div class="s1-phone-s1">
										@include('animations.page-1.slide-1.p-3')
									</div>
								</div>
								<span class="ph-circle"></span>
							</div>
							<div class="phone-shadow-set">
								<div class="phone-shadow">
								</div>
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
				
				
			</div>
		</div>
	</div>
	
	

@endsection
