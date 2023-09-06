CREATE TABLE usuarios (
    id serial PRIMARY KEY,
    nombres varchar(255) NOT NULL,
    apellidos varchar(255) NOT NULL,
    numero_cel varchar(15),
    tipo_documento varchar(50) NOT NULL,
    numero_documento varchar(20) NOT NULL,
    usuario varchar(50) NOT NULL,
    clave varchar(255) NOT NULL,
    fecha_creacion timestamp DEFAULT current_timestamp
);



INSERT INTO public.usuarios(
    nombres, apellidos, numero_cel, tipo_documento, numero_documento, usuario, clave, fecha_creacion)
VALUES ('Sebastian', 'Alvarez Barona', '1000756273', 'CC', '1000756273', 'sebas30', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', current_timestamp);



CREATE TABLE productos (
    id SERIAL PRIMARY KEY,
    nombre_producto VARCHAR(255) NOT NULL,
    referencia VARCHAR(255) NOT NULL,
    precio INTEGER NOT NULL,
    peso INTEGER NOT NULL,
    categoria VARCHAR(255) NOT NULL,
    stock INTEGER NOT NULL,
    imagen VARCHAR(255) NOT NULL,
    fecha_creacion DATE NOT NULL
);


SELECT nombre_producto FROM productos ORDER BY stock DESC LIMIT 1;

SELECT p.nombre_producto, SUM(v.cantidad) AS total_vendido FROM productos p JOIN ventas v ON p.id = v.id_producto GROUP BY p.nombre_producto ORDER BY total_vendido DESC LIMIT 1;




