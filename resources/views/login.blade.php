<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Amethyst - Login</title>
</head>

<body>
    <main>
        <section>
            <div class="container">
                <div class="row align-items-end justify-content-center">
                    <div class="col-md-4 col-sm-12 text-center">
                        <img src="img/Logo-alt.svg" alt="Logo" id="logo">
                    </div>
                </div>
                <div class="row align-items-start justify-content-center">
                    <div class="col-md-4 col-sm-12 form-container">
                        <form action="/home" method="get">
                            <input type="text" class="form-control mb-5" placeholder="USUÁRIO" aria-label="Usuário"
                                aria-describedby="basic-addon1">
                            <input type="password" class="form-control mb-5" placeholder="SENHA" aria-label="Senha"
                                aria-describedby="basic-addon1">
                            <div class="d-grid gap-2">
                                <input type="submit" value="ENTRAR" class="btn btn-outline-light btn-block rounded">
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>
    </main>
</body>

</html>
