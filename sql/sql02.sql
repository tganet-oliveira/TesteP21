CREATE TABLE IF NOT EXISTS `tb_torcedores` (
  `id_torcedor` int(11) NOT NULL AUTO_INCREMENT,
  `ds_nome` varchar(200) NOT NULL COMMENT 'Campo que armazena o nome do torcedor',
  `ds_cpf` varchar(19) NOT NULL COMMENT 'Campo que armazena o cpf do torcedor',
  `ds_cep` varchar(10) NOT NULL COMMENT 'Campo que armazena o cep do torcedor',
  `ds_endereco` varchar(250) NOT NULL COMMENT 'Campo que armazena o endereco do torcedor',
  `ds_bairro` varchar(100) DEFAULT NULL COMMENT 'Campo que armazena o bairro do torcedor',
  `ds_cidade` varchar(100) DEFAULT NULL COMMENT 'Campo que armazena a cidade do torcedor',,
  `ds_uf` char(2) DEFAULT NULL COMMENT 'Campo que armazena o sigla do estado do torcedor',,
  `ds_telefone` varchar(45) DEFAULT NULL COMMENT 'Campo que armazena o telefone do torcedor',,
  `ds_email` varchar(100) DEFAULT NULL COMMENT 'Campo que armazena o email do torcedor',,
  `ds_ativo` char(1) DEFAULT NULL COMMENT 'Campo que armazena o status do torcedor',
  PRIMARY KEY (`id_torcedor`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1 COMMENT='Tabela que armazena dados dos torcedores';
