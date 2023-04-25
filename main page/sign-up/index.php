<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>sign-up</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/css/suneditor.min.css">
    <link rel="stylesheet" href="assets/css/Ludens---2-Create.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <section class="clean-block clean-form dark">
        <div class="container">
            <div class="block-heading" style="padding-top: 0px;margin-top: 50px;">
                <h2 class="text-primary">Sign-up<br></h2>
                <p>Your details are safe here</p>
            </div>
            <form style="max-width: 700px;" role="form" action="demo.php" method="POST" enctype="multipart/form-data">
                <div class="form-group mb-3"><label class="form-label">Name*</label><input class="form-control" type="text" required="" autocomplete="off" placeholder="Enter your name" name="name" autofocus=""></div>
                <div class="form-group mb-3"><label class="form-label">phone number*</label><input class="form-control" type="tel" name="phone" placeholder="Enter your phone number" required="" pattern="(?:(\+\d{1,3})[ -]?)?(\(?(\d{2,4})\)?)?[ -]?(\d{1,10})[ -]?(\d{1,10})?[ -]?(\d{1,3})?[ -]?(\d{1,3})?" title="Enter a valid international number" inputmode="tel"></div>
                <div class="form-group mb-3"><label class="form-label">Email*</label><input class="form-control" type="text" autocomplete="off" required="" placeholder="Enter your Email-id" name="user"></div>
                <div class="form-group mb-3"><label class="form-label">Password*</label><input class="form-control" type="password" id="password" name="password" placeholder="Enter your password" onchange="changePassword()" required=""></div>
                <div class="form-group mb-3"><label class="form-label">Confirm password*</label><input class="form-control" type="password" id="confirmPassword" name="password" placeholder="Re-enter your password" onchange="changePassword()" required=""></div>
                <div id="passwordsError" class="text-danger" style="display: none; margin-bottom: 15px;"><span id="errorMessage">Las contraseñas no coinciden<br></span></div>
                <div class="form-group mb-3"><label class="form-label">Gender*</label>
                    <div class="form-check"><input class="form-check-input" type="radio" id="formRadio-1" name="RadioOption" value="male"><label class="form-check-label" for="formRadio-1">Male</label></div>
                    <div class="form-check"><input class="form-check-input" type="radio" id="formRadio-2" name="RadioOption" value="female"><label class="form-check-label" for="formRadio-2">Female</label></div>
                </div>
                <div class="form-group mb-3"><label class="form-label">Address*</label><br>
                    <!-- <div><input type="text" class="form-control" id="editor" placeholder="Enter your address" required=""></div> -->
                <input type="text" placeholder="Enter your Address" name="address" class="form-control">
                </div>
                <div class="form-group mb-3"><input class="btn btn-primary d-block w-100" value="Register now" id="submitButton" type="submit" name="mysubmit"></div>

                <script>
	// Submit button made with javascript
	function changePassword() {
		var password = document.querySelector("#password").value;
		var confirmPassword = document.querySelector("#confirmPassword").value;
		
		if(password.length >= 8) {
			if(password === confirmPassword)
			{
				var btn = $('#submitButton').removeAttr("disabled");
				document.querySelector('#passwordsError').style.display = 'none';
				console.log("enabling")
			}
			else {
				var btn = $('#submitButton').attr("disabled", "true");
				document.querySelector('#passwordsError').style.display = 'block';
				document.querySelector('#errorMessage').innerHTML = 'The passwords do not match';
				console.log("disabling")
			}
		}
		else {
			var btn = $('#submitButton').attr("disabled", "true");
			document.querySelector('#passwordsError').style.display = 'block';
			document.querySelector('#errorMessage').innerHTML = 'The password must be at least 8 characters long';
			console.log("disabling")
		}
	}
</script>
            </form>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/suneditor@latest/dist/suneditor.min.js"></script>
    <script src="assets/js/Ludens---2-Create-1.js"></script>
    <script src="assets/js/Ludens---2-Create.js"></script>
</body>

</html>


