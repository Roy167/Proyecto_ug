create table cursos(
    curso_id integer not null auto_increment primary key,
    nombre_curso varchar(100) not null,
    cantidad_estudiante varchar(50) not null,
    cantidad_materia varchar(50) not null,
    docente_cargo varchar(100) not null
);
