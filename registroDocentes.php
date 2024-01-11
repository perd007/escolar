<?php require_once('Connections/conexion.php'); ?>
<?php
//validar usuario

if($validacion==true){
	if($reg==0){
	echo "<script type=\"text/javascript\">alert ('Usted no posee permisos para realizar Registros');location.href='principal.php' </script>";
    exit;
	}
}
else{
echo "<script type=\"text/javascript\">alert ('Error usuario invalido'); location.href='principal.php' </script>";
 exit;
}



$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}


mysql_select_db($database_conexion, $conexion);
$query_docentes = "SELECT * FROM docentes where cedula='$_POST[cedula]'";
$docentes = mysql_query($query_docentes, $conexion) or die(mysql_error());
$row_docentes = mysql_fetch_assoc($docentes);
$totalRows_docentes = mysql_num_rows($docentes);

if($totalRows_docentes>0){
 echo "<script type=\"text/javascript\">alert ('Cedula ya registrada');  location.href='principal.php?link=link1' </script>";
  exit;
}


if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO docentes (cedula, nombre, telefono, direccion, nivel, estudioA, seccion, grado, periodo, servicio, situacio) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['cedula'], "int"),
                       GetSQLValueString($_POST['nombre'], "text"),
                       GetSQLValueString($_POST['telefono'], "int"),
                       GetSQLValueString($_POST['direccion'], "text"),
                       GetSQLValueString($_POST['nivel'], "text"),
                       GetSQLValueString($_POST['estudioA'], "text"),
                       GetSQLValueString($_POST['seccion'], "text"),
                       GetSQLValueString($_POST['grado'], "text"),
                       GetSQLValueString($_POST['periodo'], "text"),
                       GetSQLValueString($_POST['servicio'], "int"),
                       GetSQLValueString($_POST['situacio'], "text"));

  mysql_select_db($database_conexion, $conexion);
  $Result1 = mysql_query($insertSQL, $conexion) or die(mysql_error());
    if($Result1){
  echo "<script type=\"text/javascript\">alert ('Datos Guardados');  location.href='principal.php' </script>";
  }else{
  echo "<script type=\"text/javascript\">alert ('Ocurrio un Error');  location.href='principal.php' </script>";
  exit;
  }
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
.Estilo5 {
	color: #FFFFFF;
	font-weight: bold;
	font-style: italic;
}
-->
</style>
</head>
<script language="javascript">

function validar(){
		if(document.form1.cedula.value!=""){
			 var filtro = /^(\d)+$/i;
		      if (!filtro.test(document.getElementById('cedula').value)){
				alert('Solo puede ingresar numeros en la cedula del Docente!!!');
				return false;
		   		}
				}
			if(document.form1.telefono.value!=""){
			 var filtro = /^(\d)+$/i;
		      if (!filtro.test(document.getElementById('telefono').value)){
				alert('Solo puede ingresar numeros en el telefono del Docente!!!');
				return false;
		   		}
				}
			if(document.form1.servicio.value!=""){
			 var filtro = /^(\d)+$/i;
		      if (!filtro.test(document.getElementById('servicio').value)){
				alert('Solo puede ingresar numeros en los años de servicio!!!');
				return false;
		   		}
				}

	
				if(document.form1.cedula.value==""){
						alert("Debe Ingresar la Cedula del Docente");
						return false;
				}

				
				if(document.form1.nombre.value==""){
						alert("Debe Ingresar el Nombre del Docente");
						return false;
				}
			
				
				if(document.form1.direccion.value==""){
						alert("Debe Ingresar la Direccion del Docente");
						return false;
				}
				
				if(document.form1.nivel.value==""){
						alert("Debe Ingresar el nivel academico del Docente");
						return false;
				}
				if(document.form1.estudioA.value==""){
						alert("Debe Ingresar los estudios actuales del Docente");
						return false;
				}
				
				if(document.form1.servicio.value==""){
						alert("Debe Ingresar los años de servicio del Docente");
						return false;
				}
				
				if(document.form1.situacio.value==""){
						alert("Debe Ingresar la situacion laboral del Docente");
						return false;
				}
			
				
}
			
			
</script>
<body>
<form method="post" name="form1" action="<?php echo $editFormAction; ?>" onsubmit="return validar()">
  <p>&nbsp;</p>
  <table width="485" align="center">
    <tr valign="baseline">
      <td colspan="2" align="right" nowrap bgcolor="#FF0000"><div align="center" class="Estilo5">Registro de Docentes </div></td>
    </tr>
    <tr valign="baseline">
      <td width="135" align="right" nowrap>Cedula:</td>
      <td width="338"><input name="cedula" id="cedula" type="text" value="" size="10" maxlength="8"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Nombre:</td>
      <td><input name="nombre" type="text" value="" size="50" maxlength="50"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Telefono:</td>
      <td><input name="telefono" id="telefono" type="text" value="" size="20" maxlength="11"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Direccion:</td>
      <td><input name="direccion" type="text" value="" size="50" maxlength="50"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Nivel Academico:</td>
      <td><input name="nivel" type="text" value="" size="50" maxlength="50"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Estudios Actuales:</td>
      <td><input name="estudioA" type="text" value="" size="50" maxlength="50"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Seccion:</td>
      <td><select name="seccion" id="seccion">
        <option value="-">Seleccione una Seccion</option>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="D">D</option>
        <option value="E">E</option>
      </select></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Grado o A&ntilde;o:</td>
      <td><select name="grado" id="grado" onchange="cambiar()">
        <option value="-">Seleccione un A&ntilde;o</option>
        <option value="1">1er A&ntilde;o</option>
        <option value="2">2do A&ntilde;o</option>
        <option value="3">3er A&ntilde;o</option>
        <option value="4">4to A&ntilde;o</option>
        <option value="5">5to A&ntilde;o</option>
      </select></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Periodo:</td>
      <td><select name="periodo" id="periodo">
        <option value="2002 - 2005" >2002 - 2005</option>
        <option value="2005 - 2006">2005 - 2006</option>
        <option value="2006 - 2007">2006 - 2007</option>
        <option value="2007 - 2008">2007 - 2008</option>
        <option value="2008 - 2009">2008 - 2009</option>
        <option value="2009 - 2010">2009 - 2010</option>
        <option value="2010 - 2011">2010 - 2011</option>
        <option value="2011 - 2012">2011 - 2012</option>
        <option value="2012 - 2013">2012 - 2013</option>
        <option value="2013 - 2014">2013 - 2014</option>
        <option value="2014 - 2015">2014 - 2015</option>
        <option value="2015 - 2016">2015 - 2016</option>
        <option value="2016 - 2017">2016 - 2017</option>
        <option value="2017 - 2018">2017 - 2018</option>
        <option value="2018 - 2019">2018 - 2019</option>
        <option value="2019 - 2020">2019 - 2020</option>
      </select></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">A&ntilde;os de Servicio:</td>
      <td><input name="servicio" id="servicio" type="text" value="" size="5" maxlength="2"></td>
    </tr>
    <tr valign="baseline">
      <td nowrap align="right">Situacion Laboral:</td>
      <td><input name="situacio" type="text" value="" size="32" maxlength="20"></td>
    </tr>
    <tr valign="baseline">
      <td colspan="2" align="right" nowrap bgcolor="#FF0000"><div align="center">
        <input type="submit" value="Guardar Datos">
      </div></td>
    </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form1">
</form>
<p>&nbsp;</p>
</body>
</html>
<?php
mysql_free_result($docentes);
?>
