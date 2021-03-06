<?php  

namespace App\DAO;
use Lib\Database\Connection as Connection;
use App\Model\Eventos as Eventos;
use App\Iface\IDAO as IDAO;

require_once dirname(__FILE__).'/../../Lib/Database/Connection.php';
require_once dirname(__FILE__).'/../Model/Eventos.php';
require_once dirname(__FILE__).'/../Interfaces/IDAO.php';


class DAOEventos implements IDAO{
    
    public function create($Eventos){
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = " call sp_inserirEvento ('{$Eventos->getNomeEvento()}', '{$Eventos->getDataEvento()}', '{$Eventos->getLocalEvento()}', '{$Eventos->getProfessorFK()}', '{$Eventos->getCursoFK()}'); ";

		echo "<br>".$sql."<br>";
		try {
            $stmt = $connection->prepare($sql);
            $stmt->execute();   
            
            return TRUE;
        }
        catch(PDOException $e) {
                echo "Error: " . $e->getMessage() ;
            return FALSE;
        }
    	//$conn->makeQuery($sql);
    }

    public function update($Eventos, $idEventos)
    {
    	$connection = new Connection();
    	$connection = $connection->openConnection();
        $sql = " call sp_inserirEvento ('{$idEventos}','{$Eventos->getNomeEvento()}', '{$Eventos->getDataEvento()}', '{$Eventos->getLocalEvento()}', '{$Eventos->getProfessorFK()}', '{$Eventos->getCursoFK()}'); ";

		echo "<br>".$sql."<br>";
 
		try {
            $stmt = $connection->prepare($sql);
            $stmt->execute();   
            
            return TRUE;
        }
        catch(PDOException $e) {
                echo "Error: " . $e->getMessage() ;
            return FALSE;
        }
    	//$conn->makeQuery($sql);
    }
    
    public function delete($idEventos){
    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "call sp_deletarEvento('{$idEventos}')";
    			
		echo "<br>".$sql."<br>";

		try {
            $stmt = $connection->prepare($sql);
            $stmt->execute();   
            
            return TRUE;
        }
        catch(PDOException $e) {
                echo "Error: " . $e->getMessage() ;
            return FALSE;
        }
    	//$conn->makeQuery($sql);
    }
    
    public function find($idEventos){

    	$connection = new Connection();
    	$connection = $connection->openConnection();
    	$sql = "SELECT * FROM Eventos WHERE idEventos = $idEventos";
    			
		echo "<br>".$sql."<br>";

    	try {

            $stmt = $connection->query($sql);
            $this->data = $stmt->fetch();
            
            
        }
        catch(PDOException $e) {
            
                echo "Error: " . $e->getMessage();
        }

        return $this->data;
    }

    public function list()
    {
        $connection = new Connection();
        $connection = $connection->openConnection();
        $sql = "call sp_listarEvento()";
                
        echo "<br>".$sql."<br>";

        try {

            $stmt = $connection->query($sql);
            $this->data = $stmt->fetch();
            
            
        }
        catch(PDOException $e) {
            
                echo "Error: " . $e->getMessage();
        }

        return $this->data;   
    }
        public function listBy($type, $value)
    {
        $connection = new Connection();
        $connection = $connection->openConnection();
        $sql = "SELECT * FROM Aluno WHERE ".$type." = ".$value;
                
        echo "<br>".$sql."<br>";

        try {

            $stmt = $connection->query($sql);
            $this->data = $stmt->fetch();
            
            
        }
        catch(PDOException $e) {
            
                echo "Error: " . $e->getMessage();
        }

        return $this->data;   
    }
}