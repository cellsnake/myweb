create TABLE mw_user(
id int not null auto_increment,
name VARCHAR(50) ,
email VARCHAR(50) ,
password VARCHAR(50) ,
PRIMARY KEY (id)
);


create TABLE mw_subject(
id int not null auto_increment,
id_user int,
sname VARCHAR(50) ,
mark int,
PRIMARY KEY (id),
FOREIGN KEY (id_user) REFERENCES mw_user(id)
);


INSERT INTO mw_user (name, email, password)
VALUES ('Juan Carlos Montoya', 'jcm@gmail.com', '1234');

INSERT INTO mw_user (name, email, password)
VALUES ('Blanca M.', 'blanca@gmail.com', '12345');

INSERT INTO mw_subject (id_user, sname, calificacion)
VALUES (1, 'Matemáticas', 7);



select mw_user.name, mw_notas.asignatura, mw_notas.calificacion
from mw_notas INNER JOIN mw_user ON mw_notas.id_user = mw_user.id;
