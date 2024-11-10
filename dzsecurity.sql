-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 10, 2024 at 07:21 AM
-- Server version: 8.0.19
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dzsecurity`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_08_19_000000_create_failed_jobs_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2020_06_16_114938_create_t_users_table', 1),
(4, '2020_06_16_115007_create_t_admin_table', 1),
(5, '2020_06_24_094456_create_t_system_settings_table', 1),
(6, '2021_11_17_084227_create_permission_tables', 1),
(7, '2021_11_17_085355_add_columns_to_permissions_table', 1),
(8, '2021_11_17_102012_add_columns_to_roles_table', 1),
(9, '2021_11_17_102014_create_t_contact_table', 1),
(10, '2021_12_07_082856_change_e_type_column_in_t_contact_table', 1),
(11, '2021_12_09_075400_change_s_value_column_in_t_system_settings', 1),
(12, '2022_01_25_120709_remove_unique_from_email_and_username_in_t_admin_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\TAdmin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`, `display_name`, `parent_id`) VALUES
(1, 'admins', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:18:23', 'مدراء النظام', NULL),
(2, 'admins-view', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:33:23', 'رؤية المدراء', 1),
(4, 'admins-store', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:33:07', 'اضافة تعديل مدير', 1),
(5, 'admins-status', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:32:58', 'تغيير حالة المدراء', 1),
(6, 'admins-delete', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:32:47', 'حذف المدراء', 1),
(7, 'users', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:18:23', 'المستخدمين', NULL),
(8, 'users-view', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:32:40', 'رؤية المستخدمين', 7),
(10, 'users-store', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:32:21', 'اضافة وتعديل المستخدمين', 7),
(11, 'users-status', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:32:09', 'تغيير حالة المستخدمين', 7),
(12, 'users-delete', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:32:02', 'حذف المستخدمين', 7),
(13, 'brands', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:18:23', 'العلامات التجارية', NULL),
(14, 'brands-view', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:31:05', 'رؤية العلامات التجارية', 13),
(15, 'brands-store', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:30:53', 'اضافة وتعديل علامة تجارية', 13),
(16, 'brands-status', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:30:42', 'تغيير حالة العلامات التجارية', 13),
(18, 'brands-delete', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:30:24', 'حذف العلامات التجارية', 13),
(19, 'slider', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:18:23', 'شريط الصور', NULL),
(20, 'slider-view', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:30:16', 'رؤية السلايدر', 19),
(21, 'slider-store', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:30:08', 'اضافة تعديل سلايدر', 19),
(22, 'slider-status', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:29:54', 'تغيير حالة  السلايد', 19),
(23, 'slider-delete', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:29:46', 'حذف السلايدر', 19),
(24, 'partners', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:18:23', 'الشركاء', NULL),
(25, 'partners-view', 'admin', '2021-12-15 08:18:23', '2021-12-15 08:29:39', 'رؤية الشركاء', 24),
(26, 'partners-store', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:29:32', 'اضافة وتعديل الشركاء', 24),
(27, 'partners-status', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:29:21', 'تغيير حالة الشركاء', 24),
(28, 'partners-delete', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:29:12', 'حذف الشركاء', 24),
(29, 'testimonials', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:18:24', 'قالوا عنا', NULL),
(30, 'testimonials-view', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:29:05', 'رؤية الأراء', 29),
(31, 'testimonials-store', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:28:56', 'اضافة وتعديل الأراء', 29),
(32, 'testimonials-status', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:28:38', 'تغيير حالة الأراء', 29),
(33, 'testimonials-delete', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:28:45', 'حذف الأراء', 29),
(34, 'tags', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:18:24', 'الوسوم', NULL),
(35, 'tags-view', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:28:21', 'رؤية الوسوم', 34),
(36, 'tags-store', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:28:10', 'اضافة وتعديل وسم', 34),
(37, 'tags-status', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:27:52', 'تغيير حالة الوسوم', 34),
(38, 'tags-delete', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:27:44', 'حذف الوسوم', 34),
(39, 'team', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:18:24', 'الفريق', NULL),
(40, 'team-view', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:27:37', 'رؤية الفريق', 39),
(41, 'team-store', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:27:31', 'اضافة تعديل الفريق', 39),
(42, 'team-status', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:27:19', 'تعديل حالة الفريق', 39),
(43, 'team-delete', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:27:11', 'حذف الفريق', 39),
(44, 'about', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:18:24', 'من نحن', NULL),
(45, 'about-view', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:27:04', 'رؤية من نحن', 44),
(46, 'about-store', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:26:57', 'اضافة تعديل من نحن', 44),
(47, 'about-status', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:26:50', 'تغيير حالة من نحن', 44),
(49, 'products', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:18:24', 'المنتجات', NULL),
(50, 'products-view', 'admin', '2021-12-15 08:18:24', '2021-12-15 10:06:29', 'رؤية المنتجات', 49),
(51, 'products-store', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:26:15', 'اضافة وتعديل منتجات', 49),
(52, 'products-delete', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:26:01', 'حذف المنتجات', 49),
(53, 'jobs', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:18:24', 'الوظائف', NULL),
(54, 'jobs-view', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:25:52', 'رؤية والوظائف', 53),
(55, 'jobs-status', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:25:42', 'تعديل حالة الوظائف', 53),
(56, 'jobs-store', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:25:33', 'اضافة وتعديل الوظائف', 53),
(57, 'jobs-delete', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:25:19', 'حذف الوظائف', 53),
(58, 'news', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:18:24', 'الأخبار والفعاليات', NULL),
(59, 'news-view', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:25:09', 'رؤية الأخبار والفعاليات', 58),
(60, 'news-store', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:24:56', 'اضافة وتعديل الأخبار والفعاليات', 58),
(61, 'campaigns', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:18:24', 'الحملات والعروض', NULL),
(62, 'campaigns-view', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:24:33', 'رؤية الحملات والعروض', 61),
(63, 'albums', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:18:24', 'الألبومات', NULL),
(64, 'albums-view', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:24:24', 'رؤية الألبومات', 63),
(65, 'albums-status', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:24:16', 'تعديل حالة الألبوم', 63),
(66, 'albums-store', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:23:47', 'اضافة وتعديل الألبومات', 63),
(67, 'albums-delete', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:23:34', 'حذف الألبومات', 63),
(69, 'job-applications-view', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:23:23', 'رؤية طلبات التوظيف', 76),
(70, 'job-applications-delete', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:23:06', 'حذف طلبات التوظيف', 76),
(71, 'contacts', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:18:24', 'رسائل اتصل بنا', NULL),
(72, 'contacts-view', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:22:02', 'عرض رسائل اتصل', 71),
(73, 'contacts-delete', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:21:52', 'حذف رسائل اتصل بنا', 71),
(74, 'settings', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:18:24', 'الإعدادات', NULL),
(75, 'settings-edit', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:20:48', 'تعديل إعدادات النظام', 74),
(76, 'job-applications', 'admin', '2021-12-15 08:18:24', '2021-12-15 08:18:24', 'طلبات التوظيف', NULL),
(92, 'products-status', 'admin', '2021-12-15 09:07:53', '2021-12-15 09:08:25', 'تغيير حالة المنتجات', 49),
(93, 'news-status', 'admin', '2021-12-15 09:07:53', '2021-12-15 09:08:39', 'تغيير حالة الأخبار والفعاليات', 58),
(94, 'news-delete', 'admin', '2021-12-15 09:07:53', '2021-12-15 09:08:49', 'حذف الأخبار والفعاليات', 58),
(95, 'campaigns-status', 'admin', '2021-12-15 09:07:53', '2021-12-15 09:09:00', 'تغيير حالة الحملات', 61),
(96, 'campaigns-store', 'admin', '2021-12-15 09:07:53', '2021-12-15 09:09:18', 'اضافة وتعديل حملات', 61),
(97, 'campaigns-delete', 'admin', '2021-12-15 09:07:53', '2021-12-15 09:09:15', 'حذف الحملات', 61),
(100, 'about-delete', 'admin', '2021-12-15 10:45:39', '2021-12-15 10:45:39', 'حذف من نحن', 44),
(101, 'roles', 'admin', '2021-12-14 21:00:00', NULL, 'الأدوار', NULL),
(102, 'roles-view', 'admin', '2021-12-15 10:47:29', '2021-12-15 10:47:29', 'رؤية الأدوار', 101),
(103, 'roles-store', 'admin', '2021-12-15 10:47:29', '2021-12-15 10:47:29', 'اضافة وتعديل دور', 101),
(104, 'roles-delete', 'admin', '2021-12-15 10:47:29', '2021-12-15 10:47:29', 'حذف الأدوار', 101),
(105, 'mailing-list', 'admin', '2021-12-15 10:47:29', '2021-12-15 10:47:29', 'القوائم البريدية', NULL),
(106, 'view-mailing-list', 'admin', '2021-12-15 10:47:29', '2021-12-15 10:47:29', 'رؤية القائمة البريدية', 105);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `display_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`, `display_name`) VALUES
(1, 'admin', 'admin', '2021-12-14 09:09:17', '2021-12-14 09:09:17', 'مدير');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(2, 1),
(4, 1),
(5, 1),
(6, 1),
(8, 1),
(10, 1),
(11, 1),
(12, 1),
(14, 1),
(15, 1),
(16, 1),
(18, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(45, 1),
(46, 1),
(47, 1),
(50, 1),
(51, 1),
(52, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(59, 1),
(60, 1),
(62, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(69, 1),
(70, 1),
(72, 1),
(73, 1),
(75, 1),
(92, 1),
(93, 1),
(94, 1),
(95, 1),
(96, 1),
(97, 1),
(100, 1),
(102, 1),
(103, 1),
(104, 1),
(106, 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_admin`
--

CREATE TABLE `t_admin` (
  `pk_i_id` int UNSIGNED NOT NULL,
  `s_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b_enabled` int NOT NULL DEFAULT '1',
  `dt_created_date` timestamp NULL DEFAULT NULL,
  `dt_modified_date` timestamp NULL DEFAULT NULL,
  `dt_deleted_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_admin`
--

INSERT INTO `t_admin` (`pk_i_id`, `s_name`, `s_username`, `s_address`, `s_avatar`, `s_password`, `s_email`, `s_mobile`, `remember_token`, `b_enabled`, `dt_created_date`, `dt_modified_date`, `dt_deleted_date`) VALUES
(1, 'Admin', 'admin', NULL, NULL, '$2y$10$MX0e/qMxQC/6tlJFrq8DS.VY5TLiN2lwrmiiNmnEcIWC5Ss5BCh6S', 'admin@admin.com', NULL, NULL, 1, '2023-06-18 14:05:52', '2023-06-18 14:05:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_contact`
--

CREATE TABLE `t_contact` (
  `pk_i_id` int UNSIGNED NOT NULL,
  `fk_i_user_id` int DEFAULT NULL,
  `s_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_content` text COLLATE utf8mb4_unicode_ci,
  `b_seen` int NOT NULL DEFAULT '0',
  `e_type` enum('CONTACT','COMPLAINT','SUGGESTION','ANOTHER') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dt_created_date` timestamp NULL DEFAULT NULL,
  `dt_modified_date` timestamp NULL DEFAULT NULL,
  `dt_deleted_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_system_settings`
--

CREATE TABLE `t_system_settings` (
  `pk_i_id` int UNSIGNED NOT NULL,
  `s_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_value` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b_enabled` int NOT NULL DEFAULT '1',
  `dt_created_date` timestamp NULL DEFAULT NULL,
  `dt_modified_date` datetime DEFAULT NULL,
  `dt_deleted_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_users`
--

CREATE TABLE `t_users` (
  `pk_i_id` int UNSIGNED NOT NULL,
  `s_username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dt_birth_date` datetime DEFAULT NULL,
  `s_mobile` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b_enabled` int NOT NULL DEFAULT '1',
  `dt_created_date` timestamp NULL DEFAULT NULL,
  `dt_modified_date` timestamp NULL DEFAULT NULL,
  `dt_deleted_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `t_admin`
--
ALTER TABLE `t_admin`
  ADD PRIMARY KEY (`pk_i_id`);

--
-- Indexes for table `t_contact`
--
ALTER TABLE `t_contact`
  ADD PRIMARY KEY (`pk_i_id`);

--
-- Indexes for table `t_system_settings`
--
ALTER TABLE `t_system_settings`
  ADD PRIMARY KEY (`pk_i_id`),
  ADD UNIQUE KEY `t_system_settings_s_key_unique` (`s_key`);

--
-- Indexes for table `t_users`
--
ALTER TABLE `t_users`
  ADD PRIMARY KEY (`pk_i_id`),
  ADD UNIQUE KEY `t_users_s_username_unique` (`s_username`),
  ADD UNIQUE KEY `t_users_s_email_unique` (`s_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_admin`
--
ALTER TABLE `t_admin`
  MODIFY `pk_i_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_contact`
--
ALTER TABLE `t_contact`
  MODIFY `pk_i_id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_system_settings`
--
ALTER TABLE `t_system_settings`
  MODIFY `pk_i_id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_users`
--
ALTER TABLE `t_users`
  MODIFY `pk_i_id` int UNSIGNED NOT NULL AUTO_INCREMENT;

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
