-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2022 at 09:38 AM
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
(1, '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam vel tenetur voluptatibus eaque quis, quia impedit deserunt ex quae enim et magnam, id aliquid? Nisi eos dolorem repudiandae quasi voluptatum.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam vel tenetur voluptatibus eaque quis, quia impedit deserunt ex quae enim et magnam, id aliquid? Nisi eos dolorem repudiandae quasi voluptatum.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam vel tenetur voluptatibus eaque quis, quia impedit deserunt ex quae enim et magnam, id aliquid? Nisi eos dolorem repudiandae quasi voluptatum.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam vel tenetur voluptatibus eaque quis, quia impedit deserunt ex quae enim et magnam, id aliquid? Nisi eos dolorem repudiandae quasi voluptatum.</p><p><img class=\"image_resized\" style=\"width:20%;\" src=\"data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD//gA7Q1JFQVRPUjogZ2QtanBlZyB2MS4wICh1c2luZyBJSkcgSlBFRyB2NjIpLCBxdWFsaXR5ID0gNzUK/9sAQwAIBgYHBgUIBwcHCQkICgwUDQwLCwwZEhMPFB0aHx4dGhwcICQuJyAiLCMcHCg3KSwwMTQ0NB8nOT04MjwuMzQy/9sAQwEJCQkMCwwYDQ0YMiEcITIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIy/8AAEQgAPwBkAwEiAAIRAQMRAf/EAB8AAAEFAQEBAQEBAAAAAAAAAAABAgMEBQYHCAkKC//EALUQAAIBAwMCBAMFBQQEAAABfQECAwAEEQUSITFBBhNRYQcicRQygZGhCCNCscEVUtHwJDNicoIJChYXGBkaJSYnKCkqNDU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6g4SFhoeIiYqSk5SVlpeYmZqio6Slpqeoqaqys7S1tre4ubrCw8TFxsfIycrS09TV1tfY2drh4uPk5ebn6Onq8fLz9PX29/j5+v/EAB8BAAMBAQEBAQEBAQEAAAAAAAABAgMEBQYHCAkKC//EALURAAIBAgQEAwQHBQQEAAECdwABAgMRBAUhMQYSQVEHYXETIjKBCBRCkaGxwQkjM1LwFWJy0QoWJDThJfEXGBkaJicoKSo1Njc4OTpDREVGR0hJSlNUVVZXWFlaY2RlZmdoaWpzdHV2d3h5eoKDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uLj5OXm5+jp6vLz9PX29/j5+v/aAAwDAQACEQMRAD8A9/ooooA53xl4x03wVobajfsGdjst4AwUzPjpnsO5PYepwD5e/wC0dbRnB8Pof92/3fyjrz742+MD4m8bSWVvLu0/S8wRYPDP/G35jGfRRXmlAHu97+0ZqMkubDTdPgj/ALs4klP5gr/KqUn7RXiED5bLSWz/AHYJf6yV4rXQaLobarNMmmvNLJHGd5mt0CKrDbkkucdeMAnuORQlcG7as7C4+OnjOaQyJqnkKTwkdpCQP++lJ/Wq03xq8cTRMg1uTDDBxbQofwITNc6miWyKwkzIx4yMqB9B/jVK70z7MqbN21gTlhx1Pfvx/npnWrRnSipS6mVKtCrJxj0NN/iD4sdix8R6yCey38oH6Gqt54u8Q6jCYbzW9TuIv7k15I6/kTisgxOAWCtgHBOOhp1tbTXt1Da28ZkmmkWONB1ZmOAPqTWFzex9G/s76ZdweGNS1SaWTyL24CwxE/L8gIZxz1JOD/uV7LWV4Z0SHw54a07R4MFbSBYywULvb+JsDuTk/jWrVEhRRRQAVxnxO8Wt4S8ITS2u5tTvD9lso05cyMPvAdTtHPGecDvXZ18t/FbxS3irx3LbWs8L2WnrLaW0RIczSbcSFV2sNxzhWwOQpByOADyd9zMXfOWOcnvXUeG/BF34gtVvBdQRW29kODucED+6OByR1IOOcYxnIuIr1rNY2t1jhgjE7YVQxUkIpc9T/CAD0ySB8xJ7H4dapFZ2d/DFEhvHIkYvk70HQDnGQSeuPvDr2acVrLYmSk17u5Zi+HFjGgD3U8sqnDlCFX1xjBI4I71sR266R5FpbuYGIxEitg4GT+Pc5PfPrUljf3ccl3cP8jTODsuAG6ADICYAyOPXgVlQyzvrM2ozwQoxbepkRs44AUYk4GATz6/gLWLhC3Kl5mLwlWbfM35eo2fSJXlLBFXJ6DgVnatAsFutu0SmZiIFC7Xy25ueeO+PfH411U2twLbOzJGMKSXVunB7YNedajq02oTqsEhSJSMAHhfx6k5yf/1VGLxf1hKENlqysFhJUHKdTd6IsQW0GDbtb7rhdxaRuFXPQHOScYPQE8jntXb/AAi8JrqXxHivJI4vI0qEXUqopKiVsiNfm5z1cEZ+6PrXIRXiToZyu8+WGeVvu5Udl7ADgccgdfX6C+C2hy6b4GTU7sZvdXkN3IzckIeIxu5JG0bhk8bjXJRu5andVaS0PRqKKK6jnCiiigDjviZ4pk8LeDp5bPc2p3jC0so4wS5lfjIA5yBkj3wO9fI+ppFbxxx/2bcQySLu8+63K8mGZWYDoBuVlPXlcZyDn0T4weKB4o8XS2yvu0/TSYbcA4DN/G+QeckYB6YArzqa2jlYMxfIAGdxPAGB19gKAMw1e0jUZ9Nv454CxbOGUfxg9R/nvimNaR9mYH3q6fD+o2mkW+ty2U406eVoYbkoQjuvJAP4H6lSOxwmrqzGnZ3R3Jv3ZRzyefTiopr+ONf3sqxn/abH864N5SjFXDBlOCCMEH0qMzL61y/VF3Oj6y+x19zd2s64e5hKc/KXBHPB/Os9jZjOxrZR6DaK50yg9xUkRt2x5ssifOoOyMNhOdx+8ORxgd8nkY5tYe3Ul1r9DptG0xvEOt6d4es3A+3TrE3lsDsjzudh24UE4719jW8EVrbRW8CLHFEgREUABVAwAAOgxXz3+zt4bFxqmpeJJ0BW2X7Lbk4Pzty5x1BA2jPH3iPWvoitYRUVZGUpOTCiiirJCiiigDzyb4TaD9pkaHTrcQt0V55+OR/t/XgHv2HB5C7+B8spmaF1hYzTMGZvNXy/MbywFOG4TbnLEk5r3Kip5R3Pm/UfgpqUQMlu8cgGAzTqYFJ9sFuPqAfasSX4YeJ9OlaawSVgR8z2s/l49R84U8flzxmvqumSRRy48yNXx03DOKLPuF0fG194E1+K4YyWN5Lvbd5kURnDZ5zvQkH6561iTaDfxXhtHiZZ/MMYidGD7um3bjOfavtyfTLK4RkltkdGXayEfKR7joaqy+H7KQKAZIwjBk8tguwjpjjkexyD3o94ND4ln0fULaUxz2kkTg42yrsP5Ng1Va2nUnML8dflNfak/hQ3UN/DeXSXUNwV2pJDk7VYNsYsWUgkY4VcZyMEA1zMPwq07S9at9RsbCA+VgBTK7FD/fAY4JHUdxjI5xRzPqgsS+BNKl8KeD9O01GMcyx75xwf3rct7HBOAfQCui/tS+BB87PtsHP6VIdBuDHIEuFWQqQjOuQGxwSoIyM9sjPqKkXw4si4ur2Yh7fypYrcCJCx6up5kQ9QMPwD6jNZqMmVdER1u9P3Yoj9EJ/rUseuXT7VXT/Mbvtkx+mKvW+j2NsMLC0mJWlUzyNMVY5BKlydvBIwMAA4HFXQAAAAAB0Aq1GXcV12GQymaMOY3jz/AAuMGipKKsk//9k=\"></p><ul><li><img class=\"image_resized\" style=\"width:27.25%;\"></li></ul><figure class=\"media\"><oembed url=\"https://www.youtube.com/watch?v=8jY2-zTWbpU&amp;ab_channel=gafnaraja\"></oembed></figure><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam vel tenetur voluptatibus eaque quis, quia impedit deserunt ex quae enim et magnam, id aliquid? Nisi eos dolorem repudiandae quasi voluptatum.Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam vel tenetur voluptatibus eaque quis, quia impedit deserunt ex quae enim et magnam, id aliquid? Nisi eos dolorem repudiandae quasi vol</p>');

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
(1, 'coba artikel update', '<figure class=\"media\"><oembed url=\"https://www.youtube.com/watch?v=F-6BB17zA2M&amp;ab_channel=RezaAnggara\"></oembed></figure><p>dwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwad</p><p>dadadadadadadadada</p><p><img class=\"image_resized\" style=\"width:20.97%;\" src=\"http://localhost/agrii-ku/assets/vendor/ckfinder/userfiles/images/__thumbs/hiya.jpg/hiya__480x291.jpg\"></p><p>dwadwaddddddddddddddddddd', 'coba,pilihan,artikel', '2022-10-19 10:11:02'),
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
(16, 'coba artikel', '<p>dwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwad<img src=\"http://localhost/agrii-ku/assets/vendor/ckfinder/userfiles/images/__thumbs/hiya.jpg/hiya__480x291.jpg\">dwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddadwaddwadwadddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'coba,pilihan,artikel', '2022-10-19 10:11:17'),
(17, 'Artikel baru', '<figure class=\"image\"><img src=\"http://localhost/agrii-ku/assets/vendor/ckfinder/userfiles/files/50053.jpg\"></figure><p>doakdwoadoa</p><figure class=\"media\"><oembed url=\"https://www.youtube.com/watch?v=KlkMy8g870A&amp;ab_channel=OTSBadmintonChannel\"></oembed></figure>', 'penelitian', '2022-11-14 16:37:02');

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
(11, '2.png', '2022-10-17 14:46:03'),
(12, '3.png', '2022-10-17 14:46:03'),
(13, '1.png', '2022-11-24 16:14:52');

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
(3, '50053.jpg', 1, 2, NULL),
(4, '1412-small.jpg', 1, 3, NULL),
(6, '50053.jpg', 1, 5, NULL),
(7, '1412-small.jpg', 1, 6, NULL),
(9, '50053.jpg', 1, 8, NULL),
(10, '1412-small.jpg', 1, 9, NULL),
(12, '50053.jpg', 1, 11, NULL),
(13, '1412-small.jpg', 1, 12, NULL),
(14, '1412-small.jpg', 1, 13, NULL),
(16, '50053.jpg', 1, 15, NULL),
(17, '1412-small.jpg', 1, 16, NULL),
(18, 'broccoli1.png', 1, 17, NULL),
(19, '11271.jpg', 1, 4, NULL),
(20, '48045.jpg', 1, 7, NULL),
(21, '500531.jpg', 1, 10, NULL),
(22, '500531.jpg', 1, 14, NULL),
(23, '50053.jpg', 1, 1, NULL),
(24, '11257.jpg', 0, 1, NULL),
(25, '112711.jpg', 1, 1, NULL),
(26, 'broccoli2.png', 1, 18, NULL);

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
(10, 'Telur', 1),
(11, 'coba', 0);

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
(3, 'Cemilan', 1),
(4, 'seblak', 1),
(5, 'Baru', 0),
(6, 'coba', 0),
(7, 'coba', 0),
(8, 'coba', 0);

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
  `jenis` int(10) NOT NULL,
  `kategori` int(10) NOT NULL,
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

INSERT INTO `produk` (`id`, `nama`, `harga`, `jenis`, `kategori`, `stok`, `status`, `berat`, `deskripsi`, `video`, `panjang`, `lebar`, `tinggi`, `visitor`, `created_at`, `updated_at`) VALUES
(1, 'Apel hijau', 20000, 1, 1, 245, 1, 1000, 'apel merah hasil panen', 'ns8qP-JW7R4', 10, 10, 10, 267, '2022-08-10 00:00:00', '2022-11-14 16:30:41'),
(2, 'Apel hijau', 20000, 1, 1, 100, 0, 1000, 'apel merah hasil panen', 'ns8qP-JW7R4', 10, 10, 10, 15, '2022-08-10 00:00:00', '2022-10-19 17:18:20'),
(3, 'jeruk', 20000, 1, 1, 54, 0, 1000, 'apel merah hasil panen', 'ns8qP-JW7R4', 10, 10, 10, 15, '2022-08-10 00:00:00', '2022-10-19 17:18:34'),
(4, 'strawberry', 20000, 1, 1, 0, 0, 1000, 'apel merah hasil panen', 'ns8qP-JW7R4', 10, 10, 10, 27, '2022-09-14 00:00:00', '2022-10-17 14:34:40'),
(5, 'cilok', 20000, 1, 1, 0, 0, 1000, 'apel merah hasil panen', 'ns8qP-JW7R4', 10, 10, 10, 2, '2022-09-06 00:00:00', '2022-10-17 14:34:40'),
(6, 'anggur merah', 20000, 1, 1, 0, 0, 1000, 'apel merah hasil panen', 'ns8qP-JW7R4', 10, 10, 10, 0, '2022-09-29 00:00:00', '2022-10-17 14:34:40'),
(7, 'anggur hijau', 20000, 1, 1, 0, 0, 1000, 'apel merah hasil panen', 'ns8qP-JW7R4', 10, 10, 10, 1, '2022-10-17 00:00:00', '2022-10-17 14:34:40'),
(8, 'peer', 20000, 1, 1, 0, 0, 1000, 'apel merah hasil panen', 'ns8qP-JW7R4', 10, 10, 10, 6, '2022-10-17 00:00:00', '2022-10-17 14:34:40'),
(9, 'melon', 20000, 1, 1, 0, 0, 1000, 'apel merah hasil panen', 'ns8qP-JW7R4', 10, 10, 10, 5, '2022-10-17 00:00:00', '2022-10-17 14:34:40'),
(10, 'jeruk bali', 20000, 1, 1, 0, 0, 1000, 'apel merah hasil panen', 'ns8qP-JW7R4', 10, 10, 10, 0, '2022-10-17 00:00:00', '2022-10-17 14:34:40'),
(11, 'telur', 20000, 1, 1, 0, 0, 1000, 'apel merah hasil panen', 'ns8qP-JW7R4', 10, 10, 10, 4, '2022-10-17 00:00:00', '2022-10-17 14:34:40'),
(12, 'cabai', 20000, 1, 1, 0, 0, 1000, 'apel merah hasil panen', 'ns8qP-JW7R4', 10, 10, 10, 0, '2022-10-17 00:00:00', '2022-10-17 14:34:40'),
(13, 'melon', 20000, 1, 1, 0, 0, 1000, 'apel merah hasil panen', 'ns8qP-JW7R4', 10, 10, 10, 1, '2022-10-17 00:00:00', '2022-10-17 14:34:40'),
(14, 'mangga', 20000, 1, 1, 0, 0, 1000, 'apel merah hasil panen', 'ns8qP-JW7R4', 10, 10, 10, 0, '2022-10-17 00:00:00', '2022-10-17 14:34:40'),
(15, 'pisang muli', 20000, 1, 1, 0, 0, 1000, 'apel merah hasil panen', 'ns8qP-JW7R4', 10, 10, 10, 1, '2022-10-17 00:00:00', '2022-10-17 14:34:40'),
(16, 'Apel Merah', 20000, 1, 1, 0, 0, 1000, 'apel merah hasil panen', 'ns8qP-JW7R4', 10, 10, 10, 7, '2022-10-17 00:00:00', '2022-10-17 14:34:40'),
(17, 'produk terbaru', 22222, 1, 2, 3, 1, 100, 'coba isi produk', 'ns8qP-JW7R4', 12, 1, 1, 187, '2022-10-19 21:24:29', '0000-00-00 00:00:00'),
(18, 'Broccoli', 18000, 2, 1, 50, 1, 100, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium quisquam consequuntur repellendus ad placeat dolorum! Maiores voluptatem ad, similique vel, quasi porro optio tempora veniam, quia nisi ab fugiat aspernatur.', 'ns8qP-JW7R4', 1, 1, 3, 15, '2022-11-27 15:10:24', '0000-00-00 00:00:00');

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
  ADD KEY `kategori` (`jenis`),
  ADD KEY `jenis` (`kategori`);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mitra`
--
ALTER TABLE `mitra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
  ADD CONSTRAINT `jenis` FOREIGN KEY (`kategori`) REFERENCES `kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kategori` FOREIGN KEY (`jenis`) REFERENCES `jenis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
