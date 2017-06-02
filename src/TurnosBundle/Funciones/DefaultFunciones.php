<?php

namespace TurnosBundle\Funciones;

use TurnosBundle\Model\Model;

class DefaultFunciones{

    public function validausr($usuario,$contra){
        $conn = new Model();
        $sql = "Select idAdmin, NomAdmin from turnos.administrador where usrAdmin = '$usuario' and pwdAdmin = '$contra'";
        $result = $conn->consulta($sql);
        $row = $conn->fetch_assoc($result);
        $conn->close();
        return $row;
    }
}