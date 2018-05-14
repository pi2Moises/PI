-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Maio-2018 às 23:51
-- Versão do servidor: 5.7.17
-- PHP Version: 7.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto_integrador3`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `id` int(10) UNSIGNED NOT NULL,
  `cod_curso` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_curso` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_curso` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modalidade` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `denominacao_curso` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `habilitacao` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `local_oferta` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `turno_func` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_vagas` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carga_h_curso` int(11) NOT NULL,
  `regime_letivo` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `periodo` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coord_curso` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulacao` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dedicacao` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id`, `cod_curso`, `nome_curso`, `t_curso`, `modalidade`, `denominacao_curso`, `habilitacao`, `local_oferta`, `turno_func`, `num_vagas`, `carga_h_curso`, `regime_letivo`, `periodo`, `coord_curso`, `cpf`, `titulacao`, `dedicacao`, `created_at`, `updated_at`) VALUES
(1, 'ADS', 'Análise e Desenvolvimento de Sistemas', 'Graduação', 'Presencial', 'Teórico', 'Vazio', 'Brasilia-DF', 'Matutino', '50', 1200, 'Vazio', 'Vazio', 'Rubens Laurini Sant\'Anna', '010.010.001-01', 'Vazio', 'Vazio', '2018-05-03 22:37:03', '2018-05-03 22:37:03'),
(2, 'CC', 'Ciência da Computação', 'Graduação', 'Presencial', 'Teórico', 'Vazio', 'Brasilia-DF', 'Matutino', '50', 1200, 'Vazio', 'Vazio', 'Rubens Laurini Sant\'Anna', '010.010.001-01', 'Vazio', 'Vazio', '2018-05-03 22:50:17', '2018-05-03 22:50:17'),
(4, 'DAM', 'Desenvolvimento de Aplicativos Móveis', 'Graduação', 'EAD', 'Teórico', 'Vazio', 'ASA NORTE', 'Matutino', '50', 1200, 'Vazio', 'Vazio', 'Rubens Laurini Sant\'Anna', '010.010.001-01', 'Vazio', 'Vazio', '2018-05-04 19:22:27', '2018-05-04 19:22:27');

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `id` int(10) UNSIGNED NOT NULL,
  `disciplina` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semestre` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carga_horaria` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`id`, `disciplina`, `descricao`, `codigo`, `semestre`, `carga_horaria`, `created_at`, `updated_at`) VALUES
(1, 'Português', 'Teórica', 'Port-001', '2', '60', '2018-04-30 23:03:00', '2018-05-01 03:10:51'),
(2, 'Projeto Integrador 3 - Projeto Pedagógico de Curso', 'Prático', 'PPC-001', '4', '120', '2018-04-30 23:04:25', '2018-04-30 23:04:25'),
(3, 'Lógica de Programação', 'Teórica', 'Prog-001', '1', '90', '2018-04-30 23:05:50', '2018-04-30 23:05:50'),
(4, 'Programação Orientada a Objetos 1', 'Teórica', 'Prog-002', '4', '90', '2018-04-30 23:07:47', '2018-04-30 23:07:47'),
(5, 'Programação Orientada a Objetos 2', 'Teórica', 'Prog-003', '4', '90', '2018-04-30 23:09:02', '2018-05-03 19:11:43'),
(6, 'Linguagem de Programação para Web 1', 'Teórica', 'Prog-004', '3', '90', '2018-04-30 23:11:16', '2018-04-30 23:11:16'),
(7, 'Auditoria e Segurança no Desenvolvimento de Aplicações', 'Teórica', 'Prog-005', '4', '60', '2018-04-30 23:33:45', '2018-04-30 23:33:45'),
(8, 'Direitos Humanos e Ambientais', 'Teórica', 'Prog-006', '4', '90', '2018-05-01 03:12:06', '2018-05-01 03:12:53'),
(10, 'Segurança da Informação', 'Teórica', 'Prog-007', '1', '60', '2018-05-03 17:50:42', '2018-05-03 17:50:42'),
(11, 'Leitura e Produção de Texto', 'Teórica', 'Prog-008', '3', '60', '2018-05-03 17:54:37', '2018-05-03 17:54:37'),
(12, 'Gestão de Projetos', 'Teórica', 'Prog-009', '3', '90', '2018-05-03 17:55:32', '2018-05-03 17:55:32'),
(13, 'Redes de Computadores', 'Teórica', 'Prog-010', '1', '90', '2018-05-03 17:56:45', '2018-05-03 17:56:45'),
(14, 'Arquitetura de Computadores', 'Teórica', 'Prog-011', '2', '60', '2018-05-03 18:33:00', '2018-05-03 18:33:00'),
(16, 'Banco de Dados', 'Teórica', 'Prog-013', '2', '90', '2018-05-03 19:38:40', '2018-05-03 19:38:40'),
(18, 'Projeto Integrador 2 - Projeto Pedagógico de Curso', 'Teórica', 'Prog-014', '1', '60', '2018-05-03 19:41:03', '2018-05-07 00:59:33');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_04_29_145835_criar_tabela_disciplina', 1),
(2, '2018_04_29_134801_criar_tabela_disciplina', 2),
(3, '2018_04_29_231050_criar_tabela_disciplina', 3),
(4, '2018_05_03_181122_criar_tabela_curso', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@iesb.br', '$2y$10$Al5bInMDa0MawOnqeTdeHuNuxwtDelV6CqWSrHbe42BBhlwuDVFU2', 'ylMjX5nso2rQS02trT1ZtDivdX4anEXEgD1X55kTjRqNt9ixsCNct3RWXOe6', '2018-04-29 18:03:17', '2018-04-29 18:03:17'),
(2, 'Moisés Alexandre', 'moises@iesb.br', '$2y$10$dxc0KUAlcWjNNafrjX6VlOyaiVX/a5SXrrbRzXUDKqwwHlP1V1uZS', 'BAr1TPn8rAqeQxE2vzbKoIwlDlLTAeXv1gbpy3fbTOmAVZqOwaTQrSE91l3l', '2018-04-29 18:12:19', '2018-04-29 18:12:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `curso`
--
ALTER TABLE `curso`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
