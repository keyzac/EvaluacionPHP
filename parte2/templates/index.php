<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Listado de Empleados</title>
</head>
<body>
	<div class="container" style="margin: 0 auto; width: 60%; text-align: center;">
		<h1>Empleados de Developers SAC.</h1>
		
		<table border=1 style="width: 100%;">
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Position</th>
				<th>Salary</th>
			</tr>
			<?php foreach ($employees as $employee): ?>
			<tr>
				<td><?php echo $employee["name"]; ?></td>
				<td><?php echo $employee["email"]; ?></td>
				<td><?php echo $employee["position"]; ?></td>
				<td><?php echo $employee["salary"]; ?></td>
			</tr>
			<?php endforeach; ?>
		</table>

		<form id="buscador" name="buscador" method="post" style="margin: 20px 0;"> 
		    <input type="search" id="buscar" name="email" placeholder="Buscar por Email" style="width: 90%;" autofocus >
		    <input type="submit" name="buscador" value="Buscar">
		</form>

		<a href="./salario" style="text-decoration: none;">Buscar por rango de salario</a>
	</div>
</body>
</html>