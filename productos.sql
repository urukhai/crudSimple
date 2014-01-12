/*
Navicat MySQL Data Transfer
Source Host     : localhost:3306
Source Database : productos
Target Host     : localhost:3306
Target Database : productos
Date: 08/01/2014 06:07:34 p.m.
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for marca
-- ----------------------------
DROP TABLE IF EXISTS `marca`;
CREATE TABLE `marca` (
  `id_marca` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_marca` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_marca`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of marca
-- ----------------------------
INSERT INTO `marca` VALUES ('2', 'marca2');
INSERT INTO `marca` VALUES ('4', 'marcanueva');
INSERT INTO `marca` VALUES ('5', 'marca');

-- ----------------------------
-- Table structure for producto
-- ----------------------------
DROP TABLE IF EXISTS `producto`;
CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_producto` varchar(50) DEFAULT NULL,
  `talla` varchar(10) DEFAULT NULL,
  `observaciones` text,
  `id_marca` int(11) DEFAULT NULL,
  `cantidad_inventario` int(11) DEFAULT NULL,
  `fecha_embarque` date DEFAULT NULL,
  PRIMARY KEY (`id_producto`),
  KEY `id_marca` (`id_marca`),
  CONSTRAINT `id_marca` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id_marca`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of producto
-- ----------------------------
INSERT INTO `producto` VALUES ('2', 'producto2', 'M', 'Observaciones', '2', '2', '2014-01-07');
