<div class="index-item" >
    @if(isset($user))
        <h4>Bem vindo, {{ $user->name ?? ''}}.</h4>
    @endif
            <h6>Este é o aplicativo {{config('variaveis.nome_app')}}</h6>
            <p>Com ele, você gerencia todo o estoque da sua empresa, de maneira automatizada, organizada e produtiva!</p>

        <a href="/funcionalidades" class="btn btn-info  mb-4">Conheça as funcionalidades!</a>
</div>
 <div class='index-item'>
    <h3>Controle Inteligente do Estoque</h3>
    <h6>Monitore a temperatura do local onde está o estoque</h6>
    <p>Com a integração a sensores controlados por Arduino, é possível enviar dados para o sistema em tempo real.<br>
    Dessa forma, você verifica se o ambiente está em condições de manter os itens</p>
    <a href="/funcionalidades" class="btn btn-warning  mb-4">Saiba mais!</a>
</div>
<div class='index-item'>
    <h3>Classificação dos Itens do Estoque</h3>
    <h6><i class='fa fa-chevron-right'></i> Setor <i class='fa fa-chevron-right'>
        </i> Categoria <i class='fa fa-chevron-right'></i> Seu Item
        <i class='fa fa-chevron-right'></i> Características do Item</h6>
        <p>Classificados de maneira organizada, seus items são facilmente encontrados e
            selecionados mediante critérios diversos, com "marcadores" específicos.<br>
            Dessa forma, você pode selecionar somente os itens que atendam a determinado critério,
            como por exemplo, os que estão próximos do vencimento.
        </p>
        <a href="/funcionalidades" class="btn btn-success  mb-4">Confira todas as possibilidades.</a>
</div>
