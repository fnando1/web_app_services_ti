-- Table for technical administrative services
CREATE TABLE servico_tecnico_adm (
    numero int PRIMARY KEY,
    local varchar(255),       -- Specify a length for varchar
    horario datetime,
    descricao varchar(255),   -- Specify a length for varchar
    nome varchar(255),       -- Specify a length for varchar
    e_mail varchar(255),     -- Specify a length for varchar
    telefone bigint,
    senha varchar(255)       -- Specify a length for varchar
);

-- Table for clients
CREATE TABLE cliente (
    codigo int PRIMARY KEY,
    nome varchar(255),       -- Specify a length for varchar
    telefone bigint,
    e_mail varchar(255)      -- Specify a length for varchar
);

-- Table for types of services
CREATE TABLE tipos_servicos (
    redes varchar(255),      -- Specify a length for varchar
    limpeza varchar(255),    -- Specify a length for varchar
    atendimento_remoto varchar(255)  -- Specify a length for varchar
);

-- Table to represent the relationship between services and clients
CREATE TABLE contrata (
    fk_servico_tecnico_adm_numero int,
    fk_cliente_codigo int,
    FOREIGN KEY (fk_servico_tecnico_adm_numero)
        REFERENCES servico_tecnico_adm (numero)
        ON DELETE RESTRICT,
    FOREIGN KEY (fk_cliente_codigo)
        REFERENCES cliente (codigo)
        ON DELETE RESTRICT
);

-- Table to represent the relationship between services and types of services
CREATE TABLE tem (
    fk_servico_tecnico_adm_numero int,
    FOREIGN KEY (fk_servico_tecnico_adm_numero)
        REFERENCES servico_tecnico_adm (numero)
        ON DELETE SET NULL
);
