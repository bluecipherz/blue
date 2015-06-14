jQuery(document).ready(function() {
	
	var $homeMidHeight = $(".b-nav").height();
	var $homeMidHeightFake = $(".home-top").height();
	var $LMiddle;
	
	
	
	var $temp = $(".cust-nav-bg").css("top");
	$(".home-top-fake").css({"height" : $homeMidHeightFake});
	
	
	window.onscroll = function() {
		if( window.pageYOffset >= 10 && $(".home-top-fake").isOnScreen(-$homeMidHeight - 1 ) == true ){
			$(".cuts-nav-bg").css({"top" : "0px"});
		}else{
				$(".cuts-nav-bg").css({"top" : "-100px"});
		}
		
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
		
		$('.tab-shadow').animate ({ width: '100', marginLeft: '-25',}, 700, 'swing');
		$('.tab-shadow').animate ({ width: '130', marginLeft: '-40', }, 700, 'swing');
		
		$('.phone-shadow').animate ({ width: '60', marginLeft: '-20',}, 700, 'swing');
		$('.phone-shadow').animate ({ width: '90', marginLeft: '-35', }, 700, 'swing');
		
		
		$('#tab').animate ({ top: '5', }, 700, 'swing');
		$('#tab').animate ({ top: '20', }, 700, 'swing');
		
        $('#pc').animate ({ top: '-20', }, 700, 'swing');
		$('#pc').animate ({ top: '0', }, 700, 'swing');
		
		$('#phone').animate ({ top: '25', }, 700, 'swing');
		$('#phone').animate ({ top: '40', }, 700, 'swing', function() { loop(); });
		
    }
    loop();

	
	
	
	/* Animation pages */
	
		/* slide - 1 */
	
			/* lapTop */
			
			var $v = 1;

			
			function p1s1p1_1() {
			
			$("#p1-s1-p1 > .cont > span").removeClass('colorMe');
			$("#p1-s1-p1 > .cont > span:nth-child("+ $v +")").addClass('colorMe');
			$v++;
			
			if($v > 6){
				$v = 0;
			}
			}

			function p1s1p1_2() {
				
				$('.m1').animate ({ top: '115',left: '80', }, 800, 'swing');
				$('.m1').animate ({ top: '50',left: '60', }, 200, 'swing', function() { p1s1p1_1(); });
				
				$('.m1').animate ({ top: '50',left: '60', }, 800, 'swing');
				$('.m1').animate ({ top: '60',left: '90', }, 200, 'swing', function() { p1s1p1_1(); });
				
				$('.m1').animate ({ top: '60',left: '90', }, 800, 'swing');
				$('.m1').animate ({ top: '50',left: '140', }, 200, 'swing', function() { p1s1p1_1(); });
				
				$('.m1').animate ({ top: '50',left: '150', }, 800, 'swing');
				$('.m1').animate ({ top: '70',left: '180', }, 200, 'swing', function() { p1s1p1_1(); });
				
				$('.m1').animate ({ top: '70',left: '180', }, 800, 'swing');
				$('.m1').animate ({ top: '105',left: '80', }, 200, 'swing', function() { p1s1p1_1(); });
				
				$('.m1').animate ({ top: '105',left: '70', }, 500, 'swing');
				$('.m1').animate ({ top: '100',left: '76', }, 500, 'swing', function() { p1s1p1_1(); });
				
				
				$('.m1').animate ({ top: '115',left: '80', }, 1000, 'swing', function() { p1s1p1_1(); p1s1p1_2(); });
				
			}
			p1s1p1_2();
			
			
			/* Tab */
			

			function p1s1p2_2() {
				
				
					$('#p1-s1-p2').animate ({ marginTop: '-50', }, 800, 'swing');
					$('#p1-s1-p2').animate ({ marginTop: '-50', }, 1200, 'swing');
					$('#p1-s1-p2').animate ({ marginTop: '0', }, 800, 'swing');
					
					$('#p1-s1-p2').animate ({ marginTop: '0', }, 1000, 'swing');
					
					$('#p1-s1-p2').animate ({ marginTop: '-100', }, 1000, 'swing');
					$('#p1-s1-p2').animate ({ marginTop: '-100', }, 1000, 'swing');
				
				$('.m2').animate ({ top: '90',left: '60', }, 800, 'swing');
				$('.m2').animate ({ top: '50',left: '60', }, 200, 'swing' );
				
				$('.m2').animate ({ top: '50',left: '60', }, 800, 'swing');
				
					
				$('.m2').animate ({ top: '100',left: '60', }, 800, 'swing' );
				
				$('.m2').animate ({ top: '100',left: '70', }, 400, 'swing');
				
				$('.m2').animate ({ top: '90',left: '60', }, 1000, 'swing');
				$('.m2').animate ({ top: '50',left: '60', }, 200, 'swing' );
				
				$('.m2').animate ({ top: '50',left: '60', }, 1800, 'swing', function() { p1s1p2_2(); });
				
			}
			p1s1p2_2();
			
			
			function p1s1p2_3() {
				
				
					$('#p1-s1-p3').animate ({ marginTop: '0', }, 1000, 'swing');
					
					$('#p1-s1-p3').animate ({ marginTop: '-40', }, 300, 'swing');
					$('#p1-s1-p3').animate ({ marginTop: '-40', }, 700, 'swing');
					
					$('#p1-s1-p3').animate ({ marginTop: '-70', }, 200, 'swing');
					$('#p1-s1-p3').animate ({ marginTop: '-70', }, 800, 'swing');
					
					$('#p1-s1-p3').animate ({ marginTop: '-90', }, 200, 'swing');
					$('#p1-s1-p3').animate ({ marginTop: '-90', }, 800, 'swing');
					
					
					$('#p1-s1-p3').animate ({ marginTop: '0', }, 500, 'swing');
					$('#p1-s1-p3').animate ({ marginTop: '0', }, 1000, 'swing');
					
				$('.m3').animate ({ top: '50',left: '30', }, 1000, 'swing' );
				
				$('.m3').animate ({ top: '20',left: '25', }, 300, 'swing' );
				$('.m3').animate ({ top: '20',left: '20', }, 400, 'swing' );
					
					$('.m3').animate ({ top: '50',left: '27', }, 300, 'swing' ); //return
					
				$('.m3').animate ({ top: '25',left: '25', }, 200, 'swing' );
				$('.m3').animate ({ top: '20',left: '35', }, 400, 'swing' );
					
					$('.m3').animate ({ top: '50',left: '30', }, 400, 'swing' ); //return
				
				$('.m3').animate ({ top: '30',left: '26', }, 200, 'swing' );
				$('.m3').animate ({ top: '34',left: '25', }, 500, 'swing' );
				
					$('.m3').animate ({ top: '70',left: '30', }, 500, 'swing' ); //return
				
				$('.m3').animate ({ top: '70',left: '20', }, 500, 'swing' );
				$('.m3').animate ({ top: '50',left: '30', }, 1000, 'swing', function() { p1s1p2_3(); });
				
			}
			p1s1p2_3();
});	