-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05/01/2024 às 15:37
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `adegairmandade`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblbanner`
--

CREATE TABLE `tblbanner` (
  `idBanner` int(11) NOT NULL,
  `nomeBanner` varchar(50) NOT NULL,
  `altBanner` varchar(50) NOT NULL,
  `fotoBanner` varchar(100) NOT NULL,
  `statusBanner` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblbanner`
--

INSERT INTO `tblbanner` (`idBanner`, `nomeBanner`, `altBanner`, `fotoBanner`, `statusBanner`) VALUES
(1, 'bannerbalde', 'banner/balde', 'src/imagens/bannerbalde.png', 'ATIVO'),
(2, 'bannerdestilado', 'banner/destilado', 'src/imagens/bannerdestilado.png', 'ATIVO');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblcontato`
--

CREATE TABLE `tblcontato` (
  `idContato` int(11) NOT NULL,
  `nomeContato` varchar(50) NOT NULL,
  `emailContato` varchar(80) NOT NULL,
  `telefoneContato` varchar(14) NOT NULL,
  `mensagemContato` text NOT NULL,
  `dataContato` date NOT NULL DEFAULT curdate(),
  `statusContato` varchar(10) NOT NULL DEFAULT 'ATIVO',
  `horaContato` time NOT NULL DEFAULT curtime()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblcontato`
--

INSERT INTO `tblcontato` (`idContato`, `nomeContato`, `emailContato`, `telefoneContato`, `mensagemContato`, `dataContato`, `statusContato`, `horaContato`) VALUES
(2, 'Dimas Aparecido Rabelo de Souza', 'dimas_ap_souza@yahoo.com.br', '11972495017', 'oi', '2023-11-06', 'ATIVO', '21:53:03'),
(3, 'Dimas Aparecido Rabelo de Souza', 'imediato.2022@gmail.com', '11972495017', 'oi', '2023-11-06', 'ATIVO', '21:53:03'),
(4, 'Dimas Aparecido Rabelo de Souza', 'imediato.2022@gmail.com', '11972495017', 'oi', '2023-11-06', 'ATIVO', '21:53:03'),
(5, 'Dimas Aparecido Rabelo de Souza', 'imediato.2022@gmail.com', '11972495017', 'oi', '2023-11-06', 'ATIVO', '21:53:03'),
(6, 'Dimas Aparecido Rabelo de Souza', 'imediato.2022@gmail.com', '11972495017', 'oi', '2023-11-06', 'ATIVO', '21:53:03'),
(7, 'Dimas Aparecido Rabelo de Souza', 'sandramarquesmacedoni@Gmail.com', '11972495017', 'Moh Teste do disparo do email do site da Adega rsrs', '2023-11-06', 'ATIVO', '21:53:03'),
(8, 'Dimas Aparecido Rabelo de Souza', 'sandramarquesmacedoni@gmail.com', '11972495017', 'Mozinhooooooo', '2023-11-06', 'ATIVO', '21:58:24'),
(9, 'Dimas Aparecido Rabelo de Souza', 'sandramarquesmacedoni@gmail.com', '11972495017', 'moh', '2023-11-06', 'ATIVO', '22:07:50'),
(10, 'Dimas Aparecido Rabelo de Souza', 'dimas.rabelosouza@gmail.com', '11972495017', 'didi', '2023-11-06', 'ATIVO', '22:08:33'),
(11, 'Dimas Aparecido Rabelo de Souza', 'dimas.rabelosouza@gmail.com', '11972495017', 'didi', '2023-11-06', 'ATIVO', '22:23:30'),
(12, 'Paula Marques ', 'paulamarques@yahoo.com.br ', '112233-4455 ', 'Olá tudo bem ', '2023-11-11', 'ATIVO ', '12:00:01'),
(13, 'Jose Paulo ', 'josepaulo@outlook.com ', '112345-9898 ', 'Gostaria de fazer uma visita ', '2023-11-02', 'ATIVO ', '16:15:35'),
(14, 'Eduardo Silva ', 'eduardosilva@gmail.com ', '114567-6547 ', 'Qual o Horário de funcionamento ', '2023-11-03', 'ATIVO ', '08:57:21'),
(15, 'Sandra Macedo ', 'sandramacedo@hotmail.com ', '116545-0702 ', 'O ambiente é tranquilo? ', '2023-11-04', 'ATIVO ', '10:00:11'),
(16, 'Lucimar Prado ', 'lucimarprado@gmail.com ', '113534-4532 ', 'Vocês vendem qualquer tipo de essência?', '2023-11-04', 'ATIVO ', '13:15:00'),
(17, 'Augusto Brasileiro ', 'augustobrasileiro@gmail.com ', '127867-2114 ', 'Terá transmissão do jogo do Corinthians? ', '2023-11-05', 'ATIVO ', '17:30:23'),
(18, 'Vanessa Silva ', 'vanessasilva@gmail.com ', '116644-9999 ', 'Posso montar meu Balde com qualquer tipo de cerveja? ', '2023-11-06', 'ATIVO ', '18:23:56'),
(19, 'Ronaldo Baptista ', 'ronaldobaptista@hotmail.com ', '114646-4444 ', 'Vocês vendem Online ou só presencial ', '2023-10-31', 'ATIVO ', '20:01:01'),
(20, 'Kennedy Bryan ', 'kennedybryan@bol.com ', '119955-3388 ', 'Sou representante da Ambev gostaria de Agendar uma visita. ', '2023-10-30', 'ATIVO ', '22:00:37'),
(21, 'Max Pires ', 'maxpires@gmail.com ', '118787-2829 ', 'Seu comércio fica próximo da Academia? ', '2023-10-28', 'ATIVO ', '23:41:38'),
(22, 'Dimas dimasrabelo', 'dimas_ap_souza@yahoo.com.br', '11972495017', 'teste', '2023-12-15', 'ATIVO', '16:44:21');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblestoque`
--

CREATE TABLE `tblestoque` (
  `idEstoque` int(11) NOT NULL,
  `nomeEstoque` varchar(100) NOT NULL,
  `quantidadeEstoque` int(11) NOT NULL,
  `dataCadastroEstoque` date DEFAULT curdate(),
  `dataAtualiEstoque` date DEFAULT curdate(),
  `statusEstoque` varchar(10) NOT NULL,
  `horaEstoque` time DEFAULT curtime(),
  `idProduto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblestoque`
--

INSERT INTO `tblestoque` (`idEstoque`, `nomeEstoque`, `quantidadeEstoque`, `dataCadastroEstoque`, `dataAtualiEstoque`, `statusEstoque`, `horaEstoque`, `idProduto`) VALUES
(3, '', 900, '2023-12-21', '2023-10-01', 'Ativo', '19:01:29', 1),
(4, '', 200, '2023-12-21', '2023-10-05', 'Ativo', '19:01:29', 2),
(5, '', 400, '2023-12-21', '2023-10-17', 'Ativo', '19:01:29', 3),
(6, 'CERVEJAS', 800, '2023-12-21', '2023-10-23', 'ATIVO', '19:01:29', 4),
(7, '', 150, '2023-12-21', '2023-10-12', 'Ativo', '19:01:29', 5),
(8, '', 750, '2023-12-21', '2023-10-01', 'Ativo', '19:01:29', 6),
(9, '', 900, '2023-12-21', '2023-10-02', 'Ativo', '19:01:29', 7),
(10, '', 600, '2023-12-21', '2023-10-18', 'Ativo', '19:01:29', 8),
(11, '', 550, '2023-12-21', '2023-10-31', 'Ativo', '19:01:29', 9),
(12, '', 300, '2023-12-21', '2023-10-22', 'Ativo', '19:01:29', 10),
(13, 'Cervejas', 600, '2023-12-21', '2023-12-21', 'ATIVO', '21:55:04', 5);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblfuncionarios`
--

CREATE TABLE `tblfuncionarios` (
  `idFuncionario` int(11) NOT NULL,
  `nomeFuncionario` varchar(50) NOT NULL,
  `altFuncionario` varchar(50) NOT NULL,
  `cargoFuncionario` varchar(20) NOT NULL,
  `dataNascFuncionario` date NOT NULL,
  `emailFuncionario` varchar(80) NOT NULL,
  `senhaFuncionario` varchar(20) NOT NULL,
  `nivelFuncionario` varchar(15) NOT NULL,
  `dataAdmissaoFuncionario` date NOT NULL,
  `enderecoFuncionario` varchar(50) NOT NULL,
  `telFuncionario` varchar(15) NOT NULL,
  `cepFuncionario` varchar(10) NOT NULL,
  `statusFuncionario` varchar(10) NOT NULL,
  `fotoFuncionario` varchar(100) DEFAULT NULL,
  `linkFaceFuncionario` varchar(150) NOT NULL,
  `linkInstaFuncionario` varchar(150) NOT NULL,
  `linkWhatsFuncionario` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblfuncionarios`
--

INSERT INTO `tblfuncionarios` (`idFuncionario`, `nomeFuncionario`, `altFuncionario`, `cargoFuncionario`, `dataNascFuncionario`, `emailFuncionario`, `senhaFuncionario`, `nivelFuncionario`, `dataAdmissaoFuncionario`, `enderecoFuncionario`, `telFuncionario`, `cepFuncionario`, `statusFuncionario`, `fotoFuncionario`, `linkFaceFuncionario`, `linkInstaFuncionario`, `linkWhatsFuncionario`) VALUES
(1, 'ALAN COELHO BUENO', 'Foto/Funcionario/Gerente', 'GERENTE', '1990-06-16', 'alanloop@gmail.com', '', 'ADMINISTRADOR', '2021-03-02', 'Rua: Antonio Pinto Ferreira Filho,85', '1199878-5676', '08121-005', 'ATIVO', 'funcionario/alan1.png', 'alancoelho/facebook.com', '@alancoelho', '11911226677/whatsapp'),
(2, 'Wagniton Coelho ', 'Foto/Funcionario/Gerente', 'SUPERVISOR', '1991-06-10', 'wagnitoncoelho@gmail.com', 'senha345', 'ADMINISTRADOR', '2021-03-02', 'Rua: Albuquerque freitas-08', '1199777-6666', '08100-005', 'ATIVO', 'funcionario/wagniton.png', 'wagnitoncoelho/facebook.com', '@wagnitoncoelho', '11923457689/whatsapp'),
(4, 'Enzo Gouveia', 'Foto/Funcionario/ATENDENTE', 'AUXILIAR', '1995-05-12', 'enzogouvei@gmail.com', 'senhaABC', 'USUARIO', '2021-03-20', 'Rua: A - 24', '1198965-3232', '08123-010', 'ATIVO', 'funcionario/enzo.png', 'enzogouveia/facebook.com', '@enzogouveia', '11912875600/whatsapp'),
(9, 'Renato Ocela', 'Foto/Funcionario/ajudante', 'AJUDANTE', '1989-05-02', 'renatoocela@gmail.com', 'senha#3F', 'USUARIO', '2021-03-02', 'Rua: Renata Agondi,10', '1199999-5577', '02122-105', 'ATIVO', 'funcionario/renato.png', 'renato/facebook.com', '@renato', '11999995577/whatsapp'),
(10, 'Marlene Rabelo', 'Foto/Funcionario/ajudante', 'AJUDANTE', '1985-12-05', 'marlenerabelo@gmail.com', 'senhaJLM', 'USUARIO', '2021-03-10', 'Rua: Chuva da Montanha,13', '1195889-6161', '09100-006', 'ATIVO', 'funcionario/marlene.png', 'marlenesouza/facebook.com', '@marlenesouza', '11958896161/whatsapp'),
(12, 'Artur Alvim', 'Foto/Funcionario/ajudante', 'AJUDANTE', '1995-05-11', 'arturalvim@gmail.com', 'senha456', 'USUARIO', '2021-03-01', 'Rua: Manoel Tobias,344', '1195012-3408', '03010-330', 'ATIVO', 'funcionario/arturalvim.png', 'arturalvim/facebook.com', '@arturalvim', '11950123408/whatsapp'),
(13, 'Beneobenes Silva', 'Foto/Funcionario/ajudante', 'AJUDANTE', '1987-08-26', 'beneobenes@yahoo.com.br', 'senhaZ12', 'USUARIO', '2023-08-20', 'Rua: Soldado Augusto,345', '1197634-4478', '04500-123', 'ATIVO', 'funcionario/beneodenes.png', 'beneobenes/facebook.com', '@beneobenes', '11976344478/whatsapp'),
(14, 'Ludmila Ribeiro', 'Foto/Funcionario/recepcionista', 'RECEPCIONISTA', '2006-04-14', 'ludmilaribeiro@gmail.com', 'senha980', 'USUARIO', '2021-03-01', 'Rua: Pedro Gil,50', '1191122-8989', '03300-400', 'ATIVO', 'funcionario/ludmila.png', 'ludmilaribeiro/facebook.com', '@ludmilaribeiro', '11911228989/whatsapp'),
(15, 'Emilly Ribeiro', 'Foto/Funcionario/atendente', 'ATENDENTE', '2000-01-31', 'emillyribeiro@gmail.com', 'senhaKML', 'USUARIO', '2023-08-20', 'Rua: Tijuco Preto,45', '1193456-1111', '22331-010', 'ATIVO', 'funcionario/emillyribeiro.png', 'emillyribeiro/facebook.com', '@emilly', '11934561111/whatsapp'),
(16, 'Gorete Milagres', 'Foto/Funcionario/Gerente', 'GERENTE', '1978-06-20', 'gorete@gmail.com', 'senha2023', 'ADMINISTRADOR', '2023-11-19', 'Rua:Coração Paulista', '1199999-6666', '08121-115', 'ATIVO', 'funcionario/gorete.png', 'goretemilagre/facebook.com', '@goretemilagre', '1199999-6666/whatsapp'),
(17, 'FERNANDA MELLO', '', 'Administradora', '1990-05-25', 'fernanda@bol.com', '', 'Usuario', '2023-12-12', 'Rua Diego Sande, 67', '(11) 99999-9999', '08121-005', 'DESATIVADO', 'funcionario/fernanda.png', '', '', ''),
(18, 'joão Alvares', '', 'atendente', '2001-09-15', 'joaolavares@gmail.com', '', 'Usuario', '2023-11-01', 'Rua bacardi, 34', '(11) 99999-0000', '08121-005', 'ATIVO', 'funcionario/joao-guilherme.png', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblgaleria`
--

CREATE TABLE `tblgaleria` (
  `idGaleria` int(11) NOT NULL,
  `nomeGaleria` varchar(50) NOT NULL,
  `altGaleria` varchar(50) NOT NULL,
  `fotoGaleria` varchar(100) NOT NULL,
  `statusGaleria` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblgaleria`
--

INSERT INTO `tblgaleria` (`idGaleria`, `nomeGaleria`, `altGaleria`, `fotoGaleria`, `statusGaleria`) VALUES
(1, 'GALERIA1', 'Imagem galeria1', 'src/imagens/img2/imggaleria1-min.png', 'ATIVO'),
(2, 'GALERIA2', 'Imagem galeria2', 'src/imagens/img2/imggaleria2-min.png', 'ATIVO'),
(3, 'GALERIA3', 'Imagem galeria3', 'src/imagens/img2/imggaleria3-min.png', 'ATIVO'),
(4, 'GALERIA4', 'Imagem galeria4', 'src/imagens/img2/imggaleria4-min.png', 'ATIVO'),
(5, 'GALERIA5', 'Imagem galeria5', 'src/imagens/img2/imggaleria5-min.png', 'ATIVO'),
(6, 'GALERIA6', 'Imagem galeria6', 'src/imagens/img2/imggaleria6-min.png', 'ATIVO'),
(7, 'GALERIA7', 'Imagem galeria7', 'src/imagens/img2/imggaleria7-min.png', 'ATIVO'),
(8, 'GALERIA8', 'Imagem galeria8', 'src/imagens/img2/imggaleria8-min.png', 'ATIVO'),
(9, 'GALERIA9', 'Imagem galeria9', 'src/imagens/img2/imggaleria9-min.png', 'ATIVO');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblitensvendidos`
--

CREATE TABLE `tblitensvendidos` (
  `idItensVendido` int(11) NOT NULL,
  `valorUnitario` double(10,2) NOT NULL,
  `quantidadeVendida` int(11) NOT NULL,
  `idProduto` int(11) NOT NULL,
  `idVenda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblitensvendidos`
--

INSERT INTO `tblitensvendidos` (`idItensVendido`, `valorUnitario`, `quantidadeVendida`, `idProduto`, `idVenda`) VALUES
(1, 3.00, 5, 1, 1),
(2, 5.00, 7, 2, 2),
(4, 80.00, 1, 4, 4),
(9, 4.00, 2, 9, 9),
(14, 5.00, 3, 10, 10);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblprodutos`
--

CREATE TABLE `tblprodutos` (
  `idProduto` int(11) NOT NULL,
  `nomeProduto` varchar(255) NOT NULL,
  `descricaoProduto` varchar(50) NOT NULL,
  `categoriaProduto` varchar(50) NOT NULL,
  `statusProduto` varchar(255) DEFAULT 'Ativo',
  `precoCompraProduto` double(10,2) NOT NULL,
  `precoVendaProduto` double(10,2) NOT NULL,
  `fornecedorProduto` varchar(20) NOT NULL,
  `dataReceProduto` date DEFAULT curdate(),
  `horaProduto` time DEFAULT curtime()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblprodutos`
--

INSERT INTO `tblprodutos` (`idProduto`, `nomeProduto`, `descricaoProduto`, `categoriaProduto`, `statusProduto`, `precoCompraProduto`, `precoVendaProduto`, `fornecedorProduto`, `dataReceProduto`, `horaProduto`) VALUES
(1, 'Original269ml', 'Cervejas', 'ALCOOLICO', '', 4.00, 3.00, 'Assaí', '2023-10-31', '18:06:40'),
(2, 'Gatorade500ml', 'Bebidas isotônicas ', 'Não Alcoólico', 'Ativo', 1.50, 3.00, 'Assaí', '2023-10-31', '18:06:40'),
(3, 'RedLabel1LT', 'Bebidas Destilada', 'Alcoólico', 'Ativo', 50.00, 80.00, 'Assaí', '2023-10-31', '18:06:40'),
(4, 'CocaCola2LT', 'Refrigerantes', 'Não Alcoólico', 'DESATIVADO', 5.00, 10.00, 'Assaí', '2023-10-31', '18:06:40'),
(5, 'Spaten269ml', 'Cervejas', 'Alcoólico', 'Ativo', 2.00, 3.00, 'Assaí', '2023-10-31', '18:06:40'),
(6, 'WhiteHorse1LT', 'Bebidas Destilada', 'Alcoólico', 'Ativo', 45.00, 70.00, 'Assaí', '2023-10-20', '18:06:40'),
(7, 'CarvãodeCocoZomo', 'Narguilé', 'Tabacaria', 'Ativo', 4.00, 6.00, 'Assaí', '2023-10-21', '18:06:40'),
(8, 'Amstel269ml', 'Cervejas', 'Alcoólico', 'Ativo', 2.00, 3.00, 'Assaí', '2023-10-25', '18:06:40'),
(9, 'fanta350ml', 'Refrigerantes', 'Não Alcoólico', 'DESATIVADO', 2.50, 4.00, 'Assaí', '2023-10-28', '18:06:40'),
(10, 'h2o500ml', 'Refrigerantes', 'Não Alcoólico', 'Ativo', 1.50, 3.00, 'Assaí', '2023-10-15', '18:06:40'),
(11, 'Jack Daniels', 'Whysky', 'ALCOOLICO', 'ATIVO', 80.00, 120.00, 'Assaí', '2023-12-21', '18:50:46');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblusuarios`
--

CREATE TABLE `tblusuarios` (
  `idUsuario` int(11) NOT NULL,
  `nomeUsuario` varchar(100) DEFAULT NULL,
  `emailUsuario` varchar(100) DEFAULT NULL,
  `senhaUsuario` varchar(255) DEFAULT NULL,
  `fotoUsuario` varchar(255) DEFAULT NULL,
  `statusUsuario` varchar(10) NOT NULL DEFAULT 'ATIVO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblusuarios`
--

INSERT INTO `tblusuarios` (`idUsuario`, `nomeUsuario`, `emailUsuario`, `senhaUsuario`, `fotoUsuario`, `statusUsuario`) VALUES
(1, 'Dimas Aparecido Rabelo de Souza', 'dimas.rabelo@gmail.com', 'senha123', 'Usuario/dimocas.png', 'ATIVO'),
(2, 'Sandra Macedo', 'sandra.marques@gmail.com', 'senha456', 'Usuario/sandra.png', 'ATIVO'),
(3, 'Nicole Cutri', 'nicole.cutri@gmail.com', 'senha789', 'Usuario/nicole.png', 'ATIVO');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tblvendas`
--

CREATE TABLE `tblvendas` (
  `idVenda` int(11) NOT NULL,
  `dataVenda` date DEFAULT curdate(),
  `horaVenda` time NOT NULL,
  `statusVenda` varchar(10) DEFAULT NULL,
  `valorTotalVenda` double(10,2) NOT NULL,
  `idFuncionario` int(11) NOT NULL,
  `idProduto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tblvendas`
--

INSERT INTO `tblvendas` (`idVenda`, `dataVenda`, `horaVenda`, `statusVenda`, `valorTotalVenda`, `idFuncionario`, `idProduto`) VALUES
(1, '2023-11-01', '05:00:55', 'ATIVO', 15.00, 1, 1),
(2, '2023-11-01', '05:00:55', 'ATIVO', 80.00, 2, 2),
(4, '2023-11-03', '05:00:55', 'ATIVO', 120.00, 4, 4),
(9, '2023-11-05', '05:00:55', 'ATIVO', 70.00, 9, 9),
(10, '2023-11-06', '05:00:55', 'DESATIVADO', 24.00, 10, 10);

-- --------------------------------------------------------

--
-- Estrutura stand-in para view `vwprodutos`
-- (Veja abaixo para a visão atual)
--
CREATE TABLE `vwprodutos` (
`nomeProduto` varchar(255)
,`precoVendaProduto` double(10,2)
,`precoCompraProduto` double(10,2)
);

-- --------------------------------------------------------

--
-- Estrutura stand-in para view `vw_vendas_info`
-- (Veja abaixo para a visão atual)
--
CREATE TABLE `vw_vendas_info` (
`idVenda` int(11)
,`Hora da Venda` time
,`Data da Venda` date
,`Valor Total da Venda` double(10,2)
,`Nome do Produto` varchar(255)
,`Nome do Funcionário` varchar(50)
);

-- --------------------------------------------------------

--
-- Estrutura para view `vwprodutos`
--
DROP TABLE IF EXISTS `vwprodutos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vwprodutos`  AS SELECT `tblprodutos`.`nomeProduto` AS `nomeProduto`, `tblprodutos`.`precoVendaProduto` AS `precoVendaProduto`, `tblprodutos`.`precoCompraProduto` AS `precoCompraProduto` FROM `tblprodutos` ;

-- --------------------------------------------------------

--
-- Estrutura para view `vw_vendas_info`
--
DROP TABLE IF EXISTS `vw_vendas_info`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_vendas_info`  AS SELECT `v`.`idVenda` AS `idVenda`, `v`.`horaVenda` AS `Hora da Venda`, `v`.`dataVenda` AS `Data da Venda`, `v`.`valorTotalVenda` AS `Valor Total da Venda`, `p`.`nomeProduto` AS `Nome do Produto`, `f`.`nomeFuncionario` AS `Nome do Funcionário` FROM ((`tblvendas` `v` join `tblprodutos` `p` on(`v`.`idProduto` = `p`.`idProduto`)) join `tblfuncionarios` `f` on(`v`.`idFuncionario` = `f`.`idFuncionario`)) ;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tblbanner`
--
ALTER TABLE `tblbanner`
  ADD PRIMARY KEY (`idBanner`);

--
-- Índices de tabela `tblcontato`
--
ALTER TABLE `tblcontato`
  ADD PRIMARY KEY (`idContato`);

--
-- Índices de tabela `tblestoque`
--
ALTER TABLE `tblestoque`
  ADD PRIMARY KEY (`idEstoque`),
  ADD KEY `estoqueProduto` (`idProduto`);

--
-- Índices de tabela `tblfuncionarios`
--
ALTER TABLE `tblfuncionarios`
  ADD PRIMARY KEY (`idFuncionario`);

--
-- Índices de tabela `tblgaleria`
--
ALTER TABLE `tblgaleria`
  ADD PRIMARY KEY (`idGaleria`);

--
-- Índices de tabela `tblitensvendidos`
--
ALTER TABLE `tblitensvendidos`
  ADD PRIMARY KEY (`idItensVendido`),
  ADD KEY `vendidosProdutos` (`idProduto`),
  ADD KEY `vendidosVendas` (`idVenda`);

--
-- Índices de tabela `tblprodutos`
--
ALTER TABLE `tblprodutos`
  ADD PRIMARY KEY (`idProduto`);

--
-- Índices de tabela `tblusuarios`
--
ALTER TABLE `tblusuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `emailUsuario` (`emailUsuario`);

--
-- Índices de tabela `tblvendas`
--
ALTER TABLE `tblvendas`
  ADD PRIMARY KEY (`idVenda`),
  ADD KEY `vendasFuncionario` (`idFuncionario`),
  ADD KEY `vendasProduto` (`idProduto`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tblbanner`
--
ALTER TABLE `tblbanner`
  MODIFY `idBanner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tblcontato`
--
ALTER TABLE `tblcontato`
  MODIFY `idContato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `tblestoque`
--
ALTER TABLE `tblestoque`
  MODIFY `idEstoque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `tblfuncionarios`
--
ALTER TABLE `tblfuncionarios`
  MODIFY `idFuncionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `tblgaleria`
--
ALTER TABLE `tblgaleria`
  MODIFY `idGaleria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `tblitensvendidos`
--
ALTER TABLE `tblitensvendidos`
  MODIFY `idItensVendido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `tblprodutos`
--
ALTER TABLE `tblprodutos`
  MODIFY `idProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `tblusuarios`
--
ALTER TABLE `tblusuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tblvendas`
--
ALTER TABLE `tblvendas`
  MODIFY `idVenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tblestoque`
--
ALTER TABLE `tblestoque`
  ADD CONSTRAINT `estoqueProduto` FOREIGN KEY (`idProduto`) REFERENCES `tblprodutos` (`idProduto`);

--
-- Restrições para tabelas `tblitensvendidos`
--
ALTER TABLE `tblitensvendidos`
  ADD CONSTRAINT `vendidosProdutos` FOREIGN KEY (`idProduto`) REFERENCES `tblprodutos` (`idProduto`),
  ADD CONSTRAINT `vendidosVendas` FOREIGN KEY (`idVenda`) REFERENCES `tblvendas` (`idVenda`);

--
-- Restrições para tabelas `tblvendas`
--
ALTER TABLE `tblvendas`
  ADD CONSTRAINT `vendasFuncionario` FOREIGN KEY (`idFuncionario`) REFERENCES `tblfuncionarios` (`idFuncionario`),
  ADD CONSTRAINT `vendasProduto` FOREIGN KEY (`idProduto`) REFERENCES `tblprodutos` (`idProduto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
