<?php
include_once 'assets/src/variaveis.php';

$header = "
    <nav class='navbar navbar-expand-lg fixed-top navbar-dark bg-dark'>
        <a class='navbar-brand mr-auto mr-lg-0' href='#'>".$var['nome_logo']."</a>
        <button class='navbar-toggler p-0 border-0' type='button' data-toggle='offcanvas'>
            <span class='navbar-toggler-icon'></span>
        </button>

        <div class='navbar-collapse offcanvas-collapse' id='navbarsExampleDefault'>
            <ul class='navbar-nav mr-auto'>
                <li class='nav-item active'>
                    <a class='nav-link' href='#'> <span class='sr-only'></span></a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='#'>".$var['top_menu_1']."</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='#'>".$var['top_menu_2']."</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='#'>".$var['top_menu_3']."</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='#'>".$var['top_menu_4']."</a>
                </li>
                <li class='nav-item'>
                    <a class='nav-link' href='#'>".$var['top_menu_5']."</a>
                </li>

                <li class='nav-item dropdown'>
                    <a class='nav-link dropdown-toggle' href='".$var['top_menu_6l']."' id='dropdown01' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>".$var['top_menu_6']."</a>
                    <div class='dropdown-menu' aria-labelledby='dropdown01'>
                        <a class='dropdown-item' href='".$var['top_menu_6_1l']."'>".$var['top_menu_6_1']."</a>
                        <a class='dropdown-item' href='".$var['top_menu_6_2l']."'>".$var['top_menu_6_2']."</a>
                        <a class='dropdown-item' href='".$var['top_menu_6_3l']."'>".$var['top_menu_6_3']."</a>
                    </div>
                </li>
            </ul>

            <form class='form-inline my-2 my-lg-0'>
                <input class='form-control mr-sm-2' type='text' placeholder='Seu E-mail' aria-label='Search'>
                <button class='btn btn-outline-success my-2 my-sm-0' type='submit'>".$var['top_menu_login']."</button>
            </form>
        </div>
    </nav>

<!-- Menu Intermediário -->
    <div class='nav-scroller bg-white shadow-sm'>
        <nav class='nav nav-underline'>
            <a class='nav-link active' href='#'>".$var['mid_menu_1']."</a>
            <a class='nav-link' href='#'> ".$var['mid_menu_2']."
                <span class='badge badge-pill bg-light align-text-bottom'> ".$var['mid_menu_2_1']."</span>
            </a>
            <a class='nav-link' href='#'>".$var['mid_menu_3']."</a>
            <a class='nav-link' href='#'>".$var['mid_menu_4']."</a>
            <a class='nav-link' href='#'>".$var['mid_menu_5']."</a>
            <a class='nav-link' href='#'>".$var['mid_menu_6']."</a>
            <!-- <a class='nav-link' href='#'>Link</a>
      <a class='nav-link' href='#'>Link</a>
      <a class='nav-link' href='#'>Link</a> -->
        </nav>
    </div>


       <!--<div class='d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded shadow-sm'>
      <img class='mr-3' src='../assets/brand/bootstrap-outline.svg' alt='' width='48' height='48'>
      <div class='lh-100'>
        <h6 class='mb-0 text-white lh-100'>sitesDev</h6>
        <small>2006 - 2020</small>
      </div>
    </div>-->

";
