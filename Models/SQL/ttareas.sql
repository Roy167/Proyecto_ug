create table tareas(
    tarea_id integer not null auto_increment primary key,
    nombre_tarea varchar(30) not null,
    tiempo varchar (30) not null,
    intentos varchar (2) not null
);

