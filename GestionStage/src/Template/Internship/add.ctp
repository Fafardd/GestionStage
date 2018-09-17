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
        <li><?= $this->Html->link(__('List Type'), ['controller' => 'Type', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Type', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customerbase'), ['controller' => 'Customerbase', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customerbase'), ['controller' => 'Customerbase', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Environment'), ['controller' => 'Environment', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Environment'), ['controller' => 'Environment', 'action' => 'add']) ?></li>
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
            echo $this->Form->control('active');
            echo $this->Form->control('company_id', ['options' => $company]);
            echo $this->Form->control('type_id', ['options' => $type]);
            echo $this->Form->control('customerbase_id', ['options' => $customerbase]);
            echo $this->Form->control('environment_id', ['options' => $environment]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
