<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Acessorios - 4Charmes</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
</head>

<body>
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a href="/index.php">
        <h1 class="fonte" style="color: #e5d335;">4Charmes</h1>
      </a>
      <i class="fas fa-bars ms-1"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
          <!-- Opção de Login para administradores da página! -->
          <li class="nav-item"><a class="nav-link" href="/private/login-manager.html">Manager</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Sobre</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Equipe</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contato</a></li>
          <!-- Verifica se existe uma sessão de usuário ativa -->
          <?php if (isset($_SESSION['usuario_id'])): ?>
            <!-- Habilita a opção de Logout se a sessão estiver ativa -->
            <li class="nav-item"><a class="btn btn-primary text-uppercase" href="/public/logout.php">Logout</a>
            </li>
            <!-- Senão, habilita a opção para Login -->
          <?php else: ?>
            <li class="nav-item"><a class="btn btn-primary text-uppercase" href="/public/cadastro.html">Login</a></li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Masthead-->
  <header class="masthead">
    <div class="container">
    </div>
  </header>

  <section class="page-section" id="services">
    <div class="container mb-5">
      <div class="text-center">
        <h1 class="section-heading text-uppercase">Óculos</h1>
        <h3 class="section-subheading text-muted">Os Melhores, você encontra aqui</h3>
      </div>

      <div class="row text-center">
        <div class="col-md-4 pb-5">
          <img src="/imagens/oculos/Oculos.jfif" alt="">
          <h4 class="my-3">Óculos Preto</h4>
          <h4>
            <p class="text-muted"><strong>R$ 32,00</strong></p>
          </h4>
          <a class="btn btn-primary btn-x0.5 text-uppercase comprar-btn" href="#">Comprar</a>
        </div>
        <div class="col-md-4 pb-5">
          <img src="/imagens/oculos/Oculos2.jfif" alt="">
          <h4 class="my-3">Óculos Dourado</h4>
          <h4>
            <p class="text-muted"><strong>R$ 320,00</strong></p>
          </h4><a class="btn btn-primary btn-x0.5 text-uppercase comprar-btn" href="#">Comprar</a>
        </div>
        <div class="col-md-4 pb-5">
          <img src="/imagens/oculos/Oculos3.jfif" alt="">
          <h4 class="my-3">Óculos de Sol</h4>
          <h4>
            <p class="text-muted"><strong>R$ 320,00</strong></p>
          </h4><a class="btn btn-primary btn-x0.5 text-uppercase comprar-btn" href="#">Comprar</a>
        </div>
        <div class="col-md-4 pb-5">
          <img src="/imagens/oculos/Oculos4.jfif" alt="">
          <h4 class="my-3">Óculos Juliete</h4>
          <h4>
            <p class="text-muted"><strong>R$ 320,00</strong></p>
          </h4>
          <a class="btn btn-primary btn-x0.5 text-uppercase comprar-btn" href="#">Comprar</a>
        </div>
        <div class="col-md-4 pb-5">
          <img src="/imagens/oculos/Oculos5.jfif" alt="">
          <h4 class="my-3">Óculos Ray ban</h4>
          <h4>
            <p class="text-muted"><strong>R$ 320,00</strong></p>
          </h4>
          <a class="btn btn-primary btn-x0.5 text-uppercase comprar-btn" href="#">Comprar</a>
        </div>
        <div class="col-md-4 pb-5">
          <img src="/imagens/oculos/Oculos6.jfif" alt="">
          <h4 class="my-3">Óculos Prata</h4>
          <h4>
            <p class="text-muted"><strong>R$ 320,00</strong></p>
          </h4>
          <a class="btn btn-primary btn-x0.5 text-uppercase comprar-btn" href="#">Comprar</a>
        </div>
        <div class="col-md-4 pb-5">
          <img src="/imagens/oculos/Oculos7.jfif" alt="">
          <h4 class="my-3">Óculos Sócial</h4>
          <h4>
            <p class="text-muted"><strong>R$ 320,00</strong></p>
          </h4>
          <a class="btn btn-primary btn-x0.5 text-uppercase comprar-btn" href="#">Comprar</a>
        </div>
        <div class="col-md-4 pb-5">
          <img src="/imagens/oculos/Oculos8.jfif" alt="">
          <h4 class="my-3">Óculos Redondo</h4>
          <h4>
            <p class="text-muted"><strong>R$ 320,00</strong></p>
          </h4>
          <a class="btn btn-primary btn-x0.5 text-uppercase comprar-btn" href="#">Comprar</a>
        </div>
        <div class="col-md-4 pb-5">
          <img src="/imagens/oculos/Oculos9.jfif" alt="">
          <h4 class="my-3">Óculos Trasparente</h4>
          <h4>
            <p class="text-muted"><strong>R$ 320,00</strong></p>
          </h4>
          <a class="btn btn-primary btn-x0.5 text-uppercase comprar-btn" href="#">Comprar</a>
        </div>
      </div>
    </div>
  </section>
  <script>
    document.querySelectorAll('.comprar-btn').forEach(button => {
      button.addEventListener('click', function (event) {
        event.preventDefault();

        fetch('/public/verificar-sessao.php')
          .then(response => response.json())
          .then(data => {
            if (data.status === 'success') {
              alert(data.message);
              window.location.href = '/public/carrinho.php'; // Sessão ativa; redireciona para o carrinho
            } else if (data.status === 'redirect') {
              alert(data.message);
              window.location.href = '/public/cadastro.html'; // Sessão inativa; redireciona para a página de cadastro
            }
          })
          .catch(error => console.error('Erro:', error));
      });
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
  <!-- * *                               SB Forms JS                               * *-->
  <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
  <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
  <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>