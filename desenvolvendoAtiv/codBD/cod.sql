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