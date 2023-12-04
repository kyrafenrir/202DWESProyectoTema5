/*
* @author Rebeca Sánchez Pérez
* @version 1.0
* @since 21/11/2023
*/

/*Se insertan valores en la tabla Usuario*/
insert into T01_Usuario (T01_CodUsuario, T01_Password, T01_DescUsuario, T01_FechaHoraUltimaConexion, T01_Perfil)
values ("heraclio",SHA2(CONCAT('heraclio','paso'), 256),"profesor de desarrollo web en entorno servidor", now(), "administrador"), -- Password = Nombre + Pass + SHA256
("alberto",SHA2(CONCAT('alberto','paso'), 256),"profesor de desarrollo web en entorno cliente", now(), "administrador"),
("antonio",SHA2(CONCAT('antonio','paso'), 256),"profesor de diseño de interfaces web", now(), "administrador"),
("amor",SHA2(CONCAT('amor','paso'), 256),"profesora de desplique de aplicaciones web", now(), "administrador"),
("erika",SHA2(CONCAT('erika','paso'), 256),"alumna", now(), "usuario"),
("rebeca",SHA2(CONCAT('rebeca','paso'), 256),"alumna", now(), "usuario"),
("alvaro",SHA2(CONCAT('alvaro','paso'), 256),"alumna", now(), "usuario"),
("borja",SHA2(CONCAT('borja','paso'), 256),"alumno", now(), "usuario"),
("ismael",SHA2(CONCAT('ismael','paso'), 256),"alumno", now(), "usuario"),
("oscar",SHA2(CONCAT('oscar','paso'), 256),"alumno", now(), "usuario"),
("carlos",SHA2(CONCAT('carlos','paso'), 256),"alumno", now(), "usuario");

/*Se insertan valores en la tabla Departamento*/
insert into T02_Departamento values ("DAW","Desarrollo de aplicaciones web",now(),50.50,null),
("SMR","Sistemas microinformarticos y redes",now(),1.50,null),
("PRE","Proyectos de edificacion",now(),150,null),
("DAM","Desarrollo de aplicaciones multiplataforma",now(),10.25,null),
("ASI","Administracion de sistemas informaticos en red",now(),0.10,null);