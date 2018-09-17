<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customerbase $customerbase
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Customerbase'), ['action' => 'edit', $customerbase->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Customerbase'), ['action' => 'delete', $customerbase->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customerbase->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Customerbase'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customerbase'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Internship'), ['controller' => 'Internship', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Internship'), ['controller' => 'Internship', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="customerbase view large-9 medium-8 columns content">
    <h3><?= h($customerbase->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($customerbase->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($customerbase->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Internship') ?></h4>
        <?php if (!empty($customerbase->internship)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Period') ?></th>
                <th scope="col"><?= __('Date Start') ?></th>
                <th scope="col"><?= __('Date End') ?></th>
                <th scope="col"><?= __('Hours') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Stage Details') ?></th>
                <th scope="col"><?= __('Active') ?></th>
                <th scope="col"><?= __('Company Id') ?></th>
                <th scope="col"><?= __('Type Id') ?></th>
                <th scope="col"><?= __('Customerbase Id') ?></th>
                <th scope="col"><?= __('Environment Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($customerbase->internship as $internship): ?>
            <tr>
                <td><?= h($internship->id) ?></td>
                <td><?= h($internship->period) ?></td>
                <td><?= h($internship->date_start) ?></td>
                <td><?= h($internship->date_end) ?></td>
                <td><?= h($internship->hours) ?></td>
                <td><?= h($internship->title) ?></td>
                <td><?= h($internship->stage_details) ?></td>
                <td><?= h($internship->active) ?></td>
                <td><?= h($internship->company_id) ?></td>
                <td><?= h($internship->type_id) ?></td>
                <td><?= h($internship->customerbase_id) ?></td>
                <td><?= h($internship->environment_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Internship', 'action' => 'view', $internship->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Internship', 'action' => 'edit', $internship->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Internship', 'action' => 'delete', $internship->id], ['confirm' => __('Are you sure you want to delete # {0}?', $internship->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
