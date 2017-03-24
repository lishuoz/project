$(document).ready(function(){
	var w = 150;
	var h = 150;
	var speed = 1500;
	var interval;
	var timeout;
	var title = ["Nice job!",
	"Excellent clickin'!",
	"That was Awesome!",
	"Man are you good!",
	"Boom!",
	"You're a pro!",
	"Unbelievable!",
	"Insanity!",
	"You're on fire!",
	"That was crazy!",
	"You are blowin' my mind!"];
	var titleIndex = 0;
	$('.message').hide();
	$('.retry').hide();
	function bounce(){
		$('.ball').css("width", w.toString() + "px");
		$('.ball').css("height", h.toString() + "px");
		interval = setInterval(function(){
			$('.ball').effect("bounce", {direction: "down", times: 1, distance: 450}, speed);
		}, speed);
	};

	function stopBounce(interval){
		clearInterval(interval);
	};

	bounce();

	$('.ball').click(function(){
		stopBounce(interval);
		w-=10;
		h-=10;
		speed-=100;
		$(this).hide();
		$('.message').show();
		$('.title').text(title[titleIndex]);
		titleIndex++;
		$('.next').text("Next level: " + (titleIndex+1).toString());
		timeout = setTimeout(function(){
			$('.message').hide();
			bounce();
		},speed);

		if(titleIndex == 11){
			clearTimeout(timeout);
			clearInterval(interval);
			$(this).hide();
			$('.next').html('<a href="#">Wanna play again?</a>');
			$('.next').click(function(){
				speed = 1500;
				titleIndex = 0;
				w = 150;
				h = 150;
				$('.message').hide();
				$('.retry').hide();
				bounce();
			});
		}
	});

	


});
