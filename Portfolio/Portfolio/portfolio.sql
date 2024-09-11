-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 03, 2024 at 12:08 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE `educations` (
  `id` int NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `year` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `ration` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(200) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `educations`
--

INSERT INTO `educations` (`id`, `title`, `year`, `ration`, `status`) VALUES
(14, 'Junior School Certificate', '2018', '100', 'active'),
(15, 'Secondary School Certificate ', '2020', '100', 'active'),
(16, 'Diploma in Computer Science Engineering', '2024', '100', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id` int NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id`, `name`, `email`, `body`) VALUES
(1, 'tumie', 'anik558363@gamil.com', 'Voluptatibus vero mo'),
(2, 'anik', 'anik558363@gamil.com', 'valo'),
(3, 'nahid', 'anik558363@gamil.com', 'anik sende'),
(4, 'nahid', 'anik558363@gamil.com', 'anik sende'),
(5, 'nahid', 'anik558363@gamil.com', 'anik sende'),
(6, 'nahid', 'anik558363@gamil.com', 'anik sende'),
(7, 'anik', 'anik558363@gmail.com', 'valoo'),
(8, 'Daniel Wolf', 'anik558363@gmail.com', 'Consequat Irure dol'),
(9, 'joy', 'anik558363@gmail.com', 'Repellendus Sit la'),
(10, 'Hillary Caldwell', 'anik558363@gmail.com', 'Libero eu quia volup'),
(11, 'Silas Rivers', 'anik558363@gmail.com', 'Minima provident di'),
(12, 'Silas Rivers', 'anik558363@gmail.com', 'Minima provident di'),
(13, 'Erica Carpenter', 'anik558363@gamil.com', 'Officia vitae illo l'),
(14, 'Jin Cantu', 'munna.cit.bd@gmail.com', 'Occaecat iure omnis '),
(15, 'Lareina Washington', 'tuqykip@mailinator.com', 'Earum voluptas fugia'),
(16, 'Fatima Estes', 'riqady@mailinator.com', 'Hic tempor tenetur t'),
(17, 'Jocelyn Little', 'kaledeqy@mailinator.com', 'Deleniti quidem adip'),
(18, 'Rooney Cantrell', 'pyzaxy@mailinator.com', 'Vero ipsa reiciendi'),
(19, 'Madison Miller', 'vavequxy@mailinator.com', 'Ut qui qui quod repe'),
(20, 'Linda Clay', 'vekeju@mailinator.com', 'Excepturi sint natu'),
(21, 'Linda Clay', 'vekeju@mailinator.com', 'Excepturi sint natu'),
(22, 'Linda Clay', 'vekeju@mailinator.com', 'Excepturi sint natu'),
(23, 'Linda Clay', 'vekeju@mailinator.com', 'Excepturi sint natu'),
(24, 'Linda Clay', 'vekeju@mailinator.com', 'Excepturi sint natu'),
(25, 'Linda Clay', 'vekeju@mailinator.com', 'Excepturi sint natu'),
(26, 'Violet Short', 'anik558363@gmail.com', 'Accusantium ut dolorsadsa'),
(27, 'Murphy Carver', 'kymyrazega@mailinator.com', 'Error eveniet omnis'),
(28, 'MacKenzie Buck', 'anik558363@gmail.com', 'Ratione Nam exercita'),
(29, 'Jin Gaines', 'cuveli@mailinator.com', 'Dicta vel saepe haru');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `icon` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(200) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `title`, `description`, `icon`, `status`) VALUES
(6, 'FEATURE ITEM', '223', ' fa fa-award', 'active'),
(7, 'ACTIVE PRODUCTS', '248', ' fa fa-thumbs-up', 'active'),
(8, 'YEAR EXPERIENCE', '39', ' fa fa-briefcase-medical', 'active'),
(9, 'OUR CLIENTS', '245', ' fa fa-address-book-o', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `facebook` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `github` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `linkedin` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `whatsapp` varchar(200) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `user_id`, `facebook`, `github`, `linkedin`, `whatsapp`) VALUES
(1, 30, 'https://www.facebook.com/profile.php?id=61550480083100', 'https://github.com/anikmondol', 'https://www.linkedin.com/in/anik-mondal-93710130a/', ''),
(2, 30, '', '', '', ''),
(3, 30, '', '', '', ''),
(4, 30, '', '', '', ''),
(5, 30, '', '', '', ''),
(6, 30, '', '', '', ''),
(7, 30, '', '', '', ''),
(8, 30, '', '', '', ''),
(9, 30, '', '', '', ''),
(10, 30, '', '', '', ''),
(11, 30, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `subtitle` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `live` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(200) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `title`, `subtitle`, `description`, `live`, `image`, `status`) VALUES
(40, 'Explore Travel', 'Travel Planning Tools', 'Discover the world with ease and elegance. At Explore Travel, we curate exceptional journeys to the globes most captivating destinations.Our trip was nothing short of spectacular. Explore Travel curated an experience that was both luxurious and authentic, making it a vacation we’ll never forget.', 'https://explore-travel-mu.vercel.app/', '30-Rem dolor qui dignis-01-09-2024.png', 'active'),
(41, 'Hockey’s Club', 'Professional Hockeys Club', 'Beyond the game, our club is committed to building a strong community. We value the support of our fans, families, and local businesses, and strive to give back through outreach programs and charity events', 'https://anikmondol.github.io/Hockey-s-Club-with-tailwind-and-daisy-m-15-/#slide2', '30-Possimus quasi culp-01-09-2024.png', 'active'),
(46, 'Legal Solutions', 'The Legal Practice Area', 'Legal Solutions represent a rapidly evolving industry that leverages technology to enhance the efficiency, accuracy, and accessibility of legal services. Whether through case management, legal research, e-discovery, or client communication tools, these solutions are essential for modern legal practice, helping law firms, corporate legal departments, and government agencies navigate the complexities of the legal landscape', 'https://anik558363.github.io/Legal-Solution/', '30-Consequatur ipsum -01-09-2024.png', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `icon` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `icon`, `status`) VALUES
(65, 'Backend Development', 'Web development encompasses designing, coding, and maintaining websites, integrating various technologies to create dynamic online experiences.', ' fa fa-code', 'active'),
(66, 'Frontend Development', 'Frontend development focuses on creating user interfaces and experiences using HTML, CSS, and JavaScript technologies.', ' fa fa-computer', 'active'),
(67, 'Responsive Design', 'Responsive design ensures websites adapt seamlessly to various screen sizes and devices for optimal user experience.', ' fa fa-mobile-screen', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `subtitle` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(200) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `title`, `subtitle`, `description`, `image`, `status`) VALUES
(15, 'Matleb Hossain Shishir', 'Head Of Department (SIMT)', 'Working with Anik Mondal was an absolute pleasure. Their expertise in Laravel development is unmatched, and they delivered beyond our expectations.', '30-Rerum voluptas labor-01-09-2024.jpg', 'active'),
(16, 'Fahim Hossain Munna', 'PHP & Laravel Developer (CIT)', 'Choosing him for our Laravel project was the best decision we made. Their professionalism and technical prowess are truly impressive..', '30-Molestiae excepteur -01-09-2024.png', 'active'),
(19, 'Foysal Mahmud', 'Founder & Managing Director (DataFlex ) ', 'We are grateful to have Anik Mondal on our team. Their expertise in Laravel development & teaching has been instrumental in the success of our projects.', '30-Quasi occaecat provi-01-09-2024.jpg', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'default.webp',
  `email` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(200) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `image`, `email`, `password`, `status`) VALUES
(30, 'Anik', '30-nahid-25-08-2024.jpg', 'anikmondol558363@gmail.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', 'active'),
(31, 'pyvykyhide', 'default.webp', 'gyhodyrigo@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', 'deactive'),
(32, 'walarexa', 'default.webp', 'hepo@mailinator.com', 'ac748cb38ff28d1ea98458b16695739d7e90f22d', 'deactive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `educations`
--
ALTER TABLE `educations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT for table `educations`
--
ALTER TABLE `educations`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
