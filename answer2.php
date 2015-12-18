<head>
<title>
题目二答案
</title>
<meta charset="utf-8">
</head>
<?php
class Question2{
	function function2($v,$g,$t){
		$v='10';
		$g='10';
		$t='1';
		$s=$v*$t-1/2*$g*$t*$t;
		echo"题目二的答案：";
		echo"1s后的高度为：".$s;
	}
}
$answer=new Question2;
$answer->function2(10,10,1); 
?>