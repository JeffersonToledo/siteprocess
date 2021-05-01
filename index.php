<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/512b1b950e.js"></script>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Hotel Mahal2</title>
</head>

<body>

    <div class="head">
        <div class="login">

            <i class="fontLogin fas fa-portrait fa-2x"></i>

            <div class="display popLogin">

                <form class="formLogin" action="login.php" method="POST">
                    <div class="form-group col-md-12">
                        <label for="nomeLogin">Login</label>
                        <input type="text" class="form-control" id="nomeLogin" name="nomeLogin" placeholder="Login">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
                    </div>
                    <button type="submit" class="btnLogin btn">Enviar</button>
                </form>


            </div>

        </div>
    </div>

    <div class="flex">
        <div class="textFlex">

            <h2>HISTORIA</h2>

            <p class="tituloFlex">Mohandas Karamchand Gandhi</p>

            <p class="textFlexGeral">

                Mahatma Gandhi (1869-1948) foi um líder pacifista indiano. Principal personalidade da independência da Índia,
                então colônia britânica. Ganhou destaque na luta contra os ingleses por meio de seu projeto de não violência.
                Além de sua luta pela independência da Índia, também ficou conhecido por seus pensamentos e sua filosofia.
                Recorria a jejuns, marchas e à desobediência civil, ou seja, estimulava o não pagamento dos impostos e o boicote
                aos produtos ingleses.

            </p>

            <p class="textFlexGeral">

                Embora usassem a violência na repressão ao movimento nacionalista da Índia, os ingleses evitavam o confronto aberto.
                Em 1922 uma greve contra o aumento de impostos reúne uma multidão que queima um posto policial e Gandhi é detido,
                julgado e condenado a seis anos de prisão.

            </p>

            <p class="textFlexGeral">

                Mahatma Gandhi destacou-se como principal personagem da luta pela independência indiana. Recorria a marchas e a
                desobediência civil, incentivando o não pagamento de impostos e o boicote aos produtos ingleses.

            </p>

            <p class="textFlexGeral">

                Gandhi é considerado uma importante referência histórica para os movimentos pacifistas ocorridos no mundo.

            </p>

        </div>
        <div class="imgFlex">

            <img src="./img/gandhi.jpg" alt="Ghandi desenhando">

        </div>
    </div>

    <div class="slide">

        <div>
            <img src="./img/q12.jpg" alt="Suite Palace">

            <h2 class="SuitePrincipal">Suíte Palace</h2>

            <h3 class="tituloFirst"> First Class </h3>

            <p class="textFirst">
                TV de LCD com sistema multicanal,
                Cachoeira, Piscina térmica, Sauna,
                Hidromassagem, Ar condicionado,
                Teto solar móvel, Ducha dupla, Equip c/som individual,
                Frigobar e Garagem privativa para 02 autos.
            </p>
            <h3 class="tituloPreco"> Preços </h3>
            <p class="textPreco">
                U$ 1.000 por noite.
            </p>
            <p class="textPreco2">
                Incluso café da manhã e almoço.
            </p>
            <p class="textPreco3">
                Jantar temos um restaurante e na região temos
                restaurantes famosos, com renomados chefes de
                5 estrelas michelin.
            </p>

            <button class="btnSuite btnPalace">Reservar</button>
        </div>
        <div>
            <img src="./img/q13.jpg" alt="Suíte Dream">
            <h2 class="SuitePrincipal">Suíte Dream</h2>
            <h3 class="tituloFirst"> Second Class </h3>
            <p class="textFirst">
                TV de LCD com sistema multicanal,
                Cachoeira, Piscina térmica, Sauna,
                Hidromassagem, Ar condicionado,
                Teto solar móvel, Ducha dupla, Equip c/som individual,
                Frigobar e Garagem privativa para 02 autos.
            </p>
            <h3 class="tituloPreco"> Preços </h3>
            <p class="textPreco">
                U$ 1.000 por noite.
            </p>
            <p class="textPreco2">
                Incluso café da manhã e almoço.
            </p>
            <p class="textPreco3">
                Jantar temos um restaurante e na região temos
                restaurantes famosos, com renomados chefes de
                5 estrelas michelin.
            </p>

            <button class="btnSuite btnDream">Reservar</button>
        </div>
        <div>
            <img src="./img/q14.jpg" alt="Suíte Sound">
            <h2 class="SuitePrincipal">Suíte sound</h2>
            <h3 class="tituloFirst"> Third Class </h3>
            <p class="textFirst">
                TV de LCD com sistema multicanal,
                Cachoeira, Piscina térmica, Sauna,
                Hidromassagem, Ar condicionado,
                Teto solar móvel, Ducha dupla, Equip c/som individual,
                Frigobar e Garagem privativa para 02 autos.
            </p>
            <h3 class="tituloPreco"> Preços </h3>
            <p class="textPreco">
                U$ 1.000 por noite.
            </p>
            <p class="textPreco2">
                Incluso café da manhã e almoço.
            </p>
            <p class="textPreco3">
                Jantar temos um restaurante e na região temos
                restaurantes famosos, com renomados chefes de
                5 estrelas michelin.
            </p>

            <button class="btnSuite btnSound">Reservar</button>
        </div>

    </div>

    <!-- Modo App ------------------------------------------------------------------------------------------------------------------------ -->

    <div class="modoApp palaceApp">

        <div class="tituloApp">

            <h2 class="SuitePrincipal2">Suíte Palace</h2>

        </div>
        <div class="imgApp">

            <img src="./img/q12.jpg" alt="Suite Palace">

        </div>
        <div class="textoApp">

            <h3 class="tituloFirst2"> First Class </h3>

            <p class="textFirst2">
                TV de LCD com sistema multicanal,
                Cachoeira, Piscina térmica, Sauna,
                Hidromassagem, Ar condicionado,
                Teto solar móvel, Ducha dupla, Equip c/som individual,
                Frigobar e Garagem privativa para 02 autos.
            </p>
            <h3 class="tituloPreco2"> Preços </h3>
            <p class="textPreco2">
                U$ 1.000 por noite.
            </p>
            <p class="textPreco2.1">
                Incluso café da manhã e almoço.
            </p>
            <p class="textPreco3.1">
                Jantar temos um restaurante e na região temos
                restaurantes famosos, com renomados chefes de
                5 estrelas michelin.
            </p>

            <button class="btnSuite2 btnPalace2">Reservar</button>
        </div>
    </div>
    <div class="modoApp dreamApp">

        <div class="tituloApp">

            <h2 class="SuitePrincipal2">Suíte Dream</h2>

        </div>
        <div class="imgApp">

            <img src="./img/q13.jpg" alt="Suíte Dream">

        </div>
        <div class="textoApp">

            <h3 class="tituloFirst2"> Second Class </h3>
            <p class="textFirst2">
                TV de LCD com sistema multicanal,
                Cachoeira, Piscina térmica, Sauna,
                Hidromassagem, Ar condicionado,
                Teto solar móvel, Ducha dupla, Equip c/som individual,
                Frigobar e Garagem privativa para 02 autos.
            </p>
            <h3 class="tituloPreco2"> Preços </h3>
            <p class="textPreco2">
                U$ 1.000 por noite.
            </p>
            <p class="textPreco2.1">
                Incluso café da manhã e almoço.
            </p>
            <p class="textPreco3.1">
                Jantar temos um restaurante e na região temos
                restaurantes famosos, com renomados chefes de
                5 estrelas michelin.
            </p>

            <button class="btnSuite2 btnDream2">Reservar</button>

        </div>

    </div>

    <div class="modoApp soundApp">

        <div class="tituloApp">

            <h2 class="SuitePrincipal2">Suíte sound</h2>

        </div>

        <div class="imgApp">

            <img src="./img/q14.jpg" alt="Suíte Sound">

        </div>

        <div class="textoApp">

            <h3 class="tituloFirst2"> Third Class </h3>
            <p class="textFirst2">
                TV de LCD com sistema multicanal,
                Cachoeira, Piscina térmica, Sauna,
                Hidromassagem, Ar condicionado,
                Teto solar móvel, Ducha dupla, Equip c/som individual,
                Frigobar e Garagem privativa para 02 autos.
            </p>
            <h3 class="tituloPreco2"> Preços </h3>
            <p class="textPreco2">
                U$ 1.000 por noite.
            </p>
            <p class="textPreco2.1">
                Incluso café da manhã e almoço.
            </p>
            <p class="textPreco3.1">
                Jantar temos um restaurante e na região temos
                restaurantes famosos, com renomados chefes de
                5 estrelas michelin.
            </p>

            <button class="btnSuite2 btnSound2">Reservar</button>

        </div>

    </div>
    <!-- Fim App ------------------------------------------------------------------------------------------------------------------------ -->

    <!-- FormApp --------------------------------------------------------------------------------------------------------------------------- -->

    <section class=" display form-palaceApp">

        <div class="container">

            <div class="form-row">

                <img class="imgLogo" src="./img/logo.png" alt="logo do hotel Mahal">

            </div>

            <div class="form-change">

                <form action="palace.php" method="POST" id="myForm">


                    <div class="form-row">

                    </div>

                    <div class="form-row">

                        <div class="col-md-4">

                            <label for="nome">Nome</label>
                            <input class="form-control <?= $erros['nome'] ? 'is-invalid' : '' ?>" type="text" name="nome" id="nome" placeholder="Nome" value="<?= $_POST['nome'] ?>">

                            <div class="invalid-feedback"><?= $erros['nome'] ?></div>

                        </div>

                        <div class="col-md-4">

                            <label for="cpf">CPF</label>
                            <input class="form-control <?= $erros['cpf'] ? 'is-invalid' : '' ?>" type="text" name="cpf" id="cpf" placeholder="CPF - Somente os números" value="<?= $_POST['cpf'] ?>">

                            <div class="invalid-feedback"><?= $erros['cpf'] ?></div>

                        </div>

                        <div class="col-md-2">

                            <label for="nascimento">Nascimento</label>
                            <input class="form-control <?= $erros['nascimento'] ? 'is-invalid' : '' ?>" type="date" name="nascimento" id="nascimento" placeholder="Nascimento" value="<?= $_POST['nascimento'] ?>">

                            <div class="invalid-feedback"><?= $erros['nascimento'] ?></div>

                        </div>

                    </div>

                    <div class="form-row">

                        <div class="col-md-4">

                            <label for="email">E-mail</label>
                            <input class="form-control <?= $erros['email'] ? 'is-invalid' : '' ?>" type="text" name="email" id="email" placeholder="E-mail" value="<?= $_POST['email'] ?>">

                            <div class="invalid-feedback"><?= $erros['email'] ?></div>

                        </div>

                        <div class="col-md-1">

                            <label for="filhos">Filhos</label>
                            <input class="form-control <?= $erros['filhos'] ? 'is-invalid' : '' ?>" type="number" name="filhos" id="filhos" placeholder="Filhos" value="<?= $_POST['filhos'] ?>">

                            <div class="invalid-feedback"><?= $erros['filhos'] ?></div>

                        </div>

                        <div class="col-md-1">

                            <label for="pessoas">Pessoas</label>
                            <input class="form-control <?= $erros['pessoas'] ? 'is-invalid' : '' ?>" type="number" name="pessoas" id="pessoas" placeholder="Pessoas" value="<?= $_POST['pessoas'] ?>">

                            <div class="invalid-feedback"><?= $erros['pessoas'] ?></div>

                        </div>

                        <div class="col-md-2">

                            <label for="data">Data Inicial</label>
                            <input class="form-control <?= $erros['data'] ? 'is-invalid' : '' ?>" type="date" name="data" id="data" placeholder="Data" value="<?= $_POST['data'] ?>">

                        </div>

                        <div class="col-md-2">

                            <label for="data2">Data Final</label>
                            <input class="form-control <?= $erros['data2'] ? 'is-invalid' : '' ?>" type="date" name="data2" id="data2" placeholder="Data Final" value="<?= $_POST['data2'] ?>">

                            <div class="invalid-feedback"><?= $erros['data2'] ?></div>

                        </div>

                    </div>

                    <div class="form-row">

                        <div class="col-md-3">

                            <label for="celular">Celular</label>

                            <input class="form-control <?= $erros['celular'] ? 'is-invalid' : '' ?>" type="text" name="celular" id="celular" placeholder="Celular - Somente os números" value="<?= $_POST['celular'] ?>">

                            <div class="invalid-feedback"><?= $erros['celular'] ?></div>

                        </div>


                        <div class="col-md-2">

                            <label for="quartos">Quartos</label>
                            <input class="form-control <?= $erros['quartos'] ? 'is-invalid' : '' ?>" type="number" name="quartos" id="quartos" placeholder="Quantidade de quartos" value="<?= $_POST['quartos'] ?>">

                            <div class="invalid-feedback"><?= $erros['quartos'] ?></div>

                        </div>

                        <div class="col-md-2 suite">
                            <input class="form-control" type="text" disabled placeholder="Suíte Palace">
                        </div>


                    </div>

                    <div class="form-row">

                        <input class="btnSuiteReservar" type="submit" value="Reservar" />

                    </div>

                </form>

                <button class="btn btn-danger btnPalaceVoltar2 btnVoltar2">Voltar</button>


            </div>

        </div>

        <p class="resultado"><?= $erros['idade'] ?></p>
    </section>

    <section class=" display form-dreamApp">

        <div class="container">

            <div class="form-row">

                <img class="imgLogo" src="./img/logo.png" alt="logo do hotel Mahal">

            </div>

            <div class="form-change">

                <form action="dream.php" method="POST" id="myForm">


                    <div class="form-row">

                    </div>

                    <div class="form-row">

                        <div class="col-md-4">

                            <label for="nome">Nome</label>
                            <input class="form-control <?= $erros['nome'] ? 'is-invalid' : '' ?>" type="text" name="nome" id="nome" placeholder="Nome" value="<?= $_POST['nome'] ?>">

                            <div class="invalid-feedback"><?= $erros['nome'] ?></div>

                        </div>

                        <div class="col-md-4">

                            <label for="cpf">CPF</label>
                            <input class="form-control <?= $erros['cpf'] ? 'is-invalid' : '' ?>" type="text" name="cpf" id="cpf" placeholder="CPF - Somente os números" value="<?= $_POST['cpf'] ?>">

                            <div class="invalid-feedback"><?= $erros['cpf'] ?></div>

                        </div>

                        <div class="col-md-2">

                            <label for="nascimento">Nascimento</label>
                            <input class="form-control <?= $erros['nascimento'] ? 'is-invalid' : '' ?>" type="date" name="nascimento" id="nascimento" placeholder="Nascimento" value="<?= $_POST['nascimento'] ?>">

                            <div class="invalid-feedback"><?= $erros['nascimento'] ?></div>

                        </div>

                    </div>

                    <div class="form-row">

                        <div class="col-md-4">

                            <label for="email">E-mail</label>
                            <input class="form-control <?= $erros['email'] ? 'is-invalid' : '' ?>" type="text" name="email" id="email" placeholder="E-mail" value="<?= $_POST['email'] ?>">

                            <div class="invalid-feedback"><?= $erros['email'] ?></div>

                        </div>

                        <div class="col-md-1">

                            <label for="filhos">Filhos</label>
                            <input class="form-control <?= $erros['filhos'] ? 'is-invalid' : '' ?>" type="number" name="filhos" id="filhos" placeholder="Filhos" value="<?= $_POST['filhos'] ?>">

                            <div class="invalid-feedback"><?= $erros['filhos'] ?></div>

                        </div>

                        <div class="col-md-1">

                            <label for="pessoas">Pessoas</label>
                            <input class="form-control <?= $erros['pessoas'] ? 'is-invalid' : '' ?>" type="number" name="pessoas" id="pessoas" placeholder="Pessoas" value="<?= $_POST['pessoas'] ?>">

                            <div class="invalid-feedback"><?= $erros['pessoas'] ?></div>

                        </div>

                        <div class="col-md-2">

                            <label for="data">Data Inicial</label>
                            <input class="form-control <?= $erros['data'] ? 'is-invalid' : '' ?>" type="date" name="data" id="data" placeholder="Data" value="<?= $_POST['data'] ?>">

                        </div>

                        <div class="col-md-2">

                            <label for="data2">Data Final</label>
                            <input class="form-control <?= $erros['data2'] ? 'is-invalid' : '' ?>" type="date" name="data2" id="data2" placeholder="Data Final" value="<?= $_POST['data2'] ?>">

                            <div class="invalid-feedback"><?= $erros['data2'] ?></div>

                        </div>

                    </div>

                    <div class="form-row">

                        <div class="col-md-3">

                            <label for="celular">Celular</label>

                            <input class="form-control <?= $erros['celular'] ? 'is-invalid' : '' ?>" type="text" name="celular" id="celular" placeholder="Celular - Somente os números" value="<?= $_POST['celular'] ?>">

                            <div class="invalid-feedback"><?= $erros['celular'] ?></div>

                        </div>


                        <div class="col-md-2">

                            <label for="quartos">Quartos</label>
                            <input class="form-control <?= $erros['quartos'] ? 'is-invalid' : '' ?>" type="number" name="quartos" id="quartos" placeholder="Quantidade de quartos" value="<?= $_POST['quartos'] ?>">

                            <div class="invalid-feedback"><?= $erros['quartos'] ?></div>

                        </div>

                        <div class="col-md-2 suite">
                            <input class="form-control" type="text" disabled placeholder="Suíte Dream">
                        </div>


                    </div>

                    <div class="form-row">

                        <input class="btnSuiteReservar" type="submit" value="Reservar" />

                    </div>

                </form>

                <button class="btn btn-danger btnDreamVoltar2 btnVoltar2">Voltar</button>


            </div>

        </div>

        <p class="resultado"><?= $erros['idade'] ?></p>
    </section>

    <section class=" display form-soundApp">

        <div class="container">

            <div class="form-row">

                <img class="imgLogo" src="./img/logo.png" alt="logo do hotel Mahal">

            </div>

            <div class="form-change">

                <form action="sound.php" method="POST" id="myForm">


                    <div class="form-row">

                    </div>

                    <div class="form-row">

                        <div class="col-md-4">

                            <label for="nome">Nome</label>
                            <input class="form-control <?= $erros['nome'] ? 'is-invalid' : '' ?>" type="text" name="nome" id="nome" placeholder="Nome" value="<?= $_POST['nome'] ?>">

                            <div class="invalid-feedback"><?= $erros['nome'] ?></div>

                        </div>

                        <div class="col-md-4">

                            <label for="cpf">CPF</label>
                            <input class="form-control <?= $erros['cpf'] ? 'is-invalid' : '' ?>" type="text" name="cpf" id="cpf" placeholder="CPF - Somente os números" value="<?= $_POST['cpf'] ?>">

                            <div class="invalid-feedback"><?= $erros['cpf'] ?></div>

                        </div>

                        <div class="col-md-2">

                            <label for="nascimento">Nascimento</label>
                            <input class="form-control <?= $erros['nascimento'] ? 'is-invalid' : '' ?>" type="date" name="nascimento" id="nascimento" placeholder="Nascimento" value="<?= $_POST['nascimento'] ?>">

                            <div class="invalid-feedback"><?= $erros['nascimento'] ?></div>

                        </div>

                    </div>

                    <div class="form-row">

                        <div class="col-md-4">

                            <label for="email">E-mail</label>
                            <input class="form-control <?= $erros['email'] ? 'is-invalid' : '' ?>" type="text" name="email" id="email" placeholder="E-mail" value="<?= $_POST['email'] ?>">

                            <div class="invalid-feedback"><?= $erros['email'] ?></div>

                        </div>

                        <div class="col-md-1">

                            <label for="filhos">Filhos</label>
                            <input class="form-control <?= $erros['filhos'] ? 'is-invalid' : '' ?>" type="number" name="filhos" id="filhos" placeholder="Filhos" value="<?= $_POST['filhos'] ?>">

                            <div class="invalid-feedback"><?= $erros['filhos'] ?></div>

                        </div>

                        <div class="col-md-1">

                            <label for="pessoas">Pessoas</label>
                            <input class="form-control <?= $erros['pessoas'] ? 'is-invalid' : '' ?>" type="number" name="pessoas" id="pessoas" placeholder="Pessoas" value="<?= $_POST['pessoas'] ?>">

                            <div class="invalid-feedback"><?= $erros['pessoas'] ?></div>

                        </div>

                        <div class="col-md-2">

                            <label for="data">Data Inicial</label>
                            <input class="form-control <?= $erros['data'] ? 'is-invalid' : '' ?>" type="date" name="data" id="data" placeholder="Data" value="<?= $_POST['data'] ?>">

                        </div>

                        <div class="col-md-2">

                            <label for="data2">Data Final</label>
                            <input class="form-control <?= $erros['data2'] ? 'is-invalid' : '' ?>" type="date" name="data2" id="data2" placeholder="Data Final" value="<?= $_POST['data2'] ?>">

                            <div class="invalid-feedback"><?= $erros['data2'] ?></div>

                        </div>

                    </div>

                    <div class="form-row">

                        <div class="col-md-3">

                            <label for="celular">Celular</label>

                            <input class="form-control <?= $erros['celular'] ? 'is-invalid' : '' ?>" type="text" name="celular" id="celular" placeholder="Celular - Somente os números" value="<?= $_POST['celular'] ?>">

                            <div class="invalid-feedback"><?= $erros['celular'] ?></div>

                        </div>


                        <div class="col-md-2">

                            <label for="quartos">Quartos</label>
                            <input class="form-control <?= $erros['quartos'] ? 'is-invalid' : '' ?>" type="number" name="quartos" id="quartos" placeholder="Quantidade de quartos" value="<?= $_POST['quartos'] ?>">

                            <div class="invalid-feedback"><?= $erros['quartos'] ?></div>

                        </div>

                        <div class="col-md-2 suite">
                            <input class="form-control" type="text" disabled placeholder="Suíte Sound">
                        </div>


                    </div>

                    <div class="form-row">

                        <input class="btnSuiteReservar" type="submit" value="Reservar" />

                    </div>

                </form>

                <button class="btn btn-danger btnSoundVoltar2 btnVoltar2">Voltar</button>


            </div>

        </div>

        <p class="resultado"><?= $erros['idade'] ?></p>
    </section>

    <!-- Form -------------------------------------------------------------------------------------------------------------------------------- -->


    <section class=" display form-palace">

        <div class="containerSuite">

            <div class="form-row">

                <img class="imgLogo" src="./img/logo.png" alt="logo do hotel Mahal">

            </div>

            <div class="form-change">

                <form action="palace.php" method="POST" id="myForm">


                    <div class="form-row">

                    </div>

                    <div class="form-row">

                        <div class="col-md-4">

                            <label for="nome">Nome</label>
                            <input class="form-control <?= $erros['nome'] ? 'is-invalid' : '' ?>" type="text" name="nome" id="nome" placeholder="Nome" value="<?= $_POST['nome'] ?>">

                            <div class="invalid-feedback"><?= $erros['nome'] ?></div>

                        </div>

                        <div class="col-md-4">

                            <label for="cpf">CPF</label>
                            <input class="form-control <?= $erros['cpf'] ? 'is-invalid' : '' ?>" type="text" name="cpf" id="cpf" placeholder="CPF - Somente os números" value="<?= $_POST['cpf'] ?>">

                            <div class="invalid-feedback"><?= $erros['cpf'] ?></div>

                        </div>

                        <div class="col-md-2">

                            <label for="nascimento">Nascimento</label>
                            <input class="form-control <?= $erros['nascimento'] ? 'is-invalid' : '' ?>" type="date" name="nascimento" id="nascimento" placeholder="Nascimento" value="<?= $_POST['nascimento'] ?>">

                            <div class="invalid-feedback"><?= $erros['nascimento'] ?></div>

                        </div>

                    </div>

                    <div class="form-row">

                        <div class="col-md-4">

                            <label for="email">E-mail</label>
                            <input class="form-control <?= $erros['email'] ? 'is-invalid' : '' ?>" type="text" name="email" id="email" placeholder="E-mail" value="<?= $_POST['email'] ?>">

                            <div class="invalid-feedback"><?= $erros['email'] ?></div>

                        </div>

                        <div class="col-md-1">

                            <label for="filhos">Filhos</label>
                            <input class="form-control <?= $erros['filhos'] ? 'is-invalid' : '' ?>" type="number" name="filhos" id="filhos" placeholder="Filhos" value="<?= $_POST['filhos'] ?>">

                            <div class="invalid-feedback"><?= $erros['filhos'] ?></div>

                        </div>

                        <div class="col-md-1">

                            <label for="pessoas">Pessoas</label>
                            <input class="form-control <?= $erros['pessoas'] ? 'is-invalid' : '' ?>" type="number" name="pessoas" id="pessoas" placeholder="Pessoas" value="<?= $_POST['pessoas'] ?>">

                            <div class="invalid-feedback"><?= $erros['pessoas'] ?></div>

                        </div>

                        <div class="col-md-2">

                            <label for="data">Data Inicial</label>
                            <input class="form-control <?= $erros['data'] ? 'is-invalid' : '' ?>" type="date" name="data" id="data" placeholder="Data" value="<?= $_POST['data'] ?>">

                        </div>

                        <div class="col-md-2">

                            <label for="data2">Data Final</label>
                            <input class="form-control <?= $erros['data2'] ? 'is-invalid' : '' ?>" type="date" name="data2" id="data2" placeholder="Data Final" value="<?= $_POST['data2'] ?>">

                            <div class="invalid-feedback"><?= $erros['data2'] ?></div>

                        </div>

                    </div>

                    <div class="form-row">

                        <div class="col-md-3">

                            <label for="celular">Celular</label>

                            <input class="form-control <?= $erros['celular'] ? 'is-invalid' : '' ?>" type="text" name="celular" id="celular" placeholder="Celular - Somente os números" value="<?= $_POST['celular'] ?>">

                            <div class="invalid-feedback"><?= $erros['celular'] ?></div>

                        </div>


                        <div class="col-md-2">

                            <label for="quartos">Quartos</label>
                            <input class="form-control <?= $erros['quartos'] ? 'is-invalid' : '' ?>" type="number" name="quartos" id="quartos" placeholder="Quantidade de quartos" value="<?= $_POST['quartos'] ?>">

                            <div class="invalid-feedback"><?= $erros['quartos'] ?></div>

                        </div>

                        <div class="col-md-2 suite">
                            <input class="form-control" type="text" disabled placeholder="Suíte Palace">
                        </div>


                    </div>

                    <div class="form-row">

                        <input class="btnSuiteReservar" type="submit" value="Reservar" />

                    </div>

                </form>

                <button class="btn btn-danger btnPalaceVoltar btnVoltar">Voltar</button>


            </div>

        </div>

        <p class="resultado"><?= $erros['idade'] ?></p>
    </section>

    <section class=" display form-dream">

        <div class="containerSuite">

            <div class="form-row">

                <img class="imgLogo" src="./img/logo.png" alt="logo do hotel Mahal">

            </div>

            <div class="form-change">

                <form action="dream.php" method="POST" id="myForm">


                    <div class="form-row">

                    </div>

                    <div class="form-row">

                        <div class="col-md-4">

                            <label for="nome">Nome</label>
                            <input class="form-control <?= $erros['nome'] ? 'is-invalid' : '' ?>" type="text" name="nome" id="nome" placeholder="Nome" value="<?= $_POST['nome'] ?>">

                            <div class="invalid-feedback"><?= $erros['nome'] ?></div>

                        </div>

                        <div class="col-md-4">

                            <label for="cpf">CPF</label>
                            <input class="form-control <?= $erros['cpf'] ? 'is-invalid' : '' ?>" type="text" name="cpf" id="cpf" placeholder="CPF - Somente os números" value="<?= $_POST['cpf'] ?>">

                            <div class="invalid-feedback"><?= $erros['cpf'] ?></div>

                        </div>

                        <div class="col-md-2">

                            <label for="nascimento">Nascimento</label>
                            <input class="form-control <?= $erros['nascimento'] ? 'is-invalid' : '' ?>" type="date" name="nascimento" id="nascimento" placeholder="Nascimento" value="<?= $_POST['nascimento'] ?>">

                            <div class="invalid-feedback"><?= $erros['nascimento'] ?></div>

                        </div>

                    </div>

                    <div class="form-row">

                        <div class="col-md-4">

                            <label for="email">E-mail</label>
                            <input class="form-control <?= $erros['email'] ? 'is-invalid' : '' ?>" type="text" name="email" id="email" placeholder="E-mail" value="<?= $_POST['email'] ?>">

                            <div class="invalid-feedback"><?= $erros['email'] ?></div>

                        </div>

                        <div class="col-md-1">

                            <label for="filhos">Filhos</label>
                            <input class="form-control <?= $erros['filhos'] ? 'is-invalid' : '' ?>" type="number" name="filhos" id="filhos" placeholder="Filhos" value="<?= $_POST['filhos'] ?>">

                            <div class="invalid-feedback"><?= $erros['filhos'] ?></div>

                        </div>

                        <div class="col-md-1">

                            <label for="pessoas">Pessoas</label>
                            <input class="form-control <?= $erros['pessoas'] ? 'is-invalid' : '' ?>" type="number" name="pessoas" id="pessoas" placeholder="Pessoas" value="<?= $_POST['pessoas'] ?>">

                            <div class="invalid-feedback"><?= $erros['pessoas'] ?></div>

                        </div>

                        <div class="col-md-2">

                            <label for="data">Data Inicial</label>
                            <input class="form-control <?= $erros['data'] ? 'is-invalid' : '' ?>" type="date" name="data" id="data" placeholder="Data" value="<?= $_POST['data'] ?>">

                        </div>

                        <div class="col-md-2">

                            <label for="data2">Data Final</label>
                            <input class="form-control <?= $erros['data2'] ? 'is-invalid' : '' ?>" type="date" name="data2" id="data2" placeholder="Data Final" value="<?= $_POST['data2'] ?>">

                            <div class="invalid-feedback"><?= $erros['data2'] ?></div>

                        </div>

                    </div>

                    <div class="form-row">

                        <div class="col-md-3">

                            <label for="celular">Celular</label>

                            <input class="form-control <?= $erros['celular'] ? 'is-invalid' : '' ?>" type="text" name="celular" id="celular" placeholder="Celular - Somente os números" value="<?= $_POST['celular'] ?>">

                            <div class="invalid-feedback"><?= $erros['celular'] ?></div>

                        </div>


                        <div class="col-md-2">

                            <label for="quartos">Quartos</label>
                            <input class="form-control <?= $erros['quartos'] ? 'is-invalid' : '' ?>" type="number" name="quartos" id="quartos" placeholder="Quantidade de quartos" value="<?= $_POST['quartos'] ?>">

                            <div class="invalid-feedback"><?= $erros['quartos'] ?></div>

                        </div>

                        <div class="col-md-2 suite">
                            <input class="form-control" type="text" disabled placeholder="Suíte Dream">
                        </div>


                    </div>

                    <div class="form-row">

                        <input class="btnSuiteReservar" type="submit" value="Reservar" />

                    </div>

                </form>

                <button class="btn btn-danger btnDreamVoltar btnVoltar">Voltar</button>


            </div>

        </div>

        <p class="resultado"><?= $erros['idade'] ?></p>
    </section>

    <section class=" display form-sound">

        <div class="containerSuite">

            <div class="form-row">

                <img class="imgLogo" src="./img/logo.png" alt="logo do hotel Mahal">

            </div>

            <div class="form-change">

                <form action="sound.php" method="POST" id="myForm">


                    <div class="form-row">

                    </div>

                    <div class="form-row">

                        <div class="col-md-4">

                            <label for="nome">Nome</label>
                            <input class="form-control <?= $erros['nome'] ? 'is-invalid' : '' ?>" type="text" name="nome" id="nome" placeholder="Nome" value="<?= $_POST['nome'] ?>">

                            <div class="invalid-feedback"><?= $erros['nome'] ?></div>

                        </div>

                        <div class="col-md-4">

                            <label for="cpf">CPF</label>
                            <input class="form-control <?= $erros['cpf'] ? 'is-invalid' : '' ?>" type="text" name="cpf" id="cpf" placeholder="CPF - Somente os números" value="<?= $_POST['cpf'] ?>">

                            <div class="invalid-feedback"><?= $erros['cpf'] ?></div>

                        </div>

                        <div class="col-md-2">

                            <label for="nascimento">Nascimento</label>
                            <input class="form-control <?= $erros['nascimento'] ? 'is-invalid' : '' ?>" type="date" name="nascimento" id="nascimento" placeholder="Nascimento" value="<?= $_POST['nascimento'] ?>">

                            <div class="invalid-feedback"><?= $erros['nascimento'] ?></div>

                        </div>

                    </div>

                    <div class="form-row">

                        <div class="col-md-4">

                            <label for="email">E-mail</label>
                            <input class="form-control <?= $erros['email'] ? 'is-invalid' : '' ?>" type="text" name="email" id="email" placeholder="E-mail" value="<?= $_POST['email'] ?>">

                            <div class="invalid-feedback"><?= $erros['email'] ?></div>

                        </div>

                        <div class="col-md-1">

                            <label for="filhos">Filhos</label>
                            <input class="form-control <?= $erros['filhos'] ? 'is-invalid' : '' ?>" type="number" name="filhos" id="filhos" placeholder="Filhos" value="<?= $_POST['filhos'] ?>">

                            <div class="invalid-feedback"><?= $erros['filhos'] ?></div>

                        </div>

                        <div class="col-md-1">

                            <label for="pessoas">Pessoas</label>
                            <input class="form-control <?= $erros['pessoas'] ? 'is-invalid' : '' ?>" type="number" name="pessoas" id="pessoas" placeholder="Pessoas" value="<?= $_POST['pessoas'] ?>">

                            <div class="invalid-feedback"><?= $erros['pessoas'] ?></div>

                        </div>

                        <div class="col-md-2">

                            <label for="data">Data Inicial</label>
                            <input class="form-control <?= $erros['data'] ? 'is-invalid' : '' ?>" type="date" name="data" id="data" placeholder="Data" value="<?= $_POST['data'] ?>">

                        </div>

                        <div class="col-md-2">

                            <label for="data2">Data Final</label>
                            <input class="form-control <?= $erros['data2'] ? 'is-invalid' : '' ?>" type="date" name="data2" id="data2" placeholder="Data Final" value="<?= $_POST['data2'] ?>">

                            <div class="invalid-feedback"><?= $erros['data2'] ?></div>

                        </div>

                    </div>

                    <div class="form-row">

                        <div class="col-md-3">

                            <label for="celular">Celular</label>

                            <input class="form-control <?= $erros['celular'] ? 'is-invalid' : '' ?>" type="text" name="celular" id="celular" placeholder="Celular - Somente os números" value="<?= $_POST['celular'] ?>">

                            <div class="invalid-feedback"><?= $erros['celular'] ?></div>

                        </div>


                        <div class="col-md-2">

                            <label for="quartos">Quartos</label>
                            <input class="form-control <?= $erros['quartos'] ? 'is-invalid' : '' ?>" type="number" name="quartos" id="quartos" placeholder="Quantidade de quartos" value="<?= $_POST['quartos'] ?>">

                            <div class="invalid-feedback"><?= $erros['quartos'] ?></div>

                        </div>

                        <div class="col-md-2 suite">
                            <input class="form-control" type="text" disabled placeholder="Suíte Sound">
                        </div>


                    </div>

                    <div class="form-row">

                        <input class="btnSuiteReservar" type="submit" value="Reservar" />

                    </div>

                </form>

                <button class="btn btn-danger btnSoundVoltar btnVoltar">Voltar</button>


            </div>

        </div>

        <p class="resultado"><?= $erros['idade'] ?></p>
    </section>

    <!-- Fim Form --------------------------------------------------------------------------------------------------------------------------- -->

    <div class="flex">
        <div class="textFlex">

            <h2>CULTURA</h2>

            <p class="tituloFlex">India é unica no mundo das Civilizações</p>

            <p class="textFlexGeral">

                Mahatma Gandhi (1869-1948) foi um líder pacifista indiano. Principal personalidade da independência da Índia,
                então colônia britânica. Ganhou destaque na luta contra os ingleses por meio de seu projeto de não violência.
                Além de sua luta pela independência da Índia, também ficou conhecido por seus pensamentos e sua filosofia.
                Recorria a jejuns, marchas e à desobediência civil, ou seja, estimulava o não pagamento dos impostos e o boicote
                aos produtos ingleses.

            </p>

            <p class="textFlexGeral">

                Embora usassem a violência na repressão ao movimento nacionalista da Índia, os ingleses evitavam o confronto aberto.
                Em 1922 uma greve contra o aumento de impostos reúne uma multidão que queima um posto policial e Gandhi é detido,
                julgado e condenado a seis anos de prisão.

            </p>

            <p class="textFlexGeral">

                Mahatma Gandhi destacou-se como principal personagem da luta pela independência indiana. Recorria a marchas e a
                desobediência civil, incentivando o não pagamento de impostos e o boicote aos produtos ingleses.

            </p>

            <p class="textFlexGeral">

                Gandhi é considerado uma importante referência histórica para os movimentos pacifistas ocorridos no mundo.

            </p>

        </div>
        <div class="imgFlex">

            <img id="elefante" src="./img/elephantPNG01.png" alt="Indiano sentado em um elefante">

        </div>
    </div>

    <div class="footer">
        <div class="upHead">

        </div>
        <div class="sociais">

        </div>
        <div class="logo">

        </div>
    </div>

    <script src="./js/jquery-3.1.1.min.js"></script>
    <script src="./js/jquery.form.js"></script>
    <script src="./js/main.js"></script>

</body>

</html>