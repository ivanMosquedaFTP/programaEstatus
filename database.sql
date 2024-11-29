create table especialidad(id_especialidad int auto_increment primary key, especialidad varchar(100));

create table opc_titulacion(id_opc int auto_increment primary key, opc_titulacion varchar(100));

create table egresado(no_control int auto_increment primary key, nombre_completo varchar(255),
    CHECK (nombre_completo REGEXP '^[A-ZÑÁÉÍÓÚÜ][a-zñáéíóúü]+( [A-ZÑÁÉÍÓÚÜ][a-zñáéíóúü]+){1,3}$'),
    especialidad int references especialidad(id_especialidad),
    opc_titulacion int references opc_titulacion(id_opc),
    status tinyint,
    fecha_examen date
);

create table sinodal(id_sinodal int auto_increment primary key, nombre_completo varchar(255));

create table asesor(id_asesor int auto_increment primary key, nombre_completo varchar(255));

create table proyecto(id_proyecto int auto_increment primary key, nombre_proyecto varchar(255));

alter table egresado add column asesor integer references asesor(id_asesor);
alter table egresado add column nombre_proyecto integer references proyecto(id_proyecto);
alter table egresado add column sinodal_1 integer references sinodal(id_sinodal);
alter table egresado add column sinodal_2 integer references sinodal(id_sinodal);
alter table egresado add column sinodal_3 integer references sinodal(id_sinodal);
