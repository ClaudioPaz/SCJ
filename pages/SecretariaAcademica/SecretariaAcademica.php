<?php

    $maindir = "../../";

  if(isset($_GET['contenido']))
    {
      $contenido = $_GET['contenido'];
    }
  else
    {
      $contenido = 'secretaria_academica';
    }

  require_once($maindir."funciones/check_session.php");

  require_once($maindir."funciones/timeout.php");

  require_once($maindir."pages/navbar.php");

if(!isset( $_SESSION['user_id'] ))
  {
    header('Location: '.$maindir.'login/logout.php?code=100');
    exit();
  }
?>

<html lang="es">
    <head>    
        
    <meta charset="utf-8">
    
    </head>
      <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                <ul class="list-unstyled">
                   <li  class="nav-header active"> <a id="SecretariAcademica" href="#"><i class="glyphicon glyphicon-home"></i> Inicio Secretaria Academica</a></li>
                   <hr>
                   <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu">
                     <h5><i class="fa fa-male fa-fw"></i>Gestión de Estudiantes<i class="glyphicon glyphicon-chevron-down"></i></h5>
                        </a>
                        <ul class="list-unstyled collapse in" id="userMenu">
                          <li>
                            <a id="RegistroEstudiante" href="#"><i class="glyphicon glyphicon-edit"></i>Registro de Estudiantes</a>
                          </li>
                          <li>
                            <a id="TipoEstudiante"  href="#"><i class="fa fa-user fa-fw"></i>Tipo Estudiante</a>
                          </li>
                        </ul>
                    </li>
                    <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu2">
                      <h5><i class="fa fa-users "></i>Gestión de Solicitudes<i class="glyphicon glyphicon-chevron-down"></i></h5>
                      </a>
                        <ul class="list-unstyled collapse in" id="userMenu2">     
                            <li><a id="nuevaSolicitud" href="#"><i class="fa fa-suitcase"></i>Nueva solicitud</a></li>
                            <li><a id="SolicitudEstudiante" href="#"><i class="fa fa-user fa-fw"></i>Solicitud estudiante</a></li> 
                        </ul>
                    </li>
                    <li id = "BusquedaAvanzada" class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu2">
                      <h5><i class="glyphicon glyphicon-search"></i>Busqueda vanzada</h5>
                      </a>
                    </li>
                </ul>
            </div>

             <div class="col-sm-9">
              <div class="col-md-12">
                <div id="contenedor" class="content-panel">
                  <div class="col-lg-12">
                    
                  </div>
                  <div id="wrapper">
                   <!-- Patanlla principal de la secretaria academica -->
                  </div>                       
                </div>
              </div>
            </div>
        </div>
      </div>
<script type="text/javascript" src = "pages/SecretariaAcademica/menu.js" />
