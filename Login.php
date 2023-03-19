<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Login.css">
    <title>Login</title>
</head>
<body>

    <div class="container">
		<h2>Login Here</h2>
		<form action="User_Login.php" method="post">
			<label for="username"><b>Username/Email</b></label>
			<input type="text" placeholder="Enter Username" name="username" required>

			<label for="password"><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="password" required>

			<button type="submit" name="submit">Login</button>
		</form>
	</div>

</body>
</html>