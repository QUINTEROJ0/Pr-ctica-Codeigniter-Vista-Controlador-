<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Roboto', sans-serif;
        }

        .block {
            max-width: 400px;
            margin: 100px auto;
            padding: 40px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0);
        }

        .title {
            text-align: center;
            margin-bottom: 30px;
        }

        .form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ced4da;
        }

        .form button {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        .form button:hover {
            background-color:  #5fcd8e ;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="block">
            <h2 class="title">Bienvenido!</h2>
            <form class="form" action="<?php echo site_url('login');?>" method="POST">
                <div class="mb-3">
                    <label for="username" class="label">Usuario:</label>
                    <input type="text" class="control" id="username" placeholder="Usuario" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="label">Contraseña:</label>
                    <input type="password" class="control" id="password" placeholder="Contraseña" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">INGRESAR</button>
            </form>
        </div>
    </div>
</body>
</html>
