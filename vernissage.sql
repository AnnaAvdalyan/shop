-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 19 2021 г., 20:27
-- Версия сервера: 8.0.15
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `vernissage`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_ru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_arm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `img`, `name`, `name_ru`, `name_arm`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'assets/categories/default.png', 'Backgammon', 'Нарды', 'Նարդի 1', -1, '2021-03-14 14:09:00', '2021-03-17 17:43:25'),
(2, 'assets/categories/default.png', 'Beads', 'Четки', 'Թզբեխներ', -1, '2021-03-14 14:09:04', '2021-03-14 14:09:04'),
(3, 'assets/categories/default.png', 'Books', 'Книгы', 'Գրքեր', -1, '2021-03-14 14:09:06', '2021-03-14 14:09:06'),
(4, 'assets/categories/default.png', 'test', 'test 1', 'test 2', -1, '2021-03-16 18:36:00', '2021-03-16 18:36:00'),
(8, 'default.png', 'asdasd', 'asdasd', 'asdasd', -1, '2021-03-18 16:45:40', '2021-03-18 16:45:40'),
(9, 'default.png', 'test1', 'test2', 'test3', -1, '2021-03-18 17:12:24', '2021-03-18 17:12:24'),
(10, 'default.png', 'test1', 'test2', 'test3', -1, '2021-03-18 17:12:37', '2021-03-18 17:12:37'),
(11, 'default.png', 'test1', 'test2', 'test3', -1, '2021-03-18 17:12:46', '2021-03-18 17:12:46'),
(12, 'default.png', 'asdasd', 'test', 'test', -1, '2021-03-18 17:13:46', '2021-03-18 17:13:46'),
(13, 'default.png', 'asdasd 1', 'test', 'test', -1, '2021-03-18 17:13:51', '2021-03-18 17:13:51');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `galleries`
--

INSERT INTO `galleries` (`id`, `user_id`, `img`, `created_at`, `updated_at`) VALUES
(14, 2, 'assets/gallery/6054bccc3ca49.jpg', '2021-03-19 11:01:32', '2021-03-19 11:01:32'),
(15, 2, 'assets/gallery/6054bcde857b4.jpeg', '2021-03-19 11:01:50', '2021-03-19 11:01:50'),
(16, 2, 'assets/gallery/6054bcf65e745.jpg', '2021-03-19 11:02:14', '2021-03-19 11:02:14'),
(17, 2, 'assets/gallery/6054bd106152d.jpg', '2021-03-19 11:02:40', '2021-03-19 11:02:40');

-- --------------------------------------------------------

--
-- Структура таблицы `gallery_products`
--

CREATE TABLE `gallery_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gallery_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `gallery_products`
--

INSERT INTO `gallery_products` (`id`, `gallery_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 14, 4, '2021-03-19 12:47:27', '2021-03-19 12:47:27'),
(2, 15, 4, '2021-03-19 12:47:27', '2021-03-19 12:47:27'),
(3, 14, 4, '2021-03-19 12:47:39', '2021-03-19 12:47:39'),
(4, 15, 4, '2021-03-19 12:47:39', '2021-03-19 12:47:39'),
(5, 14, 4, '2021-03-19 12:47:57', '2021-03-19 12:47:57'),
(6, 15, 4, '2021-03-19 12:47:57', '2021-03-19 12:47:57'),
(7, 14, 4, '2021-03-19 12:48:38', '2021-03-19 12:48:38'),
(8, 15, 4, '2021-03-19 12:48:38', '2021-03-19 12:48:38'),
(9, 14, 4, '2021-03-19 12:48:53', '2021-03-19 12:48:53'),
(10, 15, 4, '2021-03-19 12:48:53', '2021-03-19 12:48:53'),
(11, 14, 3, '2021-03-19 13:08:43', '2021-03-19 13:08:43'),
(12, 14, 3, '2021-03-19 13:09:21', '2021-03-19 13:09:21'),
(13, 14, 3, '2021-03-19 13:09:50', '2021-03-19 13:09:50'),
(14, 14, 3, '2021-03-19 13:10:39', '2021-03-19 13:10:39'),
(15, 14, 3, '2021-03-19 13:10:54', '2021-03-19 13:10:54');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_03_14_123522_create_categories_table', 1),
(5, '2021_03_14_145128_create_products_table', 1),
(6, '2021_03_14_185627_create_orders_table', 2),
(7, '2021_03_14_185927_create_order_product_table', 2),
(8, '2021_03_15_212200_update_order_product_table', 3),
(9, '2021_03_19_120506_create_galleries_table', 4),
(10, '2021_03_19_145422_create_gallery_product_table', 5),
(11, '2021_03_19_164623_create_gallery_products_table', 6);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `status`, `name`, `phone`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, NULL, '2021-03-15 15:06:11', '2021-03-15 15:06:11'),
(2, 0, NULL, NULL, '2021-03-15 15:17:37', '2021-03-15 15:17:37'),
(3, 1, NULL, NULL, '2021-03-16 15:51:51', '2021-03-16 17:21:29'),
(4, 1, NULL, NULL, '2021-03-16 17:21:37', '2021-03-16 17:21:47'),
(5, 1, 'test', '+37477777777', '2021-03-16 17:21:54', '2021-03-16 17:24:13'),
(6, 0, NULL, NULL, '2021-03-16 17:24:36', '2021-03-16 17:24:36');

-- --------------------------------------------------------

--
-- Структура таблицы `order_product`
--

CREATE TABLE `order_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `count` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `order_product`
--

INSERT INTO `order_product` (`id`, `order_id`, `product_id`, `count`, `created_at`, `updated_at`) VALUES
(20, 1, 3, 0, '2021-03-15 18:02:09', '2021-03-15 18:02:09'),
(21, 3, 4, 0, '2021-03-16 15:51:51', '2021-03-16 15:51:51'),
(22, 4, 3, 0, '2021-03-16 17:21:37', '2021-03-16 17:21:37'),
(23, 5, 2, 0, '2021-03-16 17:21:54', '2021-03-16 17:21:54'),
(24, 6, 2, 0, '2021-03-16 17:24:36', '2021-03-16 17:24:36');

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_arm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_arm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_ru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_arm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `length` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `width` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kilograms` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','order','no_active') COLLATE utf8mb4_unicode_ci NOT NULL,
  `can_add` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `user_id`, `category_id`, `img`, `price`, `discount`, `title`, `title_ru`, `title_arm`, `description`, `description_ru`, `description_arm`, `slug`, `slug_ru`, `slug_arm`, `length`, `width`, `height`, `kilograms`, `count`, `status`, `can_add`, `created_at`, `updated_at`) VALUES
(2, 1, 2, 'assets/products/604e5273e330e.jpg', 300, 0, 'Четки из кости “Звезда”', 'Четки из кости “Звезда”', 'Четки из кости “Звезда”', 'adasdas', 'asdasdasd', 'asdasdas', 'test1', 'test1', 'test1', '0', '0', '0', '0', '3', 'active', 'yes', '2021-03-14 14:14:11', '2021-03-18 05:08:17'),
(3, 1, 1, 'assets/products/604e52b733540.jpg', 35000, 0, 'Нарды 35.000 драм', 'Нарды 35.000 драм', 'Нарды 35.000 драм', 'asdasdasda', 'asdasdadas', 'asdasdadasdasd', 'test1', 'test1', 'test1', '0', '0', '0', '0', '4', 'active', 'yes', '2021-03-14 14:15:19', '2021-03-15 18:19:45'),
(4, 1, 3, 'assets/products/604e5384a890a.jpg', 20000, 0, '“Григор Нарекаци” 20.000 др', '“Григор Нарекаци” 20.000 др', '“Григор Нарекаци” 20.000 др', 'asdasdasd', 'asdasdasd', 'asdasdasd', 'test1', 'test1', 'test1', '0', '0', '0', '0', '2', 'active', 'yes', '2021-03-14 14:18:44', '2021-03-16 15:51:59');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','moderator','user') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Anna', 'Avdalyan', 'admin@mail.ru', NULL, '$2y$10$48W7ZTcbBrSgiGOMXcwlSeB0w3/xq0SMk0JwKNqLRr2NMDsfCm3rK', 'admin', NULL, '2021-03-14 14:06:52', '2021-03-14 14:06:52'),
(2, 'Anna', 'Avdalyan', 'user@mail.ru', NULL, '$2y$10$dPrekKT3qwKCvd/C0VWFKeWvhlrnlHVrw8OOQR.hPFFQzlKWjGRtO', 'admin', NULL, '2021-03-19 04:07:05', '2021-03-19 04:07:05'),
(3, '1asdassd', '1adasd', '1234@mail.ru', NULL, '$2y$10$AjQeAfJSklN8UagF/FZKcuMBng/zIMeC/PHw21n4JcNfEDD4ol8S.', 'admin', NULL, '2021-03-19 04:11:03', '2021-03-19 04:11:03'),
(4, 'asdasd', 'asdasd', 'aasa@mail.ru', NULL, '$2y$10$jH8Q2wRuhwtHfgtS3CCpi.9JzsEXeQSziQLPtNZ4gX6HB2.q777pa', 'admin', NULL, '2021-03-19 04:11:50', '2021-03-19 04:11:50'),
(5, 'asas', 'asasas', 'sasa@asda.ru', NULL, '$2y$10$nWTae3CUJ/vjcE8nvmkFI.YGoBEDQ3hE5Cbv2OJ6zqt6lr/o9J8ua', 'admin', NULL, '2021-03-19 04:16:04', '2021-03-19 04:16:04');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gallery_products`
--
ALTER TABLE `gallery_products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `gallery_products`
--
ALTER TABLE `gallery_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
