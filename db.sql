-- 1.- Creamos la Base de Datos
drop database proyecto;
create database proyecto DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
/*-- Seleccionamos la base de datos "proyecto"*/
use proyecto;
-- 2.- Creamos las tablas

-- 2.1.1.- Tabla actores
create table if not exists actores(
id int auto_increment primary key,
nombre varchar(100) not null
);
-- 2.1.2.- Tabla directores
create table if not exists directores(
id int auto_increment primary key,
nombre varchar(200) not null
);
-- 2.1.3 .- Tabla peliculas
create table if not exists peliculas(
id int auto_increment primary key,
titulo varchar(200) not null,
fecha int not null,
genero varchar(200) not null,
duracion int not null,
poster varchar(200) not null,
director_id int,
constraint fk_director_id foreign key(director_id) references directores(id) on update
cascade on delete cascade
);
-- 2.1.4.- Tabla usuarios
create table if not exists usuarios(
usuario varchar(200) not null,
email varchar(200) primary key,
pass varchar(200) not null,
rol int DEFAULT 2
);
-- 2.1.5 Tabla reparto
create table if not exists reparto(
peli_id int,
actores_id int,
constraint pk_reparto primary key(peli_id, actores_id),
constraint fk_pelicula_id foreign key(peli_id) references peliculas(id) on update
cascade on delete cascade,
constraint fk_acto_id foreign key(actores_id) references actores(id) on update
cascade on delete cascade
);


-- 2.1.6 Tabla favoritos
create table if not exists favoritos(
peli_id int,
usuarios_correo varchar(200),
constraint pk_favoritos primary key(peli_id, usuarios_correo),
constraint fk_peli_id foreign key(peli_id) references peliculas(id) on update
cascade on delete cascade,
constraint fk_usu_correo foreign key(usuarios_correo) references usuarios(email) on update
cascade on delete cascade
);
