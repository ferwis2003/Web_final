<?php



class manejador_misiones{
    static function guardarMision($mision){

        if(isset($mision->id) && $mision-> id > 0){
            $sql = "UPDATE misiones SET titulo = ?, pais = ?, descripcion = ?, costo = ?, lat =, lng = ?, fecha = ?  WHERE id = ? ";
            $stmt = mysqli_prepare(conexion::instanciaDb(), $sql);
            mysqli_stmt_bind_param($stmt, "sssssssi", $mision->titulo, $mision->pais, $mision->descripcion , $mision->costo,  $mision->lat, $mision->lng, $mision->fecha, $mision->id);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            return $mision->id;
            
        }
        else{

            $sql = "insert into misiones (titulo, pais, descripcion, costo, lat, lng, fecha) values (?,?,?,?,?,?,?)";
            $stmt = mysqli_prepare(conexion::instanciaDb(),$sql);
            mysqli_stmt_bind_param($stmt, "sssssss",$mision->titulo, $mision->pais, $mision->descripcion, $mision->costo , $mision->lat, $mision->lng, $mision->fecha);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            $id = mysqli_insert_id(conexion::instanciaDb());
            return $id;


        }

    }

    

    static function listaMisiones(){
        $sql = "select id, titulo, pais, fecha, descripcion, costo, lat, lng, fecha from misiones";
        $rs = mysqli_query(conexion::instanciaDb(), $sql);
        $mision = [];
        while($row = mysqli_fetch_object($rs)){
            $mision[] = $row;
        }
        return $mision;
    }

    static function misionPorId($id){
        $Id = (int) $id;
        $sql = "select * from misiones where id = {$id}";
        $rs = mysqli_query(conexion::instanciaDb(), $sql);
        $final = false;
        if(mysqli_num_rows($rs) > 0 ){
            $final = mysqli_fetch_object($rs);
            
        }
        return $final; 

    }

    

}