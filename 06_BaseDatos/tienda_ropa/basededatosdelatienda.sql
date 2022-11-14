USE db_tienda_ropa;

CREATE TABLE prendas (
	id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(80) NOT NULL,
    talla VARCHAR(10) NOT NULL,
    precio NUMERIC(6,2) NOT NULL,
    categoria VARCHAR(20)
);

DROP TABLE prendas;

ALTER TABLE prendas 
	ADD COLUMN imagen VARCHAR(80);

ALTER TABLE prendas
	ADD CONSTRAINT chk_talla_valida 
    CHECK (talla IN ('XS', 'S', 'M', 'L', 'XL'));
    
ALTER TABLE prendas
	ADD CONSTRAINT chk_categoria_valida
    CHECK (categoria IN ('CAMISETAS', 'PANTALONES', 'ACCESORIOS'));

CREATE TABLE clientes (
	id INT PRIMARY KEY AUTO_INCREMENT,
    usuario VARCHAR(20) UNIQUE NOT NULL,
    nombre VARCHAR(40) NOT NULL,
    apellido_1 VARCHAR(40) NOT NULL,
    apellido_2 VARCHAR(40),
    fecha_nacimiento DATE NOT NULL
);
//NUEVO
CREATE TABLE clientes_prendas (
	cliente_id INT,
    prenda_id INT,
    cantidad INT,
    fecha DATE,
    CONSTRAINT clientes_prendas_pk 
		PRIMARY KEY (cliente_id, prenda_id),
    CONSTRAINT clientes_prendas_cliente_fk
		FOREIGN KEY (cliente_id)
		REFERENCES clientes(id),
	CONSTRAINT clientes_prendas_prenda_fk
		FOREIGN KEY (prenda_id)
        REFERENCES prendas(id),
	CONSTRAINT chk_cantidad_valida
		CHECK (cantidad >= 1)
);


// PARA INSERTAS UN NUEVO APARTADO CLIENTES COMPRA PRENDA CAMBIAR ID 1 Y 2 QUE VA DE CLIENTE Y PRENDA SOLO ESO
INSERT INTO clientes_prendas 
	VALUES  (6, 2, 1, '2022-11-11');
    
INSERT INTO clientes_prendas 
	VALUES  (7, 1, 2, '2022-05-10');
    
INSERT INTO clientes_prendas 
	VALUES  (8, 3, 1, '2022-05-12');
    
SELECT * FROM clientes_prendas;

CREATE VIEW vw_clientes_prendas AS
(SELECT c.usuario, p.nombre, cp.cantidad, 
p.precio precio_unitario, cp.fecha
	FROM clientes c
    JOIN clientes_prendas cp ON c.id = cp.cliente_id
    JOIN prendas p ON p.id = cp.prenda_id);