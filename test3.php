<html>
<body>

<?php
$a = 123;
$b = [['id'=>'100','price' => '200']];

print_r($b);

        foreach ($b as $v => $k){
         echo  "[${v},${k}]";
        }
?>
<script>
var aaa = <?php
	foreach ($b as $v => $k){
	 echo  '[' + $v + ',' + $k + ']';
        }
	?>
</script>

