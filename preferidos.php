<?php 

	include "modelos/xml.php";
	include "modelos/api.php";
	$un_array = preferidos_xml();
	$array_final = [];
	$n = 0;
	
	foreach($un_array["preferido"] as $preferido){
			if ($preferido["id_usuario"] == $_GET["id_usuario"]){
				$data_convertido = datos_recurso($preferido["id_recurso"]);
				$array_final[$n]["Title"] = $data_convertido["Title"];
				$array_final[$n]["Year"] = $data_convertido["Year"];
				$array_final[$n]["Type"] = $data_convertido["Type"];
				$n++;
			}	
	}
	
	include "vistas/preferidos.htm"; 

?>
