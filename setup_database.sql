-- Script SQL para crear la base de datos del Sistema de Notas - Colegio Bryce
-- Ejecutar en phpMyAdmin o MySQL directo

CREATE DATABASE IF NOT EXISTS colegio_bryce;
USE colegio_bryce;

-- ==========================================
-- TABLA USUARIOS
-- ==========================================
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    dni VARCHAR(8) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    rol ENUM('estudiante','profesor','admin') NOT NULL
);

-- ==========================================
-- TABLA ESTUDIANTES
-- ==========================================
CREATE TABLE estudiantes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    nombres VARCHAR(100) NOT NULL,
    apellidos VARCHAR(100) NOT NULL,
    grado VARCHAR(20) NOT NULL,
    seccion VARCHAR(10) NOT NULL,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE
);

-- ==========================================
-- TABLA PROFESORES
-- ==========================================
CREATE TABLE profesores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    nombres VARCHAR(100) NOT NULL,
    apellidos VARCHAR(100) NOT NULL,
    especialidad VARCHAR(100),
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE
);

-- ==========================================
-- TABLA CURSOS
-- ==========================================
CREATE TABLE cursos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(150) NOT NULL
);

-- ==========================================
-- TABLA PROFESOR_CURSO
-- ==========================================
CREATE TABLE profesor_curso (
    id INT AUTO_INCREMENT PRIMARY KEY,
    profesor_id INT NOT NULL,
    curso_id INT NOT NULL,
    FOREIGN KEY (profesor_id) REFERENCES profesores(id) ON DELETE CASCADE,
    FOREIGN KEY (curso_id) REFERENCES cursos(id) ON DELETE CASCADE,
    UNIQUE (profesor_id, curso_id)
);

-- ==========================================
-- TABLA NOTAS
-- ==========================================
CREATE TABLE notas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    estudiante_id INT NOT NULL,
    curso_id INT NOT NULL,
    trimestre ENUM('1','2','3') NOT NULL,
    estado ENUM('Aprobado','Desaprobado') NOT NULL,
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (estudiante_id) REFERENCES estudiantes(id) ON DELETE CASCADE,
    FOREIGN KEY (curso_id) REFERENCES cursos(id) ON DELETE CASCADE,
    UNIQUE (estudiante_id, curso_id, trimestre)
);

-- ==========================================
-- INSERTAR USUARIOS DE PRUEBA
-- ==========================================
INSERT INTO usuarios (dni, password, rol) VALUES
('12345678', '12345678', 'estudiante'),
('87654321', '87654321', 'profesor'),
('00000000', 'admin123', 'admin'),
('11111111', 'pass1234', 'estudiante'),
('22222222', 'pass1234', 'profesor');

-- ==========================================
-- INSERTAR CURSOS
-- ==========================================
INSERT INTO cursos (nombre) VALUES
('Educación para el trabajo'),
('Religión'),
('Ciencia y Tecnología'),
('Matemática'),
('Inglés'),
('Comunicación'),
('Arte y Cultura'),
('Educación Física'),
('Ciencias Sociales'),
('Desarrollo Personal, Ciudadanía y Cívica');

-- ==========================================
-- INSERTAR ESTUDIANTES
-- ==========================================
INSERT INTO estudiantes (usuario_id, nombres, apellidos, grado, seccion) VALUES
(1, 'Juan', 'Pérez García', '4to Sec', 'A'),
(4, 'María', 'González López', '5to Sec', 'B');

-- ==========================================
-- INSERTAR PROFESORES
-- ==========================================
INSERT INTO profesores (usuario_id, nombres, apellidos, especialidad) VALUES
(2, 'Pedro', 'López García', 'Matemática'),
(5, 'Laura', 'Sánchez Ruiz', 'Comunicación');

-- ==========================================
-- INSERTAR NOTAS DE EJEMPLO
-- ==========================================
INSERT INTO notas (estudiante_id, curso_id, trimestre, estado) VALUES
-- Notas estudiante 1 - Juan Pérez
(1, 1, '1', 'Aprobado'),
(1, 2, '1', 'Aprobado'),
(1, 3, '1', 'Desaprobado'),
(1, 4, '1', 'Aprobado'),
(1, 5, '1', 'Aprobado'),

(1, 1, '2', 'Aprobado'),
(1, 2, '2', 'Aprobado'),
(1, 3, '2', 'Aprobado'),
(1, 4, '2', 'Desaprobado'),
(1, 5, '2', 'Aprobado'),

(1, 1, '3', 'Aprobado'),
(1, 2, '3', 'Aprobado'),
(1, 3, '3', 'Aprobado'),
(1, 4, '3', 'Aprobado'),
(1, 5, '3', 'Aprobado'),

-- Notas estudiante 2 - María González
(2, 5, '1', 'Aprobado'),
(2, 6, '1', 'Aprobado'),
(2, 7, '1', 'Aprobado'),
(2, 8, '1', 'Aprobado'),

(2, 5, '2', 'Aprobado'),
(2, 6, '2', 'Desaprobado'),
(2, 7, '2', 'Aprobado'),
(2, 8, '2', 'Aprobado'),

(2, 5, '3', 'Aprobado'),
(2, 6, '3', 'Aprobado'),
(2, 7, '3', 'Aprobado'),
(2, 8, '3', 'Aprobado');
