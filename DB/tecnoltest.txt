# Primero de todo creamos la base de datos
create database tecnoltest;

# A continuación la usamos
use tecnoltest;

/*
	Creamos la table Categories dandole un id como clave primaria con un auto_increment 
    (para que cuando se añada un nuevo elemento no nos debamos preocupar de añadir un id)
	y un nombre de categoría.
*/
create table Categories (
id int(11) primary key auto_increment, 
categoryName varchar(30) not null);

/*
	Creamos la table Users dandole un id como clave primaria con un auto_increment,
    un userName para los nombres de usuario y un campo para la ciudad de donde es cada usuario
	usando un enum ya que solo trabajaremos con clientes de Madrid, Barcelona y Sevilla.
*/
create table Users (
id int(11) primary key auto_increment, 
userName varchar(30) not null,
userCity enum("Madrid", "Barcelona", "Sevilla"));

/*
	Creamos la table Products dandole un id como clave primaria con un auto_increment,
	un nombre de producto, un precio, una descripción, una clave foránea de categoryId,
    que referencia a la tabla Categories y en concreto al campo id y una clave foránea 
    de userId, que referencia a la tabla Users y en concreto al campo id.
*/
create table Products (
id int(11) primary key auto_increment, 
productName varchar(30) not null,
price float(6, 2) not null,
productDescription varchar(100), 
categoryId int(11),
userId int(11),
foreign key(categoryId) references Categories(id),
foreign key(userId) references Users(id));

/*
	Creamos la table Reviews dandole un id como clave primaria con un auto_increment,
	un título para la review, un texto dónde estara escrita dicha review, 
    una clave foránea de userId, que referencia a la tabla Users 
    y en concreto al campo id y una clave foránea de productId, 
    que referencia a la tabla Products y en concreto al campo id.
*/
create table Reviews (
id int(11) primary key auto_increment, 
title varchar(30) not null, 
reviewText varchar(100),
userId int(11),
productId int(11),
foreign key(userId) references Users(id),
foreign key(productId) references Products(id));

# Ahora creamos las 3 categorías Aislantes, Herramientas y Mantenimiento
insert into Categories (categoryName) 
values ('Aislantes'), ('Herramientas'), ('Mantenimiento');

# Creamos un par de usuarios para las reviews
insert into Users (userName, userCity)
values
('Pepito', 'Barcelona'),
('Fulanito', 'Barcelona'),
('Menganito', 'Madrid'),
('Juanito', 'Sevilla');

# Creamos 2 productos para cada categoría
# Aislantes
insert into Products (productName, price, productDescription, categoryId)
values 
('Tecnotermic', 5.95, 'Material aislante termico.', 1), 
('Tecnoimpact', 3.99, 'Material aislante para reducir impactos.', 1);

# Herramientas
insert into Products (productName, price, productDescription, categoryId)
values 
('Cortadora', 24.99,'Herramienta ara cortar cualquier tipo de materiales.', 2),
('Maceta', 20.95, 'Herramienta para que tengas que hacer tanta fuerza.', 2);

# Mantenimiento
insert into Products (productName, price, productDescription, categoryId)
values 
('Limpiador', '4.99', 'Limpiador para cualquier tipo de superfícies.', 3),
('Lubricante', '2.95', 'Lubricante para todo tipo de uniones móviles.', 3);

# Insertamos 2 reviews para el producto Tecnotermic
insert into Reviews (title, reviewText, userId, productId)
values
('Fenomenal', 'Ya puedo ir en manga corta durante el invierno.', 1, 1),
('Gran compra', 'Aisla de maravilla.', 4, 1);

# Insertamos 2 reviews para el producto Tecnoimpact
insert into Reviews (title, reviewText, userId, productId)
values
('Se acabó pisar tan firme', 'El parquet se nota de otra manera.', 2, 2),
('No mas lloros', 'Mi hijo cayo de cabeza contra el suelo y no lloró.', 4, 2);

# Insertamos 2 reviews para el producto Cortadora
insert into Reviews (title, reviewText, userId, productId)
values
('Muy recomendable', 'Corta muy bien.', 1, 3),
('Cuidado con la hoja', 'Si me descuido me corto un dedo.', 3, 3);

# Insertamos 2 reviews para el producto Maceta
insert into Reviews (title, reviewText, userId, productId)
values
('Ya estoy tranquilo', 'La uso a menudo para deshaogarme.', 2, 4),
('Mala calidad', 'La cabeza de la maceta salio disparada al primer uso.', 3, 4);

# Insertamos 2 reviews para el producto Limpiador
insert into Reviews (title, reviewText, userId, productId)
values
('Como una patena', 'Este limpiador me lo dejo todo como una patena.', 3, 5),
('Solo una gota', 'Todo quedó como los chorros del oro.', 4, 5);

# Insertamos 2 reviews para el producto Lubricante
insert into Reviews (title, reviewText, userId, productId)
values
('Para cualqier cosa', 'Ahora todo va fino filipino', 1, 6),
('No hace falta mucho', 'Con un poquito da para mucha lubricación.', 2, 6);
