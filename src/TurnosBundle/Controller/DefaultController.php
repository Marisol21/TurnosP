<?php

namespace TurnosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use TurnosBundle\Funciones\DefaultFunciones;
use TurnosBundle\Model\Model;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\HttpFoundation\Session\Session;


class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('TurnosBundle:Default:index.html.twig');
    }

    /**
     * @Route("/loginAdmin", name="loginAdmin")
     */
    public function loginAdminAction(Request $request)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $usrAdmin = $_POST['usuarioAdmin'];
            $pswAdmin = $_POST['contrasenaAdmin'];
            $fn = new DefaultFunciones($usrAdmin, $pswAdmin);
            if ($row = $fn->validausr($usrAdmin, $pswAdmin)) {
                $session = $request->getSession();
                $session->start();
                $this->get('session')->set('idAdmin', $row['idAdmin']);
                die("1");
            } else
                die("0");
        }
        return $this->render('TurnosBundle:Default:loginAdmin.html.twig');
    }

    /**
     * @Route("AdminCoord", name="AdminCoord")
     */
    public function AdminCoordAction(Request $request)
    {
        $session =$request->getSession();
        if($session->has("idAdmin"))
            return $this->render('TurnosBundle:Default:adminCoors.html.twig');
        else{
            $this->get('session')->getFlashbag()->add(
                'mensaje','Debe estar logueado para ver este contenido'
            );
            return $this->redirect($this->generateUrl('loginAdmin'));
        }
    }

    /**
     * @Route("LlenarTablaCoordinadores", name="LlenarTablaCoordinadores")
     */
    public function LlenarTablaCoordinadoresAction()
    {
        $params = [
            'Coordinadores' => $this->ObtenerCoordinadores()
        ];
        return $this->render('TurnosBundle:Default:TablaCoordinadores.html.twig', $params);
    }

    public function ObtenerCoordinadores()
    {
        $conn = New Model();
        $sql = "Select * from coordinador order by NomCoord;";
        $result = $conn->consulta($sql);
        $coordinadores = [];
        while($row = $conn->fetch_assoc($result)){
            $coordinadores[] = $row;
        }
        $conn->close();
        return $coordinadores;
    }

    /**
     * @Route("Agregar", name="Agregar")
     * @Method({"POST"})
     */
    public function AgregarAction()
    {
        $nomcoordinador = $_POST['nombreCoor'];
        $usr = $_POST['usrCoor'];
        $pwd = $_POST['pwdCoor'];
        if($this->AgregarCoordinador($nomcoordinador,$usr,$pwd))
            die("1");
    }

    public function AgregarCoordinador($nom,$usr,$pwd)
    {
        $conn = New Model();
        $sql = "Insert into coordinador (NomCoord,UsrCoord,PwdCoord) values ('$nom','$usr','$pwd');";
        $result = $conn -> consulta($sql);
        return $result;
        $conn->close();
    }

    /**
     * @Route("Guardar", name="Guardar")
     * @Method({"POST"})
     */
    public function GuardarAction()
    {
        $idcoor = $_POST['idCoor'];
        $nomcoor = $_POST['nombreCoor'];
        $usrcoor = $_POST['usrCoor'];
        $pwdcoor = $_POST['pwdCoor'];
        if($this->ActualizarCoordinador($idcoor,$nomcoor,$usrcoor,$pwdcoor))
            die("1");
    }

    public function ActualizarCoordinador($idc,$nomc,$usrc,$pwdc)
    {
        $conn = New Model();
        $sql = "Update coordinador set NomCoord='$nomc', UsrCoord='$usrc', PwdCoord='$pwdc' where idCoord='$idc'";
        $result = $conn->consulta($sql);
        return $result;
        $conn->close();
    }

    /**
     * @Route("Eliminar", name="Eliminar")
     * @Method({"POST"})
     */
     public function EliminiarAction()
     {
             $idcoor = $_POST['idCoor'];
         if($this->EliminarCoordinador($idcoor))
             die("1");
     }

    public function EliminarCoordinador($idco)
    {
        $conn = New Model();
        $sql = "Delete From coordinador where idCoord='$idco'";
        $result = $conn->consulta($sql);
        return $result;
        $conn->close();
    }

    /**
     * @Route("AdminCarr", name="AdminCarr")
     */
    public function AdminCarrAction(Request $request)
    {
        $session =$request->getSession();
        if($session->has("idAdmin"))
            return $this->render('TurnosBundle:Default:adminCarreras.html.twig');
        else{
            $this->get('session')->getFlashbag()->add(
                'mensaje','Debe estar logueado para ver este contenido'
            );
            return $this->redirect($this->generateUrl('loginAdmin'));
        }
    }

    /**
     * @Route("LlenarTablaCarreras", name="LlenarTablaCarreras")
     */
    public function LlenarTablaCarrerasAction()
    {
        $params = [
            'Carreras' => $this->ObtenerCarrera()
        ];
        return $this->render('TurnosBundle:Default:TablaCarreras.html.twig', $params);
    }

    public function ObtenerCarrera()
    {
        $conn = New Model();
        $sql = "Select * from carrera order by NomCarrera;";
        $result = $conn->consulta($sql);
        $carreras = [];
        while($row = $conn->fetch_assoc($result)){
            $carreras[] = $row;
        }
        $conn->close();
        return $carreras;
    }

    /**
     * @Route("AgregarCrr", name="AgregarCrr")
     * @Method({"POST"})
     */
    public function AgregarCrrAction()
    {
        $carrera = $_POST['nombreCarrera'];
        $turno = $_POST['notur'];
        $idcod = $_POST['idco'];
        if($this->AgregarCarrera($carrera,$turno,$idcod))
            die("1");
    }

    public function AgregarCarrera($nomC,$trn,$idcod)
    {
        $conn = New Model();
        $sql = "Insert into carrera (NomCarrera,NoTurno,idCoord) values ('$nomC',$trn,$idcod);";
        $result = $conn -> consulta($sql);
        return $result;
        $conn->close();
    }
}
