<?php
try{
	$pdo = new PDO(
		'mysql:dbname=sincere;host=localhost;charset=utf8mb4',
		'ozaki',
		'gargoyl',
		[
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		]
	);

}catch (PDOException $e){
	header('Content-Type: txt/plain; cahrset=UTF-8',true,500);
	exit($e->getMessage());
}
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Example</title>
</head>
<body>
</body>
</html>
