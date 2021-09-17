-- MariaDB dump 10.18  Distrib 10.4.17-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: shop_hoa
-- ------------------------------------------------------
-- Server version	10.4.17-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `shop_hoa`
--


--
-- Table structure for table `admin_info`
--

DROP TABLE IF EXISTS `admin_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_info` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(300) NOT NULL,
  `admin_password` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_info`
--

LOCK TABLES `admin_info` WRITE;
/*!40000 ALTER TABLE `admin_info` DISABLE KEYS */;
INSERT INTO `admin_info` VALUES (1,'admin','admin@gmail.com','123456');
/*!40000 ALTER TABLE `admin_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL AUTO_INCREMENT,
  `brand_title` text NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brands`
--

LOCK TABLES `brands` WRITE;
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
INSERT INTO `brands` VALUES (1,'Hào Hoa'),(2,'Quân Hoa'),(3,'Quang Hoa'),(4,'Hoa Hoa');
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL AUTO_INCREMENT,
  `cat_title` text NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Hoa Sinh Nhật'),(2,'Lan Hồ Điệp'),(3,'Hoa Chúc Mừng'),(4,'Hoa Hồng');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `code`
--

DROP TABLE IF EXISTS `code`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `code` (
  `code_id` int(100) NOT NULL AUTO_INCREMENT,
  `code` varchar(20) NOT NULL,
  PRIMARY KEY (`code_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `code`
--

LOCK TABLES `code` WRITE;
/*!40000 ALTER TABLE `code` DISABLE KEYS */;
/*!40000 ALTER TABLE `code` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `email_info`
--

DROP TABLE IF EXISTS `email_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `email_info` (
  `email_id` int(100) NOT NULL AUTO_INCREMENT,
  `email` text NOT NULL,
  PRIMARY KEY (`email_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `email_info`
--

LOCK TABLES `email_info` WRITE;
/*!40000 ALTER TABLE `email_info` DISABLE KEYS */;
/*!40000 ALTER TABLE `email_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `total` int(20) NOT NULL,
  `ship` int(10) NOT NULL,
  `date` datetime NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=148 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (113,'Hao','Trần','hao@gmail.com','Cầu giấy-Hà Nội','m','0966899059',7239999,30000,'2021-06-13 10:03:59','m'),(114,'Hao','Trần','hao@gmail.com','Cầu giấy-Hà Nội','m','0966899059',7239999,30000,'2021-06-13 10:04:51','m'),(144,'Nam','Nguyễn','nam3@gmail.com','235 Hoàng Quốc Việt, Cổ Nhuế, Từ Liêm, Hà Nội','q','0966899000',3300000,30000,'2021-06-13 14:11:01','q'),(145,'Quân','Lưu','ekkott7@gmail.com','Vinh','v','0955666777',300000,30000,'2021-06-13 14:15:13','v'),(146,'Quang','Lê','quang@gmail.com','Vinh','j','0966899000',6000000,30000,'2021-06-13 14:25:44','j'),(147,'Nam','Nguyễn','nam3@gmail.com','235 Hoàng Quốc Việt, Cổ Nhuế, Từ Liêm, Hà Nội','v','0966899000',3916000,30000,'2021-06-15 15:02:18','v');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders_detail`
--

DROP TABLE IF EXISTS `orders_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders_detail` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `orders_id` int(100) NOT NULL,
  `product` int(11) NOT NULL,
  `price` int(20) NOT NULL,
  `qty` int(11) NOT NULL,
  `thanhtien` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders_detail`
--

LOCK TABLES `orders_detail` WRITE;
/*!40000 ALTER TABLE `orders_detail` DISABLE KEYS */;
INSERT INTO `orders_detail` VALUES (4,114,5,399999,1,7239999),(5,115,5,399999,1,7239999),(13,127,5,399999,1,399999),(14,128,5,399999,1,399999),(29,144,2,300000,11,3300000),(30,145,2,300000,1,300000),(31,146,2,300000,1,6000000),(32,147,31,356000,11,3916000);
/*!40000 ALTER TABLE `orders_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders_items`
--

DROP TABLE IF EXISTS `orders_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders_items` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `product` int(11) NOT NULL,
  `price` int(20) NOT NULL,
  `qty` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders_items`
--

LOCK TABLES `orders_items` WRITE;
/*!40000 ALTER TABLE `orders_items` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `product_id` int(100) NOT NULL AUTO_INCREMENT,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (0,4,1,'NẮNG HỒNG',389000,'Chọn tông hồng làm màu sắc chủ đạo, “Nắng hồng” tạo nên một tổng thể nhẹ nhàng, khơi gợi cảm giác thư thái, vui tươi khi ngắm nhìn. Sản phẩm gửi gắm thông điệp: Tình yêu vốn dĩ không phải là điều ta nhận đuợc mà là những gì ta cho đi. Hãy chia sẻ yêu thương khi ta còn có thể vì chính tình yêu sẽ làm cuộc sống thêm tươi vui, hạnh phúc!','NANG-HONG.png','Hoa hồng'),(6,1,3,'Closer',300000,'Với sự kết hợp hoàn toàn mới của loại hồng đỏ ớt, chắc chắn sẽ mang đến những điều thú vị khi bạn chọn lựa bó hoa này để dành tặng cho những người thân yêu. Ý nghĩa của hồng đỏ ớt cũng khá tương đồng với loại hồng đỏ nhung hay đỏ sa, luôn thể hiện một ý nghĩa cho một tình yêu bất diệt.','CLOSER.png','Hoa sinh nhật'),(8,1,3,'PINK LADY',300000,'Bó hoa tone hồng nhẹ nhàng rất hợp với những cô nàng bánh bèo đáng yêu nhưng không kém phần tinh nghịch. Bó hoa như 1 quý cô yêu màu hồng đến cuồng nhiệt. Khi tình yêu xuất hiện, cuộc sống của bạn sẽ chuyển từ màu xám sang màu hồng kỳ diệu. Màu hồng cũng là màu yêu thích của hơn 90% phụ nữ. Đây chắc chắn sẽ là sự lựa chọn tuyệt vời cho bạn khi cần gửi tặng hoa đến người thân yêu.','PINK-LADY.png','Hoa sinh nhật'),(9,1,3,'I\'M YOURS',300000,'“I’m yours – Anh là của em” là một bó hoa tỏ tình mộc mạc, dễ thương. Còn gì tuyệt vời hơn khi người ấy lắng nghe thông điệp từ trái tim bạn, trong tình cảm này: chúng ta là của nhau. Hãy bên nhau mãi nhé!','IM-YOURS.png','Hoa sinh nhật'),(10,1,2,'LANDING-ON-YOU',250000,'Màu tím của sự lãng mạn, chung thuỷ từ bó hồng ohara này chính là món quà đầy yêu thương dành tặng cho những người phụ nữ của bạn. Hoa luôn là món quà với đầy thông điệp ý nghĩa mà bạn muốn truyền tải đến người nhận. Vì vậy, những lúc cần thổ lộ tâm tư gì mà bạn còn ngại ngùng thì hãy để hoa giúp bạn thay lời muốn nói nhé.','LANDING-ON-YOU.png','Hoa sinh nhật'),(11,1,3,'ONLY-ONE',280000,'Tình yêu là chuyện của hai người, thật hạnh phúc biết bao khi cảm nhận được trọn vẹn tình cảm từ đối phương trao cho mình. “Only one” là bó hoa đặc biệt, được thiết kế dành tặng riêng cho một và chỉ một người thương duy nhất, thể hiện tình cảm thủy chung bền lâu của người tặng.','ONLY-ONE.jpg','Hoa sinh nhật'),(12,1,2,'OHARA',320000,'Không rực rỡ như hồng đỏ, không vương giả như hồng vàng và cũng không tinh khiết như hồng trắng. Nhưng ở hồng o\'hara, người ta luôn thấy toát lên một sự nhẹ nhàng, thanh cao và nổi bật giữa đám đông một cách kì lạ. Hãy tặng bó hoa đầy ngọt ngào này cho người phụ nữ mà bạn yêu quý nhé, đây chắc chắn sẽ là một món quà đầy ý nghĩa và không bao giờ quên đối với họ.','OHARA.png','Hoa sinh nhật'),(13,1,4,'NONG-NAN',450000,'Tình yêu đến khẽ như một cơn gió sớm mai với những tia nắng ngọt ngào và ấm áp. Ai đó đã từng nói rằng thật tội nghiệp cho những kẻ chưa từng được yêu. Khi thì nồng nàn và khi thì sâu lắng tạo nên những dư vị tuyệt vời của tình yêu.','NONG-NAN.png','Hoa sinh nhật'),(14,1,3,'MAT-BIEc',380000,'Bạn có thừa nhận rằng, màu tím là màu được khá nhiều bạn gái yêu thích. Màu tím gợi lên những ấn tượng về sự nhẹ nhàng, chung thủy. Là màu của lãng mạn và đắm say. Là màu mỗi khi ngắm nhìn luôn cho ta một cảm xúc khó tả thành lời.','MAT-BIEC.png','Hoa sinh nhật'),(15,1,2,'YEU-THUONG-HANH-PHUC',310000,'\"Yêu Thương Hạnh Phúc\"kể một câu chuyện tình yêu ngọt ngào và lãng mạn. Bó hoa là sự kết hợp của hoa hồng tím và hoa hồng da đan xen và hòa quyện cùng với cúc calimero tựa như giai điệu của những đôi đang hạnh phúc khi bên nhau. Lúc sôi động khi thì trầm lắng nhẹ nhàng.','YEU-THUONG-HANH-PHUC.png','Hoa sinh nhật'),(16,2,4,'SUONG-MAI',300000,'Kết hợp những loại hoa mang tông màu trắng, hồng, bó hoa “Thanh khiết” đem đến cảm giác tươi mới, lạc quan mỗi khi ngắm nhìn chúng. Thử tưởng tượng mình được tặng bó hoa như thế này vào một sớm mai, liệu ai có thể tự kiềm chế mình không vỡ òa trong xúc động cơ chứ!','SUONG-MAI.png','Lan hồ điệp'),(17,2,2,'DANH-CHO EM',380000,'Bó hoa với tông màu vàng chủ đạo đã nêu bật ý nghĩa tượng trưng cho niềm vui và sự khởi đầu hạnh phúc. Bó hoa thích hợp dành tặng cho bạn bè, thầy cô, những người mà bạn trân quý và có ý nghĩa trong cuộc đời.','DANH-CHO-EM.png','Lan hồ điệp'),(18,2,2,'LA-VIE-EN-ROSE',280000,'Hộp hoa được thiết kế nhã nhặn với những màu sắc tươi thắm của những đoá hoa hồng. Thông điệp của lòng yêu mến, biết ơn và lời cảm ơn chân thành nhất. Hộp hoa thích hợp tặng dịp lễ ngày nhà giáo Việt Nam 20/11, dành tặng các quý thầy cô.','LA-VIE-EN-ROSE.png','Lan hồ điệp'),(19,2,1,'SỰ-SỐNG',260000,'Hộp hoa được thiết kế với tông màu đỏ của hoa hồng đỏ và màu kem của hoa hồng da. Tất cả hòa quyện vào như sức sống mãnh liệt luôn vươn lên để vươn tới cuộc sống tốt đẹp. Thích hợp tặng sinh nhật, kỉ niệm, thăng chức...','SU-SONG.jpg','Lan hồ điệp'),(20,2,4,'MÂY-TÍM',450000,'Hộp hoa mang vẻ đẹp rực rỡ sắc màu tím trang trọng, quý phái. Thể hiện tình cảm chân thành của học trò dành đến thầy cô với lòng biết ơn, tri ân sâu sắc. Thích hợp dành tặng dịp lễ ngày nhà giáo Việt Nam 20/11, dành tặng đến quý thầy cô.','MAY-TIM.png','Lan hồ điệp'),(21,2,3,'NGÀY MAY MẮN',320000,'Hoa hướng dương rất nổi tiếng với tên gọi “hoa mặt trời” vì khi nở rộ hoa có hình tròn, cánh hoa vàng tươi như những tia nắng ấm áp. Theo văn hoá phương Đông hướng dương có ý nghĩa là niềm tin, hy vọng và lý tưởng vươn tới ánh sáng, điều tốt đẹp. Vì thế mà người ta thường tặng hoa hướng dương cho các thầy cô giáo, tặng cho người đang nản chí để khích lệ tinh thần, tặng cho người đau ốm để thêm hy vọng vào cuộc sống tươi đẹp.','NGAY-MAY-MAN.jpg','Lan hồ điệp'),(22,2,1,'TIẾP BƯỚC',310000,'Nếu yêu thích sự rực rỡ và mạnh mẽ thì mẫu hoa \"Tiếp bước\" chính là sự lựa chọn đúng đắn khi bạn cần gửi tặng món quà nào đó đến khách hàng, đối tác, và những người quan trọng bên cạnh bạn. Hộp hoa là sự kết hợp đầy tinh tế giữa các loại hoa hồng và hoa lan, mang đến trải nghiệm thú vị cho người mua khi dừng chân tại sự lựa chọn này.','TIEP-BUOC.png','Lan hồ điệp'),(23,2,4,'ĐIỀU MONG ƯỚC',250000,'Điều mong ước lớn nhất trong anh là sự hạnh phúc của em. Anh có thể làm mọi điều chỉ mong em hạnh phúc. Dù có chuyện gì xảy đến hãy vững tin rằng vẫn còn có anh. Anh vẫn luôn bên em để bước đi cùng với nhau. Tháng ngày bên nhau đến cuôi con đường','DIEU-MONG-UOC.png','Lan hồ điệp'),(24,2,3,'KIÊU SA',300000,'Bình hoa \"Kiêu Sa\" là sự kết hợp của 4 cành hồ điệp trắng nổi bật trên nền hoa hồng và các loại hoa phụ đủ màu sắc. Đem đến một tổng thể kiêu sa, sang trọng. Thích hợp để chúc mừng, kỉ niệm.','KIEU-SA.jpg','Lan hồ điệp'),(25,4,1,'ONLY-YOU',300000,'Một bó hoa đơn giản phù hợp tặng sinh nhật đồng nghiệp, bạn bè trong lớp và người yêu. Bó hoa được thiết kế nhẹ nhàng, kết hợp giữa màu tím của Calimero và hồng dâu đem lại cảm giác chân thành và quý trọng.','ONLY-YOU.jpg','Hoa hồng'),(26,4,3,'FOREVER-YOUNG',240000,'\"Ai cũng có tuổi trẻ và những câu chuyện về tuối trẻ của riêng mình. Trong mỗi câu chuyện ấy đều có những hồi ức đẹp kèm theo cả sự nuối tiếc mãi in dấu nơi đáy tim\". Lấy cảm hứng từ câu nói trên, các florist đã tạo nên sản phẩm \"Forever young\" để giúp bạn lưu lại những khoảnh khắc tuổi trẻ đầy tươi đẹp đối với người bạn yêu thương.','FOREVER-YOUNG.png','Hoa hồng'),(31,4,3,'NẮNG HỒNG',356000,'Chọn tông hồng làm màu sắc chủ đạo, “Nắng hồng” tạo nên một tổng thể nhẹ nhàng, khơi gợi cảm giác thư thái, vui tươi khi ngắm nhìn. Sản phẩm gửi gắm thông điệp: Tình yêu vốn dĩ không phải là điều ta nhận đuợc mà là những gì ta cho đi. Hãy chia sẻ yêu thương khi ta còn có thể vì chính tình yêu sẽ làm cuộc sống thêm tươi vui, hạnh phúc!','NANG-HONG.png','Hoa hồng'),(32,4,4,'TÌNH',378000,'Bó \"Tình\" là sự kết hợp tinh tế của hoa hồng da cao cấp, xen kẽ với cẩm chướng, thạch thảo thể hiện một tình yêu đam mê và thủy chung, sâu sắc. Dành tặng người mà bạn yêu thương những lời nhắn nhủ thầm kín ẩn trong bó hoa sang trọng và ngọt ngào này nhé.','TINH.png','Hoa hồng'),(33,4,2,'ME BEFORE YOU',320000,'Lấy cảm hứng từ bộ phim tình cảm “Me before you”, mẫu hoa cùng tên mang đến thông điệp ý nghĩa về sức mạnh của tình yêu và cách mà tình yêu làm thay đổi mỗi người. Tặng bó hoa “Me before you’ cho một người nghĩa là ta rất thương yêu, quý trọng và đề cao họ.','ME-BEFORE-YOU.jpg','Hoa hồng'),(34,4,3,'MONG CHỜ',300000,'Bó hoa được thiết kế dạng tròn và là sự kết hợp tinh tế của hồng da và ping pong tím cùng các hoa lá phụ khác thể hiện sự mong chờ da diết đối với người đặc biệt trong lòng bnạ. Bó hoa phù hợp tặng cho các dịp sinh nhật, ngày kỉ niệm tình yêu...','MONG-CHO.png','Hoa hồng'),(35,4,3,'PURPER-LOVE',500000,'Hoa hồng tím là một trong loài hoa khá đặc biệt và hiếm thấy do đó ý nghĩa của nó cũng rất đặc biệt. Là bó hoa tình yêu tuyệt vời để bạn thể hiện tình cảm của mình trong những dịp đặc biệt, sẽ là món quà độc đáo và sang trọng trong tình yêu khi bạn muốn thể hiện tình cảm đặc biệt của mình dành cho người mà bạn yêu mến. Màu tím là màu của sự quyến rũ của tình yêu say mê','PURPER-LOVE.jpg','Hoa hồng'),(36,4,4,'WHITE-ROSES',280000,'Bó hoa mix 9 cành hồng trắng, babi và lá bạc tượng trưng cho tình yêu thuần khiết và mãi bất diệt. Vì vậy các cặp đôi thường dành tặng cho nhau bó hoa với 9 bông hoa hồng trong ngày lễ tình nhân, ngày sinh nhật hay trong những ngày kỷ niệm đặc biệt để khẳng định tình yêu mà mình dành cho đối phương.','WHITE-ROSES.png','Hoa hồng'),(40,3,2,'BLOOMING',499000,'Điếm nhấn ấn tượng trong mẫu thiết kế này chính là những cành hồng Red elegance đỏ đang độ nở rộ. Vẻ đẹp kiêu kì cùng sắc đỏ rực rỡ của loài hoa này tượng trưng cho sự quyền lực và quyết đoán. Vì vậy, sản phẩm rất phù hợp để dành tặng các Sếp nữ hoặc những người mà bạn đặc biệt trân quý.','BLOOMING.jpg','Hoa chúc mừng'),(41,3,2,'SIXTEEN',450000,'Nếu một ngày nào đó, một giây phút nào đó bạn cảm thấy yếu đuối trước những khó khăn, sóng gió của cuộc sống thì hãy tạm gác lại mọi việc và dành cho mình một chuyến đi thật xa để trải nghiệm những điều mới mẻ khác. Vì cuộc đời chỉ có một, nên hãy chỉ làm những điều khiến bạn hạnh phúc, luôn nhớ hãy sống như tuổi 16, độ tuổi của niềm vui, sự yêu đời và quan trọng là hãy luôn giữ một thái độ lạc quan bạn nhé.','SIXTEEN.jpg','Hoa chúc mừng'),(42,3,3,'THÁNG NĂM RỰC RỠ',379000,'Bình hoa \"Tháng năm rực rỡ\" thực sự rất phù hợp để dành tặng các dịp chúc mừng hay sinh nhật. Với sự kết hợp màu sắc tươi sáng tạo nên một tổng thể vô cũng tươi vui và tràn đầy năng lượng, vì vậy, đừng ngần ngại hãy lan tỏa niềm vui và sự tích cực này cho mọi người xung quanh nhé.','THANG-NAM-RUC-RO.jpg','Hoa chúc mừng'),(43,3,4,'PRETTY-STARS',425000,'\"Pretty stars\" bình hoa tựa như hàng trăm vì sao tuy nhỏ bé nhưng tràn đầy ánh sáng tươi vui, rạng rỡ. Hãy đặc biệt dành tặng những đóa hoa xinh xắn này cho bạn bè, người thân để khích lệ tinh thần của họ những lúc chán trường hay bế tắc, và không quên gửi kèm thêm những lời động viên chân thành nhất thì thật sự rất ý nghĩa đấy.','PRETTY-STARS.png','Hoa chúc mừng'),(44,3,4,'JUST LOVE',399000,'Bó hoa mang màu sắc của sự rực rỡ, tươi tắn như chính tuổi trẻ đầy nhiệt huyết và ước mơ hoài bão. Tặng bó hoa này cho người thân yêu hay bạn bè sẽ là một lời chúc may mắn và cũng là lời động viên khích lệ họ tiếp tục theo đuổi những gì mà họ đang chọn. Chỉ cần tình yêu đối với những thứ mình đang làm thì mọi khó khăn, thử thách đều có thể vượt qua.','JUST-LOVE.png','Hoa chúc mừng'),(45,3,3,'SHINY',310000,'Shiny được thiết kế dựa trên tông màu vàng tươi sáng, rực rỡ, đem lại cảm giác may mắn và tươi vui. Hoa phù hợp tặng chúc mừng cho đồng nghiệp, bạn bè.','SHINY.png','Hoa chúc mừng');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_info`
--

DROP TABLE IF EXISTS `user_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(300) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_info`
--

LOCK TABLES `user_info` WRITE;
/*!40000 ALTER TABLE `user_info` DISABLE KEYS */;
INSERT INTO `user_info` VALUES (1,'Hao','Trần','hao@gmail.com','12345','0966899059','Hà Nội','Cầu giấy-Hà Nội'),(3,'Quân','Lưu','ekkott7@gmail.com','4321','0955666777','Vinh','Vinh'),(4,'Quang','Lê','quang@gmail.com','456789','0966899000','An Giang','Vinh'),(8,'Nam','Nguyễn','nam3@gmail.com','444','0966899000','Hà Nội','235 Hoàng Quốc Việt, Cổ Nhuế, Từ Liêm, Hà Nội');
/*!40000 ALTER TABLE `user_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_info_backup`
--

DROP TABLE IF EXISTS `user_info_backup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_info_backup` (
  `user_id` int(100) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(300) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_info_backup`
--

LOCK TABLES `user_info_backup` WRITE;
/*!40000 ALTER TABLE `user_info_backup` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_info_backup` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-16 20:32:26
