<?php

namespace classes;


class Especialista
{
    protected $id_especialista;
    protected $nombre_especialista;
    protected $apellido_especialista;
    protected $estado_especialista;
    protected $ciudad_especialista;
    protected $telefono_especialista;
    protected $email_especialista;

    public function __construct($id_especialista, $nombre, $apellido, $estado, $ciudad, $telefono, $email)
    {

        $this->id_especialista = $id_especialista;
        $this->nombre_especialista = $nombre;
        $this->apellido_especialista = $apellido;
        $this->estado_especialista = $estado;
        $this->ciudad_especialista = $ciudad;
        $this->telefono_especialista = $telefono;
        $this->email_especialista = $email;

    }


}