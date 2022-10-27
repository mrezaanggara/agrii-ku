-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2022 at 10:43 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agriiku`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `content` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `content`) VALUES
(1, '<ul><li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam vel tenetur voluptatibus eaque quis, quia impedit deserunt ex quae enim et magnam, id aliquid? Nisi eos dolorem repudiandae quasi voluptatum.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam vel tenetur voluptatibus eaque quis, quia impedit deserunt ex quae enim et magnam, id aliquid? Nisi eos dolorem repudiandae quasi voluptatum.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam vel tenetur voluptatibus eaque quis, quia impedit deserunt ex quae enim et magnam, id aliquid? Nisi eos dolorem repudiandae quasi voluptatum.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam vel tenetur voluptatibus eaque quis, quia impedit deserunt ex quae enim et magnam, id aliquid? Nisi eos dolorem repudiandae quasi voluptatum.</li></ul><figure class=\"image image-style-side\"><img src=\"http://localhost/agrii-ku/assets/vendor/ckfinder/userfiles/images/__thumbs/hiya.jpg/hiya__480x291.jpg\"></figure><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam vel tenetur voluptatibus eaque quis, quia impedit deserunt ex quae enim et magnam, id aliquid? Nisi eos dolorem repudiandae quasi voluptatum.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam vel tenetur voluptatibus eaque quis, quia impedit deserunt ex quae enim et magnam, id aliquid? Nisi eos dolorem repudiandae quasi voluptatum.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam vel tenetur voluptatibus eaque quis, quia impedit deserunt ex quae enim et magnam, id aliquid? Nisi eos dolorem repudiandae quasi voluptatum.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam vel tenetur voluptatibus eaque quis, quia impedit deserunt ex quae enim et magnam, id aliquid? Nisi eos dolorem repudiandae quasi voluptatum.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam vel tenetur voluptatibus eaque quis, quia impedit deserunt ex quae enim et magnam, id aliquid? Nisi eos dolorem repudiandae quasi voluptatum.</p><ul><li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam vel tenetur voluptatibus eaque quis, quia impedit deserunt ex quae enim et magnam, id aliquid? Nisi eos dolorem repudiandae quasi voluptatum.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam vel tenetur voluptatibus eaque quis, quia impedit deserunt ex quae enim et magnam, id aliquid? Nisi eos dolorem repudiandae quasi voluptatum.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam vel tenetur voluptatibus eaque quis, quia impedit deserunt ex quae enim et magnam, id aliquid? Nisi eos dolorem repudiandae quasi voluptatum.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam vel tenetur voluptatibus eaque quis, quia impedit deserunt ex quae enim et magnam, id aliquid? Nisi eos dolorem repudiandae quasi voluptatum.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam vel tenetur voluptatibus eaque quis, quia impedit deserunt ex quae enim et magnam, id aliquid? Nisi eos dolorem repudiandae quasi voluptatum.</li></ul><figure class=\"media\"><oembed url=\"https://www.youtube.com/watch?v=7cQB1-FZz5w&amp;ab_channel=RifqiAdyafie\"></oembed></figure><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam vel tenetur voluptatibus eaque quis, quia impedit deserunt ex quae enim et magnam, id aliquid? Nisi eos dolorem repudiandae quasi voluptatum.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam vel tenetur voluptatibus eaque quis, quia impedit deserunt ex quae enim et magnam, id aliquid? Nisi eos dolorem repudiandae quasi voluptatum.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam vel tenetur voluptatibus eaque quis, quia impedit deserunt ex quae enim et magnam, id aliquid? Nisi eos dolorem repudiandae quasi voluptatum.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(10) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `kategori` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `title`, `content`, `kategori`, `created_at`) VALUES
(1, 'coba artikel update', '<figure class=\"media\"><oembed url=\"https://www.youtube.com/watch?v=F-6BB17zA2M&amp;ab_channel=RezaAnggara\"></oembed></figure><p>dwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwad</p><p>dadadadadadadadada</p><p><img src=\"http://localhost/agrii-ku/assets/vendor/ckfinder/userfiles/images/__thumbs/hiya.jpg/hiya__480x291.jpg\"></p><p>dwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'coba,pilihan,artikel', '2022-10-19 10:11:02'),
(2, 'coba artikel', '<p>dwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwad<img src=\"http://localhost/agrii-ku/assets/vendor/ckfinder/userfiles/images/__thumbs/hiya.jpg/hiya__480x291.jpg\">dwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'coba,pilihan,artikel', '2022-10-19 10:11:17'),
(3, 'coba artikel update', '<p>dwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwad<img src=\"http://localhost/agrii-ku/assets/vendor/ckfinder/userfiles/images/__thumbs/hiya.jpg/hiya__480x291.jpg\">dwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'coba,pilihan,artikel', '2022-10-19 10:11:02'),
(4, 'coba artikel', '<p>dwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwad<img src=\"http://localhost/agrii-ku/assets/vendor/ckfinder/userfiles/images/__thumbs/hiya.jpg/hiya__480x291.jpg\">dwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'coba,pilihan,artikel', '2022-10-19 10:11:17'),
(5, 'coba artikel update', '<p>dwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwad<img src=\"http://localhost/agrii-ku/assets/vendor/ckfinder/userfiles/images/__thumbs/hiya.jpg/hiya__480x291.jpg\">dwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'coba,pilihan,artikel', '2022-10-19 10:11:02'),
(6, 'coba artikel', '<p>dwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwad<img src=\"http://localhost/agrii-ku/assets/vendor/ckfinder/userfiles/images/__thumbs/hiya.jpg/hiya__480x291.jpg\">dwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'coba,pilihan,artikel', '2022-10-19 10:11:17'),
(7, 'coba artikel update', '<p>dwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwad<img src=\"http://localhost/agrii-ku/assets/vendor/ckfinder/userfiles/images/__thumbs/hiya.jpg/hiya__480x291.jpg\">dwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'coba,pilihan,artikel', '2022-10-19 10:11:02'),
(8, 'coba artikel', '<p>dwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwad<img src=\"http://localhost/agrii-ku/assets/vendor/ckfinder/userfiles/images/__thumbs/hiya.jpg/hiya__480x291.jpg\">dwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'coba,pilihan,artikel', '2022-10-19 10:11:17'),
(9, 'coba artikel update', '<p>dwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwad<img src=\"http://localhost/agrii-ku/assets/vendor/ckfinder/userfiles/images/__thumbs/hiya.jpg/hiya__480x291.jpg\">dwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'coba,pilihan,artikel', '2022-10-19 10:11:02'),
(10, 'coba artikel', '<p>dwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwad<img src=\"http://localhost/agrii-ku/assets/vendor/ckfinder/userfiles/images/__thumbs/hiya.jpg/hiya__480x291.jpg\">dwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'coba,pilihan,artikel', '2022-10-19 10:11:17'),
(11, 'coba artikel update', '<p>dwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwad<img src=\"http://localhost/agrii-ku/assets/vendor/ckfinder/userfiles/images/__thumbs/hiya.jpg/hiya__480x291.jpg\">dwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'coba,pilihan,artikel', '2022-10-19 10:11:02'),
(12, 'coba artikel', '<p>dwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwad<img src=\"http://localhost/agrii-ku/assets/vendor/ckfinder/userfiles/images/__thumbs/hiya.jpg/hiya__480x291.jpg\">dwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'coba,pilihan,artikel', '2022-10-19 10:11:17'),
(13, 'coba artikel update', '<p>dwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwad<img src=\"http://localhost/agrii-ku/assets/vendor/ckfinder/userfiles/images/__thumbs/hiya.jpg/hiya__480x291.jpg\">dwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'coba,pilihan,artikel', '2022-10-19 10:11:02'),
(14, 'coba artikel', '<p>dwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwad<img src=\"http://localhost/agrii-ku/assets/vendor/ckfinder/userfiles/images/__thumbs/hiya.jpg/hiya__480x291.jpg\">dwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'coba,pilihan,artikel', '2022-10-19 10:11:17'),
(15, 'coba artikel update', '<p>dwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwad<img src=\"http://localhost/agrii-ku/assets/vendor/ckfinder/userfiles/images/__thumbs/hiya.jpg/hiya__480x291.jpg\">dwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'coba,pilihan,artikel', '2022-10-19 10:11:02'),
(16, 'coba artikel', '<p>dwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwad<img src=\"http://localhost/agrii-ku/assets/vendor/ckfinder/userfiles/images/__thumbs/hiya.jpg/hiya__480x291.jpg\">dwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'coba,pilihan,artikel', '2022-10-19 10:11:17');

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `id` int(11) NOT NULL,
  `carousel` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`id`, `carousel`, `created_at`) VALUES
(10, '1.png', '2022-10-17 14:46:03'),
(11, '2.png', '2022-10-17 14:46:03'),
(12, '3.png', '2022-10-17 14:46:03');

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id` int(10) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `main_gambar` int(1) NOT NULL,
  `id_produk` int(10) DEFAULT NULL,
  `id_artikel` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id`, `gambar`, `main_gambar`, `id_produk`, `id_artikel`) VALUES
(2, '48045.jpg', 1, 1, NULL),
(3, '50053.jpg', 1, 2, NULL),
(4, '1412-small.jpg', 1, 3, NULL),
(5, '48045.jpg', 1, 4, NULL),
(6, '50053.jpg', 1, 5, NULL),
(7, '1412-small.jpg', 1, 6, NULL),
(8, '48045.jpg', 1, 7, NULL),
(9, '50053.jpg', 1, 8, NULL),
(10, '1412-small.jpg', 1, 9, NULL),
(11, '48045.jpg', 1, 10, NULL),
(12, '50053.jpg', 1, 11, NULL),
(13, '1412-small.jpg', 1, 12, NULL),
(14, '1412-small.jpg', 1, 13, NULL),
(15, '48045.jpg', 1, 14, NULL),
(16, '50053.jpg', 1, 15, NULL),
(17, '1412-small.jpg', 1, 16, NULL),
(18, 'broccoli1.png', 1, 17, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id` int(11) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `status` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id`, `jenis`, `status`) VALUES
(1, 'Buah-buahan', 1),
(2, 'Sayuran', 1),
(7, 'Biji-bijian', 1),
(8, 'Ubi-ubian', 1),
(9, 'Daging', 1),
(10, 'Telur', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(10) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`, `status`) VALUES
(1, 'Mentah', 1),
(2, 'Olahan', 1),
(3, 'Cemilan', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mitra`
--

CREATE TABLE `mitra` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gambar` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(10) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `harga` int(10) NOT NULL,
  `kategori` int(10) NOT NULL,
  `jenis` int(10) NOT NULL,
  `stok` int(10) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `berat` int(10) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `video` varchar(100) NOT NULL,
  `panjang` int(10) NOT NULL,
  `lebar` int(10) NOT NULL,
  `tinggi` int(10) NOT NULL,
  `visitor` int(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `harga`, `kategori`, `jenis`, `stok`, `status`, `berat`, `deskripsi`, `video`, `panjang`, `lebar`, `tinggi`, `visitor`, `created_at`, `updated_at`) VALUES
(1, 'Apel hijau', 20000, 1, 1, 243, 1, 1000, 'apel merah hasil panen', 'ns8qP-JW7R4', 10, 10, 10, 45, '2022-08-10 00:00:00', '2022-10-19 17:18:06'),
(2, 'Apel hijau', 20000, 1, 1, 100, 0, 1000, 'apel merah hasil panen', 'ns8qP-JW7R4', 10, 10, 10, 10, '2022-08-10 00:00:00', '2022-10-19 17:18:20'),
(3, 'jeruk', 20000, 1, 1, 54, 0, 1000, 'apel merah hasil panen', 'ns8qP-JW7R4', 10, 10, 10, 9, '2022-08-10 00:00:00', '2022-10-19 17:18:34'),
(4, 'strawberry', 20000, 1, 1, 0, 0, 1000, 'apel merah hasil panen', 'ns8qP-JW7R4', 10, 10, 10, 3, '2022-09-14 00:00:00', '2022-10-17 14:34:40'),
(5, 'cilok', 20000, 1, 1, 0, 0, 1000, 'apel merah hasil panen', 'ns8qP-JW7R4', 10, 10, 10, 2, '2022-09-06 00:00:00', '2022-10-17 14:34:40'),
(6, 'anggur merah', 20000, 1, 1, 0, 0, 1000, 'apel merah hasil panen', 'ns8qP-JW7R4', 10, 10, 10, 0, '2022-09-29 00:00:00', '2022-10-17 14:34:40'),
(7, 'anggur hijau', 20000, 1, 1, 0, 0, 1000, 'apel merah hasil panen', 'ns8qP-JW7R4', 10, 10, 10, 0, '2022-10-17 00:00:00', '2022-10-17 14:34:40'),
(8, 'peer', 20000, 1, 1, 0, 0, 1000, 'apel merah hasil panen', 'ns8qP-JW7R4', 10, 10, 10, 4, '2022-10-17 00:00:00', '2022-10-17 14:34:40'),
(9, 'melon', 20000, 1, 1, 0, 0, 1000, 'apel merah hasil panen', 'ns8qP-JW7R4', 10, 10, 10, 0, '2022-10-17 00:00:00', '2022-10-17 14:34:40'),
(10, 'jeruk bali', 20000, 1, 1, 0, 0, 1000, 'apel merah hasil panen', 'ns8qP-JW7R4', 10, 10, 10, 0, '2022-10-17 00:00:00', '2022-10-17 14:34:40'),
(11, 'telur', 20000, 1, 1, 0, 0, 1000, 'apel merah hasil panen', 'ns8qP-JW7R4', 10, 10, 10, 2, '2022-10-17 00:00:00', '2022-10-17 14:34:40'),
(12, 'cabai', 20000, 1, 1, 0, 0, 1000, 'apel merah hasil panen', 'ns8qP-JW7R4', 10, 10, 10, 0, '2022-10-17 00:00:00', '2022-10-17 14:34:40'),
(13, 'melon', 20000, 1, 1, 0, 0, 1000, 'apel merah hasil panen', 'ns8qP-JW7R4', 10, 10, 10, 0, '2022-10-17 00:00:00', '2022-10-17 14:34:40'),
(14, 'mangga', 20000, 1, 1, 0, 0, 1000, 'apel merah hasil panen', 'ns8qP-JW7R4', 10, 10, 10, 0, '2022-10-17 00:00:00', '2022-10-17 14:34:40'),
(15, 'pisang muli', 20000, 1, 1, 0, 0, 1000, 'apel merah hasil panen', 'ns8qP-JW7R4', 10, 10, 10, 0, '2022-10-17 00:00:00', '2022-10-17 14:34:40'),
(16, 'Apel Merah', 20000, 1, 1, 0, 0, 1000, 'apel merah hasil panen', 'ns8qP-JW7R4', 10, 10, 10, 0, '2022-10-17 00:00:00', '2022-10-17 14:34:40'),
(17, 'produk terbaru', 22222, 1, 2, 4, 1, 100, 'coba isi produk', 'ns8qP-JW7R4', 12, 1, 1, 44, '2022-10-19 21:24:29', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id` int(10) NOT NULL,
  `ip_address` text NOT NULL,
  `time` date NOT NULL,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sosmed`
--

CREATE TABLE `sosmed` (
  `id` int(1) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sosmed`
--

INSERT INTO `sosmed` (`id`, `nama`, `jenis`) VALUES
(1, 'https://agb.fp.unila.ac.id/', 'Official Website'),
(2, 'agribisnis_fp_unila', 'Instagram'),
(4, 'Agribisnis FP UNILA', 'Facebook');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama`, `role`, `created_at`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'administrator', 'superadmin', '2022-10-04'),
(3, 'anggaaa', '1fd5cd9766249f170035b7251e2c6b61', 'Muhammad Reza Anggara', 'admin', '2022-10-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produk` (`id_produk`),
  ADD KEY `artikel` (`id_artikel`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori` (`kategori`),
  ADD KEY `jenis` (`jenis`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sosmed`
--
ALTER TABLE `sosmed`
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
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mitra`
--
ALTER TABLE `mitra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sosmed`
--
ALTER TABLE `sosmed`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gambar`
--
ALTER TABLE `gambar`
  ADD CONSTRAINT `artikel` FOREIGN KEY (`id_artikel`) REFERENCES `artikel` (`id`),
  ADD CONSTRAINT `produk` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `jenis` FOREIGN KEY (`jenis`) REFERENCES `kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kategori` FOREIGN KEY (`kategori`) REFERENCES `jenis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
