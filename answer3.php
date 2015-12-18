<head>
<title>答案三</title>
<meta charset="utf-8">
</head>
<?php
class QUestion3{
	function function3($v,$t){
	$g='10';
    $x=$v*$t;
	$y=1/2*$g*$t*$t;
    echo"答案：";
	echo"1s后的坐标为（$x,$y)";
	}
}
$answer3=new Question3;
$answer3->function3(10,1);
?>