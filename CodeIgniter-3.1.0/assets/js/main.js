
//Checks Validity of user data
function checkLength(){
	var uName = document.getElementById("username");
	
	if (uName.checkValidity()== false){
		document.getElementById("error_here").innerHTML = uName.validationMessage;
	}else{
		docutment.getElementById('forms'). innerHTML = "Welcome";	
	}	
} //Ends Check Length Function


//Starts Carousel Movement when page is loaded
$(document).ready(function(){
	$('.carousel').carousel();
});

//Removable Text
$('#welcomeMess')
	.typist({text: 'WELCOME TO RECIPE RESCUE!!'}) //Text to be display
	.typistPause(3000) //Waits 3 sectons
	.typistRemove(26) //Removes the 26 characters in the text section
	.typistAdd('ENJOY!!') //Adds new text
.typistStop(); //Stops Typist Plugin

