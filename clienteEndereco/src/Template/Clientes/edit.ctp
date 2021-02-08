<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>

<div class="clientes form large-9 medium-8 columns content">
    <?= $this->Form->create($cliente) ?>
    <fieldset>
        <legend><?= __('Edit Cliente') ?></legend>

        <div class="row">
            <div class="col-md-5">
                <?php echo $this->Form->control('nome', array('class' => 'form-control')); ?>
            </div>
            <div class="col-md-7">
                <?php echo $this->Form->control('email', array('class' => 'form-control')); ?>
            </div>

        </div>
        <div class="row">

            <div class="col-md-5">
                <?php echo $this->Form->control('telefone', array('class' => 'form-control')); ?>
            </div>
            <div class="col-md-4">
                <?php echo $this->Form->control('cep', array('class' => 'form-control')); ?>
            </div>

            <div class="col-md-3">
                <br>
                <button id="btncep" type="button" class="btn btn-primary"> Pesquisar e Preencher CEP</button>
            </div>

        </div>
        <div class="row">

            <div class="col-md-6">
                <?php echo $this->Form->control('logradouro', array('class' => 'form-control')); ?>
            </div>
            <div class="col-md-2">
                <?php echo $this->Form->control('numero', array('class' => 'form-control')); ?>
            </div>
            <div class="col-md-4">
                <?php echo $this->Form->control('complemento', array('class' => 'form-control')); ?>
            </div>

        </div>
        <div class="row">

            <div class="col-md-4">
                <?php echo $this->Form->control('bairro', array('class' => 'form-control')); ?>
            </div>
            <div class="col-md-6">
                <?php echo $this->Form->control('cidade', array('class' => 'form-control')); ?>
            </div>
            <div class="col-md-2">
                <br />
                <?php echo $this->Form->select(
                    'uf',
                    [
                        'AC' => 'Acre',
                        'AL' => 'Alagoas',
                        'AP' => 'Amapá',
                        'AM' => 'Amazonas',
                        'BA' => 'Bahia',
                        'CE' => 'Ceará',
                        'DF' => 'Distrito Federal',
                        'ES' => 'Espírito Santo',
                        'GO' => 'Goiás',
                        'MA' => 'Maranhão',
                        'MT' => 'Mato Grosso',
                        'MS' => 'Mato Grosso do Sul',
                        'MG' => 'minas Gerias',
                        'PA' => 'Pará',
                        'PB' => 'Paraíba',
                        'PR' => 'Paraná',
                        'PE' => 'Pernambuco ',
                        'PI' => 'Piauí',
                        'RJ' => 'Rio de Janeiro',
                        'RN' => 'Rio Grande do Norte',
                        'RS' => 'Rio Grande do Sul',
                        'RO' => 'Rondônia',
                        'RR' => 'Roraima',
                        'SC' => 'Santa Catarina',
                        'SP' => 'SP',
                        'SE' => 'Sergipe',
                        'TO' => 'Tocantins'
                    ],

                    array('class' => 'form-select', 'empty' => 'UF', 'id' => 'uf')

                ); ?>
            </div>

        </div>

    </fieldset>
    <?= $this->Form->button(__('Editar'), array('class' => 'btn btn-success mt-1')) ?>
    <?= $this->Form->end() ?>
</div>
<?php echo $this->Html->script('jquery.js'); ?>

<?php echo $this->Html->script('clientes.js'); ?>