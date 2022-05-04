<?php
namespace App\controllers;

use \Core\View;
use \Core\Controller;
use \App\models\Talleres AS TalleresDao;

class Talleres extends Controller{

    private $_contenedor;

    function __construct(){
        parent::__construct();
        $this->_contenedor = new Contenedor;
        View::set('header',$this->_contenedor->header());
        View::set('footer',$this->_contenedor->footer());
    }

    public function getUsuario(){
        return $this->__usuario;
    }

    public function index() {
        $extraHeader =<<<html
html;
        $extraFooter =<<<html
    <!--footer class="footer pt-0">
              <div class="container-fluid">
                  <div class="row align-items-center justify-content-lg-between">
                      <div class="col-lg-6 mb-lg-0 mb-4">
                          <div class="copyright text-center text-sm text-muted text-lg-start">
                              © <script>
                                  document.write(new Date().getFullYear())
                              </script>,
                              made with <i class="fa fa-heart"></i> by
                              <a href="https://www.creative-tim.com" class="font-weight-bold" target="www.grupolahe.com">Creative GRUPO LAHE</a>.
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                              <li class="nav-item">
                                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">privacy policies</a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </footer--    >
          <!-- jQuery -->
            <script src="/js/jquery.min.js"></script>
            <!--   Core JS Files   -->
            <script src="/assets/js/core/popper.min.js"></script>
            <script src="/assets/js/core/bootstrap.min.js"></script>
            <script src="/assets/js/plugins/perfect-scrollbar.min.js"></script>
            <script src="/assets/js/plugins/smooth-scrollbar.min.js"></script>
            <!-- Kanban scripts -->
            <script src="/assets/js/plugins/dragula/dragula.min.js"></script>
            <script src="/assets/js/plugins/jkanban/jkanban.js"></script>
            <script src="/assets/js/plugins/chartjs.min.js"></script>
            <script src="/assets/js/plugins/threejs.js"></script>
            <script src="/assets/js/plugins/orbit-controls.js"></script>
            
          <!-- Github buttons -->
            <script async defer src="https://buttons.github.io/buttons.js"></script>
          <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
            <script src="/assets/js/soft-ui-dashboard.min.js?v=1.0.5"></script>

          <!-- VIEJO INICIO -->
            <script src="/js/jquery.min.js"></script>
          
            <script src="/js/custom.min.js"></script>

            <script src="/js/validate/jquery.validate.js"></script>
            <script src="/js/alertify/alertify.min.js"></script>
            <script src="/js/login.js"></script>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
          <!-- VIEJO FIN -->
   <script>
    $( document ).ready(function() {

          $("#form_vacunacion").on("submit",function(event){
              event.preventDefault();
              
                  var formData = new FormData(document.getElementById("form_vacunacion"));
                  for (var value of formData.values()) 
                  {
                     console.log(value);
                  }
                  $.ajax({
                      url:"/Talleres/uploadComprobante",
                      type: "POST",
                      data: formData,
                      cache: false,
                      contentType: false,
                      processData: false,
                      beforeSend: function(){
                      console.log("Procesando....");
                  },
                  success: function(respuesta){
                      if(respuesta == 'success'){
                         // $('#modal_payment_ticket').modal('toggle');
                         
                          swal("¡Se ha guardado tu prueba correctamente!", "", "success").
                          then((value) => {
                              window.location.replace("/Talleres/");
                          });
                      }
                      console.log(respuesta);
                  },
                  error:function (respuesta)
                  {
                      console.log(respuesta);
                  }
              });
          });

      });
</script>

html;

        $cursos = TalleresDao::getAsignaCurso($_SESSION['id_registrado']);

        

        $card_cursos = '';

        foreach ($cursos as $key => $value) {
            $progreso = TalleresDao::getProgreso($_SESSION['id_registrado'],$value['id_curso']);

            $max_time = $value['duracion'];
            $duracion_sec = substr($max_time,strlen($max_time)-2,2);
            $duracion_min = substr($max_time,strlen($max_time)-5,2);
            $secs_totales = (intval($duracion_min)*60)+intval($duracion_sec);

            $porcentaje = round(($progreso['segundos']*100)/$secs_totales);

            $card_cursos .= <<<html
            
            
            <div class="col-12 col-md-3">
                <div class="card card-body card-course p-0">
                    <input class="curso" hidden type="text" value="{$value['clave']}" readonly>
                    <div class="caratula-content">
                        <a href="/Talleres/Video/{$value['clave']}">
                            <img class="caratula-img" src="/caratulas/{$value['caratula']}">
                        </a>
                        <div class="duracion"><p>{$value['duracion']}</p></div>
                        <!--button class="btn btn-outline-danger"></button-->
                        
html;

            $like = TalleresDao::getlike($value['id_curso'],$_SESSION['id_registrado']);
            if ($like['status'] == 1) {
                $card_cursos .= <<<html
                <span id="video_{$value['clave']}" data-clave="{$value['clave']}" class="fas fa-heart heart-like p-2"></span>
html;
            } else {
                $card_cursos .= <<<html
                <span id="video_{$value['clave']}" data-clave="{$value['clave']}" class="fas fa-heart heart-not-like p-2"></span>
html;
            }

            $card_cursos .= <<<html
                        <progress class="barra_progreso_small" max="$secs_totales" value="{$progreso['segundos']}"></progress>
                    </div>
                    <a href="/Talleres/Video/{$value['clave']}">
                        <h6 class="text-left mx-3 mt-2" style="color: black;">{$value['nombre_curso']}</h3>
                        
                        

                        <p class="text-left mx-3 text-sm">{$value['fecha_curso']}
                            {$value['descripcion']}<br>
                            {$value['vistas']} vistas
                            <br> <br>
                            <b>Avance: $porcentaje %</b>
                        </p>

html;
                        if ($value['status'] == 2) {
                            $card_cursos .= <<<html
                            <div class="ms-3 me-3 msg-encuesta px-2 py-1">Se ha habilitado una encuesta para este curso</div><br><br>
html;
                        }
        
                        $card_cursos .= <<<html
                    </a>

                    <div>
                        
                    </div>
                </div>
            </div>

            <script>
                // $('#video_{$value['clave']}').on('click', function(){
                //     let like = $('#video_{$value['clave']}').hasClass('heart-like');
                    
                //     if (like){
                //         $('#video_{$value['clave']}').removeClass('heart-like').addClass('heart-not-like')
                //     } else {
                //         $('#video_{$value['clave']}').removeClass('heart-not-like').addClass('heart-like')
                //     }
                // });
            </script>
html;
        }

        View::set('card_cursos',$card_cursos);
        View::set('header',$this->_contenedor->header($extraHeader));
        View::set('footer',$this->_contenedor->footer($extraFooter));
        View::render("talleres_all");
    }

    public function Video($clave){
        $extraHeader =<<<html
html;
        $extraFooter =<<<html
            <!--footer class="footer pt-0">
                    <div class="container-fluid">
                        <div class="row align-items-center justify-content-lg-between">
                            <div class="col-lg-6 mb-lg-0 mb-4">
                                <div class="copyright text-center text-sm text-muted text-lg-start">
                                    © <script>
                                        document.write(new Date().getFullYear())
                                    </script>,
                                    made with <i class="fa fa-heart"></i> by
                                    <a href="https://www.creative-tim.com" class="font-weight-bold" target="www.grupolahe.com">Creative GRUPO LAHE</a>.
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                                    <li class="nav-item">
                                        <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">privacy policies</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer--    >
                <!-- jQuery -->
                    <script src="/js/jquery.min.js"></script>
                    <!--   Core JS Files   -->
                    <script src="/assets/js/core/popper.min.js"></script>
                    <script src="/assets/js/core/bootstrap.min.js"></script>
                    <script src="/assets/js/plugins/perfect-scrollbar.min.js"></script>
                    <script src="/assets/js/plugins/smooth-scrollbar.min.js"></script>
                    <!-- Kanban scripts -->
                    <script src="/assets/js/plugins/dragula/dragula.min.js"></script>
                    <script src="/assets/js/plugins/jkanban/jkanban.js"></script>
                    <script src="/assets/js/plugins/chartjs.min.js"></script>
                    <script src="/assets/js/plugins/threejs.js"></script>
                    <script src="/assets/js/plugins/orbit-controls.js"></script>
                    
                <!-- Github buttons -->
                    <script async defer src="https://buttons.github.io/buttons.js"></script>
                <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
                    <script src="/assets/js/soft-ui-dashboard.min.js?v=1.0.5"></script>

                <!-- VIEJO INICIO -->
                    <script src="/js/jquery.min.js"></script>
                
                    <script src="/js/custom.min.js"></script>

                    <script src="/js/validate/jquery.validate.js"></script>
                    <script src="/js/alertify/alertify.min.js"></script>
                    <script src="/js/login.js"></script>
                    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                <!-- VIEJO FIN -->
        <script>
            $( document ).ready(function() {

                $("#form_vacunacion").on("submit",function(event){
                    event.preventDefault();
                    
                        var formData = new FormData(document.getElementById("form_vacunacion"));
                        for (var value of formData.values()) 
                        {
                            console.log(value);
                        }
                        $.ajax({
                            url:"/Talleres/uploadComprobante",
                            type: "POST",
                            data: formData,
                            cache: false,
                            contentType: false,
                            processData: false,
                            beforeSend: function(){
                            console.log("Procesando....");
                        },
                        success: function(respuesta){
                            if(respuesta == 'success'){
                                // $('#modal_payment_ticket').modal('toggle');
                                
                                swal("¡Se ha guardado tu prueba correctamente!", "", "success").
                                then((value) => {
                                    window.location.replace("/Talleres/");
                                });
                            }
                            console.log(respuesta);
                        },
                        error:function (respuesta)
                        {
                            console.log(respuesta);
                        }
                    });
                });

            });
        </script>

html;

        $curso = TalleresDao::getCursoByClave($clave);
        $contenido_taller = '';

        $permiso_taller = TalleresDao::getContenidoByAsignacion($_SESSION['id_registrado'],$clave); 

        $progreso_curso = TalleresDao::getProgreso($_SESSION['id_registrado'],$curso['id_curso']);
        if ($progreso_curso) {
            $progreso_curso = TalleresDao::getProgreso($_SESSION['id_registrado'],$curso['id_curso']);
        } else {
            TalleresDao::insertProgreso($_SESSION['id_registrado'],$curso['id_curso']);
            $progreso_curso = TalleresDao::getProgreso($_SESSION['id_registrado'],$curso['id_curso']);
        }

        $duracion = $curso['duracion'];

        $duracion_sec = substr($duracion,strlen($duracion)-2,2);
        $duracion_min = substr($duracion,strlen($duracion)-5,2);
        $duracion_hrs = substr($duracion,0,strpos($duracion,':'));
        
        $secs_totales = (intval($duracion_hrs)*3600)+(intval($duracion_min)*60)+intval($duracion_sec);

        $progreso_curso = TalleresDao::getProgreso($_SESSION['id_registrado'],$curso['id_curso']);
        if ($progreso_curso) {
            $progreso_curso = TalleresDao::getProgreso($_SESSION['id_registrado'],$curso['id_curso']);
        } else {
            TalleresDao::insertProgreso($_SESSION['id_registrado'],$curso['id_curso']);
            $progreso_curso = TalleresDao::getProgreso($_SESSION['id_registrado'],$curso['id_curso']);
        }

        $porcentaje = round(($progreso_curso['segundos']*100)/$secs_totales);
        // var_dump($secs_totales);

        if ($curso) {
            $id_curso = TalleresDao::getCursoByClave($clave)['id_curso'];
            $url = TalleresDao::getCursoByClave($clave)['url'];
            $nombre_taller = TalleresDao::getCursoByClave($clave)['nombre'];
            $descripcion = TalleresDao::getCursoByClave($clave)['descripcion'];

            if ($permiso_taller) {
                $contenido_taller .=<<<html
                <div class="row">
                    <iframe id="iframe" class="bg-gradient-warning iframe-course" src="{$url}" width="640" height="521" frameborder="0">a</iframe>
                </div>
    
                <input type="text" value="{$clave}" id="clave_video" readonly hidden>
    
                <div>
                    <p>
                        <hr class="horizontal dark my-1">
                        <h6 class="mb-1 mt-2 text-center">{$descripcion}</h6>
                    </p>
                </div>
    
                
                
    html;
            } else {
                $contenido_taller .=<<<html
                <hr>
                <div class="row mt-3">
                    <div class="col-10 m-auto text-center">
                        <h2 class="text-bolder text-gradient text-danger">
                            <i class="fas fa-exclamation"></i><br>
                            Lo sentimos no tiene acceso a este curso, contacte a soporte.
                        </h2>
                    </div>
                </div>                
html;
            }

            View::set('clave',$clave);
            View::set('id_curso',$id_curso);
            View::set('descripcion',$descripcion);
            View::set('nombre_taller',$nombre_taller);
            View::set('url',$url);
            View::set('porcentaje',$porcentaje);
            View::set('contenido_taller',$contenido_taller);
            View::set('progreso_curso',$progreso_curso);
            View::set('secs_totales',$secs_totales);
            View::set('header',$this->_contenedor->header($extraHeader));
            View::set('footer',$this->_contenedor->footer($extraFooter));
            View::render("video_all");
        } else {
            View::render("404");
        }
    }

    public function updateProgress(){
        $progreso = $_POST['segundos'];
        $curso = $_POST['curso'];

        TalleresDao::updateProgresoFecha($curso, $_SESSION['id_registrado'],$progreso);

        echo 'minuto '.$progreso.' '.$curso;
    }

    public function Vistas(){
        $clave = $_POST['clave_video'];
        $vistas = TalleresDao::getCursoByClave($clave)['vistas'];
        $vistas++;

        TalleresDao::updateVistasByClave($clave,$vistas);

        echo $clave;
    }

    public function Likes(){
        $clave = $_POST['clave'];
        $id_curso = TalleresDao::getCursoByClave($clave)['id_curso'];

        $hay_like = TalleresDao::getlike($id_curso,$_SESSION['id_registrado']);
        // var_dump($hay_like);

        if ($hay_like) {
            $status = 0;
            if ($hay_like['status'] == 1) {
                $status = 0;
            } else if ($hay_like['status'] == 0){
                $status = 1;
            }
            TalleresDao::updateLike($id_curso,$_SESSION['id_registrado'],$status);
            // echo 'siuu '.$clave;
        } else {
            TalleresDao::insertLike($id_curso,$_SESSION['id_registrado']);
            // echo 'nooouuu '.$clave;
        }
    }

    public function uploadComprobante(){

        $documento = new \stdClass();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $marca_ = '';
            $usuario = $_POST["user_"];
            $numero_dosis = $_POST['numero_dosis'];
            foreach($_POST['checkbox_marcas'] as $selected){
                $marca_ = $selected."/ ";
            }
            $marca = $marca_;
            $file = $_FILES["file_"];

            $pdf = $this->generateRandomString();

            move_uploaded_file($file["tmp_name"], "comprobante_vacunacion/".$pdf.'.pdf');

            $documento->_url = $pdf.'.pdf';
            $documento->_user = $usuario;
            $documento->_numero_dosis = $numero_dosis;
            $documento->_marca_dosis = $marca;

            $id = TalleresDao::insert($documento);

            if ($id) {
                echo 'success';

            } else {
                echo 'fail';
            }
        } else {
            echo 'fail REQUEST';
        }
    }

    function generateRandomString($length = 10) {
        return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
    }

}