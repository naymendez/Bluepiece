<?php


namespace classes;


class Paciente
{


    public static function registrar($patient) {

        $result = Model::insertIntoDb('paciente', $patient);

        //este if es para guardar la relacion entre el paciente y el tutor
        if($result) {
            $relation = [
                'idTutor' => $_SESSION["user"]["id"],
                'idPaciente' => $_SESSION["insertId"],
            ];
            Model::insertIntoDb('tutor_paciente', $relation);
        }

        return $result;

    }

    public static function getPaciente($id) {

            $id = ['id' => $id];

            $data = Model::getFromDb("paciente", $id);

        return $data;

    }

    public static function deletePaciente($pacienteId) {

        $paciente = [
            'id' => $pacienteId,
        ];

        return Model::deleteFromDb('paciente', $paciente) ;


    }




}