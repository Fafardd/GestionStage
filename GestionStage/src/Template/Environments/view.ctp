<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Environment $environment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Environment'), ['action' => 'edit', $environment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Environment'), ['action' => 'delete', $environment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $environment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Environments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Environment'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Internships'), ['controller' => 'Internships', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Internship'), ['controller' => 'Internships', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="environments view large-9 medium-8 columns content">
    <h3><?= h($environment->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($environment->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($environment->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Internships') ?></h4>
        <?php if (!empty($environment->internships)): ?>
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
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($environment->internships as $internships): ?>
            <tr>
                <td><?= h($internships->id) ?></td>
                <td><?= h($internships->period) ?></td>
                <td><?= h($internships->date_start) ?></td>
                <td><?= h($internships->date_end) ?></td>
                <td><?= h($internships->hours) ?></td>
                <td><?= h($internships->title) ?></td>
                <td><?= h($internships->stage_details) ?></td>
                <td><?= h($internships->active) ?></td>
                <td><?= h($internships->company_id) ?></td>
                <td><?= h($internships->type_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Internships', 'action' => 'view', $internships->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Internships', 'action' => 'edit', $internships->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Internships', 'action' => 'delete', $internships->id], ['confirm' => __('Are you sure you want to delete # {0}?', $internships->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
