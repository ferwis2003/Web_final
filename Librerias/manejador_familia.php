<?php



class manejador_familia{
    static function guardarFamilia($mision){

        if(isset($mision->id) && $mision-> id > 0){
            $sql = "UPDATE familia SET cedula = ?, nombre = ?, apellido = ?, sexo = ?, nacimiento = ?, direccion = ?, telefono = ?, email = ?, estadocivil = ?, tiposangre = ?, alergias = ?, comentario = ?, estado = ?  WHERE id = ? ";
            $stmt = mysqli_prepare(conexion::instanciaDb(), $sql);
            mysqli_stmt_bind_param($stmt, "sssssssssssssi", $mision->cedula, $mision->nombre, $mision->apellido , $mision->sexo,  $mision->nacimiento, $mision->direccion, $mision->telefono, $mision->email, $mision->estadocivil, $mision->tiposangre, $mision->alergias, $mision->comentario, $mision->estado, $mision->id);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            return $mision->id;
            
        }
        else{

            $sql = "insert into familia (cedula, nombre, apellido, sexo, nacimiento, direccion, telefono, email,estadocivil,tiposangre,alergias, comentario, estado ) values (?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = mysqli_prepare(conexion::instanciaDb(),$sql);
            mysqli_stmt_bind_param($stmt, "sssssssssssss",$mision->cedula, $mision->nombre, $mision->apellido , $mision->sexo,  $mision->nacimiento, $mision->direccion, $mision->telefono, $mision->email, $mision->estadocivil, $mision->tiposangre, $mision->alergias, $mision->comentario, $mision->estado);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            $id = mysqli_insert_id(conexion::instanciaDb());
            return $id;


        }

    }

    

    static function listaFamilia(){
        $sql = "select id, cedula, nombre, apellido, sexo, nacimiento, direccion, telefono, email,estadocivil,tiposangre,alergias, comentario, estado from familia";
        $rs = mysqli_query(conexion::instanciaDb(), $sql);
        $mision = [];
        while($row = mysqli_fetch_object($rs)){
            $mision[] = $row;
        }
        return $mision; 
    }

    static function familiaPorId($id){
        $Id = (int) $id;
        $sql = "select * from familia where id = {$id}";
        $rs = mysqli_query(conexion::instanciaDb(), $sql);
        $final = false;
        if(mysqli_num_rows($rs) > 0 ){
            $final = mysqli_fetch_object($rs);
            
        }
        return $final; 

    }

    

}