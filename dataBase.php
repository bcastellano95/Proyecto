<?php

class dataBase {

    private $usuario;
    private $contraseña;
    private $servidor;
    private $nomBD;

    function dataBase() {
        $this->usuario = "root";
        $this->contraseña = "";
        $this->servidor = "localhost";
        $this->nomBD = "guias_latinwow";
        $this->link = "";
    }

    function conectar() {
        $this->link = mysqli_connect($this->servidor, $this->usuario, $this->contraseña);
        mysqli_select_db($this->link, $this->nomBD);
    }

    function insertar($fila = array(), $tabla = "") {
        $valoresFila = "";
        while (list($key, $val) = each($fila)) {
            $valoresFila = $valoresFila . "'" . $val . "', ";
        }

        $valoresFila = substr($valoresFila, 0, -2);

        mysqli_query($this->link, "insert into " . $tabla . " values (" . $valoresFila . ");")or die(" la consulta fallo " . mysqli_error($this->link));
    }

    function consultar($tabla = "", $campo = "", $dato = "") {
        if ($campo == "") {
            $query = "select * from " . $tabla;
        } else if ($dato == "") {
            $query = "select " . $campo . " from " . $tabla;
        } else {
            $query = "select * from " . $tabla . " where " . $campo . " = " . $dato;
            echo $query;
        }
        $res = mysqli_query($this->link, $query);
        
        return $res;
    }

    function consultarlog($tabla = "", $userName = "", $pass = "") {

        $query = "select * from " . $tabla . " where nombre_usuario = '" . $userName . "' and " . " password = '" . $pass . "' ;";
        $res = mysqli_query($this->link, $query);

        return $res;
    }

    /* function consultarActivo($tabla = "", $campo = "", $dato = "",$campo2="",$dato2="") {

      $query = "select * from " . $tabla . " where " . $campo . " = " . $dato . " and ". $campo2 ." = " .$dato2;

      $res = mysqli_query($this->link, $query);

      return $res;

      }
      function actualizarClientes($fila = array(), $tabla = "", $idCliente = "") {
      $actualizar = "update " . $tabla . " set nombre='$fila[0]', "
      . "correo='$fila[1]', num_hijos='$fila[2]' "
      . "where id_cliente='$idCliente'";

      mysqli_query($this->link, $actualizar) or die(" la actualizacion fallo " . mysqli_error($this->link));
      }

      function eliminarCliente($idCliente = "", $tabla = "") {
      $eliminar = " delete from " . $tabla . " where id_cliente = " . $idCliente;

      mysqli_query($this->link, $eliminar) or die(" la actualizacion fallo " . mysqli_error($this->link));
      } */
}

?> 