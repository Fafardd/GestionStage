<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InternshipsEnvironment $internshipsEnvironment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Internships Environments'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Internships'), ['controller' => 'Internships', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Internship'), ['controller' => 'Internships', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Environments'), ['controller' => 'Environments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Environment'), ['controller' => 'Environments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="internshipsEnvironments form large-9 medium-8 columns content">
    <?= $this->Form->create($internshipsEnvironment) ?>
    <fieldset>
        <legend><?= __('Add Internships Environment') ?></legend>
        <?php
            echo $this->Form->control('internship_id', ['options' => $internships]);
            echo $this->Form->control('environment_id', ['options' => $environments]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
