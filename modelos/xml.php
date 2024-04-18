<?php

	function usuarios_xml(){

		$xml = simplexml_load_file("modelos/datos_xml/usuarios.xml");
		$json = json_encode($xml);
		$un_array = json_decode($json,TRUE);
		return($un_array);

	}
	
	
	function preferidos_xml(){

		$xml = simplexml_load_file("modelos/datos_xml/preferidos.xml");
		$json = json_encode($xml);
		$un_array = json_decode($json,TRUE);
		return($un_array);

	}



?>