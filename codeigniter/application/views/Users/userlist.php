<!DOCTYPE html>
<html>
<head>
	<title>UserList</title>
</head>
<body>
<?php  print_r($users); ?>
	<h1>UserAccount Details</h1>
	<table border="1">
		<tr>
			<td>First Name</td>
			<td>Account No</td>
		</tr>

<?php foreach ($users as $row):?>
		<tr>
			<td><?php echo $row['FirstName'] ?></td>
			<td><?php echo $row['AccountNo'] ?></td>
		</tr>
<?php endforeach; ?>
	</table>

</body>
</html>