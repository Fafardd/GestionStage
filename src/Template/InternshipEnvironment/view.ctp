<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InternshipEnvironment $internshipEnvironment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Internship Environment'), ['action' => 'edit', $internshipEnvironment->internship_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Internship Environment'), ['action' => 'delete', $internshipEnvironment->internship_id], ['confirm' => __('Are you sure you want to delete # {0}?', $internshipEnvironment->internship_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Internship Environment'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Internship Environment'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Internships'), ['controller' => 'Internships', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Internship'), ['controller' => 'Internships', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Environments'), ['controller' => 'Environments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Environment'), ['controller' => 'Environments', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="internshipEnvironment view large-9 medium-8 columns content">
    <h3><?= h($internshipEnvironment->internship_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Internship') ?></th>
            <td><?= $internshipEnvironment->has('internship') ? $this->Html->link($internshipEnvironment->internship->title, ['controller' => 'Internships', 'action' => 'view', $internshipEnvironment->internship->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Environment') ?></th>
            <td><?= $internshipEnvironment->has('environment') ? $this->Html->link($internshipEnvironment->environment->name, ['controller' => 'Environments', 'action' => 'view', $internshipEnvironment->environment->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($internshipEnvironment->id) ?></td>
        </tr>
    </table>
</div>
