window.onload = shipping_price;

function total(){
	var subtotal1 = document.getElementById("quantity1").value*document.getElementById("price1").value;
	var subtotal2 = document.getElementById("quantity2").value*document.getElementById("price2").value;
	var total1 = subtotal1+subtotal2;
	document.getElementById("sub1").value = subtotal1;
	document.getElementById("sub2").value = subtotal2;
	document.getElementById("total").value = parseInt(document.getElementById("shipping_result").value)+total1;

}

function shipping_price(){
	if(document.getElementById("call").checked){
		document.getElementById("shipping_result").value = 10;
		if(document.getElementById("total").value!="0"){
			document.getElementById("total").value = parseInt(document.getElementById("total").value)-20+10;
		}else{
			document.getElementById("total").value = 10;
		}
	}else{
		document.getElementById("shipping_result").value = 20;
		if(document.getElementById("total").value!="0"){
			document.getElementById("total").value = parseInt(document.getElementById("total").value)-10+20;
		}else{
			document.getElementById("total").value = 20;
		}
	}
}



function receipt(){
	var test_obj = document.forms[2];
	var length = test_obj.elements.length;
	var valid = true;
	var txt = "";
	
	for(var i = 5;i<length-2;i++){
	var element = test_obj.elements[i];
	
	if((i!=17)&&(i!=15)&&(i!=7)&&(i!=14)&&(element.value==""||element.value ==null)){
		alert("Please fill in all the blankets.");
		valid = false;
		element.focus();
		element.select();
		element.style.backgroundColor = "brown";
		return valid;
		break;
	}else{

		if(i==14){
			continue;
		}
		if(element.id=="email"&&(element.value.indexOf("@")==-1||element.value.indexOf(".")==-1)){
			alert("Please use the correct format for email.");
			valid = false;
			element.focus();
			element.select();
			element.backgroundCOlor = "brown";
			return valid;
			break;
		}
		if(element.id=="zip"&&(element.value.length!=5)){
			alert("The zip code should be exactly 5 numbers");
			valid = false;
			element.focus();
			element.select();
			element.backgroundCOlor = "brown";
			return valid;
			break;
		}
		if(element.id=="phone"&&element.value.length!=10){
			alert("Please use the correct format for email.");
			valid = false;
			element.focus();
			element.select();
			element.backgroundCOlor = "brown";
			return valid;
			break;
		}
		if(i==0||i==1){
			if(element.checked){
			txt += element.name + " " + element.value + "<p>";
			}
		}else if(i==7||i==15){ 
			txt += "<p>"+element.name + " " + (element.options[element.selectedIndex].text) + "</p>";
		}		
		else
		{	if(element.id=="cardnum"){
			txtX = "";
			for(var abc=0;abc<(document.getElementById("cardnum").value.length-4);abc++){
				txtX += "x";
				}
			txt += "<p>"+element.name + " " +txtX+(element.value.substring(element.value.length-4,element.value.length)) + "</p>";
			}else{
			txt += "<p>"+element.name + " " + element.value + "</p>";
			}
		}
		
		
		
	}
	
	}

		document.getElementById("result").innerHTML = txt;

return valid;


}