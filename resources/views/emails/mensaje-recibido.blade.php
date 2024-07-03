<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje Recibido</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 600px;
            margin: 20px;
        }
        h6 {
            background-color: #007BFF;
            color: white;
            padding: 10px;
            border-radius: 8px 8px 0 0;
            margin: 0 -20px 20px;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th {
            background-color: #007BFF;
            color: white;
            padding: 10px;
            border-radius: 8px 8px 0 0;
            text-align: center;
        }
        td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        td:first-child {
            text-align: right;
            font-weight: bold;
        }
        tr:last-child td {
            border-bottom: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h6>[Empresa]: Recibiste un correo del sistema automatizado</h6>
        <table>
            <thead>
                <tr>
                    <th colspan="2"><span>&#x1f4e5;</span> [ Mensaje Recibido ] <span>&#x1f4e5;</span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nombre:</td> <td>{{ $mensaje['nombre'] }}</td>
                </tr>
                <tr>
                    <td>Correo:</td> <td>{{ $mensaje['email'] }}</td>
                </tr>
                <tr>
                    <td>Asunto:</td> <td>{{ $mensaje['asunto'] }}</td>
                </tr>
                <tr>
                    <td>Mensaje:</td> <td>{{ $mensaje['mensaje'] }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>

