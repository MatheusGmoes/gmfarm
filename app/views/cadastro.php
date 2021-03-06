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
        <main>
            <div class="container">
                <div class="row pt-5">
                    <div class="col-lg-6 pt-5 mx-auto">
                        <div class="card">
                            <div class="card-title text-center mt-3">
                                <h2>Cadastrar Usuário</h2>
                            </div>
                            <div class="card-body">
                                <form action="#" method="POST">
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
                                        <input type="submit" class="btn btn-primary" name="btnCadastro" value="Enviar">
                                    </div> 
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
