-- Para criar tabela ESTOQUE no banco de dados CURSO_ESTOQUE (obs.: tanto banco quanto tabela tem que ser em minúsculo)
-- Criar o banco "curso_estoque" na mão e depois executar o script abaixo
CREATE TABLE IF NOT EXISTS estoque (
    id_estoque int AUTO_INCREMENT,
    nroproduto varchar(100) not null,
    nome varchar(100) not null,
    categoria varchar(100) not null,
    quantidade int not null,
    fornecedor varchar(100) not null,
    PRIMARY KEY(id_estoque)
);


-- Para criar tabela "categoria" para o banco de dados

CREATE TABLE IF NOT EXISTS categoria(
    id_categoria int AUTO_INCREMENT,
    nome_categoria varchar(200) not null,
    PRIMARY KEY(id_categoria)
);

-- Para criar tabela "fornecedor" para o banco de dados

CREATE TABLE IF NOT EXISTS fornecedor(
    id_fornecedor int AUTO_INCREMENT,
    nome_fornecedor varchar(200) not null,
    PRIMARY KEY(id_fornecedor)
);


-- Para criar tabela de usuário para níveis de acessos

create table if not exists usuarios (
    id_usuario int AUTO_INCREMENT,
    nome_usuario varchar(200) not null,
    mail_usuario varchar(255) not null,
    senha_usuario varchar(15) not null,
    nivel_usuario int(2) not null,
    status_usuario varchar(50) not null,
    PRIMARY key(id_usuario)
    );

    ALTER TABLE usuarios MODIFY senha_usuario varchar(40);