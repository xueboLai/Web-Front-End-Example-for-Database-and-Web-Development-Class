$(document).ready(function(){
	$("#first").click(
	function(){
	$("#special").css("color","green");
	$('#highlight').css("background-color","yellow");
	$("p").css("color","white");
	$("p").css("background-color","purple");
	$("p").css("border","2px solid red");
	$("p").css("border-radius","5px");
	
	});
	
	$("#show").on("click",function(){
		$("#i1").show();
	});
	$("#hide").on("click",function(){
		$("#i1").hide();
	});
	$("#fadeOut").on("click",function(){
		$("#i1").fadeOut("slow");
	});
	
	$('#animate').on('click', function() {
			$opacity1 = Math.random();
			$height1 = Math.floor((Math.random() * 100) + 200);
			$width1 = Math.floor((Math.random() * 100) + 200);
			
            $("#div1").animate({
            left: '300px',
            opacity: $opacity1+"px",
            height: $width1+'px',
            width: $width1+'px',
             },"fast");
    });
	

	$("#fname").on('change', function() {
    if($("#fname").val()==null || $("#fname").val()==""){
	 $("#fname").focus(function(){
        $("#fname").css("background-color", "yellow");
     alert("User Name should not be empty");
	
	 });
	 }
	 $text1 = "<p>The user name is "+ $("#fname").val() + "<br>";
	 $text2 = "The password is "+ $("#lname").val()+"</p>";
	 $combination = $text1+$text2;
	 $("#demo").html($combination);
	
    });	
	
	
	$("#lname").on('change', function() {
	 if($("#lname").val()==null || $("#lname").val()==""){
	 $("#lname").focus(function(){
        $("#lname").css("background-color", "yellow");
     alert("User password should not be empty");
	 });
	 }
	 $text1 = "<p>The user name is "+ $("#fname").val() + "<br>";
	 $text2 = "The password is "+ $("#lname").val()+"</p>";
	 $combination = $text1+$text2;
	 $("#demo").html($combination);
    });	
	

	
	
	
	
	
	
	
});