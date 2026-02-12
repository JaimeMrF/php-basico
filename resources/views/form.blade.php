<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Contacto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
            width: 100%;
            max-width: 420px;
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #555;
        }

        input, textarea {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #ddd;
            font-size: 14px;
            transition: 0.3s;
        }

        input:focus, textarea:focus {
            border-color: #667eea;
            outline: none;
            box-shadow: 0 0 0 3px rgba(102,126,234,0.2);
        }

        textarea {
            resize: none;
            height: 100px;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #667eea;
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #5a67d8;
        }

        .success {
            background: #d4edda;
            color: #155724;
            padding: 10px;
            border-radius: 6px;
            margin-bottom: 15px;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Contáctanos</h2>

    @if(request()->isMethod('post'))
        <div class="success">
            ¡Formulario enviado correctamente!
        </div>
    @endif

    <form method="POST" action="">
        @csrf

        <div class="form-group">
            <label for="email">Correo electrónico</label>
            <input 
                type="email" 
                name="email" 
                id="email" 
                placeholder="ejemplo@correo.com"
                required
            >
        </div>

        <div class="form-group">
            <label for="mensaje">Mensaje</label>
            <textarea 
                name="mensaje" 
                id="mensaje"
                placeholder="Escribe tu mensaje aquí..."
                required
            ></textarea>
        </div>

        <button type="submit">Enviar Mensaje</button>
    </form>
</div>

</body>
</html>
