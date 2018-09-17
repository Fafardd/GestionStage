<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Internship $internship
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Internship'), ['action' => 'edit', $internship->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Internship'), ['action' => 'delete', $internship->id], ['confirm' => __('Are you sure you want to delete # {0}?', $internship->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Internship'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Internship'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Company'), ['controller' => 'Company', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Company', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Type'), ['controller' => 'Type', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Type', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customerbase'), ['controller' => 'Customerbase', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customerbase'), ['controller' => 'Customerbase', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Environment'), ['controller' => 'Environment', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Environment'), ['controller' => 'Environment', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Student'), ['controller' => 'Student', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Student', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="internship view large-9 medium-8 columns content">
    <h3><?= h($internship->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Period') ?></th>
            <td><?= h($internship->period) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($internship->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Stage Details') ?></th>
            <td><?= h($internship->stage_details) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company') ?></th>
            <td><?= $internship->has('company') ? $this->Html->link($internship->company->name, ['controller' => 'Company', 'action' => 'view', $internship->company->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= $internship->has('type') ? $this->Html->link($internship->type->name, ['controller' => 'Type', 'action' => 'view', $internship->type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Customerbase') ?></th>
            <td><?= $internship->has('customerbase') ? $this->Html->link($internship->customerbase->name, ['controller' => 'Customerbase', 'action' => 'view', $internship->customerbase->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Environment') ?></th>
            <td><?= $internship->has('environment') ? $this->Html->link($internship->environment->name, ['controller' => 'Environment', 'action' => 'view', $internship->environment->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($internship->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hours') ?></th>
            <td><?= $this->Number->format($internship->hours) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $this->Number->format($internship->active) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Start') ?></th>
            <td><?= h($internship->date_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date End') ?></th>
            <td><?= h($internship->date_end) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Student') ?></h4>
        <?php if (!empty($internship->student)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('First Name') ?></th>
                <th scope="col"><?= __('Phone') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Other Details') ?></th>
                <th scope="col"><?= __('Notes') ?></th>
                <th scope="col"><?= __('Internship Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($internship->student as $student): ?>
            <tr>
                <td><?= h($student->id) ?></td>
                <td><?= h($student->name) ?></td>
                <td><?= h($student->first_name) ?></td>
                <td><?= h($student->phone) ?></td>
                <td><?= h($student->email) ?></td>
                <td><?= h($student->other_details) ?></td>
                <td><?= h($student->notes) ?></td>
                <td><?= h($student->internship_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Student', 'action' => 'view', $student->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Student', 'action' => 'edit', $student->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Student', 'action' => 'delete', $student->id], ['confirm' => __('Are you sure you want to delete # {0}?', $student->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
