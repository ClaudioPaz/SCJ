/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

  $(document).ready(function(){

    $("#CargaAcademica").click(function(event) {
      event.preventDefault();
      alert("has presionado CargaAcademica");
          
      $("#div_contenido").load("pages/CargaAcademica/CargaAcademica.php");
      });
    $("#RegistroEstudiante").click(function(event) {
      event.preventDefault();
          
      $("#contenedor" ).load( //Pantalla para ingresar un estudiante
                            );
      }); 
    $("#TipoEstudiante").click(function(event) {
      event.preventDefault();
          
      $("#contenedor" ).load( // Pantalla para modificar el tipo de estudiante
                            );
      }); 

    $("#nuevaSolicitud").click(function(event) {
      event.preventDefault();
      $("#contenedor").load(// Pantalla para ingresar una nueva solicitud
                            );
      });

    $("#SolicitudEstudiante").click(function(event) {
      event.preventDefault();
      $("#contenedor").load(// Pantalla para ingresar una solicitud por estudiante
                            );
      }); 

    $("#BusquedaAvanzada").click(function(event) {
      event.preventDefault();
      $("#contenedor").load(// Pantalla para Hacer una busqueda avanzada
                            );
      });   
});
