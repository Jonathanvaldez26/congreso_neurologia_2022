<?php
namespace App\controllers;
defined("APPPATH") OR die("Access denied");

use \Core\View;
use \Core\Controller;
use \App\models\TrabajosLibres AS TrabajosLibresDao;

class TrabajosLibres extends Controller{

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
      <link id="pagestyle" href="/assets/css/style.css" rel="stylesheet" />
     
      <title>
            Home - AMETD
      </title>
html;

        $trabajos_libres = '';
        $card_trabajos_libres = '';
        $heart = '';
        
        $trabajos_libres =  TrabajosLibresDao::getTableTrabajosLibres($_SESSION['id_trabajo_libre']);

        foreach ($trabajos_libres as $key => $value) {


            $like = TrabajosLibresDao::getlike($value['id_trabajo'],$_SESSION['id_registrado']);
            if ($like['status'] == 1) {
                $heart .= <<<html
                    <span id="video_{$value['clave']}" data-clave="{$value['clave']}" class="fas fa-heart heart-like p-2"></span>
html;
            } else {
                $heart .= <<<html
                    <span id="video_{$value['clave']}" data-clave="{$value['clave']}" class="fas fa-heart heart-not-like p-2"></span>
html;
            }
            

            $card_trabajos_libres .= <<<html
            
            
            <div class="col-10 col-md-2 text-center">
                <div class="card card-body card-course p-0 border-radius-15">
                <img class="caratula-img border-radius-15" src="/trabajos_files/img/{$value['caratula']}">
                        <div class="mt-2 color-vine font-16 text-bold"><p><b>{$value['titulo']}</b></p></div>
                        <div class="color-vine font-14"><p>{$value['descripcion']}</p></div>
                        <div class="color-vine font-12"><p>{$value['nombre_participante']}</p></div>
                        {$heart}
                        <!--<span id="video_{$value['clave']}" data-clave="{$value['clave']}" class="fas fa-heart heart-like p-2"></span>-->
                </div>
            </div>
html;
        }

        View::set('header',$this->_contenedor->header($extraHeader));
        //View::set('permisos_mexico',$permisos_mexico);
        //View::set('tabla',$tabla);
        View::set('card_trabajos_libres',$card_trabajos_libres);
        View::render("trabajoslibres");
    }

    public function Likes(){
        $clave = $_POST['clave'];
        $id_trabajo = TrabajosLibresDao::getTrabajoByClave($clave)['id_trabajo'];

        $hay_like = TrabajosLibresDao::getlike($id_trabajo,$_SESSION['id_registrado']);
        // var_dump($hay_like);

        if ($hay_like) {
            // $status = 0;
            // if ($hay_like['status'] == 1) {
            //     $status = 0;
            // } else if ($hay_like['status'] == 0){
            //     $status = 1;
            // }
            // TalleresDao::updateLike($id_curso,$_SESSION['id_registrado'],$status);
            // echo 'siuu '.$clave;
            echo "ya_votaste";
        } else {
            $insertLike = TrabajosLibresDao::insertLike($id_trabajo,$_SESSION['id_registrado']);

            if($insertLike){
                echo "votar";
            }else{
                echo "hubo error al votar";
            }
            // echo 'nooouuu '.$clave;
        }
    }

}
