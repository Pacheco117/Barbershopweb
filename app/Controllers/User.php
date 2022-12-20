<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
{
    

    public function Loginadmin()
    {
        //
        $this->_loadDefaultView([],'LoginAdmin');
    }
    public function Loginuser()
    {
        //
        $this->_loadDefaultView([],'Loginuser');

    }
    public function Principal()
    {
        $this->_loadDefaultView([],'principal');
    }
    public function ListaClientes()
    {
        $this->_loadDefaultView([],'listaclientes');
    }
    public function AgregarClientes()
    {
        $this->_loadDefaultView([],'AgregarClientes');
    }
    public function Citas()
    {
        $this->_loadDefaultView([],'Citas');
    }
    public function Barbershop()
    {
        $this->_loadDefaultView([],'Barbershop');
    }

    public function _loadDefaultView($data,$view)
    {
        echo view ("LoginTemplate");
       echo view("$view",$data);
       echo view ("LoginTemplate2");

       
    }



}
