-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2022 at 03:27 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ugvpfzpvwk`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`user_name`, `password`) VALUES
('1111', '1111'),
('qwerty', 'qwerty'),
('sggr', 'sgdrwg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `image_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `title`, `image_name`) VALUES
(2, 'Rings', 'Food_Category_60.jpg'),
(4, 'Bracelets', 'Food_Category_792.jpg'),
(5, 'Earings', 'Food_Category_581.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `ware` varchar(10) NOT NULL,
  `total_price` decimal(10,0) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `ware`, `total_price`, `name`, `email`) VALUES
(9, '22', '200', 'ewefwrg', 'edf@ewffew'),
(10, '22', '50', 'efwef', 'ewfg@sefef'),
(11, '22', '100', 'dsfsd', 'serggr@sergrg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `second_name` varchar(20) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `user_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `second_name`, `phone_number`, `user_email`) VALUES
(26, 'segredh', 'dfgerdg', '4364567u', 'sdrgdfh@sdgstrsgr'),
(27, 'Ivan', 'Ivanenko', '6666666', '666@egffg'),
(28, 'Jenjok', 'Halo', '32535756', 'privit@mail'),
(29, 'Степан', 'Григоренко', '23423432', 'rgerg@grgre'),
(30, 'Славік', 'Дубенко', '658838568', 'grsg@sdgfsdg'),
(31, '', '', '', 'sfewf@efdef'),
(32, 'dfhgfhfth', 'sefesfewffe', '3451636546', 'sdgarsd@argasgr');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ware`
--

CREATE TABLE `tbl_ware` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(20) NOT NULL,
  `description` text NOT NULL DEFAULT '\' \'',
  `price` decimal(10,0) NOT NULL,
  `reached` int(5) NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ware`
--

INSERT INTO `tbl_ware` (`id`, `title`, `description`, `price`, `reached`, `image_name`, `status`) VALUES
(22, 'dfhdfhdrh', 'dftrjjyjtyjfyrtffthfth', '20000', 475, '', 'Unchecked'),
(23, 'Benzyn', 'Hochu kupyty benzyny', '2500', 375, 'Request-1962.jfif', 'Unchecked'),
(24, 'Borch', 'Hochy zvaryty 50 litriv borshchy dliya ludeii', '1500', 375, 'Request-2602.jfif', 'Unchecked'),
(25, 'Нове взуття', 'Не маю в чому ходити', '1000', 385, 'Request-8790.jpg', 'Unchecked'),
(26, 'Треба купити картопл', 'Випускники закладів загальної середньої освіти, а також учні (слухачі, студенти) закладів професійної (професійно-технічної), вищої освіти, які у 2022 році здобудуть повну загальну середню освіту, можуть вибрати історію України для проходження державної підсумкової атестації у формі зовнішнього незалежного оцінювання. Зміст сертифікаційної роботи з історії України визначено Програмою зовнішнього незалежного оцінювання з історії України, затвердженою Міністерством освіти і науки України. Програму розроблено на основі чинних навчальних програм з історії України для закладів загальної середньої освіти.', '3000', 375, '', 'Unchecked'),
(27, 'hello', 'ergjbkrgyue grbgbveruwipgbngvipner ogitwguionrhntrgpne wbnWGNtrnviuenu 0erbgiuerjgep nguorejgernguiernioetmhoiehirth', '3000', 0, '', 'Unchecked');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`user_name`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- Indexes for table `tbl_ware`
--
ALTER TABLE `tbl_ware`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tbl_ware`
--
ALTER TABLE `tbl_ware`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
