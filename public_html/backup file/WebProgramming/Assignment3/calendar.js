	
function hol(){
	
	//	To Grader! Please read this!
	//	In order to extract information easier, I substract 1 from the date number, when I print out the date, i add one back, the output
	//  is correct. Please notice this fact when reading, going through or grading my program. Thank you very much!
	
	//check whether input is valid:
	var inputValid = true;
	var inputDate = new Date(document.getElementById("holiday").value);
	var inputMonth = inputDate.getUTCMonth();
	var inputDay = inputDate.getUTCDate()-1;
	var inputYear = inputDate.getUTCFullYear();
	
	
	var checkpoint1 = new Date(2016,9,1);
	var checkpoint2 = new Date(2017,8,31);
	if(inputDate<checkpoint1||inputDate>checkpoint2){
	inputValid = false;
	}
	
	if(inputValid){
		var arr_mon = new Array(12);
		for(var i = 0; i<12;i++){
			var arr_day = new Array(31);
			
			for(var j = 0;j<31;j++){
				arr_day[j]="";
				}
			arr_mon[i] = arr_day;	
			}
			//build holiday in multiple array:
			arr_mon[8][4] = ["Labor Day","pic/labor_day.png"];
			
			for(var a =22; a<=26; a++){
				arr_mon[10][a] = ["Thanksgiving","pic/thanksgiving.jpg"];
				}
			arr_mon[11][12] = ["Legislative Day","pic/lDay.jpg"];
			arr_mon[11][16] = ["Reading Day","pic/book.jpg"];
			arr_mon[11][17] = ["Reading Day","pic/book.jpg"];
			arr_mon[9][9] = ["Fall recess","pic/fall.jpg"];
			arr_mon[11][23] = ["Twas Night","pic/twasnight.jpg"];
			arr_mon[11][24] = ["Christmas","pic/christmas.jpg"];
			for(var a =25; a<=31; a++){
				arr_mon[11][a] = ["Winter Break","pic/winter.png"];
				}
			for(var a =0; a<=21; a++){
				arr_mon[0][a] = ["Winter Break","pic/winter.png"];
				}
			arr_mon[0][15] = ["Martin Luther King, Jr. Birthday","pic/martin.jpg"];
			arr_mon[1][19] = ["Presidents' Day","pic/president.jpg"];

			for(var a =12; a<=18; a++){
				arr_mon[2][a] = ["Spring Recess","pic/spring-break.png"];
				}
			
			arr_mon[4][8] = ["Reading Day","pic/book.jpg"];
			arr_mon[4][16] = ["Commencement","pic/comm.jpg"];
			arr_mon[4][28] = ["Memorial Day","pic/m.jpg"];
			arr_mon[6][3] = ["Independence Day","pic/independent.jpg"];
			arr_mon[7][26] = ["Move in Day","pic/movein.jpg"];
			arr_mon[0][0] = ["New Year Day","pic/new.jpg"]
			
			
			//checking for match
			inputMonth = inputDate.getUTCMonth();
			inputDay = inputDate.getUTCDate()-1;
			mon = ["January ","February ","March ","April ","May ","June ","July ","August ","September ","October ","November ","December "];
			if(arr_mon[inputMonth][inputDay]==""){
			/*February 14 is not a school holiday at NYU.*/
			var outputInformation = mon[inputMonth]+(inputDay+1)+" is not a school holiday at NYU.";
			document.getElementById("output1").innerHTML = outputInformation;
			document.getElementById("output2").innerHTML = "";
			}else{
			console.log(inputDay+" "+inputMonth);
			var outputInformation = mon[inputMonth]+(inputDay+1)+" is "+arr_mon[inputMonth][inputDay][0];
			document.getElementById("output1").innerHTML = outputInformation;
			document.getElementById("output2").innerHTML = "<img src = "+arr_mon[inputMonth][inputDay][1]+" width='600px' height='440px'</img>";
			
			
			/*arr_mon[0][0]="holiday";
			console.log(arr_mon[0][0]);*/
		}
	}
	else{	inputMonth = inputDate.getUTCMonth();
			inputDay = inputDate.getUTCDate()-1;
			mon = ["January ","February ","March ","April ","May ","June ","July ","August ","September ","October ","November ","December "];

		var outputInformation = "'"+mon[inputMonth]+(inputDay+1)+"' is not a valid day for this Calendar Holiday application.";
		document.getElementById("output1").innerHTML = outputInformation;
		document.getElementById("output2").innerHTML = "";
	}

	

	}