<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Layout</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        .header { border-bottom: 2px solid #ccc; padding-bottom: 10px; margin-bottom: 20px; }
    </style>
</head>
<body>
    <div class="header">
        @yield('logo')
    </div>

    <div class="content">
        @yield('content')
    </div>
</body>
</html>