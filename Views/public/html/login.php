<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center">Iniciar Sesión</h2>
        <form action="index.php?accion=login" method="POST">
            <div class="mb-4">
                <label class="block text-gray-700">Correo Electrónico</label>
                <input type="email" name="email" required class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Contraseña</label>
                <input type="password" name="password" required class="w-full p-2 border border-gray-300 rounded">
            </div>
            <button type="submit" name="login" class="w-full p-2 bg-blue-500 text-white rounded">Ingresar</button>
        </form>
    </div>
</body>
</html>
