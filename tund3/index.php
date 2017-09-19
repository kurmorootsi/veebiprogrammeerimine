<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Homework 2</title>
</head>
<body>
        <h1>Login</h1>
			<form action='' method='post'> <!--Siia läheb reaalne action kui login form oleks valmis-->
				    <input type='text' name='uid' placeholder='Username' autocomplete='Out'><br>
				    <input type='password' name='pwd' placeholder='Password'><br>
				    <button type='submit'>Log In</button>
            </form>
<br>
    <h1>Sign up</h1>
    <form action='includes/signup.inc.php' method='post'>
		<div class='signupform'>
			    <input type='text' name='uid' placeholder='Username'><br>
			    <input type='email' name='email' placeholder='Your e-mail'><br>
                <input type='password' name='pwd' placeholder='Password'><br>
                Gender:<br>
                <input type='radio' name='gender' value='1'> Male <input type='radio' name='gender' value='1'> Woman<br>
			    <button type='submit'>Sign up</button>
        </div>
    </form>
</body>
</html>