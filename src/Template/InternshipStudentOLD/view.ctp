<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InternshipStudent $internshipStudent
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Internship Student'), ['action' => 'edit', $internshipStudent->student_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Internship Student'), ['action' => 'delete', $internshipStudent->student_id], ['confirm' => __('Are you sure you want to delete # {0}?', $internshipStudent->student_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Internship Student'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Internship Student'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Internships'), ['controller' => 'Internships', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Internship'), ['controller' => 'Internships', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="internshipStudent view large-9 medium-8 columns content">
    <h3><?= h($internshipStudent->student_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Internship') ?></th>
            <td><?= $internshipStudent->has('internship') ? $this->Html->link($internshipStudent->internship->title, ['controller' => 'Internships', 'action' => 'view', $internshipStudent->internship->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Student') ?></th>
            <td><?= $internshipStudent->has('student') ? $this->Html->link($internshipStudent->student->name, ['controller' => 'Students', 'action' => 'view', $internshipStudent->student->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($internshipStudent->id) ?></td>
        </tr>
    </table>
</div>
