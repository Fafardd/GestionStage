<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InternshipCustomerbase[]|\Cake\Collection\CollectionInterface $internshipCustomerbase
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Internship Customerbase'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Internships'), ['controller' => 'Internships', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Internship'), ['controller' => 'Internships', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Customerbases'), ['controller' => 'Customerbases', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customerbase'), ['controller' => 'Customerbases', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="internshipCustomerbase index large-9 medium-8 columns content">
    <h3><?= __('Internship Customerbase') ?></h3>
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
            <?php foreach ($internshipCustomerbase as $internshipCustomerbase): ?>
            <tr>
                <td><?= $this->Number->format($internshipCustomerbase->id) ?></td>
                <td><?= $internshipCustomerbase->has('internship') ? $this->Html->link($internshipCustomerbase->internship->title, ['controller' => 'Internships', 'action' => 'view', $internshipCustomerbase->internship->id]) : '' ?></td>
                <td><?= $internshipCustomerbase->has('customerbase') ? $this->Html->link($internshipCustomerbase->customerbase->name, ['controller' => 'Customerbases', 'action' => 'view', $internshipCustomerbase->customerbase->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $internshipCustomerbase->internship_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $internshipCustomerbase->internship_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $internshipCustomerbase->internship_id], ['confirm' => __('Are you sure you want to delete # {0}?', $internshipCustomerbase->internship_id)]) ?>
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
