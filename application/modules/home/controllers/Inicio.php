<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Inicio extends MX_Controller {
    public function index()
    {
        $this->twig->display('inicio');
    }
}
