$(document).ready(function(){
	var index;

	$('#shake-btn').click(function(){
		$('.title').text("Shake, shake, shake...").addClass("animated swing");
		setTimeout(function(){
			indexLeft = Math.floor(Math.random() * (6 - 1 + 1)) + 1;	
			indexRight = Math.floor(Math.random() * (6 - 1 + 1)) + 1;	


			$('.title').text((indexLeft+indexRight).toString()).removeClass("animated swing");
		},1000);


		$('.dice').addClass("animated shake");


		setTimeout(function(){
			$('.dice').removeClass("animated shake");
		},1000);
		setTimeout(function(){
			$('.dice').addClass("animated pulse");
			$('.dice-left').css('background-image', 'url(./img/'+ indexLeft +'.png');

				$('.dice-right').css('background-image', 'url(./img/'+ indexRight +'.png');
			},1000);
		setTimeout(function(){
			$('.dice').removeClass("animated pulse");
		},2000);
	});
});