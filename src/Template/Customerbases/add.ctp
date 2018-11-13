<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customerbase $customerbase
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Customerbases'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Internships'), ['controller' => 'Internships', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Internship'), ['controller' => 'Internships', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="customerbases form large-9 medium-8 columns content">
    <?= $this->Form->create($customerbase) ?>
    <fieldset>
        <legend><?= __('Add Customerbase') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('internships._ids', ['options' => $internships]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
