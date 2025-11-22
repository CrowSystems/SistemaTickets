<?php
    class Categoria extends Conectar{
        /*TODO: Eliminar o cambiar estado a eliminado */
        public function delete_categoria($cat_id){
            $conectar=parent::Conexion();
            $sql="categorias ?";
            $query=$conectar->prepare($sql);
            $sql->bindValue(1,$cat_id);
            $query->execute();
        }
        /*TODO: Registro de datos*/
        public function insert_categoria($suc_id,$cat_nom){
            $conectar=parent::Conexion();
            $sql="categorias ?";
            $query=$conectar->prepare($sql);
            $query->bindValue(1,suc_id);
            $query->bindValue(2,$cat_nom);
            $query->execute();
        }
        /*TODO: Actualizar FDatos */
        public function update_categoria($cat_id,$suc_id,$cat_nom){
            $conectar=parent::Conexion();
            $sql="categorias"
        }
    }
?>