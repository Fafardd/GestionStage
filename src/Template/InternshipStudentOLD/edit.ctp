<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InternshipStudent $internshipStudent
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $internshipStudent->student_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $internshipStudent->student_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Internship Student'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Internships'), ['controller' => 'Internships', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Internship'), ['controller' => 'Internships', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="internshipStudent form large-9 medium-8 columns content">
    <?= $this->Form->create($internshipStudent) ?>
    <fieldset>
        <legend><?= __('Edit Internship Student') ?></legend>
        <?php
            echo $this->Form->control('id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
