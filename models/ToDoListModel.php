<?php

namespace App\models;

require 'config.php';

use PDO;
use App\models\Task;

class ToDoList
{
    public $tasks = [];
    private $dsn;
    public $params = [
        'host' => 'localhost',
        'user' => 'root',
        'pwd' => 'y00s4d14',
        'db' => 'todolist'
    ];


    public function __construct(){

        $this->dsn = sprintf("mysql:host=%s;dbname=%s", $this->params['host'], $this->params['db']);
        try {
            $this->db = new PDO($this->dsn, $this->params['user'],$this->params['pwd']);    
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (\Throwable $th) {
            echo ("<pre>");
            var_dump($th);
            exit(0);   
        }
    }
    public function add_task(Task $task)
    {

        // echo "<pre>";
        // var_dump($task->descripcion);
        // exit(0);
        $consulta = "INSERT INTO tareas(`descripcion`,`finalizada`) 
                        VALUES('{$task->descripcion}',
                               false
                            )";
        try{
            $sql = $this->db->prepare($consulta);
            $sql->execute();
        }catch(Exception $e){
            echo($e);
        }
        $this->tasks[] = $task;
    }

    public function list_task()
    {

        
        $sql = "SELECT * FROM tareas";
        try{

            
            foreach($this->db->query($sql) as $res){
                $resul[] = $res;
            }
            
            // echo "<pre>";
            // var_dump($resul);
            // exit(0);
            
            foreach($resul as $tsk){
                $this->tasks[] = new Task($tsk[0], $tsk[1]);               
            }
            // echo "<pre>";
            // var_dump($this->task);
            // exit(0);
    
            $this->db = NULL;
        }catch(Exception $e){
            echo $e;
        }
    }

    public function create_task($descripcion, $finalizada = false)
    {
        $task = new Task($descripcion, $finalizada);
        $this->add_task($task);
        return $task;
    }

    public function pendientes()
    {
        return array_filter($this->tasks, function($task) {
            return !$task->finalizada;
        });
    }

    public function finalizadas()
    {
        return array_filter($this->tasks, function($task) {
            return $task->finalizada;
        });
    }
}
