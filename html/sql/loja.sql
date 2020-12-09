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
