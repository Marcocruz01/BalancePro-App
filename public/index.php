<?php 

// Carga el archivo de configuración principal de la aplicación
require_once __DIR__ . '/../includes/app.php';

use MVC\Router; 
use Controllers\AuthController; 

// Crea una nueva instancia del Router
$router = new Router();

/**
 * ======================
 * RUTAS DE AUTENTICACIÓN
 * ======================
*/

// INICIAR SESIÓN
$router->get('/login', [AuthController::class, 'login']); // Muestra el formulario de login (GET)
$router->post('/login', [AuthController::class, 'login']); // Procesa los datos enviados desde el formulario (POST)

// CERRAR SESIÓN
$router->get('/logout', [AuthController::class, 'logout']); // Termina la sesión del usuario y lo redirige (GET)

// CREACIÓN DE CUENTAS USUARIO 
$router->get('/crear-cuenta', [AuthController::class, 'crear']); // Formulario para registrarse (GET)
$router->post('/crear-cuenta', [AuthController::class, 'crear']); // Procesa el registro de usuario (POST)

// RECUPERAR CONTRASEÑA (OLVIDE PASSWORD)
$router->get('/olvide-password', [AuthController::class, 'olvide']); // Muestra formulario para solicitar recuperación (GET)
$router->post('/olvide-password', [AuthController::class, 'olvide']); // Envía las instrucciones al correo (POST)

// REESTABLECER CONTRASEÑA
$router->get('/restablecer-password', [AuthController::class, 'restablecer']); // Muestra formulario para ingresar nueva contraseña con token (GET)
$router->post('/restablecer-password', [AuthController::class, 'restablecer']); // Procesa la nueva contraseña (POST)

// CONFIRMAR CUENTA
$router->get('/confirmar-cuenta', [AuthController::class, 'confirmar']); // Ruta que valida un token enviado por email para activar la cuenta (GET)

//  MENSAJE DESPUES DE UN REGISTRO
$router->get('/mensaje', [AuthController::class, 'mensaje']);  // Mostramos mensaje despúes de registrarnos

// PÁGINA NO ENCONTRADA 
$router->get('/404', [AuthController::class, 'paginaNoEncontrada']);

/**
 * ======================
 * EJECUTAR EL ROUTER
 * ======================
*/
// Comprueba la URL solicitada y el método HTTP,
// luego ejecuta el controlador correspondiente
$router->comprobarRutas();