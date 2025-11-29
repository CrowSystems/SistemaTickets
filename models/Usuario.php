<?php
class Usuario extends Conectar{
    // TODO: Listar Registros
    public function get_usuario_x_suc_id($suc_id){
            $conectar=parent::Conexion();
            $sql="SP_L_USUARIO_01 ?";
            $query=$conectar->prepare($sql);
            $query->bindValue(1,$suc_id);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }
         // TODO: Listar Registo por ID en especifico
        public function get_usuario_x_usu_id($usu_id){
            $conectar=parent::Conexion();
            $sql="SP_L_USUARIO_02 ?";
            $query=$conectar->prepare($sql);
            $query->bindValue(1,$usu_id);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }

        // TODO: Eliminar o cambiar estado a eliminado
        public function delete_usuario($usu_id){
            $conectar=parent::Conexion();
            $sql="SP_D_USUARIO_01";
            $query=$conectar->prepare($sql);
            $query->bindValue(1,$usu_id);
            $query->execute();
        }

        // TODO: Registro de datos
        public function insert_usuario($suc_id,$usu_nom){
            $conectar=parent::Conexion();
            $sql="SP_I_UNIDAD_01 ?,?";
            $query=$conectar->prepare($sql);
            $query->bindValue(1,$suc_id);
            $query->bindValue(2,$usu_nom);
            $query->execute();
        }

        // TODO: Actualizar Datos
        public function update_usuario($usu_id,$suc_id,$usu_nom){
            $conectar=parent::Conexion();
            $sql="SP_I_UNIDAD_01 ?,?,?";
            $query=$conectar->prepare($sql);
            $query->bindValue(1,$usu_id);
            $query->bindValue(2,$suc_id);
            $query->bindValue(3,$usu_nom);
            $query->execute();
        }

// TODO: Acceso al sistema
    public function login(){
        $conectar=parent::Conexion();
        if(isset($_POST["enviar"])){
            $correo = $_POST["usu_correo"];
            $pass = $_POST["usu_pass"];
            if(empty($correo) and empty($pass)){
                exit();
            }else{
                $sql="SP_L_USUARIO_01 ?,?";
                $query=$conectar->prepare($sql);
                $query->bindValue(1,$correo);
                $query->bindValue(2,$pass);
                $query->execute();
                $resultado = $query->fetch();
                if (is_array($resultado) and count($resultado)>0){
                    $_SESSION["USU_ID"]=$resultado["USU_ID"];

                    header("Location:".Conectar::ruta()."view/home/");
                }else{
                    exit();
                }
            }
        }else{
            exit();
        }
    }
}
?>