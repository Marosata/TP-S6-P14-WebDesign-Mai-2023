create role webfinaluser with password 'webfinal';

create database webfinal;

\c webfinal

create table utilisateur (
    idutilisateur serial primary key,
    nom varchar(50),
    motdepasse varchar(100),
    acces int
);
insert into utilisateur(nom,motdepasse,acces) values('admin','123456',1);
insert into utilisateur(nom,motdepasse,acces) values('client','client',0);

select * from utilisateur where acces=1 and nom='admin' and motdepasse='123456';

create table info (
    idinfo serial primary key,
    titre varchar(50),
    dateajout TIMESTAMP default now(),
    contenu text,
    statut int default 0,
    idutilisateur int,
    photo varchar(255),
    foreign key (idutilisateur) references utilisateur(idutilisateur)
);
insert into info(titre,contenu,idutilisateur) VALUES('ChatGPT','contenu de info 1 et bcp bcp de blabla',1);
insert into info(titre,contenu,idutilisateur) VALUES('INfo 2','contenu de info 2 et tres peu de blabla',1);
