<?php
function getArrayElementsRecursively($array, $depth=0){
	$flag = 1;
	foreach((array)$array as $key => $value){
		if($depth >= 0){
			for($i=1; $i<=$depth; $i++) echo "│";
			if($flag == 0) echo "├";
			else echo "├";
			if($flag == 0) echo "─";
			else{
				$flag = 1; echo "─";
			}
		}
		if(!is_array($key)){
			echo $key.":";
			$flag = 1;
		}
		if(is_array($value)){
			echo PHP_EOL;
			$depth++;
			getArrayElementsRecursively($value, $depth);
			$depth--;
		}else{
			echo strval($value).PHP_EOL;
		}
	}
}
?>