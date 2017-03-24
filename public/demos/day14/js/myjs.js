$(document).ready(function(){

	var massagePool = ["That's terrible! You should knock that off!",
	"Seriously? Why don't you grow the hell up?!",
	"Aren't you a little old for that crap?",
	"You are bad and you should feel bad!",
	"Gross. You are gross.",
	"Are you going to suck all your life?",
	"What? Who does that?!",
	"I thought you were better than that.",
	"My disapproval is overwhelming.",
	" ಠ__ಠ ",
	"Are you freaking kidding me?",
	"NO! Bad!",
	"And when do you plan on becoming an adult?",
	"That is totally unacceptable.",
	"You should be utterly ashamed.",
	"Ugh! That's horrible!",
	"A kitten dies everytime you do that.",
	"I can't believe you are that disgusting."];
	var i = 0;
	var message;

	$('#submit').click(function(e){
		message = $('#message-box').val();
		e.preventDefault();
		message = messageFilter(message);
		if(i == massagePool.length){
			i = 0;
		}
		$('#repeat-message').text(massagePool[++i]);
		$('#message').text(message);
	});

	function messageFilter(message){
		// var message = $('#message-box').val()
		var array = message.split(" ");

		if(message == ""){
			array = ["You", "don't", "fill", "in", "forms"];
		}else if(array[0] == "My" || array[0] == "my"){
			array[0] = "Your";
		}else if(array[0] == "I"){
			array[0] = "You";
			if(array[1] == "am"){
				array[1] = "are";
			}
		}else{
			array.unshift("You ");
		}

		var reg = /[^\w\s]/g;
		if(array[array.length-1].match(reg)){
			array[array.length-1] = array[array.length-1].replace(reg, "");
		}

		message = (array.join(" ") + "?");		
		return message;
	}



});