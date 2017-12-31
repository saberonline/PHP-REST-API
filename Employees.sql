-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 30-Dez-2017 às 21:52
-- Versão do servidor: 5.6.28
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `employees`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `employees`
--

CREATE TABLE `employees` (
  `emp_no` int(11) NOT NULL DEFAULT '0',
  `birth_date` date NOT NULL,
  `first_name` varchar(14) NOT NULL,
  `last_name` varchar(16) NOT NULL,
  `gender` enum('M','F') NOT NULL,
  `hire_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `employees`
--

INSERT INTO `employees` (`emp_no`, `birth_date`, `first_name`, `last_name`, `gender`, `hire_date`) VALUES
(1, '1990-01-10', 'John', 'Dow', 'M', '2017-01-01'),
(2, '1980-02-20', 'Test', 'Test', 'F', '2017-02-01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `salaries`
--

CREATE TABLE `salaries` (
  `emp_no` int(11) NOT NULL,
  `salary` int(11) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `salaries`
--

INSERT INTO `salaries` (`emp_no`, `salary`, `from_date`, `to_date`) VALUES
(1, 1000, '2017-01-10', '2017-05-30'),
(2, 2000, '2017-02-20', '2017-06-10');

-- --------------------------------------------------------

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`emp_no`);

--
-- Indexes for table `salaries`
--
ALTER TABLE `salaries`
  ADD PRIMARY KEY (`emp_no`,`from_date`);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `salaries`
--
ALTER TABLE `salaries`
  ADD CONSTRAINT `salaries_ibfk_1` FOREIGN KEY (`emp_no`) REFERENCES `employees` (`emp_no`) ON DELETE CASCADE;
