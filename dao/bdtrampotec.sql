-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Nov-2023 às 05:13
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdtrampotec`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_admin`
--

CREATE TABLE `tb_admin` (
  `idAdmin` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(15) NOT NULL,
  `imagem` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_admin`
--

INSERT INTO `tb_admin` (`idAdmin`, `nome`, `email`, `senha`, `imagem`) VALUES
(9, 'admin', 'admin@teste.com', '123', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_aluno`
--

CREATE TABLE `tb_aluno` (
  `idAluno` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(15) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `cpf` char(11) NOT NULL,
  `dtNasc` varchar(10) NOT NULL,
  `logradouro` varchar(80) NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` varchar(20) NOT NULL,
  `bairro` varchar(40) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `cidade` varchar(40) NOT NULL,
  `cep` char(8) NOT NULL,
  `imagem` varchar(40) DEFAULT NULL,
  `curriculo` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_aluno`
--

INSERT INTO `tb_aluno` (`idAluno`, `email`, `senha`, `nome`, `cpf`, `dtNasc`, `logradouro`, `numero`, `complemento`, `bairro`, `estado`, `cidade`, `cep`, `imagem`, `curriculo`) VALUES
(7, 'laysamelmudes@gmail.com', '123', 'LAYSA COCA MELMUDES', '475.158.398', '0000-00-00', 'Rua Antonio Soares Pais', 271, 'A-31', 'Vila Santa Teresinha', 'SP', 'São Paulo', '08247-09', 'ec71fadf9084fd41f62aaaeeca933bcd.png', 1),
(8, 'lisa@gmail.com', '123', 'lisa', '264.007.440', '06052005', 'rua estevam', 134, 'muro rosa\'', 'xv de novembro ', 'sao paulo', 'sao paulo', '08246080', NULL, 1),
(9, 'johny@etec.sp.gov.br', '123', 'johny', '26645221835', '06052005', 'dadadadsad', 423, 'dsada', 'xv de novembro ', 'sao paulo', 'sao paulo', '08246080', NULL, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_aluno_curso`
--

CREATE TABLE `tb_aluno_curso` (
  `fk_idAluno` int(11) NOT NULL,
  `fk_idCurso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_aluno_curso`
--

INSERT INTO `tb_aluno_curso` (`fk_idAluno`, `fk_idCurso`) VALUES
(9, 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_aluno_etec`
--

CREATE TABLE `tb_aluno_etec` (
  `fk_idEtec` int(11) NOT NULL,
  `fk_idAluno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_aluno_etec`
--

INSERT INTO `tb_aluno_etec` (`fk_idEtec`, `fk_idAluno`) VALUES
(41, 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_conhecimento`
--

CREATE TABLE `tb_conhecimento` (
  `idConhecimento` int(11) NOT NULL,
  `conhecimento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_conhecimento`
--

INSERT INTO `tb_conhecimento` (`idConhecimento`, `conhecimento`) VALUES
(2, 'Php'),
(3, 'Php'),
(4, 'EWR'),
(5, 'Php'),
(6, 'Php'),
(7, 'Php');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_conhecimento_aluno`
--

CREATE TABLE `tb_conhecimento_aluno` (
  `fk_idConhecimento` int(11) NOT NULL,
  `fk_idAluno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_conhecimento_aluno`
--

INSERT INTO `tb_conhecimento_aluno` (`fk_idConhecimento`, `fk_idAluno`) VALUES
(2, 7),
(3, 8),
(4, 7),
(5, 8),
(6, 8),
(7, 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_curso`
--

CREATE TABLE `tb_curso` (
  `idCurso` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `cargaHoraria` int(4) NOT NULL,
  `semestre` int(1) NOT NULL,
  `modalidade` varchar(10) NOT NULL,
  `ensino` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_curso`
--

INSERT INTO `tb_curso` (`idCurso`, `nome`, `cargaHoraria`, `semestre`, `modalidade`, `ensino`) VALUES
(11, 'Luca', 1200, 1, 'Presencial', 'Ensino Medio Integrado ao Tecnico em Periodo Noturno(M-TEC-N)'),
(12, 'admaafgdf', 1200, 1, 'Presencial', 'Ensino Medio Integrado ao Tecnico em Periodo Integral(M-TEC-Pi)'),
(13, 'dadsa', 800, 2, 'Presencial', 'Ensino Medio Integrado ao Tecnico(M-TEC)');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_curso_etec`
--

CREATE TABLE `tb_curso_etec` (
  `fk_idCurso` int(11) NOT NULL,
  `fk_idEtec` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_curso_etec`
--

INSERT INTO `tb_curso_etec` (`fk_idCurso`, `fk_idEtec`) VALUES
(13, 40),
(11, 41),
(12, 41);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_eixo`
--

CREATE TABLE `tb_eixo` (
  `idEixo` int(11) NOT NULL,
  `eixo` varchar(60) NOT NULL,
  `fk_idCurso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_eixo`
--

INSERT INTO `tb_eixo` (`idEixo`, `eixo`, `fk_idCurso`) VALUES
(13, 'Tecnologia e Informação', 11),
(14, 'Comida e Dieta', 12),
(15, 'dsads', 13);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_empresa`
--

CREATE TABLE `tb_empresa` (
  `idEmpresa` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(15) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `departamento` varchar(50) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `anoFundacao` int(4) NOT NULL,
  `cnpj` char(18) NOT NULL,
  `cep` char(8) NOT NULL,
  `logradouro` varchar(50) NOT NULL,
  `numero` int(11) NOT NULL,
  `bairro` varchar(60) NOT NULL,
  `estado` varchar(25) NOT NULL,
  `imagem` varchar(40) DEFAULT NULL,
  `aprovado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_empresa`
--

INSERT INTO `tb_empresa` (`idEmpresa`, `email`, `senha`, `nome`, `departamento`, `descricao`, `anoFundacao`, `cnpj`, `cep`, `logradouro`, `numero`, `bairro`, `estado`, `imagem`, `aprovado`) VALUES
(14, 'laysamelmudes@gmail.com', '123', 'Empresa boa', '', '', 0, '85.656.164/0001-24', '08247-09', 'Rua Nossa Senhora das Candeias', 123, 'Vila Santa Teresinha', 'SP', 'ab5cd8aa072b4848b8b257bf73157bde.png', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_etec`
--

CREATE TABLE `tb_etec` (
  `idEtec` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `email` char(22) NOT NULL,
  `codigo` int(11) NOT NULL,
  `municipio` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_etec`
--

INSERT INTO `tb_etec` (`idEtec`, `nome`, `email`, `codigo`, `municipio`) VALUES
(32, 'Etec lindasdsa', 'etec@lindaDADA', 4234454, 'Birigui'),
(34, 'itaquera', 'itaquera@aa', 534, 'Bebedouro'),
(36, 'sada', 'dsada@da', 4243, 'Caçapava'),
(38, 'dadasdad', 'dadadfafds@da', 453, 'Barra Bonita'),
(39, 'Itaqua', 'itaqua@itaqua.com', 357, 'Bauru'),
(40, 'Etec cagao', 'cagao@.com', 456, 'Botucatu'),
(41, 'cdcasda', 'casca@vsv', 757, 'Cachoeira Paulista');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_experiencia_aluno`
--

CREATE TABLE `tb_experiencia_aluno` (
  `idExperiaciaAluno` int(11) NOT NULL,
  `nome` varchar(300) NOT NULL,
  `fk_idAluno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_fale_conosco`
--

CREATE TABLE `tb_fale_conosco` (
  `idFaleConosco` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `email` varchar(40) NOT NULL,
  `categoria` varchar(20) NOT NULL,
  `comentario` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_habilidade`
--

CREATE TABLE `tb_habilidade` (
  `idHabilidade` int(11) NOT NULL,
  `habilidade` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_habilidade`
--

INSERT INTO `tb_habilidade` (`idHabilidade`, `habilidade`) VALUES
(1, 'Comunicação'),
(2, 'Inteligência Emocional'),
(3, 'Empatia'),
(4, 'Trabalho em Equipe'),
(5, 'Pensamento Crítico'),
(6, 'Resolução de Conflitos'),
(7, 'Adaptabilidade'),
(8, 'Criatividade'),
(9, 'Resiliência'),
(10, 'Autoconfiança'),
(11, 'Gerenciamento do Tempo'),
(12, 'Pensamento Analítico'),
(13, 'Autocontrole'),
(14, 'Tolerância'),
(15, 'Organização');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_habilidade_aluno`
--

CREATE TABLE `tb_habilidade_aluno` (
  `fk_idAluno` int(11) NOT NULL,
  `fk_idHabilidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_habilidade_aluno`
--

INSERT INTO `tb_habilidade_aluno` (`fk_idAluno`, `fk_idHabilidade`) VALUES
(7, 4),
(7, 1),
(7, 4),
(7, 1),
(8, 4),
(8, 1),
(7, 4),
(7, 1),
(8, 4),
(8, 1),
(8, 4),
(8, 1),
(9, 4),
(9, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_horario_aluno`
--

CREATE TABLE `tb_horario_aluno` (
  `idHorarioAluno` int(11) NOT NULL,
  `inicio` varchar(10) NOT NULL,
  `termino` varchar(10) NOT NULL,
  `fk_idAluno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_idioma_aluno`
--

CREATE TABLE `tb_idioma_aluno` (
  `idIdiomaAluno` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `nivel` varchar(20) NOT NULL,
  `fk_idAluno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_idioma_aluno`
--

INSERT INTO `tb_idioma_aluno` (`idIdiomaAluno`, `nome`, `nivel`, `fk_idAluno`) VALUES
(19, 'espanhol', 'intermediario', 8),
(21, 'outro', 'intermediario', 8),
(22, 'ingles', 'iniciante', 8),
(23, 'frances', 'intermediario', 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_perfil_aluno`
--

CREATE TABLE `tb_perfil_aluno` (
  `idPerfilAluno` int(11) NOT NULL,
  `semestre` int(11) NOT NULL,
  `periodo` char(10) NOT NULL,
  `duracaoCurso` varchar(30) NOT NULL,
  `conclusao` varchar(50) NOT NULL,
  `fk_idAluno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_perfil_aluno`
--

INSERT INTO `tb_perfil_aluno` (`idPerfilAluno`, `semestre`, `periodo`, `duracaoCurso`, `conclusao`, `fk_idAluno`) VALUES
(1, 2, 'matutino', 'OI', '2023-10-01', 7),
(2, 2, 'noturno', 'OI', '2023-10-08', 7),
(3, 2, 'matutino', 'OI', '2023-10-19', 7),
(4, 5, 'Noturno', '800 horas', '2023-10-01', 7),
(5, 0, '', '', '2023-10-15', 7),
(6, 0, '', '', '2023-10-11', 7),
(7, 3, '', '43242', '3423-02-04', 7),
(8, 3, '', '5345435', '4534-03-05', 7),
(9, 3, '', '453534', '5645-04-06', 7),
(10, 3, '', '424', '0432-02-04', 8),
(11, 4, '', '4534534', '4543-03-05', 7),
(12, 3, '', '432423', '43242-02-04', 8),
(13, 3, '', '4234324', '243242-03-04', 8),
(14, 3, '', '433453', '4534-03-05', 8),
(15, 4, '', '42432', '24324-03-04', 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_requisito`
--

CREATE TABLE `tb_requisito` (
  `idRequisito` int(11) NOT NULL,
  `requisito` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_requisito`
--

INSERT INTO `tb_requisito` (`idRequisito`, `requisito`) VALUES
(1, 'php'),
(2, 'cozinha'),
(3, 'fazer nada'),
(4, 'rede'),
(5, 'fio'),
(6, 'assu'),
(7, 'Php'),
(8, 'Java'),
(9, 'Php'),
(10, 'Html'),
(11, 'SEI LA'),
(12, 'SEI LA2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_requisito_vaga`
--

CREATE TABLE `tb_requisito_vaga` (
  `fk_idVaga` int(11) NOT NULL,
  `fk_idRequisito` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_sobre_mim`
--

CREATE TABLE `tb_sobre_mim` (
  `idSobreMim` int(11) NOT NULL,
  `informacao` varchar(500) NOT NULL,
  `fk_idAluno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_telefone_aluno`
--

CREATE TABLE `tb_telefone_aluno` (
  `idTelefoneAluno` int(11) NOT NULL,
  `telefoneAluno` char(16) NOT NULL,
  `fk_idAluno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_telefone_aluno`
--

INSERT INTO `tb_telefone_aluno` (`idTelefoneAluno`, `telefoneAluno`, `fk_idAluno`) VALUES
(6, '(11) 94489-3333', 7),
(7, '119593289', 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_telefone_empresa`
--

CREATE TABLE `tb_telefone_empresa` (
  `idTelefoneEmpresa` int(11) NOT NULL,
  `numeroTelefone` char(16) NOT NULL,
  `fk_idEmpresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_telefone_empresa`
--

INSERT INTO `tb_telefone_empresa` (`idTelefoneEmpresa`, `numeroTelefone`, `fk_idEmpresa`) VALUES
(9, '(11) 94489-032', 14);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_telefone_etec`
--

CREATE TABLE `tb_telefone_etec` (
  `idTelefoneEtec` int(11) NOT NULL,
  `telefoneEtec` char(16) NOT NULL,
  `fk_idEtec` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_vaga`
--

CREATE TABLE `tb_vaga` (
  `idVaga` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `cidade` varchar(40) NOT NULL,
  `bairro` varchar(40) NOT NULL,
  `modalidade` varchar(30) NOT NULL,
  `salario` double(10,2) NOT NULL,
  `descricao` char(100) NOT NULL,
  `inicio` varchar(6) NOT NULL,
  `termino` varchar(6) NOT NULL,
  `periodo` varchar(30) NOT NULL,
  `area` varchar(50) NOT NULL,
  `escala` varchar(10) NOT NULL,
  `fk_idEmpresa` int(11) NOT NULL,
  `fk_idCurso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_vaga_aluno`
--

CREATE TABLE `tb_vaga_aluno` (
  `fk_idAluno` int(11) NOT NULL,
  `fk_idVaga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Índices para tabela `tb_aluno`
--
ALTER TABLE `tb_aluno`
  ADD PRIMARY KEY (`idAluno`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices para tabela `tb_aluno_curso`
--
ALTER TABLE `tb_aluno_curso`
  ADD KEY `fk_idAluno` (`fk_idAluno`),
  ADD KEY `fk_idCurso` (`fk_idCurso`);

--
-- Índices para tabela `tb_aluno_etec`
--
ALTER TABLE `tb_aluno_etec`
  ADD KEY `fk_idEtec` (`fk_idEtec`),
  ADD KEY `fk_idAluno` (`fk_idAluno`);

--
-- Índices para tabela `tb_conhecimento`
--
ALTER TABLE `tb_conhecimento`
  ADD PRIMARY KEY (`idConhecimento`);

--
-- Índices para tabela `tb_conhecimento_aluno`
--
ALTER TABLE `tb_conhecimento_aluno`
  ADD KEY `fk_idAluno` (`fk_idAluno`),
  ADD KEY `fk_idConhecimento` (`fk_idConhecimento`);

--
-- Índices para tabela `tb_curso`
--
ALTER TABLE `tb_curso`
  ADD PRIMARY KEY (`idCurso`);

--
-- Índices para tabela `tb_curso_etec`
--
ALTER TABLE `tb_curso_etec`
  ADD KEY `fk_idCurso` (`fk_idCurso`),
  ADD KEY `fk_idEtec` (`fk_idEtec`);

--
-- Índices para tabela `tb_eixo`
--
ALTER TABLE `tb_eixo`
  ADD PRIMARY KEY (`idEixo`),
  ADD KEY `fk_idCurso` (`fk_idCurso`);

--
-- Índices para tabela `tb_empresa`
--
ALTER TABLE `tb_empresa`
  ADD PRIMARY KEY (`idEmpresa`),
  ADD UNIQUE KEY `cnpj` (`cnpj`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices para tabela `tb_etec`
--
ALTER TABLE `tb_etec`
  ADD PRIMARY KEY (`idEtec`),
  ADD UNIQUE KEY `codigo` (`codigo`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices para tabela `tb_experiencia_aluno`
--
ALTER TABLE `tb_experiencia_aluno`
  ADD PRIMARY KEY (`idExperiaciaAluno`),
  ADD KEY `fk_idAluno` (`fk_idAluno`);

--
-- Índices para tabela `tb_fale_conosco`
--
ALTER TABLE `tb_fale_conosco`
  ADD PRIMARY KEY (`idFaleConosco`);

--
-- Índices para tabela `tb_habilidade`
--
ALTER TABLE `tb_habilidade`
  ADD PRIMARY KEY (`idHabilidade`);

--
-- Índices para tabela `tb_habilidade_aluno`
--
ALTER TABLE `tb_habilidade_aluno`
  ADD KEY `fk_idAluno` (`fk_idAluno`),
  ADD KEY `fk_idHabilidade` (`fk_idHabilidade`);

--
-- Índices para tabela `tb_horario_aluno`
--
ALTER TABLE `tb_horario_aluno`
  ADD PRIMARY KEY (`idHorarioAluno`),
  ADD KEY `fk_idAluno` (`fk_idAluno`);

--
-- Índices para tabela `tb_idioma_aluno`
--
ALTER TABLE `tb_idioma_aluno`
  ADD PRIMARY KEY (`idIdiomaAluno`),
  ADD KEY `fk_idAluno` (`fk_idAluno`);

--
-- Índices para tabela `tb_perfil_aluno`
--
ALTER TABLE `tb_perfil_aluno`
  ADD PRIMARY KEY (`idPerfilAluno`),
  ADD KEY `fk_idAluno` (`fk_idAluno`);

--
-- Índices para tabela `tb_requisito`
--
ALTER TABLE `tb_requisito`
  ADD PRIMARY KEY (`idRequisito`);

--
-- Índices para tabela `tb_requisito_vaga`
--
ALTER TABLE `tb_requisito_vaga`
  ADD KEY `fk_idRequisito` (`fk_idRequisito`),
  ADD KEY `fk_idVaga` (`fk_idVaga`);

--
-- Índices para tabela `tb_sobre_mim`
--
ALTER TABLE `tb_sobre_mim`
  ADD PRIMARY KEY (`idSobreMim`),
  ADD KEY `fk_idAluno` (`fk_idAluno`);

--
-- Índices para tabela `tb_telefone_aluno`
--
ALTER TABLE `tb_telefone_aluno`
  ADD PRIMARY KEY (`idTelefoneAluno`),
  ADD UNIQUE KEY `telefoneAluno` (`telefoneAluno`),
  ADD KEY `fk_idAluno` (`fk_idAluno`);

--
-- Índices para tabela `tb_telefone_empresa`
--
ALTER TABLE `tb_telefone_empresa`
  ADD PRIMARY KEY (`idTelefoneEmpresa`),
  ADD UNIQUE KEY `numeroTelefone` (`numeroTelefone`),
  ADD KEY `fk_idEmpresa` (`fk_idEmpresa`);

--
-- Índices para tabela `tb_telefone_etec`
--
ALTER TABLE `tb_telefone_etec`
  ADD PRIMARY KEY (`idTelefoneEtec`),
  ADD UNIQUE KEY `telefoneEtec` (`telefoneEtec`),
  ADD KEY `fk_idEtec` (`fk_idEtec`);

--
-- Índices para tabela `tb_vaga`
--
ALTER TABLE `tb_vaga`
  ADD PRIMARY KEY (`idVaga`),
  ADD KEY `fk_idEmpresa` (`fk_idEmpresa`),
  ADD KEY `fk_idCurso` (`fk_idCurso`);

--
-- Índices para tabela `tb_vaga_aluno`
--
ALTER TABLE `tb_vaga_aluno`
  ADD KEY `fk_idAluno` (`fk_idAluno`),
  ADD KEY `fk_idVaga` (`fk_idVaga`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `tb_aluno`
--
ALTER TABLE `tb_aluno`
  MODIFY `idAluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `tb_conhecimento`
--
ALTER TABLE `tb_conhecimento`
  MODIFY `idConhecimento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tb_curso`
--
ALTER TABLE `tb_curso`
  MODIFY `idCurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `tb_eixo`
--
ALTER TABLE `tb_eixo`
  MODIFY `idEixo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `tb_empresa`
--
ALTER TABLE `tb_empresa`
  MODIFY `idEmpresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `tb_etec`
--
ALTER TABLE `tb_etec`
  MODIFY `idEtec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de tabela `tb_experiencia_aluno`
--
ALTER TABLE `tb_experiencia_aluno`
  MODIFY `idExperiaciaAluno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_fale_conosco`
--
ALTER TABLE `tb_fale_conosco`
  MODIFY `idFaleConosco` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_habilidade`
--
ALTER TABLE `tb_habilidade`
  MODIFY `idHabilidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `tb_horario_aluno`
--
ALTER TABLE `tb_horario_aluno`
  MODIFY `idHorarioAluno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_idioma_aluno`
--
ALTER TABLE `tb_idioma_aluno`
  MODIFY `idIdiomaAluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `tb_perfil_aluno`
--
ALTER TABLE `tb_perfil_aluno`
  MODIFY `idPerfilAluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `tb_requisito`
--
ALTER TABLE `tb_requisito`
  MODIFY `idRequisito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `tb_sobre_mim`
--
ALTER TABLE `tb_sobre_mim`
  MODIFY `idSobreMim` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_telefone_aluno`
--
ALTER TABLE `tb_telefone_aluno`
  MODIFY `idTelefoneAluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tb_telefone_empresa`
--
ALTER TABLE `tb_telefone_empresa`
  MODIFY `idTelefoneEmpresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `tb_telefone_etec`
--
ALTER TABLE `tb_telefone_etec`
  MODIFY `idTelefoneEtec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de tabela `tb_vaga`
--
ALTER TABLE `tb_vaga`
  MODIFY `idVaga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_aluno_curso`
--
ALTER TABLE `tb_aluno_curso`
  ADD CONSTRAINT `tb_aluno_curso_ibfk_1` FOREIGN KEY (`fk_idAluno`) REFERENCES `tb_aluno` (`idAluno`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_aluno_curso_ibfk_2` FOREIGN KEY (`fk_idCurso`) REFERENCES `tb_curso` (`idCurso`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_aluno_etec`
--
ALTER TABLE `tb_aluno_etec`
  ADD CONSTRAINT `tb_aluno_etec_ibfk_1` FOREIGN KEY (`fk_idEtec`) REFERENCES `tb_etec` (`idEtec`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_aluno_etec_ibfk_2` FOREIGN KEY (`fk_idAluno`) REFERENCES `tb_aluno` (`idAluno`);

--
-- Limitadores para a tabela `tb_conhecimento_aluno`
--
ALTER TABLE `tb_conhecimento_aluno`
  ADD CONSTRAINT `tb_conhecimento_aluno_ibfk_1` FOREIGN KEY (`fk_idAluno`) REFERENCES `tb_aluno` (`idAluno`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_conhecimento_aluno_ibfk_2` FOREIGN KEY (`fk_idConhecimento`) REFERENCES `tb_conhecimento` (`idConhecimento`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_curso_etec`
--
ALTER TABLE `tb_curso_etec`
  ADD CONSTRAINT `tb_curso_etec_ibfk_1` FOREIGN KEY (`fk_idCurso`) REFERENCES `tb_curso` (`idCurso`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_curso_etec_ibfk_2` FOREIGN KEY (`fk_idEtec`) REFERENCES `tb_etec` (`idEtec`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_eixo`
--
ALTER TABLE `tb_eixo`
  ADD CONSTRAINT `tb_eixo_ibfk_1` FOREIGN KEY (`fk_idCurso`) REFERENCES `tb_curso` (`idCurso`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_experiencia_aluno`
--
ALTER TABLE `tb_experiencia_aluno`
  ADD CONSTRAINT `tb_experiencia_aluno_ibfk_1` FOREIGN KEY (`fk_idAluno`) REFERENCES `tb_aluno` (`idAluno`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_habilidade_aluno`
--
ALTER TABLE `tb_habilidade_aluno`
  ADD CONSTRAINT `tb_habilidade_aluno_ibfk_1` FOREIGN KEY (`fk_idAluno`) REFERENCES `tb_aluno` (`idAluno`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_habilidade_aluno_ibfk_2` FOREIGN KEY (`fk_idHabilidade`) REFERENCES `tb_habilidade` (`idHabilidade`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_horario_aluno`
--
ALTER TABLE `tb_horario_aluno`
  ADD CONSTRAINT `tb_horario_aluno_ibfk_1` FOREIGN KEY (`fk_idAluno`) REFERENCES `tb_aluno` (`idAluno`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_idioma_aluno`
--
ALTER TABLE `tb_idioma_aluno`
  ADD CONSTRAINT `tb_idioma_aluno_ibfk_1` FOREIGN KEY (`fk_idAluno`) REFERENCES `tb_aluno` (`idAluno`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_perfil_aluno`
--
ALTER TABLE `tb_perfil_aluno`
  ADD CONSTRAINT `tb_perfil_aluno_ibfk_1` FOREIGN KEY (`fk_idAluno`) REFERENCES `tb_aluno` (`idAluno`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_requisito_vaga`
--
ALTER TABLE `tb_requisito_vaga`
  ADD CONSTRAINT `tb_requisito_vaga_ibfk_1` FOREIGN KEY (`fk_idRequisito`) REFERENCES `tb_requisito` (`idRequisito`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_requisito_vaga_ibfk_2` FOREIGN KEY (`fk_idVaga`) REFERENCES `tb_vaga` (`idVaga`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_sobre_mim`
--
ALTER TABLE `tb_sobre_mim`
  ADD CONSTRAINT `tb_sobre_mim_ibfk_1` FOREIGN KEY (`fk_idAluno`) REFERENCES `tb_aluno` (`idAluno`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_telefone_aluno`
--
ALTER TABLE `tb_telefone_aluno`
  ADD CONSTRAINT `tb_telefone_aluno_ibfk_1` FOREIGN KEY (`fk_idAluno`) REFERENCES `tb_aluno` (`idAluno`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_telefone_empresa`
--
ALTER TABLE `tb_telefone_empresa`
  ADD CONSTRAINT `tb_telefone_empresa_ibfk_1` FOREIGN KEY (`fk_idEmpresa`) REFERENCES `tb_empresa` (`idEmpresa`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_telefone_etec`
--
ALTER TABLE `tb_telefone_etec`
  ADD CONSTRAINT `tb_telefone_etec_ibfk_1` FOREIGN KEY (`fk_idEtec`) REFERENCES `tb_etec` (`idEtec`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_vaga`
--
ALTER TABLE `tb_vaga`
  ADD CONSTRAINT `tb_vaga_ibfk_1` FOREIGN KEY (`fk_idEmpresa`) REFERENCES `tb_empresa` (`idEmpresa`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_vaga_ibfk_2` FOREIGN KEY (`fk_idCurso`) REFERENCES `tb_curso` (`idCurso`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_vaga_aluno`
--
ALTER TABLE `tb_vaga_aluno`
  ADD CONSTRAINT `tb_vaga_aluno_ibfk_1` FOREIGN KEY (`fk_idAluno`) REFERENCES `tb_aluno` (`idAluno`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_vaga_aluno_ibfk_2` FOREIGN KEY (`fk_idVaga`) REFERENCES `tb_vaga` (`idVaga`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
