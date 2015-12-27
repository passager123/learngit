<head>
<meta charset="utf-8">
</head>
<?php
class Complex {
	public $a;
	public $b;
	public $c;
	public $d;
	public function myFunction($c,$d){
		$a="1";
		$b="i";
        $c=$c;
        $d=$d;
        $e=$c*$a+$d*$b;
        echo"计算的复数值为:".$e;

	}
}
$cal=new Complex();
echo $cal->myFunction("3","3");
?>