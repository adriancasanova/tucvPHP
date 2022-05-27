CREATE TABLE `tucv` (
  `id` int(10) UNSIGNED NOT NULL primary key AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `asunto` varchar(255) NOT NULL,
  `cuerpoEmail` varchar(5000) DEFAULT NULL,
  `cv` tinyblob NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;