<?php

namespace App\controllers;

use App\core\Controller;
use App\models\ToDoList;

class TaskController extends Controller
{
    public function new()
    {
        include "views/new.task.view.php";
    }

    public function save()
    {
        $todo_list = new ToDoList;
        $todo_list->create_task("Carniceria: Asado");
        $todo_list->create_task("Verduleria: Lechuga, Tomate, Huevo");
        $todo_list->create_task("Supermercado: Desodorante, Pagar Impuestos");
        $todo_list->create_task("Farmacia: Remedios", true);

        $descripcion = $_POST['descripcion'];
        $finalizada = $_POST['finalizada'] == "si" ;
        $task = $todo_list->create_task($descripcion, $finalizada);
        $this->add_message("La tarea '{$task->descripcion}' se creo con exito");
        $this->add_message("Si esto tuviera persistencia, aca hay que hacer el save");

        $secciones = [
            'pendientes' => 'Tareas Pendientes',
            'finalizadas' => 'Tareas Finalizadas',
        ];

        include "views/index.view.php";
    }
}
