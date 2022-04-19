CREATE DATABASE hospitaldb;


DROP TABLE IF EXISTS actividades;
CREATE TABLE IF NOT EXISTS actividades (
  id_actividad int(11) NOT NULL,
  nom_actividad varchar(45) NOT NULL,
  enlace varchar(250) DEFAULT NULL,
  PRIMARY KEY (id_actividad)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



INSERT INTO actividades (id_actividad, nom_actividad, enlace) VALUES
(1, 'Registrar Administrador', 'AdminReg.php'),
(3, 'Gestión Personas', 'UserRea.php\r\n'),
(2, 'Gestión Actividades', 'ActividadGes.php'),
(4, 'Gestión Perfiles', 'PerfilesCre.php'),
(5, 'Gestión Privilegios', 'PrivilegiosCre.php'),
(6, 'Modificar Perfil', 'PersonaUpt.php'),
(7, 'Consultar Estado', 'EstadosGes.php');


DROP TABLE IF EXISTS datos;
CREATE TABLE IF NOT EXISTS datos (
  id int(11) NOT NULL,
  nombre varchar(45) NOT NULL,
  usuario varchar(20) NOT NULL,
  clave varchar(40) NOT NULL,
  id_perfil int(11) NOT NULL,
  PRIMARY KEY (id),
  KEY fk_datos_perfiles1_idx (id_perfil)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



INSERT INTO datos (id, nombre, usuario, clave, id_perfil) VALUES
(1001, 'Diego Cardenas', 'Diegody', '1234', 1),
(1002, 'Nicolas Gonzalez', 'Nimbuz', '4321', 1),
(1003, 'Karen Palacios', 'Karen_14', 'Nic$/o', 2),
(1004, 'Daniela Martinez', 'DaniM', '1010D', 2);



DROP TABLE IF EXISTS estados;
CREATE TABLE IF NOT EXISTS estados (
  nombre varchar(45) NOT NULL,
  descripcion varchar(45) NOT NULL,
  datos_id int(11) NOT NULL,
  perfiles_id_perfil int(11) NOT NULL,
  PRIMARY KEY (nombre),
  KEY fk_estados_datos1_idx (datos_id),
  KEY fk_estados_perfiles1_idx (perfiles_id_perfil)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


INSERT INTO estados (nombre, descripcion, datos_id, perfiles_id_perfil) VALUES
('Nomal', 'El usuario no presenta alteraciones', 1003, 2);



DROP TABLE IF EXISTS gestactividad;
CREATE TABLE IF NOT EXISTS gestactividad (
  idgestActividad int(11) NOT NULL,
  id_perfil int(11) NOT NULL,
  id_actividad int(11) NOT NULL,
  PRIMARY KEY (idgestActividad),
  KEY fk_gestActividad_actividades_idx (id_actividad),
  KEY fk_gestActividad_perfiles1_idx (id_perfil)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



INSERT INTO gestactividad (idgestActividad, id_perfil, id_actividad) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(8, 2, 7),
(5, 1, 4),
(6, 1, 5),
(7, 2, 6);



DROP TABLE IF EXISTS perfiles;
CREATE TABLE IF NOT EXISTS perfiles (
  id_perfil int(11) NOT NULL,
  perfil varchar(45) NOT NULL,
  PRIMARY KEY (id_perfil)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


INSERT INTO perfiles (id_perfil, perfil) VALUES
(1, 'Doctor'),
(2, 'Paciente');
COMMIT;