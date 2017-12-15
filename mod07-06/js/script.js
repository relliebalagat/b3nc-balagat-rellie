// var userName;
// var firstName;
// var lastName;

// userName = "relliebalagat";
// firstName = "Rellie";
// lastName = "Balagat";

// console.log(userName);
// console.log(firstName);
// console.log(lastName);

// var message = "Your name is " + firstName + " " + lastName + " and your username is " + userName + ".";

// console.log(message);

// document.getElementById("yourMessage").innerHTML = message;


/*
 *
 * If statement
 *
 */

 // var userName;
 // var passWord;

 // userName = "relliebalagat";
 // password = "abc12";

 // if (userName == "relliebalagat"){
 // 	console.log("Your username is correct.");
 // } else {
 // 	console.log("Username entered is incorrect.");
 // }


 // if (password == "abc123") {
 // 	console.log("Your password is correct.");
 // } else {
 // 	console.log("Password entered is incorrect.");
 // }


/*
 *
 * Loops (while, do-while, for)
 *
 */

 // var counter = 0;
 // while(counter <= 10) {
 // 	console.log(counter);
 // 	counter = counter + 2;
 // } 

 // var counter = 0;
 // while(counter <= 100){
 // 	 print all odd numbers only between 0 nd 100 
 // 	if(counter % 2 == 0){
 // 		console.log(counter);
// 	}

// 	counter = counter + 1;
// }

// var yourName = "Juan Dela Cruz";
// var counter = 0;
// var markUp = "";

// while(counter < 10) {
// 	// console.log(yourName);

// 	markUp = markUp + "<p>" + yourName + "</p>";
// 	console.log(markUp)
// 	counter = counter + 1;
// }

// document.getElementById("yourMessage").innerHTML = markUp;

var expression = "";
function updateDisplay(val) {
	// console.log(val);
	expression = expression + val;
	document.getElementById("display").innerHTML = expression;
	// return expression;
}

function computeExpression() {
	console.log(expression);

	var result = eval(expression);
	document.getElementById("display").innerHTML = result;
	expression = "";
}


function clearButton() {
	document.getElementById("display").innerHTML = 0;
}

function deleteLastChar() {
	expression = expression.substr(0, expression.length-1);
	console.log(expression);
	if(expression == ""){
		document.getElementById("display").innerHTML = 0;
	} else {
		document.getElementById("display").innerHTML = expression;	
	}

	
}