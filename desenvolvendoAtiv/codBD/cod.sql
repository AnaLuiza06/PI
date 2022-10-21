
drop database if exists bd_ativ;
create database if not exists `bd_ativ`;
use bd_ativ;

create table adm(
    id_adm int not null AUTO_INCREMENT PRIMARY KEY,
    nome_adm varchar(40), 
    email_adm varchar(70), 
    nascimento_adm date,
    senha_adm varchar(40)
)   DEFAULT charset = utf8;

create table progressoDesafio(
    id_progresso int not null AUTO_INCREMENT PRIMARY KEY,
    id_usuario int,
    id_desafio int,
    id_video int
)   DEFAULT charset = utf8;

create table evolucaoDesafio(
    id_evolucao int not null AUTO_INCREMENT PRIMARY KEY,
    id_usuario int,
    id_desafio int,
    finalisa_desafio int
)   DEFAULT charset = utf8;

create table registraDesafio(
    id_registro int not null AUTO_INCREMENT PRIMARY KEY,
    id_usuario int,
    id_desafio int,
    id_exercicio int,
    duracao_desafio int
)   DEFAULT charset = utf8;

create table duvidaUsuario(
    id_duvida int not null AUTO_INCREMENT PRIMARY KEY,
    id_usuario int,
    id_adm int,
    mensagem_duvida text,
    resposta_divida text,
    data_duvida date,
    status_duvida int
)   DEFAULT charset = utf8;

create table usuario(
    id_usuario int not null AUTO_INCREMENT PRIMARY KEY,
    nome_usuario varchar(40), 
    email_usario varchar(70), 
    nascimento_usuario date, 
    altura_usuario float(4,2), 
    peso_usuario float(5,2),
    senha_usuario varchar(40)
)   DEFAULT charset = utf8;

create table anamnese(
    id_anamnese int not null AUTO_INCREMENT PRIMARY KEY,
    id_usuario int,
    fumante_anamnese varchar(30),
    pcardiaco_anamnese varchar(30),
    pressao_anamnese varchar(30),
    diabetes_anamnese varchar(30),
    lesao_anamnese varchar(30),
    ativo_anamnese varchar(30),
    dorpeito_anamnese varchar(30)
) DEFAULT charset = utf8;

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
    data_autoavaliacao date,
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
    id_usuario int not null
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

