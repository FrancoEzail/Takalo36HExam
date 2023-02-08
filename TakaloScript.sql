create database Takalo;
use Takalo;

------------------------------------------
--STRUCTURE
------------------------------------------
create table Utilisateur (
    idUser int AUTO_INCREMENT primary key,
    nomUser varchar(30),
    mdp varchar(30),
    email varchar(30)
);
------------------------------------------
--STRUCTURE
------------------------------------------
create table Objet (
    idObjet int AUTO_INCREMENT primary key,
    nomObjet varchar(30),
    descrit varchar(30),
    photo varchar(30),
    prix int,
    idUser int,
    FOREIGN KEY (idUser) REFERENCES Utilisateur(idUser)
);
------------------------------------------
--STRUCTURE
------------------------------------------
create table Echange (
    idChange int AUTO_INCREMENT primary key,
    idUser1 int,
    idUser2 int,
    idObjet1 int,
    idObjet2 int,
    statut varchar(20),
    daty date,
    FOREIGN KEY (idUser1) REFERENCES Utilisateur(idUser),
    FOREIGN KEY (idUser2) REFERENCES Utilisateur(idUser),
    FOREIGN KEY (idObjet1) REFERENCES Objet(idObjet),
    FOREIGN KEY (idObjet2) REFERENCES Objet(idObjet)
);
------------------------------------------
--INSERTION
------------------------------------------
insert into Utilisateur values(null,'francoEzail','iverson','francoezail@gmail.com');
insert into Utilisateur values(null,'MitiaAndria','mitia123','mitiaandria@gmail.com');

insert into Objet values(null,'talons','talons aiguille rose','assets/img/r4.jpg',100,1);
insert into Objet values(null,'talons aiguille ','talons noires','assets/img/r1.jpg',200,1);
insert into Objet values(null,'haut','haut noir pour femme ','assets/img/r3.jpg',250,1);
insert into Objet values(null,'vetement','vetement bleu','assets/img/r5.jpg',125,2);
insert into Objet values(null,'chaussures','chaussure rouge','assets/img/r6.jpg',110,2);
insert into Objet values(null,'robe','robe noir avec motif ','assets/img/r10.jpg',50,2);



