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
                    <h2 class="text-gray-600 ml-0.5">Inventario cafeterias</h2>
                </div>
                <div class="flex flex-wrap items-start justify-end -mb-3">
                    <button data-modal-target="defaultModal" data-modal-toggle="defaultModal"
                        class="inline-flex px-5 py-3 text-white bg-fuchsia-600 hover:bg-fuchsia-700 focus:bg-fuchsia-700 rounded-md ml-6 mb-3">
                        <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            class="flex-shrink-0 h-6 w-6 text-white -ml-1 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                        Crear nuevo producto
                    </button>
                </div>
            </div>
            <section class="grid md:grid-cols-3 xl:grid-cols-3 gap-6">

                <!-- Main modal -->
                <div id="defaultModal" tabindex="-1" aria-hidden="true"
                    class="fixed top-0 left-0 right-0 z-50 flex items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full bg-gray-600 bg-opacity-80">
                    <div class="relative w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-white">
                            <!-- Modal header -->
                            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-gray-600">
                                    Registro de productos
                                </h3>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-hide="defaultModal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Cerrar modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-6 space-y-6 flex flex-col items-center justify-center">
                                <form action="../controllers/productos.php" method="POST" class="w-full max-w-lg"
                                    enctype="multipart/form-data">
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="name_producto">
                                                Nombre producto
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-100 text-gray-700 rounded-xl py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-gray-100"
                                                name="name_producto" type="text">
                                        </div>
                                        <div class="w-full md:w-1/2 px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="referencia">
                                                Referencia
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-100 text-gray-700 rounded-xl py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-gray-100"
                                                name="referencia" type="text">
                                        </div>
                                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for=precio">
                                                Precio
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-100 text-gray-700 rounded-xl py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-gray-100"
                                                name="precio" type="text">
                                        </div>
                                        <div class="w-full md:w-1/2 px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="peso">
                                                Peso
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-100 text-gray-700 rounded-xl py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-gray-100"
                                                name="peso" type="text">
                                        </div>
                                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="categoria">
                                                Categoria
                                            </label>
                                            <div class="relative">
                                                <select
                                                    class="appearance-none block w-full bg-gray-100 text-gray-700 rounded-xl py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-gray-100"
                                                    name="categoria" type="text">
                                                    <option value="Lacteos">Lacteos</option>
                                                    <option value="Parba">Parba</option>
                                                    <option value="Liquidos">Liquidos</option>
                                                    <option value="granos">granos</option>
                                                    <option value="Utensilios">Utensilios</option>
                                                </select>
                                                <div
                                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20">
                                                        <path
                                                            d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="imagen">
                                                Imagen
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-100 text-gray-700 rounded-xl py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-gray-100"
                                                name="imagen" type="file">
                                        </div>
                                        <div class="w-full md:w-1/2 px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="stock">
                                                Stock
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-100 text-gray-700 rounded-xl py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-gray-100"
                                                name="stock" type="text">
                                        </div>
                                        <div class="w-full md:w-1/2 px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="fecha_creacion">
                                                Fecha de creacion
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-100 text-gray-700 rounded-xl py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-gray-100"
                                                name="fecha_creacion" type="date">
                                        </div>
                                    </div>
                                    <input type="submit" data-modal-hide="defaultModal"
                                        class="cursor-pointer text-white bg-fuchsia-700 hover:bg-fuchsia-800 focus:ring-4 focus:outline-none focus:ring-fuchsia-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-fuchsia-600 dark:hover:bg-fuchsia-700 dark:focus:ring-fuchsia-800"
                                        name="accion" value="Registrar">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center p-8 bg-white shadow rounded-lg">
                    <div
                        class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-purple-600 bg-purple-100 rounded-full mr-6">
                        <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <div>
                        <span class="block text-2xl font-bold">10</span>
                        <span class="block text-gray-500">Proximamente modulo de venta</span>
                    </div>
                </div>
                <div class="flex items-center p-8 bg-white shadow rounded-lg">
                    <div
                        class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-green-600 bg-green-100 rounded-full mr-6">
                        <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                    </div>
                    <div>
                        <span class="block text-2xl font-bold">
                            <?php 
                                require '../vendor/autoload.php';

                                $productos_stock = new inventarios\productos;

                                $cantidad_productos_stock = $productos_stock->countProductosStock();

                                if ($cantidad_productos_stock !== false) {
                                    echo "Productos en stock: " . $cantidad_productos_stock;
                                } else {
                                    echo "No se pudo obtener la información de stock.";
                                }
                            ?>
                        </span>
                        <span class="block text-gray-500">Productos con stock</span>
                    </div>
                </div>
                <div class="flex items-center p-8 bg-white shadow rounded-lg">
                    <div
                        class="inline-flex flex-shrink-0 items-center justify-center h-16 w-16 text-red-600 bg-red-100 rounded-full mr-6">
                        <svg aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6" />
                        </svg>
                    </div>
                    <div>
                        <span class="inline-block text-2xl font-bold">
                            <?php 
                                require '../vendor/autoload.php';

                                $productos_sin_stock = new inventarios\productos;

                                $cantidad_productos_sin_stock = $productos_sin_stock->countProductosSinStock();

                                if ($cantidad_productos_sin_stock !== false) {
                                    echo "Productos sin stock: " . $cantidad_productos_sin_stock;
                                } else {
                                    echo "No se pudo obtener la información de stock.";
                                }
                            ?>
                        </span>
                        <span class="block text-gray-500">Productos sin stock</span>
                    </div>
                </div>
            </section>
            <section class="grid md:grid-cols-2 xl:grid-cols-2 xl:grid-rows-6 xl:grid-flow-col gap-6">
                <div class="flex flex-col md:col-span-2 md:row-span-2 bg-white shadow rounded-lg">
                    <div class="px-6 py-5 font-semibold border-b border-gray-100">
                        Listado de productos
                    </div>

                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-white dark:bg-white dark:text-gray-400 text-center">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Nombre producto
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Referencia
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        precio
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Peso
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Categoria
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Stock
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Imagen
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Fecha de creación
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Acciones
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php

                                require '../vendor/autoload.php';

                                $productos = new inventarios\productos;

                                $info_productos = $productos->mostrarProductos();

                                $cantidad = count($info_productos);


                                if ($cantidad > 0) {
                                    $c = 0;

                                    for ($x = 0; $x < $cantidad; $x++) {
                                        $item = $info_productos[$x];

                            ?>
                                <tr class="bg-white rounded-3xl dark:bg-white text-gray-700 font-medium whitespace-nowrap px-6 py-4 text-center">
                                    <td class="px-6 py-4"> <?php echo $item['nombre_producto'] ?></td>
                                    <td class="px-6 py-4"> <?php echo $item['referencia'] ?></td>
                                    <td class="px-6 py-4"> <?php echo $item['precio'] ?></td>
                                    <td class="px-6 py-4"> <?php echo $item['peso'] ?></td>
                                    <td class="px-6 py-4"> <?php echo $item['categoria'] ?></td>
                                    <td class="px-6 py-4"> <?php echo $item['stock'] ?></td>
                                    <td class="px-6 py-4">
                                        <?php
                                        $foto = '../upload/' . $item['imagen'];

                                        if (empty($item['imagen']) || !file_exists($foto)) {
                                        ?>
                                            <img src="../public/images/sinfoto.png" class="h-20 w-20 max-w-full rounded-2xl w-1/2 mx-auto">
                                        <?php
                                        } else {
                                        ?>
                                            <img src="<?php echo $foto; ?>" class="h-20 w-20 max-w-full rounded-2xl w-1/2 mx-auto">
                                        <?php
                                        }
                                        ?>
                                    </td>

                                    <td class="px-6 py-4"> <?php echo $item['fecha_creacion'] ?></td>
                                    <td class="px-6 py-4">

                                        <div class="flex w-1/2 mx-auto">
                                            <!-- Editar productos -->
                                            <a href="form_actualizar.php?id=<?php echo $item['id']; ?>" class="hover:text-fuchsia-400" title="Editar producto">
                                                <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-pencil-square h-10 w-10" viewBox="0 0 16 16">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                </svg>
                                            </a>

                                            <!-- Eliminar productos -->
                                            <a href="../controllers/productos.php?action=confirmar&id=<?php echo $item['id']; ?>" class="hover:text-fuchsia-400" title="Eliminar producto">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-trash h-10 w-10" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                                </svg>
                                            </a>
                                        </div>

                                    </td>
                                </tr>
                                <?php
                                        /* Aqui cerramos el ciclo for  */
                                    }
                                    /* En caso de que no se encuentren registros */
                                } else {

                                    ?>
                                    <tr>
                                        <!-- Entonces mostrar en pantalla que no hay registro de productos -->
                                        <div class="px-6 py-4">NO HAY REGISTROS</div>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </section>
        </main>
    </div>
    <!-- Modal creacion de productos -->
    <script src="../public/js/home.js"></script>
</body>

</html>