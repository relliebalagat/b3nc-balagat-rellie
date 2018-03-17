<?php

$page_title = 'Sign In';

include 'partials/header.php';

?>

</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="form-group" id="content">
					<form class="account-form-set" id="signInForm" action="assets/authentication.php" method="POST">
						<h3 class="text-center">Sign in</h3>

						<fieldset>
							<label>Email</label>
							<input type="email" name="email" class="form-control" id="email">
						</fieldset>

						<fieldset>
							<label>Password</label>
							<input type="password" name="password1" class="form-control" id="password">
						</fieldset>

						<input type="submit" name="submit" class="btn btn-primary" id="enroll" value="Sign In">

						<hr>
						<p class="text-center">New to us? <a href="registration.php">Register</a></p>
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
		}
	}

	function initPage() {
		addEventHandler(document.getElementById("email"), "blur", fieldIsFilled);
		addEventHandler(document.getElementById("email"), "blur", emailIsProper);
		addEventHandler(document.getElementById("password"), "blur", fieldIsFilled);
	}

	function fieldIsFilled(e) {
		var me = getActivatedObject(e);
		if (me.value == "") {
			warn(me, "required");
		} else {
			unwarn(me, "required");
		}
	}

	function emailIsProper(e) {
		var me = getActivatedObject(e);
		if (!/^[\w\.-_\+]+@[\w-]+(\.\w{2,4})+$/.test(me.value)) {
			warn(me, "format");
		} else {
			unwarn(me, "format");
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