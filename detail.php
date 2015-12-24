<!DOCTYPE html>

<?php 

require_once ("test.php");

$pdo = db_connect();

?>


<html>
<head>
	<meta charset="utf-8">
	<title>ライブ行こうぜ！（仮）</title>
	<link href="http://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/detail.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div>
		<header>
			<img class="logo" src="images/live.png" height="100" width="100">
			<div class="src">
				<form method="post" action="search.php">
					<div class="radios">
						<input type="radio" name="search" value="hausename" checked="checked">ライブハウス
						<input type="radio" name="search" value="place">場所
					</div>
					<br>
					<input type="search" size="25" name="search" placeholder="検索ワードを入力してください。" required>
					<input type="submit" value="検　索">
				</form>
			</div>
		</header>
		<div class="main">
			<br>
			<?php
			if(isset($_POST['id'])){	
				try {
					$id = $_POST['id'];
					$sql = "select * from livehouse where id = :id";
					$stmh = $pdo->prepare($sql);
					$stmh -> bindvalue(':id',$id,PDO::PARAM_INT);
					$stmh ->execute();
				} catch (Exception $e) {
					die("エラー：".$e->getMessage());
				}
				$row = $stmh->fetch(PDO::FETCH_ASSOC);
				$name = $row['name'];
				$address = $row['address'];
				$building = $row['building'];
				$tel = $row['tel'];
				$mailaddress = $row['mailaddress'];
				$hp = $row['hp'];
				$path = $row['path'];
				?>

				<span class="name"><?php echo $name; ?></span> 
				
				<br><br>
				<table>
					<tr>
						<td>
							<img src=<?php echo $path; ?> height="200" width="200">
						</td>
						<td class="aaa">
							<p>ライブハウス概要</p>
							<?php 
							echo $name."<br>";
							echo $address."&nbsp";
							echo $building."<br>";
							echo $tel."<br>";
							echo $mailaddress."<br>";
							?>
						</td>
					</tr>
				</table>
				<?php
			}else{
				echo "aaa";
			}
			?>
			<br>
			<a class="btn" target="brank" href=<?php echo $hp ?>><span class="hp">ホームページに行ってみる</span></a>
			<br><br>
			<a class="btn" href="index.php"><span class="hp">TOP</span></a>
		</div>	
		<footer>
			Copyright(C) 20xx. OH. All right.	
		</footer>
	</div>