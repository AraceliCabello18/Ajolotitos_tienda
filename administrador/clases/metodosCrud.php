
<?php

class metodos{
    public function mostrarDatos($sql){
        $c= new conectar();
        $conexion=$c->conexion();
        $result=mysqli_query($conexion,$sql);
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }

    public function eliminaUser($id){
        $c=new conectar();
        $conexion=$c->conexion();

        $sql="DELETE FROM t_usuarios
                WHERE id='$id'";
        return $result=mysqli_query($conexion,$sql);

    }
    
}