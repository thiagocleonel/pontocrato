class Reporter {

}

// NATUREZA DE DESPESA

function fillDotacaoTable(table,projeto){
  for(var index in projeto.dotacoes){
    row = [projeto.dotacoes[index].categoria_nome,projeto.dotacoes[index].grupo_nome,projeto.dotacoes[index].modalidade_nome,projeto.dotacoes[index].natureza,
    projeto.dotacoes[index].descricao,projeto.dotacoes[index].fonte_numero.slice(-2),addCommas(projeto.dotacoes[index].soma_dotacao_atualizada),
    addCommas(projeto.dotacoes[index].dotacao_projetada)];
    table.body.push(row);
  }
  table.body.push(['TOTAL',"-","-","-","-","-",addCommas(projeto.total_all),addCommas(projeto.total_all_projetada)]);
}

function dotacaoTable(projeto){
  dotacao_table = {
    table: {
      fontSize: 9,
      headerRows: 1,
      body: [
        [ {text:'Categoria', bold:true}, {text:'Grupo', bold:true},
        {text:'Modalidade', bold:true}, {text:'Natureza', bold:true},
        {text:'Descrição', bold:true}, {text:'Fonte', bold:true},
        {text:'Dotação Atualizada(30/06)', bold:true}, {text:'Dotação', bold:true} ]
      ]
    },
    fontSize: 9,
    margin: [0,10,0,0],
    alignment: 'center',
  };
  fillDotacaoTable(dotacao_table.table, projeto);
  dotacao_table.table.widths = Array(dotacao_table.table.body[0].length + 1).join('%').split('');
  return dotacao_table;
}

function fillDotacaoTableOrcamentoAnual(table,projeto){
  for(var index in projeto.dotacoes){
    row = [projeto.dotacoes[index].categoria_nome,projeto.dotacoes[index].grupo_nome,projeto.dotacoes[index].modalidade_nome,projeto.dotacoes[index].natureza,
    projeto.dotacoes[index].descricao,projeto.dotacoes[index].fonte_numero.slice(-2),
    addCommas(projeto.dotacoes[index].dotacao_projetada)];
    table.body.push(row);
  }
  table.body.push(['TOTAL',"-","-","-","-","-",addCommas(projeto.total_all_projetada)]);
}

function dotacaoTableOrcamentoAnual(projeto){
  dotacao_table = {
    table: {
      fontSize: 9,
      headerRows: 1,
      body: [
        [ {text:'Categoria', bold:true}, {text:'Grupo', bold:true},
        {text:'Modalidade', bold:true}, {text:'Natureza', bold:true},
        {text:'Descrição', bold:true}, {text:'Fonte', bold:true},
        {text:'Dotação', bold:true} ]
      ]
    },
    fontSize: 9,
    margin: [0,10,0,0],
    alignment: 'center',
  };
  fillDotacaoTableOrcamentoAnual(dotacao_table.table, projeto);
  dotacao_table.table.widths = Array(dotacao_table.table.body[0].length + 1).join('%').split('');
  return dotacao_table;
}


// CATEGORIAS DE DESPESA
function fillCategoriaTable(table,projeto){
  for(var index in projeto.totais_categoria){
    row = [index, addCommas(projeto.totais_categoria[index]),addCommas(projeto.totais_categoria_projetada[index])];
    table.body.push(row);
  }
  table.body.push(['TOTAL',addCommas(projeto.total_all),addCommas(projeto.total_all_projetada)]);
}

function categoriaTable(projeto){
  categoria_table = {
    table: {
      fontSize: 10,
      headerRows: 1,
      body: [
        [ {text: 'Categoria', bold: true},
        {text: 'Total Dotação Atualizada(30/06)',bold: true},
        {text:'Dotação', bold:true} ]
      ]
    },
    fontSize: 10,
    margin: [0,10,0,0],
    alignment: 'center'
  };
  fillCategoriaTable(categoria_table.table, projeto);
  categoria_table.table.widths = Array(categoria_table.table.body[0].length + 1).join('%').split('');
  return categoria_table;
}

function fillCategoriaTableOrcamentoAnual(table,projeto){
  for(var index in projeto.totais_categoria){
    row = [index, addCommas(projeto.totais_categoria_projetada[index])];
    table.body.push(row);
  }
  table.body.push(['TOTAL',addCommas(projeto.total_all_projetada)]);
}

function categoriaTableOrcamentoAnual(projeto){
  categoria_table = {
    table: {
      fontSize: 10,
      headerRows: 1,
      body: [
        [ {text: 'Categoria', bold: true},
        {text:'Dotação', bold:true} ]
      ]
    },
    fontSize: 10,
    margin: [0,10,0,0],
    alignment: 'center'
  };
  fillCategoriaTableOrcamentoAnual(categoria_table.table, projeto);
  categoria_table.table.widths = Array(categoria_table.table.body[0].length + 1).join('%').split('');
  return categoria_table;
}

// GRUPOS DE DESPESA
function fillGrupoTable(table,projeto){
  for(var index in projeto.totais_grupo){
    row = [index, addCommas(projeto.totais_grupo[index]),addCommas(projeto.totais_grupo_projetada[index])];
    table.body.push(row);
  }
  table.body.push(['TOTAL',addCommas(projeto.total_all),addCommas(projeto.total_all_projetada)]);
}

function grupoTable(projeto){
  grupo_table = {
    table: {
      fontSize: 10,
      headerRows: 1,
      body: [
        [ {text: 'Grupo', bold: true},
        {text: 'Total Dotação Atualizada(30/06)', bold: true},
        {text:'Dotação', bold:true} ]
      ]
    },
    fontSize: 10,
    margin: [0,10,0,0],
    alignment: 'center'
  };

  fillGrupoTable(grupo_table.table, projeto);
  grupo_table.table.widths = Array(grupo_table.table.body[0].length + 1).join('%').split('');
  return grupo_table;
}

function fillGrupoTableOrcamentoAnual(table,projeto){
  for(var index in projeto.totais_grupo){
    row = [index,addCommas(projeto.totais_grupo_projetada[index])];
    table.body.push(row);
  }
  table.body.push(['TOTAL',addCommas(projeto.total_all_projetada)]);
}

function grupoTableOrcamentoAnual(projeto){
  grupo_table = {
    table: {
      fontSize: 10,
      headerRows: 1,
      body: [
        [ {text: 'Grupo', bold: true},
        {text:'Dotação', bold:true} ]
      ]
    },
    fontSize: 10,
    margin: [0,10,0,0],
    alignment: 'center'
  };

  fillGrupoTableOrcamentoAnual(grupo_table.table, projeto);
  grupo_table.table.widths = Array(grupo_table.table.body[0].length + 1).join('%').split('');
  return grupo_table;
}

// MODALIDADE DE DESPESA
function fillModalidadeTable(table,projeto){
  for(var index in projeto.totais_modalidade){
    row = [index, addCommas(projeto.totais_modalidade[index]),addCommas(projeto.totais_modalidade_projetada[index])];
    table.body.push(row);
  }
  table.body.push(['TOTAL',addCommas(projeto.total_all),addCommas(projeto.total_all_projetada)]);
}

function modalidadeTable(projeto){
  modalidade_table = {
    table: {
      fontSize: 10,
      headerRows: 1,
      body: [
        [ {text: 'Modalidade', bold: true},
        {text: 'Total Dotação Atualizada(30/06)', bold: true},
        {text:'Dotação', bold:true} ]
      ]
    },
    fontSize: 10,
    margin: [0,10,0,0],
    alignment: 'center',
    pageBreak: 'after'
  };

  fillModalidadeTable(modalidade_table.table, projeto);
  modalidade_table.table.widths = Array(modalidade_table.table.body[0].length + 1).join('%').split('');
  return modalidade_table;
}

function fillModalidadeTableOrcamentoAnual(table,projeto){
  for(var index in projeto.totais_modalidade){
    row = [index, addCommas(projeto.totais_modalidade_projetada[index])];
    table.body.push(row);
  }
  table.body.push(['TOTAL',addCommas(projeto.total_all_projetada)]);
}

function modalidadeTableOrcamentoAnual(projeto){
  modalidade_table = {
    table: {
      fontSize: 10,
      headerRows: 1,
      body: [
        [ {text: 'Modalidade', bold: true},
        {text:'Dotação', bold:true} ]
      ]
    },
    fontSize: 10,
    margin: [0,10,0,0],
    alignment: 'center',
    pageBreak: 'after'
  };

  fillModalidadeTableOrcamentoAnual(modalidade_table.table, projeto);
  modalidade_table.table.widths = Array(modalidade_table.table.body[0].length + 1).join('%').split('');
  return modalidade_table;
}

//PAGES



function projeto_page(projeto,titulo = undefined){
  console.log(projeto);
  array = [];
  var title = " ";
  if(titulo!=undefined){
    title = {text: titulo+ " \n", bold:true, fontSize: 12, alignment: 'center'};
  }
  unidade_gestora_header = {text: "Unidade Gestora: " + projeto.orgao_nome, fontSize: 12, alignment: 'center'};
  unidade_orcamentaria_header = {text: "Unidade Orçamentária: " + projeto.unidade_nome, fontSize: 12, alignment: 'center'};
  projeto_header = {text: "Projeto/Atividade: " + projeto.projeto, fontSize: 12, alignment: 'center'};
  dotacoes_table_header = {text:"Dotações por natureza de despesa", fontSize:14, alignment:'center',margin: [0,20,0,0]};
  categoria_table_header = {text:"Totais por categoria de despesa", fontSize:14, alignment:'center',margin: [0,20,0,0]};
  grupo_table_header = {text:"Totais por grupo de despesa", fontSize:14, alignment:'center',margin: [0,20,0,0]};
  modalidade_table_header = {text:"Totais por modalidade de despesa", fontSize:14, alignment:'center',margin: [0,20,0,0]};

  if(title.text.indexOf("ORÇAMENTO ANUAL(2019)") !== -1){
    dotacao_table = dotacaoTableOrcamentoAnual(projeto);
    categoria_table = categoriaTableOrcamentoAnual(projeto);
    grupo_table = grupoTableOrcamentoAnual(projeto);
    modalidade_table = modalidadeTableOrcamentoAnual(projeto);
    }else{
      dotacao_table = dotacaoTable(projeto);
      categoria_table = categoriaTable(projeto);
      grupo_table = grupoTable(projeto);
      modalidade_table = modalidadeTable(projeto);
    }

    array.push(
      title,
      unidade_gestora_header,
      unidade_orcamentaria_header,
      projeto_header,
      dotacoes_table_header,
      dotacao_table,
      categoria_table_header,
      categoria_table,
      grupo_table_header,
      grupo_table,
      modalidade_table_header,
      modalidade_table);

      return array;
    }

    Reporter.dotacoesDeNaturezaTodosProjetos = function (id,tipo) {
      doc = {};
      doc.content = [];
      $.LoadingOverlay("show");

      if(tipo == 'todos'){
        $.getJSON('index.php/relatorioDotacaoNatureza/todosProjetosJson/', function(json, textStatus) {
          $.each( json, function(index, projeto) {
            // console.log(projeto);
            elements = projeto_page(projeto,"PREFEITURA MUNICIPAL DO CRATO \n ORÇAMENTO ANUAL(2019) \n");
            console.log(elements);
            for(var index in elements){
              doc.content.push(elements[index]);
            }
          });
          pdfMake.createPdf(doc).open();
        }).always(function(){
          $.LoadingOverlay("hide");
        });
      }

      if(tipo == 'orcamentaria'){
        $.getJSON('index.php/relatorioDotacaoNatureza/projetosByUnidadeOrcamentariaJson/'+id, function(json, textStatus) {
          $.each( json, function(index, projeto) {
            // console.log(projeto);
            elements = projeto_page(projeto);
            console.log(elements);
            for(var index in elements){
              doc.content.push(elements[index]);
            }
          });
          pdfMake.createPdf(doc).open();
        }).always(function(){
          $.LoadingOverlay("hide");
        });
      }


    };
