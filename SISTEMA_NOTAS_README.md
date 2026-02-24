# Sistema de Gestión de Notas - Colegio Bryce

## Descripción
Sistema web para que estudiantes consulten sus notas trimestrales y profesores registren calificaciones.

## Características
- **Autenticación**: Login con DNI y contraseña
- **Panel de Estudiante**: Visualización de notas por trimestre
- **Panel de Profesor**: Registro de calificaciones

## Instalación y Configuración

### 1. Ejecutar Migraciones
Para crear las tablas en la base de datos:

```bash
php spark migrate
```

### 2. Ejecutar Seeds (Datos de Prueba)
Para cargar datos iniciales:

```bash
php spark db:seed DatabaseSeeder
```

O de forma individual:

```bash
php spark db:seed UsuariosSeeder
php spark db:seed EstudiantesSeeder
php spark db:seed CursosSeeder
php spark db:seed ProfesoresSeeder
php spark db:seed NotasSeeder
```

## Estructura de Directorios

### Vistas Creadas
```
app/Views/
├── auth/
│   └── login.php          # Formulario de login
├── estudiante/
│   └── notas.php          # Panel de notas del estudiante
└── profesor/
    └── dashboard.php      # Dashboard para profesores
```

### Migraciones
```
app/Database/Migrations/
├── 2025-02-23-000001_CreateUsuarios.php
├── 2025-02-23-000002_CreateEstudiantes.php
├── 2025-02-23-000003_CreateProfesores.php
├── 2025-02-23-000004_CreateCursos.php
├── 2025-02-23-000005_CreateProfesorCurso.php
└── 2025-02-23-000006_CreateNotas.php
```

### Seeds
```
app/Database/Seeds/
├── DatabaseSeeder.php       # Seed maestro
├── UsuariosSeeder.php       # Usuarios de prueba
├── EstudiantesSeeder.php    # Estudiantes de prueba
├── CursosSeeder.php         # Cursos predefinidos
├── ProfesoresSeeder.php     # Profesores de prueba
└── NotasSeeder.php          # Notas de ejemplo
```

## Credenciales de Prueba

Después de ejecutar los seeds, puedes usar estas credenciales:

### Estudiante
- DNI: `12345678`
- Contraseña: `12345678`

### Profesor
- DNI: `87654321`
- Contraseña: `87654321`

### Administrador
- DNI: `00000000`
- Contraseña: `admin123`

## Rutas Disponibles

```
GET  /             # Página de inicio
GET  /login        # Formulario de login
POST /validar      # Validación de credenciales
GET  /logout       # Cerrar sesión
GET  /estudiante   # Panel de notas (solo estudiantes)
GET  /profesor     # Dashboard de profesor (solo profesores)
POST /guardar-nota # Registrar nueva nota (solo profesores)
```

## Módelos de Datos

### Usuarios
- id
- dni (único)
- password
- rol (estudiante, profesor, admin)

### Estudiantes
- id
- usuario_id (FK)
- nombres
- apellidos
- grado
- seccion

### Profesores
- id
- usuario_id (FK)
- nombres
- apellidos
- especialidad

### Cursos (10 predefinidos)
- Educación para el trabajo
- Religión
- Ciencia y Tecnología
- Matemática
- Inglés
- Comunicación
- Arte y Cultura
- Educación Física
- Ciencias Sociales
- Desarrollo Personal, Ciudadanía y Cívica

### Notas
- id
- estudiante_id (FK)
- curso_id (FK)
- trimestre (1, 2, 3)
- estado (Aprobado, Desaprobado)
- fecha_registro

## Flujo de Uso

### Para Estudiantes
1. Ingresar a `/login`
2. Usar DNI como usuario y contraseña
3. Ver notas organizadas por trimestre
4. Logout

### Para Profesores
1. Ingresar a `/login`
2. Usar DNI como usuario y contraseña
3. Seleccionar estudiante, curso, trimestre y estado
4. Guardar la calificación

## Validaciones y Seguridad
- Validación de DNI y contraseña
- Protección de rutas según rol de usuario
- Prevención de duplicados en notas (una nota por estudiante, curso y trimestre)
- Sesiones de usuario

## Notas Importantes
- Las contraseñas se almacenan en texto plano (usar bcrypt en producción)
- El sistema depende de sesiones de PHP
- Las notas no pueden ser modificadas, solo registradas
