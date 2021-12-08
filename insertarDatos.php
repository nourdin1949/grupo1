
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Formulario Insertar Parte</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>          
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<?php

ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);
foreach (glob("/opt/lampp/htdocs/grupo1/dao/*.php") as $filename) {
	include_once $filename;
}

foreach (glob("/opt/lampp/htdocs/grupo1/DTO/*.php") as $filename) {
	include_once $filename;
}
  if($_REQUEST['alumno']!="" && $_REQUEST['curso']!="" && $_REQUEST['nombre']!="" && 
  $_REQUEST['direccion']!="" && $_REQUEST['cp']!="" && $_REQUEST['ciudad']!="" &&
  $_REQUEST['fecha_llamada']!="" &&  $_REQUEST['fecha_suceso']!="" &&  $_REQUEST['fecha_rellenar']!=""  &&
  $_REQUEST['horaCita']!="" && $_REQUEST['personaCitada']!="" && $_REQUEST['profesor']!=""  ){

 
          $alumnoDao = new AlumnoDao();
          $tutorDao = new TutorDao();
          $parteDao = new ParteDao();
          function cargarAlumnoDTO(){
              
              $alumnoDTO = new Alumno(0,$_REQUEST['alumno'],$_REQUEST['curso']);

              return $alumnoDTO;
          }
          function cargarTutorDTO(){
              
            $tutorDTO = new Tutor(0,$_REQUEST['nombre'],$_REQUEST['direccion'],$_REQUEST['cp'],$_REQUEST['ciudad']);
              return $tutorDTO;
          }
          function cargarParteDTO(){
            $motivos="";
            
            foreach($_REQUEST['motivos'] as $llave => $valor){
              $motivos .=$valor." "; 
            }
            if(isset($_REQUEST['fecha_llamada'])){
              $ar = explode("-", $_REQUEST['fecha_llamada']);
              $fecha_llamada=implode("", $ar);
            }
            if(isset($_REQUEST['fecha_rellenar'])){
              $ar = explode("-", $_REQUEST['fecha_rellenar']);
              $fecha_rellenar=implode("", $ar);
            }
          if(isset($_REQUEST['fecha_suceso'])){
            $ar = explode("-", $_REQUEST['fecha_suceso']);
            $fecha_suceso=implode("", $ar);
          } 
          if(isset($_REQUEST['horaCita'])){
            $ar = explode(":", $_REQUEST['horaCita']);
            
            $horacita=implode("", $ar);
          } 

          
          $parteDTO = new Parte(0,$motivos,$fecha_suceso,$fecha_llamada,$fecha_rellenar,$_REQUEST['personaCitada'],$horacita,$_REQUEST['profesor']);

            return $parteDTO;
          }

                $alumnoDao->insertar(cargarAlumnoDTO());
                
                $tutorDao->insertar(cargarTutorDTO());
                  
                $parteDao->insertarParte(cargarParteDTO());
        }else{
          echo  "<script languaje='JavaScript'>alert('Todos los campos son obligatorios!')</script>";
        }
        include_once 'formulario.php';
  ?>