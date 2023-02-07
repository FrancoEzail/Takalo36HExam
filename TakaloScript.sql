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
--REQUETE
------------------------------------------
select * from 

