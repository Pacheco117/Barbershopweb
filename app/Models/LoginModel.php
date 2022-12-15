<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'logins';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
    public function login($username, $password) {
        // Primero verificamos si el usuario existe en la base de datos
        $this->db->where('username', $username);
        $query = $this->db->get('users');
        if ($query->num_rows() == 0) {
            // Si no existe, devolvemos un código de error
            return array('error' => 'El usuario no existe en la base de datos.');
        }

        // Si el usuario existe, obtenemos su información de la base de datos
        $user = $query->row();

        // Luego verificamos si la contraseña ingresada coincide con la almacenada en la base de datos
        if (!password_verify($password, $user->password)) {
            // Si no coincide, devolvemos un código de error
            return array('error' => 'La contraseña ingresada no es correcta.');
        }

        // Si todo ha ido bien, devolvemos la información del usuario
        return array('user' => $user);
    }
    
}
