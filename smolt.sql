-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Сен 25 2021 г., 15:49
-- Версия сервера: 5.7.33-36
-- Версия PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `co35941_smolt`
--

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `films`
--

CREATE TABLE IF NOT EXISTS `films` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_cdn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `films`
--

INSERT INTO `films` (`id`, `title`, `description`, `duration`, `video_cdn`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Город Эмбер: Побег', '<p>Уже несколько поколений люди живут в подземном городе, освещаемом только фонарями. Создатели города рассчитывали, что жители смогут выйти на поверхность через 200 лет, и оставили инструкции запечатанные во временной капсуле. Капсула хранилась и передавалась от одного мэра города к следующему. Однако по стечению обстоятельств эта цепочка прервалась, и шкатулка с инструкциями была утеряна.</p>', '1 Hr 35min', '//95.svetacdn.in/ua8D69cegy6l/movie/812', 'files/gorod-ember.jpg', '2021-09-06 20:21:06', '2021-09-18 12:22:30'),
(7, 'Выжившие', '<p>История постапокалиптического мира, в котором осталось совсем немного людей, сумевших выжить после падения цивилизации. Все они заражены странным вирусом, который поражает участок мозга, отвечающий за сон. Только вмешательство извне вытаскивает людей из сна, который через несколько часов переходит в смерть. Казалось бы, общая беда должна объединить всех оставшихся в живых, но люди больше не доверяют друг другу. Вооруженные банды рыщут в поисках бензина и еды, а стаи одичавших собак представляют не меньшую опасность.</p>', '48min', '//95.svetacdn.in/ua8D69cegy6l/tv-series/11169', 'files/vyzhivshie.jpg', '2021-09-11 21:46:36', '2021-09-18 12:21:50'),
(8, 'Пищеблок', '<p>Пока вся страна следит за Олимпиадой-80, в пионерском лагере &laquo;Буревестник&raquo; на Волге происходят странные события. Дети загадочно исчезают по ночам, а потом возвращаются &mdash; но совсем не такими, как прежде. Увлеченные летней свободой и друг другом вожатые не замечают, как в их отрядах оживают страшные пионерские легенды, а руководство лагеря делает вид, что все в порядке. Разбираться в тайнах &laquo;Буревестника&raquo; придется мальчику Валерке и вожатому Игорю. Для начала им предстоит понять, остался ли в лагере хоть кто-то, кому можно доверять.</p>', '50min', '//95.svetacdn.in/ua8D69cegy6l/tv-series/10669', 'files/pischeblok.jpg', '2021-09-11 22:03:02', '2021-09-18 12:20:56'),
(9, '100 тысяч минут вместе', '<p>История о супругах, которые после 7 лет брака оказываются на 69 дней запертыми на карантине в собственном доме. Он &mdash; успешный пилот, она &mdash; уверенная в себе фитнес-тренер. Смогут ли эти два лидера пройти все испытания самоизоляцией?</p>', '24min', '//95.svetacdn.in/ua8D69cegy6l/tv-series/9867', 'files/auhs.jpg', '2021-09-11 22:05:44', '2021-09-18 12:19:53'),
(10, 'Папик', '<p>Главным героем истории стал всеми забытый пожилой актёр, единственный &laquo;капитал&raquo; которого &mdash; долги за квартиру и сбережения на похороны. Устав от унылой жизни, дед хочет расстаться с ней красиво, поэтому перед смертью заглядывает в барбершоп. Заполучив стильную причёску и бороду хипстера, пенсионер едет в ночной клуб, где знакомится с эффектной девушкой. Охотница на &laquo;папиков&raquo; принимает его за миллионера и решает охмурить.</p>', '30min', '//95.svetacdn.in/ua8D69cegy6l/tv-series/6008', 'files/papik.jpeg', '2021-09-11 22:07:14', '2021-09-12 07:49:27'),
(11, 'Отпуск', '<p>Геленджик. Семья северян в одиннадцатый раз приезжает отдыхать в гестхаус к семье южан. Саша - старший сын северян, хочет сделать предложение Люсе - дочери южан, с которой он дружит с детства. Но Саша еще не знает, что у нее есть парень. Сашина мама Лариса, устав от выходок непутевого мужа Севы, решает развестись. У Севы есть время до конца отпуска, чтобы сохранить брак. В отличие от них, южане только начали свои отношения. Боря - небогатый, но очень хитрый хозяин гестхауса недавно начал жить с красоткой Мадиной. Но ее всеми силами пытается вернуть бывший - богатейший человек города Таймураз. Это история двух семей, в каждой из которых люди борются за любовь.</p>', '26min', '//95.svetacdn.in/ua8D69cegy6l/tv-series/9822', 'files/otpusk.jpg', '2021-09-11 22:11:16', '2021-09-18 12:17:12'),
(12, 'Маньячелло', '<p>Деревенский маньяк Тимофей из деревни Сосновка очень любит классическую литературу. Настолько, что свои убийства инсценирует по мотивам произведений Булгакова, Достоевского, Шекспира и других книжных классиков, но местные полицейские не могут этого понять. Лучом света в тёмном царстве становится для Тимофея следователь Ольга, которая приезжает в Сосновку из города и сразу замечает литературную подоплёку преступлений. Но начальство не желает слушать её догадки.</p>', '25min', '//95.svetacdn.in/ua8D69cegy6l/tv-series/11183', 'files/manyachello.jpg', '2021-09-11 22:13:10', '2021-09-18 12:16:02'),
(13, 'Уцелевшие', '<p>Уже несколько поколений люди живут в подземном городе, освещаемом только фонарями. Создатели города рассчитывали, что жители смогут выйти на поверхность через 200 лет, и оставили инструкции запечатанные во временной капсуле. Капсула хранилась и передавалась от одного мэра города к следующему. Однако по стечению обстоятельств эта цепочка прервалась, и шкатулка с инструкциями была утеряна.</p>', '50min', '//95.svetacdn.in/ua8D69cegy6l/tv-series/11004', 'files/ucelevshie.jpg', '2021-09-11 22:14:47', '2021-09-18 12:14:59'),
(14, 'Эпидемия', '<p>Новый неизвестный вирус превращает Москву в город мёртвых. Электричества нет, деньги потеряли свою ценность, те, кто ещё не заражён, отчаянно сражаются за еду и бензин. Сергей, его любимая и её сын-аутист живут за городом, где пока ещё безопасно. Но он не может бросить в беде бывшую жену с сыном, хоть она и ненавидит его. Сергей едет в Москву и чудом вывозит из умирающей столицы женщину и ребёнка. В пути к ним присоединяются также отец героя и довольно наглые соседи. Люди, которые в другой ситуации никогда не оказались бы под одной крышей, вынуждены забыть прежние обиды и отправиться в полное смертельных опасностей путешествие в Карелию, к уединенному охотничьему домику, расположенному на необитаемом острове посреди озера.</p>', '48min', '//95.svetacdn.in/ua8D69cegy6l/tv-series/5750', 'files/epidemiya.jpg', '2021-09-11 22:18:21', '2021-09-18 12:07:54'),
(15, 'Полёт', '<p>Сотрудники московской строительной компании собираются лететь в Пермь, но в зале вылета они понимают, что перепутали аэропорт. Чуть позже коллеги узнают, что самолет рейса, на который они опоздали, разбился сразу после взлета. Пережитый стресс и близость смерти заставляют героев задуматься о жизни, переосмыслить ее и попытаться понять, кто они и чего хотят на самом деле.</p>', '48min', '//95.svetacdn.in/ua8D69cegy6l/tv-series/9789', 'files/polet.jpeg', '2021-09-12 08:00:57', '2021-09-12 08:00:57'),
(16, 'Засланец из космоса', '<p>Доктор Гарри Вендершпигль &mdash; отшельник в небольшом городке в Колорадо. Ещё он &mdash; пришелец, который на самом деле упал на Землю и занял тело врача. Когда же доктора убивают, пришелец вынужден отложить миссию по возвращению домой и занять место убитого. Живя в новом теле, он постепенно начинает задаваться вопросами, стоят люди спасения или нет.</p>', '46min', '//95.svetacdn.in/ua8D69cegy6l/tv-series/9807', 'files/zaslanets.jpg', '2021-09-12 08:02:23', '2021-09-18 12:13:33'),
(17, 'Новенький', '<p>В провинциальном городке ЧП &mdash; пропал 16-летний подросток, над которым издевались в школе. Его исчезновение становится спусковым крючком и раскрывает тайны не только его одноклассников, но и всего города.</p>', '49min', '//95.svetacdn.in/ua8D69cegy6l/tv-series/8991', 'files/novenkiyu.jpeg', '2021-09-12 08:04:53', '2021-09-12 08:04:53'),
(18, 'Пропавшая', '<p>Обычный день состоятельной семьи Гарбер заканчивается ошеломляющим событием: в их галерее появляется дочь Лена, бесследно пропавшая десять лет назад. Она не помнит, где была все эти годы и как сумела вернуться. Уже потерявшая надежду Катерина Гарбер сразу признает в ней дочь, в то время как ее супруг не спешит верить в чудо. Возвращение Лены не приносит семье счастья, а, наоборот, делает ее жизнь невыносимой, отбрасывая Гарберов в те моменты прошлого, о которых они предпочли бы не вспоминать.</p>', '27min', '//95.svetacdn.in/ua8D69cegy6l/tv-series/11309', 'files/propavshaya.jpeg', '2021-09-12 08:11:27', '2021-09-12 08:11:27'),
(20, 'Проект «Анна Николаевна»', '<p>Отечественные учёные создали андроида-полицейского. Идеальная во всех отношениях капитан Анна Николаевна Королькевич отправляется служить в провинциальный город, чтобы увидеть реальную жизнь и стать похожей на человека. Коллеги думают, что Анна Николаевна &mdash; дочь замминистра, и ничто не предвещает беды, пока очеловечивание не заходит слишком далеко.</p>', '51min', '//8209.svetacdn.in/ua8D69cegy6l/tv-series/7038', 'files/proektAN.jpeg', '2021-09-18 13:50:08', '2021-09-18 13:50:08'),
(22, 'Половое воспитание', '<p>Cтеснительный и необщительный подросток-девственник Отис живёт с мамой, которая работает секс-терапевтом. Объединившись с одноклассницей Мэйв, Отис проводит сеансы терапии для своих сверстников, чтобы помочь им разобраться с неловкими и запутанными ситуациями.</p>', '45min', '//8209.svetacdn.in/ua8D69cegy6l/tv-series/3864', 'files/sex-education.jpg', '2021-09-18 14:37:22', '2021-09-24 10:35:29'),
(23, 'Лунные приключения (2021)', '<p>Пока взрослые только мечтают покорять космос, дети уже во всю странствуют среди звезд! Юная девочка и ее старший брат отправляются в невероятное путешествие в другие миры. Оказавшись в стране, спрятанной в облаках, они знакомятся с чудесными обитателями волшебного замка и великолепной королевой Луны. По ее поручению дети отправляются еще дальше &mdash; на далекие планеты и в чужие миры. Герои забрались так далеко, но как им вернуться домой? Возможно, только лунная дорожка, указывающая направление к самому желанному в жизни любого человека, укажет им путь.</p>', '1 H 25min', '//8209.svetacdn.in/ua8D69cegy6l/movie/53173', 'files/lunnye-priklyucheniya.jpg', '2021-09-18 18:46:17', '2021-09-18 18:46:17'),
(24, 'Яжотец', '<p>Увлекательный сериал &laquo;Яжотец&raquo; показывает историю мужчины среднего возраста, в жизни которого наступил поистине один из сложных периодов. В последний период времени он окончательно перестал находить общий язык со своей благоверной, следствием чего и стала развязка чрезмерно сложного и долгого бракоразводного процесса. Все это сказалось на главном герое самым негативным образом и, наряду с этим, повлияло на его мировоззрение. Теперь, когда эти ужасные дни уже позади, он стал более циничным и, в то же время, практичным человеком. В один из обычных дней мужчина начинает серьезно задумываться о том, что он может принести немалую пользу обществу. И именно с этой целью спустя короткий период времени он заводит собственный блог, в котором начинает делиться своим жизненным опытом с молодым поколением, в большей степени именно с молодыми парнями. Он пытается донести до всех, что мир представляется не таким уж и прекрасным и беспечным, как это показывают многочисленные блогеры&hellip;</p>', '25min', '//8209.svetacdn.in/ua8D69cegy6l/tv-series/11385', 'files/yazhotec-2021.jpg', '2021-09-22 17:38:31', '2021-09-22 17:38:31');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_09_06_200213_create_films_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `model_has_permissions`
--

CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `model_has_roles`
--

CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(2, 'App\\Models\\User', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'user', 'web', '2021-09-11 19:30:18', '2021-09-11 19:30:18'),
(2, 'admin', 'web', '2021-09-11 20:36:31', '2021-09-11 20:36:31');

-- --------------------------------------------------------

--
-- Структура таблицы `role_has_permissions`
--

CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Денис', 'kotickpro@gmail.com', NULL, '$2y$10$F82JMtvCghoslwC2Rl42WeqR/TbpDPex6Skc6tUBEWJLVRngLePUS', NULL, NULL, NULL, '2021-09-11 19:35:34', '2021-09-11 19:35:34');

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
