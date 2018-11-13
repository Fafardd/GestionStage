<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Coordonators'), ['controller' => 'Coordonators', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Coordonator'), ['controller' => 'Coordonators', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->email) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= $this->Number->format($user->category) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Companies') ?></h4>
        <?php if (!empty($user->companies)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('City') ?></th>
                <th scope="col"><?= __('Province') ?></th>
                <th scope="col"><?= __('Postal Code') ?></th>
                <th scope="col"><?= __('Administrative Region') ?></th>
                <th scope="col"><?= __('Active') ?></th>
                <th scope="col"><?= __('Phone') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->companies as $companies): ?>
            <tr>
                <td><?= h($companies->id) ?></td>
                <td><?= h($companies->name) ?></td>
                <td><?= h($companies->address) ?></td>
                <td><?= h($companies->city) ?></td>
                <td><?= h($companies->province) ?></td>
                <td><?= h($companies->postal_code) ?></td>
                <td><?= h($companies->administrative_region) ?></td>
                <td><?= h($companies->active) ?></td>
                <td><?= h($companies->phone) ?></td>
                <td><?= h($companies->email) ?></td>
                <td><?= h($companies->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Companies', 'action' => 'view', $companies->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Companies', 'action' => 'edit', $companies->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Companies', 'action' => 'delete', $companies->id], ['confirm' => __('Are you sure you want to delete # {0}?', $companies->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Coordonators') ?></h4>
        <?php if (!empty($user->coordonators)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('First Name') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Place') ?></th>
                <th scope="col"><?= __('City') ?></th>
                <th scope="col"><?= __('Province') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Phone') ?></th>
                <th scope="col"><?= __('Job') ?></th>
                <th scope="col"><?= __('Fax') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->coordonators as $coordonators): ?>
            <tr>
                <td><?= h($coordonators->id) ?></td>
                <td><?= h($coordonators->name) ?></td>
                <td><?= h($coordonators->first_name) ?></td>
                <td><?= h($coordonators->title) ?></td>
                <td><?= h($coordonators->place) ?></td>
                <td><?= h($coordonators->city) ?></td>
                <td><?= h($coordonators->province) ?></td>
                <td><?= h($coordonators->email) ?></td>
                <td><?= h($coordonators->phone) ?></td>
                <td><?= h($coordonators->job) ?></td>
                <td><?= h($coordonators->fax) ?></td>
                <td><?= h($coordonators->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Coordonators', 'action' => 'view', $coordonators->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Coordonators', 'action' => 'edit', $coordonators->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Coordonators', 'action' => 'delete', $coordonators->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coordonators->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Students') ?></h4>
        <?php if (!empty($user->students)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('First Name') ?></th>
                <th scope="col"><?= __('Phone') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Other Details') ?></th>
                <th scope="col"><?= __('Notes') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->students as $students): ?>
            <tr>
                <td><?= h($students->id) ?></td>
                <td><?= h($students->name) ?></td>
                <td><?= h($students->first_name) ?></td>
                <td><?= h($students->phone) ?></td>
                <td><?= h($students->email) ?></td>
                <td><?= h($students->other_details) ?></td>
                <td><?= h($students->notes) ?></td>
                <td><?= h($students->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Students', 'action' => 'view', $students->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Students', 'action' => 'edit', $students->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Students', 'action' => 'delete', $students->id], ['confirm' => __('Are you sure you want to delete # {0}?', $students->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
