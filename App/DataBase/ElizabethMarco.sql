-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para dbdeseosmarcoe
CREATE DATABASE IF NOT EXISTS `dbdeseosmarcoe` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `dbdeseosmarcoe`;

-- Volcando estructura para tabla dbdeseosmarcoe.accounts
CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

-- Volcando datos para la tabla dbdeseosmarcoe.accounts: ~0 rows (aproximadamente)
INSERT INTO `accounts` (`id`, `username`, `password`, `email`) VALUES
	(2, 'Wedding', '$2y$10$zFYu4s10tvDu/ob0o.NNIe4/votx6cG517ADeEHQjAfbtvFx0sZ3G', 'mysouvenirsproject@gmail.com');

-- Volcando estructura para tabla dbdeseosmarcoe.asistencia
CREATE TABLE IF NOT EXISTS `asistencia` (
  `id` int NOT NULL AUTO_INCREMENT,
  `uid` varchar(255) DEFAULT NULL,
  `Nombre` varchar(150) DEFAULT NULL,
  `pases` varchar(255) DEFAULT NULL,
  `paseschildren` varchar(255) DEFAULT NULL,
  `alergia` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Volcando datos para la tabla dbdeseosmarcoe.asistencia: ~0 rows (aproximadamente)

-- Volcando estructura para tabla dbdeseosmarcoe.deseos
CREATE TABLE IF NOT EXISTS `deseos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) DEFAULT NULL,
  `deseo` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla dbdeseosmarcoe.deseos: ~0 rows (aproximadamente)

-- Volcando estructura para tabla dbdeseosmarcoe.invitados
CREATE TABLE IF NOT EXISTS `invitados` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `pases` varchar(255) DEFAULT NULL,
  `paseschildren` varchar(255) DEFAULT NULL,
  `uid` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=utf8mb3;

-- Volcando datos para la tabla dbdeseosmarcoe.invitados: ~106 rows (aproximadamente)
INSERT INTO `invitados` (`id`, `Nombre`, `pases`, `paseschildren`, `uid`) VALUES
	(1, 'Elizabeth y Daniel', '2', '', '5ae76dae-e359-40fc-99b1-ab7d037e2220'),
	(2, 'Ricardo Ayuso', '1', '', 'f395ab86-f089-4209-8f82-0d5b3f7613b1'),
	(3, 'Alejandra Estrada', '1', '', '0f419912-89e5-41e0-a6b3-964a28c0caf2'),
	(4, 'Valeria Ayuso', '1', '', '24cc14fa-1478-4de5-b88b-debbd505fa59'),
	(5, 'Eduardo Alducin', '1', '', '7800caf9-b15a-4ae9-9ef6-6869800c072f'),
	(6, 'Diego Vargas', '1', '', '0b3cf97d-e2e1-4a19-b7d6-6761acb685df'),
	(7, 'Emilia Rodriguez', '1', '', 'b09c25e1-4d1d-44d5-8828-8ea8db293f1f'),
	(8, 'Omar Estrada', '1', '', '7d4ee28b-984e-490f-b33c-a7efc13a568d'),
	(9, 'Patricia Estrada', '2', '', '9cf5aa2c-5045-431e-a092-7b1f2ea35c1e'),
	(10, 'Michelle Ortiz', '3', '', '79ad86cd-14b3-4420-8ae8-a3a83a53928a'),
	(11, 'Cinthia Ortiz', '4', '', 'f7aab6ef-4427-4170-802c-7a7af486b851'),
	(12, 'Karen Ayuso', '3', '', 'f0a54b49-19ba-4fd0-b351-1ac7b9c11183'),
	(13, 'José Estrada', '2', '', 'b913564e-280f-4807-8840-a3482d94089c'),
	(14, 'Alejandro Estrada', '2', '', 'babd4ad4-e15d-4fa3-8a06-8a5e080c3df5'),
	(15, 'Merit Esrada', '2', '', 'ebf33117-8797-4afa-b3ed-2cf2be64d333'),
	(16, 'Cindy Estrada ', '2', '', '8e7aad04-234f-41b8-94c7-bc9df226f96d'),
	(17, 'Karla Rodriguez ', '3', '', '498693b9-3450-434f-9e5b-3e4c83f440f5'),
	(18, 'Violeta Ayuso', '2', '', '0a365d7e-1e24-48a3-9eff-ff92aa0cd09f'),
	(19, 'Ayerim Acosta', '2', '', '8b3b6580-2a65-4486-8955-02e4a843a4ea'),
	(20, 'Jaqueline Ayuso', '1', '', '8c1a606a-496e-4482-81d3-33bb46f8fc32'),
	(21, 'Rocio Ayuso', '1', '', 'ffb93391-c8a7-445f-9a5c-4b846837c7fd'),
	(22, 'Christian Ayuso ', '2', '', '0242be06-32a9-46d6-97cb-ab912793e61e'),
	(23, 'Abel Ayuso ', '2', '', 'fff7ad36-b005-4ac9-a954-3adff0d51ea0'),
	(24, 'Pepe Ayuso', '2', '', '00319099-157d-41c2-aa71-3f7273796eef'),
	(25, 'Efrain Ayuso', '1', '', '5cb4800f-213d-4107-930a-beaed534dacd'),
	(26, 'Liz Flores', '2', '', 'e0740814-80f9-406e-b3ef-ca938f452a3f'),
	(27, 'Ale Alvarez', '2', '', 'e151517c-0e1e-4709-83d0-91507f3d515c'),
	(28, 'Coco Arenas ', '2', '', '3fa59af1-c02a-4fda-b551-e3cb572323fb'),
	(29, 'Pau Orozco ', '2', '', '02f5f869-72b9-4466-9a4e-fb374d7fb9fe'),
	(30, 'Enrique Valdiviezo', '2', '', '49c5ff9a-ce82-4d6c-83fd-a4579991bd7e'),
	(31, 'Brian Ortiz ', '2', '', '7c48c8a0-7ca7-40bc-a930-7cd9f9442abe'),
	(32, 'Luisa Villanueva ', '2', '', '58028c8b-7ed3-4cfa-b264-2c52a1acf245'),
	(33, 'Cin Carvallo', '2', '', '5640a322-4d94-4f8d-9bdd-7cbc53313be2'),
	(34, 'Sergio Ramirez', '2', '', 'af244242-f1f5-4c9f-bc49-46cb6cce33f4'),
	(35, 'Georgina Chavez', '2', '', '982eaefe-9456-482c-84bc-d57c14cadd29'),
	(36, 'Fer Alvarez ', '2', '', '5f3d52b9-d162-4245-a5f7-ec2b26b70910'),
	(37, 'Adriana Avila ', '2', '', '2cb070df-925a-47b6-81e8-4afce60c6e88'),
	(38, 'Talia Reyes ', '2', '', 'c5cc8187-d483-4684-aeab-a1482a5c1ed3'),
	(39, 'Vero Morales', '2', '', 'e562316f-f5de-49f2-b497-7548ce3cec48'),
	(40, 'Alex Brehm', '2', '', '2be7e74a-76e5-463c-ab12-0a54f6170fc9'),
	(41, 'Luisa Lopez ', '2', '', '6d0cfa95-70ff-4a9c-8295-f0abb0e31488'),
	(42, 'Cata Bernal ', '2', '', 'bb6eac57-a764-4b9c-ac73-76e04104c7ec'),
	(43, 'Julieta Cardeña', '2', '', 'e03efecf-8dcc-450e-a39d-98a8d777eca2'),
	(44, 'Juan Carlos Rodriguez ', '2', '', 'eadb8e33-612d-401f-b53e-e83cdfade507'),
	(45, 'Ximena Tostado', '2', '', '14bc06cb-ce0e-4995-b3a8-75ccc3ad3b62'),
	(46, 'Blanca Pedraza', '2', '', '519b0ccf-fdd8-4cb6-a1ee-5b6d33b797c8'),
	(47, 'Dana Vergara ', '2', '', '359b4ae2-c528-4d0e-be06-90413b596bc6'),
	(48, 'Yazz ', '2', '', '87c6a976-c6c2-48e0-8553-9649a31922b7'),
	(49, 'Vero y Fer Aguirre', '2', '', 'e1e817c7-6310-451d-94a0-803973868019'),
	(50, 'Sinia', '2', '', 'ccc9c375-a352-4151-92a8-cf27bd203565'),
	(51, 'Miguel Ortiz', '2', '', 'b30d5d4d-ca80-4a9f-9b8d-993cf5c95bff'),
	(52, 'Karina Morales', '2', '', 'ef8d2909-623e-48e4-a4fb-13c4533fbc23'),
	(53, 'Karla ', '2', '', '11b352ba-e5d9-4005-9400-5482a39887cc'),
	(54, 'Ana Paula Nalli', '2', '', '98278057-04c5-4141-b1db-90da397a1e76'),
	(55, 'Macarena Assadi', '2', '', '2b0fd320-a10d-46de-acc0-b1a3c44fcf78'),
	(56, 'Gaby Tovar ', '2', '', '72b54c7f-f1dd-4fc2-8ac2-972788851122'),
	(57, 'Omar Escola', '1', '', '94ded33a-4672-427d-ae77-4fb0d0e8a87b'),
	(58, 'Graciela Taiano', '1', '', '9c6716bc-ff3d-4de1-82e0-ad97418a5471'),
	(59, 'Jorge Escola', '3', '', 'fc89fc0e-d4a3-4b05-ad9e-73a37db23941'),
	(60, 'Luli Escolá', '3', '', '4e0ea2f4-1c96-4c87-83a6-60c117c370b9'),
	(61, 'Norma Escolá', '1', '', 'e1de381f-8d37-4536-9c7b-e1c11913513f'),
	(62, 'Karina Taiano', '2', '', '51e56f6d-211b-4c95-a2a5-8355cdba3641'),
	(63, 'Gabriela Taiano', '2', '', '97ac7bc0-0fc3-4fee-92ac-121b7a58bbb8'),
	(64, 'Gisela Taiano', '2', '', 'aa140e16-f6a0-4101-ac48-5bf7815f4456'),
	(65, 'Ignacio Ons Costa', '2', '', '8de8338e-ab12-4519-87a7-a2702b4ea6d1'),
	(66, 'Agustina Castiglione', '2', '', 'ae397f6c-0744-417a-883b-b8b251ca83a2'),
	(67, 'Gala Monjeviero', '2', '', '00df5500-979d-4857-9ad1-a805e7cc51bd'),
	(68, 'Santiago Alvarez', '2', '', '0e0a5669-86d2-4f66-85fa-f63f9ca695b2'),
	(69, 'Emanuel Heredia', '1', '', '48a63ac6-1c0d-4d77-bd70-e25cc5216e97'),
	(70, 'Belén Teran', '1', '', 'b081ea19-01fc-4cb4-9822-a98997c6f5cc'),
	(71, 'Juliana Presa', '2', '', '4f92f206-bf2f-40f9-bd58-ff19513af06a'),
	(72, 'Patricio Rivero', '2', '', '308e3e27-b56c-45a9-8bdc-4023f06d99d9'),
	(73, 'Nicolás Yanielli', '1', '', 'f0477286-087d-43fb-8ee8-d3a8838c77d8'),
	(74, 'Fernando Padrón', '2', '', '7b429d40-7a71-4e1c-ae9b-0357f928dc32'),
	(75, 'Sebastian Bras Harriott', '2', '', '23b0336e-03f2-4bcc-a6fb-5626da19e8a8'),
	(76, 'Renzo Caldarella', '2', '', '4d64673b-c455-4c92-bab2-91da068e15e6'),
	(77, 'Cinita Ramis', '2', '', '073953e1-9a34-4075-aacf-b0279fb89e0b'),
	(78, 'Virginia Gabardi', '2', '', 'eec26d2f-16ba-4d31-9753-a32842e6d554'),
	(79, 'Marcelo Rodriguez', '4', '', '52dca1ca-1a1e-4c97-a77f-73d60b4d8a47'),
	(80, 'Melisa Persico', '2', '', '4ae1b641-e8d7-44b9-9884-a19eea6ea50e'),
	(81, 'Marisa Taiano', '2', '', 'd1731bff-1416-476b-afa3-d3514741fec6'),
	(82, 'Sofía Cagnone', '2', '', 'b27b31aa-43d9-46f6-8a5a-d43b674e0c1f'),
	(83, 'Clarisa Roch', '2', '', '9e67b8be-ce38-422b-85d6-ced83106ea12'),
	(84, 'Mariana Gonzalez', '2', '', '823a2148-e415-4684-ab44-2b5590afc572'),
	(85, 'Dolores Lezica', '2', '', 'b87386d5-c620-4493-9cc9-37c54a73883f'),
	(86, 'Enzo Heredia', '2', '', '6414b734-21b7-4e8c-84cd-6b4873f9de56'),
	(87, 'Federico Aumann', '2', '', 'dabd5a47-99fb-4511-9463-6445af9f772c'),
	(88, 'Ala Hnatiuk', '2', '', '75d4e0ca-dbc0-4394-bb00-d9863568f11d'),
	(89, 'Anna Hnatiuk', '2', '', '92f8ee31-cd0e-4049-8492-284aeb32e3be'),
	(90, 'Nicolas Albani', '2', '', 'cdc25e79-2b76-49f5-bfbc-799ec1f2b18d'),
	(91, 'Javier Bizberge', '2', '', 'a1b21a9e-375c-487b-a653-190995a80050'),
	(92, 'Agostina Mazza', '2', '', 'b5e567db-b68c-49df-bdd3-84654002a23e'),
	(93, 'Paula Schiappapietra', '2', '', 'ecc71949-3277-41fa-9828-32def50c22d8'),
	(94, 'Sebastián Gimenez', '2', '', '75a1c9af-ae9d-4a91-9b7c-3cadbaa6dde2'),
	(95, 'Martín Cucchi', '2', '', 'a7edbe74-0173-4c14-8d12-a76ee22c8898'),
	(96, 'Barbara Cerda', '1', '', '653acebf-a85c-4b7a-96af-f57fcc38c1e9'),
	(97, 'Carlos Stefani', '2', '', 'df794c64-ca5e-4865-9e82-610a3414e363'),
	(98, 'Oriana Lopez', '1', '', '6f0412ec-dc9a-4b88-8210-0b0ec52f837f'),
	(99, 'Laura Bassetti', '2', '', 'd14aaf64-ae32-4576-8287-d6f872bbb4fc'),
	(100, 'Sabrina Fernandez Polledo', '1', '', 'f111dc91-13c9-4d12-b92e-4095ae333f50'),
	(101, 'Agustin Aveiro', '2', '', '2ad2a205-1a3b-4d83-b6d6-047ba76d2435'),
	(102, 'Constanza Baeza', '2', '', 'b63c8071-158b-474a-86c4-db90292f7936'),
	(103, 'Santiago Videla', '2', '', '7c07f5f2-a9a5-4902-b5bb-dbad284c04f3'),
	(104, 'Juan Pablo Isla', '1', '', '8db80035-50c2-4a1d-b689-d1089f309599'),
	(105, 'Monserrat Dominguez', '2', '', '4fa0ff6f-d216-4a1e-a1c1-8f6bb981011d'),
	(106, 'Daphne Dominguez', '2', '', 'fcff2ce7-dd65-471b-90f6-31d3b9c7ce84');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
