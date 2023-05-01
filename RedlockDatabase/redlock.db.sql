CREATE DATABASE redlock;

USE redlock

drop table if exists `users`;

create table `users` (
    ID VARCHAR(5),
    Nama VARCHAR(50) not null,
    Alamat VARCHAR(50) not null,
    Jabatan VARCHAR(50) not null, 
    primary key (ID)
);

insert into `users` (ID, Nama, Alamat, Jabatan) values
    ("ID001", "Saitama", "Kota Z", "Pahlawan"),
    ("ID002", "Hinata", "Miyagi", "Atlet"),
    ("ID003", "Duren", "Mangga Dua", "Karyawan");