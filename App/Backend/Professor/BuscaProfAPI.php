<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);
session_start();


use App\Models\Professor as Professor;
use App\DAO\DAOProfessor as DAOProfessor;
use App\Controllers\mainController as mainController;

require_once dirname(__FILE__).'/../../../Lib/Core/Loader.php';

//INSERT


$searchfield = $_POST['searchfield'];
$type = $_POST['type'];


 $buscarByProfessor = new Professor($type, $searchfield);

$ProfessorControl = new mainController();
$Result =$ProfessorControl->listarProfessor($buscarByProfessor);

if ($Result){
		echo '<script> alert("Procurado com sucesso") </script>  ';
}	
else 
	echo '<script> alert("Não Procurado Com Sucesso") </script>  ';



