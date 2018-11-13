<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Coordonator $coordonator
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Coordonator'), ['action' => 'edit', $coordonator->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Coordonator'), ['action' => 'delete', $coordonator->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coordonator->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Coordonator'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Coordonator'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="coordonator view large-9 medium-8 columns content">
    <h3><?= h($coordonator->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($coordonator->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($coordonator->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($coordonator->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Place') ?></th>
            <td><?= h($coordonator->place) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($coordonator->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Province') ?></th>
            <td><?= h($coordonator->province) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($coordonator->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($coordonator->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Job') ?></th>
            <td><?= h($coordonator->job) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fax') ?></th>
            <td><?= h($coordonator->fax) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($coordonator->id) ?></td>
        </tr>
    </table>
</div>
