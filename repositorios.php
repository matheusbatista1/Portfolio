<?php 
    global $tituloPagina;
    $tituloPagina = "Repositórios";
    include('cabecalho.php') 
?>
	<body>
        <div id="container-repositorios" class="container">

            <ul class="caminho">
                <li><a href="index.php">Home</a></li>
                <li>></li>
                <li class="caminho__atual">Repositórios</li>
            </ul>

            <h1>Repositórios do GitHub</h1>
            <div id="repositorios">
            </div>

        </div>

        <div id="back-link-repos" class="container">
            <a id="back-link" class="back-link" href="index.php">&larr; Voltar ao início<a>
        </div>
	</body>
<?php include('rodape.php') ?>