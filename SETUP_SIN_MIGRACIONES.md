# Configuración Sin Migraciones - Sistema de Notas

Tu configuración está usando una base de datos remota:
- **Host**: 192.168.101.76
- **Usuario**: edison
- **Contraseña**: E*SASUKO45
- **Base de datos**: colegio_bryce

## Opción 1: Usar phpMyAdmin del Servidor Remoto

1. Accede a phpMyAdmin en el servidor remoto (probablemente http://192.168.101.76/phpmyadmin)
2. Inicia sesión con:
   - Usuario: `edison`
   - Contraseña: `E*SASUKO45`
3. Haz clic en la pestaña "SQL"
4. Copia y pega el contenido del archivo `setup_database.sql`
5. Haz clic en "Ejecutar"

## Opción 2: Usar Terminal (MySQL Remoto)

```bash
# En la terminal del proyecto
cd C:\Users\EdisonW\Music\colegiobryce

# Conectarse al servidor remoto y ejecutar el script
mysql -h 192.168.101.76 -u edison -p colegio_bryce < setup_database.sql

# Te pedirá la contraseña: E*SASUKO45
```

## Opción 3: Usar PowerShell (recomendado para Windows)

1. Abre PowerShell en el directorio del proyecto
2. Ejecuta:

```powershell
# Ejecutar el script SQL en la BD remota
mysql -h 192.168.101.76 -u edison -pE*SASUKO45 colegio_bryce < setup_database.sql
```

O Si prefiero con interfaz gráfica:
```powershell
# Solo copiar el contenido del archivo
Get-Content setup_database.sql | mysql -h 192.168.101.76 -u edison -pE*SASUKO45 colegio_bryce
```

## Verificar que la Base de Datos se creó Correctamente

Una vez ejecutado el script, verifica en phpMyAdmin o ejecuta:

```bash
mysql -h 192.168.101.76 -u edison -pE*SASUKO45 colegio_bryce -e "SHOW TABLES;"
mysql -h 192.168.101.76 -u edison -pE*SASUKO45 colegio_bryce -e "SELECT COUNT(*) as total_usuarios FROM usuarios;"
mysql -h 192.168.101.76 -u edison -pE*SASUKO45 colegio_bryce -e "SELECT COUNT(*) as total_estudiantes FROM estudiantes;"
mysql -h 192.168.101.76 -u edison -pE*SASUKO45 colegio_bryce -e "SELECT COUNT(*) as total_notas FROM notas;"
```

## Credenciales Disponibles Después de la Configuración

### Estudiante
- **DNI**: 12345678
- **Contraseña**: 12345678

### Profesor
- **DNI**: 87654321
- **Contraseña**: 87654321

### Administrador
- **DNI**: 00000000
- **Contraseña**: admin123

## Ahora Prueba el Sistema

1. Asegúrate de que tu servidor local está corriendo:
   ```bash
   php spark serve
   ```

2. Accede a: http://localhost:8080/login

3. Usa cualquiera de las credenciales anteriores

4. Deberías ser redirigido automáticamente a:
   - `/estudiante` si eres estudiante
   - `/profesor` si eres profesor

## Si Aún Hay Problemas

Verifica:
1. Que puedes conectarte al servidor remoto:
   ```bash
   mysql -h 192.168.101.76 -u edison -pE*SASUKO45 -e "SELECT 1;"
   ```

2. Que la base de datos `colegio_bryce` existe:
   ```bash
   mysql -h 192.168.101.76 -u edison -pE*SASUKO45 -e "SHOW DATABASES;" | findstr colegio_bryce
   ```

3. Que todas las tablas se crearon:
   ```bash
   mysql -h 192.168.101.76 -u edison -pE*SASUKO45 colegio_bryce -e "SHOW TABLES;"
   ```

4. Que los datos se insertaron:
   ```bash
   mysql -h 192.168.101.76 -u edison -pE*SASUKO45 colegio_bryce -e "SELECT * FROM usuarios;"
   ```
