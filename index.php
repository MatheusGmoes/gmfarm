<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tela Inicial</title>

  <!-- link bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- link css -->
  <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
  <header>
    <?php include_once('./resources/layout/header.php'); ?>
  </header>
  <main class="w-100 position-relative">
    <img src="./assets/images/logo UNICEPLAC.png" alt="Logo Uniceplac" class="position-absolute top-0 end-0">
    <div class="container position-relative">
      <div class="row">
        <div class="col pt-5 position-absolute top-0 start-0">
          <h1 class="text-light mb-4">BEM-VINDO</h1>
          <h1 style="color: #CA8D5A;">SISTEMA DE GESTÃO DE MATERIAIS DE FARMÁCIA</h1>
        </div>
      </div>
    </div>
  </main>
  <!-- script bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>