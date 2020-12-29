<script type="text/javascript">
    $(document).ready(function(){

        //Aqui a ativa a imagem de load
        function loading_show(){
            $('#loading').html("<img src='{{asset('img/loading.gif')}}'/>").fadeIn('fast');
        }

        //Aqui desativa a imagem de loading
        function loading_hide(){
            $('#loading').fadeOut('fast');
        }


        // aqui a fun��o ajax que busca os dados em outra pagina do tipo html, n�o � json
        function load_dados(valores, page, div)
        {
            $.ajax
            ({
                type: 'POST',
                dataType: 'html',
                url: page,
                beforeSend: function(){//Chama o loading antes do carregamento
                    loading_show();
                },
                data: valores,
                success: function(msg)
                {
                    loading_hide();
                    var data = msg;
                    $(div).html(data).fadeIn();
                }
            });
        }
        loading_hide();
        //Aqui eu chamo o metodo de load pela primeira vez sem parametros para pode exibir todos
        // load_dados(null, "{{route('return_category')}}", '#MostraPesq');
        $('#MostraPesq').html("<select class='form-control'><option>Primeiro, selecione uma seção acima</option></select>").fadeIn();

        //Aqui uso o evento key up para come�ar a pesquisar, se valor for maior q 0 ele faz a pesquisa
        $('#section').click(function(){

            var valores = $('#cria_item').serialize()//o serialize retorna uma string pronta para ser enviada

            //pegando o valor do campo #pesquisaCliente
            var $parametro = $(this).val();

            if($parametro.length >= 1)
            {
                load_dados(valores, "{{route('return_category')}}", '#MostraPesq');
            }else
            {
                load_dados(null, "{{route('return_category')}}", '#MostraPesq');
            }
        });

    });
</script>
