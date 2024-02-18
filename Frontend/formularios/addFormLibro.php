<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body{
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: url(../imagenes/fondo_difuminado_login.jpg);
            background-position: center;
            background-size: cover;
        }
        .container{
            margin-top: 50px;
            width: 510px;
            background-color: white;
            border-radius: 10px 10px 10px 10px;
            -moz-border-radius: 10px 10px 10px 10px;
            -webkit-border-radius: 10px 10px 10px 10px;
            -webkit-box-shadow: 0px 0px 5px 5px rgba(0,0,0,0.15);
            -moz-box-shadow: 0px 0px 5px 5px rgba(0,0,0,0.15);
            box-shadow: 0px 0px 5px 5px rgba(0,0,0,0.15);
            padding: 30px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Formulario de Libro</h1>
        <br>
        <form action="../metodos/addLibro1.php" method="post">
            <div class="form-group">
                <label for="nombre">Nombre del Libro</label><br>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre libro"><br>
                <label for="autor">Autor del Libro</label><br>
                <input type="text" class="form-control" id="autor" name="autor" placeholder="Autor libro"><br>
                <label for="editorial">Editorial del Libro</label><br>
                <input type="text" class="form-control" id="editorial" name="editorial" placeholder="Editorial libro"><br>
                <label for="categoria">Categoría del Libro</label>
                <select class="form-control" id="categoria" name="categoria">
                    <?php
                    $url = "http://localhost:8080/BIBLIOTECA/categoria";
                    $json = file_get_contents($url);
                    $obj = json_decode($json);//Convierte un string codificado en JSON a una variable de PHP.
                    foreach ($obj as $ob): 
                    echo "<option value='" . $ob->id . "'>" . $ob -> categoria . "</option>";
                    endforeach;
                    ?>
                </select>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Enviar</button>
            <br>
        </form>
    </div>
</body>
</html>
