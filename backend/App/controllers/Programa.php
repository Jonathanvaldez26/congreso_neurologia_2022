<?php
namespace App\controllers;

use \Core\View;
use \Core\Controller;
use \App\models\Programa AS ProgramaDao;

class Programa extends Controller{

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
                      url:"/Programa/uploadComprobante",
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
                              window.location.replace("/Programa/");
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

        // ----- Variables para la primer fecha ----- //
        $info_fecha1 = ProgramaDao::getSectionByDate('2022-05-18');
        $programa_fecha1 = '';

        $programa_fecha1 = <<<html
        <h4 class="mb-1 mt-1 text-center">Programa</h4>
        <h5 class="mb-3 text-center">{$info_fecha1[0]['fecha']}</h5>        
html;

        foreach ($info_fecha1 as $key => $value) {
            $hora_inicio =substr($value['hora_inicio'],0,strlen($value['hora_inicio'])-3);
            $hora_fin = substr($value['hora_fin'],0,strlen($value['hora_fin'])-3);

            // $duracion_min = substr($duracion,strlen($duracion)-5,2);

            $programa_fecha1 .= <<<html
            <div class="row mb-3">
                <div class="col-12 col-md-2">
                    <span class="color-yellow text-bold">
                        {$hora_inicio} - {$hora_fin}
                    </span>
                </div>
                <div class="col-12 col-md-7">
                    <span class="color-green font-20 text-lg">
                        {$value['descripcion']}
                    </span>
                </div>
                <div class="col-12 col-md-3">
                    <span class="color-vine font-16 text-bold">
                        {$value['prefijo']} {$value['nombre_profesor']}
                    </span>
                    <p class="color-vine font-12 text-sm">
                        {$value['desc_profesor']}
                    </p>
                </div>
            </div>
html;
        }

        // ----- Variables para la segunda fecha ----- //
        $info_fecha2 = ProgramaDao::getSectionByDate('2022-05-19');
        $programa_fecha2 = <<<html
        <h4 class="mb-1 mt-1 text-center">Programa</h4>
        <h5 class="mb-3 text-center">{$info_fecha2[0]['fecha']}</h5>    
html;

        foreach ($info_fecha2 as $key => $value) {
            $hora_inicio =substr($value['hora_inicio'],0,strlen($value['hora_inicio'])-3);
            $hora_fin = substr($value['hora_fin'],0,strlen($value['hora_fin'])-3);

            // $duracion_min = substr($duracion,strlen($duracion)-5,2);

            $programa_fecha2 .= <<<html
            <div class="row mb-3">
                <div class="col-12 col-md-2">
                    <span class="color-yellow text-bold">
                        {$hora_inicio} - {$hora_fin}
                    </span>
                </div>
                <div class="col-12 col-md-7">
                    <span class="color-green font-20 text-lg">
                        {$value['descripcion']}
                    </span>
                </div>
                <div class="col-12 col-md-3">
                    <span class="color-vine font-16 text-bold">
                        {$value['prefijo']} {$value['nombre_profesor']}
                    </span>
                    <p class="color-vine font-12 text-sm">
                        {$value['desc_profesor']}
                    </p>
                </div>
            </div>
html;
        }

        // ----- Variables para la tercer fecha ----- //
        $info_fecha3 = ProgramaDao::getSectionByDate('2022-05-20');
        $programa_fecha3 = <<<html
        <h4 class="mb-1 mt-1 text-center">Programa</h4>
        <h5 class="mb-3 text-center">{$info_fecha3[0]['fecha']}</h5>        
html;

        foreach ($info_fecha3 as $key => $value) {
            $hora_inicio =substr($value['hora_inicio'],0,strlen($value['hora_inicio'])-3);
            $hora_fin = substr($value['hora_fin'],0,strlen($value['hora_fin'])-3);

            // $duracion_min = substr($duracion,strlen($duracion)-5,2);

            $programa_fecha3 .= <<<html
            <div class="row mb-3">
                <div class="col-12 col-md-2">
                    <span class="color-yellow text-bold">
                        {$hora_inicio} - {$hora_fin}
                    </span>
                </div>
                <div class="col-12 col-md-7">
                    <span class="color-green font-20 text-lg">
                        {$value['descripcion']}
                    </span>
                </div>
                <div class="col-12 col-md-3">
                    <span class="color-vine font-16 text-bold">
                        {$value['prefijo']} {$value['nombre_profesor']}
                    </span>
                    <p class="color-vine font-12 text-sm">
                        {$value['desc_profesor']}
                    </p>
                </div>
            </div>
html;
        }

        // ----- Variables para la tercer fecha ----- //
        $info_fecha4 = ProgramaDao::getSectionByDate('2022-05-21');
        $programa_fecha4 = <<<html
        <h4 class="mb-1 mt-1 text-center">Programa</h4>
        <h5 class="mb-3 text-center">{$info_fecha4[0]['fecha']}</h5>        
html;

        if ($info_fecha4) {
            foreach ($info_fecha4 as $key => $value) {
                $hora_inicio =substr($value['hora_inicio'],0,strlen($value['hora_inicio'])-3);
                $hora_fin = substr($value['hora_fin'],0,strlen($value['hora_fin'])-3);
    
                // $duracion_min = substr($duracion,strlen($duracion)-5,2);
    
                $programa_fecha4 .= <<<html
                <div class="row mb-3">
                    <div class="col-12 col-md-2">
                        <span class="color-yellow text-bold">
                            {$hora_inicio} - {$hora_fin}
                        </span>
                    </div>
                    <div class="col-12 col-md-7">
                        <span class="color-green font-20 text-lg">
                            {$value['descripcion']}
                        </span>
                    </div>
                    <div class="col-12 col-md-3">
                        <span class="color-vine font-16 text-bold">
                            {$value['prefijo']} {$value['nombre_profesor']}
                        </span>
                        <p class="color-vine font-12 text-sm">
                            {$value['desc_profesor']}
                        </p>
                    </div>
                </div>
html;
            }
        }

        

        View::set('programa_fecha1',$programa_fecha1);
        View::set('programa_fecha2',$programa_fecha2);
        View::set('programa_fecha3',$programa_fecha3);
        View::set('programa_fecha4',$programa_fecha4);
        View::set('header',$this->_contenedor->header($extraHeader));
        View::set('footer',$this->_contenedor->footer($extraFooter));
        View::render("programa");
    }

    

    public function updateProgress(){
        $progreso = $_POST['segundos'];
        $curso = $_POST['curso'];

        ProgramaDao::updateProgresoFecha($curso, $_SESSION['id_registrado'],$progreso);

        echo 'minuto '.$progreso.' '.$curso;
    }

    public function Vistas(){
        $clave = $_POST['clave_video'];
        $vistas = ProgramaDao::getCursoByClave($clave)['vistas'];
        $vistas++;

        ProgramaDao::updateVistasByClave($clave,$vistas);

        echo $clave;
    }

    public function Likes(){
        $clave = $_POST['clave'];
        $id_curso = ProgramaDao::getCursoByClave($clave)['id_curso'];

        $hay_like = ProgramaDao::getlike($id_curso,$_SESSION['id_registrado']);
        // var_dump($hay_like);

        if ($hay_like) {
            $status = 0;
            if ($hay_like['status'] == 1) {
                $status = 0;
            } else if ($hay_like['status'] == 0){
                $status = 1;
            }
            ProgramaDao::updateLike($id_curso,$_SESSION['id_registrado'],$status);
            // echo 'siuu '.$clave;
        } else {
            ProgramaDao::insertLike($id_curso,$_SESSION['id_registrado']);
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

            $id = ProgramaDao::insert($documento);

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