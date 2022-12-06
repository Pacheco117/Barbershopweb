<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ClientesController extends BaseController
{
    public function index()
    {
        //
    }
    public function AgregarClientes()
    {
        $this->_loadDefaultView([], 'AgregarClientes');


    }
    

    public function _loadDefaultView($data,$view)
    {
        echo view ("LoginTemplate");
       echo view("$view",$data);
       echo view ("LoginTemplate2");

       
    }
}
