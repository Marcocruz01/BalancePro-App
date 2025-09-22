<div class="w-full h-screen flex items-center justify-center px-4">
    <div class="text-center max-w-2xl">
        <!-- Código original -->
        <p class="text-base font-semibold text-red-600">404</p>
        <h1 class="mt-4 text-5xl font-semibold tracking-tight text-balance text-gray-900 sm:text-7xl">
            Página no encontrada
        </h1>
        <p class="mt-6 text-lg font-medium text-pretty text-gray-500 sm:text-xl/8">
            Lo sentimos, no pudimos encontrar la página que buscabas.
        </p>

        <!-- Mensaje adicional -->
        <p class="mt-4 text-sm text-gray-500">
            Es posible que el enlace haya expirado, la dirección esté mal escrita o que la página haya sido movida.
        </p>

        <!-- Acciones principales -->
        <div class="mt-10 flex items-center justify-center gap-x-6">
            <a href="/login"
                class="rounded-md bg-zinc-900 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-zinc-700 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-zinc-700">
                Regresar a inicio
            </a>
            <a href="/login" class="text-sm font-semibold text-gray-900">Soporte técnico <span aria-hidden="true">&rarr;</span></a>
        </div>

        <!-- Buscador -->
        <form class="mt-8 flex justify-center">
            <input type="text" placeholder="Buscar en el sitio..."
                class="w-64 rounded-l-md border border-gray-300 px-3 py-2 text-sm focus:ring-2 focus:ring-zinc-700" />
            <button type="submit"
                class="rounded-r-md bg-zinc-900 px-4 py-2 text-sm font-semibold text-white hover:bg-zinc-700">
                Buscar
            </button>
        </form>

        <!-- Links rápidos -->
        <div class="mt-10">
            <p class="text-sm font-semibold text-gray-700">Accesos rápidos:</p>
            <div class="mt-4 flex flex-wrap justify-center gap-4">
                <a href="/dashboard" class="text-sm text-zinc-900 hover:text-zinc-700">Panel principal</a>
                <a href="/ingresos" class="text-sm text-zinc-900 hover:text-zinc-700">Ver ingresos</a>
                <a href="/gastos" class="text-sm text-zinc-900 hover:text-zinc-700">Ver gastos</a>
                <a href="/reportes" class="text-sm text-zinc-900 hover:text-zinc-700">Reportes</a>
                <a href="/perfil" class="text-sm text-zinc-900 hover:text-zinc-700">Mi perfil</a>
            </div>
        </div>


        <!-- Info de contacto -->
        <div class="mt-10 text-sm text-gray-500">
            <p>¿Necesitas ayuda inmediata? Escríbenos a 
                <a href="mailto:soporte@balancepro-corporation.com" class="font-semibold text-zinc-900 hover:text-zinc-700">
                    soporte@balancepro-corporation.com
                </a>
            </p>
        </div>
    </div>
</div>
