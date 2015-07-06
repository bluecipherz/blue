jQuery(document).ready(function() {
	
	var $homeMidHeight = $(".b-nav").height();
	var $homeMidHeightFake = $(".home-top").height() + 200;
	var $page1 = true;
	
	$(".home-top-fake").css({"height" : $homeMidHeightFake});
	
	var $pf2navCounter = -220;
	var pfnavfirstSet = true;
	window.onscroll = function() {
		if( $(".home-top-fake").isOnScreen(-$homeMidHeight - 1 ) == true ){
			$(".cuts-nav-bg").css({"top" : "0px"});
			
		
		}else{
				$(".cuts-nav-bg").css({"top" : "-100px"});
		}
		
		
		if( window.pageYOffset > 100 ){
			$('.page-1').css({"transform" : "scale(0.5)" ,"opacity" : "0"});
			if($page1) {linkBoxSet(); $page1 =false;}
		}else{
			$('.page-1').css({"transform" : "scale(1)","opacity" : "1"});
			if($page1==false) {linkBoxReset(); $page1 =true;}
			//linkBoxReset();
		}
		
		
		
		if( $(".home-bottom").isOnScreen(-400 ,5000) == false ){
			if(pfnavfirstSet)pfnavSetter(); pfnavfirstSet = false;
			
			if( $(".home-pfBG").isOnScreen(-100 ,5000) == true ){
				if( $(".pf2nav").isOnScreen($pf2navCounter ,5000) == true ){
					$(".fhead").css({"height":"120px"})
					$(".pf2nav").css({"height":"180px"})
					$(".pf2NavHead").css({"height":"0px"})
					$pf2navCounter = -220;
				}else{
					$(".fhead").css({"height":"0px"})
					$(".pf2nav").css({"height":"0px"})
					$(".pf2NavHead").css({"height":"40px"})
					$pf2navCounter = -50;
				}
			}else{
					$(".pf2NavHead").css({"height":"0px"})
			}
		}	
	}
	
	var timeout;
	
	function linkBoxSet() {
		
		$('.linkSet').css({ 'left' : '0px'});
		$('.linkSet').css({ 'opacity' :'1'});
		
		clearTimeout(timeout);
	}
	
	function linkBoxReset() {
		timeout = setTimeout(function(){$('.linkSet').css({ 'left' : '-4000px'});} , 300);
		
		$('.linkSet').css({ 'left' : '0px'});
		
		
		$('.linkSet').css({ 'opacity' : '0'});
	}
	
	
	
	
	$.fn.isOnScreen = function($offset,$bottom){

		var win = $(window);

		var viewport = {
			top : win.scrollTop(),
			left : win.scrollLeft()
		};
		viewport.right = viewport.left + win.width();
		viewport.bottom = viewport.top + win.height() + $bottom;

		var bounds = this.offset();
		bounds.right = bounds.left + this.outerWidth();
		bounds.bottom = bounds.top + this.outerHeight() + $offset;

		return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));

	};
	
		function pfnavSetter(){
			$(".fnavb1").addClass("fnavbAct1");
			pfhResetter();
			$(".fnavb1").find("div").css({"height":"65%"});
			$(".fnavb1").find("img").css({"width":"70%"});
		}
	
	
				$(".fnavb1").click(function(){
					
					$(".fnavb2").removeClass("fnavbAct2");
					$(".fnavb3").removeClass("fnavbAct3");
					$(".fnavb4").removeClass("fnavbAct4");
					$(".fnavb1").addClass("fnavbAct1");
					
					pfhResetter();
					$(".fnavb1").find("div").css({"height":"65%"});
					$(".fnavb1").find("img").css({"width":"70%"});
				});
				$(".fnavb2").click(function(){
					$(".fnavb1").removeClass("fnavbAct1");
					$(".fnavb3").removeClass("fnavbAct3");
					$(".fnavb4").removeClass("fnavbAct4");
					$(".fnavb2").addClass("fnavbAct2");
					
					pfhResetter();
					$(".fnavb2").find("div").css({"height":"65%"});
					$(".fnavb2").find("img").css({"width":"70%"});
				});
				$(".fnavb3").click(function(){
					$(".fnavb2").removeClass("fnavbAct2");
					$(".fnavb1").removeClass("fnavbAct1");
					$(".fnavb4").removeClass("fnavbAct4");
					$(".fnavb3").addClass("fnavbAct3");
					
					pfhResetter();
					$(".fnavb3").find("div").css({"height":"65%"});
					$(".fnavb3").find("img").css({"width":"70%"});
				});
				$(".fnavb4").click(function(){
					$(".fnavb2").removeClass("fnavbAct2");
					$(".fnavb3").removeClass("fnavbAct3");
					$(".fnavb1").removeClass("fnavbAct1");
					$(".fnavb4").addClass("fnavbAct4");
					
					pfhResetter();
					$(".fnavb4").find("div").css({"height":"65%"});
					$(".fnavb4").find("img").css({"width":"70%"});
				});
				
				function pfhResetter(){
					$(".fnavb").find("div").css({"height":"60%"});
					$(".fnavb").find("img").css({"width":"45%"});
				}
				
			
});	





