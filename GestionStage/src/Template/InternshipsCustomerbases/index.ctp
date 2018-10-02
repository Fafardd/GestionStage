<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InternshipsCustomerbase[]|\Cake\Collection\CollectionInterface $internshipsCustomerbases
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Internships Customerbase'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Internships'), ['controller' => 'Internships', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Internship'), ['controller' => 'Internships', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customerbases'), ['controller' => 'Customerbases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customerbase'), ['controller' => 'Customerbases', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="internshipsCustomerbases index large-9 medium-8 columns content">
    <h3><?= __('Internships Customerbases') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('internship_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('customerbase_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($internshipsCustomerbases as $internshipsCustomerbase): ?>
            <tr>
                <td><?= $this->Number->format($internshipsCustomerbase->id) ?></td>
                <td><?= $internshipsCustomerbase->has('internship') ? $this->Html->link($internshipsCustomerbase->internship->title, ['controller' => 'Internships', 'action' => 'view', $internshipsCustomerbase->internship->id]) : '' ?></td>
                <td><?= $internshipsCustomerbase->has('customerbase') ? $this->Html->link($internshipsCustomerbase->customerbase->name, ['controller' => 'Customerbases', 'action' => 'view', $internshipsCustomerbase->customerbase->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $internshipsCustomerbase->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $internshipsCustomerbase->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $internshipsCustomerbase->id], ['confirm' => __('Are you sure you want to delete # {0}?', $internshipsCustomerbase->id)]) ?>
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
