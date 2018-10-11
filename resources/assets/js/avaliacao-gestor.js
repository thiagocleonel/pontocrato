


function moneyToDouble(element){
  return element.maskMoney('unmasked')[0];
}

function avaliacao_loa_fields_body(){
return "  <div class=\"form-row\">\r\n            <div class=\"col-md-6 form-group\">\r\n              <b>Nome da a\u00E7\u00E3o:<\/b>\r\n              <input id=\"inputAvaliacaoLoaNome\" class=\"form-control uppercase\" name=\"acao\"  type=\"text\" required \/>\r\n            <\/div>\r\n            <div class=\"col-md-6 form-group\">\r\n              <b>Dota\u00E7\u00E3o para 2019:<\/b>\r\n              <input id=\"inputAvaliacaoLoaDotacaoSugerida\" class=\"form-control uppercase\" name=\"dotacao\" type=\"text\" required\/>\r\n            <\/div>\r\n          <\/div>\r\n\r\n          <div class=\"form-row\">\r\n            <div class=\"col-md-12 form-group\">\r\n              <b>Objetivo:<\/b>\r\n              <textarea id=\"inputAvaliacaoLoaObjetivo\" rows=\"4\"class=\"form-control uppercase\" name=\"objetivo\" required> <\/textarea>\r\n            <\/div>\r\n          <\/div>\r\n          <hr  \/>"
}

function avaliacao_loa_justificativa_html(){
  return "<b>Justificativa:<\/b>\r\n      <textarea id=\"inputAvaliacaoLoaExclusaoJustificativa\" required rows=\"4\"class=\"form-control uppercase\" name=\"exclusao_justificativa\" ><\/textarea>\r\n    <\/div>"
}

function refreshAcoesTable(){
  $.LoadingOverlay("show");
    $("#tableAcoes").load("index.php/avaliacaoLoaGestor/refreshAcoesTable", function() {
      $.LoadingOverlay("hide");
      refreshAcoesInsercaoTable();
    });
}

function refreshAcoesInsercaoTable(){
  $.LoadingOverlay("show");
    $("#tableAcoesInsercao").load("index.php/avaliacaoLoaGestor/refreshAcoesInsercaoTable", function() {
      $.LoadingOverlay("hide");
    });
}

function registerExclusion(form){
  $.LoadingOverlay("show");
  $.ajax({type:"POST", url: "index.php/avaliacaoLoaGestor/registerDelete",  data:form.serialize(), dataType:'json', success: function(resposta) {
    if(resposta==true){
      notifySuccess("Registrado!");
    }else{
      notifyDanger("Falha ao alterar");
    }
  }, error: function(error){
    console.log(error);
      notifyDanger("Falha ao alterar");

  }
}).always(function() {
      $.LoadingOverlay("hide");
  });
}

function acaoHasBeenAltered(){
  return $("#acaoLoaAlteracao").val() != oldObject.nome;
}

function acaoHasBeenAlteredEdit(){
  campos_verify = camposAlterados.map(function(campo){
    return campo['campo'];
  });
  if(campos_verify.indexOf("acao") > -1){
    if($("#acaoLoaAlteracao").val() != camposAlterados[campos_verify.indexOf("acao")].valor || $("#justificativaLoaAlteracaoAcao").val() != camposAlterados[campos_verify.indexOf("acao")].justificativa){
      return true;
    }
    return false;
  }else{
    return acaoHasBeenAltered();
  }
}

function objetivoHasBeenAlteredEdit(){
  campos_verify = camposAlterados.map(function(campo){
    return campo['campo'];
  });
  if(campos_verify.indexOf("objetivo") > -1){
    if($("#objetivoLoaAlteracao").val() != camposAlterados[campos_verify.indexOf("objetivo")].valor || $("#justificativaLoaAlteracaoObjetivo").val() != camposAlterados[campos_verify.indexOf("objetivo")].justificativa){
      return true;
    }
    return false;
  }else{
      return objetivoHasBeenAltered();
  }
}

function dotacaoHasBeenAlteredEdit(){

  campos_verify = camposAlterados.map(function(campo){
    return campo['campo'];
  });
  if(campos_verify.indexOf("dotacao") > -1){
    if( (moneyToDouble($("#dotacaoLoaAlteracao")) != camposAlterados[campos_verify.indexOf("dotacao")].valor) || ($("#justificativaLoaAlteracaoDotacao").val() != camposAlterados[campos_verify.indexOf("dotacao")].justificativa) ){
      return true;
    }
    return false;
  }else{
    return dotacaoHasBeenAltered();
  }
}

function objetivoHasBeenAltered(){
  if(oldObject.objetivo == null){
    return $("#objetivoLoaAlteracao").val() != '';
  }
  return $("#objetivoLoaAlteracao").val() != oldObject.objetivo;
}

function dotacaoHasBeenAltered(){
  console.log("DotacaoHasBeenAltered: " + moneyToDouble($("#dotacaoLoaAlteracao")));
  return moneyToDouble($("#dotacaoLoaAlteracao")) != oldObject.dotacao_sugerida.trim();
}

function registerAlteracao(form){
  campos = [];
  objeto_id = $("#idObjetoAlteracao").val();
  $("#dotacaoLoaAlteracao").click();
  $("#dotacaoLoaAlteracao").focus();

  if(acaoHasBeenAltered() && op == 'new'){
    campo = {};
    campo.campo = 'acao';
    campo.valor = $("#acaoLoaAlteracao").val();
    campo.justificativa = $("#justificativaLoaAlteracaoAcao").val();
    campos.push(campo);
  }

  if(objetivoHasBeenAltered()  && op == 'new'){
    campo = {};
    campo.campo = 'objetivo';
    campo.valor = $("#objetivoLoaAlteracao").val();
    campo.justificativa = $("#justificativaLoaAlteracaoObjetivo").val();
    campos.push(campo);
  }

  if(dotacaoHasBeenAltered()  && op == 'new'){
    campo = {};
    campo.campo = 'dotacao';
    campo.valor = $("#dotacaoLoaAlteracao").val();
    campo.justificativa = $("#justificativaLoaAlteracaoDotacao").val();
    campos.push(campo);
  }



  if(op == 'edit'){
    if(acaoHasBeenAlteredEdit()){
      campo = {};
      campo.campo = 'acao';
      campo.valor = $("#acaoLoaAlteracao").val();
      campo.justificativa = $("#justificativaLoaAlteracaoAcao").val();
      campos.push(campo);


    }

    if(objetivoHasBeenAlteredEdit()){
      campo = {};
      campo.campo = 'objetivo';
      campo.valor = $("#objetivoLoaAlteracao").val();
      campo.justificativa = $("#justificativaLoaAlteracaoObjetivo").val();
      campos.push(campo);
    }

    if(dotacaoHasBeenAlteredEdit()){
      campo = {};
      campo.campo = 'dotacao';
      campo.valor = $("#dotacaoLoaAlteracao").val();
      campo.justificativa = $("#justificativaLoaAlteracaoDotacao").val();
      campos.push(campo);
    }



  }

  data = {"campos": campos, "objeto_id": objeto_id};

  $.ajax({type:"POST", url: "index.php/avaliacaoLoaGestor/registerAlteracao", data: {"data": data} , dataType:'json', success: function(resposta) {
    if(resposta==true){
      notifySuccess('Registrado!');
      $('#modal-avaliacao-loa-alteracao').modal('toggle');
      $("#formLoaAlteracao")[0].reset();
    }else{
    notifyDanger("Falha ao alterar");
    }
  }, error: function(error){
    console.log(error);
          notifyDanger("Falha ao alterar");
  }
}).always(function() {
      $.LoadingOverlay("hide");
  });
}

function showJustificativaAlteracaoAcao(){
  html = "  <label for=\"justificativaLoaAlteracaoAcao\" class=\"control-label\">Justificativa*<\/label>\r\n <textarea type=\"text\" id=\"justificativaLoaAlteracaoAcao\" class=\"form-control uppercase\" name=\"justificativa_acao\"  required><\/textarea>";
  $("#divJustificativaLoaAlteracaoAcao").html(html);

}

function hideJustificativaAlteracaoAcao(){
  $("#divJustificativaLoaAlteracaoAcao").html('');
}

function showJustificativaAlteracaoObjetivo(){
  html = "  <label for=\"justificativaLoaAlteracaoObjetivo\" class=\"control-label\">Justificativa*<\/label>\r\n <textarea type=\"text\" id=\"justificativaLoaAlteracaoObjetivo\" class=\"form-control uppercase\" name=\"justificativa_objetivo\"  required><\/textarea>";
  $("#divJustificativaLoaAlteracaoObjetivo").html(html);

}

function hideJustificativaAlteracaoObjetivo(){
  $("#divJustificativaLoaAlteracaoObjetivo").html('');
}

function showJustificativaAlteracaoDotacao(){
  html = "  <label for=\"justificativaLoaAlteracaoDotacao\" class=\"control-label\">Justificativa*<\/label>\r\n <textarea type=\"text\" id=\"justificativaLoaAlteracaoDotacao\" class=\"form-control uppercase\" name=\"justificativa_dotacao\"  required><\/textarea>";
  $("#divJustificativaLoaAlteracaoDotacao").html(html);

}

function hideJustificativaAlteracaoDotacao(){
  $("#divJustificativaLoaAlteracaoDotacao").html('');
}

function isLastObject(){
  return (typeof(objetos[start_index+1]) === 'undefined');
}

function isOnFirstObject(){
  return (start_index == 0);
}

function goBack(){
  if(isOnFirstObject()){
    $.LoadingOverlay("show");
     $("#container-avaliacao").load("index.php/avaliacaoLoaGestor/home", function() {
    $.LoadingOverlay("hide");
  });
  }else{
    start_index = start_index - 1
    objeto = objetos[start_index];
    $.LoadingOverlay("show");
    $("#container-avaliacao").load("index.php/avaliacaoLoaGestor/form", function() {
      console.log("RESTORE DECISION: " + objeto.id );
      restoreDecision(objeto.id)
      $.LoadingOverlay("hide");
    });
  }
}

function changeToManter(avaliacao_loa_objeto_id){
  $.ajax({type:"POST", url: "index.php/avaliacaoLoaGestor/manter/", data:{'id': avaliacao_loa_objeto_id}, dataType:'json', success: function(resposta) {
    if(resposta==true){
      refreshAcoesTable();
    }else{
        notifyDanger("Falha ao alterar");
        refreshAcoesTable();
    }

  }, error: function(error){
    console.log(error);
    notifyDanger("Falha ao alterar");

  }
}).always(function() {
      $.LoadingOverlay("hide");
  });
}

function restoreDecision(avaliacao_loa_objeto_id){
  $.ajax({type:"GET", url: "index.php/avaliacaoLoaGestor/viewSugestao/"+avaliacao_loa_objeto_id, dataType:'json', success: function(resposta) {
    console.log(resposta);
    if(resposta['has_sugestao']){
      if(resposta['data']['operacao'] == 'exclusao'){
        $("#inputAvaliacaoLoaRemover").click();
        $("#inputAvaliacaoLoaExclusaoJustificativa").text(resposta['data']['justificativa']);
      }
      if(resposta['data']['operacao'] == 'alteracao'){
        $("#inputAvaliacaoLoaNome").text(resposta['data']['campos']['nome']);
        $("#inputAvaliacaoLoaDotacaoSugerida").text(resposta['data']['campos']['dotacao_sugerida']);
      }
    }

  }, error: function(error){
    console.log(error);
    notifyDanger("Falha ao recuperar decisão anterior")

  }
}).always(function() {
      $.LoadingOverlay("hide");
  });
}

function goNext(){
  if(isLastObject()){
    $.LoadingOverlay("show");
     $("#container-avaliacao").load("index.php/avaliacaoLoaGestor/last_page", function() {
    $.LoadingOverlay("hide");
});

  }else{
    start_index = start_index + 1
    objeto = objetos[start_index];
    $.LoadingOverlay("show");
    $("#container-avaliacao").load("index.php/avaliacaoLoaGestor/form", function() {
      restoreDecision(objeto.id)
      $.LoadingOverlay("hide");
    });
  }

}
