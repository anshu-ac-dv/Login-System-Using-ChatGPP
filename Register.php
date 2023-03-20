<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register Here</title>
</head>
<body>
    <form action="Submit.php" method="post">
		<h2>Registration Form</h2>
		<label for="name">Name:</label>
		<input type="text" id="name" name="name" placeholder="Enter Name" required>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email" placeholder="Enter email" required>

		<label for="password">Password:</label>
		<input type="password" id="password" name="password" placeholder="Enter Password" required>

        <label for="password">Confirm Password:</label>
		<input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required>

		<input type="submit" name="submit" value="Register">
	</form>
    <script src="Validate.js"></script>
</body>
</html>