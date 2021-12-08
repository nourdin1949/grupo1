<?php 

foreach (glob("/opt/lampp/htdocs/grupo/dao/*.php") as $filename) {
	include_once $filename;
}


foreach (glob("/opt/lampp/htdocs/grupo/DTO/*.php") as $filename) {
	include_once $filename;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prueba Crud Alumno</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body><center>
    <form action="#" method="POST" >
         <p> ID: <input type="number" name="id"/>  

</p>
            
    <p> Nombre: <input type="text" name="nombre"/>  

</p>

<p> Curso: <input type="text" name="curso"/>  

</p>
<p><input type="submit" value="Insertar" name="insertarbtn"></p>
<p><input type="submit" value="Modificar" name="modificarbtn"></p>
<p><input type="submit" value="Eliminar" name="eliminarbtn"></p>

    </form>


    <!--Esta parte de abajo es la funcion principal de todos los dao-->
    <?php 
    $alumnoDao = new AlumnoDao();
    $tutorDao = new TutorDao();
    function cargarDTO(){
        
        $alumnoDTO = new Alumno($_REQUEST['id'],$_REQUEST['nombre'],$_REQUEST['curso']);
  
        return $alumnoDTO;
    }
        if(isset($_REQUEST['insertarbtn'])){
            
            $alumnoDao->insertar(cargarDTO());
        }
        if(isset($_REQUEST['modificarbtn'])){
            $alumnoDao->modificar(cargarDTO());
        }
        if(isset($_REQUEST['eliminarbtn'])){
            $alumnoDao->eliminar(cargarDTO());
        }
        //$stmt = $alumnoDao->listar();
        $stmt =$tutorDao->listar();
        foreach ($stmt as $row){
          
            
                
                    echo "</br>Alumno: ".$row['nombre'] ." Tutor ".$row['nombrePadre'];
        }


    ?>
    </center>
</body>
</html>