<?php

$page_title = 'Account Registration';

include 'partials/header.php';

?>

<style type="text/css">
	
</style>

</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="form-group" id="content">
					<form class="account-form-set" id="registrationForm" action="assets/register.php" method="POST">
						<h3 class="text-center">Create an Account</h3>
						
						<fieldset>
							<label for="firstname">First Name</label>
							<input name="firstname" id="firstname" type="text" class="form-control">
						</fieldset>

						<fieldset>
							<label for="lastname">Last Name</label>
							<input name="lastname" id="lastname" type="text" class="form-control">
						</fieldset>

						<fieldset>
							<label for="email" id="show">Email</label>
							<input name="email" id="email" type="text" class="form-control">
						</fieldset>
					
						<fieldset>
							<label>Password</label>
							<input type="password" name="password1" class="form-control" id="password">
						</fieldset>

						<fieldset>
							<label>Confirm Password</label>
							<input type="password" name="password2" class="form-control" id="confirmPassword">
						</fieldset>

						<input type="submit" name="submit" class="btn btn-primary" id="enroll" value="Create your Account">

						<hr>
						<p class="text-center">Already have an account? <a href="login.php">Sign In</a></p>
					</form>
				</div>	<!-- ./form-group -->
			</div>	<!-- ./col-lg-12 -->
		</div>	<!-- ./row -->
	</div>	<!-- ./container -->

	

	<script type="text/javascript">

	function getActivatedObject(e) {
		var obj;
		if (!e) {
			// early version of IE
			obj = window.event.srcElement;
		} else if (e.srcElement) {
			// IE 7 or later
			obj = e.srcElement;
		} else {
			// DOM Level 2 browser
			obj = e.target;
		}
		return obj;
	}

	function addEventHandler(obj, eventName, handler) {
		if (document.attachEvent) {
			obj.attachEvent("on" + eventName, handler);
		} else if (document.addEventListener) {
			obj.addEventListener(eventName, handler, false);
		}
	}

	window.onload = initPage;

	var warnings = {
			"firstname" : {
			"required": "Please enter in your first name.",
			"letters" : "Only letters are allowed in a first name.",
			"err"     : 0
		},
			"lastname" : {
			"required": "Please enter in your last name.",
			"letters" : "Only letters are allowed in a last name.",
			"err"     : 0
		},
			"email" : {
			"required": "Please enter in your e-mail address.",
			"format" : "Please enter your e-mail in the form 'name@domain.com'.",
			"taken" : "Email has already been taken.",
			"err"     : 0
		},
			"password" : {
			"required": "Please enter in your password.",
			"format" : "Password must contain at least 8 characters",
			"err"     : 0
		},
			"confirmPassword" : {
			"required": "Please enter in your password.",
			"format" : "Password does not match the confirm password",
			"err"     : 0
		}
	}

	function initPage() {
		addEventHandler(document.getElementById("firstname"), "blur", fieldIsFilled);
		addEventHandler(document.getElementById("firstname"), "blur", fieldIsLetters);
		addEventHandler(document.getElementById("lastname"), "blur", fieldIsFilled);
		addEventHandler(document.getElementById("lastname"), "blur", fieldIsLetters);
		addEventHandler(document.getElementById("email"), "blur", fieldIsFilled);
		addEventHandler(document.getElementById("email"), "blur", emailIsProper);
		addEventHandler(document.getElementById("email"), "blur", emailIsTaken);
		addEventHandler(document.getElementById("password"), "blur", fieldIsFilled);
		addEventHandler(document.getElementById("confirmPassword"), "blur", fieldIsFilled);
		addEventHandler(document.getElementById("confirmPassword"), "blur", passwordConfirmation);
	}

	function fieldIsFilled(e) {
		var me = getActivatedObject(e);
		if (me.value == "") {
			warn(me, "required");
		} else {
			unwarn(me, "required");
		}
	}


	function emailIsTaken(e) {
		var me = getActivatedObject(e);
		var xhttp = new XMLHttpRequest();

		xhttp.onreadystatechange = function() {
			if(this.readyState == 4 && this.status == 200) {	
				if (this.responseText == "true") {
				warn(me, "taken");
				} else {
					unwarn(me, "taken");
				}
			}
		};

		xhttp.open("POST", "assets/email_validation.php", true);
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhttp.send("email=" + me.value);
	}

	function emailIsProper(e) {
		var me = getActivatedObject(e);
		if (!/^[\w\.-_\+]+@[\w-]+(\.\w{2,4})+$/.test(me.value)) {
			warn(me, "format");
		} else {
			unwarn(me, "format");
		}
	}

	function passwordConfirmation(e) {
		var me = getActivatedObject(e);
		var confirmPassword = document.getElementById('password').value;

		if (me.value != confirmPassword) {
			warn(me, "format");
		} else {
			unwarn(me, "format");
		}
	}

	function fieldIsLetters(e) {
		var me = getActivatedObject(e);
		var nonAlphaChars = /[^a-zA-Z]/;
		if (nonAlphaChars.test(me.value)) {
			warn(me, "letters");
		} else {
			unwarn(me, "letters");
		}
	}

	function fieldIsNumbers(e) {
		var me = getActivatedObject(e);
		var nonNumericChars = /[^0-9]/;
		if (nonNumericChars.test(me.value)) {
			warn(me, "numbers");
		} else {
			unwarn(me, "numbers");
		}
	}

	function warn(field, warningType) {
		var parentNode = field.parentNode;
		var warning = eval('warnings.' + field.id + '.' + warningType);
		if (parentNode.getElementsByTagName('p').length == 0) {
			var p = document.createElement('p');
			field.parentNode.appendChild(p);
			var warningNode = document.createTextNode(warning);
			p.appendChild(warningNode);
		} else {
			var p = parentNode.getElementsByTagName('p')[0];
			p.childNodes[0].nodeValue = warning;
		}
		document.getElementById("enroll").disabled = true;
	}

	function unwarn(field, warningType) {
		if (field.parentNode.getElementsByTagName("p").length > 0) {
			var p = field.parentNode.getElementsByTagName("p")[0];
			var currentWarning = p.childNodes[0].nodeValue;
			var warning = eval('warnings.' + field.id + '.' + warningType);
		if (currentWarning == warning) {
			field.parentNode.removeChild(p);
		}
	}
	var fieldsets = 
		document.getElementById("content").getElementsByTagName("fieldset");
		for (var i=0; i<fieldsets.length; i++) {
			var fieldWarnings = fieldsets[i].getElementsByTagName("p").length;
			if (fieldWarnings > 0) {
				document.getElementById("enroll").disabled = true;
				return;
			}       
		}
		document.getElementById("enroll").disabled = false;
	}

	</script>


</body>
</html>