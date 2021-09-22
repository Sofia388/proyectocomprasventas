--Tabla de Deptos.
CREATE TABLE `depto` (
  `idDepto` int(10) UNSIGNED NOT NULL,
  `Codigo` varchar(50) DEFAULT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `depto` (`idDepto`, `Codigo`, `Nombre`) VALUES
(1001, '1', 'Ethan ', 'Administrador'),
(1002, '2', 'Sofia ', 'Contadora'),
(1003, '3', 'Melany', 'Jefa');

--Tabla de Roles
  `idRoles` int(10) UNSIGNED NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `roles` (`idRoles`, `Nombre`) VALUES
(201800188, 'Melany', 'Jefa'),
(201900031, 'Sofia', 'Contadora'),
(201800338, 'Ethan ', 'Administrador');

--Tabla de Usuarios
CREATE TABLE `usuario` (
  `idUsuario` int(10) UNSIGNED NOT NULL,
  `Depto_idDepto` int(10) UNSIGNED NOT NULL,
  `Estado_idEstado` int(10) UNSIGNED NOT NULL,
  `Roles_idRoles` int(10) UNSIGNED NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido` varchar(50) DEFAULT NULL,
  `Correo` varchar(50) DEFAULT NULL,
  `Contrasena` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `usuario` (`idUsuario`, `Depto_idDepto`, `Estado_idEstado`, `Roles_idRoles`, `Nombre`, `Apellido`, `Correo`, `Contrasena`) VALUES
(201800188, 1003, 3, 20180188, 'Melany', 'Hernandez', 'melany22@gmail.com', '789456'),
(201900031, 1002, 2, 201900031, 'Sofia', 'Gonzalez', 'sgonzalez@gmail.com', '159753'),
(201800338, 1001, 1, 20180338, 'Ethan ', 'Rodriguez', 'ethan10@gmail.com', '123456');

