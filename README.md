# ![logotipo de la empresa](/public/dist/img/logotipo.webp) BalancePro - Sistema de Autenticidad de Cuentas

BalancePro es un proyecto que gestiona la autenticación y verificación de cuentas de usuario. 
Incluye las páginas y flujos principales: inicio de sesión (login), crear cuenta (registro), "olvidé mi contraseña", restablecer contraseña,
página 404 personalizada y una página de mensajes dinámicos que muestra notificaciones según la situación (p. ej. sesión iniciada, cuenta creada, confirmar cuenta, error, etc.).

El objetivo es ofrecer una base sólida y segura para cualquier aplicación web que necesite gestión de usuarios, con buenas prácticas de seguridad y una experiencia de usuario clara.

---

![imagen del proyecto](/public/dist/img/login.png)
![imagen del proyecto](/public/dist/img/crear.png)
![imagen del proyecto](/public/dist/img/restablecer.png)

---

## 🚀 Funcionalidades principales

- **Inicio de sesión seguro**: Validación de credenciales en frontend y backend.  
- **Registro de cuenta**: Creación de usuario con confirmación por correo electrónico.  
- **Confirmación de cuenta**: Activación mediante enlace enviado al email.  
- **Recuperación de contraseña**:  
  - Solicitud de restablecimiento con correo de verificación.  
  - Enlace temporal con expiración para asignar una nueva contraseña.  
- **Mensajes personalizados**: Feedback dinámico según la situación (cuenta creada, sesión iniciada, confirmación pendiente, errores, etc.).  
- **Página 404 personalizada**: Manejo de rutas inexistentes con un diseño propio.  
- **Gestión de sesiones**: Manejo sessiones por medio de variables de PHP con control de acceso a rutas privadas.  
- **Buenas prácticas de seguridad**: Hash de contraseñas, tokens expiran, accesos privados, validaciones en todo el sistema.  
- **Diseño responsivo**: Adaptado para dispositivos móviles, tablets y escritorio.  

---

## ⚙️ Tecnologías utilizadas

- **HTML5** – Estructura semántica de las páginas (login, registro, mensajes, etc.).  
- **CSS3 / Tailwind CSS** – Estilos modernos y diseño responsivo.  
- **JavaScript (ES6 Modules)** – Validaciones, interactividad en formularios y manejo de mensajes dinámicos.  
- **PHP** – Lógica backend y renderizado de vistas (ejemplo: `layout.php`).  
- **MySQL / PostgreSQL** – Base de datos para gestión de usuarios, tokens y sesiones.  
- **Mailer (PHPMailer / SMTP)** – Envío de correos para confirmación y restablecimiento de contraseña.  
- **Google Fonts** – Tipografía moderna para mejorar la UI.
- - **Vendor/** – Carpeta generada por Composer que contiene librerías externas.  
