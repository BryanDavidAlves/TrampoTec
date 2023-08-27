-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Ago-2023 às 22:31
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
  `login` varchar(40) NOT NULL,
  `senha` char(8) NOT NULL,
  `imagem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_aluno`
--

CREATE TABLE `tb_aluno` (
  `idAluno` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` char(8) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `cpf` char(14) NOT NULL,
  `dtNasc` date NOT NULL,
  `cep` char(10) NOT NULL,
  `imagem` varchar(50) NOT NULL,
  `bairro` varchar(40) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `cidade` varchar(40) NOT NULL,
  `duracaoCurso` char(8) NOT NULL,
  `periodoCurso` char(5) NOT NULL,
  `conclusaoCurso` date NOT NULL,
  `matriculaCurso` int(11) NOT NULL,
  `experiencias` varchar(300) DEFAULT NULL,
  `habilidades` varchar(200) NOT NULL,
  `sobreMim` char(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_aluno`
--

INSERT INTO `tb_aluno` (`idAluno`, `email`, `senha`, `nome`, `cpf`, `dtNasc`, `cep`, `imagem`, `bairro`, `estado`, `cidade`, `duracaoCurso`, `periodoCurso`, `conclusaoCurso`, `matriculaCurso`, `experiencias`, `habilidades`, `sobreMim`) VALUES
(3, '', 'Senha12#', 'fdfsdfs', '266.452.218-35', '2023-08-05', '08247095', '', '', '', '', '', '', '0000-00-00', 0, NULL, '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_aluno_curso`
--

CREATE TABLE `tb_aluno_curso` (
  `fk_idAluno` int(11) NOT NULL,
  `fk_idCurso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_area`
--

CREATE TABLE `tb_area` (
  `idArea` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_conhecimento`
--

CREATE TABLE `tb_conhecimento` (
  `idConhecimento` int(11) NOT NULL,
  `conhecimento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_conhecimento_aluno`
--

CREATE TABLE `tb_conhecimento_aluno` (
  `fk_idConhecimento` int(11) NOT NULL,
  `fk_idAluno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_curso`
--

CREATE TABLE `tb_curso` (
  `idCurso` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `inicio` date NOT NULL,
  `termino` date NOT NULL,
  `fk_idArea` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_curso_etec`
--

CREATE TABLE `tb_curso_etec` (
  `fk_idCurso` int(11) NOT NULL,
  `fk_idEtec` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_empresa`
--

CREATE TABLE `tb_empresa` (
  `idEmpresa` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` char(8) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `cnpj` char(18) NOT NULL,
  `cep` char(8) NOT NULL,
  `logradouro` varchar(30) NOT NULL,
  `numero` int(11) NOT NULL,
  `bairro` varchar(60) NOT NULL,
  `estado` varchar(25) NOT NULL,
  `imagem` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_empresa`
--

INSERT INTO `tb_empresa` (`idEmpresa`, `email`, `senha`, `nome`, `cnpj`, `cep`, `logradouro`, `numero`, `bairro`, `estado`, `imagem`) VALUES
(63, 'laysamelmudes@gmail.com', 'Senha12!', 'LAYSA COCA MELMUDES', '01.827.484/0001-00', '08247095', 'fsfsd', 543, 'fdsfsfs', 'SP', ''),
(64, 'laysamelmudes@gmasdail.com', 'Senha12@', 'LAYSA COCA MELMUDdsaES', '50.932.434/0001-06', '08247095', 'dadas', 43, 'fsfsfs', 'SP', ''),
(65, 'laysamelmudes@gmail.com75', 'Senha12@', 'LAYSA COCA MELMUDES', '95.764.875/0001-76', '08247095', 'kdsalda', 65765, 'gdgdg', 'SP', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_etec`
--

CREATE TABLE `tb_etec` (
  `idEtec` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` char(8) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `codigo` int(11) NOT NULL,
  `imagem` text DEFAULT NULL,
  `municipio` varchar(30) NOT NULL
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
-- Estrutura da tabela `tb_perfil_empresa`
--

CREATE TABLE `tb_perfil_empresa` (
  `idPerfilEmpresa` int(11) NOT NULL,
  `departamento` varchar(30) NOT NULL,
  `descricao` varchar(80) NOT NULL,
  `anoFundacao` int(4) NOT NULL,
  `imagem` text NOT NULL,
  `fk_idEmpresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_professor`
--

CREATE TABLE `tb_professor` (
  `idProfessor` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` char(8) NOT NULL,
  `imagem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_professor_etec`
--

CREATE TABLE `tb_professor_etec` (
  `fk_idProfessor` int(11) NOT NULL,
  `fk_idEtec` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_recomendacao`
--

CREATE TABLE `tb_recomendacao` (
  `idAvaliacao` int(11) NOT NULL,
  `recomendacao` varchar(10) NOT NULL,
  `data` date NOT NULL,
  `fk_idProfessor` int(11) NOT NULL,
  `fk_idAluno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_requisito`
--

CREATE TABLE `tb_requisito` (
  `idRequisito` int(11) NOT NULL,
  `requisito` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_requisito_vaga`
--

CREATE TABLE `tb_requisito_vaga` (
  `fk_idRequisito` int(11) NOT NULL,
  `fk_idVaga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_telefone_aluno`
--

CREATE TABLE `tb_telefone_aluno` (
  `idTelefoneAluno` int(11) NOT NULL,
  `telefoneAluno` char(14) NOT NULL,
  `fk_idAluno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_telefone_empresa`
--

CREATE TABLE `tb_telefone_empresa` (
  `idTelefoneEmpresa` int(11) NOT NULL,
  `numeroTelefone` char(14) NOT NULL,
  `fk_idEmpresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_telefone_etec`
--

CREATE TABLE `tb_telefone_etec` (
  `idTelefoneEtec` int(11) NOT NULL,
  `telefoneEtec` char(14) NOT NULL,
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
  `tipoTrabalho` varchar(10) NOT NULL,
  `salario` double NOT NULL,
  `descricao` char(80) NOT NULL,
  `requisitos` varchar(100) NOT NULL,
  `inicio` time NOT NULL,
  `termino` time NOT NULL,
  `periodo` varchar(10) NOT NULL,
  `curso` varchar(60) NOT NULL,
  `area` varchar(80) NOT NULL,
  `fk_idEmpresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_vaga_aluno`
--

CREATE TABLE `tb_vaga_aluno` (
  `fk_idAluno` int(11) NOT NULL,
  `fk_idVaga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_vaga_curso`
--

CREATE TABLE `tb_vaga_curso` (
  `fk_idVaga` int(11) NOT NULL,
  `fk_idCurso` int(11) NOT NULL
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
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- Índices para tabela `tb_aluno_curso`
--
ALTER TABLE `tb_aluno_curso`
  ADD KEY `fk_idAluno` (`fk_idAluno`),
  ADD KEY `fk_idCurso` (`fk_idCurso`);

--
-- Índices para tabela `tb_area`
--
ALTER TABLE `tb_area`
  ADD PRIMARY KEY (`idArea`);

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
  ADD PRIMARY KEY (`idCurso`),
  ADD KEY `fk_idArea` (`fk_idArea`);

--
-- Índices para tabela `tb_curso_etec`
--
ALTER TABLE `tb_curso_etec`
  ADD KEY `fk_idCurso` (`fk_idCurso`),
  ADD KEY `fk_idEtec` (`fk_idEtec`);

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
  ADD UNIQUE KEY `nome` (`nome`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices para tabela `tb_fale_conosco`
--
ALTER TABLE `tb_fale_conosco`
  ADD PRIMARY KEY (`idFaleConosco`);

--
-- Índices para tabela `tb_perfil_empresa`
--
ALTER TABLE `tb_perfil_empresa`
  ADD PRIMARY KEY (`idPerfilEmpresa`),
  ADD KEY `fk_idTelefoneEmpresa` (`fk_idEmpresa`);

--
-- Índices para tabela `tb_professor`
--
ALTER TABLE `tb_professor`
  ADD PRIMARY KEY (`idProfessor`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices para tabela `tb_professor_etec`
--
ALTER TABLE `tb_professor_etec`
  ADD KEY `fk_idEtec` (`fk_idEtec`),
  ADD KEY `fk_idProfessor` (`fk_idProfessor`);

--
-- Índices para tabela `tb_recomendacao`
--
ALTER TABLE `tb_recomendacao`
  ADD PRIMARY KEY (`idAvaliacao`),
  ADD KEY `fk_idAluno` (`fk_idAluno`),
  ADD KEY `fk_idProfessor` (`fk_idProfessor`);

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
-- Índices para tabela `tb_telefone_aluno`
--
ALTER TABLE `tb_telefone_aluno`
  ADD PRIMARY KEY (`idTelefoneAluno`),
  ADD KEY `fk_idAluno` (`fk_idAluno`);

--
-- Índices para tabela `tb_telefone_empresa`
--
ALTER TABLE `tb_telefone_empresa`
  ADD PRIMARY KEY (`idTelefoneEmpresa`),
  ADD KEY `fk_idEmpresa` (`fk_idEmpresa`);

--
-- Índices para tabela `tb_telefone_etec`
--
ALTER TABLE `tb_telefone_etec`
  ADD PRIMARY KEY (`idTelefoneEtec`),
  ADD KEY `fk_idEtec` (`fk_idEtec`);

--
-- Índices para tabela `tb_vaga`
--
ALTER TABLE `tb_vaga`
  ADD PRIMARY KEY (`idVaga`),
  ADD KEY `fk_idEmpresa` (`fk_idEmpresa`);

--
-- Índices para tabela `tb_vaga_aluno`
--
ALTER TABLE `tb_vaga_aluno`
  ADD KEY `fk_idAluno` (`fk_idAluno`),
  ADD KEY `fk_idVaga` (`fk_idVaga`);

--
-- Índices para tabela `tb_vaga_curso`
--
ALTER TABLE `tb_vaga_curso`
  ADD KEY `fk_idCurso` (`fk_idCurso`),
  ADD KEY `fk_idVaga` (`fk_idVaga`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_aluno`
--
ALTER TABLE `tb_aluno`
  MODIFY `idAluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_area`
--
ALTER TABLE `tb_area`
  MODIFY `idArea` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_conhecimento`
--
ALTER TABLE `tb_conhecimento`
  MODIFY `idConhecimento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_curso`
--
ALTER TABLE `tb_curso`
  MODIFY `idCurso` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_empresa`
--
ALTER TABLE `tb_empresa`
  MODIFY `idEmpresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT de tabela `tb_etec`
--
ALTER TABLE `tb_etec`
  MODIFY `idEtec` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_fale_conosco`
--
ALTER TABLE `tb_fale_conosco`
  MODIFY `idFaleConosco` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_perfil_empresa`
--
ALTER TABLE `tb_perfil_empresa`
  MODIFY `idPerfilEmpresa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_professor`
--
ALTER TABLE `tb_professor`
  MODIFY `idProfessor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_recomendacao`
--
ALTER TABLE `tb_recomendacao`
  MODIFY `idAvaliacao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_requisito`
--
ALTER TABLE `tb_requisito`
  MODIFY `idRequisito` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_telefone_aluno`
--
ALTER TABLE `tb_telefone_aluno`
  MODIFY `idTelefoneAluno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_telefone_empresa`
--
ALTER TABLE `tb_telefone_empresa`
  MODIFY `idTelefoneEmpresa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_telefone_etec`
--
ALTER TABLE `tb_telefone_etec`
  MODIFY `idTelefoneEtec` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_vaga`
--
ALTER TABLE `tb_vaga`
  MODIFY `idVaga` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_aluno_curso`
--
ALTER TABLE `tb_aluno_curso`
  ADD CONSTRAINT `tb_aluno_curso_ibfk_1` FOREIGN KEY (`fk_idAluno`) REFERENCES `tb_aluno` (`idAluno`),
  ADD CONSTRAINT `tb_aluno_curso_ibfk_2` FOREIGN KEY (`fk_idCurso`) REFERENCES `tb_curso` (`idCurso`);

--
-- Limitadores para a tabela `tb_conhecimento_aluno`
--
ALTER TABLE `tb_conhecimento_aluno`
  ADD CONSTRAINT `tb_conhecimento_aluno_ibfk_1` FOREIGN KEY (`fk_idAluno`) REFERENCES `tb_aluno` (`idAluno`),
  ADD CONSTRAINT `tb_conhecimento_aluno_ibfk_2` FOREIGN KEY (`fk_idConhecimento`) REFERENCES `tb_conhecimento` (`idConhecimento`);

--
-- Limitadores para a tabela `tb_curso`
--
ALTER TABLE `tb_curso`
  ADD CONSTRAINT `tb_curso_ibfk_1` FOREIGN KEY (`fk_idArea`) REFERENCES `tb_area` (`idArea`);

--
-- Limitadores para a tabela `tb_curso_etec`
--
ALTER TABLE `tb_curso_etec`
  ADD CONSTRAINT `tb_curso_etec_ibfk_1` FOREIGN KEY (`fk_idCurso`) REFERENCES `tb_curso` (`idCurso`),
  ADD CONSTRAINT `tb_curso_etec_ibfk_2` FOREIGN KEY (`fk_idEtec`) REFERENCES `tb_etec` (`idEtec`);

--
-- Limitadores para a tabela `tb_perfil_empresa`
--
ALTER TABLE `tb_perfil_empresa`
  ADD CONSTRAINT `tb_perfil_empresa_ibfk_1` FOREIGN KEY (`fk_idEmpresa`) REFERENCES `tb_empresa` (`idEmpresa`);

--
-- Limitadores para a tabela `tb_professor_etec`
--
ALTER TABLE `tb_professor_etec`
  ADD CONSTRAINT `tb_professor_etec_ibfk_1` FOREIGN KEY (`fk_idEtec`) REFERENCES `tb_etec` (`idEtec`),
  ADD CONSTRAINT `tb_professor_etec_ibfk_2` FOREIGN KEY (`fk_idProfessor`) REFERENCES `tb_professor` (`idProfessor`);

--
-- Limitadores para a tabela `tb_recomendacao`
--
ALTER TABLE `tb_recomendacao`
  ADD CONSTRAINT `tb_recomendacao_ibfk_1` FOREIGN KEY (`fk_idAluno`) REFERENCES `tb_aluno` (`idAluno`),
  ADD CONSTRAINT `tb_recomendacao_ibfk_2` FOREIGN KEY (`fk_idProfessor`) REFERENCES `tb_professor` (`idProfessor`);

--
-- Limitadores para a tabela `tb_requisito_vaga`
--
ALTER TABLE `tb_requisito_vaga`
  ADD CONSTRAINT `tb_requisito_vaga_ibfk_1` FOREIGN KEY (`fk_idRequisito`) REFERENCES `tb_requisito` (`idRequisito`),
  ADD CONSTRAINT `tb_requisito_vaga_ibfk_2` FOREIGN KEY (`fk_idVaga`) REFERENCES `tb_vaga` (`idVaga`);

--
-- Limitadores para a tabela `tb_telefone_aluno`
--
ALTER TABLE `tb_telefone_aluno`
  ADD CONSTRAINT `tb_telefone_aluno_ibfk_1` FOREIGN KEY (`fk_idAluno`) REFERENCES `tb_aluno` (`idAluno`);

--
-- Limitadores para a tabela `tb_telefone_empresa`
--
ALTER TABLE `tb_telefone_empresa`
  ADD CONSTRAINT `tb_telefone_empresa_ibfk_1` FOREIGN KEY (`fk_idEmpresa`) REFERENCES `tb_empresa` (`idEmpresa`);

--
-- Limitadores para a tabela `tb_telefone_etec`
--
ALTER TABLE `tb_telefone_etec`
  ADD CONSTRAINT `tb_telefone_etec_ibfk_1` FOREIGN KEY (`fk_idEtec`) REFERENCES `tb_etec` (`idEtec`);

--
-- Limitadores para a tabela `tb_vaga`
--
ALTER TABLE `tb_vaga`
  ADD CONSTRAINT `tb_vaga_ibfk_1` FOREIGN KEY (`fk_idEmpresa`) REFERENCES `tb_empresa` (`idEmpresa`);

--
-- Limitadores para a tabela `tb_vaga_aluno`
--
ALTER TABLE `tb_vaga_aluno`
  ADD CONSTRAINT `tb_vaga_aluno_ibfk_1` FOREIGN KEY (`fk_idAluno`) REFERENCES `tb_aluno` (`idAluno`),
  ADD CONSTRAINT `tb_vaga_aluno_ibfk_2` FOREIGN KEY (`fk_idVaga`) REFERENCES `tb_vaga` (`idVaga`);

--
-- Limitadores para a tabela `tb_vaga_curso`
--
ALTER TABLE `tb_vaga_curso`
  ADD CONSTRAINT `tb_vaga_curso_ibfk_1` FOREIGN KEY (`fk_idCurso`) REFERENCES `tb_curso` (`idCurso`),
  ADD CONSTRAINT `tb_vaga_curso_ibfk_2` FOREIGN KEY (`fk_idVaga`) REFERENCES `tb_vaga` (`idVaga`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
