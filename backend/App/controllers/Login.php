<?php
namespace App\controllers;
defined("APPPATH") OR die("Access denied");

use \Core\View;

class Login{
    private $_contenedor;


    public function index() {

        View::render("login_inicio");
    }



}
