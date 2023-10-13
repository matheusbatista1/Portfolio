<?php 
    global $tituloPagina;
    $tituloPagina = "SCC-19";
    include('assets/partes/cabecalho.php') 
?>
	<body>

			
						
			<div class="container" id="container-scc-19">

				<ul class="caminho">
					<li><a href="index.php">Home</a></li>
					<li>></li>
					<li><a href="portfolio.php">Portfolio</a></li>
					<li>></li>
					<li class="caminho__atual">Sistema de Cadastro COVID-19</li>
				</ul>

				<h1>Sistema de Cadastro COVID-19</h1>

				<img class="foto-trabalhos" src="../src/assets/img/projects/scc-19/tela-inicial-scc-19.png" alt="CCB">

				<h2>Projeto integrado multidisciplinar desenvolvido para a faculdade de Análise e Desenvolvimento de Sistemas.</h2>

				<p>O projeto é um sistema de cadastro desenvolvido que será utilizado para controle de pacientes e enfermidades por prédios hospitalares e clínicas: o programa foi desenvolvido através da plataforma CodeBlocks com a linguagem de programação C, usufruindo todo conhecimento adquirido nas matérias de “Linguagem e Técnicas de Programação” e “Engenharia de Software I”.</p>

				<p>O sistema permite, através do login de administrador, a coleta de informações do paciente e seu armazenamento. Além disso, o programa possibilita a análise de dados de forma automática, com o objetivo de calcular a idade partindo da data de nascimento fornecida pelo paciente. Em caso de pacientes com mais de 65 anos, o sistema requisitará ao usuário-administrador, que informe se o paciente possui alguma comorbidade. Caso a resposta seja negativa, os dados serão encaminhados para o arquivo de texto identificado como: “pacientes_diagnosticados.txt”, em casos de pacientes que fazem parte do grupo de risco, o salvamento ocorrerá em “grupo_de_risco.txt”.</p>

				<img class="foto-trabalhos" src="../src/assets/img/projects/scc-19/tela-cadastro-scc-19.png" alt="CCB">

				<p>Após realizar cadastros, o funcionário tem a possibilidade de acessar, de forma externa, essas informações nos arquivos de textos ou, se preferir, pode acessar de forma interna pelo sistema nas opções do menu inicial. Também é possível excluir os dados salvos.</p>

				<img class="foto-trabalhos" src="../src/assets/img/projects/scc-19/lista-pacientes-scc-19" alt="CCB">


				<br>
				<a class="back-link" href="portfolio.php">&larr; Voltar ao Portfolio<a>

			</div>	

			

	</body>
<?php include('assets/partes/rodape.php') ?>