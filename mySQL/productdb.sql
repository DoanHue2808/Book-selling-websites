-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2024 at 12:27 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `productdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `producttb`
--

CREATE TABLE `producttb` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  `detail` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `producttb`
--

INSERT INTO `producttb` (`id`, `product_name`, `product_price`, `product_image`, `detail`) VALUES
(1, 'Trưởng thành là khi nỗi buồn cũng có deadline', 70000, './images/Book1.jpg', 'details/details01.php'),
(2, 'Người tối giản hành trình về số 0', 63200, './images/Book2.jpg', 'details/details02.php'),
(3, 'Giá trị của sự tử tế', 97000, './images/Book3.jpg', 'details/details03.php'),
(4, 'Tối giản tâm trí', 82000, './images/Book4.jpg', 'details/details04.php'),
(5, 'Dám bị ghét', 89000, './images/Book5.jpg', 'details/details05.php'),
(6, 'Buổi sáng diệu kỳ', 95000, './images/Book6.jpg', 'details/details06.php'),
(7, 'Phong thái của bậc thầy thuyết phục', 74000, './images/Book7.jpg', 'details/details07.php'),
(8, 'Bạn chỉ tưởng mình đang rất cố gắng', 110000, './images/Book8.jpg', 'details/details08.php'),
(9, 'Trời sinh vụng về hãy bù đắp bằng sự kiên trì', 98000, './images/Book9.jpg', 'details/details09.php'),
(10, 'Bạn chỉ cần sống tốt trời xanh tự an bài', 69500, './images/Book10.jpg', 'details/details10.php'),
(11, 'Sức mạnh của ngôn từ', 73440, './images/Book11.jpg', 'details/details11.php'),
(12, 'Cà phê cùng Tony', 75600, './images/Book12.jpg', 'details/details12.php'),
(13, 'Mỗi lần vấp ngã là một lần trưởng thành', 78000, './images/Book13.jpg', 'details/details13.php'),
(14, 'Ít đi để được lại nhiều hơn', 103500, './images/Book14.jpg', 'details/details14.php'),
(15, 'Bạn đang nghịch gì với đời mình', 93000, './images/Book15.jpg', 'details/details15.php'),
(16, 'Sức mạnh của sự khích lệ', 61200, './images/car16.jpg', 'details/details16.php'),
(17, 'Trên đường băng', 73500, './images/Book17.jpg', 'details/details17.php'),
(18, 'Chưa kịp lớn đã phải trưởng thành', 51350, './images/Book18.jpg', 'details/details18.php'),
(19, 'Bạn đắt giá bao nhiêu', 77350, './images/Book19.jpg', 'details/details19.php'),
(20, 'Bí mật của phụ nữ khí chất', 241200, './images/Book20.jpg', 'details/details20.php'),
(21, 'Càng kỷ luật càng tự do', 76300, './images/Book21.jpg', 'details/details21.php'),
(22, 'Dẫu bình thường bạn vẫn là \"phiên bản giới hạn\"', 61620, './images/Book22.jpg', 'details/details22.php'),
(23, 'Vị thần của những quyết định', 119000, './images/Book23.jpg', 'details/details23.php'),
(24, 'Đừng chạy theo số đông', 130000, './images/Book24.jpg', 'details/details24.php'),
(25, 'Báo cáo', 50000, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `producttb`
--
ALTER TABLE `producttb`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `producttb`
--
ALTER TABLE `producttb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
