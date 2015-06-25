jQuery(document).ready(function() {
	
	var $homeMidHeight = $(".b-nav").height();
	var $homeMidHeightFake = $(".home-top").height() + 200;
	var $page1 = true;
	
	$(".home-top-fake").css({"height" : $homeMidHeightFake});
	
	
	window.onscroll = function() {
		if( window.pageYOffset >= 10 && $(".home-top-fake").isOnScreen(-$homeMidHeight - 1 ) == true ){
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
		
	}
	
	var timeout;
	
	function linkBoxSet() {
		
		$('.linkSet').css({ 'left' : '0px'});
				
		$('.linkBox1').css({ 'opacity' : '1'});
		$('.linkBox2').css({ 'opacity' : '1'});
		$('.linkBox3').css({ 'opacity' : '1'});
		$('.linkBox4').css({ 'opacity' : '1'});
		clearTimeout(timeout);
	}
	
	function linkBoxReset() {
		timeout = setTimeout(function(){$('.linkSet').css({ 'left' : '-4000px'});} , 1200);
		
		$('.linkBox1').css({ 'opacity' : '0'});
		$('.linkBox2').css({ 'opacity' : '0'});
		$('.linkBox3').css({ 'opacity' : '0'});
		$('.linkBox4').css({ 'opacity' : '0'});
	}
	
	
	
	
	$.fn.isOnScreen = function($offset){

		var win = $(window);

		var viewport = {
			top : win.scrollTop(),
			left : win.scrollLeft()
		};
		viewport.right = viewport.left + win.width();
		viewport.bottom = viewport.top + win.height();

		var bounds = this.offset();
		bounds.right = bounds.left + this.outerWidth();
		bounds.bottom = bounds.top + this.outerHeight() + $offset;

		return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));

	};
	
});	





