/**
 * Author:  Erika Martínez Pérez
 * Created: 3 dic 2023
 */
-- Me posiciono en la base de datos
USE DB202DWESLoginLogoffTema5;

/*Se insertan valores en la tabla Usuario*/
insert into T01_Usuario(T01_CodUsuario, T01_Password, T01_DescUsuario, T01_FechaHoraUltimaConexion, T01_Perfil) values 
    ("heraclio",SHA2(CONCAT('heraclio','paso'), 256),"Heraclio Borbujo Moran", NULL, "administrador"), 
    ("alberto",SHA2(CONCAT('alberto','paso'), 256),"Alberto Bahillo Fernandez", NULL, "administrador"),
    ("antonio",SHA2(CONCAT('antonio','paso'), 256),"Antonio Jañez Velada", NULL, "administrador"),
    ("amor",SHA2(CONCAT('amor','paso'), 256),"Amor Rodriguez Navarro", NULL, "administrador"),
    ("erika",SHA2(CONCAT('erika','paso'), 256),"Erika Martínez Pérez", NULL, "usuario"),
    ("rebeca",SHA2(CONCAT('rebeca','paso'), 256),"Rebeca Sánchez Pérez", NULL, "usuario"),
    ("alvaro",SHA2(CONCAT('alvaro','paso'), 256),"Alvaro Cordero Miñambres", NULL, "usuario"),
    ("borja",SHA2(CONCAT('borja','paso'), 256),"Borja Nuñez Refoyo", NULL, "usuario"),
    ("ismael",SHA2(CONCAT('ismael','paso'), 256),"Ismael Ferreras García", NULL, "usuario"),
    ("oscar",SHA2(CONCAT('oscar','paso'), 256),"Oscar Pascual Ferrero", NULL, "usuario"),
    ("carlos",SHA2(CONCAT('carlos','paso'), 256),"Carlos Garcia Cachon", NULL, "usuario");

/*Se insertan valores en la tabla Departamento*/
insert into T02_Departamento values 
    ("DAW","Desarrollo de aplicaciones web",now(),50.50,null),
    ("SMR","Sistemas microinformarticos y redes",now(),1.50,null),
    ("PRE","Proyectos de edificacion",now(),150,null),
    ("DAM","Desarrollo de aplicaciones multiplataforma",now(),10.25,null),
    ("ASI","Administracion de sistemas informaticos en red",now(),0.10,null);

/*Se insertan valores en la tabla Alumno*/
insert into T09_Alumno values 
    ("A01","Rebeca","Sanchez","1992-08-15 07:21:53","DAW",12.12,null),
    ("A02","Erika","Martínez","1987-05-03 15:44:29","DAW",22.12,null),
    ("A03","Alvaro","Cordero","1998-11-20 23:12:18","DAW",12.12,null),
    ("A04","Borja","Nuñez","1986-02-18 04:36:07","DAW",22.12,null),
    ("A05","Ismael","Ferreras","2001-04-28 11:55:42","DAW",12.12,null),
    ("A06","Oscar","Pascual","1985-09-10 18:27:33","DAW",22.12,null),
    ("A07","Carlos","Garcia","1984-10-01 09:08:15","DAW",12.12,null);