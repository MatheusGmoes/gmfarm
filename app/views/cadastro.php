<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="../../assets/css/style.css">
        <title>Novo Cadastro</title>
    </head>
    <body>
        <header>
            <?php include_once('../../resources/layout/header.php'); ?>
        </header>
        <main class="w-100 position-relative">
            <div class="card w-50 h50 position-absolute top-50 start-50 translate-middle">
                <div class="card-body">
                    <form action="#" method="POST" name="formCadastro">
                        <div class="row pb-2">
                            <div class="d-flex justify-content-center">
                                <h2 class="card-title">Cadastrar Usuário</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3">
                                <label for="nome" class="form-label">NOME</label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome Completo">
                            </div>
                        </div>
                        <div class="row mb-1">
                            <label for="sexo-radio">SEXO:</label>
                        </div>
                        <div class="row row-cols-auto">
                            <div class="col">
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="sexo-radio" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckChecked">
                                    MASCULINO
                                </label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="sexo-radio" value="" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckDefault">
                                    FEMININO
                                </label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-row-reverse">
                            <input type="submit" class="btn btn-secondary" name="btnCadastro" value="Enviar">
                        </div> 
                    </form>
                </div>
            </div>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
