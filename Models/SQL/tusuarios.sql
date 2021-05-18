create table usuarios(
    user_id integer not null auto_increment,
    correo_usuario varchar (200) not null,
    clave varchar(200) not null,
    rol smallint (1) not null,
    constraint usuarios_pk primary key (user_id)
)

/*ROL =  1 para administrador 
  ROL =  0 para estudiante
*/

