<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InternshipsCustomerbase $internshipsCustomerbase
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Internships Customerbase'), ['action' => 'edit', $internshipsCustomerbase->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Internships Customerbase'), ['action' => 'delete', $internshipsCustomerbase->id], ['confirm' => __('Are you sure you want to delete # {0}?', $internshipsCustomerbase->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Internships Customerbases'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Internships Customerbase'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Internships'), ['controller' => 'Internships', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Internship'), ['controller' => 'Internships', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customerbases'), ['controller' => 'Customerbases', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customerbase'), ['controller' => 'Customerbases', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="internshipsCustomerbases view large-9 medium-8 columns content">
    <h3><?= h($internshipsCustomerbase->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Internship') ?></th>
            <td><?= $internshipsCustomerbase->has('internship') ? $this->Html->link($internshipsCustomerbase->internship->title, ['controller' => 'Internships', 'action' => 'view', $internshipsCustomerbase->internship->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Customerbase') ?></th>
            <td><?= $internshipsCustomerbase->has('customerbase') ? $this->Html->link($internshipsCustomerbase->customerbase->name, ['controller' => 'Customerbases', 'action' => 'view', $internshipsCustomerbase->customerbase->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($internshipsCustomerbase->id) ?></td>
        </tr>
    </table>
</div>
