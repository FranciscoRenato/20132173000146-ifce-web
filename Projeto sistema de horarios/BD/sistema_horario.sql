-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Jun-2018 às 01:36
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistema_horario`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `horarios_das_disciplinas`
--

CREATE TABLE `horarios_das_disciplinas` (
  `id` int(11) NOT NULL,
  `curso` varchar(50) NOT NULL,
  `professor` varchar(50) NOT NULL,
  `disciplina` varchar(50) NOT NULL,
  `diaSemana` varchar(50) NOT NULL,
  `horaInicio` varchar(50) NOT NULL,
  `horaFim` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `matricula` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `senha_md5` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `matricula`, `email`, `senha`, `senha_md5`) VALUES
(1, '20132173000146', 'renatolorencosousa@gmail.com', 'Renato12345', '968ee9cc6b714906fb9681e6c3561957'),
(2, '20132173000146', 'renatosousahiphop@hotmail.com', '12345678', '550e1bafe077ff0b0b67f4e32f29d751');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `horarios_das_disciplinas`
--
ALTER TABLE `horarios_das_disciplinas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `horarios_das_disciplinas`
--
ALTER TABLE `horarios_das_disciplinas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
