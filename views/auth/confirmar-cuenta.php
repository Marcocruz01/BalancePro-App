<div class="w-full h-screen flex items-center justify-center">
    <!-- Sombra -->
    <div class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-60">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md text-center">
            <!-- Icono de éxito -->
            <div class="flex items-center justify-center w-12 h-12 mx-auto bg-green-100 rounded-full">
                <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
            </div>  
            <!-- Título -->
            <h2 class="mt-4 text-2xl font-bold text-gray-800">¡Cuenta activada con éxito!</h2>
            <!-- Texto motivador -->
            <p class="mt-3 text-gray-600 text-sm leading-relaxed">
                Bienvenido a <span class="font-semibold text-blue-600">Balance Pro</span>, tu nueva app financiera.  
                Ahora tendrás acceso a:
            </p>
            <ul class="mt-3 space-y-2 text-gray-700 text-sm text-left">
                <li class="flex items-center text-gray-800 font-medium">
                    <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Control de ingresos y gastos en tiempo real
                </li>
                <li class="flex items-center text-gray-800 font-medium">
                    <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Reportes claros y fáciles de entender
                </li>
                <li class="flex items-center text-gray-800 font-medium">
                    <svg class="w-4 h-4 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Consejos personalizados para mejorar tus finanzas
                </li>
            </ul>
            <!-- Botón Activar -->
            <div class="mt-6">
                <a href="/login"
                    class="w-full inline-block px-6 py-3 text-white bg-blue-600 hover:bg-blue-700 rounded-lg font-medium shadow transition">
                    Continuar
                </a>
            </div>
        </div>
    </div>
    <?php include_once __DIR__ . '../../templates/alertas.php'; ?>
</div>