<?php
require_once("../classes.php");
require_once("../database.php");
$pdo = connectDatabase();
"sql = select * from areas";
$pstmt = $pdo->prepare($sql);
$pstmt->excute();
$rs = $pstmt->fetchAll();
disconnectDatabase($pdo);
$areas = [];
foreach($rs as $record){
    $id = $record["id"];
    $name = $record["name"];
    $price = $record["price"];
    $city = $record["city"];
    $area = new Area($id,$name);
    $areas[] = $area;
}


?>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<title>ホテル検索</title>
	<link rel="stylesheet" href="../assets/css/style.css" />
	<link rel="stylesheet" href="../assets/css/hotels.css" />
</head>

<body>
	<header>
		<h1>ホテルの検索</h1>
	</header>
	<main>
		<article>
			<p>ホテルの所在地を入力してください。所在地の一部でも構いません。</p>
			<form action="list.html" method="get">
				<input type="text" name="address" />
				<input type="submit" value="検索" />
					<?php foreach(areas as $area){?>
			<option value="<?=$area->getId() ?>"><?=$area->getName()?></option>
			<?
			php}
			?>
			</form>
		</article>
	</main>
	<footer>
		<div id="copyright">(C) 2019 The Web System Development Course</div>
	</footer>
</body>

</html>