<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Internship $internship
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Internship'), ['action' => 'edit', $internship->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Internship'), ['action' => 'delete', $internship->id], ['confirm' => __('Are you sure you want to delete # {0}?', $internship->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Internships'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Internship'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Internship Customerbase'), ['controller' => 'InternshipCustomerbase', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Internship Customerbase'), ['controller' => 'InternshipCustomerbase', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Internship Environment'), ['controller' => 'InternshipEnvironment', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Internship Environment'), ['controller' => 'InternshipEnvironment', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Internship Student'), ['controller' => 'InternshipStudent', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Internship Student'), ['controller' => 'InternshipStudent', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="internships view large-9 medium-8 columns content">
    <h3><?= h($internship->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Period') ?></th>
            <td><?= h($internship->period) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($internship->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Stage Details') ?></th>
            <td><?= h($internship->stage_details) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company') ?></th>
            <td><?= $internship->has('company') ? $this->Html->link($internship->company->name, ['controller' => 'Companies', 'action' => 'view', $internship->company->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= $internship->has('type') ? $this->Html->link($internship->type->name, ['controller' => 'Types', 'action' => 'view', $internship->type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($internship->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hours') ?></th>
            <td><?= $this->Number->format($internship->hours) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $this->Number->format($internship->active) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Start') ?></th>
            <td><?= h($internship->date_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date End') ?></th>
            <td><?= h($internship->date_end) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Internship Customerbase') ?></h4>
        <?php if (!empty($internship->internship_customerbase)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Internship Id') ?></th>
                <th scope="col"><?= __('Customerbase Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($internship->internship_customerbase as $internshipCustomerbase): ?>
            <tr>
                <td><?= h($internshipCustomerbase->id) ?></td>
                <td><?= h($internshipCustomerbase->internship_id) ?></td>
                <td><?= h($internshipCustomerbase->customerbase_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'InternshipCustomerbase', 'action' => 'view', $internshipCustomerbase->internship_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'InternshipCustomerbase', 'action' => 'edit', $internshipCustomerbase->internship_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'InternshipCustomerbase', 'action' => 'delete', $internshipCustomerbase->internship_id], ['confirm' => __('Are you sure you want to delete # {0}?', $internshipCustomerbase->internship_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Internship Environment') ?></h4>
        <?php if (!empty($internship->internship_environment)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Internship Id') ?></th>
                <th scope="col"><?= __('Environment Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($internship->internship_environment as $internshipEnvironment): ?>
            <tr>
                <td><?= h($internshipEnvironment->id) ?></td>
                <td><?= h($internshipEnvironment->internship_id) ?></td>
                <td><?= h($internshipEnvironment->environment_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'InternshipEnvironment', 'action' => 'view', $internshipEnvironment->internship_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'InternshipEnvironment', 'action' => 'edit', $internshipEnvironment->internship_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'InternshipEnvironment', 'action' => 'delete', $internshipEnvironment->internship_id], ['confirm' => __('Are you sure you want to delete # {0}?', $internshipEnvironment->internship_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Internship Student') ?></h4>
        <?php if (!empty($internship->internship_student)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Internship Id') ?></th>
                <th scope="col"><?= __('Student Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($internship->internship_student as $internshipStudent): ?>
            <tr>
                <td><?= h($internshipStudent->id) ?></td>
                <td><?= h($internshipStudent->internship_id) ?></td>
                <td><?= h($internshipStudent->student_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'InternshipStudent', 'action' => 'view', $internshipStudent->student_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'InternshipStudent', 'action' => 'edit', $internshipStudent->student_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'InternshipStudent', 'action' => 'delete', $internshipStudent->student_id], ['confirm' => __('Are you sure you want to delete # {0}?', $internshipStudent->student_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
