-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Jan-2021 às 04:02
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `racadog`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_breed`
--

CREATE TABLE `tb_breed` (
  `breed_id` int(3) NOT NULL,
  `breed_name` varchar(34) DEFAULT NULL,
  `breed_name_pt` varchar(43) DEFAULT NULL,
  `breed_history` varchar(4225) DEFAULT NULL,
  `breed_about` varchar(1876) DEFAULT NULL,
  `breed_group_akc` varchar(24) DEFAULT NULL,
  `breed_group_akc_pt` varchar(20) DEFAULT NULL,
  `breed_group_fci` int(2) DEFAULT NULL,
  `breed_height` varchar(146) DEFAULT NULL,
  `breed_weight` varchar(77) DEFAULT NULL,
  `breed_size` varchar(7) DEFAULT NULL,
  `breed_lifetime` varchar(13) DEFAULT NULL,
  `breed_img` varchar(35) DEFAULT NULL,
  `breed_temperament` varchar(75) DEFAULT NULL,
  `breed_color` varchar(601) DEFAULT NULL,
  `breed_brand_color` varchar(256) DEFAULT NULL,
  `breed_head` varchar(2870) DEFAULT NULL,
  `breed_body` varchar(2364) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_coat`
--

CREATE TABLE `tb_coat` (
  `coat_id` int(2) NOT NULL,
  `coat_type` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_color`
--

CREATE TABLE `tb_color` (
  `color_id` int(2) NOT NULL,
  `color_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_ear`
--

CREATE TABLE `tb_ear` (
  `ear_id` int(2) NOT NULL,
  `ear_class` varchar(7) DEFAULT NULL,
  `ear_type` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_eye`
--

CREATE TABLE `tb_eye` (
  `eye_id` int(2) NOT NULL,
  `eye_color` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_group`
--

CREATE TABLE `tb_group` (
  `group_id` int(2) NOT NULL,
  `group_name` varchar(8) DEFAULT NULL,
  `group_desc` varchar(84) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_head`
--

CREATE TABLE `tb_head` (
  `head_id` int(1) NOT NULL,
  `head_cranio` varchar(12) DEFAULT NULL,
  `head_nose` varchar(8) DEFAULT NULL,
  `head_desc` varchar(27) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_size`
--

CREATE TABLE `tb_size` (
  `size_id` int(1) NOT NULL,
  `size_name` varchar(7) DEFAULT NULL,
  `size_kg_min` int(2) DEFAULT NULL,
  `size_max_kg` int(3) DEFAULT NULL,
  `size_min_cm` int(2) DEFAULT NULL,
  `size_max_cm` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_syrup`
--

CREATE TABLE `tb_syrup` (
  `syrup_id` int(1) NOT NULL,
  `syrup_type` varchar(82) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_temperament`
--

CREATE TABLE `tb_temperament` (
  `temperament_id` int(2) NOT NULL,
  `temperament_desc` varchar(36) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_breed`
--
ALTER TABLE `tb_breed`
  ADD PRIMARY KEY (`breed_id`);

--
-- Índices para tabela `tb_coat`
--
ALTER TABLE `tb_coat`
  ADD PRIMARY KEY (`coat_id`);

--
-- Índices para tabela `tb_color`
--
ALTER TABLE `tb_color`
  ADD PRIMARY KEY (`color_id`);

--
-- Índices para tabela `tb_ear`
--
ALTER TABLE `tb_ear`
  ADD PRIMARY KEY (`ear_id`);

--
-- Índices para tabela `tb_eye`
--
ALTER TABLE `tb_eye`
  ADD PRIMARY KEY (`eye_id`);

--
-- Índices para tabela `tb_group`
--
ALTER TABLE `tb_group`
  ADD PRIMARY KEY (`group_id`);

--
-- Índices para tabela `tb_head`
--
ALTER TABLE `tb_head`
  ADD PRIMARY KEY (`head_id`);

--
-- Índices para tabela `tb_size`
--
ALTER TABLE `tb_size`
  ADD PRIMARY KEY (`size_id`);

--
-- Índices para tabela `tb_syrup`
--
ALTER TABLE `tb_syrup`
  ADD PRIMARY KEY (`syrup_id`);

--
-- Índices para tabela `tb_temperament`
--
ALTER TABLE `tb_temperament`
  ADD PRIMARY KEY (`temperament_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_breed`
--
ALTER TABLE `tb_breed`
  MODIFY `breed_id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_coat`
--
ALTER TABLE `tb_coat`
  MODIFY `coat_id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_color`
--
ALTER TABLE `tb_color`
  MODIFY `color_id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_ear`
--
ALTER TABLE `tb_ear`
  MODIFY `ear_id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_eye`
--
ALTER TABLE `tb_eye`
  MODIFY `eye_id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_group`
--
ALTER TABLE `tb_group`
  MODIFY `group_id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_head`
--
ALTER TABLE `tb_head`
  MODIFY `head_id` int(1) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_size`
--
ALTER TABLE `tb_size`
  MODIFY `size_id` int(1) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_syrup`
--
ALTER TABLE `tb_syrup`
  MODIFY `syrup_id` int(1) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_temperament`
--
ALTER TABLE `tb_temperament`
  MODIFY `temperament_id` int(2) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
