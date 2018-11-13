<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InternshipsEnvironment $internshipsEnvironment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Internships Environment'), ['action' => 'edit', $internshipsEnvironment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Internships Environment'), ['action' => 'delete', $internshipsEnvironment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $internshipsEnvironment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Internships Environments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Internships Environment'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Internships'), ['controller' => 'Internships', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Internship'), ['controller' => 'Internships', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Environments'), ['controller' => 'Environments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Environment'), ['controller' => 'Environments', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="internshipsEnvironments view large-9 medium-8 columns content">
    <h3><?= h($internshipsEnvironment->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Internship') ?></th>
            <td><?= $internshipsEnvironment->has('internship') ? $this->Html->link($internshipsEnvironment->internship->title, ['controller' => 'Internships', 'action' => 'view', $internshipsEnvironment->internship->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Environment') ?></th>
            <td><?= $internshipsEnvironment->has('environment') ? $this->Html->link($internshipsEnvironment->environment->name, ['controller' => 'Environments', 'action' => 'view', $internshipsEnvironment->environment->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($internshipsEnvironment->id) ?></td>
        </tr>
    </table>
</div>
