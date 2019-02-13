<!DOCTYPE html>
<html lang="ja">
<head>
  <title>ECharts DEMO</title>
  <meta charset="UTF-8">
<script src='https://cdn.bootcss.com/echarts/3.4.0/echarts.js'></script>

<script src='/echarts-stat-master/dist/ecStat.js'></script>

  </head>
<body>
<h1>メニュー表</h1>
<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=shop;charset=utf8','root','P@ssw0rd',
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


<div id="main" style="width: 600px;height:400px;"></div>
<script>
const Data = <?php echo json_encode($b); ?>;
const Name = <?php echo json_encode($c); ?>;
console.log(Data);

var myChart = echarts.init(document.getElementById('main'));

option = {
    xAxis: {
        name: '商品',
        data: Name,
    },
    yAxis: {
        name: '値段',
        
    },
    series: [{
        type: 'bar',
        data: Data,
    }]
};


myChart.setOption(option);
</script>
<p><a  href="Main.php">戻る</a></p>
</body>
</html>



