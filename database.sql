    -- 0 possede
    -- 1 cede

    -- generer sequence
--         insert into seq_transaction values(default);

-- --valeur actuelle de la sequence
--         select distinct last_insert_id() as currval from seq_transaction;


create table utilisateur(
    idutilisateur int primary key auto_increment,
    nomutilisateur varchar(30) not null,
    mail varchar(20) not null,
    mdp varchar(50) not null,
    estAdmin boolean default false
);

create table categorie(
    idcategorie int primary key auto_increment,
    nomcategorie varchar(30) not null
);

create table objet(
    idobjet int primary key auto_increment,
    titre varchar(30) not null,
    description text not null,
    idcategorie int not null,
    prix float not null, 
    foreign key (idcategorie) references categorie(idcategorie)
);


create table objetutilisateur(
    idobjetutilisateur int primary key auto_increment,
    idutilisateur int not null,
    idobjet int not null,
    dateDebut datetime default now(),
    valeur enum('0', '1'),
    foreign key (idutilisateur) references utilisateur(idutilisateur),
    foreign key (idobjet) references objet(idcategorie)
);

create table echange(
    idechange int primary key auto_increment,
    idtransaction int not null,
    idobjet1 int not null,
    idobjet2 int not null,
    dateproposition datetime default now(),
    etat enum('0', '1', '2'),
    foreign key (idobjet1) references objet(idobjet),
    foreign key (idobjet2) references objet(idobjet)
);

create table seq_transaction(
    id int primary key auto_increment
); 



create or replace view mesobjet as 
    select objetutilisateur.idobjetutilisateur, objetutilisateur.idutilisateur, objetutilisateur.idobjet, objet.idcategorie, objet.titre,  objet.prix, objet.description 
        from objetutilisateur 
        join objet on objetutilisateur.idobjet = objet.idobjet;

 create or replace view autreobjet as  
    select objetutilisateur.idobjetutilisateur, utilisateur.nomutilisateur, objetutilisateur.idobjet, objet.idcategorie, objet.nomobjet,  objet.prix, objet.description 
        from objetutilisateur 
        join objet on objetutilisateur.idobjet = objet.idobjet 
        join utilisateur on objetutilisateur.idutilisateur=utilisateur.idutilisateur;

