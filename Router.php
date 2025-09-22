<?php

namespace MVC;

/**
 * Clase Router
 * 
 * Esta clase se encarga de gestionar el enrutamiento de la aplicación.
 * Permite registrar rutas GET y POST, comprobar la ruta actual y renderizar vistas.
*/
class Router {
    // Arreglos para almacenar las rutas registradas por método
    public array $getRoutes = [];
    public array $postRoutes = [];

    /**
     * Registra una ruta GET en el router
     * 
     * @param string $url URL de la ruta (ej. '/login')
     * @param callable $fn Función o método controlador asociado
    */
    public function get($url, $fn) {
        $this->getRoutes[$url] = $fn;
    }

    /**
     * Registra una ruta POST en el router
     * 
     * @param string $url URL de la ruta (ej. '/login')
     * @param callable $fn Función o método controlador asociado
    */
    public function post($url, $fn) {
        $this->postRoutes[$url] = $fn;
    }

    /**
     * Comprueba la ruta actual y ejecuta la función asociada
     * 
     * Determina la URL solicitada y el método HTTP usado (GET o POST).
     * Busca si la ruta está registrada y, si existe, llama a la función asociada.
    */
    public function comprobarRutas() {
        // Obtiene la URL actual o '/' si no existe
        $currentUrl = strtok($_SERVER['REQUEST_URI'], '?') ?? '/';
        // Determina el método HTTP (GET o POST)
        $method = $_SERVER['REQUEST_METHOD'];

        // Busca la función asociada según el método
        if ($method === 'GET') {
            $fn = $this->getRoutes[$currentUrl] ?? null;
        } else {
            $fn = $this->postRoutes[$currentUrl] ?? null;
        }

        if ($fn) {
            /**
             * call_user_func: Llama a una función o método de forma dinámica.
             * Se usa aquí porque el controlador puede ser cualquier función/método
             * y no lo conocemos de antemano.
             * 
             * Se pasa $this (el router) como argumento para que el controlador
             * pueda renderizar vistas u operar con el router si lo necesita.
            */
            call_user_func($fn, $this);
        } else {
            // Si no existe la ruta definida, se muestra mensaje de error
            echo "Página No Encontrada o Ruta no válida";
        }
    }

    /**
     * Renderiza una vista dentro del layout principal
     * 
     * @param string $view Nombre del archivo de vista (ej. 'login')
     * @param array $datos Datos a pasar a la vista en forma de variables
    */
    public function render($view, $datos = []) {
        // Extrae los datos como variables dinámicas
        // Ejemplo: ['nombre'=>'Marco'] => $nombre = 'Marco'
        foreach ($datos as $key => $value) {
            $$key = $value;  
        }

        // Inicia el buffer de salida
        ob_start();

        // Incluye la vista específica dentro de /views/
        include_once __DIR__ . "/views/$view.php";

        // Guarda y limpia el buffer en la variable $contenido
        $contenido = ob_get_clean();

        // Inserta la vista dentro del layout principal
        include_once __DIR__ . '/views/layout.php';
    }
}
