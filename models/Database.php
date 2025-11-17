<?php
use PDO;
use PDOException;

class CDatabase {

     function ConexionDB(){
          private $host='localhost';
          private $db    = 'dbGestionTickets';
          private $user  = 'sa';
          private $pass  = 'Cesba2025';
          private $charset    = 'utf8mb4';
          private $pdo   = 1433;

          try{
               $conn = new PDO("sqlsrv:Server=$host,$puerto");
               echo "Se conecto correctamente a la base de datos";
          }
          catch(PDOException $exp){
               echo ("No se logró conectar correctamente con la base de datos: $db, error:$exp");
          }
          return $conn;
     }
}
?>