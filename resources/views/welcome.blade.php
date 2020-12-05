<?php
include_once 'assets/classes/estrutura/Estrutura.class.php';
include_once 'assets/src/variaveis.php';

?>


<body class="bg-light">
    
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <a class="navbar-brand mr-auto mr-lg-0" href="#"><?php echo $var['nome_logo'];  ?> </a>
        <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#"> <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><?php echo $var['top_menu_1']; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><?php echo $var['top_menu_2']; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><?php echo $var['top_menu_3']; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><?php echo $var['top_menu_4']; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><?php echo $var['top_menu_5']; ?></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $var['top_menu_6']; ?></a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="#"><?php echo $var['top_menu_6_1']; ?></a>
                        <a class="dropdown-item" href="#"><?php echo $var['top_menu_6_2']; ?></a>
                        <a class="dropdown-item" href="#"><?php echo $var['top_menu_6_3']; ?></a>
                    </div>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Seu E-mail" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><?php echo $var['top_menu_login']; ?></button>
            </form>
        </div>
    </nav>

    <div class="nav-scroller bg-white shadow-sm">
        <nav class="nav nav-underline">
            <a class="nav-link active" href="#"><?php echo $var['mid_menu_1']; ?></a>
            <a class="nav-link" href="#"> <?php echo $var['mid_menu_2']; ?>
                <span class="badge badge-pill bg-light align-text-bottom"> <?php echo $var['mid_menu_2_1']; ?></span>
            </a>
            <a class="nav-link" href="#"><?php echo $var['mid_menu_3']; ?></a>
            <a class="nav-link" href="#"><?php echo $var['mid_menu_4']; ?></a>
            <a class="nav-link" href="#"><?php echo $var['mid_menu_5']; ?></a>
            <a class="nav-link" href="#"><?php echo $var['mid_menu_6']; ?></a>
            <!-- <a class="nav-link" href="#">Link</a>
      <a class="nav-link" href="#">Link</a>
      <a class="nav-link" href="#">Link</a> -->
        </nav>
    </div>

    <main role="main" class="container">
        <!--<div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded shadow-sm">
      <img class="mr-3" src="../assets/brand/bootstrap-outline.svg" alt="" width="48" height="48">
      <div class="lh-100">
        <h6 class="mb-0 text-white lh-100">sitesDev</h6>
        <small>2006 - 2020</small>
      </div>
    </div>-->

        <div class="my-3 p-3 bg-white rounded shadow-sm">
            <h6 class="border-bottom border-gray pb-2 mb-0">&Uacute;ltimos Produtos Cadastrados</h6>

            <div class="media text-muted pt-3">
                <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#007bff" /><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
                </svg>
                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">Almoxarifado</strong>
                    Cadeiras pl&aacute;sticas CADEMAT. Quantidade: 10.<br /> Valor Unit&aacute;rio: R$ 125,90.<br /> Valor Total: R$ 1.259,90
                </p>
            </div>

            <div class="media text-muted pt-3">
                <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#e83e8c" /><text x="50%" y="50%" fill="#007bff" dy=".3em"></text>
                </svg>
                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">Administrativo</strong>
                    Cadeiras pl&aacute;sticas CADEMAT. Quantidade: 10.<br /> Valor Unit&aacute;rio: R$ 125,90.<br /> Valor Total: R$ 1.259,90
                </p>
            </div>

            <div class="media text-muted pt-3">
                <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#6f42c1" /><text x="50%" y="50%" fill="#6f42c1" dy=".3em">32x32</text>
                </svg>
                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">Produ&ccedil;&atilde;o</strong>
                    Cadeiras pl&aacute;sticas CADEMAT. 
                    Quantidade: 10.<br /> Valor Unit&aacute;rio: R$ 125,90.<br /> Valor Total: R$ 1.259,90
                </p>
            </div>

            
            <small class="d-block text-right mt-3">
                <a href="#">Ver tudo</a>
            </small>
        </div>
        <!-- -->

        <div class="my-3 p-3 bg-white rounded shadow-sm">
            <h6 class="border-bottom border-gray pb-2 mb-0">Produ&ccedil;&atilde;o das &uacute;ltimas 24h</h6>
            <div class="media text-muted pt-3">
                <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#007bff" /><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
                </svg>
                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <strong class="text-gray-dark">Full Name</strong>
                        <a href="#">Follow</a>
                    </div>
                    <span class="d-block">@username</span>
                </div>
            </div>
            <div class="media text-muted pt-3">
                <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#007bff" /><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
                </svg>
                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <strong class="text-gray-dark">Full Name</strong>
                        <a href="#">Follow</a>
                    </div>
                    <span class="d-block">@username</span>
                </div>
            </div>
            <div class="media text-muted pt-3">
                <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#007bff" /><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
                </svg>
                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <strong class="text-gray-dark">Full Name</strong>
                        <a href="#">Follow</a>
                    </div>
                    <span class="d-block">@username</span>
                </div>
            </div>
            <small class="d-block text-right mt-3">
                <a href="#">All suggestions</a>
            </small>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script>
        window.jQuery || document.write('<script src="assets/js/vendor/jquery.slim.min.js"><\/script>')
    </script>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="offcanvas.js"></script>
</body>

</html>