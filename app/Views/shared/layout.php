<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" type="image/png" href="<?=base_url("assets/images/logo.png")?>">
        <title><?= $page_title ?> - Sistema de Controle de Representações</title>
        <link rel="stylesheet" type="text/css" 
            href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" 
            href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.6/jquery.fancybox.min.css"/>
        <link rel="stylesheet" type="text/css" href="<?=base_url("assets/css/style.css")?>" />
    </head>

    <body>
        <header>
            <nav class="navbar navbar-fixed-top navbar-default navbar-scr">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button 
                            type="button" 
                            class="navbar-toggle collapsed" 
                            data-toggle="collapse" 
                            data-target="#bs-example-navbar-collapse-1" 
                            aria-expanded="false"
                        >
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <a class="navbar-brand text-white text-bold" href="/representacoes/inicio">SCR</a>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li>
                                <a class="font-navbar text-white" href="/representacoes/inicio">Início</a>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle text-white" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    Gerenciar <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <?php //if ($_COOKIE['USER_LEVEL'] == '1'): ?>
                                        <li><a href="/representacoes/gerenciar/funcionario">Funcionários</a></li>
                                    <?php //endif ?>
                                    <li><a href="/representacoes/gerenciar/cliente">Clientes</a></li>
                                    <li><a href="/representacoes/gerenciar/motorista">Motoristas</a></li>
                                    <li><a href="/representacoes/gerenciar/proprietario">Proprietários de Caminhões</a></li>
                                    <li><a href="/representacoes/gerenciar/caminhao">Caminhões</a></li>
                                    <li><a href="/representacoes/gerenciar/representacao">Representações</a></li>
                                    <li><a href="/representacoes/gerenciar/produto">Produtos</a></li>
                                    <li><a href="/representacoes/gerenciar/tipocaminhao">Tipos de Caminhão</a></li>
                                    <li><a href="/representacoes/gerenciar/categoria">Categorias de Contas</a></li>
                                    <li><a href="/representacoes/gerenciar/formapagamento">Formas de Pagamento</a></li>
                                </ul>
                            </li>
                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle text-white" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    Orçamento <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a href="/representacoes/orcamento/venda">Venda</a></li>
                                    <li><a href="/representacoes/orcamento/frete">Frete</a></li>
                                </ul>
                            </li>
                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle text-white" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    Pedido <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a href="/representacoes/pedido/venda">Venda</a></li>
                                    <li><a href="/representacoes/pedido/frete">Frete</a></li>
                                    <li><a href="/representacoes/pedido/status">Alterar status</a></li>
                                    <?php //if ($_COOKIE['USER_LEVEL'] == '1'): ?>
                                        <li><a href="/representacoes/pedido/autorizar">Autorizar Carregamento</a></li>
                                    <?php //endif; ?>
                                </ul>
                            </li>
                            <?php //if ($_COOKIE['USER_LEVEL'] == '1' || $_COOKIE['USER_LEVEL'] == '2'): ?>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle text-white" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        Controlar
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="/representacoes/controlar/contas/pagar">Contas a Pagar</a></li>
                                        <li><a href="/representacoes/controlar/contas/receber">Contas a Receber</a></li>
                                        <li><a href="/representacoes/controlar/lancar/despesas">Lançar Despesas</a></li>
                                    </ul>
                                </li>
                            <?php //endif; ?>

                            <?php //if ($_COOKIE['USER_LEVEL'] == '1'): ?>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle text-white" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        Relatório
                                        <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li><a href="/representacoes/relatorio/cliente/">Clientes</a></li>
                                        <li><a href="/representacoes/relatorio/pedido/venda">Pedido de Venda</a></li>
                                        <li><a href="/representacoes/relatorio/pedido/frete">Pedido de Frete</a></li>
                                        <li><a href="/representacoes/relatorio/orcamento/venda">Orçamento de Venda</a></li>
                                        <li><a href="/representacoes/relatorio/orcamento/frete">Orçamento de Frete</a></li>
                                        <li><a href="/representacoes/relatorio/conta/pagar">Contas a Pagar</a></li>
                                        <li><a href="/representacoes/relatorio/conta/receber">Contas a Receber</a></li>
                                        <li><a href="/representacoes/relatorio/produto">Produtos</a></li>
                                    </ul>
                                </li>
                            <?php //endif; ?>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a class="text-white" href="/representacoes/help/ManualdoUsuárioSCR.html" target="_blank">Ajuda</a>
                            </li>
                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle text-white text-bold" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <?php //echo $_COOKIE['USER_LOGIN']; ?>
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-header">Configurações</li>
                                    <?php //if ($_COOKIE['USER_LEVEL'] == '1') : ?>
                                        <li><a href="<?=site_url("/parameterization/index")?>">Parametrização</a></li>
                                    <?php //endif; ?>
                                    <li><a href="/representacoes/configuracao/dados">Meus Dados</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="/representacoes/login/logout.php">Sair</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <div class="container">
            <?= $this->renderSection("container"); ?>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js"></script>
        <script src="<?=base_url("assets/js/site.js")?>"></script>

        <?= $this->renderSection("scripts"); ?>
    </body>
</html>