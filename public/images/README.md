# Imágenes del sitio - Colegio Bryce

Coloca aquí las imágenes del sitio. El proyecto usa **placeholders** (Unsplash) por defecto; en cuanto añadas un archivo con el nombre indicado, se usará tu imagen automáticamente.

## Estructura y archivos

| Archivo | Dónde se usa |
|---------|--------------|
| `hero/hero.jpg` | Banner principal (inicio) |
| `about/campus.jpg` | Página Nosotros, imagen institucional |
| `programs/preparacion.jpg` | Programa Preparación Preuniversitaria |
| `programs/refuerzo.jpg` | Programa Refuerzo Académico |
| `programs/habilidades.jpg` | Programa Desarrollo de Habilidades |
| `gallery/1.jpg`, `2.jpg`, `3.jpg` | Galería "Vida en Bryce" (inicio) |
| `team/1.jpg`, `2.jpg`, `3.jpg` | Fotos del equipo (Nosotros): Director, Coord. Programas, Coord. Admisiones |
| `contact/contact.jpg` | Imagen o mapa en Contacto |
| `logo.png` | Logo en cabecera y pie (opcional). Si no existe, se usa el icono por defecto. |

## Cómo usar tus imágenes

1. **Copia** cada archivo en la ruta indicada (ej.: `public/images/hero/hero.jpg`).
2. **Recarga** la web: si el archivo existe, el helper `bryce_img()` usará tu imagen en lugar del placeholder.
3. Para el **logo**, solo hace falta `public/images/logo.png`; el layout lo detecta y lo muestra en header y footer.

## Tamaños orientativos

| Uso | Tamaño sugerido |
|-----|------------------|
| Hero | 1920×1080 px |
| Nosotros / Contacto | 1200×800 px |
| Programas / Galería | 800×600 px |
| Equipo | 400×400 px (cuadradas) |
| Logo | 200×60 px a    prox. |

Formatos: **JPG**, **PNG**, **WebP**.
