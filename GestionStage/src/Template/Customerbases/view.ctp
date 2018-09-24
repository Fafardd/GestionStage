<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customerbase $customerbase
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Customerbase'), ['action' => 'edit', $customerbase->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Customerbase'), ['action' => 'delete', $customerbase->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customerbase->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Customerbases'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customerbase'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Internship Customerbase'), ['controller' => 'InternshipCustomerbase', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Internship Customerbase'), ['controller' => 'InternshipCustomerbase', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="customerbases view large-9 medium-8 columns content">
    <h3><?= h($customerbase->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($customerbase->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($customerbase->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Internship Customerbase') ?></h4>
        <?php if (!empty($customerbase->internship_customerbase)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Internship Id') ?></th>
                <th scope="col"><?= __('Customerbase Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($customerbase->internship_customerbase as $internshipCustomerbase): ?>
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
</div>
