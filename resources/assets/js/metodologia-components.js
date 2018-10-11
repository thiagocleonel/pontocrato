function showJustificativaField(){
  template = "<div class=\"form-row\">\r\n            <div class=\"col-md-12 form-group\">\r\n              <label for=\"textMetodologiaJustificativa\" class=\"control-label\">Justificativa*<\/label>\r\n              <textarea type=\"text\" rows=\"3\" id=\"textMetodologiaJustificativa\" name=\"justificativa\" class=\"form-control uppercase\" required ><\/textarea>\r\n            <\/div>\r\n          <\/div>"
  $("#divJustificativa").html(template);
}

function hideJustificativaField(){
  $("#divJustificativa").html('');
}

function fillSelects(){
  template = "<option value={value}>{text}</option>"
  select = $("#selectMetodologiaPrograma");
  select.html('');
  for (var programa in programas) {
    var valor = programas[programa];
    row = template.split("{value}").join(programa).split("{text}").join(valor);
    select.append(row);
  }

  select = $("#selectMetodologiaPrefeitura");
  select.html('');
  for (var prefeitura in prefeituras) {
    var valor = prefeituras[prefeitura];
    row = template.split("{value}").join(prefeitura).split("{text}").join(valor);
    select.append(row);
  }

  select = $("#selectMetodologiaFontes");
  select.html('');
  for (var fonte in fontes) {
    var valor = fontes[fonte];
    row = template.split("{value}").join(fonte).split("{text}").join(valor);
    select.append(row);
  }

  select = $("#selectMetodologiaFuncao");
  select.html('');
  for (var funcao in funcoesgoverno) {
    var valor = funcoesgoverno[funcao];
    row = template.split("{value}").join(funcao).split("{text}").join(valor);
    select.append(row);
  }

  select = $("#selectMetodologiaSubFuncao");
  select.html('');
  for (var subfuncao in subfuncoesgoverno) {
    var valor = subfuncoesgoverno[subfuncao];
    row = template.split("{value}").join(subfuncao).split("{text}").join(valor);
    select.append(row);
  }

  select = $("#selectMetodologiaUnidade");
  select.html('');
  for (var unidadeorcamentaria in unidadesorcamentarias) {
    var valor = unidadesorcamentarias[unidadeorcamentaria];
    row = template.split("{value}").join(unidadeorcamentaria).split("{text}").join(valor);
    select.append(row);
  }



}




function showLOAForm(){
  template = "<div class=\"form-row\">\r\n              <div class=\"col-md-12 form-group\">\r\n                <label for=\"textMetodologiaAcao\" class=\"control-label\">A\u00E7\u00E3o<\/label>\r\n                <input type=\"text\" id=\"textMetodologiaAcao\" name=\"acao\" required class=\"form-control uppercase\">\r\n              <\/div>\r\n            <\/div>\r\n            <div class=\"form-row\">\r\n\r\n              <div class=\"col form-group\">\r\n                <label for=\"selectMetodologiaPrograma\" value=\"\" class=\"control-label\">Programa<\/label>\r\n                <select class=\"form-control uppercase select2\" id=\"selectMetodologiaPrograma\" name=\"programa_id\" required>\r\n\r\n                <\/select>\r\n              <\/div>\r\n              <div class=\"col form-group\">\r\n                <label for=\"selectMetodologiaPrefeitura\" value=\"\" class=\"control-label\">Prefeitura<\/label>\r\n                <select class=\"form-control uppercase select2\" id=\"selectMetodologiaPrefeitura\"  required>\r\n\r\n                <\/select>\r\n              <\/div>\r\n              <div class=\"col form-group\">\r\n                <label for=\"selectMetodologiaOrgao\" class=\"control-label\">\u00D3rg\u00E3o<\/label>\r\n                <select class=\"form-control uppercase select2\" id=\"selectMetodologiaOrgao\" disabled name=\"orgao_id\" required>\r\n\r\n\r\n                  <option value=\"\">Selecione uma prefeitura...<\/option>\r\n\r\n\r\n\r\n                <\/select>\r\n              <\/div>\r\n            <\/div>\r\n\r\n            <div class=\"form-row\">\r\n              <div class=\"col-md-12 form-group\">\r\n                <label for=\"textMetodologiaObjetivo\" class=\"control-label\">Objetivo<\/label>\r\n                <textarea type=\"text\" rows=\"3\" id=\"textMetodologiaObjetivo\" name=\"objetivo\" required class=\"form-control uppercase\"><\/textarea>\r\n              <\/div>\r\n            <\/div>\r\n\r\n            <div class=\"form-row\">\r\n\r\n              <div class=\"col-md-4 form-group\">\r\n                <label for=\"selectMetodologiaUnidade\" value=\"\" class=\"control-label\">Unidade Or\u00E7ament\u00E1ria<\/label>\r\n                <select class=\"form-control uppercase select2\"  name=\"unidade_orcamentaria_id\" id=\"selectMetodologiaUnidade\" required >\r\n\r\n                <\/select>\r\n              <\/div>\r\n\r\n              <div class=\"col-md-4 form-group\">\r\n                <label for=\"selectMetodologiaFuncao\" value=\"\" class=\"control-label\">Fun\u00E7\u00E3o de governo<\/label>\r\n                <select class=\"form-control uppercase select2\" required id=\"selectMetodologiaFuncao\" name=\"funcao_id\" >\r\n\r\n                <\/select>\r\n              <\/div>\r\n              <div class=\"col-md-4 form-group\">\r\n                <label for=\"selectMetodologiaSubFuncao\" value=\"\" class=\"control-label\">Subfun\u00E7\u00E3o de governo<\/label>\r\n                <select class=\"form-control uppercase select2\" id=\"selectMetodologiaSubFuncao\"  name=\"subfuncao_id\" required>\r\n\r\n                <\/select>\r\n              <\/div>\r\n\r\n\r\n            <\/div>\r\n\r\n            <div class=\"form-row\">\r\n\r\n              <div class=\"col-md-2 form-group\">\r\n                <label for=\"textMetodologiaTipo\" class=\"control-label\">Tipo da a\u00E7\u00E3o<\/label>\r\n                <input type=\"text\" id=\"textMetodologiaTipo\" name=\"tipo\"  class=\"form-control uppercase\" required>\r\n              <\/div>\r\n\r\n              <div class=\"col-md-2 form-group\">\r\n                <label for=\"textMetodologiaNatureza\" class=\"control-label\">Natureza da a\u00E7\u00E3o<\/label>\r\n                <input type=\"text\" id=\"textMetodologiaNatureza\" name=\"natureza\" required class=\"form-control uppercase\" >\r\n              <\/div>\r\n\r\n              <div class=\"col-md-2 form-group\">\r\n                <label for=\"textMetodologiaPublico\" class=\"control-label\">P\u00FAblico alvo<\/label>\r\n                <input type=\"text\" id=\"textMetodologiaPublico\" name=\"publico\" required class=\"form-control uppercase\" >\r\n              <\/div>\r\n\r\n              <div class=\"col-md-2 form-group\">\r\n                <label for=\"textMetodologiaProdutoUnidade\" class=\"control-label\">Produto(s) Unidade(s)<\/label>\r\n                <input type=\"text\" id=\"textMetodologiaProdutoUnidade\" name=\"produto_unidade\" required class=\"form-control uppercase\" >\r\n              <\/div>\r\n\r\n              <div class=\"col-md-2 form-group\">\r\n                <label for=\"textMetodologiaUnidade\" class=\"control-label\">Unidade(s)<\/label>\r\n                <input type=\"text\" id=\"textMetodologiaUnidade\" name=\"unidade\" required class=\"form-control uppercase\" >\r\n              <\/div>\r\n\r\n              <div class=\"col-md-2 form-group\">\r\n                <label for=\"textMetodologiaIndicadores\" class=\"control-label\">Indicador(es)<\/label>\r\n                <input type=\"text\" id=\"textMetodologiaIndicadores\" name=\"indicadores\" required class=\"form-control uppercase\" >\r\n              <\/div>\r\n\r\n            <\/div>\r\n\r\n\r\n            <div class=\"form-row\">\r\n\r\n\r\n\r\n\r\n\r\n              <div class=\"col form-group\">\r\n                <label for=\"textMetodologiaAnoUm\" class=\"control-label\">Ano<\/label>\r\n                <input type=\"text\" id=\"textMetodologiaAno\" name=\"ano\"class=\"form-control uppercase\" >\r\n              <\/div>\r\n              <div class=\"col form-group\">\r\n                <label for=\"textMetodologiaValorUm\" class=\"control-label\">Valor<\/label>\r\n                <input type=\"text\" id=\"textMetodologiaValor\" name=\"valor\" class=\"form-control uppercase\" >\r\n              <\/div>\r\n\r\n              <div class=\"col form-group\">\r\n                <label for=\"textMetodologiaTotalPrograma\" class=\"control-label\">Total do programa<\/label>\r\n                <input type=\"text\" id=\"textMetodologiaTotalPrograma\" name=\"total_programa\" readonly=\"readonly\" class=\"form-control uppercase\" >\r\n              <\/div>\r\n\r\n\r\n            <\/div>\r\n\r\n\r\n            <div class=\"form-row\">\r\n              <div class=\"col-md-12 form-group\">\r\n                <label for=\"selectMetodologiaFontes\" class=\"control-label\">Fontes de recurso<\/label>\r\n                <select multiple=\"multiple\" value=\"\" class=\"form-control uppercase select2\" id=\"selectMetodologiaFontes\" name=\"fontes_ids[]\" required>\r\n\r\n                <\/select>\r\n                <div class=\"error\"> <\/div>\r\n              <\/div>\r\n\r\n            <\/div>";
  $("#divForm").html(template);
  fillSelects();
  applySelect2();
  $("select").trigger("change");
}

function hideLOAForm(){
  $("#divForm").html('');
}



function fetchAcoes(){
  formRowTemplate = "<div class=\"form-row\">\r\n<div class=\"col-md-12\">\r\n <label for=\"selectMetodologiaAcao\" class=\"control-label\">A\u00E7\u00E3o*<\/label>\r\n"+
  "<select class=\"form-control uppercase select2\" id=\"selectMetodologiaAcao\" name=\"loa_id\" required>\r\n\r\n<\/select>\r\n              <\/div>\r\n            <\/div>"
  div = $("#divLoaSelector");
  div.html(formRowTemplate);
  select = $("#selectMetodologiaAcao");
  select.html('');
  template = "<option value={value}>{text}</option>"
  for (var loa_id in loaAcoes) {
    var acao = loaAcoes[loa_id];
    row = template.split("{value}").join(loa_id).split("{text}").join(acao);
    select.append(row);
  }
  applySelect2();
}

function hideAcoes(){
  $("#divLoaSelector").html('');
}
