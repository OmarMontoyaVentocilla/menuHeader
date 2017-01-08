<?php
require_once 'helperPdo.php';
$driver=new driverBD();

$pregA=$_POST['pregA2'];
$pregB=$_POST['pregB2'];
$pregC=$_POST['sinresp2'];


$query="INSERT INTO pregunta2(pregsi2,pregno2,presinresp) VALUES(:pregsi,:pregno,:sinresp)";
$stmr=$driver->getProcedure($query);
$stmr->bindParam(':pregsi',$pregA,PDO::PARAM_INT);
$stmr->bindParam(':pregno',$pregB,PDO::PARAM_INT);
$stmr->bindParam(':sinresp',$pregC,PDO::PARAM_INT);
$resultado=$driver->getExecute($stmr);

echo "se registro:".$resultado;	

?>