<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customerbase $customerbase
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $customerbase->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $customerbase->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Customerbases'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Internship Customerbase'), ['controller' => 'InternshipCustomerbase', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Internship Customerbase'), ['controller' => 'InternshipCustomerbase', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="customerbases form large-9 medium-8 columns content">
    <?= $this->Form->create($customerbase) ?>
    <fieldset>
        <legend><?= __('Edit Customerbase') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
