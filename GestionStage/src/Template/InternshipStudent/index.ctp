<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InternshipStudent[]|\Cake\Collection\CollectionInterface $internshipStudent
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Internship Student'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Internships'), ['controller' => 'Internships', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Internship'), ['controller' => 'Internships', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="internshipStudent index large-9 medium-8 columns content">
    <h3><?= __('Internship Student') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('internship_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('student_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($internshipStudent as $internshipStudent): ?>
            <tr>
                <td><?= $this->Number->format($internshipStudent->id) ?></td>
                <td><?= $internshipStudent->has('internship') ? $this->Html->link($internshipStudent->internship->title, ['controller' => 'Internships', 'action' => 'view', $internshipStudent->internship->id]) : '' ?></td>
                <td><?= $internshipStudent->has('student') ? $this->Html->link($internshipStudent->student->name, ['controller' => 'Students', 'action' => 'view', $internshipStudent->student->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $internshipStudent->student_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $internshipStudent->student_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $internshipStudent->student_id], ['confirm' => __('Are you sure you want to delete # {0}?', $internshipStudent->student_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
