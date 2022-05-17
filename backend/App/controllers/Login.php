<?php
namespace App\controllers;
defined("APPPATH") OR die("Access denied");

use \Core\View;
use \Core\MasterDom;
use \App\models\Login AS LoginDao;

class Inicio{
    private $_contenedor;


    public function index() {

        View::render("login_inicio");
    }



}
