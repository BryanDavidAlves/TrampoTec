-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26/10/2023 às 05:56
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

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
-- Estrutura para tabela `tb_admin`
--

CREATE TABLE `tb_admin` (
  `idAdmin` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(15) NOT NULL,
  `imagem` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_admin`
--

INSERT INTO `tb_admin` (`idAdmin`, `nome`, `email`, `senha`, `imagem`) VALUES
(9, 'admin', 'admin@teste.com', '123', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_aluno`
--

CREATE TABLE `tb_aluno` (
  `idAluno` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(15) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `cpf` char(11) NOT NULL,
  `dtNasc` date NOT NULL,
  `logradouro` varchar(80) NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` varchar(10) NOT NULL,
  `bairro` varchar(40) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `cidade` varchar(40) NOT NULL,
  `cep` char(8) NOT NULL,
  `imagem` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_aluno`
--

INSERT INTO `tb_aluno` (`idAluno`, `email`, `senha`, `nome`, `cpf`, `dtNasc`, `logradouro`, `numero`, `complemento`, `bairro`, `estado`, `cidade`, `cep`, `imagem`) VALUES
(7, 'laysamelmudes@gmail.com', '900p900P900p*', 'LAYSA COCA MELMUDES', '475.158.398', '0000-00-00', 'Rua Antonio Soares Pais', 271, 'A-31', 'Vila Santa Teresinha', 'SP', 'São Paulo', '08247-09', 'ec71fadf9084fd41f62aaaeeca933bcd.png');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_aluno_curso`
--

CREATE TABLE `tb_aluno_curso` (
  `fk_idAluno` int(11) NOT NULL,
  `fk_idCurso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_aluno_curso`
--

INSERT INTO `tb_aluno_curso` (`fk_idAluno`, `fk_idCurso`) VALUES
(7, 2),
(7, 2),
(7, 2),
(7, 3),
(7, 1),
(7, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_aluno_etec`
--

CREATE TABLE `tb_aluno_etec` (
  `fk_idEtec` int(11) NOT NULL,
  `fk_idAluno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_aluno_etec`
--

INSERT INTO `tb_aluno_etec` (`fk_idEtec`, `fk_idAluno`) VALUES
(21, 7),
(21, 7),
(21, 7);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_conhecimento`
--

CREATE TABLE `tb_conhecimento` (
  `idConhecimento` int(11) NOT NULL,
  `conhecimento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_conhecimento_aluno`
--

CREATE TABLE `tb_conhecimento_aluno` (
  `fk_idConhecimento` int(11) NOT NULL,
  `fk_idAluno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_curso`
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
-- Despejando dados para a tabela `tb_curso`
--

INSERT INTO `tb_curso` (`idCurso`, `nome`, `cargaHoraria`, `semestre`, `modalidade`, `ensino`) VALUES
(1, 'desenvolvimento', 0, 0, '0', ''),
(2, 'nutri', 0, 0, '0', ''),
(3, 'adm', 0, 0, '0', ''),
(4, 'eletro', 0, 0, '0', ''),
(5, 'Administração', 1200, 3, 'Modular', ''),
(6, 'Agente Comunitário de Saúde', 1200, 3, 'Integrado', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_curso_etec`
--

CREATE TABLE `tb_curso_etec` (
  `fk_idCurso` int(11) NOT NULL,
  `fk_idEtec` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_curso_etec`
--

INSERT INTO `tb_curso_etec` (`fk_idCurso`, `fk_idEtec`) VALUES
(1, 20),
(4, 20),
(1, 21),
(3, 21);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_eixo`
--

CREATE TABLE `tb_eixo` (
  `idEixo` int(11) NOT NULL,
  `eixo` varchar(60) NOT NULL,
  `fk_idCurso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_eixo`
--

INSERT INTO `tb_eixo` (`idEixo`, `eixo`, `fk_idCurso`) VALUES
(1, 'front-end', 1),
(2, 'panela', 2),
(3, 'preguiçoso', 3),
(4, 'rede', 4),
(5, 'fio', 4),
(6, 'assu', 4),
(7, 'Gestão e Negócios', 5),
(8, 'Ambiente e Saúde', 6);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_empresa`
--

CREATE TABLE `tb_empresa` (
  `idEmpresa` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(15) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `cnpj` char(18) NOT NULL,
  `cep` char(8) NOT NULL,
  `logradouro` varchar(50) NOT NULL,
  `numero` int(11) NOT NULL,
  `bairro` varchar(60) NOT NULL,
  `estado` varchar(25) NOT NULL,
  `imagem` varchar(40) NOT NULL,
  `aprovado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_empresa`
--

INSERT INTO `tb_empresa` (`idEmpresa`, `email`, `senha`, `nome`, `cnpj`, `cep`, `logradouro`, `numero`, `bairro`, `estado`, `imagem`, `aprovado`) VALUES
(14, 'laysamelmudes@gmail.com', '123', 'Empresa boa', '85.656.164/0001-24', '08247-09', 'Rua Nossa Senhora das Candeias', 123, 'Vila Santa Teresinha', 'SP', 'ab5cd8aa072b4848b8b257bf73157bde.png', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_etec`
--

CREATE TABLE `tb_etec` (
  `idEtec` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `email` char(22) NOT NULL,
  `codigo` int(11) NOT NULL,
  `municipio` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_etec`
--

INSERT INTO `tb_etec` (`idEtec`, `nome`, `email`, `codigo`, `municipio`) VALUES
(9, 'Etec Antonio Junqueira da Veiga', 'e033dir@cps.sp.gov.br', 33, 'Igarapava'),
(10, 'Etec Aristóteles Ferreira', 'e035dir@cps.sp.gov.br', 35, 'Santos'),
(11, 'Etec Arnaldo Pereira Cheregatti', 'e215dir@cps.sp.gov.br', 215, 'Aguaí'),
(12, 'Etec Astor de Mattos Carvalho', 'e038dir@cps.sp.gov.br', 38, 'Cabrália Paulista'),
(13, 'Etec Augusto Tortolero Araújo', 'e039dir@cps.sp.gov.br', 39, 'Paraguaçu Paulista'),
(14, 'Etec Bartolomeu Bueno da Silva - Anhanguera', 'e262dir@cps.sp.gov.br', 262, 'Santana de Parnaíba'),
(15, 'Etec Benedito Storani', 'e042dir@cps.sp.gov.br', 42, 'Jundiaí'),
(16, 'Etec Bento Carlos Botelho do Amaral', 'e256dir@cps.sp.gov.br', 256, 'Guariba'),
(17, 'Etec Bento Quirino', 'e043dir@cps.sp.gov.br', 43, 'Campinas'),
(18, 'Etec Carlos de Campos - Brás', 'e045dir@cps.sp.gov.br', 45, 'São Paulo'),
(19, 'Etec Carolina Carinhato Sampaio - Jardim São Luís', 'e134dir@cps.sp.gov.br', 134, 'São Paulo'),
(20, 'laysamelmudes@gmail.com', 'laysamelmudes@gmail.co', 53543, 'Caçapava'),
(21, 'lucas', 'daffs@sdasda', 5646546, 'Birigui');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_experiencia_aluno`
--

CREATE TABLE `tb_experiencia_aluno` (
  `idExperiaciaAluno` int(11) NOT NULL,
  `nome` varchar(300) NOT NULL,
  `fk_idAluno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_fale_conosco`
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
-- Estrutura para tabela `tb_habilidade`
--

CREATE TABLE `tb_habilidade` (
  `idHabilidade` int(11) NOT NULL,
  `habilidade` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_habilidade`
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
-- Estrutura para tabela `tb_habilidade_aluno`
--

CREATE TABLE `tb_habilidade_aluno` (
  `fk_idAluno` int(11) NOT NULL,
  `fk_idHabilidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_horario_aluno`
--

CREATE TABLE `tb_horario_aluno` (
  `idHorarioAluno` int(11) NOT NULL,
  `inicio` varchar(10) NOT NULL,
  `termino` varchar(10) NOT NULL,
  `fk_idAluno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_idioma_aluno`
--

CREATE TABLE `tb_idioma_aluno` (
  `idIdiomaAluno` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `nivel` varchar(20) NOT NULL,
  `fk_idAluno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_idioma_aluno`
--

INSERT INTO `tb_idioma_aluno` (`idIdiomaAluno`, `nome`, `nivel`, `fk_idAluno`) VALUES
(6, 'frances', 'avancado', 7),
(9, 'ingles', 'iniciante', 7),
(10, 'ingles', 'iniciante', 7),
(16, 'frances', 'intermediario', 7);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_indicacao`
--

CREATE TABLE `tb_indicacao` (
  `idIndicacao` int(11) NOT NULL,
  `cartaRecomendacao` varchar(3000) NOT NULL,
  `fk_idProfessor` int(11) NOT NULL,
  `fk_idEtec` int(11) NOT NULL,
  `fk_idAluno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_indicacao`
--

INSERT INTO `tb_indicacao` (`idIndicacao`, `cartaRecomendacao`, `fk_idProfessor`, `fk_idEtec`, `fk_idAluno`) VALUES
(1, 'VER SE DEU CERTO', 14, 1, 7);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_perfil_aluno`
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
-- Despejando dados para a tabela `tb_perfil_aluno`
--

INSERT INTO `tb_perfil_aluno` (`idPerfilAluno`, `semestre`, `periodo`, `duracaoCurso`, `conclusao`, `fk_idAluno`) VALUES
(1, 2, 'matutino', 'OI', '2023-10-01', 7),
(2, 2, 'noturno', 'OI', '2023-10-08', 7),
(3, 2, 'matutino', 'OI', '2023-10-19', 7),
(4, 5, 'Noturno', '800 horas', '2023-10-01', 7),
(5, 0, '', '', '2023-10-15', 7),
(6, 0, '', '', '2023-10-11', 7);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_perfil_empresa`
--

CREATE TABLE `tb_perfil_empresa` (
  `idPerfilEmpresa` int(11) NOT NULL,
  `departamento` varchar(30) NOT NULL,
  `descricao` varchar(80) NOT NULL,
  `anoFundacao` int(4) NOT NULL,
  `imagem` text NOT NULL,
  `fk_idEmpresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_perfil_empresa`
--

INSERT INTO `tb_perfil_empresa` (`idPerfilEmpresa`, `departamento`, `descricao`, `anoFundacao`, `imagem`, `fk_idEmpresa`) VALUES
(4, 'Tecnologia', 'Somos uma empresa', 1950, '', 14);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_professor`
--

CREATE TABLE `tb_professor` (
  `idProfessor` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(15) NOT NULL,
  `imagem` varchar(40) NOT NULL,
  `fk_idCurso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_professor_etec`
--

CREATE TABLE `tb_professor_etec` (
  `fk_idProfessor` int(11) NOT NULL,
  `fk_idEtec` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_recomendacao`
--

CREATE TABLE `tb_recomendacao` (
  `idRecomendacao` int(11) NOT NULL,
  `recomendacao` varchar(500) NOT NULL,
  `fk_idProfessor` int(11) NOT NULL,
  `fk_idAluno` int(11) NOT NULL,
  `fk_idEtec` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_requisito`
--

CREATE TABLE `tb_requisito` (
  `idRequisito` int(11) NOT NULL,
  `requisito` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_requisito`
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
-- Estrutura para tabela `tb_requisito_vaga`
--

CREATE TABLE `tb_requisito_vaga` (
  `fk_idVaga` int(11) NOT NULL,
  `fk_idRequisito` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_requisito_vaga`
--

INSERT INTO `tb_requisito_vaga` (`fk_idVaga`, `fk_idRequisito`) VALUES
(4, 7),
(4, 8),
(6, 11),
(6, 12),
(4, 7),
(4, 8),
(6, 11),
(6, 12);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_sobre_mim`
--

CREATE TABLE `tb_sobre_mim` (
  `idSobreMim` int(11) NOT NULL,
  `informacao` varchar(500) NOT NULL,
  `fk_idAluno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_telefone_aluno`
--

CREATE TABLE `tb_telefone_aluno` (
  `idTelefoneAluno` int(11) NOT NULL,
  `telefoneAluno` char(16) NOT NULL,
  `fk_idAluno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_telefone_aluno`
--

INSERT INTO `tb_telefone_aluno` (`idTelefoneAluno`, `telefoneAluno`, `fk_idAluno`) VALUES
(6, '(11) 94489-3333', 7);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_telefone_empresa`
--

CREATE TABLE `tb_telefone_empresa` (
  `idTelefoneEmpresa` int(11) NOT NULL,
  `numeroTelefone` char(14) NOT NULL,
  `fk_idEmpresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_telefone_empresa`
--

INSERT INTO `tb_telefone_empresa` (`idTelefoneEmpresa`, `numeroTelefone`, `fk_idEmpresa`) VALUES
(9, '(11) 94489-032', 14);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_telefone_etec`
--

CREATE TABLE `tb_telefone_etec` (
  `idTelefoneEtec` int(11) NOT NULL,
  `telefoneEtec` char(14) NOT NULL,
  `fk_idEtec` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_telefone_etec`
--

INSERT INTO `tb_telefone_etec` (`idTelefoneEtec`, `telefoneEtec`, `fk_idEtec`) VALUES
(17, '(16) 3172-1814', 9),
(18, '(13) 3236-9973', 10),
(19, '(19) 3625-6204', 11),
(20, '(14) 3285-1210', 12),
(21, '(14) 99616-436', 12),
(22, '(18) 3361-1130', 13),
(23, '(18) 3361-7719', 13),
(24, '(11) 4156-1435', 14),
(25, '(11) 4582-1881', 15),
(26, '(16) 3251-4154', 16),
(27, '(16) 3251-4063', 16),
(28, '(16) 3251-1277', 16),
(29, '(19) 3252-3596', 17),
(30, '(19) 3251-8934', 17),
(31, '(11) 3227-0286', 18),
(32, '(11) 3311-7098', 18),
(33, ' (11) 5851-931', 19);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_vaga`
--

CREATE TABLE `tb_vaga` (
  `idVaga` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `cidade` varchar(40) NOT NULL,
  `bairro` varchar(40) NOT NULL,
  `tipoTrabalho` varchar(30) NOT NULL,
  `salario` double(10,2) NOT NULL,
  `descricao` char(80) NOT NULL,
  `inicio` time NOT NULL,
  `termino` time NOT NULL,
  `periodo` varchar(30) NOT NULL,
  `area` varchar(50) NOT NULL,
  `semana` char(9) NOT NULL,
  `fk_idEmpresa` int(11) NOT NULL,
  `fk_idCurso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_vaga`
--

INSERT INTO `tb_vaga` (`idVaga`, `nome`, `cidade`, `bairro`, `tipoTrabalho`, `salario`, `descricao`, `inicio`, `termino`, `periodo`, `area`, `semana`, `fk_idEmpresa`, `fk_idCurso`) VALUES
(4, 'Teste', 'São Paulo', 'Guainases', 'Presencial', 2000.00, 'Bom diaaa', '10:00:00', '18:00:00', 'matinal', 'Tecnologia', 'Seg-Sex', 14, 1),
(6, 'vaga2', 'sdasd', 'asdasda', 'asdasd', 3000.00, 'NUM AGUENTO MAIS', '10:00:00', '20:00:00', 'matinal', 'dfsdfs', 'asd-asd', 14, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_vaga_aluno`
--

CREATE TABLE `tb_vaga_aluno` (
  `fk_idAluno` int(11) NOT NULL,
  `fk_idVaga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Índices de tabela `tb_aluno`
--
ALTER TABLE `tb_aluno`
  ADD PRIMARY KEY (`idAluno`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices de tabela `tb_aluno_curso`
--
ALTER TABLE `tb_aluno_curso`
  ADD KEY `fk_idAluno` (`fk_idAluno`),
  ADD KEY `fk_idCurso` (`fk_idCurso`);

--
-- Índices de tabela `tb_aluno_etec`
--
ALTER TABLE `tb_aluno_etec`
  ADD KEY `fk_idEtec` (`fk_idEtec`),
  ADD KEY `fk_idAluno` (`fk_idAluno`);

--
-- Índices de tabela `tb_conhecimento`
--
ALTER TABLE `tb_conhecimento`
  ADD PRIMARY KEY (`idConhecimento`);

--
-- Índices de tabela `tb_conhecimento_aluno`
--
ALTER TABLE `tb_conhecimento_aluno`
  ADD KEY `fk_idAluno` (`fk_idAluno`),
  ADD KEY `fk_idConhecimento` (`fk_idConhecimento`);

--
-- Índices de tabela `tb_curso`
--
ALTER TABLE `tb_curso`
  ADD PRIMARY KEY (`idCurso`);

--
-- Índices de tabela `tb_curso_etec`
--
ALTER TABLE `tb_curso_etec`
  ADD KEY `fk_idCurso` (`fk_idCurso`),
  ADD KEY `fk_idEtec` (`fk_idEtec`);

--
-- Índices de tabela `tb_eixo`
--
ALTER TABLE `tb_eixo`
  ADD PRIMARY KEY (`idEixo`),
  ADD KEY `fk_idCurso` (`fk_idCurso`);

--
-- Índices de tabela `tb_empresa`
--
ALTER TABLE `tb_empresa`
  ADD PRIMARY KEY (`idEmpresa`),
  ADD UNIQUE KEY `cnpj` (`cnpj`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices de tabela `tb_etec`
--
ALTER TABLE `tb_etec`
  ADD PRIMARY KEY (`idEtec`),
  ADD UNIQUE KEY `codigo` (`codigo`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices de tabela `tb_experiencia_aluno`
--
ALTER TABLE `tb_experiencia_aluno`
  ADD PRIMARY KEY (`idExperiaciaAluno`),
  ADD KEY `fk_idAluno` (`fk_idAluno`);

--
-- Índices de tabela `tb_fale_conosco`
--
ALTER TABLE `tb_fale_conosco`
  ADD PRIMARY KEY (`idFaleConosco`);

--
-- Índices de tabela `tb_habilidade`
--
ALTER TABLE `tb_habilidade`
  ADD PRIMARY KEY (`idHabilidade`);

--
-- Índices de tabela `tb_habilidade_aluno`
--
ALTER TABLE `tb_habilidade_aluno`
  ADD KEY `fk_idAluno` (`fk_idAluno`),
  ADD KEY `fk_idHabilidade` (`fk_idHabilidade`);

--
-- Índices de tabela `tb_horario_aluno`
--
ALTER TABLE `tb_horario_aluno`
  ADD PRIMARY KEY (`idHorarioAluno`),
  ADD KEY `fk_idAluno` (`fk_idAluno`);

--
-- Índices de tabela `tb_idioma_aluno`
--
ALTER TABLE `tb_idioma_aluno`
  ADD PRIMARY KEY (`idIdiomaAluno`),
  ADD KEY `fk_idAluno` (`fk_idAluno`);

--
-- Índices de tabela `tb_indicacao`
--
ALTER TABLE `tb_indicacao`
  ADD PRIMARY KEY (`idIndicacao`);

--
-- Índices de tabela `tb_perfil_aluno`
--
ALTER TABLE `tb_perfil_aluno`
  ADD PRIMARY KEY (`idPerfilAluno`),
  ADD KEY `fk_idAluno` (`fk_idAluno`);

--
-- Índices de tabela `tb_perfil_empresa`
--
ALTER TABLE `tb_perfil_empresa`
  ADD PRIMARY KEY (`idPerfilEmpresa`),
  ADD KEY `fk_idTelefoneEmpresa` (`fk_idEmpresa`);

--
-- Índices de tabela `tb_professor`
--
ALTER TABLE `tb_professor`
  ADD PRIMARY KEY (`idProfessor`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `fk_idCurso` (`fk_idCurso`);

--
-- Índices de tabela `tb_professor_etec`
--
ALTER TABLE `tb_professor_etec`
  ADD KEY `fk_idEtec` (`fk_idEtec`),
  ADD KEY `fk_idProfessor` (`fk_idProfessor`);

--
-- Índices de tabela `tb_recomendacao`
--
ALTER TABLE `tb_recomendacao`
  ADD PRIMARY KEY (`idRecomendacao`),
  ADD KEY `fk_idAluno` (`fk_idAluno`),
  ADD KEY `fk_idProfessor` (`fk_idProfessor`),
  ADD KEY `fk_idEtec` (`fk_idEtec`);

--
-- Índices de tabela `tb_requisito`
--
ALTER TABLE `tb_requisito`
  ADD PRIMARY KEY (`idRequisito`);

--
-- Índices de tabela `tb_requisito_vaga`
--
ALTER TABLE `tb_requisito_vaga`
  ADD KEY `fk_idRequisito` (`fk_idRequisito`),
  ADD KEY `fk_idVaga` (`fk_idVaga`);

--
-- Índices de tabela `tb_sobre_mim`
--
ALTER TABLE `tb_sobre_mim`
  ADD PRIMARY KEY (`idSobreMim`),
  ADD KEY `fk_idAluno` (`fk_idAluno`);

--
-- Índices de tabela `tb_telefone_aluno`
--
ALTER TABLE `tb_telefone_aluno`
  ADD PRIMARY KEY (`idTelefoneAluno`),
  ADD UNIQUE KEY `telefoneAluno` (`telefoneAluno`),
  ADD KEY `fk_idAluno` (`fk_idAluno`);

--
-- Índices de tabela `tb_telefone_empresa`
--
ALTER TABLE `tb_telefone_empresa`
  ADD PRIMARY KEY (`idTelefoneEmpresa`),
  ADD UNIQUE KEY `numeroTelefone` (`numeroTelefone`),
  ADD KEY `fk_idEmpresa` (`fk_idEmpresa`);

--
-- Índices de tabela `tb_telefone_etec`
--
ALTER TABLE `tb_telefone_etec`
  ADD PRIMARY KEY (`idTelefoneEtec`),
  ADD UNIQUE KEY `telefoneEtec` (`telefoneEtec`),
  ADD KEY `fk_idEtec` (`fk_idEtec`);

--
-- Índices de tabela `tb_vaga`
--
ALTER TABLE `tb_vaga`
  ADD PRIMARY KEY (`idVaga`),
  ADD KEY `fk_idEmpresa` (`fk_idEmpresa`),
  ADD KEY `fk_idCurso` (`fk_idCurso`);

--
-- Índices de tabela `tb_vaga_aluno`
--
ALTER TABLE `tb_vaga_aluno`
  ADD KEY `fk_idAluno` (`fk_idAluno`),
  ADD KEY `fk_idVaga` (`fk_idVaga`);

--
-- AUTO_INCREMENT para tabelas despejadas
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
  MODIFY `idAluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tb_conhecimento`
--
ALTER TABLE `tb_conhecimento`
  MODIFY `idConhecimento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_curso`
--
ALTER TABLE `tb_curso`
  MODIFY `idCurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tb_eixo`
--
ALTER TABLE `tb_eixo`
  MODIFY `idEixo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tb_empresa`
--
ALTER TABLE `tb_empresa`
  MODIFY `idEmpresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `tb_etec`
--
ALTER TABLE `tb_etec`
  MODIFY `idEtec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
  MODIFY `idIdiomaAluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `tb_indicacao`
--
ALTER TABLE `tb_indicacao`
  MODIFY `idIndicacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tb_perfil_aluno`
--
ALTER TABLE `tb_perfil_aluno`
  MODIFY `idPerfilAluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tb_perfil_empresa`
--
ALTER TABLE `tb_perfil_empresa`
  MODIFY `idPerfilEmpresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tb_professor`
--
ALTER TABLE `tb_professor`
  MODIFY `idProfessor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `tb_recomendacao`
--
ALTER TABLE `tb_recomendacao`
  MODIFY `idRecomendacao` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `idTelefoneAluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tb_aluno_curso`
--
ALTER TABLE `tb_aluno_curso`
  ADD CONSTRAINT `tb_aluno_curso_ibfk_1` FOREIGN KEY (`fk_idAluno`) REFERENCES `tb_aluno` (`idAluno`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_aluno_curso_ibfk_2` FOREIGN KEY (`fk_idCurso`) REFERENCES `tb_curso` (`idCurso`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Restrições para tabelas `tb_aluno_etec`
--
ALTER TABLE `tb_aluno_etec`
  ADD CONSTRAINT `tb_aluno_etec_ibfk_1` FOREIGN KEY (`fk_idEtec`) REFERENCES `tb_etec` (`idEtec`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_aluno_etec_ibfk_2` FOREIGN KEY (`fk_idAluno`) REFERENCES `tb_aluno` (`idAluno`);

--
-- Restrições para tabelas `tb_conhecimento_aluno`
--
ALTER TABLE `tb_conhecimento_aluno`
  ADD CONSTRAINT `tb_conhecimento_aluno_ibfk_1` FOREIGN KEY (`fk_idAluno`) REFERENCES `tb_aluno` (`idAluno`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_conhecimento_aluno_ibfk_2` FOREIGN KEY (`fk_idConhecimento`) REFERENCES `tb_conhecimento` (`idConhecimento`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Restrições para tabelas `tb_curso_etec`
--
ALTER TABLE `tb_curso_etec`
  ADD CONSTRAINT `tb_curso_etec_ibfk_1` FOREIGN KEY (`fk_idCurso`) REFERENCES `tb_curso` (`idCurso`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_curso_etec_ibfk_2` FOREIGN KEY (`fk_idEtec`) REFERENCES `tb_etec` (`idEtec`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Restrições para tabelas `tb_eixo`
--
ALTER TABLE `tb_eixo`
  ADD CONSTRAINT `tb_eixo_ibfk_1` FOREIGN KEY (`fk_idCurso`) REFERENCES `tb_curso` (`idCurso`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Restrições para tabelas `tb_experiencia_aluno`
--
ALTER TABLE `tb_experiencia_aluno`
  ADD CONSTRAINT `tb_experiencia_aluno_ibfk_1` FOREIGN KEY (`fk_idAluno`) REFERENCES `tb_aluno` (`idAluno`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Restrições para tabelas `tb_habilidade_aluno`
--
ALTER TABLE `tb_habilidade_aluno`
  ADD CONSTRAINT `tb_habilidade_aluno_ibfk_1` FOREIGN KEY (`fk_idAluno`) REFERENCES `tb_aluno` (`idAluno`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_habilidade_aluno_ibfk_2` FOREIGN KEY (`fk_idHabilidade`) REFERENCES `tb_habilidade` (`idHabilidade`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Restrições para tabelas `tb_horario_aluno`
--
ALTER TABLE `tb_horario_aluno`
  ADD CONSTRAINT `tb_horario_aluno_ibfk_1` FOREIGN KEY (`fk_idAluno`) REFERENCES `tb_aluno` (`idAluno`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Restrições para tabelas `tb_idioma_aluno`
--
ALTER TABLE `tb_idioma_aluno`
  ADD CONSTRAINT `tb_idioma_aluno_ibfk_1` FOREIGN KEY (`fk_idAluno`) REFERENCES `tb_aluno` (`idAluno`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Restrições para tabelas `tb_perfil_aluno`
--
ALTER TABLE `tb_perfil_aluno`
  ADD CONSTRAINT `tb_perfil_aluno_ibfk_1` FOREIGN KEY (`fk_idAluno`) REFERENCES `tb_aluno` (`idAluno`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Restrições para tabelas `tb_perfil_empresa`
--
ALTER TABLE `tb_perfil_empresa`
  ADD CONSTRAINT `tb_perfil_empresa_ibfk_1` FOREIGN KEY (`fk_idEmpresa`) REFERENCES `tb_empresa` (`idEmpresa`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Restrições para tabelas `tb_professor`
--
ALTER TABLE `tb_professor`
  ADD CONSTRAINT `tb_professor_ibfk_1` FOREIGN KEY (`fk_idCurso`) REFERENCES `tb_curso` (`idCurso`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Restrições para tabelas `tb_professor_etec`
--
ALTER TABLE `tb_professor_etec`
  ADD CONSTRAINT `tb_professor_etec_ibfk_2` FOREIGN KEY (`fk_idProfessor`) REFERENCES `tb_professor` (`idProfessor`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_professor_etec_ibfk_3` FOREIGN KEY (`fk_idEtec`) REFERENCES `tb_etec` (`idEtec`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Restrições para tabelas `tb_recomendacao`
--
ALTER TABLE `tb_recomendacao`
  ADD CONSTRAINT `tb_recomendacao_ibfk_1` FOREIGN KEY (`fk_idAluno`) REFERENCES `tb_aluno` (`idAluno`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_recomendacao_ibfk_2` FOREIGN KEY (`fk_idProfessor`) REFERENCES `tb_professor` (`idProfessor`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_recomendacao_ibfk_3` FOREIGN KEY (`fk_idEtec`) REFERENCES `tb_etec` (`idEtec`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Restrições para tabelas `tb_requisito_vaga`
--
ALTER TABLE `tb_requisito_vaga`
  ADD CONSTRAINT `tb_requisito_vaga_ibfk_1` FOREIGN KEY (`fk_idRequisito`) REFERENCES `tb_requisito` (`idRequisito`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_requisito_vaga_ibfk_2` FOREIGN KEY (`fk_idVaga`) REFERENCES `tb_vaga` (`idVaga`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Restrições para tabelas `tb_sobre_mim`
--
ALTER TABLE `tb_sobre_mim`
  ADD CONSTRAINT `tb_sobre_mim_ibfk_1` FOREIGN KEY (`fk_idAluno`) REFERENCES `tb_aluno` (`idAluno`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Restrições para tabelas `tb_telefone_aluno`
--
ALTER TABLE `tb_telefone_aluno`
  ADD CONSTRAINT `tb_telefone_aluno_ibfk_1` FOREIGN KEY (`fk_idAluno`) REFERENCES `tb_aluno` (`idAluno`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Restrições para tabelas `tb_telefone_empresa`
--
ALTER TABLE `tb_telefone_empresa`
  ADD CONSTRAINT `tb_telefone_empresa_ibfk_1` FOREIGN KEY (`fk_idEmpresa`) REFERENCES `tb_empresa` (`idEmpresa`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Restrições para tabelas `tb_telefone_etec`
--
ALTER TABLE `tb_telefone_etec`
  ADD CONSTRAINT `tb_telefone_etec_ibfk_1` FOREIGN KEY (`fk_idEtec`) REFERENCES `tb_etec` (`idEtec`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Restrições para tabelas `tb_vaga`
--
ALTER TABLE `tb_vaga`
  ADD CONSTRAINT `tb_vaga_ibfk_1` FOREIGN KEY (`fk_idEmpresa`) REFERENCES `tb_empresa` (`idEmpresa`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_vaga_ibfk_2` FOREIGN KEY (`fk_idCurso`) REFERENCES `tb_curso` (`idCurso`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Restrições para tabelas `tb_vaga_aluno`
--
ALTER TABLE `tb_vaga_aluno`
  ADD CONSTRAINT `tb_vaga_aluno_ibfk_1` FOREIGN KEY (`fk_idAluno`) REFERENCES `tb_aluno` (`idAluno`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_vaga_aluno_ibfk_2` FOREIGN KEY (`fk_idVaga`) REFERENCES `tb_vaga` (`idVaga`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
