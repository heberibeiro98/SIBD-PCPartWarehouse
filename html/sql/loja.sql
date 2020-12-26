PRAGMA foreign_keys = ON;

DROP TABLE IF EXISTS Monitor;
DROP TABLE IF EXISTS Rato;
DROP TABLE IF EXISTS Teclado;
DROP TABLE IF EXISTS Headphones;
DROP TABLE IF EXISTS PSU;
DROP TABLE IF EXISTS CPU;
DROP TABLE IF EXISTS GPU;
DROP TABLE IF EXISTS RAM;
DROP TABLE IF EXISTS Disco;
DROP TABLE IF EXISTS Stock;
DROP TABLE IF EXISTS Artigo;
DROP TABLE IF EXISTS Encomenda;
DROP TABLE IF EXISTS Armazem;
DROP TABLE IF EXISTS Conta;

CREATE TABLE Conta(
  Id INTEGER PRIMARY KEY AUTOINCREMENT,
  Email TEXT NOT NULL,
  Password TEXT NOT NULL,
  Nome TEXT NOT NULL,
  Morada TEXT NOT NULL,
  Num_telefone NUMBER,
  NIF INTEGER
);

CREATE TABLE Encomenda(
  Num_referencia INTEGER PRIMARY KEY AUTOINCREMENT,
  Data DATE,
  Metodo_pagamento TEXT,
  Conta INTEGER REFERENCES Conta,
  Armazem INTEGER REFERENCES Armazem
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
  Categoria TEXT,
  Armazem INTEGER REFERENCES Armazem,
  Encomenda INTEGER REFERENCES Encomenda
);

CREATE TABLE Stock(
  Artigo INTEGER PRIMARY KEY REFERENCES Artigo,
  Armazem INTEGER REFERENCES Armazem,
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
  Num_threads INTEGER,
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
  Qtdd_memoria TEXT,
  Ram_tipo TEXT,
  Clock TEXT
);

CREATE TABLE Disco(
  Num_serie INTEGER PRIMARY KEY REFERENCES Artigo,
  Tipo_disco TEXT,
  Memoria TEXT
);

---------------------------------------------ARMAZÉM---------------------------------------------
INSERT INTO Armazem VALUES(1, 'Zona Industrial Chaves, Lt. 27, Chaves, Vila Real', '276984382');
-------------------------------------------------------------------------------------------------

---------------------------------------------ARTIGOS----------------------------------------------------------------------------------------
                          --MONITORES--
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(601867, 'Asus', 'TUF Gaming VG27AQ1A', 499.90, 'Monitor', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(892719, 'AOC', 'U32E2N', 389.90, 'Monitor', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(915758, 'Gigabyte', 'M27F Gaming', 259.90, 'Monitor', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(393303, 'LG', '32UN500-W', 364.90, 'Monitor', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(207180, 'HP', 'HP P24h G4', 149.90, 'Monitor', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(913012, 'Asus', 'VZ249HEG1R', 159.90, 'Monitor', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(673569, 'Asus', 'VP229HE', 99.90, 'Monitor', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(874538, 'Asus', 'ROG SWIFT PG259QN', 699.90, 'Monitor', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(837237, 'Dell', 'UltraSharp U2421HE', 259.90, 'Monitor', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(138855, 'Dell', 'S2721QS', 349.90, 'Monitor', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(925794, 'Dell', 'Gaming S2421HGF', 189.90, 'Monitor', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(576713, 'Dell', 'AW2521HF', 399.90, 'Monitor', 1);

----------------------------------------------------------MONITORES---------------------------------------------------------
INSERT INTO Monitor VALUES(601867, '27 polegadas', '2560 x 1440', '170Hz');
INSERT INTO Monitor VALUES(892719, '31.5 polegadas', '3840 x 2160', '60Hz');
INSERT INTO Monitor VALUES(915758, '27 polegadas', '1920 x 1080', '144Hz');
INSERT INTO Monitor VALUES(393303, '31.5 polegadas', '3840 x 2160', '75 Hz');
INSERT INTO Monitor VALUES(207180, '23.8 polegadas', '1920 x 1080', '75 Hz');
INSERT INTO Monitor VALUES(913012, '23.8 polegadas', '1920 x 1080', '75 Hz');
INSERT INTO Monitor VALUES(673569, '21.5 polegadas', '1920 x 1080', '75 Hz');
INSERT INTO Monitor VALUES(874538, '24.5 polegadas', '1920 x 1080', '360 Hz');
INSERT INTO Monitor VALUES(837237, '23.8 polegadas', '1920 x 1080', '60 Hz');
INSERT INTO Monitor VALUES(138855, '27 polegadas', '3840 x 2160', '60 Hz');
INSERT INTO Monitor VALUES(925794, '23.8 polegadas', '1920 x 1080', '144 Hz');
INSERT INTO Monitor VALUES(576713, '24.5 polegadas', '1920 x 1080', '244 Hz');

---------------------------------------------------------------------------------------------------------------------------

                          --RATOS--
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(025986, 'Razer', 'Basilisk Ultimate Wireless', 149.90, 'Rato', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(349864, 'AOC', 'GM200', 19.90, 'Rato', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(306304, 'MSI', 'Clutch GM20 Elite', 29.90, 'Rato', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(467634, 'Asus', 'Strix Impact II', 79.90, 'Rato', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(889496, 'Asus', 'Chakram Core', 99.90, 'Rato', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(657198, 'Asus', 'Pugio II', 99.90, 'Rato', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(577452, 'Corsair', 'M55', 39.90, 'Rato', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(220616, 'Corsair', 'Dark Core', 109.90, 'Rato', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(996707, 'Razer', 'Viper Ultimate Wireless', 149.90, 'Rato', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(757778, 'Razer', 'Basilisk X HyperSpeed', 69.90, 'Rato', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(368749, 'Lenovo', 'Legion M500', 51.90, 'Rato', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(466851, 'Lenovo', 'Legion M300', 39.90, 'Rato', 1);

----------------------------------------------------------RATOS------------------------------------------------------------
INSERT INTO Rato VALUES(025986, 20000, 'RGB', 'Sim');
INSERT INTO Rato VALUES(349864, 4200, 'RGB', 'Não');
INSERT INTO Rato VALUES(306304, 6400, 'RGB', 'Não');
INSERT INTO Rato VALUES(467634, 16000, 'RGB', 'Sim');
INSERT INTO Rato VALUES(889496, 16000, 'RGB', 'Não');
INSERT INTO Rato VALUES(657198, 16000, 'RGB', 'Sim');
INSERT INTO Rato VALUES(577452, 12400, 'RGB', 'Não');
INSERT INTO Rato VALUES(220616, 18000, 'RGB', 'Sim');
INSERT INTO Rato VALUES(996707, 20000, 'RGB', 'Sim');
INSERT INTO Rato VALUES(757778, 16000, 'RGB', 'Sim');
INSERT INTO Rato VALUES(368749, 16000, 'RGB', 'Não');
INSERT INTO Rato VALUES(466851, 8000, 'RGB', 'Não');

---------------------------------------------------------------------------------------------------------------------------

                          --TECLADOS--
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(071211, 'Corsair', 'K60 RGB Pro Gaming', 149.90, 'Teclado', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(612069, 'Razer', 'Huntsman Gears 5', 134.90, 'Teclado', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(211896, 'Asus', 'Sagaris GK1100', 99.90, 'Teclado', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(249278, 'Sharkoon', 'Skiller Mech SGK3', 64.90, 'Teclado', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(155486, 'Logitech', 'G915 TKL', 189.90, 'Teclado', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(269545, 'Logitech', 'G512 Carbon', 89.90, 'Teclado', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(458738, 'Logitech', 'G815', 179.90, 'Teclado', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(326558, 'Fox Gaming', 'FK63F', 79.90, 'Teclado', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(745331, 'HyperX', 'Alloy Elite 2', 149.90, 'Teclado', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(136283, 'Ozone', 'Alpha Strike', 49.90, 'Teclado', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(798268, 'Ozone', 'StrikeBack', 79.90, 'Teclado', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(555655, 'Ozone', 'Alliance', 39.90, 'Teclado', 1);

----------------------------------------------------------TECLADOS---------------------------------------------------------
INSERT INTO Teclado VALUES(071211, 'RGB', 'Não');
INSERT INTO Teclado VALUES(612069, 'RGB', 'Não');
INSERT INTO Teclado VALUES(211896, 'RGB', 'Não');
INSERT INTO Teclado VALUES(249278, 'RGB', 'Não');
INSERT INTO Teclado VALUES(155486, 'RGB', 'Sim');
INSERT INTO Teclado VALUES(269545, 'RGB', 'Não');
INSERT INTO Teclado VALUES(458738, 'RGB', 'Não');
INSERT INTO Teclado VALUES(326558, 'RGB', 'Não');
INSERT INTO Teclado VALUES(745331, 'RGB', 'Não');
INSERT INTO Teclado VALUES(136283, 'RGB', 'Não');
INSERT INTO Teclado VALUES(798268, 'RGB', 'Não');
INSERT INTO Teclado VALUES(555655, 'RGB', 'Não');

----------------------------------------------------------TECLADOS---------------------------------------------------------

                          --Headphones--
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(030707, 'Razer', 'Opus THX', 209.90, 'Headphones', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(526137, 'Razer', 'Nari Ultimate Wireless Xbox', 219.90, 'Headphones', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(941430, 'JBL', 'Quantum 200 Gaming Preto', 59.90, 'Headphones', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(393954, 'Asus', 'ROG Strix Go Core', 89.90, 'Headphones', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(591609, 'Audio-Technica', 'ATH-M50XBT', 199.90, 'Headphones', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(555063, 'Bose', 'QuietComfort QC35 II', 249.90, 'Headphones', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(749201, 'Edifier', 'W860NB', 149.90, 'Headphones', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(228054, 'Sony', 'WH-CH710N', 99.90, 'Headphones', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(335406, 'Sennheiser', 'Momentum 3', 319.90, 'Headphones', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(979532, 'Sennheiser', 'HD 599', 249.90, 'Headphones', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(212601, 'Sennheiser', 'RS 175', 199.90, 'Headphones', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(665457, 'Sennheiser', 'HD 450BT', 149.90, 'Headphones', 1);

----------------------------------------------------------HEADPHONES-------------------------------------------------------
INSERT INTO Headphones VALUES(030707, 'Não', 'Sim');
INSERT INTO Headphones VALUES(526137, 'Sim', 'Sim');
INSERT INTO Headphones VALUES(941430, 'Sim', 'Não');
INSERT INTO Headphones VALUES(393954, 'Sim', 'Não');
INSERT INTO Headphones VALUES(591609, 'Não', 'Sim');
INSERT INTO Headphones VALUES(555063, 'Sim', 'Sim');
INSERT INTO Headphones VALUES(749201, 'Não', 'Sim');
INSERT INTO Headphones VALUES(228054, 'Sim', 'Sim');
INSERT INTO Headphones VALUES(335406, 'Não', 'Sim');
INSERT INTO Headphones VALUES(979532, 'Não', 'Não');
INSERT INTO Headphones VALUES(212601, 'Não', 'Sim');
INSERT INTO Headphones VALUES(665457, 'Sim', 'Sim');

----------------------------------------------------------HEADPHONES-------------------------------------------------------

                          --PSU--
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(106808, 'MSI', 'MPG A650GF 650W', 124.90, 'PSU', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(069730, 'Corsair', 'CX-F RGB CX650F 650W', 87.90, 'PSU', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(542967, 'Asus', 'ROG Strix 550W', 119.90, 'PSU', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(917454, 'Seasonic', 'PRIME Snow Silent 650W', 129.90, 'PSU', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(401371, 'MSI', 'MPG A750GF 750W', 134.90, 'PSU', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(616291, 'MSI', 'MPG A850GF 850W', 149.90, 'PSU', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(698408, 'Corsair', 'CX-F RGB CX750F 750W', 99.90, 'PSU', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(214206, 'Corsair', 'CX-F RGB CX550F 550W', 80.90, 'PSU', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(249482, 'Corsair', 'CV650', 64.90, 'PSU', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(559841, 'Asus', 'ROG Strix 850W', 199.90, 'PSU', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(530828, 'Asus', 'ROG Strix 650W', 133.90, 'PSU', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(152266, 'Asus', 'ROG Thor 1200W', 329.90, 'PSU', 1);

----------------------------------------------------------PSU--------------------------------------------------------------
INSERT INTO PSU VALUES(106808, '650W', '140mm');
INSERT INTO PSU VALUES(069730, '650W', '120mm');
INSERT INTO PSU VALUES(542967, '550W', '135mm');
INSERT INTO PSU VALUES(917454, '650W', '135mm');
INSERT INTO PSU VALUES(401371, '750W', '140mm');
INSERT INTO PSU VALUES(616291, '850W', '140mm');
INSERT INTO PSU VALUES(698408, '750W', '120mm');
INSERT INTO PSU VALUES(214206, '550W', '120mm');
INSERT INTO PSU VALUES(249482, '650W', '120mm');
INSERT INTO PSU VALUES(559841, '850W', '135mm');
INSERT INTO PSU VALUES(530828, '650W', '135mm');
INSERT INTO PSU VALUES(152266, '1200W', '135mm');

----------------------------------------------------------PSU--------------------------------------------------------------

                          --CPU--
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(127522, 'AMD', 'Ryzen 7 5800X 8-Core 3.8GHz com Turbo 4.7GHz', 472.00, 'Processador', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(686590, 'Intel', 'Core i9-10850K 10-Core 3.6GHz com Turbo 5.2GHz', 487.90, 'Processador', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(750502, 'AMD', 'Ryzen 5 3500X Hexa-Core 3.6GHz com Turbo 4.1GHz', 159.90, 'Processador', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(189519, 'Intel', 'Pentium Gold G5420 Dual-Core 3.8GHz', 49.90, 'Processador', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(957103, 'AMD', 'Ryzen Threadripper 3990X 64-core 2.9GHz com Turbo 4.3GHz', 4055.00, 'Processador', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(146142, 'AMD', 'Ryzen 9 5900X 12-Core 3.7GHz com Turbo 4.8GHz', 577.00, 'Processador', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(986722, 'AMD', 'Ryzen 9 3900X 12-Core 3.8GHz com Turbo 4.6GHz', 469.00, 'Processador', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(540880, 'AMD', 'Ryzen Threadripper 2920X 12-core 3.5GHz com Turbo 4.3GHz', 399.00, 'Processador', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(152664, 'Intel', 'Core i9-10920X 12-Core 3.5GHz com Turbo 4.6GHz', 739.90, 'Processador', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(647206, 'Intel', 'Core i9-10900X 10-Core 3.7GHz com Turbo 4.5GHz', 650.00, 'Processador', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(802660, 'Intel', 'Core i9-10900K 10-Core 3.7GHz com Turbo 5.3GHz', 558.90, 'Processador', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(252692, 'Intel', 'Core i7-10700K 8-Core 3.8GHz com Turbo 5.1GHz', 376.90, 'Processador', 1);

----------------------------------------------------------CPU--------------------------------------------------------------
INSERT INTO CPU VALUES(127522, '3.8GHz com turbo até 4.7GHz', 8, 16, '32 MB');
INSERT INTO CPU VALUES(686590, '3.6GHz com turbo até 5.2GHz', 10, 20, '20 MB');
INSERT INTO CPU VALUES(750502, '3.6GHz com turbo até 4.1GHz', 6, 6, '32 MB');
INSERT INTO CPU VALUES(189519, '3.8GHz', 2, 4, '4 MB');
INSERT INTO CPU VALUES(957103, '2.9GHz com Turbo 4.3GHz', 64, 128, '256 MB');
INSERT INTO CPU VALUES(146142, '3.7GHz com Turbo 4.8GHz', 12, 24, '64 MB');
INSERT INTO CPU VALUES(986722, '3.8GHz com Turbo 4.6GHz', 12, 24, '64 MB');
INSERT INTO CPU VALUES(540880, '3.5GHz com Turbo 4.3GHz', 12, 24, '32 MB');
INSERT INTO CPU VALUES(152664, '3.5GHz com Turbo 4.6GHz', 12, 24, '19.25 MB');
INSERT INTO CPU VALUES(647206, '3.7GHz com Turbo 4.5GHz', 10, 20, '19.25 MB');
INSERT INTO CPU VALUES(802660, '3.7GHz com Turbo 5.3GHz', 10, 20, '20 MB');
INSERT INTO CPU VALUES(252692, '3.8GHz com Turbo 5.1GHz', 8, 16, '16 MB');

----------------------------------------------------------CPU--------------------------------------------------------------

                          --GPU--
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(865514, 'Asus', 'ROG Strix Radeon RX 6800 16GB GDDR6 OC', 794.20, 'Placa gráfica', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(955710, 'Gigabyte', 'GeForce RTX 3060 Ti Eagle OC 8GB GDDR6', 527.90, 'Placa gráfica', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(626252, 'MSI', 'GeForce RTX 3060 Ti Gaming X Trio 8GB GDDR6', 484.90, 'Placa gráfica', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(681755, 'XFX', 'Radeon RX 6800 Speedster MERC319 Black Gaming 16GB', 749.90, 'Placa gráfica', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(471188, 'MSI', 'Radeon RX 6800 XT Gaming X Trio 16G', 849.90, 'Placa gráfica', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(280606, 'MSI', 'GeForce GTX 1650 D6 Ventus XS 4G OCV2', 159.90, 'Placa gráfica', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(553141, 'Asus', 'Radeon RX 6900 XT 16GB GDDR6', 1099.00, 'Placa gráfica', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(839520, 'Asus', 'ROG Strix GeForce RTX 3060 Ti 8GB GDDR6 OC', 614.30, 'Placa gráfica', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(307180, 'Asus', 'RGeForce GTX 1650 TUF Gaming 4GB OC', 160.90, 'Placa gráfica', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(832049, 'XFX', 'Radeon RX 6900 XT Speedster MERC 319 Ultra Gaming 16GB', 1199.00, 'Placa gráfica', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(401894, 'XFX', 'Radeon RX 5600 XT 14Gbps 6GB THICC II Pro', 325.90, 'Placa gráfica', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(632725, 'MSI', 'Radeon RX 5700 XT Gaming X 8G', 449.90, 'Placa gráfica', 1);

----------------------------------------------------------GPU--------------------------------------------------------------
INSERT INTO GPU VALUES(865514, '16GB', 'GDDR6', '2190MHz', 12);
INSERT INTO GPU VALUES(955710, '8GB', 'GDDR6', '1695MHz', 12);
INSERT INTO GPU VALUES(626252, '8GB', 'GDDR6', '1830MHz', 12);
INSERT INTO GPU VALUES(681755, '16GB', 'GDDR6', '2340MHz', 12);
INSERT INTO GPU VALUES(471188, '16GB', 'GDDR6', '2285MHz', 12);
INSERT INTO GPU VALUES(280606, '4GB', 'GDDR6', '1620MHz', 12);
INSERT INTO GPU VALUES(553141, '16GB', 'GDDR6', '2250MHz', 12);
INSERT INTO GPU VALUES(839520, '8GB', 'GDDR6', '1890MHz', 12);
INSERT INTO GPU VALUES(307180, '4GB', 'GDDR6', '1785MHz', 12);
INSERT INTO GPU VALUES(832049, '16GB', 'GDDR6', '2340MHz', 12);
INSERT INTO GPU VALUES(401894, '6GB', 'GDDR6', '1620MHz', 12);
INSERT INTO GPU VALUES(632725, '8GB', 'GDDR6', '11980MHz', 12);

----------------------------------------------------------GPU--------------------------------------------------------------

                          --RAM--
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(206622, 'HyperX', 'Fury DDR4 16GB DDR4-3600MHz', 89.90, 'RAM', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(415953, 'Corsair', 'Vengeance RGB Pro 8GB DDR4-3200MHz', 527.90, 'RAM', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(633290, 'HyperX', 'Fury DDR4 16GB DDR4-3000MHz', 92.20, 'RAM', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(900056, 'HyperX', 'Predator RGB 16GB DDR4-3600MHz', 749.90, 'RAM', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(148627, 'HyperX', 'Impact 8GB DDR3L-1600MHz', 46.90, 'RAM', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(697135, 'HyperX', 'Fury 16GB DDR3-1866MHz', 89.90, 'RAM', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(386516, 'HyperX', 'Fury 8GB DDR3-1600MHz', 47.60, 'RAM', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(388607, 'Corsair', 'MAC 8GB DDR3-1066MHz', 40.90, 'RAM', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(753194, 'GSkill', 'Performance 2GB DDR2-667MHz', 26.30, 'RAM', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(537202, 'Crucial', 'Ballistix Gaming 8GB DDR4-3200MHz', 41.80, 'RAM', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(305956, 'Crucial', 'Ballistix Gaming 16GB DDR4-3200MHz', 79.20, 'RAM', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(493318, 'Crucial', 'Value 16GB DDR4-2666MHz', 77.90, 'RAM', 1);

----------------------------------------------------------RAM-------------------------------------------------------------
INSERT INTO RAM VALUES(206622, '16GB', 'DDR4', '3600MHz');
INSERT INTO RAM VALUES(415953, '8GB', 'DDR4', '3200MHz');
INSERT INTO RAM VALUES(633290, '16GB', 'DDR4', '3000MHz');
INSERT INTO RAM VALUES(900056, '16GB', 'DDR4', '3600MHz');
INSERT INTO RAM VALUES(148627, '8GB', 'DDR3', '1600MHz');
INSERT INTO RAM VALUES(697135, '16GB', 'DDR3', '1866MHz');
INSERT INTO RAM VALUES(386516, '8GB', 'DDR3', '1600MHz');
INSERT INTO RAM VALUES(388607, '8GB', 'DDR3', '1066MHz');
INSERT INTO RAM VALUES(753194, '2GB', 'DDR2', '667MHz');
INSERT INTO RAM VALUES(537202, '8GB', 'DDR4', '32000MHz');
INSERT INTO RAM VALUES(305956, '16GB', 'DDR4', '32000MHz');
INSERT INTO RAM VALUES(493318, '16GB', 'DDR4', '2666MHz');

----------------------------------------------------------RAM--------------------------------------------------------------

                          --DISCO--
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(043050, 'Gigabyte', 'SSD Aorus Gen4 2TB', 389.90, 'Disco', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(227731, 'Seagate', 'HDD IronWolf 8TB', 249.90, 'Disco', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(012394, 'Silicon Power', 'SSD Power Ace A55 256GB', 34.90, 'Disco', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(844191, 'Crucial', 'SSD P5 250GB', 749.90, 'Disco', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(328361, 'Western Digital', 'HDD Red 4TB', 132.90, 'Disco', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(477079, 'Western Digital', 'HDD Gold 8TB', 299.90, 'Disco', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(856277, 'Western Digital', 'HDD Red 1TB', 79.90, 'Disco', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(207516, 'Western Digital', 'HDD Red 10TB', 349.90, 'Disco', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(303160, 'Western Digital', 'SSD Black SN850 2TB', 529.90, 'Disco', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(562859, 'Western Digital', 'SSD Black SN850 1TB', 239.90, 'Disco', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(534533, 'Western Digital', 'SSD Black SN850 500GB', 139.90, 'Disco', 1);
INSERT INTO Artigo(Num_serie, Marca, Modelo, Preço, Categoria, Armazem) VALUES(266109, 'Western Digital', 'SSD Red SA500 4TB', 699.90, 'Disco', 1);

--------------------------------------------------------------------------------------------------------------------------------------------

----------------------------------------------------------DISCO------------------------------------------------------------
INSERT INTO DISCO VALUES(043050, 'SSD', '2TB');
INSERT INTO DISCO VALUES(227731, 'HDD', '8TB');
INSERT INTO DISCO VALUES(012394, 'SSD', '256GB');
INSERT INTO DISCO VALUES(844191, 'SSD', '250GB');
INSERT INTO DISCO VALUES(328361, 'HDD', '4TB');
INSERT INTO DISCO VALUES(477079, 'HDD', '8TB');
INSERT INTO DISCO VALUES(856277, 'HDD', '1TB');
INSERT INTO DISCO VALUES(207516, 'HDD', '10TB');
INSERT INTO DISCO VALUES(303160, 'SSD', '2TB');
INSERT INTO DISCO VALUES(562859, 'SSD', '1TB');
INSERT INTO DISCO VALUES(534533, 'SSD', '500GB');
INSERT INTO DISCO VALUES(266109, 'SSD', '4TB');

----------------------------------------------------------DISCO------------------------------------------------------------
