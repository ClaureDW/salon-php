<?php

namespace Model;

class AdminCita extends ActiveRecord {
    protected static $tabla = 'citasServicios';
    protected static $columnasDB = ['id', 'hora'. 'clientd', 'email', 'telefono', 'servicio', 'precio'];

    public $id;
    public $hora;
    public $cliente;
    public $email;
    public $telefono;
    public $servicio;
    public $precio;

    public function __construct()
    {
        $this->id = $args['id'] ?? null;
        $this->hora = $argas['hora'] ?? '';
        $this->cliente = $argas['cliente'] ?? '';
        $this->email = $argas['email'] ?? '';
        $this->telefono = $argas['telefono'] ?? '';
        $this->servicio = $argas['servicio'] ?? '';
        $this->precio = $argas['precio'] ?? '';
    }

}