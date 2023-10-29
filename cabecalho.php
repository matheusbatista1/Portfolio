<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        $titulo = "Matheus dos Santos Batista";
        global $tituloPagina;
        if ($tituloPagina != '') {
            $titulo = 'Matheus Batista';
            $titulo .= ' | ' . $tituloPagina;
        }
    ?>
    <title><?php echo $titulo ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="src/assets/img/favicon/favicon.ico">
</head>
<body>
    <header class="cabecalho">
        <div class="container-cabecalho">
            
            <nav id="menu-principal" class="menu-principal">
                <ul class="menu-principal__lista">
                    <li class="logo-li"><?php if($tituloPagina == ''): ?>
                    <img src="src/assets/img/mb__4.png" alt="Logo">
                    <?php else: ?>
                    <a href="index.php" class="logo"><img src="src/assets/img/mb__4.png" alt="Logo"></a>
                    <?php endif; ?></li>
                    <li><a class="menu-principal__item <?php echo $tituloPagina == '' ? 'menu-principal__item--atual' : '' ?>" href="index.php">Home</a> </li>
                    <li><a class="menu-principal__item <?php echo $tituloPagina == 'Portfolio' ? 'menu-principal__item--atual' : '' ?>" href="portfolio.php">Portfolio</a></li>
                    <li><a class="menu-principal__item <?php echo $tituloPagina == 'Currículo' ? 'menu-principal__item--atual' : '' ?>" href="curriculo.php">Currículo</a></li>
                    <li><a id="menu-repositorios" class="menu-principal__item <?php echo $tituloPagina == 'Repositórios' ? 'menu-principal__item--atual' : '' ?>" href="repositorios.php">Repositórios</a></li>
                    <li><a class="menu-principal__item <?php echo $tituloPagina == 'Contato' ? 'menu-principal__item--atual' : '' ?>" href="contato.php">Contato</a></li>
                    <li class="threeline-icon" id="menu-toggle">&#9776;</li>
                </ul>
            </nav>
        </div><!--Fim do container-->
    </header>
    <main>