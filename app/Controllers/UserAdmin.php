<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserAdmin extends BaseController
{
    public function Loginadmin()
    {
        $this->_loadDefaultView([],'login');
    }

    public function Login_post()
    {
        
    }

    public function Logout()
    {
        
    }


    public function _loadDefaultView($data,$view)
    {
        
        echo view ("user/templates/header");
        echo view ("user/control/$view",$data);
        echo view ("user/templates/footer");

    }



}
