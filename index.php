<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anuncio</title>
</head>
<body>
<section id="contacto" class="py-5 bg-secondary text-white">
    <div class="container" data-aos="fade-up">
        <h2 class="text-center mb-5">Contacto</h2>
        <form action="/enviar_formulario" method="post" class="bg-light p-4 rounded shadow">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="mensaje" class="form-label">Mensaje:</label>
                <textarea id="mensaje" name="mensaje" class="form-control" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">Enviar Mensaje</button>
        </form>
    </div>
</section>
</body>
</html>