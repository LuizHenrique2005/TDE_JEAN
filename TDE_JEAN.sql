CREATE DATABASE concessionariaproj;

USE concessionariaproj;

CREATE TABLE cliente (
    id_client INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    data_nascimento DATE NOT NULL,
    E_mail VARCHAR(60) NOT NULL,
    Senha VARCHAR(20) NOT NULL,
    telefone VARCHAR(15) NOT NULL
);

CREATE TABLE funcionario(
    id_func INT AUTO_INCREMENT PRIMARY KEY,
    nome_completo VARCHAR(255) NOT NULL,
    CPF VARCHAR(11) NOT NULL,
    data_de_nascimento DATE NOT NULL,
    telefone VARCHAR(15) NOT NULL,
    email VARCHAR(60) NOT NULL,
    senha VARCHAR(60) NOT NULL
);

CREATE TABLE Carros(
    id_car INT AUTO_INCREMENT PRIMARY KEY,
    Modelo VARCHAR(60) NOT NULL,
    Ano VARCHAR(4) NOT NULL,
    cambio VARCHAR(15) NOT NULL,
    Combustivel VARCHAR(15) NOT NULL,
    Cor VARCHAR(60) NOT NULL
);

INSERT INTO cliente (nome, data_nascimento, E_mail, Senha, telefone) VALUES
('João Silva', '1985-06-15', 'joao.silva@gmail.com', 'senha123', '+5511998765432'),
('Maria Souza', '1990-07-20', 'maria.souza@gmail.com', 'senha456', '+5511987654321'),
('Carlos Lima', '1978-08-30', 'carlos.lima@gmail.com', 'senha789', '+5511976543210');

INSERT INTO funcionario (nome_completo, CPF, data_de_nascimento, telefone, email, senha) VALUES
('Ana Pereira', '12345678901', '1982-03-25', '+5511965432109', 'ana.pereira@gmail.com', 'senha123'),
('Pedro Oliveira', '23456789012', '1975-12-15', '+5511954321098', 'pedro.oliveira@gmail.com', 'senha456'),
('Clara Silva', '34567890123', '1992-01-05', '+5511943210987', 'clara.silva@gmail.com', 'senha789');

INSERT INTO Carros (Modelo, Ano, cambio, Combustivel, Cor) VALUES
('Toyota Corolla', '2020', 'Automático', 'Gasolina', 'Preto'),
('Honda Civic', '2019', 'Manual', 'Gasolina', 'Branco'),
('Ford Focus', '2018', 'Automático', 'Diesel', 'Azul');

SELECT * FROM Carros;
SELECT * FROM cliente;
SELECT * FROM funcionario;
