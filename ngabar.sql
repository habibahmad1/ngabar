-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2024 at 10:23 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngabar`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikels`
--

CREATE TABLE `artikels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `artikelPost` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publish_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikels`
--

INSERT INTO `artikels` (`id`, `category_id`, `user_id`, `judul`, `slug`, `image`, `excerpt`, `artikelPost`, `publish_at`, `created_at`, `updated_at`) VALUES
(1, 2, 5, 'Amet et illum expedita placeat.', 'amet-et-illum-expedita-placeat', NULL, 'Magni aliquid natus fuga facere eum quis. Corporis possimus voluptatem consequatur illo. Qui tempora corrupti consequatur est. Molestiae adipisci molestiae soluta velit quibusdam aut nobis. Doloribus minima praesentium quos maxime. Itaque et et debitis dolore.', '<p>Eius minus quis aut repellendus quas voluptatem. Magnam doloribus amet rerum voluptates.</p><p>Minima qui neque ad doloribus. Vel nihil porro delectus ea tempora est modi et. Quia molestias cum cum rerum amet. Exercitationem aut numquam fugit dolor quisquam aut.</p><p>Dolore in aut molestias temporibus consequatur eius iste. Nam rerum totam id velit provident ipsum. Perspiciatis at maiores et rerum qui sit natus. Repudiandae voluptate dolorem et commodi magni quasi.</p><p>Iusto animi aut animi corporis magnam velit esse libero. Voluptatem aliquid in in repudiandae sint ea aut. Dignissimos illum qui inventore et veniam. Aut suscipit facere odio aperiam ut.</p><p>Blanditiis aut aspernatur est. Quis magni cum omnis sit et et.</p><p>Eius error sit voluptas aut non unde maiores. Vel officia facere tenetur exercitationem sunt eveniet tempora. Laborum qui soluta quis ea iste accusamus. Aspernatur et recusandae illum et est ut.</p><p>Voluptas quia repudiandae recusandae excepturi. Rerum minima sit id eum distinctio. Laudantium nostrum qui quae voluptatem quas voluptates.</p><p>Accusamus rerum quae quaerat aperiam reprehenderit perspiciatis. Quaerat exercitationem molestiae quia non dignissimos in et. Recusandae ipsam quisquam nemo libero eos architecto.</p><p>In dolor temporibus totam. Et ducimus odio sed nulla quidem. Nesciunt aspernatur quia laborum.</p><p>Mollitia quos dolor ad. Quia itaque itaque eveniet vel occaecati.</p><p>Neque aut aliquid voluptas nesciunt non earum. Quisquam repellat officiis ea modi. Sed vitae architecto eos voluptatum et dolorum est. Molestiae cupiditate amet harum deserunt sit molestiae autem sed.</p><p>Repellat ipsam corrupti odio voluptatum velit at. Quia voluptas sit est sit voluptas. Non autem iste dolore sapiente nulla et.</p><p>Sunt beatae nisi ullam veritatis eaque quas officia. Dolores distinctio nihil voluptas eveniet. In asperiores ut doloremque qui.</p><p>Eius ullam sit quibusdam eius dignissimos cupiditate quos. Consequatur recusandae quia quisquam sapiente officiis expedita. Placeat sunt qui eos perspiciatis consequatur voluptate.</p>', NULL, '2024-06-09 03:14:39', '2024-06-09 03:14:39'),
(2, 4, 3, 'Laborum voluptatibus est labore doloribus ab.', 'laborum-voluptatibus-est-labore-doloribus-ab', NULL, 'Ea laudantium maiores corrupti assumenda. Maiores qui labore quo. Autem accusamus sit architecto vel omnis. Reprehenderit esse consequuntur quia accusantium at maiores.', '<p>Qui animi mollitia totam ut et fuga officiis. Consequuntur voluptas dolor provident sunt. Neque totam adipisci eos fuga.</p><p>Iste nihil perspiciatis sunt rerum fugit. Fugit hic ipsum debitis delectus eos et. Distinctio atque incidunt corrupti adipisci magnam veritatis.</p><p>Excepturi dolore perferendis aut et. Vel in quisquam recusandae ipsam. Accusantium reiciendis qui voluptate ipsam. Non et perspiciatis numquam dolores omnis odit ab vero. Tempore enim culpa itaque quis dicta quia eum.</p><p>Quisquam error a voluptatibus. Tenetur et excepturi dolor et quod. Voluptatem cum doloremque amet numquam sit rerum. Quaerat nemo minima eaque. Et eius voluptatem quaerat fugit voluptatum magnam molestiae.</p><p>Sunt libero autem maxime dolor culpa consequatur aperiam mollitia. In incidunt vitae quia esse. Magni dolores perspiciatis libero et aut voluptatem est. Consequatur ex sequi autem asperiores vitae.</p><p>Aspernatur nisi laboriosam ipsum et esse corporis sit. Consequatur iure et quis fugit dignissimos est. Commodi officiis optio id et a nisi consequatur. Sunt cupiditate in deserunt.</p><p>Eos quisquam qui voluptatum reprehenderit animi non iusto velit. Beatae ut ea et quis. Autem pariatur omnis eligendi totam laboriosam.</p><p>Vero quia aspernatur qui eius nisi. At corrupti modi corrupti itaque dolorum eligendi et commodi. Saepe ducimus doloremque magnam mollitia.</p><p>Dolor et odit eum ex sit ad et. Atque quod veniam quae adipisci neque non. Labore non voluptatem quia atque. Rerum et numquam optio aliquam tenetur quasi possimus.</p><p>Animi voluptas quidem sunt in non. Tenetur vel quam et dolor unde error earum. Rem ducimus temporibus ut qui voluptas quasi.</p><p>Sint dolorem dignissimos dolores consectetur blanditiis. Ea autem inventore amet velit. Et omnis explicabo consequatur.</p><p>Est beatae at qui laborum quae alias nihil. Nihil harum non fuga. Ab tenetur quae optio dicta quo voluptas.</p><p>Voluptatum ipsa expedita aut facilis occaecati. Soluta dolores nisi veniam sit sit voluptas ut tempore. Earum molestiae qui deserunt sit exercitationem.</p><p>Et impedit labore facere architecto. Maxime totam dicta minima eius quos qui enim.</p><p>Quibusdam voluptatum omnis unde rem sit cupiditate odit. Libero doloremque ea similique officia. Est dolores architecto ratione et. Praesentium quaerat ullam consequatur dolorum optio.</p><p>Minima possimus voluptatem officiis quos. Enim tempora sunt sunt necessitatibus distinctio et. Voluptate rerum assumenda qui quod consequuntur. Eius id et perferendis qui voluptatem fugit.</p><p>Excepturi velit veniam tempora qui ea. Corrupti veniam harum ex accusamus non est unde. Adipisci ipsum facere laborum aspernatur. Alias ut corporis necessitatibus nemo alias ab aspernatur. Suscipit accusamus expedita ex earum at molestiae enim est.</p>', NULL, '2024-06-09 03:14:39', '2024-06-09 03:14:39'),
(3, 3, 2, 'Delectus est.', 'delectus-est', NULL, 'Eligendi est nihil perspiciatis dolores commodi rerum. Ut doloribus qui ex consequuntur aspernatur enim laborum. Commodi non ab quisquam omnis sapiente voluptatem. Accusantium sequi doloribus dolores numquam. Soluta nesciunt quas dolor quis aut doloribus est et. Corrupti facilis consequuntur sed voluptatem non. Dolores ut quam repudiandae voluptatem non optio.', '<p>Dolores nesciunt nobis ut. Sapiente magni aut atque ex voluptates commodi earum sed. Esse nam sint consequatur.</p><p>Necessitatibus quia doloribus laudantium sit sequi. Cum nihil eos ut consectetur quia amet.</p><p>Consequatur quia corrupti sunt. Magni quidem beatae vitae neque eveniet minus quod autem.</p><p>Sint autem fugit et dolores enim. Perspiciatis quo dolorem quae reiciendis. Similique consequatur at fugiat ducimus ut sequi culpa animi.</p><p>Debitis eos deserunt beatae rerum veniam molestiae. Qui in officia libero impedit. Quo voluptatem necessitatibus ipsa ipsum.</p><p>Quis voluptate officiis necessitatibus praesentium. Hic et rerum in atque ipsa et veniam asperiores. Et pariatur et aut consectetur rem.</p><p>Facere aut in necessitatibus officiis qui. Accusantium facere rerum saepe et qui maxime fugiat.</p><p>Est consequuntur est repellendus beatae. Modi laborum numquam id officiis deserunt provident. Dolores dolore quae ullam non suscipit aut. Omnis minima vel laborum. Qui dolorum beatae nam enim est eum nihil.</p><p>Magni maiores est debitis voluptas. Omnis ut sapiente veritatis voluptatem blanditiis numquam expedita voluptatem. Ut iste excepturi quis. Maiores perspiciatis sunt corrupti vel ea.</p><p>Impedit dolore ipsum voluptas aut ipsa aut. Autem voluptatibus id ipsam dignissimos. Ea esse et minus architecto.</p>', NULL, '2024-06-09 03:14:40', '2024-06-09 03:14:40'),
(4, 1, 2, 'Veniam omnis est nesciunt rerum ipsa.', 'veniam-omnis-est-nesciunt-rerum-ipsa', NULL, 'Amet esse hic voluptatum. Id fugit ut quia. Eius necessitatibus et et cum culpa eos aut. Numquam aspernatur consequuntur maxime autem autem. Eligendi minima culpa sint corporis unde qui dolor necessitatibus. Doloribus voluptatem maiores enim nulla placeat. Ab reprehenderit saepe provident iste dolores sit.', '<p>Vero aliquid mollitia non quae. Aperiam voluptas ipsum dolor qui.</p><p>Ea sit neque illo possimus. Illo qui perspiciatis cum iusto modi. Voluptas sed veritatis culpa reiciendis doloribus est porro.</p><p>Beatae eos qui alias quaerat. Veritatis consequatur quasi quaerat nesciunt est at. Labore fugit nostrum est sunt quis. Id voluptatibus sapiente beatae id.</p><p>Possimus dolorum ipsum consectetur. Possimus quas explicabo ex. Voluptatum architecto eius et voluptatem inventore enim dignissimos. Culpa provident dolorem quam distinctio corporis ea.</p><p>Voluptatem quia corporis delectus porro numquam fugiat quasi. Voluptatem et qui et ex accusantium quidem. Ipsa qui adipisci non debitis.</p><p>Ut porro dolorem facere aliquam ut sunt qui. Sapiente reprehenderit velit ex distinctio accusamus dolorum magni. Odio corrupti earum quo ipsa asperiores corrupti. Consectetur sed veritatis et quo quo ut.</p><p>Eaque eos est sed sed maxime iusto. Sit veritatis ut esse unde. Id eius deserunt rerum error sequi.</p><p>Quis est repellat vel ut nostrum. Asperiores aut ullam enim voluptas sed magni adipisci est. Rerum enim ut animi soluta reiciendis soluta fugit.</p><p>Quaerat quisquam minus sint et et est reiciendis. Possimus voluptatem eum voluptas sunt ut excepturi. Recusandae asperiores quo neque beatae nihil quia ea omnis.</p><p>Quam et quia voluptatum esse provident sequi eius. Est laborum ipsa aut sed. Nihil dolore non alias sed. Eos voluptas assumenda velit tenetur.</p><p>Voluptatem expedita laborum sed nesciunt ut aliquid sit dolorum. Ipsam molestiae animi nam eaque et. Aut aspernatur velit mollitia aperiam. Non vel aut ut assumenda et nisi sapiente omnis.</p><p>Qui sed dolores voluptatem velit. Impedit soluta necessitatibus voluptatem modi officiis. Quia labore quia inventore. Animi velit assumenda atque fugiat reiciendis hic sunt nostrum.</p><p>Eius amet possimus corporis aspernatur nihil sapiente nisi non. Et ut nostrum eaque eum sint corporis. Adipisci perspiciatis et cupiditate. Ad repellendus eum eius corrupti.</p><p>Et dolorem inventore modi ducimus dolor natus. Officiis ut earum quos iste quo. Voluptas eveniet rerum qui similique.</p><p>Voluptas sed magni voluptatum qui itaque sint. Itaque doloremque velit quasi et. Modi quia officia fuga perspiciatis odio deserunt.</p><p>Recusandae praesentium provident magni quia. Mollitia officia veritatis voluptas in esse maiores mollitia. Rem esse qui inventore qui ut. Quia vitae dolorem maxime soluta odio eos ipsam.</p>', NULL, '2024-06-09 03:14:40', '2024-06-09 03:14:40'),
(5, 2, 3, 'Quidem sint ut tenetur magnam vel.', 'quidem-sint-ut-tenetur-magnam-vel', NULL, 'Et a aut maxime enim. Dolores architecto ipsa earum iusto. Harum ducimus pariatur dolorum omnis ipsam amet voluptas. Aspernatur laboriosam eum deleniti est error. Totam aut laborum aut consectetur dolores. Voluptatem dolorum odit et aliquam. Vero veniam nam id ab inventore aut quis corrupti.', '<p>Aperiam ad autem deleniti libero consequatur quas expedita. Maiores ab aut atque placeat aut eos. Maxime quo molestiae qui tenetur mollitia dignissimos. Temporibus corrupti vero quisquam est ex consequatur.</p><p>Maxime dolore ut est minus explicabo nisi rerum. Deleniti itaque in voluptas dolorum vero impedit facilis officiis. Vel molestias quaerat dolorem nihil modi.</p><p>Corrupti et soluta quam molestias aut ad et. Et aspernatur at perspiciatis. Dolorem sit ipsam minus veritatis quasi harum. Aperiam et quae commodi quo dolores voluptates.</p><p>Voluptatem delectus ab odio. Fuga velit aperiam ea nisi. Laudantium repudiandae sunt doloribus suscipit tempora quis adipisci praesentium. Magnam blanditiis vero aliquam numquam animi est. Sed eum et omnis aut.</p><p>Tenetur quia praesentium quia repellat repellendus. Cumque delectus debitis sed sunt voluptatem et. Sint neque quo optio aliquid praesentium optio. Suscipit officia consequatur illum.</p><p>Qui eius dignissimos consequatur esse laudantium. Optio illum numquam nisi dolorem. Tempore rem officia minima minima eum in. Odit quae atque at rerum perspiciatis aspernatur.</p><p>Deserunt minus beatae est dolor mollitia voluptate aspernatur. Voluptatem ipsa perferendis quas aut. Omnis modi illo voluptatum quidem.</p><p>Architecto est quis quod maiores. Illo quis voluptate et esse. Excepturi modi incidunt est nam.</p><p>Unde maiores et aperiam aut et. Praesentium dolorem voluptatem neque sed saepe. Tempore rerum ut labore occaecati aut temporibus vel id. Eum dolorem ea vitae laborum est in aut animi.</p><p>Sunt reprehenderit est et. Et sit accusamus et odit voluptatem.</p><p>Nihil nihil sit et aut tempora eum. Adipisci facere sunt nam earum enim et repudiandae. Quam voluptatem tenetur itaque labore deserunt velit repellat.</p>', NULL, '2024-06-09 03:14:40', '2024-06-09 03:14:40'),
(6, 1, 3, 'Reprehenderit sint itaque sint tempore consequatur illum sunt possimus nam.', 'reprehenderit-sint-itaque-sint-tempore-consequatur-illum-sunt-possimus-nam', NULL, 'Accusantium numquam commodi debitis nulla repudiandae. Iusto totam possimus ipsam ut cum hic. Error sed aspernatur quis amet rem cupiditate non. Fugit error iste delectus dolores vero ad. Id pariatur magnam corrupti nam.', '<p>Veniam nulla animi voluptatum sint. Vel libero adipisci voluptates quos molestias aut iusto. Id quo impedit iusto quia qui. Itaque ad facilis fuga.</p><p>Eum reprehenderit temporibus nostrum id. Quisquam eum et quo. Corrupti sint ut culpa repudiandae aliquam assumenda voluptas.</p><p>Aliquid autem qui nisi voluptate qui inventore expedita. Accusantium assumenda cupiditate sit voluptatem quasi sequi.</p><p>Ipsam et facilis ducimus. Vero libero repudiandae rerum modi assumenda ut nobis. Itaque qui quo ipsam autem. Beatae nobis itaque consequatur dignissimos occaecati dolores itaque.</p><p>Adipisci voluptate ea consequuntur. Eum aliquam commodi ad possimus. Est consequatur ipsam expedita. Quam eos enim nostrum labore itaque eum saepe id.</p><p>Adipisci consequatur rerum nobis labore eveniet odio. Quisquam suscipit perferendis distinctio enim ullam provident. Voluptatem ut debitis excepturi sed dolore beatae perspiciatis.</p><p>Aspernatur velit qui perspiciatis facilis quo cum. Omnis voluptas consequatur commodi in aspernatur maxime nobis. Quaerat saepe accusamus et natus autem ut asperiores tempore. Rerum consequatur et vitae qui omnis aut numquam. Eos veritatis omnis in aut autem vero aut.</p><p>Error quia sint omnis voluptatibus. Ea dolorum deserunt in cupiditate maiores. Distinctio possimus aut reiciendis sit magni doloribus reiciendis et.</p><p>Fugiat et aut hic aut quidem magni. Perferendis assumenda quas aperiam ipsum ab. A ut placeat voluptate officiis et aut iusto.</p><p>Corporis voluptatem exercitationem voluptate odio veritatis magni. Consequatur ex enim doloremque aliquam adipisci numquam. Quia et aperiam error earum. Dolores molestias qui corrupti ea voluptates.</p><p>Dolorem dolorem velit dolores totam dolorem ducimus. Aut accusamus voluptatem possimus quo perferendis vel. Dignissimos optio ut explicabo nisi soluta quis consequatur est. Sit voluptatibus laborum aut dignissimos aut.</p><p>Voluptate sit illo sed officiis. Qui in itaque qui reiciendis excepturi aliquid. Quia officia maiores praesentium. Deleniti magnam earum a qui exercitationem. Numquam incidunt repellat ipsum voluptatem dolor.</p><p>Non harum nihil omnis cumque quis est eveniet. Amet doloribus culpa alias quia. Cumque rerum molestiae maxime facilis accusantium in aut.</p>', NULL, '2024-06-09 03:14:40', '2024-06-09 03:14:40'),
(7, 2, 5, 'Placeat vitae quia dolores porro enim aperiam.', 'placeat-vitae-quia-dolores-porro-enim-aperiam', NULL, 'Ullam consequatur maxime molestiae est repellat quod in. Pariatur similique nemo distinctio aut. Ipsum optio libero optio. Consequatur aut magnam repudiandae asperiores. Ad eos qui ea voluptas expedita in sint et. Minus voluptatibus ullam velit fugiat.', '<p>Dolorem non commodi veniam tempora molestiae in eaque. Quia quo aut dolore unde debitis. Ut quod temporibus possimus adipisci. Velit voluptas esse aut accusamus.</p><p>Cupiditate quibusdam nemo accusamus dolores odio corrupti sed. Fugiat ut voluptatem nihil excepturi et quia. Qui qui cupiditate aperiam et et qui non aut. Unde aut quidem deserunt qui ut. Voluptatibus ipsum quo animi repellat qui.</p><p>Voluptatem doloremque et eos voluptatem qui. Quasi quidem quo provident omnis ab. Odio est dolores inventore quia. In aut est commodi.</p><p>Magni similique vel distinctio officia nam veniam. Perferendis corporis consequatur pariatur rem in maxime et. Et libero ut doloremque quo natus assumenda. Repellat velit nulla quibusdam ratione est saepe. Voluptatum ut ex ex sed soluta ratione.</p><p>Nam ab et voluptatem omnis error. Sunt alias sapiente sint a modi occaecati cum. Ut aperiam tenetur vero commodi debitis autem in. Laudantium voluptatem dolor aut optio necessitatibus id.</p><p>Qui nihil tempore occaecati ullam non quia non id. Nam nobis voluptas voluptatibus fugiat repellendus beatae ab quia. Sunt modi et voluptas quos non quasi similique. Amet voluptatum ducimus reiciendis asperiores porro accusamus doloribus.</p><p>Accusantium delectus inventore aut eos ut aut. Doloribus nulla iste iusto est aut. Tenetur quibusdam autem consequatur commodi. Dicta rem ad voluptate nobis occaecati.</p><p>Nemo voluptatem et facilis rerum provident recusandae. Eius repudiandae consectetur ut a quibusdam. Est ut officiis non ea provident laboriosam et at.</p><p>Deleniti voluptas neque sapiente quia. Tempora distinctio qui consequatur dolorum non esse nemo. Impedit aut itaque sit perspiciatis unde. Sit totam suscipit aliquam soluta distinctio at rem.</p><p>Atque est architecto exercitationem reiciendis deleniti harum rerum. Doloremque rerum recusandae magnam magnam maiores. Expedita inventore neque ratione qui. Mollitia ut cupiditate unde aut.</p><p>Nemo quas optio voluptatem. Quidem totam corrupti repellat. Quidem ipsum eum sit ut deleniti consectetur et.</p><p>Autem dignissimos rerum ut aperiam. Amet aspernatur officia sunt sequi ut voluptas.</p><p>Exercitationem adipisci quisquam debitis soluta. Libero soluta aut odit beatae aperiam. Quasi quo qui officiis qui. Quidem ut veniam quasi laboriosam velit occaecati. Voluptas aliquam est aut excepturi id at.</p><p>Alias recusandae sed quibusdam totam autem quisquam. Maxime vel velit accusamus. Occaecati voluptate sunt reiciendis nesciunt et soluta.</p><p>Facere nihil pariatur qui rerum. Aperiam vel non molestiae dolore. Vel qui placeat nesciunt id optio et soluta. Animi dolorum nisi optio laboriosam sit quo.</p><p>Repellat incidunt dolore voluptas maxime. Quidem itaque distinctio vel voluptatem sed distinctio distinctio et. Soluta minus sed recusandae asperiores cum. Aliquam qui sit quis voluptas nobis quibusdam.</p><p>Quidem voluptas sint hic ipsa. Sunt magnam adipisci qui vitae soluta.</p><p>Rerum fugit voluptas qui neque numquam placeat. Ea vel odio quam est qui sed sapiente voluptatem. Itaque nemo unde quasi voluptas nesciunt.</p><p>Quia facere voluptatem architecto et. Excepturi possimus ea repellat ea architecto asperiores. Quo suscipit ab accusantium suscipit dignissimos autem.</p>', NULL, '2024-06-09 03:14:40', '2024-06-09 03:14:40'),
(8, 1, 4, 'Ipsa blanditiis ut qui quo adipisci.', 'ipsa-blanditiis-ut-qui-quo-adipisci', NULL, 'Fugit et quia nesciunt cupiditate sed debitis. Consequuntur nihil sed veritatis sunt minima harum. Labore excepturi exercitationem id est illum corrupti sequi est. Impedit soluta autem ut fugiat id non. Voluptates autem voluptatem et deleniti iure modi aut. Tenetur expedita corporis quibusdam architecto pariatur adipisci aut. Odio laborum non et dolorem.', '<p>Id sit reprehenderit non ea cum et velit rerum. Magni ipsa nemo est vel officia. Reiciendis quasi aut labore ut accusantium cumque.</p><p>Saepe consequuntur eveniet rerum dicta totam fugit. Dolorem amet eum quis quia in porro sint.</p><p>Suscipit et corporis est ducimus. Quam debitis quia alias eaque doloremque. Dolorem minus omnis odio maxime a voluptate sit.</p><p>Facere sed aut totam ut modi minus illo. Autem eos explicabo sed impedit quae. Ab numquam consequuntur exercitationem.</p><p>Et esse repudiandae quis cum commodi iusto. Consequatur voluptatem voluptatem itaque et. Sequi distinctio modi aut rerum.</p><p>Odit voluptatem dolores eum beatae mollitia. Ut ullam sit rerum esse deleniti quisquam. In quo culpa neque nesciunt eligendi sint accusantium aut.</p><p>Sed velit occaecati maxime temporibus ut. Rem fugiat fuga aliquam quibusdam nihil non illum. Quo voluptas qui labore consequuntur laborum. Nobis rem unde expedita non.</p><p>Voluptas molestias rerum beatae dolore commodi quidem a. Doloribus ipsum et ut aut accusamus nisi occaecati. Pariatur soluta iste eum ut nihil soluta unde. Autem et vero facilis id qui.</p><p>Qui distinctio aut velit tenetur id officia sed cumque. Animi nihil a assumenda adipisci itaque id deleniti. Assumenda iusto voluptatem dolorum mollitia molestiae placeat.</p><p>Dolorum accusantium aut molestiae possimus cumque quia ex. Illo reiciendis non voluptatum reiciendis. Aut veritatis porro suscipit modi molestiae aliquid.</p><p>Numquam eius voluptatem esse rerum optio quasi praesentium. Reiciendis odit tempore natus earum eum. Dolorem nisi sunt laboriosam ea adipisci ab rem.</p><p>Voluptas nihil est voluptates laborum aperiam dolorem ea. Fuga quaerat magni necessitatibus minima. Voluptas provident ad rerum et quia facilis minus.</p><p>Saepe aut aut fuga ut provident. Laboriosam quasi natus distinctio labore. Aliquid eaque et dolor dolorem debitis. Et aut neque possimus officia sint aut non.</p><p>Accusantium reiciendis rerum et. Vitae dolorum perferendis totam. Temporibus reprehenderit accusantium non quo. In quis ut voluptas neque quam error.</p><p>Et voluptatem maxime tempore placeat numquam eligendi quae. Voluptatem placeat qui quo. Dolorem tempora necessitatibus placeat dignissimos et illo. Asperiores beatae similique dolorem ipsa praesentium animi assumenda. Doloremque non maxime hic fugit fugiat quo.</p><p>Vero pariatur ratione ea placeat. Vel beatae similique et vel aliquam voluptates cumque. Voluptatem ipsam placeat earum modi non voluptas maiores.</p><p>Ut et sequi eaque deleniti et et. Aspernatur dolores repellendus molestiae nisi voluptates dolores.</p><p>Voluptas et quia id iure nisi rerum placeat. Autem ullam sunt inventore at ipsa.</p><p>Enim non sint et autem corporis sit omnis. Explicabo quis doloribus asperiores repudiandae iure blanditiis voluptatem.</p><p>Eos explicabo natus dolorem velit repellendus dolorem. Pariatur quae id et voluptatum commodi. Ipsa consequatur veritatis molestias dolores ducimus saepe.</p>', NULL, '2024-06-09 03:14:40', '2024-06-09 03:14:40'),
(9, 1, 3, 'Qui fugiat et ipsam est possimus accusamus laboriosam repellat.', 'qui-fugiat-et-ipsam-est-possimus-accusamus-laboriosam-repellat', NULL, 'Recusandae illum fuga omnis inventore. Unde aut minus qui sed officiis optio pariatur. Nulla nobis dicta aut. Aut eum ut corporis nesciunt fugiat. Iure et et ut adipisci pariatur a.', '<p>Est pariatur omnis in at quia nihil eveniet. Accusamus culpa magni dicta est. A nobis fugit natus recusandae enim consectetur neque in. Qui inventore et eum asperiores.</p><p>Nisi nulla nemo et dicta quod veniam nemo. Exercitationem non qui dolorem omnis qui laboriosam. Reiciendis adipisci quia perspiciatis delectus velit expedita enim.</p><p>Quia excepturi blanditiis voluptates dolor ut aut. Debitis voluptas cum et iure voluptas aut. Dolorem rerum quibusdam nihil atque omnis nulla fuga laboriosam. In repudiandae assumenda qui facilis mollitia illo reprehenderit.</p><p>Consequatur ut dolor dolorem et. Dolores possimus itaque esse autem. Aut molestiae eos modi aut.</p><p>Fugiat velit ipsum consectetur dolores non. Sed consequatur eligendi rerum aliquid maxime enim ad. Voluptas non cupiditate et molestiae ab aut dignissimos. Ut inventore et excepturi officiis enim magnam.</p><p>Id eligendi et maiores quaerat eos illum facilis. Fugit perspiciatis a commodi non expedita rerum aut maxime. Iure qui unde nihil dolorem maiores eum excepturi.</p><p>Ab reiciendis a aut repudiandae dolore sint ut. Eaque odio qui qui quas odio in. Aut ad corporis quia atque ducimus mollitia facilis. Maxime ut nam rem deleniti temporibus recusandae deleniti.</p><p>Sequi quasi magni id consequatur et itaque facilis. Distinctio aliquam voluptatum quo minus. Eligendi libero repellat laborum odit quisquam. Assumenda numquam aut officia impedit. Doloremque laudantium doloremque perferendis ab.</p><p>Voluptatem ut nulla qui atque accusamus. Vero cum ullam earum nisi. Quia voluptatum nam maiores molestiae possimus voluptatem quas quod. Hic qui mollitia repudiandae qui dolorum architecto. Maxime excepturi tempore quo cupiditate sapiente fugiat dolorem.</p><p>Qui qui rerum ut magni. Quae placeat aut et alias quia. Et aliquam culpa consequuntur sunt facilis beatae similique est.</p>', NULL, '2024-06-09 03:14:40', '2024-06-09 03:14:40'),
(10, 3, 2, 'Sequi nihil reiciendis repellendus repellat amet rerum.', 'sequi-nihil-reiciendis-repellendus-repellat-amet-rerum', NULL, 'Consequuntur aliquid sed illo et aut et earum. Voluptas dolorem sed vero est et sed. Temporibus laborum quia ducimus et iste. Autem deleniti laboriosam optio ut est ipsa. Quis ea tempore tempore et ipsum voluptatem. Earum distinctio at a tenetur quo nemo. Nemo assumenda quas molestias eius a magnam.', '<p>Quo ut consequatur dolore quisquam. Quia consectetur voluptates eaque amet hic repudiandae. Eos cum nihil accusantium. Ad reprehenderit beatae et tempore vero.</p><p>Vitae nihil dolorem minima iusto et voluptate. Eum dolorem odit dolore sunt itaque. Harum doloribus eveniet aut ipsam voluptate.</p><p>Repellendus molestias incidunt ipsam aut fuga. Rerum sit minima possimus quo dignissimos. Tempora incidunt recusandae ut asperiores quod dolor.</p><p>Nihil eaque ipsa ea molestiae aut. Ut quidem quia sit voluptatem iure sunt. Sit doloremque deleniti autem excepturi ipsa. Laborum fuga deserunt totam et quod similique. Et aut unde maxime molestiae laborum beatae.</p><p>Facere dignissimos harum occaecati adipisci. Aut asperiores ullam ipsa dolores necessitatibus. Cumque perferendis enim inventore nobis.</p><p>Officia suscipit possimus non inventore. A ut eum est ipsum in. Et nostrum sit error est reprehenderit architecto consectetur.</p><p>Qui qui tempore velit possimus. Eos earum blanditiis corrupti nulla est laborum. Repudiandae laboriosam ipsum natus qui aut.</p><p>Ut laboriosam consequatur est fugit possimus repellat culpa. Non ratione nobis unde repudiandae molestiae non error. Qui vitae ad omnis ad quia officiis quos. Eligendi molestiae enim officiis quia molestiae expedita.</p><p>Blanditiis minus deserunt consequatur eligendi autem unde. Unde dolorem incidunt quam aut incidunt voluptatem nihil deserunt. Ipsam fugiat in cumque repudiandae sequi.</p><p>Ea ab animi atque incidunt. Veritatis minus dolores consequuntur autem soluta ducimus molestiae. Fugiat omnis qui tempore ut fugit fuga ut reiciendis. Asperiores dolorem quo consequuntur.</p><p>Cumque sit adipisci sapiente rerum possimus facilis. Voluptas ut debitis natus vel provident. Nihil quia debitis ratione qui voluptas voluptatum.</p><p>Et enim sint enim sunt. Eum nulla omnis enim est. Natus eos molestiae est nesciunt. Ab quia sint perspiciatis voluptas.</p><p>Et ad aliquid molestiae nulla aut. Sint magnam amet doloribus vel voluptatem dolorum inventore harum. Sint distinctio eligendi iure. Dicta tenetur velit animi quaerat dicta quia voluptatem ut.</p>', NULL, '2024-06-09 03:14:40', '2024-06-09 03:14:40'),
(11, 3, 4, 'Alias et quasi commodi recusandae laboriosam.', 'alias-et-quasi-commodi-recusandae-laboriosam', NULL, 'Sed consequatur a nostrum quod officiis error et. Nostrum aut provident quos voluptas officiis. Porro et ea sit culpa qui. Omnis vero labore dolor porro nobis maxime.', '<p>Eligendi dolore omnis aut sunt nostrum recusandae reiciendis. Eligendi esse quis est et.</p><p>Et voluptas quisquam enim. Quo in quia exercitationem et. Consequatur expedita voluptatem ex nesciunt nihil eum iure.</p><p>Sunt quod aliquam nemo accusamus a fuga. Impedit tempore ea et. Dolor est et iste ut repellendus. Dolor voluptatem eius molestias sunt velit qui.</p><p>Sit quisquam odit doloremque illo recusandae asperiores inventore. Beatae numquam ea sed ducimus dignissimos eos quia occaecati. Saepe repellat quia nulla. Iure sed sunt neque excepturi aperiam deserunt illum natus.</p><p>Dolorem quam quia nemo non. Maxime provident eveniet quod sunt ipsa voluptatem odio. Sit architecto odio ipsa odio nisi. Tempora et delectus quo sed dolorem nemo necessitatibus.</p><p>Animi iure maxime incidunt veritatis quia consequatur. Dolorem magnam voluptates suscipit quisquam quia eos aliquam. Omnis qui et culpa beatae. Inventore quia vel vero ducimus et. Laudantium possimus et ut ipsum blanditiis ad ut.</p><p>Aliquam blanditiis autem non et quidem atque. Alias sed quia maiores quo tempore. Aut in in ullam et quisquam. Molestiae nostrum autem veniam enim. Iusto est nemo assumenda.</p><p>Eos esse dolor fugiat qui aut tempore. Porro dolores dolores quia voluptate mollitia delectus. Magni ad dolorem corporis quasi.</p><p>Modi ullam enim aperiam explicabo sequi incidunt in. Quia tempora sint nesciunt nemo deserunt. Eius aut animi nihil quos nulla alias.</p><p>Et ut commodi ex eligendi libero nam fugiat necessitatibus. Quia cupiditate perferendis culpa magni tempore esse consequatur sit. Optio esse itaque vel magni ab cum.</p><p>Sed consectetur et ex quia consequatur neque. Doloremque qui officia eos quasi ullam.</p><p>Earum facilis in dignissimos architecto magni occaecati vero. Soluta sint dolore sint velit voluptas blanditiis molestiae. Exercitationem voluptatem ut suscipit facere numquam commodi repudiandae.</p><p>Reiciendis veritatis fuga est aut quia optio labore. Sapiente animi aut sed debitis ea voluptatem. Est sint sed cum sit cumque praesentium voluptas.</p><p>Soluta quam expedita molestiae provident quia. Voluptas aperiam excepturi in harum aut sapiente facilis. Autem earum nisi est et. Tenetur in est commodi non dolor sit eveniet. Labore vero nesciunt placeat aspernatur.</p><p>Voluptas qui quod dolor aliquam. Ratione dolorem necessitatibus laudantium rerum. Pariatur nam a sunt rerum.</p><p>Consequatur minus qui in cumque qui velit. Ipsam maxime voluptatum sit magnam reprehenderit. Sequi nostrum iusto distinctio dolorum. Aut aspernatur quasi iste doloremque et.</p><p>Qui quisquam optio ea nobis. Occaecati est vitae nulla asperiores et distinctio. Neque rem eveniet autem vel saepe quam et. Veritatis harum totam et.</p><p>Atque voluptatem fuga minima nihil repellat. Aliquid doloremque accusamus possimus dicta quia. Et nulla nemo nam sit nisi et nostrum.</p>', NULL, '2024-06-09 03:14:40', '2024-06-09 03:14:40'),
(12, 3, 3, 'Nisi id libero facilis architecto autem.', 'nisi-id-libero-facilis-architecto-autem', NULL, 'Autem voluptatem voluptatem velit officia. Ullam sit aspernatur sed et occaecati et cumque. Repellendus ipsam ut nemo. Deleniti ullam id ipsa aut aut ut. Perferendis sit ut voluptas consequatur optio maxime optio adipisci.', '<p>Ipsam magnam sed molestias illum ratione. Cumque sunt asperiores vitae. Qui eaque hic quia. Dignissimos eum tempore enim molestiae.</p><p>Et est dolorum atque nostrum. Mollitia iure natus earum est. Quidem aut veritatis et sit odit porro blanditiis. Veritatis laboriosam aut id dolorum maiores est.</p><p>Ullam consectetur autem minus quos. Quasi sint ut molestiae vel. Illum quia harum sunt voluptas.</p><p>Ut rerum temporibus quibusdam rerum. Quae saepe deserunt voluptatem corrupti fugiat. Sit amet odit tenetur ipsa. Dolorum praesentium voluptas aut consequatur voluptas ut.</p><p>Sit rerum quaerat optio ab dolorem illum ut. Maiores nihil incidunt totam dolor. Qui qui mollitia et iste quidem architecto. Quis doloribus minima assumenda occaecati aut. Sunt qui natus molestiae numquam natus voluptatum iste voluptatem.</p><p>Tempore consectetur fuga sed. Deserunt voluptate qui aperiam perferendis cumque. Officia est quia velit nam.</p><p>Non velit voluptatibus laudantium. Esse ipsa ut omnis molestias in possimus.</p><p>Hic odit vel praesentium sunt sequi. Eum minus consequuntur qui nisi soluta illo similique. Ut aut aperiam quia dolore aliquid. Voluptatem non est dolore quisquam minus.</p><p>Culpa eaque qui dolor aut. Nobis voluptatum et quis quam suscipit ipsam.</p><p>Animi qui quae quo. Sequi quis voluptatem consequatur nobis non nostrum. Sit rem possimus officia laboriosam libero voluptas.</p>', NULL, '2024-06-09 03:14:40', '2024-06-09 03:14:40'),
(13, 3, 4, 'Exercitationem debitis et soluta quo.', 'exercitationem-debitis-et-soluta-quo', NULL, 'Sit molestias saepe ratione debitis omnis et nihil. Atque voluptate esse laborum earum quod expedita. Cum eaque facilis dolorum ipsam explicabo dolorem beatae. Inventore illum et eligendi blanditiis culpa iste et neque. Tempore totam ut aut omnis corporis excepturi laudantium. Sapiente aliquam numquam ut corrupti delectus laboriosam. Aut culpa esse reprehenderit cumque et et.', '<p>Nostrum neque adipisci quibusdam vero qui. Corrupti debitis amet repellat a. Sint est unde eligendi voluptas minima eius voluptas.</p><p>Omnis voluptates distinctio sit aut sit unde ipsa. Molestias fugit id cupiditate et velit. Vel deleniti non atque hic. Aut praesentium at incidunt et laboriosam modi perferendis sed. Omnis quam voluptate soluta qui.</p><p>Ad rerum expedita et consequatur est et. Et nostrum quod veniam qui sequi consectetur. Illum quia voluptatem nisi.</p><p>Voluptatem incidunt esse molestiae sapiente eligendi. Itaque harum reprehenderit quibusdam.</p><p>Quibusdam sapiente fuga inventore non. Nesciunt qui veniam omnis dolor ut ullam sunt. Rem dolor tenetur cum. Magni possimus debitis porro id nihil odit velit.</p><p>Consequuntur voluptas non esse est. Voluptatem enim modi consequatur hic autem qui. Omnis asperiores odio minus iste. Eos numquam et unde placeat est officia voluptatibus.</p><p>Molestias qui culpa quis rerum dolorum soluta molestias quia. Magni unde aperiam dicta facere quia. Et qui consequatur sed a repudiandae aperiam.</p><p>Repellat animi itaque praesentium quisquam. Deleniti dolore blanditiis porro ut magni ab maiores. Fugiat ad eligendi architecto esse dolor sed neque dolor. Autem minima earum qui quisquam.</p><p>Aut non praesentium laborum debitis ad eos. Est nostrum eos et dicta iure quod. Illum veniam debitis sed ea neque voluptatem. Minima doloremque quae corrupti ut nam numquam ut.</p><p>Non illum nostrum sit. Aut non numquam pariatur ut similique. Ea aut corporis debitis vero distinctio sed magni. Aliquam eum repudiandae quia eligendi consequuntur.</p><p>Dicta et nam deleniti dolorum ullam rerum eius. Itaque quo nisi ut et enim. Praesentium occaecati molestias ipsa impedit. Beatae doloribus iure qui sit expedita unde dignissimos.</p><p>Qui enim odio necessitatibus. Perspiciatis voluptatibus suscipit quia quam. Molestiae exercitationem tempora odit incidunt. Assumenda est est officia ut voluptatem eum iusto aut.</p><p>Assumenda ad et nihil iste vel adipisci architecto. Autem et ut ut quasi.</p><p>Perferendis mollitia fuga est dolore ea sit debitis. Reiciendis aut aut occaecati dolor tempore. Quibusdam magnam blanditiis dicta est in. Nulla enim et animi aliquid.</p><p>Voluptas est velit et ipsa cum iure qui accusamus. Culpa enim quia est omnis nemo. Quo quis velit aliquam sed aliquid asperiores voluptatem illo.</p><p>Ab distinctio omnis sed dicta quidem voluptatem. Quidem id similique optio recusandae aut aliquid. Laboriosam velit molestias velit nihil. Debitis delectus voluptas natus nihil voluptas aut sint.</p>', NULL, '2024-06-09 03:14:40', '2024-06-09 03:14:40'),
(14, 3, 1, 'Ut praesentium quia.', 'ut-praesentium-quia', NULL, 'Asperiores iusto perferendis sapiente architecto ea debitis quis. Ducimus ipsa cumque ut porro. Eum consectetur veritatis accusamus veniam non facilis reiciendis maxime. Sint accusamus qui quia neque. Enim magni eos aliquid consectetur soluta. Sed cum maxime porro molestiae voluptatum eum dolores fugiat.', '<p>Voluptatem nostrum qui qui eum quo quo nesciunt. Rem enim magni aut aut assumenda. Odit qui rem omnis aspernatur consequatur aut minima voluptatem. Est voluptatibus aliquid a. Quo sunt exercitationem sint doloremque.</p><p>Laborum nihil rerum distinctio aperiam. Soluta necessitatibus incidunt et ratione ea occaecati id. Dolorem rerum necessitatibus earum laboriosam consectetur.</p><p>Reprehenderit cumque id nobis. Ipsum earum consequatur perferendis consequatur. Sunt perferendis libero nemo id doloremque. Aut voluptatibus iste tempora vel.</p><p>Numquam quidem quia sed sapiente aut illo. Itaque et reiciendis quidem totam et dicta quia. Rerum provident similique nemo vero. Perspiciatis quia similique ut voluptatem.</p><p>Ut eligendi dolorem saepe cumque est earum labore. Quia sed consequatur nihil aut.</p><p>Consequatur similique labore quis voluptatem delectus voluptas exercitationem. Nihil magnam quia ea molestias.</p><p>Sint facilis sint dolorem ratione quibusdam repudiandae molestiae iste. Quos necessitatibus tempora molestiae. Quia molestias ut veniam officia.</p><p>Quas in accusamus dolorem sunt perferendis dolorem laboriosam pariatur. Explicabo amet architecto hic at fugit dolorem omnis. Sint libero ex ut dolores ipsam iste.</p><p>Dolores facilis minima distinctio ullam cupiditate molestiae facere. Cumque repudiandae rerum tenetur nisi. Qui omnis possimus est aspernatur. Ut omnis et perspiciatis vel iusto rem eveniet.</p><p>Aspernatur nihil eius aliquid sunt blanditiis est enim. Voluptas corporis nisi facilis. Et esse hic ea dolores non quo. Earum rem quo quod et id fuga.</p><p>Quia neque iste sint voluptas molestiae nulla occaecati. Commodi dolore doloribus ratione adipisci temporibus alias quis. Omnis qui quia sit voluptatem.</p><p>Repellat consequatur labore ab sed soluta officiis ex. Quasi nisi ut aut perspiciatis. Id est deserunt impedit commodi exercitationem. Dolores dignissimos ratione facilis fugiat ipsum.</p>', NULL, '2024-06-09 03:14:40', '2024-06-09 03:14:40'),
(15, 2, 4, 'Quia blanditiis placeat maxime.', 'quia-blanditiis-placeat-maxime', NULL, 'Magnam repellat porro modi. Officia qui aperiam corrupti modi voluptas iure. Expedita qui quis quia et nobis labore eveniet. Doloribus dolorem qui asperiores. Aut quia aut aperiam libero nesciunt. Ut suscipit aut eos maxime.', '<p>Neque maiores est quo illo reiciendis officia. Voluptatem sequi eius similique minus minus beatae. Qui vel quis corrupti voluptate reprehenderit magni. Voluptates dolorem et consequuntur laboriosam quidem porro.</p><p>Ut deleniti explicabo consequatur nulla culpa. Quis quae et ab doloremque culpa in. Vero deleniti iusto nisi vel quod. Id quidem ut dicta maxime quibusdam consectetur totam.</p><p>Repellat veniam quo architecto omnis et id suscipit. Aut voluptatum qui praesentium.</p><p>Perferendis commodi qui vel et recusandae modi ipsam. Asperiores excepturi adipisci in est qui consectetur. Quis qui dolores ut odit maxime quis non. Modi officiis a reiciendis illum eos officia impedit.</p><p>Nihil ducimus et ullam sed. Dolor optio rerum et accusamus et provident iusto. Odit veritatis perferendis dolorum velit. Similique alias unde laboriosam minima expedita. Dolorum sint itaque repellat et error esse.</p><p>Vel omnis quo dolores distinctio porro excepturi. Libero dolorem hic ut ipsam voluptas similique assumenda amet. Consequatur alias libero sed omnis sit sed mollitia vitae.</p><p>Corporis sint omnis odit sunt. Autem modi sapiente eos accusamus in rem. Qui et vero est enim magnam soluta. Nam fugiat id perferendis aspernatur aspernatur commodi. Qui et alias odio.</p><p>Aut ipsa qui non quo eius qui. Quo rerum dolore eum. Sapiente non ipsum consequatur dicta.</p><p>Aspernatur omnis inventore soluta fuga qui necessitatibus. Sed nulla impedit velit voluptatem consequatur aliquid ipsa qui. Blanditiis nihil iusto odit laborum.</p><p>Eum enim eos error aut quod qui. Nostrum esse sapiente aspernatur et et ea laboriosam quaerat. Ipsum eos omnis autem hic asperiores. Reprehenderit nostrum est sequi mollitia quia rerum.</p><p>Laudantium consectetur totam laboriosam dolores accusamus. Tempora nesciunt ex inventore odit quis. Alias adipisci mollitia distinctio. Ut necessitatibus rem qui veritatis libero.</p><p>Non velit et cupiditate assumenda. Fugiat totam enim dolorum inventore necessitatibus sunt. Ratione illum dolorem sapiente esse harum culpa. Consequatur eligendi aperiam quia.</p><p>Consequatur deleniti numquam et laborum maiores. Sequi repudiandae doloribus sunt itaque et provident est et. Blanditiis optio nihil aspernatur consequatur quisquam dolorum totam. Nihil accusamus est est odio asperiores laborum id.</p><p>Neque et qui omnis. Aut consequuntur molestiae officiis magnam dolore dignissimos dicta corrupti. Non dolorem fuga nemo et. Architecto rerum non voluptatem aliquam sed iste sequi.</p><p>Rerum delectus blanditiis voluptatem voluptas quia neque ducimus non. Tenetur soluta est delectus tenetur.</p><p>Consequatur officiis expedita iusto. Ab impedit et quam omnis. Adipisci consectetur id omnis aut ut. Officia ducimus assumenda et.</p><p>Et et ducimus qui. Deleniti et magnam corporis perferendis illo pariatur. Vero voluptate enim et repellat dolorem adipisci. Assumenda voluptate id nostrum eum. Quod nobis ut officia.</p><p>Debitis libero dicta excepturi eos unde fugiat fugiat. A porro aut non aut ad. Soluta culpa iste iste optio corrupti in.</p><p>Aperiam aut voluptate et ut repudiandae. Minima qui quidem temporibus in. Vero perspiciatis veritatis impedit ea quia.</p><p>Tempora esse vero tempora perferendis et. Reprehenderit iure perferendis assumenda voluptatibus cum eveniet recusandae. Porro dolor fuga in eos accusamus velit voluptatibus id.</p>', NULL, '2024-06-09 03:14:40', '2024-06-09 03:14:40'),
(16, 4, 3, 'Expedita maiores enim.', 'expedita-maiores-enim', NULL, 'Sed voluptatem et deserunt sit voluptatem velit omnis. Dolorum est non quam laboriosam rerum. Sunt a voluptates et. Et ea illum fuga dolores dolorum mollitia blanditiis nihil.', '<p>Veritatis error possimus non tempore totam quod. Perferendis eius sed quis dolorum et aut architecto. Fugiat culpa perferendis modi quaerat itaque omnis eveniet. Nostrum voluptatem omnis veniam quaerat omnis rerum ullam.</p><p>Tempora doloremque possimus quia qui et eligendi. Aliquid beatae tempore quia autem ut illum repellat. Ad ullam optio nam eum excepturi dolorum dicta doloremque.</p><p>Aut aperiam et officia alias hic sequi consequatur quam. Possimus quibusdam impedit magnam at ipsam amet porro. Qui qui officiis accusamus quia sit facere. Explicabo doloribus quos dolor amet odio est.</p><p>Sed voluptas minima adipisci est. Magni est placeat necessitatibus sit placeat. Perspiciatis cumque quo laboriosam quisquam.</p><p>Ipsa delectus adipisci repellat distinctio minima voluptate dolor. Praesentium itaque omnis harum et. Eos quaerat eligendi vero sit magni.</p><p>Hic ut at et magni quidem provident. Sit temporibus provident quaerat. Numquam magnam distinctio quae a incidunt. Doloremque laudantium dolorem harum asperiores omnis qui nihil.</p><p>Voluptatem repellat fugit reiciendis placeat qui molestias. Esse aut eaque illum ut. Culpa enim numquam voluptas excepturi voluptatum animi sint. Omnis consequatur id eligendi voluptatum beatae. Fuga quam sunt praesentium aut et et.</p><p>Itaque qui similique libero voluptatem aut quia. Sunt beatae dolorum animi aperiam quam ut. Inventore deserunt consequatur ut dolorem consequatur et autem. Vitae vel earum unde dolorem nihil doloribus officiis.</p><p>Expedita provident sit sit. Tenetur totam earum doloribus. Eos iste dolores iure aut laudantium a. Corporis voluptatem enim doloremque eum voluptatibus et.</p><p>Possimus est praesentium ut quod quo. Ut dolores sit molestiae deleniti non molestias rem. Sed a modi fuga non. Rerum similique omnis fuga cumque.</p><p>Pariatur modi eligendi et ad omnis nostrum. Sed quis eveniet corporis quis cumque eos nulla velit. Minus consequatur deleniti et occaecati excepturi soluta amet. Commodi omnis sed non voluptas dolorem.</p><p>Velit ut delectus voluptatem. Ut dolor debitis dolores deleniti ipsum voluptatem. Eum dolore dolor quaerat omnis placeat.</p><p>Sapiente quia rerum deserunt facere molestiae ut. Nihil repellat culpa alias aliquam. Ipsam illo quae vel. Fuga sint quasi mollitia eius.</p><p>Aliquid dignissimos fuga minus incidunt vitae consequatur ut. Iure dolor incidunt nam non.</p><p>Quos et velit in consequatur odit. Sit deleniti atque fugit mollitia omnis. Quam eius vel doloribus velit voluptas dolorem. Et earum ipsum non fugiat numquam aspernatur ut incidunt.</p><p>Aut saepe enim harum consequatur voluptatem quibusdam non. Nihil nesciunt ex at aut amet. Dolorem assumenda sunt facere occaecati facilis. Rerum quibusdam pariatur aut.</p><p>Omnis et tempore sit est cumque nihil. Error ut non iusto aut. Beatae ut accusamus eligendi vel in et molestiae.</p><p>Molestiae occaecati id iusto esse non deserunt animi. Qui quae quo ab culpa.</p><p>Voluptatem qui eveniet quis deserunt sed minima. Vel ullam aut harum. Necessitatibus reprehenderit asperiores sint eius maiores quis repellat. Aut consectetur voluptates sint aut. Necessitatibus accusantium distinctio voluptatibus laboriosam.</p><p>Sed a qui dolor aut. Eaque incidunt ut aut nisi. Aut et repellendus sint nihil velit enim. Nam voluptates eligendi aperiam.</p>', NULL, '2024-06-09 03:14:40', '2024-06-09 03:14:40'),
(17, 2, 3, 'Aperiam molestiae impedit quae ex velit ipsam.', 'aperiam-molestiae-impedit-quae-ex-velit-ipsam', NULL, 'Quidem modi repudiandae ipsa. Aut qui eveniet quas assumenda fuga voluptatem quia. Totam nostrum sed enim. Voluptatem omnis hic eos. Corporis dolorum temporibus labore doloribus possimus illum. Id assumenda magnam sint eligendi aut sit. Maiores voluptate consequatur et.', '<p>At odit quia vitae tempora omnis. Expedita vel perferendis ipsam quia et odit sit. Mollitia est quos neque. Error aliquam vel cumque unde qui voluptatem.</p><p>Quia velit cumque dolorum dicta ut qui optio. Id possimus incidunt eligendi placeat fugit. Non hic quaerat quis sunt eum et quam.</p><p>Et adipisci deleniti voluptatem eum. Sed aliquid quis a reprehenderit placeat. Quia ut inventore harum blanditiis sit.</p><p>Harum labore exercitationem quia beatae doloribus. Voluptas consectetur reprehenderit rerum debitis quia. Dignissimos facere non dolor voluptatem.</p><p>Temporibus modi voluptatum aspernatur ducimus. Est qui reiciendis dolorem. Velit optio explicabo consequuntur distinctio eum. Minus quia esse odit deserunt.</p><p>Aut aut illum sit voluptatum est voluptatem quaerat. Sunt porro enim eos ea nam qui adipisci officia. Facilis similique in fugiat expedita commodi id.</p><p>Tenetur sed sequi sed qui minima quia. Ducimus debitis dolorem soluta quisquam commodi quam. Culpa qui porro esse ut nihil ea similique.</p><p>Consequatur distinctio ipsa sed sunt ducimus. Doloremque repellat ab commodi esse perspiciatis ut. Velit quos asperiores nam reiciendis ea fuga. Similique blanditiis pariatur nihil inventore omnis explicabo.</p><p>Aut laborum porro cum sit est cupiditate eum. Sit dignissimos aperiam facere ad animi labore voluptas quis. Totam consequatur libero animi eligendi velit eos ut.</p><p>Ratione delectus eaque sit aliquam. Quidem qui labore est neque vitae voluptatem id. At architecto consectetur ex id voluptatum esse. Accusantium nemo mollitia minima. Et eos in non non vero minus temporibus voluptates.</p><p>Quia sed architecto incidunt sit saepe qui assumenda. Tempora distinctio dolorem ratione natus ullam ex quis. Rem molestiae nam voluptatem et non temporibus nemo ratione. Aut debitis possimus qui sunt repellendus sit. Nihil molestiae necessitatibus eveniet quod eum natus ut.</p><p>Quasi voluptatem omnis minima in maxime aliquam. Sed id sed in qui quibusdam in. Sed fuga sit autem similique molestiae. Non doloremque tempora placeat unde aut fuga.</p><p>Adipisci voluptatem nemo magni voluptas. Distinctio ipsa sint sit rerum. Tempore consequatur tenetur quam fugit tempora inventore numquam.</p><p>Optio itaque odit aperiam. Unde quos accusamus et voluptatibus. Quae consequatur odit nam accusantium consequuntur.</p><p>Ex dolor nesciunt exercitationem. Sapiente a est quae non veniam corrupti quo. Error ut quaerat fugiat culpa nam veritatis et. Omnis rerum quidem excepturi voluptas vero ea dolorem ullam.</p><p>Eligendi consequuntur in quam sequi placeat occaecati fuga. Ipsa sed et nam labore. Laborum praesentium temporibus amet et provident inventore occaecati. Numquam dolorem suscipit ab et non in inventore quibusdam.</p><p>Cumque dolorem et ad cumque. Harum numquam eos omnis est. Labore reiciendis in ipsum nulla repudiandae.</p><p>Qui nobis animi saepe aut odit iusto voluptatibus. Error quas nobis assumenda dolor voluptates neque asperiores ea. Sit maxime provident sit deleniti.</p>', NULL, '2024-06-09 03:14:40', '2024-06-09 03:14:40');
INSERT INTO `artikels` (`id`, `category_id`, `user_id`, `judul`, `slug`, `image`, `excerpt`, `artikelPost`, `publish_at`, `created_at`, `updated_at`) VALUES
(18, 4, 4, 'Et at iusto.', 'et-at-iusto', NULL, 'Est eum necessitatibus animi voluptatem nihil consequuntur reiciendis harum. Aliquid quia adipisci explicabo perspiciatis. Ad inventore dolorum officia odit nobis exercitationem reprehenderit. Laborum et nihil fugiat vel. Rem nisi enim est ut qui. Porro reiciendis quaerat nobis sequi exercitationem quaerat eum non. Labore totam laborum et. Quos corporis doloremque ut animi quo.', '<p>Vel provident debitis adipisci quo est debitis. Dolor eum voluptas sit delectus aut dolor quidem. Molestiae a doloribus cupiditate at. Tempora esse ut fugiat deserunt.</p><p>Omnis aspernatur officiis quos dolores. Aut dolorem id ratione quidem. Asperiores nihil ut voluptate eveniet.</p><p>Sed architecto omnis occaecati cupiditate vero. Aut non iure repudiandae non magnam expedita molestias. Cum fugiat quas qui consectetur. Modi ea nisi quaerat ea veritatis iure qui.</p><p>Quisquam nobis mollitia modi temporibus saepe et. Quia ut reprehenderit quos rerum maiores.</p><p>Animi perferendis quae nostrum perferendis dolor et illum. Eum est voluptates tempore tempora. Rerum natus dolores rerum ipsam voluptatem odio.</p><p>Suscipit eveniet nam minima quae. Incidunt voluptatem itaque doloribus. Ab est eligendi animi et error veritatis. Dignissimos vel voluptatibus id esse officia.</p><p>Commodi eum maxime laborum eius aperiam. Sit in quo qui explicabo. Natus a pariatur aperiam quo temporibus. Illo hic reiciendis placeat magni deleniti.</p><p>Ipsam aut dolorum blanditiis porro eveniet porro culpa non. Ad ipsam ea et pariatur dignissimos. Tenetur atque voluptatem rerum ut qui voluptate assumenda. Accusamus modi voluptas nihil sed.</p><p>Ut autem qui nisi cumque odio tenetur reprehenderit harum. Ullam neque eveniet cupiditate neque vitae.</p><p>Aut adipisci numquam qui quo. Quo itaque voluptatem veritatis molestiae. Distinctio mollitia est voluptatem error. Ut earum doloremque aut illo. Vero cumque culpa eum illo dolor.</p><p>Praesentium autem aut quia ab corporis minima quo. Qui quaerat id impedit voluptatem distinctio. Dolores qui dolorem quisquam voluptatem eius. Ipsum molestiae ut eveniet eius atque excepturi alias.</p><p>Quia rerum rerum placeat nihil quisquam aliquam a. Voluptates perferendis at autem rerum saepe odit harum aut.</p><p>Aliquid dolorem nihil molestiae dolor asperiores. Numquam hic exercitationem dicta qui. Rerum dolor hic placeat deleniti. Praesentium eligendi reprehenderit est voluptatem.</p><p>Officia voluptas qui sequi illo suscipit unde neque et. Perspiciatis tempora soluta non tempore laborum.</p><p>Maiores debitis eius eum culpa. Doloremque ullam quas exercitationem ut blanditiis. Aut sapiente porro et sed iure. Ipsa deleniti doloremque aut facilis mollitia.</p><p>Suscipit fugiat beatae odit voluptatem aut. Minima in quia dolor vero esse fugit cumque dolores.</p><p>Est aut fuga dolores eos ducimus. Ut quasi quia explicabo consequuntur facere eos. Esse corrupti quasi ut eaque. Odit dolores occaecati beatae eveniet enim consequatur. Est hic totam quia et.</p><p>Ut sit doloribus itaque dolorum voluptas et exercitationem. Tenetur explicabo eos et qui dolor. Amet assumenda aut in quibusdam sit ea magni quasi. Quis ut laborum omnis deserunt.</p>', NULL, '2024-06-09 03:14:40', '2024-06-09 03:14:40'),
(19, 3, 3, 'Possimus debitis reiciendis consectetur aperiam.', 'possimus-debitis-reiciendis-consectetur-aperiam', NULL, 'Omnis dignissimos deleniti facilis. Voluptatem omnis porro ut. Unde animi ab dolores vel perspiciatis. Veritatis totam dolor fugiat eum vel molestias. Qui error qui vitae. Distinctio hic nihil quisquam nulla earum unde.', '<p>Eum debitis laborum delectus vero. Eos vel sit porro exercitationem molestiae eos ut. Ut vel tempora in blanditiis eaque.</p><p>Iure consequatur quidem recusandae dignissimos. Laborum eaque expedita distinctio repellat culpa tempora. Minima at placeat ea ut voluptate quo asperiores est. Totam sit odit ea aut.</p><p>Quia rerum velit pariatur consectetur ullam et libero. Rerum est et et. Dolores sint omnis maxime et non odit est. Enim aut rerum vel tenetur qui quibusdam porro.</p><p>Nostrum sit dignissimos adipisci maxime excepturi quasi. Laboriosam aliquid officiis sapiente dolores. Illum est magnam repudiandae beatae omnis minus. Tenetur doloribus voluptas facere beatae soluta.</p><p>Voluptatum ut debitis excepturi. Dolor non explicabo veritatis et voluptatibus. Officia vel laborum animi vel. Ex est in commodi adipisci.</p><p>Est necessitatibus voluptatem et architecto nam qui cumque. Reiciendis odit itaque dicta vitae ad. Nihil mollitia autem nihil quod. Cupiditate aliquam cumque adipisci voluptatum nesciunt. Id autem tempora cum at natus.</p><p>Commodi dolorem velit aspernatur commodi ea sit exercitationem. Quia animi dolorem et distinctio et nulla. Vel sed nulla sequi suscipit. Neque dolores et qui amet corrupti ut eos qui.</p><p>Dignissimos enim et qui dolorem voluptatum ab sint enim. Neque sunt est unde voluptas iusto ut modi. Nesciunt non ut dolorem ratione maiores architecto ut.</p><p>Praesentium temporibus quia labore numquam pariatur. Et delectus eos voluptates. Sunt vel mollitia quaerat itaque quis amet ex.</p><p>Vero adipisci quo illum ut. Odio sunt est repellendus totam recusandae veritatis non. In porro recusandae porro eos accusantium fugiat. Ipsam maiores eum laudantium cupiditate ducimus eligendi. Quia provident ipsam incidunt voluptatem corrupti.</p><p>Vitae non totam ut rem. Itaque exercitationem sed amet quas ex. Sed velit earum ipsam nulla molestiae excepturi fuga.</p><p>Assumenda et velit nulla numquam. Soluta aut sed expedita. Excepturi veritatis dignissimos magni quia et quasi.</p><p>Dolores adipisci et ut aut labore. Rerum voluptatum totam necessitatibus est nisi doloremque rerum. Odit repellat quia cumque voluptatem repellendus modi. Corporis rem iure soluta ducimus voluptas.</p><p>Natus qui occaecati inventore inventore saepe ratione. Omnis nihil voluptas voluptate quod nobis. Ut debitis nemo animi id dolor quaerat aut. Dolorum expedita pariatur quisquam perferendis dolore ut laudantium.</p>', NULL, '2024-06-09 03:14:40', '2024-06-09 03:14:40'),
(20, 1, 2, 'Quasi enim.', 'quasi-enim', NULL, 'Ut quasi vero excepturi ad consequatur voluptatum perspiciatis. Magnam temporibus quos sit magnam voluptate. Vitae architecto dignissimos laudantium explicabo eveniet aut. Commodi minus sed eos eum labore repellendus soluta. Similique sed dolorem nobis eum explicabo.', '<p>Delectus et ea consequatur ut illum iure. Dicta non voluptatem ipsam est autem. In fuga vitae blanditiis cupiditate corrupti.</p><p>Dolor impedit nemo amet sed. Eum soluta enim deserunt dignissimos autem aliquam vel. Omnis aliquam non quibusdam rem incidunt.</p><p>Aut similique iste odio deserunt dicta iste delectus. Ipsum itaque odit maxime non. Non ipsam et vel et omnis velit quae. Nostrum voluptatum iure ut. Commodi aut asperiores doloremque quis debitis qui.</p><p>Molestiae officiis fuga adipisci non et qui officiis. Quos quo dolorem laudantium molestias dolorum fugit. Et dolores et eos quod voluptates vitae. Quisquam tempore suscipit provident accusantium quos neque dolores. Sed ratione adipisci quia et.</p><p>Qui debitis praesentium doloribus mollitia aut. Dolor nemo et nam eaque vel et. Ut aut qui tempore aut enim expedita laboriosam dolor. Expedita rerum voluptate consequatur aperiam enim et.</p><p>Pariatur neque vel officiis in omnis. Deserunt est ea nihil est error in sit. Rerum sed cum officiis officia alias qui. Delectus suscipit nulla ut voluptatem est laborum asperiores dolore.</p><p>Deserunt eos molestiae voluptatibus vel. Deserunt laboriosam ipsam accusamus repellat dolores asperiores dolor. Placeat voluptas sint officia quidem.</p><p>Nisi voluptatem enim ut est magnam molestiae saepe. Et accusantium ipsum dolor magnam. Voluptatem molestiae voluptatum sint voluptate.</p><p>Recusandae maxime aliquid unde beatae ea vitae rerum. Et alias sint qui id perferendis ut odio occaecati. Dolores repudiandae officiis iure incidunt sed. Enim asperiores velit et autem. Sed voluptatibus numquam blanditiis dignissimos est et perferendis tempore.</p><p>Voluptatibus iusto error quisquam eum deserunt pariatur neque nihil. Animi eaque nihil et in itaque nihil. Omnis quisquam voluptates non quia deleniti. Optio dolorem odio qui repellat.</p><p>Possimus explicabo praesentium maxime animi ut. Molestias culpa voluptatem ex quam aperiam ratione maiores. Ut ut molestias nihil voluptas consequatur perferendis quidem.</p><p>Quae impedit animi illum officiis minus. Tenetur alias eveniet ipsa veritatis voluptas.</p><p>Magni sit molestiae vel exercitationem rerum magni. Tenetur itaque corporis ullam officiis voluptas culpa aperiam. Vel commodi hic tenetur est quia odit id. Tempore pariatur vero pariatur quas totam.</p><p>Aspernatur nihil quod temporibus at qui. Ex sapiente recusandae facilis iure est hic iure incidunt. Nulla velit quam quis assumenda aut odit nesciunt.</p>', NULL, '2024-06-09 03:14:40', '2024-06-09 03:14:40');

-- --------------------------------------------------------

--
-- Table structure for table `cash_notes`
--

CREATE TABLE `cash_notes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `harga_satuan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cash_notes`
--

INSERT INTO `cash_notes` (`id`, `user_id`, `nama_barang`, `jumlah_barang`, `harga_satuan`, `created_at`, `updated_at`) VALUES
(1, 1, 'pulpen', 10, 2000, '2024-06-09 05:47:34', '2024-06-09 05:47:34'),
(10, 1, 'Aqua', 1, 30000, '2024-06-09 07:06:39', '2024-06-09 07:06:39'),
(11, 1, 'Buku', 2, 3000, '2024-06-09 07:07:13', '2024-06-09 07:07:13'),
(12, 1, 'Teh', 3, 3000, '2024-06-09 07:07:13', '2024-06-09 07:07:13'),
(13, 1, 'Tali', 30, 1000, '2024-06-09 07:32:02', '2024-06-09 07:32:02'),
(14, 1, 'Mie Goreng', 4, 3500, '2024-06-09 08:20:10', '2024-06-09 08:20:10'),
(18, 1, 'pulpen', 2, 2000, '2024-06-09 22:22:02', '2024-06-09 22:22:02');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `nama`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Tutorial', 'tutorial', '2024-06-09 03:14:33', '2024-06-09 03:14:33'),
(2, 'Informasi', 'informasi', '2024-06-09 03:14:33', '2024-06-09 03:14:33'),
(3, 'Personal', 'personal', '2024-06-09 03:14:33', '2024-06-09 03:14:33'),
(4, 'Random', 'random', '2024-06-09 03:14:33', '2024-06-09 03:14:33');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galeris`
--

CREATE TABLE `galeris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategoriGaleri_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeris`
--

INSERT INTO `galeris` (`id`, `kategoriGaleri_id`, `user_id`, `judul`, `img`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 'Nihil totam dolorem quasi omnis sint.', NULL, '2024-06-09 03:14:33', '2024-06-09 03:14:33'),
(2, 1, 2, 'Nulla natus debitis accusantium veritatis maiores.', NULL, '2024-06-09 03:14:33', '2024-06-09 03:14:33'),
(3, 3, 2, 'Ea harum velit voluptatum sit iste odio minus quis.', NULL, '2024-06-09 03:14:33', '2024-06-09 03:14:33'),
(4, 5, 2, 'Nobis tenetur expedita enim vitae unde.', NULL, '2024-06-09 03:14:33', '2024-06-09 03:14:33'),
(5, 4, 1, 'Totam unde officiis aspernatur.', NULL, '2024-06-09 03:14:33', '2024-06-09 03:14:33'),
(6, 1, 2, 'Qui assumenda a doloribus quod sequi voluptates.', NULL, '2024-06-09 03:14:33', '2024-06-09 03:14:33'),
(7, 5, 5, 'Est totam et reiciendis repellat modi quis sequi.', NULL, '2024-06-09 03:14:33', '2024-06-09 03:14:33'),
(8, 2, 1, 'Suscipit veritatis quo quia aspernatur voluptate fugit voluptatem.', NULL, '2024-06-09 03:14:33', '2024-06-09 03:14:33'),
(9, 5, 5, 'Quia voluptatem atque nemo dolor unde quidem et.', NULL, '2024-06-09 03:14:33', '2024-06-09 03:14:33'),
(10, 1, 2, 'Quo dolor consectetur iste vel optio itaque.', NULL, '2024-06-09 03:14:33', '2024-06-09 03:14:33'),
(11, 1, 3, 'Cumque iure pariatur ad.', NULL, '2024-06-09 03:14:33', '2024-06-09 03:14:33'),
(12, 3, 3, 'Maxime odio molestias aut distinctio similique laboriosam.', NULL, '2024-06-09 03:14:33', '2024-06-09 03:14:33'),
(13, 3, 2, 'Quia necessitatibus voluptas est alias fugit consequatur enim.', NULL, '2024-06-09 03:14:34', '2024-06-09 03:14:34'),
(14, 5, 1, 'Facilis ut atque vel sint veniam.', NULL, '2024-06-09 03:14:34', '2024-06-09 03:14:34'),
(15, 2, 5, 'Sunt explicabo aut voluptatem quia quibusdam ut.', NULL, '2024-06-09 03:14:34', '2024-06-09 03:14:34'),
(16, 4, 1, 'Sit quo neque quia.', NULL, '2024-06-09 03:14:34', '2024-06-09 03:14:34'),
(17, 2, 1, 'Eos minima repellendus suscipit dolores.', NULL, '2024-06-09 03:14:34', '2024-06-09 03:14:34'),
(18, 2, 4, 'Quam nihil eligendi nihil recusandae.', NULL, '2024-06-09 03:14:34', '2024-06-09 03:14:34'),
(19, 5, 3, 'Dignissimos esse dolorem veniam eaque aut quo quibusdam beatae.', NULL, '2024-06-09 03:14:34', '2024-06-09 03:14:34'),
(20, 4, 4, 'Aut cumque omnis ratione et laboriosam a.', NULL, '2024-06-09 03:14:34', '2024-06-09 03:14:34');

-- --------------------------------------------------------

--
-- Table structure for table `hiburans`
--

CREATE TABLE `hiburans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hiburan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hiburans`
--

INSERT INTO `hiburans` (`id`, `user_id`, `judul`, `slug`, `hiburan`, `created_at`, `updated_at`) VALUES
(1, 4, 'Seru Banget nih Video', 'Seru-Banget-nih-Video', '4u9K-FJqMuw', '2024-06-09 03:14:39', '2024-06-09 03:14:39'),
(2, 2, 'Game yang Lagi Viral', 'Game-yang-Lagi-Viral', '1r1RIFLAWOQ', '2024-06-09 03:14:39', '2024-06-09 03:14:39'),
(3, 5, 'Serem nih Game nya', 'Serem-nih-Game-nya', '2RjLFFUD8dk', '2024-06-09 03:14:39', '2024-06-09 03:14:39'),
(4, 5, 'Game yang Lagi Viral', 'Game-yang-Lagi-Viral', 'lapMx44bteE', '2024-06-09 03:14:39', '2024-06-09 03:14:39');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_galeris`
--

CREATE TABLE `kategori_galeris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_galeris`
--

INSERT INTO `kategori_galeris` (`id`, `nama`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Kegiatan', 'kegiatan', '2024-06-09 03:14:39', '2024-06-09 03:14:39'),
(2, 'Pemandangan', 'pemandangan', '2024-06-09 03:14:39', '2024-06-09 03:14:39'),
(3, 'Personal', 'personal', '2024-06-09 03:14:39', '2024-06-09 03:14:39'),
(4, 'Ilmu', 'ilmu', '2024-06-09 03:14:39', '2024-06-09 03:14:39'),
(5, 'Random', 'random', '2024-06-09 03:14:39', '2024-06-09 03:14:39');

-- --------------------------------------------------------

--
-- Table structure for table `komentars`
--

CREATE TABLE `komentars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `artikel_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `komentars`
--

INSERT INTO `komentars` (`id`, `artikel_id`, `user_id`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 15, 2, 'Lanjut bang :v', NULL, '2024-06-09 03:14:34', '2024-06-09 03:14:34'),
(2, 16, 2, 'Bisa gitu ya wkwk', NULL, '2024-06-09 03:14:34', '2024-06-09 03:14:34'),
(3, 4, 2, 'Saya suka dengan konten yang Anda bagikan.', NULL, '2024-06-09 03:14:34', '2024-06-09 03:14:34'),
(4, 2, 2, 'Informasinya sangat bermanfaat, terima kasih banyak!', NULL, '2024-06-09 03:14:34', '2024-06-09 03:14:34'),
(5, 17, 1, 'Penulisan Anda sangat jelas dan mudah dipahami.', NULL, '2024-06-09 03:14:34', '2024-06-09 03:14:34'),
(6, 10, 4, 'Sangat informatif, terima kasih!', NULL, '2024-06-09 03:14:34', '2024-06-09 03:14:34'),
(7, 13, 2, 'GG Bro', NULL, '2024-06-09 03:14:34', '2024-06-09 03:14:34'),
(8, 12, 5, 'Penulisan Anda sangat jelas dan mudah dipahami.', NULL, '2024-06-09 03:14:34', '2024-06-09 03:14:34'),
(9, 7, 4, 'Saya suka dengan konten yang Anda bagikan.', NULL, '2024-06-09 03:14:34', '2024-06-09 03:14:34'),
(10, 18, 3, 'Ini Hoax katanya sih', NULL, '2024-06-09 03:14:34', '2024-06-09 03:14:34'),
(11, 3, 4, 'Jelek, Mending ke Artikel saya', NULL, '2024-06-09 03:14:34', '2024-06-09 03:14:34'),
(12, 10, 1, 'Mending bahas gorengan bang 😂', NULL, '2024-06-09 03:14:34', '2024-06-09 03:14:34'),
(13, 6, 3, 'Bukannya ini udah pernah ya?', NULL, '2024-06-09 03:14:34', '2024-06-09 03:14:34'),
(14, 5, 3, 'Bukannya ini udah pernah ya?', NULL, '2024-06-09 03:14:34', '2024-06-09 03:14:34'),
(15, 7, 1, 'Penulisan Anda sangat jelas dan mudah dipahami.', NULL, '2024-06-09 03:14:34', '2024-06-09 03:14:34'),
(16, 6, 5, 'Apakah ada gorengan drama disini? 🤗', NULL, '2024-06-09 03:14:34', '2024-06-09 03:14:34'),
(17, 2, 2, 'Ini Hoax katanya sih', NULL, '2024-06-09 03:14:34', '2024-06-09 03:14:34'),
(18, 12, 4, 'Informasinya sangat bermanfaat, terima kasih banyak!', NULL, '2024-06-09 03:14:34', '2024-06-09 03:14:34'),
(19, 15, 2, 'Ga sabar sama artikel mu lainnya wkwk', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(20, 11, 5, 'Ga sabar sama artikel mu lainnya wkwk', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(21, 11, 2, 'Informasinya sangat bermanfaat, terima kasih banyak!', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(22, 8, 1, 'Saya suka dengan konten yang Anda bagikan.', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(23, 18, 2, 'GG Bro', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(24, 13, 1, 'Buset panjang amat 🤣', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(25, 15, 5, 'Gokil banget nih artikel', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(26, 4, 2, 'Nyimak aja deh 😋', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(27, 15, 2, 'Penulisan Anda sangat jelas dan mudah dipahami.', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(28, 17, 3, 'Artikel ini sangat bagus!', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(29, 3, 3, 'Ga jadi post yang itu bang? 😏', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(30, 2, 1, 'Bisa gitu ya wkwk', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(31, 9, 2, 'Jelek, Mending ke Artikel saya', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(32, 17, 3, 'Mending bahas gorengan bang 😂', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(33, 7, 1, 'Nyimak aja deh 😋', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(34, 20, 1, 'Sangat informatif, terima kasih!', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(35, 1, 2, 'Informasinya sangat bermanfaat, terima kasih banyak!', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(36, 10, 3, 'Sangat informatif, terima kasih!', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(37, 18, 5, 'Jelek, Mending ke Artikel saya', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(38, 2, 2, 'Ga jadi post yang itu bang? 😏', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(39, 2, 3, 'Semoga artikel selanjutnya bahas Coding 🤩', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(40, 20, 3, 'Penulisan Anda sangat jelas dan mudah dipahami.', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(41, 18, 2, 'Apakah ada gorengan drama disini? 🤗', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(42, 18, 4, 'Ga jadi post yang itu bang? 😏', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(43, 7, 3, 'Ini Hoax katanya sih', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(44, 10, 1, 'Informasinya sangat bermanfaat, terima kasih banyak!', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(45, 15, 3, 'Bisa gitu ya wkwk', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(46, 7, 4, 'Informasinya sangat bermanfaat, terima kasih banyak!', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(47, 19, 4, 'GG Bro', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(48, 14, 1, 'Penulisan Anda sangat jelas dan mudah dipahami.', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(49, 6, 5, 'Apakah ada gorengan drama disini? 🤗', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(50, 15, 4, 'Bermanfaat Sob', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(51, 15, 5, 'Buset panjang amat 🤣', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(52, 19, 3, 'Apakah ada gorengan drama disini? 🤗', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(53, 12, 5, 'Saya suka dengan konten yang Anda bagikan.', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(54, 2, 3, 'Artikel ini sangat bagus!', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(55, 17, 1, 'Mending bahas gorengan bang 😂', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(56, 3, 1, 'Bermanfaat Sob', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(57, 3, 5, 'Saya suka dengan konten yang Anda bagikan.', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(58, 15, 3, 'Buset panjang amat 🤣', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(59, 15, 1, 'Topik yang lain dong 😎', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(60, 16, 2, 'Nyimak aja deh 😋', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(61, 9, 1, 'Topik yang lain dong 😎', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(62, 17, 1, 'Jelek, Mending ke Artikel saya', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(63, 3, 1, 'GG Bro', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(64, 7, 4, 'Saya suka dengan konten yang Anda bagikan.', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(65, 11, 3, 'GG Bro', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(66, 7, 5, 'GG Bro', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(67, 6, 3, 'Topik yang lain dong 😎', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(68, 13, 2, 'Mending bahas gorengan bang 😂', NULL, '2024-06-09 03:14:35', '2024-06-09 03:14:35'),
(69, 6, 1, 'Sangat informatif, terima kasih!', NULL, '2024-06-09 03:14:36', '2024-06-09 03:14:36'),
(70, 13, 2, 'Ga jadi post yang itu bang? 😏', NULL, '2024-06-09 03:14:36', '2024-06-09 03:14:36'),
(71, 5, 2, 'Mending bahas gorengan bang 😂', NULL, '2024-06-09 03:14:36', '2024-06-09 03:14:36'),
(72, 1, 5, 'Nyimak aja deh 😋', NULL, '2024-06-09 03:14:36', '2024-06-09 03:14:36'),
(73, 6, 4, 'Apakah ada gorengan drama disini? 🤗', NULL, '2024-06-09 03:14:36', '2024-06-09 03:14:36'),
(74, 4, 5, 'Artikel ini sangat bagus!', NULL, '2024-06-09 03:14:36', '2024-06-09 03:14:36'),
(75, 16, 2, 'Penulisan Anda sangat jelas dan mudah dipahami.', NULL, '2024-06-09 03:14:36', '2024-06-09 03:14:36'),
(76, 9, 1, 'Bisa gitu ya wkwk', NULL, '2024-06-09 03:14:36', '2024-06-09 03:14:36'),
(77, 16, 4, 'Bukannya ini udah pernah ya?', NULL, '2024-06-09 03:14:36', '2024-06-09 03:14:36'),
(78, 5, 4, 'Bisa gitu ya wkwk', NULL, '2024-06-09 03:14:36', '2024-06-09 03:14:36'),
(79, 20, 3, 'Nyimak aja deh 😋', NULL, '2024-06-09 03:14:36', '2024-06-09 03:14:36'),
(80, 4, 2, 'Saya suka dengan konten yang Anda bagikan.', NULL, '2024-06-09 03:14:36', '2024-06-09 03:14:36'),
(81, 14, 5, 'Saya suka dengan konten yang Anda bagikan.', NULL, '2024-06-09 03:14:36', '2024-06-09 03:14:36'),
(82, 18, 5, 'Lanjut bang :v', NULL, '2024-06-09 03:14:36', '2024-06-09 03:14:36'),
(83, 10, 2, 'Mending bahas gorengan bang 😂', NULL, '2024-06-09 03:14:36', '2024-06-09 03:14:36'),
(84, 10, 5, 'Apakah ada gorengan drama disini? 🤗', NULL, '2024-06-09 03:14:36', '2024-06-09 03:14:36'),
(85, 12, 4, 'Apakah ada gorengan drama disini? 🤗', NULL, '2024-06-09 03:14:36', '2024-06-09 03:14:36'),
(86, 15, 5, 'Jelek, Mending ke Artikel saya', NULL, '2024-06-09 03:14:36', '2024-06-09 03:14:36'),
(87, 16, 5, 'Sangat informatif, terima kasih!', NULL, '2024-06-09 03:14:36', '2024-06-09 03:14:36'),
(88, 8, 1, 'Gokil banget nih artikel', NULL, '2024-06-09 03:14:36', '2024-06-09 03:14:36'),
(89, 3, 5, 'Informasinya sangat bermanfaat, terima kasih banyak!', NULL, '2024-06-09 03:14:36', '2024-06-09 03:14:36'),
(90, 10, 5, 'Ga jadi post yang itu bang? 😏', NULL, '2024-06-09 03:14:37', '2024-06-09 03:14:37'),
(91, 19, 2, 'Gokil banget nih artikel', NULL, '2024-06-09 03:14:37', '2024-06-09 03:14:37'),
(92, 10, 2, 'Jelek, Mending ke Artikel saya', NULL, '2024-06-09 03:14:37', '2024-06-09 03:14:37'),
(93, 7, 5, 'Lanjut bang :v', NULL, '2024-06-09 03:14:37', '2024-06-09 03:14:37'),
(94, 12, 4, 'Informasinya sangat bermanfaat, terima kasih banyak!', NULL, '2024-06-09 03:14:37', '2024-06-09 03:14:37'),
(95, 11, 3, 'GG Bro', NULL, '2024-06-09 03:14:37', '2024-06-09 03:14:37'),
(96, 16, 4, 'Mending bahas gorengan bang 😂', NULL, '2024-06-09 03:14:37', '2024-06-09 03:14:37'),
(97, 2, 5, 'Semoga artikel selanjutnya bahas Coding 🤩', NULL, '2024-06-09 03:14:37', '2024-06-09 03:14:37'),
(98, 2, 3, 'Mantap, ditunggu artikel lainnya ya', NULL, '2024-06-09 03:14:37', '2024-06-09 03:14:37'),
(99, 17, 3, 'Saya suka dengan konten yang Anda bagikan.', NULL, '2024-06-09 03:14:37', '2024-06-09 03:14:37'),
(100, 15, 1, 'Bisa gitu ya wkwk', NULL, '2024-06-09 03:14:37', '2024-06-09 03:14:37'),
(101, 8, 3, 'Artikel ini sangat bagus!', NULL, '2024-06-09 03:14:37', '2024-06-09 03:14:37'),
(102, 13, 2, 'Nyimak aja deh 😋', NULL, '2024-06-09 03:14:37', '2024-06-09 03:14:37'),
(103, 17, 4, 'Bisa gitu ya wkwk', NULL, '2024-06-09 03:14:37', '2024-06-09 03:14:37'),
(104, 12, 5, 'Gokil banget nih artikel', NULL, '2024-06-09 03:14:37', '2024-06-09 03:14:37'),
(105, 9, 4, 'Mending bahas gorengan bang 😂', NULL, '2024-06-09 03:14:37', '2024-06-09 03:14:37'),
(106, 4, 1, 'Bermanfaat Sob', NULL, '2024-06-09 03:14:37', '2024-06-09 03:14:37'),
(107, 6, 4, 'Saya suka dengan konten yang Anda bagikan.', NULL, '2024-06-09 03:14:37', '2024-06-09 03:14:37'),
(108, 19, 3, 'Buset panjang amat 🤣', NULL, '2024-06-09 03:14:37', '2024-06-09 03:14:37'),
(109, 6, 4, 'Penulisan Anda sangat jelas dan mudah dipahami.', NULL, '2024-06-09 03:14:37', '2024-06-09 03:14:37'),
(110, 6, 1, 'Ga jadi post yang itu bang? 😏', NULL, '2024-06-09 03:14:37', '2024-06-09 03:14:37'),
(111, 17, 3, 'GG Bro', NULL, '2024-06-09 03:14:37', '2024-06-09 03:14:37'),
(112, 14, 5, 'Gokil banget nih artikel', NULL, '2024-06-09 03:14:37', '2024-06-09 03:14:37'),
(113, 9, 1, 'Topik yang lain dong 😎', NULL, '2024-06-09 03:14:37', '2024-06-09 03:14:37'),
(114, 16, 2, 'Ga jadi post yang itu bang? 😏', NULL, '2024-06-09 03:14:37', '2024-06-09 03:14:37'),
(115, 10, 4, 'Artikel ini sangat bagus!', NULL, '2024-06-09 03:14:37', '2024-06-09 03:14:37'),
(116, 15, 4, 'Sangat informatif, terima kasih!', NULL, '2024-06-09 03:14:37', '2024-06-09 03:14:37'),
(117, 18, 2, 'Bermanfaat Sob', NULL, '2024-06-09 03:14:37', '2024-06-09 03:14:37'),
(118, 2, 1, 'Ini Hoax katanya sih', NULL, '2024-06-09 03:14:37', '2024-06-09 03:14:37'),
(119, 20, 5, 'Buset panjang amat 🤣', NULL, '2024-06-09 03:14:37', '2024-06-09 03:14:37'),
(120, 15, 3, 'Bermanfaat Sob', NULL, '2024-06-09 03:14:37', '2024-06-09 03:14:37'),
(121, 5, 3, 'Semoga artikel selanjutnya bahas Coding 🤩', NULL, '2024-06-09 03:14:37', '2024-06-09 03:14:37'),
(122, 11, 3, 'Buset panjang amat 🤣', NULL, '2024-06-09 03:14:37', '2024-06-09 03:14:37'),
(123, 13, 5, 'Mending bahas gorengan bang 😂', NULL, '2024-06-09 03:14:37', '2024-06-09 03:14:37'),
(124, 4, 1, 'Bisa gitu ya wkwk', NULL, '2024-06-09 03:14:37', '2024-06-09 03:14:37'),
(125, 16, 5, 'Gokil banget nih artikel', NULL, '2024-06-09 03:14:37', '2024-06-09 03:14:37'),
(126, 13, 1, 'Topik yang lain dong 😎', NULL, '2024-06-09 03:14:37', '2024-06-09 03:14:37'),
(127, 8, 1, 'GG Bro', NULL, '2024-06-09 03:14:37', '2024-06-09 03:14:37'),
(128, 8, 1, 'Mending bahas gorengan bang 😂', NULL, '2024-06-09 03:14:37', '2024-06-09 03:14:37'),
(129, 1, 4, 'Informasinya sangat bermanfaat, terima kasih banyak!', NULL, '2024-06-09 03:14:37', '2024-06-09 03:14:37'),
(130, 16, 1, 'Lanjut bang :v', NULL, '2024-06-09 03:14:37', '2024-06-09 03:14:37'),
(131, 14, 5, 'Ini Hoax katanya sih', NULL, '2024-06-09 03:14:37', '2024-06-09 03:14:37'),
(132, 19, 4, 'Ini Hoax katanya sih', NULL, '2024-06-09 03:14:38', '2024-06-09 03:14:38'),
(133, 19, 5, 'Ini Hoax katanya sih', NULL, '2024-06-09 03:14:38', '2024-06-09 03:14:38'),
(134, 8, 5, 'Penulisan Anda sangat jelas dan mudah dipahami.', NULL, '2024-06-09 03:14:38', '2024-06-09 03:14:38'),
(135, 2, 4, 'Penulisan Anda sangat jelas dan mudah dipahami.', NULL, '2024-06-09 03:14:38', '2024-06-09 03:14:38'),
(136, 17, 5, 'Nyimak aja deh 😋', NULL, '2024-06-09 03:14:38', '2024-06-09 03:14:38'),
(137, 8, 2, 'Buset panjang amat 🤣', NULL, '2024-06-09 03:14:38', '2024-06-09 03:14:38'),
(138, 14, 2, 'Penulisan Anda sangat jelas dan mudah dipahami.', NULL, '2024-06-09 03:14:38', '2024-06-09 03:14:38'),
(139, 10, 1, 'Informasinya sangat bermanfaat, terima kasih banyak!', NULL, '2024-06-09 03:14:38', '2024-06-09 03:14:38'),
(140, 3, 4, 'Lanjut bang :v', NULL, '2024-06-09 03:14:38', '2024-06-09 03:14:38'),
(141, 9, 4, 'Ini Hoax katanya sih', NULL, '2024-06-09 03:14:38', '2024-06-09 03:14:38'),
(142, 5, 3, 'Bukannya ini udah pernah ya?', NULL, '2024-06-09 03:14:38', '2024-06-09 03:14:38'),
(143, 4, 4, 'Ini Hoax katanya sih', NULL, '2024-06-09 03:14:38', '2024-06-09 03:14:38'),
(144, 11, 1, 'Semoga artikel selanjutnya bahas Coding 🤩', NULL, '2024-06-09 03:14:38', '2024-06-09 03:14:38'),
(145, 10, 5, 'Mending bahas gorengan bang 😂', NULL, '2024-06-09 03:14:38', '2024-06-09 03:14:38'),
(146, 4, 1, 'Buset panjang amat 🤣', NULL, '2024-06-09 03:14:38', '2024-06-09 03:14:38'),
(147, 17, 5, 'Informasinya sangat bermanfaat, terima kasih banyak!', NULL, '2024-06-09 03:14:38', '2024-06-09 03:14:38'),
(148, 1, 1, 'Lanjut bang :v', NULL, '2024-06-09 03:14:38', '2024-06-09 03:14:38'),
(149, 1, 2, 'GG Bro', NULL, '2024-06-09 03:14:38', '2024-06-09 03:14:38'),
(150, 18, 2, 'Penulisan Anda sangat jelas dan mudah dipahami.', NULL, '2024-06-09 03:14:38', '2024-06-09 03:14:38');

-- --------------------------------------------------------

--
-- Table structure for table `kontens`
--

CREATE TABLE `kontens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengetahuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kontens`
--

INSERT INTO `kontens` (`id`, `user_id`, `judul`, `slug`, `pengetahuan`, `created_at`, `updated_at`) VALUES
(1, 1, 'Jangan Sampe Kelewatan', 'Jangan-Sampe-Kelewatan', 'mseDuZB6RjE', '2024-06-09 03:14:39', '2024-06-09 03:14:39'),
(2, 3, 'Recomended Nih Konten', 'Recomended-Nih-Konten', '_yugUpt3yqk', '2024-06-09 03:14:39', '2024-06-09 03:14:39'),
(3, 4, 'Recomended Nih Konten', 'Recomended-Nih-Konten', 'mseDuZB6RjE', '2024-06-09 03:14:39', '2024-06-09 03:14:39'),
(4, 5, 'Bermanfaat buat Nanti', 'Bermanfaat-buat-Nanti', '_yugUpt3yqk', '2024-06-09 03:14:39', '2024-06-09 03:14:39');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_04_07_031832_create_artikels_table', 1),
(6, '2024_04_17_142603_create_categories_table', 1),
(7, '2024_04_22_024158_create_galeris_table', 1),
(8, '2024_04_22_145759_create_kategori_galeris_table', 1),
(9, '2024_05_14_093833_create_reedems_table', 1),
(10, '2024_05_27_010317_create_komentars_table', 1),
(11, '2024_05_29_123644_create_kontens_table', 1),
(12, '2024_05_29_145704_create_hiburans_table', 1),
(13, '2024_06_09_093053_create_cash_notes_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('habib@habibahmad.my.id', '$2y$12$aT3WOQ5iECVH/g0yZIb2heHDRGmY82XlW03lUI8l/oJJ7WCyebO1y', '2024-06-11 01:04:04');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reedems`
--

CREATE TABLE `reedems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` int(11) NOT NULL,
  `kuota` int(11) NOT NULL DEFAULT 1,
  `status_redeemed` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reedems`
--

INSERT INTO `reedems` (`id`, `user_id`, `code`, `duration`, `kuota`, `status_redeemed`, `created_at`, `updated_at`) VALUES
(1, 2, 'OXV42CVuPJM5', 3600, 31, 0, '2024-06-09 03:14:39', '2024-06-09 03:14:39'),
(2, 1, 'CDLPERGtDxt0', 3600, 31, 0, '2024-06-09 03:14:39', '2024-06-09 03:14:39'),
(3, 4, 'fxg0HhKuv8eQ', 3600, 30, 0, '2024-06-09 03:14:39', '2024-06-09 03:14:39'),
(4, 3, 'QVPP5Av5VGL7', 3600, 42, 0, '2024-06-09 03:14:39', '2024-06-09 03:14:39'),
(5, 2, 'ovawNAAoerS9', 3600, 40, 0, '2024-06-09 03:14:39', '2024-06-09 03:14:39'),
(6, 3, 'VINgb9tlmQaQ', 3600, 29, 0, '2024-06-09 03:14:39', '2024-06-09 03:14:39'),
(7, 1, 'f8HioXk77m4j', 3600, 24, 0, '2024-06-09 03:14:39', '2024-06-09 03:14:39'),
(8, 4, 'kcUpBHgd7Tvc', 3600, 13, 0, '2024-06-09 03:14:39', '2024-06-09 03:14:39'),
(9, 1, 'oeEzMB47uN12', 3600, 17, 0, '2024-06-09 03:14:39', '2024-06-09 03:14:39'),
(10, 5, 'uiMNouSbGwRY', 3600, 34, 0, '2024-06-09 03:14:39', '2024-06-09 03:14:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Member',
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noHp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_active` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `google_id`, `name`, `role`, `username`, `image`, `email`, `noHp`, `email_verified_at`, `password`, `last_active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '1231723', 'Habib Ahmad', 'Super Admin', 'habib', 'user-image/xg9bVbi5mWNH4XNcaTwNBMgmMY2cUnQftvwgL5ll.jpg', 'habib@habibahmad.my.id', '089529907437', NULL, '$2y$12$zpCNtguHWkCcWuUuS1dgYuohqMhy3S5V97o0xLQPXcCz2upydFM.O', '2024-06-11 00:58:44', 'Z3C3lHuy60uBAHXqs5ZvJxNXHWeodqzlfu7eb0TZi4Y4ZsmZan9B2S9mzw9l', '2024-06-09 03:14:32', '2024-06-11 00:58:44'),
(2, '34884558', 'Rendy Melani', 'Admin', 'Rendy_859', NULL, 'rendy.melani@gmail.com', '085253934409', '2024-06-09 03:14:33', '$2y$12$6MT3gtj2WhhGF6wrmQBN1uRcshkNM7VC2.a0I2kUS3VbPrqdCz4/O', '2024-06-09 07:28:24', 'lL3TNkxD9Qzb6jgIvXp8v5exmqjDzvKEi9TCoZmOZI6FwTqcMbcqZlgNOXJU', '2024-06-09 03:14:33', '2024-06-09 22:43:04'),
(3, '44103970', 'Gading Dabukke', 'Member', 'Gading_446', NULL, 'gading.dabukke@gmail.com', '083414545007', '2024-06-09 03:14:33', '$2y$12$6MT3gtj2WhhGF6wrmQBN1uRcshkNM7VC2.a0I2kUS3VbPrqdCz4/O', NULL, 'D7Rkud8A4x', '2024-06-09 03:14:33', '2024-06-09 03:14:33'),
(4, '87386797', 'Uda Puspita', 'Member', 'Uda_555', NULL, 'uda.puspita@gmail.com', '082820594042', '2024-06-09 03:14:33', '$2y$12$6MT3gtj2WhhGF6wrmQBN1uRcshkNM7VC2.a0I2kUS3VbPrqdCz4/O', NULL, 'uTcKnrBQ7m', '2024-06-09 03:14:33', '2024-06-09 03:14:33'),
(5, '74693341', 'Harjo Sitorus', 'Member', 'Harjo_880', NULL, 'harjo.sitorus@gmail.com', '080220040357', '2024-06-09 03:14:33', '$2y$12$6MT3gtj2WhhGF6wrmQBN1uRcshkNM7VC2.a0I2kUS3VbPrqdCz4/O', NULL, 'cOxx8U81pr', '2024-06-09 03:14:33', '2024-06-09 03:14:33'),
(6, '65174804', 'Cakrawala Pudjiastuti', 'Member', 'Cakrawala_195', NULL, 'cakrawala.pudjiastuti@gmail.com', '088721650641', '2024-06-09 03:14:33', '$2y$12$6MT3gtj2WhhGF6wrmQBN1uRcshkNM7VC2.a0I2kUS3VbPrqdCz4/O', NULL, 'Yjk88pdXZu', '2024-06-09 03:14:33', '2024-06-09 03:14:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `artikels_slug_unique` (`slug`);

--
-- Indexes for table `cash_notes`
--
ALTER TABLE `cash_notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_nama_unique` (`nama`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galeris`
--
ALTER TABLE `galeris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hiburans`
--
ALTER TABLE `hiburans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_galeris`
--
ALTER TABLE `kategori_galeris`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kategori_galeris_nama_unique` (`nama`),
  ADD UNIQUE KEY `kategori_galeris_slug_unique` (`slug`);

--
-- Indexes for table `komentars`
--
ALTER TABLE `komentars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontens`
--
ALTER TABLE `kontens`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reedems`
--
ALTER TABLE `reedems`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reedems_code_unique` (`code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `cash_notes`
--
ALTER TABLE `cash_notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeris`
--
ALTER TABLE `galeris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `hiburans`
--
ALTER TABLE `hiburans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori_galeris`
--
ALTER TABLE `kategori_galeris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `komentars`
--
ALTER TABLE `komentars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `kontens`
--
ALTER TABLE `kontens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reedems`
--
ALTER TABLE `reedems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
