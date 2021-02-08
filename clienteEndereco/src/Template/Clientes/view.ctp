<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">


    <?= $this->Html->link(__('Edit Cliente'), ['action' => 'edit', $cliente->id], array('class' => 'btn btn-info btn-sm m-1')) ?>
    <?= $this->Form->postLink(__('Delete Cliente'), ['action' => 'delete', $cliente->id], array('class' => 'btn btn-danger btn-sm m-1', 'confirm' => __('Tem certeza que deseja deletar o Cliente - {0}?', $cliente->nome))) ?>



</nav>
<div class="clientes view large-9 medium-8 columns content">
    <h3>Nome: <?= h($cliente->nome) ?></h3>
    <table class="table">

        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($cliente->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefone') ?></th>
            <td><?= h($cliente->telefone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cep') ?></th>
            <td><?= h($cliente->cep) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Logradouro') ?></th>
            <td><?= h($cliente->logradouro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero') ?></th>
            <td><?= h($cliente->numero) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Complemento') ?></th>
            <td><?= h($cliente->complemento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bairro') ?></th>
            <td><?= h($cliente->bairro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cidade') ?></th>
            <td><?= h($cliente->cidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Uf') ?></th>
            <td><?= h($cliente->uf) ?></td>
        </tr>


    </table>
</div>