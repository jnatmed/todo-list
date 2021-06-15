<?php

namespace App\controllers;

use App\core\Controller;
use App\models\ToDoList;

class ToDoListController extends Controller
{
    public function index()
    {
        $todo_list = new ToDoList;
        $todo_list->list_task();

        // $todo_list->create_task("Carniceria: Asado");
        // $todo_list->create_task("Verduleria: Lechuga, Tomate, Huevo");
        // $todo_list->create_task("Supermercado: Desodorante, Pagar Impuestos");
        // $todo_list->create_task("Farmacia: Remedios", true);

        // echo "<pre>";

        // $todo_list->$tipo()

        // var_dump($todo_list->tasks);
            // foreach ($todo_list->$tasks() as $tsk){
                // print($tsk->descripcion);                
            // }
        // exit(0);


        $secciones = [
            'pendientes' => 'Tareas Pendientes',
            'finalizadas' => 'Tareas Finalizadas',
        ];

        include "views/index.view.php";
    }
}
