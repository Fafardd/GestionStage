<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Internship $internship
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Internships'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Internship Customerbase'), ['controller' => 'InternshipCustomerbase', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Internship Customerbase'), ['controller' => 'InternshipCustomerbase', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Internship Environment'), ['controller' => 'InternshipEnvironment', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Internship Environment'), ['controller' => 'InternshipEnvironment', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Internship Student'), ['controller' => 'InternshipStudent', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Internship Student'), ['controller' => 'InternshipStudent', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="internships form large-9 medium-8 columns content">
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
            echo $this->Form->control('company_id', ['options' => $companies]);
            echo $this->Form->control('type_id', ['options' => $types]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
