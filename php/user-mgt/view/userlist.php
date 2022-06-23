<?php 
/*	include('header.php');
	include_once('header.php');

	require('header.php');*/
	require_once('../controller/header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User list</title>
</head>
<body>
		<a href="home.php"> Back </a> | 
		<a href="../controller/logout.php"> logout </a>
		<br>
		<table border="1">
			<tr>
				<th>ID</th>
				<th>NAME</th>
				<th>PASSWORD</th>
				<th>EMAIL</th>
				<th>ACTION</th>
			</tr>

			<?php 
				$file = fopen('../model/user.txt', 'r');
				while(!feof($file)){
					$user = fgets($file);
					$user = explode("|", $user);
					//print_r($user);
					if(count($user) > 1){
			?>
			<tr>
				<th><?=$user[0]?></th>
				<th><?=$user[1]?></th>
				<th><?=$user[2]?></th>
				<th><?=$user[3]?></th>
				<th>
					<a href="edit.php?id=<?=$user[0]?>"> EDIT </a> |
					<a href="delete.php?id=<?=$user[0]?>"> DELETE </a> 
				</th>
			</tr>
			<?php
					}
				}
			?>
		</table>
</body>
</html>