<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Coordonator $coordonator
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $coordonator->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $coordonator->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Coordonators'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="coordonators form large-9 medium-8 columns content">
    <?= $this->Form->create($coordonator) ?>
    <fieldset>
        <legend><?= __('Edit Coordonator') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('first_name');
            echo $this->Form->control('title');
            echo $this->Form->control('place');
            echo $this->Form->control('city');
            echo $this->Form->control('province');
            echo $this->Form->control('email');
            echo $this->Form->control('phone');
            echo $this->Form->control('job');
            echo $this->Form->control('fax');
            echo $this->Form->control('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
