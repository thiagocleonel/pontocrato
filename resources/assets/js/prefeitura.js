    function btnArqPrefeitura(id,nome){

    $('[data-toggle="tooltip"]').tooltip('dispose');
    $("#statusArqPrefeitura").html('');
    $("#arqPrefeitura").html(nome);
    $("#idArqPrefeitura").val(id);
    $("#modalArquivarPrefeitura").modal();


  }

  
    function arquivarPrefeitura(){

    alert('ola');
    $("#statusArqPrefeitura").css('display', 'none');
    $("#statusArqPrefeitura").fadeIn();
    $("#statusArqPrefeitura").html('<div class="progress"><div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div></div>');
        $.post('controllers/prefeitura.php',   $( "#formArqPrefeitura" ).serialize() , function(resposta) {
            $("#statusArqPrefeitura").css('display', 'none');
            $("#statusArqPrefeitura").slideDown();
            if (resposta != false) {
              $("#statusArqPrefeitura").css('display', 'none');
                $("#statusArqPrefeitura").html(resposta);
                $("#statusArqPrefeitura").fadeIn();
                if (resposta == '<div class="alert alert-success" role="alert"><strong>ok!</strong> Prefeitura arquivada com sucesso!</div>'){
                  $('#viewPrefeitura').load('views/prefeitura/consultar.php');
                }
            } else {
              $("#statusArqPrefeitura").css('display', 'none');
                $("#statusArqPrefeitura").html('<div class="alert alert-danger" role="alert"><strong>Ops!</strong> Ocorreu um erro, tente novamente</div>');
                 $("#statusArqPrefeitura").fadeIn();
            }
        });
    }