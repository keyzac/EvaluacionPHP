<?php
	/**
	* 
	*/
	class ClearPar
	{
		
		function build($cadena)
		{
			$cadena = str_split($cadena);
			foreach ($cadena as $key => $value) {
				if ($key == count($cadena)-1) {
					break;
				}
				if ($value == "(" and $cadena[$key+1] == ")") {
					echo $value.$cadena[$key+1];
				}
			}
		}
	}

	$cadena = new ClearPar;
	//Entrada
	$cadena->build('()())()');