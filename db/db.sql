create database tienda;
use tienda;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `usuario` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `admin` (`id`, `usuario`, `password`) VALUES
(2, 'laura', '8cb2237d0679ca88db6464eac60da96345513964'),
(3, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

CREATE TABLE `articulos` (
  `id_producto` int(11) NOT NULL,
  `categoria` varchar(255) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `fechaCaptura` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `articulos` (`id_producto`, `categoria`, `nombre`, `descripcion`, `cantidad`, `precio`, `fechaCaptura`) VALUES
(14, 'Mazda', 'kdm', '3nm', 4, 3, '0000-00-00'),
(15, 'Mazda', 'b', 'b', 6, 5, '0000-00-00'),
(20, 'Mazda', 'ewq67', '2w', 2, 2, '0000-00-00');

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nombreCategoria` varchar(150) DEFAULT NULL,
  `fechaCaptura` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `mis_productos` (
  `id` int(11) NOT NULL,
  `cosa` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `mis_productos` (`id`, `cosa`, `name`, `description`, `price`, `created`, `modified`, `status`) VALUES
(1, 'accesorio', 'Zapatos de Tacon', 'La plataforma mide aproximadamente 1.25,Acabado con una plantilla de piel sintética ligeramente acolchada', 727.00, '2016-08-17 08:21:25', '2016-08-17 08:21:25', '1'),
(2, 'accesorio', 'Smartwatch', 'producto contiene correas negras y rosas, por lo que no necesita preocuparse por si es negro o rosa', 500.00, '2016-08-17 08:21:25', '2016-08-17 08:21:25', '1'),
(3, 'accesorio', 'Juego de Collar y Aretes con Brillante ', 'Juego de Collar y Aretes con Brillante Zirconia Cúbica en Aleación de Cobre Bañado en Oro Blanco 18K', 300.00, '2016-08-17 08:21:25', '2016-08-17 08:21:25', '1'),
(4, 'accesorio', 'Collar De Estrella', 'Collar De Estrella De Ocho Puntas En Capas De Plata Esterlina Con Baño De Oro De 18 K', 250.00, '2016-08-17 08:21:25', '2016-08-17 08:21:25', '1'),
(5, 'ropa', 'Vestido De Rayas', 'Vestido Juvenil De Rayas Con Botón Corte A Talla del Artículo M', 200.00, '2016-08-17 08:21:25', '2016-08-17 08:21:25', '1'),
(6, 'ropa', 'Camisa de franela', 'camisa de franela para mujer no se decolora, con 2 bolsillos en el pecho, camisa de franela a cuadros, camisa de manga larga con botones', 320.00, '2016-08-17 08:21:25', '2016-08-17 08:21:25', '1'),
(7, 'ropa', 'Blusa de Mangas Larga', 'Blusa de Mangas Larga y Cuello en V con botones de madera estampado en la parte inferior diseño para acercarte a la naturaleza', 150.00, '2016-08-17 08:21:25', '2016-08-17 08:21:25', '1'),
(8, 'ropa', 'Chaqueta impermeable con capucha', 'Cierre de Cremallera El material exterior y el forro están hechos de 100% poliéster que es suficiente para soportar cualquier cosa de llovizna en un momento. ', 700.00, '2016-08-17 08:21:25', '2016-08-17 08:21:25', '1');

CREATE TABLE `orden` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `total_price` float(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `orden_articulos` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `t_usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `t_usuarios` (`id`, `usuario`, `password`, `fecha`) VALUES
(1, 'juan', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2022-10-24'),
(2, 'juan1', '12345', '2022-10-24');

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` tinytext DEFAULT NULL,
  `fechaCaptura` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id_producto`);

ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

ALTER TABLE `mis_productos`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `orden`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

ALTER TABLE `orden_articulos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

ALTER TABLE `t_usuarios`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `articulos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `mis_productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

ALTER TABLE `orden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

ALTER TABLE `orden_articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `t_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `orden`
  ADD CONSTRAINT `orden_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `t_usuarios` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

ALTER TABLE `orden_articulos`
  ADD CONSTRAINT `orden_articulos_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orden` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;
