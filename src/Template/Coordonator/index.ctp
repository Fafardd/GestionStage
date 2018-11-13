<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Coordonator[]|\Cake\Collection\CollectionInterface $coordonator
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Coordonator'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="coordonator index large-9 medium-8 columns content">
    <h3><?= __('Coordonator') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('first_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('place') ?></th>
                <th scope="col"><?= $this->Paginator->sort('city') ?></th>
                <th scope="col"><?= $this->Paginator->sort('province') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('job') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fax') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($coordonator as $coordonator): ?>
            <tr>
                <td><?= $this->Number->format($coordonator->id) ?></td>
                <td><?= h($coordonator->name) ?></td>
                <td><?= h($coordonator->first_name) ?></td>
                <td><?= h($coordonator->title) ?></td>
                <td><?= h($coordonator->place) ?></td>
                <td><?= h($coordonator->city) ?></td>
                <td><?= h($coordonator->province) ?></td>
                <td><?= h($coordonator->email) ?></td>
                <td><?= h($coordonator->phone) ?></td>
                <td><?= h($coordonator->job) ?></td>
                <td><?= h($coordonator->fax) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $coordonator->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $coordonator->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $coordonator->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coordonator->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
