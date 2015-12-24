<?php 

require_once ("test.php");

//DB接続
$pdo = db_connect();
// GETで地区名取得、中間一致検索を行う為の処理を変数に格納
$area = '%'.$_GET['area'].'%';
// $area = '%'.$_POST['area'].'%';

//地区名検索
try {
	$sql = "select * from area where area_name like :area";
	$stmh = $pdo->prepare($sql);
	$stmh -> bindvalue(':area',$area,PDO::PARAM_INT);
	$stmh ->execute();
	$row = $stmh->fetch(PDO::FETCH_ASSOC);
	$area_name = htmlspecialchars($row['area_name']);
} catch (Exception $e) {
	die("エラー：".$e->getMessage());
}

	//
try {
	$sql = "select * from livehouse where address like :area";
	$stmh = $pdo->prepare($sql);
	$stmh -> bindvalue(':area',$area,PDO::PARAM_STR);
	$stmh ->execute();
	$count = $stmh->rowCount();
} catch (Exception $e) {
	die("エラー：".$e->getMessage());
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ライブ行こうぜ！（仮）</title>
	<link href="http://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/map.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src="http://maps.google.com/maps/api/js?v=3&sensor=false"
	type="text/javascript" charset="UTF-8">
</script>
<script type="text/javascript">
	var map;
	//onloadでinit()を呼び出し
	function init() { 
		var latlng = new google.maps.LatLng(39, 138);
		var opts = {
			zoom: 19,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			center: latlng
		};
		map = new google.maps.Map(document.getElementById("map"), opts);

		//緯度・経度ではなく、指定した住所で表示
		geo = new google.maps.Geocoder();
		var add = document.getElementById('add');//変数addにid="add"の要素ノードオブジェクト格納
		var req = {
		address: add.value,//add.valueでid="add"のvalueを取得
	};
	geo.geocode(req, geoResultCallback);
	function geoResultCallback(result, status) {
		if (status != google.maps.GeocoderStatus.OK) {
			alert(status);
			return;
		}

		var clone = document.getElementById('house_name');//変数cloneにid="house_name"の要素ノードオブジェクト格納
		var name = clone.cloneNode(true);//変数cloneを複製し、変数nameに格納
		var latlng = result[0].geometry.location;
		map.setCenter(latlng);
		var markerpos = new google.maps.Marker({position:latlng, map:map});
		var marker = new google.maps.Marker(markerpos);
		var infowin = new google.maps.InfoWindow({content:name});//変数nameの内容表示
      
      // mouseoverイベントを取得するListenerを追加
      google.maps.event.addListener(marker, 'mouseover', function(){
      	infowin.open(map, marker);
      });

      // mouseoutイベントを取得するListenerを追加
      google.maps.event.addListener(marker, 'mouseout', function(){
      	infowin.close();
      });
  };
};
</script>
</head>
<body onload="init()"> 
	<header>
		<img class="logo" src="images/live.png">
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
		<?php echo $area_name; ?>ライブハウス所在地<br>
		<?php  echo "全".$count."件"; ?><br><br>
		<div id="map"></div><br><br>
		<?php echo $area_name; ?>ライブハウス一覧<br>
		<div class="scr">
			<br>
			<?php while ($row = $stmh->fetch(PDO::FETCH_ASSOC)) {
				$house_name = ($row['name']);
				$address = ($row['address']); 
				?>
				<form name="live" id="live" method="post" action="detail.php">
					<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
					<input type="hidden" id="add" value="<?php echo $address; ?>">
					<input class="id" type="submit" id="house_name" name="house_name" value="<?php echo $house_name; ?>">
				</form>
				<?php } ?>
				<br>
			</div>
			<footer>
				Copyright(C) 20xx. OH. All right.	
			</footer>
		</div>
	</body>
	</html>