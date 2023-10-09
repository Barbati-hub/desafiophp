
<? $currentPage = $_SERVER['REQUEST_URI']; ?>

            
<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/desafiophp/">Desafio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav">
            <li class="nav-item dropdown" data-bs-theme="light">
              <a class="nav-link" href="/desafiophp/clientes/" id="themes">Clientes</a>
              
            </li>
            <li class="nav-item dropdown" data-bs-theme="light">
              <a class="nav-link" href="/desafiophp/clientes/incluir.php" id="themes">Incluir</a>
              
            </li>







        <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a class="nav-link <? echo ($currentPage == '/desafiophp/index.php' || $currentPage == '/desafiophp') ? "active" : ""; ?>" href="/desafiophp">Home
                    <span class="visually-hidden">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <? echo ($currentPage == '/desafio-php/sobre.php') ? "active" : "" ?>" href="/desafio-php/sobre.php">Sobre</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/desafio-php/bootstrap.php">Exemplo de template</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle <? echo ($currentPage == '/desafio-php/clientes.php') ? "active" : ""; ?>" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Clientes</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Incluir</a>
                    <a class="dropdown-item" href="#">Listar</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Buscar</a>
                </div>
            </li>
        </ul>
        <form class="d-flex">
            <input class="form-control me-sm-2" type="search" placeholder="Digite algo ...">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
        </form>
        </div>
    </div>
</nav>