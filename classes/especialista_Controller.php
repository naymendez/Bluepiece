<?php


namespace classes;


class especialista_Controller extends Controller
{



    public function consultar(): void
    {
        $espeInfo = Model::getAllFromDb('especialista');

        $this->model->pushData(
            "espeInfo",
            $espeInfo
        );

    }


}