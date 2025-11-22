<?php
     class Conectar{
          protected $dbh;

          protected function Conexion(){
               try{
                    $conectar = $this->dbh=new PDO("sqlsrv:Server=localhost;DataBase=dbGestionTickets","sa","Cesba2025");
                    return $conectar;
               } catch(Exception $e){
                    print "Error de Conexion DB". $e->getMessage() ."<br/>";
                    die();
               }
          }
     }
?>