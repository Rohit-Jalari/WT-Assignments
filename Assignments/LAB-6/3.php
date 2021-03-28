<?php
$Students = array(
    'Ram' => 3, 
    'Shaym' => 5, 
    'Hari' => 10,
    'Rita' => 15, 
    'Sita' => 9, 
    'Jita' => 11,
); 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1px">
		<tr>
			<th>Name</th>
			<th>Roll Number</th>
		</tr>
		<?php
		foreach ($Students as $name => $roll) {
			?>
			<tr>
				<td><?=$name?></td>
				<td><?=$roll?></td>
			</tr>
		<?php } ?>
	</table>

</body>
</html>
