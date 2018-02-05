<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
</head>

<body>
	Hello World!
	<?php
		//set up the basic info
		$user = 'topiniskala';
		$password = 'a~split~second1986flesh';
		$database = 'testi';
		$dsn = 'mysql:host=localhost;charset=UTF8;dbname=testi';

		//open connection
		$pdo = new PDO($dsn, $user, $password);

		//SQL query
		$pdoStatement = $pdo->prepare('SELECT * FROM testi;');
		$pdoStatement->SUORITA!!!();
		$hits=$pdoStatement->fetchAll();

		//Print the results
		foreach($hits as $row) {
			echo "<p>".$row['id']." - ".$row['teksti']." - ".$row['numero']."</p>\n";
		}
	?>
</body>
</html>
