# 🔧 Guía de Debug - Sistema de Notas Colegio Bryce

## Acceder a la Página de Debug

Una vez que el sistema está en funcionamiento, puedes acceder a la página de debug en:

```
http://localhost:8080/debug
```

## Información que Muestra el Debug

### 1. **Estado de Sesión**
   - Verifica si hay una sesión activa
   - Muestra el ID del usuario
   - Muestra el DNI
   - Muestra el rol (estudiante, profesor, admin)

### 2. **Configuración de Base de Datos**
   - Estado de conexión
   - Host
   - Nombre de la base de datos
   - Usuario

### 3. **Tabla de Usuarios**
   - ID
   - DNI
   - Contraseña (primeros caracteres)
   - Rol

### 4. **Tabla de Estudiantes**
   - ID
   - Usuario ID
   - Nombres
   - Apellidos
   - Grado
   - Sección

### 5. **Tabla de Profesores**
   - ID
   - Usuario ID
   - Nombres
   - Apellidos
   - Especialidad

### 6. **Tabla de Cursos**
   - ID
   - Nombre

### 7. **Tabla de Notas**
   - ID
   - Estudiante
   - Curso
   - Trimestre
   - Estado (Aprobado/Desaprobado)
   - Fecha de registro

## Pasos para Usar el Debug

1. **Inicia tu servidor:**
   ```bash
   php spark serve
   ```

2. **Accede al debug:**
   ```
   http://localhost:8080/debug
   ```

3. **Verifica:**
   - ✓ La conexión a la base de datos está activa
   - ✓ Los usuarios se cargaron correctamente
   - ✓ Los estudiantes están registrados
   - ✓ Los cursos están disponibles
   - ✓ Las notas se guardaron

4. **Prueba las credenciales:**
   - DNI: `12345678` (Estudiante)
   - Contraseña: `12345678`

5. **Inicia sesión y verifica:**
   - La sesión aparece como "ACTIVA"
   - El rol se muestra correctamente

## Troubleshooting

### Si la BD muestra error:
```
✗ Error de conexión
```

Verifica:
1. Que ejecutaste el `setup_database.sql`
2. Que los datos en `.env` son correctos
3. Que el servidor remoto está disponible

### Si no hay datos:
1. Ejecuta el SQL script nuevamente
2. Verifica que no hay errores de duplicados
3. Conéctate directamente a la BD y verifica con:
   ```sql
   SHOW TABLES;
   SELECT COUNT(*) FROM usuarios;
   SELECT COUNT(*) FROM estudiantes;
   ```

### Si la sesión no se guarda:
1. Revisa que iniciaste sesión correctamente en `/login`
2. Verifica que usaste credenciales válidas
3. Comprueba que los datos de usuario existen en la BD

## Eliminar el Debug en Producción

Para seguridad, elimina la ruta `/debug` antes de desplegar:

En `app/Config/Routes.php`:
```php
// Elimina esta línea:
$routes->get('/debug', 'Debug::index');
```

Y elimina los controladores/vistas:
```bash
rm app/Controllers/Debug.php
rm -r app/Views/debug/
```

## Archivos Relacionados

- **Controlador**: [app/Controllers/Debug.php](../app/Controllers/Debug.php)
- **Vista**: [app/Views/debug/index.php](../app/Views/debug/index.php)
- **Ruta**: [app/Config/Routes.php](../app/Config/Routes.php) (línea con `/debug`)
