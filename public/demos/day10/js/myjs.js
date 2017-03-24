$(document).ready(function(){
	var animation = ["shake", "hop", "spin", "grow", "hooray", "wobble", "swing"];
	var max = animation.length;
	var min = 0;
	
	$(".puppy").click(function(){
		var random = Math.floor(Math.random() * (max - min + 1)) + min

		$(this).addClass(animation[random].toString());
		setTimeout(function(){
			$(".puppy").removeClass(animation[random].toString());
		}, 2100);
	});

});