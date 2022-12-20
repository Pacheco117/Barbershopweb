<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Citas extends BaseController
{
    public function index()
    {
        //
    }
    public function Citas()
    {
        $this->_loadDefaultView([],'Citas');
    }
    public function AgregarCitas()
    {
        $this->_loadDefaultView([],'AgregarCitas');
    }
    public function Clientescitas()
    {
        $this->_loadDefaultView([],'clientescitas');
    }
    public function Registrarcliente()
    {
        $this->_loadDefaultView([],'Registrarcliente');
    }
    
    public function _loadDefaultView($data,$view)
    {
        echo view ("LoginTemplate");
       echo view("$view",$data);
       echo view ("LoginTemplate2");

       
    }
}
