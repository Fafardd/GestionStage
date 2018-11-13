<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Company $company
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Company'), ['action' => 'edit', $company->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Company'), ['action' => 'delete', $company->id], ['confirm' => __('Are you sure you want to delete # {0}?', $company->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Company'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Internship'), ['controller' => 'Internship', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Internship'), ['controller' => 'Internship', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="company view large-9 medium-8 columns content">
    <h3><?= h($company->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($company->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($company->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($company->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Province') ?></th>
            <td><?= h($company->province) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Postal Code') ?></th>
            <td><?= h($company->postal_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Administrative Region') ?></th>
            <td><?= h($company->administrative_region) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($company->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($company->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($company->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $this->Number->format($company->active) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Internship') ?></h4>
        <?php if (!empty($company->internship)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Period') ?></th>
                <th scope="col"><?= __('Date Start') ?></th>
                <th scope="col"><?= __('Date End') ?></th>
                <th scope="col"><?= __('Hours') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Stage Details') ?></th>
                <th scope="col"><?= __('Active') ?></th>
                <th scope="col"><?= __('Company Id') ?></th>
                <th scope="col"><?= __('Type') ?></th>
                <th scope="col"><?= __('Customer Base') ?></th>
                <th scope="col"><?= __('Environment') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($company->internship as $internship): ?>
            <tr>
                <td><?= h($internship->id) ?></td>
                <td><?= h($internship->period) ?></td>
                <td><?= h($internship->date_start) ?></td>
                <td><?= h($internship->date_end) ?></td>
                <td><?= h($internship->hours) ?></td>
                <td><?= h($internship->title) ?></td>
                <td><?= h($internship->stage_details) ?></td>
                <td><?= h($internship->active) ?></td>
                <td><?= h($internship->company_id) ?></td>
                <td><?= h($internship->type) ?></td>
                <td><?= h($internship->customer_base) ?></td>
                <td><?= h($internship->environment) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Internship', 'action' => 'view', $internship->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Internship', 'action' => 'edit', $internship->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Internship', 'action' => 'delete', $internship->id], ['confirm' => __('Are you sure you want to delete # {0}?', $internship->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
