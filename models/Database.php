<?php
$serverName = "CIJM\SQLCIDJ"; //serverName\instanceName
$connectionInfo = array( "Database"=>"dbGestionTickets", "UID"=>"sa", "PWD"=>"Cesba2025");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Conexión establecida.<br />";
}else{
     echo "La conexión no pudo ser establecida.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>