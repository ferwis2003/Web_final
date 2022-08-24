<?php



class manejador_vehiculos{
    static function guardarVehiculos($mision){

        if(isset($mision->id) && $mision-> id > 0){
            $sql = "UPDATE vehiculos SET placa = ?, marca = ?, modelo = ?, tipo = ?, lat = ?, lng = ?, comentario = ?  WHERE id = ? ";
            $stmt = mysqli_prepare(conexion::instanciaDb(), $sql);
            mysqli_stmt_bind_param($stmt, "sssssssi", $mision->placa, $mision->marca, $mision->modelo , $mision->tipo,  $mision->lat, $mision->lng, $mision->comentario, $mision->id);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            return $mision->id;
            
        }
        else{

            $sql = "insert into vehiculos (placa, marca, modelo, tipo, lat, lng, comentario) values (?,?,?,?,?,?,?)";
            $stmt = mysqli_prepare(conexion::instanciaDb(),$sql);
            mysqli_stmt_bind_param($stmt, "sssssss",$mision->placa, $mision->marca, $mision->modelo, $mision->tipo , $mision->lat, $mision->lng, $mision->comentario);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            $id = mysqli_insert_id(conexion::instanciaDb());
            return $id;


        }

    }

    

    static function listaVehiculos(){
        $sql = "select id, placa, marca, modelo, tipo, lat, lng, comentario from vehiculos";
        $rs = mysqli_query(conexion::instanciaDb(), $sql);
        $mision = [];
        while($row = mysqli_fetch_object($rs)){
            $mision[] = $row;
        }
        return $mision;
    }

    static function vehiculoPorId($id){
        $Id = (int) $id;
        $sql = "select * from vehiculos where id = {$id}";
        $rs = mysqli_query(conexion::instanciaDb(), $sql);
        $final = false;
        if(mysqli_num_rows($rs) > 0 ){
            $final = mysqli_fetch_object($rs);
            
        }
        return $final; 

    }

    

    


    

}