
<!DOCTYPE html>
<html lang="ja">
<head>
<?php

try {
    $pdo = new PDO('mysql:host=mysql;dbname=php;charset=utf8','root','pass',
    array(PDO::ATTR_EMULATE_PREPARES => false));
    } catch (PDOException $e) {
     exit('データベース接続失敗。'.$e->getMessage());
    }
$result =$pdo->query ( 'select * from menu' );
foreach ( $result as $k => $v ) {

    $a[] = $v['id'];
    $b[] = $v['price'];
    $c[] = $v['name'];
}


for($i=0; $i < count($a); $i++){
    $Data[] = [$a[$i],$b[$i]];
}
?>
  <title>ECharts DEMO</title>
  <meta charset="UTF-8">
</head>


<body>
<h1>買い物</h1>
<p id="demo"></p>
    <script>
        const Data = <?php echo json_encode($b); ?>;
        const Name = <?php echo json_encode($c); ?>;
        document.write("<TABLE BORDER>");
        
           for(var i=0; Name[i]; i++){
            document.write("<TR id =TR%d>",i);
            document.write("<TB>");
            document.write(Name[i]);
            document.write("</TB><TB>");
            document.write(Data[i]);
            document.write("</TB>");
           }
        document.write("</TR>");   
        document.write("</TABLE>");
    </script>

<p><a  href="Graph.php">戻る</a></p>
</body>
</html>



