<?php

namespace Controllers;

use Model\Cita;
use Model\CitaServicio;
use Model\Servicio;

class APIController
{
    public static function index()
    {
        $servicios = Servicio::all();
        echo json_encode($servicios);
    }

    public static function guardar()
    {

        // Almacena la cita y devuelve el ID
        $cita = new Cita($_POST);
        $resultado = $cita->guardar();

        $id = $resultado['id'];

        // Almacena los servicios con el ID de la cita
        $idServicios = explode(",", $_POST['servicios']);
        
        // echo json_encode(['idServiciosdc' => $idServicios]);

        foreach ($idServicios as $idServicio) {
            $args = [
                'citaId' => $id,
                'servicioId' => $idServicio
            ];
            
            // echo json_encode(['argsdc' => $args]);
            $citaServicio = new CitaServicio($args);
            $citaServicio->guardar();
            // echo json_encode(['citaServiciodc' => $citaServicio]);
        }
        
        // Retornamos una respuestas
        echo json_encode(['resultado' => $resultado]);
        // $respuesta = [
        //     'resultado' => $resultado
        // ];

        // echo json_encode($respuesta);
    }

    public static function eliminar () {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            // debuguear($_POST);
            $id = $_POST['id'];
            $cita = Cita::find($id);
            $cita->eliminar();
            header('Location:'.$_SERVER['HTTP_REFERER']);
        };
    }

}
