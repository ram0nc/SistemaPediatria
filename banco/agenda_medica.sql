-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07-Nov-2014 às 01:44
-- Versão do servidor: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `agenda_medica`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
  `idAgenda` int(11) NOT NULL AUTO_INCREMENT,
  `diaSemana` int(11) DEFAULT NULL,
  `horarioInicio` time DEFAULT NULL,
  `horarioFinal` time DEFAULT NULL,
  `duracaoConsulta` time DEFAULT NULL,
  `limiteEncaixes` int(11) DEFAULT NULL,
  `Medico_idMedico` int(11) NOT NULL,
  PRIMARY KEY (`idAgenda`,`Medico_idMedico`),
  KEY `fk_Agenda_Medico_idx` (`Medico_idMedico`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `consulta`
--

CREATE TABLE IF NOT EXISTS `consulta` (
  `idConsulta` int(11) NOT NULL AUTO_INCREMENT,
  `data` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `encaixe` tinyint(1) DEFAULT NULL,
  `novoPaciente` tinyint(1) DEFAULT NULL,
  `Paciente_idPaciente` int(11) NOT NULL,
  `Prontuario_idProntuario` int(11) NOT NULL,
  `Medico_idMedico` int(11) NOT NULL,
  PRIMARY KEY (`idConsulta`,`Paciente_idPaciente`,`Prontuario_idProntuario`,`Medico_idMedico`),
  KEY `fk_Consulta_Paciente1_idx` (`Paciente_idPaciente`),
  KEY `fk_Consulta_Prontuario1_idx` (`Prontuario_idProntuario`),
  KEY `fk_Consulta_Medico1_idx` (`Medico_idMedico`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `endececo`
--

CREATE TABLE IF NOT EXISTS `endececo` (
  `idEndececo` int(11) NOT NULL AUTO_INCREMENT,
  `logradoudo` varchar(60) DEFAULT NULL,
  `numero` varchar(15) DEFAULT NULL,
  `complemento` varchar(60) DEFAULT NULL,
  `bairro` varchar(30) DEFAULT NULL,
  `municipio` varchar(45) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `uf` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`idEndececo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `exame`
--

CREATE TABLE IF NOT EXISTS `exame` (
  `idExame` int(11) NOT NULL AUTO_INCREMENT,
  `nome_exame` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`idExame`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `exame`
--

INSERT INTO `exame` (`idExame`, `nome_exame`) VALUES
(1, 'fezes');

-- --------------------------------------------------------

--
-- Estrutura da tabela `exame_has_prontuario`
--

CREATE TABLE IF NOT EXISTS `exame_has_prontuario` (
  `Exame_idExame` int(11) NOT NULL,
  `Prontuario_idProntuario` int(11) NOT NULL,
  PRIMARY KEY (`Exame_idExame`,`Prontuario_idProntuario`),
  KEY `fk_Exame_has_Prontuario_Prontuario1_idx` (`Prontuario_idProntuario`),
  KEY `fk_Exame_has_Prontuario_Exame1_idx` (`Exame_idExame`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `medicamento`
--

CREATE TABLE IF NOT EXISTS `medicamento` (
  `idMedicamento` int(11) NOT NULL AUTO_INCREMENT,
  `nome_medicamento` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`idMedicamento`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Extraindo dados da tabela `medicamento`
--

INSERT INTO `medicamento` (`idMedicamento`, `nome_medicamento`) VALUES
(9, 'anador'),
(10, 'doril'),
(11, 'naldecom gotas'),
(12, 'bezetacil'),
(13, 'cloridato de bezentanina'),
(14, 'apracur'),
(15, 'doflex'),
(16, 'anador'),
(17, 'doril'),
(18, 'bezetacil'),
(19, 'cloridato de bezentanina'),
(20, 'neosaldina'),
(21, 'naldecom comprimido'),
(22, 'doril');

-- --------------------------------------------------------

--
-- Estrutura da tabela `medico`
--

CREATE TABLE IF NOT EXISTS `medico` (
  `idMedico` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(60) DEFAULT NULL,
  `crm` varchar(30) DEFAULT NULL,
  `senha` varchar(60) NOT NULL,
  PRIMARY KEY (`idMedico`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE IF NOT EXISTS `paciente` (
  `idPaciente` int(11) NOT NULL AUTO_INCREMENT,
  `nome_crianca` varchar(45) DEFAULT NULL,
  `nomeMae` varchar(45) DEFAULT NULL,
  `nomePai` varchar(45) DEFAULT NULL,
  `dataNascimento` date DEFAULT NULL,
  `sexo` varchar(15) DEFAULT NULL,
  `Endececo_idEndececo` int(11) NOT NULL,
  `PlanoSaude_idPlanoSaude` int(11) NOT NULL,
  PRIMARY KEY (`idPaciente`,`Endececo_idEndececo`,`PlanoSaude_idPlanoSaude`),
  KEY `fk_Paciente_Endececo1_idx` (`Endececo_idEndececo`),
  KEY `fk_Paciente_PlanoSaude1_idx` (`PlanoSaude_idPlanoSaude`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `planosaude`
--

CREATE TABLE IF NOT EXISTS `planosaude` (
  `idPlanoSaude` int(11) NOT NULL AUTO_INCREMENT,
  `nome_plano` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idPlanoSaude`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `planosaude`
--

INSERT INTO `planosaude` (`idPlanoSaude`, `nome_plano`) VALUES
(1, 'sus'),
(2, 'amil');

-- --------------------------------------------------------

--
-- Estrutura da tabela `prescricao`
--

CREATE TABLE IF NOT EXISTS `prescricao` (
  `idPrescricao` int(11) NOT NULL AUTO_INCREMENT,
  `dosagem` varchar(30) DEFAULT NULL,
  `administracao` varchar(90) DEFAULT NULL,
  `tempoUso` varchar(30) DEFAULT NULL,
  `Medicamento_idMedicamento` int(11) NOT NULL,
  PRIMARY KEY (`idPrescricao`,`Medicamento_idMedicamento`),
  KEY `fk_Prescricao_Medicamento1_idx` (`Medicamento_idMedicamento`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `prescricao`
--

INSERT INTO `prescricao` (`idPrescricao`, `dosagem`, `administracao`, `tempoUso`, `Medicamento_idMedicamento`) VALUES
(1, '1mg ', 'via oral 1 comprimido no inter', '', 9),
(2, '1mg ', 'via oral 1 comprimido no intervalo de 8hrs', '', 10),
(3, '1mg ', 'via oral 1 comprimido no intervalo de 8hrs', '2 semanas', 12),
(4, '1mg ', 'via oral 1 comprimido no intervalo de 8hrs', '2 semanas', 13),
(5, '2gm', 'tomar de 12 em 12 horas via oral', '1 semana', 20),
(6, '0,5gm', 'tomar de 12 em 12 horas via oral', '1 semana', 21),
(7, '2gm', 'via oral 1 comprimido no intervalo de 8hrs', '1 semana', 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `prontuario`
--

CREATE TABLE IF NOT EXISTS `prontuario` (
  `idProntuario` int(11) NOT NULL AUTO_INCREMENT,
  `peso` double DEFAULT NULL,
  `altura` double DEFAULT NULL,
  `sintomas` text,
  `observacoes` text,
  PRIMARY KEY (`idProntuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `prontuario_has_prescricao`
--

CREATE TABLE IF NOT EXISTS `prontuario_has_prescricao` (
  `Prontuario_idProntuario` int(11) NOT NULL,
  `Prescricao_idPrescricao` int(11) NOT NULL,
  `Prescricao_Medicamento_idMedicamento` int(11) NOT NULL,
  PRIMARY KEY (`Prontuario_idProntuario`,`Prescricao_idPrescricao`,`Prescricao_Medicamento_idMedicamento`),
  KEY `fk_Prontuario_has_Prescricao_Prescricao1_idx` (`Prescricao_idPrescricao`,`Prescricao_Medicamento_idMedicamento`),
  KEY `fk_Prontuario_has_Prescricao_Prontuario1_idx` (`Prontuario_idProntuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefone`
--

CREATE TABLE IF NOT EXISTS `telefone` (
  `idTelefone` int(11) NOT NULL AUTO_INCREMENT,
  `numero` varchar(10) DEFAULT NULL,
  `ddd` varchar(5) DEFAULT NULL,
  `tipoTelefone` varchar(15) DEFAULT NULL,
  `complemento` varchar(30) DEFAULT NULL,
  `Paciente_idPaciente` int(11) NOT NULL,
  `Paciente_Endececo_idEndececo` int(11) NOT NULL,
  PRIMARY KEY (`idTelefone`,`Paciente_idPaciente`,`Paciente_Endececo_idEndececo`),
  KEY `fk_Telefone_Paciente1_idx` (`Paciente_idPaciente`,`Paciente_Endececo_idEndececo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `fk_Agenda_Medico` FOREIGN KEY (`Medico_idMedico`) REFERENCES `medico` (`idMedico`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `consulta`
--
ALTER TABLE `consulta`
  ADD CONSTRAINT `fk_Consulta_Medico1` FOREIGN KEY (`Medico_idMedico`) REFERENCES `medico` (`idMedico`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Consulta_Paciente1` FOREIGN KEY (`Paciente_idPaciente`) REFERENCES `paciente` (`idPaciente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Consulta_Prontuario1` FOREIGN KEY (`Prontuario_idProntuario`) REFERENCES `prontuario` (`idProntuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `exame_has_prontuario`
--
ALTER TABLE `exame_has_prontuario`
  ADD CONSTRAINT `fk_Exame_has_Prontuario_Exame1` FOREIGN KEY (`Exame_idExame`) REFERENCES `exame` (`idExame`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Exame_has_Prontuario_Prontuario1` FOREIGN KEY (`Prontuario_idProntuario`) REFERENCES `prontuario` (`idProntuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `paciente`
--
ALTER TABLE `paciente`
  ADD CONSTRAINT `fk_Paciente_Endececo1` FOREIGN KEY (`Endececo_idEndececo`) REFERENCES `endececo` (`idEndececo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Paciente_PlanoSaude1` FOREIGN KEY (`PlanoSaude_idPlanoSaude`) REFERENCES `planosaude` (`idPlanoSaude`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `prescricao`
--
ALTER TABLE `prescricao`
  ADD CONSTRAINT `fk_Prescricao_Medicamento1` FOREIGN KEY (`Medicamento_idMedicamento`) REFERENCES `medicamento` (`idMedicamento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `prontuario_has_prescricao`
--
ALTER TABLE `prontuario_has_prescricao`
  ADD CONSTRAINT `fk_Prontuario_has_Prescricao_Prescricao1` FOREIGN KEY (`Prescricao_idPrescricao`, `Prescricao_Medicamento_idMedicamento`) REFERENCES `prescricao` (`idPrescricao`, `Medicamento_idMedicamento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Prontuario_has_Prescricao_Prontuario1` FOREIGN KEY (`Prontuario_idProntuario`) REFERENCES `prontuario` (`idProntuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `telefone`
--
ALTER TABLE `telefone`
  ADD CONSTRAINT `fk_Telefone_Paciente1` FOREIGN KEY (`Paciente_idPaciente`, `Paciente_Endececo_idEndececo`) REFERENCES `paciente` (`idPaciente`, `Endececo_idEndececo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
