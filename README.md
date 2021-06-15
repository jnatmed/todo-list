# To Do List

Proyecto de prueba para clase de baceknd de PAW - UNLu.

## Iteracion 1

- Todo List en HTML
  - Agregar tareas (index.html)
  - https://gitlab.com/pawunlu/todo-list/-/commit/e54c45202913d0ea520ef494224ecbf8d0a794de

## Iteracion 2

* index.php donde se define todo lo "variable"
* include de index.view.php
* renombrar index.html -> index.view.php
  * uso de PHP en modo "template"
* https://gitlab.com/pawunlu/todo-list/-/commit/f6d447181c02e2ae645d5f2b337dddb5e29707e7

## Iteracion 3

* Generacion de modelos
  * 2 objetos: ToDoList y Task
  * Los array del index.php ahora deben hacerse con tasks
* https://gitlab.com/pawunlu/todo-list/-/commit/31e8a976c2b21314fdff0eaaa252483e3183779f

## Iteracion 4

Revisar $_SERVER

```php
echo "<pre>";
var_dump($_SERVER);
exit(0);
```

Probar varios path para:

```
echo parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
exit(0);
```

* Formulario de creacion de tareas
  * Rutear segun peticion con ifs
  * Formulario y procesamiento de POST
  * 2 endpoints nuevos
    * /new_task (vista propia)
    * /save_task (vuelve al index.view pero con mensaje al usuario)
* https://gitlab.com/pawunlu/todo-list/-/commit/403673e16092fd9931fbcf94f0036031cb2e3e1e

## Iteracion 5

Generacion de controllers: Es necesario que la logica de que hacer ante cada url sea encapsulada por controladores especificos, porque sino el index.php se va a llenar de codigo. Una operación esta definida por path + metodo http.

* Un controller procesa una peticion especifica, debemos detectar dicha peticion
* Controller: ToDoListController
* Controller: TaskController
* Se puede mejorar el if de rutas, si es una combinacion path + metodo no contemplado -> 404 http_response_code

https://gitlab.com/pawunlu/todo-list/-/commit/53668b89064de0600b73012d5fc6287b5aa3898e

## Iteracion 6

Archivo setup.php con todos los includes y configuraciones iniciales.

Armar clase ruteador eliminando ifs del index.php. La idea es generar un objeto que tenga como unica responsabilidad el mapeo de las rutas+metodos a funciones.

Agregar nav

Agregar try catch para manejo de paths inexistentes

https://gitlab.com/pawunlu/todo-list/-/commit/963850b42147d6ab2216e8c04fe5118e7fd223b5

## Iteracion 7

Armar una clase que gestione los requests. Se instancia en el setup y se le paso al ruteador el request completo.

Generar un controller genérico que cargue opciones por default. Para opciones por default, crear un objeto Config que se instancia en setup, y tiene las opciones basicas. El controller generico maneja opciones que se repiten en todos los controllers. Implica refactor de las vistas porque las variables ahora estan en objetos del controlador instanciado.

https://gitlab.com/pawunlu/todo-list/-/commit/816d57aab7e1146d01ba35110ce6d9275a01d21c

## Iteracion 8

Refactor grande las vistas.

Mover todas las vistas al directorio views

Crear N vistas con secciones para ir componiendo las vistas "grandes".

Seccion de tipos de listas, para crear una sola vista que cargue todas las secciones con un array de secciones

Con `error_log` enviar los errores del try por consola para ver que paso.

Vista de nav

Vista del form

https://gitlab.com/pawunlu/todo-list/-/commit/5ad26407e364e288ffe0f3e4afd727cb70da10f2

## Iteracion 9

Hacer persistencia de la config y un archivo de configuracion.

Link en nav de editar configuracion

Controller y Vista de edicion de config (formulario)

Constructor del config ahora recibe el archivo de configuracion y lo levanta. si no existe crea uno en base a uno de ejemplo.

En setup se agregan las nuevas rutas de edicion y save de config

git ignore del archivo de configuracion

Formularios para cambiar dicha config y hacerla persistente.

https://gitlab.com/pawunlu/todo-list/-/commit/dc3f349fb5a173b38b23c1fb0590c1fc05c3bed6

## Iteracion 10

Mecanismo de manejo de estaticos y assets
