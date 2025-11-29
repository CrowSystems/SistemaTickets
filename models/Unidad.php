<?php
    class Unidad extends Conectar{
        // TODO: Listar Registros
        public function get_unidad_x_suc_id($suc_id){
            $conectar=parent::Conexion();
            $sql="SP_L_UNIDAD_01 ?";
            $query=$conectar->prepare($sql);
            $query->bindValue(1,$suc_id);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }

        // TODO: Listar Registo por ID en especifico
        public function get_unidad_x_cat_id($cat_id){
            $conectar=parent::Conexion();
            $sql="SP_L_UNIDAD_02 ?";
            $query=$conectar->prepare($sql);
            $query->bindValue(1,$cat_id);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }

        // TODO: Eliminar o cambiar estado a eliminado
        public function delete_unidad($cat_id){
            $conectar=parent::Conexion();
            $sql="SP_D_UNIDAD_01";
            $query=$conectar->prepare($sql);
            $query->bindValue(1,$cat_id);
            $query->execute();
        }

        // TODO: Registro de datos
        public function insert_unidad($suc_id,$cat_nom){
            $conectar=parent::Conexion();
            $sql="SP_I_UNIDAD_01 ?,?";
            $query=$conectar->prepare($sql);
            $query->bindValue(1,$suc_id);
            $query->bindValue(2,$cat_nom);
            $query->execute();
        }

        // TODO: Actualizar Datos
        public function update_unidad($cat_id,$suc_id,$cat_nom){
            $conectar=parent::Conexion();
            $sql="SP_I_UNIDAD_01 ?,?,?";
            $query=$conectar->prepare($sql);
            $query->bindValue(1,$cat_id);
            $query->bindValue(2,$suc_id);
            $query->bindValue(3,$cat_nom);
            $query->execute();
        }
    }
?>