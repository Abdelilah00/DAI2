create table descriptions
(
    Id   int auto_increment
        primary key,
    Role varchar(10) null
)
    engine = InnoDB
    collate = utf8_bin;

create table filieres
(
    Id         int auto_increment
        primary key,
    FiliereNom varchar(30) null
)
    engine = InnoDB
    collate = utf8_bin;

create table users
(
    Id            varchar(20) not null primary key,
    Password      text        not null,
    Nom           varchar(20) not null,
    Prenom        varchar(20) not null,
    NumDeTele     varchar(10) not null,
    Email         varchar(50) not null,
    DescriptionId int         null,
    FiliereId     int         null,
    constraint Users_Email_uindex
        unique (Email),
    constraint Users_Id_uindex
        unique (Id),
    constraint Users_NumDeTele_uindex
        unique (NumDeTele),
    constraint users_descriptions_Id_fk
        foreign key (DescriptionId) references descriptions (Id),
    constraint users_filieres_Id_fk
        foreign key (FiliereId) references filieres (Id)
)
    engine = InnoDB
    collate = utf8_bin;
