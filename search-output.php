<html>
<head>
</head>
<body>

<table>
	<tr>
		<th>商品番号</th>
		<th>商品名</th>
		<th>商品価格</th>
	</tr>
<?php
$pdo = new PDO( 'mysql:host=localhost;dbname=shop;charset=utf8', 'root', 'P@ssw0rd' );
$sql = $pdo->prepare ( 'select * from menu where name like ?' );
$sql->execute(['%'.$_REQUEST['keyword'].'%'])
;
foreach ( $sql->fetchAll () as $row ) {
    echo '<tr>';
    echo '<td>', $row ['id'], '</td>';
    echo '<td>', $row ['name'], '</td>';
    echo '<td>', $row ['price'], '</td>';
    echo '</tr>';
    echo "\n";
}
?>
</table>
</body>
</html>
