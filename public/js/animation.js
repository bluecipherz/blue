jQuery(document).ready(function() {
	
	
	/* ANIMATION */
	
	
	/* Animation pages */
	
		var $slideDurIn = 15000000; /** default 5000 **/
		var $slideDurOut = 15000000; /** default 5000 **/
		var $trans1 = 500; /** default 1000 **/
		var $trans2 = 500; /** default 1000 **/
		
		function p1slides() {
			
			$('.slide-1').animate ({ left: '0', }, $slideDurIn, 'swing' );
			$('.slide-1').animate ({ left: '-4000', }, $trans1, 'swing' );
			
				$('.slide-1').animate ({ left: '4000', }, 0, 'swing' );
			
					$('.slide-2').animate ({ left: '4000', }, $slideDurOut, 'swing' );
					$('.slide-2').animate ({ left: '0', }, $trans2 , 'swing' );
			
			
			
			
			$('.slide-2').animate ({ left: '0', }, $slideDurIn, 'swing' );
			$('.slide-2').animate ({ left: '-4000', }, $trans1, 'swing' );
			
				$('.slide-2').animate ({ left: '4000', }, 0, 'swing' );
				
					$('.slide-3').animate ({ left: '4000', }, $trans1 + ( $slideDurOut * 2 ), 'swing' );
					$('.slide-3').animate ({ left: '0', }, $trans2 , 'swing' );
			
			
			
			
			$('.slide-3').animate ({ left: '0', }, $slideDurIn, 'swing' );
			$('.slide-3').animate ({ left: '-4000', }, $trans1, 'swing' );
			
				$('.slide-3').animate ({ left: '4000', }, 0, 'swing' );
				
					$('.slide-1').animate ({ left: '4000', }, $trans1 + ( $slideDurOut * 2 ), 'swing' );
					$('.slide-1').animate ({ left: '0', }, $trans2 , 'swing', function() { p1slides(); });
			
		}
		
		
		// p1slides(); -- This feature is Disabled Because of fast development process, Only only slide is going to animated
	
		/* slide - 1 */
		
			var s1T = 0 , maxWord = $(".slide-1 > .title").children().length;		
			
			function s1Title() {
				s1T++;
				$('.slide-1 > .title > span:nth-child('+s1T+')').animate ({ opacity: '1', }, 300, 'swing', function() { 
					if(s1T <= maxWord)s1Title(); 
				});
			}
			s1Title();
			
			function p1s1m() {
				
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
				$('#phone').animate ({ top: '40', }, 700, 'swing', function() { p1s1m(); });
				
			}
			p1s1m();
	
			/* lapTop */
			
			var $v = 1;
			var s1scene = 1;
			
			
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
				
				
				if(s1scene == 1){
					
					$('#laptop-set').css({"z-index" : "1000"});
					
					$('#laptop-set').animate ({ zoom : '100%' , left: '0'}, 4000, 'swing' );
					$('#laptop-set').animate ({ zoom : '150%' , left: '-140' }, 1000, 'easeOutQuint' );
					
						$('#p1-s1-p1').animate ({ width : '100%' ,height : '400%', }, 5000, 'swing');
						$('#p1-s1-p1').animate ({ width : '50%',height : '200%', }, 3000, 'linear');
							
							$('.m1').animate ({ top: '70',left: '230', }, 100, 'swing', function() { p1s1p1_1(); });
							$('.m1').animate ({ top: '70',left: '230', }, 100, 'swing');
							$('.m1').animate ({ top: '70',left: '119', }, 3000, 'linear');
							
							$('.m1').animate ({ top: '70',left: '119', }, 900, 'swing');
						
						$('#p1-s1-p1').animate ({ width : '50%',height : '200%', }, 1000, 'swing');
						$('#p1-s1-p1').animate ({ width : '100%' ,height : '400%', }, 600, 'linear');
							
							$('.m1').animate ({ top: '80',left: '230', }, 600, 'linear');
							$('.m1').animate ({ top: '80',left: '230', }, 1500, 'swing');
						
					$('#laptop-set').animate ({ zoom : '150%' , left: '-140'}, 4700, 'swing' );
					$('#laptop-set').animate ({ zoom : '100%' , left: '0' }, 1000, 'easeOutQuint', function() { $('#laptop-set').css({"z-index" : "1"}); s1scene++; p1s1p2_s1(); } );		
							
				}else{
					$('.m1').animate ({ top: '105',left: '80', }, 200, 'swing', function() { p1s1p1_1(); });
				}
				
				$('.m1').animate ({ top: '105',left: '70', }, 500, 'swing');
				$('.m1').animate ({ top: '100',left: '76', }, 500, 'swing', function() { p1s1p1_1(); });
				
				
				$('.m1').animate ({ top: '115',left: '80', }, 1000, 'swing', function() { p1s1p1_1(); p1s1p1_2(); });
				
			}
			p1s1p1_2();
			
			
			/* Tab */
			

			function p1s1p2_2() {
				
				if(s1scene == 2){
					
					
				}
					$('#p1-s1-p2').animate ({ marginTop: '-50', }, 800, 'swing');
					$('#p1-s1-p2').animate ({ marginTop: '-50', }, 1200, 'swing');
					$('#p1-s1-p2').animate ({ marginTop: '0', }, 1000, 'swing');
					
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
			
			
			function p1s1p2_s2() {			
			
					$('#phone-set').css({"z-index" : "1000"});
					
					$('#phone-set').animate ({ zoom : '200%' , left: '-350' }, 1000, 'easeOutQuint' );
					$('#phone-set').animate ({ zoom : '200%' , left: '-350' }, 4000, 'linear' );
					$('#phone-set').animate ({ zoom : '100%' , left: '0' }, 1000, 'easeOutQuint', function() { $('#phone-set').css({"z-index" : "1"}); s1scene = 1;});
					
					
			}
			
			function p1s1p2_s1() {			
			
					$('#tab-set').css({"z-index" : "1000"});
					
					$('#tab-set').animate ({ zoom : '150%' , left: '0' }, 1000, 'easeOutQuint' );
					$('#tab-set').animate ({ zoom : '150%' , left: '0' }, 2500, 'linear' );
					$('#tab-set').animate ({ zoom : '100%' , left: '0' }, 1000, 'easeOutQuint', function() { $('#tab-set').css({"z-index" : "1"}); p1s1p2_s2(); });
				
				
						$('#tab-w').animate ({ opacity: '1', }, 500, 'swing', function() { $('#tab').css({"-webkit-transform" : "rotate(-90deg)" ,
																										" transform" : "rotate(-90deg)" ,
																										" -ms-transform" : "rotate(-90deg)" }); });
						$('#tab-w').animate ({ opacity: '1', }, 500, 'swing', function() { $('#p1-s1-p2-d').css({"opacity" : "1"});});
						$('#tab-w').animate ({ opacity: '1', }, 1500, 'swing', function() { $('#p1-s1-p2-d').css({"opacity" : "0"});});
						
						$('#tab-w').animate ({ opacity: '1', }, 0, 'swing', function() { $('#tab').css({"-webkit-transform" : "rotate(-7deg)" ,
																										" transform" : "rotate(-7deg)" ,
																										" -ms-transform" : "rotate(-7deg)" }); });
			}
			
			
				
			function p1s1p2_3() {
				
				if(s1scene == 3){
					
				}
				
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
			
			
		/** PAGE 2 */	
		
		var page2OverAnimate = false; // This is kinda heavy load animation 
		
		if(page2OverAnimate){
		
			$(".linkBox1").hover(function(){
					$(".linkBox1 ").css({"transform":"scale(1.1)"});    
					$(".linkBox2 ").css({"transform":"scale(.9)"});    
					$(".linkBox3 ").css({"transform":"scale(.9)"});    
					$(".linkBox4 ").css({"transform":"scale(.9)"});    
					} 
				);
			$(".linkBox2").hover(function(){
					$(".linkBox2 ").css({"transform":"scale(1.1)"});    
					$(".linkBox1 ").css({"transform":"scale(.9)"});    
					$(".linkBox3 ").css({"transform":"scale(.9)"});    
					$(".linkBox4 ").css({"transform":"scale(.9)"});    
					} 
				);
			$(".linkBox3").hover(function(){
					$(".linkBox3 ").css({"transform":"scale(1.1)"});    
					$(".linkBox2 ").css({"transform":"scale(.9)"});    
					$(".linkBox1 ").css({"transform":"scale(.9)"});    
					$(".linkBox4 ").css({"transform":"scale(.9)"});    
					} 
				);
			$(".linkBox4").hover(function(){
					$(".linkBox4 ").css({"transform":"scale(1.1)"});    
					$(".linkBox2 ").css({"transform":"scale(.9)"});    
					$(".linkBox3 ").css({"transform":"scale(.9)"});    
					$(".linkBox1 ").css({"transform":"scale(.9)"});    
					}  
				);
			
			$(".linkSet").hover(function(){ } ,function(){ 
						resetBlocks();
						});
			
			function resetBlocks(){
				$(".linkBox1 ").css({"transform":"scale(1)"});    
				$(".linkBox2 ").css({"transform":"scale(1)"});    
				$(".linkBox3 ").css({"transform":"scale(1)"});    
				$(".linkBox4 ").css({"transform":"scale(1)"});    
			}
			
		}
});	