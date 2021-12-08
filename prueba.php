<meta charset="utf-8">
   <!-- Compiled and minified CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

   <!-- Compiled and minified JavaScript -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
   <script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>          

   <body>
    <div class="container">

      <!-- TÍTULOS -->
      <div class="row">
        <h3 class="header left teal-text">TITULO FORMULARIO</h3>
      </div>
        <div class="row">
        <h5 class="header left teal-text">SUBTITULO FORMULARIO</h5>
      </div>
       
        <form class="col s12">
           
           <!-- CAMPOS INPUT TEXT -->
            <div class="row">
              <div class="input-field col s6">
                <input  id="first_name" type="text" class="validate">
                <label for="first_name">Nombre</label>
              </div>
              <div class="input-field col s6">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Apellidos</label>
              </div>
            </div>
          
            <!-- CAMPOS TEXTAREA -->
              <div class="row">
                <div class="input-field col s12">
                  <textarea id="address" class="materialize-textarea"></textarea>
                  <label for="address">Observaciones</label>
                </div>
               
              </div>
              <!-- CAMPOS FECHA -->
              <div class="row">
                  ddddd
                <div class="input-field col s6">
                     
                <input type = "date" class = "datepicker" />
                <label>Fecha Inicio</label>        
              </div>  
              <div class="input-field col s6">
                            
                <input type = "date" class = "datepicker" />
                <label>Fecha Fin</label> 
              </div>  
              </div>
              <!-- CAMPOS CHECKBOX -->
              <div class="row">
              <p>
                <label>
                  <input type="checkbox" />
                  <span>Opción A</span>
                </label>
                <label>
                  <input type="checkbox" />
                  <span>Opción B</span>
                </label>
                <label>
                  <input type="checkbox" />
                  <span>Opción C</span>
                </label>
              </p>

            </div>
            <!-- CAMPOS RADIOBUTTONS -->
            <div class="row">
              <p>
                <p>
                    <label>
                      <input name="group1" type="radio" checked />
                      <span>Opción 1</span>
                    </label>
                 
                    <label>
                      <input name="group1" type="radio" />
                      <span>Opción 2</span>
                    </label>
                  </p>
              </p>
            </div>

            <!-- CAMPOS SELECT -->
              <div class = "row">
                <label>Opciones</label>
                   <select>
                      <option value = "" disabled selected>Seleccione una fruta</option>
                      <option value = "1">Mango</option>
                      <option value = "2">Naranja</option>
                      <option value = "3">Manzana</option>
                   </select>               
                </div>

              <!-- BOTON -->
            <div class = "row">
              <a class="waves-effect waves-light btn">Aceptar</a>
            </div>
            </form>

             <!-- TABLA -->   
                <div class = "row">
              <table>
                <thead>
                  <tr>
                      <th>Nombre</th>
                      <th>Apellidos</th>
                      <th>Edad</th>
                  </tr>
                </thead>
        
                <tbody>
                  <tr>
                    <td>Alvin</td>
                    <td>Eclair</td>
                    <td>34</td>
                    <td>  <a class="waves-effect waves-light btn  teal lighten-3">Ver</a></td>
                    <td>  <a class="waves-effect waves-light btn">Editar</a></td>
                    <td>  <a class="waves-effect waves-light btn red lighten-2">Eliminar</a></td>
                  </tr>
                  <tr>
                    <td>Alan</td>
                    <td>Jellybean</td>
                    <td>21</td>
                    <td>  <a class="waves-effect waves-light btn  teal lighten-3">Ver</a></td>
                    <td>  <a class="waves-effect waves-light btn">Editar</a></td>
                    <td>  <a class="waves-effect waves-light btn red lighten-2">Eliminar</a></td>
                  </tr>
                  <tr>
                    <td>Jonathan</td>
                    <td>Lollipop</td>
                    <td>56</td>
                    <td>  <a class="waves-effect waves-light btn  teal lighten-3">Ver</a></td>
                    <td>  <a class="waves-effect waves-light btn">Editar</a></td>
                    <td>  <a class="waves-effect waves-light btn red lighten-2">Eliminar</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
            

              <!-- PIE DE PÁGINA -->
            <footer class="page-footer teal lighten-2">
              <div class="row">
                 <div class="col s12 m6 l6">
                    <h5 class="white-text">Aplicación</h5>
                 </div>
                 
              </div>
              
           </footer>
          </div>


    </div>



  </body>

  <script>
  //Evento para el select
    document.addEventListener('DOMContentLoaded', function() {
   var elems = document.querySelectorAll('select');
   var options = document.querySelectorAll('option');
   var instances = M.FormSelect.init(elems, options); })


   //Evento para los campos fecha
   document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.datepicker');
    
  });
 </script>