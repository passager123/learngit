<head>
<title>作业</title>
<meta charset="utf-8">
<?php 
class Question1{
	function function1($v,$a,$t){
	echo"题目一的答案：";
	$a='5';
	$s=$v*$t+1/2*$a*$t*$t;
	echo"2s内的路程为：".$s;
	}
}
$run=new Question1;
echo $run->function1(1,5,2);
?>
