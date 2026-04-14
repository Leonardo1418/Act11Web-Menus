# Menus App - Laravel Blade Templates

## Descripción
Proyecto desarrollado con Laravel que implementa el sistema de plantillas Blade.
Cuenta con una vista principal (layout) de la que heredan las vistas secundarias,
un menú de navegación con resaltado dinámico de la sección activa, y un footer
presente en todas las páginas.

## Objetivo
Comprender y utilizar el sistema de plantillas Blade de Laravel mediante la creación
de vistas con herencia, rutas y controladores.

## Tecnologías utilizadas
* PHP 8.2
* Laravel 11
* Laravel Blade
* HTML5

## Funcionalidades
* **Vista primaria:** layout base con menú de navegación y footer compartido.
* **Herencia de vistas:** cada sección extiende el layout con `@extends` y `@yield`.
* **Menú activo dinámico:** la opción activa se resalta automáticamente según la ruta actual usando `request()->routeIs()`.
* **Footer global:** visible en todas las secciones desde la vista primaria.
* **Tres secciones:** Inicio, Fotos y Contacto, cada una con contenido propio.

## Autor/Footer
**Leonardo Rodriguez Moreno**
* Materia: Diseño de aplicaciones Web
* Universidad: Tecmilenio
* Fecha: 12 de abril de 2026
