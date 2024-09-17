USE bolsa_laborall;

INSERT INTO usuarios (id, nombre_rs, apellido, celular, ruc, correo, rol, user, pasword, archivo_cv)
VALUES
    (2, 'SamrtCities', '', '7495954456', '', 'elicapordios@gmail.com', 2, '', '$2y$10$ZM90jnf6ZgJ4ECW6dF2W1.9NnO9E.nOjES7FriYxcUXVd9zqR18Oi', 'Plantilla_de_Plan_de_Tesis_UNSAAC (1).docx'),
    (3, 'das', '', '7495953', '', 'infoeliasar@gmail.com', 1, '', '$2y$10$.qME/S7WCncz6NmY7n5Jju5GqjEddDL654n8SWbJ3Fy05uCkG1UjW', 'tarea a.docx'),
    (4, 'Juan Pérez', '', '12345678', '20455678912', 'juan.perez@example.com', 'postulante', 'juanperez', 'hashed_password_juan', 'cv_juan.pdf'),
    (5, 'Empresa Tech S.A.', '', '87654321', '20123456789', 'contacto@empresatech.com', 'empresa', 'empresatech', 'hashed_password_tech', NULL),
    (6, 'Carlos Ramírez', '', '56781234', '20987654321', 'carlos.ramirez@example.com', 'postulante', 'carlosramirez', 'hashed_password_carlos', 'cv_carlos.pdf'),
    (10, 'Juan Pérez', '', '12345678', '', 'juan@email.com', 'postulante', 'juanp', 'password123', 'juan_cv.pdf'),
    (11, 'María González', '', '87654321', '', 'maria@email.com', 'postulante', 'mariag', 'password456', 'maria_cv.pdf'),
    (12, 'Tech Solutions S.A.C.', '', '', '20123456789', 'info@techsolutions.com', 'empresa', 'techsolutions', 'company123', NULL),
    (13, 'Innovate Peru E.I.R.L.', '', '', '20987654321', 'rrhh@innovateperu.com', 'empresa', 'innovateperu', 'company456', NULL),
    (14, 'Eliazar', 'Noa Llasccanoa', '', '', 'infoeliasar@gmail.com', 'Candidato', '', '$2y$10$tfKpYMV/bGogmkHawO746eAeRingVVbqkp9SzsTB5LU1kmaOxVTNu', NULL),
    (15, 'Eliazarn', 'Noa', '', '', 'infoeliasar@gmail.com', 'Candidato', '', '$2y$10$r2RYrGWroHkqmUpffcNU2ukk/.9u0nF5l6L8Pr1TwPLaDEyZM9.2e', NULL),
    (16, 'Mateo', 'Javier', '', '', 'infoeliasar@gmail.com', 'Candidato', '', '$2y$10$j8paSbgssPZ2b8gXUlk22.cngTcEo8Li7hdXHCClcpF0.eE/Xxigm', NULL),
    (17, '', '', '', '', '', 'Candidato', '', '$2y$10$snWtBeliHACGP.025VU8OOX92dL2wInETivC7OHXaPIT2tDkTpt3e', NULL),
    (18, 'Eliazar', 'Noa', '', '', 'infoeliasar@gmail.com', 'Candidato', '', '$2y$10$KIyGR2IL7M3iUPJQ/3lI8uMoAYIlNmWJnRaRjK7zeKDr5MloDk/bm', NULL),
    (19, 'RegistroFenotipo', 'Javier', '', '', 'infoeliasar@gmail.com', 'Candidato', '', '$2y$10$7epOnoDS4OtHXJ.ZZsLe1OxJ7GCujT9Q/Z1Fy96KXwQT/hoXAvmg6', NULL),
    (20, 'Eliazar', 'Noa Llasccanoa', '', '', 'infoeliasar@gmail.com', 'Empresa', '', '$2y$10$zU6Psu9Oa9iJ5l0FbHi/Eeaw92OkpZb5Jz4p7ovEVknd5aheYWV56', NULL),
    (21, 'Eliazar', 'Noa Llasccanoa', '', '', 'infoeliasar@gmail.com', 'Candidato', '', '$2y$10$ZeHPf2ov0Zbxb5V8Dw223e2dLHU8A2OsVURaPoic/1kMDmxc7PFj2', NULL);


INSERT INTO empresas (nombre, ruc, direccion, telefono, correo, descripcion, usuario_id)
VALUES
    ('Empresa Tech S.A.', '20123456786', 'Calle Tecnológica 123', '999888777', 'contacto@empresatech.com', 'Empresa dedicada a la tecnología de software y consultoría IT.', 2),
    ('Construcciones Moderna S.A.', '20455678712', 'Avenida de la Construcción 456', '987654321', 'info@construccionesmoderna.com', 'Empresa especializada en obras de construcción y proyectos de infraestructura.', 3);

INSERT INTO oferta_laboral (id, titulo, descripcion, categoria, lugar, horario, remuneracion, id_empresa)
VALUES
    (1, 'Desarrollador Full Stack', 'Buscamos un desarrollador con experiencia en JavaScript, Node.js y React.', NULL, NULL, 'Tiempo completo', 3500.00, 1),
    (2, 'Ingeniero Civil', 'Se requiere ingeniero civil con experiencia en supervisión de obras.', NULL, NULL, 'Tiempo completo', 5000.00, 2),
    (3, 'Analista de Datos', 'Responsable del análisis y procesamiento de datos para optimización de procesos.', NULL, NULL, 'Medio tiempo', 2500.00, 1),
    (4, 'Desarrollador Full Stack', 'Buscamos un desarrollador Full Stack con experiencia en React y Node.js', NULL, NULL, 'Tiempo completo', 5000.00, '20123456789'),
    (5, 'Diseñador UX/UI', 'Se necesita diseñador UX/UI con conocimientos en Figma y Adobe XD', NULL, NULL, 'Medio tiempo', 3000.00, '20123456789'),
    (6, 'Analista de Datos', 'Oportunidad para analista de datos con experiencia en Python y SQL', NULL, NULL, 'Tiempo completo', 4500.00, '20987654321'),
    (7, 'Ingeniero DevOps', 'Buscamos ingeniero DevOps con conocimientos en AWS y Docker', NULL, NULL, 'Tiempo completo', 6000.00, '20987654321'),
    (8, 'Desarrollador Full Stack', 'Desarrollo de aplicaciones web utilizando tecnologías modernas.', 'Tecnología', 'Lima', 'Lunes a Viernes 9:00 AM - 6:00 PM', 4500.00, 1),
    (9, 'Diseñador Gráfico', 'Diseño de piezas gráficas para medios digitales y físicos.', 'Diseño', 'Arequipa', 'Lunes a Viernes 8:00 AM - 5:00 PM', 3200.00, 2),
    (10, 'Analista de Marketing Digital', 'Gestión de campañas publicitarias y redes sociales.', 'Marketing', 'Cusco', 'Lunes a Sábado 10:00 AM - 4:00 PM', 4000.00, 3),
    (11, 'Técnico de Soporte IT', 'Soporte técnico a usuarios y mantenimiento de infraestructura TI.', 'Tecnología', 'Trujillo', 'Lunes a Viernes 9:00 AM - 6:00 PM', 2800.00, 4),
    (12, 'Gerente de Proyectos', 'Gestión y planificación de proyectos de software.', 'Gestión', 'Lima', 'Lunes a Viernes 9:00 AM - 6:00 PM', 7500.00, 1),
    (13, 'Ejecutivo de Ventas', 'Venta de productos y servicios a clientes corporativos.', 'Ventas', 'Piura', 'Lunes a Viernes 8:30 AM - 5:30 PM', 3000.00, 2),
    (14, 'Especialista en Ciberseguridad', 'Análisis y gestión de riesgos de seguridad informática.', 'Seguridad', 'Lima', 'Lunes a Viernes 9:00 AM - 6:00 PM', 6000.00, 5);
