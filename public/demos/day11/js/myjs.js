$(document).ready(function(){
	var current = new Date();
	var date;
	var hour;
	var min;
	var sec;
	var red = current.getHours() * (Math.floor(Math.random() * (11 - 10 + 1)) + 10);
	var green = current.getMinutes() * (Math.floor(Math.random() * (5 - 4 + 1)) + 4);
	var blue = current.getSeconds() * (Math.floor(Math.random() * (5 - 4 + 1)) + 4);
	var random;
	var	r = red.toString(16).toUpperCase();
	var	g = green.toString(16).toUpperCase();
	var	b = blue.toString(16).toUpperCase();
	var currentColor = "#" + r + g + b;

	$("body").css("background-color", currentColor);

	function updateHour(){
		random = Math.floor(Math.random() * (11 - 10 + 1)) + 10;
		red += random;
	}

	function updateMin(){
		random = Math.floor(Math.random() * (5 - 4 + 1)) + 4;
		green += random;
	}

	function updateSec(){
		random = Math.floor(Math.random() * (5 - 4 + 1)) + 4;
		blue += random;
	}

	function updateTime(){
		date = new Date();
		hour = date.getHours();
		min = date.getMinutes();
		sec = date.getSeconds();

		if(sec < 10){
			$('#sec').text("0"+sec.toString());	
			if(min < 10){
				$('#min').text("0"+min.toString());
			}else{
				$('#min').text(min.toString());
			}
		}else{
			$('#sec').text(sec.toString());	
			if(min < 10){
				$('#min').text("0"+min.toString());
			}else{
				$('#min').text(min.toString());
			}
		}

		if(hour > 12){
			hour = Math.abs(hour - 12);
			$('#apm').text("PM");
		}else if(hour == 0){
			hour = Math.abs(hour - 12);
			$('#apm').text("AM");
		}else if(hour == 12){
			$('#apm').text("PM");
		}
		else{
			$('#apm').text("AM");
		}

		if(hour == 10 || hour == 11 || hour == 12){
			$('#hour').text(hour.toString());
		}else{
			$('#hour').text("0"+hour.toString());
		}


		updateSec();

		if(sec == 0){
			updateMin();
			if(min == 0){
				updateHour();
			}
		}
		updateBgColor();
	}

	function updateBgColor(){
		if(red >= 256){
			red = red - 256;
		}
		if(green >= 256){
			green = green - 256;
		}
		if(blue >= 256){
			blue = blue - 256;
		}
		r = red.toString(16).toUpperCase();
		g = green.toString(16).toUpperCase();
		b = blue.toString(16).toUpperCase();
		if(r.length < 2){
			r = "0" + r;
		}
		if(g.length < 2){
			g = "0" + g;
		}
		if(b.length < 2){
			b = "0" + b;
		}

		var color = "#"+r+g+b;
		$("body").css("background-color", color);
		$("#color").text(color);
	}

	setInterval(updateTime, 1000);


});

