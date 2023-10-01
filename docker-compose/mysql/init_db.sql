
CREATE TABLE `affectation_personnel_departements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iddepartement` bigint(20) UNSIGNED NOT NULL,
  `idpersonnel` bigint(20) UNSIGNED NOT NULL,
  `idagence` bigint(20) UNSIGNED NOT NULL,
  `affectation` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_affectation` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `affectation_personnel_departements`
--

INSERT INTO `affectation_personnel_departements` (`id`, `iddepartement`, `idpersonnel`, `idagence`, `affectation`, `is_affectation`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 1, '2023-09-07 21:55:54', 1, '2023-09-07 19:52:26', '2023-09-07 19:55:41');

-- --------------------------------------------------------

--
-- Structure de la table `affectation__taches`
--

CREATE TABLE `affectation__taches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `agences`
--

CREATE TABLE `agences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code_agence` varchar(255) DEFAULT NULL,
  `lib_agence` varchar(255) DEFAULT NULL,
  `adresse_agence` varchar(255) DEFAULT NULL,
  `tel_agence` varchar(255) DEFAULT NULL,
  `designation_agence` text DEFAULT NULL,
  `is_agence` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `agences`
--

INSERT INTO `agences` (`id`, `code_agence`, `lib_agence`, `adresse_agence`, `tel_agence`, `designation_agence`, `is_agence`, `created_at`, `updated_at`) VALUES
(1, 'UT001', 'Ultranet Print', 'Agence Entrée Stade municipale Bamedzi', '0987654321', 'MAJ', 0, '2023-09-04 22:07:32', '2023-09-07 08:28:04'),
(2, 'UT002', 'Ultranet Media', 'Agence Stade Bamedzi II', '12345678987654', NULL, 1, '2023-09-04 22:13:05', '2023-09-05 16:44:29');

-- --------------------------------------------------------

--
-- Structure de la table `agences_services`
--

CREATE TABLE `agences_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idagence` bigint(20) UNSIGNED NOT NULL,
  `iddepartement` bigint(20) UNSIGNED NOT NULL,
  `is_agencesservices` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code_categorie` varchar(255) DEFAULT NULL,
  `lib_categorie` varchar(255) DEFAULT NULL,
  `designation_categorie` varchar(255) DEFAULT NULL,
  `is_categorie` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `code_categorie`, `lib_categorie`, `designation_categorie`, `is_categorie`, `created_at`, `updated_at`) VALUES
(1, 'UN_CP001', 'Bache', 'RAS', 1, '2023-09-15 00:22:11', '2023-09-15 00:22:11'),
(2, 'UN_CP002', 'Decoupe', 'RAS', 1, '2023-09-15 00:22:11', '2023-09-15 00:22:11'),
(3, 'UN_CP003', 'DTF', 'RAS', 1, '2023-09-15 00:22:11', '2023-09-15 00:22:11'),
(4, 'UN_CP004', 'Flex', 'RAS', 1, '2023-09-15 00:22:11', '2023-09-15 00:22:11'),
(5, 'UN_CP005', 'Macarons', 'RAS', 1, '2023-09-15 00:22:11', '2023-09-15 00:22:11'),
(6, 'UN_CP006', 'Microperforé', 'RAS', 1, '2023-09-15 00:22:11', '2023-09-15 00:22:11'),
(7, 'UN_CP007', 'Roll up', 'RAS', 1, '2023-09-15 00:22:11', '2023-09-15 00:22:11'),
(8, 'UN_CP008', 'Syntisol', 'RAS', 1, '2023-09-15 00:22:11', '2023-09-15 00:22:11'),
(9, 'UN_CP009', 'Transfert Numerique', 'RAS', 1, '2023-09-15 00:22:11', '2023-09-15 00:22:11'),
(10, 'UN_CP010', 'Vinyle', 'RAS', 1, '2023-09-15 00:22:11', '2023-09-15 00:22:11');

-- --------------------------------------------------------

--
-- Structure de la table `categories_produits`
--

CREATE TABLE `categories_produits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_categories` bigint(20) UNSIGNED NOT NULL,
  `id_produit` bigint(20) UNSIGNED NOT NULL,
  `ref_produit` varchar(255) DEFAULT NULL,
  `valeur_min` double(8,2) NOT NULL DEFAULT 0.00,
  `valeur_max` double(8,2) NOT NULL DEFAULT 0.00,
  `is_sale` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories_produits`
--

INSERT INTO `categories_produits` (`id`, `id_categories`, `id_produit`, `ref_produit`, `valeur_min`, `valeur_max`, `is_sale`, `created_at`, `updated_at`) VALUES
(2, 10, 18, NULL, 2000.00, 2000.00, 1, '2023-09-20 02:01:46', '2023-09-20 02:01:46'),
(3, 10, 17, NULL, 2000.00, 2000.00, 1, '2023-09-20 02:02:17', '2023-09-20 02:02:17'),
(5, 7, 13, NULL, 13500.00, 13500.00, 1, '2023-09-20 02:02:40', '2023-09-20 02:02:40'),
(6, 7, 12, NULL, 12500.00, 12500.00, 1, '2023-09-20 02:02:43', '2023-09-20 02:02:43'),
(7, 6, 11, NULL, 6000.00, 6000.00, 1, '2023-09-20 02:02:46', '2023-09-20 02:02:46'),
(8, 4, 9, NULL, 6000.00, 6000.00, 1, '2023-09-20 02:02:49', '2023-09-20 02:02:49'),
(9, 5, 10, NULL, 250.00, 250.00, 1, '2023-09-20 02:02:51', '2023-09-20 02:02:51'),
(10, 8, 14, NULL, 4500.00, 4500.00, 1, '2023-09-20 02:02:54', '2023-09-20 02:02:54'),
(11, 3, 7, NULL, 3000.00, 3000.00, 1, '2023-09-20 02:02:56', '2023-09-20 02:02:56'),
(12, 2, 6, NULL, 500.00, 500.00, 1, '2023-09-20 02:02:59', '2023-09-20 02:02:59'),
(13, 4, 8, NULL, 4500.00, 4500.00, 1, '2023-09-20 02:03:02', '2023-09-20 02:03:02'),
(14, 1, 5, NULL, 3200.00, 3200.00, 1, '2023-09-20 02:03:04', '2023-09-20 02:03:04'),
(15, 1, 4, NULL, 1200.00, 1500.00, 1, '2023-09-20 02:03:06', '2023-09-20 02:03:06'),
(16, 1, 3, NULL, 2000.00, 2000.00, 1, '2023-09-20 02:03:09', '2023-09-20 02:03:09'),
(17, 9, 15, NULL, 5000.00, 5000.00, 1, '2023-09-20 02:03:11', '2023-09-20 02:03:11'),
(18, 1, 2, NULL, 2000.00, 2000.00, 1, '2023-09-20 02:03:13', '2023-09-20 02:03:13'),
(19, 1, 1, NULL, 1500.00, 1500.00, 1, '2023-09-20 02:33:37', '2023-09-20 02:33:37'),
(24, 10, 16, NULL, 2000.00, 2000.00, 1, '2023-09-21 09:04:42', '2023-09-21 09:04:42');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code_client` varchar(255) DEFAULT NULL,
  `name_client` varchar(255) DEFAULT NULL,
  `surname_client` varchar(255) DEFAULT NULL,
  `datenaissance_client` date DEFAULT NULL,
  `lieunaissance_client` varchar(255) DEFAULT NULL,
  `genre_client` varchar(255) DEFAULT NULL,
  `description_client` text DEFAULT NULL,
  `ref_client` varchar(255) DEFAULT NULL,
  `photo_client` varchar(255) DEFAULT NULL,
  `is_soustraitant` int(11) NOT NULL DEFAULT 0,
  `is_client` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `code_client`, `name_client`, `surname_client`, `datenaissance_client`, `lieunaissance_client`, `genre_client`, `description_client`, `ref_client`, `photo_client`, `is_soustraitant`, `is_client`, `created_at`, `updated_at`) VALUES
(1, 'ULTRANET-23SS09', 'NZONGAN', 'Gaetan', '2000-12-23', 'Bafoussam', 'M', 'gaetan@gmail.com/123456789', NULL, NULL, 1, 1, '2023-09-06 22:17:13', '2023-09-06 22:34:41'),
(2, 'ULTRANET-23SS09:22', 'Kongne', 'Erick', '2000-09-10', 'Bafoussam', 'M', 'erickkongne@gmail.com/', NULL, NULL, 1, 1, '2023-09-22 13:55:28', '2023-09-22 13:55:28'),
(3, 'ULTRANET-23SS09:22', 'Leroy', 'Daniel', '1995-01-12', 'Douala', 'F', 'danielleroy@gmail.com/+237691359390', NULL, NULL, 1, 1, '2023-09-22 13:56:33', '2023-09-22 13:56:33');

-- --------------------------------------------------------

--
-- Structure de la table `comptes_clients`
--

CREATE TABLE `comptes_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `delegation_taches`
--

CREATE TABLE `delegation_taches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idtaches` bigint(20) UNSIGNED NOT NULL,
  `idaffecation` bigint(20) UNSIGNED NOT NULL,
  `delegation` date NOT NULL,
  `status_taches` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `departements`
--

CREATE TABLE `departements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code_departement` varchar(255) DEFAULT NULL,
  `lib_departement` varchar(255) DEFAULT NULL,
  `designation_departement` varchar(255) DEFAULT NULL,
  `is_departement` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `departements`
--

INSERT INTO `departements` (`id`, `code_departement`, `lib_departement`, `designation_departement`, `is_departement`, `created_at`, `updated_at`) VALUES
(1, 'UI001', 'Service Imprimerie', 'RAS', 1, '2023-09-05 19:42:56', '2023-09-05 19:46:43'),
(2, 'UI002', 'Service bureautique', 'RAS', 1, '2023-09-05 19:43:24', '2023-09-05 19:46:41');

-- --------------------------------------------------------

--
-- Structure de la table `devis`
--

CREATE TABLE `devis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `factures`
--

CREATE TABLE `factures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `magasins`
--

CREATE TABLE `magasins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code_magasin` varchar(255) DEFAULT NULL,
  `lib_magasin` varchar(255) DEFAULT NULL,
  `designation_magasin` text DEFAULT NULL,
  `is_magasin` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `magasins`
--

INSERT INTO `magasins` (`id`, `code_magasin`, `lib_magasin`, `designation_magasin`, `is_magasin`, `created_at`, `updated_at`) VALUES
(1, 'UM001', 'Magasin Stade Bamendzi-Bafoussam', 'RAS', 1, '2023-09-04 23:56:13', '2023-09-05 16:45:18'),
(2, 'UM002', 'Magasin Village-Douala II', 'Douala-Village', 1, '2023-09-04 23:56:26', '2023-09-05 16:45:14');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(37, '2014_10_12_000000_create_users_table', 1),
(38, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(39, '2019_08_19_000000_create_failed_jobs_table', 1),
(40, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(42, '2023_08_23_205255_create_permission_tables', 1),
(43, '2023_09_04_224121_create_agences_table', 1),
(44, '2023_09_04_224404_create_magasins_table', 1),
(45, '2023_09_04_224504_create_clients_table', 1),
(47, '2023_09_04_225508_create_devis_table', 1),
(48, '2023_09_04_225520_create_factures_table', 1),
(52, '2023_09_04_225843_create_comptes_clients_table', 1),
(54, '2023_09_04_230148_create_affectation__taches_table', 1),
(55, '2023_09_04_230039_create_categories_table', 2),
(57, '2023_09_04_225546_create_categories_produits_table', 4),
(58, '2023_09_04_225529_create_taches_table', 5),
(60, '2023_09_05_211548_create_departements_table', 6),
(61, '2023_09_04_225225_create_personnels_table', 7),
(63, '2023_09_06_195455_create_delegation_taches_table', 9),
(64, '2023_09_06_213456_create_agences_services_table', 10),
(65, '2023_08_22_200932_create_module_table', 11),
(66, '2023_09_07_005037_create_modules_table', 12),
(69, '2023_09_06_173231_create_affectation_personnel_departements_table', 13),
(71, '2023_09_04_225553_create_produits_table', 14);

-- --------------------------------------------------------

--
-- Structure de la table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

CREATE TABLE `module` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `is_enable` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `module`
--

INSERT INTO `module` (`id`, `name`, `class`, `icon`, `is_enable`, `created_at`, `updated_at`) VALUES
(1, 'Devis', 'text-bg-primary', 'bi bi-list-columns', 1, '2023-09-07 00:41:14', '2023-09-07 00:41:14'),
(2, 'Transactions', 'text-bg-danger', 'bi bi-cash-stack', 1, '2023-09-07 00:41:14', '2023-09-07 00:41:14'),
(3, 'Taches', 'text-bg-success', 'bi bi-tags', 1, '2023-09-07 00:41:14', '2023-09-07 00:41:14'),
(4, 'Magasins', 'text-bg-info', 'bi bi-boxes', 1, '2023-09-07 00:41:14', '2023-09-07 00:41:14'),
(5, 'Fournisseurs', 'text-bg-warning', 'bi bi-truck', 1, '2023-09-07 00:41:14', '2023-09-07 00:41:14'),
(6, 'Settings', 'text-bg-danger ', 'bi bi-house-gear-fill', 1, '2023-09-07 00:41:14', '2023-09-07 00:41:14');

-- --------------------------------------------------------

--
-- Structure de la table `modules`
--

CREATE TABLE `modules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `is_enable` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `modules`
--

INSERT INTO `modules` (`id`, `name`, `class`, `icon`, `is_enable`, `created_at`, `updated_at`) VALUES
(1, 'Devis', 'text-bg-primary', 'bi bi-list-columns', 1, '2023-09-06 22:41:14', '2023-09-06 22:41:14'),
(2, 'Transactions', 'text-bg-danger', 'bi bi-cash-stack', 1, '2023-09-06 22:41:14', '2023-09-06 22:41:14'),
(3, 'Taches', 'text-bg-success', 'bi bi-tags', 1, '2023-09-06 22:41:14', '2023-09-06 22:41:14'),
(4, 'Magasins', 'text-bg-info', 'bi bi-boxes', 1, '2023-09-06 22:41:14', '2023-09-06 22:41:14'),
(5, 'Fournisseurs', 'text-bg-warning', 'bi bi-truck', 1, '2023-09-06 22:41:14', '2023-09-06 22:41:14'),
(6, 'Settings', 'text-bg-danger ', 'bi bi-house-gear-fill', 1, '2023-09-06 22:41:14', '2023-09-06 22:41:14');

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personnels`
--

CREATE TABLE `personnels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `matricule` varchar(255) DEFAULT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `datenaisse` varchar(255) NOT NULL,
  `lieunaisse` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `is_personnel` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `personnels`
--

INSERT INTO `personnels` (`id`, `matricule`, `nom`, `prenom`, `datenaisse`, `lieunaisse`, `genre`, `photo`, `email`, `telephone`, `is_personnel`, `created_at`, `updated_at`) VALUES
(1, 'ULTRANET2309', 'Kongne Fah', 'Erick', '1991-01-02', 'Baleng', 'M', NULL, 'erickkongne@gmail.com', '691359390', 1, '2023-09-06 15:59:52', '2023-09-06 16:41:50');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categorie_id` bigint(20) UNSIGNED NOT NULL,
  `code_produit` varchar(255) DEFAULT NULL,
  `lib_produit` varchar(255) DEFAULT NULL,
  `designation_produit` varchar(255) DEFAULT NULL,
  `prix_unitaire` double(8,2) DEFAULT 0.00,
  `unite` bigint(20) DEFAULT 0,
  `is_produit` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `categorie_id`, `code_produit`, `lib_produit`, `designation_produit`, `prix_unitaire`, `unite`, `is_produit`, `created_at`, `updated_at`) VALUES
(1, 1, 'UN_PT004', 'Bache 60', 'Bache 60', 1500.00, 70, 1, '2023-09-17 21:45:02', '2023-09-17 21:45:02'),
(2, 1, 'UN_PT005', 'Bache 80', 'Bache 80', 2000.00, 95, 1, '2023-09-17 21:45:02', '2023-09-17 21:45:02'),
(3, 1, 'UN_PT006', 'Bache 100', 'Bache 100', 2000.00, 215, 1, '2023-09-17 21:45:02', '2023-09-17 21:45:02'),
(4, 1, 'UN_PT007', 'Bache 110', 'Bache 110', 1200.00, 70, 1, '2023-09-17 21:45:02', '2023-09-17 21:45:02'),
(5, 1, 'UN_PT008', 'Bache 160', 'Bache 160', 3200.00, 70, 1, '2023-09-17 21:45:02', '2023-09-17 21:45:02'),
(6, 2, 'UN_PT015', 'Decoupe', 'Decoupe', 500.00, 160, 1, '2023-09-17 21:45:52', '2023-09-17 21:45:52'),
(7, 3, 'UN_PT014', 'DTF', 'DTF', 3000.00, 33, 1, '2023-09-17 21:46:21', '2023-09-17 21:46:21'),
(8, 4, 'UN_PT012', 'Flex', 'Flex', 4500.00, 160, 1, '2023-09-17 21:46:35', '2023-09-17 21:46:35'),
(9, 4, 'UN_PT013', 'Flex pailletes', 'Flex pailletes', 6000.00, 108, 1, '2023-09-17 21:46:35', '2023-09-17 21:46:35'),
(10, 5, 'UN_PT016', 'Macarons', 'Macarons', 250.00, 157, 1, '2023-09-17 21:46:55', '2023-09-17 21:46:55'),
(11, 6, 'UN_PT009', 'Microperforé', 'Microperforé', 6000.00, 157, 1, '2023-09-17 21:47:16', '2023-09-17 21:47:16'),
(12, 7, 'UN_PT017', 'Roll up 80', 'Roll up 80', 12500.00, 94, 1, '2023-09-17 21:47:33', '2023-09-17 21:47:33'),
(13, 7, 'UN_PT018', 'Roll up 90', 'Roll up 90', 13500.00, 33, 1, '2023-09-17 21:47:33', '2023-09-17 21:47:33'),
(14, 8, 'UN_PT010', 'Syntisol', 'Syntisol', 4500.00, 70, 1, '2023-09-17 21:48:03', '2023-09-17 21:48:03'),
(15, 9, 'UN_PT011', 'Transfert Numerique', 'Transfert Numerique', 5000.00, 108, 1, '2023-09-17 21:48:20', '2023-09-17 21:48:20'),
(16, 10, 'UN_PT001', 'Vinyle blanc', 'Vinyle blanc', 2000.00, 94, 1, '2023-09-17 21:48:33', '2023-09-17 21:48:33'),
(17, 10, 'UN_PT002', 'Vinyle transparent', 'Vinyle transparent', 2000.00, 33, 1, '2023-09-17 21:48:33', '2023-09-17 21:48:33'),
(18, 10, 'UN_PT003', 'Vinyle or', 'Vinyle or', 2000.00, 56, 1, '2023-09-17 21:48:33', '2023-09-17 21:48:33');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `taches`
--

CREATE TABLE `taches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code_tache` varchar(255) DEFAULT NULL,
  `lib_tache` varchar(255) DEFAULT NULL,
  `designation_tache` varchar(255) DEFAULT NULL,
  `is_tache` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `taches`
--

INSERT INTO `taches` (`id`, `code_tache`, `lib_tache`, `designation_tache`, `is_tache`, `created_at`, `updated_at`) VALUES
(1, 'UT001', 'Imprimer', 'MAJ', 1, '2023-09-05 16:08:31', '2023-09-05 16:47:45'),
(2, 'UT002', 'Impression Banderole', 'MAJ', 1, '2023-09-05 16:23:41', '2023-09-05 16:47:42');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_type` enum('1','2','3','4','5') NOT NULL DEFAULT '4',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `user_type`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Developper', 'dev@ultranet.com', '1', NULL, '$2y$10$tXRJPqZw1Q6ZtxLslbyWl.1zCv18sOx1BjNCRoXlzHhql.RZ62zgS', 'Cz2SWVLwLk3Ohd0VpBHAAVL2Gm7MNgnAt06Zd93lc0ZQE5G2nM0Hnt7G1ZCI', '2023-09-04 23:43:20', '2023-09-04 21:46:00'),
(2, 'Kongne Erick', 'erickkongne@gmail.com', '4', NULL, '$2y$10$kw1elXzwibIHga9OXlllf.3Zyt1sgbxizyQOhoeBOoBJB6PduyeB2', NULL, '2023-09-06 15:59:53', '2023-09-06 15:59:53');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `affectation_personnel_departements`
--
ALTER TABLE `affectation_personnel_departements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `affectation_personnel_departements_iddepartement_index` (`iddepartement`),
  ADD KEY `affectation_personnel_departements_idpersonnel_index` (`idpersonnel`),
  ADD KEY `affectation_personnel_departements_idagence_index` (`idagence`);

--
-- Index pour la table `affectation__taches`
--
ALTER TABLE `affectation__taches`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `agences`
--
ALTER TABLE `agences`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `agences_services`
--
ALTER TABLE `agences_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agences_services_idagence_index` (`idagence`),
  ADD KEY `agences_services_iddepartement_index` (`iddepartement`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories_produits`
--
ALTER TABLE `categories_produits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_produits_id_categories_index` (`id_categories`),
  ADD KEY `categories_produits_id_produit_index` (`id_produit`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comptes_clients`
--
ALTER TABLE `comptes_clients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `delegation_taches`
--
ALTER TABLE `delegation_taches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `delegation_taches_idtaches_index` (`idtaches`),
  ADD KEY `delegation_taches_idaffecation_index` (`idaffecation`);

--
-- Index pour la table `departements`
--
ALTER TABLE `departements`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `devis`
--
ALTER TABLE `devis`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `factures`
--
ALTER TABLE `factures`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `magasins`
--
ALTER TABLE `magasins`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Index pour la table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Index pour la table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `personnels`
--
ALTER TABLE `personnels`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `produits_code_produit_unique` (`code_produit`),
  ADD KEY `produits_categorie_id_index` (`categorie_id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Index pour la table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Index pour la table `taches`
--
ALTER TABLE `taches`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `affectation_personnel_departements`
--
ALTER TABLE `affectation_personnel_departements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `affectation__taches`
--
ALTER TABLE `affectation__taches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `agences`
--
ALTER TABLE `agences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `agences_services`
--
ALTER TABLE `agences_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `categories_produits`
--
ALTER TABLE `categories_produits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `comptes_clients`
--
ALTER TABLE `comptes_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `delegation_taches`
--
ALTER TABLE `delegation_taches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `departements`
--
ALTER TABLE `departements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `devis`
--
ALTER TABLE `devis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `factures`
--
ALTER TABLE `factures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `magasins`
--
ALTER TABLE `magasins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT pour la table `module`
--
ALTER TABLE `module`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `personnels`
--
ALTER TABLE `personnels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `taches`
--
ALTER TABLE `taches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `affectation_personnel_departements`
--
ALTER TABLE `affectation_personnel_departements`
  ADD CONSTRAINT `affectation_personnel_departements_idagence_foreign` FOREIGN KEY (`idagence`) REFERENCES `agences` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `affectation_personnel_departements_iddepartement_foreign` FOREIGN KEY (`iddepartement`) REFERENCES `departements` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `affectation_personnel_departements_idpersonnel_foreign` FOREIGN KEY (`idpersonnel`) REFERENCES `personnels` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `categories_produits`
--
ALTER TABLE `categories_produits`
  ADD CONSTRAINT `categories_produits_id_categories_foreign` FOREIGN KEY (`id_categories`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `categories_produits_id_produit_foreign` FOREIGN KEY (`id_produit`) REFERENCES `produits` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `delegation_taches`
--
ALTER TABLE `delegation_taches`
  ADD CONSTRAINT `delegation_taches_idaffecation_foreign` FOREIGN KEY (`idaffecation`) REFERENCES `affectation_personnel_departements` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `delegation_taches_idtaches_foreign` FOREIGN KEY (`idtaches`) REFERENCES `taches` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `produits_categorie_id_foreign` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;
