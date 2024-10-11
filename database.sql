create table especialidad(id_especialidad int auto_increment primary key, especialidad varchar(100));

create table opc_titulacion(id_opc int auto_increment primary key, opc_titulacion varchar(100));

create table egresado(no_control int auto_increment primary key, nombre_completo varchar(255),
    CHECK (nombre_completo REGEXP '^[A-ZÑÁÉÍÓÚÜ][a-zñáéíóúü]+( [A-ZÑÁÉÍÓÚÜ][a-zñáéíóúü]+){1,3}$'),
    especialidad int references especialidad(id_especialidad),
    opc_titulacion int references opc_titulacion(id_opc),
    status tinyint,
    fecha_examen date
);
