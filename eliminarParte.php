<?php
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

foreach (glob("/opt/lampp/htdocs/grupo1/dao/*.php") as $filename) {
	include_once $filename;
}
// llamamos a los metodos eliminar
if(isset($_REQUEST['id'])){
$id = $_REQUEST['id'];
$alumnoDao= new AlumnoDao();
$alumnoDao->eliminar($id);
$tutorDao= new TutorDao();
$tutorDao->eliminar($id);
$parteDao = new ParteDao();
$parteDao->eliminar($id);
}
include_once 'listarDatos.php';


?>