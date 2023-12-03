-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Dez-2023 às 21:23
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
  `cpf` char(16) NOT NULL,
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
(14, 'ryan.souza44@etec.sp.gov.br', 'Otario15@', 'Ryan Dias', '569.614.918-98', '2005-10-17', 'Rua Antônio Soares Pais', 271, '66', 'Vila São Geraldo', '271', 'São Paulo', 'Vila São', '67d8b47c91c617b233e145dd7121ab84avif', 1),
(15, 'aline.cordeiro5@etec.sp.gov.br', 'Aline123@', 'Aline Mendonca', '272.948.658-50', '1990-05-07', 'Rua Feliciano de Mendonça', 290, '', 'Jardim São Paulo(Zona Leste)', 'SP', 'São Paulo', '08460-36', 'a7ab82742ff4789c02658dd67facf0e6.jpg', 1),
(16, 'johny.gomes@etec.sp.gov.br', 'euamoagabS2@', 'johny david marques gomes', '549.664.138-18', '2005-08-25', 'Rua Redeiras', 66, '', 'Lajeado', '66', 'São Paulo', 'Lajeado', '2ba2409e8ac905aade6e7ccdd7599357.jpg', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_aluno_curso_etec`
--

CREATE TABLE `tb_aluno_curso_etec` (
  `fk_idAluno` int(11) NOT NULL,
  `fk_idCurso` int(11) NOT NULL,
  `fk_idEtec` int(11) NOT NULL,
  `conclusao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_aluno_curso_etec`
--

INSERT INTO `tb_aluno_curso_etec` (`fk_idAluno`, `fk_idCurso`, `fk_idEtec`, `conclusao`) VALUES
(16, 12, 12, '2023-12-02'),
(14, 11, 12, '8120-01-12'),
(15, 11, 10, '2025-11-12');

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
(7, 'Php'),
(8, 'SQL'),
(9, 'PHP'),
(10, 'PYTHON'),
(11, 'HTML'),
(12, 'CSS'),
(13, 'REACT NATIVE'),
(14, 'java'),
(15, 'PHP'),
(16, 'MySQL'),
(17, 'SQL Server'),
(18, 'Oracle db'),
(19, 'php'),
(20, 'javascript'),
(21, 'java'),
(22, 'SQL server');

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
(14, 14),
(15, 15),
(16, 15),
(17, 15),
(18, 15),
(19, 16),
(20, 16),
(21, 16),
(22, 16);

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
(11, 'Desenvolvimento de Sistemas', 1200, 3, 'Presencial', 'Ensino Medio Integrado ao Tecnico em Periodo Noturno(M-TEC-N)'),
(12, 'Nutrição', 1600, 3, 'Presencial', 'Ensino Medio Integrado ao Tecnico em Periodo Integral(M-TEC-Pi)'),
(13, 'Edificações', 1200, 3, 'Presencial', 'Ensino Medio Integrado ao Tecnico(M-TEC)'),
(14, 'Eletrotécnica', 1600, 3, 'Presencial', 'Ensino Medio Integrado ao Tecnico em Periodo Integral(M-TEC-Pi)'),
(15, 'Turismo', 1200, 1, 'Presencial', 'Curso Tecnico');

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
(11, 9),
(13, 11),
(12, 10),
(13, 10),
(11, 10),
(12, 9),
(13, 9),
(12, 11),
(13, 11),
(14, 9),
(11, 12),
(12, 12),
(14, 12),
(13, 12),
(11, 13),
(12, 13),
(13, 13),
(14, 13),
(11, 14),
(12, 14),
(13, 14),
(14, 14),
(11, 15),
(12, 15),
(13, 15),
(14, 15),
(11, 16),
(12, 16),
(13, 16),
(14, 16),
(11, 17),
(12, 17),
(13, 17),
(14, 17),
(11, 18),
(12, 18),
(13, 18),
(14, 18),
(11, 19),
(12, 19),
(13, 19),
(14, 19),
(11, 45),
(15, 45);

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
(15, 'Infraestrutura', 13),
(16, 'Elétrica', 14),
(17, 'Serviços', 15);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_empresa`
--

CREATE TABLE `tb_empresa` (
  `idEmpresa` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(15) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `departamento` varchar(100) NOT NULL,
  `descricao` varchar(1000) NOT NULL,
  `anoFundacao` int(4) NOT NULL,
  `cnpj` char(20) NOT NULL,
  `cep` char(8) NOT NULL,
  `logradouro` varchar(60) NOT NULL,
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
(14, 'laysamelmudes@gmail.com', '123', 'Alpha Tecnology', 'tecnologia', 'Empresa focada em fornecer satisfação ao clientes!', 2023, '85.656.164/0001-24', '08247-09', 'Rua Antônio Soares Pais', 85656, 'Vila São Geraldo', 'SP', 'rosto2.jpg', 1),
(20, 'datasphere@gmail.com', 'datasphereempre', 'DataSphere Technologies', 'Tecnologia', 'DataSphere Technologies é uma empresa líder em soluções tecnológicas para a transformação digital, oferecendo uma gama completa de serviços e produtos para maximizar o potencial dos dados empresariais. Com uma abordagem centrada no cliente, nossa equipe especializada colabora de perto para desenvolver soluções personalizadas. Estamos na vanguarda da inovação, investindo em pesquisa e desenvolvimento, e priorizamos a segurança e conformidade dos dados. Se sua empresa busca uma parceira confiável para impulsionar a jornada digital, a DataSphere Technologies oferece soluções de classe mundial para transformar dados em vantagem competitiva.', 1998, '68.157.261/0001-53', '68535-97', 'Rua Magalhaes Barata 789', 68157, 'Centro', 'Pará', 'perfil.jpg', 1),
(22, 'ecotech4solucions@gmail.com', 'techsolucions', 'EcoTech Solutions', 'Departamento de Desenvolvimento Sustentável e Soluções de Tecnologia Verde', 'A EcoTech Solutions é uma empresa inovadora focada em oferecer soluções sustentáveis para desafios contemporâneos. Especializada em tecnologias e produtos que integram tecnologia com preservação ambiental, a empresa lidera a revolução verde. Sua missão é criar um impacto positivo duradouro, proporcionando soluções sustentáveis para empresas e consumidores. Com serviços que abrangem energias renováveis, eficiência energética, gestão de resíduos e agricultura sustentável, a EcoTech Solutions destaca-se como uma parceira confiável para organizações comprometidas com a responsabilidade ambiental, promovendo um futuro mais limpo e saudável. Junte-se a nós nessa jornada para um mundo mais sustentável.', 2010, '98.075.949/0001-55', '25924-64', 'Rua Luiz Antônio Ramos', 50, 'Parque Recreio Dom Pedro II (Guia de Pacobaíba)', 'Rio de Janeiro', NULL, 1),
(24, 'vitalcare55solucions@gmail.com', 'vital65saude', ' VitalCare Solutions', 'Departamento 1: BioWellness Labs\r\n\r\nÁrea de Atuação: Análises clínicas avançadas, testes genéticos e', 'A VitalCare Solutions é uma empresa inovadora comprometida em fornecer soluções de cuidados de saúde avançadas. Especializada em desenvolver e implementar tecnologias de ponta para melhorar a eficiência e qualidade dos serviços de saúde, a VitalCare Solutions está na vanguarda da transformação digital no setor. Com uma equipe dedicada e experiente, a empresa busca oferecer soluções personalizadas que promovam o bem-estar dos pacientes e otimizem os processos de cuidados de saúde.', 2002, '53.214.138/0001-50', '71575-13', 'Quadra Quadra 36 Conjunto G', 33, 'Paranoá', 'Brasília', NULL, 0),
(25, 'mindbody@gmail.com', 'bodymind522', 'MindBody Therapeutics', 'Departamento 1: NeuroCalm Clinics\r\n\r\nÁrea de Atuação: Serviços especializados em saúde mental, terap', 'A MindBody Therapeutics é uma empresa inovadora dedicada ao bem-estar integral, oferecendo soluções terapêuticas que integram mente e corpo. Com uma abordagem holística, a empresa busca promover equilíbrio e saúde por meio de práticas terapêuticas inovadoras, visando o cuidado tanto da saúde mental quanto física.', 2015, '45.785.524/0001-73', '41402-03', 'Rua da Esperança', 72, 'CEASA', 'Bahia', NULL, 0),
(27, 'profalinemendonca@gmail.com', 'Aline123@', 'Escola de programadores', '', '', 0, '07.110.884/0001-86', '08440-00', 'Rua Porto do Bezerra', 225, 'Jardim Guaianazes', 'SP', '5df4eb41f174fe564023f5546a4ecbb5.png', 1);

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
(9, 'Etec Antonio Junqueira da Veiga', 'e033dir@cps.sp.gov.br', 33, 'Igarapava'),
(10, 'Etec Aristóteles Ferreira', 'e035dir@cps.sp.gov.br', 35, 'Santos'),
(11, 'Etec Arnaldo Pereira Cheregatti', 'e215dir@cps.sp.gov.br', 215, 'Aguaí'),
(12, 'Etec Astor de Mattos Carvalho', 'e038dir@cps.sp.gov.br', 38, 'Adamantina'),
(13, 'Etec Augusto Tortolero Araújo', 'e039dir@cps.sp.gov.br', 39, 'Paraguaçu Paulista'),
(14, 'Etec Bartolomeu Bueno da Silva - Anhanguera', 'e262dir@cps.sp.gov.br', 262, 'Santana de Parnaíba'),
(15, 'Etec Benedito Storani', 'e042dir@cps.sp.gov.br', 42, 'Adamantina'),
(16, 'Etec Bento Carlos Botelho do Amaral', 'e256dir@cps.sp.gov.br', 256, 'Guariba'),
(17, 'Etec Bento Quirino', 'e043dir@cps.sp.gov.br', 43, 'Campinas'),
(18, 'Etec Carlos de Campos - Brás', 'e045dir@cps.sp.gov.br', 45, 'São Paulo'),
(19, 'Etec Carolina Carinhato Sampaio - Jardim São Luís', 'e134dir@cps.sp.gov.br', 134, 'São Paulo'),
(45, 'ETEC Itaim Paulista', 'e245adm@cps.sp.gov.br', 245, 'São Paulo');

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
  `comentario` char(100) NOT NULL,
  `tipoUsuario` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_fale_conosco`
--

INSERT INTO `tb_fale_conosco` (`idFaleConosco`, `nome`, `email`, `categoria`, `comentario`, `tipoUsuario`) VALUES
(9, 'DataSphere Technologies', 'datasphere@gmail.com', 'elogio', 'salve', 'Empresa');

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
(14, 4),
(14, 1),
(15, 4),
(15, 1),
(16, 4),
(16, 1);

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
(25, 'ingles', 'intermediario', 15),
(26, 'espanhol', 'iniciante', 15),
(27, 'ingles', 'intermediario', 16),
(29, 'ingles', 'intermediario', 14);

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
(16, 3, '', '', '2024-10-12', 14),
(17, 3, '', '', '2000-12-10', 15),
(18, 1, '', '', '2010-12-10', 15),
(19, 4, '', '', '2024-06-06', 16),
(20, 3, '', '', '2024-12-08', 16),
(21, 4, '', '', '12321-03-21', 16),
(22, 6, '', '', '123123-03-21', 16);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_requisito`
--

CREATE TABLE `tb_requisito` (
  `idRequisito` int(11) NOT NULL,
  `requisito` varchar(400) NOT NULL
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
(12, 'SEI LA2'),
(13, 'python'),
(14, 'CSS'),
(15, 'JQUERY'),
(16, 'Experiência comprovada em aconselhamento nutricional e desenvolvimento de planos alimentares.'),
(17, 'Conhecimento atualizado sobre as últimas pesquisas e tendências em nutrição.'),
(18, 'Capacidade de trabalhar de forma independente e em equipe.'),
(19, 'Comprometimento com a melhoria contínua e a educação profissional.'),
(20, 'Certificação como eletricista.'),
(21, 'Experiência comprovada em instalações elétricas comerciais e residenciais.'),
(22, 'Conhecimento aprofundado das normas de segurança elétrica.'),
(23, 'Habilidade para interpretar esquemas elétricos e diagramas.'),
(24, 'JavaScript'),
(25, 'Git'),
(26, 'Node.js'),
(27, 'Experiência prática no desenvolvimento de APIs RESTful e serviços web.'),
(28, 'Experiência sólida em design e otimização de bancos de dados relacionais e não relacionais.'),
(29, 'Java Script'),
(30, 'Mysql'),
(31, 'sql server'),
(32, 'Realizar levantamentos topográficos e cadastrar informações relevantes para projetos de construção.'),
(33, 'Formação técnica em Edificações ou áreas relacionadas.'),
(34, 'vExperiência comprovada em projetos de construção civil e/ou manutenção predial.'),
(35, 'Conhecimento sólido em leitura e interpretação de projetos arquitetônicos e de engenharia.'),
(36, 'Formação técnica em Eletrotécnica ou área relacionada.'),
(37, 'Experiência comprovada em instalações elétricas industriais.'),
(38, 'Capacidade de diagnosticar e solucionar problemas em sistemas elétricos de forma eficiente.'),
(39, 'Excelentes habilidades de comunicação e trabalho em equipe.'),
(40, 'Conhecimento em linguagens de programação'),
(41, 'Trabalho em equipe'),
(42, 'Boa lógica de programação');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_requisito_vaga`
--

CREATE TABLE `tb_requisito_vaga` (
  `fk_idVaga` int(11) NOT NULL,
  `fk_idRequisito` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_requisito_vaga`
--

INSERT INTO `tb_requisito_vaga` (`fk_idVaga`, `fk_idRequisito`) VALUES
(7, 16),
(7, 17),
(7, 18),
(7, 19),
(8, 20),
(8, 21),
(8, 22),
(8, 23),
(9, 14),
(9, 10),
(9, 24),
(9, 25),
(17, 29),
(18, 30),
(18, 31),
(20, 33),
(20, 34),
(20, 35),
(21, 36),
(21, 37),
(21, 38),
(21, 39),
(22, 40),
(22, 41),
(22, 42);

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
(12, '(11) 98428-6282', 14),
(13, '(11) 98989-8989', 15),
(14, '(11) 95828-1911', 16);

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
(9, '(11) 94489-032', 14),
(11, '11963939546', 20),
(12, '(11) 98989-8989', 27);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_telefone_etec`
--

CREATE TABLE `tb_telefone_etec` (
  `idTelefoneEtec` int(11) NOT NULL,
  `telefoneEtec` char(16) NOT NULL,
  `fk_idEtec` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_telefone_etec`
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
-- Estrutura da tabela `tb_vaga`
--

CREATE TABLE `tb_vaga` (
  `idVaga` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `logradouro` varchar(60) NOT NULL,
  `numero` int(11) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `cidade` varchar(40) NOT NULL,
  `bairro` varchar(40) NOT NULL,
  `estado` varchar(25) NOT NULL,
  `modalidade` varchar(30) NOT NULL,
  `salario` double(10,2) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `inicio` varchar(6) NOT NULL,
  `termino` varchar(6) NOT NULL,
  `periodo` varchar(30) NOT NULL,
  `area` varchar(50) NOT NULL,
  `escala` varchar(10) NOT NULL,
  `fk_idEmpresa` int(11) NOT NULL,
  `fk_idCurso` int(11) NOT NULL,
  `preenchida` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_vaga`
--

INSERT INTO `tb_vaga` (`idVaga`, `nome`, `logradouro`, `numero`, `cep`, `cidade`, `bairro`, `estado`, `modalidade`, `salario`, `descricao`, `inicio`, `termino`, `periodo`, `area`, `escala`, `fk_idEmpresa`, `fk_idCurso`, `preenchida`) VALUES
(7, 'Nutricionista', 'Avenida Queimada', 55, '06429-215', 'Barueri', 'Residencial Morada dos Lagos', 'SP', 'presencial', 1650.00, 'Realizar avaliações nutricionais abrangentes para determinar as necessidades dietéticas individuais', '08:00', '15:00', 'diurno', 'Saúde', 'seg-sex', 20, 12, 0),
(8, 'Eletricista', 'Praça Osvaldo Valério', 42, '12043-040', 'Taubaté', 'Cecap', 'SP', 'presencial', 2100.00, 'Realizar instalações elétricas em conformidade com os códigos e normas locais. Diagnosticar e soluci', '08:00', '16:00', 'matinal', 'Industria', 'seg-sex', 14, 12, 0),
(9, 'Programador Front-End', 'Rua X 33', 50, '74921-410', 'Aparecida de Goiânia', 'Sítios Santa Luzia Residencial', 'GO', 'home-office', 2200.00, 'Estamos buscando um talentoso Programador Front-End para se juntar à nossa equipe dinâmica. O candid', '10:00', '16:00', 'matinal', 'Tecnologia', 'Seg-Sex', 14, 11, 0),
(17, 'Gerenciamento de projetos', 'Rua Francisco Nunes Cubas', 359, '08450-460', 'São Paulo', 'Jardim Fanganiello', 'SP', 'home-office', 1200.00, 'Gerenciar projetos no geral', '07:00', '12:00', 'diurno', 'Tecnologia', 'seg-sex', 14, 11, 0),
(18, 'DBA', 'Rua Antônio Soares Pais', 234, '08460-500', 'São Paulo', 'Vila São Geraldo', 'SP', 'presencial', 2000.00, 'Criar e analisar bancos de dados', '17:00', '23:00', 'noturno', 'Tecnologia', 'seg-sex', 14, 11, 0),
(20, 'Técnico em Edificações', 'Rua Antônio Soares Pais', 23, '08460-500', 'São Paulo', 'Vila São Geraldo', 'SP', 'presencial', 1600.00, 'Estamos em busca de um profissional qualificado e experiente para integrar nossa equipe como Técnico em Edificações. O candidato ideal será responsável por apoiar e coordenar atividades relacionadas à construção e manutenção de edifícios, garantindo padrões de qualidade, segurança e conformidade com regulamentações.', '07:00', '14:00', 'matinal', 'Industria', 'seg-sex', 20, 13, 0),
(21, 'Técnico em Eletrotécnica', 'Rua Domingos da Cruz', 55, '08461-570', 'São Paulo', 'Jardim São Paulo(Zona Leste)', 'SP', 'presencial', 1530.00, 'Estamos em busca de um profissional altamente qualificado para integrar nossa equipe como Técnico em Eletrotécnica. O candidato ideal terá uma sólida formação técnica, experiência prática e habilidades excepcionais em lidar com sistemas elétricos complexos. Este papel é fundamental para garantir o funcionamento eficiente e seguro de nossos equipamentos elétricos, contribuindo para a confiabilidade de nossas operações.', '08:00', '15:00', 'matinal', 'Industria', 'seg-sex', 20, 14, 1),
(22, 'Desenvolvedor full stack', 'Rua Feliciano de Mendonça', 290, '08460-365', 'São Paulo', 'Jardim São Paulo(Zona Leste)', 'SP', 'hibrido', 1800.00, 'Dar suporte a aplicações node js, php e Python', '08:00', '12:00', 'diurno', 'Tecnologia', 'seg-sex', 14, 11, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_vaga_aluno`
--

CREATE TABLE `tb_vaga_aluno` (
  `fk_idAluno` int(11) NOT NULL,
  `fk_idVaga` int(11) NOT NULL,
  `aprovado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_vaga_aluno`
--

INSERT INTO `tb_vaga_aluno` (`fk_idAluno`, `fk_idVaga`, `aprovado`) VALUES
(14, 8, 1),
(14, 9, 1),
(14, 21, 1),
(15, 22, 1),
(16, 21, 0),
(16, 18, 0),
(16, 22, 1);

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
-- Índices para tabela `tb_aluno_curso_etec`
--
ALTER TABLE `tb_aluno_curso_etec`
  ADD KEY `fk_idAluno` (`fk_idAluno`),
  ADD KEY `fk_idCurso` (`fk_idCurso`),
  ADD KEY `fk_idEtec` (`fk_idEtec`);

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
  MODIFY `idAluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `tb_conhecimento`
--
ALTER TABLE `tb_conhecimento`
  MODIFY `idConhecimento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `tb_curso`
--
ALTER TABLE `tb_curso`
  MODIFY `idCurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `tb_eixo`
--
ALTER TABLE `tb_eixo`
  MODIFY `idEixo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `tb_empresa`
--
ALTER TABLE `tb_empresa`
  MODIFY `idEmpresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `tb_etec`
--
ALTER TABLE `tb_etec`
  MODIFY `idEtec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de tabela `tb_experiencia_aluno`
--
ALTER TABLE `tb_experiencia_aluno`
  MODIFY `idExperiaciaAluno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_fale_conosco`
--
ALTER TABLE `tb_fale_conosco`
  MODIFY `idFaleConosco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  MODIFY `idIdiomaAluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `tb_perfil_aluno`
--
ALTER TABLE `tb_perfil_aluno`
  MODIFY `idPerfilAluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `tb_requisito`
--
ALTER TABLE `tb_requisito`
  MODIFY `idRequisito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de tabela `tb_sobre_mim`
--
ALTER TABLE `tb_sobre_mim`
  MODIFY `idSobreMim` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_telefone_aluno`
--
ALTER TABLE `tb_telefone_aluno`
  MODIFY `idTelefoneAluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `tb_telefone_empresa`
--
ALTER TABLE `tb_telefone_empresa`
  MODIFY `idTelefoneEmpresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `tb_telefone_etec`
--
ALTER TABLE `tb_telefone_etec`
  MODIFY `idTelefoneEtec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de tabela `tb_vaga`
--
ALTER TABLE `tb_vaga`
  MODIFY `idVaga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_aluno_curso_etec`
--
ALTER TABLE `tb_aluno_curso_etec`
  ADD CONSTRAINT `tb_aluno_curso_etec_ibfk_1` FOREIGN KEY (`fk_idAluno`) REFERENCES `tb_aluno` (`idAluno`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_aluno_curso_etec_ibfk_2` FOREIGN KEY (`fk_idCurso`) REFERENCES `tb_curso` (`idCurso`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_aluno_curso_etec_ibfk_3` FOREIGN KEY (`fk_idEtec`) REFERENCES `tb_etec` (`idEtec`) ON DELETE CASCADE ON UPDATE NO ACTION;

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
