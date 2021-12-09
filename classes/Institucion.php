<?php

namespace classes;


class Institucion
{
    protected $id_institucion;
    protected $nombre_institucion;
    protected $direccion_institucion;
    protected $estado_institucion;
    protected $ciudad_institucion;
    protected $email_institucion;
    protected $telefono_institucion;
    protected $servicios_institucion;

    public function __construct($id_institucion, $nombre, $direccion, $estado, $ciudad, $email, $telefono, $servicios) {

        $this->id_institucion = $id_institucion;
        $this->nombre_institucion = $nombre;
        $this->direccion_institucion = $direccion;
        $this->estado_institucion = $estado;
        $this->ciudad_institucion = $ciudad;
        $this->email_institucion = $email;
        $this->telefono_institucion = $telefono;
        $this->servicios_institucion = $servicios;

    }

    public static function registrar($institute) {

        $result = Model::insertIntoDb('institucion', $institute);

        if($result) {
            $relation = [
                'id_usuario' => $_SESSION["user"]["id"],
                'id_institucion' => $_SESSION["insertId"],
            ];
            Model::insertIntoDb('usuario_institucion', $relation);
        }
        return $result;

    }

    public static function getInstitucion($id) {

        $id = ['id_institucion' => $id];

        $data = Model::getFromDb("institucion", $id);

        return $data;

    }

    //metodo para eliminar la institucion de su tabla mediante id
    public static function deleteInstitute($instituteId) {

        $institute = [
            'id_institucion' => $instituteId,
        ];

        return Model::deleteFromDb('institucion', $institute) ;

    }
    //metodo para eliminar la relacion de la institucion con los usuarios
    public static function deleteRelation($instituteId) {

        $institute = [
            'id_institucion' => $instituteId,
        ];

        return Model::deleteFromDb('usuario_institucion', $institute) ;

    }






}