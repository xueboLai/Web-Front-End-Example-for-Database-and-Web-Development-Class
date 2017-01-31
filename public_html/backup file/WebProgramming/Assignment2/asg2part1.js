	cars = new Array(5);
	cars[0] = ["Acura",2010];
	cars[1] = ["Aston Martin", 2006];
	cars[2] = ["BWM",1999];
	cars[3] = ["Buick",2008];
	cars[4] = ["Audi",2007];


function lightBulb_on(){
	document.getElementById("light").src = "pic/light_bulb_on.png";
	document.getElementById("supposed_to_disappear").style.display="block";
	document.getElementById("first").style.backgroundColor = "#ba7f37";
	document.getElementById("second").style.backgroundColor = "#ba7f37";
	document.getElementById("first").style.color = "#f2eae1";
	document.getElementById("second").style.color = "#f2eae1";
	document.getElementById("main-part").style.backgroundColor = "white";
	document.getElementById("header2").style.color = "black";

}
function lightBulb_off(){
	document.getElementById("light").src = "pic/light_bulb_off.jpeg";
	document.getElementById("supposed_to_disappear").style.display="none";
	//document.getElementById("body_part").style.display="none";
	document.getElementById("main-part").style.backgroundColor = "black";
	document.getElementById("first").style.backgroundColor = "white";
	document.getElementById("second").style.backgroundColor = "white";
	document.getElementById("first").style.color = "black";
	document.getElementById("second").style.color = "black";
	document.getElementById("header2").style.color = "white";

}

function randarray(){

	
	var output = "Prize:<br>";
	
	for(var i = 0;i<cars.length;i++){
		for(var j = 0;j<cars[i].length;j++){
		output += cars[i][j]+" ";
		}
		output+="<br>"
	}
	document.getElementById("prize").innerHTML = output;
	
	}
function winPrize(){
	var number = Math.floor(Math.random() * 5); 
	var output = "You have won:<br>";
	for(var i = 0;i<cars[number].length;i++){
		output+=cars[number][i]+" ";
		}
		output+="<br>";
	document.getElementById("prize").innerHTML = output;
	
	}

function swapT(){
	var obj1 = document.getElementById("p1").textContent;
	var obj2 = document.getElementById("p2").textContent;
	document.getElementById("p1").textContent=obj2;
	document.getElementById("p2").textContent=obj1;
}

function swapI(){
	var obj1 = document.getElementById("im1").src;
	var obj2 = document.getElementById("im2").src;
	document.getElementById("im1").src=obj2;
	document.getElementById("im2").src=obj1;
}


function newdoc(){
	var imgobj1 = document.getElementById("i4");
	document.write("<head><link rel='stylesheet' type='text/css' href='main2.css'></head>");
	document.write("<h1>This is the Spider Man!<h1>");
	document.write("<img src = 'pic/spider.jpg'></img>");
	
// get width, height, src and alt properties of images

	var w = imgobj1.width;
	var h = imgobj1.height;

	var output = "<p>The height of the picture is "+h+" and the width is "+w+"<br></p>";
	document.write(output);
	document.write("<p>Spider-Man is a fictional superhero appearing in American comic books published by Marvel Comics. The character was created by writer-editor Stan Lee and writer-artist Steve Ditko, and first appeared in the anthology comic book Amazing Fantasy #15 (Aug. 1962) in the Silver Age of Comic Books. Lee and Ditko conceived the character as an orphan being raised by his Aunt May and Uncle Ben, and as a teenager, having to deal with the normal struggles of adolescence in addition to those of a costumed crime-fighter. Spider-Man's creators gave him super strength and agility, the ability to cling to most surfaces, shoot spider-webs using wrist-mounted devices of his own invention, which he calls web-shooters, and react to danger quickly with his spider-sense, enabling him to combat his foes. And later in his life founded his own company call Parker Industries.</p>");
	var normal = new Date();
	week = ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"]
	document.write("<p>Today is "+week[normal.getDay()]+" day.</p>");
	document.closed;
	}
	
function BdayApp(){
	var n1 = document.getElementById("name1").value;
	var n2 = document.getElementById("name2").value;
	var d1 = new Date(document.getElementById("bday1").value);
	var d2 = new Date(document.getElementById("bday2").value);
	var output1 = n1+" was born on "+(d1.getDate()+1)+'/'+(d1.getMonth()+1)+'/'+d1.getFullYear()+"<br>";
	var output2 = n2+" was born on "+(d2.getDate()+1)+'/'+(d2.getMonth()+1)+'/'+d2.getFullYear()+"<br>";
	var output3 = "";
	if(d1<d2){
		output3 += n1+" is older than "+ n2;
		}
	else if(d2<d1){
		output3 += n1+" is younger than "+ n2;
	}
	else{
		output3 += n1+" and "+ n2+" are the same age!";
		}
	document.getElementById("bdayOutput").innerHTML = output1+output2+output3;
	}