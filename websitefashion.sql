-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2017 at 05:01 AM
-- Server version: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websitefashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL,
  `parent_id` int(10) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `publish` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `lft`, `rght`, `name`, `publish`) VALUES
(4, NULL, NULL, NULL, 'Ão sÆ¡ mi', 1),
(5, NULL, NULL, NULL, 'VÃ¡y, Ä‘áº§m', 1),
(6, NULL, NULL, NULL, 'Yáº¿m Jeans', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `content` text NOT NULL,
  `created` datetime NOT NULL,
  `readed` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `title`, `fullname`, `email`, `phone`, `address`, `content`, `created`, `readed`) VALUES
(1, '123', 'LÃª Thá»‹ Thanh Kim', 'thanhkim@gmail.com', '', NULL, 'no comment', '2016-11-01 09:56:26', 0),
(2, '123', 'LÃª Thá»‹ Thanh Kim', 'thanhkim@gmail.com', '', '', 'contents', '2016-11-01 09:57:14', 1),
(3, '123', 'LÃª Thá»‹ Thanh Kim', 'thanhkim@gmail.com', '', '', 'conten', '2016-11-01 09:57:41', 1);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `slide` tinyint(1) NOT NULL,
  `advertisement` tinyint(1) NOT NULL,
  `parner` tinyint(1) NOT NULL,
  `publish` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `description`, `image`, `slide`, `advertisement`, `parner`, `publish`) VALUES
(2, 'Ão ná»¯ ', '<ul style="margin: 0px 0px 18px 18px; padding: 0px; border: 0px; font-size: 12px; vertical-align: baseline; list-style: circle; color: #444444; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">\r\n<li style="margin: 0px; padding: 0px; border: 0px; font-weight: inherit; vertical-align: baseline;">Cháº¥t liá»‡u: váº£i lá»¥a, váº£i lá»¥a</li>\r\n<li style="margin: 0px; padding: 0px; border: 0px; font-weight: inherit; vertical-align: baseline;">Phong c&aacute;ch: há»c viá»‡n, chui Ä‘áº§u</li>\r\n<li style="margin: 0px; padding: 0px; border: 0px; font-weight: inherit; vertical-align: baseline;">Kiá»ƒu d&aacute;ng: &ocirc;m th&acirc;n</li>\r\n<li style="margin: 0px; padding: 0px; border: 0px; font-weight: inherit; vertical-align: baseline;">Kiá»ƒu tay &aacute;o: cÆ¡ báº£n</li>\r\n<li style="margin: 0px; padding: 0px; border: 0px; font-weight: inherit; vertical-align: baseline;">M&agrave;u sáº¯c: m&agrave;u Ä‘en,m&agrave;u tráº¯ng,ren Ä‘en ná»n tráº¯ng sá»c Ä‘en,ren tráº¯ng ná»n tráº¯ng sá»c Ä‘en,,ná»n tráº¯ng v&acirc;n sá»c cam</li>\r\n<li style="margin: 0px; padding: 0px; border: 0px; font-weight: inherit; vertical-align: baseline;">Äá»™ d&agrave;i &aacute;o: kiá»ƒu cÆ¡ báº£n (50cm &lt;Ä‘á»™ d&agrave;i &aacute;o&le;65cm)</li>\r\n<li style="margin: 0px; padding: 0px; border: 0px; font-weight: inherit; vertical-align: baseline;">Th&agrave;nh pháº§n cháº¥t liá»‡u tiáº¿p theo: Lá»¥a tÆ¡ táº±m, sá»£i tÆ¡</li>\r\n</ul>', 'ao-so-mi-nu-cach-dieu-dep-ca-tinh-kieu-han-quoc-he-2016-15.jpg', 0, 1, 0, 0),
(3, 'Slide ', '<p>Äáº¹p</p>', 'slide.jpg', 1, 0, 0, 0),
(4, 'Slide', '<p>Äáº¹p</p>', 'slide1.jpg', 1, 0, 0, 0),
(5, 'Slide', '<p>Äáº¹p</p>', 'slide2.jpg', 1, 0, 0, 0),
(6, 'Slide', '<p>Äáº¹p</p>', 'slide4.jpg', 1, 0, 0, 0),
(7, 'Ão sÆ¡ mi nam', '<p>Ä‘áº¹p. nam t&iacute;nh</p>', 'chi.jpg', 0, 1, 0, 0),
(8, 'Yáº¿m', '<p>Ä‘áº¹p</p>', 'muon-kieu-vay-yem-cuc-xinh-cho-nang-thoa-suc-lam-dieu-nhung-ngay-he-6.jpg', 0, 1, 0, 0),
(9, 'parner', '', 'panner.PNG', 0, 0, 0, 1),
(10, '123', '', 'cart.jpg', 0, 0, 0, 1),
(11, '3', '', 'home.png', 0, 0, 0, 1),
(12, '4', '', 'Search.png', 0, 0, 0, 1),
(13, '12333', '', 'logo.jpg', 0, 0, 0, 1),
(14, 'cv', '', '4.jpg', 0, 0, 1, 0),
(15, 'as', '', '1.jpg', 0, 0, 1, 0),
(16, 'ad', '', '2.jpg', 0, 0, 1, 0),
(17, 'aq', '', '3.jpg', 0, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL,
  `type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL,
  `buyername` varchar(255) NOT NULL,
  `buyeremail` varchar(255) NOT NULL,
  `buyerphone` varchar(255) NOT NULL,
  `buyeraddress` varchar(255) NOT NULL,
  `receivername` varchar(255) NOT NULL,
  `receiveraddress` varchar(255) NOT NULL,
  `receiverphone` varchar(255) NOT NULL,
  `receiverdate` text NOT NULL,
  `paymentmethod` varchar(255) NOT NULL,
  `cartinfomation` text NOT NULL,
  `createorder` text NOT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `buyername`, `buyeremail`, `buyerphone`, `buyeraddress`, `receivername`, `receiveraddress`, `receiverphone`, `receiverdate`, `paymentmethod`, `cartinfomation`, `createorder`, `status`) VALUES
(1, 'Trang', 'trang97pnvn@gmail.com', '01627347631', 'Sen ÄÃ´ng', 'Men', 'Quang Binh', '01627347632', '2016-10-26 21:21:00', 'Tháº»', '{"SCI-1":{"quantity":3,"id":"SCI-1","price":150000,"name":"ChÃ¢n vÃ¡y ná»¯","thumb":"files/product/image/10/40_Ao_so_mi_cong_so_co_tru_mau_tim_b3522.jpg"}}', '2016-10-29 21:21:00', ''),
(2, 'Trang', 'trang97pnvn@gmail.com', '01627347631', 'Sen ÄÃ´ng', 'Men', 'Quang Binh', '01627347632', '2016-10-26 21:21:00', 'Tháº»', '{"SCI-1":{"quantity":3,"id":"SCI-1","price":150000,"name":"ChÃ¢n vÃ¡y ná»¯","thumb":"files/product/image/10/40_Ao_so_mi_cong_so_co_tru_mau_tim_b3522.jpg"}}', '2016-10-29 21:21:00', 'con'),
(11, 'LÃª Thá»‹ Trang', 'trang97pnvn@gmail.com', '01627347631', 'Quáº£ng BÃ¬nh', 'Trang', 'Sen Thá»§y', '0178965412', '2016-11-17 00:00:00', 'tien mat', '{"SCI-1":{"quantity":1,"id":"SCI-1","price":150000,"name":"ChÃ¢n vÃ¡y ná»¯","thumb":"files/product/image/10/40_Ao_so_mi_cong_so_co_tru_mau_tim_b3522.jpg"}}', '2016-11-17 10:00:00', 'Äang chá»'),
(12, 'LÃª Thá»‹ Trang', 'trang97pnvn@gmail.com', '01627347631', 'Quáº£ng BÃ¬nh', 'Trang', 'Sen Thá»§y', '01234567899', '2016-10-01 07:00:00', 'tien mat', '{"SCI-1":{"quantity":1,"id":"SCI-1","price":150000,"name":"ChÃ¢n vÃ¡y ná»¯","thumb":"files/product/image/10/40_Ao_so_mi_cong_so_co_tru_mau_tim_b3522.jpg"}}', '2016-11-01 10:00:00', 'Äang chá»'),
(14, 'LÃª Thá»‹ Trang', 'trang97pnvn@gmail.com', '0123456789', 'Quáº£ng BÃ¬nh', 'Trang', 'Quang Binh', '01234567899', '2016-01-01 05:00:00', 'tien mat', '{"SCI-1":{"quantity":1,"id":"SCI-1","price":150000,"name":"ChÃ¢n vÃ¡y ná»¯","thumb":"files/product/image/10/40_Ao_so_mi_cong_so_co_tru_mau_tim_b3522.jpg"}}', '2016-11-01 10:00:00', 'conf'),
(15, 'LÃª Thá»‹ Trang', 'trang97pnvn@gmail.com', '01627347631', 'Sen Thuy', 'Trang', 'Quang Binh', '01234567899', '2016-11-19 08:16:00', 'tien mat', '{"SCI-1":{"quantity":1,"id":"SCI-1","price":150000,"name":"ChÃ¢n vÃ¡y ná»¯","thumb":"files/product/image/10/40_Ao_so_mi_cong_so_co_tru_mau_tim_b3522.jpg"}}', '2016-11-20 23:00:00', 'Äang chuyá»ƒn hÃ ng'),
(17, 'LÃª Thá»‹ Trang', 'trang97pnvn@gmail.com', '0123456789', 'Quáº£ng BÃ¬nh', 'Trang', 'Quang Binh', '01234567899', '2016-11-01 06:15:00', 'tien mat', '{"SCI-1":{"quantity":1,"id":"SCI-1","price":150000,"name":"ChÃ¢n vÃ¡y ná»¯","thumb":"files/product/image/10/40_Ao_so_mi_cong_so_co_tru_mau_tim_b3522.jpg"}}', '2016-11-18 10:18:00', 'conf'),
(18, 'LÃª Thá»‹ Trang', 'trang97pnvn@gmail.com', '0123456789', 'Quáº£ng BÃ¬nh', 'Trang', 'Quang Binh', '01234567899', '2016-11-01 05:00:00', 'tien mat', '{"SCI-1":{"quantity":1,"id":"SCI-1","price":150000,"name":"ChÃ¢n vÃ¡y ná»¯","thumb":"files/product/image/10/40_Ao_so_mi_cong_so_co_tru_mau_tim_b3522.jpg"}}', '2016-11-01 09:00:00', 'conf'),
(19, 'LÃª Thá»‹ Trang', 'trang97pnvn@gmail.com', '0123456789', 'Quáº£ng BÃ¬nh', 'Trang', 'Quang Binh', '01234567899', '2016-11-01 08:00:00', 'tien mat', '{"SCI-1":{"quantity":1,"id":"SCI-1","price":150000,"name":"ChÃ¢n vÃ¡y ná»¯","thumb":"files/product/image/10/40_Ao_so_mi_cong_so_co_tru_mau_tim_b3522.jpg"}}', '2016-11-19 10:35:00', 'conf'),
(20, 'Nguyá»…n Thá»‹ Hoa', 'hoa.nguyen@gmail.com', '01627347632', 'Quáº£ng Trá»‹', 'HoÃ ng Thá»‹ Kim NgÃ¢n', 'Kon Tum', '0167314897', '2016-11-04 07:00:00', 'Tháº»', '{"SCI-1":{"quantity":2,"id":"SCI-1","price":150000,"name":"ChÃ¢n vÃ¡y ná»¯","thumb":"files/product/image/10/40_Ao_so_mi_cong_so_co_tru_mau_tim_b3522.jpg"}}', '2016-11-01 10:00:00', 'Äang chá»'),
(22, 'HoÃ ng Thá»‹ Kim NguyÃªn', 'Nguyen@gmail.com', '01639167513', 'Kon Tum', 'Huá»³nh Thá»‹ Kim Oanh', 'Quáº£ng BÃ¬nh', '09051997831', '2016-11-04 07:00:00', 'Tiá»n máº·t', '{"SCI-1":{"quantity":1,"id":"SCI-1","price":1110,"name":"Quáº§n jeans yáº¿m dÃ i","thumb":"files/product/image/14/d1e32027f6df6ad8bc0d4acd497e4c-3258-1138-1406195768.jpg"}}', '2016-11-18 07:00:00', 'Äang chuyá»ƒn hÃ ng'),
(27, 'Phan Thanh TrÃºc', 'trucphan@gmail.com', '0905346789', 'Äá»“ng Há»›i Quáº£ng BÃ¬nh', 'Huá»³nh Thá»‹ Kim NgÃ¢n', 'Äáº¯k HÃ , Kon Tum', '0905678123', '11/30/2016', 'Tiá»n máº·t', '{"SCI-7":{"quantity":2,"id":"SCI-7","name":"Ão sÆ¡ mi ná»¯","thumb":"files/product/image/10/40_Ao_so_mi_cong_so_co_tru_mau_tim_b3522.jpg"},"SCI-4":{"quantity":2,"id":"SCI-4","price":120000,"name":"Ão sÆ¡ mi nu","thumb":"files/product/image/12/ao-so-mi-cong-so-tay-dai-mau-trang.jpg"},"SCI-5":{"quantity":1,"id":"SCI-5","price":125000,"name":"Quáº§n jeans yáº¿m ","thumb":"files/product/image/15/dam_yem_denim_cho_ban_gai__2__2itkilnjbbeiq(1).jpg"},"SCI-6":{"quantity":1,"id":"SCI-6","price":1110,"name":"Quáº§n jeans yáº¿m dÃ i","thumb":"files/product/image/14/d1e32027f6df6ad8bc0d4acd497e4c-3258-1138-1406195768.jpg"}}', '11/15/2016', 'Äang chá»');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `top` tinyint(1) DEFAULT NULL,
  `bottom1` tinyint(1) DEFAULT NULL,
  `bottom2` tinyint(1) DEFAULT NULL,
  `created` datetime NOT NULL,
  `publish` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `top`, `bottom1`, `bottom2`, `created`, `publish`) VALUES
(1, 'Tin nÃ³ng trong ngÃ y', '<div class="title_news" style="margin: 10px 0px 0px; padding: 0px 0px 10px; width: 480.016px; float: left; color: #333333; font-family: arial; font-size: 12px;">\r\n<h1 style="margin: 0px; padding: 0px; font-weight: 400; font-stretch: normal; font-size: 28px; line-height: 32px; text-rendering: geometricPrecision;">Äáº§m khoe Ä‘&ugrave;i cá»§a Ngá»c Trinh ''láº¡c Ä‘iá»‡u'' tr&ecirc;n s&acirc;n kháº¥u hoa háº­u H&agrave;n Quá»‘c</h1>\r\n</div>\r\n<h3 class="short_intro txt_666" style="margin: 0px; padding: 0px 0px 10px; color: #444444; font-stretch: normal; font-size: 14px; line-height: 18px; font-family: arial; width: 480.016px; float: left; text-rendering: geometricPrecision;">NgÆ°á»i máº«u chá»n v&aacute;y ngáº¯n, chÆ°a ph&ugrave; há»£p nguy&ecirc;n táº¯c Ä‘áº£m báº£o Ä‘á»™ d&agrave;i dÆ°á»›i gá»‘i cá»§a trang phá»¥c táº¡i má»™t sá»± kiá»‡n trao giáº£i.</h3>\r\n<div id="block_reference_a" class="relative_new" style="margin: 0px; padding: 0px 0px 5px; width: 480.016px; float: left; font-family: arial; font-size: 12px;">\r\n<ul class="list_news_dot_3x3_300" style="margin: 0px; padding: 0px; list-style-type: none; width: 480.016px; float: left; border: none; color: #666666;">\r\n<li style="margin: 0px; padding: 0px 0px 5px 10px; list-style-type: none; background: url(''images/graphics/bg_dot_gray_3x3.gif'') 0px 6px no-repeat;"><a style="margin: 0px; padding: 0px; color: #666666; text-decoration: none; outline: 1px; font-weight: bold; font-stretch: normal; line-height: 16px;" title="Ngá»c Trinh khoe sáº¯c b&ecirc;n d&agrave;n hoa háº­u á»Ÿ Seoul" href="http://giaitri.vnexpress.net/photo/sao-dep-sao-xau/ngoc-trinh-khoe-sac-ben-dan-hoa-hau-o-seoul-3488067.html?utm_source=detail&amp;utm_medium=box_relatedtop&amp;utm_campaign=boxtracking&amp;cvar=A">Ngá»c Trinh khoe sáº¯c b&ecirc;n d&agrave;n hoa háº­u á»Ÿ Seoul</a>&nbsp;/&nbsp;<a style="margin: 0px; padding: 0px; color: #666666; text-decoration: none; outline: 1px; font-weight: bold; font-stretch: normal; line-height: 16px;" title="Ngá»c Trinh dá»± chung káº¿t cuá»™c thi hoa háº­u á»Ÿ H&agrave;n Quá»‘c" href="http://giaitri.vnexpress.net/tin-tuc/gioi-sao/trong-nuoc/ngoc-trinh-du-chung-ket-cuoc-thi-hoa-hau-o-han-quoc-3482753.html?utm_source=detail&amp;utm_medium=box_relatedtop&amp;utm_campaign=boxtracking&amp;cvar=A">Ngá»c Trinh dá»± chung káº¿t cuá»™c thi hoa háº­u á»Ÿ H&agrave;n Quá»‘c</a></li>\r\n</ul>\r\n</div>\r\n<div class="fck_detail width_common block_ads_connect" style="margin: 0px; padding: 0px 9.59375px 0px 0px; width: 470.406px; float: left; overflow: hidden; font-stretch: normal; font-size: 14px; line-height: normal; font-family: arial; color: #333333;">\r\n<p class="Normal" style="margin: 0px 0px 1em; padding: 0px; line-height: 18px; text-rendering: geometricPrecision;">Xuáº¥t hiá»‡n tr&ecirc;n s&acirc;n kháº¥u trong Ä‘&ecirc;m chung káº¿t cuá»™c thi nhan sáº¯c H&agrave;n Quá»‘c tá»‘i 23/10, Ngá»c Trinh chá»n&nbsp;<a style="margin: 0px; padding: 0px; color: #004f8b; text-decoration: none; outline: 1px;" href="http://giaitri.vnexpress.net/photo/sao-dep-sao-xau/ngoc-trinh-chon-vay-xe-nguc-du-chung-ket-hoa-hau-o-han-quoc-3487932.html" target="_blank">chiáº¿c Ä‘áº§m Ä‘á»</a>&nbsp;cá»§a Äá»— Long. Bá»™ v&aacute;y Ä‘Æ°á»£c táº¡o d&aacute;ng &ocirc;m kh&iacute;t cÆ¡ thá»ƒ, ngáº¯n ngang Ä‘&ugrave;i<span style="margin: 0px; padding: 0px;">&nbsp;v&agrave; kho&eacute;t ngá»±c.&nbsp;<span style="margin: 0px; padding: 0px;">Nh&agrave; thiáº¿t káº¿ thá»±c hiá»‡n th&ecirc;m pháº§n &aacute;o cho&agrave;ng Ä‘i k&egrave;m vá»›i v&aacute;y song&nbsp;<span style="margin: 0px; padding: 0px;"><span style="margin: 0px; padding: 0px;">trang phá»¥c váº«n bá»‹ Ä‘&aacute;nh gi&aacute; l&agrave; chÆ°a ph&ugrave; há»£p.</span></span></span></span></p>\r\n</div>', 0, 0, 0, '2016-10-25 00:03:58', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `vip` tinyint(1) DEFAULT NULL,
  `promotion` varchar(11) DEFAULT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `code`, `name`, `image`, `price`, `description`, `vip`, `promotion`, `category_id`) VALUES
(8, 'A12', 'Ão sÆ¡ mi ná»¯', 'ao-so-mi-dep-(4).jpg', '120000', '<p style="margin: 0px 0px 18px; padding: 0px; border: 0px; font-size: 12px; vertical-align: baseline; color: #444444; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;"><img class="emoji" style="font-weight: inherit; max-width: 100%; display: inline; height: auto; margin: 0px 0.07em !important; padding: 0px !important; border: none !important; vertical-align: -0.1em !important; width: 1em !important; box-shadow: none !important; background: none !important;" draggable="false" src="https://s.w.org/images/core/emoji/2/svg/2714.svg" alt="âœ”" />&nbsp;M&agrave;u sáº¯c : Sá»c tráº¯ng xanh, sá»c tráº¯ng Ä‘en</p>\r\n<p style="margin: 0px 0px 18px; padding: 0px; border: 0px; font-size: 12px; vertical-align: baseline; color: #444444; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;"><img class="emoji" style="font-weight: inherit; max-width: 100%; display: inline; height: auto; margin: 0px 0.07em !important; padding: 0px !important; border: none !important; vertical-align: -0.1em !important; width: 1em !important; box-shadow: none !important; background: none !important;" draggable="false" src="https://s.w.org/images/core/emoji/2/svg/2714.svg" alt="âœ”" />&nbsp;Cháº¥t liá»‡u : Ch&acirc;u Toan</p>\r\n<p style="margin: 0px 0px 18px; padding: 0px; border: 0px; font-size: 12px; vertical-align: baseline; color: #444444; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;"><img class="emoji" style="font-weight: inherit; max-width: 100%; display: inline; height: auto; margin: 0px 0.07em !important; padding: 0px !important; border: none !important; vertical-align: -0.1em !important; width: 1em !important; box-shadow: none !important; background: none !important;" draggable="false" src="https://s.w.org/images/core/emoji/2/svg/2714.svg" alt="âœ”" />&nbsp;K&iacute;ch cá»¡ (Size): M</p>', 1, '1', 4),
(10, 'B12', 'Ão sÆ¡ mi ná»¯', '40_Ao_so_mi_cong_so_co_tru_mau_tim_b3522.jpg', '120000', '<p style="box-sizing: border-box; margin: 0px 0px 10px; line-height: 24px; color: #777777; font-family: ''Lucida Sans Unicode'', ''Lucida Grande'', sans-serif; font-size: 14px;">Ch&acirc;n v&aacute;y c&ocirc;ng sá»Ÿ &nbsp;d&aacute;ng &ocirc;m body quyáº¿n rÅ©, Ä‘á»™ d&agrave;i ph&ugrave; há»£p vá»›i c&aacute;c báº¡n g&aacute;i vÄƒn ph&ograve;ng</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 10px; line-height: 24px; color: #777777; font-family: ''Lucida Sans Unicode'', ''Lucida Grande'', sans-serif; font-size: 14px;">3 m&agrave;u sáº¯c mang láº¡i nhiá»u lá»±a chá»n hÆ¡n cho c&aacute;c c&ocirc; n&agrave;ng, t&ocirc;ng Ä‘á» Ä‘&ocirc; quyáº¿n rÅ©, t&ocirc;ng Ä‘en truyá»n thá»‘ng v&agrave; t&iacute;m than lá»‹ch l&atilde;m.</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 10px; line-height: 24px; color: #777777; font-family: ''Lucida Sans Unicode'', ''Lucida Grande'', sans-serif; font-size: 14px;">&nbsp;</p>', 1, '1', 4),
(12, '103', 'Ão sÆ¡ mi nu', 'ao-so-mi-cong-so-tay-dai-mau-trang.jpg', '120000', '<p>Phong c&aacute;ch tinh táº¿, kiá»ƒu d&aacute;ng sang trá»ng v&agrave; s&agrave;nh Ä‘iá»‡u. L&agrave; sá»± lá»±a chá»n tuyá»‡t vá»i cho nam giá»›i</p>', 1, '', 4),
(13, 'B102', 'Yáº¿m Jean loáº¡i 1', 'cach-mix-do-cho-vay-yem.jpg', '120000', '<p><span style="color: #888888; font-family: arial, sans-serif; font-size: 13px; line-height: 16px; background-color: #f1f1f1;">Kh&aacute;c vá»›i nhá»¯ng trang phá»¥c k&eacute;n ngÆ°á»i máº·c kh&aacute;c nhÆ° v&aacute;y, quáº§n so&oacute;c hay jeans skinny, quáº§n yáº¿m dá»… d&agrave;ng ph&ugrave; há»£p vá»›i má»i d&aacute;ng ngÆ°á»i</span></p>', 1, '1', 6),
(14, 'B103', 'Quáº§n jeans yáº¿m dÃ i', 'd1e32027f6df6ad8bc0d4acd497e4c-3258-1138-1406195768.jpg', '150000', '<p>&nbsp;</p>\r\n<h3 style="color: #111111; font-size: 14px; line-height: 1.25; margin: 0px; max-width: 500px; overflow: hidden; display: inline-block; padding: 8px 10px; font-family: sans-serif, Verdana, Geneva; border-bottom: none !important;"><span style="display: inline-block;">Quáº§n jeans yáº¿m d&agrave;i c&aacute; t&iacute;nh M&atilde;: QD280 - XANH NHáº T</span></h3>\r\n<p>&nbsp;</p>\r\n<table style="color: #222222; font-family: sans-serif, Verdana, Geneva; font-size: 12px; line-height: 18px;">\r\n<tbody>\r\n<tr>\r\n<td style="vertical-align: top; height: auto !important; max-width: 600px !important;">\r\n<p style="margin: 0px 0px 10px; height: auto !important; max-width: 600px !important;"><strong><span style="color: blue; font-size: large;"><span style="color: #666666; font-family: ''Times New Roman''; font-size: 12.2222px; line-height: 17.9861px;">Cháº¥t Liá»‡uï¼šJeans váº£i</span></span></strong></p>\r\n<p style="margin: 0px 0px 10px; height: auto !important; max-width: 600px !important; font-size: 12.2222px; color: #666666; font-family: ''Times New Roman''; line-height: 17.9861px;">Mï¼šV&ograve;ng eo 78CM,V&ograve;ng H&ocirc;ng 104CM,Quáº§n D&agrave;i 112CMï¼ŒV&ograve;ng Ä‘&ugrave;i 58CM</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>', 1, '1', 6),
(15, 'B104', 'Quáº§n jeans yáº¿m ', 'dam_yem_denim_cho_ban_gai__2__2itkilnjbbeiq(1).jpg', '125000', '<p>Cháº¥t lÆ°á»£ng, Ä‘áº¹p máº¯t, ph&ugrave; há»£p vá»›i c&aacute;c báº¡n ná»¯ mang trong m&igrave;nh phong c&aacute;ch c&aacute; t&iacute;nh</p>', 1, '1', 6);

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE IF NOT EXISTS `types` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `order` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `name`, `order`) VALUES
(1, 'Tin nÃ³ng tron ngÃ y', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'meli', '1234567');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
