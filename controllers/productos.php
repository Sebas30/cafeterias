<?php
require_once '../vendor/autoload.php'; 

$productos = new inventarios\productos;



if($_SERVER['REQUEST_METHOD'] ==='POST')
{
    if($_POST['accion']==='Registrar'){

        if (empty($_POST['name_producto']))
            exit("<script>alert(\"¡El campo nombre de producto no puede estar vacío!\");</script><script>window.location.href='../dashboard/home.php';</script>");
        
        if(empty($_POST['referencia']))
            exit("<script>alert(\"¡El campo referencia no puede estar vacio!\");</script><script>window.location.href='../dashboard/home.php';</script>");


        if(empty($_POST['precio']))
            exit("<script>alert(\"¡El campo precio no puede estar vacio!\");</script><script>window.location.href='../dashboard/home.php';</script>");

        if(empty($_POST['peso']))
            exit("<script>alert(\"¡El campo peso no puede estar vacio!\");</script><script>window.location.href='../dashboard/home.php';</script>");

        if(empty($_POST['categoria']))
            exit("<script>alert(\"¡El campo categoria no puede estar vacio!\");</script><script>window.location.href='../dashboard/home.php';</script>");


        if(empty($_POST['stock']))
            exit("<script>alert(\"¡El campo stock no puede estar vacio!\");</script><script>window.location.href='../dashboard/home.php';</script>");


        if(empty($_POST['fecha_creacion']))
            exit("<script>alert(\"¡El campo fecha de creacion no puede estar vacio!\");</script><script>window.location.href='../dashboard/home.php';</script>");



        $_params = array(
            'name_producto'=>$_POST['name_producto'],
            'referencia'=> $_POST['referencia'],
            'precio'=>$_POST['precio'],
            'peso'=>$_POST['peso'],
            'categoria'=>$_POST['categoria'],
            'imagen'=>SubirFoto(),
            'stock' => $_POST['stock'],
            'fecha_creacion' => $_POST['fecha_creacion'],

        );

        $rpt = $productos->registrarProducto($_params);

        if($rpt)
            header('Location: ../dashboard/home.php');
        else
            print 'Error al registrar el producto';

    }



    if($_POST['accion']==='Actualizar')
    {

        if (empty($_POST['name_producto']))
            exit("<script>alert(\"¡El campo nombre de producto no puede estar vacío!\");</script><script>window.location.href='../dashboard/home.php';</script>");
        
        if(empty($_POST['referencia']))
            exit("<script>alert(\"¡El campo referencia no puede estar vacio!\");</script><script>window.location.href='../dashboard/home.php';</script>");


        if(empty($_POST['precio']))
            exit("<script>alert(\"¡El campo precio no puede estar vacio!\");</script><script>window.location.href='../dashboard/home.php';</script>");

        if(empty($_POST['peso']))
            exit("<script>alert(\"¡El campo peso no puede estar vacio!\");</script><script>window.location.href='../dashboard/home.php';</script>");

        if(empty($_POST['categoria']))
            exit("<script>alert(\"¡El campo categoria no puede estar vacio!\");</script><script>window.location.href='../dashboard/home.php';</script>");


        if(empty($_POST['stock']))
            exit("<script>alert(\"¡El campo stock no puede estar vacio!\");</script><script>window.location.href='../dashboard/home.php';</script>");


        if(empty($_POST['fecha_creacion']))
            exit("<script>alert(\"¡El campo fecha de creacion no puede estar vacio!\");</script><script>window.location.href='../dashboard/home.php';</script>");



        $_params = array(
            'name_producto'=>$_POST['name_producto'],
            'referencia'=> $_POST['referencia'],
            'precio'=>$_POST['precio'],
            'peso'=>$_POST['peso'],
            'categoria'=>$_POST['categoria'],
            'stock' => $_POST['stock'],
            'fecha_creacion' => $_POST['fecha_creacion'],
            'id' => $_POST['id'],

        );

        if(!empty($_POST['foto_temp']))
        $_params['imagen'] = $_POST['foto_temp'];

        if(!empty($_FILES['imagen']['name']))
            $_params['imagen'] = SubirFoto();
            

        $rpt = $productos->actualizarProductos($_params);

        if($rpt)
            header('location: ../dashboard/home.php');
        else
            print 'Error al actualizar el producto';
    }

}





if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['action']) && $_GET['action'] === 'eliminar') {
    $id = $_GET['id'];
    $rpt = $productos->eliminarProducto($id);

    if ($rpt) {
        header('Location: ../dashboard/home.php');
    } else {
        print 'Error al eliminar producto';
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['action']) && $_GET['action'] === 'confirmar') {
    $id = $_GET['id'];
    echo "<script>
            const confirmDelete = confirm('¿Estás seguro de que deseas eliminar este registro?');
            if (confirmDelete) {
                // Redirige a la página de confirmación y ejecuta la eliminación si se confirma
                window.location.href = '../controllers/productos.php?action=eliminar&id=$id';
            } else {
                // El usuario ha cancelado la eliminación
                window.location.href = '../dashboard/home.php';
            }
          </script>";
    exit; // Detiene la ejecución del script PHP
}





function SubirFoto()
{
    $carpeta =__DIR__.'/../upload/';

    $archivo = $carpeta.$_FILES['imagen']['name'];

    move_uploaded_file($_FILES['imagen']['tmp_name'],$archivo);

    return $_FILES['imagen']['name'];
    
}



?>

