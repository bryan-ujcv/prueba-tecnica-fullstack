-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2022 at 01:55 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `google-news`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_01_17_202335_create_noticias_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `noticias`
--

CREATE TABLE `noticias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `descripcion`, `url`, `created_at`, `updated_at`) VALUES
(2, 'Bachillerato tecnico en computacion', 'un joven reinicio a su amigo de un toletaso.', 'https://ichef.bbci.co.uk/news/640/cpsprodpb/9F70/production/_97561804_3f98295b-c57a-40e7-a11e-b76a2c26d044.jpg', '2022-01-18 14:09:43', '2022-01-20 06:22:26'),
(3, 'caida de la bolsa', 'se le ha caido la bolsa a una senora qe pasaba por ahi', 'https://www.plastico.com/documenta/imagenes/103610/Futuro-bolsas-plasticas-en-Europa-GR.jpg', '2022-01-18 14:29:58', '2022-01-18 14:29:58'),
(4, 'subida de precio', 'se confirma subida de precio en todos los sectores de tecnologia y en el sector educativo', 'https://ichef.bbci.co.uk/news/640/cpsprodpb/9F70/production/_97561804_3f98295b-c57a-40e7-a11e-b76a2c26d044.jpg', '2022-01-19 09:01:44', '2022-01-20 04:59:16'),
(5, 'pelea de amigos', 'en una cancha de futbol donde todos son amigos se ha vivido una batalla campal porque uno de los implicados estaba jugando sucio', 'https://static.vix.com/es/sites/default/files/imj/entrepadres/q/que-hacer-antes-una-pelea-de-ninos-2.jpg', '2022-01-19 09:58:12', '2022-01-19 09:58:12'),
(6, 'frutas', 'no hay frutas en los mercados', 'https://static.vix.com/es/sites/default/files/imj/entrepadres/q/que-hacer-antes-una-pelea-de-ninos-2.jpg', '2022-01-19 10:00:51', '2022-01-19 10:00:51'),
(7, 'no hay trabajo', 'multiples estudios realizados por las entidades a cargo de la estadistica afirma que todo esta mal en el tema del empleo', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRwzuDLbaeNrSLuFOsJzvvoNm32Ny4acZU-ZkAt46Pn21Vy4ZuhBvz7A6MJRHnQQpOSLss&usqp=CAU', '2022-01-19 11:18:03', '2022-01-19 11:18:03'),
(11, 'no hay comida', 'cuando la gente pasa por momento criticos de hambruna es cuando no hay marcha atras para los gobiernos', 'https://www.plastico.com/documenta/imagenes/103610/Futuro-bolsas-plasticas-en-Europa-GR.jpg', '2022-01-19 11:36:32', '2022-01-19 11:36:32'),
(12, 'titular deportivo', 'el dia de hoy se presentado a el nuevo dt del olimpia que asume las riendas del leon y que ira por el primer pentacampeonato\r\ntodo esto esta en las manos de pablo lavallen procediente del futbol mexicano', 'https://static.vix.com/es/sites/default/files/imj/entrepadres/q/que-hacer-antes-una-pelea-de-ninos-2.jpg', '2022-01-19 11:52:57', '2022-01-19 11:52:57'),
(13, 'presentadores se caen de la tarima', 'el dia de ayer en un show proporcionado por la empresa master showing sufrio un aparatoso accidente al final del evento y se sufrieron varios percances', 'https://static.vix.com/es/sites/default/files/imj/entrepadres/q/que-hacer-antes-una-pelea-de-ninos-2.jpg', '2022-01-20 00:10:28', '2022-01-20 00:43:16'),
(15, 'empieza el torneo de futbol', 'el torneo comienza otra ves', 'https://www.bbva.com/wp-content/uploads/2017/08/bbva-balon-futbol-2017-08-11.jpg', '2022-01-20 05:07:58', '2022-01-20 05:08:18'),
(16, 'Fin del mundo', 'se confirma que para finales de julio se terminara todo aca en la tierra.', 'https://phantom-marca.unidadeditorial.es/37b03be2724f0bd1b1ae3efcb0648602/f/jpg/assets/multimedia/imagenes/2021/01/28/16118534854672.jpg', '2022-01-20 06:21:48', '2022-01-20 06:21:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
