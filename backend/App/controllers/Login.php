<?php
namespace App\controllers;
defined("APPPATH") OR die("Access denied");

use \Core\View;
use \Core\MasterDom;
use \App\models\Login AS LoginDao;

class Login{
    private $_contenedor;


    public function index() {
        
        $extraHeader =<<<html
        
html;
        $extraFooter =<<<html

        

        
html;

        View::set('header',$extraHeader);
        View::set('footer',$extraFooter);
        View::render("login_inicio");
    }



}
