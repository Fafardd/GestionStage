<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InternshipEnvironment[]|\Cake\Collection\CollectionInterface $internshipEnvironment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Internship Environment'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Internships'), ['controller' => 'Internships', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Internship'), ['controller' => 'Internships', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Environments'), ['controller' => 'Environments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Environment'), ['controller' => 'Environments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="internshipEnvironment index large-9 medium-8 columns content">
    <h3><?= __('Internship Environment') ?></h3>
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
            <?php foreach ($internshipEnvironment as $internshipEnvironment): ?>
            <tr>
                <td><?= $this->Number->format($internshipEnvironment->id) ?></td>
                <td><?= $internshipEnvironment->has('internship') ? $this->Html->link($internshipEnvironment->internship->title, ['controller' => 'Internships', 'action' => 'view', $internshipEnvironment->internship->id]) : '' ?></td>
                <td><?= $internshipEnvironment->has('environment') ? $this->Html->link($internshipEnvironment->environment->name, ['controller' => 'Environments', 'action' => 'view', $internshipEnvironment->environment->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $internshipEnvironment->internship_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $internshipEnvironment->internship_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $internshipEnvironment->internship_id], ['confirm' => __('Are you sure you want to delete # {0}?', $internshipEnvironment->internship_id)]) ?>
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
