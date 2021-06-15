<?php

namespace App\core;

class Config
{
    public $data = [];
    private $config_file ;

    public function __construct($config_file='config.json')
    {
        /*$this->data['title'] = 'Lista de Tomas';
        $this->data['nombre_lista'] = "Lista de Tareas: Tomas";*/
        $this->config_file = $config_file;
        $this->load_config();
    }

    public function add_config($config_name, $config_value)
    {
        $this->data[$config_name] = $config_value;
    }

    public function save()
    {
        $file_content = json_encode($this->data);
        file_put_contents($this->config_file, $file_content);
    }

    private function load_config()
    {
        if (!file_exists($this->config_file)) {
            $this->generate_file();
        }
        $file_content = file_get_contents($this->config_file);
        $this->data = json_decode($file_content, true);
    }

    private function generate_file()
    {
        copy('config.json.example', $this->config_file);
    }
}
