<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelicula extends CI_Controller {

    /**
     * Listado de películas
     */
    public function index()
    {
        $this->load->view('public/listadoPeliculas');
    }


    /**
     * Listado de películas de la parte privada
     */
    public function indexPrivada()
    {
        $this->load->view('private/listadoPeliculas');
    }

    /**
     * Una sola película, vista de detalle (debe recibir parámetro)
     */
    public function detalle()
    {
        $this->load->view('public/perfilPelicula');
    }

}