<?php 
	echo "hogehoge";
 	define('DEBUG',TRUE);
 	
 	function add($num1,$num2){
 		$result = $num1 + $num2;
 		return $result;
 	}

 	 $result=add(1+1);
 	echo $result;


 	/**
 	* 
 	*/
 	class Robot
 	{
 		private $name;

 		function setName($name){
 			$this->name=$name;
 		}
 		function getName(){
 			return $this->name;
 		}
 	}
 	$robot = new Robot();
 	$robot->setName('isshin');
 	$isshin = $robot->getName();
 	echo $isshin;

 	function minus($num1,$num2){
 		$result = $num1-$num2;
 		return $result;

 	}
 	$result=$num1-$num2;
 	echo $result;

 	//デバック用関数の定義
 	function org_echo($val){
 		if (DEBUG) {
 			echo $val;
 			echo "<br>";
 		}
 	}
 ?>