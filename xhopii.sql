-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 14, 2023 at 01:39 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xhopii`
--

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `cpf` varchar(15) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `sobrenome` varchar(60) NOT NULL,
  `dataNascimento` date NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `foto` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`cpf`, `nome`, `sobrenome`, `dataNascimento`, `telefone`, `email`, `senha`, `foto`) VALUES
('12345678910', 'Lucas', 'Costa', '1992-06-22', '21987654321', 'lucas.costa@gmail.com', 'senha123', '../img/clientes/2.jpg'),
('23456789101', 'Larissa', 'Santos', '1995-03-17', '21987654321', 'larissa.santos@gmail.com', 'senha4321', '../img/clientes/5.jpg'),
('34567891012', 'Mariana', 'Pereira', '1984-08-29', '21976543210', 'mariana.pereira@gmail.com', 'senhatest', '../img/clientes/4.jpg'),
('45678910123', 'Pedro', 'Alves', '1998-11-08', '21965432109', 'pedro.alves@gmail.com', '123abc', '../img/clientes/1.jpg'),
('56789101234', 'Carla', 'Rodrigues', '1987-12-02', '21954321098', 'carla.rodrigues@gmail.com', 'teste123', '../img/clientes/3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `funcionario`
--

CREATE TABLE `funcionario` (
  `cpf` varchar(15) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `sobrenome` varchar(60) NOT NULL,
  `dataNascimento` date NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `cargo` varchar(30) NOT NULL,
  `salario` float NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `foto` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `funcionario`
--

INSERT INTO `funcionario` (`cpf`, `nome`, `sobrenome`, `dataNascimento`, `telefone`, `cargo`, `salario`, `email`, `senha`, `foto`) VALUES
('111.222.333-44', 'José', 'Ferreira', '1995-02-20', '1112223334', 'Vendedor', 1500, 'jose.ferreira@email.com', 'senha789', '../img/funcionarios/5.jpg'),
('123.456.789-00', 'João', 'Silva', '1990-05-15', '1234567890', 'Gerente', 5000, 'joao.silva@email.com', 'senha123', '../img/funcionarios/3.jpg'),
('132', '121', '213', '2023-04-07', '321', '313', 1231, '312@', '3123', '../img/funcionarios/2023-04-14-02-36-03-teste.jpeg'),
('444.555.666-77', 'Ana', 'Pereira', '1980-08-10', '4445556667', 'Analista', 6000, 'ana.pereira@email.com', 'senha012', '../img/funcionarios/1.jpg'),
('888.999.000-11', 'Pedro', 'Lima', '2000-03-05', '8889990001', 'Estagiário', 1000, 'pedro.lima@email.com', 'senha345', '../img/funcionarios/4.jpg'),
('987.654.321-00', 'Maria', 'Souza', '1985-11-02', '9876543210', 'Assistente', 2000, 'maria.souza@email.com', 'senha456', '../img/funcionarios/2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `fabricante` varchar(50) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `valor` float NOT NULL,
  `quantidade` int(10) NOT NULL,
  `foto` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `produto`
--

INSERT INTO `produto` (`id`, `nome`, `fabricante`, `descricao`, `valor`, `quantidade`, `foto`) VALUES
(2, 'Camisa polo', 'Lacoste', 'Camisa polo masculina, tamanho G, na cor branca', 149.9, 15, '../img/produtos/1.jpg'),
(3, 'Calça jeans', 'Levi\'s', 'Calça jeans feminina, modelo skinny, tamanho 38, na cor azul', 199.9, 10, '../img/produtos/2.jpg'),
(4, 'Tênis esportivo', 'Nike', 'Tênis esportivo masculino, modelo Air Max, tamanho 42, na cor preta', 299.9, 20, '../img/produtos/3.jpg'),
(5, 'Mochila', 'Adidas', 'Mochila escolar unissex, tamanho M, na cor verde', 89.9, 25, '../img/produtos/4.jpg'),
(6, 'Relógio', 'Casio', 'Relógio digital unissex, modelo vintage, na cor prata', 129.9, 5, '../img/produtos/5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cpf`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`cpf`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
