<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InternshipsEnvironment[]|\Cake\Collection\CollectionInterface $internshipsEnvironments
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Internships Environment'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Internships'), ['controller' => 'Internships', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Internship'), ['controller' => 'Internships', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Environments'), ['controller' => 'Environments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Environment'), ['controller' => 'Environments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="internshipsEnvironments index large-9 medium-8 columns content">
    <h3><?= __('Internships Environments') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('internship_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('environment_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($internshipsEnvironments as $internshipsEnvironment): ?>
            <tr>
                <td><?= $this->Number->format($internshipsEnvironment->id) ?></td>
                <td><?= $internshipsEnvironment->has('internship') ? $this->Html->link($internshipsEnvironment->internship->title, ['controller' => 'Internships', 'action' => 'view', $internshipsEnvironment->internship->id]) : '' ?></td>
                <td><?= $internshipsEnvironment->has('environment') ? $this->Html->link($internshipsEnvironment->environment->name, ['controller' => 'Environments', 'action' => 'view', $internshipsEnvironment->environment->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $internshipsEnvironment->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $internshipsEnvironment->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $internshipsEnvironment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $internshipsEnvironment->id)]) ?>
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
