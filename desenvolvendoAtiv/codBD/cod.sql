
drop database if exists bd_ativ;
create database if not exists `bd_ativ`;
use bd_ativ;

create table usuario(
    id_usuario int not null AUTO_INCREMENT PRIMARY KEY,
    nome_usuario varchar(40), 
    email_usario varchar(70), 
    nascimento_usuario date, 
    altura_usuario float(4,2), 
    peso_usuario float(5,2),
    senha_usuario varchar(40)
)
create table anamnese(
    id_anamnese int not null AUTO_INCREMENT PRIMARY KEY,
    id_usuario int,
    nivelativo_anamnese varchar(30),
    fumante_anamnese varchar(30),
    doenca_anamnese varchar(30)
)
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
    imagem_desafio text
) DEFAULT charset = utf8;

create table exercicio(
    id_exercicio int not null AUTO_INCREMENT PRIMARY KEY,
    nome_exercicio varchar(40),
    foco_exercicio varchar(40),
    desc_exercicio text,
    duracao_exercicio time,
    equipamentos_exercicio varchar(255),
    contra_indicacoes_exercicio varchar(255),
    video_exercicio text,
    imagem_exercicio text
) DEFAULT charset = utf8;

create table autoavaliacao(
    id_autoavaliacao int not null AUTO_INCREMENT PRIMARY KEY,
    id_exercicio int not null,
    id_usuario int not null,
    rendimento_autoavaliacao varchar(40),
    cansasso_autoavaliacao varchar(20),
    dor_autoavaliacao varchar(20),
    dornopeito_autoavaliacao varchar(20)
) DEFAULT charset = utf8;

create table favoritos(
    id_favoritos int not null AUTO_INCREMENT PRIMARY KEY,
    id_usuario int not null,
    id_exercicio int not null
) DEFAULT charset = utf8;

create table evolucaoDesafios(
    id_evolucaoDesafios int not null AUTO_INCREMENT PRIMARY KEY,
    id_desafio int not null,
    id_usuario int not null,
) DEFAULT charset = utf8;

create table diasCompletosDesafios(
    id_diasCompletosDesafios int not null AUTO_INCREMENT PRIMARY KEY,
    id_desafio int not null,
    id_usuario int not null,
    id_video int not null,
    id_autoavaliacao int not null
)DEFAULT charset = utf8;

INSERT INTO
    `exercicio`(
        `nome_exercicio`,
        `foco_exercicio`,
        `desc_exercicio`,
        `duracao_exercicio`,
        `equipamentos_exercicio`,
        `contra_indicacoes_exercicio`,
        `video_exercicio`,
        `imagem_exercicio`
    )
VALUES
    (
        "Teste 1",
        "Equilíbrio",
        "Exercício focado",
        "00:12:35",
        "asdasd",
        "fwetgrfuhduhg",
        '<iframe width="560" height="315" src="https://www.youtube.com/embed/HhoATZ1Imtw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
        "https://i.pinimg.com/736x/db/21/36/db2136077e65ceb776414923880ff726.jpg"
    ), (
        "Teste 2",
        "AAAAAAAAAA",
        "Exercício focado",
        "00:12:35",
        "asdasd",
        "fwetgrfuhduhg",
        '<iframe width="560" height="315" src="https://www.youtube.com/embed/LZyybvVx-js" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
        "https://unsplash.com/photos/3ERr2ip5T9k"
    );

