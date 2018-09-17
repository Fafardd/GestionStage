<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Internship[]|\Cake\Collection\CollectionInterface $internship
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Internship'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Company'), ['controller' => 'Company', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Company', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Type'), ['controller' => 'Type', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Type', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customerbase'), ['controller' => 'Customerbase', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customerbase'), ['controller' => 'Customerbase', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Environment'), ['controller' => 'Environment', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Environment'), ['controller' => 'Environment', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Student'), ['controller' => 'Student', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Student', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="internship index large-9 medium-8 columns content">
    <h3><?= __('Internship') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('period') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_end') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hours') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('stage_details') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('customerbase_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('environment_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($internship as $internship): ?>
            <tr>
                <td><?= $this->Number->format($internship->id) ?></td>
                <td><?= h($internship->period) ?></td>
                <td><?= h($internship->date_start) ?></td>
                <td><?= h($internship->date_end) ?></td>
                <td><?= $this->Number->format($internship->hours) ?></td>
                <td><?= h($internship->title) ?></td>
                <td><?= h($internship->stage_details) ?></td>
                <td><?= $this->Number->format($internship->active) ?></td>
                <td><?= $internship->has('company') ? $this->Html->link($internship->company->name, ['controller' => 'Company', 'action' => 'view', $internship->company->id]) : '' ?></td>
                <td><?= $internship->has('type') ? $this->Html->link($internship->type->name, ['controller' => 'Type', 'action' => 'view', $internship->type->id]) : '' ?></td>
                <td><?= $internship->has('customerbase') ? $this->Html->link($internship->customerbase->name, ['controller' => 'Customerbase', 'action' => 'view', $internship->customerbase->id]) : '' ?></td>
                <td><?= $internship->has('environment') ? $this->Html->link($internship->environment->name, ['controller' => 'Environment', 'action' => 'view', $internship->environment->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $internship->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $internship->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $internship->id], ['confirm' => __('Are you sure you want to delete # {0}?', $internship->id)]) ?>
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
