<?php

namespace Model;

class Usuario extends ActiveRecord {

    protected static $tabla = 'usuarios';
    protected static $columnasDB = ['id', 'nombre', 'apellido', 'email', 'password', 'token', 'confirmado'];

     public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->password = $args['password'] ?? '';
        $this->password_repeat = $args['password_repeat'] ?? '';
        $this->token = $args['token'] ?? '';
        $this->confirmado = $args['confirmado'] ?? 0;
    }

    // Validacion para cuentas nuevas
    public function validacionCuentasNuevas() {
        self::$alertas = []; // reiniciar para evitar que se acumulen
        
        // 1. Validar campos vacíos
        if(!$this->nombre || !$this->apellido || !$this->email || !$this->password || !$this->password_repeat) {
            // Mostramos las alertas
            self::$alertas['error'][] = 'Asegurate de completar todos los campos';

        // 2. Validar email solo si todos los campos están llenos
        } elseif(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            // Mostramos las alertas
            self::$alertas['error'][] = 'El email no es válido';

        // 3. Validar contraseña solo si email es válido
        } elseif(strlen($this->password) < 6) {
            // Mostramos las alertas
            self::$alertas['error'][] = "La contraseña debe tener al menos 6 caracteres";
        }

        // 4. Validar coincidencia de contraseñas
        if($this->password !== $this->password_repeat) {
            self::$alertas['error'][] = "Las contraseñas no coinciden";
        }

        // 5. Retornamos las alertas
        return self::$alertas;
    }

    // Validación de el campo email / correo eléctronico
    public function validarEmail() {
        self::$alertas = []; // reiniciar para evitar que se acumulen

        // 1. Validar el campo de correo eléctronico 
        if(!$this->email) {
            // Mostramos las alertas
            self::$alertas['error'][] = 'Asegurate de completar todos los campos';
        }

        // 2. Retornamos las alertas
        return self::$alertas;
    }

    // Validar formulario de restablecer contraseñas
    public function validarCredenciales() {
        self::$alertas = []; // reiniciar para evitar que se acumulen

        // 1. Validar campos vacíos
        if(!$this->password || !$this->password_repeat) {
            // Mostramos las alertas
            self::$alertas['error'][] = 'Asegurate de completar todos los campos';

        // 2. Validar longitud de la contraseña 
        } elseif(strlen($this->password) < 6) {
            // Mostramos las alertas
            self::$alertas['error'][] = "La contraseña debe tener al menos 6 caracteres";
        }

        // 3. Validar que las credenciales empaten
        if($this->password !== $this->password_repeat) {
            self::$alertas['error'][] = "Las contraseñas no coinciden";
        }

        // 4. Retornamos las alertas
        return self::$alertas;
    }

    // Validar el inicio de sesión
    public function validarSesion() {
        self::$alertas = []; // reiniciar para evitar que se acumulen

        // 1. Validar campos vacíos
        if(!$this->email || !$this->password) {
            // Mostramos las alertas
            self::$alertas['error'][] = 'Asegurate de completar todos los campos';
        }

        // 2. Retornamos las alertas
        return self::$alertas;
    }

    // Función para hashear los passwords
    public function hashPassword() {
        $this->password = password_hash($this->password, PASSWORD_BCRYPT); // Hashear la contraseña con el metodo de php PASSWORDBCRYPT
    }

    // Función que genera tokens
    public function token() {
        $this->token = uniqId();
    }
}