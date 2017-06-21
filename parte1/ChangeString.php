<?php
	/**
	* 
	*/
	class ChangeString
	{		
		public function build($cadena)
		{
			$temp = str_split($cadena);

			foreach ($temp as $key => $value) {
				if (ctype_alpha($value)) {
					$temp[$key] = ++$value;
				}
			}
			foreach ($temp as $letra) {
				echo $letra;
			}
		}
	}

	$palabra = new ChangeString;
	//Entrada
	$palabra->build('**Casa 52');