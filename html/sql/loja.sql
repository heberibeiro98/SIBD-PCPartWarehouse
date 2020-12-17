PRAGMA foreign_keys = ON;

DROP TABLE IF EXISTS Conta;
DROP TABLE IF EXISTS Cliente;
DROP TABLE IF EXISTS Encomenda;
DROP TABLE IF EXISTS Armazem;
DROP TABLE IF EXISTS Artigo;
DROP TABLE IF EXISTS EncomendaArmazemArtigo;
DROP TABLE IF EXISTS Stock;
DROP TABLE IF EXISTS Monitor;
DROP TABLE IF EXISTS Rato;
DROP TABLE IF EXISTS Teclado;
DROP TABLE IF EXISTS Headphones;
DROP TABLE IF EXISTS PSU;
DROP TABLE IF EXISTS CPU;
DROP TABLE IF EXISTS GPU;
DROP TABLE IF EXISTS RAM;
DROP TABLE IF EXISTS Disco;

CREATE TABLE Conta(
  Id INTEGER PRIMARY KEY AUTOINCREMENT,
  Email TEXT NOT NULL,
  Password TEXT NOT NULL
);

CREATE TABLE Cliente(
  NIF INTEGER PRIMARY KEY,
  Nome TEXT NOT NULL,
  Num_telefone NUMBER,
  Id INTEGER REFERENCES Conta
);

CREATE TABLE Encomenda(
  Num_referencia INTEGER PRIMARY KEY,
  Data DATE,
  Metodo_pagamento TEXT,
  Preço_a_pagar INTEGER CHECK(Preço_a_pagar > 0),
  Morada TEXT,
  Conta INTEGER REFERENCES Conta
);

CREATE TABLE Armazem(
  Id INTEGER PRIMARY KEY,
  Morada TEXT NOT NULL,
  Num_telefone TEXT NOT NULL
);

CREATE TABLE Artigo(
  Num_serie INTEGER PRIMARY KEY,
  Marca TEXT,
  Modelo TEXT,
  Preço REAL CHECK(Preço > 0),
  Categoria TEXT
);

CREATE TABLE EncomendaArmazemArtigo(
  Num_referencia INTEGER REFERENCES Encomenda,
  Num_Serie INTEGER REFERENCES Artigo,
  Id INTEGER REFERENCES Armazem,
  PRIMARY KEY(Num_referencia, Num_serie)
);

CREATE TABLE Stock(
  Num_serie INTEGER PRIMARY KEY REFERENCES Artigo,
  Id INTEGER REFERENCES Armazem,
  Quantidade INTEGER CHECK(Quantidade >= 0)
);

CREATE TABLE Monitor(
  Num_serie INTEGER PRIMARY KEY REFERENCES Artigo,
  Tamanho_ecra TEXT,
  Resoluçao_ecra TEXT,
  Refresh_rate TEXT
);

CREATE TABLE Rato(
  Num_serie INTEGER PRIMARY KEY REFERENCES Artigo,
  DPI INTEGER,
  Iluminaçao TEXT,
  Wireless TEXT
);

CREATE TABLE Teclado(
  Num_serie INTEGER PRIMARY KEY REFERENCES Artigo,
  Iluminaçao TEXT,
  Wireless TEXT
);

CREATE TABLE Headphones(
  Num_serie INTEGER PRIMARY KEY REFERENCES Artigo,
  Microfone TEXT,
  Wireless TEXT
);

CREATE TABLE PSU(
  Num_serie INTEGER PRIMARY KEY REFERENCES Artigo,
  Watts TEXT,
  Fan_size TEXT
);

CREATE TABLE CPU(
  Num_serie INTEGER PRIMARY KEY REFERENCES Artigo,
  Clock TEXT,
  Num_cores INTEGER,
  Num_threads, INTEGER,
  Mem_cache TEXT
);

CREATE TABLE GPU(
  Num_serie INTEGER PRIMARY KEY REFERENCES Artigo,
  Vram TEXT,
  Vram_tipo TEXT,
  Clock TEXT,
  Dx_ver INTEGER
);

CREATE TABLE RAM(
  Num_serie INTEGER PRIMARY KEY REFERENCES Artigo,
  Ram_tipo TEXT,
  Clock TEXT,
  Qtdd_memoria TEXT
);

CREATE TABLE Disco(
  Num_serie INTEGER PRIMARY KEY REFERENCES Artigo,
  Tipo_disco TEXT,
  Memoria TEXT
);

---------------------------------------------ARTIGOS---------------------------------------------

                          --MONITORES--
INSERT INTO Artigo VALUES(601867, 'Asus', 'TUF Gaming VG27AQ1A', 499.90, 'Monitor');
INSERT INTO Artigo VALUES(892719, 'AOC', 'U32E2N', 389.90, 'Monitor');
INSERT INTO Artigo VALUES(915758, 'Gigabyte', 'M27F Gaming', 259.90, 'Monitor');
INSERT INTO Artigo VALUES(393303, 'LG', '32UN500-W', 364.90, 'Monitor');

                          --RATOS--
INSERT INTO Artigo VALUES(025986, 'Razer', 'Basilisk Ultimate Wireless', 149.90, 'Rato');
INSERT INTO Artigo VALUES(349864, 'AOC', 'GM200', 19.90, 'Rato');
INSERT INTO Artigo VALUES(306304, 'MSI', 'Clutch GM20 Elite', 29.90, 'Rato');
INSERT INTO Artigo VALUES(467634, 'Asus', 'Strix Impact II', 79.90, 'Rato');

                          --TECLADOS--
INSERT INTO Artigo VALUES(071211, 'Corsair', 'K60 RGB Pro Gaming', 149.90, 'Teclado');
INSERT INTO Artigo VALUES(612069, 'Razer', 'Huntsman Gears 5', 134.90, 'Teclado');
INSERT INTO Artigo VALUES(211896, 'Asus', 'Sagaris GK1100', 99.90, 'Teclado');
INSERT INTO Artigo VALUES(249278, 'Sharkoon', 'Skiller Mech SGK3', 64.90, 'Teclado');

                          --Headphones--
INSERT INTO Artigo VALUES(030707, 'Razer', 'Opus THX', 209.90, 'Headphones');
INSERT INTO Artigo VALUES(526137, 'Razer', 'Nari Ultimate Wireless Xbox', 219.90, 'Headphones');
INSERT INTO Artigo VALUES(941430, 'JBL', 'Quantum 200 Gaming Preto', 59.90, 'Headphones');
INSERT INTO Artigo VALUES(393954, 'Asus', 'ROG Strix Go Core', 89.90, 'Headphones');

                          --PSU--
INSERT INTO Artigo VALUES(106808, 'MSI', 'MPG A650GF 650W', 124.90, 'PSU');
INSERT INTO Artigo VALUES(069730, 'Corsair', 'CX-F RGB CX650F 650W', 87.90, 'PSU');
INSERT INTO Artigo VALUES(542967, 'Asus', 'ROG Strix 550W', 119.90, 'PSU');
INSERT INTO Artigo VALUES(917454, 'Seasonic', 'PRIME Snow Silent 650W', 129.90, 'PSU');

                          --CPU--
INSERT INTO Artigo VALUES(127522, 'AMD', 'Ryzen 7 5800X 8-Core 3.8GHz com Turbo 4.7GHz', 472.00, 'Processador');
INSERT INTO Artigo VALUES(686590, 'Intel', 'Core i9-10850K 10-Core 3.6GHz com Turbo 5.2GHz', 487.90, 'Processador');
INSERT INTO Artigo VALUES(750502, 'AMD', 'Ryzen 5 3500X Hexa-Core 3.6GHz com Turbo 4.1GHz', 159.90, 'Processador');
INSERT INTO Artigo VALUES(189519, 'Intel', 'Pentium Gold G5420 Dual-Core 3.8GHz', 49.90, 'Processador');

                          --GPU--
INSERT INTO Artigo VALUES(865514, 'Asus', 'ROG Strix Radeon RX 6800 16GB GDDR6 OC', 794.20, 'Placa gráfica');
INSERT INTO Artigo VALUES(955710, 'Gigabyte', 'GeForce RTX 3060 Ti Eagle OC 8GB GDDR6', 527.90, 'Placa gráfica');
INSERT INTO Artigo VALUES(626252, 'MSI', 'GeForce RTX 3060 Ti Gaming X Trio 8GB GDDR6', 484.90, 'Placa gráfica');
INSERT INTO Artigo VALUES(681755, 'XFX', 'Radeon RX 6800 Speedster MERC319 Black Gaming 16GB', 749.90, 'Placa gráfica');

                          --RAM--
INSERT INTO Artigo VALUES(206622, 'HyperX', 'Fury DDR4 16GB DDR4-3600MHz', 89.90, 'RAM');
INSERT INTO Artigo VALUES(415953, 'Corsair', 'Vengeance RGB Pro 8GB DDR4-3200MHz', 527.90, 'RAM');
INSERT INTO Artigo VALUES(633290, 'HyperX', 'Fury DDR4 16GB DDR4-3000MHz', 92.20, 'RAM');
INSERT INTO Artigo VALUES(900056, 'HyperX', 'Predator RGB 16GB DDR4-3600MHz', 749.90, 'RAM');

                          --Disco--
INSERT INTO Artigo VALUES(043050, 'Gigabyte', 'SSD Aorus Gen4 2TB', 389.90, 'Disco');
INSERT INTO Artigo VALUES(227731, 'Seagate', 'HDD IronWolf 8TB', 249.90, 'Disco');
INSERT INTO Artigo VALUES(012394, 'Silicon Power', 'SSD Power Ace A55 256GB', 34.90, 'Disco');
INSERT INTO Artigo VALUES(844191, 'Crucial', 'SSD P5 250GB', 749.90, 'Disco');


INSERT INTO GPU VALUES(865514, '8GB', 'DDR5', '2888MHz', 12);
