-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 22-Jun-2023 às 16:24
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `portalsertao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ps_commentmeta`
--

DROP TABLE IF EXISTS `ps_commentmeta`;
CREATE TABLE IF NOT EXISTS `ps_commentmeta` (
  `meta_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `comment_id` bigint UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci,
  PRIMARY KEY (`meta_id`),
  KEY `comment_id` (`comment_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ps_comments`
--

DROP TABLE IF EXISTS `ps_comments`;
CREATE TABLE IF NOT EXISTS `ps_comments` (
  `comment_ID` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `comment_post_ID` bigint UNSIGNED NOT NULL DEFAULT '0',
  `comment_author` tinytext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `comment_author_email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_author_url` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_author_IP` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_content` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `comment_karma` int NOT NULL DEFAULT '0',
  `comment_approved` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '1',
  `comment_agent` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_type` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'comment',
  `comment_parent` bigint UNSIGNED NOT NULL DEFAULT '0',
  `user_id` bigint UNSIGNED NOT NULL DEFAULT '0',
  PRIMARY KEY (`comment_ID`),
  KEY `comment_post_ID` (`comment_post_ID`),
  KEY `comment_approved_date_gmt` (`comment_approved`,`comment_date_gmt`),
  KEY `comment_date_gmt` (`comment_date_gmt`),
  KEY `comment_parent` (`comment_parent`),
  KEY `comment_author_email` (`comment_author_email`(10))
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Extraindo dados da tabela `ps_comments`
--

INSERT INTO `ps_comments` (`comment_ID`, `comment_post_ID`, `comment_author`, `comment_author_email`, `comment_author_url`, `comment_author_IP`, `comment_date`, `comment_date_gmt`, `comment_content`, `comment_karma`, `comment_approved`, `comment_agent`, `comment_type`, `comment_parent`, `user_id`) VALUES
(1, 1, 'Um comentarista do WordPress', 'wapuu@wordpress.example', 'https://br.wordpress.org/', '', '2023-05-24 14:03:14', '2023-05-24 17:03:14', 'Oi, isto é um comentário.\nPara iniciar a moderar, editar e excluir comentários, visite a tela Comentários no painel.\nOs avatares dos comentaristas vêm do <a href=\"https://br.gravatar.com/\">Gravatar</a>.', 0, 'post-trashed', '', 'comment', 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ps_links`
--

DROP TABLE IF EXISTS `ps_links`;
CREATE TABLE IF NOT EXISTS `ps_links` (
  `link_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `link_url` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_image` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_target` varchar(25) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_description` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_visible` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'Y',
  `link_owner` bigint UNSIGNED NOT NULL DEFAULT '1',
  `link_rating` int NOT NULL DEFAULT '0',
  `link_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `link_rel` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_notes` mediumtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `link_rss` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`link_id`),
  KEY `link_visible` (`link_visible`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ps_options`
--

DROP TABLE IF EXISTS `ps_options`;
CREATE TABLE IF NOT EXISTS `ps_options` (
  `option_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `option_name` varchar(191) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `option_value` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `autoload` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`option_id`),
  UNIQUE KEY `option_name` (`option_name`),
  KEY `autoload` (`autoload`)
) ENGINE=MyISAM AUTO_INCREMENT=429 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Extraindo dados da tabela `ps_options`
--

INSERT INTO `ps_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(1, 'siteurl', 'http://localhost/portalsertao', 'yes'),
(2, 'home', 'http://localhost/portalsertao', 'yes'),
(3, 'blogname', 'Portal Sertão', 'yes'),
(4, 'blogdescription', '', 'yes'),
(5, 'users_can_register', '0', 'yes'),
(6, 'admin_email', 'joaotdn@gmail.com', 'yes'),
(7, 'start_of_week', '0', 'yes'),
(8, 'use_balanceTags', '0', 'yes'),
(9, 'use_smilies', '1', 'yes'),
(10, 'require_name_email', '1', 'yes'),
(11, 'comments_notify', '1', 'yes'),
(12, 'posts_per_rss', '10', 'yes'),
(13, 'rss_use_excerpt', '0', 'yes'),
(14, 'mailserver_url', 'mail.example.com', 'yes'),
(15, 'mailserver_login', 'login@example.com', 'yes'),
(16, 'mailserver_pass', 'password', 'yes'),
(17, 'mailserver_port', '110', 'yes'),
(18, 'default_category', '1', 'yes'),
(19, 'default_comment_status', 'open', 'yes'),
(20, 'default_ping_status', 'open', 'yes'),
(21, 'default_pingback_flag', '1', 'yes'),
(22, 'posts_per_page', '10', 'yes'),
(23, 'date_format', 'j \\d\\e F \\d\\e Y', 'yes'),
(24, 'time_format', 'H:i', 'yes'),
(25, 'links_updated_date_format', 'j \\d\\e F \\d\\e Y, H:i', 'yes'),
(26, 'comment_moderation', '0', 'yes'),
(27, 'moderation_notify', '1', 'yes'),
(28, 'permalink_structure', '/%year%/%monthnum%/%day%/%postname%/', 'yes'),
(29, 'rewrite_rules', 'a:94:{s:11:\"^wp-json/?$\";s:22:\"index.php?rest_route=/\";s:14:\"^wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:21:\"^index.php/wp-json/?$\";s:22:\"index.php?rest_route=/\";s:24:\"^index.php/wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:17:\"^wp-sitemap\\.xml$\";s:23:\"index.php?sitemap=index\";s:17:\"^wp-sitemap\\.xsl$\";s:36:\"index.php?sitemap-stylesheet=sitemap\";s:23:\"^wp-sitemap-index\\.xsl$\";s:34:\"index.php?sitemap-stylesheet=index\";s:48:\"^wp-sitemap-([a-z]+?)-([a-z\\d_-]+?)-(\\d+?)\\.xml$\";s:75:\"index.php?sitemap=$matches[1]&sitemap-subtype=$matches[2]&paged=$matches[3]\";s:34:\"^wp-sitemap-([a-z]+?)-(\\d+?)\\.xml$\";s:47:\"index.php?sitemap=$matches[1]&paged=$matches[2]\";s:47:\"category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:42:\"category/(.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:23:\"category/(.+?)/embed/?$\";s:46:\"index.php?category_name=$matches[1]&embed=true\";s:35:\"category/(.+?)/page/?([0-9]{1,})/?$\";s:53:\"index.php?category_name=$matches[1]&paged=$matches[2]\";s:17:\"category/(.+?)/?$\";s:35:\"index.php?category_name=$matches[1]\";s:44:\"tag/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:39:\"tag/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:20:\"tag/([^/]+)/embed/?$\";s:36:\"index.php?tag=$matches[1]&embed=true\";s:32:\"tag/([^/]+)/page/?([0-9]{1,})/?$\";s:43:\"index.php?tag=$matches[1]&paged=$matches[2]\";s:14:\"tag/([^/]+)/?$\";s:25:\"index.php?tag=$matches[1]\";s:45:\"type/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:40:\"type/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:21:\"type/([^/]+)/embed/?$\";s:44:\"index.php?post_format=$matches[1]&embed=true\";s:33:\"type/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?post_format=$matches[1]&paged=$matches[2]\";s:15:\"type/([^/]+)/?$\";s:33:\"index.php?post_format=$matches[1]\";s:48:\".*wp-(atom|rdf|rss|rss2|feed|commentsrss2)\\.php$\";s:18:\"index.php?feed=old\";s:20:\".*wp-app\\.php(/.*)?$\";s:19:\"index.php?error=403\";s:18:\".*wp-register.php$\";s:23:\"index.php?register=true\";s:32:\"feed/(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:27:\"(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:8:\"embed/?$\";s:21:\"index.php?&embed=true\";s:20:\"page/?([0-9]{1,})/?$\";s:28:\"index.php?&paged=$matches[1]\";s:41:\"comments/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:36:\"comments/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:17:\"comments/embed/?$\";s:21:\"index.php?&embed=true\";s:44:\"search/(.+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:39:\"search/(.+)/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:20:\"search/(.+)/embed/?$\";s:34:\"index.php?s=$matches[1]&embed=true\";s:32:\"search/(.+)/page/?([0-9]{1,})/?$\";s:41:\"index.php?s=$matches[1]&paged=$matches[2]\";s:14:\"search/(.+)/?$\";s:23:\"index.php?s=$matches[1]\";s:47:\"author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:42:\"author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:23:\"author/([^/]+)/embed/?$\";s:44:\"index.php?author_name=$matches[1]&embed=true\";s:35:\"author/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?author_name=$matches[1]&paged=$matches[2]\";s:17:\"author/([^/]+)/?$\";s:33:\"index.php?author_name=$matches[1]\";s:69:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:64:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:45:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/embed/?$\";s:74:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&embed=true\";s:57:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:81:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]\";s:39:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$\";s:63:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]\";s:56:\"([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:51:\"([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:32:\"([0-9]{4})/([0-9]{1,2})/embed/?$\";s:58:\"index.php?year=$matches[1]&monthnum=$matches[2]&embed=true\";s:44:\"([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:65:\"index.php?year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]\";s:26:\"([0-9]{4})/([0-9]{1,2})/?$\";s:47:\"index.php?year=$matches[1]&monthnum=$matches[2]\";s:43:\"([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:38:\"([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:19:\"([0-9]{4})/embed/?$\";s:37:\"index.php?year=$matches[1]&embed=true\";s:31:\"([0-9]{4})/page/?([0-9]{1,})/?$\";s:44:\"index.php?year=$matches[1]&paged=$matches[2]\";s:13:\"([0-9]{4})/?$\";s:26:\"index.php?year=$matches[1]\";s:58:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:68:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:88:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:83:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:83:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:64:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:53:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/embed/?$\";s:91:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&embed=true\";s:57:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/trackback/?$\";s:85:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&tb=1\";s:77:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:97:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]\";s:72:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:97:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]\";s:65:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/page/?([0-9]{1,})/?$\";s:98:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&paged=$matches[5]\";s:72:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/comment-page-([0-9]{1,})/?$\";s:98:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&cpage=$matches[5]\";s:61:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)(?:/([0-9]+))?/?$\";s:97:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&page=$matches[5]\";s:47:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:57:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:77:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:72:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:72:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:53:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:64:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$\";s:81:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&cpage=$matches[4]\";s:51:\"([0-9]{4})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$\";s:65:\"index.php?year=$matches[1]&monthnum=$matches[2]&cpage=$matches[3]\";s:38:\"([0-9]{4})/comment-page-([0-9]{1,})/?$\";s:44:\"index.php?year=$matches[1]&cpage=$matches[2]\";s:27:\".?.+?/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:37:\".?.+?/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:57:\".?.+?/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:33:\".?.+?/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:16:\"(.?.+?)/embed/?$\";s:41:\"index.php?pagename=$matches[1]&embed=true\";s:20:\"(.?.+?)/trackback/?$\";s:35:\"index.php?pagename=$matches[1]&tb=1\";s:40:\"(.?.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:35:\"(.?.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:28:\"(.?.+?)/page/?([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&paged=$matches[2]\";s:35:\"(.?.+?)/comment-page-([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&cpage=$matches[2]\";s:24:\"(.?.+?)(?:/([0-9]+))?/?$\";s:47:\"index.php?pagename=$matches[1]&page=$matches[2]\";}', 'yes'),
(30, 'hack_file', '0', 'yes'),
(31, 'blog_charset', 'UTF-8', 'yes'),
(32, 'moderation_keys', '', 'no'),
(33, 'active_plugins', 'a:1:{i:0;s:21:\"wp-polls/wp-polls.php\";}', 'yes'),
(34, 'category_base', '', 'yes'),
(35, 'ping_sites', 'http://rpc.pingomatic.com/', 'yes'),
(36, 'comment_max_links', '2', 'yes'),
(37, 'gmt_offset', '0', 'yes'),
(38, 'default_email_category', '1', 'yes'),
(39, 'recently_edited', '', 'no'),
(40, 'template', 'portalsertao', 'yes'),
(41, 'stylesheet', 'portalsertao', 'yes'),
(42, 'comment_registration', '0', 'yes'),
(43, 'html_type', 'text/html', 'yes'),
(44, 'use_trackback', '0', 'yes'),
(45, 'default_role', 'subscriber', 'yes'),
(46, 'db_version', '53496', 'yes'),
(47, 'uploads_use_yearmonth_folders', '1', 'yes'),
(48, 'upload_path', '', 'yes'),
(49, 'blog_public', '1', 'yes'),
(50, 'default_link_category', '2', 'yes'),
(51, 'show_on_front', 'posts', 'yes'),
(52, 'tag_base', '', 'yes'),
(53, 'show_avatars', '1', 'yes'),
(54, 'avatar_rating', 'G', 'yes'),
(55, 'upload_url_path', '', 'yes'),
(56, 'thumbnail_size_w', '150', 'yes'),
(57, 'thumbnail_size_h', '150', 'yes'),
(58, 'thumbnail_crop', '1', 'yes'),
(59, 'medium_size_w', '300', 'yes'),
(60, 'medium_size_h', '300', 'yes'),
(61, 'avatar_default', 'mystery', 'yes'),
(62, 'large_size_w', '1024', 'yes'),
(63, 'large_size_h', '1024', 'yes'),
(64, 'image_default_link_type', 'none', 'yes'),
(65, 'image_default_size', '', 'yes'),
(66, 'image_default_align', '', 'yes'),
(67, 'close_comments_for_old_posts', '0', 'yes'),
(68, 'close_comments_days_old', '14', 'yes'),
(69, 'thread_comments', '1', 'yes'),
(70, 'thread_comments_depth', '5', 'yes'),
(71, 'page_comments', '0', 'yes'),
(72, 'comments_per_page', '50', 'yes'),
(73, 'default_comments_page', 'newest', 'yes'),
(74, 'comment_order', 'asc', 'yes'),
(75, 'sticky_posts', 'a:0:{}', 'yes'),
(76, 'widget_categories', 'a:0:{}', 'yes'),
(77, 'widget_text', 'a:0:{}', 'yes'),
(78, 'widget_rss', 'a:0:{}', 'yes'),
(79, 'uninstall_plugins', 'a:0:{}', 'no'),
(80, 'timezone_string', 'America/Sao_Paulo', 'yes'),
(81, 'page_for_posts', '0', 'yes'),
(82, 'page_on_front', '0', 'yes'),
(83, 'default_post_format', '0', 'yes'),
(84, 'link_manager_enabled', '0', 'yes'),
(85, 'finished_splitting_shared_terms', '1', 'yes'),
(86, 'site_icon', '0', 'yes'),
(87, 'medium_large_size_w', '768', 'yes'),
(88, 'medium_large_size_h', '0', 'yes'),
(89, 'wp_page_for_privacy_policy', '3', 'yes'),
(90, 'show_comments_cookies_opt_in', '1', 'yes'),
(91, 'admin_email_lifespan', '1700499794', 'yes'),
(92, 'disallowed_keys', '', 'no'),
(93, 'comment_previously_approved', '1', 'yes'),
(94, 'auto_plugin_theme_update_emails', 'a:0:{}', 'no'),
(95, 'auto_update_core_dev', 'enabled', 'yes'),
(96, 'auto_update_core_minor', 'enabled', 'yes'),
(97, 'auto_update_core_major', 'enabled', 'yes'),
(98, 'wp_force_deactivated_plugins', 'a:0:{}', 'yes'),
(99, 'initial_db_version', '53496', 'yes'),
(100, 'ps_user_roles', 'a:5:{s:13:\"administrator\";a:2:{s:4:\"name\";s:13:\"Administrator\";s:12:\"capabilities\";a:62:{s:13:\"switch_themes\";b:1;s:11:\"edit_themes\";b:1;s:16:\"activate_plugins\";b:1;s:12:\"edit_plugins\";b:1;s:10:\"edit_users\";b:1;s:10:\"edit_files\";b:1;s:14:\"manage_options\";b:1;s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:6:\"import\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:8:\"level_10\";b:1;s:7:\"level_9\";b:1;s:7:\"level_8\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;s:12:\"delete_users\";b:1;s:12:\"create_users\";b:1;s:17:\"unfiltered_upload\";b:1;s:14:\"edit_dashboard\";b:1;s:14:\"update_plugins\";b:1;s:14:\"delete_plugins\";b:1;s:15:\"install_plugins\";b:1;s:13:\"update_themes\";b:1;s:14:\"install_themes\";b:1;s:11:\"update_core\";b:1;s:10:\"list_users\";b:1;s:12:\"remove_users\";b:1;s:13:\"promote_users\";b:1;s:18:\"edit_theme_options\";b:1;s:13:\"delete_themes\";b:1;s:6:\"export\";b:1;s:12:\"manage_polls\";b:1;}}s:6:\"editor\";a:2:{s:4:\"name\";s:6:\"Editor\";s:12:\"capabilities\";a:34:{s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;}}s:6:\"author\";a:2:{s:4:\"name\";s:6:\"Author\";s:12:\"capabilities\";a:10:{s:12:\"upload_files\";b:1;s:10:\"edit_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;s:22:\"delete_published_posts\";b:1;}}s:11:\"contributor\";a:2:{s:4:\"name\";s:11:\"Contributor\";s:12:\"capabilities\";a:5:{s:10:\"edit_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;}}s:10:\"subscriber\";a:2:{s:4:\"name\";s:10:\"Subscriber\";s:12:\"capabilities\";a:2:{s:4:\"read\";b:1;s:7:\"level_0\";b:1;}}}', 'yes'),
(101, 'fresh_site', '0', 'yes'),
(102, 'WPLANG', 'pt_BR', 'yes'),
(103, 'user_count', '1', 'no'),
(104, 'widget_block', 'a:6:{i:2;a:1:{s:7:\"content\";s:19:\"<!-- wp:search /-->\";}i:3;a:1:{s:7:\"content\";s:156:\"<!-- wp:group --><div class=\"wp-block-group\"><!-- wp:heading --><h2>Posts recentes</h2><!-- /wp:heading --><!-- wp:latest-posts /--></div><!-- /wp:group -->\";}i:4;a:1:{s:7:\"content\";s:224:\"<!-- wp:group --><div class=\"wp-block-group\"><!-- wp:heading --><h2>Comentários</h2><!-- /wp:heading --><!-- wp:latest-comments {\"displayAvatar\":false,\"displayDate\":false,\"displayExcerpt\":false} /--></div><!-- /wp:group -->\";}i:5;a:1:{s:7:\"content\";s:146:\"<!-- wp:group --><div class=\"wp-block-group\"><!-- wp:heading --><h2>Arquivos</h2><!-- /wp:heading --><!-- wp:archives /--></div><!-- /wp:group -->\";}i:6;a:1:{s:7:\"content\";s:150:\"<!-- wp:group --><div class=\"wp-block-group\"><!-- wp:heading --><h2>Categorias</h2><!-- /wp:heading --><!-- wp:categories /--></div><!-- /wp:group -->\";}s:12:\"_multiwidget\";i:1;}', 'yes'),
(105, 'sidebars_widgets', 'a:2:{s:19:\"wp_inactive_widgets\";a:5:{i:0;s:7:\"block-2\";i:1;s:7:\"block-3\";i:2;s:7:\"block-4\";i:3;s:7:\"block-5\";i:4;s:7:\"block-6\";}s:13:\"array_version\";i:3;}', 'yes'),
(106, 'cron', 'a:4:{i:1687453395;a:7:{s:30:\"wp_site_health_scheduled_check\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:6:\"weekly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:604800;}}s:32:\"recovery_mode_clean_expired_keys\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}s:18:\"wp_https_detection\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:16:\"wp_version_check\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:17:\"wp_update_plugins\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:16:\"wp_update_themes\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:34:\"wp_privacy_delete_old_export_files\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:6:\"hourly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:3600;}}}i:1687453413;a:3:{s:19:\"wp_scheduled_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}s:25:\"delete_expired_transients\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}s:21:\"wp_update_user_counts\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}}i:1687453414;a:1:{s:30:\"wp_scheduled_auto_draft_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}s:7:\"version\";i:2;}', 'yes'),
(107, 'widget_pages', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(108, 'widget_calendar', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(109, 'widget_archives', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(110, 'widget_media_audio', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(111, 'widget_media_image', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(112, 'widget_media_gallery', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(113, 'widget_media_video', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(114, 'widget_meta', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(115, 'widget_search', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(116, 'widget_recent-posts', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(117, 'widget_recent-comments', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(118, 'widget_tag_cloud', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(119, 'widget_nav_menu', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(120, 'widget_custom_html', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(122, 'recovery_keys', 'a:0:{}', 'yes'),
(124, 'https_detection_errors', 'a:1:{s:20:\"https_request_failed\";a:1:{i:0;s:26:\"Requisição HTTPS falhou.\";}}', 'yes'),
(123, 'theme_mods_twentytwentythree', 'a:2:{s:18:\"custom_css_post_id\";i:-1;s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1684947827;s:4:\"data\";a:3:{s:19:\"wp_inactive_widgets\";a:0:{}s:9:\"sidebar-1\";a:3:{i:0;s:7:\"block-2\";i:1;s:7:\"block-3\";i:2;s:7:\"block-4\";}s:9:\"sidebar-2\";a:2:{i:0;s:7:\"block-5\";i:1;s:7:\"block-6\";}}}}', 'yes'),
(406, '_site_transient_timeout_php_check_c9dd5cfbc4fa9554c7110a759bca4ee5', '1687957179', 'no'),
(407, '_site_transient_php_check_c9dd5cfbc4fa9554c7110a759bca4ee5', 'a:5:{s:19:\"recommended_version\";s:3:\"7.4\";s:15:\"minimum_version\";s:6:\"5.6.20\";s:12:\"is_supported\";b:1;s:9:\"is_secure\";b:1;s:13:\"is_acceptable\";b:1;}', 'no'),
(160, 'finished_updating_comment_type', '1', 'yes'),
(143, 'can_compress_scripts', '1', 'no'),
(423, '_site_transient_timeout_theme_roots', '1687443692', 'no'),
(424, '_site_transient_theme_roots', 'a:4:{s:12:\"portalsertao\";s:7:\"/themes\";s:15:\"twentytwentyone\";s:7:\"/themes\";s:17:\"twentytwentythree\";s:7:\"/themes\";s:15:\"twentytwentytwo\";s:7:\"/themes\";}', 'no'),
(425, '_site_transient_update_plugins', 'O:8:\"stdClass\":5:{s:12:\"last_checked\";i:1687441894;s:8:\"response\";a:1:{s:19:\"akismet/akismet.php\";O:8:\"stdClass\":12:{s:2:\"id\";s:21:\"w.org/plugins/akismet\";s:4:\"slug\";s:7:\"akismet\";s:6:\"plugin\";s:19:\"akismet/akismet.php\";s:11:\"new_version\";s:3:\"5.2\";s:3:\"url\";s:38:\"https://wordpress.org/plugins/akismet/\";s:7:\"package\";s:54:\"https://downloads.wordpress.org/plugin/akismet.5.2.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:60:\"https://ps.w.org/akismet/assets/icon-256x256.png?rev=2818463\";s:2:\"1x\";s:60:\"https://ps.w.org/akismet/assets/icon-128x128.png?rev=2818463\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:63:\"https://ps.w.org/akismet/assets/banner-1544x500.png?rev=2900731\";s:2:\"1x\";s:62:\"https://ps.w.org/akismet/assets/banner-772x250.png?rev=2900731\";}s:11:\"banners_rtl\";a:0:{}s:8:\"requires\";s:3:\"5.8\";s:6:\"tested\";s:5:\"6.2.2\";s:12:\"requires_php\";s:6:\"5.6.20\";}}s:12:\"translations\";a:0:{}s:9:\"no_update\";a:2:{s:9:\"hello.php\";O:8:\"stdClass\":10:{s:2:\"id\";s:25:\"w.org/plugins/hello-dolly\";s:4:\"slug\";s:11:\"hello-dolly\";s:6:\"plugin\";s:9:\"hello.php\";s:11:\"new_version\";s:5:\"1.7.2\";s:3:\"url\";s:42:\"https://wordpress.org/plugins/hello-dolly/\";s:7:\"package\";s:60:\"https://downloads.wordpress.org/plugin/hello-dolly.1.7.2.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:64:\"https://ps.w.org/hello-dolly/assets/icon-256x256.jpg?rev=2052855\";s:2:\"1x\";s:64:\"https://ps.w.org/hello-dolly/assets/icon-128x128.jpg?rev=2052855\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:67:\"https://ps.w.org/hello-dolly/assets/banner-1544x500.jpg?rev=2645582\";s:2:\"1x\";s:66:\"https://ps.w.org/hello-dolly/assets/banner-772x250.jpg?rev=2052855\";}s:11:\"banners_rtl\";a:0:{}s:8:\"requires\";s:3:\"4.6\";}s:21:\"wp-polls/wp-polls.php\";O:8:\"stdClass\":10:{s:2:\"id\";s:22:\"w.org/plugins/wp-polls\";s:4:\"slug\";s:8:\"wp-polls\";s:6:\"plugin\";s:21:\"wp-polls/wp-polls.php\";s:11:\"new_version\";s:6:\"2.77.1\";s:3:\"url\";s:39:\"https://wordpress.org/plugins/wp-polls/\";s:7:\"package\";s:58:\"https://downloads.wordpress.org/plugin/wp-polls.2.77.1.zip\";s:5:\"icons\";a:2:{s:2:\"1x\";s:52:\"https://ps.w.org/wp-polls/assets/icon.svg?rev=977996\";s:3:\"svg\";s:52:\"https://ps.w.org/wp-polls/assets/icon.svg?rev=977996\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:64:\"https://ps.w.org/wp-polls/assets/banner-1544x500.jpg?rev=1206760\";s:2:\"1x\";s:63:\"https://ps.w.org/wp-polls/assets/banner-772x250.jpg?rev=1206760\";}s:11:\"banners_rtl\";a:0:{}s:8:\"requires\";s:5:\"4.9.6\";}}s:7:\"checked\";a:3:{s:19:\"akismet/akismet.php\";s:3:\"5.1\";s:9:\"hello.php\";s:5:\"1.7.2\";s:21:\"wp-polls/wp-polls.php\";s:6:\"2.77.1\";}}', 'no'),
(269, '_site_transient_update_core', 'O:8:\"stdClass\":4:{s:7:\"updates\";a:1:{i:0;O:8:\"stdClass\":10:{s:8:\"response\";s:6:\"latest\";s:8:\"download\";s:65:\"https://downloads.wordpress.org/release/pt_BR/wordpress-6.2.2.zip\";s:6:\"locale\";s:5:\"pt_BR\";s:8:\"packages\";O:8:\"stdClass\":5:{s:4:\"full\";s:65:\"https://downloads.wordpress.org/release/pt_BR/wordpress-6.2.2.zip\";s:10:\"no_content\";s:0:\"\";s:11:\"new_bundled\";s:0:\"\";s:7:\"partial\";s:0:\"\";s:8:\"rollback\";s:0:\"\";}s:7:\"current\";s:5:\"6.2.2\";s:7:\"version\";s:5:\"6.2.2\";s:11:\"php_version\";s:6:\"5.6.20\";s:13:\"mysql_version\";s:3:\"5.0\";s:11:\"new_bundled\";s:3:\"6.1\";s:15:\"partial_version\";s:0:\"\";}}s:12:\"last_checked\";i:1687441889;s:15:\"version_checked\";s:5:\"6.2.2\";s:12:\"translations\";a:0:{}}', 'no'),
(272, 'poll_template_voteheader', '<p style=\"text-align: center;\"><strong>%POLL_QUESTION%</strong></p><div id=\"polls-%POLL_ID%-ans\" class=\"wp-polls-ans\"><ul class=\"wp-polls-ul\">', 'yes'),
(273, 'poll_template_votebody', '<li><input type=\"%POLL_CHECKBOX_RADIO%\" id=\"poll-answer-%POLL_ANSWER_ID%\" name=\"poll_%POLL_ID%\" value=\"%POLL_ANSWER_ID%\" /> <label for=\"poll-answer-%POLL_ANSWER_ID%\">%POLL_ANSWER%</label></li>', 'yes'),
(274, 'poll_template_votefooter', '</ul><p style=\"text-align: center;\"><input type=\"button\" name=\"vote\" value=\"   Voto   \" class=\"Buttons\" onclick=\"poll_vote(%POLL_ID%);\" /></p><p style=\"text-align: center;\"><a href=\"#ViewPollResults\" onclick=\"poll_result(%POLL_ID%); return false;\" title=\"Veja resultados desta pesquisa\">Ver resultados</a></p></div>', 'yes'),
(275, 'poll_template_resultheader', '<p style=\"text-align: center;\"><strong>%POLL_QUESTION%</strong></p><div id=\"polls-%POLL_ID%-ans\" class=\"wp-polls-ans\"><ul class=\"wp-polls-ul\">', 'yes'),
(276, 'poll_template_resultbody', '<li>%POLL_ANSWER% <small>(%POLL_ANSWER_PERCENTAGE%%, %POLL_ANSWER_VOTES% Votos)</small><div class=\"pollbar\" style=\"width: %POLL_ANSWER_IMAGEWIDTH%%;\" title=\"%POLL_ANSWER_TEXT% (%POLL_ANSWER_PERCENTAGE%% | %POLL_ANSWER_VOTES% Votos)\"></div></li>', 'yes'),
(277, 'poll_template_resultbody2', '<li><strong><i>%POLL_ANSWER% <small>(%POLL_ANSWER_PERCENTAGE%%, %POLL_ANSWER_VOTES% Votos)</small></i></strong><div class=\"pollbar\" style=\"width: %POLL_ANSWER_IMAGEWIDTH%%;\" title=\"Você já votou para esta escolha - %POLL_ANSWER_TEXT% (%POLL_ANSWER_PERCENTAGE%% | %POLL_ANSWER_VOTES% Votos)\"></div></li>', 'yes'),
(278, 'poll_template_resultfooter', '</ul><p style=\"text-align: center;\">Total de Participantes:: <strong>%POLL_TOTALVOTERS%</strong></p></div>', 'yes'),
(279, 'poll_template_resultfooter2', '</ul><p style=\"text-align: center;\">Total de Participantes:: <strong>%POLL_TOTALVOTERS%</strong></p><p style=\"text-align: center;\"><a href=\"#VotePoll\" onclick=\"poll_booth(%POLL_ID%); return false;\" title=\"Vote nesta enquete\">Voto</a></p></div>', 'yes'),
(280, 'poll_template_disable', 'Desculpe, não há enquetes disponíveis no momento.', 'yes'),
(281, 'poll_template_error', 'Ocorreu um erro ao processar sua enquete', 'yes'),
(282, 'poll_currentpoll', '0', 'yes'),
(283, 'poll_latestpoll', '1', 'yes'),
(284, 'poll_archive_perpage', '5', 'yes'),
(285, 'poll_ans_sortby', 'polla_aid', 'yes'),
(286, 'poll_ans_sortorder', 'asc', 'yes'),
(287, 'poll_ans_result_sortby', 'polla_votes', 'yes'),
(288, 'poll_ans_result_sortorder', 'desc', 'yes'),
(289, 'poll_logging_method', '3', 'yes'),
(290, 'poll_allowtovote', '2', 'yes'),
(291, 'poll_archive_url', 'http://localhost/portalsertao/pollsarchive', 'yes'),
(292, 'poll_bar', 'a:4:{s:5:\"style\";s:7:\"default\";s:10:\"background\";s:6:\"d8e1eb\";s:6:\"border\";s:6:\"c8c8c8\";s:6:\"height\";i:8;}', 'yes'),
(293, 'poll_close', '1', 'yes'),
(294, 'poll_ajax_style', 'a:2:{s:7:\"loading\";i:1;s:6:\"fading\";i:1;}', 'yes'),
(295, 'poll_template_pollarchivelink', '<ul><li><a href=\"%POLL_ARCHIVE_URL%\">Arquivo de enquete</a></li></ul>', 'yes'),
(296, 'poll_archive_displaypoll', '2', 'yes'),
(297, 'poll_template_pollarchiveheader', '', 'yes'),
(298, 'poll_template_pollarchivefooter', '<p>Data de início: %POLL_START_DATE%<br />Data do fim: %POLL_END_DATE%</p>', 'yes'),
(299, 'poll_cookielog_expiry', '0', 'yes'),
(300, 'poll_template_pollarchivepagingheader', '', 'yes'),
(301, 'poll_template_pollarchivepagingfooter', '', 'yes'),
(302, 'poll_options', 'a:1:{s:9:\"ip_header\";s:0:\"\";}', 'yes'),
(303, 'recently_activated', 'a:0:{}', 'yes'),
(304, 'widget_polls-widget', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(271, '_site_transient_update_themes', 'O:8:\"stdClass\":5:{s:12:\"last_checked\";i:1687441893;s:7:\"checked\";a:4:{s:12:\"portalsertao\";s:3:\"1.2\";s:15:\"twentytwentyone\";s:3:\"1.8\";s:17:\"twentytwentythree\";s:3:\"1.1\";s:15:\"twentytwentytwo\";s:3:\"1.4\";}s:8:\"response\";a:0:{}s:9:\"no_update\";a:3:{s:15:\"twentytwentyone\";a:6:{s:5:\"theme\";s:15:\"twentytwentyone\";s:11:\"new_version\";s:3:\"1.8\";s:3:\"url\";s:45:\"https://wordpress.org/themes/twentytwentyone/\";s:7:\"package\";s:61:\"https://downloads.wordpress.org/theme/twentytwentyone.1.8.zip\";s:8:\"requires\";s:3:\"5.3\";s:12:\"requires_php\";s:3:\"5.6\";}s:17:\"twentytwentythree\";a:6:{s:5:\"theme\";s:17:\"twentytwentythree\";s:11:\"new_version\";s:3:\"1.1\";s:3:\"url\";s:47:\"https://wordpress.org/themes/twentytwentythree/\";s:7:\"package\";s:63:\"https://downloads.wordpress.org/theme/twentytwentythree.1.1.zip\";s:8:\"requires\";s:3:\"6.1\";s:12:\"requires_php\";s:3:\"5.6\";}s:15:\"twentytwentytwo\";a:6:{s:5:\"theme\";s:15:\"twentytwentytwo\";s:11:\"new_version\";s:3:\"1.4\";s:3:\"url\";s:45:\"https://wordpress.org/themes/twentytwentytwo/\";s:7:\"package\";s:61:\"https://downloads.wordpress.org/theme/twentytwentytwo.1.4.zip\";s:8:\"requires\";s:3:\"5.9\";s:12:\"requires_php\";s:3:\"5.6\";}}s:12:\"translations\";a:0:{}}', 'no'),
(357, 'category_children', 'a:0:{}', 'yes'),
(154, 'current_theme', 'Espião PB', 'yes'),
(155, 'theme_mods_portalsertao', 'a:3:{i:0;b:0;s:18:\"nav_menu_locations\";a:1:{s:12:\"primary_menu\";i:17;}s:18:\"custom_css_post_id\";i:-1;}', 'yes'),
(156, 'theme_switched', '', 'yes'),
(157, 'acf_version', '5.7.13', 'yes'),
(173, '_transient_health-check-site-status-result', '{\"good\":16,\"recommended\":4,\"critical\":1}', 'yes'),
(364, 'wp_calendar_block_has_published_posts', '1', 'yes'),
(371, 'options_ps_facebook', 'https://www.facebook.com/tvportalsertao', 'no'),
(372, '_options_ps_facebook', 'field_648700cf1032e', 'no'),
(373, 'options_ps_twitter', 'https://twitter.com/tvportalsertao', 'no'),
(374, '_options_ps_twitter', 'field_648700f61032f', 'no'),
(375, 'options_ps_youtube', 'https://www.youtube.com/channel/UCari5f8Bk9Zht9ay_GHlOZQ', 'no'),
(376, '_options_ps_youtube', 'field_6487011210330', 'no'),
(377, 'options_ps_instagram', 'https://www.instagram.com/tvportalsertaopb', 'no'),
(378, '_options_ps_instagram', 'field_6487012d10331', 'no'),
(379, 'options_ps_whatsapp', 'https://api.whatsapp.com/send?phone=5583991994533', 'no'),
(380, '_options_ps_whatsapp', 'field_6487014910332', 'no'),
(381, 'options_ps_radio_sertao', 'https://player.jnbhost.com.br/proxy/7126/stream', 'no'),
(382, '_options_ps_radio_sertao', 'field_64870279cade3', 'no'),
(383, 'options_ps_tv_sertao', 'https://playerv.jnbhost.com.br/video/tvsertao/2/true/true/c3Rtdi5qbmJob3N0LmNvbS5icisx/16:9/aHR0cHM6Ly9wb3J0YWxzZXJ0YW8uY29tL2Vudmlvcy8yMDIzLzAzLzI5LzQ5ZjViNGUyMzIyN2M0N2FlNTU0NzU4NjBjNzhlYjZhZTgzOWQwNGQuanBnKzE=', 'no'),
(384, '_options_ps_tv_sertao', 'field_648702f8cade4', 'no'),
(385, 'nav_menu_options', 'a:2:{i:0;b:0;s:8:\"auto_add\";a:0:{}}', 'yes');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ps_pollsa`
--

DROP TABLE IF EXISTS `ps_pollsa`;
CREATE TABLE IF NOT EXISTS `ps_pollsa` (
  `polla_aid` int NOT NULL AUTO_INCREMENT,
  `polla_qid` int NOT NULL DEFAULT '0',
  `polla_answers` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT '',
  `polla_votes` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`polla_aid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Extraindo dados da tabela `ps_pollsa`
--

INSERT INTO `ps_pollsa` (`polla_aid`, `polla_qid`, `polla_answers`, `polla_votes`) VALUES
(1, 1, 'Bom', 0),
(2, 1, 'Excelente', 1),
(3, 1, 'Ruim', 0),
(4, 1, 'Pode ser melhorado', 0),
(5, 1, 'Sem comentários', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ps_pollsip`
--

DROP TABLE IF EXISTS `ps_pollsip`;
CREATE TABLE IF NOT EXISTS `ps_pollsip` (
  `pollip_id` int NOT NULL AUTO_INCREMENT,
  `pollip_qid` int NOT NULL DEFAULT '0',
  `pollip_aid` int NOT NULL DEFAULT '0',
  `pollip_ip` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `pollip_host` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `pollip_timestamp` int NOT NULL DEFAULT '0',
  `pollip_user` tinytext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `pollip_userid` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`pollip_id`),
  KEY `pollip_ip` (`pollip_ip`),
  KEY `pollip_qid` (`pollip_qid`),
  KEY `pollip_ip_qid_aid` (`pollip_ip`,`pollip_qid`,`pollip_aid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Extraindo dados da tabela `ps_pollsip`
--

INSERT INTO `ps_pollsip` (`pollip_id`, `pollip_qid`, `pollip_aid`, `pollip_ip`, `pollip_host`, `pollip_timestamp`, `pollip_user`, `pollip_userid`) VALUES
(1, 1, 2, '29bbbe88f9e0ea2a2ec4dfb7a8c1b567', 'oao', 1686315793, 'admin', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ps_pollsq`
--

DROP TABLE IF EXISTS `ps_pollsq`;
CREATE TABLE IF NOT EXISTS `ps_pollsq` (
  `pollq_id` int NOT NULL AUTO_INCREMENT,
  `pollq_question` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT '',
  `pollq_timestamp` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `pollq_totalvotes` int NOT NULL DEFAULT '0',
  `pollq_active` tinyint(1) NOT NULL DEFAULT '1',
  `pollq_expiry` int NOT NULL DEFAULT '0',
  `pollq_multiple` tinyint NOT NULL DEFAULT '0',
  `pollq_totalvoters` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`pollq_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Extraindo dados da tabela `ps_pollsq`
--

INSERT INTO `ps_pollsq` (`pollq_id`, `pollq_question`, `pollq_timestamp`, `pollq_totalvotes`, `pollq_active`, `pollq_expiry`, `pollq_multiple`, `pollq_totalvoters`) VALUES
(1, 'Como está o meu site?', '1686315331', 1, 1, 0, 0, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ps_postmeta`
--

DROP TABLE IF EXISTS `ps_postmeta`;
CREATE TABLE IF NOT EXISTS `ps_postmeta` (
  `meta_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `post_id` bigint UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci,
  PRIMARY KEY (`meta_id`),
  KEY `post_id` (`post_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=MyISAM AUTO_INCREMENT=155 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Extraindo dados da tabela `ps_postmeta`
--

INSERT INTO `ps_postmeta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(1, 2, '_wp_page_template', 'default'),
(2, 3, '_wp_page_template', 'default'),
(3, 6, '_edit_lock', '1686567009:1'),
(4, 7, '_wp_attached_file', '2023/06/n1.jpg'),
(5, 7, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:955;s:6:\"height\";i:587;s:4:\"file\";s:14:\"2023/06/n1.jpg\";s:8:\"filesize\";i:168647;s:5:\"sizes\";a:8:{s:6:\"medium\";a:5:{s:4:\"file\";s:14:\"n1-300x184.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:184;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:12999;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:14:\"n1-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:6303;}s:12:\"medium_large\";a:5:{s:4:\"file\";s:14:\"n1-768x472.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:472;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:52315;}s:14:\"post-thumbnail\";a:5:{s:4:\"file\";s:14:\"n1-125x125.jpg\";s:5:\"width\";i:125;s:6:\"height\";i:125;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:4864;}s:15:\"ps-thumb-medium\";a:5:{s:4:\"file\";s:14:\"n1-354x142.jpg\";s:5:\"width\";i:354;s:6:\"height\";i:142;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:12066;}s:14:\"ps-thumb-large\";a:5:{s:4:\"file\";s:14:\"n1-356x400.jpg\";s:5:\"width\";i:356;s:6:\"height\";i:400;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:23716;}s:14:\"ps-thumb-small\";a:5:{s:4:\"file\";s:14:\"n1-100x100.jpg\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:3661;}s:21:\"ps-thumb-horizontally\";a:5:{s:4:\"file\";s:14:\"n1-416x166.jpg\";s:5:\"width\";i:416;s:6:\"height\";i:166;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:15127;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(8, 1, '_wp_trash_meta_status', 'publish'),
(9, 1, '_wp_trash_meta_time', '1686566790'),
(10, 1, '_wp_desired_post_slug', 'ola-mundo'),
(11, 1, '_wp_trash_meta_comments_status', 'a:1:{i:1;s:1:\"1\";}'),
(16, 12, '_edit_lock', '1686567104:1'),
(15, 6, '_thumbnail_id', '7'),
(17, 13, '_wp_attached_file', '2023/06/n2.jpg'),
(18, 13, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:850;s:6:\"height\";i:560;s:4:\"file\";s:14:\"2023/06/n2.jpg\";s:8:\"filesize\";i:283351;s:5:\"sizes\";a:8:{s:6:\"medium\";a:5:{s:4:\"file\";s:14:\"n2-300x198.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:198;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:14982;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:14:\"n2-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:6782;}s:12:\"medium_large\";a:5:{s:4:\"file\";s:14:\"n2-768x506.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:506;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:62025;}s:14:\"post-thumbnail\";a:5:{s:4:\"file\";s:14:\"n2-125x125.jpg\";s:5:\"width\";i:125;s:6:\"height\";i:125;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:5142;}s:15:\"ps-thumb-medium\";a:5:{s:4:\"file\";s:14:\"n2-354x142.jpg\";s:5:\"width\";i:354;s:6:\"height\";i:142;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:13308;}s:14:\"ps-thumb-large\";a:5:{s:4:\"file\";s:14:\"n2-356x400.jpg\";s:5:\"width\";i:356;s:6:\"height\";i:400;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:26116;}s:14:\"ps-thumb-small\";a:5:{s:4:\"file\";s:14:\"n2-100x100.jpg\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:3800;}s:21:\"ps-thumb-horizontally\";a:5:{s:4:\"file\";s:14:\"n2-416x166.jpg\";s:5:\"width\";i:416;s:6:\"height\";i:166;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:16825;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(21, 12, '_thumbnail_id', '13'),
(28, 17, '_edit_lock', '1686570150:1'),
(27, 17, '_edit_last', '1'),
(29, 27, '_menu_item_type', 'custom'),
(30, 27, '_menu_item_menu_item_parent', '0'),
(31, 27, '_menu_item_object_id', '27'),
(32, 27, '_menu_item_object', 'custom'),
(33, 27, '_menu_item_target', ''),
(34, 27, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(35, 27, '_menu_item_xfn', ''),
(36, 27, '_menu_item_url', 'http://localhost/portalsertao/'),
(37, 27, '_menu_item_orphaned', '1686570966'),
(38, 28, '_menu_item_type', 'post_type'),
(39, 28, '_menu_item_menu_item_parent', '0'),
(40, 28, '_menu_item_object_id', '2'),
(41, 28, '_menu_item_object', 'page'),
(42, 28, '_menu_item_target', ''),
(43, 28, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(44, 28, '_menu_item_xfn', ''),
(45, 28, '_menu_item_url', ''),
(46, 28, '_menu_item_orphaned', '1686570966'),
(47, 29, '_menu_item_type', 'taxonomy'),
(48, 29, '_menu_item_menu_item_parent', '0'),
(49, 29, '_menu_item_object_id', '11'),
(50, 29, '_menu_item_object', 'category'),
(51, 29, '_menu_item_target', ''),
(52, 29, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(53, 29, '_menu_item_xfn', ''),
(54, 29, '_menu_item_url', ''),
(56, 30, '_menu_item_type', 'taxonomy'),
(57, 30, '_menu_item_menu_item_parent', '0'),
(58, 30, '_menu_item_object_id', '6'),
(59, 30, '_menu_item_object', 'category'),
(60, 30, '_menu_item_target', ''),
(61, 30, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(62, 30, '_menu_item_xfn', ''),
(63, 30, '_menu_item_url', ''),
(65, 31, '_menu_item_type', 'taxonomy'),
(66, 31, '_menu_item_menu_item_parent', '0'),
(67, 31, '_menu_item_object_id', '10'),
(68, 31, '_menu_item_object', 'category'),
(69, 31, '_menu_item_target', ''),
(70, 31, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(71, 31, '_menu_item_xfn', ''),
(72, 31, '_menu_item_url', ''),
(74, 32, '_menu_item_type', 'taxonomy'),
(75, 32, '_menu_item_menu_item_parent', '0'),
(76, 32, '_menu_item_object_id', '4'),
(77, 32, '_menu_item_object', 'category'),
(78, 32, '_menu_item_target', ''),
(79, 32, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(80, 32, '_menu_item_xfn', ''),
(81, 32, '_menu_item_url', ''),
(83, 33, '_menu_item_type', 'taxonomy'),
(84, 33, '_menu_item_menu_item_parent', '0'),
(85, 33, '_menu_item_object_id', '7'),
(86, 33, '_menu_item_object', 'category'),
(87, 33, '_menu_item_target', ''),
(88, 33, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(89, 33, '_menu_item_xfn', ''),
(90, 33, '_menu_item_url', ''),
(92, 34, '_menu_item_type', 'taxonomy'),
(93, 34, '_menu_item_menu_item_parent', '0'),
(94, 34, '_menu_item_object_id', '1'),
(95, 34, '_menu_item_object', 'category'),
(96, 34, '_menu_item_target', ''),
(97, 34, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(98, 34, '_menu_item_xfn', ''),
(99, 34, '_menu_item_url', ''),
(110, 36, '_menu_item_type', 'taxonomy'),
(111, 36, '_menu_item_menu_item_parent', '0'),
(112, 36, '_menu_item_object_id', '3'),
(113, 36, '_menu_item_object', 'category'),
(114, 36, '_menu_item_target', ''),
(115, 36, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(116, 36, '_menu_item_xfn', ''),
(117, 36, '_menu_item_url', ''),
(119, 37, '_menu_item_type', 'taxonomy'),
(120, 37, '_menu_item_menu_item_parent', '0'),
(121, 37, '_menu_item_object_id', '5'),
(122, 37, '_menu_item_object', 'category'),
(123, 37, '_menu_item_target', ''),
(124, 37, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(125, 37, '_menu_item_xfn', ''),
(126, 37, '_menu_item_url', ''),
(128, 38, '_menu_item_type', 'taxonomy'),
(129, 38, '_menu_item_menu_item_parent', '0'),
(130, 38, '_menu_item_object_id', '2'),
(131, 38, '_menu_item_object', 'category'),
(132, 38, '_menu_item_target', ''),
(133, 38, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(134, 38, '_menu_item_xfn', ''),
(135, 38, '_menu_item_url', ''),
(137, 39, '_menu_item_type', 'taxonomy'),
(138, 39, '_menu_item_menu_item_parent', '0'),
(139, 39, '_menu_item_object_id', '8'),
(140, 39, '_menu_item_object', 'category'),
(141, 39, '_menu_item_target', ''),
(142, 39, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(143, 39, '_menu_item_xfn', ''),
(144, 39, '_menu_item_url', ''),
(146, 40, '_menu_item_type', 'taxonomy'),
(147, 40, '_menu_item_menu_item_parent', '0'),
(148, 40, '_menu_item_object_id', '9'),
(149, 40, '_menu_item_object', 'category'),
(150, 40, '_menu_item_target', ''),
(151, 40, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(152, 40, '_menu_item_xfn', ''),
(153, 40, '_menu_item_url', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ps_posts`
--

DROP TABLE IF EXISTS `ps_posts`;
CREATE TABLE IF NOT EXISTS `ps_posts` (
  `ID` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `post_author` bigint UNSIGNED NOT NULL DEFAULT '0',
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_title` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_excerpt` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'open',
  `post_password` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `post_name` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `to_ping` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `pinged` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_parent` bigint UNSIGNED NOT NULL DEFAULT '0',
  `guid` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `menu_order` int NOT NULL DEFAULT '0',
  `post_type` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_count` bigint NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `post_name` (`post_name`(191)),
  KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  KEY `post_parent` (`post_parent`),
  KEY `post_author` (`post_author`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Extraindo dados da tabela `ps_posts`
--

INSERT INTO `ps_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(1, 1, '2023-05-24 14:03:14', '2023-05-24 17:03:14', '<!-- wp:paragraph -->\n<p>Boas-vindas ao WordPress. Esse é o seu primeiro post. Edite-o ou exclua-o, e então comece a escrever!</p>\n<!-- /wp:paragraph -->', 'Olá, mundo!', '', 'trash', 'open', 'open', '', 'ola-mundo__trashed', '', '', '2023-06-12 07:46:30', '2023-06-12 10:46:30', '', 0, 'http://localhost/portalsertao/?p=1', 0, 'post', '', 1),
(2, 1, '2023-05-24 14:03:14', '2023-05-24 17:03:14', '<!-- wp:paragraph -->\n<p>Esta é uma página de exemplo. É diferente de um post no blog porque ela permanecerá em um lugar e aparecerá na navegação do seu site na maioria dos temas. Muitas pessoas começam com uma página que as apresenta a possíveis visitantes do site. Ela pode dizer algo assim:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>Olá! Eu sou um mensageiro de bicicleta durante o dia, ator aspirante à noite, e este é o meu site. Eu moro em São Paulo, tenho um grande cachorro chamado Rex e gosto de tomar caipirinha (e banhos de chuva).</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>...ou alguma coisa assim:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>A Companhia de Miniaturas XYZ foi fundada em 1971, e desde então tem fornecido miniaturas de qualidade ao público. Localizada na cidade de Itu, a XYZ emprega mais de 2.000 pessoas e faz coisas grandiosas para a comunidade da cidade.</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>Como um novo usuário do WordPress, você deveria ir ao <a href=\"http://localhost/portalsertao/wp-admin/\">painel</a> para excluir essa página e criar novas páginas para o seu conteúdo. Divirta-se!</p>\n<!-- /wp:paragraph -->', 'Página de exemplo', '', 'publish', 'closed', 'open', '', 'pagina-exemplo', '', '', '2023-05-24 14:03:14', '2023-05-24 17:03:14', '', 0, 'http://localhost/portalsertao/?page_id=2', 0, 'page', '', 0),
(3, 1, '2023-05-24 14:03:14', '2023-05-24 17:03:14', '<!-- wp:heading --><h2>Quem somos</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Texto sugerido: </strong>O endereço do nosso site é: http://localhost/portalsertao.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Comentários</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Texto sugerido: </strong>Quando os visitantes deixam comentários no site, coletamos os dados mostrados no formulário de comentários, além do endereço de IP e de dados do navegador do visitante, para auxiliar na detecção de spam.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Uma sequência anonimizada de caracteres criada a partir do seu e-mail (também chamada de hash) poderá ser enviada para o Gravatar para verificar se você usa o serviço. A política de privacidade do Gravatar está disponível aqui: https://automattic.com/privacy/. Depois da aprovação do seu comentário, a foto do seu perfil fica visível publicamente junto de seu comentário.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Mídia</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Texto sugerido: </strong>Se você envia imagens para o site, evite enviar as que contenham dados de localização incorporados (EXIF GPS). Visitantes podem baixar estas imagens do site e extrair delas seus dados de localização.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Cookies</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Texto sugerido: </strong>Ao deixar um comentário no site, você poderá optar por salvar seu nome, e-mail e site nos cookies. Isso visa seu conforto, assim você não precisará preencher seus  dados novamente quando fizer outro comentário. Estes cookies duram um ano.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Se você tem uma conta e acessa este site, um cookie temporário será criado para determinar se seu navegador aceita cookies. Ele não contém nenhum dado pessoal e será descartado quando você fechar seu navegador.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Quando você acessa sua conta no site, também criamos vários cookies para salvar os dados da sua conta e suas escolhas de exibição de tela. Cookies de login são mantidos por dois dias e cookies de opções de tela por um ano. Se você selecionar &quot;Lembrar-me&quot;, seu acesso será mantido por duas semanas. Se você se desconectar da sua conta, os cookies de login serão removidos.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Se você editar ou publicar um artigo, um cookie adicional será salvo no seu navegador. Este cookie não inclui nenhum dado pessoal e simplesmente indica o ID do post referente ao artigo que você acabou de editar. Ele expira depois de 1 dia.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Mídia incorporada de outros sites</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Texto sugerido: </strong>Artigos neste site podem incluir conteúdo incorporado como, por exemplo, vídeos, imagens, artigos, etc. Conteúdos incorporados de outros sites se comportam exatamente da mesma forma como se o visitante estivesse visitando o outro site.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Estes sites podem coletar dados sobre você, usar cookies, incorporar rastreamento adicional de terceiros e monitorar sua interação com este conteúdo incorporado, incluindo sua interação com o conteúdo incorporado se você tem uma conta e está conectado com o site.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Com quem compartilhamos seus dados</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Texto sugerido: </strong>Se você solicitar uma redefinição de senha, seu endereço de IP será incluído no e-mail de redefinição de senha.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Por quanto tempo mantemos os seus dados</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Texto sugerido: </strong>Se você deixar um comentário, o comentário e os seus metadados são conservados indefinidamente. Fazemos isso para que seja possível reconhecer e aprovar automaticamente qualquer comentário posterior ao invés de retê-lo para moderação.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Para usuários que se registram no nosso site (se houver), também guardamos as informações pessoais que fornecem no seu perfil de usuário. Todos os usuários podem ver, editar ou excluir suas informações pessoais a qualquer momento (só não é possível alterar o seu username). Os administradores de sites também podem ver e editar estas informações.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Quais os seus direitos sobre seus dados</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Texto sugerido: </strong>Se você tiver uma conta neste site ou se tiver deixado comentários, pode solicitar um arquivo exportado dos dados pessoais que mantemos sobre você, inclusive quaisquer dados que nos tenha fornecido. Também pode solicitar que removamos qualquer dado pessoal que mantemos sobre você. Isto não inclui nenhuns dados que somos obrigados a manter para propósitos administrativos, legais ou de segurança.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Para onde seus dados são enviados</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class=\"privacy-policy-tutorial\">Texto sugerido: </strong>Comentários de visitantes podem ser marcados por um serviço automático de detecção de spam.</p><!-- /wp:paragraph -->', 'Política de privacidade', '', 'draft', 'closed', 'open', '', 'politica-de-privacidade', '', '', '2023-05-24 14:03:14', '2023-05-24 17:03:14', '', 0, 'http://localhost/portalsertao/?page_id=3', 0, 'page', '', 0),
(6, 1, '2023-06-12 07:44:48', '2023-06-12 10:44:48', '<!-- wp:image {\"align\":\"left\",\"id\":7,\"width\":255,\"height\":157,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image alignleft size-full is-resized\"><img src=\"http://localhost/portalsertao/wp-content/uploads/2023/06/n1.jpg\" alt=\"\" class=\"wp-image-7\" width=\"255\" height=\"157\"/><figcaption class=\"wp-element-caption\">foto reprodução</figcaption></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p>Mais uma confirmação da troca tripla de bebês em uma maternidade da Paraíba: um teste de DNA comprovou que Milena Carvalho é filha biológica de Maria de Fátima Bezerra. A jovem era a última das três envolvidas na troca que ainda aguardava a confirmação genética.&nbsp;O resultado foi informado ao&nbsp;<strong>g1</strong>, nesta quinta-feira (8), pela mãe que a criou, Luísa Maria Silva.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>O caso, ocorrido em Cajazeiras, no Sertão da Paraíba, veio à tona após uma das jovens, que mora nos Estados Unidos, ter feito um teste genético para tentar encontrar antepassados e montar uma árvore genealógica.&nbsp;Raylane Nóbrega, que descobriu a troca, deixou a maternidade para a casa de Marlucy; Milena para a de Luísa Maria; e Marcelma para a de Maria de Fátima.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>No entanto, com todos os exames de DNA feitos, ficam confirmados os seguintes laços biológicos:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:list -->\n<ul><!-- wp:list-item -->\n<li>Raylane é filha biológica de Luísa Maria</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>Marcelma é filha biológica de Marlucy</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>Milena é filha biológica de Maria de Fátima</li>\n<!-- /wp:list-item --></ul>\n<!-- /wp:list -->\n\n<!-- wp:paragraph -->\n<p>O advogado João de Deus, que assessora a família de Luísa Maria, disse que todas as famílias envolvidas vão entrar com ações de reparação dos danos para cada uma das pessoas envolvidas e também pretendem entrar com procedimento junto ao Ministério Público da Paraíba.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>“Estamos agindo em favor das meninas que foram trocadas, dos seus pais e dos seus irmãos, tendo, todos, em valores diferentes, direito a reparação de danos, especialmente a dor moral pelo sofrimento. Hoje tem muitos deles em processo de acompanhamento e terapias dado o trauma com a notícia”, disse o advogado.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>João de Deus afirmou ainda que vai pedir a retificação judicial do registro de nascimento de Milena, para fazer constar o nome da mãe biológica e da mãe socioafetiva.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Procurada pelo<strong>&nbsp;</strong>g1 a Secretaria de Estado da Saúde (SES) informou, através da assessoria de imprensa, que está disposta a colaborar no que for necessário, e que se solidariza com as famílias envolvidas.</p>\n<!-- /wp:paragraph -->', 'Teste de DNA confirma troca tripla de bebês na maternidade de Cajazeiras há 28 anos', 'O caso, ocorrido em Cajazeiras, no Sertão da Paraíba, veio à tona após uma das jovens, que mora nos Estados Unidos, ter feito um teste genético para tentar encontrar antepassados e montar uma árvore genealógica.', 'publish', 'open', 'open', '', 'teste-de-dna-confirma-troca-tripla-de-bebes-na-maternidade-de-cajazeiras-ha-28-anos', '', '', '2023-06-12 07:52:19', '2023-06-12 10:52:19', '', 0, 'http://localhost/portalsertao/?p=6', 0, 'post', '', 0),
(7, 1, '2023-06-12 07:42:27', '2023-06-12 10:42:27', '', 'n1', '', 'inherit', 'open', 'closed', '', 'n1', '', '', '2023-06-12 07:42:27', '2023-06-12 10:42:27', '', 6, 'http://localhost/portalsertao/wp-content/uploads/2023/06/n1.jpg', 0, 'attachment', 'image/jpeg', 0),
(8, 1, '2023-06-12 07:44:48', '2023-06-12 10:44:48', '<!-- wp:image {\"align\":\"left\",\"id\":7,\"width\":255,\"height\":157,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image alignleft size-full is-resized\"><img src=\"http://localhost/portalsertao/wp-content/uploads/2023/06/n1.jpg\" alt=\"\" class=\"wp-image-7\" width=\"255\" height=\"157\"/><figcaption class=\"wp-element-caption\">foto reprodução</figcaption></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p>Mais uma confirmação da troca tripla de bebês em uma maternidade da Paraíba: um teste de DNA comprovou que Milena Carvalho é filha biológica de Maria de Fátima Bezerra. A jovem era a última das três envolvidas na troca que ainda aguardava a confirmação genética. O resultado foi informado ao <strong>g1</strong>, nesta quinta-feira (8), pela mãe que a criou, Luísa Maria Silva.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>O caso, ocorrido em Cajazeiras, no Sertão da Paraíba, veio à tona após uma das jovens, que mora nos Estados Unidos, ter feito um teste genético para tentar encontrar antepassados e montar uma árvore genealógica.&nbsp;Raylane Nóbrega, que descobriu a troca, deixou a maternidade para a casa de Marlucy; Milena para a de Luísa Maria; e Marcelma para a de Maria de Fátima.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>No entanto, com todos os exames de DNA feitos, ficam confirmados os seguintes laços biológicos:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:list -->\n<ul><!-- wp:list-item -->\n<li>Raylane é filha biológica de Luísa Maria</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>Marcelma é filha biológica de Marlucy</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>Milena é filha biológica de Maria de Fátima</li>\n<!-- /wp:list-item --></ul>\n<!-- /wp:list -->\n\n<!-- wp:paragraph -->\n<p>O advogado João de Deus, que assessora a família de Luísa Maria, disse que todas as famílias envolvidas vão entrar com ações de reparação dos danos para cada uma das pessoas envolvidas e também pretendem entrar com procedimento junto ao Ministério Público da Paraíba.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>“Estamos agindo em favor das meninas que foram trocadas, dos seus pais e dos seus irmãos, tendo, todos, em valores diferentes, direito a reparação de danos, especialmente a dor moral pelo sofrimento. Hoje tem muitos deles em processo de acompanhamento e terapias dado o trauma com a notícia”, disse o advogado.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>João de Deus afirmou ainda que vai pedir a retificação judicial do registro de nascimento de Milena, para fazer constar o nome da mãe biológica e da mãe socioafetiva.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Procurada pelo<strong>&nbsp;</strong>g1 a Secretaria de Estado da Saúde (SES) informou, através da assessoria de imprensa, que está disposta a colaborar no que for necessário, e que se solidariza com as famílias envolvidas.</p>\n<!-- /wp:paragraph -->', 'Teste de DNA confirma troca tripla de bebês na maternidade de Cajazeiras há 28 anos', 'O caso, ocorrido em Cajazeiras, no Sertão da Paraíba, veio à tona após uma das jovens, que mora nos Estados Unidos, ter feito um teste genético para tentar encontrar antepassados e montar uma árvore genealógica.', 'inherit', 'closed', 'closed', '', '6-revision-v1', '', '', '2023-06-12 07:44:48', '2023-06-12 10:44:48', '', 6, 'http://localhost/portalsertao/?p=8', 0, 'revision', '', 0),
(9, 1, '2023-06-12 07:46:30', '2023-06-12 10:46:30', '<!-- wp:paragraph -->\n<p>Boas-vindas ao WordPress. Esse é o seu primeiro post. Edite-o ou exclua-o, e então comece a escrever!</p>\n<!-- /wp:paragraph -->', 'Olá, mundo!', '', 'inherit', 'closed', 'closed', '', '1-revision-v1', '', '', '2023-06-12 07:46:30', '2023-06-12 10:46:30', '', 1, 'http://localhost/portalsertao/?p=9', 0, 'revision', '', 0),
(11, 1, '2023-06-12 07:47:03', '2023-06-12 10:47:03', '<!-- wp:image {\"align\":\"left\",\"id\":7,\"width\":255,\"height\":157,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image alignleft size-full is-resized\"><img src=\"http://localhost/portalsertao/wp-content/uploads/2023/06/n1.jpg\" alt=\"\" class=\"wp-image-7\" width=\"255\" height=\"157\"/><figcaption class=\"wp-element-caption\">foto reprodução</figcaption></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p>Mais uma confirmação da troca tripla de bebês em uma maternidade da Paraíba: um teste de DNA comprovou que Milena Carvalho é filha biológica de Maria de Fátima Bezerra. A jovem era a última das três envolvidas na troca que ainda aguardava a confirmação genética.&nbsp;O resultado foi informado ao&nbsp;<strong>g1</strong>, nesta quinta-feira (8), pela mãe que a criou, Luísa Maria Silva.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>O caso, ocorrido em Cajazeiras, no Sertão da Paraíba, veio à tona após uma das jovens, que mora nos Estados Unidos, ter feito um teste genético para tentar encontrar antepassados e montar uma árvore genealógica.&nbsp;Raylane Nóbrega, que descobriu a troca, deixou a maternidade para a casa de Marlucy; Milena para a de Luísa Maria; e Marcelma para a de Maria de Fátima.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>No entanto, com todos os exames de DNA feitos, ficam confirmados os seguintes laços biológicos:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:list -->\n<ul><!-- wp:list-item -->\n<li>Raylane é filha biológica de Luísa Maria</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>Marcelma é filha biológica de Marlucy</li>\n<!-- /wp:list-item -->\n\n<!-- wp:list-item -->\n<li>Milena é filha biológica de Maria de Fátima</li>\n<!-- /wp:list-item --></ul>\n<!-- /wp:list -->\n\n<!-- wp:paragraph -->\n<p>O advogado João de Deus, que assessora a família de Luísa Maria, disse que todas as famílias envolvidas vão entrar com ações de reparação dos danos para cada uma das pessoas envolvidas e também pretendem entrar com procedimento junto ao Ministério Público da Paraíba.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>“Estamos agindo em favor das meninas que foram trocadas, dos seus pais e dos seus irmãos, tendo, todos, em valores diferentes, direito a reparação de danos, especialmente a dor moral pelo sofrimento. Hoje tem muitos deles em processo de acompanhamento e terapias dado o trauma com a notícia”, disse o advogado.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>João de Deus afirmou ainda que vai pedir a retificação judicial do registro de nascimento de Milena, para fazer constar o nome da mãe biológica e da mãe socioafetiva.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Procurada pelo<strong>&nbsp;</strong>g1 a Secretaria de Estado da Saúde (SES) informou, através da assessoria de imprensa, que está disposta a colaborar no que for necessário, e que se solidariza com as famílias envolvidas.</p>\n<!-- /wp:paragraph -->', 'Teste de DNA confirma troca tripla de bebês na maternidade de Cajazeiras há 28 anos', 'O caso, ocorrido em Cajazeiras, no Sertão da Paraíba, veio à tona após uma das jovens, que mora nos Estados Unidos, ter feito um teste genético para tentar encontrar antepassados e montar uma árvore genealógica.', 'inherit', 'closed', 'closed', '', '6-revision-v1', '', '', '2023-06-12 07:47:03', '2023-06-12 10:47:03', '', 6, 'http://localhost/portalsertao/?p=11', 0, 'revision', '', 0),
(12, 1, '2023-06-12 07:50:29', '2023-06-12 10:50:29', '<!-- wp:image {\"align\":\"left\",\"id\":13,\"width\":255,\"height\":168,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image alignleft size-full is-resized\"><img src=\"http://localhost/portalsertao/wp-content/uploads/2023/06/n2.jpg\" alt=\"\" class=\"wp-image-13\" width=\"255\" height=\"168\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p>Na manhã deste sábado, dia 10 de junho, policiais militares pertencentes a 4ª Cia/3°BPM, apreenderam uma motocicleta na cidade de Cacimbas.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>A guarnição realizava rondas na Rua São José, quando percebeu o referido veículo estacionado de forma irregular em frente a um supermercado.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Diante da situação, a guarnição realizou uma averiguação na motocicleta, momento que visualizaram adulterações nos sinais identificadores do veículo.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Desta forma, os militares tentaram localizar o responsável pela motocicleta, indagando aos populares que se encontravam dentro do supermercado e nas imediações, entretanto, ninguém soube informar a quem pertencia o veículo.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>A guarnição conduziu a motocicleta até à Delegacia de Polícia Civil para que sejam tomadas as medidas cabíveis.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph -->', 'Polícia apreende motocicleta com sinais identificadores adulterados', 'Na manhã deste sábado, dia 10 de junho, policiais militares pertencentes a 4ª Cia/3°BPM, apreenderam uma motocicleta na cidade de Cacimbas.', 'publish', 'open', 'open', '', '12', '', '', '2023-06-12 07:51:00', '2023-06-12 10:51:00', '', 0, 'http://localhost/portalsertao/?p=12', 0, 'post', '', 0),
(13, 1, '2023-06-12 07:48:29', '2023-06-12 10:48:29', '', 'n2', '', 'inherit', 'open', 'closed', '', 'n2', '', '', '2023-06-12 07:48:29', '2023-06-12 10:48:29', '', 12, 'http://localhost/portalsertao/wp-content/uploads/2023/06/n2.jpg', 0, 'attachment', 'image/jpeg', 0),
(14, 1, '2023-06-12 07:50:29', '2023-06-12 10:50:29', '<!-- wp:image {\"align\":\"left\",\"id\":13,\"width\":255,\"height\":168,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image alignleft size-full is-resized\"><img src=\"http://localhost/portalsertao/wp-content/uploads/2023/06/n2.jpg\" alt=\"\" class=\"wp-image-13\" width=\"255\" height=\"168\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p>Na manhã deste sábado, dia 10 de junho, policiais militares pertencentes a 4ª Cia/3°BPM, apreenderam uma motocicleta na cidade de Cacimbas.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>A guarnição realizava rondas na Rua São José, quando percebeu o referido veículo estacionado de forma irregular em frente a um supermercado.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Diante da situação, a guarnição realizou uma averiguação na motocicleta, momento que visualizaram adulterações nos sinais identificadores do veículo.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Desta forma, os militares tentaram localizar o responsável pela motocicleta, indagando aos populares que se encontravam dentro do supermercado e nas imediações, entretanto, ninguém soube informar a quem pertencia o veículo.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>A guarnição conduziu a motocicleta até à Delegacia de Polícia Civil para que sejam tomadas as medidas cabíveis.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph -->', '', 'Na manhã deste sábado, dia 10 de junho, policiais militares pertencentes a 4ª Cia/3°BPM, apreenderam uma motocicleta na cidade de Cacimbas.', 'inherit', 'closed', 'closed', '', '12-revision-v1', '', '', '2023-06-12 07:50:29', '2023-06-12 10:50:29', '', 12, 'http://localhost/portalsertao/?p=14', 0, 'revision', '', 0),
(16, 1, '2023-06-12 07:51:00', '2023-06-12 10:51:00', '<!-- wp:image {\"align\":\"left\",\"id\":13,\"width\":255,\"height\":168,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image alignleft size-full is-resized\"><img src=\"http://localhost/portalsertao/wp-content/uploads/2023/06/n2.jpg\" alt=\"\" class=\"wp-image-13\" width=\"255\" height=\"168\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p>Na manhã deste sábado, dia 10 de junho, policiais militares pertencentes a 4ª Cia/3°BPM, apreenderam uma motocicleta na cidade de Cacimbas.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>A guarnição realizava rondas na Rua São José, quando percebeu o referido veículo estacionado de forma irregular em frente a um supermercado.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Diante da situação, a guarnição realizou uma averiguação na motocicleta, momento que visualizaram adulterações nos sinais identificadores do veículo.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Desta forma, os militares tentaram localizar o responsável pela motocicleta, indagando aos populares que se encontravam dentro do supermercado e nas imediações, entretanto, ninguém soube informar a quem pertencia o veículo.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>A guarnição conduziu a motocicleta até à Delegacia de Polícia Civil para que sejam tomadas as medidas cabíveis.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph -->', 'Polícia apreende motocicleta com sinais identificadores adulterados', 'Na manhã deste sábado, dia 10 de junho, policiais militares pertencentes a 4ª Cia/3°BPM, apreenderam uma motocicleta na cidade de Cacimbas.', 'inherit', 'closed', 'closed', '', '12-revision-v1', '', '', '2023-06-12 07:51:00', '2023-06-12 10:51:00', '', 12, 'http://localhost/portalsertao/?p=16', 0, 'revision', '', 0),
(17, 1, '2023-06-12 08:29:05', '2023-06-12 11:29:05', 'a:7:{s:8:\"location\";a:1:{i:0;a:1:{i:0;a:3:{s:5:\"param\";s:12:\"options_page\";s:8:\"operator\";s:2:\"==\";s:5:\"value\";s:13:\"opcoes-gerais\";}}}s:8:\"position\";s:6:\"normal\";s:5:\"style\";s:7:\"default\";s:15:\"label_placement\";s:3:\"top\";s:21:\"instruction_placement\";s:5:\"label\";s:14:\"hide_on_screen\";s:0:\"\";s:11:\"description\";s:0:\"\";}', 'Configurações', 'configuracoes', 'publish', 'closed', 'closed', '', 'group_6487005962327', '', '', '2023-06-12 08:36:20', '2023-06-12 11:36:20', '', 0, 'http://localhost/portalsertao/?post_type=acf-field-group&#038;p=17', 0, 'acf-field-group', '', 0),
(18, 1, '2023-06-12 08:29:05', '2023-06-12 11:29:05', 'a:8:{s:4:\"type\";s:9:\"accordion\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:4:\"open\";i:1;s:12:\"multi_expand\";i:0;s:8:\"endpoint\";i:0;}', 'Redes Sociais', 'redes_sociais', 'publish', 'closed', 'closed', '', 'field_6487007d1032d', '', '', '2023-06-12 08:29:05', '2023-06-12 11:29:05', '', 17, 'http://localhost/portalsertao/?post_type=acf-field&p=18', 0, 'acf-field', '', 0),
(19, 1, '2023-06-12 08:29:05', '2023-06-12 11:29:05', 'a:7:{s:4:\"type\";s:3:\"url\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:39:\"https://www.facebook.com/tvportalsertao\";s:11:\"placeholder\";s:0:\"\";}', 'Facebook', 'ps_facebook', 'publish', 'closed', 'closed', '', 'field_648700cf1032e', '', '', '2023-06-12 08:29:05', '2023-06-12 11:29:05', '', 17, 'http://localhost/portalsertao/?post_type=acf-field&p=19', 1, 'acf-field', '', 0),
(20, 1, '2023-06-12 08:29:05', '2023-06-12 11:29:05', 'a:7:{s:4:\"type\";s:3:\"url\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:34:\"https://twitter.com/tvportalsertao\";s:11:\"placeholder\";s:0:\"\";}', 'Twitter', 'ps_twitter', 'publish', 'closed', 'closed', '', 'field_648700f61032f', '', '', '2023-06-12 08:29:05', '2023-06-12 11:29:05', '', 17, 'http://localhost/portalsertao/?post_type=acf-field&p=20', 2, 'acf-field', '', 0),
(21, 1, '2023-06-12 08:29:05', '2023-06-12 11:29:05', 'a:7:{s:4:\"type\";s:3:\"url\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:56:\"https://www.youtube.com/channel/UCari5f8Bk9Zht9ay_GHlOZQ\";s:11:\"placeholder\";s:0:\"\";}', 'Youtube', 'ps_youtube', 'publish', 'closed', 'closed', '', 'field_6487011210330', '', '', '2023-06-12 08:29:05', '2023-06-12 11:29:05', '', 17, 'http://localhost/portalsertao/?post_type=acf-field&p=21', 3, 'acf-field', '', 0),
(22, 1, '2023-06-12 08:29:05', '2023-06-12 11:29:05', 'a:7:{s:4:\"type\";s:3:\"url\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:42:\"https://www.instagram.com/tvportalsertaopb\";s:11:\"placeholder\";s:0:\"\";}', 'Instagram', 'ps_instagram', 'publish', 'closed', 'closed', '', 'field_6487012d10331', '', '', '2023-06-12 08:29:05', '2023-06-12 11:29:05', '', 17, 'http://localhost/portalsertao/?post_type=acf-field&p=22', 4, 'acf-field', '', 0),
(23, 1, '2023-06-12 08:29:05', '2023-06-12 11:29:05', 'a:7:{s:4:\"type\";s:3:\"url\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:49:\"https://api.whatsapp.com/send?phone=5583991994533\";s:11:\"placeholder\";s:0:\"\";}', 'Whatsapp', 'ps_whatsapp', 'publish', 'closed', 'closed', '', 'field_6487014910332', '', '', '2023-06-12 08:29:05', '2023-06-12 11:29:05', '', 17, 'http://localhost/portalsertao/?post_type=acf-field&p=23', 5, 'acf-field', '', 0),
(24, 1, '2023-06-12 08:36:20', '2023-06-12 11:36:20', 'a:8:{s:4:\"type\";s:9:\"accordion\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:4:\"open\";i:0;s:12:\"multi_expand\";i:0;s:8:\"endpoint\";i:0;}', 'Streams', 'streams', 'publish', 'closed', 'closed', '', 'field_64870260cade2', '', '', '2023-06-12 08:36:20', '2023-06-12 11:36:20', '', 17, 'http://localhost/portalsertao/?post_type=acf-field&p=24', 6, 'acf-field', '', 0),
(25, 1, '2023-06-12 08:36:20', '2023-06-12 11:36:20', 'a:7:{s:4:\"type\";s:3:\"url\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:47:\"https://player.jnbhost.com.br/proxy/7126/stream\";s:11:\"placeholder\";s:0:\"\";}', 'Rádio Sertão', 'ps_radio_sertao', 'publish', 'closed', 'closed', '', 'field_64870279cade3', '', '', '2023-06-12 08:36:20', '2023-06-12 11:36:20', '', 17, 'http://localhost/portalsertao/?post_type=acf-field&p=25', 7, 'acf-field', '', 0),
(26, 1, '2023-06-12 08:36:20', '2023-06-12 11:36:20', 'a:7:{s:4:\"type\";s:3:\"url\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:212:\"https://playerv.jnbhost.com.br/video/tvsertao/2/true/true/c3Rtdi5qbmJob3N0LmNvbS5icisx/16:9/aHR0cHM6Ly9wb3J0YWxzZXJ0YW8uY29tL2Vudmlvcy8yMDIzLzAzLzI5LzQ5ZjViNGUyMzIyN2M0N2FlNTU0NzU4NjBjNzhlYjZhZTgzOWQwNGQuanBnKzE=\";s:11:\"placeholder\";s:0:\"\";}', 'TV Sertão', 'ps_tv_sertao', 'publish', 'closed', 'closed', '', 'field_648702f8cade4', '', '', '2023-06-12 08:36:20', '2023-06-12 11:36:20', '', 17, 'http://localhost/portalsertao/?post_type=acf-field&p=26', 8, 'acf-field', '', 0),
(27, 1, '2023-06-12 08:56:06', '0000-00-00 00:00:00', '', 'Início', '', 'draft', 'closed', 'closed', '', '', '', '', '2023-06-12 08:56:06', '0000-00-00 00:00:00', '', 0, 'http://localhost/portalsertao/?p=27', 1, 'nav_menu_item', '', 0),
(28, 1, '2023-06-12 08:56:06', '0000-00-00 00:00:00', ' ', '', '', 'draft', 'closed', 'closed', '', '', '', '', '2023-06-12 08:56:06', '0000-00-00 00:00:00', '', 0, 'http://localhost/portalsertao/?p=28', 1, 'nav_menu_item', '', 0),
(29, 1, '2023-06-12 09:05:07', '2023-06-12 11:56:47', ' ', '', '', 'publish', 'closed', 'closed', '', '29', '', '', '2023-06-12 09:05:07', '2023-06-12 12:05:07', '', 0, 'http://localhost/portalsertao/?p=29', 1, 'nav_menu_item', '', 0),
(30, 1, '2023-06-12 09:05:07', '2023-06-12 11:56:47', ' ', '', '', 'publish', 'closed', 'closed', '', '30', '', '', '2023-06-12 09:05:07', '2023-06-12 12:05:07', '', 0, 'http://localhost/portalsertao/?p=30', 2, 'nav_menu_item', '', 0),
(31, 1, '2023-06-12 09:05:07', '2023-06-12 11:56:47', ' ', '', '', 'publish', 'closed', 'closed', '', '31', '', '', '2023-06-12 09:05:07', '2023-06-12 12:05:07', '', 0, 'http://localhost/portalsertao/?p=31', 3, 'nav_menu_item', '', 0),
(32, 1, '2023-06-12 09:05:07', '2023-06-12 11:56:47', ' ', '', '', 'publish', 'closed', 'closed', '', '32', '', '', '2023-06-12 09:05:07', '2023-06-12 12:05:07', '', 0, 'http://localhost/portalsertao/?p=32', 4, 'nav_menu_item', '', 0),
(33, 1, '2023-06-12 09:05:07', '2023-06-12 11:56:47', ' ', '', '', 'publish', 'closed', 'closed', '', '33', '', '', '2023-06-12 09:05:07', '2023-06-12 12:05:07', '', 0, 'http://localhost/portalsertao/?p=33', 5, 'nav_menu_item', '', 0),
(34, 1, '2023-06-12 09:05:07', '2023-06-12 11:56:47', ' ', '', '', 'publish', 'closed', 'closed', '', '34', '', '', '2023-06-12 09:05:07', '2023-06-12 12:05:07', '', 0, 'http://localhost/portalsertao/?p=34', 6, 'nav_menu_item', '', 0),
(36, 1, '2023-06-12 09:05:07', '2023-06-12 11:56:47', ' ', '', '', 'publish', 'closed', 'closed', '', '36', '', '', '2023-06-12 09:05:07', '2023-06-12 12:05:07', '', 0, 'http://localhost/portalsertao/?p=36', 7, 'nav_menu_item', '', 0),
(37, 1, '2023-06-12 09:05:07', '2023-06-12 11:56:47', ' ', '', '', 'publish', 'closed', 'closed', '', '37', '', '', '2023-06-12 09:05:07', '2023-06-12 12:05:07', '', 0, 'http://localhost/portalsertao/?p=37', 8, 'nav_menu_item', '', 0),
(38, 1, '2023-06-12 09:05:07', '2023-06-12 11:56:47', ' ', '', '', 'publish', 'closed', 'closed', '', '38', '', '', '2023-06-12 09:05:07', '2023-06-12 12:05:07', '', 0, 'http://localhost/portalsertao/?p=38', 9, 'nav_menu_item', '', 0),
(39, 1, '2023-06-12 09:05:07', '2023-06-12 11:56:47', ' ', '', '', 'publish', 'closed', 'closed', '', '39', '', '', '2023-06-12 09:05:07', '2023-06-12 12:05:07', '', 0, 'http://localhost/portalsertao/?p=39', 10, 'nav_menu_item', '', 0),
(40, 1, '2023-06-12 09:05:07', '2023-06-12 11:56:47', ' ', '', '', 'publish', 'closed', 'closed', '', '40', '', '', '2023-06-12 09:05:07', '2023-06-12 12:05:07', '', 0, 'http://localhost/portalsertao/?p=40', 11, 'nav_menu_item', '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ps_termmeta`
--

DROP TABLE IF EXISTS `ps_termmeta`;
CREATE TABLE IF NOT EXISTS `ps_termmeta` (
  `meta_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `term_id` bigint UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci,
  PRIMARY KEY (`meta_id`),
  KEY `term_id` (`term_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ps_terms`
--

DROP TABLE IF EXISTS `ps_terms`;
CREATE TABLE IF NOT EXISTS `ps_terms` (
  `term_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `slug` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `term_group` bigint NOT NULL DEFAULT '0',
  PRIMARY KEY (`term_id`),
  KEY `slug` (`slug`(191)),
  KEY `name` (`name`(191))
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Extraindo dados da tabela `ps_terms`
--

INSERT INTO `ps_terms` (`term_id`, `name`, `slug`, `term_group`) VALUES
(1, 'Manchetes', 'manchetes', 0),
(2, 'Política', 'politica', 0),
(3, 'Paraíba', 'paraiba', 0),
(4, 'Entretenimento', 'entretenimento', 0),
(5, 'Policial', 'policial', 0),
(6, 'Economia', 'economia', 0),
(7, 'Esportes', 'esportes', 0),
(8, 'Saúde', 'saude', 0),
(9, 'Tecnologia', 'tecnologia', 0),
(10, 'Educação', 'educacao', 0),
(11, 'Brasil', 'brasil', 0),
(12, 'Municípios', 'municipios', 0),
(13, 'Cacimbas', 'cacimbas', 0),
(14, 'Roubo', 'roubo', 0),
(15, 'Cajazeiras', 'cajazeiras', 0),
(16, 'Maternidade', 'maternidade', 0),
(17, 'Menu principal', 'menu-principal', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ps_term_relationships`
--

DROP TABLE IF EXISTS `ps_term_relationships`;
CREATE TABLE IF NOT EXISTS `ps_term_relationships` (
  `object_id` bigint UNSIGNED NOT NULL DEFAULT '0',
  `term_taxonomy_id` bigint UNSIGNED NOT NULL DEFAULT '0',
  `term_order` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  KEY `term_taxonomy_id` (`term_taxonomy_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Extraindo dados da tabela `ps_term_relationships`
--

INSERT INTO `ps_term_relationships` (`object_id`, `term_taxonomy_id`, `term_order`) VALUES
(1, 1, 0),
(6, 1, 0),
(12, 1, 0),
(12, 13, 0),
(12, 14, 0),
(6, 15, 0),
(6, 16, 0),
(29, 17, 0),
(30, 17, 0),
(31, 17, 0),
(32, 17, 0),
(33, 17, 0),
(34, 17, 0),
(36, 17, 0),
(37, 17, 0),
(38, 17, 0),
(39, 17, 0),
(40, 17, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ps_term_taxonomy`
--

DROP TABLE IF EXISTS `ps_term_taxonomy`;
CREATE TABLE IF NOT EXISTS `ps_term_taxonomy` (
  `term_taxonomy_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `term_id` bigint UNSIGNED NOT NULL DEFAULT '0',
  `taxonomy` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `description` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `parent` bigint UNSIGNED NOT NULL DEFAULT '0',
  `count` bigint NOT NULL DEFAULT '0',
  PRIMARY KEY (`term_taxonomy_id`),
  UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  KEY `taxonomy` (`taxonomy`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Extraindo dados da tabela `ps_term_taxonomy`
--

INSERT INTO `ps_term_taxonomy` (`term_taxonomy_id`, `term_id`, `taxonomy`, `description`, `parent`, `count`) VALUES
(1, 1, 'category', '', 0, 2),
(2, 2, 'category', '', 0, 0),
(3, 3, 'category', '', 0, 0),
(4, 4, 'category', '', 0, 0),
(5, 5, 'category', '', 0, 0),
(6, 6, 'category', '', 0, 0),
(7, 7, 'category', '', 0, 0),
(8, 8, 'category', '', 0, 0),
(9, 9, 'category', '', 0, 0),
(10, 10, 'category', '', 0, 0),
(11, 11, 'category', '', 0, 0),
(12, 12, 'category', '', 0, 0),
(13, 13, 'post_tag', '', 0, 1),
(14, 14, 'post_tag', '', 0, 1),
(15, 15, 'post_tag', '', 0, 1),
(16, 16, 'post_tag', '', 0, 1),
(17, 17, 'nav_menu', '', 0, 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ps_usermeta`
--

DROP TABLE IF EXISTS `ps_usermeta`;
CREATE TABLE IF NOT EXISTS `ps_usermeta` (
  `umeta_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci,
  PRIMARY KEY (`umeta_id`),
  KEY `user_id` (`user_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Extraindo dados da tabela `ps_usermeta`
--

INSERT INTO `ps_usermeta` (`umeta_id`, `user_id`, `meta_key`, `meta_value`) VALUES
(1, 1, 'nickname', 'admin'),
(2, 1, 'first_name', ''),
(3, 1, 'last_name', ''),
(4, 1, 'description', ''),
(5, 1, 'rich_editing', 'true'),
(6, 1, 'syntax_highlighting', 'true'),
(7, 1, 'comment_shortcuts', 'false'),
(8, 1, 'admin_color', 'fresh'),
(9, 1, 'use_ssl', '0'),
(10, 1, 'show_admin_bar_front', 'true'),
(11, 1, 'locale', ''),
(12, 1, 'ps_capabilities', 'a:1:{s:13:\"administrator\";b:1;}'),
(13, 1, 'ps_user_level', '10'),
(14, 1, 'dismissed_wp_pointers', ''),
(15, 1, 'show_welcome_panel', '0'),
(16, 1, 'session_tokens', 'a:1:{s:64:\"da90ebc9e53e112198cf9eedbb9c10f03ec0771c2fa5b156f6b289dec9778689\";a:4:{s:10:\"expiration\";i:1686737087;s:2:\"ip\";s:3:\"::1\";s:2:\"ua\";s:111:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36\";s:5:\"login\";i:1686564287;}}'),
(17, 1, 'ps_dashboard_quick_press_last_post_id', '5'),
(18, 1, 'closedpostboxes_dashboard', 'a:2:{i:0;s:21:\"dashboard_quick_press\";i:1;s:17:\"dashboard_primary\";}'),
(19, 1, 'metaboxhidden_dashboard', 'a:0:{}'),
(20, 1, 'meta-box-order_dashboard', 'a:4:{s:6:\"normal\";s:40:\"dashboard_site_health,dashboard_activity\";s:4:\"side\";s:19:\"dashboard_right_now\";s:7:\"column3\";s:21:\"dashboard_quick_press\";s:7:\"column4\";s:17:\"dashboard_primary\";}'),
(21, 1, 'ps_persisted_preferences', 'a:2:{s:14:\"core/edit-post\";a:3:{s:26:\"isComplementaryAreaVisible\";b:1;s:12:\"welcomeGuide\";b:0;s:10:\"openPanels\";a:5:{i:0;s:11:\"post-status\";i:1;s:12:\"post-excerpt\";i:2;s:23:\"taxonomy-panel-category\";i:3;s:14:\"featured-image\";i:4;s:23:\"taxonomy-panel-post_tag\";}}s:9:\"_modified\";s:24:\"2023-06-12T10:49:18.322Z\";}'),
(22, 1, 'ps_user-settings', 'libraryContent=browse'),
(23, 1, 'ps_user-settings-time', '1686566823'),
(24, 1, 'closedpostboxes_toplevel_page_opcoes-gerais', 'a:0:{}'),
(25, 1, 'metaboxhidden_toplevel_page_opcoes-gerais', 'a:0:{}'),
(26, 1, 'meta-box-order_toplevel_page_opcoes-gerais', 'a:2:{s:4:\"side\";s:9:\"submitdiv\";s:6:\"normal\";s:23:\"acf-group_6487005962327\";}'),
(27, 1, 'screen_layout_toplevel_page_opcoes-gerais', '2'),
(28, 1, 'managenav-menuscolumnshidden', 'a:5:{i:0;s:11:\"link-target\";i:1;s:11:\"css-classes\";i:2;s:3:\"xfn\";i:3;s:11:\"description\";i:4;s:15:\"title-attribute\";}'),
(29, 1, 'metaboxhidden_nav-menus', 'a:2:{i:0;s:12:\"add-post_tag\";i:1;s:15:\"add-post_format\";}'),
(30, 1, 'nav_menu_recently_edited', '17');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ps_users`
--

DROP TABLE IF EXISTS `ps_users`;
CREATE TABLE IF NOT EXISTS `ps_users` (
  `ID` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_login` varchar(60) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_pass` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_nicename` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_url` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_status` int NOT NULL DEFAULT '0',
  `display_name` varchar(250) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`ID`),
  KEY `user_login_key` (`user_login`),
  KEY `user_nicename` (`user_nicename`),
  KEY `user_email` (`user_email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Extraindo dados da tabela `ps_users`
--

INSERT INTO `ps_users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`) VALUES
(1, 'admin', '$P$BpCwuUTbBqZDpAKRo0b0aaBYHJi/4h.', 'admin', 'joaotdn@gmail.com', 'http://localhost/portalsertao', '2023-05-24 17:03:14', '', 0, 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
