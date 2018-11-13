<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student $student
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Student'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Internship'), ['controller' => 'Internship', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Internship'), ['controller' => 'Internship', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="student form large-9 medium-8 columns content">
    <?= $this->Form->create($student) ?>
    <fieldset>
        <legend><?= __('Add Student') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('first_name');
            echo $this->Form->control('phone');
            echo $this->Form->control('email');
            echo $this->Form->control('other_details');
            echo $this->Form->control('notes');
            echo $this->Form->control('internship_id', ['options' => $internship]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
