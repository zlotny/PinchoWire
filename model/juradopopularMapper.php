<?php

include_once("../resources/code/bd_manage.php");


class JuradoPopularMapper{

    public static function comentar_pincho($pincho, $textcomentario, $idemail){
        global $connectHandler;
        $date = date('Y-m-d H:i:sa');
        $query = "INSERT INTO comentario (juradopopular_idemail, pincho_idnombre, contenido, fecha) VALUES ('$idemail','$pincho','$textcomentario', '$date')";
        echo($query);

        if(mysqli_query($connectHandler, $query)){
            echo("Guardado satisfactorio");
        }
        else{echo("Error en el guardado");}
    }

    public static function eliminar_comentario($idpincho, $idemail){
        //Abrir conexion BD
        global $connectHandler;
        $query = "DELETE FROM comentario WHERE (idcomentario = $idpincho AND juradopopular_idemail = '$idemail')";
        echo($query);

        if(mysqli_query($connectHandler, $query)){
            echo("Comentario eliminado satisfactoriamente");
        }
        else{echo("Error en el eliminado del pincho");}
    }


}

?>