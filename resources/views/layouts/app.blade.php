<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menus App</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: Arial, sans-serif; min-height: 100vh; display: flex; flex-direction: column; }

        nav { background: #2d3748; padding: 1rem 2rem; display: flex; gap: 1rem; }
        nav a {
            color: #a0aec0; text-decoration: none;
            padding: 0.5rem 1.2rem; border-radius: 6px; font-weight: 500;
            transition: background 0.2s;
        }
        nav a:hover    { background: #4a5568; color: white; }
        nav a.active   { background: #4299e1; color: white; }

        main { flex: 1; padding: 2rem; }

        footer {
            background: #2d3748; color: #a0aec0;
            text-align: center; padding: 1rem;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

<nav>
    <a href="{{ route('home') }}"    class="{{ request()->routeIs('home')    ? 'active' : '' }}">🏠 Inicio</a>
    <a href="{{ route('photos') }}"  class="{{ request()->routeIs('photos')  ? 'active' : '' }}">📷 Fotos</a>
    <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">✉️ Contacto</a>
</nav>

<main>
    @yield('content')
</main>

<footer>
    <p>Actividad realizada por <strong>Leonardo Rodriguez Moreno</strong> — Materia: Diseño de aplicaciones Web - 2026</p>
</footer>

</body>
</html>