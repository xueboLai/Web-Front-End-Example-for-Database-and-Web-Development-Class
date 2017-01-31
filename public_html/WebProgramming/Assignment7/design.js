$(document).ready(function(){
	$("#b4").click(function(){
		$("#demo").empty();
		var $about = "<p>Our store sells relatively cheap, mass-produced entertainment robots. <br>All of them are mechanical interactive toys which perform various tasks and tricks on commands. <br>Guarantee to give your child/children wonderful childhood experience. <br>For more information, please check products;</p>"
		$("#demo").html($about);		
	});
	
	$("#b5").click(function(){
		$("#demo").empty();
		var $about = "<h1 style = 'text-align:center; font-size:32px;'>Top 5 BEST ROBOTICS GADGETS Your Kid Must Have</h1><br>"
		$about += "<iframe width='560' height='315' src='https://www.youtube.com/embed/MWL188k_foA' frameborder='0' allowfullscreen></iframe>"
		$("#demo").html($about);		
	});
	/*$("#b0").click(function(){
		$("#demo").empty();
		var $login = "<form id = 'f1' style = 'text-align:center;' action = 'login.php' method = 'post'>Username <input type = 'text' name = 'name'><br>Password <input type = 'password' name = 'passwd'><br><input type = 'submit' value = 'Log in' name = 'submit1'></form>"
		$("#demo").html($login);
	});*/
	
	/*	$('.links').eq(4).on('click', function() {
		$('.links').removeClass('selected');
		$(this).addClass('selected');
		$('section').empty();
		var $login = '<p><form action="http://i6.cims.nyu.edu/~sao1/login12.php" method=post> Username: <input type=text name=username><br>Password <input type=password name=password><br><input type=submit name=login><input type=reset></form><p>';
		$('section').html($login);
	})*/
	
	$("#b3").click(function(){
		$("#demo").empty();
		var xhr = new XMLHttpRequest();
		xhr.onreadystatechange = function() {
			if (xhr.readyState == 4 && xhr.status == 200) {
    
				var response = JSON.parse(xhr.responseText); 
   // var info = '';
	var info = "<table>";
	info += "<tr>";
	info += "<th>";
	info += "Product Name";
	info += "</th>";
	info += "<th>";
	info += "Price";
	info += "</th>";
	info += "<th>";
	info += "Quantity Left";
	info += "</th>";
	info += "<th>";
	info += "Picture";
	info += "</th>";
	info += "<th>";
	info += "Description";
	info += "</th>";
	info += "</tr>";
    for (var i = 0; i < response.products.length; i++) {
		info += "<tr>";
	
	

      info += '<td>' + response.products[i].name + '</td>';
      info += '<td>' + response.products[i].price + '</td>';
	  info += '<td>' + response.products[i].ql + '</td>';
	  info += '<td>' +"<img src ='"+response.products[i].pic + "'></td>";
      info += '<td>' + response.products[i].description + '</td>'; 
	  info += "</tr>";
    }

    // Output data into HTML page in the section tag 
    document.querySelector('#demo').innerHTML = info;
  }
};

// use AJAX open method to get file from server products.json
xhr.open("GET", "products.json", true);
xhr.send();
	});
	
});



	
	
	
	
	
	
	/*
		$('nav').hide().delay(500).fadeIn(1000);

	$('.links').eq(0).on('click', function() {
		//$('.links').removeClass('selected');
		//$(this).addClass('selected');

		$('section').empty();
		// about text
		var $about = '<p>Situated on one of the worlds largest natural harbors, New York City consists of five boroughs, each of which is a separate county of New York State.The five boroughs – Brooklyn, Queens, Manhattan, The Bronx, and Staten Island – were consolidated into a single city in 1898. By 2015 estimates, the New York City metropolitan region remains by a significant margin the most populous in the United States, (23.7 million residents). In 2013, the MSA produced a gross metropolitan product (GMP) of nearly US$1.39 trillion. <a href="https://en.wikipedia.org/wiki/New_York_City">Source Wikepida</a><p>';
		$('section').html($about);
	})

	$('.links').eq(1).on('click', function() {
		$('.links').removeClass('selected');
		$(this).addClass('selected');
		$('section').empty();
		var $video = '<iframe width="420" height="315" src="https://www.youtube.com/embed/oMX1sc3eOTE?rel=0&autoplay=1"  frameborder="2" borderColor="black" allowfullscreen></iframe>';
		$('section').html($video);
		

	})

	$('.links').eq(2).on('click', function() {
		$('.links').removeClass('selected');
		$(this).addClass('selected');
		$('section').empty();
		var $nyphoto = '<img src="ny.jpg" border=2>';
		$('section').html($nyphoto);
		
	})

	$('.links').eq(3).on('click', function() {
		$('.links').removeClass('selected');
		$(this).addClass('selected');
		$('section').empty();
		var $concerts = ' <p>Adelle, New York, NY</p><p>Dec 18, Joes Pub, New York, NY</p>';
		$('section').html($concerts);
	})


	$('.links').eq(4).on('click', function() {
		$('.links').removeClass('selected');
		$(this).addClass('selected');
		$('section').empty();
		var $login = '<p><form action="http://i6.cims.nyu.edu/~sao1/login12.php" method=post> Username: <input type=text name=username><br>Password <input type=password name=password><br><input type=submit name=login><input type=reset></form><p>';
		$('section').html($login);
	})

	$('.links').eq(5).on('click', function() {
		$('.links').removeClass('selected');
		$(this).addClass('selected');
		$('section').empty();
		var $reg = '<p>Place Registraion Form here!<p>';
		$('section').html($reg);
	})
	
	$('.links').eq(6).on('click', function() {
		$('.links').removeClass('selected');
		$(this).addClass('selected');
		$('section').empty();
		var $search = '<p>Place Search Form here!<p>';
		$('section').html($search);
	})


	$('.links').eq(7).on('click', function() {
		$('.links').removeClass('selected');
		$(this).addClass('selected');
		$('section').empty();
		var $search = '<p>Place Products Form here similar to assignment #4!<p>';
		$('section').html($search);
	})
	
	
	
	
	*/
	
