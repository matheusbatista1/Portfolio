<?php 
    global $tituloPagina;
    $tituloPagina = "Portfolio";
    include('assets/partes/cabecalho.php') 
?>
	<body>

			
						
			<div class="container" id="container-portfolio">
		
				<ul class="caminho">
					<li><a href="index.php">Home</a></li>
					<li>></li>
					<li class="caminho__atual">Portfolio</li>
				</ul>

				<h1>Portfolio</h1>

				<div style="background-image: url('../src/assets/img/projects/scc-19/capa-scc-19.png');" class="miniatura">
					<a href="scc-19.php">
						<div class="blackbox">
							<div class="blackbox-text">
								<h1>Sistema de Cadastro COVID-19</h1>
								<h2>Desenvolvido em C</h2>
							</div>
						</div>
					</a>
				</div>

				<div style="background-image: url('../src/assets/img/projects/calcpricing/capa-calcpricing.png');" class="miniatura">
					<a href="calcpricing.php">
						<div class="blackbox">
							<div class="blackbox-text">
								<h1>CalcPricing</h1>
								<h2>Desenvolvido em JavaScript</h2>
							</div>
						</div>
					</a>
				</div>

				<br>
				<a class="back-link" href="index.php">&larr; Voltar ao início<a>

			</div>	

			

	</body>
<?php include('assets/partes/rodape.php') ?>