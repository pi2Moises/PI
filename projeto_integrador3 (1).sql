-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Maio-2018 às 23:05
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
-- Estrutura da tabela `atividade`
--

CREATE TABLE `atividade` (
  `id` int(10) UNSIGNED NOT NULL,
  `aula` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conteudo` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `atividade`
--

INSERT INTO `atividade` (`id`, `aula`, `conteudo`, `created_at`, `updated_at`) VALUES
(1, '01', 'Linguagem de Programação', '2018-05-15 05:56:04', '2018-05-15 05:56:04'),
(2, '03', 'Instalação do Portugol', '2018-05-15 06:10:45', '2018-05-15 06:13:25'),
(3, '02', 'Algoritmos (Ações)', '2018-05-15 06:12:11', '2018-05-15 06:12:11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `bibliografia`
--

CREATE TABLE `bibliografia` (
  `id` int(10) UNSIGNED NOT NULL,
  `curso` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disciplina` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `autor` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isbn` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ano` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `editora` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `bibliografia`
--

INSERT INTO `bibliografia` (`id`, `curso`, `disciplina`, `titulo`, `autor`, `isbn`, `ano`, `editora`, `created_at`, `updated_at`) VALUES
(1, 'Análise e Desenvolvimento de Sistemas', 'Auditoria e Segurança no Desenvolvimento de Aplicações', 'Título 1', 'Autor de Teste', 'insb - teste', '2018', 'Abril', '2018-05-15 22:43:17', '2018-05-17 03:58:03'),
(2, 'Análise e Desenvolvimento de Sistemas', 'Lógica de Programação', 'Título 2', 'Autor de Teste', 'insb - teste', '2018', 'Abril', '2018-05-15 22:51:56', '2018-05-15 22:51:56'),
(3, 'Análise e Desenvolvimento de Sistemas', 'Programação Orientada a Objetos 1', 'Título 3', 'Autor de Teste', 'insb - teste', '2018', 'Abril', '2018-05-15 22:52:19', '2018-05-15 22:52:19'),
(4, 'Análise e Desenvolvimento de Sistemas', 'Linguagem de Programação para Web 1', 'Título 4', 'Autor de Teste', 'insb - teste', '2018', 'Abril', '2018-05-15 22:52:40', '2018-05-15 22:52:40'),
(5, 'Desenvolvimento de Aplicativos Móveis', 'Banco de Dados', 'Título 1', 'Autor de Teste', 'insb - teste', '2018', 'Abril', '2018-05-15 22:53:08', '2018-05-15 22:53:08'),
(6, 'Análise e Desenvolvimento de Sistemas', 'Arquitetura de Computadores', 'Título 5', 'Autor de Teste', 'insb - teste', '2018', 'Abril', '2018-05-15 22:53:32', '2018-05-15 22:53:32');

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
(4, 'DAM', 'Desenvolvimento de Aplicativos Móveis', 'Graduação', 'EAD', 'Teórico', 'Vazio', 'ASA NORTE', 'Matutino', '50', 1200, 'Vazio', 'Vazio', 'Rubens Laurini Sant\'Anna', '010.010.001-01', 'Vazio', 'Vazio', '2018-05-04 19:22:27', '2018-05-04 19:22:27'),
(5, 'SI', 'Segurança da Informação', 'Graduação', 'Presencial', 'Teórico e Prático', 'Vazio', 'Brasilia-DF', 'Matutino', '50', 1200, 'Vazio', 'Vazio', 'Moisés Alexandre de Souza', '010.010.001-01', 'Vazio', 'Vazio', '2018-05-15 07:51:11', '2018-05-15 07:51:11'),
(6, '2100', 'Ciência biológicas', 'GHGGHG', 'hjkhjkhjkh', 'gfghgjhj', 'hjkhkfggf', 'lklçkklhjj', 'Matutino', '10', 50, '2018', '8', 'Moisés Alexandre de Souza', '0000000033', 'uiuiohjkh', '90', '2018-05-15 19:31:44', '2018-05-15 19:31:44');

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
-- Estrutura da tabela `ensino`
--

CREATE TABLE `ensino` (
  `id` int(10) UNSIGNED NOT NULL,
  `curso` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ano` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semestre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disciplina` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_disciplina` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carga_horaria_curso` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `periodo_curso` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matri_professor` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_professor` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ementa` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `compet_hab` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metod_ensino` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cronograma_aula` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conteudo` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avaliacao` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bibliografia` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `ensino`
--

INSERT INTO `ensino` (`id`, `curso`, `ano`, `semestre`, `disciplina`, `nome_disciplina`, `carga_horaria_curso`, `periodo_curso`, `matri_professor`, `nome_professor`, `ementa`, `compet_hab`, `metod_ensino`, `cronograma_aula`, `conteudo`, `avaliacao`, `bibliografia`, `created_at`, `updated_at`) VALUES
(1, 'Curso 1', '2018', '1', 'Disciplina 1', 'Disciplina 2', '120', '1º Semestre', '1º Professor', '1º Professor', 'sdgsdg', 'sdgsdg', 'sdgsdg', '1º Aula', '1º Aula', 'sdgdsgs', 'sdgdsg', '2018-05-20 20:40:55', '2018-05-20 20:40:55'),
(2, 'Análise e Desenvolvimento de Sistemas', '2018', '1', 'Prog-001', 'Programação Orientada a Objetos 1', '120', '1º Semestre', '16286101007', 'Moisés Alexandre de Souza', 'Teste de ementa', 'teste de competência e habilidade', 'teste de metodologia de ensino', '03', 'Instalação do Portugol', 'Teste de Avaliação', 'teste de Bibliografia', '2018-05-21 00:46:54', '2018-05-21 00:46:54'),
(3, 'Análise e Desenvolvimento de Sistemas', '2019', '2', 'Port-001', 'Português', '120', 'Selecione', '16286101007', 'Rubens Laurini', 'sgsgs', 'sgddsgs', 'sgsdg', '01', 'Linguagem de Programação', 'sdgsdgs', 'sgdsgsg', '2018-05-21 00:48:15', '2018-05-21 04:31:46'),
(4, 'Análise e Desenvolvimento de Sistemas', '2018', '4', 'Port-001', 'Português', '120', '1º Semestre', '16286101007', 'Moisés Alexandre de Souza', 'dddhfd', 'dfhd', 'hdhfdh', '01', 'Linguagem de Programação', 'dhdfh', 'dfhdh', '2018-05-21 04:33:09', '2018-05-21 04:33:09'),
(6, 'Ciência da Computação', '2020', '1', 'Port-001', 'Português', '60', '2º Semestre', '201805101', 'Rodrigo Afonso da Silva', 'safsdf', 'sdfasf', 'sdfasf', '01', 'Linguagem de Programação', 'sdfasdfsdf', 'sdfassf', '2018-05-21 04:34:25', '2018-05-21 04:34:25');

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
(4, '2018_05_03_181122_criar_tabela_curso', 4),
(5, '2018_05_12_013136_criar_tabela_professor', 5),
(6, '2018_05_15_010705_criar_tabela_reuniao', 6),
(7, '2018_05_15_025010_criar_tabela_atividade', 7),
(8, '2018_05_15_193510_criar_tabela_bibliografia', 8),
(9, '2018_05_20_005525_criar_tabela_ppc', 9),
(10, '2018_05_20_171726_criar_tabela_ensino', 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ppc`
--

CREATE TABLE `ppc` (
  `id` int(10) UNSIGNED NOT NULL,
  `curso` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perfil_curso` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perfil_egresso` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acesso_curso` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rep_grafica` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sis_aval` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sis_aval_projeto_curso` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tcc` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estagio_curricular` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pol_atend` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `ppc`
--

INSERT INTO `ppc` (`id`, `curso`, `perfil_curso`, `perfil_egresso`, `acesso_curso`, `rep_grafica`, `sis_aval`, `sis_aval_projeto_curso`, `tcc`, `estagio_curricular`, `pol_atend`, `created_at`, `updated_at`) VALUES
(2, 'Ciência da Computação', 'Teste de Perfil Curso', 'Teste perfil egresso', 'Vestibular', 'Teste de representação grafica', 'Teste', 'vazio', 'Brasília', 'VAZIO', 'VAZIO', '2018-05-20 04:56:34', '2018-05-20 04:56:34'),
(8, 'Análise e Desenvolvimento de Sistemas', 'Teste de Perfil Curso', 'Teste perfil egresso', 'Vestibular', 'Teste de representação grafica', 'Teste', 'vazio', 'Brasília', 'VAZIO', 'VAZIO', '2018-05-20 05:39:25', '2018-05-20 05:39:25'),
(9, 'Análise e Desenvolvimento de Sistemas', 'Teste de Perfil Curso', 'Teste perfil egresso', 'Vestibular', 'Teste de representação grafica', 'Teste', 'vazio', 'Brasília', 'VAZIO', 'VAZIO', '2018-05-20 05:39:32', '2018-05-20 05:39:32'),
(10, 'Análise e Desenvolvimento de Sistemas', 'Teste de Perfil Curso', 'Teste perfil egresso', 'Vestibular', 'Teste de representação grafica', 'Teste', 'vazio', 'Brasília', 'VAZIO', 'VAZIO', '2018-05-20 05:39:36', '2018-05-20 05:39:36'),
(11, 'Análise e Desenvolvimento de Sistemas', 'Teste de Perfil Curso', 'Teste perfil egresso', 'Vestibular', 'Teste de representação grafica', 'Teste', 'vazio', 'Brasília', 'VAZIO', 'VAZIO', '2018-05-20 05:39:41', '2018-05-20 05:39:41'),
(12, 'Análise e Desenvolvimento de Sistemas', 'Teste de Perfil Curso', 'Teste perfil egresso', 'Vestibular', 'Teste de representação grafica', 'Teste', 'vazio', 'Brasília', 'VAZIO', 'VAZIO', '2018-05-20 05:39:48', '2018-05-20 05:39:48'),
(13, 'Análise e Desenvolvimento de Sistemas', 'Teste de Perfil Curso', 'Teste perfil egresso', 'Vestibular', 'Teste de representação grafica', 'Teste', 'vazio', 'Brasília', 'VAZIO', 'VAZIO', '2018-05-20 05:39:54', '2018-05-20 05:39:54');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome_prof` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulacao` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `formacao` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `curriculo` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dt_atualizacao` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matricula` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dt_admissao` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hora_nde` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tcc` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_curso` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coord_o_curso` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesquisa` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `atv_extra` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `atv_extra_outro_curso` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qtd_horas_curso` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qtd_horas_outros_curso` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dt_inicio_vinc_curso` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tot_tempo_vinc_curso` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dt_inicio_exp_mag` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tot_tempo_exp_mag` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dt_inicio_curso_dist` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tot_tempo_curso_dist` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dt_inicio_exp_prof` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tot_tempo_exp_prof` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `participacao_evento` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `na_area` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `em_outras_areas` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `livro_pub_area` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `livro_pub_outra_area` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trab_pub_comp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resumo_pub_comp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prop_int_dep` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prop_int_dep_regist` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `out_pub_1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `out_pub_2` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `out_pub_3` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `membro_nde` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `membro_colegiado` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `docente_pedagogia` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`id`, `nome_prof`, `cpf`, `titulacao`, `formacao`, `curriculo`, `dt_atualizacao`, `matricula`, `dt_admissao`, `hora_nde`, `tcc`, `c_curso`, `coord_o_curso`, `pesquisa`, `atv_extra`, `atv_extra_outro_curso`, `qtd_horas_curso`, `qtd_horas_outros_curso`, `dt_inicio_vinc_curso`, `tot_tempo_vinc_curso`, `dt_inicio_exp_mag`, `tot_tempo_exp_mag`, `dt_inicio_curso_dist`, `tot_tempo_curso_dist`, `dt_inicio_exp_prof`, `tot_tempo_exp_prof`, `participacao_evento`, `na_area`, `em_outras_areas`, `livro_pub_area`, `livro_pub_outra_area`, `trab_pub_comp`, `resumo_pub_comp`, `prop_int_dep`, `prop_int_dep_regist`, `out_pub_1`, `out_pub_2`, `out_pub_3`, `membro_nde`, `membro_colegiado`, `docente_pedagogia`, `created_at`, `updated_at`) VALUES
(1, 'Moisés Alexandre de Souza', '000.000.000-00', 'Graduação', 'Técnologia', 'curriculo.com.br', '04/05/2018', '16286101007', '14/10/2015', '600', '600', '600', '600', '250', '600', '400', '1200', '100', '05/05/2015', '3 anos', '05/06/2015', '3 anos', '05/06/2015', '3 anos', '05/04/2015', '3 anos', '5', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', 'on', 'on', 'on', '2018-05-12 06:09:38', '2018-05-12 06:09:38'),
(2, 'Rubens Laurini', '111.111.111-11', 'Mestre', 'Tecnologia', 'meu.curriculo.com.br', '12/05/2018', '16286101007', '14/10/2015', '600', '600', '600', '600', '250', '250', '400', '1200', '100', '05/05/2015', '3 anos', '05/06/2015', '3 anos', '05/06/2015', '3 anos', '05/04/2015', '3 anos', '5', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', 'on', 'on', NULL, '2018-05-13 03:11:39', '2018-05-13 03:11:39'),
(3, 'Professor Teste de Cadastro', '000.000.000-00', 'Graduação', 'Humanas', 'teste.curriculo.iesb.br', '12/05/2018', '555555', '14/10/2015', '600', '600', '1200', '600', '250', 'dfgsdfg', '400', 'dfgsd', 'fdgsdfg', '05/05/2015', '3 anos', '05/06/2015', '3 anos', '05/06/2015', '3 anos', '05/04/2015', '3 anos', '5', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', 'S', 'S', 'S', '2018-05-13 03:19:25', '2018-05-13 03:19:25'),
(4, 'Luciana da Silva', '000.000.000-00', 'Graduação', 'Tecnologia', 'curriculo.com.br', '04/05/2018', '2018009', '14/10/2015', '50', 'Brasília', '600', '1', '250', '100', '400', '150', '200', '05/05/2015', '3 anos', '05/06/2015', '3 anos', '05/06/2015', '3 anos', '05/04/2015', '3 anos', '5', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', 'S', NULL, 'S', '2018-05-13 03:26:44', '2018-05-15 02:06:54'),
(5, 'Rodrigo Afonso da Silva', '010.010.001-01', 'Graduação', 'Tecnologia', 'curriculo.com.br', '04/05/2018', '2018006', '14/10/2015', '600', '100', '600', '600', '250', '300', '400', '600', '100', '05/05/2015', '3 anos', '05/06/2015', '3 anos', '05/06/2015', '3 anos', '05/04/2015', '3 anos', '5', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', 'S', NULL, NULL, '2018-05-13 03:29:40', '2018-05-15 02:05:31'),
(7, 'Denis Golveia', '101.101.101-10', 'Doutorado', 'Humanas', 'denis.com.br', '14/05/2018', '201805101', '14/05/2018', '500', '500', '500', '500', '500', '500', '500', '500', '500', '05/05/2015', '3 anos', '05/06/2015', '3 anos', '05/06/2015', '3 anos', '05/04/2015', '3 anos', '5', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', 'S', 'S', 'S', '2018-05-15 02:22:17', '2018-05-15 02:22:17');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reuniao`
--

CREATE TABLE `reuniao` (
  `id` int(10) UNSIGNED NOT NULL,
  `dt_reuniao` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `local_reuniao` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `participantes` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deliberacoes` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `reuniao`
--

INSERT INTO `reuniao` (`id`, `dt_reuniao`, `local_reuniao`, `participantes`, `deliberacoes`, `created_at`, `updated_at`) VALUES
(2, '14/05/2018', 'IESB - Asa Sul', 'Ricardo, Moisés Alexandre, João da Silva', 'No menu Inserir, as galerias incluem itens que são projetados para corresponder à aparência geral do documento. Você pode usar essas galerias para inserir tabelas, cabeçalhos, rodapés, listas, folhas de rosto e outros blocos de construção do documento.\r\nQuando você cria imagens, gráficos ou diagramas, esses elementos também são coordenados com a aparência atual do documento.', '2018-05-15 05:24:08', '2018-05-15 05:24:08');

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
(1, 'Admin', 'admin@iesb.br', '$2y$10$Al5bInMDa0MawOnqeTdeHuNuxwtDelV6CqWSrHbe42BBhlwuDVFU2', 'CN4g04tNCO30ppsUDojMn3Th8tr8yZOWfVOxVssAcJseekvpCtFtLbHW7pDi', '2018-04-29 18:03:17', '2018-04-29 18:03:17'),
(2, 'Moisés Alexandre', 'moises@iesb.br', '$2y$10$dxc0KUAlcWjNNafrjX6VlOyaiVX/a5SXrrbRzXUDKqwwHlP1V1uZS', 'BAr1TPn8rAqeQxE2vzbKoIwlDlLTAeXv1gbpy3fbTOmAVZqOwaTQrSE91l3l', '2018-04-29 18:12:19', '2018-04-29 18:12:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atividade`
--
ALTER TABLE `atividade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bibliografia`
--
ALTER TABLE `bibliografia`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `ensino`
--
ALTER TABLE `ensino`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ppc`
--
ALTER TABLE `ppc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reuniao`
--
ALTER TABLE `reuniao`
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
-- AUTO_INCREMENT for table `atividade`
--
ALTER TABLE `atividade`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `bibliografia`
--
ALTER TABLE `bibliografia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `curso`
--
ALTER TABLE `curso`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `ensino`
--
ALTER TABLE `ensino`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `ppc`
--
ALTER TABLE `ppc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `reuniao`
--
ALTER TABLE `reuniao`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
