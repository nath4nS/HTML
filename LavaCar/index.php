<!DOCTYPE html>
<html>
<head>
	<title>Lava Car</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	
</head>
<body>
	<main>
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			  <img src="icones/Logo.png">
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
			    <ul class="navbar-nav mr-auto">
			      <li class="nav-item">
			        <a class="nav-link" href="historia.php">História</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Serviços</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="agendamento.php">Agendamento</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Contatos</a>
			      </li>
			    </ul>
			  </div>
			</nav>

			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img class="d-block w-100" src="icones/lavagem.jpg" alt="Primeiro Slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="icones/higienizacao.jpg" alt="Primeiro Slide">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100" src="icones/polimento.jpg" alt="Primeiro Slide">
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Anterior</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Próximo</span>
			  </a>
			</div>

			<section class="servicos">
					<div class="titulo-servicos">
				<h2>Serviços Oferecidos</h2>
			</div>

				<article>
					<figure>
						<img src="icones/default.png">
					</figure>
					<h3>Lavagem Americana</h3>
					<p>Lavagem da parte externa e da caixa de rodas, limpeza do painel, de vidros e carpete, aspiração interna e pretinho nos pneus</p>

					<button class="butao">Escolher</button>
				</article>

				<article>
					<figure>
						<img src="icones/default.png">
					</figure>
					<h3>Higienização</h3>
					<p>	Higieniza espaços internos do veículo como os bancos, porta-malas, teto, cintos de segurança</p>

					<button class="butao">Escolher</button>
				</article>

				<article>
					<figure>
						<img src="icones/default.png">
					</figure>
					<h3>Polimento</h3>
					<p>	Repara determinados danos que ocorem à pintura do carro no dia a dia, sua função é proteger a pintura e dar brilho</p>

					<button class="butao">Escolher</button>
				</article>
			</section>

			<section class="agendar">
				<h2>Agendamento</h2>

				<p>Agende um horário, para lavar seu carro!</p>

				<button class="butaoAgendar">Agendar Horário</button>
			</section>

			<footer class="contato">
				<h2>Contato</h2>

				<h6>Entre em contato conosco
				<br/>
				Fone: (00)1234-5678</h6>

				<p>&copy; Direitos reservados <?php echo date('Y'); ?> - LavaCar <p/>
		
			</footer>

	</main>

<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
</body>
</html> 

