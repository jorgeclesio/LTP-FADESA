CREATE TABLE curso (
id INTEGER PRIMARY KEY,
nome VARCHAR(30),
carga_horaria INTEGER,
id_instituicao INTEGER
);

CREATE TABLE municipio (
id INTEGER PRIMARY KEY,
nm_municipio VARCHAR(40),
cod_mun INTEGER,
qt_popula VARCHAR(30),
area_mun VARCHAR(30),
coord multipolygon
);

CREATE TABLE usuario (
id INTEGER PRIMARY KEY,
usuario VARCHAR(10),
senha VARCHAR(10),
id_aluno INTEGER
);

CREATE TABLE aluno (
id INTEGER PRIMARY KEY,
nome VARCHAR(20),
sobrenome VARCHAR(20),
endereco VARCHAR(30),
bairro VARCHAR(30),
contato VARCHAR(20),
sexo enum('M','F'),
data_nascimento DATE,
uf CHAR(2),
id_municipio INTEGER,
id_curso INTEGER,
id_instituicao INTEGER,
FOREIGN KEY(id_municipio) REFERENCES municipio (id),
FOREIGN KEY(id_curso) REFERENCES curso (id)
);

CREATE TABLE instituicao (
id INTEGER PRIMARY KEY,
nome VARCHAR(50),
site VARCHAR(50)
);

ALTER TABLE curso ADD FOREIGN KEY(id_instituicao) REFERENCES instituicao (id);
ALTER TABLE usuario ADD FOREIGN KEY(id_aluno) REFERENCES aluno (id);
ALTER TABLE aluno ADD FOREIGN KEY(id_instituicao) REFERENCES instituicao (id);
