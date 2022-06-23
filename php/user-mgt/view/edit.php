<?php 
	require_once('../controller/header.php');
	$id= $_REQUEST['id'];
	$file = fopen('../model/user.txt', 'r');
	$data = "";
	while(!feof($file)){
		$user = fgets($file);
		$user = explode('|', $user);
		if($user[0] == $id){
			$data = $user;
			break;
		}
	}
?>
<html>
<head>
	<title>Edit User</title>
</head>
<body>
		<a href="userlist.php"> Back </a> | 
		<a href="../controller/logout.php"> logout </a>

		<form action="../controller/update.php" method="post" enctype="">
			<fieldset>
				<legend>Update User</legend>
				<table>
					<tr>
						<td>username</td>
						<td><input type="text" name="username" value="<?=$data[1]?>"></td>
					</tr>
					<tr>
						<td>password</td>
						<td><input type="password" name="password" value="<?=$data[2]?>"></td>
					</tr>
					<tr>
						<td>email</td>
						<td><input type="email" name="email" value="<?=$data[3]?>"></td>
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