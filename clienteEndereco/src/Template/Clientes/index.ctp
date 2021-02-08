<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente[]|\Cake\Collection\CollectionInterface $clientes
 */
?>
<style>
    th a {
        color: black;
        text-decoration: none;
    }

    table tbody {
        font-family: 'Roboto', sans-serif;
        font-weight: 600;
    }
</style>
<nav class="large-2 medium-4 columns" id="actions-sidebar">


    <?= $this->Html->link(__('Novo Cliente'), ['action' => 'add'], array('class' => 'btn btn-success btn-sm m-1', 'style' => 'float:right')) ?>

</nav>

<h3><?= __('Clientes') ?></h3>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
            <th scope="col"><?= $this->Paginator->sort('email', 'e-mail') ?></th>
            <th scope="col"><?= $this->Paginator->sort('telefone', 'Telefone') ?></th>
            <th scope="col"><?= $this->Paginator->sort('cep') ?></th>
            <th scope="col"><?= $this->Paginator->sort('logradouro') ?></th>
            <th scope="col"><?= $this->Paginator->sort('numero', 'N°') ?></th>
            <th scope="col"><?= $this->Paginator->sort('cidade') ?></th>
            <th scope="col"><?= $this->Paginator->sort('uf') ?></th>

            <th scope="col" class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($clientes as $cliente) : ?>
            <tr>

                <td><?= h($cliente->nome) ?></td>
                <td><?= h($cliente->email) ?></td>
                <td><?= h($cliente->telefone) ?></td>
                <td><?= h($cliente->cep) ?></td>
                <td><?= h($cliente->logradouro) ?></td>
                <td><?= h($cliente->numero) ?></td>
                <td><?= h($cliente->cidade) ?></td>
                <td><?= h($cliente->uf) ?></td>

                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $cliente->id], array('class' => 'btn btn-success btn-sm m-1')) ?>

                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $cliente->id], array('class' => 'btn btn-info btn-sm m-1')) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $cliente->id], array('class' => 'btn btn-danger btn-sm m-1', 'confirm' => __('Tem certeza que deseja deletar o Cliente - {0}?', $cliente->nome))) ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div class="paginator text-center">
    <ul class="pagination">
        <?= $this->Paginator->first('<< ' . __('primeira')) ?>
        <?= $this->Paginator->prev('< ' . __('última')) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next(__('proxima') . ' >') ?>
        <?= $this->Paginator->last(__('anterior') . ' >>') ?>
    </ul>
    <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, {{current}} resultados - {{count}} no total')]) ?></p>
</div>