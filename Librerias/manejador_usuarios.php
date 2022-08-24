<?php



class manejador_usuarios{
    static function guardarUsuario($mision){

        if(isset($mision->id) && $mision-> id > 0){
            $sql = "UPDATE usuarios SET correo = ?, nombre = ?, pass = ? WHERE id = ? ";
            $stmt = mysqli_prepare(conexion::instanciaDb(), $sql);
            mysqli_stmt_bind_param($stmt, "sssi", $mision->correo, $mision->nombre, $mision->pass,  $mision->id);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            return $mision->id;
            
        }
        else{

            $sql = "insert into usuarios (correo, nombre, pass) values (?,?,?)";
            $stmt = mysqli_prepare(conexion::instanciaDb(),$sql);
            mysqli_stmt_bind_param($stmt, "sss",$mision->correo, $mision->nombre, $mision->pass  );
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            $id = mysqli_insert_id(conexion::instanciaDb());
            return $id;


        }

    }

    

    static function listaUsuarios(){
        $sql = "select id, correo, nombre, pass from usuarios";
        $rs = mysqli_query(conexion::instanciaDb(), $sql);
        $mision = [];
        while($row = mysqli_fetch_object($rs)){
            $mision[] = $row;
        }
        return $mision;
    }

    static function usuarioPorId($id){
        $Id = (int) $id;
        $sql = "select * from usuarios where id = {$id}";
        $rs = mysqli_query(conexion::instanciaDb(), $sql);
        $final = false;
        if(mysqli_num_rows($rs) > 0 ){
            $final = mysqli_fetch_object($rs);
            
        }
        return $final; 

    }
}