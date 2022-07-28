/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE `blogs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL DEFAULT 'NULL',
  `fecha` date NOT NULL,
  `autor` varchar(45) NOT NULL DEFAULT 'NULL',
  `detalles` longtext NOT NULL,
  `imagen` varchar(200) DEFAULT 'NULL',
  `descripcion` varchar(150) NOT NULL DEFAULT 'NULL',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb3;

CREATE TABLE `propiedades` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(60) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  `descripcion` longtext,
  `habitaciones` int DEFAULT NULL,
  `wc` int DEFAULT NULL,
  `estacionamiento` int DEFAULT NULL,
  `creado` date DEFAULT NULL,
  `vendedorid` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `vendedorid_idx` (`vendedorid`),
  CONSTRAINT `vendedorid` FOREIGN KEY (`vendedorid`) REFERENCES `vendedores` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb3;

CREATE TABLE `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(50) DEFAULT NULL,
  `password` char(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

CREATE TABLE `vendedores` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `telefono` varchar(9) CHARACTER SET utf8mb3 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3;

INSERT INTO `blogs` (`id`, `titulo`, `fecha`, `autor`, `detalles`, `imagen`, `descripcion`) VALUES
(9, ' Terraza en el techo de tu casa', '2022-07-01', 'Admin', 'Vestibulum feugiat faucibus ex at mollis. Aenean efficitur dignissim vestibulum. Donec maximus tristique vehicula. Nullam dapibus, mauris id accumsan iaculis, nulla tellus vestibulum neque, in faucibus magna felis eu tellus. Curabitur tincidunt erat urna, pellentesque iaculis erat suscipit a. Vestibulum vel varius erat. Nunc ullamcorper, velit eget volutpat sagittis, justo mauris lobortis libero, nec facilisis lacus libero at elit. Duis suscipit aliquam justo. Nullam sagittis erat ut eros pretium mollis vitae ac sapien. Suspendisse interdum vehicula dolor, vitae commodo elit molestie vitae. Praesent laoreet justo ac lorem bibendum, eget ultrices risus tempus. Aenean vel purus id augue faucibus efficitur.\r\n\r\nNullam vel purus ullamcorper, tincidunt justo nec, fringilla lacus. Aenean suscipit nibh leo, in mattis nisl elementum vel. Proin dapibus, ante id pretium faucibus, nulla augue gravida turpis, non egestas libero urna eu diam. Integer condimentum lacus nec est cursus, id pulvinar felis suscipit. Duis lacus erat, blandit ut nunc eu, rhoncus auctor nunc.', '12830d8cdabdb91fcfed3418143bb8e6.jpg', 'Maximiza el espacio en tu hogar con esta guía, aprende a combinar muebles y colores para darle vida a tu espacio');
INSERT INTO `blogs` (`id`, `titulo`, `fecha`, `autor`, `detalles`, `imagen`, `descripcion`) VALUES
(10, ' Guía para la decoración de tu hogar', '2022-07-01', 'Admin', 'Vestibulum feugiat faucibus ex at mollis. Aenean efficitur dignissim vestibulum. Donec maximus tristique vehicula. Nullam dapibus, mauris id accumsan iaculis, nulla tellus vestibulum neque, in faucibus magna felis eu tellus. Curabitur tincidunt erat urna, pellentesque iaculis erat suscipit a. Vestibulum vel varius erat. Nunc ullamcorper, velit eget volutpat sagittis, justo mauris lobortis libero, nec facilisis lacus libero at elit. Duis suscipit aliquam justo. Nullam sagittis erat ut eros pretium mollis vitae ac sapien. Praesent laoreet justo ac lorem bibendum, eget ultrices risus tempus. Aenean vel purus id augue faucibus efficitur.\r\n\r\nNullam vel purus ullamcorper, tincidunt justo nec, fringilla lacus. Aenean suscipit nibh leo, in mattis nisl elementum vel. Proin dapibus, ante id pretium faucibus, nulla augue gravida turpis, non egestas libero urna eu diam. ', '009358465de2fa97384d9b18bd9d3400.jpg ', 'Ideas, tendencias y consejos para la decoración del hogar con estilo y buen gusto.');
INSERT INTO `blogs` (`id`, `titulo`, `fecha`, `autor`, `detalles`, `imagen`, `descripcion`) VALUES
(11, ' Consejos para cuidar tu jardín', '2022-07-01', 'Admin', 'Vestibulum feugiat faucibus ex at mollis. Aenean efficitur dignissim vestibulum. Donec maximus tristique vehicula. Nullam dapibus, mauris id accumsan iaculis, nulla tellus vestibulum neque, in faucibus magna felis eu tellus. Curabitur tincidunt erat urna, pellentesque iaculis erat suscipit a. Vestibulum vel varius erat. Nunc ullamcorper, velit eget volutpat sagittis, justo mauris lobortis libero, nec facilisis lacus libero at elit. Duis suscipit aliquam justo. Nullam sagittis erat ut eros pretium mollis vitae ac sapien. Suspendisse interdum vehicula dolor, vitae commodo elit molestie vitae. Praesent laoreet justo ac lorem bibendum, eget ultrices risus tempus. Aenean vel purus id augue faucibus efficitur.\r\n\r\nNullam vel purus ullamcorper, tincidunt justo nec, fringilla lacus. Aenean suscipit nibh leo, in mattis nisl elementum vel. Proin dapibus, ante id pretium faucibus, nulla augue gravida turpis, non egestas libero urna eu diam. Integer condimentum lacus nec est cursus, id pulvinar felis suscipit. Duis lacus erat, blandit ut nunc eu, rhoncus auctor nunc.', '40962ad2a438f5d76648c944940f2972.jpg ', 'Maximiza el espacio en tu hogar con esta guía, aprende a combinar muebles y colores para darle vida a tu espacio');
INSERT INTO `blogs` (`id`, `titulo`, `fecha`, `autor`, `detalles`, `imagen`, `descripcion`) VALUES
(12, ' ¿Cuanto vale mantener una piscina?', '2022-07-01', 'Admin', 'Vestibulum feugiat faucibus ex at mollis. Aenean efficitur dignissim vestibulum. Donec maximus tristique vehicula. Nullam dapibus, mauris id accumsan iaculis, nulla tellus vestibulum neque, in faucibus magna felis eu tellus. Curabitur tincidunt erat urna, pellentesque iaculis erat suscipit a. Vestibulum vel varius erat. Nunc ullamcorper, velit eget volutpat sagittis, justo mauris lobortis libero, nec facilisis lacus libero at elit. Duis suscipit aliquam justo. Nullam sagittis erat ut eros pretium mollis vitae ac sapien. Suspendisse interdum vehicula dolor, vitae commodo elit molestie vitae. Praesent laoreet justo ac lorem bibendum, eget ultrices risus tempus. Aenean vel purus id augue faucibus efficitur.\r\n\r\nNullam vel purus ullamcorper, tincidunt justo nec, fringilla lacus. Aenean suscipit nibh leo, in mattis nisl elementum vel. Proin dapibus, ante id pretium faucibus, nulla augue gravida turpis, non egestas libero urna eu diam. Integer condimentum lacus nec est cursus, id pulvinar felis suscipit. Duis lacus erat, blandit ut nunc eu, rhoncus auctor nunc.', '3d8b66a3d050e2de540e8bd76f58aa99.jpg ', 'Maximiza el espacio en tu hogar con esta guía, aprende a combinar muebles y colores para darle vida a tu espacio');

INSERT INTO `propiedades` (`id`, `titulo`, `precio`, `imagen`, `descripcion`, `habitaciones`, `wc`, `estacionamiento`, `creado`, `vendedorid`) VALUES
(34, 'Casa de lujo  en el Lago', 950000.00, 'c2dabe2ba0d8ca47a6a510ea89e17583.jpg', 'Casa en el lago con excelentes vistas y acabados de lujo a un excelente precio.', 4, 3, 4, '2022-06-21', 1);
INSERT INTO `propiedades` (`id`, `titulo`, `precio`, `imagen`, `descripcion`, `habitaciones`, `wc`, `estacionamiento`, `creado`, `vendedorid`) VALUES
(35, 'Chalet  independiente en Urbanización', 355000.00, 'e3f40d32ac0e4d45cbca0e763d837f49.jpg', 'Chalet independiente dentro de la Urbanización, cuenta con excelentes vistas y acabados de primer nivel. En Promoción.', 3, 2, 2, '2022-06-21', 2);
INSERT INTO `propiedades` (`id`, `titulo`, `precio`, `imagen`, `descripcion`, `habitaciones`, `wc`, `estacionamiento`, `creado`, `vendedorid`) VALUES
(36, 'Casa rústica con piscina', 760000.00, '4f25e49fac66ba3826dda6fcc5278bfb.jpg', 'Casa rústica en la montaña con piscina y zona chill-out.', 5, 3, 4, '2022-06-21', 1);
INSERT INTO `propiedades` (`id`, `titulo`, `precio`, `imagen`, `descripcion`, `habitaciones`, `wc`, `estacionamiento`, `creado`, `vendedorid`) VALUES
(37, 'Chalet con piscina', 190000.00, '09e0aff9855cfaedc419969a6f228a46.jpg', 'Chalet con piscina a un excelente precio. En promoción.', 3, 2, 1, '2022-06-21', 2),
(38, 'Chalet independiente', 450000.00, '0782cdf3a801bc7fdd15ded9cd8864f8.jpg', 'Chalet independiente con jardín y zona chill-out para BBQ.', 4, 2, 2, '2022-06-21', 1),
(55, ' Ático con piscina', 890000.00, 'a35ee60164da15b1b43744de79d05aa0.jpg', 'Lujoso ático con piscina y amplia terraza con vistas al skyline de Madrid.', 3, 3, 1, '2022-06-30', 1);

INSERT INTO `usuarios` (`id`, `email`, `password`) VALUES
(3, 'correo@correo.com', '$2y$10$qw1JmToZl4mhw.OY/0SavuW2mz.Vxpz9gyB7gop1cfNgR8dSmJHWm');


INSERT INTO `vendedores` (`id`, `nombre`, `apellido`, `telefono`) VALUES
(1, 'Álvaro', 'Barjau', '619909090');
INSERT INTO `vendedores` (`id`, `nombre`, `apellido`, `telefono`) VALUES
(2, 'Nacho', 'Marín', '630333333');



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;