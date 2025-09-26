# Demo MVC en PHP

Este proyecto muestra una estructura MVC mínima con PHP sin frameworks. Incluye un menú lateral con tres secciones que cargan vistas distintas dentro del área de contenido principal.

## Requisitos

* PHP 8.1 o superior
* Servidor web embebido de PHP o Apache/Nginx configurado para apuntar a la carpeta `public/`

## Puesta en marcha rápida

```bash
php -S localhost:8000 -t public/
```

Después, abre <http://localhost:8000> en el navegador y navega entre las secciones **Inicio**, **Servicios** y **Contacto** usando el menú lateral.

## Estructura

```
app/
├── controllers/        # Controladores de la aplicación
├── core/               # Componentes base como el Router y el Controller
└── views/              # Plantillas y layout principal
public/
├── assets/             # Recursos estáticos (CSS y JavaScript)
└── index.php           # Front controller
```

Cada opción del menú corresponde a una acción en `HomeController` que renderiza una vista con datos específicos.
