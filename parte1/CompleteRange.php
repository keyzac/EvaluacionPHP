<?php
	/**
	* 
	*/
	class CompleteRange
	{		
		function build($arreglo)
		{
			$temp = array();
			for ($i=0; $i < count($arreglo); $i++) {
				if ($i == count($arreglo)-1) {
				 	break;
				}
				$num = $arreglo[$i];
				do {
					array_push($temp, $num);
					$num++;
				} while ($num != $arreglo[$i+1]);				
			}
			array_push($temp, $arreglo[count($arreglo)-1]);

			echo "[";
			foreach ($temp as $value) {
				if ($value == end($temp)) {
					echo $value;
				}else {
					echo $value.", ";					
				}
			}
			echo "]";
		}
	}

	$numeros = new CompleteRange;
	//Entrada
	$numeros->build(array(55, 58, 60));