-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-09-2024 a las 14:35:51
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistemaventas`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizarCategoria` (IN `p_nombre` VARCHAR(20), IN `p_detalle` VARCHAR(50))   BEGIN
    UPDATE categoria 
    SET nombre = p_nombre, 
        detalle = p_detalle
    WHERE id = p_id;
    SELECT id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizarCompras` (IN `p_id_producto` INT(11), IN `p_cantidad` INT(5), IN `p_precio` INT(6), IN `p_fecha_compra` DATETIME, IN `p_id_trabajador` INT(11))   BEGIN
    UPDATE compras 
    SET id_producto = p_id_producto,
        cantidad = p_cantidad, 
        precio = p_precio, 
        fecha_compra = p_fecha_compra,
        id_trabajador = p_id_trabajador
    WHERE id = p_id;
    SELECT id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizarDetalleVenta` (IN `p_id_venta` INT(11), IN `p_id_producto` INT(11), IN `cantidad` INT(50))   BEGIN
    UPDATE det_venta 
    SET id_venta = p_id_venta, 
        id_producto = p_id_producto, 
        cantidad = p_cantidad
    WHERE id = p_id;
    SELECT id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizarPago` (IN `p_id_venta` INT(11), IN `p_fecha_hora` DATETIME, IN `p_monto` DECIMAL(6), IN `p_metodo_pago` VARCHAR(20), IN `estado` INT(1))   BEGIN
    UPDATE pagos 
    SET id_venta = p_id_venta, 
        fecha_hora = p_fecha_hora, 
        monto = p_monto, 
        metodo_pago = p_metodo_pago, 
        estado = p_estado
    WHERE id = p_id;
    SELECT id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizarPersona` (IN `p_id` INT(11), IN `p_nro_identidad` VARCHAR(11), IN `p_razon_social` VARCHAR(123), IN `p_telefono` VARCHAR(15), IN `p_correo` VARCHAR(100), IN `p_departamento` VARCHAR(20), IN `p_provincia` VARCHAR(30), IN `p_distrito` VARCHAR(50), IN `p_cod_postal` INT(5), IN `p_direccion` VARCHAR(100), IN `p_rol` VARCHAR(15), IN `p_password` VARCHAR(500), IN `p_estado` INT(1), IN `p_fecha_inicio` DATETIME)   BEGIN
   UPDATE persona SET nro_identidad= p_nro_identidad, razon_social= p_razon_social, telefono= p_telefono, correo= p_correo, departamento= p_departamento,  provincia= p_provincia,distrito= p_distrito, cod_postal= p_cod_postal, direccion= p_direccion, rol= p_rol, password= p_password, _estado=p_estado,fecha_inicio= p_fecha_inicio WHERE
   id = p_id;
    SELECT p_id;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizarProducto` (IN `p_id` INT(11), IN `p_codigo` VARCHAR(20), IN `p_nombre` VARCHAR(30), IN `p_detalle` VARCHAR(100), IN `p_precio` DECIMAL(6), IN `p_id_categoria` INT(11), IN `p_fecha_vencimiento` DATE, IN `p_imagen` VARCHAR(16), IN `p_id_proveedor` INT(11))   BEGIN
   UPDATE producto SET codigo=p_codigo, nombre=p_nombre, detalle=p_detalle, precio=p_precio,
   id_categoria=p_id_categoria, fecha_vencimiento=p_fecha_vencimiento, imagen=p_imagen, 
   id_proveedor=p_id_proveedor WHERE
   id = p_id;
    SELECT p_id;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizarSesiones` (IN `p_id` INT, IN `p_id_persona` INT(11), IN `p_fecha_hora_inicio` DATETIME, IN `p_fecha_hora_final` DATETIME, IN `p_token` VARCHAR(50), IN `p_ip` VARCHAR(20))   BEGIN
    UPDATE sesiones 
    SET id_persona = p_id_persona, 
        fecha_hora_inicio = p_fecha_hora_inicio, 
        fecha_hora_final = p_fecha_hora_final, 
        token = p_token, 
        ip = p_ip
    WHERE id = p_id;
    SELECT id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizarVenta` (IN `p_codigo` INT(11), IN `p_fecha_hora` DATETIME, IN `id_cliente` INT(11), IN `id_vendedor` INT(11), IN `estado` INT(1))   BEGIN
    UPDATE venta 
    SET codigo_venta = p_codigo_venta, 
        fecha_hora = p_fecha_hora, 
        id_cliente = p_id_cliente, 
        id_vendedor = p_id_vendedor, 
        estado = p_estado
    WHERE id = p_id;
    SELECT id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarCategoria` ()   BEGIN
    SELECT * FROM categoria;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarCategoriaId` (IN `p_id` INT)   BEGIN
    SELECT * FROM categoria
    WHERE id = p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarCompraId` (IN `p_id` INT)   BEGIN
    SELECT * FROM compras
    WHERE id = p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarCompras` ()   BEGIN
    SELECT * FROM compras;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarDetalleVenta` ()   BEGIN
    SELECT * FROM detalle_venta;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarDetalleVentaId` (IN `p_id` INT)   BEGIN
    SELECT * FROM detalle_venta
    WHERE id = p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarPago` ()   BEGIN
    SELECT * FROM pagos;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarPagoId` (IN `p_id` INT)   BEGIN
    SELECT * FROM pagos
    WHERE id = p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarPersonaId` (IN `p_id` INT(11))   BEGIN
    SELECT * FROM persona WHERE id = p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarPersonas` ()   BEGIN
    SELECT * FROM personas;  
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarProductoId` (IN `p_id` INT(11))   BEGIN
    SELECT * FROM producto WHERE id = p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarProductos` ()   BEGIN
    SELECT * FROM productos;  
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarSesion` ()   BEGIN
    SELECT * FROM sesiones;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarSesionId` (IN `p_id` INT)   BEGIN
    SELECT * FROM sesiones
    WHERE id = p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarVenta` ()   BEGIN
    SELECT * FROM venta;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `buscarVentaId` (IN `p_id` INT)   BEGIN
    SELECT * FROM venta
    WHERE id = p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminarCategoria` (IN `p_id` INT)   BEGIN
    DELETE FROM categoria WHERE id = p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminarCompra` (IN `p_id` INT)   BEGIN
    DELETE FROM compras WHERE id = p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminarDetalleVenta` (IN `p_id` INT)   BEGIN
    DELETE FROM det_venta WHERE id = p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarPago` (IN `p_id` INT)   BEGIN
    DELETE FROM pagos WHERE id = p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminarPersona` (IN `p_id` INT)   BEGIN
DELETE FROM persona WHERE id=p_id;
SELECT p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminarProducto` (IN `p_id` INT(11))   BEGIN
DELETE FROM producto WHERE id=p_id;
SELECT p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarSesion` (IN `p_id` INT)   BEGIN
    DELETE FROM sesiones WHERE id = p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarVenta` (IN `p_id` INT)   BEGIN
    DELETE FROM venta WHERE id = p_id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertarCategoria` (IN `p_nombre` VARCHAR(20), IN `p_detalle` VARCHAR(50))   BEGIN
    DECLARE existe_categoria INT;
    DECLARE id INT;
    SET existe_categoria = (SELECT COUNT(*) FROM categoria WHERE nombre = p_nombre);
    
    IF existe_categoria = 0 THEN
        INSERT INTO categoria (nombre, detalle) 
        VALUES (p_nombre, p_detalle);
        SET id = LAST_INSERT_ID();
    ELSE
        SET id = 0;
    END IF;
    
    SELECT id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertarCompras` (IN `p_id_producto` INT(11), IN `p_cantidad` INT(5), IN `p_precio` DECIMAL(6), IN `p_fecha_compra` DATETIME, IN `p_id_trabajador` INT(11))   BEGIN
    DECLARE id INT;
    INSERT INTO compras (id_producto, cantidad, precio, fecha_compra, id_trabajador) 
    VALUES (p_id_producto, p_cantidad, p_precio, p_fecha_compra, p_id_trabajador);
    
    SET id = LAST_INSERT_ID();
    SELECT id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertarDetalleVenta` (IN `p_id_venta` INT(11), IN `p_id_producto` INT(11), IN `p_cantidad` VARCHAR(50))   BEGIN
    DECLARE id INT;
    INSERT INTO det_venta (id_venta, id_producto, cantidad) 
    VALUES (p_id_venta, p_id_producto, p_cantidad);
    
    SET id = LAST_INSERT_ID();
    SELECT id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertarPago` (IN `p_id_venta` INT, IN `p_fecha_hora` DATETIME, IN `p_monto` DECIMAL(6), IN `p_metodo_pago` VARCHAR(20), IN `estado` INT)   BEGIN
    DECLARE id INT;
    INSERT INTO pagos (id_venta, fecha_hora, monto, metodo_pago, estado) 
    VALUES (p_id_venta, p_fecha_hora, p_monto, p_metodo_pago, p_estado);
    
    SET id = LAST_INSERT_ID();
    SELECT id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertarSesiones` (IN `p_id_persona` INT, IN `p_fecha_hora_inicio` DATETIME, IN `p_fecha_hora_final` DATETIME, IN `p_tocken` VARCHAR(50), IN `p_ip` VARCHAR(20))   BEGIN
    DECLARE id INT;
    INSERT INTO venta (codigo_venta, fecha_hora, id_cliente, id_vendedor, estado) 
    VALUES (p_codigo_venta, p_fecha_hora, p_id_cliente, p_id_vendedor, p_estado);
    
    SET id = LAST_INSERT_ID();
    SELECT id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertarVenta` (IN `p_codigo_venta` INT(11), IN `p_fecha_hora` DATETIME, IN `id_cliente` INT(11), IN `id_vendedor` INT(11), IN `estado` INT(1))   BEGIN
    DECLARE id INT;
    INSERT INTO venta (codigo_venta, fecha_hora, id_cliente, id_vendedor, estado) 
    VALUES (p_codigo_venta, p_fecha_hora, p_id_cliente, p_id_vendedor, p_estado);
    
    SET id = LAST_INSERT_ID();
    SELECT id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertPersona` (IN `p_nro_identidal` INT(12), IN `p_razon _social` VARCHAR(123), IN `p_telefono` VARCHAR(15), IN `p_correo` VARCHAR(100), IN `p_departamento` VARCHAR(20), IN `p_provincia` VARCHAR(50), IN `p_distrito` VARCHAR(50), IN `p_cod_postal` VARCHAR(5), IN `p_direccion` VARCHAR(100), IN `p_rol` VARCHAR(15), IN `p_password` VARCHAR(500), IN `p_estado` VARCHAR(1), IN `p_fecha_inicio` DATETIME)   BEGIN
DECLARE existe_cliente INT;
DECLARE id INT;
SET existe_cliente = (SELECT COUNT(*) FROM cliente WHERE nro_identidad = p_nro_identidad);
IF existe_cliente = 0 THEN
INSERT INTO cliente (nro_identidad, razon_social, telefono, correo, departamento, provincia, distrito, cod_postal, direccion, rol, password, estado, fecha_inicio)
    VALUES (p_nro_identidad, p_razon_social, p_telefono, p_correo, p_departamento, p_provincia, p_distrito, p_cod_postal, p_direccion, p_rol, p_password, p_estado, p_fecha_inicio);
SET id = LAST_INSERT_ID();
ELSE
SET id =0;
END IF;
SELECT id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertProducto` (IN `p_codigo` VARCHAR(20), IN `p_nombre` VARCHAR(30), IN `p_detalle` VARCHAR(100), IN `p_precio` DECIMAL(6), IN `p_stock` INT(5), IN `p_id_categoria` INT(11), IN `p_fecha_vencimiento` DATE, IN `p_imagen` VARCHAR(16), IN `p_id_proveedor` INT(11))   BEGIN
DECLARE existe_producto INT;
DECLARE id INT;
SET existe_producto = (SELECT COUNT(*) FROM producto WHERE codigo = p_codigo);
IF existe_producto = 0 THEN
INSERT INTO producto(codigo,nombre,detalle,precio,stock,id_categoria,fecha_vencimiento,imagen,id_proveedor) VALUES(p_codigo,p_nombre,p_detalle,p_precio,p_stock,p_id_categoria,p_fecha_vencimiento,p_imagen,p_id_proveedor);
SET id = LAST_INSERT_ID();
ELSE
SET id =0;
END IF;
SELECT id;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `detalle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`, `detalle`) VALUES
(1, 'camisa', 'camisa para niños');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(5) NOT NULL,
  `precio` decimal(6,0) NOT NULL,
  `fecha_compra` datetime NOT NULL DEFAULT current_timestamp(),
  `id_trabajador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta`
--

CREATE TABLE `detalle_venta` (
  `id` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `id` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL,
  `fecha_hora` datetime NOT NULL DEFAULT current_timestamp(),
  `monto` decimal(6,0) NOT NULL,
  `metodo_pago` varchar(20) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id` int(11) NOT NULL,
  `nro_identidad` varchar(11) NOT NULL,
  `razon_social` varchar(123) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `departamento` varchar(20) NOT NULL,
  `provincia` varchar(30) NOT NULL,
  `distrito` varchar(50) NOT NULL,
  `cod_postal` int(5) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `rol` varchar(15) NOT NULL,
  `password` varchar(500) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT 1,
  `fecha_inicio` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id`, `nro_identidad`, `razon_social`, `telefono`, `correo`, `departamento`, `provincia`, `distrito`, `cod_postal`, `direccion`, `rol`, `password`, `estado`, `fecha_inicio`) VALUES
(1, '76929048', 'tiendaropas', '917014546', 'diego@gmail.com', 'Ayacucho', 'Huanta', 'Huanta', 15046, 'afadiph', 'proveedor', '1234abcd', 1, '0000-00-00 00:00:00'),
(2, '76929048', 'rthdthfgh', '917014546', 'yane@gmail.com', 'Ayacucho', 'Huanta', 'Huanta', 15046, 'dfgsdfgsfgfg', 'proveedor', 'wgrfthhrth', 1, '2024-09-19 12:20:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `codigo` varchar(20) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `detalle` varchar(100) NOT NULL,
  `precio` decimal(6,0) NOT NULL,
  `stock` int(5) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `fecha_vencimiento` date DEFAULT NULL,
  `imagen` varchar(16) NOT NULL,
  `id_proveedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `codigo`, `nombre`, `detalle`, `precio`, `stock`, `id_categoria`, `fecha_vencimiento`, `imagen`, `id_proveedor`) VALUES
(2, '123456', 'camisa', 'amarillo', 31, 50, 1, '2024-11-12', 'camisa.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesiones`
--

CREATE TABLE `sesiones` (
  `id` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `fecha_hora_inicio` datetime NOT NULL DEFAULT current_timestamp(),
  `fecha_hora_final` datetime NOT NULL DEFAULT current_timestamp(),
  `token` varchar(50) NOT NULL,
  `ip` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id` int(11) NOT NULL,
  `codigo_venta` int(11) NOT NULL,
  `fecha_hora` datetime NOT NULL DEFAULT current_timestamp(),
  `id_cliente` int(11) NOT NULL,
  `id_vendedor` int(11) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_trabajador` (`id_trabajador`);

--
-- Indices de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_venta` (`id_venta`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_venta` (`id_venta`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_proveedor` (`id_proveedor`);

--
-- Indices de la tabla `sesiones`
--
ALTER TABLE `sesiones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_persona` (`id_persona`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_vendedor` (`id_vendedor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `sesiones`
--
ALTER TABLE `sesiones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`id_trabajador`) REFERENCES `persona` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD CONSTRAINT `detalle_venta_ibfk_1` FOREIGN KEY (`id_venta`) REFERENCES `venta` (`id`),
  ADD CONSTRAINT `detalle_venta_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`);

--
-- Filtros para la tabla `pago`
--
ALTER TABLE `pago`
  ADD CONSTRAINT `pago_ibfk_1` FOREIGN KEY (`id_venta`) REFERENCES `venta` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`id_proveedor`) REFERENCES `persona` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `producto_ibfk_3` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `sesiones`
--
ALTER TABLE `sesiones`
  ADD CONSTRAINT `sesiones_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `persona` (`id`),
  ADD CONSTRAINT `venta_ibfk_2` FOREIGN KEY (`id_vendedor`) REFERENCES `persona` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
