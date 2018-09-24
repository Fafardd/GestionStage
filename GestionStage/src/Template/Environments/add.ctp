<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Environment $environment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Environments'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Internship Environment'), ['controller' => 'InternshipEnvironment', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Internship Environment'), ['controller' => 'InternshipEnvironment', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="environments form large-9 medium-8 columns content">
    <?= $this->Form->create($environment) ?>
    <fieldset>
        <legend><?= __('Add Environment') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
