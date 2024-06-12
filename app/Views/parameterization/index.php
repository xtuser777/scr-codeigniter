<?= $this->extend("shared/layout") ?>

<?= $this->section("container") ?>
<?= view_cell("App\Libraries\Components::cardTitle", ["title" => "Parametrização do Sistema"]) ?>

<form action="<?= site_url("/parameterization/create") ?>" method="post">
    <!--<div class="fieldset-card">
        <div class="fieldset-card-legend">Dados da Empresa</div>
        <div class="fieldset-card-container">
            <div class="row">
                <div class="col-sm-5">
                    <label for="corporate_name">Razão Social <span style="color: red;">*</span>:</label>
                    <input type="text" name="corporate_name" id="corporate_name" class="form-control input-sm w-full" />
                    <div id="ms_corporate_name"></div>
                </div>

                <div class="col-sm-5">
                    <label for="fnatasy_name">Nome Fantasia <span style="color: red;">*</span>:</label>
                    <input type="text" name="fantasy_name" id="fantasy_name" class="form-control input-sm w-full" />
                    <div id="ms_fantasy_name"></div>
                </div>

                <div class="col-sm-2">
                    <label for="cnpj">CNPJ <span style="color: red;">*</span>:</label>
                    <input type="text" name="cnpj" id="cnpj" class="form-control input-sm w-full" />
                    <div id="ms_cnpj"></div>
                </div>
            </div>

            <div class="fieldset-card-legend-obg">* Campos de preenchimento obrigatório.</div>
        </div>
    </div>

    <div class="fieldset-card">
        <div class="fieldset-card-legend">Dados de endereço</div>
        <div class="fieldset-card-container">
            <div class="row">
                <div class="col-sm-2">
                    <label for="code">CEP <span style="color: red;">*</span>:</label>
                    <input type="text" name="code" id="code" class="form-control input-sm w-full" />
                    <div id="ms_code"></div>
                </div>

                <div class="col-sm-2">
                    <label for="city">Cidade <span style="color: red;">*</span>:</label>
                    <input type="text" name="city" id="city" class="form-control input-sm w-full" />
                    <div id="ms_city"></div>
                </div>

                <div class="col-sm-2">
                    <label for="neighborhood">Bairro <span style="color: red;">*</span>:</label>
                    <input type="text" name="neighborhood" id="neighborhood" class="form-control input-sm w-full"
                        value="" />
                    <div id="ms_neighborhood"></div>
                </div>

                <div class="col-sm-3">
                    <label for="street">Rua <span style="color: red;">*</span>:</label>
                    <input type="text" name="street" id="street" class="form-control input-sm w-full" value="" />
                    <div id="ms_street"></div>
                </div>

                <div class="col-sm-1">
                    <label for="number">Número <span style="color: red;">*</span>:</label>
                    <input type="text" name="number" id="number" class="form-control input-sm w-full" value="" />
                    <div id="ms_number"></div>
                </div>
                
                <div class="col-sm-2">
                    <label for="complement">Complemento:</label>
                    <input type="text" name="complement" id="complement" class="form-control input-sm w-full"
                        value="" />
                </div>
            </div>

            <div class="fieldset-card-legend-obg">* Campos de preenchimento obrigatório.</div>
        </div>
    </div>

    <div class="fieldset-card">
        <div class="fieldset-card-legend">Dados de contato</div>
        <div class="fieldset-card-container">
            <div class="row">
                <div class="col-sm-3">
                    <label for="phone">Telefone <span style="color: red;">*</span>:</label>
                    <div class="input-group w-full">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-phone-alt"
                                aria-hidden="true"></span></div>
                        <input type="text" name="phone" id="phone" class="form-control input-sm" />
                    </div>
                    <div id="ms_phone"></div>
                </div>

                <div class="col-sm-3">
                    <label for="cellphone">Celular <span style="color: red;">*</span>:</label>
                    <div class="input-group w-full">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-phone"
                                aria-hidden="true"></span></div>
                        <input type="text" name="cellphone" id="cellphone" class="form-control input-sm" />
                    </div>
                    <div id="ms_cellphone"></div>
                </div>

                <div class="col-sm-6">
                    <label for="email">E-Mail <span style="color: red;">*</span>:</label>
                    <div class="input-group w-full">
                        <div class="input-group-addon">@</div>
                        <input type="email" name="email" id="email" class="form-control input-sm" value="" />
                    </div>
                    <div id="ms_email"></div>
                </div>
            </div>

            <div class="fieldset-card-legend-obg">* Campos de preenchimento obrigatório.</div>
        </div>
    </div>-->

    <div class="row">
        <div class="col-sm-6">
            <div class="row">
                <div class="col-sm-12">
                    <div class="fieldset-card">
                        <div class="fieldset-card-legend">Dados da Empresa</div>
                        <div class="fieldset-card-container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="corporate_name">Razão Social <span style="color: red;">*</span>:</label>
                                    <input type="text" name="corporate_name" id="corporate_name" class="form-control input-sm w-full" />
                                    <div id="ms_corporate_name"></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-8">
                                    <label for="fantasy_name">Nome Fantasia <span style="color: red;">*</span>:</label>
                                    <input type="text" name="fantasy_name" id="fantasy_name" class="form-control input-sm w-full" />
                                    <div id="ms_fantasy_name"></div>
                                </div>

                                <div class="col-sm-4">
                                    <label for="cnpj">CNPJ <span style="color: red;">*</span>:</label>
                                    <input type="text" name="cnpj" id="cnpj" class="form-control input-sm w-full" />
                                    <div id="ms_cnpj"></div>
                                </div>
                            </div>

                            <div class="fieldset-card-legend-obg">* Campos de preenchimento obrigatório.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="fieldset-card">
                        <div class="fieldset-card-legend">Dados de contato</div>
                        <div class="fieldset-card-container">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="phone">Telefone <span style="color: red;">*</span>:</label>
                                    <div class="input-group w-full">
                                        <div class="input-group-addon"><span class="glyphicon glyphicon-phone-alt"
                                                                             aria-hidden="true"></span></div>
                                        <input type="text" name="phone" id="phone" class="form-control input-sm" />
                                    </div>
                                    <div id="ms_phone"></div>
                                </div>

                                <div class="col-sm-6">
                                    <label for="cellphone">Celular <span style="color: red;">*</span>:</label>
                                    <div class="input-group w-full">
                                        <div class="input-group-addon"><span class="glyphicon glyphicon-phone"
                                                                             aria-hidden="true"></span></div>
                                        <input type="text" name="cellphone" id="cellphone" class="form-control input-sm" />
                                    </div>
                                    <div id="ms_cellphone"></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="email">E-Mail <span style="color: red;">*</span>:</label>
                                    <div class="input-group w-full">
                                        <div class="input-group-addon">@</div>
                                        <input type="email" name="email" id="email" class="form-control input-sm" value="" />
                                    </div>
                                    <div id="ms_email"></div>
                                </div>
                            </div>

                            <div class="fieldset-card-legend-obg">* Campos de preenchimento obrigatório.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="row">
                <div class="col-sm-12">
                    <div class="fieldset-card">
                        <div class="fieldset-card-legend">Dados de endereço</div>
                        <div class="fieldset-card-container">
                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="code">CEP <span style="color: red;">*</span>:</label>
                                    <input type="text" name="code" id="code" class="form-control input-sm w-full" />
                                    <div id="ms_code"></div>
                                </div>

                                <div class="col-sm-9">
                                    <label for="city">Cidade <span style="color: red;">*</span>:</label>
                                    <input type="text" name="city" id="city" class="form-control input-sm w-full" />
                                    <div id="ms_city"></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="neighborhood">Bairro <span style="color: red;">*</span>:</label>
                                    <input type="text" name="neighborhood" id="neighborhood" class="form-control input-sm w-full"
                                           value="" />
                                    <div id="ms_neighborhood"></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="street">Rua <span style="color: red;">*</span>:</label>
                                    <input type="text" name="street" id="street" class="form-control input-sm w-full" value="" />
                                    <div id="ms_street"></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="number">Número <span style="color: red;">*</span>:</label>
                                    <input type="text" name="number" id="number" class="form-control input-sm w-full" value="" />
                                    <div id="ms_number"></div>
                                </div>

                                <div class="col-sm-9">
                                    <label for="complement">Complemento:</label>
                                    <input type="text" name="complement" id="complement" class="form-control input-sm w-full"
                                           value="" />
                                </div>
                            </div>

                            <div style="height: 83px"></div>

                            <div class="fieldset-card-legend-obg">* Campos de preenchimento obrigatório.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2">
            <a role="button" id="back" class="btn btn-default btn-sm w-full"
                href="<?= site_url("/home/index") ?>">VOLTAR</a>
        </div>

        <div class="col-sm-8"></div>

        <div class="col-sm-2">
            <button type="submit" id="save" class="btn btn-success btn-sm w-full">SALVAR</button>
        </div>
    </div>
</form>
<?= $this->endSection() ?>

<?= $this->section("scripts") ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script src="<?=base_url("assets/js/masks.js")?>"></script>
<script>
    const fill = (dados) => {
        if (!('erro' in dados)) {
            const street = document.getElementById("street");
            const neighborhood = document.getElementById("neighborhood");
            const city = document.getElementById("city");
            //Atualiza os campos com os valores da consulta.
            street.value = dados.logradouro;
            neighborhood.value = dados.bairro;
            city.value = dados.localidade + "/" + dados.uf;
        } else {
            alert('CEP não encontrado.');
        }
    };

    const searchCode = (code) => {
        const clearCode = code.replace(/\D/g, '');
        const valid = /^[0-9]{8}$/;

        if (valid.test(clearCode)) {
            $.ajax({
                type: 'GET',
                url: 'https://viacep.com.br/ws/' + clearCode + '/json/',
                dataType: 'jsonp',
                error: function (data) {
                    console.log(data);
                    alert('Opps! tivemos um erro na busca pelo CEP! Parece que os servidores estão offline!');
                },
                success: function (data) {
                    fill(data);
                },
            });
        }
    };

    function handleCodeKeyUp(e) {
        if (e.target.value && e.target.value.length == 10) {
            searchCode(e.target.value);
        }
    }

    document.addEventListener("keyup", handleCodeKeyUp);
</script>
<?= $this->endSection() ?>