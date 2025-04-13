-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 13, 2025 at 10:59 AM
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
-- Database: `gymdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `exercises`
--

CREATE TABLE `exercises` (
  `id` int(11) NOT NULL,
  `nameExercise` varchar(255) NOT NULL,
  `imageExercise` varchar(255) NOT NULL,
  `descriptionExercise` varchar(255) NOT NULL,
  `timeExercise` int(11) NOT NULL,
  `numberExercise` int(11) NOT NULL,
  `dateExercise` date NOT NULL DEFAULT current_timestamp(),
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `delExercise` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exercises`
--

INSERT INTO `exercises` (`id`, `nameExercise`, `imageExercise`, `descriptionExercise`, `timeExercise`, `numberExercise`, `dateExercise`, `category_id`, `user_id`, `delExercise`) VALUES
(1, 'Bài tập giảm cân 1', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ34C-VRZxWq1o9rYEHwm0gLI1FMjaCOTYxeA&s', 'Bài tập này rất hay', 135, 15, '2024-12-07', 1, 3, 0),
(2, 'Bài tập giảm cân 2', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ34C-VRZxWq1o9rYEHwm0gLI1FMjaCOTYxeA&s', 'Bài tập này rất hay', 145, 12, '2024-12-07', 1, 4, 0),
(3, 'Bài tập yoga 1', 'https://media.istockphoto.com/id/1395337483/vi/anh/c%C3%A1c-ho%E1%BA%A1t-%C4%91%E1%BB%99ng-th%E1%BB%83-thao-v%C3%A0-ph%C3%B2ng-t%E1%BA%ADp-th%E1%BB%83-d%E1%BB%A5c.jpg?s=612x612&w=0&k=20&c=uGVC3JJS1VH4HuxnBjd6IPXTNtqSm5WVXWpCeaD55-Q=', 'Bài tập này rất hay', 150, 14, '2024-12-07', 2, 5, 0),
(4, 'Bài tập yoga 2', 'https://media.istockphoto.com/id/1395337483/vi/anh/c%C3%A1c-ho%E1%BA%A1t-%C4%91%E1%BB%99ng-th%E1%BB%83-thao-v%C3%A0-ph%C3%B2ng-t%E1%BA%ADp-th%E1%BB%83-d%E1%BB%A5c.jpg?s=612x612&w=0&k=20&c=uGVC3JJS1VH4HuxnBjd6IPXTNtqSm5WVXWpCeaD55-Q=', 'Bài tập này rất hay', 160, 18, '2024-12-07', 2, 6, 0),
(5, 'Bài tập cardio 1', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQvwbi-q1Q8Y_alG3heZKr17J9AqQEP0Drn6w&s', 'Bài tập này rất hay', 120, 20, '2024-12-07', 3, 7, 0),
(6, 'Bài tập cardio 2', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQvwbi-q1Q8Y_alG3heZKr17J9AqQEP0Drn6w&s', 'Bài tập này rất hay', 130, 16, '2024-12-07', 3, 8, 0),
(7, 'Bài tập tăng cơ 1', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRvi5-TyjoslrpVzmrKZeZ0zM7QwWW3Vp7LDw&s', 'Bài tập này rất hay', 180, 10, '2024-12-07', 4, 3, 0),
(8, 'Bài tập tăng cơ 2', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRvi5-TyjoslrpVzmrKZeZ0zM7QwWW3Vp7LDw&s', 'Bài tập này rất hay', 170, 19, '2024-12-07', 4, 4, 0),
(9, 'Bài tập boxing 1', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQI93GhKo6X9R9hIJ_rQgn3ITMHhq0vi7uOGw&s', 'Bài tập này rất hay', 125, 12, '2024-12-07', 5, 5, 0),
(10, 'Bài tập boxing 2', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQI93GhKo6X9R9hIJ_rQgn3ITMHhq0vi7uOGw&s', 'Bài tập này rất hay', 140, 15, '2024-12-07', 5, 6, 0),
(11, 'Bài tập giảm cân 3', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ34C-VRZxWq1o9rYEHwm0gLI1FMjaCOTYxeA&s', 'Bài tập này rất hay', 160, 11, '2024-12-07', 1, 7, 0),
(12, 'Bài tập giảm cân 4', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ34C-VRZxWq1o9rYEHwm0gLI1FMjaCOTYxeA&s', 'Bài tập này rất hay', 155, 18, '2024-12-07', 1, 8, 0),
(13, 'Bài tập yoga 3', 'https://media.istockphoto.com/id/1395337483/vi/anh/c%C3%A1c-ho%E1%BA%A1t-%C4%91%E1%BB%99ng-th%E1%BB%83-thao-v%C3%A0-ph%C3%B2ng-t%E1%BA%ADp-th%E1%BB%83-d%E1%BB%A5c.jpg?s=612x612&w=0&k=20&c=uGVC3JJS1VH4HuxnBjd6IPXTNtqSm5WVXWpCeaD55-Q=', 'Bài tập này rất hay đó bạn à', 145, 13, '2024-12-07', 2, 3, 0),
(14, 'Bài tập yoga 4', 'https://media.istockphoto.com/id/1395337483/vi/anh/c%C3%A1c-ho%E1%BA%A1t-%C4%91%E1%BB%99ng-th%E1%BB%83-thao-v%C3%A0-ph%C3%B2ng-t%E1%BA%ADp-th%E1%BB%83-d%E1%BB%A5c.jpg?s=612x612&w=0&k=20&c=uGVC3JJS1VH4HuxnBjd6IPXTNtqSm5WVXWpCeaD55-Q=', 'Bài tập này rất hay', 150, 14, '2024-12-07', 2, 4, 0),
(15, 'Bài tập cardio 3', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQvwbi-q1Q8Y_alG3heZKr17J9AqQEP0Drn6w&s', 'Bài tập này rất hay', 135, 16, '2024-12-07', 3, 5, 0),
(16, 'Bài tập cardio 4', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQvwbi-q1Q8Y_alG3heZKr17J9AqQEP0Drn6w&s', 'Bài tập này rất hay', 165, 17, '2024-12-07', 3, 6, 0),
(17, 'Bài tập tăng cơ 3', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRvi5-TyjoslrpVzmrKZeZ0zM7QwWW3Vp7LDw&s', 'Bài tập này rất hay', 175, 13, '2024-12-07', 4, 7, 0),
(18, 'Bài tập tăng cơ 4', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRvi5-TyjoslrpVzmrKZeZ0zM7QwWW3Vp7LDw&s', 'Bài tập này rất hay', 160, 14, '2024-12-07', 4, 8, 0),
(19, 'Bài tập boxing 3', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQI93GhKo6X9R9hIJ_rQgn3ITMHhq0vi7uOGw&s', 'Bài tập này rất hay', 130, 19, '2024-12-07', 5, 3, 0),
(20, 'Bài tập boxing 4', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQI93GhKo6X9R9hIJ_rQgn3ITMHhq0vi7uOGw&s', 'Bài tập này rất hay', 145, 15, '2024-12-07', 5, 4, 0),
(21, 'Bài yoga của mách', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZWHeXShJIhQ8U6-hUFEI_sy2t6ABsjxsw5g&s', 'Bài yoga này của mách hay lắm á', 120, 10, '2024-12-07', 2, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `exercise_categories`
--

CREATE TABLE `exercise_categories` (
  `id` int(11) NOT NULL,
  `name_exercise_categories` varchar(255) NOT NULL,
  `description_exercise_categories` varchar(255) NOT NULL,
  `image_exercise_categories` varchar(255) NOT NULL,
  `delExerciseCategories` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exercise_categories`
--

INSERT INTO `exercise_categories` (`id`, `name_exercise_categories`, `description_exercise_categories`, `image_exercise_categories`, `delExerciseCategories`) VALUES
(1, 'Giảm cân', 'Đốt mỡ', 'img/classes/class-1.jpg', 0),
(2, 'Yoga', 'Dẻo Dai', 'img/classes/class-2.jpg', 0),
(3, 'Cardio', 'Tim mạch', 'img/classes/class-3.jpg', 0),
(4, 'Tăng cơ', 'Sức mạnh', 'img/classes/class-4.jpg', 0),
(5, 'Boxing', 'Thể lực', 'img/classes/class-5.jpg', 0),
(6, 'PickleBall', 'Nhiệt huyết lắm', 'https://cdn.britannica.com/25/236225-050-59A4051E/woman-daughter-doubles-pickleball.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `exercise_detail`
--

CREATE TABLE `exercise_detail` (
  `id` int(11) NOT NULL,
  `nameExerciseDetail` varchar(255) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `exercise_id` int(11) NOT NULL,
  `delExerciseDetail` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exercise_detail`
--

INSERT INTO `exercise_detail` (`id`, `nameExerciseDetail`, `link`, `exercise_id`, `delExerciseDetail`) VALUES
(1, 'Tìm hiểu boxing là gì á', 'UXbnOhKC4BA', 9, 0),
(2, 'Boxing thực chiến nè', 'gZNIoBfVmSk', 9, 0),
(3, 'Boxing thực chiến 3', '6Wh9sPRJwmE', 9, 0),
(4, 'Yoga là gì???', '6Wh9sPRJwmE', 3, 0),
(5, 'Giảm Cân: Nhịn Ăn Như Thế Nào Mới Đúng?', 'OqWUaQ1blhg', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nameRoles` varchar(255) NOT NULL,
  `delRole` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `nameRoles`, `delRole`) VALUES
(1, 'Admin', 0),
(2, 'Coach', 0),
(3, 'Member', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('MuFoLFlpak4wZwYd5cBwklxDcFD647SvghABJp8R', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36 OPR/117.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUUxPODBkWUlkQ0R2TWJNQVBPR2JQM0ZkUTlEaHNDaEdVYzFXaFpJTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9leGRldGFpbC85Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mjt9', 1744449827);

-- --------------------------------------------------------

--
-- Table structure for table `userexercises`
--

CREATE TABLE `userexercises` (
  `id` int(11) NOT NULL,
  `exercise_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userexercises`
--

INSERT INTO `userexercises` (`id`, `exercise_id`, `user_id`, `date`) VALUES
(5, 9, 2, '2025-04-12 16:20:22');

-- --------------------------------------------------------

--
-- Table structure for table `userpackage`
--

CREATE TABLE `userpackage` (
  `id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `time_expired` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userpackage`
--

INSERT INTO `userpackage` (`id`, `package_id`, `user_id`, `time_expired`) VALUES
(7, 1, 2, '2025-05-12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `avatar` varchar(1000) DEFAULT NULL,
  `description_user` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` int(11) NOT NULL DEFAULT 3,
  `delUser` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `age`, `weight`, `height`, `avatar`, `description_user`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_id`, `delUser`) VALUES
(2, 'Nguyễn  Vũ Đại Nam', 22, 75, 170, 'https://scontent.fsgn19-1.fna.fbcdn.net/v/t39.30808-6/455233212_3773755139612771_677843765285250649_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeFjEFeuE5_GYyEvPDehtjvLDFPnxPsrm_QMU-fE-yub9P-yXAXdyWKEvWGPXe5X69BxDpZEQAvCNIiRrGoIKCkl&_nc_ohc=UmdcSGTX6bcQ7kNvgGBseiJ&_nc_zt=23&_nc_ht=scontent.fsgn19-1.fna&_nc_gid=AzMD_TsKpsmzmW0dj-dHkET&oh=00_AYAj9LX5LPP3zanzKPpiB8_uIFbkHevXkFjoAbe5tUMKQA&oe=675A183C', 'Tôi đẹp trai vô cùng tận', 'nguyenvudaianm113@gmail.com', NULL, '$2y$12$KOLlU1zyXQiCzxuHp/b6guwSqBlKHziyI7yw5c.YTLiu7YcWoLORm', NULL, '2024-12-06 09:31:43', '2024-12-06 09:31:43', 3, 0),
(3, 'Phạm Văn Mách', 35, 102, 180, 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRRXax4B05lK2SuPtUbrafekRvf96un_7UUJZbOyq3RWyW7nCRZHmUNLrknqKNoJQG7XyKUB_Wxg3k2uAi7-pc5Ew', 'Tôi rất giỏi trong huấn luyện', 'mach@gmail.com', NULL, '$2y$12$l7x54ZqZShQ5l6CkQ/eMzu14HSgH7s5v337GVPJ8YOPt.4KtaYL.O', NULL, '2024-12-06 10:27:25', '2024-12-06 10:27:25', 2, 0),
(4, 'Nguyễn Văn Kiên', 32, 100, 200, 'https://nuedu.vn/cdn/data/brandlogo/nguyen-van-kien.jpg', 'Tôi vô địch thế giới', 'kien@gmail.com', NULL, '$2y$12$xLk4Vc7GT.TgjVLP7ElEWuNZJjiKyPavXsXqVVsOB7cQcF2/pTmHq', NULL, '2024-12-06 10:42:05', '2024-12-06 10:42:05', 2, 0),
(5, 'Lý Đức', 32, 71, 191, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQBD6YIEjuU50e3eurhQx8kAWnoI6E29EI8jhrVZ0ZLAD4h6Id3HSm8-bXA96TuZxiMHgv9cRd_XswnMHymbTQgXg', 'Tôi vô địch quốc nội', 'lyduc@gmail.com', NULL, '$2y$12$TI3JyCV/A1c9it2tlIKileFJUn6EGZaEmCfAoq/bvZiCqIh7eqIAu', NULL, '2024-12-06 10:42:36', '2024-12-06 10:42:36', 2, 0),
(6, 'Nguyễn Văn Lâm', 32, 80, 200, 'https://nld.mediacdn.vn/2014/nguyen-van-lam-cccc-1418136592603.jpg', 'Tôi là huấn luyện viên boxing và tăng cơ', 'lam@gmail.com', NULL, '$2y$12$gko/F770kp2cZxh7vHQz9.kG0j1u1tggTmZi2a4KPMf20mcMPQQhS', NULL, '2024-12-06 10:43:04', '2024-12-06 10:43:04', 2, 0),
(7, 'Lê Hương Giang', 40, 50, 170, 'https://nuedu.vn/cdn/data/brandlogo/le-huong-giang.jpg', 'Tôi cái gì cũng giỏi', 'giang@gmail.com', NULL, '$2y$12$cDu9S41xWOgbunMjpv1uye6.yjM.ohDz8xkdN8jg0ESuTUJ0BgNEm', NULL, '2024-12-06 10:43:31', '2024-12-06 10:43:31', 2, 0),
(8, 'Nguyễn Anh Thông', 25, 67, 180, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0YA338harqQogyWWICfk7gbBthle3i_Q91Q&s', 'Tôi hay lắm nha', 'thong@gmail.com', NULL, '$2y$12$w3W.NWrRgdx0TdLnL7ePwe5Pon6zrC.hqkdanSetmy6209pWAEwfS', NULL, '2024-12-06 10:43:58', '2024-12-06 10:43:58', 2, 0),
(11, 'Nguyễn Ngọc Thạch', 19, 50, 165, 'https://scontent.fsgn19-1.fna.fbcdn.net/v/t39.30808-6/455233212_3773755139612771_677843765285250649_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeFjEFeuE5_GYyEvPDehtjvLDFPnxPsrm_QMU-fE-yub9P-yXAXdyWKEvWGPXe5X69BxDpZEQAvCNIiRrGoIKCkl&_nc_ohc=UmdcSGTX6bcQ7kNvgGBseiJ&_nc_zt=23&_nc_ht=scontent.fsgn19-1.fna&_nc_gid=AzMD_TsKpsmzmW0dj-dHkET&oh=00_AYAj9LX5LPP3zanzKPpiB8_uIFbkHevXkFjoAbe5tUMKQA&oe=675A183C', 'Tôi rất giỏi giảm cân', 'thachnnps32314@gmail.com', NULL, '$2y$12$.i4DjRVTTfNwzuxwVnlOHejFm0GqDP4SeY.r0KQo3SVGeTidoOyWa', NULL, '2024-12-07 06:09:01', '2024-12-07 06:09:01', 2, 0),
(12, 'admin', NULL, NULL, NULL, NULL, NULL, 'admin@gmail.com', NULL, '$2y$12$TsSYpmO/M5kekOH9EVMmme36pXbgeO6LTLRRV4qH4dichl1uliJQS', NULL, '2024-12-07 10:35:40', '2024-12-07 10:35:40', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `workout_package`
--

CREATE TABLE `workout_package` (
  `id` int(11) NOT NULL,
  `namePackage` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `time` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `delPackage` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `workout_package`
--

INSERT INTO `workout_package` (`id`, `namePackage`, `price`, `time`, `description`, `delPackage`) VALUES
(1, '1 tháng', 500000, 1, 'Miễn phí kiểm tra sức khoẻ,Không giới hạn thiết bị tập,Huấn luận viên riêng,Chọn khoá huấn luyện,HLV kèm 1 - 1,Không giới hạn thời gian tập', 0),
(2, '6 tháng', 2499000, 6, 'Miễn phí kiểm tra sức khoẻ,Không giới hạn thiết bị tập,Huấn luận viên riêng,Chọn khoá huấn luyện,HLV kèm 1 - 1,Không giới hạn thời gian tập', 0),
(3, '1 năm', 4499000, 12, 'Miễn phí kiểm tra sức khoẻ,Không giới hạn thiết bị tập,Huấn luận viên riêng,Chọn khoá huấn luyện,HLV kèm 1 - 1,Không giới hạn thời gian tập', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exercises`
--
ALTER TABLE `exercises`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exercise_categories`
--
ALTER TABLE `exercise_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exercise_detail`
--
ALTER TABLE `exercise_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_exercise_detail_id` (`exercise_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `userexercises`
--
ALTER TABLE `userexercises`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_exercise_user` (`exercise_id`),
  ADD KEY `fk_user_id1` (`user_id`);

--
-- Indexes for table `userpackage`
--
ALTER TABLE `userpackage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_package_id` (`package_id`),
  ADD KEY `fk_user_id_package` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `fk_role_usera` (`role_id`);

--
-- Indexes for table `workout_package`
--
ALTER TABLE `workout_package`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exercises`
--
ALTER TABLE `exercises`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `exercise_categories`
--
ALTER TABLE `exercise_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `exercise_detail`
--
ALTER TABLE `exercise_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `userexercises`
--
ALTER TABLE `userexercises`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `userpackage`
--
ALTER TABLE `userpackage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `workout_package`
--
ALTER TABLE `workout_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `exercise_detail`
--
ALTER TABLE `exercise_detail`
  ADD CONSTRAINT `fk_exercise_detail_id` FOREIGN KEY (`exercise_id`) REFERENCES `exercises` (`id`);

--
-- Constraints for table `userexercises`
--
ALTER TABLE `userexercises`
  ADD CONSTRAINT `fk_exercise_user` FOREIGN KEY (`exercise_id`) REFERENCES `exercises` (`id`),
  ADD CONSTRAINT `fk_user_id1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `userpackage`
--
ALTER TABLE `userpackage`
  ADD CONSTRAINT `fk_package_id` FOREIGN KEY (`package_id`) REFERENCES `workout_package` (`id`),
  ADD CONSTRAINT `fk_user_id_package` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_role_usera` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
