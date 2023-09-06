<?php 

namespace inventarios;

class Productos {
    private $config;
    private $cn = null;

    public function __construct()
    {
        $this->config = parse_ini_file('../config.ini');

        $dsn = "pgsql:host={$this->config['host']};port={$this->config['port']};dbname={$this->config['dbname']}";

        try {
            $this->cn = new \PDO(
                $dsn,
                $this->config['user'],
                $this->config['password']
            );
            $this->cn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            die("Error de conexión a la base de datos: " . $e->getMessage());
        }
    }

    public function registrarProducto($_params)
    {
        $sql = "INSERT INTO productos (nombre_producto, referencia, precio, peso, categoria, imagen, stock, fecha_creacion ) 
        VALUES (:name_producto, :referencia, :precio, :peso, :categoria, :imagen, :stock, :fecha_creacion)";

        $resultado = $this->cn->prepare($sql);


        $_array = array(
            ":name_producto" => $_params['name_producto'],
            ":referencia" => $_params['referencia'], 
            ":precio" => $_params['precio'],
            ":peso" => $_params['peso'],
            ":categoria" => $_params['categoria'],
            ":imagen" => $_params['imagen'],
            ":stock" => $_params['stock'],
            ":fecha_creacion" => $_params['fecha_creacion']
        );

        if ($resultado->execute($_array))
            return true; 


        return false;
    }


    public function mostrarProductos()
    {
        $sql = "SELECT id, nombre_producto, referencia, precio, peso, categoria, imagen, stock, fecha_creacion FROM productos";
        $resultado = $this->cn->prepare($sql);

        if ($resultado->execute())
            return $resultado->fetchAll();
     
        return false;
    }


    public function mostrarPorId($id)
    {
        $sql = "SELECT * FROM productos WHERE id=:id";
        $resultado = $this->cn->prepare($sql);
        $_array = array(

            ":id" => $id
        );
        if ($resultado->execute($_array))
            return $resultado->fetch();


        return false;
    }


    public function actualizarproductos($_params)
    {
        $sql = "UPDATE productos SET nombre_producto=:name_producto,referencia=:referencia,precio=:precio,peso=:peso,categoria=:categoria,imagen=:imagen,stock=:stock,fecha_creacion=:fecha_creacion WHERE id=:id";

        $resultado = $this->cn->prepare($sql);

        $_array = array(
            ":name_producto" => $_params['name_producto'], 
            ":referencia" => $_params['referencia'],
            ":precio" => $_params['precio'],
            ":peso" => $_params['peso'],
            ":categoria" => $_params['categoria'],
            ":imagen" => $_params['imagen'],
            ":stock" => $_params['stock'],
            ":fecha_creacion" => $_params['fecha_creacion'],
            ":id" => $_params['id'],
        );

        if ($resultado->execute($_array))
            return true;


        return false;
    }


    public function countProductosStock()
    {
        $sql = "SELECT count(*) FROM productos WHERE stock > 0";
        $resultado = $this->cn->prepare($sql);

        if ($resultado->execute()) {
            return $resultado->fetchColumn();
        }

        return false;
    }

    public function countProductosSinStock()
    {
        $sql = "SELECT count(*) FROM productos WHERE stock <= 0";
        $resultado = $this->cn->prepare($sql);

        if ($resultado->execute()) {
            return $resultado->fetchColumn();
        }

        return false;
    }


    public function eliminarProducto($id)
    {
        $sql = "DELETE FROM productos WHERE id=:id ";
        $resultado = $this->cn->prepare($sql);

        $_array = array(

            ":id" => $id
        );

        if ($resultado->execute($_array))
            return true;


        return false;
    }

}
