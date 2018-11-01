DELIMITER $$
create procedure SP_In_Curso (
in _Nombre varchar(45),
in _Desc_Cat varchar(45)
)
begin
insert into Curso (Nombre, Desc_Cat)
values (_Nombre,_Desc_Cat);
end 
$$

DELIMITER $$
create procedure SP_Up_Curso (
in _idCurso int,
in _Nombre varchar(45),
in _Desc_Cat varchar(45)
)
begin
update curso set Nombre=_Nombre, Desc_Cat=_Desc_Cat
where idCurso = _idCurso;
end
$$

DELIMITER $$
create procedure SP_Del_Curso (
in _idCurso int
)
begin
delete from curso where idCurso = _idCurso;
end 
$$

DELIMITER $$
create procedure SP_Bus_Curso (
in _Nombre varchar(45)
)
begin
select * from  curso 
where Nombre = _Nombre;
end
$$


DELIMITER $$
create procedure SP_Mos_Curso ()
begin
select * from  curso;
end
$$



-----------------------------------------------------------

DELIMITER $$
create procedure SP_In_Usuario (
in _Nick varchar(45),
in _Contraseña varchar(45),
in _Nombre varchar(45),
in _Apelido varchar(45),
in _Email varchar(45),
in _Telf varchar(45),
in _Tipo_Usuario varchar(45)
)
begin
insert into Usuario(Nick,Contraseña,Nombre,Apellido,Email,Telf,Tipo_Usuario)
values (_Nick, _Contraseña, _Nombre, _Apellido, _Email, _Telf, _Tipo_Usuario);
end
$$



DELIMITER $$
create procedure SP_Up_Usuario (
in _idUsuario int,
in _Nick varchar(45),
in _Contraseña varchar(45),
in _Nombre varchar(45),
in _Apelido varchar(45),
in _Email varchar(45),
in _Telf varchar(45),
in _Tipo_Usuario varchar(45)
)
begin
update Usuario set Nick = _Nick, Contraseña = _Contraseña, Nombre = _Nombre, Apellido = _Apellido, Email  = _Email,
Telf = _Telf, Tipo_Usuario = _Tipo_Usuario
where idUsuario = _idUsuario;
end
$$


DELIMITER $$
create procedure SP_Del_Usuario (
in _idUsuario int
)
begin
delete from Usuario where idUsuario = _idUsuario;
end
$$



DELIMITER $$
create procedure SP_Mos_Usuario ()
begin
select * from Usuario;
end
$$



DELIMITER $$
create procedure SP_Bus_Usuario (
in _idUsuario int
)
begin
select * from Usuario where idUsuario = _idUsuario;
end
$$

-------------------------------------------------

DELIMITER $$
create procedure SP_In_Tema(
in _Nombre varchar(45),
in _idCurso int
)
begin
insert into Tema(Nombre,idCurso)
values (_Nombre, _idCurso);
end
$$


DELIMITER $$
create procedure SP_Up_Tema(
in _idTema int,
in _Nombre varchar(45),
in _idCurso int
)
begin
update Tema set Nombre = _Nombre, idCurso = _idCurso
where idTema = _idTema; 
end
$$



DELIMITER $$
create procedure SP_Del_Tema(
in _idTema int
)
begin
delete from Tema where idTema = _idTema;
end
$$



DELIMITER $$
create procedure SP_Mos_Tema()
begin
select * from Tema; 
end
$$


DELIMITER $$
create procedure SP_Bus_Tema(
in _Nombre varchar(45)
)
begin
select * from Tema where Nombre = _Nombre;
end
$$