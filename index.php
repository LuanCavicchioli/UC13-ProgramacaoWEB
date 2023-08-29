<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="text-bg-primary pb-1 mt-2 text-center rounded-4 ">
            <img src="" class="rounded" alt="">
            <h1>Aula de Bootstrap</h1>
        </div>
        <div>

            <div class="row">

                <div class="bg-danger pb-1 mt-1 col-12 col-md-4">
                    <h2>Coluna 1</h2>
                </div>

                <div class="col-6 col-md-4 bg-info pb-1 mt-1">
                    <h2>Coluna 2</h2>
                </div>

                <div class="col-6 col-md-4  bg-warning pb-1 mt-1">
                    <h2>Coluna 3</h2>
                </div>

            </div>
                <div class="row">
                    <div class="bg-dark-subtle">
                        <h2>Coluna 4</h2>
                    </div>
                    <div class="bg-danger-subtle col-12">
                        <h2>Coluna 5</h2>
                    </div>
                    <div class="bg-danger-subtle col-md-6 col-12 d-none d-md-block ">
                        <h2>Coluna 6</h2>
                    </div>
                    <div class="bg-success">
                        <h2>Coluna 7</h2>
                    </div>
                </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>