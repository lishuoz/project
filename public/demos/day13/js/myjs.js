$(document).ready(function(){
	var hand = ["rock", "scissors", "paper", "lizard", "spock"];
	var result;

	$('#rule-img').hide();


	$('#rule').click(function(){
		$('#rule-img').toggle();
	});

	$('#rule-img').click(function(){
		$(this).hide();
	});

	$('.btn').click(function(){
		$("#hand-right").attr("src", "./img/hand-right.png");
		$("#hand-left").attr("src", "./img/hand-left.png");
		$('#result').text("Ready?!");
		$('.hand').addClass("animated tada");
		setTimeout(function(){
			$('.hand').removeClass("animated tada");
		},1000);

	});

	$('#rock').click(function(){
		setTimeout(function(){
			random = Math.floor(Math.random() * (4 - 0 + 1)) + 0;
			$('#hand-right').attr('src', './img/rock.png');
			$('#hand-left').attr('src', './img/' + hand[random] + '.png');
			if(hand[random] == "rock"){
				result = "Tie!";
			}else if(hand[random] == "scissors" || hand[random] == "lizard" ){
				result = "You win!";
			}else{
				result = "You lose!";
			}
			$('#result').text(result);
		},1000);
	});

	$('#scissors').click(function(){
		setTimeout(function(){
			random = Math.floor(Math.random() * (4 - 0 + 1)) + 0;
			$('#hand-right').attr('src', './img/scissors.png');
			$('#hand-left').attr('src', './img/' + hand[random] + '.png');
			if(hand[random] == "scissors"){
				result = "Tie!";
			}else if(hand[random] == "paper" || hand[random] == "lizard" ){
				result = "You win!";
			}else{
				result = "You lose!";
			}
			$('#result').text(result);
		},1000);
	});

	$('#paper').click(function(){
		setTimeout(function(){
			random = Math.floor(Math.random() * (4 - 0 + 1)) + 0;
			$('#hand-right').attr('src', './img/paper.png');
			$('#hand-left').attr('src', './img/' + hand[random] + '.png');
			if(hand[random] == "paper"){
				result = "Tie!";
			}else if(hand[random] == "rock" || hand[random] == "spock" ){
				result = "You win!";
			}else{
				result = "You lose!";
			}
			$('#result').text(result);
		},1000);
	});

	$('#lizard').click(function(){
		setTimeout(function(){
			random = Math.floor(Math.random() * (4 - 0 + 1)) + 0;
			$('#hand-right').attr('src', './img/lizard.png');
			$('#hand-left').attr('src', './img/' + hand[random] + '.png');
			if(hand[random] == "lizard"){
				result = "Tie!";
			}else if(hand[random] == "paper" || hand[random] == "spock" ){
				result = "You win!";
			}else{
				result = "You lose!";
			}
			$('#result').text(result);
		},1000);
	});

	$('#spock').click(function(){
		setTimeout(function(){
			random = Math.floor(Math.random() * (4 - 0 + 1)) + 0;
			$('#hand-right').attr('src', './img/spock.png');
			$('#hand-left').attr('src', './img/' + hand[random] + '.png');
			if(hand[random] == "spock"){
				result = "Tie!";
			}else if(hand[random] == "scissors" || hand[random] == "rock" ){
				result = "You win!";
			}else{
				result = "You lose!";
			}
			$('#result').text(result);
		},1000);
	});
});