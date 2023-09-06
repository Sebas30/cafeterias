<?php 

namespace inventarios;

class Login {
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

    public function login($usuario, $clave)
    {
        // Calcular el hash SHA-256 de la contraseña ingresada.
        $clave_sha256 = hash('sha256', $clave);

        $sql = "SELECT usuario, clave FROM usuarios WHERE usuario = :usuario AND clave = :clave";
        $resultado = $this->cn->prepare($sql);

        $resultado->bindParam(':usuario', $usuario);
        $resultado->bindParam(':clave', $clave_sha256); // Utilizar el hash SHA-256.

        if ($resultado->execute()) {
            return $resultado->fetchAll();
        }

        return false;
    }

}
