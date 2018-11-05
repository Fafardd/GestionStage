<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Internship $internship
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $internship->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $internship->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Internships'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Internships Customerbases'), ['controller' => 'InternshipsCustomerbases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Internships Customerbase'), ['controller' => 'InternshipsCustomerbases', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Internships Environments'), ['controller' => 'InternshipsEnvironments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Internships Environment'), ['controller' => 'InternshipsEnvironments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Internships Students'), ['controller' => 'InternshipsStudents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Internships Student'), ['controller' => 'InternshipsStudents', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="internships form large-9 medium-8 columns content">
    <?= $this->Form->create($internship) ?>
    <fieldset>
        <legend><?= __('Edit Internship') ?></legend>
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
