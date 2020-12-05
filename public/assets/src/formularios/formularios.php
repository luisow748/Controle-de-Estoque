<?php
$cadastro_itens = "
<div class='form_cadastro_clientes'>
<div class='principal'>
    <div class='my-3 p-3 bg-white rounded shadow-sm'>
        <div class='w3-container'>

            <form action='recebe_formulario.php' class='form_cadastro_itens' method='POST'>

        
                    <!--<img class='mb-4' src='../assets/brand/bootstrap-solid.svg' alt='' width='72' height='72'> -->
                    <h2 class='h3 mb-3 font-weight-normal'>Cadastro de Itens de Estoque</h2>
                    <p>Digite as caracter&iacute;sticas do Item.
                        <a href='https://caniuse.com/#feat=css-placeholder-shown'></a>
                    </p>
                

                <div class='form-label-group'>
                    <input type='text' id='input_nome_item' class='form-control' placeholder='Nome do Item' required autofocus>
                    <label for='input_nome_item'>Nome do Item</label>
                </div>

                <div class='form-label-group'>
                    <input type='textarea' id='input_descricao_item' class='form-control' placeholder='Descrição do Item'
                        required>
                    <label for='input_descricao_item'>Descrição do Item</label>
                </div>
                <div class='form-label-group'>
                    <input type='number' id='input_quantidade_item' class='form-control' placeholder='Quantidade do Item' 
                        required>
                    <label for='input_quantidade_item'>Quantidade de entrada</label>
                </div>
                <div class='form-label-group'>
                    <input type='number' id='input_quantidade_minima_item' class='form-control' placeholder='Quantidade Mínima' 
                        required>
                    <label for='input_quantidade_minima_item'>Quantidade Mínima em Estoque</label>
                </div>

                <label for='cars'>Escolha a Categoria do Item</label>
                <select id='cars' name='cars'>
                    <option value='volvo'>Categoria 1</option>
                    <option value='saab'>Saab</option>
                    <option value='fiat'>Fiat</option>
                    <option value='audi'>Audi</option>
                </select> <br />
                <label for='cars'>Escolha o Setor</label>
                <select id='cars' name='cars'>
                    <option value='volvo'>Não especificar</option>
                    <option value='saab'>Saab</option>
                    <option value='fiat'>Fiat</option>
                    <option value='audi'>Audi</option>
                </select> <br />
                <label for='cars'>Escolha a Seção</label>
                <select id='cars' name='cars'>
                    <option value='volvo'>Não especificar</option>
                    <option value='saab'>Saab</option>
                    <option value='fiat'>Fiat</option>
                    <option value='audi'>Audi</option>
                </select>


                <div class='checkbox mb-3'>
                    <label>
                        <input type='checkbox' value='remember-me'> É um item de venda

                    </label><br /> 
                    <label>
                        <input type='checkbox' value='remember-me'> É um item de uso
                    </label>
                </div>
                <button class='btn btn-lg btn-primary btn-block' type='submit'>Gravar Item</button>
                <p class='mt-5 mb-3 text-muted text-center'>&copy; 2017-2020</p>
            </form>
        </div>
     </div>
 </div>
 </div>
";
