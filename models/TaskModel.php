<?php

namespace App\models;

class Task
{
    public function __construct($descripcion, $finalizada = false)
    {
        $this->descripcion = $descripcion;
        $this->finalizada = $finalizada;
    }

    public function finalizar()
    {
        $this->finalizada = false;
    }
}
