-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2024 at 03:48 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `red`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` double NOT NULL,
  `user_id` int(11) NOT NULL,
  `category` varchar(10) NOT NULL,
  `color` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`product_id`, `qty`, `total`, `user_id`, `category`, `color`) VALUES
(9, 1, 73950, 4, 'Phones', 'Red');

-- --------------------------------------------------------

--
-- Table structure for table `chargers`
--

CREATE TABLE `chargers` (
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chargers`
--

INSERT INTO `chargers` (`product_id`, `name`, `price`, `description`, `category`, `stock`, `image_url`, `created_at`) VALUES
(111, 'Anker 326 Power Bank, Digital display for battery percentage', 3723.00, 'Anker 326 Power Bank, Digital display for battery percentage, 20,000mAh Battery, 15W High-Speed Charging for iPhone, Samsung Galaxy, and More\r\n', 'charger', 10, 'https://images-eu.ssl-images-amazon.com/images/I/51G5kxvNYWL._AC_UL160_SR160,160_.jpg', '2024-04-20 16:52:44'),
(112, 'Anker 313 Charger 45 W USB C Super Fast Charger', 1299.00, 'Anker 313 Charger 45 W USB C Super Fast Charger, Anker Ace PPS Fast Charger Supports Super Fast Charging 2.0 for Samsung Galaxy S23 Ultra/S23+/S23, S22/S21/S20/Note 20/Note 10,Black', 'charger', 10, 'https://m.media-amazon.com/images/I/61co8sRsBQL._AC_SL1500_.jpg', '2024-04-20 17:08:52'),
(113, 'Joyroom JR-T012 Top star mobile power 10000mAh black', 339.00, 'Joyroom JR-T012 Top star mobile power 10000mAh black', 'charger', 10, 'https://images-eu.ssl-images-amazon.com/images/I/515OeaNW+gL._AC_UL600_SR600,400_.jpg', '2024-04-20 23:43:18'),
(114, 'Xiaomi Mi Power Bank 50W 20000mAh, 50W Portable Battery, Bi-Directional Fast Charging, High Power of 74WH, Black', 1699.00, 'Xiaomi Mi Power Bank 50W 20000mAh, 50W Portable Battery, Bi-Directional Fast Charging, High Power of 74WH, Black', 'charger', 10, 'https://images-eu.ssl-images-amazon.com/images/I/61bgyTIp6BL._AC_UL600_SR600,400_.jpg', '2024-04-20 23:45:00'),
(115, 'Anker USB C Charger, 20W Fast Charger with Foldable Plug', 501.00, 'Anker USB C Charger, 20W Fast Charger with Foldable Plug, PowerPort III 20W Cube Charger for iPhone 14/14 Plus/14 Pro/14 Pro Max/13, Galaxy, Pixel 4/3, iPad/iPad Mini, and More', 'charger', 10, 'https://images-eu.ssl-images-amazon.com/images/I/410nl-xLppS._AC_UL600_SR600,400_.jpg', '2024-04-20 23:48:28'),
(116, 'LENOK 20 W Wall Charger, USB-C Charger, Fast Charging for iPhone 15', 399.00, 'LENOK 20 W Wall Charger, USB-C Charger, Fast Charging for iPhone 15, 15 Plus, 15 Pro, 15 Pro Max, 14, 14 Pro, 14 Pro Max, 13, 13 Pro, 13 Pro Max, Galaxy S23, iPad, AirPods & More (White)', 'charger', 10, 'https://images-eu.ssl-images-amazon.com/images/I/318gcquvzHL._AC_UL600_SR600,400_.jpg', '2024-04-20 23:50:17'),
(117, 'Anker Power Bank, Ultra-Compact 5,200mAh Portable Charger', 5900.00, 'Anker Power Bank, Ultra-Compact 5,200mAh Portable Charger, PowerCore 5K Battery Pack, Compatible with iPhone 15/15 Plus/15 Pro/15 Pro Max/14/13 Series, Samsung, Google Pixel, LG (Adapter Not Included)', 'charger', 10, 'https://m.media-amazon.com/images/I/31s2B3XHe4L._AC_UF480,480_SR480,480_.jpg', '2024-04-21 00:06:56'),
(118, 'Anker USB-C to Lightning Cable, 641 Cable (Lilac Purple, 3ft)', 955.00, 'Anker USB-C to Lightning Cable, 641 Cable (Lilac Purple, 3ft), MFi Certified, Powerline III Flow Silicone Fast Charging Cable for iPhone 13 13 Pro 12 11 X XS XR 8 Plus (Charger Not Included)', 'charger', 10, 'https://m.media-amazon.com/images/I/31FLZDygJsL._AC_UF480,480_SR480,480_.jpg', '2024-04-21 00:10:55'),
(119, 'Anker Special Edition 24K Gold USB C to Lightning Cable', 999.00, 'Anker Special Edition 24K Gold USB C to Lightning Cable,6 ft Powerline+ III,MFi Certified Lightning Cable for iPhones11 Pro / 11 Pro Max/12/13/14 pro max, Supports Power Delivery', 'charger', 10, 'https://m.media-amazon.com/images/I/41FcOHcyfgL._AC_UF480,480_SR480,480_.jpg', '2024-04-21 00:12:13'),
(120, 'Anker 533 Power Bank,Fast 25W Charging', 3967.00, 'Anker 533 Power Bank,Fast 25W Charging, fueling your battery up to 3 times faster than regular power banks,10,000mAh Battery Pack for iPhone 14 Series, Dell', 'charger', 10, 'https://images-eu.ssl-images-amazon.com/images/I/41pcHRsFjLL._AC_UL160_SR160,160_.jpg', '2024-04-21 00:14:25'),
(121, 'JOYROOM W030 20W Magnetic Wireless Power Bank with Ring Holder 6000mAh (Black)', 1355.00, 'JOYROOM W030 20W Magnetic Wireless Power Bank with Ring Holder 6000mAh (Black)', 'charger', 10, 'https://m.media-amazon.com/images/I/31goSeeKfcL._AC_UF480,480_SR480,480_.jpg', '2024-04-21 00:15:24'),
(122, 'Anker 60W 2 Port Gan Tech - USB-C PowerPort Atom PD 2 Wall Chargers', 1299.00, 'Anker 60W 2 Port Gan Tech - USB-C PowerPort Atom PD 2 Wall Chargers', 'charger', 10, 'https://m.media-amazon.com/images/I/31+HHMIjcSL._AC_UF480,480_SR480,480_.jpg', '2024-04-21 00:16:35'),
(123, 'USB C Charger, Anker 65W 4 Port PIQ 3.0 & GaN Fast Charger Adapter', 1999.00, 'USB C Charger, Anker 65W 4 Port PIQ 3.0 & GaN Fast Charger Adapter, PowerPort Atom III Slim Wall Charger with a 45W USB C Port, for MacBook, USB C Laptops, iPad Pro, iPhone, Galaxy, Pixel and More', 'charger', 10, 'https://m.media-amazon.com/images/I/318-q7RhHKL._AC_UF480,480_SR480,480_.jpg', '2024-04-21 00:17:47'),
(124, 'Anker USB C 40W, 521 Charger (Nano Pro), PIQ 3.0 Durable Compact Fast Charger', 990.00, 'Anker USB C 40W, 521 Charger (Nano Pro), PIQ 3.0 Durable Compact Fast Charger (Not Foldable) for iPhone 14 pro Max /13 Mini/13 Pro/13 Pro Max/12, Galaxy, Pixel 4/3, iPad/iPad Mini (Cable Not Included)', 'charger', 10, 'https://m.media-amazon.com/images/I/31MnERXxQkL._AC_UF480,480_SR480,480_.jpg', '2024-04-21 00:18:50'),
(125, 'Hoco N18 - Phenomenon Three Ports Fast Charger (GaN)', 1690.00, 'Hoco N18 - Phenomenon Three Ports Fast Charger (GaN), Set With Type-C To Type-C Cable (3A - 65W - 1M) Support PD 3.0/2.0, QC3.0/2.0, FCP, SCP, AFC, Compatible with iPhone Samsung Xiaomi Oppo - Black', 'charger', NULL, 'https://m.media-amazon.com/images/I/31vgcKKn5bL._AC_UF480,480_SR480,480_.jpg', '2024-04-21 00:19:53'),
(126, 'Anker USB C Charger 20W, 511, PIQ 3.0 Durable Compact Fast Charger', 599.00, 'Anker USB C Charger 20W, 511, PIQ 3.0 Durable Compact Fast Charger, Anker Nano for iPhone 13/13 Mini/13 Pro/13 Pro Max/12, Galaxy, Pixel 4/3, iPad/Mini (Cable Not Included)', 'charger', 10, 'https://m.media-amazon.com/images/I/21RLi3Ri9uS._AC_UF480,480_SR480,480_.jpg', '2024-04-21 00:21:22');

-- --------------------------------------------------------

--
-- Table structure for table `charger_images`
--

CREATE TABLE `charger_images` (
  `image_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `charger_images`
--

INSERT INTO `charger_images` (`image_id`, `product_id`, `image_url`) VALUES
(1, 111, 'https://m.media-amazon.com/images/I/51xKcUzlb5L._AC_SL1418_.jpg'),
(2, 111, 'https://m.media-amazon.com/images/I/613c80dRH1L._AC_SL1500_.jpg'),
(3, 112, 'https://m.media-amazon.com/images/I/71buPPYD6UL._AC_SL1500_.jpg'),
(4, 112, 'https://m.media-amazon.com/images/I/71g71Mpm7WL._AC_SL1500_.jpg'),
(5, 113, 'https://m.media-amazon.com/images/I/71xNPSnlKSL._AC_SL1500_.jpg'),
(6, 113, 'https://m.media-amazon.com/images/I/61wG1hVulqL._AC_SL1500_.jpg'),
(7, 114, 'https://m.media-amazon.com/images/I/61jq1oUTkQL._AC_SL1500_.jpg'),
(8, 114, 'https://m.media-amazon.com/images/I/61xptNm695L._AC_SL1500_.jpg'),
(9, 115, 'https://m.media-amazon.com/images/I/610i9eiq-5S._AC_SL1500_.jpg'),
(10, 115, 'https://m.media-amazon.com/images/I/615PdCw23oS._AC_SL1500_.jpg'),
(11, 117, 'https://m.media-amazon.com/images/I/61c8Zz15tiL._AC_SL1500_.jpg'),
(12, 117, 'https://m.media-amazon.com/images/I/71a5pX6nf-L._AC_SL1500_.jpg'),
(13, 118, 'https://m.media-amazon.com/images/I/71v0DVQbI5L._AC_SL1500_.jpg'),
(14, 118, 'https://m.media-amazon.com/images/I/61dzInxc3QL._AC_SL1500_.jpg'),
(15, 119, 'https://m.media-amazon.com/images/I/71lfPGPcGDL._SL1500_.jpg'),
(16, 119, 'https://m.media-amazon.com/images/I/71UMRhPKQsL._SL1500_.jpg'),
(17, 120, 'https://m.media-amazon.com/images/I/5154i6eyRHL._AC_SL1280_.jpg'),
(18, 120, 'https://m.media-amazon.com/images/I/61QDRVLSJzL._AC_SL1280_.jpg'),
(19, 121, 'https://m.media-amazon.com/images/I/31vpzivzcEL._AC_.jpg'),
(20, 121, 'https://m.media-amazon.com/images/I/31jGGgHUwUL._AC_.jpg'),
(21, 123, 'https://m.media-amazon.com/images/I/51BwRatD4NL._AC_SL1500_.jpg'),
(22, 123, 'https://m.media-amazon.com/images/I/71UX49ouhhL._AC_SL1500_.jpg'),
(23, 124, 'https://m.media-amazon.com/images/I/71o2Efwf0gL._AC_SL1500_.jpg'),
(24, 124, 'https://m.media-amazon.com/images/I/71EoY8dgq8L._AC_SL1500_.jpg'),
(25, 126, 'https://m.media-amazon.com/images/I/91gwNR4PIFS._AC_SL1500_.jpg'),
(26, 126, 'https://m.media-amazon.com/images/I/91p7UcBEOqS._AC_SL1500_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `headphones`
--

CREATE TABLE `headphones` (
  `product_id` int(11) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `stock` int(11) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `headphones`
--

INSERT INTO `headphones` (`product_id`, `NAME`, `price`, `description`, `category`, `stock`, `image_url`, `created_at`) VALUES
(1, 'Logitech H111 Over-the-Head, Stereo Headset, Black/Gray, Wired', 650.00, 'Microphone included : 1\r\nNoise Cancelling : 1\r\nBrand : Logitech', 'headphones', 22, 'https://m.media-amazon.com/images/I/61DiGp+t6bL._AC_SX679_.jpg', '2024-04-19 22:45:06'),
(2, 'Apple Airpods Pro', 1000.00, 'Up to 2x more Active Noise Cancellation. Transparency mode to hear the world around you. All-new Adaptive Audio intelligently tailors noise control to your environment. Spatial Audio takes immersion to a remarkably personal level. And a single charge delivers 6 hours of battery life.', 'headphones', 10, 'https://m.media-amazon.com/images/I/51I8DPFtIJL.__AC_SX300_SY300_QL70_ML2_.jpg', '2024-04-19 22:45:06'),
(3, 'Sony WF-1000XM5 The Best Truly Wireless Noise Cancelling Earbuds Black', 12000.00, 'The Best Noise-Canceling - Thanks to the new QN2e Noise Canceling Processor, Integrated Processor V2 and Dual FB Mic in which allows precise control of microphones, enables Realtime noise cancelling processing and improve low frequency cancellation performance.', 'headphones', 4, 'https://m.media-amazon.com/images/I/61MgPeUAfvL.__AC_SX300_SY300_QL70_ML2_.jpg', '2024-04-19 22:45:06'),
(4, 'Sony wi-c310 wireless earphones - blue, One Size', 2300.00, 'Brand: Sony\r\nColor: Blue\r\nitem package weight: 48.0', 'headphones', 14, 'https://m.media-amazon.com/images/I/51E6fje0hWL._AC_SX679_.jpg', '2024-04-19 22:45:06'),
(5, 'HP Gaming Headphones With Microphone, PS4 Gaming headset with mic', 450.00, 'ERGONOMIC DESIGN & LIGHTWEIGHT MATERIAL FOR ALL-DAY COMFORT. Using self-adjusting padding headband & all-cover ear cups with soft memory foam, HP gaming headset presents the ultra-comfortable wearing experience. The soft ear cups with bionic protein cushion coat covers your ears gently. Thanks to its lightweight flexible plastic material, HP gaming headset is only 12 OZ. You won\'t feel any discomfort from headband and ear cups even after a long gaming sessions', 'headphones', 40, 'https://m.media-amazon.com/images/I/813aIofea7L._AC_SX679_.jpg', '2024-04-19 22:45:06'),
(6, 'Onichan UwU:) version AXFEE Kids Headphones', 540.00, '🐱【CUTE & STYLISH】With lovely trendy and cat ear, cat paw design and cushioned earpads headband, these headphones let you lose yourself in audio book and your favorite songs. The LED will blink when using the earphones(Can turn off the LED light) Perfect birthday gifts for girls aged 3-16. They even fold up for easy traveling or store!', 'headphones', 60, 'https://m.media-amazon.com/images/I/61B3wYbMHZL._AC_SX679_.jpg', '2024-04-19 22:45:06'),
(7, 'Onikuma X25 Gradient Dynamic Light Headset', 800.00, 'Breathing gradient light effect, flowing light, passionate, game wear more dazzling along with the game\'s passionate dazzling, the free flow of light to defeat the atmosphere can not be less.\r\nCustom-tuned 50mm driver unit allows the sound with higher clarity and dive depth, capturing the subtle footsteps feel the shocking gunfire, so you can enjoy more games and music.', 'headphones', 17, 'https://m.media-amazon.com/images/I/61Zl2lt7GiL._AC_SX679_.jpg', '2024-04-19 22:45:06'),
(8, 'HUAWEI FreeBuds 5i Wireless Earbuds', 3100.00, 'Powerful Battery Life, Fast Charging】The earbuds can deliver up to 28 hours of music playback when used with the charging case, and play 4 hours of audio on a mere 15-minute charge, serving as your anytime listening companion.\r\nHi-Res Audio to Tickle your Ears】HUAWEI FreeBuds 5i is Hi-Res Audio Wireless certificated, featuring a wider frequency response, full-link high-resolution sound for HD audio sources, and multiple EQs to match with a wide range of different styles, for a tailor-made listening experience.', 'headphones', 8, 'https://m.media-amazon.com/images/I/71NlbTSqHbL.__AC_SX300_SY300_QL70_ML2_.jpg', '2024-04-19 22:45:06'),
(9, 'TGUS Small Wireless Gaming Headset, LED Light Up Cat Ear Shaped', 250.00, 'Cute Cat Ear with LED Lights: Bluetooth headphones features with a lovely cat ear design and fancy LED lights. The wireless headphone designed with unique color, perfect for kids and adults wearing.\r\nGood Gift: Perfect Christmas, Valentine\'s Day, Children\'s Day, Birthday gift for family and friends, suitable for office work, sport, school, traveling, etc.', 'headphones', 20, 'https://m.media-amazon.com/images/I/61ndsFakD6L._AC_SX679_.jpg', '2024-04-19 22:45:06'),
(10, 'JBL Tune 510BT: wireless', 2100.00, 'The Tune 510BT wireless headphones feature renowned JBL Pure Bass sound, which can be found in the most famous venues all around the world.', 'headphones', 11, 'https://m.media-amazon.com/images/I/61ZDwijKtxL._AC_SX679_.jpg', '2024-04-19 22:45:06'),
(11, 'Redragon h510 zeus wired gaming headset - 7.1 surround sound', 2300.00, 'Precisely Clear Audio - Enjoy the real clear and lossless sound quality with 7.1 Surround-Sound technology, creating a field of immersion wherever in game field, listening to alive concert or in a chat room. The 53mm drivers offer a wider frequency range, richer sound fields, higher definition and extreme fidelity sound.', 'headphones', 9, 'https://m.media-amazon.com/images/I/61pZ6-z6PvL._AC_SX679_.jpg', '2024-04-19 22:45:06'),
(12, 'Logitech G733 LIGHTSPEED Wireless Gaming Headset', 3000.00, 'TOTAL WIRELESS FREEDOM: Play for longer with up to 29 hours of battery life. LIGHTSPEED wireless audio transmission and a 20 m range gives you freedom to move. Play in stereo on PlayStation 4', 'headphones', 7, 'https://m.media-amazon.com/images/I/61nVtilrDcL._AC_SX679_.jpg', '2024-04-19 22:45:06'),
(13, 'Anker Life Q30 Hybrid Active Noise Cancelling Headphones', 4500.00, 'Ultimate Noise Cancellation Experience: Customize Life Q30’s noise cancellation with 3 modes—Transport minimizes airplane engine noise, Outdoor reduces traffic and wind, and Indoor dampens the sound of busy offices with people talking in the background. Audio code format: SBC, AAC', 'headphones', 11, 'https://m.media-amazon.com/images/I/61+WYAjltpL._AC_SX679_.jpg', '2024-04-19 22:45:06'),
(14, 'HyperX Cloud II Gaming Headset', 6000.00, 'USB audio sound card with 7.1 virtual surround sound\r\nEcho Cancelling via Inline Sound Card.Ambient noise attenuation:approx. 20 dBa', 'headphones', 5, 'https://m.media-amazon.com/images/I/71N-A1MJKJL._AC_SX679_.jpg', '2024-04-19 22:45:06'),
(15, 'HUAWEI Dual Speaker FreeBuds Pro 2', 6500.00, 'Dual-Speaker True soundLend your ears to HUAWEI FreeBuds Pro 2, and get lost in a rich cascade of sound, texture, and detail that far exceed your hearing range from 14 Hz to 48 kHz with luscious treble, surging bass, and everything between and beyond.\r\nPure VoiceHUAWEI FreeBuds Pro 2 never lets your surroundings get in the way of your calls, music, and movies, employing a bone conduction microphone, three additional microphones, and the Huawei-exclusive deep neural network (DNN) noise cancellation algorithm which has learned over 100 million voice samples to cancel out all manner of distraction, from noisy subway cars to windy conditions.\r\n', 'headphones', 8, 'https://m.media-amazon.com/images/I/61zLfuamUoL._AC_SX679_.jpg', '2024-04-19 22:45:06');

-- --------------------------------------------------------

--
-- Table structure for table `headphones_images`
--

CREATE TABLE `headphones_images` (
  `image_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `headphones_images`
--

INSERT INTO `headphones_images` (`image_id`, `product_id`, `image_url`) VALUES
(1, 1, 'https://m.media-amazon.com/images/I/61Za16r-YYL._AC_SL1280_.jpg'),
(2, 1, 'https://m.media-amazon.com/images/I/61676FXmgEL._AC_SL1500_.jpg'),
(3, 2, 'https://m.media-amazon.com/images/I/51emillNpWL._AC_SL1500_.jpg'),
(4, 2, 'https://m.media-amazon.com/images/I/61SUj2aKoEL._AC_SL1500_.jpg'),
(5, 3, 'https://m.media-amazon.com/images/I/61BbQ-2SsmL._AC_SL1500_.jpg'),
(6, 3, 'https://m.media-amazon.com/images/I/41-NEQer0-L._AC_SL1200_.jpg'),
(7, 5, 'https://m.media-amazon.com/images/I/81HISJn5X0L._AC_SL1500_.jpg'),
(8, 5, 'https://m.media-amazon.com/images/I/81-9rSWg4EL._AC_SL1500_.jpg'),
(9, 7, 'https://m.media-amazon.com/images/I/71M+49u57DL._AC_SL1500_.jpg'),
(10, 7, 'https://m.media-amazon.com/images/I/71VcY3RKfjL._AC_SL1500_.jpg'),
(11, 8, 'https://m.media-amazon.com/images/I/61KCToqi7QL._AC_SL1500_.jpg'),
(12, 8, 'https://m.media-amazon.com/images/I/61fpjRW52tL._AC_SL1500_.jpg'),
(13, 10, 'https://m.media-amazon.com/images/I/61CxqU7LcKL._AC_SL1500_.jpg'),
(14, 10, 'https://m.media-amazon.com/images/I/511yc+U128L._AC_SL1500_.jpg'),
(15, 11, 'https://www.redragonzone.com/cdn/shop/products/H510-3_450x450.png?v=1558317532'),
(16, 11, 'https://www.redragonzone.com/cdn/shop/products/H510-3_450x450.png?v=1558317532'),
(17, 11, 'https://www.redragonzone.com/cdn/shop/products/H510-2_450x450.png?v=1558317507'),
(18, 12, 'https://m.media-amazon.com/images/I/711HYFd3SKL._AC_SL1000_.jpg'),
(19, 12, 'https://m.media-amazon.com/images/I/81vc7aX5bYL._AC_SL1500_.jpg'),
(20, 13, 'https://m.media-amazon.com/images/I/71td6PxaFNL._AC_SL1500_.jpg'),
(21, 13, 'https://m.media-amazon.com/images/I/71crlVbO3SL._AC_SL1500_.jpg'),
(22, 14, 'https://m.media-amazon.com/images/I/51XRyBOxZSL._AC_SL1500_.jpg'),
(23, 14, 'https://m.media-amazon.com/images/I/71HMLSX0tBL._AC_SL1500_.jpg'),
(24, 15, 'https://m.media-amazon.com/images/I/61GJVj9PAqL._AC_SL1500_.jpg'),
(25, 15, 'https://m.media-amazon.com/images/I/718kj9NiR2L._AC_SL1500_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_details`
--

CREATE TABLE `invoice_details` (
  `inv_header` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` double NOT NULL,
  `category` varchar(10) NOT NULL,
  `color` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `invoice_details`
--

INSERT INTO `invoice_details` (`inv_header`, `product_id`, `qty`, `total`, `category`, `color`) VALUES
(25, 3, 1, 43000, 'Phones', 'Red'),
(26, 9, 2, 147900, 'Phones', 'Red'),
(27, 7, 1, 23000, 'Phones', 'Red'),
(28, 1, 3, 168000, 'Phones', 'Red'),
(28, 5, 4, 175800, 'Phones', 'Red'),
(29, 6, 3, 77997, 'Phones', 'Red'),
(29, 6, 1, 540, 'headphones', 'Red'),
(29, 118, 1, 955, 'charger', 'Red'),
(30, 6, 1, 25999, 'Phones', 'Red'),
(31, 1, 1, 56000, 'Phones', 'Red'),
(31, 3, 1, 12000, 'headphones', 'Red'),
(31, 5, 1, 450, 'headphones', 'Red'),
(32, 2, 1, 1000, 'headphones', 'Red'),
(32, 7, 1, 800, 'headphones', 'Red'),
(33, 2, 1, 1000, 'headphones', 'Red'),
(33, 5, 1, 450, 'headphones', 'Red'),
(33, 8, 1, 3100, 'headphones', 'Red'),
(36, 1, 1, 650, 'headphones', 'Red'),
(36, 2, 1, 1000, 'headphones', 'Red'),
(36, 3, 1, 12000, 'headphones', 'Red'),
(36, 4, 1, 2300, 'headphones', 'Red'),
(36, 5, 1, 450, 'headphones', 'Red'),
(36, 6, 1, 540, 'headphones', 'Red'),
(36, 7, 1, 800, 'headphones', 'Red'),
(36, 8, 1, 3100, 'headphones', 'Red'),
(36, 10, 1, 2100, 'headphones', 'Red'),
(37, 1, 1, 650, 'headphones', 'Red'),
(37, 2, 1, 1000, 'headphones', 'Red'),
(38, 2, 4, 4000, 'headphones', 'Purple'),
(39, 3, 1, 43000, 'Phones', 'Red'),
(40, 2, 1, 72333, 'Phones', 'Red'),
(41, 8, 1, 17900, 'Phones', 'Red'),
(42, 117, 1, 5900, 'charger', 'Red'),
(43, 2, 1, 1000, 'headphones', 'Red'),
(44, 2, 3, 216999, 'Phones', 'Red'),
(44, 11, 1, 41850, 'Phones', 'Red'),
(45, 6, 7, 181993, 'Phones', 'Red'),
(45, 1, 1, 650, 'headphones', 'Red'),
(46, 13, 1, 37999, 'Phones', 'Red'),
(46, 125, 1, 1690, 'charger', 'Red'),
(46, 2, 1, 1000, 'headphones', 'Red'),
(47, 6, 1, 25999, 'Phones', 'Red'),
(47, 2, 1, 1000, 'headphones', 'Red'),
(47, 118, 1, 955, 'charger', 'Red'),
(48, 3, 3, 129000, 'Phones', 'Midnight');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_header`
--

CREATE TABLE `invoice_header` (
  `id` int(11) NOT NULL,
  `ddate` date NOT NULL,
  `customer_id` int(11) NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `invoice_header`
--

INSERT INTO `invoice_header` (`id`, `ddate`, `customer_id`, `total`) VALUES
(22, '2024-04-28', 0, 0),
(23, '2024-04-28', 0, 0),
(24, '2024-04-28', 0, 0),
(25, '2024-04-28', 4, 0),
(26, '2024-04-28', 4, 0),
(27, '2024-04-28', 4, 24150),
(28, '2024-04-28', 4, 360990),
(29, '2024-04-28', 4, 83466.6),
(30, '2024-04-28', 4, 27298.95),
(31, '2024-05-03', 4, 71872.5),
(32, '2024-05-03', 4, 1890),
(33, '2024-05-03', 4, 4777.5),
(36, '2024-05-03', 4, 24087),
(37, '2024-05-05', 6, 1732.5),
(38, '2024-05-05', 36, 4200),
(39, '2024-05-10', 37, 45150),
(40, '2024-05-13', 37, 75949.65),
(41, '2024-05-13', 37, 18795),
(42, '2024-05-13', 37, 6195),
(43, '2024-05-13', 37, 1050),
(44, '2024-05-13', 37, 271791.45),
(45, '2024-05-13', 37, 191775.15),
(46, '2024-05-14', 37, 42723.45),
(47, '2024-05-14', 37, 29351.7),
(48, '2024-05-18', 37, 135450);

-- --------------------------------------------------------

--
-- Table structure for table `mobiles`
--

CREATE TABLE `mobiles` (
  `product_id` int(11) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mobiles`
--

INSERT INTO `mobiles` (`product_id`, `NAME`, `price`, `description`, `category`, `stock`, `image_url`, `created_at`) VALUES
(1, 'SAMSUNG Galaxy S24 Ultra', 56000.00, 'AI Features: Search like never before, get real-time interpretation on a call, format your notes into a clear summary and effortlessly edit your photos - all from your smartphone, all with AI.\r\nArmor up with titanium: With a durable shield of titanium built right into the frame and better scratch resistance with Corning IP68 water and dust resistant Galaxy S24 Ultra is ready for adventure.\r\nBuilt-in S Pen writes a new chapter: The legacy of Galaxy Note is alive and well. Write, tap and navigate with precision your fingers wish they had on the new, flat display.\r\n200MP. Details that rival reality: Capture stunning details with the most megapixels on a smartphone and AI processing. The enhanced ProVisual Engine recognizes objects — improving color tone, reducing noise and bringing out detail.\r\nAll-day battery to play on and on: With massive capacity and greater energy efficiency, Ultra\'s battery gives you extra life when it matters most — you know, like the epic boss battle you\'ve been gearing up for.', 'Phones', 50, 'https://m.media-amazon.com/images/I/719HV2e6-sL._AC_SL1500_.jpg', '2024-04-19 22:45:06'),
(2, 'Apple iPhone 15 Pro Max (256 GB) - Natural Titanium', 72333.00, 'FORGED IN TITANIUM — iPhone 15 Pro Max has a strong and light aerospace-grade titanium design with a textured matt-glass back. It also features a super-tough Ceramic Shield front. And it’s splash, water and dust resistant.\r\nADVANCED DISPLAY — The 6.7 Super Retina XDR display2 with ProMotion ramps up refresh rates to 120Hz when you need exceptional graphics performance. Dynamic Island bubbles up alerts and Live Activities. Plus, with Always-On display, your Lock Screen stays glanceable, so you don’t have to tap it to stay in the know.', 'Phones', 10, 'https://m.media-amazon.com/images/I/717trh2j6CL._AC_SL1500_.jpg', '2024-04-19 22:45:06'),
(3, 'OnePlus 12 5G', 43000.00, 'OnePlus 12 5G BLACK', 'Phones', 50, 'https://m.media-amazon.com/images/I/71jvbxyQ2TL.__AC_SX300_SY300_QL70_ML2_.jpg', '2024-04-19 22:45:06'),
(4, 'Google Pixel 8 Pro - Unlocked Android Smartphone with Telephoto Lens', 43950.00, 'Pixel 8 Pro is the all-pro phone engineered by Google; it’s super fast, powerful, and secure, with the new Google Tensor G3 chip that’s custom-designed with Google AI for cutting-edge photo and video features and smarter ways to help[1]\r\nUnlocked Android 5G phone gives you the flexibility to change carriers and choose your own data plan[2]; it works with Google Fi, Verizon, T-Mobile, AT&T, and other major carriers\r\nWith the most refined design yet, Pixel 8 Pro has an immersive, 6.7-inch Super Actua display that makes everything sharp[3]; the refresh rate intelligently adjusts between 1 and 120Hz for responsive performance[4]\r\nGoogle Pixel 8 Pro has four updated pro-level cameras with Pixel’s best zoom ever[1]; Pro controls unlock advanced settings and support full-resolution photos[5]\r\nThe Pixel 8 Pro camera gives you amazing video quality; it records sharp, smooth videos, even in dimly lit places; and Audio Magic Eraser uses Google AI to reduce distracting noises, like cars and wind[6]', 'Phones', 50, 'https://m.media-amazon.com/images/I/71fFrxnB5yL._AC_SL1500_.jpg', '2024-04-19 22:45:06'),
(5, 'Samsung Galaxy S23 FE 5G Dual SIM Android Smartphone, 8GB RAM, 256GB ROM - Mint', 43950.00, 'Brand: Samsung\r\nCellular technology: 5G\r\nModel name: Galaxy S23 FE\r\nOperating system: Android', 'Phones', 50, 'https://m.media-amazon.com/images/I/617l83eY1rL._AC_SL1500_.jpg', '2024-04-19 22:45:06'),
(6, 'Oneplus 9 128/8 Global Rom Purple', 25999.00, 'Brand Name:ONEPLUS\r\nModel Name:Oneplus 9\r\nWireless Provider:T-Mobile\r\nOperating System:Android 11.0\r\nCellular Technology:4G\r\nMemory Storage Capacity:8 GB\r\nConnectivity Technology:Bluetooth\r\nColor:Gray\r\nScreen Size:6.55 Feet\r\nWireless Network:Technology', 'Phones', 50, 'https://m.media-amazon.com/images/I/51YFXBFEwgS._AC_SL1040_.jpg', '2024-04-19 22:45:06'),
(7, 'Nothing 8GB RAM + 256GB, Glyph Interface, 50 MP Dual Camera, OS, 120Hz OLED Display, Black', 23000.00, 'Brand Name: Nothing\r\nWireless Provider: Unlocked\r\nOperating System: Android 12.0\r\nCellular Technology: 5G\r\nMemory Storage Capacity: 256 GB\r\nConnectivity Technology: Bluetooth, Wi-Fi, USB, NFC\r\nColor: Black\r\nScreen Size: 6.55\r\nWireless Network Technology: UMTS, GSM, LTE\r\nRAM Memory Installed:8 GB', 'Phones', 50, 'https://m.media-amazon.com/images/I/71C01wo9xRL._AC_SL1306_.jpg', '2024-04-19 22:45:06'),
(8, 'HONOR X9a Smartphone 5G, 8GB+256GB, 6,67” Curved AMOLED 120Hz Display', 17900.00, '【120Hz AMOLED Curved Display】Boasting a 6.67-inch AMOLED curved display, coupled with ultra-slim bezels from an 93% screen-to-body ratio, the HONOR X9a guarantees an immersive viewing experience. It also features a screen refresh rate of 120Hz and smoother graphics performance\r\n【Slim Body with 5100mAh Battery】With a 5100mAh long battery life, 7.9mm thickness and 175g weight, the HONOR X9a boasts the thinnest and lightest smartphone among those with a battery capacity greater than 5000mAh. The high-speed 40W HONOR SuperCharge allows 12.5 hours of video streaming with 30 minutes of charge\r\n【64MP Triple Rear Camera】The HONOR X9a comes with a 64MP ultra-clear main camera, a 5MP wide angle camera, and a 2MP macro camera, perfect for users to capture every precious life moment', 'Phones', 50, 'https://m.media-amazon.com/images/I/61G+SDU-0TL._AC_SL1500_.jpg', '2024-04-19 22:45:06'),
(9, 'Apple iPad Pro 12.9\" (2022-6rd Gen), Wiâ€‘Fi + Cellular, 256 GB, Space Gray,Grey', 73950.00, '- UNLOCK AND PAY WITH FACE ID — Unlock your iPad Pro, securely authenticate purchases, sign in to apps, and more — all with just a glance.\r\n- LEGAL DISCLAIMERS — This is a summary of the main product features.', 'Phones', 50, 'https://m.media-amazon.com/images/I/81WWJj1RedL._AC_SL1500_.jpg', '2024-04-19 22:45:06'),
(10, 'Apple 2022 10.9-inch iPad Air (Wi-Fi, 256GB) - Blue (5th Generation)', 43950.00, '10.9-inch Liquid Retina display with True Tone, P3 wide color, and an antireflective coating\r\nApple M1 chip with Neural Engine\r\n12MP Wide camera\r\n12MP Ultra Wide front camera with Center Stage\r\nUp to 256GB of storage', 'Phones', 50, 'https://m.media-amazon.com/images/I/61TiUs61P6L._AC_SL1500_.jpg', '2024-04-19 22:45:06'),
(11, 'Google Pixel Tablet (Wi-Fi + Bluetooth) with Charging Speaker Dock - 128GB Storage + 8GB RAM Android OS (Hazel)', 41850.00, '10.95\" display, LCD, 2560 x 1600 resolution\r\nGoogle Tensor G2, Titan M2 security coprocessor\r\nBuilt-in 27 watt-hour battery, Up to 12 hours of video streaming', 'Phones', 50, 'https://m.media-amazon.com/images/I/61uWZR6UvJL._AC_SL1500_.jpg', '2024-04-19 22:45:06'),
(12, 'RedMagic 9 Pro Dual Sim 12GB RAM 256GB 5G Sleet', 43750.00, 'Chipset Qualcomm SM8650-AB Snapdragon 8 Gen 3 (4 nm)\r\nBrand: Redmagic\r\nCellular technology: 5G\r\nModel name: Redmagic 9 pro\r\nOperating system: Android 13.0', 'Phones', 50, 'https://m.media-amazon.com/images/I/414oWoukYNL._AC_.jpg', '2024-04-19 22:45:06'),
(13, 'Apple iPhone 13 with FaceTime - 128GB, 4GB RAM, 4G LTE, Sierra Blue, Single SIM & E-SIM', 37999.00, '6.1-inch Super Retina XDR display\r\nMobile Phone Type: Mobile Phone\r\nAdvanced dual-camera system with 12MP Wide and Ultra Wide cameras; Photographic Styles, Smart HDR 4, Night mode, 4K Dolby Vision HDR recording\r\n12MP TrueDepth front camera with Night mode, 4K Dolby Vision HDR recording\r\nA15 Bionic chip for lightning-fast performance', 'Phones', 50, 'https://m.media-amazon.com/images/I/61RCRdEvQlL._AC_SL1500_.jpg', '2024-04-19 22:45:06'),
(14, 'Oppo Find X5 PRO 5G Dual 256GB 12GB RAM Black, Bluetooth, USB', 19584.00, 'Brand Name: Oppo\r\nModel Name: Oppo Find\r\nWireless Provider: Unlocked for All Carriers\r\nOperating System: Android 10.0\r\nCellular Technology: 5G\r\nMemory Storage Capacity: 12 GB', 'Phones', 50, 'https://m.media-amazon.com/images/I/91SqLMOJxML._AC_SL1500_.jpg', '2024-04-19 22:45:06'),
(15, 'Xiaomi POCO X6 5G (White 12GB RAM, 256GB ROM) - Vivid 120Hz AMOLED 1.5K display | 64MP large camera sensor', 17400.00, 'Vivid 120Hz AMOLED 1.5K display\r\n64MP large camera sensor with OIS Ultra-wide and macro lenses\r\n67W turbo charging\r\nSDM7435 Advanced process', 'Phones', 50, 'https://m.media-amazon.com/images/I/51bJhUioSwL._AC_SL1000_.jpg', '2024-04-19 22:45:06'),
(16, 'Huawei Nova 10 Pro 8GB Ram, 256GB - 4500MAh - Starry Silver', 28191.00, 'Brand: Huawei\r\nCamera description: Rear\r\nCellular technology: 4G\r\nDisplay type: Oled\r\nForm factor: Bar\r\nModel name: Nova 10 Pro\r\nOperating system: Harmonyos 2.0', 'Phones', 50, 'https://m.media-amazon.com/images/I/61qOrifFC5L._AC_SL1000_.jpg', '2024-04-19 22:45:06');

-- --------------------------------------------------------

--
-- Table structure for table `mobile_images`
--

CREATE TABLE `mobile_images` (
  `image_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mobile_images`
--

INSERT INTO `mobile_images` (`image_id`, `product_id`, `image_url`) VALUES
(1, 1, 'https://m.media-amazon.com/images/I/71ZizBBjvBL._AC_SL1500_.jpg'),
(2, 1, 'https://m.media-amazon.com/images/I/71+u4NUZsFL._AC_SL1500_.jpg'),
(3, 1, 'https://m.media-amazon.com/images/I/71xefLMjjaL._AC_SL1500_.jpg'),
(4, 2, 'https://m.media-amazon.com/images/I/61jZHez5u8L._AC_SL1500_.jpg'),
(6, 2, 'https://m.media-amazon.com/images/I/51uI0jVfu0L._AC_SL1500_.jpg'),
(7, 3, 'https://m.media-amazon.com/images/I/41is2-Tl-JL._AC_.jpg'),
(8, 3, 'https://m.media-amazon.com/images/I/51Yui+D9NfL._AC_SX679_.jpg'),
(9, 4, 'https://m.media-amazon.com/images/I/41SGL1+uzqL._AC_SL1200_.jpg'),
(10, 4, 'https://m.media-amazon.com/images/I/712oSYbUWHL._AC_SL1500_.jpg'),
(11, 5, 'https://m.media-amazon.com/images/I/610x1tT76IL._AC_SL1500_.jpg'),
(12, 5, 'https://m.media-amazon.com/images/I/71Lv32ogyOL._AC_SL1500_.jpg'),
(13, 6, 'https://m.media-amazon.com/images/I/51G36mujA2S._AC_SL1280_.jpg'),
(14, 6, 'https://m.media-amazon.com/images/I/51owv5d0bbS._AC_SL1440_.jpg'),
(15, 7, 'https://m.media-amazon.com/images/I/51iSu9-57WL._AC_SL1500_.jpg'),
(16, 7, 'https://m.media-amazon.com/images/I/7192zo7IvbL._AC_SL1500_.jpg'),
(17, 8, 'https://m.media-amazon.com/images/I/61HrVmgbb3L._AC_SL1500_.jpg'),
(18, 8, 'https://m.media-amazon.com/images/I/411n6DGfkRL._AC_SL1000_.jpg'),
(19, 9, 'https://m.media-amazon.com/images/I/71brAk7Sc2L._AC_SL1500_.jpg'),
(20, 9, 'https://m.media-amazon.com/images/I/71G1K2KhguL._AC_SL1500_.jpg'),
(21, 10, 'https://m.media-amazon.com/images/I/61TvoRroe7L._AC_SL1500_.jpg'),
(22, 10, 'https://m.media-amazon.com/images/I/81LQf6dnnkL._AC_SL1500_.jpg'),
(23, 11, 'https://m.media-amazon.com/images/I/51SJrO2A-kL._AC_.jpg'),
(24, 11, 'https://m.media-amazon.com/images/I/61pRmPyKDbL._AC_SL1500_.jpg'),
(25, 13, 'https://m.media-amazon.com/images/I/51lebd1ml5L._AC_SL1500_.jpg'),
(26, 13, 'https://m.media-amazon.com/images/I/511UvxzW8iL._AC_SL1500_.jpg'),
(27, 14, 'https://m.media-amazon.com/images/I/71NlFvA0hlL._AC_SL1500_.jpg'),
(28, 14, 'https://m.media-amazon.com/images/I/71ckVc2b4SL._AC_SL1500_.jpg'),
(29, 15, 'https://m.media-amazon.com/images/I/71UPRUQomtL._AC_SL1500_.jpg'),
(30, 15, 'https://m.media-amazon.com/images/I/41SYs7UdWLL._AC_SL1500_.jpg'),
(31, 16, 'https://m.media-amazon.com/images/I/414No25TH3L._AC_SL1000_.jpg'),
(32, 16, 'https://m.media-amazon.com/images/I/316oksw-BAL._AC_SL1000_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `email`, `password`, `created_at`) VALUES
(1, 'Ali', 'Alimohamed2004@gmail.com', '1234', '2024-04-27 17:49:55'),
(2, 'Mohamed', 'Mohamed@gmail.com', 'Anaba3sha2ak', '2024-04-27 17:49:55'),
(3, 'ali mohamed', 'Alimohamed2004@gmail.com', 'a', '2024-04-27 17:49:55'),
(4, 'alo', 'q@s', 'a', '2024-04-27 17:49:55'),
(5, 'Mo_salah', '1@gmail.com', 'sassaasdasdasdasdasA1', '2024-04-27 17:49:55'),
(6, 'sadhsiudh', 'dsahdkashd@g.com', 'sadasdsadasbdA1', '2024-04-27 17:49:55'),
(7, 'hbshbsha', 'a@gmail.com', 'asasasasAaaas11', '2024-04-27 17:49:55'),
(8, 'hbshbshaaaa', 'a@gmail.com', 'asasasasasAa123', '2024-04-27 17:49:55'),
(9, 'hbshbshaqqqqq', 'a@gmail.com', 'aasasasasAA111fff', '2024-04-27 17:49:55'),
(10, 'hbshbshaqqqqqaaaa', 'a@gmail.com', 'sasmaksmakmsamskasmAAA111', '2024-04-27 17:49:55'),
(11, 'sasdasdsadasd', 's@gmail.com', 'adsdasdasdAAA1122', '2024-04-27 17:49:55'),
(12, 'sasdasdsadasdd', 's@yahoo.com', 'Anaba3sha2ak', '2024-04-27 17:49:55'),
(13, 'sasdasdsadasdds', 's@hotmail.com', 'sasjansjansajansjasAA11', '2024-04-27 17:49:55'),
(14, 'Ahmed', 'Alimohamed2004@gmail.com', '1234ABCDabcd', '2024-04-27 17:49:55'),
(15, 'fofa', 'fmohamed173@gmail.com', 'Whatpassword13', '2024-04-27 17:49:55'),
(16, 'hamza', 'h@gmail.com', 'Hamza1234', '2024-04-27 21:33:09'),
(17, 'hamza2', 'h@gmail.com', 'Hamza1234', '2024-04-27 21:35:19'),
(18, 'hamza3', 'h@gmail.com', 'Hamza1234', '2024-04-27 21:36:47'),
(19, 'hamza4', 'h@gmail.com', 'Hamza1234', '2024-04-27 22:16:16'),
(20, 'hamza5', 'h@gmail.com', 'Hamza1234', '2024-04-27 22:50:03'),
(21, 'hamza6', 'h@gmail.com', 'Hamza1234', '2024-04-27 22:51:42'),
(22, 'hamza7', 'a@gmail.com', 'Hamza1234', '2024-04-27 22:52:20'),
(23, 'hamza8', 'h@gmail.com', 'Hamza1234', '2024-04-27 22:52:56'),
(24, 'hamza9', 'h@gmail.com', 'Hamza1234', '2024-04-27 22:59:02'),
(25, 'fahmy', 'f@gmail.com', 'Fahmy1234', '2024-04-27 23:23:23'),
(26, 'fahmy2', 'f@gmail.com', 'Fahmy1234', '2024-04-27 23:23:53'),
(27, 'fahmy3', 'f@gmail.com', 'Fahmy1234', '2024-04-27 23:25:01'),
(28, 'tamer', 't@gmail.com', 'Tamer1234', '2024-04-28 16:03:59'),
(29, 'tamer2', 't@gmail.com', 'Tamer1234', '2024-04-28 16:04:25'),
(30, 'jam2', 'j@gmail.com', 'Jam123456', '2024-04-28 17:19:16'),
(31, '', '', '', '2024-04-28 17:19:16'),
(32, 'jam3', 'j@gmail.com', 'Jam123456', '2024-04-28 17:23:53'),
(33, '', '', '', '2024-04-28 17:23:53'),
(34, 'jam4', 'j@gmail.com', 'Jam123456', '2024-04-28 18:34:16'),
(35, 'gamed', 'g@gmail.com', 'bebdf79a9a26fd8597a79c7a92ac88a5', '2024-05-02 23:39:23'),
(36, 'AhmedAhmed1', 'AhmedAhmed1@gmail.com', '92c546f9a43093bffad46439b2e82905', '2024-05-05 13:18:30'),
(37, 'user3', 'user3@gmail.com', '7d4a14f25b1bb402aa4fee1c1d2e4894', '2024-05-10 13:49:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chargers`
--
ALTER TABLE `chargers`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `charger_images`
--
ALTER TABLE `charger_images`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `product_id_2` (`product_id`);

--
-- Indexes for table `headphones`
--
ALTER TABLE `headphones`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `headphones_images`
--
ALTER TABLE `headphones_images`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `product_id_2` (`product_id`);

--
-- Indexes for table `invoice_header`
--
ALTER TABLE `invoice_header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobiles`
--
ALTER TABLE `mobiles`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `mobile_images`
--
ALTER TABLE `mobile_images`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chargers`
--
ALTER TABLE `chargers`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `headphones`
--
ALTER TABLE `headphones`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `headphones_images`
--
ALTER TABLE `headphones_images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `invoice_header`
--
ALTER TABLE `invoice_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `mobiles`
--
ALTER TABLE `mobiles`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `mobile_images`
--
ALTER TABLE `mobile_images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `charger_images`
--
ALTER TABLE `charger_images`
  ADD CONSTRAINT `charger_images_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `chargers` (`product_id`);

--
-- Constraints for table `headphones_images`
--
ALTER TABLE `headphones_images`
  ADD CONSTRAINT `headphone_images_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `headphones` (`product_id`);

--
-- Constraints for table `mobile_images`
--
ALTER TABLE `mobile_images`
  ADD CONSTRAINT `mobile_images_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `mobiles` (`product_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
