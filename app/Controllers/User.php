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

    public function _loadDefaultView($data,$view)
    {
        echo view ("LoginTemplate");
       echo view("$view",$data);
       echo view ("LoginTemplate2");

       
    }



}
