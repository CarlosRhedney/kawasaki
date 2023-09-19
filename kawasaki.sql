-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Set-2023 às 10:13
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `kawasaki`
--

DELIMITER $$
--
-- Procedimentos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_itens_save` (`piditem` INT(11), `pitem` VARCHAR(64), `pcodigo` VARCHAR(64), `pdescricao` VARCHAR(64), `ppreco` DECIMAL(10,2))   BEGIN
    
    IF piditem > 0 THEN
        
        UPDATE tb_itens
        SET 
            item = pitem,
            codigo = pcodigo,
            descricao = pdescricao,
            preco = ppreco
            
        WHERE iditem = piditem;
        
    ELSE
        
        INSERT INTO tb_itens (item, codigo, descricao, preco) 
        VALUES(pitem, pcodigo, pdescricao, ppreco);
        
        SET piditem = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * FROM tb_itens WHERE iditem = piditem;
    
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_itens`
--

CREATE TABLE `tb_itens` (
  `iditem` int(11) NOT NULL,
  `item` varchar(64) NOT NULL,
  `codigo` varchar(64) NOT NULL,
  `descricao` varchar(64) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `dtregister` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_itens`
--

INSERT INTO `tb_itens` (`iditem`, `item`, `codigo`, `descricao`, `preco`, `dtregister`) VALUES
(1, 'Produto', '02p734321', 'Produto', '200.00', '2023-09-19 07:20:58');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_itens`
--
ALTER TABLE `tb_itens`
  ADD PRIMARY KEY (`iditem`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_itens`
--
ALTER TABLE `tb_itens`
  MODIFY `iditem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
