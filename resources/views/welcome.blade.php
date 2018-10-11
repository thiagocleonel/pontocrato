<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Bootstrap CSS -->

  <link rel="stylesheet" href="resources/assets/bootstrap/css/bootstrap.css">
  <!-- <link rel="stylesheet" href="resources/assets/cssbootstrap4/css/bootstrap.css?321"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- <link rel="stylesheet" href="resources/assets/cssbootstrap-dynamic-tabs/bootstrap-dynamic-tabs.css"> -->
  <link rel="stylesheet" href="resources/assets/css/sigo.css">
  <link rel="stylesheet" href="resources/assets/css/nav-tabs.css">
  <link rel="stylesheet" href="resources/assets/css/custom-boxes.css">
    <link rel="stylesheet" href="resources/assets/css/tippy-themes.css">
  <link rel="stylesheet" href="resources/assets/bootstrap-dynamic-tabs/bootstrap-dynamic-tabs.css">
  <link rel="stylesheet" href="resources/assets/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
  <link href="  https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css" rel="stylesheet" />
    <link href="  resources/assets/css/bootstrap-colors.scss" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.4/css/fixedHeader.bootstrap4.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.18/b-1.5.2/b-colvis-1.5.2/b-html5-1.5.2/b-print-1.5.2/cr-1.5.0/r-2.2.2/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css"/>
    <link rel="stylesheet" href="//cdn.materialdesignicons.com/2.8.94/css/materialdesignicons.min.css">

    <title>Ponto Crato</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#"><img style="position:relative;margin-top:0px;width:40px;height:40px;margin-left:20px;" src="resources/assets/images/biometrialogo.png" id="logoSigo"></img></a>
      <span style="color:#000;font-family: 'Baloo', cursive;font-size:28px; margin-right: 5px; text-transform:none !important">PontoCrato</span>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link" id="btnSecretarias" href="javascript:void(0)" aria-haspopup="true" aria-expanded="false">
              <b>Órgãos</b>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" id="btnSecretarias" href="javascript:void(0)" aria-haspopup="true" aria-expanded="false">
              <b>Cargos</b>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" id="btnSecretarias" href="javascript:void(0)" aria-haspopup="true" aria-expanded="false">
              <b>Departamentos</b>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" id="btnSecretarias" href="javascript:void(0)" aria-haspopup="true" aria-expanded="false">
              <b>Servidores</b>
            </a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <b>Tarefas</b>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" id="btnAvaliacaoLoaAdmin" href="javascript:void(0)" >
                Afastamentos
              </a>
            <a class="dropdown-item" id="btnHomologarCotasAdicional" href="javascript:void(0)">Feriados</a>
            <a class="dropdown-item" id="btnHomologarCotasRealocacao" href="javascript:void(0)">Jornadas</a>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" id="btnSecretarias" href="javascript:void(0)" aria-haspopup="true" aria-expanded="false">
              <b>Relatórios</b>
            </a>
          </li>



          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <b>Configurações</b>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

              <a class="dropdown-item" id="btnUnidadeOrcamentaria" href="javascript:void(0)">Arquivos</a>

            </div>
          </li>



  </ul>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link"><b>(Nome do usuário)</b></a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link nav-item dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>Perfil</b></a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="https://webcrato.crato.ce.gov.br">Sair</a>
      </div>
    </li>
  </ul>
  </div>
  </nav>


  <div class="cover-modal-wrapper"><!--<div class="cover-modal"></div><div class="cover-modal-inner"><div class="panel-body text-center"><img src="resources/assets/img/loading3.gif" width="60px"></div></div>--></div>

  <div id="tabs" class="ngTabs ng-scope">
  </div>


  <div id="footer">
    <div class="container-fluid" class="footer">
      <div class="row">
        <div class="col-12 text-center">
          <div class="footer">
            <hr>
            <span id="text-footer">Prefeitura do Crato - Secretaria de Finanças e Planejamento - Coordenadoria de Tecnologia da Informação  <br>PontoCrato. v1.0. All Rights Reserved.  &reg;</span>
          </div>
        </div>
      </div>
    </div>
  </div>




  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script src="resources/assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="resources/assets/bootstrap/js/bootstrap3.js"></script>
  <script type="text/javascript" src="resources/assets/bootstrap-dynamic-tabs/bootstrap-dynamic-tabs.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json"></script>
  <script type="text/javascript"src="https://unpkg.com/tippy.js@2.5.4/dist/tippy.all.min.js"></script>
  <script type="text/javascript"src="resources/assets/js/tippy-utils.js"></script>


  <script type="text/javascript" src="resources/assets/js/jquery.mask.min.js"></script>
  <script type="text/javascript" src="resources/assets/js/jquery.maskMoney.js"></script>
  <script type="text/javascript" src="resources/assets/js/bootstrap-notify.min.js"></script>
  <script type="text/javascript" src="resources/assets/js/jquery.form.min.js"></script>
  <script type="text/javascript" src="resources/assets/js/notify-manager.js"></script>
  <script type="text/javascript" src="resources/assets/js/forms/presentation.js"></script>
  <script type="text/javascript" src="resources/assets/js/datatable-utils.js"></script>
  <script type="text/javascript" src="resources/assets/js/avaliacao-gestor.js"></script>
  <script type="text/javascript" src="resources/assets/js/reports/dotacoes-natureza-despesa.js"></script>
  <script type="text/javascript" src="resources/assets/js/jquery-validation/jquery.validate.min.js"></script>
  <script type="text/javascript" src="resources/assets/js/jquery-validation/additional-methods.min.js"></script>
  <script type="text/javascript" src="resources/assets/js/jquery-validation/localization/messages_pt_BR.min.js"></script>
  <script type="text/javascript" src="resources/assets/js/util.js"></script>
  <script type="text/javascript" src="resources/assets/js/moment-with-locales.js"></script>
  <script type="text/javascript" src="resources/assets/js/metodologia-components.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.5/dist/loadingoverlay.min.js"></script>
  <!-- <script type="text/javascript" src="https://cdn.datatables.net/fixedheader/3.1.4/js/dataTables.fixedHeader.min.js"></script> -->
  <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script> -->
  <script type="text/javascript" src="resources/assets/js/pdfmake.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.18/b-1.5.2/b-colvis-1.5.2/b-html5-1.5.2/b-print-1.5.2/cr-1.5.0/r-2.2.2/datatables.min.js"></script>
  <script src="https://cdn.datatables.net/plug-ins/1.10.12/sorting/date-eu.js"></script>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
  <script type="text/javascript" src="resources/assets/js/i18n/pt-BR.js"></script>


  <script>




  //Redudância na adição de abas é necessária para corrigir o bug do highlight da tab

  var tabs = $('#tabs').bootstrapDynamicTabs();
  tabs.addTab({
    title: 'Home',
    id: 'tabela',
    ajaxUrl: 'index.php/home/',
    closable: false
  });
  tabs.addTab({
    title: 'Home',
    id: 'tabela',
    ajaxUrl: 'index.php/home/',
    closable: false
  });

  $('#btnPrefeitura').click(function(){
    tabs.addTab({
      title: 'Prefeitura',
      id: 'prefeitura',
      ajaxUrl: 'index.php/prefeitura/'
    });
    tabs.addTab({
      title: 'Prefeitura',
      id: 'prefeitura',
      ajaxUrl: 'index.php/prefeitura/'
    });
  });

  $('#btnOrgao').click(function(){

    tabs.addTab({
      title: 'Órgão',
      id: 'orgao',
      ajaxUrl: 'index.php/orgao/'
    });
    tabs.addTab({
      title: 'Órgão',
      id: 'orgao',
      ajaxUrl: 'index.php/orgao/'
    });
  });

  $('#btnEixo').click(function(){
    tabs.addTab({
      title: 'Eixo',
      id: 'eixo',
      ajaxUrl: 'index.php/eixo/'
    });
    tabs.addTab({
      title: 'Eixo',
      id: 'eixo',
      ajaxUrl: 'index.php/eixo/'
    });
  });


  $('#btnCategoriaDespesa').click(function(){
    tabs.addTab({
      title: 'Categorias de Despesa',
      id: 'categoria_despesa',
      ajaxUrl: 'index.php/categoriaDespesa/'
    });
    tabs.addTab({
      title: 'Categorias de Despesa',
      id: 'categoria_despesa',
      ajaxUrl: 'index.php/categoriaDespesa/'
    });
  });

  $('#btnCentroCusto').click(function(){
    tabs.addTab({
      title: 'Centros de Custo',
      id: 'centro_custo',
      ajaxUrl: 'index.php/centroCusto/'
    });
    tabs.addTab({
      title: 'Centros de Custo',
      id: 'centro_custo',
      ajaxUrl: 'index.php/centroCusto/'
    });
  });


  $('#btnCota').click(function(){
    try{
      tabs.closeById('cota');}
      catch(err){}
      $.LoadingOverlay("show");
      tabs.addTab({
        title: 'Cotas',
        id: 'cota',
        ajaxUrl: 'index.php/cota/'
      });
      tabs.addTab({
        title: 'Cotas',
        id: 'cota',
        ajaxUrl: 'index.php/cota/'
      });
    });

    $('#btnSolicitacaoAdicionais').click(function(){
      try{
        tabs.closeById('cota_solicitacao_adicional');}
        catch(err){}
        $.LoadingOverlay("show");
        tabs.addTab({
          title: 'Solicitações de Adicional de Cota',
          id: 'cota_solicitacao_adicional',
          ajaxUrl: 'index.php/cotaSolicitacaoAdicional/'
        });
        tabs.addTab({
          title: 'Solicitações de Adicional de Cota',
          id: 'cota_solicitacao_adicional',
          ajaxUrl: 'index.php/cotaSolicitacaoAdicional/'
        });
      });

      $('#btnSolicitacaoRealocacao').click(function(){
        try{
          tabs.closeById('cota_solicitacao_realocacao');}
          catch(err){}
          $.LoadingOverlay("show");
          tabs.addTab({
            title: 'Solicitações de Realocação de Cota',
            id: 'cota_solicitacao_realocacao',
            ajaxUrl: 'index.php/cotaSolicitacaoRealocacao/'
          });
          tabs.addTab({
            title: 'Solicitações de Realocação de Cota',
            id: 'cota_solicitacao_realocacao',
            ajaxUrl: 'index.php/cotaSolicitacaoRealocacao/'
          });
        });

        $('#btnElementoDespesa').click(function(){
          tabs.addTab({
            title: 'Elementos de Despesa',
            id: 'elemento_despesa',
            ajaxUrl: 'index.php/elementoDespesa/'
          });
          tabs.addTab({
            title: 'Elementos de Despesa',
            id: 'elemento_despesa',
            ajaxUrl: 'index.php/elementoDespesa/'
          });
        });

        $('#btnFundeb').click(function(){
          tabs.addTab({
            title: 'FUNDEB',
            id: 'fundeb',
            ajaxUrl: 'index.php/fundeb/'
          });
          tabs.addTab({
            title: 'FUNDEB',
            id: 'fundeb',
            ajaxUrl: 'index.php/fundeb/'
          });
        });

        $('#btnGastoPessoal').click(function(){
          tabs.addTab({
            title: 'Gasto com Pessoal',
            id: 'gasto_pessoal',
            ajaxUrl: 'index.php/gastoPessoal/'
          });
          tabs.addTab({
            title: 'Gasto com Pessoal',
            id: 'gasto_pessoal',
            ajaxUrl: 'index.php/gastoPessoal/'
          });
        });

        $('#btnGrupoDespesa').click(function(){
          tabs.addTab({
            title: 'Grupos de Despesa',
            id: 'grupo_despesa',
            ajaxUrl: 'index.php/grupoDespesa/'
          });
          tabs.addTab({
            title: 'Grupos de Despesa',
            id: 'grupo_despesa',
            ajaxUrl: 'index.php/grupoDespesa/'
          });
        });

        $('#btnIndice').click(function(){
          tabs.addTab({
            title: 'Índice',
            id: 'indice',
            ajaxUrl: 'index.php/indice/'
          });
          tabs.addTab({
            title: 'Índice',
            id: 'indice',
            ajaxUrl: 'index.php/indice/'
          });
        });

        $('#btnModalidadeAplicacaoDespesa').click(function(){
          tabs.addTab({
            title: 'Modalidade de Aplicação',
            id: 'modalidade',
            ajaxUrl: 'index.php/modalidadeAplicacaoDespesa/'
          });
          tabs.addTab({
            title: 'Modalidade de Aplicação',
            id: 'modalidade',
            ajaxUrl: 'index.php/modalidadeAplicacaoDespesa/'
          });
        });



        $('#btnFonteRecurso').click(function(){
          tabs.addTab({
            title: 'Fontes de recurso',
            id: 'fonterecurso',
            ajaxUrl: 'index.php/fonteRecurso/'
          });
          tabs.addTab({
            title: 'Fontes de recurso',
            id: 'fonterecurso',
            ajaxUrl: 'index.php/fonteRecurso/'
          });
        });

        $('#btnUnidadeOrcamentaria').click(function(){
          tabs.addTab({
            title: 'Unidades orçamentárias',
            id: 'unidadeorcamentaria',
            ajaxUrl: 'index.php/unidadeOrcamentaria/',
            onSuccess: function(e){
              console.log("done!");
            }
          });
          tabs.addTab({
            title: 'Unidades orçamentárias',
            id: 'unidadeorcamentaria',
            ajaxUrl: 'index.php/unidadeOrcamentaria/'
          });
        });

        $('#btnFuncaoGoverno').click(function(){
          tabs.addTab({
            title: 'Funções de governo',
            id: 'funcaogoverno',
            ajaxUrl: 'index.php/funcaoGoverno/'
          });
          tabs.addTab({
            title: 'Funções de governo',
            id: 'funcaogoverno',
            ajaxUrl: 'index.php/funcaoGoverno/'
          });
        });

        $('#btnSubfuncaoGoverno').click(function(){
          tabs.addTab({
            title: 'Subfunções de governo',
            id: 'subfuncaogoverno',
            ajaxUrl: 'index.php/subfuncaoGoverno/'
          });
          tabs.addTab({
            title: 'Subfunções de governo',
            id: 'subfuncaogoverno',
            ajaxUrl: 'index.php/subfuncaoGoverno/'
          });
        });

        $('#btnProgramaPpa').click(function(){
          tabs.addTab({
            title: 'Programas PPA',
            id: 'programappa',
            ajaxUrl: 'index.php/programaPpa/'
          });
          tabs.addTab({
            title: 'Programas PPA',
            id: 'programappa',
            ajaxUrl: 'index.php/programaPpa/'
          });
        });
  btnProjecaoDotacaoLoa

  $('#btnProjecaoDotacaoLoa').click(function(){
    try{
      tabs.closeById('btnProjecaoDotacaoLoa');}
      catch(err){

      }
      $.LoadingOverlay("show");
      tabs.addTab({
        title: 'Projeção de dotações da LOA',
        id: 'projecao_dotacao_loa',
        ajaxUrl: 'index.php/projecaoDotacaoLoa/'
      });
      tabs.addTab({
        title: 'Projeção de dotações da LOA',
        id: 'projecao_dotacao_loa',
        ajaxUrl: 'index.php/projecaoDotacaoLoa/'
      });
    });

        $('#btnPPA').click(function(){
          try{
            tabs.closeById('ppa2');}
            catch(err){

            }
            $.LoadingOverlay("show");
            tabs.addTab({
              title: 'PPA',
              id: 'ppa2',
              ajaxUrl: 'index.php/ppa/'
            });
            tabs.addTab({
              title: 'PPA',
              id: 'ppa2',
              ajaxUrl: 'index.php/ppa/'
            });
          });

          $('#btnLOA').click(function(){
            tabs.addTab({
              title: 'LOA',
              id: 'loa2',
              ajaxUrl: 'index.php/loa/'
            });
            tabs.addTab({
              title: 'LOA',
              id: 'loa2',
              ajaxUrl: 'index.php/loa/'
            });
          });

          $('#btnAtas').click(function(){
            tabs.addTab({
              title: 'Atas',
              id: 'atas',
              ajaxUrl: 'index.php/ata/'
            });
            tabs.addTab({
              title: 'Atas',
              id: 'atas',
              ajaxUrl: 'index.php/ata/'
            });
          });

          $('#btnAvaliacaoLoaAdmin').click(function(){
            try{
              tabs.closeById('avaliacaoloaadmin');}
              catch(err){

              }
              $.LoadingOverlay("show");
              tabs.addTab({
                title: 'Avaliação da LOA(2019)',
                id: 'avaliacaoloaadmin',
                ajaxUrl: 'index.php/avaliacaoLoaAdmin/'
              });
              tabs.addTab({
                title: 'Avaliação da LOA(2019)',
                id: 'avaliacaoloaadmin',
                ajaxUrl: 'index.php/avaliacaoLoaAdmin/'
              });
            });

            $('#btnAvaliacaoLoaGestor').click(function(){
              tabs.addTab({
                title: 'Avaliação da LOA(2019)',
                id: 'avaliacaogestor',
                ajaxUrl: 'index.php/avaliacaoLoaGestor/'
              });
              tabs.addTab({
                title: 'Avaliação da LOA(2019)',
                id: 'avaliacaogestor',
                ajaxUrl: 'index.php/avaliacaoLoaGestor/'
              });
            });


            $('#btnMetodologias').click(function(){
              tabs.addTab({
                title: 'Metodologias',
                id: 'metodologias',
                ajaxUrl: 'index.php/metodologia/'
              });
              tabs.addTab({
                title: 'Metodologias',
                id: 'metodologias',
                ajaxUrl: 'index.php/metodologia/'
              });
            });

            $('#btnRelatorioUniOrc').click(function(){
              tabs.addTab({
                title: 'Relatório Orçamentário - Unidade Orçamentária',
                id: 'relatorio_unidade_orcamentaria',
                ajaxUrl: 'index.php/relatorioUnidade/'
              });
              tabs.addTab({
                title: 'Relatório Orçamentário - Unidade Orçamentária',
                id: 'relatorio_unidade_orcamentaria',
                ajaxUrl: 'index.php/relatorioUnidade/'
              });
            });

            $('#btnRelatorioPrograma').click(function(){
              tabs.addTab({
                title: 'Relatório Orçamentário - Programas',
                id: 'relatorio_programa',
                ajaxUrl: 'index.php/relatorioPrograma/'
              });
              tabs.addTab({
                title: 'Relatório Orçamentário - Programas',
                id: 'relatorio_programa',
                ajaxUrl: 'index.php/relatorioPrograma/'
              });
            });

            $('#btnRelatorioAvaliacaoLoa').click(function(){
              try{
                tabs.closeById('relatorio_avaliacao_loa');}
                catch(err){

                }
                $.LoadingOverlay("show");
                tabs.addTab({
                  title: 'Relatório Orçamentário - Avaliação LOA',
                  id: 'relatorio_avaliacao_loa',
                  ajaxUrl: 'index.php/relatorioAvaliacaoLoa/'
                });
                tabs.addTab({
                  title: 'Relatório Orçamentário - Avaliação LOA',
                  id: 'relatorio_avaliacao_loa',
                  ajaxUrl: 'index.php/relatorioAvaliacaoLoa/'
                });
              });

              $('#btnRelatorioDotacaoNatureza').click(function(){
                try{
                  tabs.closeById('relatorio_dotacao_natureza');}
                  catch(err){

                  }
                  $.LoadingOverlay("show");
                  tabs.addTab({
                    title: 'Relatório Orçamentário - Dotações por Natureza',
                    id: 'relatorio_dotacao_natureza',
                    ajaxUrl: 'index.php/relatorioDotacaoNatureza/'
                  });
                  tabs.addTab({
                    title: 'Relatório Orçamentário - Dotações por Natureza',
                    id: 'relatorio_dotacao_natureza',
                    ajaxUrl: 'index.php/relatorioDotacaoNatureza/'
                  });
                });

                $('#btnConvocacaoAprovado').click(function(){
                  try{
                    tabs.closeById('convocacao-aprovados');}
                    catch(err){

                    }
                    $.LoadingOverlay("show");
                    tabs.addTab({
                      title: 'Convocação de Aprovados em P.S.S.',
                      id: 'convocacao-aprovados',
                      ajaxUrl: 'index.php/convocacaoAprovado/'
                    });
                    tabs.addTab({
                      title: 'Convocacao de Aprovados em PS',
                      id: 'convocacao-aprovados',
                      ajaxUrl: 'index.php/convocacaoAprovado/'
                    });
                  });



                $('#btnDespesa').click(function(){
                  try{
                    tabs.closeById('despesa');}
                    catch(err){

                    }
                    $.LoadingOverlay("show");
                    tabs.addTab({
                      title: 'Despesas',
                      id: 'despesa',
                      ajaxUrl: 'index.php/despesa/'
                    });
                    tabs.addTab({
                      title: 'Despesas',
                      id: 'despesa',
                      ajaxUrl: 'index.php/despesa/'
                    });
                  });

                  $('#btnHomologarCotasAdicional').click(function(){
                    try{
                      tabs.closeById('homologacao_cota_adicional');}
                      catch(err){

                      }
                      $.LoadingOverlay("show");
                      tabs.addTab({
                        title: 'Solicitações de Adicional de Cotas',
                        id: 'homologacao_cota_adicional',
                        ajaxUrl: 'index.php/homologacaoCotaAdicional/'
                      });
                      tabs.addTab({
                        title: 'Solicitações de Adicional de Cotas',
                        id: 'homologacao_cota_adicional',
                        ajaxUrl: 'index.php/homologacaoCotaAdicional/'
                      });
                    });

                    $('#btnHomologarCotasRealocacao').click(function(){
                      try{
                        tabs.closeById('homologacao_cota_realocacao');}
                        catch(err){

                        }
                        $.LoadingOverlay("show");
                        tabs.addTab({
                          title: 'Solicitações de Realocação de Cotas',
                          id: 'homologacao_cota_realocacao',
                          ajaxUrl: 'index.php/homologacaoCotaRealocacao/'
                        });
                        tabs.addTab({
                          title: 'Solicitações de Realocação de Cotas',
                          id: 'homologacao_cota_realocacao',
                          ajaxUrl: 'index.php/homologacaoCotaRealocacao/'
                        });
                      });

                      $('#btnHomologarConvocacaoAprovado').click(function(){
                        try{
                          tabs.closeById('convocacao-aprovados-homologacao');}
                          catch(err){

                          }
                          $.LoadingOverlay("show");
                          tabs.addTab({
                            title: 'Convocação de Aprovados em P.S.S.',
                            id: 'convocacao-aprovados-homologacao',
                            ajaxUrl: 'index.php/homologacaoConvocacaoAprovado/'
                          });
                          tabs.addTab({
                            title: 'Convocacao de Aprovados em PS',
                            id: 'convocacao-aprovados-homologacao',
                            ajaxUrl: 'index.php/homologacaoConvocacaoAprovado/'
                          });
                        });



                      $('#btnHomologarRequerimentoIncrementoDtp').click(function(){
                        try{
                          tabs.closeById('homologacao_requerimento_incremento_dtp');}
                          catch(err){

                          }
                          $.LoadingOverlay("show");
                          tabs.addTab({
                            title: 'Requerimentos de Incremento de DTP',
                            id: 'homologacao_requerimento_incremento_dtp',
                            ajaxUrl: 'index.php/homologacaoRequerimentoIncrementoDtp/'
                          });
                          tabs.addTab({
                            title: 'Requerimentos de Incremento de DTP',
                            id: 'homologacao_requerimento_incremento_dtp',
                            ajaxUrl: 'index.php/homologacaoRequerimentoIncrementoDtp/'
                          });
                        });



                        $('#btnDotacao').click(function(){
                          try{
                            tabs.closeById('cota');}
                            catch(err){}
                            $.LoadingOverlay("show");
                          tabs.addTab({
                            title: 'Dotacoes',
                            id: 'dotacao',
                            ajaxUrl: 'index.php/dotacao/'
                          });
                          tabs.addTab({
                            title: 'Dotacoes',
                            id: 'dotacao',
                            ajaxUrl: 'index.php/dotacao/'
                          });
                        });

                        $('#btnRelatorioDespesaOrg').click(function(){
                          tabs.addTab({
                            title: 'Despesas por Órgão',
                            id: 'relatorio_despesa_orgao',
                            ajaxUrl: 'index.php/relatorioDespesaOrgao/'
                          });
                          tabs.addTab({
                            title: 'Despesas por Órgão',
                            id: 'relatorio_despesa_orgao',
                            ajaxUrl: 'index.php/relatorioDespesaOrgao/'
                          });
                        });

                        $('#btnRelatorioDespesaUni').click(function(){
                          tabs.addTab({
                            title: 'Despesas por Unidade Orçamentária',
                            id: 'relatorio_despesa_unidade',
                            ajaxUrl: 'index.php/relatorioDespesaUnidade/'
                          });
                          tabs.addTab({
                            title: 'Despesas por Unidade Orçamentária',
                            id: 'relatorio_despesa_unidade',
                            ajaxUrl: 'index.php/relatorioDespesaUnidade/'
                          });
                        });

                        $('#btnProjetoAtividade').click(function(){
                          tabs.addTab({
                            title: 'Projetos-Atividade',
                            id: 'projeto_atividade',
                            ajaxUrl: 'index.php/projetoAtividade/'
                          });
                          tabs.addTab({
                            title: 'Projetos-Atividade',
                            id: 'projeto_atividade',
                            ajaxUrl: 'index.php/projetoAtividade/'
                          });
                        });

                        $('#btnReceita').click(function(){
                          tabs.addTab({
                            title: 'Receitas',
                            id: 'receita',
                            ajaxUrl: 'index.php/receita/'
                          });
                          tabs.addTab({
                            title: 'Receitas',
                            id: 'receita',
                            ajaxUrl: 'index.php/receita/'
                          });
                        });

                        $('#btnRelatorioReceitaOrg').click(function(){
                          tabs.addTab({
                            title: 'Receitas por Órgão',
                            id: 'relatorio_receita_orgao',
                            ajaxUrl: 'index.php/relatorioReceitaOrgao/'
                          });
                          tabs.addTab({
                            title: 'Receitas por Órgão',
                            id: 'relatorio_receita_orgao',
                            ajaxUrl: 'index.php/relatorioReceitaOrgao/'
                          });
                        });

                        $('#btnRequerimentoIncrementoDtp').click(function(){
                          tabs.addTab({
                            title: 'Requerimento de incremento de DTP',
                            id: 'requerimento_dtp',
                            ajaxUrl: 'index.php/requerimentoIncrementoDtp/'
                          });
                          tabs.addTab({
                            title: 'Requerimento de incremento de DTP',
                            id: 'requerimento_dtp',
                            ajaxUrl: 'index.php/requerimentoIncrementoDtp/'
                          });
                        });


                        $('#btnFederal').click(function(){
                          tabs.addTab({
                            title: 'Federal',
                            id: 'federal',
                            ajaxUrl: 'views/orgaoConcedenteFederal/consultar.php'
                          });
                        });

                        $('#btnEstadual').click(function(){
                          tabs.addTab({
                            title: 'Estadual',
                            id: 'estadual',
                            ajaxUrl: 'views/orgaoConcedenteEstadual/consultar.php'
                          });
                        });






                        $('#btnLDO').click(function(){
                          tabs.addTab({
                            title: 'LDO',
                            id: 'LDO',
                            ajaxUrl: 'views/ldo/consultar.php'
                          });
                        });

                        // $('#btnLOA').click(function(){
                        //   tabs.addTab({
                        //     title: 'LOA',
                        //     id: 'LOA',
                        //     ajaxUrl: 'views/loa/consultar.php'
                        //   });
                        // });

                        $.LoadingOverlaySetup({
                          background: "rgb(139, 208, 247,0.5)",
                          text: "Por favor, aguarde...",
                          textResizeFactor: 0.5,
                          imageColor: "#FEFEFE"
                        });




                        function activeLoad(){

                          $(".cover-modal-wrapper").css({
                            display: 'none'
                          });
                          $(".cover-modal-wrapper").html('<div class="cover-modal"></div><div class="cover-modal-inner"><div class="panel-body text-center"><img src="resources/assets/img/loading3.gif" width="60px"></div></div>');
                          $(".cover-modal-wrapper").addClass('active');
                          $(".cover-modal-wrapper").fadeIn("slow");
                        }
                        function removeLoad(){
                          $(".cover-modal-wrapper").fadeOut(1000);
                        }

                        function initFloatIfZero(value){
                          console.log("value: " + value);
                          if(value == '0'){
                            console.log("transformou");
                            return '0.0';
                          }
                          return value;
                        }

                        function addCommas(nStr) {
                          nStr += '';
                          var x = nStr.split('.');
                          var x1 = x[0];
                          var x2 = x.length > 1 ? ',' + x[1] : '';
                          var rgx = /(\d+)(\d{3})/;
                          while (rgx.test(x1)) {
                            x1 = x1.replace(rgx, '$1' + '.' + '$2');
                          }
                          return x1 + x2;
                        }

                        function modoConsulta(){
                          $("[data-op='create'], [data-op='edit']").addClass('hidden');

                        }



                        </script>

                      </body>

                      </html>
