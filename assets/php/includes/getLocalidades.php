<?php
    /* require("conexionEdos.php");

    $municipio_id = $_POST['id'];

    $sql = "SELECT id, nombre FROM localidades WHERE id = '$municipio_id' ORDER BY localidades";
    $result = $conexToAGEEML->query($sql);

    while($row = $result->fetch_assoc())
    {
        $html.="<option value='".$row['id']."'>".$row['nombre']."</option>";
    }

    echo $html; */
    require ('../conexionEdos.php');
	
	$id_municipio = $_POST['id_municipio'];
	
	$query = "SELECT id_localidad, localidad FROM t_localidad WHERE id_municipio = '$id_municipio' ORDER BY localidad";
	$resultado=$mysqli->query($query);
	
	while($row = $resultado->fetch_assoc())
	{
       // $html.= "<option value='".$row['id_localidad']."'>".$row['localidad']."</option>";
        $html.= "<option value='".$row['id_localidad']."'>".$row['localidad']."</option>";
	}
	echo $html;
?>