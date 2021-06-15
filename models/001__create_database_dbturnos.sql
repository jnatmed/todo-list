CREATE DATABASE IF NOT EXISTS `todolist` DEFAULT CHARACTER SET latin1
COLLATE latin1_swedish_ci;
USE `todolist`;

CREATE TABLE `tareas` (
    `descripcion` varchar(300) COLLATE utf8_spanish2_ci,
    `finalizada` boolean   
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;