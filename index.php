<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="shortcut icon" href="img/logo-coruja.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
</head>

<body class="container vh-100 d-flex justify-content-center align-items-center bg-azul">
    <div class="row w-100 h-75 ">
        <div class="col d-none d-md-flex justify-content-center align-items-center bg-primary">
            <img src="img/coruja-login.png" alt="" srcset="">
        </div>
        <div class="col p-5 d-flex justify-content-center align-items-center bg-white">
            <form action="php/login.php" method="post" class="row g-3">
                <div class="col-12 mb-5">
                    <h3 class="text-center">
                        Garanta o melhor uso das salas para suas aulas<wbr> com apenas alguns cliques
                    </h3>
                    <h3 class="text-center d-none">
                        Acesse as reservas e aprove as solicitações para garantir o melhor uso dos espaços
                    </h3>
                </div>
                <div class="col-12">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control border border-primary" id="inputEmail4">
                </div>
                <div class="col-12">
                    <label for="inputPassword4" class="form-label">Senha</label>
                    <input type="password" name="senha" class="form-control border border-primary" id="inputPassword4">
                    <a href="#" class="mt-4">Esqueceu sua senha?</a>
                </div>
                <div class="col-12 mt-5">
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </div>
            </form>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>