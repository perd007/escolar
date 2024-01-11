<?php require_once('Connections/conexion.php'); ?>
<?php 
if($validacion==true){
	if($modi==0){
	echo "<script type=\"text/javascript\">alert ('Usted no posee permisos para realizar Modificaciones'); location.href='principal.php' </script>";
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

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {


  $updateSQL = sprintf("UPDATE alumno SET cedula=%s, nombre=%s, sexo=%s, edad=%s, fecha_nac=%s, lugarNac=%s, nacionalidad=%s, procedencia=%s, repitiente=%s, calificacion=%s, camisa=%s, pantalon=%s, zapato=%s, nombreR=%s, cedulaR=%s, direccionR=%s, existeR=%s, edadR=%s, nacionalidadR=%s, ingresoR=%s, nombreR2=%s, cedulaR2=%s, existeR2=%s, edadR2=%s, nacionalidadR2=%s, nivelR2=%s, ocupacionR2=%s, direccionR2=%s, ingresoR2=%s, nombreR3=%s, cedulaR3=%s, edadR3=%s, nacionalidadR3=%s, nivelR3=%s, direccionR3=%s, ingresoR3=%s, vive=%s, parientes=%s, hermanos=%s, zonav=%s, enfer1=%s, enfer2=%s, impedimento=%s, vacunas=%s WHERE id=%s",
  
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
                       GetSQLValueString($_POST['vacunas'], "text"),
                       GetSQLValueString($_POST['id'], "int"));

  mysql_select_db($database_conexion, $conexion);
  $Result1 = mysql_query($updateSQL, $conexion) or die(mysql_error());
  if($Result1){
  echo "<script type=\"text/javascript\">alert ('Datos Actualizados');  location.href='principal.php?link=link112' </script>";
  }else{
  echo "<script type=\"text/javascript\">alert ('Ocurrio un Error');  location.href='principal.php?link=link112' </script>";
  exit;
  }
}


$id=$_GET["id"];
mysql_select_db($database_conexion, $conexion);
$query_alumnos = "SELECT * FROM alumno where id=$id";
$alumnos = mysql_query($query_alumnos, $conexion) or die(mysql_error());
$row_alumnos = mysql_fetch_assoc($alumnos);
$totalRows_alumnos = mysql_num_rows($alumnos);





if($_GET["link2"]=="link1116"){
$rut="link1116";
}else{
$rut="link112";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<link type="text/css" rel="stylesheet" href="calendario/calendario/dhtmlgoodies_calendar.css?random=20051112" media="screen"></LINK>
<SCRIPT type="text/javascript" src="calendario/calendario/dhtmlgoodies_calendar.js?random=20060118"></script>
<style type="text/css">
<!--
.Estilo6 {font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.Estilo7 {	color: #FFFFFF;
	font-style: italic;
	font-weight: bold;
}
-->
</style>
</head>
<script language="javascript">

function validar(){
		if(document.form1.cedula.value!=""){
			 var filtro = /^(\d)+$/i;
		      if (!filtro.test(document.getElementById('cedula').value)){
				alert('Solo puede ingresar numeros en la cedula de alumno!!!');
				return false;
		   		}
				}
				
				
		if(document.form1.edad.value!=""){
			 var filtro = /^(\d)+$/i;
		   	  if (!filtro.test(document.getElementById('edad').value)){
				alert('Solo puede ingresar numeros en la edad de alumno!!!');
				return false;
		   		}
				}
				if(document.form1.edadR.value!=""){
			 var filtro = /^(\d)+$/i;
		   	  if (!filtro.test(document.getElementById('edadR').value)){
				alert('Solo puede ingresar numeros en la edad del padre!!!');
				return false;
		   		}
				}
				if(document.form1.edadR2.value!=""){
			 var filtro = /^(\d)+$/i;
		   	  if (!filtro.test(document.getElementById('edadR2').value)){
				alert('Solo puede ingresar numeros en la edad de la madre!!!');
				return false;
		   		}
				}
				if(document.form1.edadR3.value!=""){
			 var filtro = /^(\d)+$/i;
		   	  if (!filtro.test(document.getElementById('edadR3').value)){
				alert('Solo puede ingresar numeros en la edad del representante legal!!!');
				return false;
		   		}
				}
		if(document.form1.cedulaR.value!=""){
			 var filtro = /^(\d)+$/i;
		      if (!filtro.test(document.getElementById('cedulaR').value)){
				alert('Solo puede ingresar numeros en la cedula del padre!!!');
				return false;
		   		}
				}
				if(document.form1.cedulaR2.value!=""){
			 var filtro = /^(\d)+$/i;
		      if (!filtro.test(document.getElementById('cedulaR2').value)){
				alert('Solo puede ingresar numeros en la cedula de la madre!!!');
				return false;
		   		}
				}
				
			if(document.form1.cedulaR3.value!=""){
			 var filtro = /^(\d)+$/i;
		      if (!filtro.test(document.getElementById('cedulaR3').value)){
				alert('Solo puede ingresar numeros en la cedula del representante legal!!!');
				return false;
		   		}
				}
				
	
				if(document.form1.cedula.value==""){
						alert("Debe Ingresar la Cedula de alumno");
						return false;
				}
				
				
				if(document.form1.edad.value==""){
						alert("Debe Ingresar la Edad del Alumno");
						return false;
				}
				if(document.form1.nombre.value==""){
						alert("Debe Ingresar el Nombre del Alumno");
						return false;
				}
			
				if(document.form1.apellido.value==""){
						alert("Debe Ingresar el Apellido del Alumno");
						return false;
				}
				
				if(document.form1.direccion.value==""){
						alert("Debe Ingresar la Direccion del Alumno");
						return false;
				}
				
					
				
				if(document.form1.cedulaR.value==""){
						alert("Debe Ingresar la Cedula del Padre");
						return false;
				}
				
				if(document.form1.nombreR.value==""){
						alert("Debe Ingresar el Nombre del Padre");
						return false;
				}

				if(document.form1.direccionR.value==""){
						alert("Debe Ingresar la Direccion del Padre");
						return false;
				}
				
				
				if(document.form1.cedulaR2.value==""){
						alert("Debe Ingresar la Cedula de la Madre");
						return false;
				}
				
				if(document.form1.nombreR2.value==""){
						alert("Debe Ingresar el Nombre de la Madre");
						return false;
				}
			
				
				if(document.form1.direccionR2.value==""){
						alert("Debe Ingresar la Direccion de la Madre");
						return false;
				}
				
				
				
				if(document.form1.cedulaR3.value==""){
						alert("Debe Ingresar la Cedula del Representante Legal");
						return false;
				}
				
				if(document.form1.nombreR3.value==""){
						alert("Debe Ingresar el Nombre del Representante Legal");
						return false;
				}
			
				
				if(document.form1.direccionR3.value==""){
						alert("Debe Ingresar la Direccion del Representante Legal");
						return false;
				}
				
				}
			
			
</script>
<body>
<form method="post" name="form1" action="<?php echo $editFormAction; ?>"  onsubmit="return validar()">
  <table width="485" align="center" cellpadding="3">
    <tr valign="baseline">
      <td colspan="2" align="right" nowrap="nowrap"><div align="center"><em><strong>Modificacion de Estudiantes </strong></em></div></td>
    </tr>
    <tr valign="baseline">
      <td colspan="2" align="right" nowrap="nowrap" bgcolor="#FF0000"><div align="center" class="Estilo7">Datos de Estudiante </div></td>
    </tr>
    <tr valign="baseline">
      <td colspan="2" align="right" nowrap="nowrap"><div align="left">Cedula:
        <input name="cedula" id="cedula" type="text" value="<?php echo $row_alumnos['cedula']; ?>" size="9" maxlength="8" />
        &nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;Nombre:
        <input name="nombre" type="text" value="<?php echo $row_alumnos['nombre']; ?>" size="32" maxlength="50" />
      </div></td>
    </tr>
    <tr valign="baseline">
      <td colspan="2" align="right" nowrap="nowrap" bgcolor="#CCCCCC"><div align="left">Sexo:
        <select name="sexo" id="sexo">
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
              </select>
        &nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;Nacionalidad:
        <select name="nacionalidad" id="nacionalidad">
          <option value="Venezolano">Venezolano</option>
          <option value="Extranjero">Extranjero</option>
        </select>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Edad:
        <input name="edad" id="edad" type="text" value="<?php echo $row_alumnos['edad']; ?>" size="2" maxlength="2" />
      </div></td>
    </tr>
    <tr valign="baseline">
      <td colspan="2" align="right" nowrap="nowrap"><div align="left">Repitiente:&nbsp;Si
            <input name="repitiente" type="radio" value="si" />
        No
        <input name="repitiente" type="radio" value="no" />
        &nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;Calificacion Obtenida:
        <input name="calificacion" type="text" id="calificacion" size="5" maxlength="2" />
      </div></td>
    </tr>
    <tr valign="baseline">
      <td colspan="2" align="right" nowrap="nowrap" bgcolor="#CCCCCC"><div align="left">Procedencia:
        <input name="procedencia" type="text" value="<?php echo $row_alumnos['procedencia']; ?>" size="50" maxlength="50" />
      </div></td>
    </tr>
    <tr valign="baseline">
      <td colspan="2" align="right" nowrap="nowrap"><div align="left">Tallas:
        &nbsp;&nbsp;&nbsp;
        <label>Camisa:
          <input name="camisa" type="text" value="<?php echo $row_alumnos['camisa']; ?>" size="5" maxlength="5" />
          </label>
        &nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;Pantalon:
        <input name="pantalon" type="text" value="<?php echo $row_alumnos['pantalon']; ?>" size="5" maxlength="5" />
        &nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Zapato:
        <input name="zapato" type="text" value="<?php echo $row_alumnos['zapato']; ?>" size="5" maxlength="5" />
      </div></td>
    </tr>
    <tr valign="baseline">
      <td align="right" nowrap="nowrap" bgcolor="#CCCCCC"><div align="left">Fecha de Naciento:
        <input name="fecha" type="text" class="Estilo6" id="fecha" value="<?php echo $row_alumnos['fecha_nac']; ?>" size="15" readonly="readonly" />
              <input name="button" type="button"  onclick="displayCalendar(document.forms[0].fecha,'yyyy-mm-dd',this)" value="fecha" />
      </div></td>
    </tr>
    <tr valign="baseline">
      <td align="right" nowrap="nowrap"><div align="left">Lugar de Nacimiento:
        <input name="lugarNac" type="text" value="<?php echo $row_alumnos['lugarNac']; ?>" size="30" maxlength="50" />
      </div></td>
    </tr>
    <tr valign="baseline">
      <td colspan="2" align="right" nowrap="nowrap" bgcolor="#FF0000"><div align="center" class="Estilo7">Ingrese los Datos del Padre </div></td>
    </tr>
    <tr valign="baseline">
      <td colspan="2" align="right" nowrap="nowrap" bgcolor="#CCCCCC"><div align="left">Cedula :
        <input name="cedulaR" type="text" id="cedulaR" value="<?php echo $row_alumnos['cedulaR']; ?>" size="9" maxlength="9" />
        &nbsp;&nbsp;&nbsp;Nombre y Apellido:
        <input name="nombreR" type="text" id="nombreR" value="<?php echo $row_alumnos['nombreR']; ?>" size="40" maxlength="50" />
        </div>
      <div align="left"></div></td>
    </tr>
    <tr valign="baseline">
      <td colspan="2" align="right" nowrap="nowrap"><div align="left">Existe:&nbsp;Si
            <input name="existeR" type="radio" value="si" />
        No
        <input name="existeR" type="radio" value="no" />
        &nbsp;
        &nbsp;&nbsp;&nbsp;edad
        <input name="edadR" type="text" id="edadR" value="<?php echo $row_alumnos['edadR']; ?>" size="2" maxlength="3" />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nacionalidad:
        <select name="nacionalidadR" id="nacionalidadR">
          <option value="Venezolano">Venezolano</option>
          <option value="Extranjero">Extranjero</option>
        </select>
      </div></td>
    </tr>
    <tr valign="baseline">
      <td colspan="2" align="right" nowrap="nowrap" bgcolor="#CCCCCC"><div align="left">Ingreso Economico:
        <input name="ingresoR" type="text" value="<?php echo $row_alumnos['ingresoR']; ?>" size="5" maxlength="10" />
        &nbsp;&nbsp; Direccion:
        <input name="direccionR" type="text" id="direccionR" onkeydown="if(this.value.length &gt;= 200){ alert('Has superado el tama&ntilde;o m&aacute;ximo permitido de este campo'); return false; }" value="<?php echo $row_alumnos['direccionR']; ?>" size="45" maxlength="200" />
      </div></td>
    </tr>
    <tr valign="baseline">
      <td colspan="2" align="right" nowrap="nowrap" bgcolor="#FF0000"><div align="center" class="Estilo7">Ingrese los Datos de la Madre </div></td>
    </tr>
    <tr valign="baseline">
      <td colspan="2" align="right" nowrap="nowrap" bgcolor="#FFFFFF"><div align="left">Cedula :
        <input name="cedulaR2" type="text" id="cedulaR2" value="<?php echo $row_alumnos['cedulaR2']; ?>" size="9" maxlength="9" />
        &nbsp;&nbsp;&nbsp;&nbsp;Nombre y Apellido:
        <input name="nombreR2" type="text" value="<?php echo $row_alumnos['nombreR2']; ?>" size="40" maxlength="50" />
      </div></td>
    </tr>
    <tr valign="baseline">
      <td colspan="2" align="right" nowrap="nowrap" bgcolor="#CCCCCC"><div align="left">Existe:&nbsp;Si
        <input name="existeR2" type="radio" value="si" />
        No
        <input name="existeR2" type="radio" value="no" />
        &nbsp;
        &nbsp;&nbsp;&nbsp;edad
        <input name="edadR2" type="text" id="edadR2" value="<?php echo $row_alumnos['edadR2']; ?>" size="2" maxlength="3" />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nacionalidad:
        <select name="nacionalidadR2" id="nacionalidadR2">
          <option value="Venezolano">Venezolano</option>
          <option value="Extranjero">Extranjero</option>
        </select>
      </div></td>
    </tr>
    <tr valign="baseline">
      <td colspan="2" align="right" nowrap="nowrap" bgcolor="#FFFFFF"><div align="left">Ingreso Economico:
        <input name="ingresoR2" type="text" value="<?php echo $row_alumnos['ingresoR2']; ?>" size="5" maxlength="10" />
        &nbsp;&nbsp; Direccion:
        <input name="direccionR2" type="text" id="direccionR2" onkeydown="if(this.value.length &gt;= 200){ alert('Has superado el tama&ntilde;o m&aacute;ximo permitido de este campo'); return false; }" value="<?php echo $row_alumnos['direccionR2']; ?>" size="45" maxlength="200" />
      </div></td>
    </tr>
    <tr valign="baseline">
      <td colspan="2" align="right" nowrap="nowrap" bgcolor="#CCCCCC"><div align="left">Nivel de Instruccion:
        <input name="nivelR2" type="text" value="<?php echo $row_alumnos['nivelR2']; ?>" size="20" maxlength="20" />
        &nbsp;&nbsp; Ocupacion:
        <input name="ocupacionR2" type="text" value="<?php echo $row_alumnos['ocupacionR2']; ?>" size="30" maxlength="50" />
      </div></td>
    </tr>
    <tr valign="baseline">
      <td colspan="2" align="right" nowrap="nowrap" bgcolor="#FF0000"><div align="center"><span class="Estilo7">Ingrese los Datos del Representante Legal </span></div></td>
    </tr>
    <tr valign="baseline">
      <td colspan="2" align="right" nowrap="nowrap"><div align="left">Cedula :
        <input name="cedulaR3" type="text" id="cedulaR3" value="<?php echo $row_alumnos['cedulaR3']; ?>" size="9" maxlength="9" />
        &nbsp;&nbsp;&nbsp;Nombre y Apellido:
        <input name="nombreR3" type="text" id="nombreR2" value="<?php echo $row_alumnos['nombreR2']; ?>" size="40" maxlength="50" />
      </div></td>
    </tr>
    <tr valign="baseline">
      <td colspan="2" align="right" nowrap="nowrap" bgcolor="#CCCCCC"><div align="left">Edad:
            <?php echo $row_alumnos['edadR3']; ?>
            <input name="edadR3" type="text" id="edadR3" value="" size="2" maxlength="3" />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nacionalidad:
        <select name="nacionalidadR3" id="nacionalidadR3">
          <option value="Venezolano">Venezolano</option>
          <option value="Extranjero">Extranjero</option>
        </select>
      </div></td>
    </tr>
    <tr valign="baseline">
      <td colspan="2" align="right" nowrap="nowrap"><div align="left">Ingreso Economico:
        <input name="ingresoR3" type="text" value="<?php echo $row_alumnos['ingresoR3']; ?>" size="5" maxlength="10" />
        &nbsp;&nbsp; Direccion:
        <input name="direccionR3" type="text" id="direccionR3" onkeydown="if(this.value.length &gt;= 200){ alert('Has superado el tama&ntilde;o m&aacute;ximo permitido de este campo'); return false; }" value="<?php echo $row_alumnos['nombreR3']; ?>" size="45" maxlength="200" />
      </div></td>
    </tr>
    <tr valign="baseline">
      <td colspan="2" align="right" nowrap="nowrap" bgcolor="#CCCCCC"><div align="left">Nivel de Instruccion:
        <input name="nivelR3" type="text" id="nivelR3" value="<?php echo $row_alumnos['nivelR3']; ?>" size="20" maxlength="20" />
        &nbsp;
        Ocupacion:
        <input name="ocupacionR3" type="text" id="ocupacionR3" value="<?php echo $row_alumnos['ocupacionR3']; ?>" size="30" maxlength="50" />
      </div></td>
    </tr>
    <tr valign="baseline">
      <td colspan="2" align="right" nowrap="nowrap" bgcolor="#FF0000"><div align="center"><span class="Estilo7">Situacion de la Pareja </span></div></td>
    </tr>
    <tr valign="baseline">
      <td colspan="2" align="right" nowrap="nowrap"><div align="left">El ni&ntilde;o vive con: &nbsp;
        &nbsp; Padre
        <input name="vive" type="radio" value="padre" />
        &nbsp;
        &nbsp;  Madre
        <input name="vive" type="radio" value="madre" />
        &nbsp;&nbsp; Ambos
        <input name="vive" type="radio" value="ambos" />
        &nbsp;&nbsp; Otro Familiar
        <input name="vive" type="radio" value="Otro Familiar" />
      </div></td>
    </tr>
    <tr valign="baseline">
      <td colspan="2" align="right" nowrap="nowrap" bgcolor="#CCCCCC"><div align="left">N&ordm; de parientes que viven en la familia:
        <input name="parientes" type="text" value="<?php echo $row_alumnos['parientes']; ?>" size="3" maxlength="2" />
        &nbsp;&nbsp; N&ordm; de hermanos:
        <input name="hermanos" type="text" value="<?php echo $row_alumnos['hermanos']; ?>" size="3" maxlength="2" />
      </div></td>
    </tr>
    <tr valign="baseline">
      <td colspan="2" align="right" nowrap="nowrap" bgcolor="#FF0000"><div align="center"><span class="Estilo7">Ubicacion de la Vivienda </span></div></td>
    </tr>
    <tr valign="baseline">
      <td colspan="2" align="right" nowrap="nowrap"><div align="left">Zona Rural
        <input name="zonav" type="radio" value="Zona Rural" />
        &nbsp;
        &nbsp;Zona Urbana
        <input name="zonav" type="radio" value="Zona Urbana" />
        &nbsp;&nbsp; Rancho
        <input name="zonav" type="radio" value="Rancho" />
        &nbsp;&nbsp; Casa
        <input name="zonav" type="radio" value="Casa" />
        &nbsp;&nbsp; Quinta
        <input name="zonav" type="radio" value="Quinta " />
      </div></td>
    </tr>
    <tr valign="baseline">
      <td colspan="2" align="right" nowrap="nowrap" bgcolor="#FF0000"><div align="center"><span class="Estilo7">Aspectos Medicos</span></div></td>
    </tr>
    <tr valign="baseline">
      <td colspan="2" align="right" nowrap="nowrap" bgcolor="#FFFFFF"><div align="left">Alguna enfermedad que padece:
        <input name="enfer1" type="text" value="<?php echo $row_alumnos['enfer1']; ?>" size="50" maxlength="50" />
      </div></td>
    </tr>
    <tr valign="baseline">
      <td colspan="2" align="right" nowrap="nowrap" bgcolor="#CCCCCC"><div align="left">Alguna enfermedad que ha padecido:
        <input name="enfer2" type="text" value="<?php echo $row_alumnos['enfer2']; ?>" size="50" maxlength="50" />
      </div></td>
    </tr>
    <tr valign="baseline">
      <td colspan="2" align="right" nowrap="nowrap"><div align="left">Impedimento Fisico Diagnosticado:
        <input name="impedimento" type="text" value="<?php echo $row_alumnos['impedimento']; ?>" size="50" maxlength="50" />
      </div></td>
    </tr>
    <tr valign="baseline">
      <td colspan="2" align="right" nowrap="nowrap" bgcolor="#CCCCCC"><div align="left">Vacunas recibidas:
        <label></label>
        <input name="vacunas" type="text" id="vacunas" value="<?php echo $row_alumnos['vacunas']; ?>" size="50" maxlength="100" />
      </div></td>
    </tr>
    <tr valign="baseline">
      <td colspan="2" align="right" nowrap="nowrap" bgcolor="#FF0000"><div align="center">
          <input name="submit" type="submit" value="Modificar Datos" />
      </div></td>
    </tr>
  </table>
  <input type="hidden" name="MM_update" value="form1">
  <input type="hidden" name="id" value="<?php echo $row_alumnos['id']; ?>">
</form>
<p>&nbsp;</p>
</body>
</html>
