<?php

require "vendor/autoload.php";

// 1. What does this function session_start() do to the application?
// _____________________________________________________________________

session_start();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
</head>
<body>

	<h1>Analogy Exam Registration</h1>
	<h3>Kindly register your basic information before starting the exam.</h3>

	<form method="POST" action="register.php">

		Enter your full name:
		<br />
		<input type="text" name="fullname" placeholder="Full Name" required />
		<br />

		Email:
		<br />
		<input type="email" name="email" required />
		<br />

		Birthday:
		<br />
		<input type="date" name="birthdate" min="1900-01-01" max="2023-12-31">
		<br />

		<input type="submit">
	</form>

</body>
</html>

<!-- DEBUG MODE -->
<pre>
<?php
var_dump($_SESSION);
?>
</pre>