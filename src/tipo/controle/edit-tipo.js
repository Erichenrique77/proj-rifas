$(document).ready(function(){

    $('#table-tipo').on('click', 'button.btn-delete', function(e){

        e.preventDefault()

        $('.modal-title').empty()
        $('.modal-body').empty()
        $('.modal-title').append('Visualização de registro')
        $(document).ready(function(){

    $('#table-tipo').on('click', 'button.btn-delete', function(e){

        e.preventDefault()

        let ID = `ID=${$(this).attr('id')}`


        $.ajax({
            type: 'POST',
            datatype: 'json',
            assync: true,
            data: ID,
            url: 'src/tipo/modelo/view-tipo.php',
            success: function(dados) {
            if (dados.tipo == "success"){
                $('.modal-body').load('src/tipo/visao/form-tipo.html', function(){
                    $('#NOME').val(dado.dados.NOME)
                    $('#ID').val(dado.dados.ID)
                }
            }
                )}