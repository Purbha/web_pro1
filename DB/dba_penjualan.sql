/*
Navicat MySQL Data Transfer

Source Server         : Local
Source Server Version : 100138
Source Host           : localhost:3306
Source Database       : dba_penjualan

Target Server Type    : MYSQL
Target Server Version : 100138
File Encoding         : 65001

Date: 2019-03-25 08:44:36
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for barang
-- ----------------------------
DROP TABLE IF EXISTS `barang`;
CREATE TABLE `barang` (
  `kdbar` varchar(5) NOT NULL,
  `nmbar` varchar(45) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `harga_std` double DEFAULT NULL,
  `kategori` varchar(45) DEFAULT NULL,
  `garansi` int(11) DEFAULT NULL,
  `dibuat` datetime DEFAULT NULL,
  `diupdate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`kdbar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of barang
-- ----------------------------
INSERT INTO `barang` VALUES ('BR001', 'SEAGATE BARRACUDA INTERNAL HDD 1TB', '4', '728000', 'Komputer', '1', '2013-12-01 09:52:52', '2019-03-23 11:25:47');
INSERT INTO `barang` VALUES ('BR002', 'SANDISK FLASH DISK USB OTG m3.0 16GB', '5', '63000', 'Komputer', '1', '2013-12-01 09:53:00', '2019-03-23 11:26:35');
INSERT INTO `barang` VALUES ('BR003', 'DVDRW External Asus', '1', '319000', 'Komputer', '1', '2013-12-01 09:53:05', '2019-03-23 11:27:12');
INSERT INTO `barang` VALUES ('BR004', 'Stand Fan Kipas Angin Berdiri COSMOS 16 SDB', '5', '238999', 'Elektronik', '0', '2013-12-01 09:53:09', '2019-03-23 11:28:28');
INSERT INTO `barang` VALUES ('BR005', 'PHILIPS STAINLESS RICE COOKER PRO CERAMIC 2 L', '8', '499000', 'Elektronik', '0', '2019-03-23 11:29:58', '2019-03-23 11:29:58');

-- ----------------------------
-- Table structure for bukutamu
-- ----------------------------
DROP TABLE IF EXISTS `bukutamu`;
CREATE TABLE `bukutamu` (
  `idbukutamu` int(11) NOT NULL AUTO_INCREMENT,
  `bukutamu_nama` varchar(45) DEFAULT NULL,
  `bukutamu_email` varchar(45) DEFAULT NULL,
  `bukutamu_komentar` varchar(200) DEFAULT NULL,
  `bukutamu_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idbukutamu`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bukutamu
-- ----------------------------
INSERT INTO `bukutamu` VALUES ('1', 'ADE WIDYA', 'ade_widya@gmail.com', 'Klo dibilang bagus sii.. Ga juga.', '2019-03-23 11:34:40');
INSERT INTO `bukutamu` VALUES ('2', 'AHMAD TAUFIK', 'ahmad_taufik@gmail.com', 'Web ini masih perlu pengembangan.', '2019-03-23 11:33:16');
INSERT INTO `bukutamu` VALUES ('3', 'ANTHONY', 'anthony@gmail.com', 'Maafkan aku.. Aku tidak bisa berbohong. Web ini JELEK!!', '2019-03-23 11:36:17');
INSERT INTO `bukutamu` VALUES ('4', 'DESY WINANTI RAHAYU', 'desy_wr@gmail.com', 'Buat apa yang lebih bagus.. Klo ada yang lebih jelek.', '2019-03-23 11:36:00');
INSERT INTO `bukutamu` VALUES ('5', 'DEWI YULIANA', 'dewi_yuliana@gmail.com', 'Jangan paksa aku untuk bilang bagus karena pada faktanya engga.', '2019-03-23 11:37:08');

-- ----------------------------
-- Table structure for pelanggan
-- ----------------------------
DROP TABLE IF EXISTS `pelanggan`;
CREATE TABLE `pelanggan` (
  `kdpel` varchar(5) NOT NULL,
  `nmpel` varchar(45) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `jk` varchar(45) DEFAULT NULL,
  `dibuat` datetime DEFAULT NULL,
  `diupdate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`kdpel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pelanggan
-- ----------------------------
INSERT INTO `pelanggan` VALUES ('PL001', 'DEDI IRAWAN', 'JL.TANAH TINGGI XII RT 018/07 NO.15 JAKARTA PUSAT', 'Pria', '2019-03-23 11:21:38', '2019-03-23 11:21:38');
INSERT INTO `pelanggan` VALUES ('PL002', 'TIA DWI KARTINI', 'JL. KEBON BARU IV RT 002/09 NO 9 KEBON BARU KEC. TEBET JAKARTA SELATAN 12830', 'Wanita', '2013-11-15 00:00:00', '2019-03-23 11:20:04');
INSERT INTO `pelanggan` VALUES ('PL003', 'ABDUL MALIKI', 'JL NANAS GG MELATI VIII NO 9A RT 007/002 UKS , JKR 13120', 'Pria', '2013-11-15 00:00:00', '2019-03-23 11:20:49');
INSERT INTO `pelanggan` VALUES ('PL004', 'DIAN EKA RACHMAWATI', 'JL. KH. ABDULRACHMAN N0. 26 RT 003/01 PONDOK JAYA- DEPOK  16431', 'Wanita', '2019-03-23 11:22:39', '2019-03-23 11:22:39');
INSERT INTO `pelanggan` VALUES ('PL005', 'IBNU ARRAZI SAGALA', 'JL. JOHAR BARU V NO. 12 RT 008/05 , JKT 10560', 'Pria', '2019-03-23 11:23:39', '2019-03-23 11:23:39');

-- ----------------------------
-- Table structure for transaksi
-- ----------------------------
DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE `transaksi` (
  `idtransaksi` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_trans` date DEFAULT NULL,
  `kdpel` varchar(5) NOT NULL,
  `kdbar` varchar(5) NOT NULL,
  `harga` float DEFAULT NULL,
  `jumbel` int(11) DEFAULT NULL,
  `subtotal` float DEFAULT NULL,
  `diskon` float DEFAULT NULL,
  `total` float DEFAULT NULL,
  `dibuat` date NOT NULL,
  `diupdate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idtransaksi`),
  KEY `fk_transaksi_barang` (`kdbar`),
  KEY `fk_transaksi_pelanggan` (`kdpel`),
  CONSTRAINT `fk_transaksi_barang` FOREIGN KEY (`kdbar`) REFERENCES `barang` (`kdbar`) ON UPDATE CASCADE,
  CONSTRAINT `fk_transaksi_pelanggan` FOREIGN KEY (`kdpel`) REFERENCES `pelanggan` (`kdpel`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of transaksi
-- ----------------------------
