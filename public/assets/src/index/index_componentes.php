<?php
$openMain = "
<main role='main' class='container'>

";
$closeMain = "</main>";

$visao_geral = "";
$tabela_setores = "
<div class='my-3 p-3 bg-white rounded shadow-sm'>
    <div class='w3-container'>
    <h2>Produtos / Setor</h2>
        <p>Situa&ccedil;&atilde;o dos Setores:</p>

        <table class='w3-table-all w3-card-4'>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Points</th>
            </tr>
            <tr>
                <td>Jill</td>
                <td>Smith</td>
                <td>50</td>
            </tr>
            <tr>
                <td>Eve</td>
                <td>Jackson</td>
                <td>94</td>
            </tr>
            <tr>
                <td>Adam</td>
                <td>Johnson</td>
                <td>67</td>
            </tr>
        </table>
    </div>
</div>

";


$ultimos_produtos_cadastrados = "
<div class='my-3 p-3 bg-white rounded shadow-sm'>
            <h6 class='border-bottom border-gray pb-2 mb-0'>&Uacute;ltimos Produtos Cadastrados</h6>

            <div class='media text-muted pt-3'>
                <svg class='bd-placeholder-img mr-2 rounded' width='32' height='32' xmlns='http://www.w3.org/2000/svg' preserveAspectRatio='xMidYMid slice' focusable='false' role='img' aria-label='Placeholder: 32x32'>
                    <title>Placeholder</title>
                    <rect width='100%' height='100%' fill='#007bff' /><text x='50%' y='50%' fill='#007bff' dy='.3em'>32x32</text>
                </svg>
                <p class='media-body pb-3 mb-0 small lh-125 border-bottom border-gray'>
                    <strong class='d-block text-gray-dark'>Almoxarifado</strong>
                    Cadeiras pl&aacute;sticas CADEMAT. Quantidade: 10.<br /> Valor Unit&aacute;rio: R$ 125,90.<br /> Valor Total: R$ 1.259,90
                </p>
            </div>

            <div class='media text-muted pt-3'>
                <svg class='bd-placeholder-img mr-2 rounded' width='32' height='32' xmlns='http://www.w3.org/2000/svg' preserveAspectRatio='xMidYMid slice' focusable='false' role='img' aria-label='Placeholder: 32x32'>
                    <title>Placeholder</title>
                    <rect width='100%' height='100%' fill='#e83e8c' /><text x='50%' y='50%' fill='#007bff' dy='.3em'></text>
                </svg>
                <p class='media-body pb-3 mb-0 small lh-125 border-bottom border-gray'>
                    <strong class='d-block text-gray-dark'>Administrativo</strong>
                    Cadeiras pl&aacute;sticas CADEMAT. Quantidade: 10.<br /> Valor Unit&aacute;rio: R$ 125,90.<br /> Valor Total: R$ 1.259,90
                </p>
            </div>

            <div class='media text-muted pt-3'>
                <svg class='bd-placeholder-img mr-2 rounded' width='32' height='32' xmlns='http://www.w3.org/2000/svg' preserveAspectRatio='xMidYMid slice' focusable='false' role='img' aria-label='Placeholder: 32x32'>
                    <title>Placeholder</title>
                    <rect width='100%' height='100%' fill='#6f42c1' /><text x='50%' y='50%' fill='#6f42c1' dy='.3em'>32x32</text>
                </svg>
                <p class='media-body pb-3 mb-0 small lh-125 border-bottom border-gray'>
                    <strong class='d-block text-gray-dark'>Produ&ccedil;&atilde;o</strong>
                    Cadeiras pl&aacute;sticas CADEMAT. 
                    Quantidade: 10.<br /> Valor Unit&aacute;rio: R$ 125,90.<br /> Valor Total: R$ 1.259,90
                </p>
            </div>

            
            <small class='d-block text-right mt-3'>
                <a href='#'>Ver tudo</a>
            </small>
        </div>
        <!-- -->

";
$produtos_ultimas_24h = "
<div class='my-3 p-3 bg-white rounded shadow-sm'>
        <h6 class='border-bottom border-gray pb-2 mb-0'>Produ&ccedil;&atilde;o das &uacute;ltimas 24h</h6>
        <div class='media text-muted pt-3'>
            <svg class='bd-placeholder-img mr-2 rounded' width='32' height='32' xmlns='http://www.w3.org/2000/svg' preserveAspectRatio='xMidYMid slice' focusable='false' role='img' aria-label='Placeholder: 32x32'>
                <title>Placeholder</title>
                <rect width='100%' height='100%' fill='#007bff' /><text x='50%' y='50%' fill='#007bff' dy='.3em'>32x32</text>
            </svg>
            <div class='media-body pb-3 mb-0 small lh-125 border-bottom border-gray'>
                <div class='d-flex justify-content-between align-items-center w-100'>
                    <strong class='text-gray-dark'>Full Name</strong>
                    <a href='#'>Follow</a>
                </div>
                <span class='d-block'>@username</span>
            </div>
        </div>
        <div class='media text-muted pt-3'>
            <svg class='bd-placeholder-img mr-2 rounded' width='32' height='32' xmlns='http://www.w3.org/2000/svg' preserveAspectRatio='xMidYMid slice' focusable='false' role='img' aria-label='Placeholder: 32x32'>
                <title>Placeholder</title>
                <rect width='100%' height='100%' fill='#007bff' /><text x='50%' y='50%' fill='#007bff' dy='.3em'>32x32</text>
            </svg>
            <div class='media-body pb-3 mb-0 small lh-125 border-bottom border-gray'>
                <div class='d-flex justify-content-between align-items-center w-100'>
                    <strong class='text-gray-dark'>Full Name</strong>
                    <a href='#'>Follow</a>
                </div>
                <span class='d-block'>@username</span>
            </div>
        </div>
        <div class='media text-muted pt-3'>
            <svg class='bd-placeholder-img mr-2 rounded' width='32' height='32' xmlns='http://www.w3.org/2000/svg' preserveAspectRatio='xMidYMid slice' focusable='false' role='img' aria-label='Placeholder: 32x32'>
                <title>Placeholder</title>
                <rect width='100%' height='100%' fill='#007bff' /><text x='50%' y='50%' fill='#007bff' dy='.3em'>32x32</text>
            </svg>
            <div class='media-body pb-3 mb-0 small lh-125 border-bottom border-gray'>
                <div class='d-flex justify-content-between align-items-center w-100'>
                    <strong class='text-gray-dark'>Full Name</strong>
                    <a href='#'>Follow</a>
                </div>
                <span class='d-block'>@username</span>
            </div>
        </div>
        <small class='d-block text-right mt-3'>
            <a href='#'>All suggestions</a>
        </small>
    </div>

";
