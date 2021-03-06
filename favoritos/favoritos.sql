drop database if exists favoritos;

create database favoritos;

use favoritos;

create table usuarios
(
	id smallint	not null auto_increment,
	nome	varchar(120) not null,
	email varchar(120) not null,
	nota	smallint null,
	primary key (id)
);

insert into usuarios (nome, email) values
('Abraão Sarmiento', 'asarmiento@gmail.com'),
('Alcides Soeiro', 'soeiro@gmail.com'),
('Adosindo Cascais', 'cascais@gmail.com'),
('Adriano Semedo', 'semedo@gmail.com'),
('Adelina Díaz', 'diaz@gmail.com'),
('Alice Iglesias', 'iglesias@gmail.com'),
('Aniana Igrejas', 'igrejas@gmail.com'),
('Aurora Duarte', 'duarte@gmail.com'),
('Aldo Dâmaso', 'damaso@gmail.com'),
('Aluísio Coello', 'coello@gmail.com'),
('Aluísio Diniz', 'diniz@gmail.com'),
('Américo Ayres', 'ayres@gmail.com'),
('Aleixo Tigre', 'tigre@gmail.com'),
('Aníbal Castel-Branco', 'castel@gmail.com'),
('Aníbal Guimarães', 'guimaraes@gmail.com'),
('Asi Taveira', 'taveira@gmail.com'),
('Alfredo Castanho', 'castanho@gmail.com'),
('Barnabé Balladares', 'balladares@gmail.com'),
('Basilio Franco', 'franco@gmail.com'),
('Benedita Azevedo', 'azevedo@gmail.com'),
('Berengária Novais', 'novais@gmail.com'),
('Bernardete Baía', 'baia@gmail.com'),
('Bukake Picanço', 'pincanco@gmail.com'),
('Catarino Barata', 'barata@gmail.com'),
('Clementino Rolim', 'clementino_rolim@gmail.com'),
('Clodoaldo Pasos', 'pasos@gmail.com'),
('Delfina Grande', 'grande@gmail.com'),
('Eli Marmou', 'marmou@gmail.com'),
('Elisa Marmota', 'marmota@gmail.com'),
('Elicarlos Vilarinho', 'vilarinho@gmail.com'),
('Elsa Miranda', 'miranda@gmail.com'),
('Emiliano Gouveia', 'gouveia@gmail.com'),
('Epifânia Carneiro', 'carneiro@gmail.com'),
('Esteros Nolasco', 'nolasco@gmail.com'),
('Eusébio Silvestre', 'silvestre@gmail.com'),
('Ezequiel Barroso', 'barroso@gmail.com'),
('Ezequiel Portugal', 'portugal@gmail.com'),
('Fernão Rolim', 'rolim@gmail.com'),
('Filipe Ipanema', 'ipanema@gmail.com'),
('Firmino Motta', 'motta@gmail.com'),
('Frutuoso Guzmán', 'guzmán@gmail.com'),
('Germano Araújo', 'araujo@gmail.com'),
('Gerusa Camillo', 'camillo@gmail.com'),
('Gildo Cunha', 'cunha@gmail.com'),
('Godofredo Veiga', 'veiga@gmail.com'),
('Gonçalo Velasques', 'velasques@gmail.com'),
('Graciana Campello', 'campello@gmail.com'),
('Guaraci Reguera', 'reguera@gmail.com'),
('Guido Castel-Branco', 'branco@gmail.com'),
('Guilhermino Simas', 'simas@gmail.com'),
('Guálter Belo', 'belo@gmail.com'),
('Hernâni Sarmiento', 'sarmiento@gmail.com'),
('Ilduaro Andrade', 'andrade@gmail.com'),
('Inaiá Soto Mayor', 'mayor@gmail.com'),
('Isaque Froes', 'froes@gmail.com'),
('Jacinto Farias', 'farias@gmail.com'),
('Jandira Vilela', 'vilela@gmail.com'),
('Joaquina Torcuato', 'torcuato@gmail.com'),
('Jorge Noite', 'jorgenoite@gmail.com'),
('Judá Pêcego', 'pêcego@gmail.com'),
('Juçara Puerto', 'puerto@gmail.com'),
('Leonardo Rua', 'rua@gmail.com'),
('Martim Freyre', 'freyre@gmail.com'),
('Luísa Pequeno', 'pequeno@gmail.com'),
('Lucrécia Quinaz', 'quinaz@gmail.com'),
('Maurício Chamusca', 'chamusca@gmail.com'),
('Milorde Eiró', 'eiro@gmail.com'),
('Natanael Figueira', 'figueira@gmail.com'),
('Nestor Quinzeiro', 'quinzeiro@gmail.com'),
('Nicolau Thamily', 'thamily@gmail.com'),
('Odilon Álvarez', 'alvarez@gmail.com'),
('Ondino Corvelo', 'corvelo@gmail.com'),
('Pandoro Maciel', 'maciel@gmail.com'),
('Paulino Pitanga', 'pitanga@gmail.com'),
('Pietro Baranda', 'baranda@gmail.com'),
('Renata Félix', 'felix@gmail.com'),
('Renato Leiria', 'leiria@gmail.com'),
('Ricardino Sardinha', 'sardinha@gmail.com'),
('Roberto Carvajal', 'carvajal@gmail.com'),
('Romano Botelho', 'botelho@gmail.com'),
('Rosalino Bernardes', 'bernardes@gmail.com'),
('Rosalino Campello', 'bampello@gmail.com'),
('Robson Espargosa', 'bspargosa@gmail.com'),
('Rosário Sequeira', 'sequeira@gmail.com'),
('Sabino Lobo', 'lobo@gmail.com'),
('Salvio Martínez', 'martinez@gmail.com'),
('Sidônio Zalazar', 'zalazar@gmail.com'),
('Tabalipa Dantas', 'santas@gmail.com'),
('Teodoro Sanches', 'sanches@gmail.com'),
('Ubalda Noite', 'noite@gmail.com'),
('Valdemar Leça', 'leca@gmail.com'),
('Vasco Vila-Chã', 'vila@gmail.com'),
('Veridiano Vilar', 'vilar@gmail.com'),
('Vicente Godoy', 'godoy@gmail.com'),
('Virgílio Cortês', 'cortes@gmail.com'),
('Viridiano Girão', 'girao@gmail.com'),
('Viviana Moreira', 'moreira@gmail.com'),
('Xico Paula', 'paula@gmail.com'),
('Zoraide Cantanhede', 'cantanhede@gmail.com'),
('Zózimo Acatauaçu', 'acatauacu@gmail.com');
