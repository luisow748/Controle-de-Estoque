<!-- Tippy -->
<script src='https://unpkg.com/@popperjs/core@2/dist/umd/popper.min.js'></script>
<script src='https://unpkg.com/tippy.js@6/dist/tippy-bundle.umd.js'></script>
<script type='text/javascript' src='{{asset('assets/dist/js/jquery-2.1.0.js')}}'></script>
<script>

    tippy('#lixeira', {
        content: 'Excluir',
    });
    tippy('#acessCat', {
        content: 'Acessar Categoria',
    });
    tippy('#acessItem', {
        content: 'Acessar Item',
    });
    tippy('#editItem', {
        content: 'Editar Item',
    });
    tippy('#addItem', {
        content: 'Adicionar item na categoria',
    });
    tippy('#dropItem', {
        content: 'Dar baixa',
    });
    tippy('#editCat', {
        content: 'Editar Categoria',
    });
    tippy('#addSubCat', {
        content: 'Adicionar Subcategoria',
    });
</script>
