-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Nov-2023 às 01:32
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistema_advogacia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `advogados`
--

CREATE TABLE `advogados` (
  `id` int(11) NOT NULL,
  `nome` varchar(35) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `especialidade` varchar(35) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `advogados`
--

INSERT INTO `advogados` (`id`, `nome`, `cpf`, `telefone`, `email`, `especialidade`, `foto`) VALUES
(1, 'Advoexemplo', '499.801.078-63', '(22) 2 2222-2222', 'advoexemplo@gmail.com', '', ''),
(2, 'Advogado Teste', '123.456.789-12', '(12) 9 9101-5067', 'advogado@gmail.com', 'Civil', ''),
(4, 'Advogado Teste 2', '111.111.111-12', '(55) 1 2991-4569', 'advogado2@gmail.com', 'Civil', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `audiencias`
--

CREATE TABLE `audiencias` (
  `id` int(11) NOT NULL,
  `processo` varchar(35) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `local` varchar(35) NOT NULL,
  `advogado` varchar(20) NOT NULL,
  `cliente` varchar(20) NOT NULL,
  `obs` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `audiencias`
--

INSERT INTO `audiencias` (`id`, `processo`, `descricao`, `data`, `hora`, `local`, `advogado`, `cliente`, `obs`) VALUES
(2, '2341234-23.4134.134.1341', 'Audiencia lá', '2023-11-02', '20:16:00', 'na pqp', '123.456.789-12', '42.342.343/2423-42', ''),
(3, '2341234-23.4134.134.1341', 'Audiencia lá', '2023-11-03', '20:14:00', 'na pqp', '123.456.789-12', '42.342.343/2423-42', ''),
(4, '3255232-52.3525.235.2353', 'a sei lka', '2023-11-04', '20:16:00', 'teu cu', '123.456.789-12', '42.342.343/2423-42', ''),
(5, '3232323-32.3232.322.3232', 'Sua audiência otario', '2023-11-05', '16:00:00', 'Polo de Caçapava-sp', '123.456.789-12', '123.423.432-42', 'top essa é a obs');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargos`
--

CREATE TABLE `cargos` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `cargos`
--

INSERT INTO `cargos` (`id`, `nome`) VALUES
(1, 'Advogado'),
(2, 'Tesoureiro'),
(3, 'Recepcionista');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(35) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `endereco` varchar(70) NOT NULL,
  `advogado` varchar(20) NOT NULL,
  `data` date NOT NULL,
  `obs` varchar(350) NOT NULL,
  `pessoa` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `advogado`, `data`, `obs`, `pessoa`) VALUES
(1, 'ARAGÂO', '111.111.111-22', '(12) 9 9101-5067', 'Aragao@gmail.com', 'wehjwejw', '111.111.111-12', '2023-10-26', 'egashawh', 'Pessoa Física'),
(3, 'CARNIÇOO', '23.412.334/5634-73', '(62) 35235-3522', 'car@gmail.com', '268 Rua Sebastião Humel', '123.456.789-12', '2023-10-26', '268 Rua Sebastião Humel', 'Pessoa Jurídica'),
(5, 'JUBILEUU', '123.423.432-42', '(52) 34523-4234', 'JUB@gmail.com', '423 gerwhdrtkjftsk', '123.456.789-12', '2023-10-30', '423 gerwhdrtkjftsk', 'Pessoa Física'),
(6, 'RODILSON', '42.342.343/2423-42', '(34) 23432-4234', 'gseeg@gmail.com', '26 Avenida Padre José Fortunato da Silva Ramos', '123.456.789-12', '2023-10-30', 'ewgehseh', 'Pessoa Jurídica'),
(7, 'CADILACO', '333.333.333-33', '(82) 74598-1271', 'cad@gmail.com', '23 sehseha', '123.456.789-12', '2023-11-02', 'qwrqws', 'Pessoa Física');

-- --------------------------------------------------------

--
-- Estrutura da tabela `documentos`
--

CREATE TABLE `documentos` (
  `id` int(11) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `data` date NOT NULL,
  `processo` varchar(30) NOT NULL,
  `arquivo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `documentos`
--

INSERT INTO `documentos` (`id`, `descricao`, `data`, `processo`, `arquivo`) VALUES
(1, 'Condição', '2023-11-01', '4124124-24.1241.241.2411', 'Condições Específicas-D9.pdf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `especialidades`
--

CREATE TABLE `especialidades` (
  `id` int(11) NOT NULL,
  `nome` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `especialidades`
--

INSERT INTO `especialidades` (`id`, `nome`) VALUES
(1, 'Civil'),
(2, 'Familiar'),
(3, 'Trabalhista');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(35) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `cargo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id`, `nome`, `cpf`, `telefone`, `email`, `cargo`) VALUES
(3, 'Advogado Teste', '123.456.789-12', '(33) 3 3333-3333', 'advogado@gmail.com', 'Advogado'),
(4, 'Advogado Teste 2', '111.111.111-12', '(55) 1 2991-4569', 'advogado2@gmail.com', 'Advogado'),
(10, 'Recepcionista Teste', '222.222.222-22', '(23) 42234-3242', 'recep@gmail.com', 'Recepcionista'),
(11, 'Tesoureiro teste', '111.111.111-11', '(35) 23523-5235', 'tesou@gmail.com', 'Tesoureiro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico`
--

CREATE TABLE `historico` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `obs` varchar(350) DEFAULT NULL,
  `data` date NOT NULL,
  `processo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `historico`
--

INSERT INTO `historico` (`id`, `titulo`, `obs`, `data`, `processo`) VALUES
(9, 'socorro', 'aooba', '2023-11-01', '3232323-32.3232.322.3232'),
(12, 'a num sei o que ', 'nao sei o que la', '2023-11-01', '4124124-24.1241.241.2411'),
(13, 'agora vai', '', '2023-11-01', '4124124-24.1241.241.2411'),
(14, 'vaiiii', '', '2023-11-01', '4124124-24.1241.241.2411'),
(27, 'Jubileu Jubileu', '', '2023-11-01', '4124124-24.1241.241.2411'),
(28, 'aaa seu danado Jubileu Jubileu', '', '2023-11-01', '4124124-24.1241.241.2411'),
(29, 'aaa seu danado CADILACO', 'danadinho', '2023-11-02', '4235252-35.3523.252.3523'),
(30, 'foi ', '', '2023-11-02', '4235252-35.3523.252.3523'),
(31, 'agora foi', '', '2023-11-02', '4235252-35.3523.252.3523'),
(32, 'vaaiiii', '', '2023-11-02', '4235252-35.3523.252.3523'),
(33, 'meu deus', '', '2023-11-02', '4235252-35.3523.252.3523'),
(34, 'por favor', '', '2023-11-02', '4235252-35.3523.252.3523'),
(35, 'aaaaaaa', '', '2023-11-02', '4235252-35.3523.252.3523'),
(36, 'pelo amor', 'de deus', '2023-11-02', '4235252-35.3523.252.3523'),
(37, 'peltgjkah', '', '2023-11-02', '4235252-35.3523.252.3523'),
(38, 'A já deu ', 'Deu memo', '2023-11-05', '4235252-35.3523.252.3523');

-- --------------------------------------------------------

--
-- Estrutura da tabela `movimentacoes`
--

CREATE TABLE `movimentacoes` (
  `id` int(11) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `movimento` varchar(35) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `tesoureiro` varchar(20) NOT NULL,
  `data` date NOT NULL,
  `id_movimento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `movimentacoes`
--

INSERT INTO `movimentacoes` (`id`, `tipo`, `movimento`, `valor`, `tesoureiro`, `data`, `id_movimento`) VALUES
(6, 'Entrada', 'Processo', 333.00, '222.222.222-22', '2023-11-01', 8),
(7, 'Entrada', 'Processo', 4242.00, '222.222.222-22', '2023-11-01', 9),
(8, 'Entrada', 'Processo', 2354.00, '222.222.222-22', '2023-11-01', 10),
(9, 'Entrada', 'Processo', 3423.00, '222.222.222-22', '2023-11-01', 11),
(10, 'Entrada', 'Processo', 2345.00, '222.222.222-22', '2023-11-01', 12),
(11, 'Saída', 'Pagamento Conta', 230.00, '222.222.222-22', '2023-11-01', 1),
(13, 'Saída', 'Pagamento Conta', 434.00, '222.222.222-22', '2023-11-01', 3),
(14, 'Saída', 'Pagamento Conta', 13000.00, '222.222.222-22', '2023-11-01', 5),
(15, 'Entrada', 'Processo', 323.00, '222.222.222-22', '2023-11-05', 17),
(16, 'Saída', 'Pagamento Conta', 1000.00, '222.222.222-22', '2023-11-05', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamentos`
--

CREATE TABLE `pagamentos` (
  `id` int(11) NOT NULL,
  `funcionario` varchar(20) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `tesoureiro` varchar(20) NOT NULL,
  `data` date NOT NULL,
  `nome_funcionario` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagar`
--

CREATE TABLE `pagar` (
  `id` int(11) NOT NULL,
  `descricao` varchar(30) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `vencimento` date NOT NULL,
  `pagamento` date DEFAULT NULL,
  `pago` varchar(5) NOT NULL,
  `funcionario` varchar(20) NOT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `pagar`
--

INSERT INTO `pagar` (`id`, `descricao`, `valor`, `vencimento`, `pagamento`, `pago`, `funcionario`, `foto`) VALUES
(1, 'Agua', 230.00, '2023-11-02', '2023-11-01', 'Sim', '222.222.222-22', 'sem-foto.png'),
(3, 'Conta de Luz', 434.00, '2023-11-01', '2023-11-01', 'Sim', '222.222.222-22', 'sem-foto.png'),
(4, 'Conta de Agua', 322.00, '2023-11-02', NULL, 'Não', '222.222.222-22', 'sem-foto.png'),
(5, 'negativar', 13000.00, '2023-11-01', '2023-11-01', 'Sim', '222.222.222-22', 'sem-foto.png'),
(6, 'deu o rabo', 1000.00, '2023-11-05', '2023-11-05', 'Sim', '222.222.222-22', 'sem-foto.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `processados`
--

CREATE TABLE `processados` (
  `id` int(11) NOT NULL,
  `nome` varchar(35) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `endereco` varchar(70) NOT NULL,
  `advogado` varchar(20) NOT NULL,
  `data` date NOT NULL,
  `obs` varchar(350) NOT NULL,
  `pessoa` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `processados`
--

INSERT INTO `processados` (`id`, `nome`, `cpf`, `telefone`, `email`, `endereco`, `advogado`, `data`, `obs`, `pessoa`) VALUES
(1, 'CALABRESO', '352.826.850-87', '(46) 3 8234-7975', 'Cala@gmail.com', '26 Praça Comendador Professor Teodoro C. Cintra', '123.456.789-12', '2023-10-26', 'awhguawg hsheshseh', 'Pessoa Física');

-- --------------------------------------------------------

--
-- Estrutura da tabela `processos`
--

CREATE TABLE `processos` (
  `id` int(11) NOT NULL,
  `num_processo` varchar(35) NOT NULL,
  `vara` varchar(35) NOT NULL,
  `tipo_acao` varchar(35) NOT NULL,
  `advogado` varchar(20) NOT NULL,
  `cliente` varchar(20) NOT NULL,
  `processado` varchar(20) DEFAULT NULL,
  `data_audiencia` date NOT NULL,
  `hora_audiencia` time NOT NULL,
  `prazo` int(11) NOT NULL,
  `data_peticao` date NOT NULL,
  `data_abertura` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `pessoa` varchar(20) NOT NULL,
  `audiencias` int(11) NOT NULL,
  `obs` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `processos`
--

INSERT INTO `processos` (`id`, `num_processo`, `vara`, `tipo_acao`, `advogado`, `cliente`, `processado`, `data_audiencia`, `hora_audiencia`, `prazo`, `data_peticao`, `data_abertura`, `status`, `pessoa`, `audiencias`, `obs`) VALUES
(1, '8923589-37.5982.379.8572', '1', '1', '123.456.789-12', '23.412.334/5634-73', '352.826.850-87', '0000-00-00', '00:00:00', 0, '0000-00-00', '2023-10-26', 'Andamento', 'Pessoa Física', 0, ''),
(2, '3255232-52.3525.235.2353', '3', '2', '123.456.789-12', '42.342.343/2423-42', '52.432.352/3523-52', '2023-11-04', '20:16:00', 0, '0000-00-00', '2023-10-30', 'Andamento', 'Pessoa Jurídica', 1, ''),
(3, '3274892-74.8923.734.9872', '4', '3', '123.456.789-12', '23.412.334/5634-73', '63.464.364/3646-46', '0000-00-00', '00:00:00', 0, '2023-11-18', '2023-10-30', 'Aberto', 'Pessoa Jurídica', 0, ''),
(4, '2341234-23.4134.134.1341', '3', '2', '123.456.789-12', '42.342.343/2423-42', '42.141.241/2412-41', '2023-11-03', '20:14:00', 0, '0000-00-00', '2023-11-01', 'Aberto', 'Pessoa Jurídica', 2, 'top top ta dando tudo certo\r\n'),
(5, '3232323-32.3232.322.3232', '3', '3', '123.456.789-12', '123.423.432-42', '233.232.323-22', '2023-11-05', '16:00:00', 0, '0000-00-00', '2023-11-01', 'Andamento', 'Pessoa Física', 1, 'observado'),
(6, '3256245-23.5546.343.6323', '4', '3', '123.456.789-12', '123.423.432-42', '412.124.421-41', '0000-00-00', '00:00:00', 0, '0000-00-00', '2023-11-01', 'Aberto', 'Pessoa Física', 0, ''),
(7, '4124124-24.1241.241.2411', '1', '1', '123.456.789-12', '123.423.432-42', '412.412.412-41', '0000-00-00', '00:00:00', 0, '0000-00-00', '2023-11-01', 'Aberto', 'Pessoa Física', 0, ''),
(8, '4235252-35.3523.252.3523', '2', '2', '123.456.789-12', '333.333.333-33', '32.434.342/3242-34', '0000-00-00', '00:00:00', 0, '0000-00-00', '2023-11-02', 'Aberto', 'Pessoa Jurídica', 0, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `receber`
--

CREATE TABLE `receber` (
  `id` int(11) NOT NULL,
  `descricao` varchar(35) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `advogado` varchar(20) NOT NULL,
  `cliente` varchar(20) NOT NULL,
  `data` date NOT NULL,
  `pago` varchar(5) NOT NULL,
  `processo` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `receber`
--

INSERT INTO `receber` (`id`, `descricao`, `valor`, `advogado`, `cliente`, `data`, `pago`, `processo`) VALUES
(1, 'Dar o rabo', 212112.00, '123.456.789-12', '23.412.334/5634-73', '2023-10-30', 'sim', '3'),
(2, 'Dar o rabo', 300.00, '123.456.789-12', '23.412.334/5634-73', '2023-10-30', 'sim', '3'),
(3, 'Dar o rabo', 3135.00, '123.456.789-12', '42.342.343/2423-42', '2023-11-01', 'sim', '4'),
(4, 'Dar o rabo2', 123.00, '123.456.789-12', '23.412.334/5634-73', '2023-11-01', 'sim', '3'),
(5, '', 1456.00, '123.456.789-12', '42.342.343/2423-42', '2023-11-01', 'sim', '2'),
(6, 'eita lele', 44442.00, '123.456.789-12', '23.412.334/5634-73', '2023-11-01', 'sim', '1'),
(7, 'Dar o rabo 3', 1234.00, '123.456.789-12', '42.342.343/2423-42', '2023-11-01', 'sim', '4'),
(8, 'Teste 1', 333.00, '123.456.789-12', '42.342.343/2423-42', '2023-11-01', 'sim', '4'),
(9, 'Teste 2', 4242.00, '123.456.789-12', '23.412.334/5634-73', '2023-11-01', 'sim', '3'),
(10, 'Teste 3', 2354.00, '123.456.789-12', '42.342.343/2423-42', '2023-11-01', 'sim', '2'),
(11, 'Teste 4', 3423.00, '123.456.789-12', '23.412.334/5634-73', '2023-11-01', 'sim', '1'),
(12, 'Teste 5 ', 2345.00, '123.456.789-12', '42.342.343/2423-42', '2023-11-01', 'sim', '4'),
(13, '', 2332.00, '123.456.789-12', '123.423.432-42', '2023-11-01', 'nao', '5'),
(14, '', 43432.00, '123.456.789-12', '123.423.432-42', '2023-11-01', 'nao', '5'),
(15, '', 25.00, '123.456.789-12', '123.423.432-42', '2023-11-01', 'nao', '5'),
(16, 'Conta de Luz', 242.00, '123.456.789-12', '333.333.333-33', '2023-11-02', 'nao', '8'),
(17, 'Pagar a conta', 323.00, '123.456.789-12', '333.333.333-33', '2023-11-05', 'sim', '8');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tarefas`
--

CREATE TABLE `tarefas` (
  `id` int(11) NOT NULL,
  `nome` varchar(35) NOT NULL,
  `descricao` varchar(150) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `advogado` varchar(35) NOT NULL,
  `status` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `tarefas`
--

INSERT INTO `tarefas` (`id`, `nome`, `descricao`, `data`, `hora`, `advogado`, `status`) VALUES
(5, 'fgl.', 'fgkfgkfk', '2023-10-31', '20:41:00', '123.456.789-12', 'Agendada'),
(6, 'ALOHA', 'fgkfgkfk', '2023-10-26', '23:44:00', '123.456.789-12', 'Agendada'),
(7, 'ndfndf', 'dfjdfj', '2023-10-31', '23:45:00', '123.456.789-12', 'Agendada'),
(8, 'drjdrj', 'djdrjdrj', '2023-10-31', '22:39:00', '123.456.789-12', 'Agendada'),
(9, 'darydaydraydry', 'djdrjdrj', '2023-10-31', '22:41:00', '123.456.789-12', 'Agendada'),
(10, 'dar o rabo', 'Dar o rabo', '2023-12-01', '00:00:00', '123.456.789-12', 'Concluida'),
(11, 'Dar o cu', 'Dar o rabo', '2023-11-05', '00:40:00', '123.456.789-12', 'Agendada');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(35) NOT NULL,
  `cpf` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `senha` varchar(150) NOT NULL,
  `senha_original` varchar(20) NOT NULL,
  `nivel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `cpf`, `email`, `senha`, `senha_original`, `nivel`) VALUES
(1, 'Administrador', '', 'exemplo@gmail.com', '202cb962ac59075b964b07152d234b70', '123', 'admin'),
(4, 'Advogado Teste', '123.456.789-12', 'advogado@gmail.com', '202cb962ac59075b964b07152d234b70', '123', 'Advogado'),
(5, 'Advogado Teste 2', '111.111.111-12', 'advogado2@gmail.com', '202cb962ac59075b964b07152d234b70', '123', 'Advogado'),
(6, 'ARAGÂO', '111.111.111-22', 'Aragao@gmail.com', 'c9a61dca3e2400e0cb13331684f3fe00', '11111111122', 'Cliente'),
(8, 'CARNIÇOO', '23.412.334/5634-73', 'car@gmail.com', '1eda86eb19dacd79fb873b99a4b6a06e', '23412334563473', 'Cliente'),
(14, 'JUBILEUU', '123.423.432-42', 'JUB@gmail.com', '202cb962ac59075b964b07152d234b70', '123', 'Cliente'),
(15, 'RODILSON', '42.342.343/2423-42', 'gseeg@gmail.com', 'e55bee9f4c0fd948abf0f9312a195ac4', '42342343242342', 'Cliente'),
(16, 'Recepcionista Teste', '222.222.222-22', 'recep@gmail.com', '202cb962ac59075b964b07152d234b70', '123', 'Recepcionista'),
(17, 'Tesoureiro teste', '111.111.111-11', 'tesou@gmail.com', 'adbc91a43e988a3b5b745b8529a90b61', '11111111111', 'Tesoureiro'),
(18, 'CADILACO', '333.333.333-33', 'cad@gmail.com', 'd86641a4189b19defacd72ed661d6a88', '33333333333', 'Cliente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `varas`
--

CREATE TABLE `varas` (
  `id` int(11) NOT NULL,
  `nome` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `varas`
--

INSERT INTO `varas` (`id`, `nome`) VALUES
(1, 'Vara 1'),
(2, 'Vara 2'),
(3, 'Vara 3'),
(4, 'Vara 4');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `advogados`
--
ALTER TABLE `advogados`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `audiencias`
--
ALTER TABLE `audiencias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `especialidades`
--
ALTER TABLE `especialidades`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `historico`
--
ALTER TABLE `historico`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `movimentacoes`
--
ALTER TABLE `movimentacoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pagamentos`
--
ALTER TABLE `pagamentos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pagar`
--
ALTER TABLE `pagar`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `processados`
--
ALTER TABLE `processados`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `processos`
--
ALTER TABLE `processos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `receber`
--
ALTER TABLE `receber`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tarefas`
--
ALTER TABLE `tarefas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `varas`
--
ALTER TABLE `varas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `advogados`
--
ALTER TABLE `advogados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `audiencias`
--
ALTER TABLE `audiencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `cargos`
--
ALTER TABLE `cargos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `documentos`
--
ALTER TABLE `documentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `especialidades`
--
ALTER TABLE `especialidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `historico`
--
ALTER TABLE `historico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de tabela `movimentacoes`
--
ALTER TABLE `movimentacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `pagamentos`
--
ALTER TABLE `pagamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `pagar`
--
ALTER TABLE `pagar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `processados`
--
ALTER TABLE `processados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `processos`
--
ALTER TABLE `processos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `receber`
--
ALTER TABLE `receber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `tarefas`
--
ALTER TABLE `tarefas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `varas`
--
ALTER TABLE `varas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
