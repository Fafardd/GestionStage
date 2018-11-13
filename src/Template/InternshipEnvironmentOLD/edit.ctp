<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InternshipEnvironment $internshipEnvironment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $internshipEnvironment->internship_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $internshipEnvironment->internship_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Internship Environment'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Internships'), ['controller' => 'Internships', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Internship'), ['controller' => 'Internships', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Environments'), ['controller' => 'Environments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Environment'), ['controller' => 'Environments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="internshipEnvironment form large-9 medium-8 columns content">
    <?= $this->Form->create($internshipEnvironment) ?>
    <fieldset>
        <legend><?= __('Edit Internship Environment') ?></legend>
        <?php
            echo $this->Form->control('id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
