/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE IF NOT EXISTS `bd_laoctava_categoria` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idCat` int DEFAULT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DELETE FROM `bd_laoctava_categoria`;
INSERT INTO `bd_laoctava_categoria` (`id`, `idCat`, `nombre`, `created_at`, `updated_at`) VALUES
	(1, 0, 'Todos', '2024-03-27 15:04:50', '2024-03-27 15:04:51'),
	(2, 1, 'Cocidos', '2024-03-27 15:04:53', '2024-03-27 15:04:55'),
	(3, 2, 'Crudos', '2024-03-27 15:05:04', '2024-03-27 15:05:05'),
	(4, 3, 'Embutidos', '2024-03-27 15:05:05', '2024-03-27 15:05:06'),
	(5, 4, 'Otros', '2024-03-27 15:05:08', '2024-03-27 15:05:07'),
	(6, 5, 'Secos', '2024-03-27 15:05:08', '2024-03-27 15:05:07');

CREATE TABLE IF NOT EXISTS `bd_laoctava_linea` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idLinea` int DEFAULT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DELETE FROM `bd_laoctava_linea`;
INSERT INTO `bd_laoctava_linea` (`id`, `idLinea`, `nombre`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Línea Estandard', '2024-04-04 20:20:46', '2024-04-04 20:20:46'),
	(2, 2, 'Línea Montesano', '2024-04-04 20:20:59', '2024-04-04 20:21:03');

CREATE TABLE IF NOT EXISTS `bd_laoctava_prodcarrucel` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_producto` int DEFAULT NULL,
  `ordenPres` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

DELETE FROM `bd_laoctava_prodcarrucel`;
INSERT INTO `bd_laoctava_prodcarrucel` (`id`, `id_producto`, `ordenPres`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, '2024-03-21 23:38:57', '2024-03-21 23:39:00'),
	(2, 2, 2, '2024-03-21 23:39:00', '2024-03-21 23:39:00'),
	(3, 3, 3, '2024-03-21 23:39:00', '2024-03-21 23:39:00'),
	(4, 4, 4, '2024-03-21 23:39:00', '2024-03-21 23:39:00'),
	(5, 5, 5, '2024-03-21 23:39:00', '2024-03-21 23:39:00'),
	(6, 6, 6, '2024-03-21 23:39:00', '2024-03-21 23:39:00'),
	(7, 7, 7, '2024-03-21 23:39:00', '2024-03-21 23:39:00'),
	(8, 8, 8, '2024-03-21 23:39:00', '2024-03-21 23:39:00'),
	(9, 9, 8, '2024-03-21 23:39:00', '2024-03-21 23:39:00');

CREATE TABLE IF NOT EXISTS `bd_laoctava_productos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tiempoCurado` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `codigo` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `peso` varchar(30) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `descrip` text COLLATE utf8mb4_general_ci,
  `pathImg` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `idLinea` int DEFAULT NULL,
  `idCategoria` int DEFAULT NULL,
  `prtDestacado` tinyint DEFAULT NULL,
  `idUsr` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DELETE FROM `bd_laoctava_productos`;
INSERT INTO `bd_laoctava_productos` (`id`, `nombre`, `tiempoCurado`, `codigo`, `peso`, `descrip`, `pathImg`, `idLinea`, `idCategoria`, `prtDestacado`, `idUsr`, `created_at`, `updated_at`) VALUES
	(1, 'Jamón crudo parma', '14 Meses', '1108', '8KG', 'Perfecto equilibrio entre la combinación de las mejores carnes de cerdo y el punto exacto de sal.', 'prod_1.jpg', 1, 1, 1, 'rmerlo', '2024-03-22 02:28:54', '2024-03-22 01:28:55'),
	(2, 'Jamón crudo parma con hueso', '14 Meses', '1110', '8KG', 'Perfecto equilibrio entre la combinación de las mejores carnes de cerdo, y el punto exacto de sal...', 'prod_2.jpg', 1, 1, 1, 'rmerlo', '2024-03-22 02:28:54', '2024-03-22 02:28:54'),
	(3, 'Bondiola', '', '1120', '1,3KG', 'Bondiola elaborada artesanalmente al estilo italiano, cubierta con pimentón.', 'prod_3.jpg', 1, 1, 1, 'rmerlo', '2024-03-22 02:28:54', '2024-03-22 02:28:54'),
	(4, 'Jamón cocido', '', '1212', '5,5KG', 'Elaborado con los mejores cortes de jamón de cerdo, deshuesados y cocidos', 'prod_4.jpg', 1, 1, 1, 'rmerlo', '2024-03-22 02:28:54', '2024-03-22 02:28:54'),
	(5, 'Pieza mini de jamón cocido', '', '1213', '3,5KG', 'Mortadela tipo italiana, Elaborado con los mejores cortes de jamón de cerdo, deshuesados y cocidos.', 'prod_5.jpg', 1, 2, 1, 'rmerlo', '2024-03-22 02:28:54', '2024-03-22 02:28:54'),
	(6, 'Fiambre cocido de pata de cerdo', '', '1215', '5,5KG', 'Elaborado con los mejores cortes de jamón de cerdo, deshuesados y cocidos.', 'prod_6.jpg', 1, 2, 1, 'rmerlo', '2024-03-22 02:28:54', '2024-03-22 02:28:54'),
	(7, 'Paleta cocida', '', '1222', '5,5KG', 'Elaborada con cortes de cerdo elegidos cuidadosamente, madurados y cocidos.', 'prod_7.jpg', 1, 2, 1, 'rmerlo', '2024-03-22 02:28:54', '2024-03-22 02:28:54'),
	(8, 'Fiambre de paleta cerdo', '', '1224', '5,5KG', 'Cocido, sin cuero y desgrasado. Elaborado con cortes de cerdo elegidos cuidadosamente', 'prod_8.jpg', 1, 3, 1, 'rmerlo', '2024-03-22 02:28:54', '2024-03-22 02:28:54'),
	(9, 'Salame Montesano', '', '1400', '2KG', 'Este salame de puro cerdo mantiene intactos los principios de un alimento natural, es decir, elaborado con carnes y grasas porcinas de alta calidad, especias naturales y acompañado de un proceso de elaboración y postmaduración rigurosamente controlados. Su delicioso sabor y aroma se van desarrollando con el tiempo. Tiempo prolongado en bodegas donde adquiere todas sus características de altísima calidad: color, sabor, aroma y contextura. El embutido en tripa natural hace de este producto algo «especial».', 'prod_9.jpg', 2, 3, 2, 'rmerlo', '2024-03-22 02:28:54', '2024-03-22 02:28:54'),
	(10, 'Panceta ahumada', '', '1240', '1,15KG', 'Panceta ahumada artesanal, seleccionada curada y ahumada con leña, al verdadero estilo europeo.', 'prod_10.jpg', 1, 3, 1, 'rmerlo', '2024-03-27 02:19:14', '2024-03-27 02:19:15'),
	(11, 'Panceta salada', '', '1241', '1,3KG', 'Manto de panceta de cerdo, salado y curado en ambiente natural, listo para comer tal cual se sirve.', 'prod_11.jpg', 1, 3, 1, 'rmerlo', '2024-03-27 05:37:18', '2024-03-27 05:37:21'),
	(12, 'Lomo horneado', '', '1251', '1,8KG', 'Lomo de cerdo artesanal, ahumado con leña y de intenso sabor.', 'prod_12.jpg', 1, 3, 1, 'rmerlo', '2024-03-27 05:39:48', '2024-03-27 05:39:51'),
	(13, 'Salchichón con jamón', '', '1301', '3KG', 'Elaborado con carne magra de cerdo y tocino, condimentado con sal y pimienta negra y nuez', 'prod_13.jpg', 1, 4, 1, 'rmerlo', '2024-03-27 05:41:21', '2024-03-27 05:41:23'),
	(14, 'Salchichón primavera', '', '1302', '3KG', 'Elaborado con carne magra de cerdo y tocino, con agregado de zanahorias, morrones y aceitunas.', 'prod_14.jpg', 1, 4, 1, 'rmerlo', '2024-03-27 05:42:48', '2024-03-27 05:42:50'),
	(15, 'Queso de cerdo', '', '1303', '3KG', 'Queso de cerdo artesanal, elaborado con pura carne de cabeza de cerdo.', 'prod_15.jpg', 1, 4, 1, 'rmerlo', '2024-03-27 05:44:24', '2024-03-27 05:44:27'),
	(16, 'Mortadela', '', '1321', '5KG', 'Mortadela tipo italiana, con pura carne de cerdo. De fina apariencia y sabor delicado.', 'prod_16.jpg', 1, 5, 1, 'rmerlo', '2024-03-27 05:46:06', '2024-03-27 05:46:08'),
	(17, 'Salame milán', '', '1410', '3KG', 'Elaborado con carne de cerdo y de vaca, con agregados de ajo, pimienta y vino blanco.', 'prod_17.jpg', 1, 5, 1, 'rmerlo', '2024-03-27 05:47:35', '2024-03-27 05:47:37'),
	(18, 'Salame crespón', '', '1412', '2,5KG', 'Elaborado con carne de cerdo seleccionada, carne vacuna, tocino cortado en dados y condimentos.', 'prod_18.jpg', 1, 5, 1, 'rmerlo', '2024-03-27 05:50:32', '2024-03-27 05:50:33'),
	(19, 'Salame cantimpalo', '', '1414', '3KG', 'Delicioso y tradicional salame al típico estilo español, elaborado con carne de cerdo y pimentón.', 'prod_19.jpg', 1, 5, 1, 'rmerlo', '2024-03-27 05:52:42', '2024-03-27 05:52:44'),
	(20, 'Fiambre de cerdo orfebre', '', '1901', '3KG', 'Fiambre cocido, elaborado con variedad de pequeños cortes de paleta de cerdo.', 'prod_20.jpg', 1, 5, 1, 'rmerlo', '2024-03-27 05:54:44', '2024-03-27 05:54:45'),
	(21, 'Salame fino Montesano', '', '1401', '1,8KG', 'Este salame de puro cerdo mantiene intactos los principios de un alimento natural, es decir, elaborado con carnes y grasas porcinas de alta calidad, especias naturales, y acompañado de un proceso de elaboración y postmaduración rigurosamente controlados. Su delicioso sabor y aroma se van desarrollando con el tiempo. Tiempo prolongado en bodegas donde adquiere todas sus características de altísima calidad: color, sabor, aroma y contextura. En presentación picado fino.', 'prod_21.jpg', 2, 5, 2, 'rmerlo', '2024-03-27 06:03:31', '2024-03-27 06:03:32'),
	(22, 'Mortadela Montesano', '', '1300', '5KG', 'Producto fabricado con carnes de puro cerdo, sin añadir polifosfatos ni colorantes. El corte es de color rosáceo con una distribución homogénea de trozos blancos de tocino y pistacho. Tiene un sabor característico y un perfume intenso y agradable que hacen de la Mortadela «Montesano» un producto único.', 'prod_22.jpg', 2, 5, 2, 'rmerlo', '2024-03-27 06:02:15', '2024-03-27 06:02:16'),
	(23, 'Lomo horneado Montesano', '', '1252', '1,8KG', 'A las finas hierbas. Lomo de cerdo asado y ahumado a las finas hierbas, para paladares exigentes.', 'prod_23.jpg', 2, 5, 2, 'rmerlo', '2024-03-27 06:00:50', '2024-03-27 06:00:50'),
	(24, 'Jamón cocido Montesano', '', '1200', '6,5KG', 'Como en Italia, con el mismo conocimiento y tecnología, aquí se elabora un jamón crudo único, rico en proteínas y con bajo contenido de sal. Luego de 14 meses de guarda se logra un producto exquisito, de una textura tierna y con sabor que invita a seguir disfrutándolo.', 'prod_24.jpg', 2, 5, 2, 'rmerlo', '2024-03-27 05:59:14', '2024-03-27 05:59:15'),
	(25, 'Jamón crudo Parma Montesano', '14 Meses', '1100', '6KG', 'Como en Italia, con el mismo conocimiento y tecnología, aquí se elabora un jamón crudo único, rico en proteínas y con bajo contenido de sal. Luego de 14 meses de guarda se logra un producto exquisito, de una textura tierna y con sabor que invita a seguir disfrutándolo.', 'prod_25.jpg', 2, 5, 2, 'rmerlo', '2024-03-27 05:57:42', '2024-03-27 05:57:44');

CREATE TABLE IF NOT EXISTS `bd_laoctava_recetas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tiempoPreparacion` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tiempoCoccion` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tiempoTotal` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pathImg` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `idUsr` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `rta_destacada` tinyint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DELETE FROM `bd_laoctava_recetas`;
INSERT INTO `bd_laoctava_recetas` (`id`, `nombre`, `tiempoPreparacion`, `tiempoCoccion`, `tiempoTotal`, `pathImg`, `idUsr`, `rta_destacada`, `created_at`, `updated_at`) VALUES
	(1, 'Brusquetas con mortadela de cerdo', 'Entre 6 y 8 minutos', 'Entre 6 y 8 minutos', '8 minutos', 'receta_1.jpeg', 'rmerlo', 1, '2024-03-23 00:43:50', '2024-03-23 00:43:51'),
	(2, 'Ensalada de Jamón crudo, higos y rúcula', '20 minutos', 'sin cocción', '20 minutos', 'receta_2.jpeg', 'rmerlo', 1, '2024-03-23 00:43:50', '2024-03-23 00:43:50'),
	(3, 'Fajitas de lomo de cerdo a los 4 quesos', 'Entre 6 y 8 minutos', 'Entre 6 y 8 minutos', '8 minutos', 'receta_3.jpeg', 'rmerlo', 1, '2024-03-23 00:43:50', '2024-03-23 00:43:50'),
	(4, 'Hojaldres de jamon crudo', '50 minutos', '30 minutos', '50 minutos', 'receta_4.jpeg', 'rmerlo', 1, '2024-03-23 00:43:50', '2024-03-23 00:43:50'),
	(5, 'Omelette con jamón cocido', '8 minutos', '8 minutos', '8 minutos', 'receta_5.jpeg', 'rmerlo', 1, '2024-03-23 00:43:50', '2024-03-23 00:43:50'),
	(6, 'Pinchos de salame, olivas y corazón de alcaulcil', '1 hora', '1 hora', '1 hora', 'receta_6.jpeg', 'rmerlo', 1, '2024-03-23 00:43:50', '2024-03-23 00:43:50'),
	(7, 'Pizza de salame y albaca', '2 horas', 'Ente 15 y 20 minutos', '2 horas', 'receta_7.jpeg', 'rmerlo', 1, '2024-03-23 00:43:50', '2024-03-23 00:43:50'),
	(8, 'Risotto de jamon y huevo duro', '40 minutos', '25 minutos', '40 minutos', 'receta_8.jpeg', 'rmerlo', 2, '2024-03-23 00:43:50', '2024-03-23 00:43:50'),
	(9, 'Sándwich de jamón crudo con manteca saborizada y rúcula', 'Entre 6 y 8 minutos', 'Entre 6 y 8 minutos', '8 minutos', 'receta_9.jpeg', 'rmerlo', 2, '2024-03-23 00:43:50', '2024-03-23 00:43:50'),
	(10, 'Sorrentinos de panceta y ricota', '40 minutos', 'Entre 6 y 8 minutos', '40 minutos', 'receta_10.jpeg', 'rmerlo', 2, '2024-03-23 00:43:50', '2024-03-23 00:43:50'),
	(11, 'Tagliatelle al queso azul con jamón', '30 minutos', 'Entre 8 y 10 minutos', '30 minutos', 'receta_11.jpeg', 'rmerlo', 2, '2024-03-23 00:43:50', '2024-03-23 00:43:50');

CREATE TABLE IF NOT EXISTS `bd_laoctava_recetas_descrip` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idReceta` int DEFAULT NULL,
  `tagHtml` varchar(20) DEFAULT NULL,
  `estilos` varchar(255) DEFAULT NULL,
  `parrafo` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

DELETE FROM `bd_laoctava_recetas_descrip`;
INSERT INTO `bd_laoctava_recetas_descrip` (`id`, `idReceta`, `tagHtml`, `estilos`, `parrafo`, `created_at`, `updated_at`) VALUES
	(1, 10, 't', '', 'Para armar los sorrentinos:', '2024-03-25 23:11:01', '2024-03-23 23:11:01'),
	(2, 10, 'p', NULL, 'Armar el relleno mezclando la panceta, hojitas de albahaca fileteada y ricota.', '2024-03-25 23:13:00', '2024-03-26 23:13:01'),
	(3, 10, 'p', NULL, 'Colocar en el centro de la tapita y colocar otra por encima. Sellar los bordes de la forma que más les guste. Pueden pasarle la ruedita de cortar ravioles si quieren darle un toque elegante.\r\n\r\n', '2024-03-25 23:13:19', '2024-03-25 23:13:19'),
	(4, 10, 't', '', 'Para la salsa:', '2024-03-25 23:13:46', '2024-03-25 23:13:46'),
	(5, 10, 'p', NULL, 'Mixear espinaca, crema y aceite de oliva. Va a quedar una crema increíble. Lo pasan a una fuente para horno y agregan el resto de la crema sin mixear y un chorrito de vino blanco. Agregar la pasta hervida previamente.', '2024-03-25 23:14:02', '2024-03-25 23:14:03'),
	(6, 4, 'p', NULL, 'Cortar la cebolla bien finita tipo pluma y poner a dorar en una sartén con sal y pimienta.\r\n\r\n', '2024-03-25 23:16:04', '2024-03-25 23:16:04'),
	(7, 4, 'p', NULL, 'Picar la mozzarella y lavar la rúcula. Abrir la masa, extenderla sobre la mesa limpia y agregarle el queso y la cebolla. Doblar los bordes para que quede cerrado tipo canasta. Pincelar con huevo y llevar a horno a 180ºC por 30 minutos.\r\n\r\n', '2024-03-25 23:16:08', '2024-03-25 23:16:09'),
	(8, 4, 'p', NULL, 'Sacar del horno. Colocar la rúcula y arriba el jamón crudo en fetas. Si se desea un chorrito de aceite de oliva.\r\n\r\n', '2024-03-25 23:16:12', '2024-03-25 23:16:12'),
	(9, 7, 'p', NULL, 'Mezclar en un recipiente el agua templada con la levadura fresca. Agrega la sal fina y las dos cucharadas de aceite. Mézclalo bien para que se integren todos los ingredientes. Antes de que la preparación se enfríe, coloca sobre la mesa la harina en forma de volcán y vierte dentro la mezcla anterior.\r\n\r\n', '2024-03-25 23:17:46', '2024-03-25 23:17:46'),
	(10, 7, 'p', NULL, 'Amasar hasta que notes que deja de pegarse en tus manos y puedes manejarla sin problemas. Cuando tengas la masa de pizza casera lista, deberás darle forma de tubo largo, y cortarlo en 2 particiones. Después, haz una bola con cada partición y tápalas con un trapo limpio y seco, deberás dejarlas reposar durante 45 minutos. Verás que, poco a poco, empieza a elevarse hasta duplicar su volumen.', '2024-03-25 23:17:46', '2024-03-25 23:17:46'),
	(11, 7, 'p', NULL, 'Cada bola es para hacer una pizza normal. Pasado el tiempo, espolvorea un poco de harina sobre la mesa o superficie que prefieras para preparar la pizza, coge una de las bolas y colócala sobre ella. Ahora deberás extenderla con tus manos estirando desde el centro hacia los costados, dándole forma redondeada. Si dispones de rodillo también puedes utilizarlo para que quede más fina la masa.', '2024-03-25 23:17:46', '2024-03-25 23:17:46'),
	(12, 7, 'p', NULL, 'Una vez estirada, ya puedes añadir el puré de tomate y llevar a horno precalentado a temperatura máxima por 5 minutos.', '2024-03-25 23:17:46', '2024-03-25 23:17:46'),
	(13, 7, 'p', NULL, 'Sacar del horno, colocar el queso cortado en cubos y volver al horno por 10 minutos, el albaca, las aceitunas y el salame.', '2024-03-25 23:17:46', '2024-03-25 23:17:46'),
	(14, 8, 'p', NULL, 'Picamos las cebollas de verdeo y los ajos, lo sofreímos en una cazuela con 3 cucharadas de aceite. Cuando esté añadimos los trozos de jamon troceados y lo salteamos unos minutos.', '2024-03-25 23:17:46', '2024-03-25 23:17:46'),
	(15, 8, 'p', NULL, 'Añadimos un chorrito de vino y a continuación el arroz.', '2024-03-25 23:17:46', '2024-03-25 23:17:46'),
	(16, 8, 'p', NULL, 'Vamos poniendo el caldo que tenemos muy caliente, lo movemos poco a poco y lo dejamos cocer unos 25 minutos, cuando falte 5 minutos añadimos un par de dados de manteca y seguimos moviendo.', '2024-03-25 23:17:46', '2024-03-25 23:17:46'),
	(17, 8, 'p', NULL, 'Si fuera necesario podemos añadir un poco más de caldo, y seguidamente agregamos el perejil, la albahaca, y la pimienta negra molida, lo mezclamos bien y probamos de sal.', '2024-03-25 23:17:46', '2024-03-25 23:17:46'),
	(18, 9, 'p', NULL, 'Cortar en fetas finas el jamón crudo tipo Parma.', '2024-03-25 23:17:46', '2024-03-25 23:17:46'),
	(19, 9, 'p', NULL, 'Preparar una manteca saborizada: hornear los dientes de ajo envueltos en papel aluminio hasta que estén tiernos. Luego mezclar manteca con ajo asado, ají molido y sal.', '2024-03-25 23:17:46', '2024-03-25 23:17:46'),
	(20, 9, 'p', NULL, 'Para el armado, untar con la manteca el pan, colocar el jamón y luego la rúcula fresca con aceite de oliva.', '2024-03-25 23:17:46', '2024-03-25 23:17:46'),
	(21, 3, 'p', NULL, 'Picar o rallar los quesos. Fetear el lomo de cerdo y armar la fajita. Calentar una sartén, dorar de ambos lados y servir con el guacamole.', '2024-03-25 23:17:46', '2024-03-25 23:17:46'),
	(22, 3, 't', NULL, 'Guacamole:', '2024-03-25 23:17:46', '2024-03-25 23:17:46'),
	(23, 3, 'p', NULL, 'Pelar y pisar con tenedor la palta, agregar cebolla y tomate fresco picado, rociar con jugo de limón. Condimentar con sal pimienta y cilantro picado.', '2024-03-25 23:17:46', '2024-03-25 23:17:46'),
	(24, 1, 'p', NULL, 'Fetear la Mortadela bien fina.', '2024-03-25 23:17:46', '2024-03-25 23:17:46'),
	(25, 1, 'p', NULL, 'Grillar las berenjenas y los zucchinis.', '2024-03-25 23:17:46', '2024-03-25 23:17:46'),
	(26, 1, 'p', NULL, 'Saltear los cherrys y luego grillar las rodajas de pan.', '2024-03-25 23:17:46', '2024-03-25 23:17:46'),
	(27, 1, 'p', NULL, 'Agregar aceite de albahaca a gusto.', '2024-03-25 23:17:46', '2024-03-25 23:17:46'),
	(28, 5, 'p', NULL, 'Batir los huevos en un bowl.', '2024-03-25 23:17:46', '2024-03-25 23:17:46'),
	(29, 5, 'p', NULL, 'Agregar el queso, el jamón y el tomate y batir.', '2024-03-25 23:17:46', '2024-03-25 23:17:46'),
	(30, 5, 'p', NULL, 'Condimentar a gusto y colocar la preparación en una sartén caliente.', '2024-03-25 23:17:46', '2024-03-25 23:17:46'),
	(31, 11, 'p', NULL, 'Poner a hervir en una olla abundante agua con sal a gusto, para cocinar los tagliatelle.', '2024-03-25 23:17:46', '2024-03-25 23:17:46'),
	(32, 11, 'p', NULL, 'En una sartén poner la crema, cuando comienza a hervir se le agrega el queso azul y el mantecoso, y el jamón cocido trozados. Se condimenta con sal y pimienta. Ojo con la sal ya que el queso parmesano y el jamón que se le pone al servirlos es salado.', '2024-03-25 23:17:46', '2024-03-25 23:17:46'),
	(33, 11, 'p', NULL, 'Cuando los tagliatelle están cocidos se cuela bien y se ponen en la salsa que hicimos en la sartén.', '2024-03-25 23:17:46', '2024-03-25 23:17:46'),
	(34, 6, 'p', NULL, 'Lavar y limpiar bien el pimiento, sacarle la mayor parte de las semillas y cortar en tiras. Lo colocamos sobre una fuente de horno con un papel de aluminio y un chorrito de aceite de oliva. Asarlos en el horno a 180º C durante 1 hora.', '2024-03-25 23:17:46', '2024-03-25 23:17:46'),
	(35, 6, 'p', NULL, 'Con el horno apagado los dejar enfriar unos 10 minutos. Escurrir los corazones de alcaucil y comenzar el armado.', '2024-03-25 23:17:46', '2024-03-25 23:17:46'),
	(36, 6, 'p', NULL, 'Agarramos un pincho y colocamos el salame, las olivas, las tiras de morrón asado y el alcaucil, en el orden deseado. Servir y disfrutar.', '2024-03-25 23:17:46', '2024-03-25 23:17:46'),
	(37, 2, 'p', NULL, 'Lavar la rúcula y secarla bien. Lavar los higos y cortarlos en 4 con la piel. Cortar el jamón crudo en fetas de 2-3 cm. Cortar el parmesano en láminas finitas.', '2024-03-25 23:17:46', '2024-03-25 23:17:46'),
	(38, 2, 'p', NULL, 'Filetear almendras a gusto y tostarlas en una sartén a fuego medio o bajo durante 5 minutos.', '2024-03-25 23:17:46', '2024-03-25 23:17:46'),
	(39, 2, 'p', NULL, 'Preparar la ensalada mezclando los ingredientes y condimentar con 2 cucharadas soperas de aceto balsámico y 4 de aceite de oliva, sal y pimienta a gusto.', '2024-03-25 23:17:46', '2024-03-25 23:17:46');

CREATE TABLE IF NOT EXISTS `bd_laoctava_recetas_ingredientes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idReceta` int DEFAULT NULL,
  `nroIngrediente` int DEFAULT NULL,
  `descIngrediente` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=utf8;

DELETE FROM `bd_laoctava_recetas_ingredientes`;
INSERT INTO `bd_laoctava_recetas_ingredientes` (`id`, `idReceta`, `nroIngrediente`, `descIngrediente`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, 'Mortadela Montesano', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(2, 1, 2, 'Berenjenas', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(3, 1, 3, 'Zucchinis', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(4, 1, 4, 'Tomates cherrys', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(5, 1, 5, 'Pan de campo', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(6, 1, 6, 'Aceite de albahaca', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(7, 2, 1, '4 higos', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(8, 2, 2, '4 fetas de jamón crudo', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(9, 2, 3, '1 atado de rúcula o hojas verde', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(10, 2, 4, '100 gr. de parmesano', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(11, 2, 5, '1 puñado de almendras fileteadas', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(12, 2, 6, '4 cucharadas de aceite de oliva', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(13, 2, 7, '2 cucharadas aceto balsámico', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(14, 2, 8, 'Sal y pimienta a gusto', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(15, 3, 1, 'Tortillas de de harina de trigo 2', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(16, 3, 2, 'Lomo de cerdo ahumado 200 gr', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(17, 3, 3, 'Queso muzzarella 50 gr', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(18, 3, 4, 'Queso parmesano 50 gr', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(19, 3, 5, 'Queso Gouda 50 gr', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(20, 3, 6, 'Queso azul 30 gr', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(21, 3, 7, 'Palta 2', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(22, 3, 8, 'Tomate 1', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(23, 3, 9, 'Cebolla 1/2', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(24, 3, 10, 'Cilantro c/n', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(25, 3, 11, 'Limón 1', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(26, 3, 12, 'Sal y pimienta c/n', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(27, 10, 1, 'Tapas de empanadas de copetín', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(28, 10, 2, 'Ricota', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(29, 10, 3, 'Panceta', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(30, 10, 4, 'Hojitas albahaca', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(31, 10, 5, 'Vino blanco', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(32, 10, 6, '1 pote grande de crema', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(33, 10, 7, '1 atadito de espinaca', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(34, 10, 8, 'Aceite de oliva', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(35, 4, 1, '1 paquete de tapas para e de hojaldre', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(36, 4, 2, '200 grs jamón crudo en fetas', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(37, 4, 3, '200 grs queso muzzarella', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(38, 4, 4, '1 paquete rúcula', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(39, 4, 5, '4 cebollas', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(40, 4, 6, 'Sal y pimienta a gusto', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(41, 4, 7, 'Aceite o manteca', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(42, 4, 8, '1 huevo (para pincelar)', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(43, 7, 1, '500 gr de harina', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(44, 7, 2, '250 grs de salame tipo cantimpalo en fetas', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(45, 7, 3, '400 grs queso muzzarella', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(46, 7, 4, '1 cubo de levadura', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(47, 7, 5, 'Agua tibia (cantidad necesaria)', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(48, 7, 6, 'Sal y pimienta a gusto', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(49, 7, 7, 'Aceite de oliva', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(50, 7, 8, '200 gr Pure de tomate', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(51, 7, 9, 'Orégano', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(52, 7, 10, 'Aceitunas', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(53, 7, 11, '100 gr Tomates cherry', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(54, 7, 12, '1 Paquete de albaca', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(55, 8, 1, '6 puñados arroz arborio', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(56, 8, 2, '2 huevos', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(57, 8, 3, '150 gr de jamón', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(58, 8, 4, 'Vino blanco seco', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(59, 8, 5, 'Manteca', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(60, 8, 6, 'Queso parmesano', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(61, 8, 7, 'Perejil picado fresco', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(62, 8, 8, 'Aceite de oliva virgen extra', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(63, 8, 9, '2 cebollas de verdeo', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(64, 8, 10, '2 dientes ajo', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(65, 8, 11, 'Albahaca', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(66, 8, 12, '1 litro Caldo de pollo', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(67, 8, 13, 'Sal y pimienta a gusto', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(68, 9, 1, 'Mini baguette 4', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(69, 9, 2, 'Jamón crudo tipo Parma 300 gr', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(70, 9, 3, 'Manteca 50 gr', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(71, 9, 4, 'Ajo asado 3 dientes', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(72, 9, 5, 'Ají molido 1 cucharada', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(73, 9, 6, 'Sal c/n', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(74, 9, 7, 'Rúcula 1 atado', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(75, 5, 1, 'Huevos 3', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(76, 5, 2, 'Jamón cocido La Octava 100 gr', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(77, 5, 3, 'Queso Fontina 50 gr', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(78, 5, 4, 'Tomates cherrys 50 gr', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(79, 5, 5, 'Sal y pimienta c/n', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(80, 5, 6, 'Salsa criolla c/n', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(81, 5, 7, 'Perejil c/n', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(82, 11, 1, '12 olivas rellenas', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(83, 11, 2, '1 paquete de tagliatelle o pasta a gusto', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(84, 11, 3, '1 pote crema de leche', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(85, 11, 4, '50 grs. queso azul (roquefort)', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(86, 11, 5, '100 grs. queso mantecoso', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(87, 11, 6, 'queso parmesano rallado', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(88, 11, 7, '100 grs. De Jamón cocido', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(89, 11, 8, 'sal, pimienta', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(90, 6, 1, '12 olivas rellenas', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(91, 6, 2, '6 fetas de salame', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(92, 6, 3, '6 corazones de alcaucil en aceite', '2024-03-27 00:25:21', '2024-03-26 00:25:22'),
	(93, 6, 4, '1 pimiento rojo', '2024-03-27 00:25:21', '2024-03-26 00:25:22');

CREATE TABLE `bd_laoctava_vtaproductos` (
	`id` INT(10) NOT NULL,
	`linea` VARCHAR(50) NULL COLLATE 'utf8mb4_general_ci',
	`codigo` VARCHAR(30) NULL COLLATE 'utf8mb4_general_ci',
	`categoria` VARCHAR(50) NULL COLLATE 'utf8mb4_general_ci',
	`nombre` VARCHAR(100) NULL COLLATE 'utf8mb4_general_ci',
	`descrip` TEXT NULL COLLATE 'utf8mb4_general_ci',
	`tiempoCurado` VARCHAR(30) NULL COLLATE 'utf8mb4_general_ci',
	`peso` VARCHAR(30) NULL COLLATE 'utf8mb4_general_ci',
	`pathImg` VARCHAR(100) NULL COLLATE 'utf8mb4_general_ci'
) ENGINE=MyISAM;

CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DELETE FROM `cache`;
INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
	('faaae6dc4bcbe357f180259d1bf69f57', 'i:1;', 1712253090),
	('faaae6dc4bcbe357f180259d1bf69f57:timer', 'i:1712253090;', 1712253090);

CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DELETE FROM `cache_locks`;

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DELETE FROM `failed_jobs`;

CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DELETE FROM `jobs`;

CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DELETE FROM `job_batches`;

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DELETE FROM `migrations`;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '0001_01_01_000000_create_users_table', 1),
	(2, '0001_01_01_000001_create_cache_table', 1),
	(3, '0001_01_01_000002_create_jobs_table', 1),
	(4, '2024_03_15_023309_add_two_factor_columns_to_users_table', 1),
	(5, '2024_03_15_023346_create_personal_access_tokens_table', 1);

CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DELETE FROM `password_reset_tokens`;

CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DELETE FROM `personal_access_tokens`;

CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DELETE FROM `sessions`;
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('29ZQ3J3inSKkArcVObv8N5zDINQzr8eGQChPeULk', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUUVad1JyVnFEUFVOVXNPY1RHb1U5QnhTTW96Zm5nR1Bscmo0TzZSUCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9Vc3JBdXRvcml6Ijt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1712259150),
	('w9y3LsgZ2gAoE4qfxWZmVE46dlrBcKpwXlqBEzUI', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiT2lTMHA0dnBrV2E2WUNDcDNaTnoxdFJvNTF6MThYMXhEdDZMdG5pZiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMjoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL1VzckF1dG9yaXoiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozOToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL1VzckF1dG9yaXo/cGFnZT0yIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1712264234);

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DELETE FROM `users`;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
	(1, 'René D. Merlo', 'rmerlo@gmail.com', NULL, '$2y$12$.PmOjh0dDS/TFbL3T8tqauOZtM4DSM2gduygSR0lJA4NQmWFPh7D2', NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-01 18:42:31', '2024-02-01 18:42:31');

DROP TABLE IF EXISTS `bd_laoctava_vtaproductos`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `bd_laoctava_vtaproductos` AS select `a`.`id` AS `id`,`c`.`nombre` AS `linea`,`a`.`codigo` AS `codigo`,`b`.`nombre` AS `categoria`,`a`.`nombre` AS `nombre`,`a`.`descrip` AS `descrip`,`a`.`tiempoCurado` AS `tiempoCurado`,`a`.`peso` AS `peso`,`a`.`pathImg` AS `pathImg` from ((`bd_laoctava_productos` `a` join `bd_laoctava_categoria` `b` on((`a`.`idCategoria` = `b`.`idCat`))) join `bd_laoctava_linea` `c` on((`a`.`idLinea` = `c`.`idLinea`)));

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
