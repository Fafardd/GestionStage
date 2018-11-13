<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InternshipsStudent $internshipsStudent
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $internshipsStudent->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $internshipsStudent->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Internships Students'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Internships'), ['controller' => 'Internships', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Internship'), ['controller' => 'Internships', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="internshipsStudents form large-9 medium-8 columns content">
    <?= $this->Form->create($internshipsStudent) ?>
    <fieldset>
        <legend><?= __('Edit Internships Student') ?></legend>
        <?php
            echo $this->Form->control('internship_id', ['options' => $internships]);
            echo $this->Form->control('student_id', ['options' => $students]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
