<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
        //
    }
    public function login_user()
{
    // Recibe los datos del formulario
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    // Verifica los datos de inicio de sesión con el modelo
    $this->load->model('login_model');
    $result = $this->login_model->login($username, $password);

    // Si los datos son válidos, inicia la sesión y redirige al usuario a la página principal
    if ($result) {
        $session_data = array(
            'username' => $username
        );
        $this->session->set_userdata($session_data);
        redirect('home');
    }
    // Si los datos no son válidos, muestra un mensaje de error y permite que el usuario intente iniciar sesión de nuevo
    else {
        $data = array(
            'error_message' => 'Invalid username or password'
        );
        $this->load->view('login_view', $data);
    }
}

}
