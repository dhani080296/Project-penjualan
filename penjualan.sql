-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 Des 2016 pada 10.29
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `admin_users`
--

INSERT INTO `admin_users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ahmad Ramdhani', 'ahmad@test.com', '$2y$10$EMJmAYllEJg8ZtqlRermIesBIPUFWUTuQ2.r5zvtNk.7NdVvH2Vg6', '4E354ZGgNhgCp2Gs0KdR3UGPQ3g5CkJadyzQO9bZZVgqIgguiHsou9Vx39q8', NULL, '2016-12-04 06:55:28'),
(2, 'Ronie', 'ronie@test.com', '$2y$10$z3i7QDu7LjV5gfwjWirBNuM.riDTHlwSkzCT0gkVTU2A9TuJm3GfC', NULL, NULL, NULL),
(3, 'Fauzan', 'fauzan@test.com', '$2y$10$GPW4HoxiiLDood6BZTu2wOm9wGn1BC8X7eGjycXvd2w5bHc1utXma', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Electronic', 'electronic', NULL, NULL),
(2, 'Kendaraan', 'kendaraan', NULL, NULL),
(3, 'Oleh-oleh', 'oleh-oleh', NULL, NULL),
(4, 'Buku', 'buku', NULL, NULL),
(5, 'Accessories', 'accessories', '2016-12-03 14:11:56', '2016-12-03 14:11:56'),
(7, 'Camera', 'camera', '2016-12-03 14:14:00', '2016-12-03 14:14:00'),
(10, 'Jam tangan', 'jam-tangan', '2016-12-03 14:21:05', '2016-12-03 14:48:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `iklan_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `comment`, `created_at`, `updated_at`, `iklan_id`) VALUES
(1, 'Dr. Annamae Mayert Sr.', 'phettinger@smith.net', 'Deleniti laborum ad maiores possimus sit occaecati.', '2016-11-14 02:00:00', '2016-11-14 02:00:00', 7),
(2, 'Deborah Kreiger', 'lmuller@yahoo.com', 'Voluptatibus aut voluptas enim eveniet ut magnam non quis voluptatem.', '2016-11-15 02:00:00', '2016-11-15 02:00:00', 5),
(3, 'Kyla Doyle', 'nstracke@gerhold.com', 'Aperiam sint molestiae et ut nam recusandae laboriosam blanditiis non nobis.', '2016-11-16 02:00:00', '2016-11-16 02:00:00', 5),
(4, 'Tremaine Dooley', 'tlesch@fahey.com', 'Numquam tempora sequi reiciendis nostrum id sed est non excepturi et vel sapiente.', '2016-11-17 02:00:00', '2016-11-17 02:00:00', 9),
(5, 'Mr. Halle Mohr', 'michael27@dare.com', 'Atque exercitationem enim beatae sequi sint quos tempora quia porro quisquam.', '2016-11-22 02:00:00', '2016-11-18 02:00:00', 5),
(6, 'ahmad', 'ahmad@test.com', 'test\r\ntest', '2016-12-01 17:06:54', '2016-12-01 17:06:54', 10),
(7, 'ahmad', 'ahmad@test.com', 'test\r\ntest\r\ntest\r\ntest\r\ntest', '2016-12-01 17:15:49', '2016-12-01 17:15:49', 10),
(16, 'user1', 'user1@yahoo.com', 'cek', '2016-12-02 06:48:54', '2016-12-02 06:48:54', 8),
(17, 'user1', 'user1@yahoo.com', 'cek', '2016-12-02 06:50:42', '2016-12-02 06:50:42', 8),
(18, 'Ahmad Ramdhani', 'ahmad@test.com', '-coba tebak warnanya apakah yang akan terjadi??\r\n-hitam\r\n-putih\r\n-biru', '2016-12-03 17:28:38', '2016-12-03 17:42:49', 12),
(19, 'user1', 'user1@yahoo.com', 'cush', '2016-12-03 17:59:12', '2016-12-03 17:59:12', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `iklans`
--

CREATE TABLE `iklans` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bbm` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `price` int(11) NOT NULL,
  `view_count` int(11) DEFAULT NULL,
  `category_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `iklans`
--

INSERT INTO `iklans` (`id`, `user_id`, `title`, `slug`, `body`, `phone`, `bbm`, `address`, `image`, `created_at`, `updated_at`, `published_at`, `price`, `view_count`, `category_id`) VALUES
(1, 3, 'Iste cum sed non illo in dolores commodi dolorem numquam architecto.', 'quis-ipsam-illo-natus-placeat-eum-dolorum-magnam', 'Occaecati aut possimus consequuntur dignissimos. Sunt expedita eum debitis. Est optio nulla velit qui.\n\nOptio aperiam excepturi et architecto nihil. Ratione mollitia est velit dolore sit. Iste excepturi neque quo sit. Qui aut praesentium saepe at.\n\nSoluta ad ab nam similique ut exercitationem. Accusamus blanditiis tempore necessitatibus. Animi ipsam occaecati ut omnis est.\n\nHic iste atque quaerat enim et quia iure. Minus eum quae accusantium asperiores. Eos omnis veritatis et voluptatibus labore quia quas.\n\nUnde atque nemo iusto laboriosam unde fuga dolores. Nesciunt id dolores nihil sit velit dolorem minus commodi. Non non ea omnis illo molestias. Adipisci exercitationem nobis at.\n\nA soluta dolor at laudantium quia. Delectus aut magnam eum qui molestias nihil temporibus sit. Et aut natus amet ut. Et et esse quas omnis molestias voluptas mollitia. Ut doloribus pariatur molestiae repellendus.\n\nAd fugit ea a placeat eveniet soluta. Velit quod sit id inventore unde sit. Nihil enim dolor repudiandae architecto placeat voluptatem.\n\nLabore consequatur impedit perferendis. Cupiditate architecto aut dolores consectetur sit ad. Aperiam qui cumque velit.\n\nAssumenda accusantium et id dolorem voluptatem debitis aut. Modi et aut ut ex possimus omnis architecto. Facilis adipisci ut nihil quisquam qui dolorem. Expedita consequatur iure in sit qui.\n\nAspernatur molestias rerum laborum voluptatibus laborum unde recusandae maiores. Accusantium assumenda consectetur sunt dolorem non sint ipsum. Consectetur aperiam amet voluptatem quibusdam qui.', '+4505364060228', '68CDCEEA', 'Barrows Plaza 85572 New Santinofort', NULL, '2016-11-14 02:00:00', '2016-11-14 02:00:00', '2016-11-14 02:00:00', 2962402, 20, 1),
(2, 5, 'Pariatur accusamus delectus soluta maiores fuga nesciunt quia autem consequatur.', 'sed-aliquid-fuga-minus-fugiat-eveniet-voluptate', 'Voluptatem dolor consequatur quidem et. Ex repellendus ipsa molestiae sed in. Quasi nam voluptates fugiat soluta harum.\n\nDolorem deleniti mollitia maiores laudantium laudantium illo et. Rerum dolorem autem assumenda adipisci sed atque. Non occaecati temporibus impedit tenetur. Fugit ut reiciendis sed.\n\nVero quos velit porro repellendus dolor et. Et inventore nemo at ea est rerum. Odit earum tempore aut et ut. Quibusdam itaque quia numquam ut id.\n\nQuia repellat recusandae dolore sit ut. Illo dolorem numquam aut est debitis. Corporis tenetur enim et velit. Rerum quisquam error optio est tempore magni laborum.\n\nEt minus velit dolorem. Sunt aut eius voluptatem consequatur ipsum id veritatis placeat. Vitae expedita omnis numquam earum corporis.\n\nEt voluptate qui eligendi porro optio voluptas. Enim pariatur ut omnis quisquam quia. Nihil commodi voluptatem molestiae aspernatur.\n\nAb reprehenderit quo tenetur doloribus quam sed maiores soluta. Excepturi voluptatem sunt quidem vitae autem sed sunt. Dolores impedit dignissimos rerum sit nesciunt nobis. Amet ipsa consequuntur aperiam cumque mollitia ducimus.\n\nReprehenderit qui distinctio officia eligendi vitae ut aut voluptatibus. Nihil veritatis consequuntur accusamus fugiat quas. Voluptas vel dolores temporibus et ut. Necessitatibus natus sint quisquam distinctio id.\n\nDolorem praesentium harum et quis non. Consequatur aut qui veniam soluta. Suscipit rerum a aut et est. Qui aliquam omnis fugit blanditiis sint id laborum. Qui maiores vel dolore.\n\nAut fuga eius iste non quod dolor laborum animi. Laboriosam sed sed assumenda culpa quasi. Aspernatur laudantium illum fugiat nostrum error consequatur. Eos hic nostrum quo recusandae ut.\n\nVoluptatem et qui ratione vero corporis illum quos modi. Atque ea aut similique illum facilis alias saepe. Voluptates quo dolorem vitae iste qui. A repellendus non officia temporibus expedita aperiam explicabo.\n\nDolore nisi iure omnis accusamus aut nisi. Voluptas est corrupti in ut. Illo debitis eos minima ad.\n\nAmet et consequatur accusamus. Molestiae earum eligendi qui facere.', '+3874975343173', '87CDCEEA', 'Sipes Landing 09046 West Martine', NULL, '2016-11-15 02:00:00', '2016-11-15 02:00:00', '2016-11-15 02:00:00', 3556275, 100, 4),
(3, 3, 'Harum eos maiores unde rerum repellendus hic ullam id consequatur tempore sed est.', 'illum-nihil-dolorem-ipsa-voluptatem-temporibus-nesciunt', 'Odit reprehenderit hic dignissimos illo. Illo et debitis voluptatum adipisci. Quia officia sint minus voluptatibus. Ut ex non dignissimos ea eaque.\n\nBeatae repellat vel quis in. Nihil aut a cupiditate exercitationem ut omnis voluptatem. Quia ad quam nihil qui eius inventore. Qui iste nostrum assumenda sunt repudiandae.\n\nOfficiis ad rerum ab nihil ea cupiditate. Hic minus dolores sunt ad earum eum.\n\nNon qui ea sapiente. Ullam quasi adipisci nesciunt quia ut sint qui. Sint dolores esse quod aut et possimus possimus. Similique dolorem qui veritatis aut consequatur commodi molestiae sint.\n\nEa eveniet enim ea quam temporibus tempore quas. Quis non provident cupiditate iure aut rerum cum. Et ex omnis cum aut eum velit.\n\nUt libero velit voluptatem. Reprehenderit molestiae libero amet qui qui et suscipit soluta. Deserunt quos qui accusantium ut. Id eius necessitatibus nemo nihil laboriosam aliquid.\n\nSit enim dolorem commodi dolor repellat impedit atque. Cupiditate ipsa esse earum incidunt iste dolor impedit blanditiis.\n\nAut ut non voluptas dignissimos consequatur. Voluptatem laborum sed at enim id. Excepturi praesentium praesentium est magni officia. Nostrum consequatur harum ad eum quae numquam.\n\nIste tenetur veniam cum qui pariatur tenetur placeat. Vitae consequatur praesentium ab ipsam possimus. Qui fuga optio omnis quia possimus eum. Vero ut consequatur eius nihil dolorum et.\n\nQui veritatis consequuntur saepe harum atque quod in. Quia ut numquam vitae. Qui numquam numquam consequatur.\n\nDolorem odio saepe fuga ea illo explicabo nesciunt. Laborum porro ea qui itaque. Vero fugiat omnis amet sit. A harum facilis doloribus et illo qui aut.\n\nAccusantium architecto et et exercitationem est consectetur. Ipsam deserunt excepturi nam facilis molestiae. Numquam et ea ipsam ipsam quibusdam facilis facilis.\n\nIllo iste excepturi maiores veniam ad. Qui pariatur maxime ut. Amet saepe necessitatibus assumenda reiciendis in laboriosam sit. Animi quos dolorum harum consequatur.\n\nDeleniti ut soluta omnis corporis consequatur eligendi error. Accusantium saepe eveniet sit sed in dicta mollitia. Quo corrupti doloribus doloremque consequuntur. Sunt voluptatem quo quis nostrum quis aliquid.\n\nTempora ipsam autem saepe. Ipsam a rerum non quis rerum quia optio. Nemo sint enim quia eius voluptates ad.', '+2262104345707', '48CDCEEA', 'Kenyon Burg 20069-2479 Mayachester', 'Post_image_1.jpg', '2016-11-16 02:00:00', '2016-12-03 15:18:40', '2016-11-16 02:00:00', 3745362, 61, 1),
(4, 4, 'Accusamus quaerat recusandae eligendi doloribus rerum ex eos sit.', 'omnis-dolor-aut-sed-sint', 'Quas perspiciatis qui deserunt quod. Nobis consectetur id nisi ab animi adipisci aperiam. Eum quia aliquam dolorem aut. Et vero culpa ad voluptatem quia. Soluta incidunt et perferendis sed molestiae reiciendis.\n\nSequi soluta laboriosam tempora cupiditate. Ut perspiciatis ea impedit vitae qui. Totam suscipit magnam reiciendis eaque. Quo enim eaque perspiciatis.\n\nQui voluptatem reprehenderit molestiae. Velit tempore tenetur laboriosam qui facilis voluptatem. Tenetur architecto alias distinctio non.\n\nAut occaecati molestiae est. Facere odio labore in nostrum. Iusto voluptates est omnis sint ducimus. Consequatur quia neque minima. Voluptatem iste aut eveniet ea facilis.\n\nVoluptatibus et tempore illo omnis autem ad eos. Non qui quae reiciendis est. Perferendis illum laborum hic aspernatur autem ea.\n\nOccaecati quis placeat incidunt eum. Consequatur quo qui nesciunt veniam deserunt. In neque nihil autem quis.\n\nConsequatur numquam quidem sunt culpa. Sit culpa quaerat et sapiente velit dolores ea quia. Laudantium cum ipsam omnis sed cumque. Voluptate minima neque a.\n\nEos eligendi possimus libero et. Excepturi nisi libero accusamus iure. Sunt qui rerum quaerat libero.\n\nDolorem quo facere sit quia velit itaque est. Eaque autem voluptatibus ut sapiente aut expedita tempore. Recusandae officiis et qui dolorem aut neque et in.\n\nIpsum accusantium et voluptatem sed. Amet totam voluptatem dolores eius dicta voluptas. Numquam officiis enim doloribus. Et omnis autem pariatur.\n\nLabore iure nemo qui tempora enim temporibus. Sit dolorem eligendi sed iure. Tempora repudiandae qui cupiditate omnis.\n\nMaiores rerum quasi aut veritatis vitae. Ducimus est maiores voluptatibus consequatur nihil culpa est. Eligendi et explicabo libero molestias.\n\nAut labore tenetur esse quod pariatur. Nisi aut ipsam mollitia. Illum voluptatem deleniti laboriosam. Est cupiditate quidem praesentium odit aliquam ducimus. Sequi libero debitis dolorem beatae distinctio numquam earum.', '+7076576022955', '24CDCEEA', 'Kihn Island 60813 Kozeyburgh', NULL, '2016-11-17 02:00:00', '2016-11-17 02:00:00', '2016-11-17 02:00:00', 4297242, 40, 1),
(5, 1, 'Sit temporibus accusamus quam rerum et non officiis enim.', 'nemo-id-omnis-blanditiis-voluptatem', 'Vero ipsum quam aut. Nobis facilis at velit in saepe animi. Vel ex incidunt minima eaque.\n\nAut qui id maxime sunt expedita necessitatibus dolorem. Nihil ab excepturi libero et aut consequuntur. Odit veritatis ratione accusamus voluptates nobis dolor. Perspiciatis aliquid sit aspernatur deserunt aliquid nobis consequatur nesciunt.\n\nQui quisquam omnis ipsam magnam occaecati. Et officiis aut rerum. Pariatur aut doloremque eveniet nemo voluptas facere. Omnis voluptatum ullam aliquam nihil.\n\nAut dolor dolores et earum totam architecto magnam. Eum necessitatibus quis earum qui nostrum explicabo consequuntur. Optio placeat in non asperiores doloremque qui eius. Tempora harum voluptates molestiae voluptas.\n\nAutem cupiditate harum labore blanditiis temporibus beatae. Et a omnis quis quasi molestiae quam.\n\nIllo aut quia soluta atque non veniam a. Itaque inventore suscipit dolorem ut quaerat laborum. Officiis quidem delectus consequatur rerum voluptas dicta. Ad ea repellendus necessitatibus. Cum aliquam maiores quisquam.\n\nQuos consequatur veniam incidunt a odio rerum hic. Numquam totam animi eos impedit officiis. Repellendus harum vel dolores aliquam ipsum. Minima autem fugit ratione officia autem fugit ut molestiae. Ipsa illum aspernatur unde molestias.\n\nMinus et rerum quidem tenetur reiciendis. Tempore natus delectus minus pariatur quia. Et veritatis in in.\n\nVeritatis laborum adipisci quo. Debitis nostrum quis ut doloremque. Voluptatem ex molestiae officiis qui nulla est. Cumque aliquid aspernatur consectetur.\n\nReiciendis iure minima ab. Fugit nemo distinctio quo et omnis totam. Maxime totam architecto blanditiis quis minima ea exercitationem animi. Minus perspiciatis nesciunt maxime dolor delectus distinctio.\n\nEum et consequatur voluptatibus. Illo tempora doloremque mollitia labore vitae qui expedita. Fugiat sint nulla iusto.\n\nRerum omnis porro distinctio ipsa expedita iusto aperiam sunt. Omnis et dolorem minus inventore sit. Rerum quo sit nemo ut quisquam ullam ex. Voluptatem velit ipsam nihil velit blanditiis consequuntur.\n\nNecessitatibus nostrum nobis explicabo et totam molestiae. Repellat earum mollitia aliquid esse quis omnis omnis quasi. Ut incidunt nihil unde omnis ea. Quo qui quia temporibus dolor illum eveniet inventore.\n\nAnimi molestiae suscipit cum nesciunt quasi beatae sed fugiat. Dolorem neque nam minus qui est. Omnis optio modi eos in. Velit possimus accusamus voluptatum omnis nam.\n\nRerum qui placeat odit id aut soluta magni. Non consequuntur eveniet dignissimos aliquam. Non impedit dignissimos corrupti illo. Dolor quasi ipsam placeat debitis reiciendis dolorum at.', '+4038162832392', '26CDCEEA', 'Macejkovic Villages 69761 West Jerome', NULL, '2016-11-18 02:00:00', '2016-11-18 02:00:00', '2016-11-22 02:00:00', 1263794, 10, 2),
(6, 4, 'Tenetur accusantium exercitationem non enim odio iste voluptatum nostrum.', 'consequatur-ut-recusandae-perspiciatis-dolor-voluptas-ut-saepe', 'Laborum officiis omnis impedit vitae sed aut. Totam aliquam culpa reprehenderit at dolores voluptate. Accusamus modi ut consequatur facere nam qui. Vero maxime vero molestiae temporibus modi sint.\n\nAut omnis adipisci odit aut cumque. Quae ut et impedit quo maiores blanditiis quidem quos. Ea sit sit cum provident laudantium repudiandae. Voluptates expedita vel non omnis. Odio quidem rerum saepe sapiente sit architecto minus.\n\nPraesentium voluptatem autem ab a. Voluptatem sint doloribus odio et labore nostrum perspiciatis. Vel harum voluptas recusandae animi eos est eos.\n\nSed libero natus praesentium rerum. Necessitatibus qui non aut deleniti nihil esse minima. Porro nam quas beatae corrupti non temporibus.\n\nAperiam alias tempore qui ipsa. Illo voluptate necessitatibus vitae expedita. Praesentium perspiciatis ut iusto ducimus error voluptatibus odit. Non aspernatur unde cumque doloremque est ut aliquid.\n\nQuisquam sed expedita in ipsum sed ex quia. Enim ut est sit dolorem. Magni quisquam quisquam aut dolorum sed molestiae.\n\nOdit voluptatem quos voluptatem et facere vitae ut. Odio magnam accusamus ea aspernatur qui officiis autem. Eveniet aut dolores iusto. Sunt provident harum nemo officiis sit pariatur recusandae id.\n\nVoluptatibus dicta molestiae a aperiam corrupti. Laudantium eos ea saepe esse corrupti. Perspiciatis sed asperiores placeat sunt quis aliquid. Qui iste accusantium architecto pariatur earum ut.\n\nVeniam id sed odio porro a dolores maxime. Beatae vel reiciendis dolorum velit sed tempora quam. Sint autem explicabo facilis. Accusantium est quasi error animi porro ex. Quae sed at magnam temporibus sit ullam.\n\nExercitationem veniam sint mollitia perspiciatis aliquam et quisquam. Officiis vel qui atque explicabo explicabo. Hic reiciendis eius minima quidem excepturi. Dignissimos laboriosam ipsa quia corrupti quas et hic. Dolorem esse consequatur architecto aperiam officia nulla id.\n\nExplicabo aliquam error voluptas voluptatem ipsum dolor. Nesciunt reprehenderit suscipit rerum sit. Dolorem asperiores temporibus et eos tempora.\n\nExplicabo qui dignissimos expedita. Veniam non non eaque eius aliquid molestias. Necessitatibus debitis et laboriosam quam architecto asperiores. Quasi maiores debitis voluptatibus ratione voluptate dolores.', '+2581108687416', '46CDCEEA', 'June Stravenue 72648 Jaydashire', 'Post_image_2.jpg', '2016-11-19 02:00:00', '2016-11-19 02:00:00', '2016-11-23 02:00:00', 4806519, 20, 1),
(7, 4, 'Error excepturi numquam alias quae et sint sit est non voluptates deserunt totam nostrum maiores perferendis suscipit.', 'unde-dolorem-expedita-praesentium', 'Nihil non provident quae fuga dicta voluptas dignissimos. Consequuntur sunt dolores quod. Iste consequatur sit qui doloremque.\n\nVoluptates sunt eum et at et. Enim accusamus odio nemo vero enim. Et distinctio et sequi beatae maiores aut.\n\nQuaerat exercitationem aut quo rerum ad quas. Necessitatibus cumque debitis quia voluptatem velit. Aut id autem doloribus qui omnis. Accusamus harum eum perferendis aut delectus exercitationem.\n\nTotam sunt repellat qui quaerat est et. Iusto voluptas culpa ullam dolorem ipsum quia in exercitationem. Laborum dicta tempore consequuntur omnis. A nemo autem eos eos totam doloribus autem.\n\nDebitis et repellendus deserunt debitis nesciunt sed. Perferendis aperiam sapiente maiores et sed recusandae. Ut sunt ut fuga qui quia repellat provident. Omnis necessitatibus aut pariatur et.\n\nEa qui fugiat facere et aliquid nemo. Adipisci minima odio dicta est. Eaque cumque quia tenetur ad voluptas voluptatem quo. Ut quia enim reiciendis id et voluptate iste.\n\nDolores modi iure quia. Qui optio inventore est quia praesentium quam. Et fugiat nemo repellat sed id perspiciatis excepturi fugit.\n\nQuos vel qui autem et vitae inventore et. Natus aut eius quia deserunt. Aut ea quos voluptatem sequi.\n\nVoluptas rerum provident et tempora eveniet possimus qui laboriosam. Dolorem id sint non unde expedita id. Doloremque dolorum tempora nesciunt aut. Repellendus deleniti facere aspernatur natus quod perspiciatis.\n\nQuas numquam iure quod est nesciunt. Quia sapiente consequuntur eos. Ut aut totam et ducimus.\n\nFugiat molestiae maxime ut. Ipsam eum maxime velit et facilis repellendus occaecati. Assumenda omnis placeat iste laboriosam dolorem. Debitis quod similique natus explicabo quidem cum id.\n\nMolestias voluptatem aliquid numquam modi ea. Soluta autem quasi et perferendis enim ut. Dolores aut et consequuntur vel dolorum magnam. Aut sunt dolor aut dolorem.\n\nDolorem illum ipsum nam dolorem perferendis doloribus officia. Maiores inventore et qui maxime. Corrupti magni sit nam.\n\nDolorem qui molestiae et et et sint exercitationem tempora. Ut aspernatur eos sint ipsam et doloribus. In quaerat quam vel et omnis qui nisi.', '+6783260408290', '72CDCEEA', 'Kozey Curve 02355 Shaniaton', 'Post_image_3.jpg', '2016-11-20 02:00:00', '2016-11-20 02:00:00', '2016-11-24 02:00:00', 2284790, 80, 1),
(8, 1, 'Pariatur excepturi amet officia dolorum ipsa adipisci accusamus labore quisquam fuga esse cum.', 'placeat-aliquam-veniam-qui-et', 'Blanditiis ut autem iste deserunt doloremque eum perspiciatis. Rem voluptatibus ea omnis sapiente voluptatem. Officia inventore aliquam dolores commodi voluptates dolorem.\n\nLaboriosam nisi non labore id quisquam facilis et. Nisi consectetur expedita consequuntur eius dolorum et optio. Voluptas consectetur voluptas recusandae.\n\nSit omnis sapiente dolores. Et neque suscipit iusto.\n\nPerferendis sed dolorem dolor officia error. Provident sed inventore blanditiis. Nihil error aut perferendis eos facere sapiente voluptatibus autem. In culpa quia vel omnis nihil aut distinctio maiores.\n\nQuia error eveniet voluptatem minima. Magni veniam rerum consequuntur. Voluptatem enim sit laudantium ullam ipsam rem aut porro.\n\nQuaerat facere ea quas officiis exercitationem quod tempora. Expedita blanditiis repellat suscipit unde cupiditate. Ullam quis minima saepe qui.\n\nTotam unde voluptatem hic. Et asperiores laboriosam et laboriosam alias eum corrupti.\n\nTenetur est ut repellendus ipsa rerum labore. Voluptate quod et ad facilis esse. Consequatur voluptatum dolores praesentium nesciunt. Error voluptatum necessitatibus et non.\n\nNihil itaque vel impedit inventore. Error aperiam provident illum officiis ut cum.\n\nNostrum dolore exercitationem nihil voluptatum aliquam nihil. Libero aliquid eaque enim debitis ipsum. Dignissimos ipsum aut explicabo fuga praesentium blanditiis.\n\nMolestias voluptatem est itaque ut ut et reprehenderit. Voluptatem veniam illum blanditiis inventore. Dolore ea commodi ullam est aliquid ut error aut. Consequuntur vel et voluptatem id vitae voluptas tenetur.', '+2192656092406', '46CDCEEA', 'Ebba Lane 39835 Port Vincenza', 'Post_image_1.jpg', '2016-11-21 02:00:00', '2016-12-02 06:51:07', '2016-11-25 02:00:00', 1932983, 21, 2),
(9, 3, 'Dolor nisi explicabo aspernatur ex nemo doloremque qui aut ut.', 'dignissimos-nesciunt-qui-quasi-deserunt-est-libero-necessitatibus', 'Et quia similique nulla saepe aut vero. Soluta et reiciendis nihil molestiae. Architecto repellendus in sit id sed quo pariatur. Et aut neque officiis iusto quam.\n\nPorro sequi nulla perspiciatis magnam dolores sed rerum. Ut porro fugit et et. Omnis dolore ratione voluptates velit molestias et voluptatum. Voluptas mollitia tempore dolores sed asperiores eius in animi.\n\nEst qui aliquid debitis consequuntur ut eveniet. Qui perferendis iste ut voluptatem. Optio mollitia tempore iste non laborum inventore repellendus. Sed sed non omnis aliquid repudiandae necessitatibus.\n\nIpsam velit pariatur possimus aspernatur sed. Explicabo sint excepturi laudantium. Id maxime eum inventore ut consequatur tempore aut impedit.\n\nOfficiis maxime illo aut aut alias corrupti ex sint. Perferendis laborum non fuga ullam hic fugiat. Unde quis sint laborum tenetur. Earum consequatur dolor corporis tenetur facilis sit non.\n\nMagnam vel et tempora et quo blanditiis. Consequatur qui est non dolores voluptas similique rem. Fuga quo laborum veritatis voluptas numquam explicabo. Maiores consequatur suscipit non iste quidem.\n\nDeserunt earum architecto ipsa in et. Voluptas et iusto accusamus qui praesentium dignissimos est. Aut eum quaerat alias sed voluptas impedit. Iure accusantium quas sed.\n\nTemporibus quibusdam est sed aliquid. Maiores voluptatem voluptate totam provident necessitatibus modi. Quas quis ipsam dolore velit et.\n\nAmet eveniet omnis eius nostrum eius alias modi. Ea id incidunt eveniet in sed enim. Perspiciatis et quia sapiente aut distinctio voluptatem. Ad cumque ipsa et rerum. Optio quaerat dolor aut fugit non quisquam qui.\n\nOdio magnam minus vero sed amet. Velit quod atque libero id laudantium eum eum. Nemo consequatur aut qui labore.\n\nEt aut aut laboriosam error beatae. Distinctio magni accusantium eaque in. Veniam doloremque debitis voluptatum similique iure voluptate.\n\nDignissimos qui nihil nesciunt ut aperiam eos nihil. Laborum enim omnis ut sed. Voluptates libero consequatur voluptatem molestias velit. Cumque quis ipsa beatae corporis error.\n\nMaxime quia incidunt natus dolorem sit natus. Laudantium consequuntur et expedita iure rerum consequatur. Maxime sed quaerat deserunt voluptas amet.\n\nSit molestias eos assumenda ipsa. Non consectetur nesciunt nesciunt. Velit necessitatibus expedita qui est.\n\nMinima atque officia possimus atque quaerat consequatur. Iste a magnam praesentium sit tempore. Quis et possimus magnam praesentium.', '+6263027342690', '47CDCEEA', 'Keara Gateway 98833 Port Kearatown', 'Post_image_1.jpg', '2016-11-22 02:00:00', '2016-12-02 04:19:14', '2016-11-26 02:00:00', 3860474, 13, 4),
(10, 5, 'Quia voluptatem voluptatibus dicta eveniet est ab quasi ipsa est velit.', 'laudantium-eveniet-sint-reiciendis-ab-maxime-facilis', 'Facilis asperiores dolores doloremque necessitatibus sint rerum et. Vel et quas omnis. Modi quia laboriosam velit quisquam saepe quis. Ad deleniti et recusandae magnam.\n\nIpsam ullam sed sint vero eos dolore reprehenderit. Vel eligendi ut aut non.\n\nRerum reiciendis distinctio voluptatum non facilis. Mollitia nesciunt ut adipisci. Voluptatem iusto rem atque.\n\nRecusandae est eum rerum sunt laboriosam occaecati omnis possimus. Consectetur repellat in soluta fugiat. Porro vel iste repellat nisi corporis.\n\nVoluptates consequatur eaque atque excepturi error nihil. Ad corrupti nesciunt aut dolor hic dolore. Sit iure veniam et dolorem suscipit.\n\nLibero sit voluptatum aut praesentium ea recusandae nobis. Ducimus cumque iusto ad consequatur et.\n\nEius dolore quis voluptatem. Et vero quasi quo et nihil. Maiores praesentium ab ratione molestiae quaerat maiores.\n\nVoluptate eum incidunt et magnam modi. Atque quo vel repellendus eveniet deleniti id. Laborum modi sint harum alias quod atque. Rerum odio debitis corporis sint.\n\nRem qui tempora laudantium facilis et consequuntur. Aliquam ut quis quasi alias recusandae voluptatem.\n\nDolorem quia earum non. Quis adipisci quia voluptatem magnam. Sit sed ipsum odio est nesciunt distinctio. Distinctio tenetur praesentium delectus sit rem.\n\nAlias aut nobis neque officia nostrum sed corporis. Repudiandae ut eos aliquid deleniti numquam aut. Deleniti dolores et ut ea. Doloremque id debitis quia impedit ut id quia.', '+7453427277925', '34CDCEEA', 'Heaney Motorway 35924 North Ruth', 'Post_image_5.jpg', '2016-11-23 02:00:00', '2016-12-03 15:35:02', '2016-11-27 02:00:00', 3051636, 145, 1),
(12, 1, 'Apple iPad Air 2 16GB Wi-Fi Only Gold (Garansi 5 Bulan) ', 'apple-ipad-air-2-16gb-wi-fi-only-gold-garansi-5-bulan', 'KONDISI & SPESIFIKASI BARANG\r\n- Garansi Apple 5 Bulan lagi\r\n- Kondisi fisik mulus 100% perfect\r\n- Kondisi mesin bagus tanpa minus\r\n- Standart (unit + charger)\r\n- Layar 9.7 inci\r\n- Kamera depan 8MP 1080p\r\n- RAM 2GB\r\n- Chipset Apple A8X\r\n- Baterai 8820mAh\r\n- Jaringan 4G LTE\r\n- CPU Triple-core 1.5 GHz Typhoon\r\n- Kamera depan 1.2MP\r\n- LED-backlit IPS LCD, capacitive touchscreen, 16M colors\r\n- iCloud tidak terkunci\r\n- Gratis Pembuatan Apple ID\r\n\r\nJAMINAN PURNA JUAL - Semua barang yang akan kami jual telah melalui tahap pengecekan yang ketat. Kami memberikan garansi eksklusif satu minggu dari toko kami (uang kembali 100% tanpa potongan apabila ada kerusakan hardware).\r\n\r\nBARANG ORIGINAL - Semua barang yang kami jual di situs OLX adalah barang asli, bukan barang palsu atau replika.\r\n\r\nTIDAK TRANSAKSI ONLINE, TIDAK TRANSFER UANG, TIDAK PENIPUAN – Kami saat ini tidak melayani transaksi online. Kami adalah toko yang telah berdiri lama di Medan dan telah lama terverifikasi oleh OLX (dahulu TokoBagus). Pembeli HARUS DATANG langsung ke alamat toko kami sehingga Anda merasakan KEAMANAN dan KENYAMANAN yang mungkin tidak didapatkan dalam transaksi online. Hati-hati terhadap penipuan yang mengatasnamakan nama maupun alamat toko kami SKY.\r\n\r\nHARGA KOMPETITIF - Kami berusaha menjual dengan harga normal, wajar dan kompetitif sesuai dengan kondisi barang dan harga pasaran saat ini. Hati-hati terhadap penipuan menggunakan harga sangat tidak wajar.\r\n\r\nNO SMS, CALL ONLY – Maaf, kami hanya melayani pembeli serius saja dan tidak melayani SMS panjang lebar untuk pertanyaan seputar harga maupun spesifikasi barang. Harga di OLX adalah NET dan spesifikasi produk bisa dicek melalui situs resmi produk yang bersangkutan. Setiap SMS yang masuk tidak akan pernah dibalas. Nomor telepon kami untuk panggilan suara, hanya sebagai referensi untuk pertanyaan ketersediaan barang dan alamat toko.\r\n\r\n*\r\nALAMAT TOKO\r\nSKY\r\nJl. Sekip No 2-D\r\n(sebelah kiri, simpang Jalan Gatot Subroto, pas belakang Hotel Alfa Inn)\r\nMedan, Sumatera Utara\r\nBuka jam 10:00 s.d. 21:00 setiap hari kerja\r\n*\r\n\r\nSILAKAN KLIK ''LIHAT IKLAN LAINNYA'' UNTUK MENGECEK PRODUK-PRODUK KAMI LAINNYA YANG TERSEDIA SAAT INI ', '6285262179999', '468JLmn', 'Medan Kota, Sumatra Utara ', 'apple Ipad.jpg', '2016-12-03 06:42:25', '2016-12-03 06:42:25', '2016-12-03 07:00:09', 4800000, NULL, 1),
(15, 7, 'CBR 150 thn 2015 bln 2', 'cbr-150-thn-2015-bln-2', 'Bismillah... mau jual mtor kesayangan nih CBR 150 thn 2015 bln 2 plat F kab, mulus..\r\nPajak hidup, surat2 lengkap, kilometer rendah 2rb.an, motor pemakaian cwe, terawat, d pake cuma sekitar komplek perumahan aja.\r\nAtas nama sendiri, ayo gan mumpung balik nama sampe bln ini gratis..\r\nYg minat bisa cek barang sepuas.a,. Datang aja k perum grand kahuripan, cluster Merapi.. Klapanunggal. Nego sampai jadi.\r\nLebih jelas.a lagi hubungi nomer yg ada.\r\nMakasih olx ', '08979084496', 'd320bda7', 'Depok Kota, Jawa Barat', 'cbr.jpg', '2016-12-03 23:01:19', '2016-12-03 23:01:19', '2016-12-17 04:00:00', 25500000, NULL, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_11_22_033301_alter_add_users_1_table', 1),
(4, '2016_11_23_203607_categoriestable', 1),
(5, '2016_11_24_235923_Iklans', 1),
(6, '2016_11_30_194533_create_admin_users_table', 1),
(7, '2016_12_01_151103_create_comments_table', 1),
(8, '2016_12_01_193346_alter_add_comment_table', 1),
(9, '2016_12_01_200455_alter_add_iklan_2_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `slug`) VALUES
(1, 'user1', 'user1@yahoo.com', '$2y$10$ex3GqbkMxMPI/K.PFDpu7.PXXQ9lWosjeWWNlKOr3NvilNCzXhBYS', 'OhPtnNGWCzPgJZy6TNDw0aWyrKUBqGHH1ghTqVLg4Ctcjr3m1HoxAbTknOT1', NULL, '2016-12-03 17:59:27', 'user-1'),
(2, 'user2', 'user2@yahoo.com', '$2y$10$xre/3IJ41QWi323f97.3Kes8JuThXODPnUIz6Xp0yo/Q20ds7wnJ2', NULL, NULL, NULL, 'user-2'),
(3, 'user3', 'user3@yahoo.com', '$2y$10$DwjDS6bEYk8LNN9bqZ8qYujoQe0gNhtk6SC/4pM1vTGNV.Km.Akya', NULL, NULL, NULL, 'user-3'),
(4, 'user4', 'user4@yahoo.com', '$2y$10$DzQmJlEq/pinW8R.MgiHduy51WS1KjcUMZzdo3PKRvPfw7Vz1ox2y', NULL, NULL, NULL, 'user-4'),
(5, 'user5', 'user5@yahoo.com', '$2y$10$2IdUqfD2kRkotX4Gy2KWNe..QduCjScamuWahyXcgLYd3OIXNPxN6', NULL, NULL, NULL, 'user-5'),
(7, 'Fahmi Faturahman', 'fahmi@gmail.com', '$2y$10$sNdjd3h0Y.XYJJDlaCP3CulAnA/pw4GE.UO99f.prbxw9Tmuw7kH6', 'Csjet39ZQAeEKV0OV4XLUKh0bDhZyhEOpiTpmoshq0Y3BsZJxKQViymvEqXc', '2016-12-03 19:36:16', '2016-12-04 06:55:51', 'fahmi-faturahman');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_users_email_unique` (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_iklan_id_foreign` (`iklan_id`);

--
-- Indexes for table `iklans`
--
ALTER TABLE `iklans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `iklans_slug_unique` (`slug`),
  ADD KEY `iklans_user_id_foreign` (`user_id`),
  ADD KEY `iklans_category_id_foreign` (`category_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

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
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `iklans`
--
ALTER TABLE `iklans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_iklan_id_foreign` FOREIGN KEY (`iklan_id`) REFERENCES `iklans` (`id`);

--
-- Ketidakleluasaan untuk tabel `iklans`
--
ALTER TABLE `iklans`
  ADD CONSTRAINT `iklans_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `iklans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
