<?=$this->extend("shared/layout")?>

<?=$this->section("container")?>
<?=view_cell("App\Libraries\Components::cardTitle", ["title" => "Eventos do Sistema"])?>

<div class="fieldset-card">
    <div class="fieldset-card-legend">Filtragem dos Eventos</div>
    <div class="fieldset-card-container">
        <form action="<?=site_url("/home/index")?>" method="get">
            <div class="row">
                <div class="col-sm-5">
                    <label for="filter">Filtro:</label>
                    <input type="text" name="filter" id="filter" class="form-control input-sm w-full" value="<?=$filter?>" />
                </div>

                <div class="col-sm-2">
                    <label for="date">Data dos Eventos:</label>
                    <input type="date" name="date" id="date" class="form-control input-sm w-full" value="<?=$date?>" />
                </div>

                <div class="col-sm-3">
                    <label for="orderType">Tipo do Pedido:</label>
                    <select name="orderType" id="orderType" class="form-control input-sm w-full">
                        <option value="0" <?php if (strcmp($orderType, "0") == 0) echo "selected"?>>SELECIONE</option>
                        <option value="1" <?php if (strcmp($orderType, "1") == 0) echo "selected"?>>VENDA</option>
                        <option value="2" <?php if (strcmp($orderType, "2") == 0) echo "selected"?>>FRETE</option>
                    </select>
                </div>

                <div class="col-sm-2">
                    <label for="filterButton">&nbsp;</label>
                    <button type="submit" id="filterButton" class="btn btn-primary btn-sm w-full">FILTRAR</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="fieldset-card">
    <div class="fieldset-card-legend" style="width: 140px;">Eventos do Sistema</div>
    <div class="fieldset-card-container">
        <table id="tableEvents" class="table table-striped table-hover table-sm">
            <thead>
            <tr>
                <th>DESCRIÇÃO</th>
                <th>DATA</th>
                <th>HORA</th>
                <th>PEDIDO</th>
                <th>ATOR</th>
            </tr>
            </thead>

            <tbody>
                <?php foreach ($events as $event): ?>
                    <tr>
                        <td><?=$event->getDescription()?></td>
                        <td><?=$event->getDate()?></td>
                        <td><?=$event->getTime()?></td>
                        <td><?=$event->getOrder()?></td>
                        <td><?=$event->getAuthor()?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<div class="row">
    <div class="col-sm-4 col-sm-offset-4">
        <button id="btGerarPdf" class="btn btn-primary btn-sm w-full">Gerar PDF</button>
    </div>
</div>
<?=$this->endSection()?>