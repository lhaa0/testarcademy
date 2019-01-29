<!DOCTYPE html>
<html>
<head>
	<title>7</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container box">
	<h1 align="center">Tampilan</h1>
	
	<div class="container" >
		

		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Person Id</th>
					<th>Name</th>
					<th>Hobbies</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					$db_host = 'localhost'; 
                    $db_user = 'root'; 
                    $db_pass = 'WhateverPassword'; 
                    $db_name = 'testarcademy';
                    
                    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
                    if (!$conn) {
                        die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
                    }

                    $sql = 'SELECT a.id AS person_id, a.name, GROUP_CONCAT(b.name ORDER BY b.id SEPARATOR ", ") AS person_hobbies 
					FROM categories a, hobies b 
					WHERE b.person_id = a.id GROUP BY a.name ORDER BY a.id ASC';
                    $query = mysqli_query($conn, $sql);
					while ($data = mysqli_fetch_array($query)) {

				?>
				<tr>
					<td><?= $data['person_id'] ?></td>
					<td><?= $data['name'] ?></td>
					<td><?= $data['person_hobbies'] ?></td>
					
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>
	</div>
</div>
</body>
</html>

