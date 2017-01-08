<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>inicio</title>
	<link rel="stylesheet" href="sweetalert.css">
  <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body >

<div id="Preg2" style="display: none;">
<form method="POST" id="form2" >
<h3  class="pre">Pregunta 2</h3>
<div class="mover">
<input type="hidden" name="accion" value="2">
<input type="hidden" name="pregA2" id="pregAH2"  value="1" >
<input type="hidden" name="pregB2" id="pregBH2"  value="1">
<input type="hidden" name="sinresp2" id="pregCH2"   value="0">

   A: <input type="checkbox" value="1" id="pregA2" name="preg2A"   onclick="DeshabilitarCPreguntaA2();" /> Alianza Lima<br/>
   B: <input type="checkbox" value="1" id="pregB2" name="preg2B"    onclick="DeshabilitarCPreguntaB2();"  /> Universitario<br/>
   C: <input type="checkbox" value="0" id="pregC2" name="sinresp2"  onclick="DeshabilitarAb2();" /> Ninguno<br/>
<br>
<button type="submit" name="procesa" id="btn2">Procesa</button>
</div>
</form>  
</div>



<div id="Preg1">
<form method="POST" id="form" >
<h3 class="pre">Pregunta 1</h3>
<div class="mover">
<input type="hidden" name="accion" value="1">
<input type="hidden" name="pregA" id="pregAH"    value="1" >
<input type="hidden" name="pregB" id="pregBH"    value="1">
<input type="hidden" name="sinresp" id="pregCH"  value="0">

   A: <input type="checkbox" value="1" id="pregA" name="pregA"   onclick="DeshabilitarCPreguntaA();" /> Barcelona<br/>
   B: <input type="checkbox" value="1" id="pregB" name="pregB"   onclick="DeshabilitarCPreguntaB();"  /> Real Madrid<br/>
   C: <input type="checkbox" value="0" id="pregC" name="sinresp" onclick="DeshabilitarAb();" /> ninguno<br/>
<br>
<input type="submit" name="Enviar" id="btn" >  
</div>
</form>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="sweetalert.min.js"></script>
<script type="text/javascript" src="escript.js"></script>
</body>
</html>