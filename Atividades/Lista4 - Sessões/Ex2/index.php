<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Form Ex2</title>
    </head>

    <body class="container mt-4">
        <h1>Exercício 2</h1>
        <h4>Lote de Cheques</h4>

        <form class="mt-3 p-4 border border-light border-2 rounded" method="post" action="resposta_ex5.php">
            <div class="row">
                <div class="col">
                    <label for="altura" class="label-control"> Informe sua Altura (cm): </label>
                    <input type="number" name="altura" id="altura" class="form-control"/>
                </div>

                <div class="col">
                    <label for="peso" class="label-control"> Informe o seu Peso (kg): </label>
                    <input type="number" name="peso" id="peso" class="form-control"/>
                </div>
            </div>

            <div class="row">
                <div class="col mt-4">
                    <button type="submit" class="btn btn-warning"> Enviar </button>
                </div>
            </div>
        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>

<!--Escreva um programa para validar um lote de cheques. O programa deverá inicialmente
solicitar a soma do lote e o número de cheques. A seguir deverá ler o valor de cada cheque
calculando a soma total. Após a digitação de todos os cheques o programa deverá imprimir as
seguintes mensagens:

a. LOTE Ok se a soma informada for igual a soma calculada.
b. Diferença negativa se a soma calculada for menor que a informada.-->