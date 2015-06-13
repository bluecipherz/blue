jQuery(document).ready(function() {
	
	var $homeMidHeight = $(".b-nav").height();
	var $homeMidHeightFake = $(".home-top").height();
	var $LMiddle;
	
	
	
	var $temp = $(".cust-nav-bg").css("top");
	$(".home-top-fake").css({"height" : $homeMidHeightFake});
	
	
	window.onscroll = function() {
		/*
		if ( $(".home-top-fake").isOnScreen(-$homeMidHeight - 1 ) == false ){
			$(".cuts-nav-bg").css({"top" : "0px"});
		}else{
			$(".cuts-nav-bg").css({"top" : "-100px"});
		}
		*/
		
		//$LMiddle = - (window.pageYOffset) / 10;
		
		//$(".layer-middle").css({"margin-top" : $LMiddle});
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
	
	
	
	/* ANIMATION */
	
	/* SLIDE - 1 */
	var s1T = 0 , maxWord = $(".slide-1 > .title").children().length;		
	
	function s1Title() {
		
		s1T++;
		
		$('.slide-1 > .title > span:nth-child('+s1T+')').animate ({ opacity: '1', }, 700, 'swing', function() { 
		
		if(s1T <= maxWord)s1Title(); 
		
		});
		
    }
    s1Title();
	
	function loop() {
		
		$('.pc-shadow').animate ({ width: '220', marginLeft: '0',}, 700, 'swing');
		$('.pc-shadow').animate ({ width: '280', marginLeft: '-30', }, 700, 'swing');
		
        $('#pc').animate ({ top: '-20', }, 700, 'swing');
		$('#pc').animate ({ top: '0', }, 700, 'swing', function() { loop(); });
    }
    loop();


});	