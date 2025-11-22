<?
/*TODO: LLamando Clases*/
    require_once("../config/conexion.php");
    require_once("../models/Maquinaria.php");
/*TODO: Inicializando Clase */
    $maquinaria = new Maquinaria();

    switch($_GET["op"]){
/*TODO:  */
        case "guardaryeditar":
            if(empty($_POST["cat_id"])){
                $maquinaria->insert_maquinaria($_POST["suc_id"],$_POST["cat_nom"]);
            } else {
                $maquinaria->update_maquinaria($_POST["cat_id"],$_POST["suc_id"],$POST["cat_nom"]);
            }
            break;
/*TODO: Listado de registros formato JSON para Datatable JS */
        case "listar":
            $datos=$maquinaria->get_maquinaria_x_suc_id($_POST["suc_id"]);
            $data=Array();
            foreach($datos as $row){
                $sub_array = array();
                $sub_array = $row["cat_nom"];
                $sub_array = "Editar";
                $sub_array = "Eliminar";
                $data[] = $sub_array;
            }

            $results = array(
                "sEcho"=>1,
                "iTotalRecords"=>count($data),
                "itotalDisplayRecors"=>count($data),
                "aaData"=>$data);
            echo json_encode($results);
            break;

        case "mostrar":
            $datos=$maquinaria->get_maquinaria_x_suc_id($_POST["cat_id"]);
            if (is_array($datos)==true and count($datos)>0){
                foreach($datos as $row){
                    $output["cat_id"] = $row["cat_id"];
                    $output["suc_id"] = $row["suc_id"];
                    $output["cat_nom"] = $row["cat_nom"];
                }
            }
            break;
        case "eliminar":
        break;
    }
?>