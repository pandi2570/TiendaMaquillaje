/*Script para Tienda Ropa
* Realizo: Angel Mendoza
* Fecha de realización: 20/10/2023
*/

DROP DATABASE IF EXISTS leslie;
CREATE DATABASE IF NOT EXISTS leslie;

USE leslie;

CREATE TABLE usuario(
	id_user int auto_increment not null,
    nombre varchar(90) not null,
    mail varchar(60) not null,
    phone varchar(10) not null,
    pass varchar(20) not null,
    primary key(id_user)
);

CREATE TABLE prendas(
	folio_prenda int auto_increment not null,
    nombre_prenda varchar(30) not null,
    diseñador varchar(60) not null,
    price_ant decimal (7,2) default 0,
    price decimal(7,2) not null,
    cantidad int not null,
    primary key(folio_prenda)
);

CREATE TABLE ventas(
	folio_venta int auto_increment not null,
    fecha datetime default now(),
    total decimal(7,2) not null,
    primary key (folio_venta)
);


CREATE TABLE detalle_venta(
	folio_detalle int auto_increment,
    fk_tiket int not null,
    fk_prenda int not null,
    cant int not null,
    importe decimal(7,2),
    primary key (folio_detalle),
    foreign key (fk_tiket) references ventas(folio_venta),
    foreign key (fk_prenda) references prendas(folio_prenda)
);

CREATE TABLE carrito(
    id_carrito int AUTO_INCREMENT not null,
    fk_user int not null,
    fk_producto int not null,
    cantida int not null,
    PRIMARY key(id_carrito)
    );

INSERT INTO `usuario` (`id_user`, `nombre`, `mail`, `phone`, `pass`) VALUES (NULL, 'Martinez Infante Leslei Nevil', 'leslie.martinezinfante@hotmail.com', '5633741946', '123');