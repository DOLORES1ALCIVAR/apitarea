<?php

namespace App\Controllers;
// use App\Models

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    } 
    

    public function prueba ()
    {
        echo 'Realizando mi primera APIREST';
    }

    public function api ()
    {


        $usuarios= array (
            "Usuario"=>"Dolores Magdalena",
            "Apellidos"=>"Alcivar Cedeño",
            "Ciudad"=>"Montañita",
            "Direccion"=>"Av.12 de julio",
            "Carrera"=>"Tecnologias de la Informacion",
            "Semestre"=>"Sexto",
            "Telefono"=>"0945376587"

        );


        return $this->response->setJSON($usuarios);

    }


    public function login(){

return view('login');
    
    }


    public function testbd($cedula)
    {

        $this->db=\Config\Database::connect();
        $query=$this->db->query("SELECT idpersonal, cedula, apellido1, apellido2, nombres, genero 
        FROM esq_datos_personales.personal where cedula='$cedula'  ");
        $result=$query->getResult();
        return $this->response->setJSON($result);


        // echo "hola";
    
    }
}
