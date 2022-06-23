<?php 
	require_once('../controller/header.php');
?>

<html>
<head>
	<title>Create New</title>
</head>
<body>
		<a href="home.php">Back</a> | 
		<a href="../controller/logout.php"> logout </a>

		<form action="../controller/regCheck.php" method="post" enctype="">
			<fieldset>
				<legend>Create new</legend>
				<table>
					<tr>
						<td>username</td>
						<td>
							<input type="hidden" name="formname" value="create">
							<input type="text" name="username" value="">
						</td>
					</tr>
					<tr>
						<td>password</td>
						<td><input type="password" name="password" value=""></td>
					</tr>
					<tr>
						<td>email</td>
						<td><input type="email" name="email" value=""></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="" value="Submit"></td>
					</tr>
				</table>
			</fieldset>
		</form>
</body>
</html>