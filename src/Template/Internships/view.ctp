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
        <li><?= $this->Html->link(__('List Internships Customerbases'), ['controller' => 'InternshipsCustomerbases', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Internships Customerbase'), ['controller' => 'InternshipsCustomerbases', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Internships Environments'), ['controller' => 'InternshipsEnvironments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Internships Environment'), ['controller' => 'InternshipsEnvironments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Internships Students'), ['controller' => 'InternshipsStudents', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Internships Student'), ['controller' => 'InternshipsStudents', 'action' => 'add']) ?> </li>
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
	<?php $loggeduser = $this->request->getSession()->read('Auth.User');
                        if ($loggeduser['category'] == 1 ||$loggeduser['category'] == 3) { ?>
	<?= $this->Form->create('Postuler', ['type' => 'GET', 'url' => ['controller' => 'InternshipsStudents', 'action'=> 'postuler', $internship->id]])  ?>
    <?= $this->Form->button('Postuler')  ?>
    <?= $this->Form->end();  }?>
	
    <div class="related">
        <h4><?= __('Related Internships Customerbases') ?></h4>
        <?php if (!empty($internship->internships_customerbases)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Internship Id') ?></th>
                <th scope="col"><?= __('Customerbase Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($internship->internships_customerbases as $internshipsCustomerbases): ?>
            <tr>
                <td><?= h($internshipsCustomerbases->id) ?></td>
                <td><?= h($internshipsCustomerbases->internship_id) ?></td>
                <td><?= h($internshipsCustomerbases->customerbase_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'InternshipsCustomerbases', 'action' => 'view', $internshipsCustomerbases->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'InternshipsCustomerbases', 'action' => 'edit', $internshipsCustomerbases->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'InternshipsCustomerbases', 'action' => 'delete', $internshipsCustomerbases->id], ['confirm' => __('Are you sure you want to delete # {0}?', $internshipsCustomerbases->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Internships Environments') ?></h4>
        <?php if (!empty($internship->internships_environments)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Internship Id') ?></th>
                <th scope="col"><?= __('Environment Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($internship->internships_environments as $internshipsEnvironments): ?>
            <tr>
                <td><?= h($internshipsEnvironments->id) ?></td>
                <td><?= h($internshipsEnvironments->internship_id) ?></td>
                <td><?= h($internshipsEnvironments->environment_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'InternshipsEnvironments', 'action' => 'view', $internshipsEnvironments->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'InternshipsEnvironments', 'action' => 'edit', $internshipsEnvironments->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'InternshipsEnvironments', 'action' => 'delete', $internshipsEnvironments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $internshipsEnvironments->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Internships Students') ?></h4>
        <?php if (!empty($internship->internships_students)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Internship Id') ?></th>
                <th scope="col"><?= __('Student Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($internship->internships_students as $internshipsStudents): ?>
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
