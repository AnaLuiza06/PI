create table videosDesafio(
	id_videosDesafio int NOT null AUTO_INCREMENT PRIMARY KEY,
    id_desafio int not null,
    id_video int not null
) DEFAULT charset = utf8;

create TABLE desafios(
	id_desafios int not null AUTO_INCREMENT PRIMARY KEY,
    nome_desafios varchar(40),
    desc_desafios text,
    duracao_desafios int,
    contra_indicacoes_desafio varchar(100),
    imagem_desafio varchar(100)
)DEFAULT charset = utf8;

create table exercicio(
	id_exercicio int not null AUTO_INCREMENT PRIMARY KEY,
    nome_exercicio varchar(40),
    foco_exercicio varchar(40),
    desc_exercicio text,
    duracao_exercicio time,
    equipamentos_exercicio varchar(100),
    contra_indicacoes_exercicio varchar(100),
    video_exercicio varchar(100),
    imagem_exercicio varchar(100)
)DEFAULT charset = utf8;

create table autoavaliacao(
    id_autoavaliacao int not null AUTO_INCREMENT PRIMARY KEY,
    id_exercicio int not null,
    id_usuario int not null,
    rendimento_autoavaliacao varchar(40),
    cansasso_autoavaliacao varchar(20),
    dor_autoavaliacao varchar(20),
    dornopeito_autoavaliacao varchar(20)
)DEFAULT charset = utf8;