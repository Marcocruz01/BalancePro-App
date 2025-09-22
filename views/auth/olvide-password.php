<div class="w-full h-screen flex items-center justify-center">
    <!-- Forma 1 -->
    <div class="absolute inset-0 -z-10 overflow-hidden blur-2xl hidden md:flex justify-center items-start">
        <div 
        class="w-[1000px] h-[600px] bg-gradient-to-tr from-[#2b54ac] to-[#1680d6] opacity-20"
        style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
        </div>
    </div>

    <!-- Forma 3 -->
    <div class="absolute inset-0 -z-30 overflow-hidden blur-2xl hidden md:flex justify-center items-center">
        <div 
        class="w-[600px] h-[250px] bg-gradient-to-l from-[#5845ff] to-[#469397] opacity-20"
        style="clip-path: polygon(0% 0%, 100% 10%, 90% 100%, 10% 90%)">
        </div>
    </div>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="md:bg-gray-50 md:border md:border-gray-200 md:rounded-xl md:shadow-sm md:p-8">
            <!-- Encabezado del formulario -->
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <img src="/dist/img/logotipo.webp" alt="imagen de la empresa" class="mx-auto h-10 w-auto">
                <h1 class="mt-8 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Recupera tu contraseña</h1>
                <p class="text-center text-gray-600 font-normal">Ingresa tu correo electrónico y te enviaremos un enlace seguro para <span class="text-blue-600 font-semibold">restablecer tu contraseña</span> y volver a acceder a tu cuenta.</p>

            </div>
            <!-- Formulario -->
            <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-sm">
                <form action="/olvide-password" method="POST" class="space-y-6">
                    <!-- Campos -->
                    <div>
                        <label for="email" class="block text-sm/6 font-medium text-gray-900">Correo eléctronico</label>
                        <div class="mt-2">
                            <input type="email" id="email" placeholder="Tu correo eléctronico" name="email" class="block w-full rounded-md border border-gray-200 bg-gray-50 md:bg-white px-3 py-1.5 text-base text-gray-900 placeholder:text-gray-400 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-blue-500 sm:text-sm/6">
                        </div>
                    </div>
                    <!-- Campos -->
                    <div>
                        <button type="submit" class="flex w-full justify-center rounded-md bg-zinc-900 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-zinc-700 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Restablecer ahora</button>
                    </div>
                </form>
                <div class="flex flex-col mt-10">
                    <p class="text-center text-sm/6 text-gray-500">¿Ya tienes una cuenta? <a href="/login" class="font-semibold text-blue-600 hover:text-blue-500">Inicia sesión aquí</a></p>
                    <p class="text-center text-sm/6 text-gray-500">¿Aún no tienes cuenta? <a href="/crear-cuenta" class="font-semibold text-blue-600 hover:text-blue-500">Regístrate gratis</a></p>
                </div>
            </div>
            <?php include_once __DIR__ . '../../templates/alertas.php'; ?>
        </div>
    </div>
</div>