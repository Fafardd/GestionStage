<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Internship $internship
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Internship'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Company'), ['controller' => 'Company', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Company', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Student'), ['controller' => 'Student', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Student', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="internship form large-9 medium-8 columns content">
    <?= $this->Form->create($internship) ?>
    <fieldset>
        <legend><?= __('Add Internship') ?></legend>
        <?php
            echo $this->Form->control('period');
            echo $this->Form->control('date_start');
            echo $this->Form->control('date_end');
            echo $this->Form->control('hours');
            echo $this->Form->control('title');
            echo $this->Form->control('stage_details');
			echo "Active : ";
            echo $this->Form->checkbox('active', ['required' => false]);
            echo $this->Form->control('company_id', ['options' => $company]);
            echo $this->Form->control('type');
            echo $this->Form->control('customer_base');
            echo $this->Form->control('environment');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
