
$(document).ready(function() {
  $('.poupUpBg').click(function(){
	$(this).fadeOut();
	$('.poupUp').fadeOut();
  });
  $('.click').click(function(){
	$('.poupUpBg').fadeIn();
	$('.poupUp').fadeIn();
  });
  
		
			var clock;
			var clock2;

			clock = $('.clock').FlipClock({
		        clockFace: 'DailyCounter',
				language: 'ru-ru',
		        autoStart: false,
		        callbacks: {
		        	stop: function() {
		        		$('.message').html('The clock has stopped!')
		        	}
		        }
		    });
				    
		    clock.setTime(220880);
		    clock.setCountdown(true);
		    clock.start();
			
			clock2 = $('.clock2').FlipClock({
		        clockFace: 'DailyCounter',
		        autoStart: false,
				language: 'ru-ru',
		        callbacks: {
		        	stop: function() {
		        		$('.message').html('The clock has stopped!')
		        	}
		        }
		    });
				    
		    clock2.setTime(220880);
		    clock2.setCountdown(true);
		    clock2.start();


		   wow = new WOW(
                      {
                      boxClass:     'wow',      // default
                      animateClass: 'animated', // default
                      offset:       100,          // default
                      mobile:       true,       // default
                      live:         true        // default
                    }
                    )
                    wow.init();
			
			});


           

 

 
