<?php 

foreach (glob("/opt/lampp/htdocs/grupo1/dao/*.php") as $filename) {
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
            
    <p> Nombre: <input type="text" name="nombrePadre"/>  

</p>

<p> Direccion: <input type="text" name="direccion"/>  

</p>

<p> codigo postal: <input type="text" name="cp"/>  

</p>

<p> Ciudad: <input type="text" name="ciudad"/>  

</p>
<p><input type="submit" value="Insertar" name="insertarbtn"></p>
<p><input type="submit" value="Modificar" name="modificarbtn"></p>
<p><input type="submit" value="Eliminar" name="eliminarbtn"></p>

    </form>


    <!--Esta parte de abajo es la funcion principal de todos los dao-->
    <?php 

ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);
    $tutorDao = new TutorDao();
    
    function cargarDTO(){
        
        $tutorDTO = new Tutor($_REQUEST['id'],$_REQUEST['nombrePadre'],$_REQUEST['direccion'],$_REQUEST['cp'],$_REQUEST['ciudad']);
  
        return $tutorDTO;
    }
        if(isset($_REQUEST['insertarbtn'])){
            
            $tutorDao->insertar(cargarDTO());
        }
        if(isset($_REQUEST['modificarbtn'])){
            $tutorDao->modificar(cargarDTO());
        }
        if(isset($_REQUEST['eliminarbtn'])){
            $tutorDao->eliminar(cargarDTO());
        }
$stmt =$tutorDao->listar();
foreach($stmt as $row){
    echo "<br>".$row['direccion'].$row['codigo_postal'];
}


    ?>
    </center>
</body>
</html>