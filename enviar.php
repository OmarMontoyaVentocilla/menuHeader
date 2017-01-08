<?php
require_once 'helperPdo.php';
$driver=new driverBD();
$accion=$_POST['accion'];

if($accion=="1"){
$pregA=$_POST['pregA'];
$pregB=$_POST['pregB'];
$pregC=$_POST['sinresp'];
$query="INSERT INTO pregunta(pregsi,pregno,sinresp,pregsi2,pregno2,pregsinresp2) VALUES(:pregsi,:pregno,:sinresp,'','','')";
$stmr=$driver->getProcedure($query);
$stmr->bindParam(':pregsi',$pregA,PDO::PARAM_INT);
$stmr->bindParam(':pregno',$pregB,PDO::PARAM_INT);
$stmr->bindParam(':sinresp',$pregC,PDO::PARAM_INT);
$resultado=$driver->getExecute($stmr);
echo "se registro:".$resultado;	

}else if($accion=="2"){
$pregA=$_POST['pregA2'];
$pregB=$_POST['pregB2'];
$pregC=$_POST['sinresp2'];
$query="INSERT INTO pregunta(pregsi,pregno,sinresp,pregsi2,pregno2,pregsinresp2) VALUES('','','',:pregsi,:pregno,:sinresp)";
$stmr=$driver->getProcedure($query);
$stmr->bindParam(':pregsi',$pregA,PDO::PARAM_INT);
$stmr->bindParam(':pregno',$pregB,PDO::PARAM_INT);
$stmr->bindParam(':sinresp',$pregC,PDO::PARAM_INT);
$resultado=$driver->getExecute($stmr);
echo "se registro:".$resultado;	

}else{
	echo "no se inserto nada";
}











?>