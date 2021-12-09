<?php


namespace classes;


class institucion_Controller extends Controller
{
    public function listar(): void
    {

        if(!empty($_SESSION["user"])) {

            $instituteIds = Model::getAllFromDbWhere("usuario_institucion", ['id_usuario' => $_SESSION["user"]["id"]]);

            if($instituteIds) {

                $institutes = [];

                foreach ($instituteIds as $institute) {

                    $instituteDB = Institucion::getInstitucion($institute["id_institucion"]);

                    $institutes[$instituteDB['id_institucion']] = $instituteDB;

                }

                $this->model->pushData(
                    "institutes",
                    $institutes
                );

            }

        }
    }

// metodo para generar consultas (para el catalogo de instituciones)
    public function consultar():void
    {
        $instituteInfo = Model::getAllFromDb('institucion');

        $this->model->pushData(
            "instituteInfo",
            $instituteInfo
        );

    }

    public function registrar (){

        if(!empty($_POST)) {


            //Registrar Paciente
            $institute = [
                'nombre_institucion' => $_POST["nombre_institucion"],
                'direccion_institucion' => $_POST["direccion_institucion"],
                'estado' => $_POST["estado"],
                'ciudad' => $_POST["ciudad"],
                'telefono' => $_POST["telefono"],
                'servicios' => $_POST["servicios"],
                'status' => "revision",
            ];

            $result = Institucion::registrar($institute);

            if($result == TRUE) {

                header("Location: ?section=usuario");

            }
            else {
                $this->model->pushData(
                    "alerta",
                    "Error al crear registro, por favor comuníquese con soporte"
                );
            }

        }


    }

    public function eliminarGetAction($id){
        $eliminarIsTrue = FALSE;

        if(isset($_POST["eliminar"])) {
            $eliminarIsTrue = $_POST["eliminar"] === "eliminar";
        }

        if(!empty($_POST) && $eliminarIsTrue) {

            $result = Institucion::deleteInstitute($id);
            $resultRelation=Institucion::deleteRelation($id);


            if($result && $resultRelation === TRUE) {
                header("Location: ?section=usuario");

            }

        }

    }

    public function eliminar($id){

    }

    public function editarGetAction($id){

        if(!empty($_SESSION["institucion"])) {

            $instituteInfo = Model::getFromDb('instituciones', ['id' => $_SESSION["institucion"]["$id"]]);

            if(!empty($_POST)) {

                $nombre_institucion = $_POST["nombre_institucion"] ?? NULL;
                $direccion_institucion = $_POST["direccion_institucion"] ?? NULL;
                $estado = $_POST["estado"] ?? NULL;
                $ciudad = $_POST["ciudad"] ?? NULL;
                $telefono = $_POST["telefono"] ?? NULL;
                $email = $_POST["email"] ?? NULL;
                $servicios = $_POST["servicios"] ?? NULL;


                    $newInstitute = [
                        'nombre' => $nombre_institucion,
                        '$direccion_institucion' => $direccion_institucion,
                        'estado' => $estado,
                        'ciudad' => $ciudad,
                        'telefono' => $telefono,
                        'email' => $email,
                        'servicios' => $servicios,

                    ];

                    Model::updateFromDb("institucion", $newInstitute, ["id" => $instituteInfo["$id"]]);

                    $this->model->pushData(
                        "success",
                        "Datos de la Institucion Actualizados.",
                    );

                    //Refresh Institute Info
                    $instituteInfo = Model::getFromDb('instituciones', ['id' => $_SESSION["institucion"]["$id"]]);

                }
            }


        }
        
    public function editar($id){

    }






}
