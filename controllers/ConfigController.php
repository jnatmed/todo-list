<?php

namespace App\controllers;

use App\core\Controller;
use App\models\ToDoList;

class ConfigController extends Controller
{
    public function edit()
    {
        global $config;
        $this->view_data['title'] = "Editar Configuracion";
        include "views/edit.config.view.php";
    }

    public function save()
    {
        global $config;

        unset($_POST['enviar']);
        foreach ($_POST as $config_name => $config_value) {
            $config->add_config($config_name, $config_value);
        }
        $config->save();

        $this->add_data($config->data);

        $this->add_message("La configuracion se modifico con exito");

        $todo_list = new ToDoList;
        $todo_list->create_task("Carniceria: Asado");
        $todo_list->create_task("Verduleria: Lechuga, Tomate, Huevo");
        $todo_list->create_task("Supermercado: Desodorante, Pagar Impuestos");
        $todo_list->create_task("Farmacia: Remedios", true);

        $secciones = [
            'pendientes' => 'Tareas Pendientes',
            'finalizadas' => 'Tareas Finalizadas',
        ];

        include "views/index.view.php";
    }
}
