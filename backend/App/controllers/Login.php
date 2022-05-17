<?php
namespace App\controllers;
defined("APPPATH") OR die("Access denied");

use \Core\View;

class Inicio{
    private $_contenedor;


    public function index() {

        View::render("login_inicio");
    }



}
