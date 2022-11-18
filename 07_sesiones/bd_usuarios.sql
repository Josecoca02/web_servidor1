USE db_usuarios;

ALTER TABLE usuarios
	ADD COLUMN rol VARCHAR(15);

ALTER TABLE usuarios
   ADD CONSTRAINT chk_rol_valido 
   CHECK (rol in('administrador', 'usuario'));
   
   
   ALTER TABLE usuarios DROP COLUMN rol;