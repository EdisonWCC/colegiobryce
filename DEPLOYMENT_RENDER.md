# Guía de Deployment a Render

## Pasos para desplegar en Render

### 1. Preparar el repositorio Git
```bash
git add .
git commit -m "Prepare for Render deployment"
git push origin main
```

### 2. Conectar con Render

1. Ve a [render.com](https://render.com) y crea una cuenta
2. Conecta tu repositorio de GitHub
3. Crea un nuevo "Web Service"
4. Selecciona tu repositorio `colegiobryce`

### 3. Configurar en el Dashboard de Render

**Environment Variables** (agregar estas):

- `CI_ENVIRONMENT` = `production`
- `DEBUGBAR_ENABLED` = `false`
- `app.baseURL` = `https://tu-dominio.onrender.com/`

**Opcional - Si usas Base de Datos:**
- `database.default.hostname` = (tu host de DB)
- `database.default.database` = (tu nombre de DB)
- `database.default.username` = (usuario)
- `database.default.password` = (contraseña)
- `database.default.DBDriver` = `MySQLi`

### 4. Configuración automática

El archivo `render.yaml` configurará automáticamente:
- **Build Command**: `composer install && npm run build`
- **Start Command**: Apache2 sirviendo desde `/public`
- **PHP Version**: 8.2

### 5. Deployar

Haz click en "Deploy" en el dashboard de Render. El proceso:
1. Instala dependencias PHP (composer)
2. Compila Tailwind CSS (npm)
3. Inicia Apache con el proyecto

### 6. Configuraciones importantes

#### .htaccess
Asegúrate que existe `/public/.htaccess` para reescritura de URLs

#### Permisos de escritura
Las carpetas deben ser escribibles (ya configuradas):
- `writable/cache/`
- `writable/logs/`
- `writable/session/`
- `writable/uploads/`

### Troubleshooting

**Error 500:**
- Revisa logs en Render dashboard
- Verifica variables de entorno
- Comprueba permisos de carpetas writable

**CSS/JS no carga:**
- Ejecuta `npm run build` localmente
- Verifica que `tailwind.css` existe en `public/css/`

**Base de datos no conecta:**
- Verifica credenciales en environment variables
- Asegúrate que la DB está accesible desde Render
