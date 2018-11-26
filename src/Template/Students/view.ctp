<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student $student
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Student'), ['action' => 'edit', $student->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Student'), ['action' => 'delete', $student->id], ['confirm' => __('Are you sure you want to delete # {0}?', $student->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Students'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Student'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Internships Students'), ['controller' => 'InternshipsStudents', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Internships Student'), ['controller' => 'InternshipsStudents', 'action' => 'add']) ?> </li>
		<li><?= $this->Html->link(__('List Files'), ['controller' => 'Files', 'action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="students view large-9 medium-8 columns content">
    <h3><?= h($student->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($student->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($student->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($student->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($student->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Other Details') ?></th>
            <td><?= h($student->other_details) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Notes') ?></th>
            <td><?= h($student->notes) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $student->has('user') ? $this->Html->link($student->user->email, ['controller' => 'Users', 'action' => 'view', $student->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($student->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Internships Students') ?></h4>
        <?php if (!empty($student->internships_students)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Internship Id') ?></th>
                <th scope="col"><?= __('Student Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($student->internships_students as $internshipsStudents): ?>
            <tr>
                <td><?= h($internshipsStudents->id) ?></td>
                <td><?= h($internshipsStudents->internship_id) ?></td>
                <td><?= h($internshipsStudents->student_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'InternshipsStudents', 'action' => 'view', $internshipsStudents->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'InternshipsStudents', 'action' => 'edit', $internshipsStudents->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'InternshipsStudents', 'action' => 'delete', $internshipsStudents->id], ['confirm' => __('Are you sure you want to delete # {0}?', $internshipsStudents->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
