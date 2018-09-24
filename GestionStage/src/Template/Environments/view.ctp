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
        <li><?= $this->Html->link(__('List Internship Environment'), ['controller' => 'InternshipEnvironment', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Internship Environment'), ['controller' => 'InternshipEnvironment', 'action' => 'add']) ?> </li>
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
        <h4><?= __('Related Internship Environment') ?></h4>
        <?php if (!empty($environment->internship_environment)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Internship Id') ?></th>
                <th scope="col"><?= __('Environment Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($environment->internship_environment as $internshipEnvironment): ?>
            <tr>
                <td><?= h($internshipEnvironment->id) ?></td>
                <td><?= h($internshipEnvironment->internship_id) ?></td>
                <td><?= h($internshipEnvironment->environment_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'InternshipEnvironment', 'action' => 'view', $internshipEnvironment->internship_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'InternshipEnvironment', 'action' => 'edit', $internshipEnvironment->internship_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'InternshipEnvironment', 'action' => 'delete', $internshipEnvironment->internship_id], ['confirm' => __('Are you sure you want to delete # {0}?', $internshipEnvironment->internship_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
