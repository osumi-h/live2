<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ライブ行こうぜ！（仮）</title>
	<link href="http://fonts.googleapis.com/earlyaccess/notosansjapanese.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

	<div>
		<header>
			<img class="logo" src="images/live2.png" height="100" width="100">
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
			場所を選んでね ＾＾；
			<br><br>
			<img class="map" src="images/map_4.png" usemap="#tokyo">
			<map name="tokyo">
				<area shape="poly" coords="248,210,273,216,279,206,290,217,263,254,247,254,230,233,248,215" href="map.php?area=千代田区" alt="千代田区">
				<area shape="poly" coords="296,222,301,224,300,246,268,270,268,259," href="map.php?area=中央区" alt="中央区">
				<area shape="poly" coords="225,239,244,259,261,261,247,321,217,301,225,280,209,267,213,249" href="map.php?area=港区" alt="港区">
				<area shape="poly" coords="167,171,190,179,195,190,242,203,242,211,210,243,193,222,178,233,172,266,188,193,167,193,163,185" href="map.php?area=新宿区" alt="新宿区">
				<area shape="poly" coords="222,175,229,179,252,161,265,167,274,199,269,209,248,203,248,198,219,190" href="map.php?area=文京区" alt="文京区">
				<area shape="poly" coords="274,175,285,177,305,177,326,174,298,214,281,199" href="map.php?area=台東区" alt="台東区">
				<area shape="poly" coords="341,149,366,178,324,277,304,218," href="map.php?area=墨田区" alt="墨田区">
				<area shape="poly" coords="308,277,327,235,345,207,367,218,364,278,333,274,326,253,320,260,306,256" href="map.php?area=江東区" alt="江東区">
				<area shape="poly" coords="215,308,246,328,246,379,222,367,213,371,188,350,197,341,190,327,208,324" href="map.php?area=品川区" alt="品川区">
				<area shape="poly" coords="165,272,178,274,188,295,208,306,201,316,180,322,189,339,183,345,171,337,162,349,147,348,147,321,164,326,174,293," href="map.php?area=目黒区" alt="目黒区">
				<area shape="poly" coords="174,346,214,378,223,375,246,386,252,408,260,423,282,414,279,430,301,469,258,443,196,450,193,444,201,431,169,416,153,375,141,374,135,370,148,367,162,374," href="map.php?area=大田区"　alt="大田区">
				<area shape="poly" coords="71,253,88,263,94,256,147,257,167,295,161,318,141,311,142,353,161,355,159,364,150,361,127,365,87,337,47,330,63,319,51,302,66,291," href="map.php?area=世田谷区" alt="世田谷区">
				<area shape="poly" coords="167,230,178,243,192,231,207,249,201,268,218,282,211,298,191,290,181,268,161,264,156,252,147,250,146,245," href="map.php?area=渋谷区" alt="渋谷区">
				<area shape="poly" coords="104,160,117,176,145,173,149,164,161,167,155,185,162,199,175,199,167,210,165,222,146,237,144,233,156,223,143,215,139,199,106,183,98,167," href="map.php?area=中野区" alt="中野区">
				<area shape="poly" coords="91,171,101,188,132,203,135,218,136,218,145,224,136,230,140,248,105,256,91,246,86,255,63,243,72,228,62,217,77,199,57,184," href="map.php?area=杉並区" alt="杉並区">
				<area shape="poly" coords="168,158,185,152,196,161,200,148,213,148,218,156,230,150,245,158,228,171,218,165,211,188,198,183,195,175,168,164" href="map.php?area=豊島区" alt="豊島区">
				<area shape="poly" coords="187,77,206,90,223,89,223,114,237,106,253,111,246,120,255,127,245,131,273,154,267,160,230,142,221,148,219,144,225,132,202,109,195,89,183,87," href="map.php?area=北区" alt="北区">
				<area shape="poly" coords="258,132,297,135,306,153,327,157,326,167,303,159,285,170,271,165,283,154," href="map.php?area=荒川区" alt="荒川区">
				<area shape="poly" coords="179,75,173,92,190,95,196,114,217,132,213,142,196,142,192,150,187,145,167,152,155,110,109,103,109,95,122,79," href="map.php?area=板橋区" alt="板橋区">
				<area shape="poly" coords="53,118,111.121.110,110,150,115,161,161,146,158,141,166,119,168,104,152,91,163,50,179,34,168,38,129," href="map.php?area=練馬区" alt="練馬区">
				<area shape="poly" coords="279,52,300,70,327,62,327,80,359,83,365,76,375,82,382,105,377,99,345,112,344,188,330,110,329,134,336,143,332,152,311,147,304,128,264,125,255,199,264,107,243,102,279,78," href="map.php?area=足立区" alt="足立区">
				<area shape="poly" coords="335,121,352,129,352,118,375,107,382,116,391,111,384,88,415,139,401,158,400,185,385,189,335,131," href="map.php?area=葛飾区" alt="葛飾区">
				<area shape="poly" coords="422,144,428,147,428,184,440,195,447,190,457,214,417,246,407,298,390,297,382,284,370,284,374,216,361,204,361,192,371,184,384,197,406,190,409,160," href="map.php?area=江戸川区" alt="江戸川区">
			</map>
			<form method="post" action="map.php">
				<input type="hidden" name="area" value="区">
				<input type="submit" value="aaa">
			</form>
			<br>
		</div>	
		<footer>
			Copyright(C) 20xx. OH. All right.	
		</footer>
	</div>

</body>
</html>
