CREATE TABLE paket (
  id int NOT NULL,
  nama_paket varchar(60) NOT NULL,
  tujuan varchar(60) NOT NULL,
  fitur varchar(255) NOT NULL,
  harga float NOT NULL
);

INSERT INTO paket (id, nama_paket, tujuan, fitur , harga) VALUES
(1, 'Happy Holiday', 'Bali', 'makan, transport, penginapan', 1999000),
(2, 'Fresh Trip', 'Bandung', 'transport, penginapan', 599000),
(3, 'Awesome Party', 'Bali', 'penginapan, transport, makan, oleh-oleh', 3499000),
(4, 'Jalan Jalan Asik', 'Lombok', 'transport, penginapan', 1450000),
(5, 'Super Adventure', 'Blue John Canyon', 'transport, makan', 1890000);



select * from paket;



CREATE TABLE room (
  id int NOT NULL,
  nomor_kamar varchar(60) NOT NULL,
  jenis varchar(60) NOT NULL,
  fitur varchar(255) NOT NULL,
  harga float NOT NULL
) ;


INSERT INTO room (id, nomor_kamar, jenis, fitur, harga) VALUES
(1, 'A01', 'standard', 'ac, tv, air hangat', 100000),
(2, 'A02', 'standard', 'ac, tv, air hangat', 110000),
(3, 'B13', 'luxury', 'ac, flat tv, air hangat, sarapan', 200000),
(4, 'B12', 'luxury', 'ac, flat tv, air hangat, sarapan', 215000),
(5, 'A23', 'economic', 'ac, tv', 85000);

//piye sih iki(?)Astaghfirullah

CREATE TABLE user (
  id int NOT NULL,
  username varchar(60) NOT NULL,
  password varchar(60) NOT NULL,
  fullname varchar(60) NOT NULL,
  email varchar(60) NOT NULL,
  role varchar(20) NOT NULL,
  created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO user (id, username, password, fullname, email, role) VALUES
(1, 'andika', 'pass1010', 'Andika Putra', 'andika.putra@pacil.com', 'admin'),
(2, 'mario', 'nasiuduk', 'Mario Kanjeng', 'mario.kanjeng@pacil.com', 'admin'),
(3, 'dono', 'easypass', 'Dono ', 'dono@pacil.com', 'user'),
(4, 'kasino', 'easypass', 'Kasino', 'kasino@pacil.com', 'user'),
(5, 'indro', 'easypass', 'Indro', 'indro@pacil.com', 'user');
