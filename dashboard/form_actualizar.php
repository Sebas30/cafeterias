<?php

require '../vendor/autoload.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {

    $id = $_GET['id'];

    $productosActualizar = new inventarios\productos;

    $resultado = $productosActualizar->mostrarPorId($id);

    if (!$resultado)
        header('Location: ../dashboard/home.php');
} else {
    header('Location: ../dashboard/home.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/output.css">
    <title>Home : Dashboard</title>
</head>

<body class="flex bg-gray-100 min-h-screen">
    <aside class="hidden sm:flex sm:flex-col">
        <div class="flex-grow flex flex-col justify-between text-white bg-fuchsia-600">
            <nav class="flex flex-col mx-4 my-6 space-y-4">
                <a href="#"
                    class="inline-flex items-center justify-center py-3 hover:text-white hover:bg-fuchsia-700 focus:text-white focus:bg-fuchsia-700 rounded-lg">
                    <span class="sr-only">Home</span>
                    <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                    </svg>
                </a>
            </nav>
            <div class="inline-flex items-center justify-center h-20 w-20 border-t border-white"></div>
        </div>
    </aside>
    <div class="flex-grow text-gray-800">
        <header class="flex items-center h-20 px-6 sm:px-10 bg-white">
            <button
                class="block sm:hidden relative flex-shrink-0 p-2 mr-2 text-gray-600 hover:bg-gray-100 hover:text-gray-800 focus:bg-gray-100 focus:text-gray-800 rounded-full">
                <span class="sr-only">Menu</span>
                <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                </svg>
            </button>
            <div class="flex flex-shrink-0 items-center ml-auto">
                <button class="inline-flex items-center p-2 hover:bg-gray-100 focus:bg-gray-100 rounded-lg">
                    <span class="sr-only">User Menu</span>
                    <div class="hidden md:flex md:flex-col md:items-end md:leading-tight">
                        <span class="font-semibold">Usuario</span>
                        <span class="text-sm text-gray-600">cafeteria nombre</span>
                    </div>
                    <span class="h-12 w-12 ml-2 sm:ml-3 mr-2 bg-gray-100 rounded-full overflow-hidden">
                        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="user profile photo"
                            class="h-full w-full object-cover">
                    </span>
                    <svg aria-hidden="true" viewBox="0 0 20 20" fill="currentColor"
                        class="hidden sm:block h-6 w-6 text-gray-300">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <div class="border-l pl-3 ml-3 space-x-1">
                    <button
                        class="relative p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-600 focus:bg-gray-100 focus:text-gray-600 rounded-full">
                        <span class="sr-only">Notifications</span>
                        <span class="absolute top-0 right-0 h-2 w-2 mt-1 mr-2 bg-red-500 rounded-full"></span>
                        <span
                            class="absolute top-0 right-0 h-2 w-2 mt-1 mr-2 bg-red-500 rounded-full animate-ping"></span>
                        <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                    </button>
                    <button
                        class="relative p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-600 focus:bg-gray-100 focus:text-gray-600 rounded-full">
                        <span class="sr-only">Log out</span>
                        <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                    </button>
                </div>
            </div>
        </header>
        <main class="p-6 sm:p-10 space-y-6">
            <div class="flex flex-col space-y-6 md:space-y-0 md:flex-row justify-between">
                <div class="mr-6">
                    <h1 class="text-4xl font-semibold mb-2">C-IN</h1>
                    <h2 class="text-gray-600 ml-0.5">AInventario cafeterias</h2>
                </div>
                <div class="flex flex-wrap items-start justify-end -mb-3">
                    <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="inline-flex px-5 py-3 text-white bg-fuchsia-600 hover:bg-fuchsia-700 focus:bg-fuchsia-700 rounded-md ml-6 mb-3">
                        <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            class="flex-shrink-0 h-6 w-6 text-white -ml-1 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                        Regresar
                    </button>
                </div>
            </div>

            <section class="grid md:grid-cols-2 xl:grid-cols-2 xl:grid-rows-6 xl:grid-flow-col gap-6">
                <div class="flex flex-col md:col-span-2 md:row-span-2 bg-white shadow rounded-lg">
                    <div class="px-6 py-5 font-semibold border-b border-gray-100">
                        Actualización de productos
                    </div>

                    <div class="relative overflow-x-auto">
                        <form action="../controllers/productos.php" method="POST" class="max-w-screen-lg mx-auto" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php print $resultado['id'] ?>">
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name_producto">
                                        Nombre producto
                                    </label>
                                    <input class="appearance-none block w-full bg-gray-100 text-gray-700 rounded-xl py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-gray-100" value="<?php print $resultado['nombre_producto'] ?>" name="name_producto" type="text">
                                </div>
                                <div class="w-full md:w-1/2 px-3">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="referencia">
                                        Referencia
                                    </label>
                                    <input class="appearance-none block w-full bg-gray-100 text-gray-700 rounded-xl py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-gray-100" value="<?php print $resultado['referencia'] ?>" name="referencia" type="text">
                                </div>
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"  for=precio">
                                        Precio
                                    </label>
                                    <input class="appearance-none block w-full bg-gray-100 text-gray-700 rounded-xl py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-gray-100" value="<?php print $resultado['precio'] ?>" name="precio" type="text">
                                </div>
                                <div class="w-full md:w-1/2 px-3">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="peso">
                                        Peso
                                    </label>
                                    <input class="appearance-none block w-full bg-gray-100 text-gray-700 rounded-xl py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-gray-100" value="<?php print $resultado['peso'] ?>" name="peso" type="text">
                                </div>
                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="categoria">
                                        Categoria
                                    </label>
                                    <div class="relative">
                                        <select class="appearance-none block w-full bg-gray-100 text-gray-700 rounded-xl py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-gray-100" value="<?php print $resultado['categoria'] ?>" name="categoria" type="text">
                                            <option value="Lacteos">Lacteos</option>
                                            <option value="Parba">Parba</option>
                                            <option value="Liquidos">Liquidos</option>
                                        </select>
                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full md:w-1/2 px-3">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="stock">
                                        Stock
                                    </label>
                                    <input  class="appearance-none block w-full bg-gray-100 text-gray-700 rounded-xl py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-gray-100" value="<?php print $resultado['stock'] ?>" name="stock" type="text">
                                </div>
                                <div class="w-full md:w-1/2 px-3">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="fecha_creacion">
                                        Fecha de creacion
                                    </label>
                                    <input class="appearance-none block w-full bg-gray-100 text-gray-700 rounded-xl py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-gray-100" value="<?php print $resultado['fecha_creacion'] ?>" name="fecha_creacion" type="date">
                                </div>
                            </div>
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="imagen">
                                        Imagen
                                    </label>
                                    <?php
                                    $foto = '../upload/' . $resultado['imagen'];

                                    if (file_exists($foto)) {
                                    ?>
                                        <center>
                                            <img src="<?php print $foto; ?>" class="" title="Imagen actual" width="100" height="100">
                                            <input type="file" class="appearance-none block w-full bg-gray-100 text-gray-700 rounded-xl py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-gray-100e" id="" name="imagen">
                                            <input type="hidden" name="foto_temp" id="imagen" value="<?php print $resultado['imagen'] ?>">

                                        </center>
                                    <?php } ?>
                                </div>
                            <input type="submit" data-modal-hide="defaultModal" class="cursor-pointer text-white bg-fuchsia-700 hover:bg-fuchsia-800 focus:ring-4 focus:outline-none focus:ring-fuchsia-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-fuchsia-600 dark:hover:bg-fuchsia-700 dark:focus:ring-fuchsia-800" name="accion" value="Actualizar">
                        </form>
                    </div>

                </div>
            </section>
        </main>
    </div>
    <!-- Modal creacion de productos -->
    <script src="../public/js/home.js"></script>
</body>

</html>