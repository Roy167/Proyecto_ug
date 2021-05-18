use virtualAcademy;
create table profesores (
    idProfesor integer not null auto_increment,
    primerNombre varchar(20) not null,
    segundoNombre varchar(20),
    primerApellido varchar(20) not null,
    segundoApellido varchar(20),
    suMateria varchar(30) not null,
    correo varchar(100) not null,
    constraint profesores_pk primary key (idProfesor) 
);

