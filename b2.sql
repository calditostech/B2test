-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Mar-2021 às 13:40
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `b2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `entrega`
--

CREATE TABLE `entrega` (
  `nome` varchar(200) NOT NULL,
  `preco` float NOT NULL,
  `fornecedor` varchar(200) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedores`
--

CREATE TABLE `fornecedores` (
  `nome_fornecedor` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `localidade`
--

CREATE TABLE `localidade` (
  `rua` varchar(200) NOT NULL,
  `bairro` varchar(200) NOT NULL,
  `cidade` varchar(200) NOT NULL,
  `estado` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `nome` varchar(200) NOT NULL,
  `referencia` varchar(200) NOT NULL,
  `preco` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `entrega`
--
ALTER TABLE `entrega`
  ADD KEY `nome_produto_fk` (`nome`),
  ADD KEY `preco_produto_fk` (`preco`),
  ADD KEY `fornecedor_fk` (`fornecedor`),
  ADD KEY `endereco_fk` (`nome`),
  ADD KEY `endereco` (`endereco`);

--
-- Índices para tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  ADD KEY `nome_fornecedor` (`nome_fornecedor`);

--
-- Índices para tabela `localidade`
--
ALTER TABLE `localidade`
  ADD UNIQUE KEY `bairro` (`bairro`),
  ADD UNIQUE KEY `cidade` (`cidade`),
  ADD UNIQUE KEY `estado` (`estado`),
  ADD KEY `rua` (`rua`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD KEY `nome` (`nome`),
  ADD KEY `preco` (`preco`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
