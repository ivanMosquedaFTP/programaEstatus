CREATE TABLE egresado ( id_solicitud int auto_increment primary key,
    no_control varchar(10) not null unique,
    nombre_completo VARCHAR(100),
    CHECK (nombre_completo REGEXP '^[A-ZÑÁÉÍÓÚÜ][a-zñáéíóúü]+( [A-ZÑÁÉÍÓÚÜ][a-zñáéíóúü]+){1,3}$'),
    especialidad VARCHAR(100),
    nombre_proyecto VARCHAR(100),
    opc_titulacion VARCHAR(100),
    status TINYINT,
    fecha_examen DATE,
    asesor VARCHAR(100),
    sinodal1 VARCHAR(100),
    sinodal2 VARCHAR(100),
    sinodal3 VARCHAR(100) );

drop table egresado;