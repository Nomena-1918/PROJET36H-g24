--Database Takalo

create table utilisateur(
    idutilisateur int primary key auto_increment,
    nomutilisateur varchar(30),
    mail varchar(30),
    mdp varchar(10)
);

create table categorie(
    idcategorie int primary key auto_increment,
    nomcategorie varchar(30)
);

create table objet(
    idobjet int primary key auto_increment,
    nomobjet varchar(30),
    idcategorie int,
    prix float,
    description text,
    foreign key (idcategorie) references categorie(idcategorie)
);

create table objetutilisateur(
    idobjetutilisateur int primary key auto_increment,
    idutilisateur int,
    idobjet int,
    foreign key (idutilisateur) references utilisateur(idutilisateur),
    foreign key (idobjet) references objet(idcategorie)
);

create table echange(
    idechange int primary key auto_increment,
    iddemandeur int, 
    iddemande int, 
    idobjet1 int,
    idobjet2 int,
    statut int,
    foreign key (iddemandeur) references utilisateur(idutilisateur),
    foreign key (iddemande) references utilisateur(idutilisateur),
    foreign key (idobjet1) references objet(idobjet),
    foreign key (idobjet2) references objet(idobjet)
);