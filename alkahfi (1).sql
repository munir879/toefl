-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2020 at 04:19 PM
-- Server version: 10.4.12-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alkahfi`
--

-- --------------------------------------------------------

--
-- Table structure for table `asrama`
--

CREATE TABLE `asrama` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `kelamin` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL,
  `Keterangan` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `asrama`
--

INSERT INTO `asrama` (`id`, `kode`, `nama`, `jumlah`, `kelamin`, `Keterangan`, `created_at`, `updated_at`) VALUES
(1, 'asd', 'dfsdfs', 234, 'P', 'adasd', '2020-03-14 04:14:17', '2020-03-14 04:28:55'),
(2, 'ddd', 'adas', 234, 'P', 'asdasd', '2020-03-14 04:30:25', '2020-03-14 04:31:06');

-- --------------------------------------------------------

--
-- Table structure for table `bayar`
--

CREATE TABLE `bayar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_bayar` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_tagihan` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_transaksi` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bayar`
--

INSERT INTO `bayar` (`id`, `id_bayar`, `id_tagihan`, `id_transaksi`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7, 'B000000001', '83', '', '2020-05-30 17:46:03', '2020-05-30 17:46:03', NULL),
(9, 'B000000002', '83', '', '2020-05-30 17:46:36', '2020-05-30 17:46:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `daftar_tagihans`
--

CREATE TABLE `daftar_tagihans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_tgh`
--

CREATE TABLE `daftar_tgh` (
  `id_tagihan` bigint(20) UNSIGNED NOT NULL,
  `nama` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_jenis` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_tahun` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daftar_tgh`
--

INSERT INTO `daftar_tgh` (`id_tagihan`, `nama`, `id_jenis`, `id_tahun`, `created_at`, `updated_at`, `deleted_at`) VALUES
(51, 'ASDasdsd', '2', '3', '2020-05-11 06:08:38', '2020-05-11 06:08:38', NULL),
(52, 'asddfgdfgdfg', '2', '3', '2020-05-11 06:09:55', '2020-05-11 06:09:55', NULL),
(53, 'asddfgdfgdfg', '2', '3', '2020-05-11 06:10:10', '2020-05-11 06:10:10', NULL),
(54, 'ffffffffff', '1', '3', '2020-05-11 06:11:40', '2020-05-14 15:40:21', NULL),
(55, 'asddfgdfgdfg', '2', '3', '2020-05-11 06:13:09', '2020-05-11 06:13:09', NULL),
(56, '435345', '1', '3', '2020-05-11 06:13:18', '2020-05-11 06:13:18', NULL),
(57, '435345', '1', '3', '2020-05-14 15:35:40', '2020-05-14 15:35:40', NULL),
(58, 'asdasdasd', '1', '3', '2020-05-14 15:40:37', '2020-05-14 15:40:37', NULL),
(62, 'sdsdfsdf', '1', '3', '2020-05-14 15:43:14', '2020-05-14 15:43:14', NULL),
(63, 'aaaaaaaaaaaaaaaaaa', '1', '4', '2020-05-14 15:43:28', '2020-05-15 12:44:59', NULL),
(64, '435345asdasd', '1', '3', '2020-05-29 00:47:49', '2020-05-29 00:47:49', NULL),
(65, 'sddsaasdadsasd', '1', '4', '2020-05-29 00:50:20', '2020-05-29 00:50:20', NULL),
(66, 'aaaaaaaaaaaaaa', '1', '3', '2020-05-29 00:50:41', '2020-05-29 00:50:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `example`
--

CREATE TABLE `example` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `example`
--

INSERT INTO `example` (`id`, `created_at`, `updated_at`, `name`, `description`, `status_id`) VALUES
(1, NULL, NULL, 'Voluptatem qui accusantium temporibus et suscipit.', 'Vel et quod enim itaque est eligendi. Et ratione voluptas ut exercitationem voluptatem incidunt molestias. Voluptatem eum nesciunt animi labore sed sapiente. Atque et rerum voluptate placeat quas quibusdam a.', 3),
(2, NULL, NULL, 'Aut doloremque labore ut.', 'Provident dolorem sed sed nesciunt alias voluptas illo. Velit porro quo sit voluptatem ut. Dolorem labore harum omnis in omnis voluptatem minima.', 2),
(3, NULL, NULL, 'Inventore quos aliquam eum.', 'Ducimus quia eligendi adipisci ex nobis. Distinctio eveniet officiis laudantium sequi exercitationem. Voluptatum in explicabo minus tenetur magnam.', 2),
(4, NULL, NULL, 'Eius omnis voluptas.', 'Et adipisci deleniti quia excepturi. Voluptas atque nisi expedita facere consequuntur exercitationem dolorum est.', 1),
(5, NULL, NULL, 'Ad et facilis deleniti quo.', 'Explicabo dolorem et omnis voluptatem. Sapiente quod at qui excepturi. Voluptatibus sint officiis nemo soluta in et id. Velit quaerat eveniet est id mollitia aliquam quia.', 3),
(6, NULL, NULL, 'Molestiae voluptas totam et delectus.', 'Ducimus enim aut dolorem aut et autem. Deserunt odit neque deserunt esse voluptas et velit. Qui dicta debitis quisquam cupiditate quidem quod. Eos qui eaque nobis.', 1),
(7, NULL, NULL, 'Enim rerum quibusdam.', 'Blanditiis in officiis sapiente. Eius et id reiciendis eaque et in modi error. Voluptate tenetur amet animi non consequuntur eius. Ut consequuntur neque qui dolorem est tempora. Dolore sint illo eligendi voluptatem nam et impedit eos.', 1),
(8, NULL, NULL, 'Vel error dolore.', 'Quis est voluptates reprehenderit voluptatem porro. Quia sequi odio non nemo in. Voluptas veniam quis vel reprehenderit blanditiis id.', 2),
(9, NULL, NULL, 'Voluptatibus esse laborum architecto quo a.', 'Suscipit aut perspiciatis et doloremque ipsam inventore. Nulla laborum eum sapiente aut accusantium laboriosam. Rerum est non ratione nam at minus magnam asperiores.', 1),
(10, NULL, NULL, 'Eos distinctio molestias est dolores.', 'Facilis amet quis eos vero dolore. Minus dolor nemo fuga rerum. Facere sapiente voluptatem quia error consequatur.', 3),
(11, NULL, NULL, 'Commodi aut minus laudantium.', 'Voluptates fuga numquam blanditiis beatae quo. Enim impedit voluptates et qui incidunt. Rerum dolorem aut ea expedita. Voluptatibus voluptatibus rerum temporibus dolorum modi enim.', 1),
(12, NULL, NULL, 'Molestiae et quia consequatur sint.', 'Rem saepe provident aperiam dolor consequuntur. Ex eius assumenda nihil optio consequatur velit possimus. Facilis nostrum et tempora eius sequi. Architecto fugiat sequi ut nam quidem accusantium sint.', 1),
(13, NULL, NULL, 'Libero occaecati ab.', 'Et ex provident iste porro magnam neque eos. Veritatis vero et ad odio assumenda earum. Similique velit autem voluptatum.', 3),
(14, NULL, NULL, 'Sit magni vero inventore sunt.', 'Et corporis itaque non qui dolores sunt. Qui autem accusantium qui fuga qui dolor quisquam. Ut est nisi non sit tempore quam. Pariatur nam qui id aut. Aut aliquid doloribus iste deleniti aut tenetur asperiores.', 1),
(15, NULL, NULL, 'Quo voluptatem quasi est et.', 'Labore iste aspernatur delectus sed fuga. Inventore hic quia quae placeat nobis consequatur. Eligendi aliquam delectus nihil ut harum. Et animi quis voluptas dolorem non aut aliquid.', 1),
(16, NULL, NULL, 'Quam sit aspernatur sit.', 'Possimus et sit dolores architecto excepturi in ratione. Repudiandae unde neque voluptas non consequuntur est dolorem. Eveniet vel fugit laboriosam. Et qui voluptatum dolorem natus omnis nisi sequi.', 4),
(17, NULL, NULL, 'Aliquid ratione neque sequi pariatur.', 'Doloribus recusandae dolores accusamus unde possimus. Corrupti dolor beatae id velit animi voluptas. Impedit incidunt ea sit nisi. Sit commodi cum harum deserunt sapiente recusandae tempora a.', 3),
(18, NULL, NULL, 'Nisi illum et consectetur modi.', 'Perspiciatis incidunt facilis pariatur dignissimos. Ut eos ut sunt et at ad. Esse est est quod voluptas vel quam. Animi doloribus dicta facilis totam quisquam.', 2),
(19, NULL, NULL, 'Consequatur quisquam enim rerum.', 'Voluptas labore possimus nobis et est et blanditiis. Ipsa eaque et amet rem dolores. Harum ipsa cupiditate asperiores. Facilis quisquam dolor corrupti non quo.', 4),
(20, NULL, NULL, 'Dolores voluptas ut sunt aliquam.', 'Fugiat dolore non sit enim voluptatem quasi quia cumque. Illum quidem recusandae omnis eligendi est ut. Corporis illum sit enim occaecati qui inventore qui. Aut distinctio sunt ad a sit cupiditate.', 4),
(21, NULL, NULL, 'Autem sit est.', 'Dolorum nesciunt quia deleniti libero ab non repudiandae. Commodi quaerat exercitationem sed. Est voluptate aut natus nihil perferendis cumque qui.', 1),
(22, NULL, NULL, 'Molestiae fugit dicta quis.', 'Nihil aut occaecati laborum non. Dolorem voluptas praesentium omnis a quis dolor corporis facilis. Ab et perferendis veritatis earum quo.', 1),
(23, NULL, NULL, 'Provident est amet dolor repudiandae.', 'Ut aliquam voluptas eius quia omnis facilis ut est. Dignissimos dolor doloremque eveniet illum.', 4),
(24, NULL, NULL, 'Eos architecto est facilis.', 'Quia optio consequatur id eveniet ut. Alias eaque quas quaerat temporibus dolorum sequi debitis vitae. Autem praesentium explicabo aperiam.', 1),
(25, NULL, NULL, 'Aut ut expedita minus iste.', 'Perferendis et autem in debitis. Explicabo consectetur blanditiis qui magnam voluptate delectus consectetur. Ab dolorum voluptatem optio perspiciatis maxime earum voluptatem. Ut voluptatem iure eaque laborum ut.', 2);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `folder`
--

CREATE TABLE `folder` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `folder_id` int(10) UNSIGNED DEFAULT NULL,
  `resource` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `folder`
--

INSERT INTO `folder` (`id`, `created_at`, `updated_at`, `name`, `folder_id`, `resource`) VALUES
(1, NULL, NULL, 'root', NULL, NULL),
(2, NULL, NULL, 'resource', 1, 1),
(3, NULL, NULL, 'documents', 1, NULL),
(4, NULL, NULL, 'graphics', 1, NULL),
(5, NULL, NULL, 'other', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `read` tinyint(1) NOT NULL,
  `edit` tinyint(1) NOT NULL,
  `add` tinyint(1) NOT NULL,
  `delete` tinyint(1) NOT NULL,
  `pagination` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `created_at`, `updated_at`, `name`, `table_name`, `read`, `edit`, `add`, `delete`, `pagination`) VALUES
(1, NULL, NULL, 'Example', 'example', 1, 1, 1, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `form_field`
--

CREATE TABLE `form_field` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `browse` tinyint(1) NOT NULL,
  `read` tinyint(1) NOT NULL,
  `edit` tinyint(1) NOT NULL,
  `add` tinyint(1) NOT NULL,
  `relation_table` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relation_column` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `form_id` int(10) UNSIGNED NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `form_field`
--

INSERT INTO `form_field` (`id`, `created_at`, `updated_at`, `name`, `type`, `browse`, `read`, `edit`, `add`, `relation_table`, `relation_column`, `form_id`, `column_name`) VALUES
(1, NULL, NULL, 'Title', 'text', 1, 1, 1, 1, NULL, NULL, 1, 'name'),
(2, NULL, NULL, 'Description', 'text_area', 1, 1, 1, 1, NULL, NULL, 1, 'description'),
(3, NULL, NULL, 'Status', 'relation_select', 1, 1, 1, 1, 'status', 'name', 1, 'status_id');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_tagihan`
--

CREATE TABLE `jenis_tagihan` (
  `id_jens tagihan` bigint(20) UNSIGNED NOT NULL,
  `name` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tingkat` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `tingkat`, `kelas`, `ket`, `created_at`, `updated_at`) VALUES
(7, '234', '234234', '234234', '2020-05-14 11:53:05', '2020-05-14 11:53:05'),
(8, '23', 'asd', '435345', '2020-05-14 11:53:57', '2020-05-14 11:53:57'),
(9, '34', 'sdf', 'fgh', '2020-05-14 11:54:07', '2020-05-14 11:54:07');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menulist`
--

CREATE TABLE `menulist` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menulist`
--

INSERT INTO `menulist` (`id`, `name`) VALUES
(1, 'sidebar menu'),
(2, 'top menu');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `href` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL,
  `sequence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `href`, `icon`, `slug`, `parent_id`, `menu_id`, `sequence`) VALUES
(1, 'Dashboard', '/', 'cil-speedometer', 'link', NULL, 1, 1),
(2, 'Settings', NULL, 'cil-calculator', 'dropdown', NULL, 1, 2),
(3, 'Notes', '/notes', NULL, 'link', 2, 1, 3),
(4, 'Users', '/users', NULL, 'link', 2, 1, 4),
(5, 'Edit menu', '/menu/menu', NULL, 'link', 2, 1, 5),
(6, 'Edit menu elements', '/menu/element', NULL, 'link', 2, 1, 6),
(7, 'Edit roles', '/roles', NULL, 'link', 2, 1, 7),
(8, 'Media', '/media', NULL, 'link', 2, 1, 8),
(9, 'BREAD', '/bread', NULL, 'link', 2, 1, 9),
(10, 'Login', '/login', 'cil-account-logout', 'link', NULL, 1, 10),
(11, 'Register', '/register', 'cil-account-logout', 'link', NULL, 1, 11),
(12, 'Theme', NULL, NULL, 'title', NULL, 1, 12),
(13, 'Colors', '/colors', 'cil-drop1', 'link', NULL, 1, 13),
(14, 'Typography', '/typography', 'cil-pencil', 'link', NULL, 1, 14),
(15, 'Base', NULL, 'cil-puzzle', 'dropdown', NULL, 1, 15),
(16, 'Breadcrumb', '/base/breadcrumb', NULL, 'link', 15, 1, 16),
(17, 'Cards', '/base/cards', NULL, 'link', 15, 1, 17),
(18, 'Carousel', '/base/carousel', NULL, 'link', 15, 1, 18),
(19, 'Collapse', '/base/collapse', NULL, 'link', 15, 1, 19),
(20, 'Forms', '/base/forms', NULL, 'link', 15, 1, 20),
(21, 'Jumbotron', '/base/jumbotron', NULL, 'link', 15, 1, 21),
(22, 'List group', '/base/list-group', NULL, 'link', 15, 1, 22),
(23, 'Navs', '/base/navs', NULL, 'link', 15, 1, 23),
(24, 'Pagination', '/base/pagination', NULL, 'link', 15, 1, 24),
(25, 'Popovers', '/base/popovers', NULL, 'link', 15, 1, 25),
(26, 'Progress', '/base/progress', NULL, 'link', 15, 1, 26),
(27, 'Scrollspy', '/base/scrollspy', NULL, 'link', 15, 1, 27),
(28, 'Switches', '/base/switches', NULL, 'link', 15, 1, 28),
(29, 'Tables', '/base/tables', NULL, 'link', 15, 1, 29),
(30, 'Tabs', '/base/tabs', NULL, 'link', 15, 1, 30),
(31, 'Tooltips', '/base/tooltips', NULL, 'link', 15, 1, 31),
(32, 'Buttons', NULL, 'cil-cursor', 'dropdown', NULL, 1, 32),
(33, 'Buttons', '/buttons/buttons', NULL, 'link', 32, 1, 33),
(34, 'Buttons Group', '/buttons/button-group', NULL, 'link', 32, 1, 34),
(35, 'Dropdowns', '/buttons/dropdowns', NULL, 'link', 32, 1, 35),
(36, 'Brand Buttons', '/buttons/brand-buttons', NULL, 'link', 32, 1, 36),
(37, 'Charts', '/charts', 'cil-chart-pie', 'link', NULL, 1, 37),
(38, 'Icons', NULL, 'cil-star', 'dropdown', NULL, 1, 38),
(39, 'CoreUI Icons', '/icon/coreui-icons', NULL, 'link', 38, 1, 39),
(40, 'Flags', '/icon/flags', NULL, 'link', 38, 1, 40),
(41, 'Brands', '/icon/brands', NULL, 'link', 38, 1, 41),
(42, 'Notifications', NULL, 'cil-bell', 'dropdown', NULL, 1, 42),
(43, 'Alerts', '/notifications/alerts', NULL, 'link', 42, 1, 43),
(44, 'Badge', '/notifications/badge', NULL, 'link', 42, 1, 44),
(45, 'Modals', '/notifications/modals', NULL, 'link', 42, 1, 45),
(46, 'Widgets', '/widgets', 'cil-calculator', 'link', NULL, 1, 46),
(47, 'Extras', NULL, NULL, 'title', NULL, 1, 47),
(48, 'Pages', NULL, 'cil-star', 'dropdown', NULL, 1, 48),
(49, 'Login', '/login', NULL, 'link', 48, 1, 49),
(50, 'Register', '/register', NULL, 'link', 48, 1, 50),
(51, 'Error 404', '/404', NULL, 'link', 48, 1, 51),
(52, 'Error 500', '/500', NULL, 'link', 48, 1, 52),
(53, 'Download CoreUI', 'https://coreui.io', 'cil-cloud-download', 'link', NULL, 1, 53),
(54, 'Try CoreUI PRO', 'https://coreui.io/pro/', 'cil-layers', 'link', NULL, 1, 54),
(55, 'MASTER', NULL, NULL, 'title', NULL, 1, 55),
(56, 'DATA PONDOK', NULL, 'cil-library', 'dropdown', NULL, 1, 56),
(57, 'Santri', '/santri', NULL, 'link', 56, 1, 57),
(58, 'Pengurus', '/pondok/pengurus', NULL, 'link', 56, 1, 58),
(59, 'Asrama', '/asrama', NULL, 'link', 56, 1, 59),
(60, 'TAGIHAN', NULL, 'cil-library', 'dropdown', NULL, 1, 60),
(61, 'JENIS TAGIHAN', '/tagihan', NULL, 'link', 60, 1, 61),
(62, 'TAMBAH TAGIHAN', '/tagihan/tambah', NULL, 'link', 60, 1, 62),
(64, 'PENGATURAN', NULL, 'cil-settings', 'dropdown', NULL, 1, 64),
(65, 'DASHBOARD', '/pondok', NULL, 'link', 64, 1, 65),
(66, 'Pos Keuangan', '/pondok/pos_uang', NULL, 'link', 64, 1, 66),
(67, 'Jenis Pembayaran', '/pondok/jns_bayar', NULL, 'link', 64, 1, 67),
(68, 'Akun Pengguna', '/pondok/akun', NULL, 'link', 64, 1, 68),
(69, 'Mutasi Santri', '/pondok/mutasi', NULL, 'link', 64, 1, 69),
(70, 'TRANSAKSI', NULL, 'cil-money', 'dropdown', NULL, 1, 70),
(71, 'Input Santri', '#', NULL, 'link', 70, 1, 71),
(72, 'Lain-lain', '/ASD', NULL, 'link', 70, 1, 72),
(73, 'Cek Tunggakan', '#', 'cil-account-logout', 'link', NULL, 1, 73),
(74, 'JURNAL UMUM', '#', 'cil-account-logout', 'link', NULL, 1, 74),
(75, 'LAPORAN', NULL, NULL, 'title', NULL, 1, 75),
(76, 'LAPORAN KEUANGAN', NULL, 'cil-money', 'dropdown', NULL, 1, 76),
(77, 'Syahriah', '/pondok/lap_syahriah', NULL, 'link', 76, 1, 77),
(78, 'Tahun Ajaran', '/pondok/thn_ajaran', NULL, 'link', 76, 1, 78),
(79, 'Pendaftaran Santri', '/pondok/lap_daftarbaru', NULL, 'link', 76, 1, 79),
(80, 'PAYMENT', NULL, NULL, 'title', NULL, 1, 80),
(81, 'Pages', NULL, '', 'dropdown', NULL, 2, 81),
(82, 'Dashboard', '/', NULL, 'link', 81, 2, 82),
(83, 'Notes', '/notes', NULL, 'link', 81, 2, 83),
(84, 'Users', '/users', NULL, 'link', 81, 2, 84),
(85, 'Settings', NULL, '', 'dropdown', NULL, 2, 85),
(86, 'Edit menu', '/menu/menu', NULL, 'link', 85, 2, 86),
(87, 'Edit menu elements', '/menu/element', NULL, 'link', 85, 2, 87),
(88, 'Edit roles', '/roles', NULL, 'link', 85, 2, 88),
(89, 'Media', '/media', NULL, 'link', 85, 2, 89),
(90, 'BREAD', '/bread', NULL, 'link', 85, 2, 90),
(91, 'kelas', '/kelas', 'cil-education', 'link', 56, 1, 81);

-- --------------------------------------------------------

--
-- Table structure for table `menu_role`
--

CREATE TABLE `menu_role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menus_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_role`
--

INSERT INTO `menu_role` (`id`, `role_name`, `menus_id`) VALUES
(1, 'guest', 1),
(2, 'user', 1),
(3, 'admin', 1),
(4, 'admin', 2),
(5, 'admin', 3),
(6, 'admin', 4),
(7, 'admin', 5),
(8, 'admin', 6),
(9, 'admin', 7),
(10, 'admin', 8),
(11, 'admin', 9),
(12, 'guest', 10),
(13, 'guest', 11),
(14, 'user', 12),
(15, 'admin', 12),
(16, 'user', 13),
(17, 'admin', 13),
(18, 'user', 14),
(19, 'admin', 14),
(20, 'user', 15),
(21, 'admin', 15),
(22, 'user', 16),
(23, 'admin', 16),
(24, 'user', 17),
(25, 'admin', 17),
(26, 'user', 18),
(27, 'admin', 18),
(28, 'user', 19),
(29, 'admin', 19),
(30, 'user', 20),
(31, 'admin', 20),
(32, 'user', 21),
(33, 'admin', 21),
(34, 'user', 22),
(35, 'admin', 22),
(36, 'user', 23),
(37, 'admin', 23),
(38, 'user', 24),
(39, 'admin', 24),
(40, 'user', 25),
(41, 'admin', 25),
(42, 'user', 26),
(43, 'admin', 26),
(44, 'user', 27),
(45, 'admin', 27),
(46, 'user', 28),
(47, 'admin', 28),
(48, 'user', 29),
(49, 'admin', 29),
(50, 'user', 30),
(51, 'admin', 30),
(52, 'user', 31),
(53, 'admin', 31),
(54, 'user', 32),
(55, 'admin', 32),
(56, 'user', 33),
(57, 'admin', 33),
(58, 'user', 34),
(59, 'admin', 34),
(60, 'user', 35),
(61, 'admin', 35),
(62, 'user', 36),
(63, 'admin', 36),
(64, 'user', 37),
(65, 'admin', 37),
(66, 'user', 38),
(67, 'admin', 38),
(68, 'user', 39),
(69, 'admin', 39),
(70, 'user', 40),
(71, 'admin', 40),
(72, 'user', 41),
(73, 'admin', 41),
(74, 'user', 42),
(75, 'admin', 42),
(76, 'user', 43),
(77, 'admin', 43),
(78, 'user', 44),
(79, 'admin', 44),
(80, 'user', 45),
(81, 'admin', 45),
(82, 'user', 46),
(83, 'admin', 46),
(84, 'user', 47),
(85, 'admin', 47),
(86, 'user', 48),
(87, 'admin', 48),
(88, 'user', 49),
(89, 'admin', 49),
(90, 'user', 50),
(91, 'admin', 50),
(92, 'user', 51),
(93, 'admin', 51),
(94, 'user', 52),
(95, 'admin', 52),
(96, 'guest', 53),
(97, 'user', 53),
(98, 'admin', 53),
(99, 'guest', 54),
(100, 'user', 54),
(101, 'admin', 54),
(102, 'user', 55),
(103, 'admin', 55),
(104, 'user', 56),
(105, 'admin', 56),
(106, 'user', 57),
(107, 'admin', 57),
(108, 'user', 58),
(109, 'admin', 58),
(110, 'user', 59),
(111, 'admin', 59),
(112, 'user', 60),
(113, 'admin', 60),
(114, 'user', 61),
(115, 'admin', 61),
(116, 'user', 62),
(117, 'admin', 62),
(118, 'user', 63),
(119, 'admin', 63),
(120, 'user', 64),
(121, 'admin', 64),
(122, 'user', 65),
(123, 'admin', 65),
(124, 'user', 66),
(125, 'admin', 66),
(126, 'user', 67),
(127, 'admin', 67),
(128, 'user', 68),
(129, 'admin', 68),
(130, 'user', 69),
(131, 'admin', 69),
(132, 'user', 70),
(133, 'admin', 70),
(134, 'user', 71),
(135, 'admin', 71),
(136, 'user', 72),
(137, 'admin', 72),
(138, 'user', 73),
(139, 'admin', 73),
(140, 'user', 74),
(141, 'admin', 74),
(142, 'user', 75),
(143, 'admin', 75),
(144, 'user', 76),
(145, 'admin', 76),
(146, 'user', 77),
(147, 'admin', 77),
(148, 'user', 78),
(149, 'admin', 78),
(150, 'user', 79),
(151, 'admin', 79),
(152, 'user', 80),
(153, 'admin', 80),
(154, 'guest', 81),
(155, 'user', 81),
(156, 'admin', 81),
(157, 'guest', 82),
(158, 'user', 82),
(159, 'admin', 82),
(160, 'user', 83),
(161, 'admin', 83),
(162, 'admin', 84),
(163, 'admin', 85),
(164, 'admin', 86),
(165, 'admin', 87),
(166, 'admin', 88),
(167, 'admin', 89),
(168, 'admin', 90),
(169, 'admin', 91),
(170, 'user', 91);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_10_11_085455_create_notes_table', 1),
(5, '2019_10_12_115248_create_status_table', 1),
(6, '2019_11_08_102827_create_menus_table', 1),
(7, '2019_11_13_092213_create_menurole_table', 1),
(8, '2019_12_10_092113_create_permission_tables', 1),
(9, '2019_12_11_091036_create_menulist_table', 1),
(10, '2019_12_18_092518_create_role_hierarchy_table', 1),
(11, '2020_01_07_093259_create_folder_table', 1),
(12, '2020_01_08_184500_create_media_table', 1),
(13, '2020_01_21_161241_create_form_field_table', 1),
(14, '2020_01_21_161242_create_form_table', 1),
(15, '2020_01_21_161243_create_example_table', 1),
(16, '2020_02_22_112402_create_transaksi_table', 1),
(17, '2020_02_22_112922_create_tagihan_table', 1),
(18, '2020_02_22_113409_create_bayar_table', 1),
(19, '2020_02_22_113555_create_daftar_tagihan_table', 1),
(20, '2020_02_22_113825_create_daftar_tahun_ajaran_table', 1),
(21, '2020_02_22_113918_create_daftar_jenis-tagihan_table', 1),
(22, '2020_02_27_113427_create_santri_table', 1),
(23, '2020_03_06_152923_create_asrama_table', 1),
(24, '2020_03_16_144519_create_daftar_tagihans_table', 2),
(25, '2020_05_12_233601_create_kelas_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(2, 'App\\User', 1),
(2, 'App\\User', 2),
(2, 'App\\User', 3),
(2, 'App\\User', 4),
(2, 'App\\User', 5),
(2, 'App\\User', 6),
(2, 'App\\User', 7),
(2, 'App\\User', 8),
(2, 'App\\User', 9),
(2, 'App\\User', 10),
(2, 'App\\User', 11);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `note_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `applies_to_date` date NOT NULL,
  `users_id` int(10) UNSIGNED NOT NULL,
  `status_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `title`, `content`, `note_type`, `applies_to_date`, `users_id`, `status_id`, `created_at`, `updated_at`) VALUES
(1, 'Rerum amet est autem odio.', 'Magni sed ea error ut earum voluptas. Ea quae dolores non quidem enim recusandae aperiam. Aut et culpa et ea laboriosam. Sit sapiente libero incidunt veritatis illo architecto.', 'minus', '1990-09-12', 10, 3, NULL, NULL),
(2, 'Rerum eligendi est corrupti.', 'Totam laudantium eum enim iure aperiam non delectus. Odio aut in quos quibusdam. Eos voluptatibus est voluptate facilis. Animi suscipit repudiandae ut facere.', 'dolore est', '1977-05-20', 2, 4, NULL, NULL),
(3, 'Ut ex aliquam non iure rerum.', 'Quod qui alias nihil illum repudiandae est. Ut maxime modi fuga sunt ut quo debitis. Rerum ut aut totam quasi magnam in.', 'adipisci', '2014-01-24', 9, 1, NULL, NULL),
(4, 'Qui earum optio.', 'Perspiciatis aut facilis nulla distinctio qui ut omnis repudiandae. Repellendus laborum dolore sunt vitae explicabo rerum. Vitae eveniet libero vel ea. Aliquid molestias cupiditate et est voluptatum quasi velit voluptas.', 'dolor tempora', '2000-10-23', 5, 4, NULL, NULL),
(5, 'Molestiae necessitatibus consequatur sed.', 'Laborum dolores dolore est maxime aut architecto excepturi. Odit et itaque inventore ut. Magni ut unde reprehenderit aliquam nemo laudantium.', 'ipsam ratione', '1977-08-26', 6, 4, NULL, NULL),
(6, 'Et qui provident inventore labore.', 'Et modi eum doloremque dolore mollitia. Non vel corporis voluptatem facilis atque. Ullam eum facilis velit qui soluta fugiat. Et perspiciatis expedita sed explicabo sit.', 'sed sunt', '1983-02-09', 3, 4, NULL, NULL),
(7, 'Dolorum necessitatibus veniam.', 'Vel nisi hic suscipit non. Dolores voluptates voluptas et quo eligendi qui cumque. Ipsa et velit ut maxime et rerum. Corporis praesentium maiores aut officiis.', 'vero eum', '2009-03-03', 4, 2, NULL, NULL),
(8, 'Dolorum aspernatur rerum minus fugit quam.', 'Doloribus repellat cum voluptatem sit. Rerum quod nulla atque quia libero. Inventore atque voluptatibus repudiandae eligendi.', 'in', '1988-12-21', 2, 2, NULL, NULL),
(9, 'Et eius dicta ea sint.', 'Sed eos suscipit assumenda qui aut aliquam aut. Est dicta cumque ipsam autem.', 'culpa', '2014-06-21', 10, 2, NULL, NULL),
(10, 'Quidem et voluptatem molestiae.', 'Voluptas dolor illo esse excepturi nisi quasi perspiciatis. Doloremque sed porro quae sit. Velit unde sunt in voluptate earum assumenda.', 'omnis illum', '1998-10-29', 7, 1, NULL, NULL),
(11, 'Sit vitae quisquam vitae.', 'Alias in ipsum consectetur est. Earum repellat natus quis asperiores impedit. Corrupti explicabo quia quidem delectus quia voluptatem corporis voluptatibus.', 'unde', '1982-10-03', 4, 1, NULL, NULL),
(12, 'Aut consequatur occaecati voluptates recusandae accusamus.', 'Provident quae harum sed consectetur. Magni quasi consequuntur autem sit culpa ut repellendus id. Et voluptatem consequatur aliquid corporis dicta numquam enim id. Laboriosam necessitatibus et omnis aut voluptas natus.', 'officia eaque', '1997-09-02', 3, 2, NULL, NULL),
(13, 'Ad et ut.', 'Fugiat aut sit ipsam porro odio ratione ut enim. Delectus eos temporibus ducimus voluptas qui. Ex officia dolores quaerat culpa culpa ad quasi. Blanditiis similique voluptatem voluptates ut nostrum nesciunt maiores.', 'aut nihil', '1976-02-20', 3, 2, NULL, NULL),
(14, 'Qui et est.', 'Mollitia voluptatum veniam fugiat et. Consequatur et et consequatur iste. Incidunt fugit voluptatum sapiente officia fuga facere nesciunt. Cupiditate sunt ipsa voluptatem corporis quis aut. Quasi vero debitis totam saepe dicta.', 'suscipit', '1975-08-18', 11, 3, NULL, NULL),
(15, 'Corrupti sed nostrum voluptates et.', 'Repudiandae nisi repudiandae blanditiis dolores labore et aut. Reprehenderit quidem dolores sunt ullam maiores doloribus provident. Optio cupiditate consequatur exercitationem. Illum dolor alias sit adipisci enim.', 'iusto minus', '1980-03-15', 9, 3, NULL, NULL),
(16, 'Qui dignissimos possimus labore quasi.', 'Recusandae excepturi ipsa minima sed sunt voluptatem voluptatem quam. Impedit voluptatibus a non facere.', 'omnis', '1971-12-07', 11, 3, NULL, NULL),
(17, 'Itaque perferendis possimus autem ipsam.', 'Deserunt consequatur enim aut et nulla ratione. Soluta excepturi nesciunt repellat laboriosam et accusamus perspiciatis. Qui numquam praesentium consectetur sunt quia libero debitis.', 'vero et', '1991-09-30', 11, 2, NULL, NULL),
(18, 'Expedita quia ea qui impedit et.', 'Delectus velit voluptatem ut maxime numquam ratione. Quo libero velit rem consequatur eum. Dolore voluptatem officiis nemo doloremque autem pariatur. Asperiores labore vel tempora vel molestias possimus.', 'molestiae', '1991-07-09', 8, 1, NULL, NULL),
(19, 'Sed iusto sapiente possimus aliquam.', 'Aut odio aspernatur quam aut sapiente nobis nam. Asperiores beatae doloremque occaecati. Esse corrupti repellat earum.', 'molestiae', '1993-09-18', 11, 3, NULL, NULL),
(20, 'In repellendus quibusdam voluptatem quia.', 'Labore odio reiciendis impedit quibusdam possimus rerum ab. Omnis iusto nihil doloremque dolores illo. Aut magni rem natus illo voluptas. In est minima tempora exercitationem vero quibusdam.', 'unde dolores', '1979-02-04', 9, 4, NULL, NULL),
(21, 'Fuga sint non.', 'Laboriosam debitis dicta itaque libero ipsa enim repellat. Porro nobis rerum commodi et dignissimos molestias est rem. Dolor tenetur dolore omnis accusamus sed qui.', 'est', '1971-10-25', 11, 4, NULL, NULL),
(22, 'Et dolores sit et facilis.', 'Ab labore occaecati maiores ad vero officia. Reprehenderit et ducimus esse doloremque.', 'corporis ullam', '1998-12-04', 2, 4, NULL, NULL),
(23, 'Facilis soluta impedit quis dolorem.', 'Et odio est earum cupiditate numquam eaque omnis. Voluptatem rerum vero iusto corrupti blanditiis asperiores amet. Fugit praesentium necessitatibus sed.', 'doloribus', '1995-03-03', 4, 2, NULL, NULL),
(24, 'Nemo dolores amet dolorum aut.', 'Eum consequatur voluptatibus accusamus nihil. Enim dolor amet iste quidem. Hic impedit sed qui et officia veniam autem eaque.', 'rerum', '2019-10-30', 9, 1, NULL, NULL),
(25, 'Deleniti illo labore adipisci rerum.', 'Consequatur dolorem omnis alias alias et. Aut et delectus sed modi eum. Accusantium modi qui nihil similique ea nostrum tempore. Culpa non sed quis consectetur et sit perferendis.', 'ducimus', '2003-02-15', 7, 2, NULL, NULL),
(26, 'Tenetur aut tempore nam omnis et.', 'Consequatur accusantium in pariatur occaecati nihil ad aut. At sint quisquam aut dolor officiis aliquid minus. Quo sed enim voluptatem sed. Saepe aut animi ut porro.', 'repellendus non', '1981-04-23', 8, 1, NULL, NULL),
(27, 'Atque quia quod vitae.', 'Autem qui quisquam iure omnis. Voluptas alias in non quia. Beatae iusto consequatur iste quo. Reprehenderit minima consequatur ea incidunt dolores distinctio non.', 'odio quis', '1993-02-05', 4, 3, NULL, NULL),
(28, 'Consequatur laborum ut molestiae veniam porro.', 'Illum blanditiis autem ut vero rerum voluptatem est dolor. Quisquam et et quaerat consequatur sint. Voluptatem quo consequatur est laborum atque. Repellendus suscipit quis et voluptas est voluptatibus ut dolor. Est non rem quod qui.', 'repudiandae', '1998-08-13', 10, 2, NULL, NULL),
(29, 'Expedita cum sed sed doloribus.', 'Dolorem assumenda ullam esse sit in. Officiis voluptatem provident aliquam omnis. Praesentium ea molestiae est recusandae consectetur natus. Blanditiis recusandae blanditiis eaque iure eligendi ut aut.', 'quia quaerat', '1993-07-15', 8, 2, NULL, NULL),
(30, 'Qui ullam soluta similique.', 'Et temporibus inventore error repellendus ut atque tempore impedit. Alias ut ut est dolorem omnis architecto voluptatem. Accusamus voluptatem nihil tenetur. Qui expedita dolor enim.', 'fugiat', '2004-09-21', 10, 4, NULL, NULL),
(31, 'Debitis est facere explicabo facilis rerum.', 'Reprehenderit nostrum adipisci cupiditate repellendus eum velit laudantium. Accusamus aut voluptatem voluptatem odio. Hic eaque quae eaque est autem laudantium. Natus molestiae modi ut est omnis laudantium et atque.', 'molestiae', '1986-12-29', 10, 4, NULL, NULL),
(32, 'Aliquid omnis ad maiores.', 'Sit enim consequatur recusandae autem aut quisquam. Est recusandae aut vel hic ullam numquam. Ut quasi repellat vel.', 'enim', '1992-02-02', 8, 3, NULL, NULL),
(33, 'Eum eos est omnis et.', 'Quia dolores sequi qui. Recusandae assumenda rerum totam ipsa ea. Quam voluptas sint aut consequuntur sunt.', 'laboriosam molestiae', '1984-08-17', 7, 3, NULL, NULL),
(34, 'Esse ea debitis voluptatum fugiat.', 'Et vel excepturi ut non aut. Mollitia aspernatur et ex. Dolorem ut aut quasi minima. Labore consequatur necessitatibus neque.', 'cupiditate soluta', '2018-04-27', 10, 4, NULL, NULL),
(35, 'Nihil ea voluptas doloremque blanditiis libero.', 'Assumenda nulla fuga expedita in quia illum deserunt. Nobis nihil dolorum voluptas occaecati. Suscipit nam voluptatem nam fugit ab incidunt deserunt. Illo dolor numquam in doloribus voluptas dolor.', 'dignissimos aliquam', '1998-08-12', 2, 4, NULL, NULL),
(36, 'Odio odit at dolores.', 'Corrupti illo eos vero ex eos iste sit ea. Commodi nisi aliquam temporibus nisi. Illum voluptatum ad vitae ut repudiandae. Qui id similique architecto quis ea impedit molestiae nesciunt.', 'perspiciatis', '1991-02-02', 5, 4, NULL, NULL),
(37, 'Dignissimos aperiam voluptatem dicta.', 'Vel ut numquam voluptas temporibus architecto. Cumque et optio repellendus optio. Amet vel dicta et. Sapiente aut corporis nobis alias.', 'non', '2016-02-12', 10, 3, NULL, NULL),
(38, 'Nobis assumenda similique mollitia.', 'Fugiat et necessitatibus autem ab est. Culpa quis est rem qui aut officia. Aperiam dolor molestias ipsa iure. In necessitatibus ipsam eveniet impedit corrupti vero.', 'atque voluptate', '1997-10-27', 3, 2, NULL, NULL),
(39, 'Est facere consequatur inventore.', 'Nemo id perspiciatis earum cum omnis reprehenderit. Quae necessitatibus pariatur atque soluta. Est eum voluptatem iusto veritatis quia. Deserunt asperiores quae sed cum corrupti ut voluptatibus.', 'amet repudiandae', '1988-01-09', 7, 4, NULL, NULL),
(40, 'Molestiae repellat impedit hic.', 'Ad consequatur sit in. Qui asperiores facere voluptatem. Neque quia accusamus ut unde et iste nobis.', 'veniam quisquam', '1998-07-12', 4, 1, NULL, NULL),
(41, 'Aut ut consequuntur.', 'Quis aliquam nihil unde error voluptas aut iusto. Nostrum quia ducimus voluptate possimus cum. Et dolore ducimus harum. Exercitationem omnis omnis ipsa pariatur itaque.', 'ut', '2002-01-06', 6, 1, NULL, NULL),
(42, 'Quia molestias ullam et.', 'Similique consectetur dolorem explicabo et molestiae qui aut. Dolore ratione sit tempora molestiae fuga consectetur cupiditate delectus.', 'nesciunt dicta', '1978-02-04', 5, 2, NULL, NULL),
(43, 'Esse quia et id.', 'Voluptas et modi optio sed commodi amet. Odio beatae consequatur perspiciatis dolorem inventore quaerat. Ex explicabo ut et nemo mollitia laborum.', 'aut cumque', '1993-10-07', 5, 3, NULL, NULL),
(44, 'Aut nobis consequatur quis sint dolorem.', 'Eum assumenda cum vel. Saepe earum rem quis error. Velit a assumenda debitis et voluptate. Nihil eos architecto et.', 'accusamus', '1999-08-30', 6, 1, NULL, NULL),
(45, 'Voluptatum rem autem libero.', 'At sed magni eum et recusandae earum. Ut sint natus cum autem eaque recusandae tempora ipsum. Dolorum error molestias aut reiciendis autem vel necessitatibus. Non quibusdam qui est animi.', 'natus', '1992-09-27', 6, 4, NULL, NULL),
(46, 'Soluta placeat ut asperiores sunt.', 'Ducimus in asperiores sint culpa et reiciendis est dicta. Beatae fugiat minus hic sunt quibusdam aut. Natus et facilis ullam unde asperiores deserunt in quasi. Natus vero expedita necessitatibus similique consequuntur recusandae dolores qui.', 'sed', '2009-12-27', 10, 3, NULL, NULL),
(47, 'Quia et qui illum ex quia.', 'Porro consequuntur perferendis voluptatem sunt. Libero occaecati delectus reiciendis et harum deserunt sint. Qui autem minus quis placeat cumque eligendi incidunt.', 'consequatur', '1974-12-07', 4, 4, NULL, NULL),
(48, 'Ullam ut occaecati doloribus qui debitis.', 'Aut natus doloribus expedita iste eveniet cumque. Saepe optio numquam voluptas vel voluptatem iste minima. Saepe et qui quisquam excepturi. Molestiae eaque ullam voluptatem qui.', 'ipsa explicabo', '2000-07-09', 9, 1, NULL, NULL),
(49, 'In dolorum id.', 'Aut voluptates quia facilis ut aut unde. Sed quae aspernatur labore. Minima ab voluptatem adipisci. Facere totam impedit dicta dolores vitae sint culpa.', 'ratione', '2016-06-07', 7, 3, NULL, NULL),
(50, 'Optio et cupiditate ut fuga.', 'Quisquam dolorem ducimus commodi earum. Cupiditate consequatur et dolores cumque libero sint iusto. Dolor nobis nulla sint quo aliquam quos ut ipsa.', 'est quo', '1986-09-20', 3, 1, NULL, NULL),
(51, 'Itaque quas quia doloribus dolor earum.', 'Reiciendis est consequatur omnis perspiciatis adipisci quis. Vero nulla reiciendis blanditiis. Quidem veniam eius est exercitationem nihil labore distinctio.', 'nihil', '1972-08-26', 11, 3, NULL, NULL),
(52, 'Consequatur vel dolor et illo.', 'Et rerum ducimus voluptatem debitis est facere voluptatem et. Soluta tempora quia quia ea ut aut.', 'accusamus provident', '1998-10-07', 7, 4, NULL, NULL),
(53, 'Nulla soluta laboriosam et.', 'Magni laboriosam illum cum quia quia. Sint dolorum illum iste qui quod qui. Et aut sed neque. Sint aut dolore consequatur.', 'harum quia', '1971-07-27', 3, 1, NULL, NULL),
(54, 'Nihil velit labore aspernatur.', 'Velit ex sint dolore praesentium quidem quam et. Aliquam perspiciatis facere nemo. Dicta qui iste velit dolor occaecati amet recusandae.', 'tenetur numquam', '1984-03-12', 5, 1, NULL, NULL),
(55, 'Omnis numquam ut porro.', 'Et eum et id est. Eligendi rerum mollitia eum facilis assumenda ex. Cum ad molestiae ipsum saepe quis reprehenderit.', 'a pariatur', '2017-08-27', 4, 4, NULL, NULL),
(56, 'Aut excepturi fuga iusto adipisci et.', 'Culpa corrupti nihil qui repellendus. Qui aut voluptas consectetur eum sunt natus molestiae. Eum ratione omnis eligendi.', 'et eligendi', '1992-09-07', 10, 1, NULL, NULL),
(57, 'Dolorum nobis beatae ut sunt.', 'Unde omnis repellat voluptatibus est maxime dolores voluptas. Dolores nesciunt illo harum exercitationem. Et velit quo autem molestiae quidem laudantium.', 'ratione', '2014-11-28', 3, 1, NULL, NULL),
(58, 'Ea consequatur nesciunt blanditiis occaecati.', 'Ipsa quis quis quisquam. Voluptas voluptas nostrum omnis hic debitis eos.', 'dolores sapiente', '1987-01-24', 3, 3, NULL, NULL),
(59, 'Officia est praesentium qui aut esse.', 'Molestiae eum et mollitia eius enim qui corrupti. Odit sint est ratione. Voluptas accusantium voluptas itaque.', 'quisquam', '1983-02-02', 7, 2, NULL, NULL),
(60, 'Quos et voluptas quia expedita.', 'Velit vel qui impedit nulla aut. Quis praesentium commodi laborum et est. Magnam aspernatur molestias qui eos minus.', 'nisi vero', '1992-02-22', 9, 2, NULL, NULL),
(61, 'Quidem incidunt recusandae adipisci.', 'Alias animi voluptas laudantium qui et. Exercitationem iste aliquid eos dolorem. Qui ut occaecati architecto eum aliquam nam aliquam. Cumque nobis cumque saepe delectus occaecati.', 'excepturi', '2014-06-02', 11, 4, NULL, NULL),
(62, 'Sit fugit possimus quia.', 'Blanditiis qui et omnis quibusdam excepturi possimus. Sit odio quibusdam optio similique molestiae illo dicta. Libero inventore fuga nam voluptatibus quia consectetur.', 'consequatur amet', '1978-05-08', 7, 4, NULL, NULL),
(63, 'Et natus doloribus.', 'Sapiente ut voluptatem similique voluptatem omnis rem. Dolor vero eius quibusdam sed.', 'in fugiat', '1997-10-01', 8, 3, NULL, NULL),
(64, 'Beatae consequatur quas magnam ut.', 'Accusantium omnis perspiciatis minus. Quia consequatur provident perferendis magni sit. Quidem quasi et iure eligendi dolores aliquid. Iusto facere velit atque sint.', 'mollitia illum', '2008-08-27', 11, 2, NULL, NULL),
(65, 'Aut et voluptatem qui dolorem ea.', 'Eius omnis aut rerum doloribus sint quisquam. Laboriosam ducimus esse temporibus ab qui et corrupti. Beatae placeat doloribus ut voluptatibus aut quam esse. Accusantium possimus asperiores voluptatem qui est.', 'ipsam facilis', '1973-03-05', 5, 1, NULL, NULL),
(66, 'Aut cumque autem omnis quia.', 'Voluptatem voluptas distinctio dolorum repellat quidem illo sed. Totam porro occaecati dolorum qui dolor. Aut quod in temporibus in facere nulla voluptate. Ex earum impedit cupiditate corporis velit.', 'quae nesciunt', '1983-09-06', 5, 4, NULL, NULL),
(67, 'Odit aut et eos.', 'Consectetur quia suscipit iusto officia adipisci quo. Nulla iure laudantium nobis. Qui nihil ut minus eveniet est. Nostrum in vel voluptates.', 'ipsam', '1990-03-08', 9, 2, NULL, NULL),
(68, 'Molestias quisquam aut eos dolorem.', 'Atque aspernatur quam repellat. Sint eos sed ex. Est qui est et est aspernatur incidunt.', 'alias et', '1985-11-04', 10, 2, NULL, NULL),
(69, 'Et ducimus nam dicta itaque ex.', 'Illo aliquam incidunt veritatis non accusamus velit. Eius in qui et. Velit quas repellendus qui soluta esse enim. Illum consequatur facilis impedit qui sequi voluptatem omnis.', 'nobis consequatur', '2015-10-19', 3, 1, NULL, NULL),
(70, 'Quia consequatur debitis.', 'Rerum ut molestiae molestias voluptates. Velit velit doloremque aut consectetur delectus. Error expedita magni autem quis.', 'voluptatem maxime', '2002-07-06', 5, 1, NULL, NULL),
(71, 'Rerum sed ipsa cupiditate et.', 'Optio molestias incidunt accusamus aut voluptatibus. Id tempore aut cupiditate. Laudantium debitis iusto quo est.', 'libero', '2006-05-22', 4, 1, NULL, NULL),
(72, 'Officia natus debitis vel.', 'Dolores illum possimus molestias necessitatibus molestiae rerum ratione. Odio nam sapiente autem ut aperiam est reprehenderit et. Facere qui nisi corporis ea commodi. Sed id blanditiis assumenda consequuntur necessitatibus quaerat distinctio.', 'eum', '1986-02-25', 3, 1, NULL, NULL),
(73, 'Non doloremque qui delectus repellendus.', 'Qui nulla occaecati et ipsa ratione omnis maiores labore. Aspernatur quo quia tenetur et laborum. Maxime sed minus beatae. Accusamus eum molestiae quod.', 'ratione', '2017-06-19', 9, 4, NULL, NULL),
(74, 'Rerum iure harum voluptas exercitationem.', 'Aut qui error occaecati tempore. Non vel ipsa est aspernatur laborum. Voluptatem perferendis quia commodi sunt aut excepturi. Dolores velit et optio amet.', 'porro hic', '1991-09-10', 10, 1, NULL, NULL),
(75, 'Aliquam qui sed sunt.', 'Consequatur error nihil atque. Sed dolor odit facere rerum consequatur dolorum nisi. Ipsam reprehenderit ut quos natus quam sint enim porro.', 'eum', '1990-01-12', 2, 1, NULL, NULL),
(76, 'Quam reprehenderit facere.', 'Fuga consequatur beatae officiis sequi quod. Maiores velit culpa et aliquid impedit natus officiis rerum. Dolorem velit sed officia. Et ducimus harum sit laboriosam ratione aliquid beatae animi.', 'maxime', '2008-01-16', 11, 3, NULL, NULL),
(77, 'Commodi dolorum itaque porro saepe doloremque.', 'Ducimus suscipit eum repellendus consequatur et. Ipsa laborum sequi ipsam aut nobis consequatur accusamus. Ut officia cupiditate et aspernatur.', 'vitae sed', '2009-02-19', 3, 2, NULL, NULL),
(78, 'Qui necessitatibus et illo et.', 'Et numquam adipisci molestiae sint occaecati. At deserunt rem quia omnis dolores rerum iusto.', 'quia', '1974-08-22', 5, 3, NULL, NULL),
(79, 'Reiciendis iure non id.', 'Expedita illo id ducimus ea ipsa rerum et perspiciatis. Unde sit non veritatis voluptatem ducimus. Accusantium sunt rerum sapiente nobis velit natus aut.', 'iusto', '1975-07-24', 8, 4, NULL, NULL),
(80, 'Deserunt omnis officiis.', 'Cupiditate sed esse facilis molestiae qui deserunt aliquid. Suscipit consectetur et distinctio rerum suscipit qui earum ex. Vero non cum deleniti aut iste sequi. Cupiditate sunt aliquid facere aperiam tempora illum.', 'porro necessitatibus', '2011-11-18', 4, 4, NULL, NULL),
(81, 'Sed praesentium sunt id.', 'Molestiae ea sint id temporibus assumenda quia illum. Velit consequuntur adipisci explicabo quo neque assumenda tempore veritatis. Voluptatum sunt sapiente tempore.', 'omnis', '1977-03-24', 3, 1, NULL, NULL),
(82, 'Earum nesciunt voluptatem non.', 'Sint quas asperiores ut optio ratione impedit. Nesciunt iure sequi alias ut asperiores voluptas. Qui adipisci minus omnis aut et.', 'rerum', '1982-03-22', 10, 1, NULL, NULL),
(83, 'Quo consequatur reprehenderit.', 'Sit esse et eos iste itaque unde voluptate. Soluta impedit fugit et repellendus. Qui dicta voluptatem debitis.', 'veritatis', '2001-07-05', 7, 4, NULL, NULL),
(84, 'Dolores iste impedit consequatur.', 'Aperiam consequatur atque magnam sapiente. Nisi quod eos cum qui. Autem accusantium velit excepturi quibusdam. Labore omnis tenetur velit perferendis sunt quibusdam recusandae.', 'nostrum', '2017-06-12', 9, 3, NULL, NULL),
(85, 'Omnis nulla expedita.', 'Illum harum dolores consequatur consequatur unde. Voluptatem accusamus omnis velit est sapiente porro. Et sit quo et maxime unde. Atque voluptatem numquam vero est quia voluptas.', 'ex', '2003-11-21', 9, 4, NULL, NULL),
(86, 'Voluptatibus corrupti repellendus officia nihil sit.', 'Praesentium ducimus veritatis quos veniam. Eaque qui consequuntur earum neque sequi consequuntur.', 'quas', '2014-12-31', 8, 2, NULL, NULL),
(87, 'Sit et qui deserunt iure ea.', 'Earum tempore hic accusamus aut doloribus autem nihil. Reiciendis omnis repellendus accusamus qui. Eius doloribus impedit sint neque sint.', 'dolore est', '1997-06-28', 5, 3, NULL, NULL),
(88, 'Voluptates atque qui.', 'Enim excepturi et vel vel consequatur molestiae modi. Sequi qui modi voluptatem fugiat quia autem sint dolor. Reiciendis quas dolor rerum velit et. Exercitationem sed voluptates pariatur quis sed rerum.', 'commodi', '2016-07-30', 8, 4, NULL, NULL),
(89, 'Beatae hic aspernatur impedit amet ut.', 'Assumenda aut nihil repellendus commodi. Autem quis cupiditate sed quidem temporibus voluptates est est. Hic non blanditiis molestiae ut exercitationem.', 'quis', '1978-07-07', 10, 4, NULL, NULL),
(90, 'Consequatur in excepturi.', 'Consequatur commodi eligendi molestiae praesentium voluptatem animi. Non id enim vero dignissimos. Et labore et dolorem possimus impedit sunt atque.', 'voluptatum', '2006-05-07', 10, 4, NULL, NULL),
(91, 'Ut sit laboriosam.', 'Iure consequatur numquam eum hic quia. Quod impedit ut aliquam aspernatur debitis consequuntur non. Deserunt necessitatibus sed voluptatem iste eligendi voluptas et et. Unde vel vel et et impedit doloribus atque.', 'illo ut', '2007-04-05', 10, 2, NULL, NULL),
(92, 'Dicta debitis quia.', 'Aliquid vel vitae iusto eligendi ut omnis nulla culpa. Eum earum sunt reprehenderit voluptas quia praesentium atque. Nobis tempore quo rerum nihil recusandae illum. Id ipsam voluptas vel dicta commodi nihil et.', 'velit', '2003-08-01', 7, 2, NULL, NULL),
(93, 'Qui dolorem voluptate tempore quasi iusto.', 'Veritatis eos eius voluptatem ipsa dolores eaque deserunt. Commodi expedita dicta voluptatum ea sit. Rerum quia saepe temporibus est eveniet.', 'neque quos', '2003-11-07', 7, 2, NULL, NULL),
(94, 'Laudantium quis quasi doloremque et.', 'Ipsum autem distinctio ad et. Debitis sit et impedit alias ipsa.', 'beatae', '1988-12-08', 5, 2, NULL, NULL),
(95, 'Et ad explicabo accusantium quod nulla.', 'Est ipsam accusamus earum. Eveniet aliquam et dolorem quia sit beatae. Possimus nihil eum autem ut est quia. Nisi dolore cumque vel maiores hic aspernatur. Nulla qui officiis quam cum animi.', 'qui qui', '1990-08-20', 8, 4, NULL, NULL),
(96, 'Libero eligendi est.', 'Adipisci reiciendis ea et omnis corrupti minus. Dolor non et dolorem. In aut hic doloribus officiis et voluptatem.', 'qui et', '1993-09-17', 3, 3, NULL, NULL),
(97, 'Accusantium ullam inventore.', 'Officiis officiis corporis id est et perspiciatis. Ipsa modi blanditiis fugit quibusdam. Similique et et perferendis nesciunt aperiam quia ipsa. Quo omnis perferendis cupiditate labore.', 'nemo', '1998-03-01', 3, 3, NULL, NULL),
(98, 'Voluptates culpa id atque asperiores.', 'Quo dolorum perferendis aliquam aspernatur est aut cupiditate libero. Tempora nam amet tempora omnis molestiae maiores molestiae. Ut possimus neque omnis consequatur fuga voluptatum. Est at excepturi voluptatibus earum eos voluptate.', 'facere magni', '2012-06-04', 7, 4, NULL, NULL),
(99, 'Iste totam est deleniti.', 'Id sapiente voluptatem nihil. Rerum sapiente ut et est iure voluptate id qui. Repellat deleniti unde rerum amet facilis vitae voluptatem.', 'doloremque temporibus', '2002-09-28', 2, 2, NULL, NULL),
(100, 'Magnam omnis quis mollitia officiis.', 'In rerum incidunt suscipit dolor nemo. Cupiditate rerum iste veniam rerum mollitia. Molestiae sit dolorem illum veritatis eum inventore aspernatur.', 'maiores', '1971-08-10', 4, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'browse bread 1', 'web', '2020-03-14 04:11:03', '2020-03-14 04:11:03'),
(2, 'read bread 1', 'web', '2020-03-14 04:11:03', '2020-03-14 04:11:03'),
(3, 'edit bread 1', 'web', '2020-03-14 04:11:03', '2020-03-14 04:11:03'),
(4, 'add bread 1', 'web', '2020-03-14 04:11:03', '2020-03-14 04:11:03'),
(5, 'delete bread 1', 'web', '2020-03-14 04:11:03', '2020-03-14 04:11:03');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2020-03-14 04:10:52', '2020-03-14 04:10:52'),
(2, 'user', 'web', '2020-03-14 04:10:52', '2020-03-14 04:10:52'),
(3, 'guest', 'web', '2020-03-14 04:10:52', '2020-03-14 04:10:52');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 3),
(2, 3),
(3, 3),
(4, 3),
(5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `role_hierarchy`
--

CREATE TABLE `role_hierarchy` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `hierarchy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_hierarchy`
--

INSERT INTO `role_hierarchy` (`id`, `role_id`, `hierarchy`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `santri`
--

CREATE TABLE `santri` (
  `id_santri` bigint(20) UNSIGNED NOT NULL,
  `no_induk` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asrama_id` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sekolah` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `nama_wali` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('santri','pengurus','alumni') COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `santri`
--

INSERT INTO `santri` (`id_santri`, `no_induk`, `nama`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `alamat`, `asrama_id`, `sekolah`, `id_kelas`, `id_tahun`, `nama_wali`, `telepon`, `status`, `foto`, `created_at`, `updated_at`) VALUES
(1, '123', 'adasasd', 'saddsa', '2020-03-17', 'Laki-Laki', 'dasd', '1', '1', 0, 2023, 'sdf', 'sdf', 'santri', '1584448509.jpeg', '2020-03-17 05:35:09', '2020-03-17 05:35:09'),
(2, '123', 'adasasd', 'saddsa', '2020-03-17', 'Laki-Laki', 'dasd', '1', '1', 0, 2023, 'sdf', 'sdf', 'santri', '1584448509.jpeg', '2020-03-17 05:35:09', '2020-03-17 05:35:09');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `name`, `class`) VALUES
(1, 'ongoing', 'badge badge-pill badge-primary'),
(2, 'stopped', 'badge badge-pill badge-secondary'),
(3, 'completed', 'badge badge-pill badge-success'),
(4, 'expired', 'badge badge-pill badge-warning');

-- --------------------------------------------------------

--
-- Table structure for table `tagihan`
--

CREATE TABLE `tagihan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_tagihan` char(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_santri` char(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jatuh_tempo` datetime NOT NULL,
  `jumlah` double(8,2) NOT NULL,
  `id_bayar` char(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('lunas','belum') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tagihan`
--

INSERT INTO `tagihan` (`id`, `id_tagihan`, `id_santri`, `jatuh_tempo`, `jumlah`, `id_bayar`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(83, '63', '1', '2020-04-01 00:00:00', 50000.00, '', 'lunas', NULL, '2020-05-30 17:46:36', NULL),
(84, '63', '1', '2020-05-01 00:00:00', 50000.00, '', 'lunas', NULL, '2020-05-26 23:13:09', NULL),
(85, '63', '2', '2020-04-01 00:00:00', 50000.00, '', 'lunas', NULL, '2020-05-27 06:01:44', NULL),
(86, '63', '2', '2020-05-01 00:00:00', 50000.00, '', 'lunas', NULL, '2020-05-27 06:02:25', NULL),
(87, '51', '1', '2020-05-28 00:00:00', 50000.00, '', 'belum', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tahun_ajaran`
--

CREATE TABLE `tahun_ajaran` (
  `id_tahun` bigint(20) UNSIGNED NOT NULL,
  `nama` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` enum('ganjil','genap') COLLATE utf8mb4_unicode_ci NOT NULL,
  `awal` date NOT NULL,
  `akhir` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tahun_ajaran`
--

INSERT INTO `tahun_ajaran` (`id_tahun`, `nama`, `semester`, `awal`, `akhir`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 'sdsd', 'genap', '2021-01-01', '2021-06-30', '2020-05-29 00:55:55', '2020-05-29 00:56:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` char(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` double(8,2) NOT NULL,
  `jenis` enum('debit','credit') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tanggal`, `jumlah`, `jenis`, `created_at`, `updated_at`, `deleted_at`) VALUES
('TR2020053100001', '2020-05-31', 5000.00, 'debit', NULL, NULL, NULL),
('TR2020053100002', '2020-05-31', 50000.00, 'debit', '2020-05-30 17:45:44', '2020-05-30 17:45:44', NULL),
('TR2020053100003', '2020-05-31', 50000.00, 'debit', '2020-05-30 17:46:03', '2020-05-30 17:46:03', NULL),
('TR2020053100004', '2020-05-31', 50000.00, 'debit', '2020-05-30 17:46:09', '2020-05-30 17:46:09', NULL),
('TR2020053100005', '2020-05-31', 50000.00, 'debit', '2020-05-30 17:46:36', '2020-05-30 17:46:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menuroles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `menuroles`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin', 'admin@admin.com', '2020-03-14 04:10:52', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user,admin', 'YOpfQtKQy9', '2020-03-14 04:10:52', '2020-03-14 04:10:52', NULL),
(2, 'Woodrow Jerde', 'idella41@example.com', '2020-03-14 04:10:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', 'FfZUordOz7', '2020-03-14 04:10:53', '2020-03-14 04:10:53', NULL),
(3, 'Bethany Kirlin', 'alexane67@example.net', '2020-03-14 04:10:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', 'uHfWYH3h44', '2020-03-14 04:10:53', '2020-03-14 04:10:53', NULL),
(4, 'Doug Parisian', 'wehner.gardner@example.org', '2020-03-14 04:10:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', 'QD8DTCfE3I', '2020-03-14 04:10:53', '2020-03-14 04:10:53', NULL),
(5, 'Lennie Jacobs V', 'kennedy00@example.org', '2020-03-14 04:10:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', 'CoDbfNOM0E', '2020-03-14 04:10:53', '2020-03-14 04:10:53', NULL),
(6, 'Beatrice Blanda DVM', 'upowlowski@example.com', '2020-03-14 04:10:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', 'CuPfExfTu0', '2020-03-14 04:10:53', '2020-03-14 04:10:53', NULL),
(7, 'Dr. Mallory Kris', 'terdman@example.com', '2020-03-14 04:10:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', 'H6c0llDPg6', '2020-03-14 04:10:53', '2020-03-14 04:10:53', NULL),
(8, 'Dasia O\'Reilly Jr.', 'dolly63@example.com', '2020-03-14 04:10:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', 'mdvuCEbH7U', '2020-03-14 04:10:53', '2020-03-14 04:10:53', NULL),
(9, 'Dr. Camryn Pfannerstill', 'berneice.blanda@example.com', '2020-03-14 04:10:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', 'iYZORb6a4i', '2020-03-14 04:10:53', '2020-03-14 04:10:53', NULL),
(10, 'Michaela Lockman DVM', 'helga44@example.net', '2020-03-14 04:10:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', 'xCSnp2PiQe', '2020-03-14 04:10:53', '2020-03-14 04:10:53', NULL),
(11, 'Ardith Kutch', 'haylee.towne@example.com', '2020-03-14 04:10:53', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', '6wvrrdaRlU', '2020-03-14 04:10:53', '2020-03-14 04:10:53', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asrama`
--
ALTER TABLE `asrama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bayar`
--
ALTER TABLE `bayar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_tagihans`
--
ALTER TABLE `daftar_tagihans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_tgh`
--
ALTER TABLE `daftar_tgh`
  ADD PRIMARY KEY (`id_tagihan`);

--
-- Indexes for table `example`
--
ALTER TABLE `example`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `folder`
--
ALTER TABLE `folder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_field`
--
ALTER TABLE `form_field`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_tagihan`
--
ALTER TABLE `jenis_tagihan`
  ADD PRIMARY KEY (`id_jens tagihan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `menulist`
--
ALTER TABLE `menulist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_role`
--
ALTER TABLE `menu_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `role_hierarchy`
--
ALTER TABLE `role_hierarchy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `santri`
--
ALTER TABLE `santri`
  ADD PRIMARY KEY (`id_santri`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  ADD PRIMARY KEY (`id_tahun`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asrama`
--
ALTER TABLE `asrama`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bayar`
--
ALTER TABLE `bayar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `daftar_tagihans`
--
ALTER TABLE `daftar_tagihans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `daftar_tgh`
--
ALTER TABLE `daftar_tgh`
  MODIFY `id_tagihan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `example`
--
ALTER TABLE `example`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `folder`
--
ALTER TABLE `folder`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `form_field`
--
ALTER TABLE `form_field`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jenis_tagihan`
--
ALTER TABLE `jenis_tagihan`
  MODIFY `id_jens tagihan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menulist`
--
ALTER TABLE `menulist`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `menu_role`
--
ALTER TABLE `menu_role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role_hierarchy`
--
ALTER TABLE `role_hierarchy`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `santri`
--
ALTER TABLE `santri`
  MODIFY `id_santri` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tagihan`
--
ALTER TABLE `tagihan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  MODIFY `id_tahun` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
