-- Cargo en la tabla Actividad unos datos.
INSERT INTO `sayes`.`actividad` (`id_actividad`, `actividad`) 
VALUES (NULL, 'Trabajo'), (NULL, 'Servicio'), (NULL, 'Agricola')
,(NULL, 'Ganadera'), (NULL, 'Turismo'),(NULL, 'Actividad 1')
,(NULL, 'Actividad 2'), (NULL, 'Actividad 3'),(NULL, 'Actividad 4')
,(NULL, 'Actividad 5'), (NULL, 'Actividad 6'),(NULL, 'Actividad 7');

-- Cargo en la tabla Provincia unos datos.
INSERT INTO `sayes`.`provincia` (`id_provincia`, `nombre_provincia`) VALUES (NULL, 'Chubut');

-- Cargo en la tabla Localidad unos datos. Estos solo se podran
-- cargar si se carga por primera vez en la tabla los datos, esto es
-- si los autoincrementales arrancan de 1, ya que sino hay que cambiar
-- el nro. de provincia referenciada por cada localidad.
INSERT INTO `sayes`.`localidad` (`id_localidad`, `nombre_localidad`, `codigo_postal`, `provincia_id`) 
VALUES (NULL, 'Rawson', '9103', '1'), (NULL, 'Trelew', '9100', '1'), 
(NULL, 'Puerto Madryn', '9120', '1'), (NULL, 'Gaiman', '9004', '1'), 
(NULL, 'Comodoro Rivadavia', '9000', '1'), (NULL, 'Rada Tilly', '9001', '1'),
(NULL, 'Playa Union', '2000', '1'), (NULL, 'Paso de Indios', '2000', '1'),
(NULL, 'Los Altares', '2000', '1'), (NULL, 'Esquel', '2000', '1'),
(NULL, 'Trevelin', '2000', '1'), (NULL, 'Sarmiento', '2000', '1'),
(NULL, 'Aldea Escolar', '2000', '1'), (NULL, 'Rio Mayo', '2000', '1'),
(NULL, 'Rio Senguer', '2000', '1'), (NULL, 'Lago Puelo', '2000', '1'),
(NULL, 'Epuyen', '2000', '1'), (NULL, 'Lago Blanco', '2000', '1'),
(NULL, 'Tecka', '2000', '1'), (NULL, 'El Hoyo', '2000', '1'),
(NULL, 'Las Plumas', '2000', '1'), (NULL, 'El Maiten', '2000', '1'),
(NULL, 'Cholila', '2000', '1'), (NULL, '28 de Julio', '2000', '1');

-- Cargo en la tabla Puesto_Comision_Directiva unos datos.
INSERT INTO `sayes`.`puesto_comision_directiva` (`id_puesto_comision_directiva`, `puesto`) 
VALUES (NULL, 'Presidente'), (NULL, 'Secretario'), (NULL, 'Tesorero'), (NULL, 'Sindico');

-- Cargo en la tabla Situacion_Persona_Juridica unos datos.
INSERT INTO `sayes`.`situacion_persona_juridica` (`id_situacion_pers_juridica`, `situacion`) 
VALUES (NULL, 'Formada'), (NULL, 'En Formacion');

-- Cargo en la tabla Tipo_Direccion unos datos.
INSERT INTO `sayes`.`tipo_direccion` (`id_tipo_direccion`, `descripcion`) 
VALUES (NULL, 'Real'), (NULL, 'Postal');

-- Cargo en la tabla Tipo_Persona_Juridica unos datos.
INSERT INTO `sayes`.`tipo_persona_juridica` (`id_tipo_persona_juridica`, `tipo_persona_juridica`) 
VALUES (NULL, 'Cooperativa'), (NULL, 'Mutual');

-- Cargo en la tabla Tipo_Usuario unos datos.
INSERT INTO `sayes`.`tipo_usuario` (`id_tipo_usuario`, `tipo_usuario`) 
VALUES (NULL, 'Administrador'), (NULL, 'Data Entry'), (NULL, 'Usuario');

-- Cargo en la tabla Tipo_Asamblea unos datos.
INSERT INTO `sayes`.`tipo_asamblea` (`id_tipo_asamblea`, `tipo_asamblea`) 
VALUES (NULL, 'Ordinaria'), (NULL, 'Extra ordinaria');

-- Cargo en la tabla Persona_fisica unos datos.
INSERT INTO `sayes`.`persona_fisica` (`id_persona_fisica`, `tipo_usuario_id`, `nombre`, `apellido`, `usuario`, `password`) 
VALUES (NULL, '1', 'Administrador', 'Administrador', 'aadmi', '51d57c83a91b1f64886905e2ddce6d71'),
(NULL, '1', 'Nicolas', 'Fernandez', 'nico', '410ec15153a6dff0bed851467309bcbd');

-- Cargo en la tabla Aporte unos datos
INSERT INTO  `sayes`.`tipo_aporte` (`id_tipo_aporte` ,`tipo_aporte`)
VALUES (NULL ,  'Subsidio'), (NULL ,  'Material'), (NULL , 'Préstamo');

-- Cargo en la tabla Persona_juridica unos datos
INSERT INTO  `sayes`.`persona_juridica` (`id_persona_juridica` ,`situacion_id` ,`tipo_pers_juridica_id` ,`cuit_cuil` ,`nombre_fantasia` ,
`fecha_inicio_actividad` ,`resenia` ,`legajo` ,`matricula` ,`cantidad_de_socios` ,`telefono` ,`email`
)VALUES 
(NULL ,  '1',  '1',  '99123456789',  'La Cooperativa nro. 1',  '1984-01-01',  'La primer cooperativa',  '124',  'A234',  '55', '154223344',  'sayesch@gmail.com')
,(NULL ,  '1',  '1',  '1233456789',  'La Cooperativa nro. 2',  '1997-01-01', 'La segunda cooperativa',  '125',  'A267',  '11', '154343412',  'sayesch@gmail.com')
,(NULL ,  '1',  '1',  '20123456780',  'La Cooperativa nro. 3',  '1992-02-04', 'La tercer cooperativa',  '126',  'B5334',  '128', '154117629',  'sayesch@gmail.com')
,(NULL ,  '1',  '1',  '24123456789',  'La Cooperativa nro. 4',  '1996-06-12', 'La cuarta cooperativa',  '127',  'B5367',  '133', '156117629',  'sayesch@gmail.com')
,(NULL ,  '1',  '1',  '21123456785',  'La Cooperativa nro. 5',  '1926-06-12', 'La quinta cooperativa',  '128',  'B5222',  '134', '156347629',  'sayesch@gmail.com')
,(NULL ,  '1',  '2',  '20113456785',  'La Mutual nro. 1',  '1970-03-04', 'La primer mutual',  '154',  'B2434',  '156', '154117628',  'sayesch@gmail.com')
,(NULL ,  '1',  '2',  '20123456785',  'La Mutual nro. 2',  '1971-03-04', 'La segunda mutual',  '155',  'B2435',  '157', '154117629',  'sayesch@gmail.com')
,(NULL ,  '1',  '2',  '20133456785',  'La Mutual nro. 3',  '1972-03-04', 'La tercer mutual',  '156',  'B2436',  '158', '154117630',  'sayesch@gmail.com')
,(NULL ,  '1',  '2',  '20143456785',  'La Mutual nro. 4',  '1973-03-04', 'La cuarta mutual',  '157',  'B2437',  '159', '154117631',  'sayesch@gmail.com');

-- Cargo en la tabla 'N'a'N' Actividad_Pers_Juridica unos datos
INSERT INTO `sayes`.`actividad_pers_juridica` (`actividad_id`, `persona_juridica_id`) 
VALUES ('3', '1'), ('2', '2'), ('5', '3'), ('8', '6');

-- Cargo en la tabla Aportes unos datos
INSERT INTO `sayes`.`aporte` (`id_aporte`, `persona_juridica_id`, `tipo_aporte_id`, `fecha_aporte`, `monto_aporte`, `numero_expediente`) 
VALUES (NULL, '4', '1', '2012-10-03', '3455.28', '67/12'),
(NULL, '7', '1', '2012-10-03', '3899.21', '123/12'),
(NULL, '1', '1', '2011-03-03', '319.89', '21/11');

-- Cargo en la tabla Direccion unos datos
INSERT INTO `sayes`.`direccion` (`id_direccion`, `persona_juridica_id`, `tipo_direccion_id`, `localidad_id`, `calle`, `numero`, `piso`, `departamento`) 
VALUES (NULL, '1', '1', '9', 'San Martin', '123', NULL, NULL),
(NULL, '2', '1', '2', 'Belgrano', '564', NULL, NULL),
(NULL, '4', '1', '3', 'Av. Libertador', '12', NULL, NULL),
(NULL, '6', '1', '12', 'Los alamos', '87', NULL, NULL);

-- Cargo en la tabla Ejercicio_Economico unos datos
INSERT INTO `sayes`.`ejercicio_economico` (`id_ejercicio_economico`, `numero_ejercicio_economico`, `persona_juridica_id`, `fecha_fin_ejercicio_economico`) 
VALUES (NULL, '1998', '1', '1998-12-31'), (NULL, '1999', '1', '1999-12-31'), (NULL, '2000', '1', '2000-12-31'), (NULL, '2012', '1', '2012-12-31')
,(NULL, '2003', '2', '2003-12-31'), (NULL, '2006', '2', '2006-12-31'), (NULL, '2008', '2', '2008-12-31'), (NULL, '2012', '2', '2012-12-31')
,(NULL, '2001', '5', '2001-12-31'), (NULL, '2002', '5', '2002-12-31'), (NULL, '2003', '5', '2003-12-31'), (NULL, '2012', '5', '2012-12-15')
,(NULL, '2003', '7', '2003-12-21'), (NULL, '2012', '7', '2012-12-21')
,(NULL, '1982', '8', '1982-12-31'), (NULL, '2003', '8', '2003-12-31'), (NULL, '2012', '8', '2012-12-15');

-- Cargo en la tabla mensaje_alerta unos datos
INSERT INTO `sayes`.`mail_alerta` (`id_tipo_alerta`, `tipo_alerta`, `dias_para_aviso`, `cuerpo_mensaje`) 
VALUES (NULL, '1', '50', 'Mail de Alerta de Ejercicio Economico.')
,(NULL, '2', '50', 'Mail de Alerta de vencimiento del llamado a convocatoria.')
,(NULL, '3', '50', 'Mail de Alerta de vencimiento de asuncion del nuevo mandato.');
