<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Agenda 1.0</title>
    <?php
    include_once 'conn.php'
    ?>

</head>

<body>
    <div class="form-group">
        <div class="col-md-6 offset-md-5">
            <img src="https://www.maxpixel.net/static/photo/1x/Notes-Spiral-Notebook-Notebook-Booklet-Agenda-6090167.png" width="200px" alt="Agenda" class="img-thumbnail img-responsive">
        </div>
    </div>
    <div class="container">

        <form action="conn.php" method="POST" name="formulario">

            <div class="form-group">
                <div class="col-md-4 offset-md-4">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome...">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4 offset-md-4">
                    <label for="sobreNome" class="form-label">Sobrenome</label>
                    <input type="text" class="form-control" id="sobreNome" name="sobreNome" placeholder="Digite o Sobrenome...">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4 offset-md-4">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite o número de telefone">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4 offset-md-4">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </form>
    </div>



</body>
<footer>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</footer>

</html>