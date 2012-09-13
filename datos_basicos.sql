-- Cargo en la tabla Actividad unos datos.
INSERT INTO `sayes`.`actividad` (`id_actividad`, `actividad`) 
VALUES (NULL, 'Trabajo'), (NULL, 'Servicio'), (NULL, 'Agricola'), (NULL, 'Ganadera'), (NULL, 'Turismo');

-- Cargo en la tabla Provincia unos datos.
INSERT INTO `sayes`.`provincia` (`id_provincia`, `nombre_provincia`) VALUES (NULL, 'Chubut');

-- Cargo en la tabla Localidad unos datos. Estos solo se podran
-- cargar si se carga por primera vez en la tabla los datos, esto es
-- si los autoincrementales arrancan de 1, ya que sino hay que cambiar
-- el nro. de provincia referenciada por cada localidad.
INSERT INTO `sayes`.`localidad` (`id_localidad`, `nombre_localidad`, `codigo_postal`, `provincia_id`) VALUES (NULL, 'Rawson', '9103', '1'), (NULL, 'Trelew', '9100', '1'), (NULL, 'Puerto Madryn', '9120', '1'), (NULL, 'Gaiman', '9004', '1'), (NULL, 'Comodoro Rivadavia', '9000', '1'), (NULL, 'Rada Tilly', '9001', '1');

-- Cargo en la tabla Puesto_Comision_Directiva unos datos.
INSERT INTO `sayes`.`puesto_comision_directiva` (`id_puesto_comision_directiva`, `puesto`) VALUES (NULL, 'Presidente'), (NULL, 'Secretario'), (NULL, 'Tesorero'), (NULL, 'Sindico');

-- Cargo en la tabla Situacion_Persona_Juridica unos datos.
INSERT INTO `sayes`.`situacion_persona_juridica` (`id_situacion_pers_juridica`, `situacion`) VALUES (NULL, 'Formada'), (NULL, 'En Formacion');

-- Cargo en la tabla Tipo_Direccion unos datos.
INSERT INTO `sayes`.`tipo_direccion` (`id_tipo_direccion`, `descripcion`) VALUES (NULL, 'Real'), (NULL, 'Postal');

-- Cargo en la tabla Tipo_Persona_Juridica unos datos.
INSERT INTO `sayes`.`tipo_persona_juridica` (`id_tipo_persona_juridica`, `tipo_persona_juridica`) VALUES (NULL, 'Cooperativa'), (NULL, 'Mutual');

-- Cargo en la tabla Tipo_Usuario unos datos.
INSERT INTO `sayes`.`tipo_usuario` (`id_tipo_usuario`, `tipo_usuario`) VALUES (NULL, 'Administrador'), (NULL, 'Data Entry'), (NULL, 'Usuario');

-- Cargo en la tabla Tipo_Asamblea unos datos.
INSERT INTO `sayes`.`tipo_asamblea` (`id_tipo_asamblea`, `tipo_asamblea`) VALUES (NULL, 'Ordinaria'), (NULL, 'Extra ordinaria');

-- Cargo en la tabla Persona_fisica unos datos.
INSERT INTO `sayes`.`persona_fisica` (`id_persona_fisica`, `tipo_usuario_id`, `nombre`, `apellido`, `usuario`, `password`) VALUES (NULL, '1', 'administrador', 'administrador', 'admin', 'admin');
