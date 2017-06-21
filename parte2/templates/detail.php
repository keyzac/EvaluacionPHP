<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Detalle de Empleado</title>
</head>
<body>
	<div class="container" style="margin: 0 auto; width: 60%; text-align: center;">
		<h2>Detalle del Empleado - <?php echo $employee["name"]; ?></h2>

		<ul style="text-align: left;">
			<li><span style="font-weight: bold">Name: </span><?php echo $employee["name"]; ?></li>
			<li><span style="font-weight: bold">Email: </span><?php echo $employee["email"]; ?></li>
			<li><span style="font-weight: bold">Phone: </span><?php echo $employee["phone"]; ?></li>
			<li><span style="font-weight: bold">Address: </span><?php echo $employee["address"]; ?></li>
			<li><span style="font-weight: bold">Position: </span><?php echo $employee["position"]; ?></li>
			<li><span style="font-weight: bold">Salary: </span><?php echo $employee["salary"]; ?></li>
			<li><span style="font-weight: bold">Skills: </span>
			<?php foreach($employee["skills"] as $item) {
			    echo $item['skill'], ' ';
			}?>
			</li>
		</ul>
	</div>
</body>
</html>