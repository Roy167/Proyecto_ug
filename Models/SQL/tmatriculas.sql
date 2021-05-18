create table matriculas (
    matricula_id integer not null auto_increment primary key,
    matricula_iden varchar (20) not null,
    pertenece varchar(20) not null,
    numero_materia varchar(50) not null,
    curso_pernece varchar(50) not null
);
