<?php
namespace Models;
require_once '../vendor/autoload.php';
use App\Database;
 
 class Camper extends Database {

    private $idCamper;
    private $nombreCamper;
    private $apellidoCamper;
    private $fechaNac;
    private $idReg;

    public function __construct($dbKey,$idCamp="", $nombreCamp="", $apellidoCamper="", $fechaNac="", $idReg=""){
        $this->idCamper = $idCamp;
        $this->nombreCamper = $nombreCamp;
        $this->apellidoCamper = $apellidoCamper;
        $this->fechaNac = $fechaNac;
        $this->idReg = $idReg;

        parent::__construct($dbKey);
    }
    public function setIdCamper($id){
        $this->idCamper = $id;
    }
    public function setNombreC($nombre){
        $this->nombreCamper = $nombre;
    }
    public function setApellidoC($id){
        $this->apellidoCamper = $id;
    }
    public function setFechaNac($fecha){
        $this->fechaNac = $fecha;
    }
    public function setIdReg($id){
        $this->idReg = $id;
    }
    


    public function registarCamper(){

            $sql = "INSERT INTO `campers`(`idCamper`, `nombreCamper`, `apellidoCamper`, `fechaNac`, `idReg`) VALUES (?,?,?,?,?)";
            $stm = $this->conn->prepare($sql);
            $stm->execute([$this->idCamper, $this->nombreCamper,$this->apellidoCamper,$this->fechaNac,$this->idReg]);
        
    }

    public function getRegiones(){
        $sql = "SELECT * FROM region";
        $stm = $this->conn->prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }





 }