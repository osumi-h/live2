	<?php 

	function db_connect(){

		$db_name = "live";
		$db_user = "root";
		$db_pass = "mysql";
		$db_host = "localhost";
		$db_type = "mysql";

		$dsn = "$db_type:host=$db_host;dbname=$db_name;charset=utf8";

		try {
			$pdo = new PDO($dsn,$db_user,$db_pass);
			$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
		} catch (PDOException $e) {
			die('接続エラー：'.$e->getMessage());
		}

		return $pdo;

	}

	// $pdo = db_connect();

	// try {
	// 	$sql = "select * from livehouse";
	// 	$stmh = $pdo->prepare($sql);
	// // $stmh->bindValue(':id',$id,PDO::PARAM_INT);
	// 	$stmh->execute();
	// 	$count = $stmh->rowCount();

	// // $row = $stmh->fetch(PDO::FETCH_ASSOC);
	
	// // $i = 1;
	// while ($row = $stmh->fetch(PDO::FETCH_ASSOC)) {
	// 	$id = htmlspecialchars($row['id']);
	// $name = htmlspecialchars($row['name']);
	// $address = htmlspecialchars($row['address']);
	// $tel = htmlspecialchars($row['tel']);
	// $mailaddress = htmlspecialchars($row['mailaddress']);
	// $path = htmlspecialchars($row['path']);
	// echo $id.'<br>';
	// echo $name.'<br>';
	// echo $address.'<br>';
	// echo $tel."<br>";
	// echo $mailaddress."<br>";
	// echo "<img src = '$path'><br>";
	// echo $path."<br>";
	// echo "<br>";
	
	// }

	// } catch (Exception $e) {
	// 	echo "エラー：".$e->getMessage();
	// }

	
?>
