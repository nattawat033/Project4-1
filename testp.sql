-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 14, 2018 at 03:17 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testp`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni_profile`
--

DROP TABLE IF EXISTS `alumni_profile`;
CREATE TABLE IF NOT EXISTS `alumni_profile` (
  `AP_ID` int(20) NOT NULL AUTO_INCREMENT,
  `AP_username` varchar(50) COLLATE utf8_bin NOT NULL,
  `AP_password` varchar(20) COLLATE utf8_bin NOT NULL,
  `AP_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `AP_Lname` varchar(20) COLLATE utf8_bin NOT NULL,
  `AP_nickname` varchar(20) COLLATE utf8_bin NOT NULL,
  `Grup_ID` int(20) DEFAULT NULL,
  `major_name` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `fac_name` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `img_pro` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `AP_idcard` text COLLATE utf8_bin NOT NULL,
  `AP_address` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `AP_district` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `AP_citty` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `AP_addcode` int(5) DEFAULT NULL,
  `AP_tell` int(10) UNSIGNED ZEROFILL DEFAULT NULL,
  `AP_lineID` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `AP_facebook` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `AP_email` varchar(50) COLLATE utf8_bin NOT NULL,
  `job_ID` int(20) DEFAULT NULL,
  `std_ID` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `Status` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`AP_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `alumni_profile`
--

INSERT INTO `alumni_profile` (`AP_ID`, `AP_username`, `AP_password`, `AP_name`, `AP_Lname`, `AP_nickname`, `Grup_ID`, `major_name`, `fac_name`, `img_pro`, `AP_idcard`, `AP_address`, `AP_district`, `AP_citty`, `AP_addcode`, `AP_tell`, `AP_lineID`, `AP_facebook`, `AP_email`, `job_ID`, `std_ID`, `Status`) VALUES
(17, '5730213099', '5730213099', 'วรัญญู', 'กีรติโชติ', 'ฐิติวัลค์', 10, 'วิทยาลัยการคอมพิวเตอร์', 'วิศวกรรมซอฟต์แวร์', 'img_5c10d537157c4.', '1905630211051', '80/1', 'กะทู้', 'ภูเก็ต', 83120, 0959429755, 'titiwal', 'Rju Titiwan', 'soulkeeper_ju@hotmail.com', NULL, '5730213099', NULL),
(18, '5730211006', '5730211006', 'ยศวัฒน์', 'สุจิตราภรณ์', 'ยศวัฒน์', 12, 'วิทยาลัยการคอมพิวเตอร์', 'เทคโนโลยีสารสนเทศ', 'img_5c10d71a0df93.', '1905730211006', '180', 'กะทู้', 'ภูเก็ต', 83120, 0982600189, 'aogami8089', 'Fuse Yodsawat', 'yodsawat.s@hotmail.com', NULL, '5730211006', NULL),
(19, '5730211009', '5730211009', 'ศุภโชค', 'หนูปาน', 'โชค', 12, 'วิทยาลัยการคอมพิวเตอร์', 'เทคโนโลยีสารสนเทศ', 'img_5c10d87d4a893.', '1905730211009', '13', 'ห้วยยอด', 'ตรัง', 20039, 0887575475, 'o.suphachok', 'Suphachok Noopan', 'noopan.suphachok@gmail.com', NULL, '5730211009', NULL),
(20, '5730211010', '5730211010', 'นวพงษ์', 'อติวัฒนานนท์', 'พงษ์', 12, 'วิทยาลัยการคอมพิวเตอร์', 'เทคโนโลยีสารสนเทศ', 'img_5c10d983c3fe5.', '1905730211010', '4', 'ระโนด', 'สงขลา', 90140, 0640219900, '_ctrl.m', 'Nawapong Atiwattananon', 'nawapong_10@hotmail.com', NULL, '5730211010', NULL),
(21, '5730211018', '5730211018', 'ธนวัฒน์', 'วิชัย', 'มีท', 12, 'วิทยาลัยการคอมพิวเตอร์', 'เทคโนโลยีสารสนเทศ', 'img_5c10daf535a3d.', '1905730211018', '7', 'ละอุ่น', 'ระนอง', 85130, 0873733833, 'meatevo', 'Smith Ch', 'evolutionthanawat@gmail.com', NULL, '5730211018', NULL),
(22, '5730211019', '5730211019', 'ปิยะพันธ์', 'ชมสุวรรณ', 'วรรณ', 12, 'วิทยาลัยการคอมพิวเตอร์', 'เทคโนโลยีสารสนเทศ', 'img_5c10dc656a37b.', '1905730211019', '5 ต.น้ำจืด', 'กระบุรี', 'ระนอง', 85110, 0835516929, 'stevegolf', 'Piyaphan Chomsuwan', 'piyaphan.c@hotmail.com', NULL, '5730211019', NULL),
(23, '5730211030', '5730211030', 'ณัฐพร', 'ขจรบุญ', 'ปอนด์', 12, 'วิทยาลัยการคอมพิวเตอร์', 'เทคโนโลยีสารสนเทศ', 'img_5c10dd8524a69.', '1905730211030', '12', 'เมือง', 'ภูเก็ต', 83000, 0875693373, 'imponnyy', 'Nattaporn Kajornboon', 'nattaporn.kaj@gmail.com', NULL, '5730211030', NULL),
(24, '5730211033', '5730211033', 'วทัญญู', 'น้อยมา', 'แมน', 12, 'วิทยาลัยการคอมพิวเตอร์', 'เทคโนโลยีสารสนเทศ', 'img_5c10dee58b922.', '1905730211033', '49 ม.1', 'กะทู้', 'ภูเก็ต', 83120, 0918176196, 'bestnoima ', 'Wathanyu Noima', 'Wathanyoo.n@hotmail.com', NULL, '5730211033', NULL),
(25, '5730211044', '5730211044', 'วชิรวิทย์', 'แขวงเมฆ', 'นิว', 12, 'วิทยาลัยการคอมพิวเตอร์', 'เทคโนโลยีสารสนเทศ', 'img_5c10e02cb2eec.', '1905730211044', '4', 'หาดใหญ่', 'สงขลา', 90180, 0827764904, 'Sunnew025', 'New Kvangmake', 'Vachiravit.kvangmake@gmail.com', NULL, '5730211044', NULL),
(26, '5730211054', '5730211054', 'อันธิกา', 'สังข์ประสิทธิ์', 'อัน', 12, 'วิทยาลัยการคอมพิวเตอร์', 'เทคโนโลยีสารสนเทศ', 'img_5c10e15a99217.', '1905730211054', '6', 'วิชิต', 'ภูเก็ต', 83000, 0973518322, 'firn39', 'ANTHIKA SUNGPRASIT', 'Anthika-firn@hotmail.com', NULL, '5730211054', NULL),
(27, '5730211056', '5730211056', 'ณัฐวุฒิ', 'ลิขิตบรรณศักดิ์', 'dew', 12, 'วิทยาลัยการคอมพิวเตอร์', 'เทคโนโลยีสารสนเทศ', 'img_5c10e26c59478.', '1905730211056', '4', 'บ้านนาสาร', 'สุราษฎร์ธานี', 84120, 0911696541, '.mep', 'Dew Mangjeng', 'dewmangjeng@gmail.com', NULL, '5730211056', NULL),
(28, '5730211071', '5730211071', 'กมลพรรณ', 'จันทร์นาค', 'แนน', 12, 'วิทยาลัยการคอมพิวเตอร์', 'เทคโนโลยีสารสนเทศ', 'img_5c10e3c5c441d.', '1905730211071', '70 ม.3', 'เมือง', 'สงขลา', 90000, 0864871759, '0955091424', 'เฌอแนน กมลพรรณ', 'kamonphun405@gmail.com', NULL, '5730211071', NULL),
(29, '5730211075', '5730211075', 'อัญชนา​', 'ทองเพชร', 'ฟ้า', 12, 'วิทยาลัยการคอมพิวเตอร์', 'เทคโนโลยีสารสนเทศ', 'img_5c10e4ba3c1b8.', '1905730211075', 'บ้านนาสาร', 'บ้านนาสาร', 'สุราษฎร์ธานี', 84120, 0620494468, 'fahyi-en', 'Fah Anchana', 'Unchana.thongped75@gmail.com', NULL, '5730211075', NULL),
(30, '5730211077', '5730211077', 'รัตติกาล', 'ริยาพันธ์', 'ไอซ์', 12, 'วิทยาลัยการคอมพิวเตอร์', 'เทคโนโลยีสารสนเทศ', 'img_5c10e624509ba.', '1905730211077', '50/1 ', 'ท่าชนะ', 'สุราษฎร์ธานี', 84170, 0874637891, 'ice3734', 'Rattikarn Riyapan', 'rattikarn555@hotnail.co.th', NULL, '5730211077', NULL),
(31, 'alumni', '12345', 'ดร.อดิศักดิ์', 'อินทนา', 'อาจารย์ป้อม', 12, 'วิทยาลัยการคอมพิวเตอร์', 'เทคโนโลยีสารสนเทศ', 'img_5c10e7273d2ef.', '1905730211080', '15/80, Kathu, Krathu', 'กะทู้', 'ภูเก็ต', 83120, 0980142899, 'kwanjai_kate', 'Tassanee Kwanjai KJ Hattiya', 'tassanee.hattiyakj080@gmail.com', NULL, '5730211080', 'ADMIN'),
(32, '5730213064', '5730213064', 'ศราวุฒิ', 'นววิศิษฏ์กุล', 'มาร์ค', 10, 'วิทยาลัยการคอมพิวเตอร์', 'วิศวกรรมซอฟต์แวร์', 'img_5c10e81e11fd5.', '1905730213064', '255/1 ม.1', 'ท่าฉาง', 'สุราษฎร์ธานี', 84150, 0918363922, 'mamochiro', 'Mark Kie', 'sarawut.nawawisitkul@gmail.com', NULL, '5730213064', NULL),
(33, '5730213001', '5730213001', 'อารยา', 'ชูทอง', 'ฝน', 10, 'วิทยาลัยการคอมพิวเตอร์', 'วิศวกรรมซอฟต์แวร์', 'img_5c10e8c778efd.', '1905730213001', '245/9 ม.1', 'เวียงสระ', 'สุราษฎร์ธานี', 84190, 0988765696, 'anythingfons ', 'Araya Choothong ', 'arayachoothong@gmail.com', NULL, '5730213001', NULL),
(34, '5730213026', '5730213026', 'ธนวัฒน์', 'แซ่อ๋าง', 'ฟีมล์', 10, 'วิทยาลัยการคอมพิวเตอร์', 'วิศวกรรมซอฟต์แวร์', 'img_5c10e95a8f68f.', '1905730213026', '7 ม.5', 'ตะกั่วป่า', 'พังงา', 80110, 0833919391, 'filmmtnw', 'Filmm Tanawat', 'filmm.tanawat@gmail.com', NULL, '5730213026', NULL),
(35, '5730213004', '5730213004', 'ประกาศิต', 'อินทรสมบัติ', 'กาย', 10, 'วิทยาลัยการคอมพิวเตอร์', 'วิศวกรรมซอฟต์แวร์', 'img_5c10ea149df52.', '1905730213004', '45 ม.5 ', 'ระโนด', 'สงขลา', 90140, 0862730559, 'Prakasitguy1', 'Prakasit Intarasombat', 'Prakasitkz@gmail.com', NULL, '5730213004', NULL),
(36, '5730213055', '5730213055', 'วิทวัส', 'อนันทชาติ', 'เจมส์', 10, 'วิทยาลัยการคอมพิวเตอร์', 'วิศวกรรมซอฟต์แวร์', 'img_5c10ea8101970.', '1905730213055', '422 ม. ต.ระโนด', 'ระโนด', 'สงขลา', 90140, 0979798188, 'james055', 'withawat WA', 'vittawat.dd@gmail.com', NULL, '5730213055', NULL),
(37, '5730213038', '5730213038', 'พุทธินันท์', 'ดวงสำราญ', 'ทราย', 10, 'วิทยาลัยการคอมพิวเตอร์', 'วิศวกรรมซอฟต์แวร์', 'img_5c10eb5c8aff0.', '1905730213038', '55/8 ต.ตะกั่วป่า', 'ตะกั่วป่า', 'พังงา', 82110, 0887531041, 'puttinun12 ', 'Puttinun Duangsamran ', 'puttinun.sai1112@gmail.com', NULL, '5730213038', NULL),
(38, '5730213045', '5730213045', 'วชิรา', 'มาศโอสถ', 'ชิ', 10, 'วิทยาลัยการคอมพิวเตอร์', 'วิศวกรรมซอฟต์แวร์', 'img_5c10ec8786342.', '1905730213045', '255/1 ม.1', 'กะทู้', 'ภูเก็ต', 83120, 0937825192, 'dapie711', 'Vachira Masosot', 'Vachira.mas@gmail.com', NULL, '5730213045', NULL),
(39, '5730213003', '5730213003', 'นลพรรณ', 'ปานสิทธิ์', 'หยก', 10, 'วิทยาลัยการคอมพิวเตอร์', 'วิศวกรรมซอฟต์แวร์', 'img_5c10ed17e0425.', '1905730213003', '245/9 ม.1', 'ห้วยยอด', 'ตรัง', 92130, 0910359257, 'sincere-yok', 'Nonlapun Pansit ', 'nonlapun.pan@icloud.com', NULL, '5730213003', NULL),
(40, '5730213047', '5730213047', 'ณัฎฐณิชา', 'โชหนู', 'นัท', 10, 'วิทยาลัยการคอมพิวเตอร์', 'วิศวกรรมซอฟต์แวร์', 'img_5c10eda03671f.', '1905730213047', '444/235 ม.2', 'ห้วยยอด', 'ตรัง', 92130, 0637954165, 'toktaky', 'Toktak N. Chonoo', 'natthanicha.chs@gmail.com', NULL, '5730213047', NULL),
(41, '5730213031', '5730213031', 'อุไรวรรณ', 'เผือกเพ็ชร์', 'วรรณ', 10, 'วิทยาลัยการคอมพิวเตอร์', 'วิศวกรรมซอฟต์แวร์', 'img_5c10ee159b9f4.', '1905730213031', '80/1 ม.1  ต.กะทู้', 'กะทู้', 'ภูเก็ต', 83120, 0831800046, 'Uraiwan.miiinkk', 'Minkk uraiwan', 'Auriwaan0046@gmail.com', NULL, '5730213031', NULL),
(42, '5730213059', '5730213059', 'พิรัชนา', 'มากทรัพย์', 'นา', 10, 'วิทยาลัยการคอมพิวเตอร์', 'วิศวกรรมซอฟต์แวร์', 'img_5c10eea470da6.', '1905730213059', '80/1 ม.1  ต.กะทู้', 'กะทู้', 'ภูเก็ต', 83120, 0917896357, 'Creammini_perfume', 'Creme Piratchana', 'Piratchana063@gmail.com', NULL, '5730213059', NULL),
(43, '5730213057', '5730213057', 'จตุวิทย์', 'พิทักษ์ด่านสกุล', 'นัท', 10, 'วิทยาลัยการคอมพิวเตอร์', 'วิศวกรรมซอฟต์แวร์', 'img_5c10ef10eadb2.', '1905730213057', '45 ม.5 ', 'ระโนด', 'สงขลา', 90140, 0887575458, 'nutjatuwit', 'jatuwit pitukdansakul', 'jatuwit104@gmail.com', NULL, '5730213057', NULL),
(44, '5730213043', '5730213043', 'ภานุวัฒน์', 'บูรณประพันธ์', 'ฟีล์ม', 10, 'วิทยาลัยการคอมพิวเตอร์', 'วิศวกรรมซอฟต์แวร์', 'img_5c10efce816ed.', '1905730213043', '45 ซ.3 ม.10', 'เหนืองคลอง', 'กระบี่', 81130, 0902515477, '-', 'Phanuwat buranapraphan', 'panuwat16692@gmail.com', NULL, '5730213043', NULL),
(45, '5730213044', '5730213044', 'ปัญญาปราชญ์', 'ตุลารักษ์', 'ปัน', 10, 'วิทยาลัยการคอมพิวเตอร์', 'วิศวกรรมซอฟต์แวร์', 'img_5c11e4af47a99.', '1905730213044', '245/1', 'ระโนด', 'สงขลา', 90140, 0937714310, '-', 'Panyaprach', 'panyaprach.jop@gmail.com', NULL, '5730213044', NULL),
(46, '5730213058', '5730213058', 'จิรวัฒน์', 'เพ็ชรุพันธ์', 'ลิงน้อย', 10, 'วิทยาลัยการคอมพิวเตอร์', 'วิศวกรรมซอฟต์แวร์', 'img_5c10f12beb623.', '1905730213058', '245/1 ม.1', 'ระโนด', 'สงขลา', 90140, 0864927467, '-', 'jirawat phetrupan', 'chahlam007@gmail.com', NULL, '5730213058', NULL),
(47, '5730212052', '5730212052', 'ธิดารัตน์', 'ลาดบูรณ์', 'มิ้ว', 10, 'วิทยาลัยการคอมพิวเตอร์', 'ธุรกิจอิเล็กทรอนิกส์', 'img_5c10f2d88c91c.', '1905730212052', '24/8', 'เกาะลันตา', 'กระบี่', 81150, 0935768457, 'Mewladboon', 'Thidarat Ladboon', 'Mewthidarat22@gmail.com', NULL, '5730212052', NULL),
(48, '5730212059', '5730212059', 'นายพงศกร', 'ว่องไวประเสริฐ', 'นิว', 10, 'วิทยาลัยการคอมพิวเตอร์', 'ธุรกิจอิเล็กทรอนิกส์', 'img_5c10f3bb04eb1.', '1905730212059', '47/3', 'มะนัง', 'สตูล', 91130, 0824835134, '-', 'Pongsakorn Wongwaiprasert', 'Pongsakorn_new2538@hotmail.com', NULL, '5730212059', NULL),
(49, '5730212020', '5730212020', 'ลักขณา', 'ชัยพริ้ง', 'แพร', 10, 'วิทยาลัยการคอมพิวเตอร์', 'ธุรกิจอิเล็กทรอนิกส์', 'img_5c10f462087b6.', '1905730212020', '14/3', 'เมือง', 'ภูเก็ต', 90180, 0831066908, 'pearypeary.', 'Lukkana Chaipring', 'pear.lukkana0612@hotmail.com', NULL, '5730212020', NULL),
(50, '5730212030', '5730212030', 'อภิชา', 'แซ่อึ้ง', 'กอฟ', 10, 'วิทยาลัยการคอมพิวเตอร์', 'ธุรกิจอิเล็กทรอนิกส์', 'img_5c10f5766ac47.', '1905730212030', '37', 'ท่าแพ', 'สตูล', 91150, 0887503770, 'jayjapicha', 'apicha sae-ueng', 'apicha.sng@outlook.com', NULL, '5730212030', NULL),
(51, '5730212010', '5730212010', 'ณัฐณิชา', 'มะโนวงศ์', 'นุ่น', 10, 'วิทยาลัยการคอมพิวเตอร์', 'ธุรกิจอิเล็กทรอนิกส์', 'img_5c10f655c50e0.', '1905730212010', '48/3', 'เมือง', 'ชุมพร', 86000, 0813967688, 'Nutnicha.nn', 'Noon', 'B.z-_@live.com', NULL, '5730212010', NULL),
(52, '5730212051', '5730212051', 'ณัฐวรรณ', 'จุลกัลป์', 'น้ำหวาน', 10, 'วิทยาลัยการคอมพิวเตอร์', 'ธุรกิจอิเล็กทรอนิกส์', 'img_5c10f7902c843.', '1905730212051', '41/2', 'หลังสวน', 'ชุมพร', 86110, 0935804189, 'numwan2538', 'Numhwan Natthawan', 'numhwrn@hotmail.com', NULL, '5730212051', NULL),
(53, '5730212061', '5730212061', 'อริสา', 'คงศิริ', 'แยม', 10, 'วิทยาลัยการคอมพิวเตอร์', 'ธุรกิจอิเล็กทรอนิกส์', 'img_5c10f8f36efff.', '1905730212061', '41/7', 'ทุ่งสง', 'นครศรีธรรมราช', 80110, 0828065406, 'e-yam', 'Yamroll Aks', 'Arisa.k2537@gmail.com', NULL, '5730212061', NULL),
(54, '5730212028', '5730212028', 'กฤตพร​', 'จันทร์ช่วย', 'กิต', 10, 'วิทยาลัยการคอมพิวเตอร์', 'ธุรกิจอิเล็กทรอนิกส์', 'img_5c10fa5a681ee.', '1905730212028', '41/2', 'ปากพนัง', 'นครศรีธรรมราช', 80140, 0894631110, 'nynkbaz', 'Nynk krittapohn', 'krittapohn.n@gmail.com​', NULL, '5730212028', NULL),
(55, '5730212056', '5730212056', 'ธีรพงษ์', 'มีษา', 'พงษ์', 10, 'วิทยาลัยการคอมพิวเตอร์', 'ธุรกิจอิเล็กทรอนิกส์', 'img_5c10fb781c9fa.', '1905730212056', '8', 'หัวไทร', 'นครศรีธรรมราช', 80170, 0814797647, 'bitinnocent', 'Teerapong Meesa', 'teerapong.meesa@gmail.com', NULL, '5730212056', NULL),
(56, '5730212004', '5730212004', 'มารุตพงศ์', 'แซ่โค้ว', 'รุต', 10, 'วิทยาลัยการคอมพิวเตอร์', 'ธุรกิจอิเล็กทรอนิกส์', 'img_5c10fc3a24484.', '1905730212004', '80/1 ม.1  ต.กะทู้', 'กะทู้', 'ภูเก็ต', 83120, 0822871285, 'nuy.saekhow', 'Marutpong saekhow', 'marutpong2009@gmail.com', NULL, '5730212004', NULL),
(57, '5730212006', '5730212006', 'นพเกศ', 'ฉิมสกุล', 'บิ๋ม', 10, 'วิทยาลัยการคอมพิวเตอร์', 'ธุรกิจอิเล็กทรอนิกส์', 'img_5c10fcab55f6d.', '1905730212006', '80/1 ม.1  ต.กะทู้', 'กะทู้', 'ภูเก็ต', 83120, 0921251995, 'bbimkaa', 'Bimm Chim', 'noppagate.c@gmail.com', NULL, '5730212006', NULL),
(58, '5730212023', '5730212023', 'ภูเนศวร์', 'นพรัตน์', 'ภู', 10, 'วิทยาลัยการคอมพิวเตอร์', 'ธุรกิจอิเล็กทรอนิกส์', 'img_5c10fd5c3b4ea.', '1905730212023', '80/1 ม.1  ต.กะทู้', 'กะทู้', 'ภูเก็ต', 83120, 0915322309, 'poowanateza', 'tor rob', 'poowanate.nop@gmail.com', NULL, '5730212023', NULL),
(59, '5730212002', '5730212002', 'ณัฐภณ', 'อิทธิอัศกร', 'โอ๊ต', 10, 'วิทยาลัยการคอมพิวเตอร์', 'ธุรกิจอิเล็กทรอนิกส์', 'img_5c10fdc472db6.', '1905730212002', '80/1 ม.1  ต.กะทู้', 'กะทู้', 'ภูเก็ต', 83120, 0897298039, 'Kl2a0at', 'Oat Natthaphon ', 'Natthaphon.aitthi@gmail.com', NULL, '5730212002', NULL),
(60, '5730212036', '5730212036', 'วรวิทย์', 'สนธิกุล', 'วิทย์', 10, 'วิทยาลัยการคอมพิวเตอร์', 'ธุรกิจอิเล็กทรอนิกส์', 'img_5c10fe39a991e.', '1905730212036', '80/1 ม.1  ต.กะทู้', 'กะทู้', 'ภูเก็ต', 83120, 0922516641, 'worawit7428', 'worawit', 'worawit422@gmail.con', NULL, '5730212036', NULL),
(61, '5730212055', '5730212055', 'ณัฐพล', 'พันธุ์ทิพย์', 'พล', 10, 'วิทยาลัยการคอมพิวเตอร์', 'ธุรกิจอิเล็กทรอนิกส์', 'img_5c10feb111939.', '1905730212055', '80/1 ม.1  ต.กะทู้', 'กะทู้', 'ภูเก็ต', 83120, 0836434087, '-', 'dew nuttapon', 'nuttapon1926@gmail.com', NULL, '5730212055', NULL),
(62, '12345', '12345', 'ไกรศร', 'สิงสม', 'ปิ๋ว', 10, 'วิทยาลัยการคอมพิวเตอร์', 'วิศวกรรมซอฟต์แวร์', 'img_5c120ae518a78.jpg', '1905730213086', '15/80 ม.1 ซ.มโนรม ถ.วิชิตสงคราม  ต.กะทู้ ', 'กะทู้', 'ภูเก็ต', 83120, 0918208192, 'pivsingsom', 'Piv Singsom', 'kraisorn.singsom@gmail.com', NULL, '5730213086', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `txtMessage` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `img` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `m_username` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `AP_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `AP_Lname` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `datesave` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`a_id`, `title`, `txtMessage`, `img`, `m_username`, `AP_name`, `AP_Lname`, `datesave`) VALUES
(14, 'portfolio', '<p>ขยายเวลา++ ถึงวันที่ 22 พย. จ้าาาาาา ด่วน ๆ เลย น้า&nbsp;<br />\r\n.<br />\r\nCoC สร้างสรรค์กิจกรรมดี ๆ อีกแล้ววว !!<br />\r\n&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&ndash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&ndash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&ndash;<br />\r\n&nbsp;วิทยาลัยการคอมพิวเตอร์ร่วมกับ Animation &amp; Multimedia Technology Center (AMTEC) จัดกิจกรรม &ldquo;ทำ Portfolio พร้อมลุย TCAS 1&rdquo;&nbsp;<br />\r\n&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&ndash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&ndash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&ndash;<br />\r\nทำพอร์ตยังไงให้โดนใจ ! ทำพอร์ตยังไงให้น่าสนใจ ! น้อง ๆ ชั้น ม.6 และ ปวช.3 อย่ารอช้าาา !! สแกน QR Code แล้วสมัครมาเลย หรือ คลิ๊ก &gt;&gt;https://goo.gl/oPZS9h<br />\r\n&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&ndash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&ndash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&ndash;<br />\r\nรับจำนวนจำกัดแค่ 60 ที่นั่งเท่านั้น !<br />\r\n.<br />\r\nและที่สำคัญงานนี้ Free Free Free ไม่มีค่าใช้จ่าย**&nbsp;<br />\r\n.<br />\r\nเปิดรับสมัครวันนี้ &ndash; 22 พฤศจิกายน 2561 เท่านั้น<br />\r\n.<br />\r\n&nbsp;กิจกรรมจะจัดขึ้นในวันที่ 24 พฤศจิกายน 2561<br />\r\n.<br />\r\nณ ห้องปฏิบัติการคอมพิวเตอร์ วิทยาลัยการคอมพิวเตอร์ มหาวิทยาลัยสงขลานครินทร์ วิทยาเขตภูเก็ต<br />\r\n.<br />\r\nและที่สำคัญ สำหรับน้อง ๆ ที่สนใจศึกษาต่อที่วิทยาลัยการคอมพิวเตอร์ Port ไหน โดนใจกรรมการ สัมภาษณ์และได้รับสิทธิ์เข้าเรียนทันที !&nbsp;<br />\r\n&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&ndash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&ndash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&ndash;<br />\r\n**หมายเหตุ ในการสมัครมีค่ามัดจำ 200 บาท ทางวิทยาลัยจะคืนเงินให้หลังเสร็จสิ้นการเข้าร่วมโครงการ<br />\r\n.<br />\r\nรายละเอียดการโอนเงินค่ามัดจำ<br />\r\nวิธีชำระค่ามัดจำ โดยทำการโอนเงินมาที่<br />\r\nชื่อบัญชี : นางสาวอาภากร บุนนาค<br />\r\nเลขที่บัญชี : 857-2-175533<br />\r\nธนาคาร : ธนาคารไทยพาณิชย์ จำกัด (มหาชน)<br />\r\nประเภท : ออมทรัพย์<br />\r\nภายในเที่ยงคืน วันที่ 22 พฤศจิกายน 2561<br />\r\n&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&ndash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&ndash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&ndash;<br />\r\n&nbsp;หลังจากโอนเงิน ให้นักเรียนถ่ายรูปหลักฐานการโอนเงิน พร้อมระบุชื่อ &ndash; สกุล และโรงเรียน<br />\r\nส่งมาที่ E-mail : coc@phuket.psu.ac.th, หรือ Line ID : coc_psuphuket ระบุหัวข้อ &ldquo;ทำ Portfolio พร้อมลุย TCAS 1&rdquo;<br />\r\n&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&ndash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&ndash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&ndash;<br />\r\n&nbsp;สอบถามเพิ่มเติม โทร.076-276471 (พี่ปราย อาภากร บุนนาค)</p>\r\n', '38670536520181212_022238.jpg', '16', 'Nattakan', 'Chaiyasena', '2018-12-11 19:25:38');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `Dept_ID` int(20) NOT NULL AUTO_INCREMENT,
  `Dept_name` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`Dept_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `edu_bg`
--

DROP TABLE IF EXISTS `edu_bg`;
CREATE TABLE IF NOT EXISTS `edu_bg` (
  `Edu_ID` int(20) NOT NULL AUTO_INCREMENT,
  `AP_ID` int(20) NOT NULL,
  `Edu_major` varchar(50) COLLATE utf8_bin NOT NULL,
  `Edu_fac` varchar(50) COLLATE utf8_bin NOT NULL,
  `Edu_univercitty` varchar(50) COLLATE utf8_bin NOT NULL,
  `Edu_county` varchar(50) COLLATE utf8_bin NOT NULL,
  `Etype_ID` int(20) DEFAULT NULL,
  PRIMARY KEY (`Edu_ID`,`AP_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `edu_bg`
--

INSERT INTO `edu_bg` (`Edu_ID`, `AP_ID`, `Edu_major`, `Edu_fac`, `Edu_univercitty`, `Edu_county`, `Etype_ID`) VALUES
(1, 16, 'qq', 're', 'PSU', 'Thailand', NULL),
(1, 45, 'นนน', 'sf', 'sf', 'Thailand', NULL),
(2, 16, 'computer Science', 'Faculty of Applied Science', 'King College London', 'UK', NULL),
(2, 45, 'นนน', 'Faculty of Applied Science', 'King College London', 'Thailand', NULL),
(3, 16, 'computer Science', 'Faculty of Applied Science', 'King College London', 'Thailand', NULL),
(3, 45, '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `edu_type`
--

DROP TABLE IF EXISTS `edu_type`;
CREATE TABLE IF NOT EXISTS `edu_type` (
  `Etype_ID` int(20) NOT NULL AUTO_INCREMENT,
  `Etpye_name` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`Etype_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `edu_type`
--

INSERT INTO `edu_type` (`Etype_ID`, `Etpye_name`) VALUES
(1, 'Doctor'),
(2, 'Master'),
(3, 'Bachelor');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

DROP TABLE IF EXISTS `faculty`;
CREATE TABLE IF NOT EXISTS `faculty` (
  `Fact_ID` int(20) NOT NULL AUTO_INCREMENT,
  `Fact_name` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`Fact_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

DROP TABLE IF EXISTS `job`;
CREATE TABLE IF NOT EXISTS `job` (
  `job_ID` int(20) NOT NULL AUTO_INCREMENT,
  `AP_ID` int(20) NOT NULL,
  `job_name` varchar(1000) COLLATE utf8_bin DEFAULT NULL,
  `job_position` varchar(1000) COLLATE utf8_bin DEFAULT NULL,
  `job_address` varchar(1000) COLLATE utf8_bin DEFAULT NULL,
  `job_district` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `job_citty` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `job_addcode` int(5) DEFAULT NULL,
  `job_tell` int(9) UNSIGNED ZEROFILL DEFAULT NULL,
  `job_fax` int(9) UNSIGNED ZEROFILL DEFAULT NULL,
  PRIMARY KEY (`job_ID`,`AP_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_ID`, `AP_ID`, `job_name`, `job_position`, `job_address`, `job_district`, `job_citty`, `job_addcode`, `job_tell`, `job_fax`) VALUES
(16, 17, 'Benley Media', 'Project co-ordinate', 'ตึกThe 9th tower ชั้น24 ถ.พระราม9 แขวง ห้วยขวาง ', 'ห้วยขวาง', 'กรุงเทพ', 10310, 074257655, 074257655),
(17, 18, 'แสนสิริ', 'งาน ออกแบบ UI/UX', '12', 'เขต ห้วยขวาง', 'กรุงเทพ', 10310, 074257155, 074257155),
(18, 19, 'บริษัท เอท จี เอท จำกัด', 'งาน IT Support', '262/32 ซอยเดชาณรงค์ ต.ตลาดใหญ่   ', 'เมือง', 'ภูเก็ต', 83000, 074257155, 074257155),
(19, 20, '', 'ว่างงาน', '', '', '', 90180, 074257155, 074257155),
(20, 21, '', 'ว่างงาน', '', '', '', 83150, 074257155, 074257155),
(21, 22, 'Software Park Phuket', 'Online Service Technician', 'Software Park Phuket', 'กะทู้', 'ภูเก็ต', 83120, 076458963, 076458963),
(22, 23, '', 'ว่างงาน', '', '', '', 83000, 074454512, 074454512),
(23, 24, 'Kata Printing', 'กราฟิกดีไซต์', '143/2 ถ.ปฏัก ต.กะรน   ', 'เมือง', 'ภูเก็ต', 83100, 074392057, 074392057),
(24, 25, '8g8', 'งานดูแลระบบ NetWork', 'ตรงข้ามโรงพยาบาลกรุงเทพภูเก็ต', 'เมือง', 'ภูเก็ต', 83000, 074257155, 074257155),
(25, 26, 'moshi moshi japan', 'กราฟิกดีไซต์', 'เอกชัย16 ', 'ยานนาวา', 'กรุงเทพ', 10120, 074257155, 074257155),
(26, 27, 'Express data', 'Online Service Technician', '18/72 หมู่ 5 ถ.วิชิตสงคราม ต.กะทู้ ', 'กะทู้', 'ภูเก็ต', 83120, 074368477, 074368477),
(27, 28, 'บริษัทอสังหาริมทรัพย์', 'กราฟิกดีไซต์', 'บ้าน', 'เมือง', 'สงขลา', 90000, 074123457, 074123457),
(28, 29, 'บริษัท​ อินเตอร์​เนชั่นแนล​ เมดิคัล ซอฟต์แวร์​ จำกัด', 'Online Service Technician', '88/9 อาคารซอฟต์แวร์พาร์คภูเก็ต ชั้น 2 หมู่ 2  ตำบลวิชิต อำเภอเมืองภูเก็ต จังหวัดภูเก็ต 83000', 'เมือง', 'ภูเก็ต', 83120, 074257155, 074257155),
(29, 30, 'บริษัท วังไข่มุก', 'กราฟิกดีไซต์', '486/119 ถ.พญาไทย แขวง ถนนเพชรบุรี เขต ราชเทวี กทม. 10400', 'ราชเทวี', 'กรุงเทพ', 10400, 074125499, 074125499),
(30, 31, '', 'อื่นๆ', '', '', '', 83120, 074258911, 074258911),
(31, 32, 'workmotion creative', 'web develooper', 'อาคารพร้อมพันธ์ุ 2 ชั้น 5 ห้อง 504 ลาดพร้าว ซอย 3 ถนน ลาดพร้าว แขวง คลองจั่น  เขต บางกะปิ กรุงเทพมหานคร 10240', 'บางกะปิ', 'กรุงเทพ', 10240, 074565555, 074565555),
(32, 33, 'บริษัท อีโปรเฟสชันนัล จำกัด', 'งาน Software', '51/599 ม.7 มบ.เมืองเอก ถ.พหลโยธิน ตำบลหลักหก อำเภอเมือง จ.ปทุมธานี 12000', 'เมือง', 'ปทุมธานี', 12000, 078854412, 078854412),
(33, 34, 'Reuter Software (Thailand) Ltd.', 'งาน Software', 'ซอย 3 ', 'พระประแดง', 'กรุงเทพ', 10130, 022455678, 022455678),
(34, 35, 'อีโปรพลัส จำกัด', 'Business Analyst', '51/599 ม.7 มบ.เมืองเอก ถ.พหลโยธิน ตำบลหลักหก อำเภอเมือง จ.ปทุมธานี 12000', 'เมือง', 'ปทุมธานี', 12000, 022125548, 022125548),
(35, 36, 'Open source tecnology', 'Impementer', 'ซอฟแวร์พาร์คภูเก็ต', 'กะทู้', 'ภูเก็ต', 83120, 076525636, 076525636),
(36, 37, '', 'ว่างงาน', '', '', '', 83120, 022455869, 022455869),
(37, 38, 'Enter Corporation ', 'Quality Assurance', '3 ตึกพร้อมพันธุ์ ลาดพร้าว3  จอมพล จตุจักร กทม. 10900', 'จอมพล', 'กรุงเทพ', 10900, 072454512, 072454512),
(38, 39, 'บริษัท อีโปรพลัส จำกัด', 'งาน Software Tester', '51/599 ม.7 มบ.เมืองเอก ถ.พหลโยธิน ตำบลหลักหก อำเภอเมือง จ.ปทุมธานี 12000', 'เมือง', 'ปทุมธานี', 12000, 073454512, 073454512),
(39, 40, 'อีโปรเฟสชันนัล จำกัด', 'งาน Software Tester', '51/599 ม.7 มบ.เมืองเอก ถ.พหลโยธิน ตำบลหลักหก อำเภอเมือง จ.ปทุมธานี 12000', 'เมือง', 'ปทุมธานี', 12000, 073454512, 073454512),
(40, 41, '', 'ว่างงาน', '', '', '', 83120, 076454512, 076454512),
(41, 42, '', 'อื่นๆ', '', '', '', 83120, 076454512, 076454512),
(42, 43, 'Godygo', 'งานโปรแกรมเมอร์', 'ตำบลนาหม่อม อำเภอนาหม่อม จังหวัดสงขลา', 'นาหม่อม', 'สงขลา', 90130, 074454512, 074454512),
(43, 44, 'Naz enterprise', 'งานโปรแกรมเมอร์', 'ตำบลนาหม่อม อำเภอนาหม่อม จังหวัดสงขลา', 'นาหม่อม', 'สงขลา', 90130, 074454512, 074454512),
(44, 45, 'Godygo', 'งานโปรแกรมเมอร์', 'ตำบลนาหม่อม อำเภอนาหม่อม จังหวัดสงขลา', 'นาหม่อม', 'สงขลา', 90130, 074454512, 074454512),
(45, 46, 'XPLink Co., Ltd.,', 'งาน Software', '203 ลาดพร้าว 26 แยก 4 ถนนลาดพร้าว แขวงจอมพล  กรุงเทพมหานคร ', 'เขตจตุจัก', 'กรุงเทพ', 10900, 072454512, 072454512),
(46, 47, 'บุญรอด รับเบอร์', 'บัญชี', '42/1 ม.3 ต.ป่าเว ', 'ไชยา', 'สุราษฎร์ธานี', 84110, 074257455, 074257455),
(47, 48, '', 'ว่างงาน', '', '', '', 83120, 074251374, 074251374),
(48, 49, 'วีเซิร์ฟ เดลิเวอร์รี่ จำกัด', 'Marketing Coordinator', '32/199 ถ.พูนผล ต.ตลาดเหนือ ', 'เมือง', 'ภูเก็ต', 83000, 074257155, 074257155),
(49, 50, 'บริษัท เลี่ยนอุดม จำกัด', 'web develooper', '88/9  B303 SoftwarePark Phuket ชั้น 3 หมู่ 2 เจ้าฟ้าตะวันตก ตำบลวิชิต อ.เมือง จ.ภูเก็ต 83000', 'เมือง', 'ภูเก็ต', 8300, 074257155, 074257155),
(50, 51, '7 SOCCER CLUB PHUKET', 'กราฟิกดีไซต์', '104/57 ซอยเฉลิมพล ถนนเจ้าฟ้า ตำบลวิชิต อำเภอเมือง จังหวัดภูเก็ต 83000', 'เมือง', 'ภูเก็ต', 83000, 074257455, 074257455),
(51, 52, 'บริษัท เมอร์เซเดสเบนซ์ภูเก็ต', 'Marketing communication', '20/5 หมู่ 2 ถ.เทพกษัตรี อ.เมืองภูเก็ต จ.ภูเก็ต 83000', 'เมือง', 'ภูเก็ต', 83000, 074257155, 074125755),
(52, 53, 'บริษัทเลี่ยนอุดมจำกัด', 'web develooper', 'บริษัท เลี่ยนอุดม จำกัด 88/9 B303 software Park Phuket ชั้น3 ถนนเจ้าฟ้าตะวันตก ต.วิชิต อ.เมืองภูเก็ต จ.ภูเก็ต 83000', 'เมือง', 'ภูเก็ต', 83000, 074257155, 074257155),
(53, 54, 'บริษัท​ weserve', 'งาน Business Developments', '32/199 ถ.พูนผล​ ต.ตลาดเหนือ​ ', 'เมือง', 'ภูเก็ต', 83000, 074258966, 074258966),
(54, 55, 'weserve', 'งาน Business Developments', '32/199 ถนน พูนผล ตำบล ตลาดเหนือ อำเภอเมืองภูเก็ต ภูเก็ต 83000', 'เมือง', 'ภูเก็ต', 83000, 074257155, 074257125),
(55, 56, '', 'ว่างงาน', '', '', '', 83120, 076454512, 076454512),
(56, 57, 'GMS Duty free', 'Marketing communication', '888 ม.1 ต.กะทู้ อ.กะทู้ จ.ภูเก็ต', 'กะทู้', 'ภูเก็ต', 83120, 076454512, 076454512),
(57, 58, 'GSD SOULUTION', 'กราฟิกดีไซต์', '74/6-9', 'กะทู้', 'ภูเก็ต', 83120, 076454512, 076454512),
(58, 59, 'Digitalone wedding studio', 'กราฟิกดีไซต์', '26/69  ม.9 ถ.เจ้าฟ้า ต.ฉลอง อ.เมือง จ.ภูเก็ต', 'เมือง', 'ภูเก็ต', 83120, 076454512, 076454512),
(59, 60, 'open source technology', 'web develooper', 'เลขที่ 88/9 หมู่ที่ 2 ตำบลวิชิต ถนน.เจ้าฟ้าตะวันตก', 'เมือง', 'ภูเก็ต', 83000, 076454512, 076454512),
(60, 61, 'ธัญญปุระ รีสอร์ทสุขภาพและกีฬา', 'Digital marketing & PR officer', '120/1 หมู่ที่7 ถ.เทพกระษัตรี ต.เทพกระษัตรี ', 'ถลาง', 'ภูเก็ต', 83110, 076454512, 076454512),
(61, 62, 'บริษัท อินเตอร์เนชั่นแนล เมดิคัล ซอฟต์แวร์ จำกัด', 'web develooper', '88/9 อาคารซอฟต์แวร์พาร์คภูเก็ต ชั้น 2', 'กะทู้', 'ภูเก็ต', 83120, 074257155, 074257155);

-- --------------------------------------------------------

--
-- Table structure for table `major`
--

DROP TABLE IF EXISTS `major`;
CREATE TABLE IF NOT EXISTS `major` (
  `major_ID` int(20) NOT NULL AUTO_INCREMENT,
  `major_name` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`major_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `professional`
--

DROP TABLE IF EXISTS `professional`;
CREATE TABLE IF NOT EXISTS `professional` (
  `Prof_ID` int(20) NOT NULL AUTO_INCREMENT,
  `AP_ID` int(20) NOT NULL,
  `Prof_quality` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `Prof_personal` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `Prof_plan` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `Prof_language` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `Prof_computer` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `Prof_experience` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `Prof_creation` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `Prof_other` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`Prof_ID`,`AP_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `professional`
--

INSERT INTO `professional` (`Prof_ID`, `AP_ID`, `Prof_quality`, `Prof_personal`, `Prof_plan`, `Prof_language`, `Prof_computer`, `Prof_experience`, `Prof_creation`, `Prof_other`) VALUES
(1, 45, 'sfs', '', '', '', '', '', '', ''),
(2, 62, '', '', '', '', 'PHP', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `psu_passport`
--

DROP TABLE IF EXISTS `psu_passport`;
CREATE TABLE IF NOT EXISTS `psu_passport` (
  `Passport_ID` varchar(20) COLLATE utf8_bin NOT NULL,
  `password` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`Passport_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `reg_dept`
--

DROP TABLE IF EXISTS `reg_dept`;
CREATE TABLE IF NOT EXISTS `reg_dept` (
  `Dept_ID` varchar(3) COLLATE utf8_bin NOT NULL,
  `Dept_name_Thai` varchar(70) COLLATE utf8_bin DEFAULT NULL,
  `Dept_name_Eng` varchar(70) COLLATE utf8_bin DEFAULT NULL,
  `Fac_ID` varchar(2) COLLATE utf8_bin DEFAULT NULL,
  `Campus_ID` varchar(2) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`Dept_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `reg_dept`
--

INSERT INTO `reg_dept` (`Dept_ID`, `Dept_name_Thai`, `Dept_name_Eng`, `Fac_ID`, `Campus_ID`) VALUES
('1', 'เทคโนโลยีและการจัดการสิ่งแวดล้อม', 'Environmental Technology and Management', '1', NULL),
('2', 'วิศวกรรมซอฟต์แวร์', 'Software Engineering', '2', NULL),
('3', 'เทคโนโลยีสารสนเทศ', NULL, '2', NULL),
('4', 'ธุรกิจอิเล็กทรอนิกส์', NULL, '2', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reg_faculty`
--

DROP TABLE IF EXISTS `reg_faculty`;
CREATE TABLE IF NOT EXISTS `reg_faculty` (
  `Fac_ID` varchar(2) COLLATE utf8_bin NOT NULL,
  `Fac_name_Thai` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `Fac_name_Eng` varchar(70) COLLATE utf8_bin DEFAULT NULL,
  `Campus_ID` varchar(2) COLLATE utf8_bin DEFAULT NULL,
  `Create_Date` date DEFAULT NULL,
  `Create_by` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `Update_Date` date DEFAULT NULL,
  `Update_by` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`Fac_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `reg_faculty`
--

INSERT INTO `reg_faculty` (`Fac_ID`, `Fac_name_Thai`, `Fac_name_Eng`, `Campus_ID`, `Create_Date`, `Create_by`, `Update_Date`, `Update_by`) VALUES
('1', 'คณะเทคโนโลยีและสิ่งแวดล้อม', 'Faculty of Technology and Environment', NULL, NULL, NULL, NULL, NULL),
('2', 'วิทยาลัยการคอมพิวเตอร์', 'College of Computing', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reg_major`
--

DROP TABLE IF EXISTS `reg_major`;
CREATE TABLE IF NOT EXISTS `reg_major` (
  `Major_ID` varchar(4) COLLATE utf8_bin NOT NULL,
  `Major_name_Thai` varchar(60) COLLATE utf8_bin DEFAULT NULL,
  `Major_short_Thai` varchar(60) COLLATE utf8_bin DEFAULT NULL,
  `Major_name_Eng` varchar(60) COLLATE utf8_bin DEFAULT NULL,
  `Major_short_Eng` varchar(60) COLLATE utf8_bin DEFAULT NULL,
  `Major_category_ID` varchar(4) COLLATE utf8_bin DEFAULT NULL,
  `Dept_ID` varchar(3) COLLATE utf8_bin DEFAULT NULL,
  `Type` varchar(1) COLLATE utf8_bin DEFAULT NULL,
  `Major_master` varchar(4) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`Major_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `reg_major`
--

INSERT INTO `reg_major` (`Major_ID`, `Major_name_Thai`, `Major_short_Thai`, `Major_name_Eng`, `Major_short_Eng`, `Major_category_ID`, `Dept_ID`, `Type`, `Major_master`) VALUES
('1', 'เทคโนโลยีและการจัดการสิ่งแวดล้อม', NULL, 'Environmental Technology and Management', NULL, NULL, '1', NULL, NULL),
('2', 'วิศวกรรมซอฟต์แวร์', NULL, 'Software Engineering', NULL, NULL, '2', NULL, NULL),
('3', 'เทคโนโลยีสารสนเทศ', NULL, NULL, NULL, NULL, '3', NULL, NULL),
('4', 'ธุรกิจอิเล็กทรอนิกส์', NULL, NULL, NULL, NULL, '4', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reg_student`
--

DROP TABLE IF EXISTS `reg_student`;
CREATE TABLE IF NOT EXISTS `reg_student` (
  `Student_ID` varchar(10) COLLATE utf8_bin NOT NULL,
  `Ent_method` varchar(2) COLLATE utf8_bin DEFAULT NULL,
  `Grup_ID` varchar(2) COLLATE utf8_bin NOT NULL,
  `Admit_year` varchar(4) COLLATE utf8_bin DEFAULT NULL,
  `Fee_year` varchar(4) COLLATE utf8_bin DEFAULT NULL,
  `Sex_coed` varchar(1) COLLATE utf8_bin NOT NULL,
  `Title_ID` varchar(2) COLLATE utf8_bin NOT NULL,
  `STD_Fname_Thai` varchar(25) COLLATE utf8_bin NOT NULL,
  `STD_Lname_Thai` varchar(25) COLLATE utf8_bin NOT NULL,
  `STD_Fname_Eng` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `STD_Lname_Eng` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `Study_status` varchar(2) COLLATE utf8_bin NOT NULL,
  `Year_status` varchar(1) COLLATE utf8_bin NOT NULL,
  `Nationality` varchar(1) COLLATE utf8_bin DEFAULT NULL,
  `Admit_Date` date DEFAULT NULL,
  `Citizen_ID` varchar(13) COLLATE utf8_bin NOT NULL,
  `Dept_ID` varchar(3) COLLATE utf8_bin NOT NULL,
  `Fac_ID` varchar(2) COLLATE utf8_bin NOT NULL,
  `Campus_ID` varchar(2) COLLATE utf8_bin NOT NULL,
  `Admit_term` varchar(1) COLLATE utf8_bin DEFAULT NULL,
  `Course_plan_ID` char(12) COLLATE utf8_bin DEFAULT NULL,
  `Yearly_regist` varchar(4) COLLATE utf8_bin DEFAULT NULL,
  `Eng_score` int(5) DEFAULT NULL,
  `Major_ID` varchar(4) COLLATE utf8_bin NOT NULL,
  `Study_level_ID` varchar(2) COLLATE utf8_bin DEFAULT NULL,
  `Study_type_ID` varchar(2) COLLATE utf8_bin DEFAULT NULL,
  `Create_Date` date DEFAULT NULL,
  `Create_by` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `Modified_Date` date DEFAULT NULL,
  `Modified_by` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `Stud_birth_Date` date NOT NULL,
  `Stud_birth_province_ID` varchar(2) COLLATE utf8_bin DEFAULT NULL,
  `Stud_birth_other_province` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `Toeic_score` int(3) DEFAULT NULL,
  `HSK_score` int(3) DEFAULT NULL,
  `Note` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `Sub_major_ID` varchar(4) COLLATE utf8_bin DEFAULT NULL,
  `Minor_ID` varchar(4) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`Student_ID`),
  KEY `reg_student_ibfk_1` (`Dept_ID`),
  KEY `reg_student_ibfk_2` (`Fac_ID`),
  KEY `reg_student_ibfk_3` (`Major_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `reg_student`
--

INSERT INTO `reg_student` (`Student_ID`, `Ent_method`, `Grup_ID`, `Admit_year`, `Fee_year`, `Sex_coed`, `Title_ID`, `STD_Fname_Thai`, `STD_Lname_Thai`, `STD_Fname_Eng`, `STD_Lname_Eng`, `Study_status`, `Year_status`, `Nationality`, `Admit_Date`, `Citizen_ID`, `Dept_ID`, `Fac_ID`, `Campus_ID`, `Admit_term`, `Course_plan_ID`, `Yearly_regist`, `Eng_score`, `Major_ID`, `Study_level_ID`, `Study_type_ID`, `Create_Date`, `Create_by`, `Modified_Date`, `Modified_by`, `Stud_birth_Date`, `Stud_birth_province_ID`, `Stud_birth_other_province`, `Toeic_score`, `HSK_score`, `Note`, `Sub_major_ID`, `Minor_ID`) VALUES
('5630211051', NULL, '11', NULL, NULL, 'F', '2', 'ฐิติวัลค์ ', 'ไพโรจน์', NULL, NULL, '4', '5', NULL, NULL, '1905630211051', '3', '2', '1', NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5730211006', NULL, '12', NULL, NULL, 'M', '1', 'ยศวัฒน์ ', 'สุจิตราภรณ์', NULL, NULL, '4', '5', NULL, NULL, '1905730211006', '3', '2', '1', NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5730211009', NULL, '12', NULL, NULL, 'M', '1', 'ศุภโชค ', 'หนูปาน', NULL, NULL, '4', '5', NULL, NULL, '1905730211009', '3', '2', '1', NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-23', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5730211010', NULL, '12', NULL, NULL, 'M', '1', 'นวพงษ์ ', 'อติวัฒนานนท์', NULL, NULL, '4', '5', NULL, NULL, '1905730211010', '3', '2', '1', NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5730211018', NULL, '12', NULL, NULL, 'M', '1', 'ธนวัฒน์ ', 'วิชัย', NULL, NULL, '4', '5', NULL, NULL, '1905730211018', '3', '2', '1', NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5730211019', NULL, '12', NULL, NULL, 'M', '1', 'ปิยะพันธ์ ', 'ชมสุวรรณ', NULL, NULL, '4', '5', NULL, NULL, '1905730211019', '3', '2', '1', NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-27', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5730211030', NULL, '12', NULL, NULL, 'F', '2', 'ณัฐพร  ', 'ขจรบุญ', NULL, NULL, '4', '5', NULL, NULL, '1905730211030', '3', '2', '1', NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5730211033', NULL, '12', NULL, NULL, 'M', '1', 'วทัญญู ', 'น้อยมา', NULL, NULL, '4', '5', NULL, NULL, '1905730211033', '3', '2', '1', NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-27', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5730211044', NULL, '12', NULL, NULL, 'M', '1', 'วชิรวิทย์ ', 'แขวงเมฆ', NULL, NULL, '4', '5', NULL, NULL, '1905730211044', '3', '2', '1', NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-14', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5730211054', NULL, '12', NULL, NULL, 'F', '2', 'อันธิกา ', 'สังข์ประสิทธิ์', NULL, NULL, '4', '5', NULL, NULL, '1905730211054', '3', '2', '1', NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-28', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5730211056', NULL, '12', NULL, NULL, 'M', '1', 'ณัฐวุฒิ ', 'ลิขิตบรรณศักดิ์', NULL, NULL, '4', '5', NULL, NULL, '1905730211056', '3', '2', '1', NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5730211071', NULL, '12', NULL, NULL, 'F', '2', 'กมลพรรณ ', 'จันทร์นาค', NULL, NULL, '4', '5', NULL, NULL, '1905730211071', '3', '2', '1', NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5730211075', NULL, '12', NULL, NULL, 'F', '2', 'อัญชนา​ ', 'ทองเพชร', NULL, NULL, '4', '5', NULL, NULL, '1905730211075', '3', '2', '1', NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-03', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5730211077', NULL, '12', NULL, NULL, 'F', '2', 'รัตติกาล ', 'ริยาพันธ์', NULL, NULL, '4', '5', NULL, NULL, '1905730211077', '3', '2', '1', NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5730211080', NULL, '12', NULL, NULL, 'F', '2', 'ทรรศนีย์ ', 'หัตถิยา', NULL, NULL, '4', '5', NULL, NULL, '1905730211080', '3', '2', '1', NULL, NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5730212002', NULL, '10', NULL, NULL, 'M', '1', 'ณัฐภณ ', 'อิทธิอัศกร', NULL, NULL, '4', '5', NULL, NULL, '1905730212002', '4', '2', '1', NULL, NULL, NULL, NULL, '4', NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-13', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5730212004', NULL, '10', NULL, NULL, 'M', '1', 'มารุตพงศ์ ', 'แซ่โค้ว', NULL, NULL, '4', '5', NULL, NULL, '1905730212004', '4', '2', '1', NULL, NULL, NULL, NULL, '4', NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5730212006', NULL, '10', NULL, NULL, 'F', '2', 'นพเกศ ', 'ฉิมสกุล', NULL, NULL, '4', '5', NULL, NULL, '1905730212006', '4', '2', '1', NULL, NULL, NULL, NULL, '4', NULL, NULL, NULL, NULL, NULL, NULL, '2017-07-06', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5730212010', NULL, '10', NULL, NULL, 'F', '2', 'ณัฐณิชา ', 'มะโนวงศ์', NULL, NULL, '4', '5', NULL, NULL, '1905730212010', '4', '2', '1', NULL, NULL, NULL, NULL, '4', NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-08', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5730212020', NULL, '10', NULL, NULL, 'F', '2', 'ลักขณา ', 'ชัยพริ้ง', NULL, NULL, '4', '5', NULL, NULL, '1905730212020', '4', '2', '1', NULL, NULL, NULL, NULL, '4', NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-13', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5730212023', NULL, '10', NULL, NULL, 'M', '1', 'ภูเนศวร์ ', 'นพรัตน์', NULL, NULL, '4', '5', NULL, NULL, '1905730212023', '4', '2', '1', NULL, NULL, NULL, NULL, '4', NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-13', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5730212028', NULL, '10', NULL, NULL, 'M', '1', 'กฤตพร​ ', 'จันทร์ช่วย', NULL, NULL, '4', '5', NULL, NULL, '1905730212028', '4', '2', '1', NULL, NULL, NULL, NULL, '4', NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-15', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5730212030', NULL, '10', NULL, NULL, 'M', '1', 'อภิชา ', 'แซ่อึ้ง', NULL, NULL, '4', '5', NULL, NULL, '1905730212030', '4', '2', '1', NULL, NULL, NULL, NULL, '4', NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-02', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5730212036', NULL, '10', NULL, NULL, 'M', '1', 'วรวิทย์ ', 'สนธิกุล', NULL, NULL, '4', '5', NULL, NULL, '1905730212036', '4', '2', '1', NULL, NULL, NULL, NULL, '4', NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-02', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5730212051', NULL, '10', NULL, NULL, 'F', '2', 'ณัฐวรรณ จุลกัลป์', 'จุลกัลป์', NULL, NULL, '4', '5', NULL, NULL, '1905730212051', '4', '2', '1', NULL, NULL, NULL, NULL, '4', NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5730212052', NULL, '10', NULL, NULL, 'F', '2', 'ธิดารัตน์  ', 'ลาดบูรณ์', NULL, NULL, '4', '5', NULL, NULL, '1905730212052', '4', '2', '1', NULL, NULL, NULL, NULL, '4', NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5730212055', NULL, '10', NULL, NULL, 'M', '1', 'ณัฐพล ', 'พันธุ์ทิพย์', NULL, NULL, '4', '5', NULL, NULL, '1905730212055', '4', '2', '1', NULL, NULL, NULL, NULL, '4', NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-14', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5730212056', NULL, '10', NULL, NULL, 'M', '1', 'ธีรพงษ์ ', 'มีษา', NULL, NULL, '4', '5', NULL, NULL, '1905730212056', '4', '2', '1', NULL, NULL, NULL, NULL, '4', NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5730212059', NULL, '10', NULL, NULL, 'M', '1', 'นายพงศกร ', 'ว่องไวประเสริฐ', NULL, NULL, '4', '5', NULL, NULL, '1905730212059', '4', '2', '1', NULL, NULL, NULL, NULL, '4', NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-28', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5730212061', NULL, '10', NULL, NULL, 'F', '2', 'อริสา ', 'คงศิริ', NULL, NULL, '4', '5', NULL, NULL, '1905730212061', '4', '2', '1', NULL, NULL, NULL, NULL, '4', NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-13', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5730213001', NULL, '10', NULL, NULL, 'F', '2', 'อารยา', 'ชูทอง', NULL, NULL, '4', '5', NULL, NULL, '1905730213001', '2', '2', '1', NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-07', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5730213003', NULL, '10', NULL, NULL, 'F', '2', 'นลพรรณ ', 'ปานสิทธิ์', NULL, NULL, '4', '5', NULL, NULL, '1905730213003', '2', '2', '1', NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-29', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5730213004', NULL, '10', NULL, NULL, 'M', '1', 'ประกาศิต ', 'อินทรสมบัติ', NULL, NULL, '4', '5', NULL, NULL, '1905730213004', '2', '2', '1', NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-12', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5730213026', NULL, '10', NULL, NULL, 'M', '1', 'ธนวัฒน์ ', 'แซ่อ๋าง', NULL, NULL, '4', '5', NULL, NULL, '1905730213026', '2', '2', '1', NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-03', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5730213031', NULL, '10', NULL, NULL, 'F', '2', 'อุไรวรรณ ', 'เผือกเพ็ชร์', NULL, NULL, '4', '5', NULL, NULL, '1905730213031', '2', '2', '1', NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-12', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5730213038', NULL, '10', NULL, NULL, 'F', '2', 'พุทธินันท์', ' ดวงสำราญ', NULL, NULL, '4', '5', NULL, NULL, '1905730213038', '2', '2', '1', NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-12', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5730213043', NULL, '10', NULL, NULL, 'M', '1', 'ภานุวัฒน์ ', 'บูรณประพันธ์', NULL, NULL, '4', '5', NULL, NULL, '1905730213043', '2', '2', '1', NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-13', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5730213044', NULL, '10', NULL, NULL, 'M', '1', 'ปัญญาปราชญ์ ', 'ตุลารักษ์', NULL, NULL, '4', '5', NULL, NULL, '1905730213044', '2', '2', '1', NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-14', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5730213045', NULL, '10', NULL, NULL, 'F', '2', 'วชิรา', 'มาศโอสถ', NULL, NULL, '4', '5', NULL, NULL, '1905730213045', '2', '2', '1', NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, '2017-10-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5730213047', NULL, '10', NULL, NULL, 'F', '2', 'ณัฎฐณิชา ', 'โชหนู', NULL, NULL, '4', '5', NULL, NULL, '1905730213047', '2', '2', '1', NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5730213055', NULL, '10', NULL, NULL, 'M', '1', 'วิทวัส ', 'อนันทชาติ', NULL, NULL, '4', '5', NULL, NULL, '1905730213055', '2', '2', '1', NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-03', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5730213057', NULL, '10', NULL, NULL, 'M', '1', 'จตุวิทย์ ', 'พิทักษ์ด่านสกุล', NULL, NULL, '4', '5', NULL, NULL, '1905730213057', '2', '2', '1', NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5730213058', NULL, '10', NULL, NULL, 'M', '1', 'จิรวัฒน์ ', 'เพ็ชรุพันธ์', NULL, NULL, '4', '5', NULL, NULL, '1905730213058', '2', '2', '1', NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5730213059', NULL, '10', NULL, NULL, 'F', '2', 'พิรัชนา ', 'มากทรัพย์', NULL, NULL, '4', '5', NULL, NULL, '1905730213059', '2', '2', '1', NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-13', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5730213064', NULL, '10', NULL, NULL, 'M', '1', 'ศราวุฒิ ', 'นววิศิษฏ์กุล', NULL, NULL, '4', '5', NULL, NULL, '1905730213064', '2', '2', '1', NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5730213086', NULL, '10', NULL, NULL, 'M', '1', 'ไกรศร ', 'สิงสม', NULL, NULL, '4', '5', NULL, NULL, '1905730213086', '2', '2', '1', NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-08', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5830213033', NULL, '11', NULL, NULL, 'M', '1', 'ณัฐวัตร', 'จันทร์อุไร', 'fgdg', 'dfgdgd', '1', '4', NULL, NULL, '1900100101321', '1', '1', '1', NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('5930213053', NULL, '12', NULL, NULL, 'F', '2', 'ณัฐกานต์', 'ไชยาเสนะ', 'Nattakan', 'Chaiyasena', '4', '3', NULL, NULL, '1909800993371', '2', '2', '1', NULL, NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `Staff_ID` int(20) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Staff_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `std_ID` varchar(20) COLLATE utf8_bin NOT NULL,
  `card_ID` varchar(13) COLLATE utf8_bin NOT NULL,
  `std_fname` varchar(50) COLLATE utf8_bin NOT NULL,
  `std_lname` varchar(50) COLLATE utf8_bin NOT NULL,
  `major_ID` int(20) DEFAULT NULL,
  `Dept_ID` int(20) DEFAULT NULL,
  `Fact_ID` int(20) DEFAULT NULL,
  PRIMARY KEY (`std_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `Passport_ID` int(20) NOT NULL,
  `UType_ID` int(20) NOT NULL,
  `Staff_ID` int(20) NOT NULL,
  PRIMARY KEY (`Passport_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

DROP TABLE IF EXISTS `user_type`;
CREATE TABLE IF NOT EXISTS `user_type` (
  `UType_ID` int(20) NOT NULL AUTO_INCREMENT,
  `UType_name` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`UType_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reg_student`
--
ALTER TABLE `reg_student`
  ADD CONSTRAINT `reg_student_ibfk_1` FOREIGN KEY (`Dept_ID`) REFERENCES `reg_dept` (`Dept_ID`),
  ADD CONSTRAINT `reg_student_ibfk_2` FOREIGN KEY (`Fac_ID`) REFERENCES `reg_faculty` (`Fac_ID`),
  ADD CONSTRAINT `reg_student_ibfk_3` FOREIGN KEY (`Major_ID`) REFERENCES `reg_major` (`Major_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
