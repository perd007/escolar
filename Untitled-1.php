<?php require_once('Connections/conexion.php'); ?>
<?php
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO alumno (cedula, nombre, apellido, enfermedad, sexo, edad, fecha_nac, lugarNac, nacionalidad, procedencia, repitiente, calificacion, camisa, pantalon, zapato, nombreR, cedulaR, direccionR, existeR, edadR, nacionalidadR, ingresoR, nombreR2, cedulaR2, existeR2, edadR2, nacionalidadR2, nivelR2, ocupacionR2, direccionR2, ingresoR2, nombreR3, cedulaR3, edadR3, nacionalidadR3, nivelR3, direccionR3, ingresoR3, vive, parientes, hermanos, zonav, enfer1, enfer2, impedimento, vacunas) VALUES (%s, %s, %s, %s, %s,  %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['cedula'], "int"),
                       GetSQLValueString($_POST['nombre'], "text"),
                       GetSQLValueString($_POST['apellido'], "text"),
                       GetSQLValueString($_POST['enfermedad'], "text"),
                       GetSQLValueString($_POST['sexo'], "text"),
                       GetSQLValueString($_POST['edad'], "int"),
                       GetSQLValueString($_POST['fecha_nac'], "date"),
                       GetSQLValueString($_POST['lugarNac'], "date"),
                       GetSQLValueString($_POST['nacionalidad'], "text"),
                       GetSQLValueString($_POST['procedencia'], "text"),
                       GetSQLValueString($_POST['repitiente'], "text"),
                       GetSQLValueString($_POST['calificacion'], "text"),
                       GetSQLValueString($_POST['camisa'], "text"),
                       GetSQLValueString($_POST['pantalon'], "text"),
                       GetSQLValueString($_POST['zapato'], "text"),
                       
                       GetSQLValueString($_POST['nombreR'], "text"),
                       GetSQLValueString($_POST['cedulaR'], "int"),
                       GetSQLValueString($_POST['direccionR'], "text"),
                       GetSQLValueString($_POST['existeR'], "text"),
                       GetSQLValueString($_POST['edadR'], "text"),
                       GetSQLValueString($_POST['nacionalidadR'], "text"),
                       GetSQLValueString($_POST['ingresoR'], "text"),
                       GetSQLValueString($_POST['nombreR2'], "text"),
                       GetSQLValueString($_POST['cedulaR2'], "int"),
                       GetSQLValueString($_POST['existeR2'], "text"),
                       GetSQLValueString($_POST['edadR2'], "text"),
                       GetSQLValueString($_POST['nacionalidadR2'], "text"),
                       GetSQLValueString($_POST['nivelR2'], "text"),
                       GetSQLValueString($_POST['ocupacionR2'], "text"),
                       GetSQLValueString($_POST['direccionR2'], "text"),
                       GetSQLValueString($_POST['ingresoR2'], "text"),
                       GetSQLValueString($_POST['nombreR3'], "text"),
                       GetSQLValueString($_POST['cedulaR3'], "int"),
                       GetSQLValueString($_POST['edadR3'], "text"),
                       GetSQLValueString($_POST['nacionalidadR3'], "text"),
                       GetSQLValueString($_POST['nivelR3'], "text"),
                       GetSQLValueString($_POST['direccionR3'], "text"),
                       GetSQLValueString($_POST['ingresoR3'], "text"),
                       GetSQLValueString($_POST['vive'], "text"),
                       GetSQLValueString($_POST['parientes'], "text"),
                       GetSQLValueString($_POST['hermanos'], "text"),
                       GetSQLValueString($_POST['zonav'], "text"),
                       GetSQLValueString($_POST['enfer1'], "text"),
                       GetSQLValueString($_POST['enfer2'], "text"),
                       GetSQLValueString($_POST['impedimento'], "text"),
                       GetSQLValueString($_POST['vacunas'], "text"));

  mysql_select_db($database_conexion, $conexion);
  $Result1 = mysql_query($insertSQL, $conexion) or die(mysql_error());
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<form method="post" name="form1" action="<?php echo $editFormAction; ?>">
  <table align="center">
    <tr valign="baseline">
      <td nowrap align="right">Impedimento:</td>
      <td><input type="text" name="impedimento" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Vacunas:</td>
      <td><input type="text" name="vacunas" value="" size="32"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">&nbsp;</td>
      <td><input type="submit" value="Insertar registro"></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form1">
</form>
<p>&nbsp;</p>
</body>
</html>
