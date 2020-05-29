/*
Navicat MySQL Data Transfer

Source Server         : MySQL-Local
Source Server Version : 100411
Source Host           : localhost:3306
Source Database       : dba_penjualan

Target Server Type    : MYSQL
Target Server Version : 100411
File Encoding         : 65001

Date: 2020-05-29 09:10:42
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
  `diupdate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`kdbar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of barang
-- ----------------------------
INSERT INTO `barang` VALUES ('BR001', 'SEAGATE BARRACUDA INTERNAL HDD 1TB', '4', '728000', 'Komputer', '1', '2013-12-01 09:52:52', '2019-03-23 11:25:47');
INSERT INTO `barang` VALUES ('BR002', 'SANDISK FLASH DISK USB OTG m3.0 16GB', '5', '63000', 'Komputer', '1', '2013-12-01 09:53:00', '2019-03-23 11:26:35');
INSERT INTO `barang` VALUES ('BR003', 'DVDRW External Asus', '1', '319000', 'Komputer', '1', '2013-12-01 09:53:05', '2019-03-23 11:27:12');
INSERT INTO `barang` VALUES ('BR004', 'STAND KIPAS ANGIN Berdiri COSMOS 16 SDB', '5', '238999', 'Elektronik', '0', '2013-12-01 09:53:09', '2019-07-05 08:54:59');
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
  `bukutamu_create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`idbukutamu`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bukutamu
-- ----------------------------
INSERT INTO `bukutamu` VALUES ('1', 'ADE WIDYA', 'ade_widya@gmail.com', 'Klo dibilang bagus sii.. Ga juga.', '2019-03-23 11:34:40');
INSERT INTO `bukutamu` VALUES ('2', 'AHMAD TAUFIK', 'ahmad_taufik@gmail.com', 'Web ini masih perlu pengembangan.', '2019-03-23 11:33:16');
INSERT INTO `bukutamu` VALUES ('3', 'ANTHONY', 'anthony@gmail.com', 'Maafkan aku.. Aku tidak bisa berbohong. Web ini JELEK!!', '2019-03-23 11:36:17');
INSERT INTO `bukutamu` VALUES ('4', 'DESY WINANTI RAHAYU', 'desy_wr@gmail.com', 'Buat apa yang lebih bagus.. Klo ada yang lebih jelek.', '2019-03-23 11:36:00');
INSERT INTO `bukutamu` VALUES ('5', 'DEWI YULIANA', 'dewi_yuliana@gmail.com', 'Jangan paksa aku untuk bilang bagus karena pada faktanya engga.', '2019-03-23 11:37:08');
INSERT INTO `bukutamu` VALUES ('6', 'Albedo', 'albedo@gmail.com', 'Website ini masih sederhana..', '2020-04-29 17:04:36');

-- ----------------------------
-- Table structure for login
-- ----------------------------
DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `idlogin` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID Login',
  `login_username` varchar(255) DEFAULT NULL COMMENT 'Username',
  `login_password` varchar(255) DEFAULT NULL COMMENT 'Password',
  `login_nama` varchar(255) DEFAULT NULL COMMENT 'Nama',
  `login_fail` int(11) DEFAULT NULL,
  PRIMARY KEY (`idlogin`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of login
-- ----------------------------
INSERT INTO `login` VALUES ('1', 'admin', 'admin123', 'Irsyad Purbha', '0');
INSERT INTO `login` VALUES ('2', 'user', 'user123', 'User Biasa', '0');

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
  `diupdate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`kdpel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pelanggan
-- ----------------------------
INSERT INTO `pelanggan` VALUES ('PL001', 'DEDDI IRAWAN', 'JL.TANAH TINGGI XII RT 018/07 NO.15 JAKARTA PUSAT', 'Pria', '2019-03-23 11:21:38', '2020-04-29 14:04:18');
INSERT INTO `pelanggan` VALUES ('PL002', 'TIA DWI KARTINI', 'JL. KEBON BARU IV RT 002/09 NO 9 KEBON BARU KEC. TEBET JAKARTA SELATAN 12831', 'Wanita', '2013-11-15 00:00:00', '2020-04-29 19:50:11');
INSERT INTO `pelanggan` VALUES ('PL003', 'ABDUL MALIKI 2', 'JL NANAS GG MELATI VIII NO 9A RT 007/002 UKS , JKR 131201', 'Wanita', '2013-11-15 00:00:00', '2020-04-29 19:50:26');
INSERT INTO `pelanggan` VALUES ('PL004', 'DIAN EKA RACHMAWATI', 'JL. KH. ABDULRACHMAN N0. 26 RT 003/01 PONDOK JAYA- DEPOK  16432', 'Wanita', '2019-03-23 11:22:39', '2020-04-29 19:50:28');
INSERT INTO `pelanggan` VALUES ('PL005', 'IBNU ARRAZI SAGALA', 'JL. JOHAR BARU V NO. 12 RT 008/05 , JKT 10569', 'Pria', '2019-03-23 11:23:39', '2020-04-29 19:50:31');

-- ----------------------------
-- Table structure for transaksi
-- ----------------------------
DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE `transaksi` (
  `idtrans` varchar(10) NOT NULL,
  `tgl_trans` date DEFAULT NULL,
  `kdpel` varchar(5) NOT NULL,
  `kdbar` varchar(5) NOT NULL,
  `harga` float DEFAULT NULL,
  `jumbel` int(11) DEFAULT NULL,
  `subtotal` float DEFAULT NULL,
  `diskon` float DEFAULT NULL,
  `total` float DEFAULT NULL,
  `dibuat` date NOT NULL,
  `diupdate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`idtrans`),
  KEY `fk_transaksi_barang` (`kdbar`),
  KEY `fk_transaksi_pelanggan` (`kdpel`),
  CONSTRAINT `fk_transaksi_barang` FOREIGN KEY (`kdbar`) REFERENCES `barang` (`kdbar`) ON UPDATE CASCADE,
  CONSTRAINT `fk_transaksi_pelanggan` FOREIGN KEY (`kdpel`) REFERENCES `pelanggan` (`kdpel`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of transaksi
-- ----------------------------
INSERT INTO `transaksi` VALUES ('', '2020-05-25', 'PL005', 'BR005', '499000', '1', '499000', '0', '499000', '2020-05-25', null);
INSERT INTO `transaksi` VALUES ('2004300001', '2020-04-30', 'PL002', 'BR003', '319000', '6', '1914000', '95700', '1818300', '2020-04-30', '2020-04-30 09:54:26');
INSERT INTO `transaksi` VALUES ('2004300002', '2020-04-30', 'PL004', 'BR001', '728000', '2', '1456000', '0', '1456000', '2020-04-30', '2020-04-30 12:24:19');
INSERT INTO `transaksi` VALUES ('2004300003', '2020-04-30', 'PL003', 'BR004', '238999', '1', '238999', '0', '238999', '2020-04-30', '2020-04-30 12:26:54');
INSERT INTO `transaksi` VALUES ('2004300004', '2020-04-30', 'PL005', 'BR005', '499000', '2', '998000', '0', '998000', '2020-04-30', '2020-04-30 12:34:59');
INSERT INTO `transaksi` VALUES ('2005020001', '2020-05-02', 'PL002', 'BR004', '238999', '12', '2867990', '286799', '2581190', '2020-05-02', '2020-05-02 07:57:42');
