<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/output.css">
    <title>Login</title>
</head>
<body>
    <div class="flex items-center min-h-screen p-4 bg-gray-100 lg:justify-center">
        <div class="flex flex-col overflow-hidden bg-white rounded-md shadow-lg max md:flex-row md:flex-1 lg:max-w-screen-md">
            <div class="p-4 py-6 text-white bg-fuchsia-600 md:w-80 md:flex-shrink-0 md:flex md:flex-col md:items-center md:justify-evenly">
                <div class="my-3 text-4xl font-bold tracking-wider text-center">
                    <a href="#">C-IN</a>
                </div>
                <p class="mt-6 font-normal text-center text-gray-300 md:mt-0">
                    C-IN se encarga de llevar un control minucioso de todos los productos y suministros que utilizamos a diario para brindarte la mejor experiencia posible.
                </p>
            </div>
            <div class="p-5 bg-white md:flex-1">
                <h3 class="my-4 text-2xl font-semibold text-gray-700">Acceso a inventario</h3>
                <form action="controllers/login.php" method="POST" class="flex flex-col space-y-5">
                    <div class="flex flex-col space-y-1">
                        <label for="usuario" class="text-sm font-semibold text-gray-500">Usuario</label>
                        <input type="text" id="usuario" name="usuario" autofocus class="px-4 py-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200"/>
                    </div>
                    <div class="flex flex-col space-y-1">
                        <div class="flex items-center justify-between">
                        <label for="contraseña" class="text-sm font-semibold text-gray-500">Contraseña</label>
                        <a href="#" class="text-sm text-fuchsia-600 hover:underline focus:text-fuchsia-800">¿Has olvidado tu contraseña?</a>
                        </div>
                        <input type="password" id="contraseña" name="contraseña" class="px-4 py-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200"/>
                    </div>
                    <div>
                        <button type="submit" class="w-full px-4 py-2 text-lg font-semibold text-white transition-colors duration-300 bg-fuchsia-600 rounded-md shadow hover:bg-fuchsia-600 focus:outline-none focus:ring-fuchsia-200 focus:ring-4">
                            Acceder
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>