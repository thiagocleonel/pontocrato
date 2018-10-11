<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Bootstrap CSS -->

  <link rel="stylesheet" href="includes/bootstrap/css/bootstrap.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="{{ asset('css/sigo.css') }}">
  <link rel="stylesheet" href="{{ asset('css/nav-tabs.css') }}">
  <link rel="stylesheet" href="{{ asset('css/custom-boxes.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tippy-themes.css') }}">
  <link rel="stylesheet" href="includes/bootstrap-dynamic-tabs/bootstrap-dynamic-tabs.css">
  <link rel="stylesheet" href="{{ asset('css/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
  <link href="  https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css" rel="stylesheet" />
    <link href="  {{ asset('css/bootstrap-colors.scss') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.4/css/fixedHeader.bootstrap4.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.18/b-1.5.2/b-colvis-1.5.2/b-html5-1.5.2/b-print-1.5.2/cr-1.5.0/r-2.2.2/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css"/>
    <link rel="stylesheet" href="//cdn.materialdesignicons.com/2.8.94/css/materialdesignicons.min.css">






      <title>Sigo</title>
    </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img style="position:relative;margin-top:0px;width:38px;height:27px;margin-left:20px;margin-right:10px;" src="includes/assets/images/logo-orcamento.png" id="logoSigo"></img></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">


            <!-- <li class="nav-item">
              <a class="nav-link" id="btnAvaliacaoLoaGestor" href="javascript:void(0)" aria-haspopup="true" aria-expanded="false">
                <b>Avaliação LOA(2019) Gestor</b>
              </a>
            </li> -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <b>Homologar</b>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" id="btnAvaliacaoLoaAdmin" href="javascript:void(0)" >
                  Avaliação/Elaboração LOA(2019)
                </a>
              <a class="dropdown-item" id="btnHomologarCotasAdicional" href="javascript:void(0)">Cotas - Adicional</a>
              <a class="dropdown-item" id="btnHomologarCotasRealocacao" href="javascript:void(0)">Cotas - Realocação</a>
              <a class="dropdown-item" id="btnHomologarConvocacaoAprovado" href="javascript:void(0)">Convocação de aprovados em P.S.S.</a>
              <a class="dropdown-item" id="btnHomologarRequerimentoIncrementoDtp" href="javascript:void(0)">Requerimento de Incremento de Despesa Total com Pessoal</a>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" id="btnAtas" href="javascript:void(0)" aria-haspopup="true" aria-expanded="false">
                <b>Atas</b>
              </a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <b>Configurações</b>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" id="btnCategoriaDespesa" href="javascript:void(0)">Categorias de despesa</a>
                <a class="dropdown-item" id="btnCentroCusto" href="javascript:void(0)">Centros de custo</a>
                  <a class="dropdown-item" id="btnCota" href="javascript:void(0)">Cotas</a>
              <a class="dropdown-item" id="btnDotacao" href="javascript:void(0)">Dotações</a>
                <a class="dropdown-item" id="btnEixo" href="javascript:void(0)">Eixo</a>
                <a class="dropdown-item" id="btnElementoDespesa" href="javascript:void(0)">Elementos de despesa</a>
                <a class="dropdown-item" id="btnFonteRecurso" href="javascript:void(0)">Fontes de recursos</a>
                <a class="dropdown-item" id="btnFuncaoGoverno" href="javascript:void(0)">Funções de governo</a>
                <a class="dropdown-item" id="btnFundeb" href="javascript:void(0)">FUNDEB</a>
                <a class="dropdown-item" id="btnGastoPessoal" href="javascript:void(0)">Gasto com pessoal</a>
                <a class="dropdown-item" id="btnGrupoDespesa" href="javascript:void(0)">Grupos de despesa</a>
                <a class="dropdown-item" id="btnIndice" href="javascript:void(0)">Índice</a>
                <a class="dropdown-item" id="btnModalidadeAplicacaoDespesa" href="javascript:void(0)">Modalidade de Aplicação</a>
                <a class="dropdown-item" id="btnOrgao" href="javascript:void(0)">Órgao</a>
                <a class="dropdown-item" id="btnPrefeitura" href="javascript:void(0)">Prefeitura</a>
                <a class="dropdown-item" id="btnProgramaPpa" href="javascript:void(0)">Programas</a>
                    <a class="dropdown-item" id="btnProjetoAtividade" href="javascript:void(0)">Projetos-Atividade</a>
                <a class="dropdown-item" id="btnSubfuncaoGoverno" href="javascript:void(0)">Subfunções de governo</a>
                <a class="dropdown-item" id="btnUnidadeOrcamentaria" href="javascript:void(0)">Unidades orçamentárias</a>

              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <b>Despesas</b>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" id="btnDespesa" href="javascript:void(0)">Despesas</a>

                <!-- <a class="dropdown-item" id="btnRelatorioDespesaOrg" href="javascript:void(0)">Despesas por Órgão</a>
                <a class="dropdown-item" id="btnRelatorioDespesaUni" href="javascript:void(0)">Despesas por Unidade Orçamentária</a> -->

                <!-- <a class="dropdown-item" id="btnReceita" href="javascript:void(0)">Receitas</a>
                <a class="dropdown-item" id="btnRelatorioReceitaOrg" href="javascript:void(0)">Receitas por Órgão</a> -->
                <!-- <a class="dropdown-item" id="btnRelatorioDespesaUni" href="javascript:void(0)">Despesas por Unidade Orçamentária</a> -->

              </div>
            </li>


            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <b>LOA</b>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" id="btnLOA" href="javascript:void(0)">LOAs</a> -->

                <!-- <a class="dropdown-item" id="btnRelatorioDespesaOrg" href="javascript:void(0)">Despesas por Órgão</a>
                <a class="dropdown-item" id="btnRelatorioDespesaUni" href="javascript:void(0)">Despesas por Unidade Orçamentária</a> -->

                <!-- <a class="dropdown-item" id="btnReceita" href="javascript:void(0)">Receitas</a>
                <a class="dropdown-item" id="btnRelatorioReceitaOrg" href="javascript:void(0)">Receitas por Órgão</a> -->
                <!-- <a class="dropdown-item" id="btnRelatorioDespesaUni" href="javascript:void(0)">Despesas por Unidade Orçamentária</a> -->

              <!-- </div>
            </li> -->

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <b>PPA</b>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" id="btnPPA" href="javascript:void(0)">PPAs</a>
                <a class="dropdown-item" id="btnRelatorioPrograma" href="javascript:void(0)">PPA por Programa</a>
                <a class="dropdown-item" id="btnRelatorioUniOrc" href="javascript:void(0)">PPA por Unidade Orçamentária</a>

              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <b>Projeções</b>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" id="btnProjecaoDotacaoLoa" href="javascript:void(0)">Dotações - LOA</a>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <b>Relatórios</b>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" id="btnRelatorioAvaliacaoLoa" href="javascript:void(0)">Avaliação LOA</a>
                  <a class="dropdown-item" id="btnRelatorioDotacaoNatureza" href="javascript:void(0)">Dotações - Naturezas de Despesa</a>
              </div>
            </li>

            <!-- <li class="nav-item">
              <a class="nav-link" id="btnMetodologias" href="javascript:void(0)" aria-haspopup="true" aria-expanded="false">
                <b>Metodologias</b>
              </a>
            </li> -->




            <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <b>Orgão Concedente</b>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" id="btnEstadual" href="javascript:void(0)">Estadual</a>
          <a class="dropdown-item" id="btnFederal" href="javascript:void(0)">Federal</a>
        </div>
      </li> -->

    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link"><b>Olá, Filemon</b></a>
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
