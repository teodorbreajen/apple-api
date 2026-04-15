# Apple API

API PHP para gestión de productos Apple con información de scraping.

## Estructura

```
api/
  config.php     - Configuración de base de datos
  index.php      - Endpoint principal
  products.php   - Gestión de productos
  sections.php   - Secciones
  images.php     - Gestión de imágenes
  links.php      - Enlaces
```

## Uso

1. Configurar conexión en `api/config.php`
2. Importar `apple_scrapped.sql`
3. Servir con PHP built-in server o Apache

```bash
php -S localhost:8000
```
